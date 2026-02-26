---
title: Scheduling Forms - Embed Calendar Booking in Forms | Youform
description: Create scheduling forms that let visitors book appointments directly inside your form. Qualify leads before they book, auto-fill booker details, and integrate with Calendly, Cal.com, TidyCal, and SavvyCal.
---

@extends('_layouts.main')

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a scheduling form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A scheduling form combines a traditional form with an embedded calendar booking widget. Instead of collecting information and then sending a separate scheduling link, visitors can fill out qualifying questions AND book a time slot all in one seamless flow. This increases booking rates and ensures you only get meetings with qualified prospects."
      }
    },
    {
      "@type": "Question",
      "name": "Which scheduling tools does Youform integrate with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform integrates with four major scheduling platforms: Calendly, Cal.com, SavvyCal, and TidyCal. You can embed any of these scheduling widgets directly inside your Youform, and the booker's name and email from earlier form fields are automatically passed to the calendar widget."
      }
    },
    {
      "@type": "Question",
      "name": "Can I qualify leads before they book a meeting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. This is one of the biggest advantages of scheduling forms. You can ask qualifying questions (budget, company size, needs, timeline) BEFORE showing the calendar. Using conditional logic, you can route qualified leads to a booking page while directing others to alternative resources. This prevents your calendar from filling up with unqualified meetings."
      }
    },
    {
      "@type": "Question",
      "name": "Does the booker have to enter their info twice?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Youform automatically passes the name and email from your form fields to the embedded scheduling widget. When visitors reach the calendar step, their information is already pre-filled, creating a smooth experience with no duplicate data entry."
      }
    },
    {
      "@type": "Question",
      "name": "Are scheduling forms free to create?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's free plan includes the scheduling embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. You can create professional scheduling forms and start booking qualified meetings without paying anything."
      }
    }
  ]
}
</script>
@endpush

@section('body')

<!-- Header and Hero Section -->
<div> 
    <div class="bg-medium-champagne">
        <!-- Navbar -->
        @include('partials.nav')

        <!-- Hero Section --> 
        <div class="relative max-w-7xl mx-auto mt-10 pb-0">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <p class="text-xs font-semibold px-4 py-1.5 rounded-full mb-3 lg:mb-4 bg-pale-violet border border-black inline-block">
                        Embed calendar booking in your forms
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Scheduling Forms That Qualify & Book
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Stop sending scheduling links. Embed your calendar directly inside your form — qualify leads first, then let them book. Works with Calendly, Cal.com, SavvyCal, and TidyCal.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create scheduling form
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold flex items-center justify-center space-x-4">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Free scheduling embed</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-2 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
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
                            <li>
                                <a href="#what-is-scheduling-form" class="text-aquamarine hover:underline font-medium text-sm">What Is a Scheduling Form?</a>
                            </li>
                            <li>
                                <a href="#why-embed" class="text-aquamarine hover:underline font-medium text-sm">Why Embed Your Calendar</a>
                            </li>
                            <li>
                                <a href="#how-it-works" class="text-aquamarine hover:underline font-medium text-sm">How It Works</a>
                            </li>
                            <li>
                                <a href="#platforms" class="text-aquamarine hover:underline font-medium text-sm">Supported Platforms</a>
                            </li>
                            <li>
                                <a href="#use-cases" class="text-aquamarine hover:underline font-medium text-sm">Use Cases</a>
                            </li>
                            <li>
                                <a href="#templates" class="text-aquamarine hover:underline font-medium text-sm">Form Templates</a>
                            </li>
                            <li>
                                <a href="#why-youform" class="text-aquamarine hover:underline font-medium text-sm">Why Choose Youform</a>
                            </li>
                            <li>
                                <a href="#faq" class="text-aquamarine hover:underline font-medium text-sm">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-8 lg:col-start-3">
                <!-- What is a Scheduling Form -->
                <div class="mb-16 pt-10 lg:pt-16" id="what-is-scheduling-form">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Is a Scheduling Form?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        A scheduling form combines lead capture with calendar booking in a single, seamless experience. Instead of the typical back-and-forth — submit form, receive email, click scheduling link, book meeting — everything happens in one flow.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Visitors fill out your form questions (name, email, qualifying info), and then immediately see your calendar to book a time. No extra emails. No dropped leads. No friction.
                    </p>

                    <h3 class="text-2xl font-bold mb-4">The Old Way vs. The Better Way</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-red-50 border-2 border-red-200 rounded-xl p-6">
                            <h4 class="font-bold text-red-700 mb-3">❌ Traditional Approach</h4>
                            <ol class="text-gray-700 space-y-2 text-sm list-decimal list-inside">
                                <li>Visitor fills out contact form</li>
                                <li>You receive notification</li>
                                <li>You send scheduling link via email</li>
                                <li>Visitor (maybe) checks email</li>
                                <li>Visitor (maybe) clicks link</li>
                                <li>Visitor books meeting</li>
                            </ol>
                            <p class="text-red-700 text-sm mt-4 font-medium">Drop-off at every step. Days of delay.</p>
                        </div>
                        <div class="bg-green-50 border-2 border-green-200 rounded-xl p-6">
                            <h4 class="font-bold text-green-700 mb-3">✅ Scheduling Form</h4>
                            <ol class="text-gray-700 space-y-2 text-sm list-decimal list-inside">
                                <li>Visitor fills out qualifying questions</li>
                                <li>Calendar appears in the form</li>
                                <li>Visitor books meeting</li>
                                <li>Done.</li>
                            </ol>
                            <p class="text-green-700 text-sm mt-4 font-medium">One flow. Instant booking. No drop-off.</p>
                        </div>
                    </div>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">Scheduling forms help you:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Increase booking rates</strong> by eliminating steps between interest and action</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Qualify leads before they book</strong> so you only meet with the right prospects</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Collect context upfront</strong> so meetings are more productive</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Reduce no-shows</strong> because visitors book while intent is highest</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Save time</strong> on manual follow-ups and scheduling emails</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Embed Your Calendar -->
