---
title: TidyCal Form Integration - Embed TidyCal in Forms | Youform
description: Embed TidyCal directly inside your forms. Qualify leads before they book, auto-fill booker details, and use the budget-friendly scheduling tool with powerful form features.
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
      "name": "Can I embed TidyCal inside a form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can embed your TidyCal scheduling widget directly inside a form. Visitors answer your questions first, then see your TidyCal calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to TidyCal."
      }
    },
    {
      "@type": "Question",
      "name": "Does TidyCal work with Youform's free plan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's free plan includes the TidyCal embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. Combined with TidyCal's lifetime deal, you can build a complete scheduling + form workflow without any monthly costs."
      }
    },
    {
      "@type": "Question",
      "name": "What's the benefit of using TidyCal with Youform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "TidyCal handles scheduling at a fraction of the cost of Calendly. Youform handles everything before booking: qualifying questions, conditional logic, custom branding, and auto-filling booker info. Together, they create a budget-friendly yet powerful booking experience."
      }
    },
    {
      "@type": "Question",
      "name": "Can I qualify leads before showing TidyCal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Ask qualifying questions (budget, company size, needs, timeline) before showing the calendar. Use conditional logic to route qualified leads to booking while directing others to alternative resources. This keeps your calendar clean and your meetings productive."
      }
    },
    {
      "@type": "Question",
      "name": "Is TidyCal a good Calendly alternative?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "TidyCal offers most of the features people need from Calendly at a much lower price (often a one-time payment through AppSumo vs. monthly subscription). Combined with Youform for lead qualification and forms, it's a powerful and cost-effective scheduling solution."
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
                        TidyCal + Youform integration
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Embed TidyCal in Your Forms
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        The budget-friendly scheduling stack. Embed TidyCal inside your Youform, qualify leads before booking, and auto-fill booker info. No monthly fees required.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create TidyCal form
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold sm:flex items-center justify-center sm:space-x-4">
                        <div class="flex items-center justify-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Budget-friendly stack</span>
                        </div>
                        <div class="flex items-center justify-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No monthly fees</span>
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
                                <a href="#why-tidycal-youform" class="text-aquamarine hover:underline font-medium text-sm">Why TidyCal + Youform</a>
                            </li>
                            <li>
                                <a href="#budget-friendly" class="text-aquamarine hover:underline font-medium text-sm">The Budget-Friendly Stack</a>
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
                <!-- Why TidyCal + Youform -->
                <div class="mb-16 pt-10 lg:pt-16" id="why-tidycal-youform">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why Use TidyCal with Youform</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        TidyCal has become a favorite in the AppSumo community for good reason: it does 90% of what Calendly does at a fraction of the cost. Many users get it with a one-time lifetime payment instead of monthly subscriptions.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        But TidyCal alone is just a scheduling link. Youform adds everything else: lead qualification, custom forms, conditional logic, and auto-fill — creating a complete booking workflow without the monthly bills.
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">💰 Zero Monthly Costs</h3>
                            <p class="text-gray-700">
                                TidyCal often comes with a lifetime deal (pay once, use forever). Youform's free plan includes unlimited forms and responses. Together, you get professional scheduling + forms without recurring costs.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🎯 Qualify Before Booking</h3>
                            <p class="text-gray-700">
                                TidyCal links let anyone book. With Youform, you can ask qualifying questions first — budget, timeline, company size, specific needs — before showing your calendar. Only qualified leads get to book.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">✨ Better Experience</h3>
                            <p class="text-gray-700">
                                Auto-fill name and email from form fields to TidyCal. Visitors don't enter the same info twice. More conversions, less friction, happier prospects.
                            </p>
                        </div>
                    </div>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">The workflow:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="font-bold mr-2">1.</span>
                                <span>Visitor opens your Youform</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">2.</span>
                                <span>Answers qualifying questions (name, email, needs, budget)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">3.</span>
                                <span>TidyCal calendar appears embedded in the form</span>
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
                                <span>You get form responses + TidyCal booking confirmation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Budget-Friendly Stack -->
<div class="bg-gray-50 py-20" id="budget-friendly">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">The Budget-Friendly Scheduling Stack</h2>
                <p class="text-lg text-gray-700 mb-8">
                    If you're building a business on a budget (or just hate unnecessary subscriptions), this stack makes sense.
                </p>

                <div class="bg-white border-2 border-black rounded-xl p-8 mb-8">
                    <h3 class="text-2xl font-bold mb-6 text-center">Cost Comparison</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-red-50 rounded-xl p-6">
                            <h4 class="font-bold text-red-700 mb-4">Calendly + Typeform</h4>
                            <ul class="text-gray-700 space-y-2 text-sm">
                                <li>Calendly Standard: $12/mo</li>
                                <li>Typeform Basic: $25/mo</li>
                                <li class="border-t pt-2 mt-2 font-bold">Total: $37/month ($444/year)</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 rounded-xl p-6">
                            <h4 class="font-bold text-green-700 mb-4">TidyCal + Youform</h4>
                            <ul class="text-gray-700 space-y-2 text-sm">
                                <li>TidyCal: ~$29 one-time (AppSumo)</li>
                                <li>Youform: Free</li>
                                <li class="border-t pt-2 mt-2 font-bold">Total: $29 one-time</li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-center text-gray-600 mt-6 text-sm">
                        Same functionality. Fraction of the cost. No monthly drain on your business.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Perfect for:</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><strong>Freelancers & solopreneurs</strong> — Keep overhead low while looking professional</li>
                            <li><strong>Bootstrapped startups</strong> — Allocate budget to growth, not SaaS subscriptions</li>
                            <li><strong>Side projects</strong> — Professional booking without the professional price tag</li>
                            <li><strong>Consultants</strong> — More money in your pocket per client</li>
                            <li><strong>AppSumo lifetime deal fans</strong> — Build your whole stack with one-time payments</li>
                        </ul>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Embed TidyCal in Youform</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Setup takes about 5 minutes. Here's the process.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-coral border-2 border-black rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 font-bold">1</div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Create Your Form</h3>
                                <p class="text-gray-700">
                                    Start a new form in Youform. Add qualifying questions — name, email, what they're looking for, budget, timeline, etc.
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
                                    Drag in the "Scheduling" block and select TidyCal. Paste your TidyCal booking page URL.
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
                                    Tell Youform which form fields contain name and email. These auto-fill in TidyCal so visitors don't re-enter their info.
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
                                    Use conditional logic to show TidyCal only to qualified leads. Low budget? Wrong industry? Route them somewhere else instead of wasting your time.
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
                                    Your form is live. Share the link or embed on your site. Visitors can now fill out your form and book directly through the embedded TidyCal.
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Key Features for TidyCal Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Everything you need to create effective scheduling forms with TidyCal.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔄 Auto-Fill Booker Info</h3>
                        <p class="text-gray-700 text-sm">
                            Name and email from your form are passed to TidyCal automatically. Visitors see their info pre-filled when they reach the calendar.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Conditional Logic</h3>
                        <p class="text-gray-700 text-sm">
                            Show TidyCal only to leads who qualify. Use form responses to gate access to your calendar. No more wasted meetings.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Combined Data</h3>
                        <p class="text-gray-700 text-sm">
                            Form responses in Youform + booking details in TidyCal = full context for every meeting. Know what to expect before you join.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 Mobile Optimized</h3>
                        <p class="text-gray-700 text-sm">
                            Forms and embedded TidyCal work great on all devices. Visitors can qualify and book from anywhere.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Custom Branding</h3>
                        <p class="text-gray-700 text-sm">
                            Match your brand with Youform's customization options. Add your logo, colors, and fonts for a professional look.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">♾️ Unlimited Everything</h3>
                        <p class="text-gray-700 text-sm">
                            Youform free = unlimited forms and responses. TidyCal lifetime = unlimited bookings. No caps, no surprises.
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
                    How TidyCal users are leveling up with Youform.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Freelancers & Creatives</h3>
                        <p class="text-gray-700 mb-4">
                            Designers, writers, developers — anyone who books discovery calls with potential clients:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Collect project requirements upfront</li>
                            <li>Filter by budget (no more "can you do it for $50?" calls)</li>
                            <li>Understand scope before the first conversation</li>
                            <li>Look professional without the professional tool costs</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Consultants & Coaches</h3>
                        <p class="text-gray-700 mb-4">
                            Service professionals who need context before consultations:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Intake forms that flow directly into booking</li>
                            <li>Qualify by problem type, budget, or experience</li>
                            <li>Collect background info for more productive sessions</li>
                            <li>Keep more of what you earn (less SaaS overhead)</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🚀 Side Projects & MVPs</h3>
                        <p class="text-gray-700 mb-4">
                            Testing a business idea without spending a fortune:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Professional booking experience for $0/month</li>
                            <li>Validate demand without financial risk</li>
                            <li>Iterate quickly with easy form changes</li>
                            <li>Scale up to paid tools only when you need them</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏢 Small Agencies</h3>
                        <p class="text-gray-700 mb-4">
                            Small teams that want to look big:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Branded booking experience</li>
                            <li>Lead qualification before calls</li>
                            <li>Project intake + scheduling in one flow</li>
                            <li>Low overhead = better margins</li>
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
                TidyCal Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with a template, add your TidyCal link, and go live. These are designed for embedded scheduling.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/design-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💼</div>
                <h3 class="text-xl font-bold mb-2">Consultation Request</h3>
                <p class="text-gray-700 text-sm">
                    Perfect for freelancers and consultants. Collect project details and book the call.
                </p>
            </a>

            <a href="/templates/t/demo-feedback-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Discovery Call</h3>
                <p class="text-gray-700 text-sm">
                    Qualify potential clients with targeted questions before showing your calendar.
                </p>
            </a>

            <a href="/templates/t/client-intake-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Intake</h3>
                <p class="text-gray-700 text-sm">
                    Onboard new clients with detailed intake questions plus session booking.
                </p>
            </a>

            <a href="/templates/t/marketing-quote-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💰</div>
                <h3 class="text-xl font-bold mb-2">Quote Request</h3>
                <p class="text-gray-700 text-sm">
                    Collect project scope and budget, then let qualified leads book a call to discuss.
                </p>
            </a>

            <a href="/templates/t/lead-qualification-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">Lead Qualification</h3>
                <p class="text-gray-700 text-sm">
                    Score leads based on responses. Show calendar to the right ones; route others elsewhere.
                </p>
            </a>

            <a href="/templates/t/event-planner-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📅</div>
                <h3 class="text-xl font-bold mb-2">Event Consultation</h3>
                <p class="text-gray-700 text-sm">
                    Collect event details and book consultations. Great for planners and venues.
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
                                <p class="text-black font-medium flex-grow">Can I embed TidyCal inside a form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. With Youform, you can embed your TidyCal scheduling widget directly inside a form. Visitors answer your questions first, then see your TidyCal calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to TidyCal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Does TidyCal work with Youform's free plan?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform's free plan includes the TidyCal embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. Combined with TidyCal's lifetime deal, you can build a complete scheduling + form workflow without any monthly costs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the benefit of using TidyCal with Youform?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    TidyCal handles scheduling at a fraction of the cost of Calendly. Youform handles everything before booking: qualifying questions, conditional logic, custom branding, and auto-filling booker info. Together, they create a budget-friendly yet powerful booking experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I qualify leads before showing TidyCal?</p>
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

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is TidyCal a good Calendly alternative?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    TidyCal offers most of the features people need from Calendly at a much lower price (often a one-time payment through AppSumo vs. monthly subscription). Combined with Youform for lead qualification and forms, it's a powerful and cost-effective scheduling solution.
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
            The Budget-Friendly Booking Stack
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            TidyCal for scheduling. Youform for forms. Zero monthly fees. Qualify leads, auto-fill booker info, and book more meetings without breaking the bank.
        </p>
        <p class="text-gray-700 mb-8">
            Both tools work great on free tiers. Pay nothing, look professional.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your TidyCal form
        </a>
        <p class="text-gray-500 text-sm mt-6">
            Also works with <a href="/calendly-forms" class="text-aquamarine hover:underline">Calendly</a>, <a href="/cal-com-forms" class="text-aquamarine hover:underline">Cal.com</a>, and <a href="/savvycal-forms" class="text-aquamarine hover:underline">SavvyCal</a>.
        </p>
    </div>
</div>

@include('partials.footer')

@endsection
