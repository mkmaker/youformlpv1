---
title: SavvyCal Form Integration - Embed SavvyCal in Forms | Youform
description: Embed SavvyCal directly inside your forms. Qualify leads before they book, auto-fill booker details, and combine premium scheduling with powerful form features.
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
      "name": "Can I embed SavvyCal inside a form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can embed your SavvyCal scheduling widget directly inside a form. Visitors answer your questions first, then see your SavvyCal calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to SavvyCal."
      }
    },
    {
      "@type": "Question",
      "name": "What makes SavvyCal different from Calendly?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "SavvyCal takes a recipient-first approach to scheduling. It shows the recipient's calendar alongside yours (if they connect it), making it easier to find mutual availability. It also has overlay calendars, personalized links, and a cleaner interface. Combined with Youform, you get premium scheduling with powerful lead qualification."
      }
    },
    {
      "@type": "Question",
      "name": "Does Youform pass form data to SavvyCal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform automatically passes the booker's name and email from your form fields to the embedded SavvyCal widget. When visitors reach the scheduling step, their information is pre-filled so they don't have to enter it again."
      }
    },
    {
      "@type": "Question",
      "name": "Can I qualify leads before showing SavvyCal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Ask qualifying questions (budget, company size, needs, timeline) before showing the calendar. Use conditional logic to route qualified leads to booking while directing others to alternative resources. This keeps your calendar clean and your meetings productive."
      }
    },
    {
      "@type": "Question",
      "name": "Is the SavvyCal integration free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's free plan includes the SavvyCal embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. You need a SavvyCal account for the scheduling part, but the Youform integration costs nothing."
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
                        SavvyCal + Youform integration
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Embed SavvyCal in Your Forms
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Premium scheduling meets powerful forms. Embed SavvyCal inside your Youform, qualify leads before booking, and auto-fill booker info for a seamless experience.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create SavvyCal form
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold sm:flex items-center justify-center sm:space-x-4">
                        <div class="flex items-center justify-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Premium scheduling</span>
                        </div>
                        <div class="flex items-center justify-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Recipient-first design</span>
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
                                <a href="#why-savvycal-youform" class="text-aquamarine hover:underline font-medium text-sm">Why SavvyCal + Youform</a>
                            </li>
                            <li>
                                <a href="#savvycal-difference" class="text-aquamarine hover:underline font-medium text-sm">The SavvyCal Difference</a>
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
                <!-- Why SavvyCal + Youform -->
                <div class="mb-16 pt-10 lg:pt-16" id="why-savvycal-youform">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why Use SavvyCal with Youform</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        SavvyCal is the premium scheduling tool for people who care about the booking experience. It's thoughtfully designed, recipient-first, and just <em>nicer</em> to use than the alternatives.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        But even premium scheduling needs context. Youform adds lead qualification, custom intake forms, conditional logic, and auto-fill — making your SavvyCal experience even better.
                    </p>

                    <div class="space-y-6 mb-8">
                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">✨ Best-in-Class Scheduling + Forms</h3>
                            <p class="text-gray-700">
                                SavvyCal's overlay calendars and recipient-first design make booking a pleasure. Youform's form builder adds the qualifying layer. Together, it's the premium stack for high-touch relationships.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🎯 Qualify High-Value Leads</h3>
                            <p class="text-gray-700">
                                If you're using SavvyCal, you probably value your time. Youform lets you qualify leads before they see your calendar — ensuring your meetings are with the right people.
                            </p>
                        </div>

                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-3">🔄 Seamless Data Flow</h3>
                            <p class="text-gray-700">
                                Name and email from your form auto-fill in SavvyCal. No double entry. Form responses give you context for every meeting. Everything just works.
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
                                <span>SavvyCal calendar appears embedded in the form</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">4.</span>
                                <span>Name and email auto-fill from earlier answers</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">5.</span>
                                <span>Visitor picks a time using SavvyCal's beautiful interface</span>
                            </li>
                            <li class="flex items-start">
                                <span class="font-bold mr-2">6.</span>
                                <span>You get form responses + SavvyCal booking confirmation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The SavvyCal Difference -->
<div class="bg-gray-50 py-20" id="savvycal-difference">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Makes SavvyCal Different</h2>
                <p class="text-lg text-gray-700 mb-8">
                    SavvyCal isn't just another Calendly clone. It's built around a fundamentally different philosophy.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🙋 Recipient-First Design</h3>
                        <p class="text-gray-700 mb-4">
                            Most scheduling tools are built for the person sending the link. SavvyCal is designed for the person receiving it.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Recipients can overlay their own calendar to see conflicts</li>
                            <li>Suggested times make it easy to find mutual availability</li>
                            <li>The interface is clean and doesn't feel transactional</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📅 Calendar Overlay</h3>
                        <p class="text-gray-700">
                            SavvyCal's signature feature: recipients can connect their calendar to see both schedules side by side. No more guessing, no more back-and-forth. They pick a time that works for everyone.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Personalized Links</h3>
                        <p class="text-gray-700">
                            Create unique scheduling links for specific people or contexts. Each link can have different availability, duration, and settings — perfect for high-touch relationships.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">⚡ Thoughtful Details</h3>
                        <p class="text-gray-700">
                            Time zone detection that actually works. Smart defaults. A beautiful interface. SavvyCal sweats the small stuff so you don't have to.
                        </p>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mt-8">
                    <h3 class="text-xl font-bold mb-3">Better scheduling + better forms = better meetings</h3>
                    <p class="text-gray-700">
                        SavvyCal makes the booking experience premium. Youform makes sure only the right people get to book. Together, every meeting on your calendar is a good meeting.
                    </p>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Embed SavvyCal in Youform</h2>
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
                                    Start a new form in Youform. Add qualifying questions — name, email, project details, budget, timeline, whatever context you need.
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
                                    Drag in the "Scheduling" block and select SavvyCal. Paste your SavvyCal booking link (your personal link or a specific event type).
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
                                    Tell Youform which form fields contain name and email. These auto-fill in SavvyCal so visitors don't re-enter their info.
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
                                    Use conditional logic to show SavvyCal only to qualified leads. Premium scheduling deserves qualified bookings.
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
                                    Your form is live. Share the link or embed on your site. Visitors get the full SavvyCal experience — overlay calendars and all — right inside your form.
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Key Features for SavvyCal Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Everything you need to create effective scheduling forms with SavvyCal.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔄 Auto-Fill Booker Info</h3>
                        <p class="text-gray-700 text-sm">
                            Name and email from your form are passed to SavvyCal. Visitors see their info pre-filled when they reach the calendar picker.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Conditional Logic</h3>
                        <p class="text-gray-700 text-sm">
                            Show SavvyCal only to qualified leads. Gate access to your calendar based on form responses. Keep your time protected.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📅 Full SavvyCal Features</h3>
                        <p class="text-gray-700 text-sm">
                            Calendar overlay, time zone detection, personalized links — all SavvyCal features work inside the embedded widget.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Combined Context</h3>
                        <p class="text-gray-700 text-sm">
                            Form responses in Youform + booking in SavvyCal = complete picture for every meeting. Know who you're meeting and why.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Custom Branding</h3>
                        <p class="text-gray-700 text-sm">
                            Match your brand in Youform. SavvyCal's embed inherits your SavvyCal theme. Consistent experience throughout.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 Mobile Optimized</h3>
                        <p class="text-gray-700 text-sm">
                            Forms and embedded SavvyCal work beautifully on all devices. The premium experience extends to mobile.
                        </p>
                    </div>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 md:col-span-2">
                        <h3 class="text-xl font-bold mb-3">🔄 Partial Submissions Captured</h3>
                        <p class="text-gray-700 text-sm">
                            Even if someone leaves your form before booking, you still capture their info. Retarget abandoned leads or follow up manually — with just a SavvyCal link, you'd get nothing if they leave.
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
                    SavvyCal users tend to care about relationships. Here's how they're using Youform to make those relationships better.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🤝 High-Touch Sales</h3>
                        <p class="text-gray-700 mb-4">
                            Enterprise sales, premium consulting, high-ticket services — relationships where first impressions matter:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Qualify budget and timeline before booking</li>
                            <li>Collect detailed requirements for personalized demos</li>
                            <li>Premium booking experience matches premium offering</li>
                            <li>Recipients can overlay their calendar for easy scheduling</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Founder/CEO Meetings</h3>
                        <p class="text-gray-700 mb-4">
                            Founders and executives who guard their time carefully:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Filter meeting requests through qualifying questions</li>
                            <li>Ensure every meeting is worth your time</li>
                            <li>Give the best booking experience to those who qualify</li>
                            <li>Context before every call — no more "what's this about?"</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Premium Consulting</h3>
                        <p class="text-gray-700 mb-4">
                            Consultants who command premium rates and want the experience to match:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Collect project details before discovery calls</li>
                            <li>Filter by budget and project type</li>
                            <li>Give clients a premium booking experience</li>
                            <li>Arrive at every call prepared</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎙️ Podcast Interviews</h3>
                        <p class="text-gray-700 mb-4">
                            Podcast hosts who want to vet guests and collect prep info:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Guest application form + booking in one flow</li>
                            <li>Collect bio, topics, and talking points upfront</li>
                            <li>Screen guests before giving calendar access</li>
                            <li>SavvyCal's overlay helps guests across time zones</li>
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
                SavvyCal Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with a template, add your SavvyCal link, and launch. Designed for premium scheduling experiences.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/design-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💼</div>
                <h3 class="text-xl font-bold mb-2">Consultation Request</h3>
                <p class="text-gray-700 text-sm">
                    Collect project details and let qualified clients book a consultation. Premium experience throughout.
                </p>
            </a>

            <a href="/templates/t/demo-feedback-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Demo Request</h3>
                <p class="text-gray-700 text-sm">
                    Qualify enterprise leads with detailed questions before showing your calendar.
                </p>
            </a>

            <a href="/templates/t/client-intake-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Intake</h3>
                <p class="text-gray-700 text-sm">
                    Comprehensive intake + session booking. Perfect for coaching and consulting.
                </p>
            </a>

            <a href="/templates/t/lead-qualification-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">Lead Qualification</h3>
                <p class="text-gray-700 text-sm">
                    Score leads based on responses. Show calendar only to those who qualify.
                </p>
            </a>

            <a href="/templates/t/event-planner-consultation-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📅</div>
                <h3 class="text-xl font-bold mb-2">Event Consultation</h3>
                <p class="text-gray-700 text-sm">
                    Collect event details and book initial consultations with a premium touch.
                </p>
            </a>

            <a href="/templates/t/marketing-quote-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💰</div>
                <h3 class="text-xl font-bold mb-2">Quote Request</h3>
                <p class="text-gray-700 text-sm">
                    Collect project scope and budget, then let qualified leads book a call.
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
                                <p class="text-black font-medium flex-grow">Can I embed SavvyCal inside a form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. With Youform, you can embed your SavvyCal scheduling widget directly inside a form. Visitors answer your questions first, then see your SavvyCal calendar to book a time — all in one seamless flow. Their name and email from the form are automatically passed to SavvyCal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What makes SavvyCal different from Calendly?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    SavvyCal takes a recipient-first approach to scheduling. It shows the recipient's calendar alongside yours (if they connect it), making it easier to find mutual availability. It also has overlay calendars, personalized links, and a cleaner interface. Combined with Youform, you get premium scheduling with powerful lead qualification.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Does Youform pass form data to SavvyCal?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform automatically passes the booker's name and email from your form fields to the embedded SavvyCal widget. When visitors reach the scheduling step, their information is pre-filled so they don't have to enter it again.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I qualify leads before showing SavvyCal?</p>
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
                                <p class="text-black font-medium flex-grow">Is the SavvyCal integration free?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform's free plan includes the SavvyCal embed feature along with unlimited forms, unlimited responses, conditional logic, and custom branding. You need a SavvyCal account for the scheduling part, but the Youform integration costs nothing.
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
            Premium Scheduling + Powerful Forms
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            SavvyCal makes booking a pleasure. Youform makes sure only the right people book. Together, every meeting on your calendar is worth having.
        </p>
        <p class="text-gray-700 mb-8">
            Qualify leads, auto-fill booker info, and create the premium experience your calendar deserves.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your SavvyCal form
        </a>
        <p class="text-gray-500 text-sm mt-6">
            Also works with <a href="/calendly-forms" class="text-aquamarine hover:underline">Calendly</a>, <a href="/cal-com-forms" class="text-aquamarine hover:underline">Cal.com</a>, and <a href="/tidycal-forms" class="text-aquamarine hover:underline">TidyCal</a>.
        </p>
    </div>
</div>

@include('partials.footer')

@endsection
