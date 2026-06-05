#!/usr/bin/env python3
"""State for the striking-distance loop. The ledger.json it manages is the single
source of truth for what's been tried. Commit it; its git history is the audit trail.

Subcommands: init, add-candidates, next, start, log-attempt, matured,
record-review, status, show.  Run `ledger.py <cmd> -h` for each.
"""
import argparse, json, os, sys
from collections import Counter
from datetime import date, datetime
from urllib.parse import urlparse

HERE = os.path.dirname(os.path.abspath(__file__))
LEDGER = os.path.join(HERE, "..", "ledger.json")

DEFAULT_CONFIG = {
    "ahrefs_project_id": 9352401,
    "site": "youform.com",
    "repo_path": ".",
    "source_glob": "source/**/*.blade.php",
    "DO_NOT_EDIT_glob": "build_production/**",
    "maturation_days": 28,
    "min_impressions_review": 100,
    "max_concurrent_experiments": 3,
    "discover_min_position": 10,
    "discover_min_impressions_3mo": 50,
    "control_pages": [
        "https://youform.com/templates/c/forms/quote/",
        "https://youform.com/free-tools/nps-calculator/",
        "https://youform.com/online-form-builder/",
    ],
}
ACTIVE = {"in_progress", "measuring", "won", "lost", "inconclusive"}


def _load():
    if not os.path.exists(LEDGER):
        return {"config": dict(DEFAULT_CONFIG), "candidates": []}
    return json.load(open(LEDGER))


def _save(d):
    json.dump(d, open(LEDGER, "w"), indent=2)


def _find(d, page):
    for c in d["candidates"]:
        if c["page"] == page:
            return c
    return None


def _today():
    return date.today().isoformat()


def _days_since(iso):
    try:
        d0 = datetime.fromisoformat(iso).date()
    except Exception:
        return 9999
    return (date.today() - d0).days


def _repo_root(cfg):
    """Best-effort repo root: honor config.repo_path relative to CWD, else walk up
    from this script until a dir containing source/ is found."""
    cand = os.path.abspath(cfg.get("repo_path", "."))
    if os.path.isdir(os.path.join(cand, "source")):
        return cand
    p = HERE
    for _ in range(8):
        p = os.path.dirname(p)
        if os.path.isdir(os.path.join(p, "source")):
            return p
    return cand


def _edit_target(page, cfg):
    """Where to edit to affect this URL.

    The /templates/* pages are NOT per-page files: they are Jigsaw collections
    rendered from the YouForm API (see config.php — /api/templates, /api/types,
    /api/categories). Two consequences for these pages:
      * per-page COPY (title/description/fields) is API-owned and lives OUTSIDE
        this repo — you cannot tweak one template page's text here;
      * the only in-repo lever is the SHARED LAYOUT, which changes structure/SEO
        for EVERY page of that type at once.
    So they are flagged-and-REROUTED to that layout (never dropped). External
    subdomains (app./help.) are not actionable in this repo.

    Returns one of:
      - 'source/<...>.blade.php'                 (a 1:1 editable page)
      - 'template:source/_layouts/<x>.blade.php' (Jigsaw+API; edit shared layout)
      - 'external'                               (not in this repo)
      - '?'                                      (no match found)
    """
    site = cfg.get("site", "")
    u = urlparse(page)
    host = u.netloc.lower()
    if host and host not in (site, "www." + site):
        return "external"
    slug = u.path.strip("/")
    if not slug:
        return "external"  # homepage is excluded from discover anyway
    if slug.startswith("templates/t/"):
        return "template:source/_layouts/template.blade.php"
    if slug.startswith("templates/c/forms/"):
        return "template:source/_layouts/category.blade.php"
    if slug.startswith("templates/c/"):
        return "template:source/_layouts/type.blade.php"
    if slug.startswith("templates/"):
        return "template:source/_layouts/template.blade.php"
    root = _repo_root(cfg)
    for rel in ("source/%s.blade.php" % slug, "source/%s/index.blade.php" % slug):
        if os.path.exists(os.path.join(root, rel)):
            return rel
    return "?"


def _flags(c, min_pos):
    f = []
    if c.get("cannibalized_by"):
        f.append("CANB")
    pos = c.get("position")
    if pos is not None and pos <= min_pos:
        f.append("P1")
    if (c.get("edit_target") or "").startswith("template"):
        f.append("TMPL")
    return f


def cmd_init(d, a):
    if os.path.exists(LEDGER) and not a.force:
        print("ledger.json already exists. Use --force to overwrite.")
        return
    _save({"config": dict(DEFAULT_CONFIG), "candidates": []})
    print("Initialized empty ledger.json")


