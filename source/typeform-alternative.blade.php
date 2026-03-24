---
title: "Typeform Alternative - Youform | Affordable, Unlimited, Free Forever"
description: "Looking for a Typeform alternative? Youform offers unlimited forms and responses for free. No 10-response limits. Import your Typeform in seconds."
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
                        Typeform charges $25/month for just 100 responses. Youform gives you UNLIMITED forms and responses for FREE. Same beautiful multi-step forms, none of the limits.
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

<!-- Comparison table: Design & UX -->
<div class="bg-aquamarine" style="background-color: rgba(69, 173, 148, 0.85);">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-24 pt-40">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center pb-4 px-10 md:px-20">
            Same beautiful forms, without the price tag
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-12 px-10 md:px-20">
            Typeform pioneered conversational forms. Youform delivers the same experience — at a fraction of the cost.
        </p>

        <div class="max-w-5xl mx-auto px-6 md:px-0 mb-8">
            <div class="overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
                <table class="min-w-full text-left text-sm md:text-base">
                    <thead class="bg-gray-100 border-b-2 border-black">
                        <tr>
                            <th class="px-6 py-4"></th>
                            <th class="px-6 py-4 text-center bg-amber-50">
                                <img src="/assets/images/youform-logo.png" alt="Youform" class="h-8 mx-auto mb-2">
                                <div class="font-bold text-lg flex items-center justify-center gap-2">
                                    Youform
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center bg-gray-50">
                                <div class="font-semibold text-lg">Typeform</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Interface</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">Beautiful multi-step forms with high completion rates</td>
                            <td class="px-6 py-4 bg-gray-50">Beautiful multi-step forms</td>
                        </tr>
                        <tr class="bg-gray-50 border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Branding</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">Full brand control — colors, fonts, logos, layout</td>
                            <td class="px-6 py-4 bg-gray-50">Brand customization on paid plans</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Templates</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">500+ professionally designed templates</td>
                            <td class="px-6 py-4 bg-gray-50">Templates available</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-semibold bg-gray-50">Custom domains</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">Available on PRO plan</td>
                            <td class="px-6 py-4 bg-gray-50">Business plan only ($99/mo)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="my-10"></div>
        <div class="flex justify-center">
            <p class="text-center text-base font-semibold text-gray-800 max-w-2xl mx-auto px-10 md:px-20">
                Same form experience. Way more affordable. Youform wins on value.
            </p>
        </div>
        <div class="my-10"></div>
    </div>
</div>

<!-- Comparison table: Pricing & Limits -->
<div class="bg-white">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-24 pt-24 px-10 md:px-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 text-center mb-8">
            Unlimited where Typeform limits you
        </h2>
        <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-12">
            Typeform's free plan gives you 10 responses per month. Youform gives you unlimited — forever.
        </p>

        <div class="max-w-6xl mx-auto mb-8">
            <div class="overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
                <table class="min-w-full text-left text-base">
                    <thead class="bg-gray-100 border-b-2 border-black">
                        <tr>
                            <th class="px-6 py-4 font-semibold text-left"></th>
                            <th class="px-6 py-4 text-center bg-amber-50">
                                <img src="/assets/images/youform-logo.png" alt="Youform" class="h-8 mx-auto mb-2">
                                <div class="font-bold text-lg">Youform</div>
                            </th>
                            <th class="px-6 py-4 text-center bg-gray-50">
                                <div class="font-semibold text-lg">Typeform</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Free responses</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">Unlimited</td>
                            <td class="px-6 py-4 bg-gray-50">10 per month</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Free forms</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">Unlimited</td>
                            <td class="px-6 py-4 bg-gray-50">Unlimited (but limited responses)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Paid plan starts at</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">$25/month</td>
                            <td class="px-6 py-4 bg-gray-50">$25/month (100 responses)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="px-6 py-4 font-semibold bg-gray-50">Business features</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">$25/month — includes everything</td>
                            <td class="px-6 py-4 bg-gray-50">$99/month for Business plan</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-semibold bg-gray-50">Integrations</td>
                            <td class="px-6 py-4 bg-amber-50 font-medium">6,000+ via Zapier, webhooks, Sheets, Slack, GTM</td>
                            <td class="px-6 py-4 bg-gray-50">Integrations on paid plans</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <p class="text-center text-base font-semibold text-gray-800 max-w-2xl mx-auto">
            Stop paying for responses. Start building with Youform.
        </p>
    </div>
</div>

