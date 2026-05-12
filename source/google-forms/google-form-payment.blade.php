---
title: "Google Form Payment: How to Accept Payments in Google Forms (2026)"
description: "Google Forms doesn't accept payments natively. Learn 3 workarounds with Stripe, PayPal, and the Payable Forms add-on — plus a simpler native alternative."
image: "https://youform.com/assets/images/google-form-payment-og.png"
---

@extends('_layouts.main')

@section('body')

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can Google Forms accept payments natively?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Google Forms has no built-in payment field and isn't PCI compliant. To accept payments in a Google Form you have to either link out to a payment processor in the confirmation message, paste a peer-to-peer QR code into a question, or install a third-party add-on like Payable Forms from the Google Workspace Marketplace."
      }
    },
    {
      "@type": "Question",
      "name": "What is Payable Forms for Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Payable Forms is a Google Workspace Marketplace add-on that bolts a Stripe checkout step onto an existing Google Form. After a respondent submits, they're redirected to a Payable-hosted checkout page to complete payment. It requires a Google Workspace account, a paid Payable subscription beyond the free tier, and a connected Stripe account."
      }
    },
    {
      "@type": "Question",
      "name": "How do I add a Stripe payment link to a Google Form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Create a Stripe Payment Link in your Stripe dashboard, then paste that URL into your Google Form's confirmation message under Settings → Presentation → Confirmation message. Respondents see the link after they submit the form. This works but it's two disconnected steps — Google Forms can't tell whether the payment actually completed."
      }
    },
    {
      "@type": "Question",
      "name": "Is it safe to collect credit card numbers in Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Never collect raw credit card numbers in a Google Form text field. Google Forms is not PCI DSS compliant, so storing card data this way violates payment industry rules and exposes you to liability. Always send respondents to a PCI-compliant processor like Stripe or PayPal for the actual card capture."
      }
    },
    {
      "@type": "Question",
      "name": "Can I accept payments with a free Google account?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Only via the linking-out or QR-code workaround. Most Google Forms payment add-ons — including Payable Forms — require a Google Workspace account. If you're on a free @gmail.com account and want a real form-to-payment flow without add-ons, use Youform, which connects directly to Stripe with no Workspace requirement."
      }
    },
    {
      "@type": "Question",
      "name": "How is Youform's payment field different from a Google Forms add-on?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform's payment field is built into the form itself, not bolted on by a third party. Respondents complete the form and pay in one flow on the same page. You connect Stripe once, drop a payment field anywhere in your form, set a fixed or variable amount, and Youform handles the rest — no Google Workspace required, no separate add-on subscription, and unlimited responses on the free plan."
      }
    },
    {
      "@type": "Question",
      "name": "Is Youform's payment feature free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Form building, unlimited forms, and unlimited responses are free forever in Youform. The payment field itself is part of the Pro plan, which is $29/month (or $20/month billed annually). On top of that you only pay Stripe's standard processing fees — no extra per-transaction markup from Youform."
      }
    },
    {
      "@type": "Question",
      "name": "Can I migrate an existing Google Form to Youform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform has a free Google Forms to Youform converter at app.youform.com/googleform-to-youform. Paste your Google Forms URL and it rebuilds the form in Youform — questions, options, multiple choice, and logic intact. From there you can add the Stripe payment field and publish."
      }
    }
  ]
}
</script>
@endpush

