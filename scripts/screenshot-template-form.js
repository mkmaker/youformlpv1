#!/usr/bin/env node
/**
 * Screenshot the live embedded form for a template landing page, producing a
 * thumbnail that matches the existing template card images (1440x900). Saved
 * as JPEG: welcome screens often have photo backgrounds, which PNG inflates
 * to ~1MB while JPEG q82 stays near the ~30KB weight of the originals.
 *
 * The template landing page embeds the form as an iframe pointing at
 * {appUrl}/forms/{form_slug}. This script resolves a template page URL (or a
 * bare template_slug) to that form via the committed API snapshot
 * (source/_data/api/templates.json), renders it in headless system Chrome,
 * and saves the screenshot to source/assets/images/templates/{template_slug}.jpg.
 *
 * Usage:
 *   node scripts/screenshot-template-form.js https://youform.com/templates/t/client-intake-form-template
 *   node scripts/screenshot-template-form.js client-intake-form-template
 *   node scripts/screenshot-template-form.js client-intake-form-template --out custom.png --delay 4000
 *
 * After running, point the template's "image" key in
 * source/_data/template-overrides.json at the new file (see the printed hint).
 */

const fs = require('fs');
const path = require('path');
const puppeteer = require('puppeteer-core');

const CHROME_PATHS = [
  '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
  '/Applications/Chromium.app/Contents/MacOS/Chromium',
  '/usr/bin/google-chrome',
  '/usr/bin/chromium-browser',
];

function findChrome() {
  for (const p of CHROME_PATHS) {
    if (fs.existsSync(p)) return p;
  }
  throw new Error('No Chrome/Chromium found. Install Google Chrome or set CHROME_PATH env.');
}

function parseArgs(argv) {
  const args = { delay: 2500, width: 1440, height: 900 };
  const positional = [];
  for (let i = 2; i < argv.length; i++) {
    const a = argv[i];
    if (a === '--out') args.out = argv[++i];
    else if (a === '--delay') args.delay = parseInt(argv[++i], 10);
    else if (a === '--width') args.width = parseInt(argv[++i], 10);
    else if (a === '--height') args.height = parseInt(argv[++i], 10);
    else positional.push(a);
  }
  args.input = positional[0];
  return args;
}

// Accepts a full template page URL (any host) or a bare template_slug.
function extractTemplateSlug(input) {
  const m = input.match(/\/templates\/t\/([^/?#]+)/);
  if (m) return m[1];
  if (/^https?:\/\//.test(input)) {
    throw new Error(`URL does not look like a template page (expected /templates/t/<slug>): ${input}`);
  }
  return input.replace(/\/+$/, '');
}

async function main() {
  const args = parseArgs(process.argv);
  if (!args.input) {
    console.error('Usage: node scripts/screenshot-template-form.js <template-page-url-or-slug> [--out file.png] [--delay ms]');
    process.exit(1);
  }

  const projectRoot = path.resolve(__dirname, '..');
  const templateSlug = extractTemplateSlug(args.input);

  const snapshotPath = path.join(projectRoot, 'source/_data/api/templates.json');
  const templates = JSON.parse(fs.readFileSync(snapshotPath, 'utf8'));
  const template = templates.find(t => t.template_slug === templateSlug);
  if (!template) {
    console.error(`No template with template_slug "${templateSlug}" in source/_data/api/templates.json.`);
    console.error('Run `php scripts/refresh-template-data.php` if the template was added recently.');
    process.exit(1);
  }

  const formUrl = `https://app.youform.com/forms/${template.slug}`;
  const outputPath = args.out
    ? (path.isAbsolute(args.out) ? args.out : path.join(projectRoot, args.out))
    : path.join(projectRoot, `source/assets/images/templates/${templateSlug}.jpg`);
  fs.mkdirSync(path.dirname(outputPath), { recursive: true });

  console.log(`Template: ${template.template_title} (${templateSlug})`);
  console.log(`Form:     ${formUrl}`);

  const browser = await puppeteer.launch({
    executablePath: process.env.CHROME_PATH || findChrome(),
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--font-render-hinting=none', '--hide-scrollbars'],
  });
  try {
    const page = await browser.newPage();
    await page.setViewport({ width: args.width, height: args.height, deviceScaleFactor: 1 });
    await page.goto(formUrl, { waitUntil: 'networkidle2', timeout: 60000 });
    await page.evaluate(() => document.fonts.ready);
    // Let the form's entry animation settle before capturing.
    await new Promise(r => setTimeout(r, args.delay));
    await page.screenshot({ path: outputPath, type: 'jpeg', quality: 82 });
  } finally {
    await browser.close();
  }

  const rel = path.relative(projectRoot, outputPath);
  const stat = fs.statSync(outputPath);
  console.log(`Saved: ${rel} (${Math.round(stat.size / 1024)} KB)`);
  console.log('');
  console.log('Override entry for source/_data/template-overrides.json:');
  console.log(`  "${templateSlug}": { "image": "/assets/images/templates/${templateSlug}.jpg" }`);
}

main().catch(err => {
  console.error(err);
  process.exit(1);
});
