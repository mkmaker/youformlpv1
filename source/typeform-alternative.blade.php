---
title: "Typeform Alternative - Youform | Affordable, Unlimited, Free Forever"
description: "Tired of Typeform's limits and high paywalls? Youform provides unlimited submissions on the free plan, and all of Typeform's advanced features are available at $29/month."
image: "https://youform.com/assets/images/typeform-alternative-og.png"
---

@extends('_layouts.main')

@section('body')

<!-- Page header and hero section -->
<div>
    <div class="bg-medium-champagne bg-[url('/assets/images/banner-background.png?v=2')] bg-cover bg-no-repeat bg-center">
        <!-- Navbar -->
        @include('partials.nav')

        <!-- Hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-8">
            <div class="flex flex-col justify-center lg:grid grid-cols-5 items-center px-10 md:px-20">
                <div class="flex flex-col items-center lg:items-start col-span-3 lg:pr-16 xl:pr-20">
                    <p class="text-xs font-semibold px-4 py-1.5 rounded-full mb-3 lg:mb-2 bg-pale-violet border border-black">
                        A free Typeform alternative.
                    </p>
                    <h1 class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        The most affordable Typeform alternative
                    </h1>
                    <p class="text-center lg:text-left text-base mt-6 max-w-3xl">
                        Typeform charges $39/month for just 100 responses. Youform gives you UNLIMITED forms and responses for FREE. Same beautiful multi-step forms, none of the limits.
                    </p>
                    <div class="lg:flex lg:items-center space-x-6 mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create free account
                        </a>
                    </div>
                    @include('_partials.have-typeform-url-cta')
                    <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>

                <div
                    x-data="{ hovered: false }"
                    x-cloak
                    class="pt-16 lg:pt-0 col-span-2 hidden lg:block">
                    <div
                        @mouseover="hovered = true"
                        :class="{'rotate-2': !hovered, 'rotate-0': hovered}"
                        class="rounded-md transition-all rotate-2 relative bg-[url('/assets/images/embed-form-bg.png')] bg-cover bg-no-repeat">
                        <img class="absolute inset-0 rounded-md w-full h-full" src="/assets/images/embed-form-bg.png" alt="embed form background">
                        <img class="absolute -left-36 bottom-40 w-32 opacity-70" src="/assets/images/try-it-arrow.png?v=2" alt="try it arrow">
                        <img class="absolute -right-28 -top-12 w-96 -z-10" src="/assets/images/banner-blob.png?v=2" alt="blob decoration image">
                        <iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" class="rounded-md shadow border-2 border-black drop-shadow-6xl"></iframe>
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
                    <blockquote class="text-gray-900 text-base lg:text-xl">
                        <p>"Switched From Typeform, Never Going Back. Moved over from Typeform and saved $24,000/year WITHOUT dropping performance."</p>
                    </blockquote>
                    <a href="https://www.capterra.in/software/1060219/youform" target="_blank" rel="nofollow noopener noreferrer" class="mt-5 flex items-center flex-col gap-x-6">
                        <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" loading="lazy" src="/assets/images/testimonial-john.jpeg" alt="John Avatar">
                        <div class="text-base mt-1">
                            <div class="text-gray-900 group-hover:underline">John</div>
                            <div class=" text-gray-700 text-xs">Owner
                                <br>
                                Marketing & Advertising</div>
                        </div>
                    </a>
                </figure>
            </div>
        </div>
    </div>
    <div>
        <img class="w-full -mt-4 lg:-mt-8" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
    </div>
</div>