<!-- header -->
<div>
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-12">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <p class="inline-block bg-pale-violet border-2 border-black rounded-full px-4 py-1 text-sm font-medium mb-6">
                        Google Forms Payment Guide
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        How to Add Payment to Google Forms
                    </h1>
                    <p class="text-base md:text-lg mt-6 max-w-3xl mx-auto text-gray-700">
                        Google Forms can't collect payments on its own. Here are the three workarounds that actually work — plus a simpler way to accept Stripe payments inside the form itself.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="https://app.youform.com/register" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="#youform-solution" class="underline hover:no-underline text-gray-800">
                            or skip to the simpler solution ↓
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Main Content with TOC Sidebar -->
<div class="bg-white py-20 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <!-- Table of Contents Sidebar -->
            <div class="lg:col-span-2">
                <div class="lg:sticky lg:top-24 pt-10 lg:pt-16">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Table of Contents</h3>
                        <ul class="space-y-3">
                            <li><a href="#native-payments" class="text-aquamarine hover:underline font-medium text-sm">Does Google Forms accept payments?</a></li>
                            <li><a href="#method-link" class="text-aquamarine hover:underline font-medium text-sm">Method 1: Payment link in confirmation</a></li>
                            <li><a href="#method-qr" class="text-aquamarine hover:underline font-medium text-sm">Method 2: Peer-to-peer QR code</a></li>
                            <li><a href="#method-addon" class="text-aquamarine hover:underline font-medium text-sm">Method 3: Payable Forms add-on</a></li>
                            <li><a href="#limitations" class="text-aquamarine hover:underline font-medium text-sm">Limitations of these methods</a></li>
                            <li><a href="#youform-solution" class="text-aquamarine hover:underline font-medium text-sm">Simpler: Youform + Stripe</a></li>
                            <li><a href="#comparison" class="text-aquamarine hover:underline font-medium text-sm">Comparison table</a></li>
                            <li><a href="#faq" class="text-aquamarine hover:underline font-medium text-sm">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12 pt-10 lg:pt-16" id="native-payments">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Does Google Forms accept payments?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Short answer: <strong>no, not directly.</strong> Google Forms has no built-in payment field, no native Stripe or PayPal integration, and is not PCI DSS compliant — which means you legally can't collect raw credit card numbers in a Google Forms text field.
                    </p>
                    <p class="text-lg text-gray-700 mb-4">
                        To turn a Google Form into something that can accept money, you have three options: link out to a payment processor after submission, drop in a peer-to-peer payment QR code, or install a third-party add-on from the Google Workspace Marketplace. Each one works for a narrow use case. Each has trade-offs.
                    </p>
                    <p class="text-lg text-gray-700">
                        We'll walk through all three below, then show you how to skip the workarounds entirely with a form builder that has Stripe payments built in.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Method 1: Payment Link -->
<div class="bg-gray-50 py-20" id="method-link">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-4">
                    <span class="inline-block bg-aquamarine border-2 border-black rounded-full px-3 py-1 text-sm font-bold">Method 1</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Add a payment link in the confirmation message</h2>
                <p class="text-lg text-gray-700 mb-8">
                    The simplest workaround: collect the form responses in Google Forms, then send respondents to a Stripe Payment Link or PayPal.me page in the post-submission confirmation message.
                </p>

                <div class="space-y-6 mb-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 1: Create a payment link</h3>
                        <p class="text-gray-700">
                            In Stripe, go to <strong>Payment Links → New</strong>, set the amount and product, and copy the URL. PayPal has a similar feature called <strong>PayPal.me</strong>. Both give you a hosted checkout page that handles PCI compliance for you.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 2: Open Google Forms settings</h3>
                        <p class="text-gray-700">
                            In your Google Form, click the <strong>Settings</strong> tab, expand <strong>Presentation</strong>, and find <strong>Confirmation message</strong>. This is the text shown to respondents after they hit Submit.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 3: Paste the payment link</h3>
                        <p class="text-gray-700">
                            Replace the default "Your response has been recorded" text with something like: <em>"Thanks! Please complete your payment here: [paste your Stripe/PayPal link]."</em> Google Forms will render the URL as a clickable link.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 4: Test the flow</h3>
                        <p class="text-gray-700">
                            Submit a test response yourself, click through to the payment page, and run a $1 test charge to make sure everything connects correctly.
                        </p>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                    <p class="font-semibold mb-2">⚠️ The catch</p>
                    <p class="text-gray-700">
                        Google Forms can't tell whether the respondent actually paid. You get a form response either way. You'll need to manually reconcile your Google Sheets responses against your Stripe or PayPal dashboard to figure out who paid and who ghosted.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Method 2: QR Code -->
<div class="bg-white py-20" id="method-qr">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-4">
                    <span class="inline-block bg-aquamarine border-2 border-black rounded-full px-3 py-1 text-sm font-bold">Method 2</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Embed a peer-to-peer payment QR code</h2>
                <p class="text-lg text-gray-700 mb-8">
                    For small, informal payments — splitting bills, club dues, classroom fundraisers — you can paste a Venmo, Cash App, or Zelle QR code directly into your Google Form as an image.
                </p>

                <div class="space-y-6 mb-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 1: Generate the QR code</h3>
                        <p class="text-gray-700">
                            Open the Venmo, Cash App, or Zelle mobile app and find the QR code under your profile. Screenshot it or download it from the app.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 2: Add it to your form</h3>
                        <p class="text-gray-700">
                            In your Google Form, click the image icon in the toolbar (looks like a mountain) and upload the QR code. Add a question above it like "Please send $20 to the Venmo above and enter your name below" to capture who paid.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 3: Verify payments manually</h3>
                        <p class="text-gray-700">
                            Check your Venmo or Cash App feed and cross-reference incoming payments against form submissions in Google Sheets.
                        </p>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                    <p class="font-semibold mb-2">⚠️ Use this only for casual collections</p>
                    <p class="text-gray-700">
                        Venmo and Cash App personal accounts aren't designed for business payments — they can freeze accounts that look commercial. This method is fine for splitting a dinner bill, not for selling products.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Method 3: Payable Forms Add-on -->
