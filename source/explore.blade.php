---
title: Youform - Free Online Form Builder [Unlimited Submissions]
description: Build professional forms online without coding. Make surveys, quizzes, lead generation forms, and more.
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center">
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        That 
                        <span class="relative inline-block ml-1 mt-2 sm:mt-0 mr-1">
                            <span class="absolute inset-0 bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                            <span class="relative z-10 py-2 px-3 inline-block">form was great</span>
                        </span>, 
                        right? <br>
                        Now make yours.
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Build forms people love to answer — simple, fast, and beautifully designed with Youform.
                    </p>
                    <div class="mt-10">
                        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Signup for free
                        </a>
                    </div>
                    <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4 justify-center">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No coding required</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Free forever</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited forms & responses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <img class="-mt-2 w-full" src="/assets/images/banner-wave.png" alt="wave decoration image">
    </div>
</div>

<!-- Features Section -->
<div class="bg-aquamarine">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-20">
        <div class="text-center pt-40 pb-10 px-10 md:px-20">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Build Forms Online
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                  <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                  <span class="relative z-10 p-2 inline-block rotate-6">Without Code</span>
                </span>
            </h2>
            <p class="text-xl max-w-3xl mx-auto">
                Our free online form builder makes it easy to create professional forms without code. Perfect for teams and solo creators who want fast, beautiful forms.
            </p>
        </div>

        <!-- Feature Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 px-10 md:px-20 mt-10">
            <!-- Drag & Drop Builder -->
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-coral p-3 rounded-lg inline-block mb-4">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" fill="#000000" viewBox="0 0 256 256"><path d="M188,80a27.79,27.79,0,0,0-13.36,3.4,28,28,0,0,0-46.64-11A28,28,0,0,0,80,92v20H68a28,28,0,0,0-28,28v12a88,88,0,0,0,176,0V108A28,28,0,0,0,188,80Zm12,72a72,72,0,0,1-144,0V140a12,12,0,0,1,12-12H80v24a8,8,0,0,0,16,0V92a12,12,0,0,1,24,0v28a8,8,0,0,0,16,0V92a12,12,0,0,1,24,0v28a8,8,0,0,0,16,0V108a12,12,0,0,1,24,0Z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Visual Form Builder</h3>
                <p class="text-gray-700">
                    Drag and drop form fields to build your forms visually. No coding skills needed - our online form generator is super easy to use.
                </p>
            </div>

            <!-- Embed & Integrations -->
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-pale-violet p-3 rounded-lg inline-block mb-4">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M4.5 5.25A2.25 2.25 0 0 1 6.75 3h10.5A2.25 2.25 0 0 1 19.5 5.25v13.5A2.25 2.25 0 0 1 17.25 21H6.75A2.25 2.25 0 0 1 4.5 18.75V5.25Zm3 2.25a.75.75 0 0 0-.75.75v7.5c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75V8.25a.75.75 0 0 0-.75-.75h-9Z" clip-rule="evenodd" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 256 256"><path d="M149.66,138.34a8,8,0,0,0-11.32,0L120,156.69,99.31,136l18.35-18.34a8,8,0,0,0-11.32-11.32L88,124.69,69.66,106.34a8,8,0,0,0-11.32,11.32L64.69,124,41.37,147.31a32,32,0,0,0,0,45.26l5.38,5.37-28.41,28.4a8,8,0,0,0,11.32,11.32l28.4-28.41,5.37,5.38a32,32,0,0,0,45.26,0L132,191.31l6.34,6.35a8,8,0,0,0,11.32-11.32L131.31,168l18.35-18.34A8,8,0,0,0,149.66,138.34Zm-52.29,65a16,16,0,0,1-22.62,0L52.69,181.25a16,16,0,0,1,0-22.62L76,135.31,120.69,180Zm140.29-185a8,8,0,0,0-11.32,0l-28.4,28.41-5.37-5.38a32.05,32.05,0,0,0-45.26,0L124,64.69l-6.34-6.35a8,8,0,0,0-11.32,11.32l80,80a8,8,0,0,0,11.32-11.32L191.31,132l23.32-23.31a32,32,0,0,0,0-45.26l-5.38-5.37,28.41-28.4A8,8,0,0,0,237.66,18.34Zm-34.35,79L180,120.69,135.31,76l23.32-23.31a16,16,0,0,1,22.62,0l22.06,22A16,16,0,0,1,203.31,97.37Z"></path></svg>
                    
                </div>
                <h3 class="text-2xl font-bold mb-3">Embed & Integrate Anywhere</h3>
                <p class="text-gray-700">
                    Share a link, embed on your website, use a custom domain, and connect to 6,000+ tools via Zapier, webhooks, Slack, Google Sheets, and more.
                </p>
            </div>

            <!-- Form Templates -->
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-yellow-300 p-3 rounded-lg inline-block mb-4">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm4.5 7.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0v-2.25a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0V12Zm2.25-2.25a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0V10.5a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0v9a.75.75 0 0 0 1.5 0v-9Z" clip-rule="evenodd" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" fill="#000000" viewBox="0 0 256 256"><path d="M223.85,47.12a16,16,0,0,0-15-15c-12.58-.75-44.73.4-71.41,27.07L132.69,64H74.36A15.91,15.91,0,0,0,63,68.68L28.7,103a16,16,0,0,0,9.07,27.16l38.47,5.37,44.21,44.21,5.37,38.49a15.94,15.94,0,0,0,10.78,12.92,16.11,16.11,0,0,0,5.1.83A15.91,15.91,0,0,0,153,227.3L187.32,193A15.91,15.91,0,0,0,192,181.64V123.31l4.77-4.77C223.45,91.86,224.6,59.71,223.85,47.12ZM74.36,80h42.33L77.16,119.52,40,114.34Zm74.41-9.45a76.65,76.65,0,0,1,59.11-22.47,76.46,76.46,0,0,1-22.42,59.16L128,164.68,91.32,128ZM176,181.64,141.67,216l-5.19-37.17L176,139.31Zm-74.16,9.5C97.34,201,82.29,224,40,224a8,8,0,0,1-8-8c0-42.29,23-57.34,32.86-61.85a8,8,0,0,1,6.64,14.56c-6.43,2.93-20.62,12.36-23.12,38.91,26.55-2.5,36-16.69,38.91-23.12a8,8,0,1,1,14.56,6.64Z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Ready‑Made Templates</h3>
                <p class="text-gray-700">
                    Start fast with 500+ professionally designed templates: contact, survey, registration, applications, and more. 
                    <br><br>
                    <a href="/templates" class="text-coral hover:underline">View all templates &rarr;</a>
                </p>
            </div>

            <!-- Responsive Design -->
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-medium-champagne p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path d="M10.5 18.75a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" />
                        <path fill-rule="evenodd" d="M8.625.75A3.375 3.375 0 0 0 5.25 4.125v15.75a3.375 3.375 0 0 0 3.375 3.375h6.75a3.375 3.375 0 0 0 3.375-3.375V4.125A3.375 3.375 0 0 0 15.375.75h-6.75ZM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 0 1 7.5 19.875V4.125Z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <h3 class="text-2xl font-bold mb-3">Mobile-Responsive Forms</h3>
                <p class="text-gray-700">
                    All HTML forms created with our online builder are fully responsive and work perfectly on all devices - desktop, tablet, and mobile.
                </p>
            </div>

            <!-- Advanced Fields -->
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-coral p-3 rounded-lg inline-block mb-4">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M1.5 7.125c0-1.036.84-1.875 1.875-1.875h6c1.036 0 1.875.84 1.875 1.875v3.75c0 1.036-.84 1.875-1.875 1.875h-6A1.875 1.875 0 0 1 1.5 10.875v-3.75Zm12 1.5c0-1.036.84-1.875 1.875-1.875h5.25c1.035 0 1.875.84 1.875 1.875v8.25c0 1.035-.84 1.875-1.875 1.875h-5.25a1.875 1.875 0 0 1-1.875-1.875v-8.25ZM3 16.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875v2.25c0 1.035-.84 1.875-1.875 1.875h-5.25A1.875 1.875 0 0 1 3 18.375v-2.25Z" clip-rule="evenodd" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 rotate-180" viewBox="0 0 256 256"><path d="M232,64a32,32,0,1,0-40,31v17a8,8,0,0,1-8,8H96a23.84,23.84,0,0,0-8,1.38V95a32,32,0,1,0-16,0v66a32,32,0,1,0,16,0V144a8,8,0,0,1,8-8h88a24,24,0,0,0,24-24V95A32.06,32.06,0,0,0,232,64ZM64,64A16,16,0,1,1,80,80,16,16,0,0,1,64,64ZM96,192a16,16,0,1,1-16-16A16,16,0,0,1,96,192ZM200,80a16,16,0,1,1,16-16A16,16,0,0,1,200,80Z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Smart Fields & Logic</h3>
                <p class="text-gray-700">
                    All the essentials plus file uploads, calculations, hidden fields, conditional logic, and validation.
                </p>
            </div>

            <!-- Instant Preview -->
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-pale-violet p-3 rounded-lg inline-block mb-4">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Analytics & Insights</h3>
                <p class="text-gray-700">
                    Track views, starts, completion rate, and question drop‑off to optimize performance.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">How Our Free Online Form Builder Works</h2>
            <p class="text-xl max-w-3xl mx-auto">
                Create professional HTML forms in minutes without any coding knowledge
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="bg-coral rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-2 border-black">
                    1
                </div>
                <h3 class="text-xl font-bold mb-2">Choose Your Fields</h3>
                <p class="text-gray-700">
                    Select from text, email, dropdowns, checkboxes, file uploads, and more. Drag them into your form.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="bg-yellow-300 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-2 border-black">
                    2
                </div>
                <h3 class="text-xl font-bold mb-2">Customize Your Form</h3>
                <p class="text-gray-700">
                    Set labels, placeholders, logic, validation, and brand styles. Simple, visual, and fast.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="bg-pale-violet rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-2 border-black">
                    3
                </div>
                <h3 class="text-xl font-bold mb-2">Share & Embed</h3>
                <p class="text-gray-700">
                    Share a link, embed on your site, or use a custom domain. Connect to Sheets, Slack, and thousands more via integrations.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Use Cases Section -->