<!-- Capterra badges -->
<div class="bg-white py-10">
    <h3 class="text-2xl font-bold text-center text-gray-800 mb-6">
        <a href="https://www.capterra.in/software/1060219/youform" target="_blank" rel="nofollow noopener noreferrer" class="hover:underline">
            Rated 5-star Typeform alternative
        </a>
    </h3>
    <div class="flex items-center justify-center gap-4 px-3 max-w-xl mx-auto">
        <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.capterra.com/p/10015804/Youform/"> <img border="0" class="flex-1 flex h-56" loading="lazy" src="https://brand-assets.capterra.com/badge/82d852d8-4309-425c-8601-28e9da8625fa.svg" alt="Capterra Best Value 2024 Badge" /> </a>
        <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.getapp.com/website-ecommerce-software/forms-automation/category-leaders"> <img border="0" class="flex-1 flex h-56" loading="lazy" src="https://brand-assets.getapp.com/badge/1ddf62be-af16-43f4-98a7-f77d6aef0fba.svg" alt="GetApp Category Leaders 2024 Badge" /> </a>
        <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.softwareadvice.com/forms-automation/youform-profile/"> <img border="0" class="flex-1 flex h-56" loading="lazy" src="https://brand-assets.softwareadvice.com/badge/aa6b76d1-fa34-4756-9f02-7a6288863c9b.svg" alt="Software Advice Front Runners 2024 Badge" /> </a>
        <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.capterra.com/p/10015804/Youform/"> <img border="0" class="flex-1 flex h-56" loading="lazy" src="https://brand-assets.capterra.com/badge/293bec48-38cb-4344-aa42-658d14d12903.svg" alt="Capterra Shortlist 2024 Badge" /> </a>
    </div>
</div>

<!-- Comprehensive comparison table -->
<div class="bg-aquamarine" style="background-color: rgba(69, 173, 148, 0.85);">
    <div class="relative max-w-7xl mx-auto pb-24 pt-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center pb-4 px-10 md:px-20">
            Youform vs Typeform: Full feature comparison
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-12 px-10 md:px-20">
            40+ features compared side-by-side. See exactly where Youform saves you money.
        </p>

        <div class="max-w-6xl mx-auto px-4 md:px-0 mb-8">
            <div class="overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
                <table class="min-w-full text-left text-sm">
                    <thead class="bg-gray-100 border-b-2 border-black sticky top-0">
                        <tr>
                            <th class="px-4 md:px-6 py-4 w-1/3">Feature</th>
                            <th class="px-4 md:px-6 py-4 text-center bg-amber-50 w-1/3">
                                <img src="/assets/images/youform-logo.png" alt="Youform" class="h-6 mx-auto mb-1">
                                <div class="font-bold text-base">Youform</div>
                            </th>
                            <th class="px-4 md:px-6 py-4 text-center bg-gray-50 w-1/3">
                                <img src="/assets/images/typeform-logo.webp" alt="Typeform" class="mx-auto mb-1 rounded border border-gray-300 p-0.5" style="height: 1.8rem">
                                <div class="font-semibold text-base">Typeform</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Pricing & Limits -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Pricing & Limits</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Number of forms</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Unlimited</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Unlimited</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Seats</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Unlimited</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">3 seats at $79/mo, 5+ requires Enterprise</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Number of responses</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Unlimited (<a href="https://help.youform.com/p/-wcaJF3tEKR4tg/Youform-fair-usage-policy" target="_blank" class="underline hover:no-underline">under fair usage</a>)</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">100 at $39/mo</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Form templates</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">500+ (free)</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">500+ (free)</td>
                        </tr>

                        <!-- Branding & Customization -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Branding & Customization</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Add your brand logo</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$39/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Premium themes</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">20+ themes, even on free plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Limited free, premium at $79/mo</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Remove "Powered by" branding</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$79/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Create a brand kit</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$79/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Custom fonts</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Enterprise only ($500+/mo)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Custom domain</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Enterprise only ($500+/mo)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Send emails from your own address</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$79/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Customize "Thank you" page</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$29/mo plan</td>
                        </tr>

                        <!-- Form Features -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Form Features</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Multiple endings per form</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Conditional logic</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Answer recall</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Scores & calculations</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Custom variables / hidden fields</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Outcome quiz</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Non-English forms</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Multi-language forms</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$129/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">reCAPTCHA spam prevention</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$79/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Prevent duplicate responses</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$379/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">File uploads</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">10 MB free, unlimited on $29/mo</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">1 GB at $39/mo, max 4 GB on Enterprise</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Accept payments</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$39/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Partial / incomplete responses</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Unlimited partials at $29/mo</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Checkpoint-based, limited even at $379/mo</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">AI features</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$39/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Auto-close forms</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>

                        <!-- Embed & Share -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Embed & Share</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Embed in website</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Embed in email</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Redirect after submission</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$79/mo plan</td>
                        </tr>

                        <!-- Notifications -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Notifications</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Email notifications</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$39/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Send email to respondents</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$39/mo plan</td>
                        </tr>

                        <!-- Integrations -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Integrations</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Webhook</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">API</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Zapier</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Google Sheets</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Slack</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Calendly</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Paid plans only</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Cal.com</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Not available</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">SavvyCal</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Not available</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">TidyCal</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Not available</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Google Tag Manager</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$129/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Meta Pixel</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">$29/mo plan</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$129/mo plan</td>
                        </tr>

                        <!-- Analytics & Data -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Analytics & Data</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Download responses</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Form analytics</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Basic free, advanced at $29/mo</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$129/mo plan</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">Question drop-off analysis</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50 font-medium">Basic free, advanced at $29/mo</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">$129/mo plan</td>
                        </tr>

                        <!-- Security -->
                        <tr class="bg-gray-800 text-white">
                            <td colspan="3" class="px-4 md:px-6 py-2 font-bold text-sm uppercase tracking-wide">Security & Compliance</td>
                        </tr>
                        <tr>
                            <td class="px-4 md:px-6 py-3 font-semibold bg-gray-50">GDPR compliance</td>
                            <td class="px-4 md:px-6 py-3 bg-amber-50">Free</td>
                            <td class="px-4 md:px-6 py-3 bg-gray-50">Free</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <p class="text-center text-base font-semibold text-gray-800 max-w-2xl mx-auto px-10 md:px-20">
            Same form experience. Way more affordable. Youform wins on value.
        </p>

        <div class="mt-10 flex justify-center">
            <a href="https://app.youform.com/register" class="inline-block px-10 py-3 rounded-md bg-coral border-2 border-black text-lg font-bold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Create free account
            </a>
        </div>
    </div>
