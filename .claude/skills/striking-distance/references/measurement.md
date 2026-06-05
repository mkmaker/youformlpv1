# Measurement protocol & schemas

The hard, valuable part of this loop. Most "striking distance" advice ends at
"watch them rank." That gives wrong answers, because a page can rise from a Google
core update, seasonality, or sitewide authority growth that has nothing to do with
your edit. This protocol exists to separate *your* wins from the weather.

## Four traps (all observed on real data) and the guard for each

1. **Measuring too early.** Our proven win took weeks and the early weeks were
   noisy. Guard: the **maturation gate** — do not evaluate until the attempt is at
   least `config.maturation_days` (28) old AND the page has >= `min_impressions`.
2. **No control.** A single page rising proves nothing. Guard: pull the
   `config.control_pages` over the same window; a win must beat the control median
   (see `review.py`).
3. **Average-position lies.** GSC page-average position blends many queries and is
   diluted, badly so for pages that rank for hundreds of terms. Guard: measure at
   the **target-keyword (query) level**, not the page average. This applies to
   *discover too*, not just review: the position you SCORE on (Phase 1) and the
   position you GRADE on (`review.py`) must come from the same `gsc-keywords`
   query-level source, or before/after deltas are incoherent. A `gsc-pages` average
   is only for the impressions floor, never for ranking candidates.
4. **Crediting the wrong cause.** Guard: log the specific `changes` per attempt so
   that across many experiments you can see which change-types actually move
   rankings — and stop doing the ones that don't.

Also: cap concurrent experiments (config) so attribution stays possible.

## Intent tiers (for discover/scoring)

- **A** — buyer/ICP intent: wants to build a form/quiz/survey, or a competitor
  "alternative" (`/x-alternative/`), or a form template (order/quote/intake/etc.).
  These can become signups -> paid.
- **B** — adjacent: integrations pages, Google-Forms how-tos.
- **C** — traffic but weak buyer intent: free calculators, blog posts. High volume,
  poor conversion. Rank-able, but cross-check whether it ever pays.
- **D** — docs / support pages.

KD ranks how *hard* to win; intent ranks how *valuable* the win is. Win score uses
both. A KD-0 page that only brings free-tier-happy users still won't move MRR —
note that in the plan even if you proceed.

## attempt JSON (for `ledger.py log-attempt`)

```json
{
  "shipped_date": "2026-06-05",
  "commit_sha": "abc1234",
  "branch": "seo/rsvp-form-20260605",
  "hypothesis": "expand thin page to how-to + use-cases + visible FAQ; front-load 'rsvp form' in title",
  "changes": ["title_rewrite", "content_depth", "faq_visible"],
  "optional_assets": {"youtube_url": null, "images_added": 0, "stats_added": false},
  "baseline": {
    "target_kw_position": 14.8,
    "page_clicks_28d": 12,
    "page_impressions_28d": 1500,
    "target_kw_ctr": 0.6
  }
}
```

`changes` codes: `title_rewrite`, `meta_rewrite`, `content_depth`, `faq_visible`,
`comparison_table`, `internal_links`, `video`, `images`, `stats`, `schema`.

## review JSON (for `review.py` then `ledger.py record-review`)

Fetch `after` and the control positions from GSC for the last `maturation_days`.

```json
{
  "page": "https://youform.com/ai-rsvp-form/",
  "shipped_date": "2026-06-05",
  "today": "2026-07-10",
  "maturation_days": 28,
  "min_impressions": 100,
  "target": {
    "keyword": "rsvp form",
    "before": {"position": 14.8, "clicks": 12, "impressions": 1500},
    "after":  {"position": 6.1,  "clicks": 140, "impressions": 9000}
  },
  "controls": [
    {"page": "https://youform.com/templates/c/forms/quote/", "before_position": 24.4, "after_position": 23.9},
    {"page": "https://youform.com/free-tools/nps-calculator/", "before_position": 34.3, "after_position": 31.0},
    {"page": "https://youform.com/online-form-builder/", "before_position": 19.9, "after_position": 18.5}
  ]
}
```

`review.py` adds `control_adjusted_delta` and a `verdict`
(`won` / `lost` / `inconclusive` / `inconclusive_low_volume` / `not_ripe`) and
writes the enriched object back to the same file, which `record-review` ingests.

## Verdict logic (in `review.py`, tune the margins there)

- `not_ripe`: younger than the maturation gate — say so, do not record.
- `inconclusive_low_volume`: after-impressions below the floor.
- `won`: target beat the control median by >= 3 positions AND moved up.
- `lost`: target flat/declined, or underperformed the controls by >= 2 positions.
- `inconclusive`: improved, but not clearly beyond what the controls did.

A `won` means the edit, not the weather. A `lost` or `inconclusive` on a low-KD
page is a signal to revert or rethink, not to pile on more changes.