<div class="bg-gray-50 py-20" id="method-addon">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-4">
                    <span class="inline-block bg-aquamarine border-2 border-black rounded-full px-3 py-1 text-sm font-bold">Method 3</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Install the Payable Forms add-on for Google Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    The closest thing to a "real" payment flow inside Google Forms is a third-party add-on. <strong>Payable Forms</strong> is the most popular option from the Google Workspace Marketplace; <strong>Neartail</strong> and <strong>PayQ</strong> are similar alternatives. All three bolt a Stripe checkout onto an existing Google Form.
                </p>

                <div class="space-y-6 mb-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 1: Install the add-on</h3>
                        <p class="text-gray-700">
                            In your Google Form, click the three-dot menu in the top right and choose <strong>Get add-ons</strong>. Search for "Payable Forms" and install it. You'll need to grant the add-on access to your form data.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 2: Connect Stripe</h3>
                        <p class="text-gray-700">
                            Open the add-on from the puzzle-piece icon, then connect your Stripe account through their OAuth flow. Payable charges its own subscription fee on top of Stripe's transaction fees once you exceed the free tier.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 3: Configure pricing</h3>
                        <p class="text-gray-700">
                            In the add-on sidebar, map your form questions to product prices. You can set a fixed amount per submission or use a multiple-choice question to drive variable pricing (e.g. ticket tiers).
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 4: Publish and test</h3>
                        <p class="text-gray-700">
                            Send your form to a tester. After they submit, Payable redirects them to a hosted checkout page in <em>its</em> domain to complete payment. The respondent never pays inside the Google Form itself.
                        </p>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                    <p class="font-semibold mb-2">⚠️ The catches</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-1 mt-2">
                        <li>Requires a Google Workspace account on most plans — not just a free @gmail.com</li>
                        <li>Payable's free tier is capped (typically 10 transactions/month) — you'll hit a paid subscription quickly</li>
                        <li>Checkout happens on Payable's domain, not yours — breaks branding</li>
                        <li>If the add-on is ever pulled from the Marketplace, your payment flow breaks</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why these methods are limited -->
<div class="bg-white py-20" id="limitations">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why payments in Google Forms are always a workaround</h2>
                <p class="text-lg text-gray-700 mb-8">
                    All three methods above share the same root cause: Google Forms wasn't built as a payment tool. So you end up duct-taping a payment step <em>onto</em> a form instead of <em>into</em> it.
                </p>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold mb-2">💳 No PCI compliance</h3>
                        <p class="text-gray-700">
                            You can't collect card numbers directly in any Google Forms field. Every workaround hands the actual payment off to an external service — which means two systems to maintain.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🔌 No native Stripe or PayPal connection</h3>
                        <p class="text-gray-700">
                            There's no first-party Google integration for payments. You depend on third-party add-ons that can change pricing, deprecate features, or disappear from the Marketplace.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">📊 No payment status in your responses</h3>
                        <p class="text-gray-700">
                            Google Sheets gets the form response, your Stripe dashboard gets the payment. Reconciling who actually paid is manual — and gets painful as volume grows.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🏢 Google Workspace requirement</h3>
                        <p class="text-gray-700">
                            Most add-ons (including Payable Forms) require a paid Google Workspace plan. If you're on a free Gmail account, your only options are linking out or QR codes.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🎨 Broken checkout experience</h3>
                        <p class="text-gray-700">
                            Respondents fill out your branded form, then get bounced to an unfamiliar checkout page on someone else's domain. That handoff is where conversions die.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Youform Solution -->