<!-- High pricing problem section (moved from home page) -->
<div class="" style="margin-top: -2rem">
    <div class="bg-lavender-rose pt-20 pb-20">
        <div class="relative max-w-7xl mx-auto px-10 md:px-20">
            <div class="text-center">
                <div>
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold">High pricing problem? We hear you!</p>
                    <p class="text-center text-lg xl:text-xl font-medium mt-10">
                        Do you hate the high prices of Typeform? We do too. That's why Youform allows UNLIMITED forms and form responses for FREE.
                    </p>
                </div>
                <img class="hidden md:block pt-20" loading="lazy" src="/assets/images/twitter-screenshot.png?v=2" alt="Typeform pricing">

                @include('partials.price-calculator')

                <div>
                    <div class="mt-16">
                        <h4 class="text-center text-2xl sm:text-4xl xl:text-5xl font-bold mb-8 pt-10">
                            Even <em>Pieter Levels</em> recommends Youform
                        </h4>

                        <div>
                            <div class="py-4 max-w-lg mx-auto rounded-2xl shadow-lg md:shadow-2xl" style="background: #13202B">
                                <a href="https://x.com/levelsio" target="_blank">
                                    <img loading="lazy" src="/assets/images/levelsio.png" class="" alt="Pieter Levels recommends Youform">
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
            <!-- Card 1: Advanced Logic -->
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-aquamarine" fill="none" viewBox="0 0 64 64">
                        <circle cx="12" cy="12" r="6" fill="currentColor"/>
                        <circle cx="52" cy="12" r="6" fill="currentColor"/>
                        <circle cx="12" cy="52" r="6" fill="currentColor"/>
                        <circle cx="52" cy="52" r="6" fill="currentColor"/>
                        <path d="M12 18v28M18 12h28M52 18v28M18 52h28" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 18c0 13 40 13 40 0" stroke="currentColor" stroke-width="2" stroke-dasharray="4,4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Advanced logic</h3>
                <p class="text-base text-gray-700 text-center">
                    Show or hide questions based on previous answers. Branch forms dynamically — just like Typeform, but free.
                </p>
            </div>
            <!-- Card 2: Multi-step layouts -->
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-coral" fill="none" viewBox="0 0 30 30">
                        <rect x="7" y="7" width="16" height="4" rx="2" fill="currentColor"/>
                        <rect x="7" y="13" width="16" height="4" rx="2" fill="currentColor"/>
                        <rect x="7" y="19" width="8" height="4" rx="2" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Multi-step layouts</h3>
                <p class="text-base text-gray-700 text-center">
                    The conversational, one-question-at-a-time experience Typeform is known for — included in Youform's free plan.
                </p>
            </div>
            <!-- Card 3: Outcome-based quizzes -->
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-purple-500" fill="none" viewBox="0 0 48 48">
                        <path d="M18 19c0-3.3 2.5-5 6-5s6 1.7 6 5c0 3-2 4-4 5s-2 2-2 3" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="24" cy="34" r="2" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Outcome-based quizzes</h3>
                <p class="text-base text-gray-700 text-center">
                    Build interactive quizzes with personalized results — ideal for lead generation, onboarding, and education.
                </p>
            </div>
            <!-- Card 4: Flexible file uploads -->
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-blue-500" fill="none" viewBox="0 0 48 48">
                        <rect x="8" y="8" width="32" height="36" rx="4" stroke="currentColor" stroke-width="2" fill="none"/>
                        <path d="M24 32V18" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                        <path d="M19 23l5-5 5 5" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Flexible file uploads</h3>
                <p class="text-base text-gray-700 text-center">
                    Accept file uploads from respondents on any plan — no extra charges for storage.
                </p>
            </div>
            <!-- Card 5: Partial submissions -->
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-green-500" fill="none" viewBox="0 0 48 48">
                        <path d="M15 27l7 7 12-13" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Partial submissions</h3>
                <p class="text-base text-gray-700 text-center">
                    Even if a respondent leaves before submitting, you can still view their partial data — something Typeform charges extra for.
                </p>
            </div>
            <!-- Card 6: Analytics & insights -->
            <div class="flex flex-col items-center bg-white/80 rounded-2xl border-2 border-black shadow-xl transition-all duration-200 p-7 group relative overflow-hidden">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-yellow-500" fill="none" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="2" fill="none"/>
                        <circle cx="17" cy="21" r="3" fill="currentColor"/>
                        <circle cx="31" cy="21" r="3" fill="currentColor"/>
                        <path d="M17 31c2 2 10 2 14 0" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Analytics & drop-off tracking</h3>
                <p class="text-base text-gray-700 text-center">
                    Track views, starts, completion rate, and question-by-question drop-off with beautiful charts.
                </p>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <a
                href="https://app.youform.com/register"
                class="inline-block px-10 py-3 rounded-md bg-coral border-2 border-black text-lg font-bold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Try all features free
            </a>
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

@include('_partials.testimonials-carousel')

@include('_partials.ask-ai-to-recommend', [
    'prompt' => 'tell+me+why+youform+is+a+better+and+more+affordable+typeform+alternative'
])

@include('partials.footer')

@endsection