def cmd_add_candidates(d, a):
    from score import score_candidate
    cfg = d["config"]
    incoming = json.load(open(a.file))
    added = updated = skipped = 0
    for inc in incoming:
        cur = _find(d, inc["page"])
        if cur is None:
            cur = {
                "page": inc["page"],
                "target_keyword": inc.get("target_keyword"),
                "position": inc.get("position"),       # query-level (28d), see SKILL.md
                "kd": inc.get("kd"),
                "volume_us": inc.get("volume_us"),
                "global_volume": inc.get("global_volume"),
                "intent": inc.get("intent", "C"),
                "cannibalized_by": inc.get("cannibalized_by"),  # URL owning the kw, if not this page
                "edit_target": _edit_target(inc["page"], cfg),
                "status": "queued",
                "attempts": [],
                "last_refreshed": _today(),
            }
            cur["win_score"] = score_candidate(cur)
            d["candidates"].append(cur)
            added += 1
        elif cur["status"] == "queued" or a.refresh:
            for k in ("target_keyword", "position", "kd", "volume_us", "global_volume", "intent"):
                if inc.get(k) is not None:
                    cur[k] = inc[k]
            if "cannibalized_by" in inc:           # allow clearing back to None
                cur["cannibalized_by"] = inc["cannibalized_by"]
            cur["edit_target"] = _edit_target(cur["page"], cfg)
            cur["win_score"] = score_candidate(cur)
            cur["last_refreshed"] = _today()
            updated += 1
        else:
            skipped += 1
    # Methodology guard: a control page must never also be an experiment candidate,
    # or a win on it would contaminate its own baseline. Park it as 'control'.
    controls = set(cfg.get("control_pages", []))
    controlled = 0
    for c in d["candidates"]:
        if c["page"] in controls and c["status"] == "queued":
            c["status"] = "control"
            controlled += 1
    _save(d)
    msg = f"add-candidates: +{added} new, {updated} refreshed, {skipped} left untouched (active)."
    if controlled:
        msg += f" {controlled} control page(s) parked out of the queue."
    print(msg)


def _measuring_count(d):
    return sum(1 for c in d["candidates"] if c["status"] == "measuring")


def _parked_reason(c, cfg, min_pos):
    """Why a queued page is not actionable right now (None = actionable).
    Template pages are NOT parked — they reroute to a shared layout and stay in
    play. Only genuinely-unactionable (external) or already-won-and-uncontested
    (page 1, no cannibalization) pages get parked."""
    if (c.get("edit_target") or "") == "external":
        return "external"
    pos = c.get("position")
    if pos is not None and pos <= min_pos and not c.get("cannibalized_by"):
        return "already page 1"
    return None


def cmd_next(d, a):
    cfg = d["config"]
    cap = cfg["max_concurrent_experiments"]
    min_pos = cfg.get("discover_min_position", 10)
    controls = set(cfg.get("control_pages", []))
    measuring = _measuring_count(d)
    if measuring >= cap:
        print(f"BLOCKED: {measuring}/{cap} experiments already measuring. Run a review before starting more.")

    queued = [c for c in d["candidates"]
              if c["status"] == "queued" and c["page"] not in controls]
    for c in queued:  # backfill for pre-upgrade ledgers (not persisted here)
        if not c.get("edit_target"):
            c["edit_target"] = _edit_target(c["page"], cfg)

    actionable, parked = [], []
    for c in queued:
        r = _parked_reason(c, cfg, min_pos)
        (parked if r else actionable).append((r, c))
    actionable.sort(key=lambda rc: (rc[1].get("win_score") or 0), reverse=True)

    print(f"\nTop {a.n} actionable (of {len(actionable)} queued; {len(parked)} parked)  |  measuring {measuring}/{cap}\n")
    print(f"{'win':>5}  {'pos':>5}  {'KD':>3}  {'vol':>6}  {'I':<1}  {'flags':<13}  page")
    for _, c in actionable[: a.n]:
        pos = c.get("position")
        print(f"{c.get('win_score',0):>5}  {(pos if pos is not None else 0):>5}  "
              f"{('' if c.get('kd') is None else c['kd']):>3}  "
              f"{(c.get('volume_us') or 0):>6}  {c.get('intent','?'):<1}  "
              f"{','.join(_flags(c, min_pos)):<13}  {c['page']}")

    canb = [c for _, c in actionable if c.get("cannibalized_by")]
    if canb:
        print(f"\n!! cannibalized ({len(canb)}) — fix INTERNAL LINKS / consolidate, do NOT just add content:")
        for c in canb[:6]:
            print(f"   {c['page']}")
            print(f"     `-- '{c.get('target_keyword')}' is currently owned by {c['cannibalized_by']}")

    tmpl = [c for _, c in actionable[: a.n] if (c.get("edit_target") or "").startswith("template")]
    if tmpl:
        print("\nTMPL = Jigsaw collection from the API. Per-page copy is API-owned (not in repo);")
        print("       the in-repo lever is the SHARED LAYOUT and it changes ALL pages of that type:")
        for c in tmpl:
            print(f"   {c['page']}  ->  {c['edit_target'].split(':',1)[1]}")

    if parked:
        reasons = Counter(r for r, _ in parked)
        print("\nparked: " + ", ".join(f"{n} {r}" for r, n in reasons.items())
              + "   (use `show --page` to inspect)")


