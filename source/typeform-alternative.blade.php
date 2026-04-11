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
    <h3 class="text-xl font-bold text-center text-gray-700 mb-6">
        <a href="https://www.capterra.in/software/1060219/youform" target="_blank" rel="nofollow noopener noreferrer" class="hover:underline">
            Rated 5 stars on Capterra, GetApp, and Software Advice
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
            Youform vs Typeform, feature by feature
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-12 px-10 md:px-20">
            40+ features compared side by side, including pricing, limits, integrations, and security.
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

        <p class="text-center text-base text-gray-800 max-w-2xl mx-auto px-10 md:px-20">
            Same form experience, at a fraction of the cost.
        </p>

        <div class="mt-10 flex justify-center">
            <a href="https://app.youform.com/register" class="inline-block px-10 py-3 rounded-md bg-coral border-2 border-black text-lg font-bold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Create free account
            </a>
        </div>
    </div>
</div>

<!-- Savings section -->
<div class="relative" style="margin-top: -2rem">
    <img class="absolute rotate-12 right-8 lg:right-32 -top-10 sm:-top-14 lg:-top-16 w-40 md:w-56 lg:w-64 pointer-events-none z-10" src="/assets/images/solved.png" alt="Solved checkmark illustration">
    <div class="bg-lavender-rose pt-20 pb-20">
        <div class="relative max-w-7xl mx-auto px-10 md:px-20">
            <div class="text-center">
                <div>
                    <h2 class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold">High pricing problem? We hear you!</h2>
                    <p class="text-center text-lg xl:text-xl mt-8 max-w-2xl mx-auto">
                        Do you hate the high prices of Typeform? We do too. That's why Youform allows UNLIMITED forms and form responses for FREE.
                    </p>
                </div>
                <div class="mt-16 max-w-6xl mx-auto text-left">
                    <div class="columns-1 md:columns-2 lg:columns-3 gap-4 [&>*]:mb-4 [&>*]:break-inside-avoid">

                        <!-- Jordan Giha -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-coral flex items-center justify-center text-white font-bold text-sm shrink-0">JG</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">Jordan Giha</div>
                                        <div class="text-xs text-gray-500">@jordangiha · 03/09/21</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                <span class="text-blue-500">@typeform</span> is nuts for their pricing. Free plan gives you 10 responses a month. What else can I use?
                            </p>
                        </div>

                        <!-- Jay Clouse -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-aquamarine flex items-center justify-center text-white font-bold text-sm shrink-0">JC</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">Jay Clouse</div>
                                        <div class="text-xs text-gray-500">@jayclouse · 18/06/21</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                I'm giving up on Typeform; it's a beautiful tool, and I love it, but the pricing model doesn't make sense for me and I'm continuously hitting my free limit.
                            </p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-3">
                                What do you use for your feedback and survey forms?
                            </p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-3">
                                Looking for beautiful, mobile-friendly.
                            </p>
                        </div>

                        <!-- Flavio Amiel -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-pale-violet flex items-center justify-center text-white font-bold text-sm shrink-0">FA</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">Flavio Amiel</div>
                                        <div class="text-xs text-gray-500">@flavioamiel · 03/07/22</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-xs text-gray-500 mb-2">Replying to <span class="text-blue-500">@amritrupa</span> and <span class="text-blue-500">@typeform</span></p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                OMG yes, their new pricing 😭
                            </p>
                        </div>

                        <!-- TheBangaloreGuy -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-sasquatch-socks flex items-center justify-center text-white font-bold text-sm shrink-0">TB</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">TheBangaloreGuy</div>
                                        <div class="text-xs text-gray-500">@thebangaloreguy · 20/12/22</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                considered using typeform for a form but their pricing is a little out of budget for me
                            </p>
                        </div>

                        <!-- George -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-lavender-rose flex items-center justify-center text-white font-bold text-sm shrink-0">G</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">George</div>
                                        <div class="text-xs text-gray-500">@makeitnoice · 28/01/23</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                $59 in the US buys you 10 Big Macs. In South Africa, it buys you 27 Big Macs. That's 170% more cost felt in price.
                            </p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-3">
                                You know what's infuriating? When a great product like <span class="text-blue-500">@typeform</span> doesn't give a shit.
                            </p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-3">
                                Here's my rant and why you should care about pricing localisation 👇
                            </p>
                        </div>

                        <!-- Onurcan Eki -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-medium-champagne flex items-center justify-center text-gray-900 font-bold text-sm shrink-0">OE</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">Onurcan Eki</div>
                                        <div class="text-xs text-gray-500">@onurcaneki · 11/06/21</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">Wow.</p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-3">Typeform latest pricing update:</p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-1">🍊 Basic $25/m → 100 responses /m</p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">🟢 Free → 10 responses /m</p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-2">😭😭😭😭</p>
                        </div>

                        <!-- Face the reality -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-coral flex items-center justify-center text-white font-bold text-sm shrink-0">FR</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">Face the reality</div>
                                        <div class="text-xs text-gray-500">20/07/22</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                <span class="text-blue-500">@typeform</span> your pricing model is not practical at all.
                            </p>
                        </div>

                        <!-- jack -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-aquamarine flex items-center justify-center text-white font-bold text-sm shrink-0">j</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">jack</div>
                                        <div class="text-xs text-gray-500">@jackw_xyz · 21/03/22</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                typeform's pricing is actually outrageous when you consider it for non business use cases
                            </p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed mt-3">
                                £25/mo for 100 responses lmao
                            </p>
                        </div>

                        <!-- Michael Marra -->
                        <div class="bg-white border-2 border-black rounded-2xl p-5 drop-shadow-3xl">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="flex items-start gap-3 min-w-0">
                                    <div class="w-10 h-10 rounded-full bg-pale-violet flex items-center justify-center text-white font-bold text-sm shrink-0">MM</div>
                                    <div class="min-w-0">
                                        <div class="font-bold text-sm text-gray-900 truncate">Michael Marra</div>
                                        <div class="text-xs text-gray-500">@michaelmarra · 17/05/20</div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-700 shrink-0" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </div>
                            <p class="text-xs text-gray-500 mb-2">Replying to <span class="text-blue-500">@ryanmyher</span> <span class="text-blue-500">@KameronTanseli</span> and <span class="text-blue-500">@typeform</span></p>
                            <p class="text-[0.9rem] text-gray-800 leading-relaxed">
                                Their pricing makes no sense lol
                            </p>
                        </div>

                    </div>
                </div>

                <div class="relative mt-16 max-w-3xl mx-auto">
                    <div class="absolute -inset-3 bg-vivid-yellow border-2 border-black rounded-3xl rotate-1" aria-hidden="true"></div>
                    <div class="relative border-2 border-black rounded-3xl drop-shadow-6xl px-6 md:px-12 pt-2 pb-10 -rotate-1" style="background-color: #FFFBEB;">
                        @include('partials.price-calculator')
                    </div>
                </div>


                {{-- Hidden for now
                <div>
                    <div class="mt-16">
                        <h3 class="text-center text-2xl sm:text-4xl xl:text-5xl font-bold mb-8 pt-10">
                            Pieter Levels recommends Youform
                        </h3>

                        <div>
                            <div class="py-4 max-w-lg mx-auto rounded-2xl shadow-lg md:shadow-2xl" style="background: #13202B">
                                <a href="https://x.com/levelsio" target="_blank">
                                    <img loading="lazy" src="/assets/images/levelsio.png" alt="Pieter Levels recommends Youform over Typeform">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                --}}

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