</div>

<!-- High pricing problem section -->
<div style="margin-top: -2rem">
    <div class="bg-lavender-rose pt-20 pb-20">
        <div class="relative max-w-7xl mx-auto px-10 md:px-20">
            <div class="text-center">
                <div>
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold">High pricing problem? We hear you!</p>
                    <p class="text-center text-lg xl:text-xl font-medium mt-10">
                        Do you hate the high prices of Typeform? We do too. That's why Youform allows UNLIMITED forms and form responses for FREE.
                    </p>
                </div>
                <img class="hidden md:block pt-20" loading="lazy" src="/assets/images/twitter-screenshot.png?v=2" alt="Typeform pricing complaints on Twitter">

                @include('partials.price-calculator')

                <div>
                    <div class="mt-16">
                        <h4 class="text-center text-2xl sm:text-4xl xl:text-5xl font-bold mb-8 pt-10">
                            Even <em>Pieter Levels</em> recommends Youform
                        </h4>

                        <div>
                            <div class="py-4 max-w-lg mx-auto rounded-2xl shadow-lg md:shadow-2xl" style="background: #13202B">
                                <a href="https://x.com/levelsio" target="_blank">
                                    <img loading="lazy" src="/assets/images/levelsio.png" alt="Pieter Levels recommends Youform over Typeform">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16">
                    <a href="https://app.youform.com/register" class="text-center mt-10 text-2xl bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md w-full lg:w-1/2 mx-auto block">
                        Create free account
                    </a>

                    <div>
                        <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" class="underline group transition-all underline-offset-8 hover:no-underline hover:font-semibold inline-block mx-auto mt-4">
                            or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>

                    <div class="flex items-center justify-center">
                        @include('_partials.have-typeform-url-cta')
                    </div>

                    <div class="text-sm pt-8 font-semibold sm:flex items-center justify-center sm:space-x-4 mx-auto">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-300">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-300">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Advanced Features showcase -->
