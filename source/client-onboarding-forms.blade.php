---
title: Client Onboarding Form Builder - Free Onboarding Questionnaires | Youform
description: Create professional client onboarding forms in minutes. Free form builder with conditional logic, answer recall, and scheduling embeds. Streamline your welcome process without coding.
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
      "name": "What is a client onboarding form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A client onboarding form is a questionnaire designed to gather essential information from new clients after they've signed up or purchased your service. Unlike intake forms that capture initial contact details, onboarding forms focus on preferences, project requirements, expectations, and any details needed to deliver a great experience from day one."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between client intake and client onboarding forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Client intake forms are used before someone becomes a client — they capture contact information, qualify leads, and determine fit. Client onboarding forms come after the sale and focus on gathering the details needed to actually deliver your service: preferences, goals, project specifications, team members, and timeline expectations. Intake is about capturing leads; onboarding is about setting up success."
      }
    },
    {
      "@type": "Question",
      "name": "What questions should I include in a client onboarding form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Essential onboarding questions include: primary contact information and communication preferences, project goals and success metrics, timeline and deadline expectations, brand guidelines or assets needed, team members who should be involved, preferred meeting times and communication channels, and any specific requirements or constraints. Use conditional logic to show relevant questions based on the service or package they purchased."
      }
    },
    {
      "@type": "Question",
      "name": "How long should a client onboarding questionnaire be?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Aim for 10-15 questions maximum for most service businesses. Break longer onboarding forms into multiple steps or sections to prevent overwhelm. Use conditional logic to only show relevant questions based on previous answers — a design client doesn't need questions about content strategy. If you need extensive information, consider sending follow-up forms rather than one exhaustive questionnaire."
      }
    },
    {
      "@type": "Question",
      "name": "Can I embed a scheduling tool in my onboarding form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. With Youform, you can embed scheduling widgets from Calendly, Cal.com, TidyCal, and other booking tools directly in your onboarding form. This allows clients to book their kickoff call as the final step of onboarding, creating a seamless experience without sending separate scheduling links."
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
                        Free client onboarding form builder
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Client Onboarding Form Builder
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Create professional onboarding questionnaires in minutes — free, no coding required. Gather preferences, set expectations, and streamline your welcome process with conditional logic and scheduling embeds.
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
                                <a href="#what-is-onboarding" class="text-aquamarine hover:underline font-medium text-sm">What Is Client Onboarding?</a>
                            </li>
                            <li>
                                <a href="#intake-vs-onboarding" class="text-aquamarine hover:underline font-medium text-sm">Intake vs Onboarding Forms</a>
                            </li>
                            <li>
                                <a href="#form-types" class="text-aquamarine hover:underline font-medium text-sm">Types of Onboarding Forms</a>
                            </li>
                            <li>
                                <a href="#essential-questions" class="text-aquamarine hover:underline font-medium text-sm">Essential Questions to Ask</a>
                            </li>
                            <li>
                                <a href="#how-to-create" class="text-aquamarine hover:underline font-medium text-sm">How to Create Your Form</a>
                            </li>
                            <li>
                                <a href="#templates" class="text-aquamarine hover:underline font-medium text-sm">Onboarding Templates</a>
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
                <!-- What is Client Onboarding -->
                <div class="mb-16 pt-10 lg:pt-16" id="what-is-onboarding">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Is a Client Onboarding Form?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        A client onboarding form is a structured questionnaire that gathers essential information from new clients after they've signed on. It's the bridge between "yes, let's work together" and "here's everything I need to deliver great results."
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Unlike intake forms that capture initial contact details, onboarding forms focus on the practical details needed to start working: project goals, preferences, communication styles, brand assets, and timeline expectations. A good onboarding form sets the tone for the entire client relationship.
                    </p>

                    <h3 class="text-2xl font-bold mb-4">Why Client Onboarding Forms Matter</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        First impressions don't end at the sale. The onboarding experience often determines whether a client becomes a long-term partner or a one-time transaction. Research shows that customers who have a positive onboarding experience are 3x more likely to become repeat buyers.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        A well-designed onboarding form shows professionalism, reduces back-and-forth emails, and ensures you have everything needed to deliver from day one. It also sets clear expectations — clients who understand the process upfront are more satisfied with the outcome.
                    </p>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">Effective onboarding forms help you:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Gather everything upfront</strong> instead of chasing clients for details</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Set clear expectations</strong> about timelines, deliverables, and communication</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Create a professional first impression</strong> that builds confidence</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Standardize your process</strong> so every client gets the same quality experience</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Reduce scope creep</strong> by documenting goals and requirements from the start</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intake vs Onboarding Forms -->
<div class="bg-gray-50 py-20" id="intake-vs-onboarding">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Client Intake vs Client Onboarding: What's the Difference?</h2>
                <p class="text-lg text-gray-700 mb-8">
                    These terms are often confused, but they serve different purposes in your client workflow. Understanding the distinction helps you create better experiences at each stage.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-2xl font-bold mb-4">📋 Client Intake Forms</h3>
                        <p class="text-gray-700 mb-4">
                            <strong>When:</strong> Before they're a client
                        </p>
                        <p class="text-gray-700 mb-4">
                            <strong>Purpose:</strong> Capture lead information, qualify prospects, determine if there's a fit
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Typical questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Contact information</li>
                                <li>What services are you interested in?</li>
                                <li>What's your budget range?</li>
                                <li>When do you need to start?</li>
                                <li>How did you hear about us?</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-2xl font-bold mb-4">🚀 Client Onboarding Forms</h3>
                        <p class="text-gray-700 mb-4">
                            <strong>When:</strong> After they've signed on
                        </p>
                        <p class="text-gray-700 mb-4">
                            <strong>Purpose:</strong> Gather everything needed to start the work and deliver excellent results
                        </p>
                        <div class="bg-amber-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Typical questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Project goals and success metrics</li>
                                <li>Brand guidelines and assets</li>
                                <li>Communication preferences</li>
                                <li>Key stakeholders and approval process</li>
                                <li>Specific requirements and constraints</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-2 border-black rounded-xl p-6 overflow-x-auto">
                    <h3 class="text-xl font-bold mb-4">The Client Journey: Where Each Form Fits</h3>
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-2 min-w-max md:min-w-0">
                        <div class="text-center px-4 py-3 bg-gray-100 rounded-lg flex-1">
                            <p class="font-bold">Lead Capture</p>
                            <p class="text-sm text-gray-600">Contact form</p>
                        </div>
                        <div class="text-2xl text-gray-400">→</div>
                        <div class="text-center px-4 py-3 bg-amber-100 rounded-lg flex-1">
                            <p class="font-bold">Qualification</p>
                            <p class="text-sm text-gray-600">Intake form</p>
                        </div>
                        <div class="text-2xl text-gray-400">→</div>
                        <div class="text-center px-4 py-3 bg-gray-100 rounded-lg flex-1">
                            <p class="font-bold">Sale/Contract</p>
                            <p class="text-sm text-gray-600">Proposal signed</p>
                        </div>
                        <div class="text-2xl text-gray-400">→</div>
                        <div class="text-center px-4 py-3 bg-green-100 rounded-lg flex-1">
                            <p class="font-bold">Welcome</p>
                            <p class="text-sm text-gray-600">Onboarding form</p>
                        </div>
                        <div class="text-2xl text-gray-400">→</div>
                        <div class="text-center px-4 py-3 bg-gray-100 rounded-lg flex-1">
                            <p class="font-bold">Kickoff</p>
                            <p class="text-sm text-gray-600">Work begins</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Types of Onboarding Forms -->
<div class="bg-white py-20" id="form-types">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Types of Client Onboarding Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Different services require different onboarding approaches. Here are the most common types and when to use each.
                </p>

                <div class="space-y-8">
                    <!-- Welcome Questionnaire -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">👋 Welcome Questionnaire</h3>
                        <p class="text-gray-700 mb-4">
                            A general-purpose onboarding form that introduces new clients to your process while gathering essential information. Works well for service businesses with standardized offerings.
                        </p>
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Best for:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Consultants and coaches</li>
                                <li>Marketing agencies</li>
                                <li>Freelancers with recurring clients</li>
                                <li>Professional services firms</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Tip:</strong> Use answer recall to personalize follow-up questions with the client's name and company.
                        </p>
                    </div>

                    <!-- Project Scoping Form -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📐 Project Scoping Form</h3>
                        <p class="text-gray-700 mb-4">
                            A detailed questionnaire that captures specific project requirements, deliverables, and success criteria. Essential for custom work where scope clarity prevents issues later.
                        </p>
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Best for:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Web designers and developers</li>
                                <li>Creative agencies</li>
                                <li>Custom software projects</li>
                                <li>Event planners</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Tip:</strong> Use conditional logic to show different question paths based on project type or package selected.
                        </p>
                    </div>

                    <!-- Preference Survey -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">⭐ Preference Survey</h3>
                        <p class="text-gray-700 mb-4">
                            Captures client preferences for communication, working style, and expectations. Helps you tailor your approach to each client's needs.
                        </p>
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Best for:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Ongoing retainer relationships</li>
                                <li>Personal services (coaching, training)</li>
                                <li>Account management teams</li>
                                <li>Customer success onboarding</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Tip:</strong> Include questions about communication preferences (email vs Slack), meeting frequency, and feedback styles.
                        </p>
                    </div>

                    <!-- Asset Collection Form -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📁 Asset Collection Form</h3>
                        <p class="text-gray-700 mb-4">
                            Designed specifically to gather files, credentials, and resources needed to start work. Uses file uploads and clear instructions to collect everything in one place.
                        </p>
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Best for:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Brand and design agencies</li>
                                <li>Marketing teams needing access credentials</li>
                                <li>Accountants and bookkeepers</li>
                                <li>IT consultants</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Tip:</strong> Youform supports file uploads so clients can attach logos, brand guidelines, and other assets directly.
                        </p>
                    </div>

                    <!-- SaaS Onboarding Survey -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">💻 SaaS Onboarding Survey</h3>
                        <p class="text-gray-700 mb-4">
                            For software products, this captures user goals, experience level, and setup preferences to personalize the product experience and prioritize support resources.
                        </p>
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Best for:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>SaaS products with self-serve onboarding</li>
                                <li>Enterprise software implementations</li>
                                <li>Online course platforms</li>
                                <li>Membership communities</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Tip:</strong> Ask about goals and expected outcomes to tailor onboarding emails and in-app guidance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Essential Questions to Ask -->
<div class="bg-amber-50 py-20" id="essential-questions">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Essential Questions for Your Client Onboarding Form</h2>
                <p class="text-lg text-gray-700 mb-8">
                    The right questions depend on your service, but these categories cover the essentials for most client relationships.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Goals & Success Metrics</h3>
                        <p class="text-gray-700 mb-4">
                            Understanding what success looks like prevents misaligned expectations.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>What's the primary goal for this project/engagement?</li>
                                <li>How will you measure success?</li>
                                <li>What does a successful outcome look like in 3 months?</li>
                                <li>Are there any specific KPIs we should be tracking?</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📅 Timeline & Deadlines</h3>
                        <p class="text-gray-700 mb-4">
                            Clear timeline expectations prevent last-minute surprises.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Are there any hard deadlines we should know about?</li>
                                <li>Are there external dependencies that could affect timing?</li>
                                <li>When do you need the first deliverable/milestone?</li>
                                <li>Are there any dates we should avoid (holidays, events)?</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💬 Communication Preferences</h3>
                        <p class="text-gray-700 mb-4">
                            Matching communication styles prevents friction throughout the engagement.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>What's your preferred communication channel? (Email, Slack, Phone)</li>
                                <li>How often would you like progress updates?</li>
                                <li>What's the best time to reach you?</li>
                                <li>Who should be included in project communications?</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">👥 Stakeholders & Approvals</h3>
                        <p class="text-gray-700 mb-4">
                            Knowing the decision-making process upfront prevents delays later.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Who will be the primary point of contact?</li>
                                <li>Who else needs to approve deliverables?</li>
                                <li>What's your typical review/approval turnaround time?</li>
                                <li>Are there other team members we should include?</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Brand & Style Guidelines</h3>
                        <p class="text-gray-700 mb-4">
                            For creative work, capturing brand requirements ensures consistency.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Please upload your brand guidelines (if available)</li>
                                <li>What's your brand voice and tone?</li>
                                <li>Share examples of work you like (competitors, inspiration)</li>
                                <li>Are there any styles or approaches to avoid?</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔑 Access & Resources</h3>
                        <p class="text-gray-700 mb-4">
                            Get the credentials and resources needed to start work immediately.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Example questions:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>What tools/platforms do we need access to?</li>
                                <li>Are there existing assets we should use?</li>
                                <li>Who can provide necessary logins/credentials?</li>
                                <li>Is there documentation we should review?</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How to Create Your Form -->
<div class="bg-white py-20" id="how-to-create">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to Create a Client Onboarding Form in Youform</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Building a professional onboarding form takes just minutes. Here's how to create one that impresses clients and gathers everything you need.
                </p>

                <div class="space-y-8">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 1: Start from a Template or Scratch</h3>
                        <p class="text-gray-700">
                            Choose an onboarding template as your starting point, or build from scratch if you have specific needs. Templates give you a proven structure to customize.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 2: Add Your Questions</h3>
                        <p class="text-gray-700 mb-3">
                            Organize questions into logical sections. Start with simple questions to build momentum, then progress to more detailed ones.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Use multiple choice for standard options</li>
                            <li>Use long text for detailed explanations</li>
                            <li>Use file upload for assets and documents</li>
                            <li>Use date fields for deadlines and milestones</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 3: Set Up Conditional Logic</h3>
                        <p class="text-gray-700 mb-3">
                            Show different questions based on client type, package, or previous answers. This keeps forms relevant and prevents unnecessary questions.
                        </p>
                        <div class="bg-white rounded-lg p-4">
                            <p class="font-semibold mb-2">Example:</p>
                            <p class="text-gray-700 text-sm">
                                If client selects "Website Design" → show questions about pages, functionality, and design preferences.<br>
                                If client selects "Brand Identity" → show questions about logo usage, color preferences, and brand values.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 4: Use Answer Recall for Personalization</h3>
                        <p class="text-gray-700 mb-3">
                            Reference previous answers to make the form feel conversational and personal.
                        </p>
                        <div class="bg-white rounded-lg p-4">
                            <p class="font-semibold mb-2">Example:</p>
                            <p class="text-gray-700 text-sm">
                                After collecting their name: "Great to have you onboard, <strong>[Name]</strong>! Let's make sure we have everything needed to get started on your <strong>[Project Type]</strong>."
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 5: Embed Scheduling (Optional)</h3>
                        <p class="text-gray-700 mb-3">
                            Add a scheduling widget at the end so clients can book their kickoff call directly in the form. No separate emails needed.
                        </p>
                        <p class="text-gray-700 text-sm">
                            <strong>Supported:</strong> Calendly, Cal.com, TidyCal, SavvyCal, and more.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 6: Customize Branding</h3>
                        <p class="text-gray-700">
                            Add your logo, choose brand colors, and customize fonts to create a seamless experience that matches your website and other materials.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Step 7: Set Up Notifications & Integrations</h3>
                        <p class="text-gray-700 mb-3">
                            Configure where responses go:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Email notifications when forms are submitted</li>
                            <li>Send data to your CRM or project management tool</li>
                            <li>Create Slack alerts for new client submissions</li>
                            <li>Add to Google Sheets for easy tracking</li>
                        </ul>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create your onboarding form
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Onboarding Form Templates -->
<div class="bg-vivid-yellow py-20" id="templates">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
                Client Onboarding Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with professionally designed templates and customize them for your business. Launch your onboarding process in minutes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/client-onboarding-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🚀</div>
                <h3 class="text-xl font-bold mb-2">Client Onboarding Form</h3>
                <p class="text-gray-700 text-sm">
                    A comprehensive onboarding questionnaire for service businesses. Captures goals, preferences, timelines, and communication style.
                </p>
            </a>

            <a href="/templates/t/client-questionnaire-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Questionnaire</h3>
                <p class="text-gray-700 text-sm">
                    A versatile questionnaire template for gathering detailed client information. Perfect for agencies and consultants.
                </p>
            </a>

            <a href="/templates/t/client-profile-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">👤</div>
                <h3 class="text-xl font-bold mb-2">Client Profile Form</h3>
                <p class="text-gray-700 text-sm">
                    Build detailed client profiles with contact info, preferences, and background details. Great for ongoing relationships.
                </p>
            </a>

            <a href="/templates/t/product-onboarding-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💻</div>
                <h3 class="text-xl font-bold mb-2">Product Onboarding Form</h3>
                <p class="text-gray-700 text-sm">
                    For SaaS and digital products. Capture user goals, experience level, and setup preferences to personalize the experience.
                </p>
            </a>

            <a href="/templates/t/saas-onboarding-survey-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">SaaS Onboarding Survey</h3>
                <p class="text-gray-700 text-sm">
                    Understand new users' goals and expectations. Use responses to customize onboarding flows and prioritize support.
                </p>
            </a>

            <a href="/templates/t/website-questionnaire-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🌐</div>
                <h3 class="text-xl font-bold mb-2">Website Questionnaire</h3>
                <p class="text-gray-700 text-sm">
                    Perfect for web design projects. Gather requirements about pages, functionality, design preferences, and brand guidelines.
                </p>
            </a>
        </div>

        <p class="text-center text-gray-700 mb-6">
            Every template is fully customizable — add your branding, modify questions, set up conditional logic, and integrate with your tools.
        </p>

        <div class="text-center">
            <a href="/templates" class="inline-block text-lg bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                Browse all templates
            </a>
        </div>
    </div>
</div>

<!-- Best Practices -->
<div class="bg-white py-20" id="best-practices">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Best Practices for Client Onboarding Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    A great onboarding form balances thoroughness with respect for your client's time. Here's how to get it right.
                </p>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">📝 Keep It Focused</h3>
                        <p class="text-gray-700 mb-4">
                            Only ask for information you'll actually use. Every unnecessary question is friction that reduces completion rates and wastes client time.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Recommended length:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li><strong>Simple services:</strong> 5-8 questions</li>
                                <li><strong>Standard projects:</strong> 10-15 questions</li>
                                <li><strong>Complex engagements:</strong> 15-20 questions (use multi-step)</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🎯 Use Conditional Logic Strategically</h3>
                        <p class="text-gray-700 mb-4">
                            Show questions that are relevant to each client's specific situation. A branding client doesn't need to see web development questions.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-red-50 rounded-lg p-4">
                                <p class="font-semibold text-red-700 mb-2">❌ Without logic:</p>
                                <p class="text-gray-700 text-sm">Every client sees 25 questions, many irrelevant to their project</p>
                            </div>
                            <div class="bg-green-50 rounded-lg p-4">
                                <p class="font-semibold text-green-700 mb-2">✅ With logic:</p>
                                <p class="text-gray-700 text-sm">Each client sees 10-12 highly relevant questions based on their needs</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">⏰ Send at the Right Time</h3>
                        <p class="text-gray-700 mb-4">
                            Timing matters. Send your onboarding form:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li><strong>Immediately after contract signing</strong> — while excitement is high</li>
                            <li><strong>Before the kickoff call</strong> — so you can review responses together</li>
                            <li><strong>With the welcome email</strong> — as part of a cohesive onboarding sequence</li>
                        </ul>
                        <p class="text-gray-700 mt-4 text-sm">
                            <strong>Tip:</strong> Set a deadline for completion (e.g., "Please complete by Friday so we can prepare for Monday's kickoff").
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🎨 Match Your Brand</h3>
                        <p class="text-gray-700 mb-4">
                            Your onboarding form is part of your client experience. It should look and feel like the rest of your business.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Add your logo to the form header</li>
                            <li>Use your brand colors and fonts</li>
                            <li>Write in your brand voice</li>
                            <li>Include a welcome message that sets the tone</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🔄 Iterate Based on Feedback</h3>
                        <p class="text-gray-700 mb-4">
                            Your onboarding form should evolve. Pay attention to:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Questions clients skip or leave blank</li>
                            <li>Information you keep asking for after the form</li>
                            <li>Client feedback about the onboarding experience</li>
                            <li>Completion rates and drop-off points</li>
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
                    Client onboarding forms work across industries, but the specific questions vary. Here's how different businesses use them effectively.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Creative Agencies</h3>
                        <p class="text-gray-700 mb-4">
                            For design, branding, and creative work, onboarding captures the aesthetic vision and practical requirements.
                        </p>
                        <p class="font-semibold mb-2">Key questions to include:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Brand guidelines and existing assets</li>
                            <li>Design preferences and inspiration examples</li>
                            <li>Target audience and brand personality</li>
                            <li>Deliverable formats and usage rights</li>
                            <li>Approval workflow and stakeholders</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Consultants & Coaches</h3>
                        <p class="text-gray-700 mb-4">
                            For advisory relationships, onboarding establishes goals, working styles, and success metrics.
                        </p>
                        <p class="font-semibold mb-2">Key questions to include:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Current challenges and goals</li>
                            <li>What success looks like in 90 days</li>
                            <li>Previous solutions tried</li>
                            <li>Communication and meeting preferences</li>
                            <li>Accountability style (hands-on vs hands-off)</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🖥️ Web Development & Tech</h3>
                        <p class="text-gray-700 mb-4">
                            For technical projects, onboarding captures requirements, access credentials, and technical constraints.
                        </p>
                        <p class="font-semibold mb-2">Key questions to include:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Hosting and domain credentials</li>
                            <li>Existing tech stack and integrations</li>
                            <li>Functionality requirements and user flows</li>
                            <li>Content and asset delivery timeline</li>
                            <li>Testing and launch preferences</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 SaaS & Software</h3>
                        <p class="text-gray-700 mb-4">
                            For product companies, onboarding personalizes the user experience and identifies success criteria.
                        </p>
                        <p class="font-semibold mb-2">Key questions to include:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Primary use case and goals</li>
                            <li>Team size and roles using the product</li>
                            <li>Experience level with similar tools</li>
                            <li>Integration requirements</li>
                            <li>Success metrics and timeline expectations</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Marketing Agencies</h3>
                        <p class="text-gray-700 mb-4">
                            For marketing services, onboarding captures business context, brand voice, and campaign requirements.
                        </p>
                        <p class="font-semibold mb-2">Key questions to include:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Target audience and customer personas</li>
                            <li>Brand voice and messaging guidelines</li>
                            <li>Account access (ad platforms, analytics, social)</li>
                            <li>Past campaigns and what worked/didn't</li>
                            <li>Reporting preferences and KPIs</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📚 Online Courses & Education</h3>
                        <p class="text-gray-700 mb-4">
                            For learning programs, onboarding assesses starting point and customizes the learning path.
                        </p>
                        <p class="font-semibold mb-2">Key questions to include:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li>Current skill level and experience</li>
                            <li>Specific learning goals</li>
                            <li>Preferred learning style and pace</li>
                            <li>Available time commitment</li>
                            <li>How they plan to apply what they learn</li>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-white">Why Choose Youform for Client Onboarding</h2>
                <p class="text-lg text-white/90 mb-8">
                    Youform gives you everything you need to create professional onboarding forms that impress clients and streamline your process.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔀 Conditional Logic</h3>
                        <p class="text-gray-700">
                            Show different questions based on service type, package, or previous answers. Every client sees only what's relevant to them.
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💬 Answer Recall</h3>
                        <p class="text-gray-700">
                            Reference previous answers to create a personalized, conversational experience. "Thanks, [Name]! Let's talk about your [Project Type]..."
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📅 Scheduling Embeds</h3>
                        <p class="text-gray-700">
                            Embed Calendly, Cal.com, or other scheduling tools directly in your form. Clients book their kickoff call without extra emails.
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📁 File Uploads</h3>
                        <p class="text-gray-700">
                            Collect brand assets, documents, and resources directly through the form. No separate file sharing needed.
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Custom Branding</h3>
                        <p class="text-gray-700">
                            Add your logo, colors, and fonts. Your onboarding form looks like a seamless extension of your brand.
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Integrations</h3>
                        <p class="text-gray-700">
                            Connect to your CRM, project management tools, and email platform. Client data flows automatically to where you need it.
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">♾️ Unlimited Everything</h3>
                        <p class="text-gray-700">
                            Unlimited forms, unlimited responses, unlimited file storage. No artificial limits on your client onboarding.
                        </p>
                    </div>

                    <div class="bg-white/95 rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💰 Free to Start</h3>
                        <p class="text-gray-700">
                            Create professional onboarding forms without paying anything. Upgrade only if you need advanced features.
                        </p>
                    </div>

                    <div class="bg-amber-50 rounded-xl p-6 md:col-span-2 border-2 border-amber-200">
                        <h3 class="text-xl font-bold mb-3">🤖 AI Form Builder</h3>
                        <p class="text-gray-700">
                            Not sure where to start? Describe what you need and our <a href="/ai-form-builder" class="text-aquamarine hover:underline font-medium">AI form builder</a> will generate a complete onboarding form in seconds. Edit, customize, and publish — all in one place.
                        </p>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create your onboarding form
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-8">Frequently Asked Questions</h2>

                <div class="space-y-6">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">What is a client onboarding form?</h3>
                        <p class="text-gray-700">
                            A client onboarding form is a questionnaire designed to gather essential information from new clients after they've signed up or purchased your service. Unlike intake forms that capture initial contact details, onboarding forms focus on preferences, project requirements, expectations, and any details needed to deliver a great experience from day one.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">What's the difference between client intake and client onboarding forms?</h3>
                        <p class="text-gray-700">
                            Client intake forms are used before someone becomes a client — they capture contact information, qualify leads, and determine fit. Client onboarding forms come after the sale and focus on gathering the details needed to actually deliver your service: preferences, goals, project specifications, team members, and timeline expectations. Intake is about capturing leads; onboarding is about setting up success.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">What questions should I include in a client onboarding form?</h3>
                        <p class="text-gray-700">
                            Essential onboarding questions include: primary contact information and communication preferences, project goals and success metrics, timeline and deadline expectations, brand guidelines or assets needed, team members who should be involved, preferred meeting times and communication channels, and any specific requirements or constraints. Use conditional logic to show relevant questions based on the service or package they purchased.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">How long should a client onboarding questionnaire be?</h3>
                        <p class="text-gray-700">
                            Aim for 10-15 questions maximum for most service businesses. Break longer onboarding forms into multiple steps or sections to prevent overwhelm. Use conditional logic to only show relevant questions based on previous answers — a design client doesn't need questions about content strategy. If you need extensive information, consider sending follow-up forms rather than one exhaustive questionnaire.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Can I embed a scheduling tool in my onboarding form?</h3>
                        <p class="text-gray-700">
                            Yes. With Youform, you can embed scheduling widgets from Calendly, Cal.com, TidyCal, and other booking tools directly in your onboarding form. This allows clients to book their kickoff call as the final step of onboarding, creating a seamless experience without sending separate scheduling links.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">How do I personalize the onboarding experience?</h3>
                        <p class="text-gray-700">
                            Youform's answer recall feature lets you reference previous responses throughout the form. After collecting a client's name, you can address them personally in subsequent questions. After they select a service type, you can reference it in follow-up questions. This creates a conversational, customized experience rather than a generic questionnaire.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Can I collect files and documents through the onboarding form?</h3>
                        <p class="text-gray-700">
                            Yes. Youform supports file uploads, so clients can attach brand guidelines, logos, documents, and other assets directly through the form. Files are stored securely and accessible from your response dashboard. This eliminates the need for separate file-sharing emails or Dropbox links.
                        </p>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Are client onboarding forms free to create?</h3>
                        <p class="text-gray-700">
                            With Youform, yes. Our free plan includes unlimited forms, unlimited responses, conditional logic, file uploads, and custom branding. You can create professional onboarding forms without paying anything. Premium features like custom domains, team collaboration, and advanced integrations are available on paid plans.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
@include('_partials.testimonials-carousel')

@include('_partials.ask-ai-to-recommend', [
    'prompt' => 'should+I+use+youform+for+client+onboarding+forms'
])

<!-- Final CTA -->
<div class="bg-coral py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">
            Ready to streamline your client onboarding?
        </h2>
        <p class="text-lg mb-8">
            Create a professional onboarding form in minutes. Free, no coding required.
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