def _set_status(d, page, status):
    c = _find(d, page)
    if not c:
        sys.exit(f"page not found: {page}")
    c["status"] = status
    _save(d)
    return c


def cmd_start(d, a):
    c = _set_status(d, a.page, "in_progress")
    print(f"in_progress: {c['page']}  (target: {c.get('target_keyword')})")


def cmd_log_attempt(d, a):
    c = _find(d, a.page) or sys.exit(f"page not found: {a.page}")
    att = json.load(open(a.file))
    att["attempt_id"] = len(c["attempts"]) + 1
    att.setdefault("shipped_date", _today())
    att.setdefault("review", None)
    c["attempts"].append(att)
    c["status"] = "measuring"
    _save(d)
    print(f"logged attempt #{att['attempt_id']} on {c['page']} -> measuring "
          f"(changes: {', '.join(att.get('changes', []))})")


def cmd_matured(d, a):
    mat = d["config"]["maturation_days"]
    rows = []
    for c in d["candidates"]:
        if c["status"] != "measuring" or not c["attempts"]:
            continue
        days = _days_since(c["attempts"][-1].get("shipped_date", ""))
        rows.append((days >= mat, days, c["page"]))
    ripe = [r for r in rows if r[0]]
    young = [r for r in rows if not r[0]]
    print(f"RIPE for review (>= {mat} days):")
    for _, days, page in sorted(ripe, key=lambda x: -x[1]):
        print(f"  {days:>4}d  {page}")
    if young:
        print(f"\nstill maturing (<{mat} days):")
        for _, days, page in sorted(young, key=lambda x: -x[1]):
            print(f"  {days:>4}d  {page}")
    if not rows:
        print("  (nothing in measuring)")


def cmd_record_review(d, a):
    c = _find(d, a.page) or sys.exit(f"page not found: {a.page}")
    if not c["attempts"]:
        sys.exit("no attempts to attach a review to")
    review = json.load(open(a.file))
    verdict = review.get("verdict", "inconclusive")
    c["attempts"][-1]["review"] = review
    if verdict in ("won", "lost", "inconclusive"):
        c["status"] = verdict
    elif verdict == "not_ripe":
        print("verdict not_ripe — leaving status as measuring, not recording.")
        return
    _save(d)
    print(f"recorded review for {c['page']}: {verdict}")


def cmd_status(d, a):
    counts = {}
    for c in d["candidates"]:
        counts[c["status"]] = counts.get(c["status"], 0) + 1
    print(f"ledger: {len(d['candidates'])} pages")
    for k in ("queued", "in_progress", "measuring", "won", "lost", "inconclusive", "control"):
        if k in counts:
            print(f"  {k:<13} {counts[k]}")
    print(f"  config: project {d['config']['ahrefs_project_id']}, "
          f"maturation {d['config']['maturation_days']}d, "
          f"max concurrent {d['config']['max_concurrent_experiments']}")


def cmd_show(d, a):
    c = _find(d, a.page) or sys.exit(f"page not found: {a.page}")
    print(json.dumps(c, indent=2))


def main():
    ap = argparse.ArgumentParser(description=__doc__)
    sub = ap.add_subparsers(dest="cmd", required=True)
    sub.add_parser("init").add_argument("--force", action="store_true")
    p = sub.add_parser("add-candidates"); p.add_argument("--file", required=True); p.add_argument("--refresh", action="store_true")
    p = sub.add_parser("next"); p.add_argument("--n", type=int, default=5)
    p = sub.add_parser("start"); p.add_argument("--page", required=True)
    p = sub.add_parser("log-attempt"); p.add_argument("--page", required=True); p.add_argument("--file", required=True)
    sub.add_parser("matured")
    p = sub.add_parser("record-review"); p.add_argument("--page", required=True); p.add_argument("--file", required=True)
    sub.add_parser("status")
    p = sub.add_parser("show"); p.add_argument("--page", required=True)
    args = ap.parse_args()

    sys.path.insert(0, HERE)
    d = _load()
    {
        "init": cmd_init, "add-candidates": cmd_add_candidates, "next": cmd_next,
        "start": cmd_start, "log-attempt": cmd_log_attempt, "matured": cmd_matured,
        "record-review": cmd_record_review, "status": cmd_status, "show": cmd_show,
    }[args.cmd](d, args)


if __name__ == "__main__":
    main()