<div class="relative bg-gradient-to-br from-amber-50 via-white to-aquamarine/20 py-24 overflow-hidden border-t-4 border-black">
    <div class="relative max-w-7xl mx-auto px-6 md:px-20 z-10">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 text-center mb-6 drop-shadow-sm">
            Everything Typeform offers — and <span class="text-coral">more</span>
        </h2>
        <p class="text-lg text-center text-gray-700 max-w-2xl mx-auto mb-14">
            Youform gives you all the tools professionals need for stunning, conversion-friendly forms, surveys, and quizzes — <span class="text-black">without the Typeform price tag.</span>
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-aquamarine" fill="none" viewBox="0 0 64 64">
                        <circle cx="12" cy="12" r="6" fill="currentColor"/><circle cx="52" cy="12" r="6" fill="currentColor"/><circle cx="12" cy="52" r="6" fill="currentColor"/><circle cx="52" cy="52" r="6" fill="currentColor"/>
                        <path d="M12 18v28M18 12h28M52 18v28M18 52h28" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 18c0 13 40 13 40 0" stroke="currentColor" stroke-width="2" stroke-dasharray="4,4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Advanced logic</h3>
                <p class="text-base text-gray-700 text-center">Show or hide questions based on previous answers. Branch forms dynamically — just like Typeform, but free.</p>
            </div>
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-coral" fill="none" viewBox="0 0 30 30">
                        <rect x="7" y="7" width="16" height="4" rx="2" fill="currentColor"/><rect x="7" y="13" width="16" height="4" rx="2" fill="currentColor"/><rect x="7" y="19" width="8" height="4" rx="2" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Multi-step layouts</h3>
                <p class="text-base text-gray-700 text-center">The conversational, one-question-at-a-time experience Typeform is known for — included in Youform's free plan.</p>
            </div>
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-purple-500" fill="none" viewBox="0 0 48 48">
                        <path d="M18 19c0-3.3 2.5-5 6-5s6 1.7 6 5c0 3-2 4-4 5s-2 2-2 3" stroke="currentColor" stroke-width="3" stroke-linecap="round"/><circle cx="24" cy="34" r="2" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Outcome-based quizzes</h3>
                <p class="text-base text-gray-700 text-center">Build interactive quizzes with personalized results — ideal for lead generation, onboarding, and education.</p>
            </div>
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-blue-500" fill="none" viewBox="0 0 48 48">
                        <rect x="8" y="8" width="32" height="36" rx="4" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path d="M24 32V18" stroke="currentColor" stroke-width="3" stroke-linecap="round"/><path d="M19 23l5-5 5 5" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Flexible file uploads</h3>
                <p class="text-base text-gray-700 text-center">Accept file uploads from respondents on any plan — no extra charges for storage.</p>
            </div>
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-green-500" fill="none" viewBox="0 0 48 48">
                        <path d="M15 27l7 7 12-13" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Partial submissions</h3>
                <p class="text-base text-gray-700 text-center">Even if a respondent leaves before submitting, you can still view their partial data — something Typeform charges extra for.</p>
            </div>
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-yellow-500" fill="none" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="2" fill="none"/><circle cx="17" cy="21" r="3" fill="currentColor"/><circle cx="31" cy="21" r="3" fill="currentColor"/>
                        <path d="M17 31c2 2 10 2 14 0" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Analytics & drop-off tracking</h3>
                <p class="text-base text-gray-700 text-center">Track views, starts, completion rate, and question-by-question drop-off with beautiful charts.</p>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <a href="https://app.youform.com/register" class="inline-block px-10 py-3 rounded-md bg-coral border-2 border-black text-lg font-bold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Try all features free
            </a>
        </div>
    </div>
</div>

