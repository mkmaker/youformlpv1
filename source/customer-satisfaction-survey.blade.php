---
title: Customer Satisfaction Survey Builder - Free CSAT, NPS & CES Surveys | Youform
description: Create professional CSAT, NPS, and CES customer satisfaction surveys in minutes. Free survey builder with unlimited responses, templates, and powerful analytics. No coding required.
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
      "name": "What is a good CSAT score?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A good CSAT score depends on your industry, but generally, scores above 80% are considered strong. World-class companies often achieve 90%+ CSAT scores. However, the most important thing is tracking your trend over time. A score of 75% that's improving is better than 85% that's declining. Benchmark against your own historical data and, when possible, industry standards."
      }
    },
    {
      "@type": "Question",
      "name": "How often should I send customer satisfaction surveys?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It depends on the survey type and touchpoint. CSAT surveys should be sent immediately after specific interactions (support tickets, purchases, etc.) when the experience is fresh. NPS surveys work best quarterly or after significant customer milestones to avoid survey fatigue. CES surveys are triggered by specific tasks. As a general rule, don't survey the same customer more than once per month for relationship-type surveys."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between CSAT and NPS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "CSAT (Customer Satisfaction Score) measures satisfaction with a specific interaction or experience — 'How satisfied were you with today's support?' NPS (Net Promoter Score) measures overall loyalty and sentiment — 'How likely are you to recommend us?' CSAT is tactical and transaction-focused, while NPS is strategic and relationship-focused. Most companies use both: CSAT for specific touchpoint feedback and NPS for overall customer health tracking."
      }
    },
    {
      "@type": "Question",
      "name": "How many questions should a satisfaction survey have?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Less is more. For maximum response rates, keep customer satisfaction surveys to 3-5 questions. The core satisfaction question (CSAT, NPS, or CES) plus one or two follow-up questions is usually ideal. Studies show that survey completion rates drop significantly after the 5-question mark. If you need more detailed feedback, consider splitting into multiple targeted surveys rather than one long form."
      }
    },
    {
      "@type": "Question",
      "name": "Can I customize the survey design?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can fully customize your customer satisfaction surveys to match your brand. Add your logo, choose custom colors and fonts, and create a consistent experience for respondents. You can also customize question text, add conditional logic to show different follow-up questions based on responses, and configure thank-you pages with personalized messages or next steps."
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
                        Free CSAT, NPS & CES survey builder
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Customer Satisfaction Survey Builder
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Create CSAT, NPS, and CES surveys in minutes — free, no coding required. Get unlimited surveys, unlimited responses, and professional templates to measure customer satisfaction effectively.
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create free survey
                        </a>
                    </div>
                    <div class="text-sm pt-4 font-semibold flex items-center justify-center space-x-4">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
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
                                <a href="#what-is-csat" class="text-aquamarine hover:underline font-medium text-sm">What Is a Customer Satisfaction Survey?</a>
                            </li>
                            <li>
                                <a href="#survey-types" class="text-aquamarine hover:underline font-medium text-sm">Types of Surveys (CSAT, NPS, CES)</a>
                            </li>
                            <li>
                                <a href="#how-to-create" class="text-aquamarine hover:underline font-medium text-sm">How to Create a Survey</a>
                            </li>
                            <li>
                                <a href="#metrics" class="text-aquamarine hover:underline font-medium text-sm">Metrics Explained</a>
                            </li>
                            <li>
                                <a href="#templates" class="text-aquamarine hover:underline font-medium text-sm">Survey Templates</a>
                            </li>
                            <li>
                                <a href="#best-practices" class="text-aquamarine hover:underline font-medium text-sm">Best Practices</a>
                            </li>
                            <li>
                                <a href="#use-cases" class="text-aquamarine hover:underline font-medium text-sm">Use Cases by Industry</a>
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
                <!-- What is a Customer Satisfaction Survey -->
                <div class="mb-16 pt-10 lg:pt-16" id="what-is-csat">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Is a Customer Satisfaction Survey?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        A customer satisfaction survey is a structured questionnaire designed to measure how happy your customers are with your product, service, or overall experience. It's one of the most direct ways to understand what's working, what's not, and where you can improve.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        At its core, a customer satisfaction survey asks customers to rate their experience and provide feedback. This data helps businesses make informed decisions, reduce churn, and build stronger relationships with their audience.
                    </p>

                    <h3 class="text-2xl font-bold mb-4">Why Does Measuring Customer Satisfaction Matter?</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        The numbers tell the story. According to research, acquiring a new customer costs five to seven times more than retaining an existing one. Companies that prioritize customer experience generate 60% higher profits than their competitors. And 86% of buyers are willing to pay more for a great customer experience.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        But you can't improve what you don't measure. Without regular customer feedback, you're essentially flying blind — making assumptions about what customers want instead of asking them directly.
                    </p>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">Customer satisfaction surveys help you:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Identify pain points</strong> before they cause customers to leave</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Track improvements</strong> over time with measurable metrics</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Prioritize product development</strong> based on actual customer needs</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Reduce churn</strong> by addressing issues proactively</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Build loyalty</strong> by showing customers their feedback matters</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Types of Customer Satisfaction Surveys -->
<div class="bg-gray-50 py-20" id="survey-types">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Types of Customer Satisfaction Surveys</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Not all satisfaction surveys are created equal. Each type measures something different and works best in specific contexts. Here's a breakdown of the three most widely used customer satisfaction survey types.
                </p>

                <div class="space-y-10">
                    <!-- CSAT -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📊 CSAT (Customer Satisfaction Score)</h3>
                        <p class="text-gray-700 mb-4">
                            CSAT is the most straightforward customer satisfaction metric. It measures how satisfied customers are with a specific interaction, product, or service.
                        </p>
                        <p class="text-gray-700 mb-4">
                            <strong>The typical CSAT question:</strong> "How satisfied were you with [specific experience]?"
                        </p>
                        <p class="text-gray-700 mb-4">
                            Customers respond on a scale, usually 1-5 or 1-7, where higher numbers indicate greater satisfaction. Some CSAT surveys use emoji scales or simple "satisfied/dissatisfied" options.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">When to use CSAT surveys:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>After a customer support interaction</li>
                                <li>Following a purchase or transaction</li>
                                <li>Post-onboarding to assess initial experience</li>
                                <li>After product updates or feature releases</li>
                                <li>At the end of a service appointment</li>
                            </ul>
                        </div>
                        <div class="bg-amber-50 rounded-lg p-4">
                            <p class="font-mono text-sm mb-2"><strong>CSAT Formula:</strong></p>
                            <p class="font-mono text-sm">CSAT Score = (Number of satisfied responses / Total responses) × 100</p>
                            <p class="text-sm text-gray-600 mt-2">"Satisfied" typically means customers who selected 4 or 5 on a 5-point scale.</p>
                        </div>
                    </div>

                    <!-- NPS -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">⭐ NPS (Net Promoter Score)</h3>
                        <p class="text-gray-700 mb-4">
                            NPS measures customer loyalty and their likelihood to recommend your business to others. It's become the gold standard for measuring overall brand sentiment.
                        </p>
                        <p class="text-gray-700 mb-4">
                            <strong>The NPS question:</strong> "How likely are you to recommend [company/product] to a friend or colleague?"
                        </p>
                        <p class="text-gray-700 mb-4">
                            Customers respond on a 0-10 scale and are categorized into three groups:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-green-50 rounded-lg p-4 text-center">
                                <p class="font-bold text-green-700">Promoters (9-10)</p>
                                <p class="text-sm text-gray-600">Loyal enthusiasts who will keep buying and refer others</p>
                            </div>
                            <div class="bg-yellow-50 rounded-lg p-4 text-center">
                                <p class="font-bold text-yellow-700">Passives (7-8)</p>
                                <p class="text-sm text-gray-600">Satisfied but unenthusiastic, vulnerable to competitors</p>
                            </div>
                            <div class="bg-red-50 rounded-lg p-4 text-center">
                                <p class="font-bold text-red-700">Detractors (0-6)</p>
                                <p class="text-sm text-gray-600">Unhappy customers who can damage your brand</p>
                            </div>
                        </div>
                        <div class="bg-amber-50 rounded-lg p-4">
                            <p class="font-mono text-sm mb-2"><strong>NPS Formula:</strong></p>
                            <p class="font-mono text-sm">NPS = % Promoters − % Detractors</p>
                            <p class="text-sm text-gray-600 mt-2">NPS ranges from -100 to +100. A positive score means you have more promoters than detractors.</p>
                        </div>
                    </div>

                    <!-- CES -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">🎯 CES (Customer Effort Score)</h3>
                        <p class="text-gray-700 mb-4">
                            CES measures how easy it was for customers to accomplish a specific task or resolve an issue. It's based on research showing that reducing customer effort is a stronger driver of loyalty than delighting customers.
                        </p>
                        <p class="text-gray-700 mb-4">
                            <strong>The typical CES question:</strong> "How easy was it to [complete specific task]?"
                        </p>
                        <p class="text-gray-700 mb-4">
                            Customers respond on a scale from "Very Difficult" to "Very Easy" (typically 1-7).
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">When to use CES surveys:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>After customer support interactions</li>
                                <li>Following self-service experiences (knowledge base, FAQs)</li>
                                <li>Post-checkout or sign-up processes</li>
                                <li>After using a new feature for the first time</li>
                                <li>When troubleshooting product friction</li>
                            </ul>
                        </div>
                        <p class="text-gray-700">
                            A high effort experience is a major churn predictor. Research shows 96% of customers who have high-effort experiences report being disloyal, compared to only 9% with low-effort experiences.
                        </p>
                    </div>
                </div>

                <!-- Comparison Table -->
                <div class="mt-10 overflow-x-auto">
                    <h3 class="text-2xl font-bold mb-6">CSAT vs NPS vs CES: Comparison Table</h3>
                    <div class="bg-white border-2 border-black rounded-xl overflow-hidden">
                        <table class="min-w-full text-left text-sm md:text-base">
                            <thead class="bg-gray-100 border-b-2 border-black">
                                <tr>
                                    <th class="px-6 py-4 font-bold">Metric</th>
                                    <th class="px-6 py-4 font-bold">What It Measures</th>
                                    <th class="px-6 py-4 font-bold">Best For</th>
                                    <th class="px-6 py-4 font-bold">Scale</th>
                                    <th class="px-6 py-4 font-bold">Timing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-4 font-semibold">CSAT</td>
                                    <td class="px-6 py-4">Satisfaction with specific interaction</td>
                                    <td class="px-6 py-4">Transaction feedback, support quality</td>
                                    <td class="px-6 py-4">1-5 or 1-7</td>
                                    <td class="px-6 py-4">Immediately after interaction</td>
                                </tr>
                                <tr class="border-b border-gray-200 bg-gray-50">
                                    <td class="px-6 py-4 font-semibold">NPS</td>
                                    <td class="px-6 py-4">Overall loyalty and brand sentiment</td>
                                    <td class="px-6 py-4">Relationship health, benchmarking</td>
                                    <td class="px-6 py-4">0-10</td>
                                    <td class="px-6 py-4">Quarterly or at milestones</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold">CES</td>
                                    <td class="px-6 py-4">Ease of completing a task</td>
                                    <td class="px-6 py-4">Process improvement, friction reduction</td>
                                    <td class="px-6 py-4">1-7</td>
                                    <td class="px-6 py-4">After specific tasks</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-gray-700 mt-4">
                        <strong>Which should you use?</strong> Most successful companies use a combination. CSAT and CES work well for tactical, moment-in-time feedback. NPS provides a strategic view of overall customer health. Together, they give you a complete picture of customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How to Create a Customer Satisfaction Survey -->
<div class="bg-amber-50 py-20" id="how-to-create">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Create a Customer Satisfaction Survey</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Building an effective customer satisfaction survey doesn't require technical expertise or expensive tools. Here's a step-by-step guide to creating surveys that get responses and deliver actionable insights.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 1: Define Your Goal</h3>
                        <p class="text-gray-700">
                            Before writing a single question, clarify what you want to learn. Are you measuring satisfaction with a specific feature? Evaluating support quality? Tracking overall relationship health? Your goal determines which survey type to use, what questions to ask, and when to send it.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 2: Choose Your Survey Type</h3>
                        <p class="text-gray-700 mb-3">Based on your goal:</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li><strong>Measure specific interaction quality</strong> → CSAT survey</li>
                            <li><strong>Gauge overall loyalty and sentiment</strong> → NPS survey</li>
                            <li><strong>Identify friction points</strong> → CES survey</li>
                        </ul>
                        <p class="text-gray-700 mt-3">
                            You can also combine types. Many surveys start with an NPS or CSAT question, then follow up with open-ended questions for context.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 3: Build Your Survey in Youform</h3>
                        <p class="text-gray-700 mb-4">
                            Creating a customer satisfaction survey in Youform takes just minutes:
                        </p>
                        <ol class="list-decimal list-inside text-gray-700 space-y-2">
                            <li><strong>Start from a template</strong> — Choose from pre-built CSAT, NPS, or CES templates</li>
                            <li><strong>Customize questions</strong> — Edit the default questions to match your brand and goals</li>
                            <li><strong>Add your branding</strong> — Upload your logo, choose colors, and customize fonts</li>
                            <li><strong>Set up logic</strong> — Use conditional logic to show follow-up questions based on responses</li>
                            <li><strong>Configure notifications</strong> — Get alerts for low scores so you can follow up quickly</li>
                            <li><strong>Publish and share</strong> — Generate a link or embed the survey in your product</li>
                        </ol>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Key Questions to Include</h3>
                        <p class="text-gray-700 mb-3">Beyond the core satisfaction question, consider adding:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold mb-2">For context:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>"What was the primary reason for your score?"</li>
                                    <li>"What could we have done better?"</li>
                                    <li>"What did you like most about your experience?"</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-semibold mb-2">For follow-up:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>"Can we contact you to discuss your feedback?"</li>
                                    <li>"Would you be interested in participating in customer research?"</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create your survey
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Customer Satisfaction Metrics Explained -->
<div class="bg-white py-20" id="metrics">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Customer Satisfaction Metrics Explained</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Understanding how to calculate and interpret satisfaction metrics is crucial for turning survey data into actionable insights.
                </p>

                <div class="space-y-10">
                    <!-- CSAT Calculation -->
                    <div>
                        <h3 class="text-2xl font-bold mb-4">How to Calculate Your CSAT Score</h3>
                        <p class="text-gray-700 mb-4">
                            CSAT is expressed as a percentage of satisfied customers.
                        </p>
                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6 mb-4">
                            <p class="font-mono mb-2"><strong>Formula:</strong></p>
                            <p class="font-mono">CSAT = (Satisfied Customers / Total Respondents) × 100</p>
                            <p class="text-sm text-gray-600 mt-2">On a 5-point scale, "satisfied" typically means responses of 4 or 5.</p>
                        </div>
                        <div class="bg-amber-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Example calculation:</p>
                            <ul class="text-gray-700 space-y-1">
                                <li>Total responses: 200</li>
                                <li>Responses of 4 or 5: 160</li>
                                <li>CSAT Score: (160/200) × 100 = <strong>80%</strong></li>
                            </ul>
                        </div>
                        <div class="bg-white border-2 border-black rounded-xl p-6">
                            <p class="font-semibold mb-3">What's a good CSAT score?</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div class="bg-red-50 rounded-lg p-3">
                                    <p class="font-bold text-red-700">Below 70%</p>
                                    <p class="text-xs text-gray-600">Needs improvement</p>
                                </div>
                                <div class="bg-yellow-50 rounded-lg p-3">
                                    <p class="font-bold text-yellow-700">70-80%</p>
                                    <p class="text-xs text-gray-600">Average</p>
                                </div>
                                <div class="bg-green-50 rounded-lg p-3">
                                    <p class="font-bold text-green-700">80-90%</p>
                                    <p class="text-xs text-gray-600">Good</p>
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3">
                                    <p class="font-bold text-emerald-700">Above 90%</p>
                                    <p class="text-xs text-gray-600">Excellent</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NPS Benchmarks -->
                    <div>
                        <h3 class="text-2xl font-bold mb-4">NPS Formula and Benchmarks</h3>
                        <p class="text-gray-700 mb-4">
                            NPS is calculated by subtracting the percentage of Detractors from Promoters.
                        </p>
                        <div class="bg-gray-50 border-2 border-black rounded-xl p-6 mb-4">
                            <p class="font-mono mb-2"><strong>Formula:</strong></p>
                            <p class="font-mono">NPS = % Promoters (9-10) − % Detractors (0-6)</p>
                            <p class="text-sm text-gray-600 mt-2">Passives (7-8) aren't included in the calculation but matter for your overall customer health.</p>
                        </div>
                        <div class="bg-white border-2 border-black rounded-xl p-6">
                            <p class="font-semibold mb-3">NPS benchmarks by industry:</p>
                            <ul class="space-y-2 text-gray-700">
                                <li><strong>SaaS/Software:</strong> 30-40 is good, 50+ is excellent</li>
                                <li><strong>E-commerce:</strong> 40-50 is good, 60+ is excellent</li>
                                <li><strong>Financial Services:</strong> 30-40 is good, 50+ is excellent</li>
                                <li><strong>Healthcare:</strong> 35-45 is good, 55+ is excellent</li>
                            </ul>
                            <p class="text-sm text-gray-600 mt-4">Remember, NPS is most valuable when tracked over time. A rising NPS indicates improving customer relationships.</p>
                        </div>
                    </div>

                    <!-- CES Interpretation -->
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Interpreting CES Scores</h3>
                        <p class="text-gray-700 mb-4">
                            CES is typically reported as an average score or as the percentage of customers who found the experience "easy" (scoring 5, 6, or 7 on a 7-point scale).
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-green-50 border-2 border-green-200 rounded-xl p-4 text-center">
                                <p class="font-bold text-green-700 text-2xl">6-7</p>
                                <p class="text-sm text-gray-600">Your process is smooth — customers accomplish tasks easily</p>
                            </div>
                            <div class="bg-yellow-50 border-2 border-yellow-200 rounded-xl p-4 text-center">
                                <p class="font-bold text-yellow-700 text-2xl">4-5</p>
                                <p class="text-sm text-gray-600">There's friction — investigate where customers struggle</p>
                            </div>
                            <div class="bg-red-50 border-2 border-red-200 rounded-xl p-4 text-center">
                                <p class="font-bold text-red-700 text-2xl">1-3</p>
                                <p class="text-sm text-gray-600">Significant barriers exist — prioritize fixing the experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Customer Satisfaction Survey Templates -->
<div class="bg-vivid-yellow py-20" id="templates">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
                Customer Satisfaction Survey Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Why start from scratch? Youform offers professionally designed customer satisfaction survey templates that you can customize and launch in minutes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/net-promoter-scorea-nps-survey-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">⭐</div>
                <h3 class="text-xl font-bold mb-2">NPS Survey Template</h3>
                <p class="text-gray-700 text-sm">
                    The classic Net Promoter Score survey with the 0-10 scale, respondent categorization, and a follow-up question to understand the "why" behind each score.
                </p>
            </a>

            <a href="/templates/t/ces-customer-effort-score-survey-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">CES Survey Template</h3>
                <p class="text-gray-700 text-sm">
                    Measure how easy it is for customers to complete tasks or resolve issues. Perfect for post-support and post-checkout experiences.
                </p>
            </a>

            <a href="/templates/t/client-satisfaction-survey-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💼</div>
                <h3 class="text-xl font-bold mb-2">Client Satisfaction Survey</h3>
                <p class="text-gray-700 text-sm">
                    A comprehensive template for agencies and service businesses to gather detailed feedback from clients on project quality, communication, and overall satisfaction.
                </p>
            </a>
        </div>

        <p class="text-center text-gray-700 mb-6">
            Each template is fully customizable — add your branding, modify questions, set up conditional logic, and connect to your favorite tools.
        </p>

        <div class="text-center">
            <a href="/templates" class="inline-block text-lg bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                Browse all templates
            </a>
        </div>
    </div>
</div>

<!-- Best Practices Section -->
<div class="bg-white py-20" id="best-practices">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Best Practices for Customer Satisfaction Surveys</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Collecting feedback is only valuable if you do it right. These best practices will help you maximize response rates and get actionable data.
                </p>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">📝 Keep It Short</h3>
                        <p class="text-gray-700 mb-4">
                            Survey fatigue is real. The longer your survey, the fewer people will complete it — and those who do may rush through, giving you unreliable data.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Recommended length:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li><strong>CSAT:</strong> 1-3 questions</li>
                                <li><strong>NPS:</strong> 2-3 questions (the NPS question plus follow-up)</li>
                                <li><strong>CES:</strong> 1-2 questions</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">⏰ Timing Matters</h3>
                        <p class="text-gray-700 mb-4">The best time to survey depends on what you're measuring:</p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li><strong>Post-purchase CSAT:</strong> Within 24-48 hours, while the experience is fresh</li>
                            <li><strong>Support interaction:</strong> Immediately after ticket resolution</li>
                            <li><strong>NPS:</strong> Quarterly or after meaningful milestones</li>
                            <li><strong>CES:</strong> Right after the task in question</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🔄 Follow Up on Feedback</h3>
                        <p class="text-gray-700 mb-4">
                            Closing the feedback loop is what separates great companies from good ones.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-red-50 rounded-lg p-4">
                                <p class="font-semibold mb-2">For Detractors and low CSAT scores:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Reach out personally within 24-48 hours</li>
                                    <li>Acknowledge their frustration</li>
                                    <li>Ask clarifying questions</li>
                                    <li>Share what action you're taking</li>
                                </ul>
                            </div>
                            <div class="bg-green-50 rounded-lg p-4">
                                <p class="font-semibold mb-2">For Promoters:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Thank them for the positive feedback</li>
                                    <li>Ask if they'd be willing to write a review</li>
                                    <li>Invite them to referral programs</li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-gray-700 mt-4">
                            Youform lets you set up instant notifications for low scores so your team can respond quickly.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">📈 Benchmark Over Time</h3>
                        <p class="text-gray-700 mb-4">
                            A single survey is a snapshot. Real insights come from tracking trends.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li><strong>Establish your baseline:</strong> Run your first survey to understand where you stand</li>
                            <li><strong>Measure consistently:</strong> Use the same questions and scales so data is comparable</li>
                            <li><strong>Track by segment:</strong> Break down scores by customer type, product, or other factors</li>
                            <li><strong>Set improvement goals:</strong> "Increase NPS by 10 points in 6 months" is more actionable than "improve customer satisfaction"</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Use Cases by Industry -->
<div class="bg-gray-50 py-20" id="use-cases">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Use Cases by Industry</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Customer satisfaction surveys work across every industry, but the specific applications vary. Here's how different sectors use CSAT, NPS, and CES surveys effectively.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💻 SaaS and Software</h3>
                        <p class="text-gray-700 mb-4">
                            For SaaS companies, customer satisfaction directly impacts MRR (Monthly Recurring Revenue) and churn rates.
                        </p>
                        <p class="font-semibold mb-2">Common survey touchpoints:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Post-onboarding (Day 7, Day 30): CSAT to gauge initial experience</li>
                            <li>After feature releases: CES to measure adoption friction</li>
                            <li>Quarterly check-ins: NPS to track overall health</li>
                            <li>After support tickets: CSAT for support quality</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🛒 E-commerce and Retail</h3>
                        <p class="text-gray-700 mb-4">
                            In e-commerce, post-purchase feedback drives repeat business and identifies logistics issues.
                        </p>
                        <p class="font-semibold mb-2">Common survey touchpoints:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Post-delivery: CSAT for product and shipping satisfaction</li>
                            <li>After returns: CES to measure return process ease</li>
                            <li>Post-support: CSAT for customer service quality</li>
                            <li>Periodic: NPS for overall brand loyalty</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏥 Healthcare</h3>
                        <p class="text-gray-700 mb-4">
                            Patient satisfaction impacts both outcomes and compliance. Healthcare providers use surveys to improve care quality and patient experience.
                        </p>
                        <p class="font-semibold mb-2">Common survey touchpoints:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Post-appointment: CSAT for care quality</li>
                            <li>After procedures: CES for pre/post care communication</li>
                            <li>Ongoing: NPS for overall provider relationship</li>
                            <li>Post-discharge: CSAT for hospital stay experience</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏦 Financial Services</h3>
                        <p class="text-gray-700 mb-4">
                            Trust is everything in financial services. Satisfaction surveys help identify friction and build long-term relationships.
                        </p>
                        <p class="font-semibold mb-2">Common survey touchpoints:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>After account opening: CES for onboarding ease</li>
                            <li>Post-transaction: CSAT for service quality</li>
                            <li>After loan/application processes: CES for process friction</li>
                            <li>Annual: NPS for overall relationship health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Youform -->
<div class="bg-aquamarine py-20" id="why-youform" style="background-color: rgba(69, 173, 148, 0.85);">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-center">Why Choose Youform for Customer Satisfaction Surveys</h2>
                <p class="text-lg text-gray-800 mb-8 text-center">
                    You have options when it comes to survey tools. Here's what makes Youform the right choice for measuring customer satisfaction.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">♾️ Free Unlimited Surveys</h3>
                        <p class="text-gray-700 text-sm">
                            Unlike most survey platforms, Youform's free plan includes unlimited forms and surveys, unlimited responses, all question types (including rating scales, NPS, and more), and custom branding. No artificial limits, no surprise charges.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Beautiful Design</h3>
                        <p class="text-gray-700 text-sm">
                            Youform surveys are designed to look good and convert well. One question at a time, smooth transitions, mobile-optimized layouts — the experience feels modern and professional.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Powerful Integrations</h3>
                        <p class="text-gray-700 text-sm">
                            Connect your satisfaction surveys to Slack, Google Sheets, Zapier (5,000+ apps), and webhooks. Automatically create tasks when you get a Detractor or add Promoters to your review request sequence.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">✨ Simple and Transparent</h3>
                        <p class="text-gray-700 text-sm">
                            No enterprise sales calls. No complex pricing tiers. No features hidden behind expensive plans. Youform is built for teams who want to collect customer feedback without overhead.
                        </p>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-gray-800 mb-4">
                        Over 70,000 users have created surveys with Youform, collecting more than 10 million submissions.
                    </p>
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Start your free survey
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
                                <p class="text-black font-medium flex-grow">What is a good CSAT score?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    A good CSAT score depends on your industry, but generally, scores above 80% are considered strong. World-class companies often achieve 90%+ CSAT scores. However, the most important thing is tracking your trend over time. A score of 75% that's improving is better than 85% that's declining. Benchmark against your own historical data and, when possible, industry standards.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How often should I send customer satisfaction surveys?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    It depends on the survey type and touchpoint. CSAT surveys should be sent immediately after specific interactions (support tickets, purchases, etc.) when the experience is fresh. NPS surveys work best quarterly or after significant customer milestones to avoid survey fatigue. CES surveys are triggered by specific tasks. As a general rule, don't survey the same customer more than once per month for relationship-type surveys.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the difference between CSAT and NPS?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    CSAT (Customer Satisfaction Score) measures satisfaction with a specific interaction or experience — "How satisfied were you with today's support?" NPS (Net Promoter Score) measures overall loyalty and sentiment — "How likely are you to recommend us?" CSAT is tactical and transaction-focused, while NPS is strategic and relationship-focused. Most companies use both: CSAT for specific touchpoint feedback and NPS for overall customer health tracking.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How many questions should a satisfaction survey have?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Less is more. For maximum response rates, keep customer satisfaction surveys to 3-5 questions. The core satisfaction question (CSAT, NPS, or CES) plus one or two follow-up questions is usually ideal. Studies show that survey completion rates drop significantly after the 5-question mark. If you need more detailed feedback, consider splitting into multiple targeted surveys rather than one long form.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I customize the survey design?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. With Youform, you can fully customize your customer satisfaction surveys to match your brand. Add your logo, choose custom colors and fonts, and create a consistent experience for respondents. You can also customize question text, add conditional logic to show different follow-up questions based on responses, and configure thank-you pages with personalized messages or next steps.
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
            Start Measuring Customer Satisfaction Today
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            Your customers have opinions about your product and service. The question is whether you're listening. Customer satisfaction surveys give you direct insight into what's working, what's frustrating your customers, and where you can improve.
        </p>
        <p class="text-gray-700 mb-8">
            Join over 70,000 teams already collecting customer feedback with Youform. Start with a free survey today.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your free survey
        </a>
    </div>
</div>

@include('partials.footer')

@endsection
