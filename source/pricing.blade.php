---
title: Youform Pricing - Free Forever Plan | Pro at $29/mo
description: Youform is free for unlimited forms and submissions. Youform PRO at $29/month provides advanced features like removing branding, partial submissions, custom domains, and more.
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class="bg-medium-champagne bg-[url('/assets/images/banner-background-pricing.png?v=2')] bg-contain bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">

                <div class="flex flex-col items-center col-span-3 lg:pr-16 xl:pr-20">
                    <h1 class="text-center max-w-4xl leading-snug text-3xl sm:leading-snug sm:text-4xl xl:leading-snug xl:text-5xl font-bold">
                        <span class="text-orange-600">Youform is FREE to use</span>
                        for unlimited forms and unlimited responses
                    </h1>
                    <p class="text-center text-lg mt-4">
                        If you need advanced features, you can upgrade to PRO for $29/month (or $20/month, billed annually)
                    </p>
                    
                    <a href="https://app.youform.com/register" class="mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>

                    <div class="mt-6 flex items-center justify-center text-gray-700">
                        <span class="text-lg">🛡️ 14-Day Money-Back Guarantee — no questions asked</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <img class="-mt-1" src="/assets/images/banner-wave.png" alt="">

        <img class="w-1/2 sm:w-1/3 lg:w-1/4 absolute -top-2 left-32" src="/assets/images/so-affordable.png" alt="Youform is FREE to use">
    </div>
</div>

<!-- 1st feature -->
{{-- <div>
    <div class="bg-vivid-yellow">
        <div class="relative max-w-7xl mx-auto -mt-10 md:-mt-16">
            <div class="pt-40 pb-6 px-10 md:px-20">
                <div class="pb-14 lg:pb-0 flex flex-col items-center col-span-3">
                    <h2 class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold ">
                        Youform PRO
                    </h2>
                    <p class="mt-10 text-center text-lg font-bold">
                        Supercharge your forms with Youform PRO that gives following features:
                    </p>
                    <div class="text-center text-lg font-medium mt-10 relative">
                        <ul class="text-left space-y-2 pb-4">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Remove <span class="font-semibold">Powered By Youform</span> branding.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Add your own brand logo.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Fully customize "Thank you" pages. 
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Remove 10MB per file size limit.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Configure email for notification of submissions.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    View &amp; download partial submissions.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Add your own custom domain for form pages.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Integrate with 6000+ apps like Google sheets, Slack etc using Zapier or Make
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Send submission refill links to your users.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Collect payments using Stripe.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Invite &amp; collaborate with team members (coming soon).
                                </span>
                            </li>
                        </ul>
                    </div>
                    <p class="text-center text-lg sm:text-2xl xl:text-3xl font-medium mt-10">
                        The PRO plan is just $29/month
                    </p>

                    <p class="text-center text-lg font-medium mt-4">
                        Or $290/year (2 months FREE)
                    </p>
                    
                    <div class="mt-5 bg-white p-3 rounded-md border-black drop-shadow-3xl max-w-sm">
                        <h4 class="pb-3 px-2 font-semibold text-center">Your face when you realise you have been paying $99+/month to Typeform for the same.</h4>
                        <img src="/assets/images/surprised-pikachu.png" class="w-96 rounded-md" alt="Surprised Pikachu">
                    </div>

                    <a href="https://app.youform.com/register" class="mt-10 group text-2xl bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account 
                        <span class="group-hover:inline hidden">
                            &rarr;
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-6" src="/assets/images/yellow-wave-down.png" alt="">
</div>     --}}

