---
title: "How to Add a Signature to Google Forms (Free + ESIGN-Compliant) - Youform"
description: "Google Forms has no native signature field. Here's how to add an ESIGN-compliant e-signature to your form — free, with IP audit trail and signed PDF export."
image: "https://youform.com/assets/images/google-forms-signature-og.png"
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
      "name": "Can Google Forms collect signatures?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not natively. Google Forms has no built-in signature field. To collect signatures from a Google Form you have to install a third-party Marketplace add-on, link out to a separate e-sign service like DocuSign, or paste a signature image into a Google Doc generated from the response. All three are workarounds with limits — most add-ons start at ~$36/month and cap you at 100 submissions on the entry tier."
      }
    },
    {
      "@type": "Question",
      "name": "How much do Google Forms signature add-ons cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most third-party Google Forms signature add-ons start at around $36/month, and the entry tier is typically capped at 100 signed submissions. You'll also need a paid Google Workspace account on most plans. Youform includes a real signature field on the free plan with unlimited submissions and no Workspace requirement."
      }
    },
    {
      "@type": "Question",
      "name": "Are e-signatures collected through a form legally binding?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under the U.S. ESIGN Act and UETA — and the equivalent eIDAS framework in the EU — an e-signature is enforceable when you can show intent to sign, consent to transact electronically, and a record that ties the signature to the signer. Youform captures the signer's IP address and timestamp with every submission and stores the signed record as part of the response, which is the audit trail those laws look for. We're not your lawyer — but every Youform signature ships with the metadata you'd need to defend it."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform generate a signed PDF of the submission?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every signed submission can be downloaded as a PDF that includes the form questions, the respondent's answers, the drawn signature, and the IP + timestamp audit trail. You can also auto-email the PDF to the respondent and to yourself the moment they submit."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Youform signature field really free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The signature field is included on Youform's forever-free plan with unlimited forms and unlimited responses. There's no per-signature charge, no submission cap, and no Google Workspace requirement. PDF receipt generation is included too."
      }
    },
    {
      "@type": "Question",
      "name": "Can I migrate an existing Google Form to Youform and add a signature field?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — and it's one click. Paste your Google Forms URL into Youform's free converter at app.youform.com/googleform-to-youform. It rebuilds your form in Youform with questions, options, multiple choice, and logic intact. Then drag a signature field into the form, publish, and you're done."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between a signature image upload and a real e-signature field?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An image upload is just a file — the respondent draws or photographs their signature elsewhere and uploads the file to your form. A real signature field captures the signature live, draws it inline with the mouse or finger, and binds it to that submission's IP and timestamp. Google Forms only supports the image-upload workaround. Youform supports the real signature field."
      }
    },
    {
      "@type": "Question",
      "name": "Can you add a signature in Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not as a native field — Google Forms has no built-in signature question type. You can fake it three ways: install a paid Marketplace add-on like BoloSign or formesign, link out to a separate e-sign service like DocuSign in the confirmation message, or add a File Upload question and ask respondents to upload a photo of their handwritten signature. All three are workarounds. For a real inline signature field that binds the signature to the submission, use Youform — it's free and unlimited."
      }
    },
    {
      "@type": "Question",
      "name": "How do I add an electronic signature to a Google Form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Google Forms doesn't have an electronic signature field built in, so you'll need a third-party add-on like Signature for Google Forms by BoloSign, or you'll need to redirect respondents to an e-sign tool like DocuSign or HelloSign after they submit. Add-ons typically start at around $36/month and cap you at 100 signatures on the entry tier. The simpler path is to switch to a form builder that has a native electronic signature field — Youform includes one on the free plan with unlimited signed submissions and an IP + timestamp audit trail."
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
                        Google Forms Signature Guide
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        How to Add a Signature to Google Forms
                        <span class="block text-2xl sm:text-3xl xl:text-4xl mt-4 text-gray-700">Free + ESIGN-Compliant</span>
                    </h1>
                    <p class="text-base md:text-lg mt-6 max-w-3xl mx-auto text-gray-700">
                        Google Forms doesn't have a native signature field, electronic or otherwise. Here's how to add a signature in Google Forms — and the simpler way to collect a real e-signature in a form, free and unlimited, with an IP + timestamp audit trail and a downloadable signed PDF.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="https://app.youform.com/register" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="#youform-solution" class="underline hover:no-underline text-gray-800">
                            or skip to the free signature field ↓
                        </a>
                    </div>
                    <p class="text-xs text-gray-600 mt-4">Free forever · Unlimited signed submissions · No Google Workspace needed</p>
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
                            <li><a href="#native-signatures" class="text-aquamarine hover:underline font-medium text-sm">Does Google Forms support signatures?</a></li>
                            <li><a href="#workarounds-fall-short" class="text-aquamarine hover:underline font-medium text-sm">Why the workarounds fall short</a></li>
                            <li><a href="#youform-solution" class="text-aquamarine hover:underline font-medium text-sm">Youform's native signature field</a></li>
                            <li><a href="#legal-binding" class="text-aquamarine hover:underline font-medium text-sm">IP + timestamp audit trail</a></li>
                            <li><a href="#pdf-receipt" class="text-aquamarine hover:underline font-medium text-sm">Signed PDF receipt</a></li>
                            <li><a href="#convert" class="text-aquamarine hover:underline font-medium text-sm">One-click Google Form import</a></li>
                            <li><a href="#comparison" class="text-aquamarine hover:underline font-medium text-sm">Comparison table</a></li>
                            <li><a href="#faq" class="text-aquamarine hover:underline font-medium text-sm">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12 pt-10 lg:pt-16" id="native-signatures">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Does Google Forms have a signature option?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Short answer: <strong>no, not natively.</strong> Google Forms has no signature question type, no electronic signature field, no draw-to-sign field, and no built-in way to bind a signature to a respondent. If you want a real signature in Google Forms — one that respondents can actually draw and that's tied to their submission — you have three workaround options. Each comes with its own catch.
                    </p>

                    <div class="space-y-6 mt-8">
                        <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-6xl">
                            <h3 class="text-2xl font-bold mb-2">Workaround 1: Install a Marketplace add-on</h3>
                            <p class="text-gray-700 mb-3">
                                Add-ons like <strong>BoloSign</strong>, <strong>Signature for Google Forms</strong>, or <strong>formesign</strong> bolt a signature step onto your form. The respondent flow is rough: they hit a button that opens the add-on in a pop-out window, draw their signature in <em>that</em> window, copy the resulting image, then paste it back into a question on the original form.
                            </p>
                            <p class="text-sm text-gray-600">
                                <strong class="text-black">The catch:</strong> entry tiers start at around <strong>$36/month</strong> and cap you at <strong>~100 signed submissions</strong>. Most require a paid Google Workspace plan. The signing UX is a click-out-copy-paste loop most respondents will abandon — and the signature lives on the add-on's domain, not yours.
                            </p>
                        </div>

                        <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-6xl">
                            <h3 class="text-2xl font-bold mb-2">Workaround 2: Link out to DocuSign / HelloSign</h3>
                            <p class="text-gray-700 mb-3">
                                Paste a DocuSign or HelloSign envelope URL into your Google Form's confirmation message. The respondent submits the form, then clicks the link to sign separately.
                            </p>
                            <p class="text-sm text-gray-600">
                                <strong class="text-black">The catch:</strong> two disconnected systems. Google Forms can't tell whether the signature was ever completed — you'll spend the rest of your week reconciling form responses against DocuSign envelopes.
                            </p>
                        </div>

                        <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-6xl">
                            <h3 class="text-2xl font-bold mb-2">Workaround 3: Image upload field</h3>
                            <p class="text-gray-700 mb-3">
                                Add a "File upload" question and ask respondents to upload a photo or scan of their handwritten signature. You'll get a JPG attached to their response in Google Drive.
                            </p>
                            <p class="text-sm text-gray-600">
                                <strong class="text-black">The catch:</strong> it's not a real signature — it's a photo of one, drawn elsewhere, with no link to the actual submission. No IP, no timestamp binding, no audit trail. Most courts will laugh at this if you ever need to enforce it.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why workarounds fall short -->
<div class="bg-gray-50 py-20" id="workarounds-fall-short">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why every Google Forms signature workaround falls short</h2>
                <p class="text-lg text-gray-700 mb-8">
                    All three workarounds share the same root problem: Google Forms was never designed to collect signed submissions. So you end up duct-taping a signature flow <em>onto</em> the form instead of <em>into</em> it.
                </p>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold mb-2">💸 You pay a premium for a basic field</h3>
                        <p class="text-gray-700">
                            $36/month for 100 signatures is roughly <strong>36¢ per submission</strong> — just to add one field type. That's before Google Workspace fees stack on top.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🪟 A click-out-copy-paste signing flow</h3>
                        <p class="text-gray-700">
                            The popular signature add-ons make the respondent click a button that opens a pop-out window, draw their signature there, copy the image, then paste it back into a question in the original form. Every extra step is a drop-off — and most respondents on mobile will quit before the second click.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">⚖️ No legally defensible audit trail</h3>
                        <p class="text-gray-700">
                            Image uploads have no IP, no timestamp, and no tie to the submitter. ESIGN and UETA both expect a record that links the signature to the signer — a JPG in a Drive folder doesn't cut it.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">📄 No signed PDF you can hand a client</h3>
                        <p class="text-gray-700">
                            You can't auto-generate a "here's what you signed" PDF from a Google Form. Respondents finish the flow with nothing in their inbox. Neither do you.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🎨 Broken brand handoff</h3>
                        <p class="text-gray-700">
                            Respondents fill out your form, then get bounced to an add-on's domain or a DocuSign envelope to actually sign. The handoff is where conversions die — and where signers get suspicious.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🏢 Google Workspace tax</h3>
                        <p class="text-gray-700">
                            Most signature add-ons (and most marketplace add-ons in general) require a paid Workspace plan. If you're on a free @gmail.com, half the options on the marketplace are off-limits.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🔌 Marketplace risk</h3>
                        <p class="text-gray-700">
                            Add-ons get pulled, repriced, or deprecated. When that happens, your signature flow stops working — and the signed records you collected are stuck inside someone else's tool.
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">A simpler way: a real signature field, built into the form</h2>
                <p class="text-lg text-gray-700 mb-8">
                    <strong>Youform</strong> is a free form builder with a native signature field. Respondents draw their signature inline — no pop-out window, no copying the signature image, no pasting it back into the form. Mouse, trackpad, or finger on mobile, all in one flow. Youform binds the signature to that submission with the signer's IP and timestamp. No add-on, no Workspace, no domain switch.
                </p>

                <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl overflow-hidden mb-4">
                    <img src="/assets/images/youform-signature-field-demo.png" alt="Youform's native signature field — draw inline with mouse, trackpad, or finger, no pop-out window or copy-paste" loading="lazy" class="w-full">
                </div>
                <p class="text-sm text-gray-500 italic text-center mb-10">The signature pad lives inline with the rest of the form. Draw, hit Submit — done.</p>

                <div class="mb-10">
                    <h3 class="text-2xl font-bold mb-3">Try the signature form yourself</h3>
                    <p class="text-gray-700 mb-6">
                        Here's a real Youform with a signature field. Fill in a few details, draw your signature, and submit — no signup needed.
                    </p>
                    <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl overflow-hidden lg:-mx-24 xl:-mx-40">
                        <iframe
                            src="https://app.youform.com/forms/l1yfwudk"
                            loading="lazy"
                            width="100%"
                            height="650"
                            frameborder="0"
                            title="Youform signature field live demo"
                            class="block w-full"></iframe>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl border-2 border-black mb-8">
                    <h3 class="text-2xl font-bold mb-6">Add signature collection in 3 steps</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">1</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Drag a Signature field into your form</p>
                                <p class="text-gray-600 text-sm mt-1">In the Youform builder, the signature block is right there in the field picker alongside text, email, and the rest. No installation, no OAuth.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">2</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Publish — that's it</p>
                                <p class="text-gray-600 text-sm mt-1">Share the link or embed the form. Respondents see a clean signature pad inline with the rest of the form.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">3</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Get the signed record + PDF in your dashboard</p>
                                <p class="text-gray-600 text-sm mt-1">Every signed submission lands with the drawn signature, the IP, the timestamp, and a downloadable PDF — all in one place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-500">
                            Signature field is <strong>free</strong> on every plan — including the <a href="/pricing/" class="underline hover:no-underline">forever-free tier</a> with unlimited forms and unlimited responses.
                        </p>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-6">What you get vs. a Google Forms signature add-on</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Free with unlimited signed submissions</strong> — no 100-submission cap, no $36/month entry tier, no per-signature charge.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Signature inside the form</strong> — respondents stay on your branded form. No redirect to an add-on, no DocuSign envelope, no domain switch.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>IP + timestamp audit trail on every submission</strong> — the metadata ESIGN and UETA expect from an enforceable e-signature.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Auto-generated signed PDF</strong> — emailed to the respondent (and you) the moment they submit. Downloadable from your dashboard forever.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>No Google Workspace required</strong> — runs on any account. Solo founders, freelancers, schools, nonprofits — anyone.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Mobile-native signing</strong> — respondents sign with a finger on iOS or Android. No app, no upload, no scanning.</div>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <p class="text-sm text-gray-600 mt-3">Signature field free on every plan. Unlimited signed submissions. No credit card.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Legal binding section -->
<div class="bg-white py-20" id="legal-binding">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <span class="inline-block bg-pale-violet border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-4">Audit trail</span>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Every signature ships with the metadata to make it stick</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Under the U.S. <strong>ESIGN Act</strong> and <strong>UETA</strong> — and the equivalent <strong>eIDAS</strong> framework in the EU — an e-signature is enforceable when you can prove three things: the signer intended to sign, they consented to do business electronically, and there's a record that ties the signature back to them. The third one is where most form-based signatures fall apart. Youform doesn't.
                </p>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-8 mb-8">
                    <h3 class="text-2xl font-bold mb-4">What Youform captures on every signed submission</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-aquamarine flex items-center justify-center rounded-md border-2 border-black mr-4 flex-shrink-0">
                                <span class="text-xl">🌐</span>
                            </div>
                            <div>
                                <p class="font-bold">Signer IP address</p>
                                <p class="text-sm text-gray-700">The IP the submission was sent from, logged at the moment of signing.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-vivid-yellow flex items-center justify-center rounded-md border-2 border-black mr-4 flex-shrink-0">
                                <span class="text-xl">🕒</span>
                            </div>
                            <div>
                                <p class="font-bold">UTC timestamp</p>
                                <p class="text-sm text-gray-700">Down-to-the-second record of when the signature was drawn and submitted.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-coral flex items-center justify-center rounded-md border-2 border-black mr-4 flex-shrink-0">
                                <span class="text-xl">✍️</span>
                            </div>
                            <div>
                                <p class="font-bold">The drawn signature</p>
                                <p class="text-sm text-gray-700">Vector + raster copy of the signature as the respondent actually drew it.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-pale-violet flex items-center justify-center rounded-md border-2 border-black mr-4 flex-shrink-0">
                                <span class="text-xl">📋</span>
                            </div>
                            <div>
                                <p class="font-bold">Full submission record</p>
                                <p class="text-sm text-gray-700">Every answer the signer gave, frozen against the form version they signed.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-sm text-gray-600 italic">
                    Not legal advice — we're a form builder, not your lawyer. But every Youform signature ships with the same audit trail you'd build into a dedicated e-sign tool, so when you do ask your lawyer, they have something to work with.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- PDF Receipt section -->
<div class="bg-gray-50 py-20" id="pdf-receipt">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <span class="inline-block bg-vivid-yellow border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-4">Signed PDF</span>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Every signed submission comes with a downloadable PDF</h2>
                <p class="text-lg text-gray-700 mb-8">
                    The moment a respondent hits Submit, Youform generates a clean PDF receipt of what they just signed — every question, every answer, the drawn signature, and the IP + timestamp at the bottom. Auto-email it to the signer. Auto-email a copy to yourself. Or download it from the dashboard whenever you need to hand someone a hard copy.
                </p>

                <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl p-4 md:p-8 mb-8">
                    <img src="/assets/images/youform-signed-submission-pdf.png" alt="Sample Youform signed submission PDF with respondent name, email, company, and drawn signature" loading="lazy" class="w-full max-w-2xl mx-auto rounded-lg">
                </div>
                <p class="text-sm text-gray-500 italic text-center mb-12">A real signed submission from a Youform — every answer, the drawn signature, and the timestamp at the top.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl">
                        <div class="w-12 h-12 bg-aquamarine flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl">📧</span>
                        </div>
                        <h3 class="text-lg font-bold mt-3">Auto-email to signer</h3>
                        <p class="text-sm text-gray-600 mt-2">The signer gets a copy of the signed PDF in their inbox immediately. Great for client agreements.</p>
                    </div>
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl">
                        <div class="w-12 h-12 bg-coral flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl">📥</span>
                        </div>
                        <h3 class="text-lg font-bold mt-3">Download from dashboard</h3>
                        <p class="text-sm text-gray-600 mt-2">Every signed submission's PDF is one click away in the responses view. No add-on logins, no exports.</p>
                    </div>
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl">
                        <div class="w-12 h-12 bg-pale-violet flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl">⚡</span>
                        </div>
                        <h3 class="text-lg font-bold mt-3">Send to Zapier / Drive</h3>
                        <p class="text-sm text-gray-600 mt-2">Push the signed PDF into Google Drive, Dropbox, or a CRM via Youform's 6,000+ integrations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Convert your Google Form -->
<div class="bg-aquamarine py-20" id="convert">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="inline-block bg-white border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-4">One-click import</span>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Already have a Google Form? Convert it in one click.</h2>
                <p class="text-lg mb-6">
                    You don't have to rebuild your form from scratch to add a signature. Paste your Google Forms URL into Youform's free converter — we'll rebuild the form in Youform with every question, option, multiple choice, and logic branch intact. Then drag a signature field into the right place, publish, and you're done.
                </p>
                <ul class="space-y-2 mb-8 text-gray-900">
                    <li class="flex items-start"><span class="mr-2">✅</span> Keeps your existing questions and order</li>
                    <li class="flex items-start"><span class="mr-2">✅</span> Preserves multiple choice, dropdowns, and short/long text</li>
                    <li class="flex items-start"><span class="mr-2">✅</span> Carries over conditional logic</li>
                    <li class="flex items-start"><span class="mr-2">✅</span> Free — no signup required to try the converter</li>
                </ul>
                <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                    Convert your Google Form →
                </a>
            </div>
            <div class="lg:col-span-5">
                <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl p-6">
                    <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Paste a Google Forms URL</p>
                    <div class="bg-gray-50 border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-600 font-mono mb-4 truncate">
                        docs.google.com/forms/d/e/1FAIpQLSe...
                    </div>
                    <div class="flex items-center text-sm text-gray-700 mb-2">
                        <span class="text-aquamarine font-bold mr-2">→</span> Rebuilt in Youform
                    </div>
                    <div class="flex items-center text-sm text-gray-700 mb-2">
                        <span class="text-aquamarine font-bold mr-2">→</span> Add Signature field
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <span class="text-aquamarine font-bold mr-2">→</span> Publish + collect signed PDFs
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison Table -->
<div class="bg-white py-20" id="comparison">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
            Google Forms signature options vs. Youform
        </h2>
        <div class="max-w-5xl mx-auto overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
            <table class="min-w-full text-left text-sm md:text-base">
                <thead class="bg-gray-100 border-b-2 border-black">
                    <tr>
                        <th class="px-6 py-4"></th>
                        <th class="px-6 py-4 text-center">Google Forms<br><span class="text-xs font-normal text-gray-500">(image upload)</span></th>
                        <th class="px-6 py-4 text-center">Google Forms<br><span class="text-xs font-normal text-gray-500">(signature add-on)</span></th>
                        <th class="px-6 py-4 text-center bg-amber-50">Youform</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Real draw-to-sign field</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">✅</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Signature inside the form (no redirect)</td>
                        <td class="px-6 py-4 text-center">N/A</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">IP + timestamp audit trail</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">Varies</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Auto-generated signed PDF</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">Paid add-on tiers only</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Works without Google Workspace</td>
                        <td class="px-6 py-4 text-center">✅</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Mobile draw-to-sign</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center">✅</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Submission cap on entry plan</td>
                        <td class="px-6 py-4 text-center">Unlimited</td>
                        <td class="px-6 py-4 text-center">~100/month</td>
                        <td class="px-6 py-4 text-center bg-amber-50">Unlimited</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold bg-gray-50">Cost to enable signatures</td>
                        <td class="px-6 py-4 text-center">Free (but it's just a photo)</td>
                        <td class="px-6 py-4 text-center">From ~$36/month + Workspace</td>
                        <td class="px-6 py-4 text-center bg-amber-50"><strong>Free</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-center text-sm text-gray-500 mt-4">Add-on pricing reflects published entry-tier pricing across popular Google Forms signature add-ons at time of writing. Verify current limits before signing up.</p>
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
                                <p class="text-black font-medium flex-grow">Can Google Forms collect signatures?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Not natively. Google Forms has no built-in signature field. To collect signatures you have to install a third-party Marketplace add-on, link out to a separate e-sign service like DocuSign, or paste a signature image into a Google Doc generated from the response. All three are workarounds with limits — most add-ons start at ~$36/month and cap you at 100 submissions on the entry tier. <a href="#youform-solution" class="text-aquamarine hover:underline font-semibold">Youform has a real signature field on the free plan</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How much do Google Forms signature add-ons cost?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Most third-party Google Forms signature add-ons start at around <strong>$36/month</strong>, and the entry tier is typically capped at <strong>100 signed submissions</strong>. You'll also need a paid Google Workspace account on most plans. <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">Youform includes a real signature field on the free plan</a> with unlimited submissions and no Workspace requirement.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Are e-signatures collected through a form legally binding?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Under the U.S. ESIGN Act and UETA — and the equivalent eIDAS framework in the EU — an e-signature is enforceable when you can show intent to sign, consent to transact electronically, and a record that ties the signature to the signer. Youform captures the signer's IP address and timestamp with every submission and stores the signed record as part of the response, which is the audit trail those laws look for. We're not your lawyer — but every Youform signature ships with the metadata you'd need to defend it.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Does Youform generate a signed PDF of the submission?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Every signed submission can be downloaded as a PDF that includes the form questions, the respondent's answers, the drawn signature, and the IP + timestamp audit trail. You can also auto-email the PDF to the respondent and to yourself the moment they submit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is the Youform signature field really free?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. The signature field is included on Youform's <a href="/pricing/" class="text-aquamarine hover:underline font-semibold">forever-free plan</a> with unlimited forms and unlimited responses. There's no per-signature charge, no submission cap, and no Google Workspace requirement. PDF receipt generation is included too.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I migrate an existing Google Form to Youform and add a signature field?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes — and it's one click. Paste your Google Forms URL into Youform's free <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="text-aquamarine hover:underline font-semibold">Google Forms converter</a>. It rebuilds your form in Youform with questions, options, multiple choice, and logic intact. Then drag a signature field into the form, publish, and you're done. See also the <a href="/google-forms-alternative/" class="text-aquamarine hover:underline font-semibold">full Google Forms alternative comparison</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the difference between a signature image upload and a real e-signature field?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    An image upload is just a file — the respondent draws or photographs their signature elsewhere and uploads the file to your form. A real signature field captures the signature live, draws it inline with the mouse or finger, and binds it to that submission's IP and timestamp. Google Forms only supports the image-upload workaround. Youform supports the real signature field.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can you add a signature in Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Not as a native field — Google Forms has no built-in signature question type. You can fake it three ways: install a paid Marketplace add-on like BoloSign or formesign, link out to a separate e-sign service like DocuSign in the confirmation message, or add a File Upload question and ask respondents to upload a photo of their handwritten signature. All three are workarounds. For a real inline signature field that binds the signature to the submission, <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">use Youform</a> — it's free and unlimited.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How do I add an electronic signature to a Google Form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Google Forms doesn't have an electronic signature field built in, so you'll need a third-party add-on like Signature for Google Forms by BoloSign, or you'll need to redirect respondents to an e-sign tool like DocuSign or HelloSign after they submit. Add-ons typically start at around $36/month and cap you at 100 signatures on the entry tier. The simpler path is to switch to a form builder that has a native electronic signature field — <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">Youform includes one on the free plan</a> with unlimited signed submissions and an IP + timestamp audit trail.
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
            Collect signed submissions, for free
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Drag in a signature field, publish, and start collecting legally defensible signed submissions with PDF receipts. Free, unlimited, no Workspace needed.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
            Create free account
        </a>
        <p class="text-sm text-gray-700 mt-4">Free forever · Unlimited signed submissions · No credit card required</p>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', ['prompt' => 'I+need+a+form+that+collects+a+legally+binding+signature+and+emails+a+signed+PDF'])

@include('partials.footer')

@endsection