<div class="bg-aquamarine py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Perfect Online Forms for Every Need</h2>
            <p class="text-xl max-w-3xl mx-auto">
                Our free online HTML form builder helps you create any type of form
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="/online-form-builder/" class="inline-flex items-center px-5 py-2 bg-white border-2 border-black rounded-lg hover:bg-yellow-300 transition-colors">
                    <span class="mr-2">📝</span> Form Builder
                </a>
                <a href="/online-quiz-builder/" class="inline-flex items-center px-5 py-2 bg-white border-2 border-black rounded-lg hover:bg-yellow-300 transition-colors">
                    <span class="mr-2">🎯</span> Quiz Builder
                </a>
                <a href="/online-survey-builder/" class="inline-flex items-center px-5 py-2 bg-white border-2 border-black rounded-lg hover:bg-yellow-300 transition-colors">
                    <span class="mr-2">📊</span> Survey Builder
                </a>
            </div>
        </div>

        @foreach ($page->templates as $template_type => $templates)
            <div class="mb-10">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold">{{ $page->str_plural(ucwords($template_type)) }}</h3>
                    <a href="/templates/c/{{ $page->str_plural($template_type) }}" class="hover:underline">View all {{ ucwords($template_type) }} templates &rarr;</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php $rendered = 0; @endphp
                    @foreach ($templates as $template)
                        @include('_partials.template-card', ['template' => $template])
                        @php $rendered++; @endphp
                        @if ($rendered >= 3)
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach

        <div>
            <div class="text-center mt-10">
                <a href="/templates" class="inline-block bg-coral text-black font-bold px-8 py-3 rounded-md border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl text-lg transition-all hover:bg-vivid-yellow">
                    View all templates &rarr;
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-white py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>

        <div class="space-y-6">
            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Is this online form builder really free?</h3>
                <p class="text-gray-700">
                    Yes! You can create unlimited forms and collect unlimited responses for free. We also offer a PRO plan for advanced features like custom domain, team members etc.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Do I need to know HTML to use this form builder?</h3>
                <p class="text-gray-700">
                    No HTML knowledge is required! Our visual drag‑and‑drop builder lets you create forms without writing any code.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Can I embed forms on any website?</h3>
                <p class="text-gray-700">
                    Absolutely! Embed on WordPress, Wix, Squarespace, Webflow, or custom sites. Just copy and paste the embed code or share a link. 
                    You can check our <a href="https://help.youform.com/p/qehb-giztQHToz/How-to-embed-Youform-in-my-website" class="text-coral underline hover:no-underline" target="_blank">help center</a> for more information.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">How do I collect form submissions?</h3>
                <p class="text-gray-700">
                    You can collect submissions by sharing your form link or embed in your website. You can also send notifications, export to CSV, or connect to Google Sheets, Slack, Zapier, and webhooks.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Are the forms mobile‑responsive?</h3>
                <p class="text-gray-700">
                    Yes! All forms created with our online form builder are fully responsive and optimized for mobile, tablet, and desktop.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Can I customize the form styling?</h3>
                <p class="text-gray-700">
                    Yes, you can customize colors, fonts, spacing, and more using our visual editor. Use your brand styles and themes without code.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-coral py-20 border-t-4 border-black">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-4xl font-bold mb-4">Start Building HTML Forms Online for Free</h2>
        <p class="text-xl mb-8">
            Join thousands of users who create professional forms without coding
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-12 py-3 text-black rounded-md font-bold">
            Try Our Free Form Builder
        </a>
        <p class="mt-6 text-sm">
            No credit card required • Unlimited forms • Free forever
        </p>
    </div>
