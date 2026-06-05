---
name: striking-distance
description: >
  Run Youform's striking-distance SEO loop: find pages ranking just off page 1,
  improve the ones worth winning, and PROVE whether the change worked using
  control-adjusted Google Search Console data. Use this skill whenever the user
  says "striking distance", "what page should I work on next", "pick the next SEO
  target", "did my SEO change work", "review my SEO experiments", "refresh the SEO
  list", or asks anything about improving pages stuck on page 2+, even if they
  don't name the skill. Data comes from the Ahrefs MCP (which carries the GSC
  project) and pages are edited in the youformlpv1 Blade repo.
---

# Striking-distance SEO loop

A closed loop with three phases around one versioned `ledger.json`. The ledger is
the single source of truth for what's been tried; the candidate list is
*regenerated from live data*, never imported from a stale spreadsheet.

```
discover  ->  next (act)  ->  [wait >= maturation]  ->  review  ->  (re-rank) -> discover ...
```

## Running the scripts & where state lives

Claude Code runs with the working directory at the repo root (`youformlpv1`),
not this skill folder. So invoke every script through the skill-dir variable,
which resolves regardless of where the skill is installed:

```
python "$CLAUDE_SKILL_DIR/scripts/ledger.py" status
```

The `python scripts/...` forms written below are shorthand for
`python "$CLAUDE_SKILL_DIR/scripts/..."`. The scripts use only the Python
standard library — no pip installs needed.

`ledger.json` lives inside this skill folder and the scripts find it relative to
themselves, so it works from any working directory. Read it first
(`python "$CLAUDE_SKILL_DIR/scripts/ledger.py" status`) before doing anything, and
respect `config` in it (project id, repo paths, maturation window, control pages,
max concurrent experiments). Commit `ledger.json` — its git history is the audit
trail. (Install this skill at the project level so the ledger commits with the
repo; make sure it isn't caught by a `.claude/` gitignore rule.)

## Hard rules (do not violate)

1. **Edit only `source/**/*.blade.php`.** Never touch `build_production/**` — that
   is generated output and your edits will be overwritten on the next build.
2. **Never deploy and never commit to `master`.** Work on a branch
   (`seo/<slug>-<yyyymmdd>`), show the diff, and stop. The user merges and deploys.
3. **Never run more than `config.max_concurrent_experiments` pages in `measuring`
   at once.** If the cap is hit, `next` proposes review, not a new edit. One reason:
   if you change ten pages in a week and the site moves, you cannot attribute it.
4. **Never declare a win without a control.** A single page rising is not proof —
   the whole site may have risen on a Google update. See `references/measurement.md`.
5. **Do not cargo-cult.** Adding a YouTube video or FAQ *schema* did NOT cause our
   one proven win; content depth + a sharper title + visible FAQ *text* did. Treat
   video/images/stats as *optional, tracked* variables, not required steps.

## Phase 1 — discover (regenerate + re-rank the candidate list)

Trigger: "refresh the list", start of a session, or after a review.

1. Pull pages ranking off page 1 from GSC via Ahrefs:
   `gsc-pages` with `project_id` from config, `date_from` = ~90 days ago,
   `where` = `{"and":[{"field":"position","is":["gt",10]},{"field":"impressions","is":["gte",50]}]}`,
   `limit` 1000. Use the 90-day window only for the impressions floor (enough data),
   NOT for the position you score on — see step 4.
2. Drop junk before enriching: `app.youform.com/*` (customer forms), the homepage
   and `/explore/` (brand-diluted averages), and rows whose `top_keyword` is a
   brand term or a `site:` query (flag those — pick the real target from the slug).
   You do NOT need to hand-drop `help.youform.com/*` or `/templates/*`: the ledger
   tags external subdomains and reroutes template pages automatically (steps 4–5).
3. For each surviving page, get KD + volume from Ahrefs `keywords-explorer-overview`
   (`country=us`, `select=keyword,difficulty,volume,global_volume,traffic_potential,parent_topic`),
   batched ~22 keywords per call, keyed to the page's real target keyword.
4. **Fetch a FRESH, query-level position (and detect cannibalization).** The
   90-day page-average lies — it is stale and blended across many queries. Pull
   `gsc-keywords` for the last `maturation_days` (28) filtered to your target
   keywords (`where` = `{"or":[{"field":"keyword","is":["eq","<kw>"]}, ...]}`), and
   for each read `position` (this is the number you score on) and `top_url`. This is
   the SAME source `review.py` grades on, so picking and grading stay coherent. If a
   keyword's `top_url` is not the candidate page, the keyword is **cannibalized** —
   set `cannibalized_by` to that URL. (Normalize trailing-slash/host before comparing.)
5. Write the enriched candidates to a temp JSON (one object per page with fields:
   `page, target_keyword, position` (the fresh query-level one), `kd, volume_us,
   global_volume, intent, cannibalized_by`) and merge into the ledger:
   `python scripts/ledger.py add-candidates --file /tmp/candidates.json`
   - New pages are added as `queued`; existing `queued` pages get refreshed
     metrics + recomputed win score; `in_progress`/`measuring`/`won`/`lost` are
     left alone.
   - Control pages are auto-parked as `control` (a page can't be both a baseline
     and an experiment). Each candidate gets an `edit_target`: a 1:1 blade file,
     a `template:` reroute to a shared layout, or `external`.
6. Show the top of the queue: `python scripts/ledger.py next --n 8`. It now lists
   **actionable** pages only (externals and already-page-1-uncontested pages are
   parked), flags `CANB`/`P1`/`TMPL`, and prints cannibalized pages with the URL
   that's eating each keyword.

Assign `intent` per `references/measurement.md` (A = wants to build a form/quiz/
survey or a competitor "alternative"; B = integrations/how-to adjacency;
C = free calculators/blog; D = docs). Win score already penalizes high KD, so a
KD-88 page will sit low even if it's close to page 1.

## Phase 2 — next / act (pick one, improve it, log it)

Trigger: "what should I work on next", "pick the next page".

1. `python scripts/ledger.py next --n 5`. If concurrent `measuring` >= the cap,
   STOP and tell the user to run a review instead.
2. Take the top actionable page. Re-pull its target-keyword `gsc-keywords` row
   (28d) to confirm today's `position` AND `top_url`. Record position as the
   baseline. **Check cannibalization first:** if `top_url` (or the stored
   `cannibalized_by`) is a *different* URL than the candidate, the problem is NOT
   thin content — a stronger page is eating the keyword. The fix is internal links
   + on-page relevance to CONSOLIDATE the term onto the right page (and possibly
   merging/redirecting the weaker one), tagged `internal_links`. Adding content to
   the dedicated page here can split signals further and make it worse. Do not test
   the content hypothesis on a cannibalized page.
3. If the page is a `TMPL` reroute, you are NOT editing one page: its copy is
   API-owned (Jigsaw collection, see `config.php`), so the only in-repo lever is the
   shared layout, which lifts EVERY page of that type. That makes it a type-wide
   experiment — note that in the plan and pick a representative target keyword to
   grade on. Otherwise, read `references/playbook.md` and propose a concrete plan
   for THIS page (title rewrite, content depth, visible FAQ, internal links).
   Present it.
4. Ask the user for the optional assets the plan references — and only these,
   in one message: a YouTube URL (if they want video), any stats/sources to cite,
   any image. If they don't have them, ship the text changes now and log the asset
   as `pending` rather than blocking.
5. `python scripts/ledger.py start --page <url>` (status -> in_progress).
6. Make the edit in the file named by the candidate's `edit_target` (a 1:1 blade
   file, or the `template:` shared layout for `TMPL` pages) on a new branch
   `seo/<slug>-<yyyymmdd>`. For an internal-links/consolidation play the edit spans
   the *related* pages that link INTO the target, not the target itself. Show the
   diff. Do not commit until the user approves.
