---
title: Free Multiple Choice Quiz Maker | Create Online Quizzes with YouForm
description: Easily create engaging multiple choice quizzes with Youform's free online quiz maker. Perfect for education, lead generation, and fun. Get unlimited questions & responses.
---

@extends('_layouts.main')

@section('body')

<!-- Hero -->
<div> 
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <div class="relative max-w-7xl mx-auto mt-10 pb-12">
            <div class="grid grid-cols-1 lg:grid-cols-5 items-center px-10 md:px-20 gap-10">
                <div class="lg:col-span-3">
                    <div class="max-w-3xl">
                        <a href="https://www.capterra.com/p/10000189/Youform/" 
                           x-data 
                           x-tooltip.raw="Read reviews on Capterra" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="inline-flex items-center cursor-pointer bg-pale-violet text-black text-[11px] sm:text-xs font-semibold px-3 py-1 rounded-full mb-3 lg:mb-2 space-x-1 transition-transform transform hover:scale-105">
                            <span>Rated 5</span> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                            </svg> 
                            <span>on Capterra</span>                         
                        </a>
                        <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                            Free Multiple Choice Quiz Maker
                        </h1>
                        <p class="text-base mt-6">
                            Create engaging online quizzes with scoring, custom branding, and unlimited questions &amp; responses. Perfect for education, lead generation, and fun.
                        </p>
                        <div class="mt-6">
                            <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                                Create Your Free Quiz Now
                            </a>
                        </div>
                        <p class="text-sm text-gray-700 mt-4 font-semibold flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited questions and responses on the free plan.</span>
                        </p>
                        <div class="mt-3">
                            <a href="https://app.youform.com/forms/t6wpubpm" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-sm font-semibold underline hover:no-underline">
                                See Demo Quiz in a new tab &rarr;
                            </a>
                        </div>
                        <div class="mt-6 lg:mt-10">
                            <figure class="flex flex-auto flex-col justify-between pt-4 group text-center lg:text-left max-w-2xl">
                                <blockquote class="text-gray-900 text-lg md:text-xl">
                                    <p>“Youform is an absolute joy to use.”</p>
                                </blockquote>
                                <a href="https://x.com/levelsio" target="_blank" class="mt-3 lg:flex items-center gap-x-6">
                                    <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto lg:mx-0" src="/assets/images/levelsio.jpg" alt="Pieter Levels Avatar">
                                    <div class="text-base mt-1 lg:mt-0">
                                        <div class="text-gray-900 group-hover:underline">Pieter Levels</div>
                                        <div class="text-gray-700 text-xs">
                                            Founder Nomadlist and RemoteOK. 
                                            <br>
                                            700k+ Followers on Twitter
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 hidden lg:block">
                    <div class="bg-white border-2 border-black rounded-3xl drop-shadow-6xl overflow-hidden">
                        <iframe 
                            src="https://app.youform.com/forms/t6wpubpm" 
                            loading="lazy"
                            width="100%" 
                            height="600"
                            frameborder="0" 
                            marginheight="0" 
                            marginwidth="0"
                            class="bg-white">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Youform Features -->
<div class="bg-gray-50 pt-24 lg:pt-32 pb-20 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
            <div class="lg:col-span-6">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Youform: The Easiest Way to Build Multiple Choice Quizzes</h2>
                <p class="text-lg text-gray-700 mb-6">
                    Youform gives you a modern, intuitive quiz maker designed for speed and flexibility. Build polished multiple choice quizzes in minutes—no learning curve, no limits.
                </p>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-aquamarine">✓</span>
                        <span><strong>Intuitive builder:</strong> Add questions, options, and scoring with a clean, menu-based interface—no complicated menus or hidden settings.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-aquamarine">✓</span>
                        <span><strong>Unlimited everything:</strong> Create as many quizzes, questions, and responses as you like on the free plan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-aquamarine">✓</span>
                        <span><strong>Scoring &amp; logic:</strong> Assign points to each answer, show scores instantly, and use conditional logic to personalize the quiz path.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-aquamarine">✓</span>
                        <span><strong>Branding &amp; layouts:</strong> Customize colors, fonts, images, and layouts so your quizzes feel fully on-brand.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-aquamarine">✓</span>
                        <span><strong>Embed &amp; share anywhere:</strong> Share a link, embed on your website, or use QR codes for in-person events.</span>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-5 lg:col-start-8">
                <div class="bg-white rounded-2xl border-2 border-black drop-shadow-3xl p-6">
                    <h3 class="text-xl font-bold mb-3">Build your first quiz in 3 steps</h3>
                    <ol class="space-y-2 text-gray-700 text-sm">
                        <li><strong>1.</strong> Choose the multiple choice question type in Youform.</li>
                        <li><strong>2.</strong> Add your questions, answers, and scoring rules.</li>
                        <li><strong>3.</strong> Share your quiz link or embed it on your site.</li>
                    </ol>
                    <a href="https://app.youform.com/register" class="inline-block mt-5 w-full text-center bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-6 py-2.5 text-base font-semibold text-black rounded-md">
                        Start Building Free Quizzes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Use Cases -->
