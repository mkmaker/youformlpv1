#!/usr/bin/env python3
"""State for the striking-distance loop. The ledger.json it manages is the single
source of truth for what's been tried. Commit it; its git history is the audit trail.

Subcommands: init, add-candidates, next, start, log-attempt, matured,
record-review, status, show.  Run `ledger.py <cmd> -h` for each.
"""
import argparse, json, os, sys
from datetime import date, datetime

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


def cmd_init(d, a):
    if os.path.exists(LEDGER) and not a.force:
        print("ledger.json already exists. Use --force to overwrite.")
        return
    _save({"config": dict(DEFAULT_CONFIG), "candidates": []})
    print("Initialized empty ledger.json")


def cmd_add_candidates(d, a):
    from score import score_candidate
    incoming = json.load(open(a.file))
    added = updated = skipped = 0
    for inc in incoming:
        cur = _find(d, inc["page"])
        if cur is None:
            cur = {
                "page": inc["page"],
                "target_keyword": inc.get("target_keyword"),
                "position": inc.get("position"),
                "kd": inc.get("kd"),
                "volume_us": inc.get("volume_us"),
                "global_volume": inc.get("global_volume"),
                "intent": inc.get("intent", "C"),
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
            cur["win_score"] = score_candidate(cur)
            cur["last_refreshed"] = _today()
            updated += 1
        else:
            skipped += 1
    _save(d)
    print(f"add-candidates: +{added} new, {updated} refreshed, {skipped} left untouched (active).")


def _measuring_count(d):
    return sum(1 for c in d["candidates"] if c["status"] == "measuring")


def cmd_next(d, a):
    cap = d["config"]["max_concurrent_experiments"]
    measuring = _measuring_count(d)
    if measuring >= cap:
        print(f"BLOCKED: {measuring}/{cap} experiments already measuring. Run a review before starting more.")
    q = sorted([c for c in d["candidates"] if c["status"] == "queued"],
               key=lambda c: (c.get("win_score") or 0), reverse=True)
    print(f"\nTop {a.n} queued (of {len(q)})  |  measuring {measuring}/{cap}\n")
    print(f"{'win':>5}  {'pos':>5}  {'KD':>3}  {'vol':>6}  {'I':<1}  page")
    for c in q[: a.n]:
        print(f"{c.get('win_score',0):>5}  {c.get('position',0):>5}  "
              f"{('' if c.get('kd') is None else c['kd']):>3}  "
              f"{(c.get('volume_us') or 0):>6}  {c.get('intent','?'):<1}  {c['page']}")


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
    for k in ("queued", "in_progress", "measuring", "won", "lost", "inconclusive"):
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