<!-- Feature parity section -->
<div class="bg-amber-50 py-24 border-t-4 border-black">
    <div class="relative max-w-7xl mx-auto px-6 md:px-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 text-center mb-4">
            Everything you'd expect from Typeform
        </h2>
        <p class="text-lg text-center text-gray-700 max-w-2xl mx-auto mb-14">
            The same conversational form experience, with the advanced features you already rely on.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl border-2 border-black p-7 drop-shadow-6xl">
                <div class="mb-4">
                    <svg class="w-9 h-9 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h4l2 4 4-8 2 4h6"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Conditional logic</h3>
                <p class="text-base text-gray-700">Show, hide, or branch questions based on previous answers. Included on the free plan.</p>
            </div>

            <div class="bg-white rounded-2xl border-2 border-black p-7 drop-shadow-6xl">
                <div class="mb-4">
                    <svg class="w-9 h-9 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="4" rx="1"/>
                        <rect x="3" y="11" width="18" height="4" rx="1"/>
                        <rect x="3" y="18" width="12" height="3" rx="1"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-step forms</h3>
                <p class="text-base text-gray-700">One question at a time, animated transitions. The conversational experience Typeform is known for.</p>
            </div>

            <div class="bg-white rounded-2xl border-2 border-black p-7 drop-shadow-6xl">
                <div class="mb-4">
                    <svg class="w-9 h-9 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Outcome quizzes</h3>
                <p class="text-base text-gray-700">Build quizzes with personalized results, scoring, and calculations — no extra add-on required.</p>
            </div>

            <div class="bg-white rounded-2xl border-2 border-black p-7 drop-shadow-6xl">
                <div class="mb-4">
                    <svg class="w-9 h-9 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.9 5 5 0 019.9-1A5.5 5.5 0 1118.5 16H7zM12 12v6m0-6l-2 2m2-2l2 2"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">File uploads</h3>
                <p class="text-base text-gray-700">Accept file uploads on any plan. Unlimited file size on Youform PRO.</p>
            </div>

            <div class="bg-white rounded-2xl border-2 border-black p-7 drop-shadow-6xl">
                <div class="mb-4">
                    <svg class="w-9 h-9 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Partial submissions</h3>
                <p class="text-base text-gray-700">See answers even when respondents drop off mid-form. Free on Youform, gated behind Typeform's $379/mo plan.</p>
            </div>

            <div class="bg-white rounded-2xl border-2 border-black p-7 drop-shadow-6xl">
                <div class="mb-4">
                    <svg class="w-9 h-9 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l-2 2m13 11V10l-2 2M3 19h18"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Drop-off analytics</h3>
                <p class="text-base text-gray-700">Track views, starts, completion rate, and question-level drop-off. Advanced analytics at $29/month.</p>
            </div>
        </div>

        <div class="mt-14 flex justify-center">
            <a href="https://app.youform.com/register" class="inline-block px-10 py-3 rounded-md bg-coral border-2 border-black text-lg font-bold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Try all features free
            </a>
        </div>
    </div>
