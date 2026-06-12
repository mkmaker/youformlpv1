---
name: template-thumbnail
description: >
  Refresh the thumbnail image for a Youform template by screenshotting its live
  embedded form. Given a template landing page URL (youform.com/templates/t/...)
  or a template_slug, this captures the form that page embeds and updates the
  thumbnail shown everywhere it appears: template category pages, type listing
  pages, the template landing page's og:image, and (if featured there) the home
  page / builder-page template cards. Use when the user says "update the
  thumbnail for this template", "refresh the template image", "screenshot the
  form for this template page", or pastes a /templates/t/ URL asking for a new
  image.
---

# Template thumbnail refresh

One thumbnail image per template, consumed in several places. The default
upstream images live at files.youform.com / R2 (set in the product DB); this
skill replaces them with a repo-owned screenshot of the live form, wired in
through `source/_data/template-overrides.json` so the app/DB is never touched.

Screenshots are stored IN THIS REPO at
`source/assets/images/templates/<template_slug>.jpg` (~30KB each), versioned
with the code and deployed with the site. If we ever want them in R2 instead,
add an upload step (S3-compatible API via `aws` CLI with R2 endpoint +
credentials from env) and point the override URL at files.youform.com; until
then the repo is the source of truth for replaced thumbnails.

## Where the thumbnail surfaces

All listing surfaces render `source/_partials/template-card.blade.php`
(`h-48`, `object-cover`), fed an `image` value from different sources:

| Surface | Data source for `image` |
|---|---|
| Category pages (`/templates/c/forms/<cat>` etc.) | `config.php` category collections → override `image` ?? snapshot |
| Type pages (`/templates/c/forms` etc.) | `config.php` type collection → override `image` ?? snapshot |
| Template landing page (`/templates/t/<slug>`) | `og:image` / `twitter:image` meta only (the page body shows a live iframe, not the image) |
| Home page + builder pages (`index`, `online-form-builder`, `online-survey-builder`, `templates`, `explore`, `likert-scale`) | the **hardcoded `templates` array in `config.php`** (~line 234), NOT the overrides file |

So: editing `template-overrides.json` covers category, type, and landing-page
meta. If the template is also in config.php's hardcoded `templates` array
(9 featured templates: 3 forms, 3 surveys, 3 quizzes), update its `image`
there too, or the home/builder pages keep showing the old one.

## Steps

1. **Resolve the template.** Extract `template_slug` from the URL
   (`/templates/t/<template_slug>`). Confirm it exists in
   `source/_data/api/templates.json` (keys: `slug` = the form's short slug
   used in the iframe, `template_slug`, `template_title`, `template_image`).
   If missing, run `php scripts/refresh-template-data.php` first.

2. **Screenshot the embedded form:**

   ```bash
   node scripts/screenshot-template-form.js <url-or-template_slug>
   ```

   This opens `https://app.youform.com/forms/<slug>` (exactly what the landing
   page iframes) in headless Chrome at 1440x900 (the dimensions of the existing
   files.youform.com thumbnails) and saves to
   `source/assets/images/templates/<template_slug>.jpg`.
   Flags: `--delay <ms>` (default 2500; raise it if the capture catches the
   entry animation mid-flight), `--out`, `--width`, `--height`.

3. **Inspect the screenshot with the Read tool.** It should show the form's
   welcome screen, fully rendered text, no spinner/blank frame. If it looks
   half-loaded, re-run with `--delay 5000`. Show it to the user before wiring
   it in; this is a customer-facing image.

4. **Wire it into `source/_data/template-overrides.json`.** Add or merge an
   entry keyed by `template_slug`, preserving any existing keys (meta_title,
   intro, faq, ...):

   ```json
   "client-intake-form-template": {
     "image": "/assets/images/templates/client-intake-form-template.jpg"
   }
   ```

   Use the SITE-RELATIVE path, never a hardcoded `https://youform.com/...`
   URL — local runs on youformlpv1.test (Valet), so an absolute prod URL 404s
   locally. The card `<img>` works with the relative path on any host, and
   `og:image`/`twitter:image` (which must be absolute) are absolutized against
   the env's `baseUrl` by the `absUrl` helper in config.php, applied in
   main.blade.php.

5. **Hunt down hardcoded uses of the old image.** The old URL is the
   `template_image` value in `source/_data/api/templates.json`. Grep for its
   UUID across the source tree and config:

   ```bash
   grep -rn "<old-image-uuid>" source/ config.php --include="*.blade.php" --include="*.php"
   ```

   Two known places it hides:
   - config.php's hardcoded `templates` array (the 9 featured templates shown
     on the home/builder pages) — update its `image` to the new URL.
   - One-off `<img>` tags in content pages (e.g. feedback-forms.blade.php
     embeds template previews directly) — update those too.

6. **Build and verify:**

   ```bash
   npm run dev
   ```

   Then grep `build_local` to confirm the new URL landed on every surface:

   ```bash
   grep -rl "assets/images/templates/<template_slug>.jpg" build_local --include="*.html" | head
   ```

   Expect at minimum: the template's category page, its type page, and
   `build_local/templates/t/<template_slug>/index.html` (og:image). If the
   template is in config.php's hardcoded array, also expect `index.html` and
   the builder pages.

## Gotchas

- `source/_data/api/*.json` are committed snapshots of the app API; never
  hand-edit them (the refresh script overwrites). All repo-owned changes go in
  `template-overrides.json`.
- The overrides merge happens in `config.php` collections; the
  `$ov['image'] ?? $template->template_image` fallback means a missing key is
  fine but a typo'd `template_slug` key silently does nothing — verify via the
  grep in step 6.
- Jigsaw gotcha (documented in template.blade.php): collection-item keys
  resolve via `__get` but not `__isset`, so in Blade use plain truthiness
  (`@if ($page->image)`), never `empty()`/`isset()`.
- The screenshot captures the form's welcome screen. Templates whose first
  screen is just a question (no welcome page) still capture fine, but eyeball
  the result; that's what step 3 is for.
