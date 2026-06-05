# Improvement playbook

This is the on-page template that produced our one fully-attributed win
(the Google Form QR Code page: position ~10 -> ~3, 44 -> 3,810 clicks). We read
the actual git diff to confirm what moved it. Apply the proven levers; treat the
rest as experiments to be measured, not assumed.

## What actually worked (do these)

1. **Title + meta rewrite — keyword first, with a differentiator competitors lack.**
   The QR page went from `Google Forms QR Code Generator — Free, One-Click, No Signup`
   to `Free Google Forms QR Code Generator [No Watermark] — Download Instantly`.
   Front-load the exact target keyword; add a bracketed modifier that names a real
   pain point in the niche (here: "no watermark"). This earned the head-term rank.

2. **Content depth: thin -> comprehensive.** The single biggest lever. A bare tool
   or one-paragraph page became: a numbered **how-to** section, a **use-cases**
   section, a **comparison table** (you vs others), and a **visible FAQ**. The
   how-to section in particular unlocked a large "how to ..." long-tail cluster that
   became most of the page's impressions. When you expand, write in the exact words
   people search (mine `gsc-keywords` / Ahrefs matching terms for the page).

3. **Visible FAQ text** (the rendered Q&A on the page) — contributes to long-tail
   matching and People-Also-Ask. Worth doing.

## What did NOT cause the win (do not assume these help)

- **FAQ schema (FAQPage JSON-LD).** We added it; Google deprecated FAQ rich results
  for ordinary sites, so it almost certainly did nothing for ranking. Harmless, but
  do not credit it or rely on it.
- **The YouTube video.** On the QR page the video was already present *before* the
  jump, so it was not the lever. Video adds an embed (page weight). If you add one,
  log it as a tracked change and let the review tell you if it helped — do not treat
  "add a video" as a required step.
- **Images / stats.** Same status: optional, tracked, unproven. Add them when they
  genuinely help the reader, not as ritual.

## CTR note

If a page already ranks ~3-5 but CTR is low for that position, the bottleneck is
usually the SERP (a snippet or tool box above you), not your title. Re-writing an
already-good title won't help. Either climb the specific head query to #1 or target
the better-converting "how to ..." variants — check query-level CTR first.

## Per-page plan checklist

When proposing an edit for a page, produce a short plan with:
- the target keyword and its current real position (fetched fresh);
- proposed new `<title>` and meta description (keyword-first + a differentiator);
- the content sections to add (how-to steps, use-cases, comparison, visible FAQ),
  written toward the long-tail variants the page already gets impressions for;
- internal links to add pointing INTO the page from related pages;
- optional assets to request from the user (video URL, stats+sources, image) —
  ship without them if unavailable.

Tag every change you make with a `changes` code so reviews can learn which type
works: `title_rewrite`, `meta_rewrite`, `content_depth`, `faq_visible`,
`comparison_table`, `internal_links`, `video`, `images`, `stats`, `schema`.
