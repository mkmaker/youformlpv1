---
title: "Google Forms Guide: Tips, Tricks & Hidden Limits (2026) - Youform"
description: "The complete Google Forms guide — useful tips and tricks, the limits nobody tells you about, and how to add signatures, payments, NPS, custom domains, and more."
image: "https://youform.com/assets/images/google-forms-og.png"
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
      "name": "Is Google Forms really free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Google Forms is free with any Google account and includes unlimited forms and unlimited responses. The catch is the feature ceiling — there's no native signature field, no payments, no custom domain, no logo upload on free accounts, and no built-in NPS or CSAT scoring. Most 'paid' Google Forms features come from third-party Marketplace add-ons, not from Google."
      }
    },
    {
      "@type": "Question",
      "name": "What can't Google Forms do?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Google Forms has no native support for: e-signatures, payments, custom domains, post-submit redirects on free accounts, searchable dropdowns, file uploads from non-Google users, NPS scoring, conditional thank-you pages, or removing Google branding. Each of these can be hacked in with add-ons, App Script, or a Workspace plan — or solved natively in a different form builder."
      }
    },
    {
      "@type": "Question",
      "name": "Can Google Forms collect signatures or payments?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not natively. Signatures require a Marketplace add-on (typically $36/month and capped at ~100 submissions) or a workaround like uploading a photo of a handwritten signature. Payments require either pasting a Stripe/PayPal link into the confirmation message or installing the Payable Forms add-on. Both features are built-in fields in Youform with no add-on required."
      }
    },
    {
      "@type": "Question",
      "name": "How do I make Google Forms look better?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Google Forms gives you four levers: change the header image, pick from ~12 themes, swap the accent color, and change the font family. You can't customize button colors, button text, field styling, page transitions, or remove the Google branding at the bottom. For real branding — your logo, your colors, your fonts, your domain — you need a form builder that supports custom CSS or a brand kit."
      }
    },
    {
      "@type": "Question",
      "name": "Is Google Forms good for business use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It's fine for internal surveys, event RSVPs, and lightweight data collection inside Google Workspace. It's a poor fit for customer-facing forms where you need a branded experience, payments, signed agreements, NPS/CSAT analytics, or compliance audit trails. Most teams outgrow Google Forms the moment they need to take a payment, collect a signature, or send respondents through a branded URL."
      }
    },
    {
      "@type": "Question",
      "name": "What's the best free alternative to Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform is the closest free-forever alternative — unlimited forms, unlimited responses, a one-click Google Forms importer, plus the native fields Google Forms lacks (signature, Stripe payment, NPS, custom domain, branded redirects, searchable dropdowns). No Google Workspace required."
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
                        The Google Forms Guide
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Google Forms: tips, tricks, and the limits nobody tells you about
                    </h1>
                    <p class="text-base md:text-lg mt-6 max-w-3xl mx-auto text-gray-700">
                        Google Forms is free, fast, and good enough for a lot of jobs. But the moment you need a signature, a payment, a branded URL, or anything beyond the basics, you'll hit a wall. Here's the honest map — what Google Forms can do, what it can't, and the cleanest workarounds for each gap.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#add-features" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                            Browse the guides
                        </a>
                        <a href="/google-forms-alternative/" class="underline hover:no-underline text-gray-800">
                            or skip to the Youform alternative ↓
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

<!-- What Google Forms is great at + where it falls short -->
<div class="bg-white py-20 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3 pt-10 lg:pt-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Google Forms is great at — and where it stops</h2>
                <p class="text-lg text-gray-700 mb-10">
                    Before you reach for an add-on or a different tool, know the actual shape of the product. Google Forms is a free, unlimited, Workspace-friendly form builder. It's also stuck in 2014 on a long list of features most teams take for granted in 2026.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-9 h-9 bg-aquamarine border-2 border-black rounded-md flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-black">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">What Google Forms does well</h3>
                        </div>
                        <ul class="space-y-2.5 text-gray-700">
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Unlimited forms and unlimited responses, free</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Auto-syncs to Google Sheets in real time</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Section logic and question branching</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Quiz mode with auto-grading and points</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Native file upload for Google-signed-in users</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Collaborative editing across a Workspace team</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>Built-in summary charts on the Responses tab</span></li>
                        </ul>
                    </div>
                    <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-9 h-9 bg-coral border-2 border-black rounded-md flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-black">
                                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">What it can't do natively</h3>
                        </div>
                        <ul class="space-y-2.5 text-gray-700">
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No e-signature field</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No Stripe / PayPal payment field</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No custom domain or custom URL</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No NPS, CSAT, or CES scoring</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No searchable dropdown for long lists</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No redirect after submit on free accounts</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No way to remove the Google branding</span></li>
                            <li class="flex items-start gap-2.5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5"><circle cx="10" cy="10" r="8" /></svg><span>No file upload for non-Google respondents</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add features Google Forms is missing -->
<div class="bg-amber-50 py-20" id="add-features">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-block bg-pale-violet border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-4">Fix-the-gap guides</span>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Add what Google Forms is missing</h2>
            <p class="text-lg text-gray-700">
                Each of these is a feature people regularly ask Google Forms for — and either find a workaround add-on for, or end up moving to a different form builder. We've written a guide for every one.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <a href="/google-forms/google-forms-signature/" class="group flex flex-col bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl hover:drop-shadow-4xl transition-shadow">
                <div class="w-12 h-12 bg-aquamarine flex items-center justify-center rounded-md border-2 border-black mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-black">
                        <path d="M16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487z" />
                        <path d="M19.5 7.125l-2.625-2.625" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Add a signature to Google Forms</h3>
                <p class="text-gray-700 text-sm mb-4 grow">
                    Google Forms has no native signature field. Here's how to add a real, ESIGN-compliant e-signature with an IP + timestamp audit trail.
                </p>
                <span class="text-aquamarine font-semibold text-sm group-hover:underline">Read the guide →</span>
            </a>

            <a href="/google-forms/google-form-payment/" class="group flex flex-col bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl hover:drop-shadow-4xl transition-shadow">
                <div class="w-12 h-12 bg-coral flex items-center justify-center rounded-md border-2 border-black mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-black">
                        <rect x="2.25" y="6" width="19.5" height="13.5" rx="1.5" />
                        <path d="M2.25 10.5h19.5" />
                        <path d="M6 15h3" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Accept payments in Google Forms</h3>
                <p class="text-gray-700 text-sm mb-4 grow">
                    Google Forms isn't PCI compliant and can't take a payment. The three workarounds — Stripe link, QR code, Payable Forms — and a native alternative.
                </p>
                <span class="text-aquamarine font-semibold text-sm group-hover:underline">Read the guide →</span>
            </a>

            <a href="/google-forms/google-forms-nps/" class="group flex flex-col bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl hover:drop-shadow-4xl transition-shadow">
                <div class="w-12 h-12 bg-vivid-yellow flex items-center justify-center rounded-md border-2 border-black mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-black">
                        <path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Build an NPS survey in Google Forms</h3>
                <p class="text-gray-700 text-sm mb-4 grow">
                    Step-by-step: the 0–10 question, the Sheets formula to calculate your Net Promoter Score, and the faster native way to do it.
                </p>
                <span class="text-aquamarine font-semibold text-sm group-hover:underline">Read the guide →</span>
            </a>

            <a href="/google-forms/custom-domain-in-google-forms/" class="group flex flex-col bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl hover:drop-shadow-4xl transition-shadow">
                <div class="w-12 h-12 bg-pale-violet flex items-center justify-center rounded-md border-2 border-black mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-black">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M3 12h18" />
                        <path d="M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Custom URL / domain for Google Forms</h3>
                <p class="text-gray-700 text-sm mb-4 grow">
                    The default docs.google.com URL is long and ugly. Here's how to brand it with Workspace — and the free way to use your own domain.
                </p>
                <span class="text-aquamarine font-semibold text-sm group-hover:underline">Read the guide →</span>
            </a>

            <a href="/blog/google-forms-redirect-after-submit-solved/" class="group flex flex-col bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl hover:drop-shadow-4xl transition-shadow">
                <div class="w-12 h-12 bg-aquamarine flex items-center justify-center rounded-md border-2 border-black mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-black">
                        <path d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5a4.5 4.5 0 0 0 4.5 4.5h9" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Redirect after submit</h3>
                <p class="text-gray-700 text-sm mb-4 grow">
                    Google Forms can't redirect respondents on the free tier. Three options that actually work — App Script, Workspace settings, and the easy route.
                </p>
                <span class="text-aquamarine font-semibold text-sm group-hover:underline">Read the guide →</span>
            </a>

            <a href="/blog/google-forms-searchable-dropdown-cm0qnsmvn00j0syrxh9idh8f2/" class="group flex flex-col bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl hover:drop-shadow-4xl transition-shadow">
                <div class="w-12 h-12 bg-coral flex items-center justify-center rounded-md border-2 border-black mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-black">
                        <circle cx="10.5" cy="10.5" r="7.5" />
                        <path d="m21 21-5.197-5.197" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Searchable dropdown</h3>
                <p class="text-gray-700 text-sm mb-4 grow">
                    Long dropdown lists are unusable in Google Forms — there's no search. Two solutions that fix the problem without breaking your form.
                </p>
                <span class="text-aquamarine font-semibold text-sm group-hover:underline">Read the guide →</span>
            </a>
        </div>
    </div>
</div>

<!-- Quick tips -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-block bg-vivid-yellow border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-4">Quick tips</span>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Google Forms tricks worth knowing</h2>
            <p class="text-lg text-gray-700">
                Small things that make Google Forms less frustrating — in roughly the order most people discover them.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-vivid-yellow border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">1</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Pre-fill answers with URL parameters</h3>
                        <p class="text-gray-700 text-sm">
                            Editor kebab menu → <strong>Get pre-filled link</strong>. Fill in defaults, hit "Get link," and Google gives you a URL that pre-populates answers when respondents open it. Great for emailing personalized forms with CRM merge tags.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-coral border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">2</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Limit responses to one per person</h3>
                        <p class="text-gray-700 text-sm">
                            Settings → <strong>Responses</strong> → "Limit to 1 response." Only works for respondents signed into a Google account on the same Workspace domain — so it's the internal-survey trick, not the public-form trick.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-aquamarine border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">3</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Use sections + branching instead of one long form</h3>
                        <p class="text-gray-700 text-sm">
                            Forms with 30 questions on one page convert badly. Break them into sections (equals-sign icon in the right toolbar) and use "Go to section based on answer" to route respondents through only what applies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-pale-violet border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">4</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Share live responses with non-Google users</h3>
                        <p class="text-gray-700 text-sm">
                            Responses tab → Sheets icon → open the Sheet → File → Share. Set link access to "Anyone with the link – Viewer" and you can share live responses with clients or stakeholders without Workspace.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-vivid-yellow border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">5</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Get an email on every new response</h3>
                        <p class="text-gray-700 text-sm">
                            Responses tab kebab menu → "Get email notifications for new responses." You'll get a ping on every submit, no answers attached. For the actual answers in-email, you'll need an add-on like <em>Email Notifications for Google Forms</em>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-coral border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">6</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Fake conditional-required logic with sections</h3>
                        <p class="text-gray-700 text-sm">
                            Google Forms doesn't support conditional required fields. Workaround: put the sometimes-required question in its own section, and only route respondents there when an earlier answer makes it relevant.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-aquamarine border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">7</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Lock down a quiz from tab-switching</h3>
                        <p class="text-gray-700 text-sm">
                            In Quiz mode, Settings → "Locked mode on Chromebooks" prevents tab-switching during the quiz. Only works on managed Chromebooks in Workspace for Education — consumer Google accounts can always tab away.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-black rounded-xl p-7 drop-shadow-6xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-pale-violet border-2 border-black rounded-full flex items-center justify-center shrink-0 font-bold text-lg">8</div>
                    <div>
                        <h3 class="text-lg font-bold mb-2">Use the confirmation message as a soft redirect</h3>
                        <p class="text-gray-700 text-sm">
                            Settings → Presentation → "Confirmation message." This is the only post-submit lever on a free Google account. Drop a Stripe link, Calendly URL, or thank-you doc here — the closest thing to a redirect without an add-on.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- When Google Forms isn't enough -->
<div class="bg-aquamarine py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-6">
                <span class="inline-block bg-white border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-5">The honest bit</span>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 leading-tight">When Google Forms is the right tool — and when it isn't</h2>
                <p class="text-lg mb-5">
                    For internal team surveys, classroom quizzes, event RSVPs inside a Workspace — Google Forms is genuinely good. It's free, never charges for volume, and lives where your team already works.
                </p>
                <p class="text-lg mb-8">
                    Where it stops being the right tool: <strong>any customer-facing form that's part of the brand experience</strong>. Payments, signed agreements, branded URLs, NPS programs, marketing lead capture — Google Forms can't do these natively, and stacking add-ons gets expensive fast (~$36/month each, usually with submission caps).
                </p>
                <a href="/google-forms-alternative/" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                    See the full alternative →
                </a>
            </div>
            <div class="lg:col-span-6 space-y-6">
                <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl p-7">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-9 h-9 bg-aquamarine border-2 border-black rounded-md flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-black">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Stay with Google Forms if…</h3>
                    </div>
                    <ul class="space-y-2.5 text-gray-800">
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>It's an internal team survey or poll</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>A classroom quiz inside Workspace for Education</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>A quick RSVP for a small event</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-aquamarine shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>You live entirely inside Google Sheets</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl p-7">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-9 h-9 bg-coral border-2 border-black rounded-md flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-black">
                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Switch if you need…</h3>
                    </div>
                    <ul class="space-y-2.5 text-gray-800">
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>A real signature field</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>Payments inside the form</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>A branded URL or custom domain</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>Redirect after submit on a free account</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>NPS or CSAT scoring built in</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-coral shrink-0 mt-1.5">
                                <circle cx="10" cy="10" r="8" />
                            </svg>
                            <span>A form that doesn't say "Google" at the bottom</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison snapshot -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-4 text-center">
            Google Forms vs. Youform — the snapshot
        </h2>
        <p class="text-lg text-gray-700 text-center mb-10 max-w-2xl mx-auto">
            The features Google Forms users most often ask for, and where each tool lands today.
        </p>
        <div class="max-w-5xl mx-auto overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
            <table class="min-w-full text-left text-sm md:text-base">
                <thead class="bg-gray-100 border-b-2 border-black">
                    <tr>
                        <th class="px-6 py-4"></th>
                        <th class="px-6 py-4 text-center">Google Forms</th>
                        <th class="px-6 py-4 text-center bg-amber-50">Youform</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Unlimited forms & responses (free)</td>
                        <td class="px-6 py-4 text-center">✅</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Native e-signature field</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Stripe payment field</td>
                        <td class="px-6 py-4 text-center">❌ (add-on only)</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Custom domain</td>
                        <td class="px-6 py-4 text-center">❌ (Workspace only)</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Redirect after submit</td>
                        <td class="px-6 py-4 text-center">❌ (free tier)</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Searchable dropdowns</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">NPS scoring built in</td>
                        <td class="px-6 py-4 text-center">❌ (manual formula)</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Remove builder branding</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅ (paid plans)</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold bg-gray-50">One-click Google Forms importer</td>
                        <td class="px-6 py-4 text-center">N/A</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-center mt-8">
            <a href="/google-forms-alternative/" class="text-aquamarine hover:underline font-semibold text-lg">See the full Google Forms alternative comparison →</a>
        </p>
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
                                <p class="text-black font-medium flex-grow">Is Google Forms really free?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Google Forms is free with any Google account and includes unlimited forms and unlimited responses. The catch is the feature ceiling — no native signature field, no payments, no custom domain, no logo upload on free accounts, no NPS or CSAT scoring. Most "paid" Google Forms features come from third-party Marketplace add-ons, not from Google.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What can't Google Forms do?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Google Forms has no native support for: e-signatures, payments, custom domains, post-submit redirects on free accounts, searchable dropdowns, file uploads from non-Google users, NPS scoring, conditional thank-you pages, or removing Google branding. Each can be hacked in with an add-on, App Script, or a paid Workspace plan — or solved natively in a different form builder.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can Google Forms collect signatures or payments?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Not natively. Signatures require a <a href="/google-forms/google-forms-signature/" class="text-aquamarine hover:underline font-semibold">Marketplace add-on</a> (typically $36/month and capped at ~100 submissions) or a workaround like uploading a photo of a handwritten signature. <a href="/google-forms/google-form-payment/" class="text-aquamarine hover:underline font-semibold">Payments</a> require either pasting a Stripe/PayPal link into the confirmation message or installing the Payable Forms add-on. Both are built-in fields in Youform.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How do I make Google Forms look better?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Google Forms gives you four levers: change the header image, pick from ~12 themes, swap the accent color, and change the font family. You can't customize button colors, button text, field styling, page transitions, or remove the Google branding at the bottom. For real branding — your logo, your colors, your fonts, your domain — you need a form builder that supports custom CSS or a brand kit.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is Google Forms good for business use?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    It's fine for internal surveys, event RSVPs, and lightweight data collection inside Google Workspace. It's a poor fit for customer-facing forms where you need a branded experience, payments, signed agreements, NPS/CSAT analytics, or compliance audit trails. Most teams outgrow Google Forms the moment they need to take a payment, collect a signature, or send respondents through a branded URL.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the best free alternative to Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    <a href="/google-forms-alternative/" class="text-aquamarine hover:underline font-semibold">Youform</a> is the closest free-forever alternative — unlimited forms, unlimited responses, a one-click Google Forms importer, plus the native fields Google Forms lacks (signature, Stripe payment, NPS, custom domain, branded redirects, searchable dropdowns). No Google Workspace required.
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
            Outgrown Google Forms? Import it in one click.
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Paste your Google Forms URL into Youform and we'll rebuild it — questions, options, logic, all of it. Then drag in the field Google Forms wouldn't give you. Free forever, no Workspace needed.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                Create free account
            </a>
            <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="underline hover:no-underline text-gray-900 font-semibold">
                or try the Google Forms importer →
            </a>
        </div>
        <p class="text-sm text-gray-700 mt-4">Free forever · Unlimited responses · No credit card required</p>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', ['prompt' => 'I+want+a+Google+Forms+alternative+that+supports+signatures+payments+and+a+custom+domain'])

@include('partials.footer')

@endsection