<div class="bg-gray-50 py-20" id="why-embed">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Why Embed Your Calendar Inside Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Scheduling links work. But they leave conversion on the table. Here's why embedding your calendar inside a form is a better approach.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">🎯 Lead Qualification Before Booking</h3>
                        <p class="text-gray-700 mb-4">
                            A naked scheduling link lets anyone book time on your calendar. That means unqualified leads, tire-kickers, and people who aren't a good fit — all taking up your valuable time.
                        </p>
                        <p class="text-gray-700 mb-4">
                            With a scheduling form, you can ask qualifying questions first:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                            <li>What's your budget for this project?</li>
                            <li>How soon are you looking to get started?</li>
                            <li>What's your company size?</li>
                            <li>What specific problem are you trying to solve?</li>
                        </ul>
                        <p class="text-gray-700">
                            Using conditional logic, you can show the calendar only to qualified leads. Others can be directed to resources, a different form, or a polite "we're not a fit" message.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">✨ Auto-Fill Booker Information</h3>
                        <p class="text-gray-700 mb-4">
                            When someone fills out your form, they've already given you their name and email. Why make them type it again?
                        </p>
                        <p class="text-gray-700">
                            Youform automatically passes form field values to your embedded calendar widget. When visitors reach the scheduling step, their name and email are pre-filled. Less friction means more completed bookings.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📈 Higher Conversion Rates</h3>
                        <p class="text-gray-700 mb-4">
                            Every extra step in your booking flow is a chance for people to drop off:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                            <li>Email gets lost in inbox</li>
                            <li>They forget to click the link</li>
                            <li>Something distracts them</li>
                            <li>They cool off on the idea</li>
                        </ul>
                        <p class="text-gray-700">
                            Embedding the calendar removes these drop-off points. When intent is high (right after they fill out your form), they can immediately book — before life gets in the way.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">🧠 Better Context for Meetings</h3>
                        <p class="text-gray-700 mb-4">
                            Form responses and calendar bookings flow into the same place. Before every meeting, you know:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Who you're meeting with and their contact info</li>
                            <li>Their answers to your qualifying questions</li>
                            <li>What they're looking for and their timeline</li>
                            <li>Any specific context they provided</li>
                        </ul>
                        <p class="text-gray-700 mt-4">
                            No more going into meetings blind. No more "so, tell me about yourself" — you already know.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How It Works -->