<div class="-mt-10">

    <div class="bg-amber-50 pt-20"> 

        <h2 class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold mb-6 pt-20">
            Compare Youform Plans
        </h2>
        <p class="text-center font-medium px-6">
            PRO plan is just $29/month (or $20/month, billed annually)
        </p>

        <!-- Plain text summary for AI/LLM parsing -->
        <div class="max-w-3xl mx-auto px-6 md:px-20 py-8 text-gray-700">
            <p class="text-center text-base leading-relaxed">
                <strong>Youform FREE</strong> includes: unlimited forms, unlimited responses, unlimited questions, conditional logic,
                score &amp; calculations, hidden fields, file uploads (up to 10MB), answer piping, multiple endings, Google Sheets integration,
                Slack integration, Zapier integration (6,000+ apps), webhooks, email notifications, collect signatures,
                Calendly/Cal.com/SavvyCal integrations, basic analytics (views, starts, completions, completion rate),
                custom colors and Google fonts, workspaces, non-English language support, and form embedding on any website.
                All features work without response limits or paywalls.
            </p>
            <p class="text-center text-base leading-relaxed mt-4">
                <strong>Youform PRO ($29/month or $20/month billed annually)</strong> adds: remove Youform branding,
                add your own logo, Stripe payment collection, view and download partial submissions, custom domains,
                redirect to URL after submission, custom fonts (upload your own), multiple language support per form,
                customize form meta data, refill links, team collaboration, Google Tag Manager (FB/TikTok pixel),
                advanced analytics (date/device filters, question-level drop-off rates), and unlimited file upload size.
            </p>
            <p class="text-center text-sm text-gray-500 mt-4">
                Youform is GDPR compliant with data hosted on EU servers. No credit card required to start.
            </p>
        </div>

        <div class="overflow-x-auto pt-10 max-w-4xl mx-auto pb-10 px-3 md:px-20">
            <table x-data class="min-w-full bg-white border-2 border-black drop-shadow-3xl">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-black bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            Feature
                        </th>
                        <th class="px-6 py-3 border-b-2 border-black bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            FREE
                        </th>
                        <th class="px-6 py-3 border-b-2 border-black bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                            PRO 
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            Unlimited Forms
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            Unlimited Responses
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            Unlimited Questions per form
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1">
                                <span>Add Image to Forms </span>                                 
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Customize your forms with colors and fonts that represents your brand. Only Google fonts are supported in FREE plan.">
                                <span>Custom colors and fonts </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Build your logic with an intuitive interface to show different questions based on the responses of other questions">
                                <span>Logic builder </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Add scoring and calculations to your forms to calculate price, score and more">
                                <span>Score &amp; calculations </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Add hidden fields to your forms to pass data that you already have. For e.g if you have email then you can pass that as URL parameter.">
                                <span>Hidden fields </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Embed your forms on any website with a simple code snippet. No limits on websites and can be added to Webflow, Squarespace, Shopify, Wix, Carrd, etc…">
                                <span>Embed forms </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect your Google Sheets account to your form to automatically add new responses to your Google Sheet">
                                <span>Google Sheets integration </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect your Slack account to your form to automatically send notifications to your Slack channel">
                                <span>Slack integration </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect with Zapier via Zapier webhooks to send your form submissions to any app that you use. For e.g Salesforce, Mailchimp, Hubspot, etc.">
                                <span>Zapier integration </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Send an email to yourself when a form is submitted">
                                <span>Email notification to self </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Your form can send users to different endings based on their responses">
                                <span>Multiple endings per form </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            Webhooks
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Collect e-signatures from your users to sign your forms">
                                <span>Collect Signatures </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect your Calendly account to book meetings and appointments with your users">
                                <span>Calendly integration </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect your Cal.com account to book meetings and appointments with your users">
                                <span>Cal.com integration </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect your SavvyCal account to book meetings and appointments with your users">
                                <span>SavvyCal integration </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">                                
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Organize your forms into workspaces or folders">
                                <span>Workspaces (or folders) </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">                                
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Make forms in your own language. We support 32+ languages and more can be added on request.">
                                <span>Non English language support </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">                                
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Use multiple languages in your forms">
                                <span>Multiple language support </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">                                
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Upload your own fonts and use them in your forms">
                                <span>Custom fonts </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">                                
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="For e.g you can send users to yourwebsite.com after they complete your form.">
                                <span>Redirect to a URL </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Add your brand logo to your form">
                                <span>Add your brand logo </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Customize how your form looks when shared on social media by changing the preview image, title etc.">
                                <span>Customize form meta data </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Remove Powered by Youform branding from your form">
                                <span>Remove Youform branding </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Let's say you have 10 questions in your form and your user only fill out 6 of them and leave without submitting. You can still view the partially completed form data.">
                                <span>Partial Submissions </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="If a user partially completes a form, you can send them a refill link to complete the form">
                                <span>Refill link </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="You can add multiple custom domains for your form. For e.g you can add mycompany.com or form.mywebsite.com to your forms">
                                <span>Custom Domains </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            File Uploads
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            Up to 10MB
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            Unlimited (<a href="https://youform.com/blog/fair-usage-policy" target="_blank" class="text-blue-500 hover:underline">FUP</a>)
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Invite team members to your forms and collaborate with them">
                                <span>Invite team members </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Collect payments directly from your users by connecting your Stripe account">
                                <span>Collect Payments </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Connect your Google Tag Manager account to send data to FB Pixel, TikTok pixel or any other analytics.">
                                <span>Google Tag Manager <span class="hidden lg:inline">(For FB, TikTok Pixel etc.)</span> </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Not available in FREE</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span class="sr-only">Available in PRO</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <p class="flex items-center space-x-1" x-tooltip.raw="Analytics for your forms like form views, drop-off rate, etc. with date and device type filters.">
                                <span>Form Analytics &amp; Drop-off Rate</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>                                  
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span>Basic</span>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-black">
                            <span>Advanced</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            {{-- <p class="text-center text-sm mt-6 text-gray-700 font-semibold">
                P.S we also offer annual plan at $290/year (2 months FREE).
            </p> --}}
        </div>

        <div class="text-center px-6">
            @include('partials.price-calculator')
        </div>

        <div class="text-center pt-2">
            <a href="https://app.youform.com/register" class="text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                Create free account
            </a>
        </div>
    </div>