<!-- Security & Compliance -->
<div class="bg-white py-20 border-t-4 border-black">
    <div class="max-w-7xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
            Your data is safe with Youform
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-12">
            We take security seriously. Your form data is protected with industry-standard encryption and stored securely in the EU.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6 drop-shadow-3xl">
                <div class="text-3xl mb-3">🔒</div>
                <h3 class="text-lg font-bold mb-2">SSL Encryption</h3>
                <p class="text-sm text-gray-600">All data is encrypted in transit with 256-bit SSL. Every form is served over HTTPS.</p>
            </div>
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6 drop-shadow-3xl">
                <div class="text-3xl mb-3">🇪🇺</div>
                <h3 class="text-lg font-bold mb-2">GDPR Compliant</h3>
                <p class="text-sm text-gray-600">Fully GDPR compliant. We respect data privacy regulations and make compliance easy for you.</p>
            </div>
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6 drop-shadow-3xl">
                <div class="text-3xl mb-3">☁️</div>
                <h3 class="text-lg font-bold mb-2">EU Data Storage</h3>
                <p class="text-sm text-gray-600">All data is securely stored with AWS in the European Union for maximum data protection.</p>
            </div>
        </div>
    </div>
</div>

<!-- Who it's best for -->
<div class="bg-amber-50 border-t-4 border-black">
    <div class="relative max-w-7xl mx-auto py-20 px-10 md:px-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center mb-10">
            Who should use Youform vs Typeform?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-6xl">
                <h3 class="text-2xl font-bold mb-4">Youform is ideal if you want:</h3>
                <ul class="space-y-3 text-gray-700 text-sm md:text-base">
                    <li>• A Typeform-like experience without the price tag</li>
                    <li>• Unlimited forms and responses on the free plan</li>
                    <li>• Branded, professional forms that convert</li>
                    <li>• Custom domains without paying $99/month</li>
                    <li>• Partial submissions and detailed analytics included</li>
                </ul>
            </div>
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-6xl">
                <h3 class="text-2xl font-bold mb-4">Typeform is ideal if you want:</h3>
                <ul class="space-y-3 text-gray-700 text-sm md:text-base">
                    <li>• The original Typeform brand name recognition</li>
                    <li>• Typeform's specific native integrations</li>
                    <li>• You don't love your money</li>
                    <li>• You love to get your form locked when it reaches submission limit :)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Migration steps -->
<div class="bg-white">
    <div class="relative max-w-7xl mx-auto py-20 px-10 md:px-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center mb-8">
            Ready to switch from Typeform?
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-10">
            Moving from Typeform to Youform takes minutes. You can even import your existing Typeform directly.
        </p>

        <div class="max-w-4xl mx-auto bg-amber-50 border-2 border-black rounded-2xl p-8 drop-shadow-6xl">
            <ol class="list-decimal list-inside space-y-3 text-gray-800 text-sm md:text-base">
                <li>Copy your Typeform URL and use our <strong>Import from Typeform</strong> tool to recreate it instantly in Youform.</li>
                <li>Customize the design to match your brand — add your logo, colors, and custom domain.</li>
                <li>Set up integrations with Google Sheets, Slack, Zapier, webhooks, and more.</li>
                <li>Share your new Youform via link, embed it on your website, or use a custom domain.</li>
                <li>Enjoy unlimited responses — no more worrying about hitting response limits.</li>
            </ol>
        </div>

        <div class="mt-10 flex justify-center">
            <a href="https://app.youform.com/register" class="inline-block px-10 py-3 rounded-lg bg-coral border-2 border-black text-lg font-bold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Start your free account
            </a>
        </div>
    </div>
</div>

<!-- Templates section -->
<div class="bg-gray-50 py-16 border-t-2 border-gray-200">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-3xl font-bold mb-4">500+ ready-made templates to get started</h2>
        <p class="text-lg text-gray-700 mb-8">
            Don't start from scratch. Pick a template and customize it in minutes.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/templates/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors font-semibold">
                All Templates &rarr;
            </a>
            <a href="/templates/c/surveys/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-amber-50 transition-colors font-semibold">
                Survey Templates
            </a>
            <a href="/templates/c/quizzes/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-amber-50 transition-colors font-semibold">
                Quiz Templates
            </a>
            <a href="/templates/c/forms/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-amber-50 transition-colors font-semibold">
                Form Templates
            </a>
        </div>
    </div>
</div>

