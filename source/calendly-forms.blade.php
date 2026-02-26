---
title: Calendly Form Integration - Embed Calendly in Forms | Youform
description: Embed Calendly directly inside your forms. Qualify leads before they book, auto-fill name and email, and increase booking rates. The best Calendly form builder alternative.
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
      "name": "Can I embed Calendly inside a form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can embed your Calendly scheduling widget directly inside a form. Visitors answer your questions first, then see your Calendly calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to Calendly."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform pass form data to Calendly?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform automatically passes the booker's name and email from your form fields to the embedded Calendly widget. When visitors reach the scheduling step, their information is pre-filled so they don't have to enter it again. This creates a smoother booking experience."
      }
    },
    {
      "@type": "Question",
      "name": "Can I qualify leads before showing Calendly?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. This is one of the main benefits of using Youform with Calendly. You can ask qualifying questions (budget, company size, timeline, needs) before showing the calendar. Using conditional logic, only qualified leads see your Calendly — others can be directed to alternative resources."
      }
    },
    {
      "@type": "Question",
      "name": "Is Youform a Calendly alternative?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform is not a replacement for Calendly — it's a complement. Youform handles the form and lead qualification part, while Calendly handles the scheduling. Together, they create a more powerful booking experience than either tool alone. You keep using Calendly; Youform just makes it better."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Calendly integration free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's free plan includes the Calendly embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. You need a Calendly account (free or paid) for the scheduling part, but the Youform integration costs nothing."
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
                        Calendly + Youform integration
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Embed Calendly in Your Forms
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Qualify leads before they book. Embed Calendly directly inside your form, auto-fill booker info, and increase your booking-to-meeting rate. Free to use.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create Calendly form
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold flex items-center justify-center space-x-4">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Works with Calendly Free</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Auto-fill name & email</span>
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
<div class="bg-white py-20
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <!-- Table of Contents Sidebar -->
            <div class="lg:col-span-2">
                <div class="lg:sticky lg:top-24 pt-10 lg:pt-16">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Table of Contents</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#why-embed-calendly" class="text-aquamarine hover:underline font-medium text-sm">Why Embed Calendly in Forms</a>
                            </li>
                            <li>
                                <a href="#how-it-works" class="text-aquamarine hover:underline font-medium text-sm">How It Works</a>
                            </li>
                            <li>
                                <a href="#features" class="text-aquamarine hover:underline font-medium text-sm">Key Features</a>
                            </li>
                            <li>
                                <a href="#use-cases" class="text-aquamarine hover:underline font-medium text-sm">Use Cases</a>
                            </li>
                            <li>
                                <a href="#vs-calendly-routing" class="text-aquamarine hover:underline font-medium text-sm">vs. Calendly Routing Forms</a>
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
                <!-- Why Embed Calendly -->
                <div class="mb-16 pt-10 lg:pt-16" id="why-embed-calendly">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why Embed Calendly Inside Your Forms</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Calendly is great for scheduling. But sending a naked Calendly link has problems: anyone can book, you get no context before the meeting, and leads drop off between form submission and scheduling.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Embedding Calendly inside a Youform solves all three.
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🎯 Qualify Before Booking</h3>
                            <p class="text-gray-700">
                                Instead of letting anyone book your calendar, ask qualifying questions first. Budget? Timeline? Company size? Use conditional logic to show Calendly only to leads that match your criteria. Unqualified visitors get directed elsewhere.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">📈 Increase Booking Rates</h3>
                            <p class="text-gray-700">
                                Every email between "interested" and "booked" is a chance to lose the lead. By embedding Calendly directly in your form, visitors book while their intent is highest. No waiting for follow-up emails. No extra clicks. Just qualify → book → done.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">✨ Better Meeting Context</h3>
                            <p class="text-gray-700">
                                Form responses give you context for every meeting. Before you even join the call, you know who you're meeting with, what they're looking for, their budget, timeline, and specific needs. No more "so, tell me about yourself" — you can dive right in.
                            </p>
                        </div>
                    </div>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">The math is simple:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4">
                                <p class="font-semibold text-red-700 mb-2">Without Youform</p>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>100 form submissions</li>
                                    <li>~40 open your follow-up email</li>
                                    <li>~15 click the Calendly link</li>
                                    <li>~8 actually book</li>
                                    <li class="font-bold pt-2">= 8% booking rate</li>
                                </ul>
                            </div>
                            <div class="bg-white rounded-lg p-4">
                                <p class="font-semibold text-green-700 mb-2">With Youform + Calendly</p>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>100 form submissions</li>
                                    <li>Calendar shown immediately</li>
                                    <li>No email delay</li>
                                    <li>~35 book instantly</li>
                                    <li class="font-bold pt-2">= 35% booking rate</li>
                                </ul>
                            </div>
                        </div>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Embed Calendly in Youform</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Setting up a Calendly form takes about 5 minutes. Here's how.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">1</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Create Your Form</h3>
                                <p class="text-gray-700">
                                    Start a new form in Youform. Add your qualifying questions — name, email, company, budget, timeline, whatever you need to know before the meeting.
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
                                    Drag in the "Scheduling" block and select Calendly as your platform. Paste your Calendly event link (the URL you normally share with people to book).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">3</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Map Name & Email Fields</h3>
                                <p class="text-gray-700">
                                    Tell Youform which form fields contain the booker's name and email. These values get passed to Calendly automatically, so visitors don't have to enter them twice.
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
                                    Want to show Calendly only to qualified leads? Add conditions based on form answers. For example: show calendar if budget is "$10K+" or company size is "50+ employees."
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
                                    Your form is ready. Share the link, embed it on your website, or add it to your landing pages. When visitors fill out the form, they'll see your Calendly calendar embedded right there.
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

<!-- Key Features -->
<div class="bg-white py-20" id="features">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Key Features for Calendly Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Everything you need to create effective scheduling forms with Calendly.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔄 Auto-Fill Booker Info</h3>
                        <p class="text-gray-700 text-sm">
                            Name and email from your form fields are automatically passed to Calendly. Visitors see their info pre-filled when they reach the calendar — no double entry.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Conditional Calendar Display</h3>
                        <p class="text-gray-700 text-sm">
                            Show Calendly only to leads who meet your criteria. Use any form field as a condition. Budget too low? Timeline too long? Show them something else.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Response + Booking Data</h3>
                        <p class="text-gray-700 text-sm">
                            Form responses are captured in Youform. Combined with Calendly notifications, you have full context for every meeting before it happens.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 Mobile Optimized</h3>
                        <p class="text-gray-700 text-sm">
                            The embedded Calendly widget works great on mobile. Forms are responsive, and the calendar picker adapts to any screen size.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Custom Branding</h3>
                        <p class="text-gray-700 text-sm">
                            Your form can match your brand with custom colors, fonts, and logos. Calendly's embed inherits your Calendly branding settings.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Works With All Calendly Plans</h3>
                        <p class="text-gray-700 text-sm">
                            Whether you're on Calendly Free, Standard, Teams, or Enterprise — the Youform integration works. Just paste your event link.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Use Cases -->
<div class="bg-amber-50 py-20" id="use-cases">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Popular Use Cases</h2>
                <p class="text-lg text-gray-700 mb-8">
                    How teams use Youform + Calendly together.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Qualified Demo Requests</h3>
                        <p class="text-gray-700 mb-4">
                            The most common use case. Instead of letting anyone book a demo, qualify first:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Company size and industry</li>
                            <li>Current solution and pain points</li>
                            <li>Budget and timeline</li>
                            <li>Decision-making process</li>
                        </ul>
                        <p class="text-gray-700 mt-4">
                            Show Calendly only to leads that match your ICP. Others get directed to self-serve resources, a video demo, or a different form.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Sales Call Booking</h3>
                        <p class="text-gray-700 mb-4">
                            Sales teams use Youform + Calendly to pre-qualify inbound leads and arm reps with context.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Know the prospect's needs before the call</li>
                            <li>Prepare relevant case studies and demos</li>
                            <li>Skip discovery if they've already told you everything</li>
                            <li>Score leads based on form responses</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💡 Consultation Bookings</h3>
                        <p class="text-gray-700 mb-4">
                            Consultants, coaches, and freelancers collect project details before the first call:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Project scope and requirements</li>
                            <li>Goals and desired outcomes</li>
                            <li>Budget range</li>
                            <li>Timeline and deadlines</li>
                        </ul>
                        <p class="text-gray-700 mt-4">
                            Come to every consultation prepared. No more "tell me what you're looking for" — you already know.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏥 Client Intake + Scheduling</h3>
                        <p class="text-gray-700 mb-4">
                            Healthcare providers, therapists, and service professionals combine intake forms with appointment booking:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>New patient/client information</li>
                            <li>Insurance or payment details</li>
                            <li>Medical history or background</li>
                            <li>Book the appointment</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎓 Webinar & Workshop Registration</h3>
                        <p class="text-gray-700 mb-4">
                            Let attendees register and pick their preferred time slot in one flow:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Attendee information</li>
                            <li>Experience level and goals</li>
                            <li>Pick session time from Calendly</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- vs Calendly Routing Forms -->
<div class="bg-gray-50 py-20" id="vs-calendly-routing">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Youform vs. Calendly Routing Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Calendly has its own "Routing Forms" feature. Here's how it compares to using Youform.
                </p>

                <div class="bg-white border-2 border-black rounded-xl overflow-hidden">
                    <table class="min-w-full text-left text-sm md:text-base">
                        <thead class="bg-gray-100 border-b-2 border-black">
                            <tr>
                                <th class="px-6 py-4 font-bold">Feature</th>
                                <th class="px-6 py-4 font-bold">Calendly Routing</th>
                                <th class="px-6 py-4 font-bold">Youform + Calendly</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="px-6 py-4">Question types</td>
                                <td class="px-6 py-4">Limited (basic fields)</td>
                                <td class="px-6 py-4 text-green-700 font-medium">20+ question types</td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <td class="px-6 py-4">Conditional logic</td>
                                <td class="px-6 py-4">Basic routing only</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Advanced branching logic</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="px-6 py-4">Custom branding</td>
                                <td class="px-6 py-4">Limited</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Full customization</td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <td class="px-6 py-4">Multi-step forms</td>
                                <td class="px-6 py-4">No</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Yes</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="px-6 py-4">File uploads</td>
                                <td class="px-6 py-4">No</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Yes</td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <td class="px-6 py-4">Response storage</td>
                                <td class="px-6 py-4">Basic</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Full response management</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="px-6 py-4">Integrations (Zapier, etc.)</td>
                                <td class="px-6 py-4">Separate from routing</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Full integration support</td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-gray-50">
                                <td class="px-6 py-4">Price</td>
                                <td class="px-6 py-4">Requires Teams plan ($16/user/mo)</td>
                                <td class="px-6 py-4 text-green-700 font-medium">Free</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-gray-700 mt-6">
                    <strong>Bottom line:</strong> Calendly Routing Forms work for simple use cases. But if you need real form-building power — multiple question types, complex logic, custom branding, file uploads, integrations — Youform is the better choice. And it's free.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Form Templates -->
<div class="bg-vivid-yellow py-20" id="templates">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
                Calendly Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with a template, add your Calendly link, and launch. These are designed to work perfectly with embedded scheduling.
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
                    Qualify sales leads with company info, use case, and timeline — then show your Calendly.
                </p>
            </a>

            <a href="/templates/t/lead-qualification-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">Lead Qualification</h3>
                <p class="text-gray-700 text-sm">
                    Score leads based on form responses. Show calendar to qualified leads; route others elsewhere.
                </p>
            </a>

            <a href="/templates/t/client-intake-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Intake</h3>
                <p class="text-gray-700 text-sm">
                    Onboard new clients with detailed questions and let them book their first session.
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
                                <p class="text-black font-medium flex-grow">Can I embed Calendly inside a form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. With Youform, you can embed your Calendly scheduling widget directly inside a form. Visitors answer your questions first, then see your Calendly calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to Calendly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Does Youform pass form data to Calendly?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform automatically passes the booker's name and email from your form fields to the embedded Calendly widget. When visitors reach the scheduling step, their information is pre-filled so they don't have to enter it again. This creates a smoother booking experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I qualify leads before showing Calendly?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Absolutely. This is one of the main benefits of using Youform with Calendly. You can ask qualifying questions (budget, company size, timeline, needs) before showing the calendar. Using conditional logic, only qualified leads see your Calendly — others can be directed to alternative resources.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is Youform a Calendly alternative?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Youform is not a replacement for Calendly — it's a complement. Youform handles the form and lead qualification part, while Calendly handles the scheduling. Together, they create a more powerful booking experience than either tool alone. You keep using Calendly; Youform just makes it better.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is the Calendly integration free?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform's free plan includes the Calendly embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. You need a Calendly account (free or paid) for the scheduling part, but the Youform integration costs nothing.
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
            Book More Qualified Meetings with Calendly
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            Stop sending naked Calendly links. Embed your calendar inside a qualifying form, auto-fill booker info, and increase your booking rate. It's free.
        </p>
        <p class="text-gray-700 mb-8">
            Works with Calendly Free, Standard, Teams, and Enterprise.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your Calendly form
        </a>
        <p class="text-gray-500 text-sm mt-6">
            Also works with <a href="/cal-com-forms" class="text-aquamarine hover:underline">Cal.com</a>, <a href="/savvycal-forms" class="text-aquamarine hover:underline">SavvyCal</a>, and <a href="/tidycal-forms" class="text-aquamarine hover:underline">TidyCal</a>.
        </p>
    </div>
</div>

@include('partials.footer')

@endsection