<div class="bg-gray-50 pt-24 lg:pt-28 pb-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold mb-8 text-center">Who Can Benefit from Youform's Quiz Maker?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-3xl transition-transform duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-bold mb-3">Educators</h3>
                <p class="text-sm text-gray-700">
                    Run quick assessments, graded quizzes, and homework checks with automatic scoring and instant feedback.
                </p>
            </div>
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-3xl transition-transform duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-bold mb-3">Marketers</h3>
                <p class="text-sm text-gray-700">
                    Create lead generation quizzes, product recommenders, and trivia campaigns that capture emails while entertaining your audience.
                </p>
            </div>
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-3xl transition-transform duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-bold mb-3">HR &amp; Training</h3>
                <p class="text-sm text-gray-700">
                    Use quizzes for onboarding, internal knowledge checks, and compliance training with clear, objective results.
                </p>
            </div>
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-3xl transition-transform duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-bold mb-3">Events &amp; Communities</h3>
                <p class="text-sm text-gray-700">
                    Run live trivia, icebreakers, and post-event feedback quizzes that keep people engaged online or in person.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Comparison -->
<div class="bg-amber-50 border-t-4 border-black py-20">
    <div class="max-w-6xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-center">Why Youform Stands Out</h2>
        <p class="text-lg text-gray-700 mb-8 text-center">
            Many quiz makers limit features or responses on free plans. Youform gives you room to grow without hitting artificial caps.
        </p>
        <div class="overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
            <table class="min-w-full text-left text-sm md:text-base">
                <thead class="bg-gray-100 border-b-2 border-black">
                    <tr>
                        <th class="px-6 py-4 font-semibold text-left">Feature</th>
                        <th class="px-6 py-4 text-center bg-amber-50">
                            <div class="font-bold text-lg">Youform</div>
                        </th>
                        <th class="px-6 py-4 text-center bg-gray-50">
                            <div class="font-semibold text-lg">Typeform</div>
                        </th>
                        <th class="px-6 py-4 text-center bg-gray-50">
                            <div class="font-semibold text-lg">SurveyMonkey</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Unlimited responses</td>
                        <td class="px-6 py-4 bg-amber-50 text-center font-medium">
                            <svg class="inline w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Yes</span> <span aria-hidden="true">Yes</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <svg class="inline w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">No, only 10 responses per month</span> <span aria-hidden="true">10/month</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <svg class="inline w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">No, only 25 responses per survey</span> <span aria-hidden="true">25/survey</span>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Scoring &amp; logic</td>
                        <td class="px-6 py-4 bg-amber-50 text-center font-medium">
                            <svg class="inline w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Yes</span> <span aria-hidden="true">Yes</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <svg class="inline w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Yes</span> <span aria-hidden="true">Yes</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <svg class="inline w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Yes</span> <span aria-hidden="true">Yes</span>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Custom branding</td>
                        <td class="px-6 py-4 bg-amber-50 text-center font-medium">
                            <svg class="inline w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Yes, available on Pro plan for $29/month</span> <span aria-hidden="true">$29/mo</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <svg class="inline w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Paid only, $79/month</span> <span aria-hidden="true">$79/mo</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <svg class="inline w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" /></svg>
                            <span class="sr-only">Paid only, $99/month</span> <span aria-hidden="true">$99/mo</span>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Ease of use</td>
                        <td class="px-6 py-4 bg-amber-50 text-center font-medium">
                            <span class="sr-only">Excellent ease of use</span>
                            <span aria-hidden="true" class="text-green-600 font-bold">Excellent</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <span class="sr-only">Good ease of use</span>
                            <span aria-hidden="true" class="text-gray-700">Good</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <span class="sr-only">Moderate ease of use</span>
                            <span aria-hidden="true" class="text-gray-700">Moderate</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold bg-gray-50">Price</td>
                        <td class="px-6 py-4 bg-amber-50 text-center font-medium">
                            <span class="sr-only">Free with unlimited responses</span>
                            <span aria-hidden="true">Free, unlimited responses</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <span class="sr-only">Limited free plan, paid upgrades required</span>
                            <span aria-hidden="true">Limited free, paid upgrades</span>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 text-center">
                            <span class="sr-only">Limited free plan, paid upgrades required</span>
                            <span aria-hidden="true">Limited free, paid upgrades</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Why Multiple Choice -->
