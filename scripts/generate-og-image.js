#!/usr/bin/env node
/**
 * Generate a 1200x630 OG image for a Youform page using real brand assets.
 *
 * Renders an HTML template via headless Chrome (system Chrome, no bundled
 * Chromium) and screenshots it. Uses:
 *   - DM Sans (same font as the landing page H1s)
 *   - Bricolage Grotesque (used for the small badge label)
 *   - bg-medium-champagne (#F6E1A8) background
 *   - coral (#FF7F4A) accents
 *   - the real youform-logo.png
 *
 * Usage:
 *   node scripts/generate-og-image.js "Page Title" output.png
 *   node scripts/generate-og-image.js "Likert Scale Surveys" out.png \
 *     --subtitle "Build free Likert scale surveys with Youform" \
 *     --badge "Survey question type"
 */

const fs = require('fs');
const path = require('path');
const puppeteer = require('puppeteer-core');

const CHROME_PATHS = [
  '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
  '/Applications/Chromium.app/Contents/MacOS/Chromium',
  '/usr/bin/google-chrome',
  '/usr/bin/chromium',
  '/usr/bin/chromium-browser',
];

function findChrome() {
  for (const p of CHROME_PATHS) {
    if (fs.existsSync(p)) return p;
  }
  throw new Error('No Chrome/Chromium found. Install Google Chrome or set CHROME_PATH env.');
}

function parseArgs(argv) {
  const args = { title: null, output: null, subtitle: null, badge: null };
  const positional = [];
  for (let i = 2; i < argv.length; i++) {
    const a = argv[i];
    if (a === '--subtitle') args.subtitle = argv[++i];
    else if (a === '--badge') args.badge = argv[++i];
    else positional.push(a);
  }
  args.title = positional[0];
  args.output = positional[1];
  return args;
}

function buildHtml({ title, subtitle, badge, logoDataUrl }) {
  const escape = s => String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
  return `<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700;9..40,800&family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..125,800&display=swap" rel="stylesheet">
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  html, body { width: 1200px; height: 630px; overflow: hidden; }
  body {
    background: #F6E1A8;
    font-family: 'DM Sans', system-ui, sans-serif;
    color: #111827;
    padding: 76px 88px;
    display: flex;
    flex-direction: column;
    position: relative;
  }
  body::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 14px;
    background: #FF7F4A;
  }
  body::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 14px;
    background: #FF7F4A;
  }
  .badge {
    align-self: flex-start;
    padding: 9px 18px;
    background: #fff;
    border: 2px solid #111827;
    border-radius: 9999px;
    font-family: 'Bricolage Grotesque', 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #111827;
    margin-bottom: 36px;
    box-shadow: 3px 3px 0 #111827;
  }
  h1 {
    font-size: 74px;
    font-weight: 800;
    line-height: 1.05;
    letter-spacing: -0.03em;
    max-width: 1040px;
    text-wrap: balance;
  }
  .subtitle {
    margin-top: 26px;
    font-size: 28px;
    color: #4b5563;
    font-weight: 400;
    line-height: 1.4;
    max-width: 960px;
    text-wrap: balance;
  }
  footer {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .brand {
    display: flex;
    align-items: center;
    gap: 16px;
  }
  .brand img {
    height: 56px;
    width: 56px;
    border-radius: 12px;
  }
  .brand .name {
    font-weight: 800;
    font-size: 32px;
    color: #111827;
    letter-spacing: -0.02em;
  }
  .url {
    font-size: 22px;
    color: #6b7280;
    font-weight: 500;
  }
</style>
</head>
<body>
  ${badge ? `<span class="badge">${escape(badge)}</span>` : ''}
  <h1>${escape(title)}</h1>
  ${subtitle ? `<p class="subtitle">${escape(subtitle)}</p>` : ''}
  <footer>
    <div class="brand">
      <img src="${logoDataUrl}" alt="">
      <span class="name">Youform</span>
    </div>
    <span class="url">youform.com</span>
  </footer>
</body>
</html>`;
}

async function generate({ title, output, subtitle, badge }) {
  if (!title || !output) {
    console.error('Usage: node scripts/generate-og-image.js "Title" output.png [--subtitle "..."] [--badge "..."]');
    process.exit(1);
  }

  const projectRoot = path.resolve(__dirname, '..');
  const logoPath = path.join(projectRoot, 'source/assets/images/youform-logo.png');
  if (!fs.existsSync(logoPath)) {
    throw new Error(`Logo not found at ${logoPath}`);
  }
  const logoDataUrl = 'data:image/png;base64,' + fs.readFileSync(logoPath).toString('base64');

  const html = buildHtml({ title, subtitle, badge, logoDataUrl });
  const outputPath = path.isAbsolute(output) ? output : path.join(projectRoot, output);
  fs.mkdirSync(path.dirname(outputPath), { recursive: true });

  const browser = await puppeteer.launch({
    executablePath: process.env.CHROME_PATH || findChrome(),
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--font-render-hinting=none'],
  });
  try {
    const page = await browser.newPage();
    await page.setViewport({ width: 1200, height: 630, deviceScaleFactor: 2 });
    await page.setContent(html, { waitUntil: 'networkidle0' });
    await page.evaluate(() => document.fonts.ready);
    await page.screenshot({ path: outputPath, type: 'png', omitBackground: false });
    console.log(`OG image saved: ${path.relative(projectRoot, outputPath)} (1200x630 @ 2x)`);
  } finally {
    await browser.close();
  }
}

generate(parseArgs(process.argv)).catch(err => {
  console.error(err);
  process.exit(1);
});