</div>

<!-- Security & Compliance -->
<div class="bg-white py-20 border-t-4 border-black">
    <div class="max-w-7xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-4">
            Your data stays safe
        </h2>
        <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-12">
            Encrypted in transit, stored in the EU, and fully GDPR compliant.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left">
            <div class="bg-white border-2 border-black rounded-2xl p-6 drop-shadow-6xl">
                <div class="mb-3">
                    <svg class="w-8 h-8 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">256-bit SSL</h3>
                <p class="text-sm text-gray-700">Every form is served over HTTPS. All data is encrypted in transit.</p>
            </div>
            <div class="bg-white border-2 border-black rounded-2xl p-6 drop-shadow-6xl">
                <div class="mb-3">
                    <svg class="w-8 h-8 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">GDPR compliant</h3>
                <p class="text-sm text-gray-700">Fully compliant with EU data privacy regulations, including data export and deletion.</p>
            </div>
            <div class="bg-white border-2 border-black rounded-2xl p-6 drop-shadow-6xl">
                <div class="mb-3">
                    <svg class="w-8 h-8 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">EU data storage</h3>
                <p class="text-sm text-gray-700">Data is stored with AWS in the European Union and is GDPR compliant.</p>
            </div>
        </div>
    </div>
</div>

<!-- Who it's best for -->
<div class="bg-medium-champagne border-t-4 border-black">
    <div class="relative max-w-7xl mx-auto py-20 px-10 md:px-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center mb-4">
            Which one is right for you?
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-2xl mx-auto mb-12">
            An honest take — here's when each tool makes sense.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <div class="bg-white border-2 border-black rounded-2xl p-8 drop-shadow-6xl">
                <div class="flex items-center mb-5">
                    <img src="/assets/images/youform-logo.png" alt="Youform" class="h-7">
                </div>
                <p class="text-base text-gray-700 mb-4">Pick Youform if you need:</p>
                <ul class="space-y-2.5 text-gray-800 text-base">
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> Unlimited responses on the free plan</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> Custom domain and branding without a $500/mo Enterprise plan</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> Partial submissions and drop-off analytics included</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> A flat $29/mo PRO plan, regardless of response volume</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> Calendly, Cal.com, SavvyCal, or TidyCal integrations</li>
                </ul>
            </div>
            <div class="bg-white border-2 border-black rounded-2xl p-8 drop-shadow-6xl">
                <div class="flex items-center mb-5">
                    <img src="/assets/images/typeform-logo.webp" alt="Typeform" class="h-7 rounded border border-gray-300 p-0.5">
                </div>
                <p class="text-base text-gray-700 mb-4">Stick with Typeform if you need:</p>
                <ul class="space-y-2.5 text-gray-800 text-base">
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> A specific Typeform-only native integration</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> The Typeform brand name for client-facing work</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> HIPAA-compliant healthcare forms (on Enterprise)</li>
                    <li class="flex gap-2"><span class="text-gray-900 font-bold">—</span> A workflow that's already deeply wired into Typeform's API</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Migration steps -->
