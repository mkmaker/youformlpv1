---
title: AI Form Builder - Free AI Form Generator | Create Forms Instantly | Youform
description: Create professional forms in seconds with our free AI form builder. Just describe what you need and AI generates your form instantly. No coding required, unlimited responses.
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
      "name": "What is an AI form builder?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An AI form builder is a tool that uses artificial intelligence to automatically generate forms based on your description. Instead of manually adding fields one by one, you simply describe what kind of form you need (e.g., 'a contact form for my consulting business') and the AI creates a complete, professional form with appropriate fields, validation, and logic in seconds."
      }
    },
    {
      "@type": "Question",
      "name": "How does AI form generation work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "AI form generation works by analyzing your text description to understand the form's purpose, then automatically selecting appropriate field types, labels, and validation rules. The AI considers context (industry, use case) to suggest relevant fields you might not have thought of. You can then customize the generated form, add your branding, and publish immediately."
      }
    },
    {
      "@type": "Question",
      "name": "Is AI-generated form content accurate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "AI-generated forms are highly accurate for common form types like contact forms, registrations, surveys, and applications. The AI is trained on thousands of form patterns and best practices. However, you should always review the generated form to ensure it meets your specific needs. You can easily edit, add, or remove any fields after generation."
      }
    },
    {
      "@type": "Question",
      "name": "Can I customize AI-generated forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. AI generation is just the starting point. After your form is created, you have full control to customize everything: add or remove fields, change field types, adjust labels and placeholder text, add conditional logic, customize the design with your brand colors and logo, and configure integrations. Think of AI as your form-building assistant that gives you a head start."
      }
    },
    {
      "@type": "Question",
      "name": "Is the AI form builder free to use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's AI form builder is completely free to use. You can generate unlimited forms with AI, collect unlimited responses, and access all customization features without paying. Premium features like custom domains and advanced integrations are available on paid plans, but the core AI form generation is free forever."
      }
    },
    {
      "@type": "Question",
      "name": "What types of forms can AI create?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "AI can create virtually any type of form including contact forms, registration forms, surveys, feedback forms, application forms, order forms, booking forms, lead generation forms, event registration forms, job application forms, customer satisfaction surveys, and more. Simply describe what you need and the AI handles the rest."
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
                @include('_partials.ai-prompt-hero', [
                    'pageType' => 'form',
                    'badgeText' => 'Free AI-powered form generator',
                    'heading' => 'AI Form Builder',
                    'description' => 'Create professional forms in seconds with AI. Just describe what you need and watch your form appear — no coding, no manual setup, no templates to configure. Free forever with unlimited responses.',
                    'ctaVerb' => 'form',
                ])
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
                                <a href="#what-is-ai-form-builder" class="text-aquamarine hover:underline font-medium text-sm">What Is an AI Form Builder?</a>
                            </li>
                            <li>
                                <a href="#how-ai-generates-forms" class="text-aquamarine hover:underline font-medium text-sm">How AI Generates Forms</a>
                            </li>
                            <li>
                                <a href="#types-of-forms" class="text-aquamarine hover:underline font-medium text-sm">Types of AI-Generated Forms</a>
                            </li>
                            <li>
                                <a href="#benefits" class="text-aquamarine hover:underline font-medium text-sm">Benefits of AI Form Creation</a>
                            </li>
                            <li>
                                <a href="#use-cases" class="text-aquamarine hover:underline font-medium text-sm">Use Cases by Industry</a>
                            </li>
                            <li>
                                <a href="#features" class="text-aquamarine hover:underline font-medium text-sm">AI Form Builder Features</a>
                            </li>
                            <li>
                                <a href="#templates" class="text-aquamarine hover:underline font-medium text-sm">Form Templates</a>
                            </li>
                            <li>
                                <a href="#best-practices" class="text-aquamarine hover:underline font-medium text-sm">Best Practices</a>
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
                <!-- What is an AI Form Builder -->
                <div class="mb-16 pt-10 lg:pt-16" id="what-is-ai-form-builder">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Is an AI Form Builder?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        An AI form builder is a tool that uses artificial intelligence to automatically create forms based on simple text descriptions. Instead of manually dragging and dropping fields, configuring validation rules, and designing layouts, you simply tell the AI what kind of form you need — and it builds it for you in seconds.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Think of it as having a form-building expert at your fingertips. You describe your goal ("I need a customer feedback form for my restaurant") and the AI generates a complete, professional form with all the right fields, logical flow, and proper validation. You can then customize it further or publish it immediately.
                    </p>

                    <h3 class="text-2xl font-bold mb-4">Why Use an AI Form Generator?</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        Traditional form builders require you to know exactly what fields you need, how to structure them, and what validation to apply. This creates friction, especially when you're not a forms expert or when you're building forms outside your domain expertise.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        AI form generators eliminate this friction. They understand context, suggest relevant fields you might have missed, and apply best practices automatically. What used to take 30 minutes now takes 30 seconds.
                    </p>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6 mb-6">
                        <h4 class="text-xl font-bold mb-4">AI form builders help you:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Save time dramatically</strong> — go from idea to published form in under a minute</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Get expert-level forms</strong> without being a forms expert</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Discover relevant fields</strong> you might not have considered</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Apply best practices automatically</strong> for higher completion rates</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-aquamarine mr-2 flex-shrink-0 mt-1">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Iterate quickly</strong> — regenerate or modify forms instantly</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How AI Generates Forms -->
<div class="bg-gray-50 py-20" id="how-ai-generates-forms">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">How AI Generates Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    AI form generation isn't magic — it's intelligent pattern recognition combined with deep knowledge of form best practices. Here's what happens when you describe your form to an AI form builder.
                </p>

                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-coral text-black font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3">1</span>
                            <h3 class="text-2xl font-bold">Natural Language Understanding</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            When you type "I need a job application form for a marketing position," the AI parses your request to understand:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li><strong>Form type:</strong> Job application</li>
                            <li><strong>Context:</strong> Marketing role</li>
                            <li><strong>Implied fields:</strong> Contact info, work history, portfolio, skills</li>
                            <li><strong>Likely requirements:</strong> Resume upload, cover letter, availability</li>
                        </ul>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-coral text-black font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3">2</span>
                            <h3 class="text-2xl font-bold">Smart Field Suggestions</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            Based on your description and industry context, the AI selects appropriate field types:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="font-semibold mb-2">Field Selection</p>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>• Text fields for names and titles</li>
                                    <li>• Email fields with validation</li>
                                    <li>• Phone fields with formatting</li>
                                    <li>• File upload for documents</li>
                                    <li>• Multi-select for skills</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="font-semibold mb-2">Automatic Configuration</p>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>• Required vs. optional marking</li>
                                    <li>• Placeholder text for clarity</li>
                                    <li>• Character limits where appropriate</li>
                                    <li>• File type restrictions</li>
                                    <li>• Logical field ordering</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-coral text-black font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3">3</span>
                            <h3 class="text-2xl font-bold">Intelligent Form Logic</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            For complex forms, the AI can set up conditional logic automatically:
                        </p>
                        <div class="bg-amber-50 rounded-lg p-4">
                            <p class="text-gray-700 text-sm">
                                <strong>Example:</strong> If you're creating a registration form that asks "Will you attend in person or virtually?", the AI can automatically show location-specific fields for in-person attendees and technical setup questions for virtual attendees.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-white border-2 border-black rounded-xl p-8">
                        <div class="flex items-center mb-4">
                            <span class="bg-coral text-black font-bold rounded-full w-8 h-8 flex items-center justify-center mr-3">4</span>
                            <h3 class="text-2xl font-bold">Validation & Best Practices</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            The AI applies proven form design principles automatically:
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Email validation to prevent typos</li>
                            <li>Logical grouping of related fields</li>
                            <li>Appropriate field lengths to guide input</li>
                            <li>Mobile-friendly layouts</li>
                            <li>Clear, actionable labels</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-aquamarine border-2 border-black rounded-xl p-6 mt-10" style="background-color: rgba(69, 173, 148, 0.2);">
                    <h4 class="text-xl font-bold mb-3">The Result?</h4>
                    <p class="text-gray-700">
                        A complete, professional form in seconds — not minutes or hours. And because you can always edit the result, AI generation gives you the best of both worlds: speed to start and full control to customize.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Types of AI-Generated Forms -->
<div class="bg-white py-20" id="types-of-forms">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Types of AI-Generated Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    AI form builders can create virtually any type of form. Here are the most common categories and what makes each unique.
                </p>

                <div class="space-y-8">
                    <!-- Contact Forms -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📧 Contact Forms</h3>
                        <p class="text-gray-700 mb-3">
                            The essential form for any business. AI generates contact forms with appropriate fields for your industry — a law firm gets different fields than a design agency.
                        </p>
                        <p class="text-sm text-gray-600">
                            <strong>Example prompt:</strong> "Contact form for a web design agency that handles branding projects"
                        </p>
                    </div>

                    <!-- Registration Forms -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📝 Registration Forms</h3>
                        <p class="text-gray-700 mb-3">
                            From event registrations to account signups, AI understands what information is needed for different registration contexts and creates forms optimized for completion.
                        </p>
                        <p class="text-sm text-gray-600">
                            <strong>Example prompt:</strong> "Registration form for a free online workshop about digital marketing"
                        </p>
                    </div>

                    <!-- Survey Forms -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Surveys & Feedback Forms</h3>
                        <p class="text-gray-700 mb-3">
                            AI can generate comprehensive surveys with rating scales, multiple choice questions, and open-ended fields — all structured to get meaningful responses.
                        </p>
                        <p class="text-sm text-gray-600">
                            <strong>Example prompt:</strong> "Customer satisfaction survey for a SaaS product focused on user experience"
                        </p>
                    </div>

                    <!-- Application Forms -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Application Forms</h3>
                        <p class="text-gray-700 mb-3">
                            Job applications, grant applications, program applications — AI understands the comprehensive information needed and structures forms to be thorough yet user-friendly.
                        </p>
                        <p class="text-sm text-gray-600">
                            <strong>Example prompt:</strong> "Job application for a senior software engineer position"
                        </p>
                    </div>

                    <!-- Order & Booking Forms -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🛒 Order & Booking Forms</h3>
                        <p class="text-gray-700 mb-3">
                            From appointment scheduling to product orders, AI creates forms with date/time pickers, quantity selectors, and relevant details fields.
                        </p>
                        <p class="text-sm text-gray-600">
                            <strong>Example prompt:</strong> "Appointment booking form for a photography studio"
                        </p>
                    </div>

                    <!-- Lead Generation -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎯 Lead Generation Forms</h3>
                        <p class="text-gray-700 mb-3">
                            AI creates lead forms optimized for conversion — capturing essential qualifying information while minimizing friction that causes abandonment.
                        </p>
                        <p class="text-sm text-gray-600">
                            <strong>Example prompt:</strong> "Lead capture form for a B2B consulting firm specializing in digital transformation"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Benefits of AI-Powered Form Creation -->
<div class="bg-amber-50 py-20" id="benefits">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Benefits of AI-Powered Form Creation</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Using an AI form generator isn't just about saving time — though that's a major benefit. Here's what makes AI-powered form creation a game-changer.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="text-3xl mb-3">⚡</div>
                        <h3 class="text-xl font-bold mb-2">10x Faster Creation</h3>
                        <p class="text-gray-700 text-sm">
                            What takes 30+ minutes manually takes under a minute with AI. Describe your form, review the result, publish. Done.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="text-3xl mb-3">🧠</div>
                        <h3 class="text-xl font-bold mb-2">Built-In Expertise</h3>
                        <p class="text-gray-700 text-sm">
                            AI applies form design best practices automatically — optimal field order, clear labels, appropriate validation, mobile-friendly layouts.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="text-3xl mb-3">💡</div>
                        <h3 class="text-xl font-bold mb-2">Smart Suggestions</h3>
                        <p class="text-gray-700 text-sm">
                            AI suggests fields you might not have thought of based on context. Ask for a "customer feedback form" and get NPS ratings, open-ended questions, and contact preferences.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="text-3xl mb-3">🔄</div>
                        <h3 class="text-xl font-bold mb-2">Easy Iteration</h3>
                        <p class="text-gray-700 text-sm">
                            Not quite right? Adjust your prompt and regenerate, or edit the form directly. AI gives you a head start; you maintain full control.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="text-3xl mb-3">🌍</div>
                        <h3 class="text-xl font-bold mb-2">Any Industry, Any Use Case</h3>
                        <p class="text-gray-700 text-sm">
                            Whether you're in healthcare, education, real estate, or tech — AI understands industry context and creates appropriately tailored forms.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <div class="text-3xl mb-3">💰</div>
                        <h3 class="text-xl font-bold mb-2">Zero Learning Curve</h3>
                        <p class="text-gray-700 text-sm">
                            No need to learn complex form builder interfaces. If you can describe what you want, you can create a form. It's that simple.
                        </p>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Try AI form builder free
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Use Cases by Industry -->
<div class="bg-white py-20" id="use-cases">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Use Cases by Industry</h2>
                <p class="text-lg text-gray-700 mb-8">
                    AI form builders adapt to your industry and use case. Here's how different sectors use AI-generated forms to streamline their operations.
                </p>

                <div class="space-y-8">
                    <!-- Business & Marketing -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">💼 Business & Marketing</h3>
                        <p class="text-gray-700 mb-4">
                            Marketing teams and businesses use AI forms to capture leads, gather market research, and collect customer feedback at scale.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold mb-2">Common AI-generated forms:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Lead capture forms</li>
                                    <li>Contact forms</li>
                                    <li>Quote request forms</li>
                                    <li>Demo request forms</li>
                                    <li>Customer feedback surveys</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-semibold mb-2">AI advantage:</p>
                                <p class="text-gray-700 text-sm">
                                    AI understands B2B vs. B2C context and adjusts qualifying questions accordingly. It knows to ask for company size in B2B lead forms but focuses on preferences in B2C.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- HR & Recruitment -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">👥 HR & Recruitment</h3>
                        <p class="text-gray-700 mb-4">
                            HR teams use AI to create comprehensive application forms, onboarding questionnaires, and employee feedback surveys.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold mb-2">Common AI-generated forms:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Job application forms</li>
                                    <li>Employee onboarding forms</li>
                                    <li>Exit interview surveys</li>
                                    <li>Performance review forms</li>
                                    <li>Time-off request forms</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-semibold mb-2">AI advantage:</p>
                                <p class="text-gray-700 text-sm">
                                    AI generates role-specific application forms — a marketing position gets portfolio questions while an engineering role gets technical skill assessments.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎓 Education</h3>
                        <p class="text-gray-700 mb-4">
                            Educational institutions use AI forms for admissions, course evaluations, event registrations, and student feedback collection.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold mb-2">Common AI-generated forms:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Course registration forms</li>
                                    <li>Student enrollment applications</li>
                                    <li>Workshop signup forms</li>
                                    <li>Course evaluation surveys</li>
                                    <li>Parent feedback forms</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-semibold mb-2">AI advantage:</p>
                                <p class="text-gray-700 text-sm">
                                    AI understands educational contexts — it knows to include guardian information for K-12 forms and prerequisites for advanced course registrations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Healthcare -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🏥 Healthcare</h3>
                        <p class="text-gray-700 mb-4">
                            Healthcare providers use AI forms for patient intake, appointment scheduling, and satisfaction surveys while maintaining appropriate data collection practices.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold mb-2">Common AI-generated forms:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Patient intake forms</li>
                                    <li>Appointment request forms</li>
                                    <li>Medical history questionnaires</li>
                                    <li>Patient satisfaction surveys</li>
                                    <li>Consent forms</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-semibold mb-2">AI advantage:</p>
                                <p class="text-gray-700 text-sm">
                                    AI includes relevant health-related fields and understands the need for emergency contact information, insurance details, and medical history sections.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Events -->
                    <div class="bg-gray-50 border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎉 Events & Hospitality</h3>
                        <p class="text-gray-700 mb-4">
                            Event organizers use AI to create registration forms, RSVPs, feedback surveys, and volunteer signup forms quickly.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold mb-2">Common AI-generated forms:</p>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Event registration forms</li>
                                    <li>RSVP forms</li>
                                    <li>Volunteer signup forms</li>
                                    <li>Post-event feedback surveys</li>
                                    <li>Speaker submission forms</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-semibold mb-2">AI advantage:</p>
                                <p class="text-gray-700 text-sm">
                                    AI adds event-specific fields like dietary restrictions, accessibility needs, session preferences, and networking interests automatically.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AI Form Builder Features -->
<div class="bg-gray-50 py-20" id="features">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">AI Form Builder Features</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Youform's AI form builder combines intelligent generation with powerful customization tools. Here's what you get.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🤖 Natural Language Form Generation</h3>
                        <p class="text-gray-700">
                            Describe your form in plain English — "a contact form for my bakery" or "employee satisfaction survey with anonymous responses" — and watch it appear. No technical knowledge required.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">✏️ Full Customization</h3>
                        <p class="text-gray-700">
                            AI generation is your starting point. After creation, you have complete control to add fields, remove fields, reorder questions, change field types, add conditional logic, and customize every detail.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🎨 Brand Customization</h3>
                        <p class="text-gray-700">
                            Add your logo, choose your brand colors, customize fonts, and create a form experience that matches your brand identity perfectly.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔀 Conditional Logic</h3>
                        <p class="text-gray-700">
                            Create dynamic forms that show or hide questions based on previous answers. AI can set this up automatically for common patterns, and you can add more complex logic manually.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">✅ Smart Validation</h3>
                        <p class="text-gray-700">
                            AI applies appropriate validation automatically — email format checking, phone number patterns, required fields, character limits — ensuring you collect clean, usable data.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">🔗 Integrations</h3>
                        <p class="text-gray-700">
                            Connect your forms to 5,000+ apps via Zapier, or use direct integrations with popular tools like Slack, Google Sheets, Notion, and major CRMs.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📊 Analytics & Reporting</h3>
                        <p class="text-gray-700">
                            Track form views, submission rates, completion times, and drop-off points. Understand how your forms perform and where to optimize.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-3">📱 Mobile-First Design</h3>
                        <p class="text-gray-700">
                            Every AI-generated form is automatically optimized for mobile devices. Large touch targets, appropriate keyboards, and layouts that work beautifully on any screen size.
                        </p>
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
                Form Templates
            </h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Don't want to use AI? Start with professionally designed templates instead. Or use them as inspiration before generating your own AI-powered form.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <a href="/templates/t/lead-capture-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎯</div>
                <h3 class="text-xl font-bold mb-2">Lead Capture Form</h3>
                <p class="text-gray-700 text-sm">
                    A conversion-optimized lead form perfect for landing pages. Captures essential contact info with smart field selection.
                </p>
            </a>

            <a href="/templates/t/client-intake-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📋</div>
                <h3 class="text-xl font-bold mb-2">Client Intake Form</h3>
                <p class="text-gray-700 text-sm">
                    Streamline client onboarding with this comprehensive intake form. Gather all essential information upfront.
                </p>
            </a>

            <a href="/templates/t/user-registration-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">✨</div>
                <h3 class="text-xl font-bold mb-2">User Registration Form</h3>
                <p class="text-gray-700 text-sm">
                    A clean, user-friendly registration form for signups, accounts, or memberships. Mobile-optimized and conversion-focused.
                </p>
            </a>

            <a href="/templates/t/event-signup-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📅</div>
                <h3 class="text-xl font-bold mb-2">Event Signup Form</h3>
                <p class="text-gray-700 text-sm">
                    Perfect for webinars, workshops, and conferences. Includes all the fields you need for event registration.
                </p>
            </a>

            <a href="/templates/t/lead-qualification-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="text-xl font-bold mb-2">Lead Qualification Form</h3>
                <p class="text-gray-700 text-sm">
                    Qualify leads with targeted questions. Identify high-value prospects and prioritize sales follow-up.
                </p>
            </a>

            <a href="/templates/t/online-event-registration-form-template" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-4xl hover:drop-shadow-6xl transition-all">
                <div class="text-3xl mb-3">🎉</div>
                <h3 class="text-xl font-bold mb-2">Event Registration Form</h3>
                <p class="text-gray-700 text-sm">
                    A comprehensive event registration form with attendee details, session preferences, and dietary requirements.
                </p>
            </a>
        </div>

        <p class="text-center text-gray-700 mb-6">
            All templates are fully customizable — or use AI to generate something completely custom to your needs.
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Best Practices for AI Form Generation</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Get the most out of AI form builders with these tips for creating forms that convert.
                </p>

                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">📝 Write Descriptive Prompts</h3>
                        <p class="text-gray-700 mb-4">
                            The more context you give, the better your form will be. Include your industry, the form's purpose, and any specific requirements.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-red-50 rounded-lg p-4">
                                <p class="font-semibold text-red-700 mb-2">❌ Too vague:</p>
                                <p class="text-gray-700 text-sm">"Contact form"</p>
                            </div>
                            <div class="bg-green-50 rounded-lg p-4">
                                <p class="font-semibold text-green-700 mb-2">✅ Descriptive:</p>
                                <p class="text-gray-700 text-sm">"Contact form for a B2B software company that needs to capture company size and primary challenge"</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🔍 Review and Refine</h3>
                        <p class="text-gray-700 mb-4">
                            AI gives you an excellent starting point, but always review the generated form. Remove fields you don't need, add any that are missing, and ensure the flow makes sense for your audience.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">📱 Test on Mobile</h3>
                        <p class="text-gray-700 mb-4">
                            AI-generated forms are mobile-optimized by default, but always preview on actual devices. Ensure the form experience is smooth for mobile users, who may be the majority of your respondents.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🎯 Focus on Conversion</h3>
                        <p class="text-gray-700 mb-4">
                            Fewer fields usually means higher completion rates. After AI generates your form, ask yourself: "Do I really need this field?" If you can't explain why a field is essential, consider removing it.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">🔄 Iterate Based on Data</h3>
                        <p class="text-gray-700 mb-4">
                            Use analytics to understand how your forms perform. Look at completion rates, drop-off points, and time to complete. Use this data to iterate — AI makes it easy to generate variations quickly.
                        </p>
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
                <h2 class="text-3xl sm:text-4xl font-bold mb-6 text-gray-900">Why Choose Youform for AI Form Building?</h2>
                <p class="text-lg text-gray-800 mb-8">
                    There are many form builders out there. Here's why Youform is the best choice for AI-powered form creation.
                </p>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-2">🆓 Truly Free</h3>
                        <p class="text-gray-700">
                            AI form generation is completely free — no trial period, no credit card required. Create unlimited forms, collect unlimited responses, and use all AI features without paying.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-2">⚡ Instant Generation</h3>
                        <p class="text-gray-700">
                            Our AI generates forms in seconds, not minutes. Describe what you need and watch your form appear almost instantly.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-2">🎨 Beautiful by Default</h3>
                        <p class="text-gray-700">
                            AI-generated forms look professional immediately. Clean design, proper spacing, mobile optimization — all handled automatically.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-2">🔧 Full Control</h3>
                        <p class="text-gray-700">
                            AI is your starting point, not your limit. After generation, you have complete control to customize every aspect of your form.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-2">🔗 Powerful Integrations</h3>
                        <p class="text-gray-700">
                            Connect to 5,000+ apps via Zapier, or use native integrations with popular tools. Your forms work seamlessly with your existing workflow.
                        </p>
                    </div>

                    <div class="bg-white border-2 border-black rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-2">📊 Built-In Analytics</h3>
                        <p class="text-gray-700">
                            Track form performance with detailed analytics. See views, submissions, completion rates, and identify optimization opportunities.
                        </p>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free form
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
@include('_partials.testimonials-carousel')

<!-- FAQ Section -->
<div class="bg-white py-20" id="faq">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-8">Frequently Asked Questions</h2>
                
                <div class="space-y-6">
                    <div class="border-b-2 border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">What is an AI form builder?</h3>
                        <p class="text-gray-700">
                            An AI form builder is a tool that uses artificial intelligence to automatically generate forms based on your description. Instead of manually adding fields one by one, you simply describe what kind of form you need (e.g., "a contact form for my consulting business") and the AI creates a complete, professional form with appropriate fields, validation, and logic in seconds.
                        </p>
                    </div>

                    <div class="border-b-2 border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">How does AI form generation work?</h3>
                        <p class="text-gray-700">
                            AI form generation works by analyzing your text description to understand the form's purpose, then automatically selecting appropriate field types, labels, and validation rules. The AI considers context (industry, use case) to suggest relevant fields you might not have thought of. You can then customize the generated form, add your branding, and publish immediately.
                        </p>
                    </div>

                    <div class="border-b-2 border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Is AI-generated form content accurate?</h3>
                        <p class="text-gray-700">
                            AI-generated forms are highly accurate for common form types like contact forms, registrations, surveys, and applications. The AI is trained on thousands of form patterns and best practices. However, you should always review the generated form to ensure it meets your specific needs. You can easily edit, add, or remove any fields after generation.
                        </p>
                    </div>

                    <div class="border-b-2 border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Can I customize AI-generated forms?</h3>
                        <p class="text-gray-700">
                            Absolutely. AI generation is just the starting point. After your form is created, you have full control to customize everything: add or remove fields, change field types, adjust labels and placeholder text, add conditional logic, customize the design with your brand colors and logo, and configure integrations. Think of AI as your form-building assistant that gives you a head start.
                        </p>
                    </div>

                    <div class="border-b-2 border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Is the AI form builder free to use?</h3>
                        <p class="text-gray-700">
                            Yes. Youform's AI form builder is completely free to use. You can generate unlimited forms with AI, collect unlimited responses, and access all customization features without paying. Premium features like custom domains and advanced integrations are available on paid plans, but the core AI form generation is free forever.
                        </p>
                    </div>

                    <div class="pb-6">
                        <h3 class="text-xl font-bold mb-3">What types of forms can AI create?</h3>
                        <p class="text-gray-700">
                            AI can create virtually any type of form including contact forms, registration forms, surveys, feedback forms, application forms, order forms, booking forms, lead generation forms, event registration forms, job application forms, customer satisfaction surveys, and more. Simply describe what you need and the AI handles the rest.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA Section -->
<div class="bg-gray-50 py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">Ready to Create Your First AI-Generated Form?</h2>
        <p class="text-lg text-gray-700 mb-8">
            Join thousands of users who build forms in seconds with Youform's AI form builder. Free forever, no credit card required.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
            Create free form
        </a>
        <p class="text-sm text-gray-600 mt-4">
            Unlimited forms • Unlimited responses • No credit card required
        </p>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', [
    'prompt' => 'tell+me+why+youform+is+the+best+free+AI+form+builder'
])

<!-- Also Try Section -->
<div class="bg-gray-50 py-16 border-t-2 border-gray-200">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-2xl font-bold mb-6">Also Try Our Other Free Builders</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/online-form-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">📝</span>
                <span class="font-semibold">Form Builder</span>
            </a>
            <a href="/ai-quiz-maker/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">🎯</span>
                <span class="font-semibold">AI Quiz Maker</span>
            </a>
            <a href="/ai-survey-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">📊</span>
                <span class="font-semibold">AI Survey Builder</span>
            </a>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
