---
title: Cal.com Form Integration - Embed Cal.com in Forms | Youform
description: Embed Cal.com directly inside your forms. Qualify leads before they book, auto-fill booker details, and use the open-source scheduling tool with powerful form features.
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
      "name": "Can I embed Cal.com inside a form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can embed your Cal.com scheduling widget directly inside a form. Visitors answer your questions first, then see your Cal.com calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to Cal.com."
      }
    },
    {
      "@type": "Question",
      "name": "Does the Cal.com integration work with self-hosted instances?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Whether you use Cal.com's cloud service or self-host your own instance, Youform can embed your scheduling page. Just paste your Cal.com booking link (from either cloud or self-hosted) and the embed works the same way."
      }
    },
    {
      "@type": "Question",
      "name": "What's the benefit of using Cal.com with Youform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Cal.com handles scheduling. Youform handles everything before booking: qualifying questions, conditional logic, custom branding, and auto-filling booker info. Together, they create a better booking experience with less drop-off and more qualified meetings."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Cal.com integration free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's free plan includes the Cal.com embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. Cal.com itself also has a free tier, so you can build the entire workflow without paying anything."
      }
    },
    {
      "@type": "Question",
      "name": "Can I qualify leads before showing Cal.com?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Ask qualifying questions (budget, company size, needs, timeline) before showing the calendar. Use conditional logic to route qualified leads to booking while directing others to alternative resources. This keeps your calendar clean and your meetings productive."
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
                        Cal.com + Youform integration
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Embed Cal.com in Your Forms
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Combine the open-source power of Cal.com with Youform's form builder. Qualify leads, auto-fill booker info, and increase bookings — all for free.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create Cal.com form
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold sm:flex items-center justify-center sm:space-x-4">
                        <div class="flex items-center justify-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Works with self-hosted</span>
                        </div>
                        <div class="flex items-center justify-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Open source friendly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3 pb-2">
            <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
                <blockquote class="text-gray-900 text-base lg:text-xl">
                    <p>"We had the highest conversion with Youform compared to Typeform, Google Calendar and even the routing form in Calendly!"</p>
                </blockquote>
                <span class="mt-5 flex items-center flex-col gap-x-6">
                    <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" loading="lazy" src="/assets/images/adam-danyal.jpeg?v=2" alt="Adam Danyal Avatar">
                    <div class="text-base mt-1">
                        <div class="text-gray-900 group-hover:underline">Adam Danyal</div>
                        <div class="text-gray-700 text-xs">Founder Leadership Club. 
                            <br>
                            2M Followers on LinkedIn</div>
                    </div>
                </span>
            </figure>
        </div>

        <div>
            <img class="-mt-2 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Social Proof Bar -->
<div class="bg-white pt-16 lg:pt-24 pb-6 -mt-10 lg:-mt-20 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 text-center">
            <div>
                <p class="text-3xl font-bold text-aquamarine">70,000+</p>
                <p class="text-sm text-gray-600">Users worldwide</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-aquamarine">10M+</p>
                <p class="text-sm text-gray-600">Responses collected</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-aquamarine">100%</p>
                <p class="text-sm text-gray-600">Free forever</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-aquamarine">4.8/5</p>
                <p class="text-sm text-gray-600">User rating</p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content with TOC Sidebar -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <!-- Table of Contents Sidebar -->
            <div class="lg:col-span-2">
                <div class="lg:sticky lg:top-24 pt-10 lg:pt-16">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Table of Contents</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#why-cal-com-youform" class="text-aquamarine hover:underline font-medium text-sm">Why Cal.com + Youform</a>
                            </li>
                            <li>
                                <a href="#how-it-works" class="text-aquamarine hover:underline font-medium text-sm">How It Works</a>
                            </li>
                            <li>
                                <a href="#open-source" class="text-aquamarine hover:underline font-medium text-sm">Open Source Advantage</a>
                            </li>
                            <li>
                                <a href="#features" class="text-aquamarine hover:underline font-medium text-sm">Key Features</a>
                            </li>
                            <li>
                                <a href="#use-cases" class="text-aquamarine hover:underline font-medium text-sm">Use Cases</a>
                            </li>
                            <li>
                                <a href="#templates" class="text-aquamarine hover:underline font-medium text-sm">Form Templates</a>
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
                <!-- Why Cal.com + Youform -->
                <div class="mb-16 pt-10 lg:pt-16" id="why-cal-com-youform">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why Use Cal.com with Youform</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Cal.com is the open-source scheduling tool that's become the go-to alternative to Calendly. It's free, self-hostable, and packed with features. But a scheduling link alone doesn't qualify leads or capture context.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Youform fills that gap. Embed Cal.com inside your form to collect qualifying information, auto-fill booker details, and create a seamless booking experience.
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🆓 Two Free Tools, One Powerful Workflow</h3>
                            <p class="text-gray-700">
                                Cal.com is free and open source. Youform is free with unlimited forms and responses. Together, you get enterprise-grade scheduling + form functionality for $0.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🔒 Privacy-First Approach</h3>
                            <p class="text-gray-700">
                                If you self-host Cal.com for privacy or compliance, you can still embed it in Youform. Your scheduling data stays on your servers while Youform handles the form experience.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🎯 Qualify Before Booking</h3>
                            <p class="text-gray-700">
                                Ask the right questions before showing your calendar. Budget? Timeline? Specific needs? Use conditional logic to ensure only qualified prospects can book time with you.
                            </p>
                        </div>
                    </div>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">How it works together:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="font-bold mr-2">1.</span>
                                <span>Visitor opens your Youform</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">2.</span>
                                <span>Answers qualifying questions (name, email, needs, budget, etc.)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">3.</span>
                                <span>Cal.com calendar appears embedded in the form</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">4.</span>
                                <span>Name and email auto-fill from earlier answers</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">5.</span>
                                <span>Visitor picks a time and books</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">6.</span>
                                <span>You get the form responses + Cal.com booking confirmation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How It Works -->
<div class="bg-gray-50 py-20" id="how-it-works">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Embed Cal.com in Youform</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Setting up takes about 5 minutes. Here's the process.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">1</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Create Your Form</h3>
                                <p class="text-gray-700">
                                    Start a new form in Youform. Add your qualifying questions — contact info, project details, budget, timeline, whatever context you need before the meeting.
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
                                    Drag in the "Scheduling" block and select Cal.com as your platform. Paste your Cal.com booking link — this works with cal.com cloud or your self-hosted instance.
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
                                    Tell Youform which fields contain name and email. These get passed to Cal.com automatically so visitors don't enter the same info twice.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">4</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Add Conditions (Optional)</h3>
                                <p class="text-gray-700">
                                    Use conditional logic to control who sees the calendar. Show Cal.com only to visitors who meet your criteria (budget, company size, etc.). Route others to different outcomes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">5</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Publish</h3>
                                <p class="text-gray-700">
                                    Your form is ready. Share the link, embed on your site, or add to landing pages. Visitors can now qualify themselves and book directly.
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

<!-- Open Source Advantage -->
<div class="bg-white py-20" id="open-source">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">The Open Source Advantage</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Cal.com's open-source nature gives you options that proprietary tools can't match. Here's why that matters.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🖥️ Self-Host Option</h3>
                        <p class="text-gray-700 text-sm">
                            Run Cal.com on your own servers. Your data stays yours. Perfect for companies with strict compliance requirements or privacy concerns.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💰 No Vendor Lock-In</h3>
                        <p class="text-gray-700 text-sm">
                            Unlike proprietary tools, you're not locked into a vendor's pricing or roadmap. Cal.com is yours to use, modify, and extend.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔧 Customizable</h3>
                        <p class="text-gray-700 text-sm">
                            Need specific functionality? Cal.com's open-source codebase lets you customize it. Youform handles the form side; Cal.com handles scheduling — both flexible.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🌍 Community Driven</h3>
                        <p class="text-gray-700 text-sm">
                            Cal.com is backed by a vibrant open-source community. Features get added constantly, bugs get fixed quickly, and you're part of a larger ecosystem.
                        </p>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                    <h3 class="text-xl font-bold mb-3">Works with both deployment options:</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="bg-white rounded-lg p-4">
                            <p class="font-semibold mb-2">☁️ Cal.com Cloud</p>
                            <p class="text-gray-700 text-sm">
                                Use cal.com's hosted service. Just paste your booking link and you're done. Best for most users who want simplicity.
                            </p>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <p class="font-semibold mb-2">🖥️ Self-Hosted</p>
                            <p class="text-gray-700 text-sm">
                                Running your own Cal.com instance? Just paste your self-hosted booking URL. The Youform embed works exactly the same.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Key Features -->
<div class="bg-amber-50 py-20" id="features">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Key Features for Cal.com Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Everything you need to create effective scheduling forms with Cal.com.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔄 Auto-Fill Booker Info</h3>
                        <p class="text-gray-700 text-sm">
                            Name and email from your form are passed to Cal.com automatically. Visitors see their info pre-filled when they reach the calendar.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Conditional Logic</h3>
                        <p class="text-gray-700 text-sm">
                            Show Cal.com only to qualified leads. Use form responses to determine who gets to book. Keep your calendar clean.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Combined Data</h3>
                        <p class="text-gray-700 text-sm">
                            Form responses in Youform + booking details in Cal.com = full context for every meeting. No information gaps.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 Responsive Design</h3>
                        <p class="text-gray-700 text-sm">
                            The embedded Cal.com widget looks great on all devices. Forms adapt to any screen size, and the calendar picker works perfectly on mobile.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Custom Branding</h3>
                        <p class="text-gray-700 text-sm">
                            Match your brand with custom colors, fonts, and logos in Youform. Cal.com's embed inherits your Cal.com theme settings.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Integrations</h3>
                        <p class="text-gray-700 text-sm">
                            Connect Youform to Zapier, webhooks, Slack, and more. Cal.com has its own integrations. Use both for a complete workflow.
                        </p>
                    </div>
                </div>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Use Cases</h2>
                <p class="text-lg text-gray-700 mb-8">
                    How teams use Youform + Cal.com together.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔒 Privacy-Focused Companies</h3>
                        <p class="text-gray-700 mb-4">
                            Companies in healthcare, finance, or legal often need to keep scheduling data on their own servers. Self-hosted Cal.com + Youform gives you:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Scheduling data on your infrastructure</li>
                            <li>Form responses in Youform (or webhooks to your own systems)</li>
                            <li>Compliance with data residency requirements</li>
                            <li>Full control over the booking experience</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🚀 Startups & Small Teams</h3>
                        <p class="text-gray-700 mb-4">
                            Bootstrap-friendly stack: both tools are free. Get professional scheduling + forms without budget constraints:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Cal.com free tier (unlimited booking pages)</li>
                            <li>Youform free tier (unlimited forms and responses)</li>
                            <li>Full lead qualification workflow</li>
                            <li>Scale when you're ready — both tools have paid tiers if you need them</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💻 Developer-Friendly Teams</h3>
                        <p class="text-gray-700 mb-4">
                            Technical teams that appreciate open-source software:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Customize Cal.com to your exact needs</li>
                            <li>Use webhooks for custom integrations</li>
                            <li>White-label the entire experience</li>
                            <li>Extend functionality without vendor restrictions</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📋 Sales & Consulting</h3>
                        <p class="text-gray-700 mb-4">
                            Standard sales and consulting use cases work great too:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Qualified demo requests</li>
                            <li>Consultation bookings with intake forms</li>
                            <li>Client onboarding flows</li>
                            <li>Support call scheduling</li>
                        </ul>
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
                Cal.com Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with a template, add your Cal.com link, and launch. These work perfectly with embedded scheduling.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/design-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💼</div>
                <h3 class="text-xl font-bold mb-2">Consultation Request</h3>
                <p class="text-gray-700 text-sm">
                    Collect project details and let clients book a consultation. Perfect for agencies and freelancers.
                </p>
            </a>

            <a href="/templates/t/demo-feedback-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Demo Request</h3>
                <p class="text-gray-700 text-sm">
                    Qualify sales leads with company info, use case, and timeline — then show your calendar.
                </p>
            </a>

            <a href="/templates/t/client-intake-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Intake</h3>
                <p class="text-gray-700 text-sm">
                    Onboard new clients with detailed questions and let them book their first session.
                </p>
            </a>

            <a href="/templates/t/lead-qualification-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">Lead Qualification</h3>
                <p class="text-gray-700 text-sm">
                    Score leads based on form responses. Show calendar to qualified leads; route others elsewhere.
                </p>
            </a>

            <a href="/templates/t/event-planner-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📅</div>
                <h3 class="text-xl font-bold mb-2">Event Consultation</h3>
                <p class="text-gray-700 text-sm">
                    Gather event details and book initial consultations. Great for planners and venues.
                </p>
            </a>

            <a href="/templates/t/marketing-quote-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💰</div>
                <h3 class="text-xl font-bold mb-2">Quote Request</h3>
                <p class="text-gray-700 text-sm">
                    Collect project scope and budget, then let qualified leads book a call to discuss.
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
                                <p class="text-black font-medium flex-grow">Can I embed Cal.com inside a form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. With Youform, you can embed your Cal.com scheduling widget directly inside a form. Visitors answer your questions first, then see your Cal.com calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to Cal.com.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Does it work with self-hosted Cal.com?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Whether you use Cal.com's cloud service or self-host your own instance, Youform can embed your scheduling page. Just paste your Cal.com booking link (from either cloud or self-hosted) and the embed works the same way.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the benefit of using Cal.com with Youform?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Cal.com handles scheduling. Youform handles everything before booking: qualifying questions, conditional logic, custom branding, and auto-filling booker info. Together, they create a better booking experience with less drop-off and more qualified meetings.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is the Cal.com integration free?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform's free plan includes the Cal.com embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. Cal.com itself also has a free tier, so you can build the entire workflow without paying anything.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I qualify leads before showing Cal.com?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Ask qualifying questions (budget, company size, needs, timeline) before showing the calendar. Use conditional logic to route qualified leads to booking while directing others to alternative resources. This keeps your calendar clean and your meetings productive.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
@include('_partials.testimonials-carousel')

<!-- Final CTA Section -->
<div class="bg-amber-50 border-t-4 border-black py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-6">
            Open Source Scheduling + Powerful Forms
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            Combine Cal.com's open-source scheduling with Youform's form builder. Qualify leads, auto-fill booker info, and increase your booking rate — all for free.
        </p>
        <p class="text-gray-700 mb-8">
            Works with Cal.com cloud and self-hosted instances.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your Cal.com form
        </a>
        <p class="text-gray-500 text-sm mt-6">
            Also works with <a href="/calendly-forms" class="text-aquamarine hover:underline">Calendly</a>, <a href="/savvycal-forms" class="text-aquamarine hover:underline">SavvyCal</a>, and <a href="/tidycal-forms" class="text-aquamarine hover:underline">TidyCal</a>.
        </p>
    </div>
</div>

@include('partials.footer')

@endsection
