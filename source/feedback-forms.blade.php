---
title: 12 Best Feedback Form Templates (Free to Use) | Youform
description: Discover 12 free feedback form templates for customer satisfaction, product reviews, event surveys, NPS, and more. Each template is ready to customize and use instantly.
---

@extends('_layouts.main')

@push('head')
<script src="https://app.youform.com/widgets/widget.js"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a feedback form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A feedback form is a structured questionnaire designed to collect opinions, suggestions, and insights from customers, employees, or users. Unlike general surveys, feedback forms are typically action-oriented — designed to capture specific input about an experience, product, or service that you can immediately use to make improvements."
      }
    },
    {
      "@type": "Question",
      "name": "What questions should I include in a feedback form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Essential feedback form questions include: an overall satisfaction rating (1-5 or 1-10 scale), what they liked most about the experience, what could be improved, likelihood to recommend (NPS question), and an open-ended field for additional comments. Keep it focused — 5-7 questions maximum for most use cases to maintain high completion rates."
      }
    },
    {
      "@type": "Question",
      "name": "How do I increase feedback form response rates?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To increase feedback response rates: keep forms short (under 5 minutes to complete), send them at the right time (immediately after an interaction), personalize the request with the customer's name, explain why feedback matters and how it will be used, and ensure forms are mobile-friendly. Forms with 5 or fewer questions typically see completion rates above 80%."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between NPS, CSAT, and CES?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "NPS (Net Promoter Score) measures customer loyalty by asking how likely they are to recommend you. CSAT (Customer Satisfaction Score) measures satisfaction with a specific interaction. CES (Customer Effort Score) measures how easy it was to complete a task. Use NPS for overall loyalty, CSAT for transaction feedback, and CES for support interactions."
      }
    },
    {
      "@type": "Question",
      "name": "Can I create feedback forms for free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can create professional feedback forms completely free — including unlimited forms, unlimited responses, conditional logic, custom branding, and integrations. All templates on this page are free to use and customize for your business needs."
      }
    },
    {
      "@type": "Question",
      "name": "When should I send feedback forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Send feedback forms at key moments: immediately after a purchase, right after a support interaction, at the end of an event or workshop, after product onboarding, or during subscription renewal. The closer to the experience, the more accurate the feedback. For ongoing relationships, quarterly check-ins work well."
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
                        Free feedback form templates
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        12 Best Feedback Form Templates (Free to Use)
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Stop guessing what your customers think. These 12 proven feedback form templates help you collect actionable insights about customer satisfaction, product experience, events, and more. Pick one, customize it, and start collecting responses in minutes.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create free form
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold flex items-center justify-center space-x-4">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>100% free templates</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
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

<!-- Introduction -->
<div class="bg-white pt-32 pb-16 -mt-10 lg:-mt-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl font-bold mb-6">Why Use Feedback Form Templates?</h2>
        <p class="text-lg text-gray-700 mb-4">
            Here's the reality: only about 3% of users respond to long, generic feedback forms. But when you use a well-designed template — short, focused, and timed correctly — response rates can jump to 20% or higher.
        </p>
        <p class="text-lg text-gray-700 mb-6">
            The templates below are organized by use case so you can quickly find what you need. Whether you're measuring customer satisfaction, gathering product feedback, or evaluating events — there's a template ready to go.
        </p>
        <p class="text-lg text-gray-700">
            Each template is free to use, fully customizable, and optimized for high response rates. Just pick the one that matches your goal.
        </p>
    </div>
</div>

<!-- Quick Jump Navigation -->
<div class="bg-gray-50 py-8 border-y border-gray-200">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <p class="font-semibold mb-4">Jump to section:</p>
        <div class="flex flex-wrap gap-3">
            <a href="#satisfaction-metrics" class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm hover:border-aquamarine hover:text-aquamarine transition-colors">Satisfaction Metrics</a>
            <a href="#product-feedback" class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm hover:border-aquamarine hover:text-aquamarine transition-colors">Product Feedback</a>
            <a href="#event-feedback" class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm hover:border-aquamarine hover:text-aquamarine transition-colors">Event & Workshop</a>
            <a href="#customer-feedback" class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm hover:border-aquamarine hover:text-aquamarine transition-colors">Customer Insights</a>
        </div>
    </div>
</div>

<!-- SECTION 1: Satisfaction Metrics -->
<div class="bg-white py-16" id="satisfaction-metrics">
    <div class="max-w-5xl mx-auto px-10 md:px-20">
        <div class="mb-12">
            <span class="text-sm font-semibold text-aquamarine uppercase tracking-wide">Category</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-4">Satisfaction Metric Templates</h2>
            <p class="text-lg text-gray-700">
                Industry-standard metrics that let you benchmark against competitors and track improvement over time. Use our <a href="/free-tools/nps-calculator/" class="text-aquamarine hover:underline">NPS calculator</a> and <a href="/free-tools/csat-calculator/" class="text-aquamarine hover:underline">CSAT calculator</a> to analyze your results.
            </p>
        </div>

        <!-- Template 1: NPS Survey -->
        <div class="bg-gray-50 border-2 border-black rounded-xl overflow-hidden mb-8" id="template-1">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">1</span>
                        <h3 class="text-2xl font-bold">Net Promoter Score (NPS) Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="7re26vhs" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/cf78c79d-23c6-4a3c-bffa-fb8b540b5d08.png" alt="Net Promoter Score Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        The gold standard for measuring customer loyalty. This single-question survey asks "How likely are you to recommend us?" on a 0-10 scale, categorizing respondents as promoters, passives, or detractors. It's the metric most companies use to track customer health over time.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">SaaS companies, e-commerce, subscription services, any recurring business relationship</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Standard 0-10 NPS rating scale</li>
                            <li>• Follow-up question for qualitative feedback</li>
                            <li>• Automatic promoter/passive/detractor categorization</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="7re26vhs" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/7re26vhs" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 2: CES Survey -->
        <div class="bg-gray-50 border-2 border-black rounded-xl overflow-hidden mb-8" id="template-2">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">2</span>
                        <h3 class="text-2xl font-bold">Customer Effort Score (CES) Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="1abxxyb1" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/96373ac6-21c8-405a-9063-74d2807008b3.png" alt="Customer Effort Score Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Measures how easy it was for customers to get things done with your company. Research shows that reducing customer effort is the strongest predictor of future loyalty. Send this after support tickets, onboarding, or any customer interaction.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Customer support teams, SaaS onboarding, self-service flows, help desk interactions</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Standard 1-7 effort scale</li>
                            <li>• Issue resolution feedback capture</li>
                            <li>• Support quality assessment</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="1abxxyb1" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/1abxxyb1" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 3: Customer Success Story Questionnaire -->
        <div class="bg-gray-50 border-2 border-black rounded-xl overflow-hidden" id="template-3">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">3</span>
                        <h3 class="text-2xl font-bold">Customer Success Story Questionnaire</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="ogreoofx" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/cce7190b-f21e-4313-8b7b-77f9416f4fd0.png" alt="Customer Success Story Questionnaire Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Turn happy customers into powerful testimonials. This questionnaire captures the full customer journey — from initial problem to solution to results — giving you the raw material for case studies, testimonials, and social proof.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Marketing teams, customer success managers, sales enablement, content teams</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Before/after story structure</li>
                            <li>• Quantifiable results capture</li>
                            <li>• Permission for testimonial use</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="ogreoofx" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/ogreoofx" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 2: Product Feedback -->
<div class="bg-gray-50 py-16" id="product-feedback">
    <div class="max-w-5xl mx-auto px-10 md:px-20">
        <div class="mb-12">
            <span class="text-sm font-semibold text-aquamarine uppercase tracking-wide">Category</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-4">Product Feedback Templates</h2>
            <p class="text-lg text-gray-700">
                Understand how users experience your product — what they love, what frustrates them, and what would make them stay (or leave).
            </p>
        </div>

        <!-- Template 4: Demo Feedback Form -->
        <div class="bg-white border-2 border-black rounded-xl overflow-hidden mb-8" id="template-4">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">4</span>
                        <h3 class="text-2xl font-bold">Demo Feedback Form</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="cke9xnmk" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/aafb6823-3c49-4273-a951-b908f019a7eb.png" alt="Demo Feedback Form Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Capture impressions immediately after product demos or trials. Find out what features resonated, what concerns remain, and whether prospects are ready to move forward. Essential for sales teams and product marketers.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Sales teams, product marketing, pre-sales, B2B companies with demo processes</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Feature interest ranking</li>
                            <li>• Objection and concern capture</li>
                            <li>• Next steps intent gauging</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="cke9xnmk" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/cke9xnmk" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 5: Website Design Feedback Form -->
        <div class="bg-white border-2 border-black rounded-xl overflow-hidden mb-8" id="template-5">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">5</span>
                        <h3 class="text-2xl font-bold">Website Design Feedback Form</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="m1fa663c" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/e7365b81-0d55-431b-b009-bec19f2aabf9.png" alt="Website Design Feedback Form Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Collect user feedback on your website's design, usability, and navigation. Perfect for UX improvements, redesign projects, or understanding how visitors interact with your site. Get specific insights on what's working and what needs work.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Web designers, UX teams, marketing teams, agencies, product teams</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Visual design and layout ratings</li>
                            <li>• Navigation ease assessment</li>
                            <li>• Page-specific improvement suggestions</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="m1fa663c" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/m1fa663c" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 6: Online Suggestion Box -->
        <div class="bg-white border-2 border-black rounded-xl overflow-hidden" id="template-6">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">6</span>
                        <h3 class="text-2xl font-bold">Online Suggestion Box</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="uk1dnhhh" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/217b49d5-3fb6-489f-82f6-8b153e27cdfd.png" alt="Online Suggestion Box Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Give customers and employees an always-on channel to submit ideas and suggestions. Unlike one-time surveys, a suggestion box collects continuous feedback that surfaces innovative ideas and catches problems early.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Product teams, HR departments, community managers, any organization wanting ongoing feedback</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Open-ended suggestion field</li>
                            <li>• Category selection for routing</li>
                            <li>• Optional anonymity</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="uk1dnhhh" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/uk1dnhhh" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 3: Event & Workshop Feedback -->
<div class="bg-white py-16" id="event-feedback">
    <div class="max-w-5xl mx-auto px-10 md:px-20">
        <div class="mb-12">
            <span class="text-sm font-semibold text-aquamarine uppercase tracking-wide">Category</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-4">Event & Workshop Feedback Templates</h2>
            <p class="text-lg text-gray-700">
                Whether you're running training sessions, conferences, or team meetings — these templates help you understand what worked and improve future events.
            </p>
        </div>

        <!-- Template 7: Workshop Feedback Survey -->
        <div class="bg-gray-50 border-2 border-black rounded-xl overflow-hidden mb-8" id="template-7">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">7</span>
                        <h3 class="text-2xl font-bold">Workshop Feedback Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="hwzedcdy" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/4fdd143d-75db-4770-ba31-cb1875f29c55.png" alt="Workshop Feedback Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Evaluate training workshops and learning sessions comprehensively. Understand if attendees gained value, whether the content was relevant to their needs, and get actionable suggestions for improving future sessions.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Corporate trainers, L&D teams, workshop facilitators, educators, course creators</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Content relevance and depth ratings</li>
                            <li>• Facilitator effectiveness evaluation</li>
                            <li>• Learning outcome assessment</li>
                            <li>• Future topic suggestions</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="hwzedcdy" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/hwzedcdy" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 8: Meeting Feedback Survey -->
        <div class="bg-gray-50 border-2 border-black rounded-xl overflow-hidden mb-8" id="template-8">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">8</span>
                        <h3 class="text-2xl font-bold">Meeting Feedback Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="a16wqewe" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/24a6506d-5505-4bea-90f4-00cfc5452cab.png" alt="Meeting Feedback Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Quick feedback form to evaluate meeting effectiveness. Find out if meetings are productive, appropriately timed, and well-organized — or if they're draining time and energy. Fix meeting culture issues with data.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Team leads, project managers, HR teams, consultants, anyone running recurring meetings</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Meeting effectiveness rating</li>
                            <li>• Time well-spent assessment</li>
                            <li>• Agenda clarity and action item feedback</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="a16wqewe" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/a16wqewe" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 9: Conference Evaluation Survey -->
        <div class="bg-gray-50 border-2 border-black rounded-xl overflow-hidden" id="template-9">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">9</span>
                        <h3 class="text-2xl font-bold">Conference Evaluation Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="fpi6coqj" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/36b1cd0c-ab26-4744-a7b0-dfca1fdc83c4.png" alt="Conference Evaluation Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Gather comprehensive feedback from conference and event attendees. Evaluate speakers, sessions, venue, logistics, and overall experience to make your next event even better. Essential for event organizers.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Event organizers, conference planners, professional associations, corporate events teams</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Session and speaker ratings</li>
                            <li>• Venue and logistics feedback</li>
                            <li>• Networking value assessment</li>
                            <li>• Return attendance intent</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="fpi6coqj" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/fpi6coqj" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SECTION 4: Customer Insights -->
<div class="bg-gray-50 py-16" id="customer-feedback">
    <div class="max-w-5xl mx-auto px-10 md:px-20">
        <div class="mb-12">
            <span class="text-sm font-semibold text-aquamarine uppercase tracking-wide">Category</span>
            <h2 class="text-3xl sm:text-4xl font-bold mt-2 mb-4">Customer Insight Templates</h2>
            <p class="text-lg text-gray-700">
                Go deeper than satisfaction scores. These templates help you understand why customers leave, what keeps them coming back, and how they perceive your brand.
            </p>
        </div>

        <!-- Template 10: Cancellation Survey -->
        <div class="bg-white border-2 border-black rounded-xl overflow-hidden mb-8" id="template-10">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">10</span>
                        <h3 class="text-2xl font-bold">Cancellation Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="ayi2wxdm" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/1f1976e5-2276-487b-bdd1-7293318c3b07.png" alt="Cancellation Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Understand why customers leave before they're gone. A well-designed cancellation survey captures reasons for churn, identifies fixable issues, and sometimes even saves the relationship. Don't let churning customers leave without feedback.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Subscription businesses, SaaS companies, membership organizations, any recurring revenue model</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Primary reason for leaving (multiple choice)</li>
                            <li>• What would make them stay</li>
                            <li>• Competitor mention capture</li>
                            <li>• Win-back offer opportunity</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="ayi2wxdm" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/ayi2wxdm" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 11: Newsletter Feedback Survey -->
        <div class="bg-white border-2 border-black rounded-xl overflow-hidden mb-8" id="template-11">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">11</span>
                        <h3 class="text-2xl font-bold">Newsletter Feedback Survey</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="9hblvp69" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/98498269-e24f-43eb-a5eb-2fb6eb0c09d6.png" alt="Newsletter Feedback Survey Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Find out what subscribers actually want from your newsletter. Understand content preferences, ideal frequency, and what makes them open (or ignore) your emails. Use this data to improve open rates and reduce unsubscribes.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Newsletter publishers, content marketers, email marketing teams, media companies</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Content relevance and quality ratings</li>
                            <li>• Frequency preference selection</li>
                            <li>• Topic interest ranking</li>
                            <li>• Format preference (text vs. visual)</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="9hblvp69" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/9hblvp69" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template 12: Testimonial Form -->
        <div class="bg-white border-2 border-black rounded-xl overflow-hidden" id="template-12">
            <div>
                <div class="px-8 pt-8 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="bg-aquamarine text-white text-xs font-bold px-3 py-1 rounded-full">12</span>
                        <h3 class="text-2xl font-bold">Testimonial Form</h3>
                    </div>
                </div>
<div class="p-6 flex items-center justify-center cursor-pointer group" data-youform-open="hauokbir" data-youform-position="center">
                    <div class="relative">
                        <img src="https://files.youform.com/templates/9e0bbb5d-5a89-4e50-95da-8aeaaf18c59d.png" alt="Testimonial Form Template Preview" class="rounded-lg shadow-lg w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all rounded-lg flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity font-semibold text-sm bg-black bg-opacity-60 px-4 py-2 rounded-full">▶ Try demo</span>
                        </div>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <p class="text-gray-700 mb-4">
                        Gather powerful testimonials from satisfied customers with guided prompts. This template helps customers articulate their experience in a way that's authentic yet compelling — perfect for building social proof on your website and marketing materials.
                    </p>
                    <div class="mb-4">
                        <p class="font-semibold text-sm mb-2">Best for:</p>
                        <p class="text-gray-600 text-sm">Marketing teams, sales enablement, small businesses, service providers, agencies</p>
                    </div>
                    <div class="mb-6">
                        <p class="font-semibold text-sm mb-2">Key features:</p>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li>• Guided testimonial prompts</li>
                            <li>• Photo/headshot upload option</li>
                            <li>• Permission for marketing use</li>
                            <li>• Company/role capture for credibility</li>
                        </ul>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button data-youform-open="hauokbir" data-youform-position="center" class="inline-block bg-white border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all cursor-pointer">
                            Try demo ▶
                        </button>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/hauokbir" class="inline-block bg-coral border-2 border-black px-6 py-2 rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                            Use this template →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tips Section -->
<div class="bg-amber-50 py-16">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl font-bold mb-8">Tips for Getting More Feedback Responses</h2>
        
        <div class="space-y-6">
            <div class="bg-white border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">⏱️ Keep It Short</h3>
                <p class="text-gray-700">
                    Forms with 5 or fewer questions see 80%+ completion rates. Every additional question drops completion by ~5%. Only ask what you'll actually use.
                </p>
            </div>
            
            <div class="bg-white border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">⏰ Time It Right</h3>
                <p class="text-gray-700">
                    Send feedback requests immediately after the experience — within minutes for support interactions, within 24 hours for purchases. Fresh experiences = honest, detailed feedback.
                </p>
            </div>
            
            <div class="bg-white border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">🎯 Be Specific</h3>
                <p class="text-gray-700">
                    "How was your experience?" gets vague answers. "How would you rate the checkout process?" gets actionable feedback. Ask about specific aspects you can improve.
                </p>
            </div>
            
            <div class="bg-white border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">📱 Go Mobile-First</h3>
                <p class="text-gray-700">
                    Over 60% of feedback forms are completed on phones. Test your forms on mobile — if buttons are too small or fields are hard to tap, you'll lose responses.
                </p>
            </div>
            
            <div class="bg-white border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">🔄 Close the Loop</h3>
                <p class="text-gray-700">
                    Follow up on feedback, especially negative feedback. Customers who receive a response after complaining are more likely to remain loyal than those who never had a problem.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Related Tools Section -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl font-bold mb-8">Related Free Tools</h2>
        <p class="text-lg text-gray-700 mb-8">
            Once you've collected feedback, use these free calculators to analyze your results:
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="/free-tools/nps-calculator/" class="block bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-3xl transition-all">
                <h3 class="font-bold text-lg mb-2">NPS Calculator</h3>
                <p class="text-gray-700 text-sm">Calculate your Net Promoter Score and see how you compare to industry benchmarks.</p>
            </a>
            <a href="/free-tools/csat-calculator/" class="block bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-3xl transition-all">
                <h3 class="font-bold text-lg mb-2">CSAT Calculator</h3>
                <p class="text-gray-700 text-sm">Calculate your Customer Satisfaction Score and track trends over time.</p>
            </a>
            <a href="/free-tools/ces-calculator/" class="block bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-3xl transition-all">
                <h3 class="font-bold text-lg mb-2">CES Calculator</h3>
                <p class="text-gray-700 text-sm">Calculate your Customer Effort Score to measure ease of experience.</p>
            </a>
            <a href="/free-tools/survey-response-rate-calculator/" class="block bg-gray-50 border-2 border-black rounded-xl p-6 hover:drop-shadow-3xl transition-all">
                <h3 class="font-bold text-lg mb-2">Response Rate Calculator</h3>
                <p class="text-gray-700 text-sm">Calculate your survey response rate and see if it's statistically significant.</p>
            </a>
        </div>
    </div>
</div>

<!-- Why Youform Section -->
<div class="bg-aquamarine py-16" style="background-color: rgba(69, 173, 148, 0.85);">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl font-bold mb-6 text-white">Why Use Youform for Feedback Forms?</h2>
        <p class="text-lg text-white/90 mb-8">
            Every template on this page is built with Youform — and you can start using them for free today.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div class="bg-white/95 rounded-xl p-6">
                <h3 class="font-bold mb-2">100% Free</h3>
                <p class="text-gray-700 text-sm">Unlimited forms, unlimited responses. No credit card required.</p>
            </div>
            <div class="bg-white/95 rounded-xl p-6">
                <h3 class="font-bold mb-2">Conditional Logic</h3>
                <p class="text-gray-700 text-sm">Show follow-up questions based on answers. Keep forms short and relevant.</p>
            </div>
            <div class="bg-white/95 rounded-xl p-6">
                <h3 class="font-bold mb-2">Custom Branding</h3>
                <p class="text-gray-700 text-sm">Add your logo, colors, and fonts. Match your brand perfectly.</p>
            </div>
            <div class="bg-white/95 rounded-xl p-6">
                <h3 class="font-bold mb-2">Built-in Analytics</h3>
                <p class="text-gray-700 text-sm">Track satisfaction scores and trends without spreadsheets.</p>
            </div>
            <div class="bg-white/95 rounded-xl p-6">
                <h3 class="font-bold mb-2">Integrations</h3>
                <p class="text-gray-700 text-sm">Connect to Slack, Google Sheets, Zapier, and more.</p>
            </div>
            <div class="bg-white/95 rounded-xl p-6">
                <h3 class="font-bold mb-2">Mobile Optimized</h3>
                <p class="text-gray-700 text-sm">Forms that look great on any device, automatically.</p>
            </div>
        </div>
        
        <div class="text-center">
            <a href="https://app.youform.com/register" class="inline-block text-xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md font-semibold">
                Start creating free forms →
            </a>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-white py-16" id="faq">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl font-bold mb-8">Frequently Asked Questions</h2>
        
        <div class="space-y-6">
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">What is a feedback form?</h3>
                <p class="text-gray-700">
                    A feedback form is a structured questionnaire designed to collect opinions, suggestions, and insights from customers, employees, or users. Unlike general surveys, feedback forms are typically action-oriented — designed to capture specific input about an experience, product, or service that you can immediately use to make improvements.
                </p>
            </div>
            
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">What questions should I include in a feedback form?</h3>
                <p class="text-gray-700">
                    Essential feedback form questions include: an overall satisfaction rating (1-5 or 1-10 scale), what they liked most about the experience, what could be improved, likelihood to recommend (NPS question), and an open-ended field for additional comments. Keep it focused — 5-7 questions maximum for most use cases.
                </p>
            </div>
            
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">What's the difference between NPS, CSAT, and CES?</h3>
                <p class="text-gray-700">
                    NPS (Net Promoter Score) measures overall customer loyalty by asking how likely they are to recommend you. CSAT (Customer Satisfaction Score) measures satisfaction with a specific interaction or transaction. CES (Customer Effort Score) measures how easy it was for customers to accomplish their goal. Use NPS for loyalty tracking, CSAT for transaction feedback, and CES for support and onboarding flows.
                </p>
            </div>
            
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">When should I send feedback forms?</h3>
                <p class="text-gray-700">
                    Send feedback forms at key moments: immediately after a purchase, right after a support interaction, at the end of an event or workshop, after product onboarding, or during subscription renewal. The closer to the experience, the more accurate and detailed the feedback. For ongoing relationships, quarterly check-ins work well.
                </p>
            </div>
            
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">Can I create feedback forms for free?</h3>
                <p class="text-gray-700">
                    Yes. With Youform, you can create professional feedback forms completely free — including unlimited forms, unlimited responses, conditional logic, custom branding, and integrations. All 12 templates on this page are free to use and customize.
                </p>
            </div>
            
            <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">How do I increase feedback form response rates?</h3>
                <p class="text-gray-700">
                    To increase response rates: keep forms short (under 5 minutes), send them immediately after the experience, personalize the request with the customer's name, explain why feedback matters and how it will be used, offer an incentive when appropriate, and ensure forms work perfectly on mobile devices.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Explore More Templates -->
<div class="bg-gray-50 py-16">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl font-bold mb-4">Explore More Templates</h2>
        <p class="text-lg text-gray-700 mb-8">
            Browse our full library of form, survey, and quiz templates.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/templates/c/surveys/feedback/" class="px-6 py-3 bg-white border-2 border-black rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                All Feedback Surveys →
            </a>
            <a href="/templates/c/surveys/customer-satisfaction/" class="px-6 py-3 bg-white border-2 border-black rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                Satisfaction Surveys →
            </a>
            <a href="/templates/" class="px-6 py-3 bg-white border-2 border-black rounded-md font-semibold hover:drop-shadow-3xl transition-all">
                All Templates →
            </a>
        </div>
    </div>
</div>

<!-- Testimonials -->
@include('_partials.testimonials-carousel')

<!-- Final CTA -->
<div class="bg-coral py-16">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">
            Ready to start collecting feedback?
        </h2>
        <p class="text-lg mb-8">
            Pick a template, customize it, and start getting responses in minutes. 100% free.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-white border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Get started free
        </a>
        <p class="text-sm mt-4">
            No credit card required • Unlimited responses • Free forever
        </p>
    </div>
</div>

@include('partials.footer')

@endsection