</div>

@include('partials.footer')

@stop

@section('seo')
<title>Free Online Form Builder | Create Forms Without Coding | Youform</title>
<meta name="description" content="Free online form builder to create beautiful forms without coding. Unlimited forms & responses, templates, logic, embeds, and integrations with Sheets, Slack & Zapier.">
<meta name="keywords" content="online form builder, free online form builder, form builder, html form builder, online form creator, drag and drop form builder, no code form builder, web form builder">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $page->baseUrl }}/online-form-builder">
<meta property="og:title" content="Free Online Form Builder – Unlimited Forms & Responses">
<meta property="og:description" content="Create forms without code. Templates, logic, embeds, analytics, and 6,000+ integrations.">
<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/og-image.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $page->baseUrl }}/online-form-builder">
<meta property="twitter:title" content="Free Online Form Builder – Unlimited Forms & Responses">
<meta property="twitter:description" content="Create forms without code. Templates, logic, embeds, analytics, and integrations.">
<meta property="twitter:image" content="{{ $page->baseUrl }}/assets/images/og-image.png">

<!-- Canonical URL -->
<link rel="canonical" href="{{ $page->baseUrl }}/online-form-builder">

<!-- Schema.org markup for Google -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Youform Online Form Builder",
  "applicationCategory": "WebApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "description": "Free online form builder with drag-and-drop interface. Create professional forms without coding. Unlimited forms & responses, templates, logic, embeds, and integrations.",
  "url": "{{ $page->baseUrl }}/online-form-builder",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "150"
  }
}
</script>
@endsection