<div class="bg-white py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why Choose Multiple Choice for Your Quizzes?</h2>
        <p class="text-lg text-gray-700 mb-4">
            Multiple choice quizzes are the fastest way to check understanding, collect data, and keep people engaged. They’re easy for participants to answer, and even easier for you to grade automatically.
        </p>
        <p class="text-lg text-gray-700 mb-4">
            Whether you’re a teacher running quick assessments, a marketer building lead generation funnels, or a creator making fun trivia, multiple choice keeps questions clear and results objective. You can cover more topics in less time while still getting high-quality responses.
        </p>
        <p class="text-lg text-gray-700">
            With the right quiz maker, you can turn simple multiple choice questions into powerful experiences that educate, qualify, and delight your audience.
        </p>
    </div>
</div>

<!-- FAQ -->
<div class="bg-amber-50 py-20" id="faq">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
            Frequently Asked Questions about Multiple Choice Quiz Makers
        </h2>
        <div class="mt-10 max-w-3xl mx-auto">
            <div x-data="{ open: false }" class="border-y-2 border-black">
                <div class="w-full cursor-pointer" @click="open = !open">
                    <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                        <p class="text-black font-medium flex-grow">What is the best free online quiz maker?</p>
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    <div x-show="open">
                        <p class="px-4 py-6 lg:text-lg text-black">
                            The best quiz maker for you depends on your goals. If you want a free tool with unlimited responses, modern design, and scoring built in, Youform is a strong choice. Other tools like SurveyMonkey or Canva can work too, but they often limit responses or advanced features on free plans.
                        </p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-y-2 border-black">
                <div class="w-full cursor-pointer" @click="open = !open">
                    <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                        <p class="text-black font-medium flex-grow">How do I create a multiple choice quiz with scoring?</p>
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    <div x-show="open">
                        <p class="px-4 py-6 lg:text-lg text-black">
                            In Youform, start a new form, add a multiple choice question, and turn on scoring. You can assign points to each answer, set correct options, and then show a total score or pass/fail message on the completion screen.
                        </p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-y-2 border-black">
                <div class="w-full cursor-pointer" @click="open = !open">
                    <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                        <p class="text-black font-medium flex-grow">Can I add images to my multiple choice questions?</p>
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    <div x-show="open">
                        <p class="px-4 py-6 lg:text-lg text-black">
                            Yes. You can attach images to questions or answer options to make quizzes more visual—great for teaching, branding, or product-based quizzes.
                        </p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-y-2 border-black">
                <div class="w-full cursor-pointer" @click="open = !open">
                    <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                        <p class="text-black font-medium flex-grow">How do I share my quiz with others?</p>
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    <div x-show="open">
                        <p class="px-4 py-6 lg:text-lg text-black">
                            With Youform, you can share a direct link, embed the quiz on your website, or even generate a QR code for in‑person events and print materials.
                        </p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-y-2 border-black">
                <div class="w-full cursor-pointer" @click="open = !open">
                    <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                        <p class="text-black font-medium flex-grow">Is there a limit to the number of responses I can collect?</p>
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    <div x-show="open">
                        <p class="px-4 py-6 lg:text-lg text-black">
                            No. Youform’s free plan includes unlimited responses, so you don’t have to worry about caps when your quiz takes off.
                        </p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-y-2 border-black">
                <div class="w-full cursor-pointer" @click="open = !open">
                    <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                        <p class="text-black font-medium flex-grow">Can I export quiz results?</p>
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                    <div x-show="open">
                        <p class="px-4 py-6 lg:text-lg text-black">
                            Yes. You can send responses to Google Sheets or export them, making it easy to analyze scores, track progress, or sync results into your existing workflow.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-4">Ready to Create Your Own Engaging Quizzes?</h2>
        <p class="text-lg text-gray-700 mb-8">
            Start building multiple choice quizzes for free with unlimited questions and responses—no credit card required.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
            Start Building Free Quizzes
        </a>
    </div>
</div>

@include('partials.footer')

@endsection