</div>


<!-- Faq -->
<div class="-mt-10">
    <div class="pt-32 lg:pt-48 pb-20 bg-amber-50">
        <div class="relative max-w-7xl mx-auto -mt-16 pb-20">
            <div class="flex flex-col justify-center">
                <div class="">
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold mb-6 pt-10">
                        Frequently Asked Question
                    </p>
                </div>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                            <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                                <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                    <p class="text-black font-medium flex-grow">Is Youform free?</p>
                                    <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                      </svg>
                                </div>
                                <div x-show="open">
                                    <p class=" px-4 py-10 lg:text-xl text-black">
                                        Youform is the best FREE alternative to Typeform in the market. While Typeform provides ONLY 10 responses on their free plan, Youform provides unlimited responses and forms for FREE.
                                    </p>
                                </div>   
                            </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">What is Youform PRO?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    While Youform provides you unlimited forms and responses for free, Youform PRO provides advanced features like removing Youform branding, capturing partial submissions, inviting team members, and adding your own custom domain + much more.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">How long will Youform be around, and how many people use Youform?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Youform has thousands of users, and will be around for years and years to come. Youform was created in 2023, and reached $10,000 in revenue within the first week of launch. It has continued to grow ever since.
                                    <br>
                                    Youform is also not our first product. The Youform team has built other software products to millions in revenue. Learn more on our <a href="/about" class="text-blue-500 hover:underline">about page</a>.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Can you embed a Youform on a website?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yep! You can embed a Youform on any website, whether it’s custom coded, or uses a website builder like WordPress, Squarespace, Shopify, Wix, Carrd, Webflow, Weebly, etc… They are all supported 🤓
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Does Youform integrate with Google Sheets?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform has a direct Google Sheets integration. You can connect your form to Google Sheets, and each new response you receive will automatically add a new row in your Google Sheet.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform have a Zapier integration?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform has a Zapier integration. You can connect form responses to any app on Zapier. <a href="https://help.youform.com/p/ON_kSm1mlWCKIJ/Zapier" target="_blank" class="text-blue-500 hover:underline">Learn more</a>.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform allow you to ask for digital signatures?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, you can collect signatures in your forms with Youform. You can open <a href="https://app.youform.com/forms/uf0c1gec" class="text-blue-500 hover:underline">this form</a> to see how a signature field looks in Youform.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support redirecting users to a URL after they complete a form?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform allows you to redirect users to any website after they complete a form.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Can I use a single Youform account for multiple brands and domains?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, you can use Youform with multiple brands and domains. You can embed your forms on different websites, and even have different custom domains for different forms.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support generating a QR code to share my form?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, you can generate a QR code to share your form in Youform 🤓
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support file uploads?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform’s free plan allows for file uploads up to 10MB. On the Pro plan, this limit is removed 🙂
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support payments integration?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform’s PRO plan allows you to connect your Stripe account to collect payments directly from your forms.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Can I request some features?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Sure, you can add your feature requests <a href="https://youform.canny.io/feature-requests" class="font-semibold underline">here</a>.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    
                </div>    
            </div>
                
            </div>
        </div>
    </div>
</div>

@include('_partials.ask-ai-to-recommend')