7. After the user approves and commits, capture the commit SHA, then log the
   attempt: write an attempt JSON (see `references/measurement.md` for the schema —
   it must include `baseline`, `changes` as a list of tracked change-types, and
   `hypothesis`) and run
   `python scripts/ledger.py log-attempt --page <url> --file /tmp/attempt.json`
   (status -> measuring).

## Phase 3 — review (measure matured experiments honestly)

Trigger: "did it work", "review my experiments", or when `next` is blocked by the cap.

1. `python scripts/ledger.py matured` — lists pages in `measuring` whose latest
   attempt shipped >= `config.maturation_days` ago. Anything younger is "not ripe";
   say so and stop for that page.
2. For each matured page, pull the *after* numbers from GSC (target-keyword
   position + page clicks/impressions over the last `maturation_days`) AND pull the
   same window for every page in `config.control_pages`.
3. Assemble a review JSON (schema in `references/measurement.md`) and run
   `python scripts/review.py --file /tmp/review.json`. It computes the
   control-adjusted position delta and returns a verdict
   (`won` / `lost` / `inconclusive` / `not_ripe`).
4. Record it: `python scripts/ledger.py record-review --page <url> --file /tmp/review.json`.
5. Present a results table (one row per reviewed page): change shipped, days
   elapsed, target-keyword position before -> after, page clicks before -> after,
   control-adjusted delta, verdict. Then re-run discover to re-rank.

Over many cycles, the `changes` field across attempts answers the real question:
*which change-types actually move rankings on this site* — so you can stop doing
the ones that don't.

## Files

- `scripts/ledger.py` — all state: init, add-candidates, next, start, log-attempt,
  matured, record-review, status, show. Run with `-h` for each.
- `scripts/score.py` — the difficulty-aware win-score formula (also importable).
- `scripts/review.py` — control-adjusted before/after verdict.
- `references/playbook.md` — the improvement template (proven levers first).
- `references/measurement.md` — intent tiers, the JSON schemas, and the
  control/maturation protocol (read before any review).
- `ledger.json` — state. Pre-seeded with the candidate list from the initial
  analysis. Commit it; its git history is your audit trail.