<div class="bg-amber-50 py-20" id="how-it-works">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How Scheduling Forms Work in Youform</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Creating a scheduling form takes just a few minutes. Here's the process.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">1</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Build Your Form</h3>
                                <p class="text-gray-700">
                                    Start with a blank form or use a template. Add your qualifying questions — contact info, budget, timeline, specific needs. Use multi-step layouts to keep things organized.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">2</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Add the Scheduling Block</h3>
                                <p class="text-gray-700">
                                    Drag in a "Scheduling" block and choose your platform: Calendly, Cal.com, SavvyCal, or TidyCal. Paste your scheduling link, and Youform handles the rest.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">3</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Map Your Fields</h3>
                                <p class="text-gray-700">
                                    Tell Youform which form fields contain the booker's name and email. These get automatically passed to the calendar widget so visitors don't have to enter them twice.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">4</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Set Up Conditional Logic (Optional)</h3>
                                <p class="text-gray-700">
                                    Want to show the calendar only to qualified leads? Use conditional logic to display the scheduling block based on previous answers. Unqualified visitors can see an alternative message.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">5</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Publish and Share</h3>
                                <p class="text-gray-700">
                                    Your scheduling form is ready. Share the link, embed it on your website, or add it to your landing pages. Visitors can now qualify themselves and book meetings in one seamless flow.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create your form
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Supported Platforms -->
<div class="bg-white py-20" id="platforms">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Supported Scheduling Platforms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Youform integrates with the four most popular scheduling tools. Use whichever one you already have.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="/calendly-forms" class="bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-4xl transition-all">
                        <h3 class="text-xl font-bold mb-3">📅 Calendly</h3>
                        <p class="text-gray-700 text-sm mb-4">
                            The most popular scheduling tool. Works great for sales teams, consultants, and anyone booking meetings at scale.
                        </p>
                        <p class="text-aquamarine font-medium text-sm">Learn more about Calendly + Youform →</p>
                    </a>

                    <a href="/cal-com-forms" class="bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-4xl transition-all">
                        <h3 class="text-xl font-bold mb-3">🗓️ Cal.com</h3>
                        <p class="text-gray-700 text-sm mb-4">
                            The open-source Calendly alternative. Self-host it or use their cloud. Great for privacy-focused teams.
                        </p>
                        <p class="text-aquamarine font-medium text-sm">Learn more about Cal.com + Youform →</p>
                    </a>

                    <a href="/savvycal-forms" class="bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-4xl transition-all">
                        <h3 class="text-xl font-bold mb-3">✨ SavvyCal</h3>
                        <p class="text-gray-700 text-sm mb-4">
                            The premium scheduling tool with overlay calendars and recipient-first design. Ideal for high-touch relationships.
                        </p>
                        <p class="text-aquamarine font-medium text-sm">Learn more about SavvyCal + Youform →</p>
                    </a>

                    <a href="/tidycal-forms" class="bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-4xl transition-all">
                        <h3 class="text-xl font-bold mb-3">💰 TidyCal</h3>
                        <p class="text-gray-700 text-sm mb-4">
                            The budget-friendly option with a lifetime deal. All the features you need without the monthly subscription.
                        </p>
                        <p class="text-aquamarine font-medium text-sm">Learn more about TidyCal + Youform →</p>
                    </a>
                </div>

                <p class="text-gray-700 mt-8 text-center">
                    Already using one of these? Great — Youform works with your existing setup. Just paste your scheduling link and you're ready to go.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Use Cases -->
<div class="bg-gray-50 py-20" id="use-cases">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Scheduling Form Use Cases</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Scheduling forms work for any situation where you need to qualify or gather information before booking.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Sales Demo Requests</h3>
                        <p class="text-gray-700 mb-4">
                            Qualify inbound leads before they hit your calendar. Ask about company size, budget, timeline, and current solution. Route qualified leads to booking; send others to self-serve resources.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example flow:</p>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>1. Contact info (name, email, company)</li>
                                <li>2. Company size and role</li>
                                <li>3. Current solution and pain points</li>
                                <li>4. Budget and timeline</li>
                                <li>5. Calendar (if qualified) or resources page</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Consultation Bookings</h3>
                        <p class="text-gray-700 mb-4">
                            For consultants, coaches, and service providers. Collect project details and requirements before the first call so you can come prepared.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example flow:</p>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>1. Basic contact information</li>
                                <li>2. Project type and scope</li>
                                <li>3. Goals and desired outcomes</li>
                                <li>4. Budget range</li>
                                <li>5. Book consultation</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏥 Appointment Scheduling</h3>
                        <p class="text-gray-700 mb-4">
                            Healthcare providers, therapists, and service professionals can collect intake information before appointments.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example flow:</p>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>1. Patient/client information</li>
                                <li>2. Reason for visit</li>
                                <li>3. Insurance/payment details</li>
                                <li>4. New patient forms (if applicable)</li>
                                <li>5. Book appointment</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📞 Customer Success Calls</h3>
                        <p class="text-gray-700 mb-4">
                            Let existing customers book check-in calls with context. Understand their goals and challenges before the meeting.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example flow:</p>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>1. Customer account identifier</li>
                                <li>2. Topics they want to discuss</li>
                                <li>3. Current challenges or goals</li>
                                <li>4. Book call with CSM</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎓 Course/Workshop Registration</h3>
                        <p class="text-gray-700 mb-4">
                            Collect participant info and let them pick their preferred session time all in one form.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example flow:</p>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>1. Participant details</li>
                                <li>2. Experience level</li>
                                <li>3. Learning goals</li>
                                <li>4. Select session time</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Templates -->