<div class="bg-amber-50 py-20" id="youform-solution">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">A simpler way: accept payments natively with Youform + Stripe</h2>
                <p class="text-lg text-gray-700 mb-8">
                    <strong>Youform</strong> is a free form builder with a built-in payment field powered by Stripe. No add-on. No Google Workspace. No external checkout page. Respondents fill in the form and pay in one flow — inside your branded form.
                </p>

                <div class="bg-white p-8 rounded-xl border-2 border-black mb-8">
                    <h3 class="text-2xl font-bold mb-6">Set up payments in 3 steps</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">1</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Connect your Stripe account</p>
                                <p class="text-gray-600 text-sm mt-1">One-click Stripe OAuth. Works with any Stripe account — no Workspace required.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">2</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Drag a Payment field into your form</p>
                                <p class="text-gray-600 text-sm mt-1">Set a fixed price, or drive variable pricing from earlier answers (e.g. quantity, tier).</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">3</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Publish — that's it</p>
                                <p class="text-gray-600 text-sm mt-1">Respondents pay inside the form. Successful payments and form data land together in your Youform dashboard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="https://help.youform.com/p/yA5JCb3HH0GWkx/Stripe-payments-in-Youform" target="_blank" class="text-gray-800 hover:underline font-semibold">
                            View the full Stripe setup guide →
                        </a>
                        <p class="text-sm text-gray-500 mt-3">
                            Payment field is on the <a href="/pricing/" class="underline hover:no-underline">Pro plan ($29/mo, or $20/mo billed annually)</a>. Form building and responses are free, unlimited.
                        </p>
                    </div>
                </div>

                <!-- Live demo embed -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-3">See it in action</h3>
                    <p class="text-gray-700 mb-6">
                        Here's an actual Youform with the Stripe payment field embedded. Fill in a name, hit next, and you'll see the in-form payment step — no redirect, no domain switch.
                    </p>
                    <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl overflow-hidden">
                        <iframe
                            src="https://app.youform.com/forms/zlbbew3s"
                            loading="lazy"
                            width="100%"
                            height="600"
                            frameborder="0"
                            allow="payment *"
                            title="Youform demo form with Stripe payment field"
                            class="block w-full"></iframe>
                    </div>
                </div>

                <!-- Migration callout -->
                <div class="bg-pale-violet border-2 border-black rounded-xl p-6 mb-12 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h3 class="text-xl font-bold mb-1">Already have a Google Form?</h3>
                        <p class="text-gray-800">
                            Paste your Google Forms URL into our free converter and we'll rebuild it in Youform — questions, options, and logic intact. Then drop in the payment field.
                        </p>
                    </div>
                    <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="inline-block bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-6 py-2 text-black rounded-md font-semibold whitespace-nowrap">
                        Convert your form →
                    </a>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-6">What you get vs. a Google Forms add-on</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Native Stripe integration</strong> — no third party between you and your money, no extra subscription fee on top of Stripe's.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Payment inside the form</strong> — respondents stay on your branded form for the whole flow. No domain switch, no broken handoff.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Variable pricing from form logic</strong> — calculate the amount from quantity, plan, or any earlier answer. Great for order forms, ticketing, donations.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Payment status in your dashboard</strong> — see which submissions paid and which didn't, without cross-checking Stripe manually.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Free plan with unlimited responses</strong> — no per-transaction caps like Payable's free tier. You only pay Stripe's standard processing fees.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>No Google Workspace required</strong> — runs on any account. Built for solo founders, freelancers, and small teams as much as enterprise.</div>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <p class="text-sm text-gray-600 mt-3">No credit card required. Free forever for unlimited forms and responses.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison Table -->
<div class="bg-white py-20" id="comparison">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
            Google Forms payment options vs. Youform
        </h2>
        <div class="max-w-5xl mx-auto overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
            <table class="min-w-full text-left text-sm md:text-base">
                <thead class="bg-gray-100 border-b-2 border-black">
                    <tr>
                        <th class="px-6 py-4"></th>
                        <th class="px-6 py-4 text-center">Google Forms<br><span class="text-xs font-normal text-gray-500">(link out)</span></th>
                        <th class="px-6 py-4 text-center">Google Forms<br><span class="text-xs font-normal text-gray-500">(Payable add-on)</span></th>
                        <th class="px-6 py-4 text-center bg-amber-50">Youform</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Payment inside the form</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Native Stripe integration</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">Via third party</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Works without Google Workspace</td>
                        <td class="px-6 py-4 text-center">✅</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Variable pricing from form logic</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">Limited</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Payment status in submissions</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">✅</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Stays on your branded domain</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Cost to enable payments</td>
                        <td class="px-6 py-4 text-center">Free (Stripe/PayPal fees only)</td>
                        <td class="px-6 py-4 text-center">Workspace + Payable subscription</td>
                        <td class="px-6 py-4 text-center bg-amber-50">Youform Pro ($29/mo)</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold bg-gray-50">Transaction cap on paid plan</td>
                        <td class="px-6 py-4 text-center">None</td>
                        <td class="px-6 py-4 text-center">Varies by tier</td>
                        <td class="px-6 py-4 text-center bg-amber-50">Unlimited</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-center text-sm text-gray-500 mt-4">Add-on pricing reflects Payable Forms' published free tier at time of writing. Verify current limits before signing up.</p>
    </div>
