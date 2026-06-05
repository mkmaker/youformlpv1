<?php
/**
 * Refresh local snapshots of template / category / type data from the YouForm API.
 *
 *   php scripts/refresh-template-data.php
 *
 * WHY: the app API (templates live in the product DB, in a separate repo) stays the
 * upstream source of truth for WHICH templates exist and which form each maps to.
 * This script materializes that into committed JSON under source/_data/api/, so:
 *   - the build no longer makes a live API call (no build-time API fragility), and
 *   - SEO copy + images can be owned and edited in THIS repo.
 *
 * Per-template SEO + image overrides live in source/_data/template-overrides.json
 * and are layered on at build time (see config.php) — this script never touches them.
 *
 * Re-run whenever product adds/edits templates. The drift report flags what changed.
 */

$appUrl = 'https://app.youform.com';
$out = __DIR__ . '/../source/_data/api';
@mkdir($out, 0777, true);

$endpoints = [
    'templates.json'         => '/api/templates',
    'types.json'             => '/api/types',
    'categories-form.json'   => '/api/categories?type=form&with=templates',
    'categories-survey.json' => '/api/categories?type=survey&with=templates',
    'categories-quiz.json'   => '/api/categories?type=quiz&with=templates',
];

$flags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

// remember previous template slugs for a drift report
$prevSlugs = [];
$prevPath = "$out/templates.json";
if (is_file($prevPath)) {
    foreach (json_decode(file_get_contents($prevPath)) ?: [] as $t) {
        $prevSlugs[] = $t->template_slug;
    }
}

foreach ($endpoints as $file => $path) {
    fwrite(STDERR, "fetching $path ... ");
    $raw = @file_get_contents($appUrl . $path);
    if ($raw === false) { fwrite(STDERR, "FAILED — keeping existing snapshot\n"); continue; }
    $data = json_decode($raw);
    if ($data === null) { fwrite(STDERR, "bad JSON — keeping existing snapshot\n"); continue; }
    file_put_contents("$out/$file", json_encode($data, $flags) . "\n");
    fwrite(STDERR, "ok\n");
}

// drift report
$new = json_decode(file_get_contents("$out/templates.json"));
$newSlugs = array_map(fn($t) => $t->template_slug, $new);
fwrite(STDERR, "\n" . count($newSlugs) . " templates total.\n");
if ($prevSlugs) {
    $added   = array_values(array_diff($newSlugs, $prevSlugs));
    $removed = array_values(array_diff($prevSlugs, $newSlugs));
    if ($added)   fwrite(STDERR, "+ added ("   . count($added)   . "): " . implode(', ', $added)   . "\n");
    if ($removed) fwrite(STDERR, "- removed (" . count($removed) . "): " . implode(', ', $removed) . "\n");
    if (!$added && !$removed) fwrite(STDERR, "no template added/removed since last snapshot.\n");
}