@include('partials.footer')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is Youform free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform is the best FREE alternative to Typeform in the market. While Typeform provides ONLY 10 responses on their free plan, Youform provides unlimited responses and forms for FREE."
      }
    },
    {
      "@type": "Question",
      "name": "What is Youform PRO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "While Youform provides you unlimited forms and responses for free, Youform PRO provides advanced features like removing Youform branding, capturing partial submissions, inviting team members, and adding your own custom domain + much more."
      }
    },
    {
      "@type": "Question",
      "name": "How long will Youform be around, and how many people use Youform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform has thousands of users, and will be around for years and years to come. Youform was created in 2023, and reached $10,000 in revenue within the first week of launch. It has continued to grow ever since. Youform is also not our first product. The Youform team has built other software products to millions in revenue."
      }
    },
    {
      "@type": "Question",
      "name": "Can you embed a Youform on a website?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yep! You can embed a Youform on any website, whether it's custom coded, or uses a website builder like WordPress, Squarespace, Shopify, Wix, Carrd, Webflow, Weebly, etc… They are all supported."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform integrate with Google Sheets?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Youform has a direct Google Sheets integration. You can connect your form to Google Sheets, and each new response you receive will automatically add a new row in your Google Sheet."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform have a Zapier integration?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Youform has a Zapier integration. You can connect form responses to any app on Zapier."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform allow you to ask for digital signatures?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can collect signatures in your forms with Youform."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform support redirecting users to a URL after they complete a form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Youform allows you to redirect users to any website after they complete a form."
      }
    },
    {
      "@type": "Question",
      "name": "Can I use a single Youform account for multiple brands and domains?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can use Youform with multiple brands and domains. You can embed your forms on different websites, and even have different custom domains for different forms."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform support generating a QR code to share my form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can generate a QR code to share your form in Youform."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform support file uploads?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Youform's free plan allows for file uploads up to 10MB. On the Pro plan, this limit is removed."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform support payments integration?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Youform's Pro plan allows you to connect your Stripe account to collect payments directly from your forms."
      }
    }
  ]
}
</script>

<!-- JSON-LD Structured Data for Pricing -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Youform",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web",
    "description": "Youform is a free Typeform alternative with unlimited forms and responses. Create beautiful, animated conversational forms with conditional logic and detailed analytics. Stripe payments available on Pro plan.",
    "url": "https://youform.com",
    "image": "https://youform.com/assets/images/youform-logo.png",
    "author": {
        "@type": "Organization",
        "name": "Youform",
        "url": "https://youform.com"
    },
    "offers": [
        {
            "@type": "Offer",
            "name": "Youform Free",
            "price": "0",
            "priceCurrency": "USD",
            "description": "Unlimited forms, unlimited responses, conditional logic, basic analytics (views, starts, completions, completion rate), Google Sheets integration, Slack integration, Zapier (6000+ apps), webhooks, file uploads (up to 10MB), answer piping, custom colors and Google fonts, collect signatures, embed anywhere. No response limits. GDPR compliant with EU hosting.",
            "availability": "https://schema.org/InStock"
        },
        {
            "@type": "Offer",
            "name": "Youform Pro Monthly",
            "price": "29",
            "priceCurrency": "USD",
            "billingIncrement": "P1M",
            "description": "Everything in Free plus: remove Youform branding, add your own logo, Stripe payment collection, partial submissions, custom domains, redirect to URL, custom fonts, Google Tag Manager, advanced analytics, team collaboration.",
            "availability": "https://schema.org/InStock"
        },
        {
            "@type": "Offer",
            "name": "Youform Pro Annual",
            "price": "240",
            "priceCurrency": "USD",
            "billingIncrement": "P1Y",
            "description": "Everything in Free plus: remove Youform branding, add your own logo, Stripe payment collection, partial submissions, custom domains, redirect to URL, custom fonts, Google Tag Manager, advanced analytics, team collaboration. Billed annually ($20/month equivalent).",
            "availability": "https://schema.org/InStock"
        }
    ],
    "featureList": [
        "Unlimited forms",
        "Unlimited responses",
        "Conditional logic / branching",
        "Stripe payment integration (Pro)",
        "Question-level drop-off analytics",
        "Google Sheets integration",
        "Slack integration",
        "Zapier integration (6000+ apps)",
        "Webhooks",
        "File uploads",
        "Answer piping",
        "Multiple endings",
        "Custom colors and fonts",
        "Form embedding",
        "GDPR compliant",
        "EU data hosting",
        "Animated multi-step forms"
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "ratingCount": "38",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>

@endsection