</div>

@include('_partials.testimonials-carousel')

<!-- FAQ Section -->
<div class="bg-amber-50 py-20" id="faq">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
                    Frequently Asked Questions
                </h2>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can Google Forms accept payments natively?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    No. Google Forms has no built-in payment field and isn't PCI compliant. To accept payments in a Google Form you have to either link out to a payment processor in the confirmation message, paste a peer-to-peer QR code into a question, or install a third-party add-on like Payable Forms from the Google Workspace Marketplace.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What is Payable Forms for Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Payable Forms is a Google Workspace Marketplace add-on that bolts a Stripe checkout step onto an existing Google Form. After a respondent submits, they're redirected to a Payable-hosted checkout page to complete payment. It requires a Google Workspace account, a paid Payable subscription beyond the free tier, and a connected Stripe account.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How do I add a Stripe payment link to a Google Form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Create a Stripe Payment Link in your Stripe dashboard, then paste that URL into your Google Form's confirmation message under Settings → Presentation → Confirmation message. Respondents see the link after they submit the form. This works but it's two disconnected steps — Google Forms can't tell whether the payment actually completed. <a href="https://help.youform.com/p/yA5JCb3HH0GWkx/Stripe-payments-in-Youform" target="_blank" class="text-aquamarine hover:underline font-semibold">Youform connects Stripe directly to the form</a> so payment and submission live together.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is it safe to collect credit card numbers in Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    No. Never collect raw credit card numbers in a Google Form text field. Google Forms is not PCI DSS compliant, so storing card data this way violates payment industry rules and exposes you to liability. Always send respondents to a PCI-compliant processor like Stripe or PayPal for the actual card capture — or use a form builder with a built-in PCI-compliant payment field.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I accept payments with a free Google account?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Only via the linking-out or QR-code workaround. Most Google Forms payment add-ons — including Payable Forms — require a Google Workspace account. If you're on a free @gmail.com account and want a real form-to-payment flow without add-ons, <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">use Youform</a>, which connects directly to Stripe with no Workspace requirement.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How is Youform's payment field different from a Google Forms add-on?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Youform's payment field is built into the form itself, not bolted on by a third party. Respondents complete the form and pay in one flow on the same page. You connect Stripe once, drop a payment field anywhere in your form, set a fixed or variable amount, and Youform handles the rest — no Google Workspace required, no separate add-on subscription, and unlimited responses on the free plan. See also the <a href="/google-forms-alternative/" class="text-aquamarine hover:underline font-semibold">full Google Forms alternative comparison</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is Youform's payment feature free?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Form building, unlimited forms, and unlimited responses are free forever in Youform. The payment field itself is part of the <a href="/pricing/" class="text-aquamarine hover:underline font-semibold">Pro plan</a>, which is $29/month (or $20/month billed annually). On top of that you only pay Stripe's standard processing fees — no extra per-transaction markup from Youform.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I migrate an existing Google Form to Youform?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform has a free <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="text-aquamarine hover:underline font-semibold">Google Forms to Youform converter</a>. Paste your Google Forms URL and it rebuilds the form in Youform — questions, options, multiple choice, and logic intact. From there you can add the Stripe payment field and publish.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="bg-aquamarine py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-6">
            Skip the Google Forms workaround
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Build the form, drop in a payment field, connect Stripe, publish. That's it — no add-ons, no Workspace, no checkout handoff.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
            Create free account
        </a>
        <p class="text-sm text-gray-700 mt-4">Free account · Unlimited responses · Payment field on Pro ($29/mo)</p>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', ['prompt' => 'I+need+a+form+that+collects+payments+via+Stripe'])

@include('partials.footer')

@endsection