<div class="bg-vivid-yellow py-20" id="templates">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
                Scheduling Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with a proven template and customize it for your needs. Add your scheduling widget and launch in minutes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/design-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎨</div>
                <h3 class="text-xl font-bold mb-2">Consultation Form</h3>
                <p class="text-gray-700 text-sm">
                    Gather project requirements and let clients book a consultation call. Perfect for agencies and freelancers.
                </p>
            </a>

            <a href="/templates/t/demo-feedback-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Demo Request Form</h3>
                <p class="text-gray-700 text-sm">
                    Qualify sales leads and let them book a demo. Collect company info, use case, and timeline before showing availability.
                </p>
            </a>

            <a href="/templates/t/event-planner-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📅</div>
                <h3 class="text-xl font-bold mb-2">Event Planning Form</h3>
                <p class="text-gray-700 text-sm">
                    Collect event details and book initial consultations. Great for wedding planners, event coordinators, and venues.
                </p>
            </a>

            <a href="/templates/t/client-intake-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Intake Form</h3>
                <p class="text-gray-700 text-sm">
                    Onboard new clients with detailed intake questions and let them book their first session.
                </p>
            </a>

            <a href="/templates/t/lead-qualification-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Lead Qualification Form</h3>
                <p class="text-gray-700 text-sm">
                    Score and qualify leads before showing your calendar. Route different segments to different booking types.
                </p>
            </a>

            <a href="/templates/t/online-event-registration-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎟️</div>
                <h3 class="text-xl font-bold mb-2">Event Registration</h3>
                <p class="text-gray-700 text-sm">
                    Register attendees and let them pick their session times. Works for webinars, workshops, and group events.
                </p>
            </a>
        </div>

        <div class="text-center">
            <a href="/templates" class="inline-block text-lg bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                Browse all templates
            </a>
        </div>
    </div>
</div>

<!-- Why Choose Youform -->
<div class="bg-aquamarine py-20" id="why-youform" style="background-color: rgba(69, 173, 148, 0.85);">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-center">Why Choose Youform for Scheduling Forms</h2>
                <p class="text-lg text-gray-800 mb-8 text-center">
                    You could build scheduling forms with other tools. Here's why Youform is the better choice.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">♾️ Free Scheduling Embeds</h3>
                        <p class="text-gray-700 text-sm">
                            Other form tools charge extra for scheduling integrations. With Youform, it's included in the free plan — unlimited forms, unlimited responses, all features.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔄 Auto-Fill Support</h3>
                        <p class="text-gray-700 text-sm">
                            Pass name and email from form fields to your calendar widget automatically. Visitors don't have to enter their info twice.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Conditional Logic</h3>
                        <p class="text-gray-700 text-sm">
                            Show the calendar only to qualified leads. Route different answers to different outcomes. Build smart forms that adapt to each visitor.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 Works Everywhere</h3>
                        <p class="text-gray-700 text-sm">
                            All four major scheduling platforms supported: Calendly, Cal.com, SavvyCal, TidyCal. Use whatever you already have.
                        </p>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-gray-800 mb-4">
                        Over 70,000 users have created forms with Youform. Start booking more qualified meetings today.
                    </p>
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create scheduling form
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-white py-20" id="faq">
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
                                <p class="text-black font-medium flex-grow">What is a scheduling form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    A scheduling form combines a traditional form with an embedded calendar booking widget. Instead of collecting information and then sending a separate scheduling link, visitors can fill out qualifying questions AND book a time slot all in one seamless flow. This increases booking rates and ensures you only get meetings with qualified prospects.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Which scheduling tools does Youform integrate with?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Youform integrates with four major scheduling platforms: Calendly, Cal.com, SavvyCal, and TidyCal. You can embed any of these scheduling widgets directly inside your Youform, and the booker's name and email from earlier form fields are automatically passed to the calendar widget.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I qualify leads before they book a meeting?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. This is one of the biggest advantages of scheduling forms. You can ask qualifying questions (budget, company size, needs, timeline) BEFORE showing the calendar. Using conditional logic, you can route qualified leads to a booking page while directing others to alternative resources. This prevents your calendar from filling up with unqualified meetings.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Does the booker have to enter their info twice?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    No. Youform automatically passes the name and email from your form fields to the embedded scheduling widget. When visitors reach the calendar step, their information is already pre-filled, creating a smooth experience with no duplicate data entry.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Are scheduling forms free to create?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform's free plan includes the scheduling embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. You can create professional scheduling forms and start booking qualified meetings without paying anything.
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
<div class="bg-amber-50 border-t-4 border-black py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-6">
            Start Booking Qualified Meetings
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            Stop letting leads slip through the cracks. With scheduling forms, visitors can qualify themselves and book a meeting in one seamless flow. No extra emails. No drop-off. Just more meetings with the right people.
        </p>
        <p class="text-gray-700 mb-8">
            Works with Calendly, Cal.com, SavvyCal, and TidyCal. Free to use.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your scheduling form
        </a>
    </div>
</div>

@include('partials.footer')

@endsection