@include('_partials.testimonials-carousel')

<!-- FAQ Section -->
<div class="bg-white py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>

        <div class="space-y-6">
            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Is Youform really free?</h3>
                <p class="text-gray-700">Yes! You can create unlimited forms and collect unlimited responses on the free plan. There are no hidden limits or surprise charges. We also offer a PRO plan at $29/month for advanced features like custom domains, removing branding, and more.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">How does Youform compare to Typeform on pricing?</h3>
                <p class="text-gray-700">Youform's free plan offers unlimited forms and responses, while Typeform's free plan is capped at 10 responses/month. Features like custom domains, branding removal, and analytics that cost $79-200+/month on Typeform are available at $29/month with Youform.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Can I import my existing Typeform?</h3>
                <p class="text-gray-700">Yes! Just copy your Typeform URL and paste it into our import tool. We'll recreate your form in Youform automatically. You can then customize the design, add integrations, and start collecting responses immediately.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Does Youform support multi-step conversational forms?</h3>
                <p class="text-gray-700">Absolutely. Youform supports the same one-question-at-a-time, animated multi-step experience that Typeform is known for — and it's included in the free plan. You also get conditional logic, answer recall, scores, and calculations for free.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Is my data secure with Youform?</h3>
                <p class="text-gray-700">Yes. All data is encrypted with 256-bit SSL, stored securely with AWS in the EU, and we are fully GDPR compliant. Your respondents' data is safe with us.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">What integrations does Youform support?</h3>
                <p class="text-gray-700">Youform integrates with Google Sheets, Slack, Zapier (6,000+ tools), webhooks, Calendly, Cal.com, SavvyCal, TidyCal, Google Tag Manager, Meta Pixel, and more. Most integrations are available on the free plan.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Can I use a custom domain with Youform?</h3>
                <p class="text-gray-700">Yes, custom domains are available on the $29/month PRO plan. With Typeform, custom domains require the Enterprise plan at $500+/month.</p>
            </div>
        </div>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', [
    'prompt' => 'Tell+me+how+Youform+is+better+for+me+compared+to+Typeform',
    'ai_heading' => 'Not sure if you should switch from Typeform?',
    'ai_description' => 'Ask your favorite AI how Youform compares to Typeform. Click a button and see for yourself.',
])

@include('partials.footer')

@endsection

@push('head')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is Youform really free?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! You can create unlimited forms and collect unlimited responses on the free plan. There are no hidden limits or surprise charges. We also offer a PRO plan at $29/month for advanced features like custom domains, removing branding, and more."
            }
        },
        {
            "@type": "Question",
            "name": "How does Youform compare to Typeform on pricing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Youform's free plan offers unlimited forms and responses, while Typeform's free plan is capped at 10 responses/month. Features like custom domains, branding removal, and analytics that cost $79-200+/month on Typeform are available at $29/month with Youform."
            }
        },
        {
            "@type": "Question",
            "name": "Can I import my existing Typeform?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Just copy your Typeform URL and paste it into our import tool. We'll recreate your form in Youform automatically."
            }
        },
        {
            "@type": "Question",
            "name": "Does Youform support multi-step conversational forms?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. Youform supports the same one-question-at-a-time, animated multi-step experience that Typeform is known for — and it's included in the free plan."
            }
        },
        {
            "@type": "Question",
            "name": "Is my data secure with Youform?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. All data is encrypted with 256-bit SSL, stored securely with AWS in the EU, and we are fully GDPR compliant."
            }
        },
        {
            "@type": "Question",
            "name": "What integrations does Youform support?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Youform integrates with Google Sheets, Slack, Zapier (6,000+ tools), webhooks, Calendly, Cal.com, SavvyCal, TidyCal, Google Tag Manager, Meta Pixel, and more. Most integrations are available on the free plan."
            }
        },
        {
            "@type": "Question",
            "name": "Can I use a custom domain with Youform?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, custom domains are available on the $29/month PRO plan. With Typeform, custom domains require the Enterprise plan at $500+/month."
            }
        }
    ]
}
</script>
@endpush