<div class="bg-white">
    <div class="relative max-w-7xl mx-auto py-20 px-10 md:px-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center mb-4">
            Switching takes minutes
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-2xl mx-auto mb-10">
            Paste your existing Typeform URL and Youform imports the form for you.
        </p>

        <div class="max-w-4xl mx-auto bg-amber-50 border-2 border-black rounded-2xl p-8 drop-shadow-6xl">
            <ol class="list-decimal list-inside space-y-3 text-gray-800 text-base">
                <li>Paste your Typeform URL into the <strong>Import from Typeform</strong> tool. Youform recreates the form automatically.</li>
                <li>Add your logo, colors, and custom domain.</li>
                <li>Connect Google Sheets, Slack, Zapier, webhooks, or any of the 6,000+ Zapier apps.</li>
                <li>Share the form as a link, embed, or on a custom domain.</li>
                <li>Collect responses without hitting caps.</li>
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
        <h2 class="text-3xl font-bold mb-4">500+ ready-made templates</h2>
        <p class="text-lg text-gray-700 mb-8">
            Pick one and customize it in minutes.
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
                <p class="text-gray-700">Yes. Unlimited forms and responses on the free plan, under fair-use limits. The PRO plan at $29/month unlocks custom domains, brand removal, advanced analytics, and a few other pro features.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">How does Youform compare to Typeform on pricing?</h3>
                <p class="text-gray-700">Youform's free plan offers unlimited forms and responses, while Typeform's free plan is capped at 10 responses/month. Features like custom domains, branding removal, and analytics that cost $79-200+/month on Typeform are available at $29/month with Youform.</p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Can I import my existing Typeform?</h3>
                <p class="text-gray-700">Yes. Paste your Typeform URL into the import tool and Youform recreates the form for you. Then customize the design, wire up integrations, and start collecting responses.</p>
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
