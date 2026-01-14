@extends('_layouts.main')

@section('body')

<div class="bg-amber-50 pb-20">

    <div>

        @include('partials.nav')

    </div>
 
    <div 
        x-data="{
            formDisplayMode: 'desktop',
            changeFormDisplayMode(mode) {
                this.formDisplayMode = mode;
            }
        }"
        class="text-center pt-20 pb-10 max-w-7xl mx-auto px-10 md:px-20">

        <div>
            <div class="text-sm text-gray-600 mb-6">
                <ol class="hidden md:flex list-reset justify-center">
                    <li>
                        <a href="/templates" class="text-blue-600 hover:underline">All templates</a>
                    </li>
                    <li>
                        <span class="mx-2">/</span>
                    </li>
                    <li>
                        <a href="/templates/c/{{$page->str_plural($page->type)}}" class="text-blue-600 hover:underline">{{$page->str_plural(ucwords($page->type))}}</a>
                    </li>
                    <li>
                        <span class="mx-2">/</span>
                    </li>
                    <li>
                        <a href="/templates/c/{{$page->str_plural($page->type)}}/{{$page->category_slug}}" class="text-blue-600 hover:underline">{{ucwords($page->categories[0] ?? 'Other')}}</a>
                    </li>
                    <li>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="text-gray-900">
                        {{$page->title}}
                    </li>
                </ol>

                <div class="block md:hidden">
                    <a href="/templates/c/{{$page->str_plural($page->type)}}/{{$page->category_slug}}" class="text-blue-600 hover:underline">
                        &larr;
                        {{ucwords($page->categories[0] ?? 'Other')}}
                    </a>
                </div>
            </div>

            <h1 class="text-5xl font-bold">{{$page->title}}</h1>

            <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
                {{$page->description}}
            </div>

            @if (($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
            <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
                Instantly measure customer satisfaction, gather valuable feedback, and improve your customer experience with our ready-to-use CSAT survey template.
            </div>
            <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4 justify-center">
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
            @endif

        </div>

        <div class="hidden lg:inline-flex justify-center mt-6 text-gray-600 border-2 border-gray-300 rounded-md py-1 px-2">
            <button @click="changeFormDisplayMode('desktop')" title="View on desktop" class="p-2 rounded-md hover:bg-gray-200" :class="{'bg-white border border-gray-100': formDisplayMode === 'desktop'}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                </svg>                  
            </button>
            <button @click="changeFormDisplayMode('mobile')" title="View on mobile" class="p-2 rounded-md hover:bg-gray-200" :class="{'bg-white border border-gray-100': formDisplayMode === 'mobile'}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>                  
            </button>
        </div>

        @if ($page->slug === 'software-customer-satisfaction-survey-template')
        <div class="mt-8 mb-4">
            <p class="text-lg text-gray-700 max-w-3xl mx-auto text-center">
                Preview this customer satisfaction (CSAT) survey template
            </p>
        </div>
        @endif

        <div class="mt-10 relative mx-auto rounded-md shadow-md transition-[width] transition-700 ease-linear" :class="{'w-96': formDisplayMode === 'mobile', 'w-full': formDisplayMode === 'desktop'}">
            {{-- <img class="hidden xl:block absolute right-10 -top-28 w-32 opacity-70 rotate-45" src="/assets/images/try-it-arrow.png" alt=""> --}}

            <iframe src="{{$page->appUrl}}/forms/{{$page->slug}}" loading="lazy" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0"></iframe>
        </div>

        @if (($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
        <div class="mt-6 mb-4">
            <p class="text-lg text-gray-700 max-w-3xl mx-auto text-center">
                Start from this free CSAT survey template and customize questions, branding, and logic in minutes.
            </p>
        </div>
        @endif

        <div class="mt-10">
            <a href="{{$page->appUrl}}/use-template?template={{$page->appUrl}}/forms/{{$page->slug}}" class="mt-10 text-2xl block max-w-lg mx-auto text-center bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
                @if (($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
                    Use This Free CSAT Template &rarr;
                @else
                    Use this template &rarr;
                @endif
            </a>
        </div>

        <p class="text-center mt-3">
            <a href="{{$page->appUrl}}/forms/{{$page->slug}}" target="_blank" class="hidden xl:inline-block underline underline-offset-8 group transition-all hover:no-underline mx-auto mt-4">
                or click here to open this form in a new tab <span class="hidden group-hover:inline">&rarr;</span>
            </a>
        </p>
    </div>

    @if (($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
    <!-- CSAT-Specific Content Sections -->
    
    <!-- What is a CSAT Survey Section -->
    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What is a Customer Satisfaction (CSAT) Survey?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        A Customer Satisfaction (CSAT) survey is a tool used to measure how satisfied customers are with your products, services, or overall experience. CSAT surveys typically ask customers to rate their satisfaction on a scale (commonly 1-5 or 1-10) and provide feedback on what they liked or what could be improved.
                    </p>
                    <p class="text-lg text-gray-700 mb-4">
                        The CSAT score is calculated as the percentage of customers who rate their experience as "satisfied" or "very satisfied" (usually 4-5 on a 5-point scale, or 7-10 on a 10-point scale). This metric helps businesses understand customer sentiment, identify areas for improvement, and track satisfaction trends over time.
                    </p>
                    <p class="text-lg text-gray-700">
                        Using a free customer satisfaction survey free template like this one makes it easy to start measuring customer satisfaction without starting from scratch. You can customize the questions, adjust the rating scales, and add your branding to create a professional CSAT survey that matches your business needs.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Measure Customer Satisfaction Section -->
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why Measure Customer Satisfaction?</h2>
                    <p class="text-lg text-gray-700 mb-8">
                        Measuring customer satisfaction through CSAT surveys provides valuable insights that can drive business growth and improve customer experience. Here are the key benefits:
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-1">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Identify Areas for Improvement</h3>
                                <p class="text-gray-700">CSAT surveys reveal specific pain points and areas where your product or service falls short, helping you prioritize improvements that matter most to customers.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-1">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Increase Customer Retention</h3>
                                <p class="text-gray-700">Satisfied customers are more likely to stay loyal and make repeat purchases. By addressing issues identified in CSAT surveys, you can reduce churn and improve retention rates.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-1">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Improve Product/Service Quality</h3>
                                <p class="text-gray-700">Customer feedback from CSAT surveys provides direct input on what's working and what needs improvement, enabling you to make data-driven decisions about product development and service enhancements.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-1">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Build Customer Loyalty</h3>
                                <p class="text-gray-700">When customers see that you're actively seeking their feedback and making improvements based on their input, it strengthens their connection to your brand and builds long-term loyalty.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-1">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Make Data-Driven Decisions</h3>
                                <p class="text-gray-700">CSAT scores provide quantifiable metrics that help you track performance over time, compare different touchpoints, and measure the impact of changes you make to improve customer experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Questions to Include Section -->
    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Key Questions to Include in Your CSAT Survey</h2>
                    <p class="text-lg text-gray-700 mb-8">
                        A well-designed CSAT survey includes a mix of rating questions and open-ended feedback. Here are the essential free customer satisfaction survey questions to include:
                    </p>
                    <div class="space-y-6">
                        <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3">1. Overall Satisfaction Rating</h3>
                            <p class="text-gray-700 mb-2">Ask customers to rate their overall satisfaction on a scale (typically 1-5 or 1-10). This is the core CSAT question that calculates your CSAT score.</p>
                            <p class="text-sm text-gray-600 italic">Example: "How satisfied are you with your recent experience?" (1 = Very Dissatisfied, 5 = Very Satisfied)</p>
                        </div>
                        <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3">2. Likelihood to Recommend (NPS-style)</h3>
                            <p class="text-gray-700 mb-2">While not strictly CSAT, asking "How likely are you to recommend us?" complements your CSAT score and helps identify brand advocates.</p>
                            <p class="text-sm text-gray-600 italic">Example: "How likely are you to recommend our service to a friend or colleague?" (0-10 scale)</p>
                        </div>
                        <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3">3. What Did You Like Most?</h3>
                            <p class="text-gray-700 mb-2">Open-ended question that captures positive feedback and highlights your strengths.</p>
                            <p class="text-sm text-gray-600 italic">Example: "What did you like most about your experience with us?"</p>
                        </div>
                        <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3">4. What Could We Improve?</h3>
                            <p class="text-gray-700 mb-2">Critical question for identifying specific areas that need attention and actionable feedback.</p>
                            <p class="text-sm text-gray-600 italic">Example: "What could we do to improve your experience?"</p>
                        </div>
                        <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3">5. Would You Use Our Service Again?</h3>
                            <p class="text-gray-700 mb-2">Simple yes/no or rating question that helps predict customer retention and loyalty.</p>
                            <p class="text-sm text-gray-600 italic">Example: "How likely are you to use our service again?" (1-5 scale or Yes/No)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How to Create Your CSAT Survey Section -->
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Create Your CSAT Survey in 3 Simple Steps</h2>
                    <p class="text-lg text-gray-700 mb-10">
                        Creating a professional customer satisfaction survey is easier than you think. Follow these three simple steps to get started with our free CSAT survey template:
                    </p>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-aquamarine rounded-full flex items-center justify-center text-2xl font-bold text-black mr-6">
                                1
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-3">Choose the Free CSAT Template</h3>
                                <p class="text-lg text-gray-700 mb-2">Click the "Use This Free CSAT Template" button above to instantly access our ready-to-use customer satisfaction survey template. No sign-up required to preview, and you can start customizing immediately.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-aquamarine rounded-full flex items-center justify-center text-2xl font-bold text-black mr-6">
                                2
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-3">Customize Questions & Branding</h3>
                                <p class="text-lg text-gray-700 mb-2">Personalize the template to match your brand. Add your logo, adjust colors, modify questions to fit your specific use case, and set up conditional logic to show or hide questions based on responses. The template includes all the essential CSAT questions, but you can add, remove, or edit them as needed.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-aquamarine rounded-full flex items-center justify-center text-2xl font-bold text-black mr-6">
                                3
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-3">Share, Collect Responses & Track Your CSAT Score</h3>
                                <p class="text-lg text-gray-700 mb-2">Once your CSAT survey is ready, share it via a link, embed it on your website, or send it via email. Responses are collected automatically in real-time, and you can view analytics to calculate your CSAT score and identify trends. With Youform, you get unlimited responses on the free plan, so you can collect as much feedback as you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 text-center">
                        <a href="{{$page->appUrl}}/use-template?template={{$page->appUrl}}/forms/{{$page->slug}}" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
                            Get Started with Free CSAT Template &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose YouForm Comparison Table -->
    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-center">Why Choose YouForm for Your CSAT Surveys?</h2>
                    <p class="text-lg text-gray-700 mb-10 text-center max-w-3xl mx-auto">
                        Compare YouForm with other survey tools and see why we're the best choice for creating professional customer satisfaction surveys.
                    </p>
                    <div class="overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl mb-8">
                        <table class="min-w-full text-left text-base">
                            <thead class="bg-gray-100 border-b-2 border-black">
                                <tr>
                                    <th class="px-6 py-4 font-semibold text-left">Feature</th>
                                    <th class="px-6 py-4 text-center bg-amber-50">
                                        <img src="/assets/images/youform-logo.png" alt="Youform" class="h-8 mx-auto mb-2">
                                        <div class="font-bold text-lg">YouForm</div>
                                    </th>
                                    <th class="px-6 py-4 text-center bg-gray-50">
                                        <div class="font-semibold text-lg">Competitors</div>
                                        <div class="text-sm text-gray-600">(SurveyMonkey, Typeform, Google Forms)</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 font-semibold bg-gray-50">Unlimited Responses (Free)</td>
                                    <td class="px-6 py-4 bg-amber-50 font-medium">✓ Unlimited responses on free plan</td>
                                    <td class="px-6 py-4 bg-gray-50">Limited to 10-100 responses/month on free plans</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 font-semibold bg-gray-50">Free Custom Branding</td>
                                    <td class="px-6 py-4 bg-amber-50 font-medium">✓ Full branding control on all plans</td>
                                    <td class="px-6 py-4 bg-gray-50">Branding requires paid plans</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 font-semibold bg-gray-50">Ease of Use</td>
                                    <td class="px-6 py-4 bg-amber-50 font-medium">✓ Intuitive drag-and-drop builder</td>
                                    <td class="px-6 py-4 bg-gray-50">Can be complex or limited in functionality</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 font-semibold bg-gray-50">Modern Design</td>
                                    <td class="px-6 py-4 bg-amber-50 font-medium">✓ One-question-at-a-time, mobile-optimized</td>
                                    <td class="px-6 py-4 bg-gray-50">Often outdated or cluttered interfaces</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 font-semibold bg-gray-50">Price</td>
                                    <td class="px-6 py-4 bg-amber-50 font-medium">✓ Free forever with unlimited core features</td>
                                    <td class="px-6 py-4 bg-gray-50">Free plans with severe limitations, paid plans required</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold bg-gray-50">Templates Available</td>
                                    <td class="px-6 py-4 bg-amber-50 font-medium">✓ 500+ professional templates</td>
                                    <td class="px-6 py-4 bg-gray-50">Limited template selection</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSAT FAQ Section -->
    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">
                    <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
                        Frequently Asked Questions about CSAT Surveys
                    </h2>
                    <div class="mt-10">
                        <div x-data="{ open: false }" class="border-y-2 border-black">
                            <div class="w-full cursor-pointer" @click="open = !open">
                                <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                    <p class="text-black font-medium flex-grow">What is a CSAT score and how is it calculated?</p>
                                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <div x-show="open">
                                    <p class="px-4 py-6 lg:text-lg text-black">
                                        A CSAT (Customer Satisfaction) score is a metric that measures customer satisfaction with your product, service, or experience. It's calculated as the percentage of customers who rate their experience as "satisfied" or "very satisfied." For a 5-point scale, this typically means ratings of 4 or 5. For example, if 80 out of 100 customers rate you 4 or 5, your CSAT score is 80%. The formula is: (Number of satisfied customers / Total number of responses) × 100. Youform automatically tracks these ratings in your survey responses, making it easy to calculate and monitor your CSAT score over time.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-y-2 border-black">
                            <div class="w-full cursor-pointer" @click="open = !open">
                                <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                    <p class="text-black font-medium flex-grow">How often should I send CSAT surveys?</p>
                                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <div x-show="open">
                                    <p class="px-4 py-6 lg:text-lg text-black">
                                        The frequency of CSAT surveys depends on your customer touchpoints and business model. For transactional interactions (like purchases or support tickets), send surveys immediately after the interaction while the experience is fresh. For ongoing relationships, consider monthly or quarterly surveys to track satisfaction trends without overwhelming customers. Avoid sending surveys too frequently to the same customers to prevent survey fatigue. With Youform's unlimited responses, you can send CSAT surveys as often as needed without worrying about response limits.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-y-2 border-black">
                            <div class="w-full cursor-pointer" @click="open = !open">
                                <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                    <p class="text-black font-medium flex-grow">What's a good CSAT score?</p>
                                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <div x-show="open">
                                    <p class="px-4 py-6 lg:text-lg text-black">
                                        A good CSAT score varies by industry, but generally, a score above 80% is considered excellent, 70-80% is good, and below 70% indicates areas needing improvement. However, what matters most is tracking your score over time and comparing it to industry benchmarks. Focus on improving your CSAT score rather than achieving a specific number. Even if your score is 85%, there's always room to improve customer experience. Use the feedback from your CSAT surveys to identify specific issues and make targeted improvements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-y-2 border-black">
                            <div class="w-full cursor-pointer" @click="open = !open">
                                <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                    <p class="text-black font-medium flex-grow">Can I customize the CSAT survey template?</p>
                                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <div x-show="open">
                                    <p class="px-4 py-6 lg:text-lg text-black">
                                        Absolutely! This free CSAT survey template is fully customizable. You can add or remove questions, change the rating scales, modify the wording, add your branding (logo, colors), set up conditional logic to show different questions based on responses, and customize the thank you page. The template provides a solid foundation with all the essential CSAT questions, but you can adapt it to match your specific needs, industry, and brand voice. <a href="{{$page->appUrl}}/use-template?template={{$page->appUrl}}/forms/{{$page->slug}}" class="text-aquamarine hover:underline font-semibold">Start customizing your CSAT survey template now</a>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-y-2 border-black">
                            <div class="w-full cursor-pointer" @click="open = !open">
                                <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                    <p class="text-black font-medium flex-grow">Is the CSAT template really free? Are there any limits?</p>
                                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <div x-show="open">
                                    <p class="px-4 py-6 lg:text-lg text-black">
                                        Yes, the CSAT survey template is completely free, and there are no limits on the free plan. Unlike competitors like SurveyMonkey or Typeform that limit free plans to 10 surveys or 100 responses, Youform offers unlimited surveys, unlimited responses, and all core features on the free plan. You can use this CSAT template, customize it, collect as many responses as you need, and access all features without ever needing to upgrade or provide a credit card. The only limitation is custom domain branding, which is available on paid plans, but all other features are free forever.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-y-2 border-black">
                            <div class="w-full cursor-pointer" @click="open = !open">
                                <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                    <p class="text-black font-medium flex-grow">How do I analyze CSAT survey results?</p>
                                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                    </svg>
                                </div>
                                <div x-show="open">
                                    <p class="px-4 py-6 lg:text-lg text-black">
                                        Youform makes it easy to analyze your CSAT survey results. In your dashboard, you can view all responses in real-time, see response rates, calculate your CSAT score automatically, and export data to CSV or Excel for deeper analysis. Look for patterns in the ratings and read through open-ended feedback to identify common themes. Track your CSAT score over time to see if improvements are working. Pay special attention to responses rated 1-3 (dissatisfied) to identify urgent issues, and use positive feedback (4-5 ratings) to understand what's working well. You can also filter responses by date, question, or rating to dive deeper into specific segments.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Final CTA Section -->
    <div class="py-20" style="background-color: #FFFBEB;">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="text-center">
                <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-6">Start Measuring Customer Satisfaction Today</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-10">
                    Don't wait to start gathering valuable customer feedback. Our free CSAT survey template is ready to use right now—no credit card required, no limits on responses. Get started in minutes and begin improving your customer experience today.
                </p>
                <div class="flex items-center justify-center mt-10">
                    <div>
                        <a href="{{$page->appUrl}}/use-template?template={{$page->appUrl}}/forms/{{$page->slug}}" class="inline-block text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
                            Get Your Free CSAT Template &rarr;
                        </a>
                        <div class="text-sm pt-6 font-semibold items-center text-center">
                            <div class="flex items-center space-x-1 justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span>Unlimited responses</span>
                            </div>
                            <div class="flex items-center justify-center space-x-1 pt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
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

    @endif

    @if (($page->template_slug ?? '') !== 'software-customer-satisfaction-survey-template')
    <!-- Generic template content (hidden for CSAT template) -->
    <div class="mt-5 pb-2">
        <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
            <blockquote class="text-gray-900 text-base lg:text-xl">
              <p>“We had the highest conversion with Youform compared to Typeform, Google Calendar and even the routing form in Calendly!”</p>
            </blockquote>
            <a href="https://www.linkedin.com/in/adamdanyal/" target="_blank" class="mt-5 flex items-center flex-col gap-x-6">
              <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" src="/assets/images/adam-danyal.jpeg" alt="Adam Danyal Avatar">
              <div class="text-base mt-1">
                <div class="text-gray-900 group-hover:underline">Adam Danyal</div>
                <div class=" text-gray-700 text-xs">Founder Leadership Club. 
                    <br>
                    2M Followers on LinkedIn</div>
              </div>
            </a>
        </figure>
    </div>
 

    <div class="mt-10 px-6">
        <div class="text-center py-16">
            <h2 class="text-3xl font-bold mb-6">Customize Your Template</h2>
            
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                You can modify the templates to suit your needs by changing and adding blocks to ask relevant questions. Customize the design by adjusting colors, adding your brand logo, and more to make it truly yours.
            </p>
        </div>
    </div>

    <div class="-mt-6 px-6">
        <div class="text-center py-16">
            <h2 class="text-3xl font-bold mb-6">Connect with 7000+ Apps</h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Enhance your workflow by connecting Youform to over 7000 other apps like Slack, Google Sheets, Hubspot, and more. Seamlessly integrate with your favorite tools to automate processes and save time.
            </p>
            <div class="flex justify-center mt-10 space-x-6">
                <img src="/assets/images/logos/calendly.png" alt="Calendly Logo" class="h-12 w-12 transform rotate-6">
                <img src="/assets/images/logos/google-sheets.png" alt="Google Sheets Logo" class="h-14 w-14 transform -rotate-6">
                <img src="/assets/images/logos/gtm.svg" alt="GTM Logo" class="hidden sm:block h-12 w-12 transform rotate-12">
                <img src="/assets/images/logos/slack.png" alt="Slack Logo" class="h-12 w-12 transform -rotate-12">
                <img src="/assets/images/logos/stripe.svg" alt="Stripe Logo" class="h-16 w-16 transform rotate-6 -translate-y-2">
                <img src="/assets/images/logos/webhook.png" alt="Webhook Logo" class="hidden sm:block h-12 w-12 transform -rotate-6">
                <img src="/assets/images/logos/zapier.png" alt="Zapier Logo" class="h-12 w-12 transform rotate-12">
            </div>
        </div>
    </div>

    <div class="mt-5 pb-2">
        <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
            <blockquote class="text-gray-900 text-base lg:text-xl">
              <p>“Youform is an absolute joy to use.”</p>
            </blockquote>
            <a href="https://x.com/levelsio" target="_blank" class="mt-5 flex items-center flex-col gap-x-6">
              <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" src="/assets/images/levelsio.jpg" alt="Pieter Levels Avatar">
              <div class="text-base mt-1">
                <div class="text-gray-900 group-hover:underline">Pieter Levels</div>
                <div class=" text-gray-700 text-xs">Founder Nomadlist and RemoteOK. 
                    <br>
                    400k+ Followers on Twitter</div>
              </div>
            </a>
        </figure>
    </div>

    <div class="text-center py-16">
        <a href="/templates" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
            Check All Templates &rarr;
        </a>
    </div>

    @include('partials.templates-faq')
    @endif

</div>

@include('partials.footer')

@endsection