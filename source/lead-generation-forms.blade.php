---
title: Lead Generation Form Builder - Free Lead Capture Forms | Youform
description: Create high-converting lead generation forms in minutes. Free form builder with unlimited responses, CRM integrations, and professional templates. Capture more leads without coding.
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
      "name": "What is a lead generation form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A lead generation form is an online form designed to capture visitor information (such as name, email, company, and phone number) in exchange for something valuable like a free resource, quote, demo, or newsletter subscription. These forms help businesses convert anonymous website visitors into identifiable prospects that can be nurtured through the sales funnel."
      }
    },
    {
      "@type": "Question",
      "name": "How many fields should a lead gen form have?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For optimal conversion rates, keep your lead generation forms between 3-5 fields. Research shows that forms with fewer fields convert better — reducing fields from 4 to 3 can increase conversions by up to 50%. However, the right number depends on your goals: top-of-funnel content offers work well with just email, while demo requests may need more qualifying information. Test different field counts to find your sweet spot."
      }
    },
    {
      "@type": "Question",
      "name": "What's the best way to increase lead form conversions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The most effective ways to increase lead form conversions include: reducing the number of form fields, using a clear and compelling value proposition, adding social proof near the form, making the CTA button action-oriented and specific, using multi-step forms that break up the process, ensuring mobile optimization, and testing different form placements and designs. A/B testing different variations is key to finding what works best for your audience."
      }
    },
    {
      "@type": "Question",
      "name": "Can I integrate lead forms with my CRM?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform integrates with popular CRMs and marketing tools including HubSpot, Salesforce, Pipedrive, and many others through Zapier (5,000+ apps) and webhooks. This allows you to automatically send captured leads to your CRM, trigger email sequences, assign leads to sales reps, and keep your customer data synchronized across all your tools."
      }
    },
    {
      "@type": "Question",
      "name": "Are lead generation forms free to create?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "With Youform, yes. Our free plan includes unlimited forms, unlimited responses, all question types, conditional logic, and custom branding. You can create professional lead generation forms, embed them on your website, and start collecting leads without paying anything. Premium features like custom domains and advanced integrations are available on paid plans."
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
                        Free lead capture form builder
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Lead Generation Form Builder
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Create beautiful, high-converting lead capture forms in minutes — free, no coding required. Get unlimited forms, unlimited responses, and powerful integrations to grow your business.
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
                                <a href="#what-is-lead-gen" class="text-aquamarine hover:underline font-medium text-sm">What Is a Lead Generation Form?</a>
                            </li>
                            <li>
                                <a href="#form-types" class="text-aquamarine hover:underline font-medium text-sm">Types of Lead Gen Forms</a>
                            </li>
                            <li>
                                <a href="#best-practices" class="text-aquamarine hover:underline font-medium text-sm">Best Practices</a>
                            </li>
                            <li>
                                <a href="#field-optimization" class="text-aquamarine hover:underline font-medium text-sm">Form Field Optimization</a>
                            </li>
                            <li>
                                <a href="#lead-qualification" class="text-aquamarine hover:underline font-medium text-sm">Lead Qualification</a>
                            </li>
                            <li>
                                <a href="#integrations" class="text-aquamarine hover:underline font-medium text-sm">CRM & Email Integrations</a>
                            </li>
                            <li>
                                <a href="#templates" class="text-aquamarine hover:underline font-medium text-sm">Form Templates</a>
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
                <!-- What is a Lead Generation Form -->
                <div class="mb-16 pt-10 lg:pt-16" id="what-is-lead-gen">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Is a Lead Generation Form?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        A lead generation form is an online form designed to capture visitor information in exchange for something valuable. It's the bridge between anonymous website traffic and actual prospects you can nurture into customers.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        At its simplest, a lead gen form collects basic contact details — name, email, maybe a phone number. More sophisticated forms gather qualifying information like company size, budget, or specific needs. The goal is always the same: turn interest into actionable contact information.
                    </p>

                    <h3 class="text-2xl font-bold mb-4">Why Are Lead Generation Forms Important?</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        Without a way to capture leads, your website is a leaky bucket. Visitors come, browse, and leave — often never to return. Research shows that 96% of first-time visitors aren't ready to buy, but many would share their email for the right offer.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Lead forms change this dynamic. They give visitors a reason to identify themselves and give your business a way to continue the conversation. Whether you're offering a free guide, demo, quote, or newsletter, the form is where conversion happens.
                    </p>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">Effective lead generation forms help you:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Convert traffic into contacts</strong> instead of letting visitors disappear</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Build your email list</strong> for ongoing marketing and nurturing</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Qualify prospects</strong> by collecting relevant information upfront</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Feed your CRM</strong> with fresh prospects automatically</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Measure marketing ROI</strong> by tracking form conversions</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Types of Lead Generation Forms -->
<div class="bg-gray-50 py-20" id="form-types">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Types of Lead Generation Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Different business goals call for different form types. Here's a breakdown of the most effective lead generation forms and when to use each.
                </p>

                <div class="space-y-8">
                    <!-- Contact Forms -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📧 Contact Forms</h3>
                        <p class="text-gray-700 mb-4">
                            The classic lead gen form. Contact forms let visitors reach out with questions, inquiries, or general interest. They're essential for any business website.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Typical fields:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Name</li>
                                <li>Email address</li>
                                <li>Subject or inquiry type</li>
                                <li>Message</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Best for:</strong> Service businesses, consultants, agencies, and any company wanting to make it easy for prospects to start a conversation.
                        </p>
                    </div>

                    <!-- Newsletter Signup Forms -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📰 Newsletter Signup Forms</h3>
                        <p class="text-gray-700 mb-4">
                            Newsletter forms capture email subscribers who want to stay updated. They're typically the simplest lead forms — often just an email field.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Typical fields:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Email address (required)</li>
                                <li>First name (optional)</li>
                                <li>Interests/preferences (optional)</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Best for:</strong> Content-driven businesses, blogs, SaaS companies, and anyone building an audience through regular content.
                        </p>
                    </div>

                    <!-- Quote Request Forms -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">💰 Quote Request Forms</h3>
                        <p class="text-gray-700 mb-4">
                            Quote forms capture high-intent leads who are actively considering a purchase. They collect enough information to provide an accurate estimate.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Typical fields:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Contact information (name, email, phone)</li>
                                <li>Project/service type</li>
                                <li>Budget range or timeline</li>
                                <li>Specific requirements or details</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Best for:</strong> Service providers, contractors, agencies, B2B companies with custom pricing.
                        </p>
                    </div>

                    <!-- Demo Request Forms -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">🎯 Demo Request Forms</h3>
                        <p class="text-gray-700 mb-4">
                            Demo request forms capture leads who want a personalized walkthrough of your product. These are high-intent, sales-ready prospects.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Typical fields:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Name and work email</li>
                                <li>Company name and size</li>
                                <li>Job title/role</li>
                                <li>Current solution or pain points</li>
                                <li>Preferred demo time</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Best for:</strong> SaaS companies, enterprise software, B2B products with longer sales cycles.
                        </p>
                    </div>

                    <!-- Gated Content Forms -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">📚 Gated Content Forms</h3>
                        <p class="text-gray-700 mb-4">
                            Gated content forms exchange valuable resources (ebooks, whitepapers, templates, guides) for contact information. They're excellent for building email lists with interested prospects.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Typical fields:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Email address</li>
                                <li>First name</li>
                                <li>Company (optional)</li>
                                <li>Role or industry (optional)</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Best for:</strong> B2B companies, content marketers, anyone with valuable resources to share.
                        </p>
                    </div>

                    <!-- Registration/Signup Forms -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <h3 class="text-2xl font-bold mb-4">✨ Registration & Signup Forms</h3>
                        <p class="text-gray-700 mb-4">
                            Registration forms capture leads for events, webinars, free trials, or account creation. They often include authentication elements like password creation.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <p class="font-semibold mb-2">Typical fields:</p>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                <li>Name and email</li>
                                <li>Password (for accounts)</li>
                                <li>Company or organization</li>
                                <li>Event-specific info (dietary restrictions, etc.)</li>
                            </ul>
                        </div>
                        <p class="text-gray-700 text-sm">
                            <strong>Best for:</strong> SaaS products, event organizers, membership sites, online courses.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Best Practices for High-Converting Lead Forms -->
<div class="bg-amber-50 py-20" id="best-practices">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Best Practices for High-Converting Lead Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    The difference between a form that converts at 2% and one that converts at 10% often comes down to small optimizations. Here's what works.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">1. Reduce Friction at Every Step</h3>
                        <p class="text-gray-700 mb-4">
                            Every field you add creates friction. Every unnecessary click is a chance to lose someone. Audit your forms ruthlessly.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Only ask for information you'll actually use</li>
                            <li>Use autofill-friendly field names</li>
                            <li>Pre-fill information when possible</li>
                            <li>Use smart defaults for dropdowns</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">2. Make the Value Exchange Clear</h3>
                        <p class="text-gray-700 mb-4">
                            People need a reason to share their information. Make the benefit obvious and immediate.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>State exactly what they'll get ("Download your free guide")</li>
                            <li>Add visual previews of gated content</li>
                            <li>Use benefit-oriented language, not feature language</li>
                            <li>Include social proof near the form</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">3. Optimize Your CTA Button</h3>
                        <p class="text-gray-700 mb-4">
                            Your button is the moment of conversion. Generic "Submit" buttons leave performance on the table.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-red-50 rounded-lg p-4">
                                <p class="font-semibold text-red-700 mb-2">❌ Weak CTAs:</p>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>Submit</li>
                                    <li>Send</li>
                                    <li>Click Here</li>
                                </ul>
                            </div>
                            <div class="bg-green-50 rounded-lg p-4">
                                <p class="font-semibold text-green-700 mb-2">✅ Strong CTAs:</p>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>Get My Free Guide</li>
                                    <li>Request Your Quote</li>
                                    <li>Start My Free Trial</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">4. Use Multi-Step Forms Strategically</h3>
                        <p class="text-gray-700 mb-4">
                            Multi-step forms can dramatically improve completion rates for longer forms. They reduce perceived complexity and create momentum.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Start with easy, low-commitment questions</li>
                            <li>Show progress indicators</li>
                            <li>Save contact info early in the process</li>
                            <li>Group related questions together</li>
                        </ul>
                        <p class="text-gray-700 mt-4 text-sm">
                            Research shows multi-step forms can increase conversions by 86% compared to single-page forms for complex lead capture.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">5. Mobile-First Design</h3>
                        <p class="text-gray-700 mb-4">
                            Over 50% of web traffic is mobile. If your forms don't work perfectly on phones, you're losing leads.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Use large, tap-friendly input fields</li>
                            <li>Avoid side-by-side fields on mobile</li>
                            <li>Use appropriate keyboard types (email, phone, etc.)</li>
                            <li>Test on actual mobile devices</li>
                        </ul>
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

<!-- Form Field Optimization -->
<div class="bg-white py-20" id="field-optimization">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Form Field Optimization: What to Ask (and What to Skip)</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Every field has a cost. Here's how to decide which fields to include and which to leave out.
                </p>

                <div class="space-y-10">
                    <!-- Essential Fields -->
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Essential Fields (Almost Always Include)</h3>
                        <div class="bg-green-50 border-2 border-green-200 rounded-xl p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold mb-2">📧 Email Address</p>
                                    <p class="text-gray-700 text-sm">Your most important field. Required for follow-up and marketing.</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-2">👤 Name</p>
                                    <p class="text-gray-700 text-sm">Enables personalization. Consider first name only to reduce friction.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conditional Fields -->
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Conditional Fields (Depend on Your Goals)</h3>
                        <div class="bg-yellow-50 border-2 border-yellow-200 rounded-xl p-6">
                            <div class="space-y-4">
                                <div>
                                    <p class="font-semibold mb-1">📱 Phone Number</p>
                                    <p class="text-gray-700 text-sm">Include if your sales process involves calls. Skip if email nurturing is your primary approach. Making it optional can preserve conversions.</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">🏢 Company Name</p>
                                    <p class="text-gray-700 text-sm">Important for B2B qualification. Less relevant for B2C or content-based lead magnets.</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">💼 Job Title</p>
                                    <p class="text-gray-700 text-sm">Helps identify decision-makers. Consider using a dropdown to standardize responses.</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">📊 Company Size</p>
                                    <p class="text-gray-700 text-sm">Useful for qualifying enterprise leads. Use ranges (1-10, 11-50, etc.) to make it easy to answer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fields to Avoid -->
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Fields to Avoid (Unless Absolutely Necessary)</h3>
                        <div class="bg-red-50 border-2 border-red-200 rounded-xl p-6">
                            <div class="space-y-4">
                                <div>
                                    <p class="font-semibold mb-1">📍 Full Address</p>
                                    <p class="text-gray-700 text-sm">Rarely needed at lead capture stage. Save for later in the sales process unless location is critical.</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">🔐 CAPTCHA</p>
                                    <p class="text-gray-700 text-sm">Visible CAPTCHAs hurt conversion rates by 3-5%. Use invisible spam protection instead.</p>
                                </div>
                                <div>
                                    <p class="font-semibold mb-1">📝 "How did you hear about us?"</p>
                                    <p class="text-gray-700 text-sm">Better captured through UTM parameters and analytics. Asking adds friction without reliable data.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Field Count Guidelines -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-4">Field Count Guidelines by Form Type</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left text-sm">
                                <thead>
                                    <tr class="border-b-2 border-gray-300">
                                        <th class="px-4 py-2 font-bold">Form Type</th>
                                        <th class="px-4 py-2 font-bold">Recommended Fields</th>
                                        <th class="px-4 py-2 font-bold">Max Fields</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">Newsletter signup</td>
                                        <td class="px-4 py-2">1-2</td>
                                        <td class="px-4 py-2">3</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">Gated content download</td>
                                        <td class="px-4 py-2">2-3</td>
                                        <td class="px-4 py-2">5</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">Contact form</td>
                                        <td class="px-4 py-2">3-4</td>
                                        <td class="px-4 py-2">6</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-4 py-2">Demo request</td>
                                        <td class="px-4 py-2">4-6</td>
                                        <td class="px-4 py-2">8</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">Quote request</td>
                                        <td class="px-4 py-2">5-8</td>
                                        <td class="px-4 py-2">12</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lead Qualification Strategies -->
<div class="bg-gray-50 py-20" id="lead-qualification">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Lead Qualification Strategies</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Not all leads are created equal. Use your forms strategically to identify which prospects are worth prioritizing.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Progressive Profiling</h3>
                        <p class="text-gray-700 mb-4">
                            Instead of asking for everything upfront, collect information gradually across multiple interactions. First form captures email and name. Second interaction adds company info. Third adds budget and timeline.
                        </p>
                        <p class="text-gray-700 text-sm">
                            <strong>Benefit:</strong> Higher initial conversion rates while still gathering complete profiles over time.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Qualifying Questions</h3>
                        <p class="text-gray-700 mb-4">
                            Add strategic questions that reveal lead quality without asking invasive questions.
                        </p>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">Examples:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>"What's your biggest challenge with [problem your product solves]?"</li>
                                <li>"When are you looking to make a decision?"</li>
                                <li>"What's your current solution?"</li>
                                <li>"How many people are on your team?"</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Conditional Logic</h3>
                        <p class="text-gray-700 mb-4">
                            Use form logic to show different questions based on previous answers. This keeps forms short while gathering relevant details.
                        </p>
                        <p class="text-gray-700 text-sm">
                            <strong>Example:</strong> If someone selects "Enterprise" as company size, show additional questions about procurement process and timeline. If they select "Startup," skip directly to contact information.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">Lead Scoring Integration</h3>
                        <p class="text-gray-700 mb-4">
                            Connect form responses to your CRM's lead scoring system to automatically prioritize hot leads.
                        </p>
                        <div class="bg-amber-50 rounded-lg p-4">
                            <p class="font-semibold mb-2">High-value signals:</p>
                            <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                <li>Company size matches your ideal customer profile</li>
                                <li>Timeline is immediate or near-term</li>
                                <li>Budget range aligns with your pricing</li>
                                <li>Job title indicates decision-making authority</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CRM & Email Integrations -->
<div class="bg-white py-20" id="integrations">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">CRM & Email Integrations</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Lead capture is just the beginning. The real value comes from what happens next. Youform integrates with your existing tools to automate lead routing and nurturing.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 CRM Integrations</h3>
                        <p class="text-gray-700 mb-4">
                            Automatically create contacts and deals in your CRM when leads submit forms.
                        </p>
                        <ul class="text-gray-700 text-sm space-y-2">
                            <li>• HubSpot</li>
                            <li>• Salesforce</li>
                            <li>• Pipedrive</li>
                            <li>• Zoho CRM</li>
                            <li>• And 5,000+ more via Zapier</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📧 Email Marketing</h3>
                        <p class="text-gray-700 mb-4">
                            Add leads to your email lists and trigger automated sequences instantly.
                        </p>
                        <ul class="text-gray-700 text-sm space-y-2">
                            <li>• Mailchimp</li>
                            <li>• ConvertKit</li>
                            <li>• ActiveCampaign</li>
                            <li>• Klaviyo</li>
                            <li>• Drip</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💬 Notifications</h3>
                        <p class="text-gray-700 mb-4">
                            Get instant alerts when high-value leads come in so you can respond fast.
                        </p>
                        <ul class="text-gray-700 text-sm space-y-2">
                            <li>• Slack notifications</li>
                            <li>• Email alerts</li>
                            <li>• SMS via Twilio</li>
                            <li>• Custom webhooks</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📋 Productivity Tools</h3>
                        <p class="text-gray-700 mb-4">
                            Send lead data wherever your team works.
                        </p>
                        <ul class="text-gray-700 text-sm space-y-2">
                            <li>• Google Sheets</li>
                            <li>• Notion</li>
                            <li>• Airtable</li>
                            <li>• Trello</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                    <h3 class="text-xl font-bold mb-3">Example Automation Workflow</h3>
                    <p class="text-gray-700 mb-4">
                        When a lead submits your demo request form:
                    </p>
                    <ol class="list-decimal list-inside text-gray-700 space-y-2">
                        <li>Contact is created in HubSpot with all form fields mapped</li>
                        <li>Lead is assigned to the appropriate sales rep based on territory</li>
                        <li>Slack notification sent to the sales team channel</li>
                        <li>Welcome email automatically triggered</li>
                        <li>Calendar invite option sent for scheduling</li>
                    </ol>
                    <p class="text-gray-700 mt-4 text-sm">
                        All of this happens automatically, in seconds, without any manual work.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lead Generation Form Templates -->
<div class="bg-vivid-yellow py-20" id="templates">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
                Lead Generation Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Start with proven templates designed for conversion. Customize them to match your brand and launch in minutes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/lead-capture-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Lead Capture Form</h3>
                <p class="text-gray-700 text-sm">
                    A versatile lead capture form perfect for landing pages. Collects essential contact info with fields for company and role.
                </p>
            </a>

            <a href="/templates/t/customer-contact-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📧</div>
                <h3 class="text-xl font-bold mb-2">Contact Form</h3>
                <p class="text-gray-700 text-sm">
                    Clean, professional contact form for your website. Includes name, email, subject, and message fields with validation.
                </p>
            </a>

            <a href="/templates/t/marketing-quote-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">💰</div>
                <h3 class="text-xl font-bold mb-2">Quote Request Form</h3>
                <p class="text-gray-700 text-sm">
                    Capture high-intent leads looking for pricing. Includes project details, budget range, and timeline questions.
                </p>
            </a>

            <a href="/templates/t/lead-generation-survey-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">Lead Generation Survey</h3>
                <p class="text-gray-700 text-sm">
                    Qualify leads with targeted questions. Captures contact info plus preferences to segment and prioritize.
                </p>
            </a>

            <a href="/templates/t/online-event-registration-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📅</div>
                <h3 class="text-xl font-bold mb-2">Event Registration</h3>
                <p class="text-gray-700 text-sm">
                    Capture registrations for webinars, conferences, or workshops. Includes attendance tracking fields.
                </p>
            </a>

            <a href="/templates/t/online-signup-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">✨</div>
                <h3 class="text-xl font-bold mb-2">Online Signup Form</h3>
                <p class="text-gray-700 text-sm">
                    Versatile signup form for trials, accounts, or memberships. Captures essential info with minimal friction.
                </p>
            </a>
        </div>

        <p class="text-center text-gray-700 mb-6">
            Every template is fully customizable — add your branding, modify questions, set up integrations, and publish in minutes.
        </p>

        <div class="text-center">
            <a href="/templates" class="inline-block text-lg bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                Browse all templates
            </a>
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
                    Lead generation forms work across every industry, but the specific approach varies. Here's how different sectors capture and qualify leads effectively.
                </p>

                <div class="space-y-8">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💻 SaaS & Software</h3>
                        <p class="text-gray-700 mb-4">
                            SaaS companies use lead forms at every stage of the funnel — from content downloads to demo requests to trial signups.
                        </p>
                        <p class="font-semibold mb-2">Common form types:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li><strong>Free trial signup:</strong> Email, password, company name</li>
                            <li><strong>Demo request:</strong> Work email, company size, current solution, pain points</li>
                            <li><strong>Gated content:</strong> Email, role, company for whitepapers and guides</li>
                            <li><strong>Webinar registration:</strong> Email, name, company, job title</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏠 Real Estate</h3>
                        <p class="text-gray-700 mb-4">
                            Real estate leads are high-value. Forms help agents qualify buyers and sellers quickly.
                        </p>
                        <p class="font-semibold mb-2">Common form types:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li><strong>Property inquiry:</strong> Name, email, phone, preferred contact time</li>
                            <li><strong>Home valuation request:</strong> Address, property type, timeline to sell</li>
                            <li><strong>Buyer questionnaire:</strong> Budget, areas of interest, pre-approval status</li>
                            <li><strong>Open house registration:</strong> Contact info, buying timeline, financing status</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏢 Agencies & Consultants</h3>
                        <p class="text-gray-700 mb-4">
                            Service businesses need to qualify leads to avoid wasting time on poor-fit prospects.
                        </p>
                        <p class="font-semibold mb-2">Common form types:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li><strong>Project inquiry:</strong> Services needed, budget range, timeline</li>
                            <li><strong>Consultation booking:</strong> Contact info, business type, current challenges</li>
                            <li><strong>RFP submission:</strong> Project details, requirements, decision timeline</li>
                            <li><strong>Strategy call request:</strong> Goals, current metrics, investment level</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🛒 E-commerce</h3>
                        <p class="text-gray-700 mb-4">
                            E-commerce brands use lead forms to build lists and capture interest before purchase.
                        </p>
                        <p class="font-semibold mb-2">Common form types:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li><strong>Email popup:</strong> Email for discount code (10% off first order)</li>
                            <li><strong>Back in stock notification:</strong> Email, product interest</li>
                            <li><strong>Waitlist signup:</strong> Email, phone for product launches</li>
                            <li><strong>Wholesale inquiry:</strong> Business info, volume requirements, resale details</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📚 Education & Courses</h3>
                        <p class="text-gray-700 mb-4">
                            Educational businesses use forms to capture interested students and nurture them toward enrollment.
                        </p>
                        <p class="font-semibold mb-2">Common form types:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li><strong>Course inquiry:</strong> Name, email, current skill level, goals</li>
                            <li><strong>Free resource download:</strong> Email for guides, templates, mini-courses</li>
                            <li><strong>Application form:</strong> Background, experience, why they want to join</li>
                            <li><strong>Webinar registration:</strong> Email, profession, learning objectives</li>
                        </ul>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">⚖️ Professional Services</h3>
                        <p class="text-gray-700 mb-4">
                            Lawyers, accountants, and financial advisors use forms to screen potential clients and gather case details.
                        </p>
                        <p class="font-semibold mb-2">Common form types:</p>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                            <li><strong>Case evaluation:</strong> Contact info, case type, brief description</li>
                            <li><strong>Consultation request:</strong> Service needed, urgency, preferred time</li>
                            <li><strong>Client intake:</strong> Personal details, matter specifics, relevant dates</li>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-center">Why Choose Youform for Lead Generation</h2>
                <p class="text-lg text-gray-800 mb-8 text-center">
                    There are dozens of form builders out there. Here's what makes Youform the right choice for capturing leads.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">♾️ Free Unlimited Forms</h3>
                        <p class="text-gray-700 text-sm">
                            No limits on forms, responses, or features on the free plan. Create as many lead capture forms as you need without worrying about usage caps or surprise bills.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Designed to Convert</h3>
                        <p class="text-gray-700 text-sm">
                            Beautiful, mobile-optimized forms that look great and convert well. One question at a time keeps respondents engaged and completion rates high.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Powerful Integrations</h3>
                        <p class="text-gray-700 text-sm">
                            Connect to your CRM, email marketing tools, and productivity apps. Native integrations plus Zapier access to 5,000+ tools means your leads go exactly where you need them.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">⚡ Fast Setup</h3>
                        <p class="text-gray-700 text-sm">
                            Go from zero to capturing leads in minutes. Start with a template, customize to your brand, embed on your site, and start collecting submissions immediately.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🧠 Smart Features</h3>
                        <p class="text-gray-700 text-sm">
                            Conditional logic, multi-step forms, custom thank-you pages, email notifications — everything you need to create sophisticated lead capture without complexity.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">✨ No Coding Required</h3>
                        <p class="text-gray-700 text-sm">
                            Build professional lead forms without touching code. Embed with a simple snippet, share via link, or use our WordPress plugin. Works everywhere.
                        </p>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-gray-800 mb-4">
                        Join over 70,000 users already capturing leads with Youform.
                    </p>
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create your free form
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
                                <p class="text-black font-medium flex-grow">What is a lead generation form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    A lead generation form is an online form designed to capture visitor information (such as name, email, company, and phone number) in exchange for something valuable like a free resource, quote, demo, or newsletter subscription. These forms help businesses convert anonymous website visitors into identifiable prospects that can be nurtured through the sales funnel.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How many fields should a lead gen form have?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    For optimal conversion rates, keep your lead generation forms between 3-5 fields. Research shows that forms with fewer fields convert better — reducing fields from 4 to 3 can increase conversions by up to 50%. However, the right number depends on your goals: top-of-funnel content offers work well with just email, while demo requests may need more qualifying information. Test different field counts to find your sweet spot.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the best way to increase lead form conversions?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    The most effective ways to increase lead form conversions include: reducing the number of form fields, using a clear and compelling value proposition, adding social proof near the form, making the CTA button action-oriented and specific, using multi-step forms that break up the process, ensuring mobile optimization, and testing different form placements and designs. A/B testing different variations is key to finding what works best for your audience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I integrate lead forms with my CRM?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform integrates with popular CRMs and marketing tools including HubSpot, Salesforce, Pipedrive, and many others through Zapier (5,000+ apps) and webhooks. This allows you to automatically send captured leads to your CRM, trigger email sequences, assign leads to sales reps, and keep your customer data synchronized across all your tools.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Are lead generation forms free to create?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    With Youform, yes. Our free plan includes unlimited forms, unlimited responses, all question types, conditional logic, and custom branding. You can create professional lead generation forms, embed them on your website, and start collecting leads without paying anything. Premium features like custom domains and advanced integrations are available on paid plans.
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
            Start Capturing Leads Today
        </h2>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            Every visitor who leaves your website without sharing their contact information is a missed opportunity. Lead generation forms are the bridge between traffic and revenue — and with Youform, creating them takes minutes, not hours.
        </p>
        <p class="text-gray-700 mb-8">
            Join over 70,000 teams already capturing leads with Youform. Get started free today.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create your free form
        </a>
    </div>
</div>

@include('partials.footer')

@endsection
