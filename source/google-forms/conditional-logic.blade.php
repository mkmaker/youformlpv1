---
title: "Google Forms Conditional Logic: How to Add Branching & Skip Logic - Youform"
description: "Google Forms only supports basic section-based branching. Here's how to add real conditional logic, skip logic, and field-level branching — free, on any account."
image: "https://youform.com/assets/images/google-forms-conditional-logic-og.png"
---

@extends('_layouts.main')

@section('body')

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Does Google Forms have conditional logic?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Only in a very limited form. Google Forms has one branching feature called 'Go to section based on answer' that only works on multiple choice, dropdown, and linear scale questions. You can't apply conditional logic to text fields, checkboxes, file uploads, or any other question type. There's no field-level visibility logic, no AND/OR conditions, and no way to show or hide individual questions based on previous answers — only entire sections."
      }
    },
    {
      "@type": "Question",
      "name": "How do I add conditional logic to a Google Form?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Use 'Go to section based on answer.' Add section breaks in your form, then on a multiple choice, dropdown, or linear scale question, click the three-dot menu and choose 'Go to section based on answer.' For each option you can pick a target section. The respondent jumps between sections based on what they pick. That's the only form of conditional logic Google Forms supports — it doesn't work on other question types and can't hide individual fields."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between skip logic and branching logic?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Skip logic skips a respondent past questions that don't apply to them. Branching logic sends them down different paths based on their answers — like a decision tree. Both are forms of conditional logic. Google Forms supports a basic version of both via 'Go to section based on answer,' but only at the section level and only on three question types. Youform supports both, on every field, with multiple conditions per branch, on the free plan."
      }
    },
    {
      "@type": "Question",
      "name": "Can Google Forms hide questions based on previous answers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Google Forms can only jump to a different section based on an answer — it can't hide individual questions within a section, and it can't show extra questions conditionally. If you need a question to appear only when a specific earlier answer is given, you'll need a form builder with field-level conditional logic. Youform has this on the free plan."
      }
    },
    {
      "@type": "Question",
      "name": "Can you set conditional logic on a text question in Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Google Forms' 'Go to section based on answer' only works on multiple choice, dropdown, and linear scale questions. Short answer, paragraph, date, time, file upload, and checkbox questions can't trigger any branching. This is one of the most common reasons people switch from Google Forms — text-driven logic is a normal requirement for surveys, intake forms, and quizzes."
      }
    },
    {
      "@type": "Question",
      "name": "Is conditional logic free in Youform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Youform's conditional logic is included on the forever-free plan with unlimited forms and unlimited responses. You get field-level show/hide rules, branching, skip logic, multiple conditions per rule (AND/OR), and answer piping — all at no cost and with no submission cap."
      }
    },
    {
      "@type": "Question",
      "name": "How do I migrate my Google Form with conditional logic to Youform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Use Youform's free Google Forms converter at app.youform.com/googleform-to-youform. Paste your Google Forms URL and the converter rebuilds the form in Youform with questions, options, and your existing section-jump logic intact. From there you can add field-level conditional logic, multi-condition rules, and answer piping that Google Forms can't do."
      }
    },
    {
      "@type": "Question",
      "name": "What's the best Google Forms alternative for conditional logic?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Youform is the closest free alternative with serious conditional logic. It supports field-level show/hide rules, branching, skip logic, multi-condition rules with AND/OR, multiple endings, and answer piping — all on the free plan with unlimited responses. Typeform and Jotform have similar logic but cap free responses; Tally has logic but no animated multi-step flow. Youform is the only one combining unlimited free responses with full conditional logic."
      }
    }
  ]
}
</script>
@endpush

<!-- header -->
<div>
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-12">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <p class="inline-block bg-pale-violet border-2 border-black rounded-full px-4 py-1 text-sm font-medium mb-6">
                        Google Forms Conditional Logic Guide
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Google Forms Conditional Logic, Skip Logic & Branching — Explained
                    </h1>
                    <p class="text-base md:text-lg mt-6 max-w-3xl mx-auto text-gray-700">
                        Google Forms has one branching feature — "Go to section based on answer" — and it only works on three question types. Here's exactly what it can do, where it falls apart, and how to get real field-level conditional logic on the free plan.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="https://app.youform.com/register" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="#youform-solution" class="underline hover:no-underline text-gray-800">
                            or skip to the free logic builder ↓
                        </a>
                    </div>
                    <p class="text-xs text-gray-600 mt-4">Free forever · Field-level conditional logic · Unlimited responses</p>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Native section -->
<div class="bg-white py-20 -mt-10 lg:-mt-20" id="native-logic">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="pt-10 lg:pt-16">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Does Google Forms have conditional logic?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        <strong>Sort of.</strong> Google Forms has one branching feature called <strong>"Go to section based on answer."</strong> It lets you route respondents to different sections of the form based on a single multiple-choice, dropdown, or linear-scale answer. That's it. No field-level rules, no AND/OR conditions, no logic on text or checkbox fields.
                    </p>
                    <p class="text-lg text-gray-700 mb-8">
                        For a simple decision-tree survey it works. For anything more — a real intake form, a quiz with scored branches, a multi-step questionnaire that hides irrelevant fields — you'll hit the wall fast. Here's how to set up what's available, and where it breaks.
                    </p>

                    <h3 class="text-2xl font-bold mb-6 mt-10">How to add Google Forms conditional logic (the native way)</h3>
                    <ol class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8" role="list">
                        <li class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 shrink-0 bg-coral border-2 border-black rounded-full flex items-center justify-center font-bold text-lg">1</div>
                                <h4 class="text-lg font-bold">Add a section break</h4>
                            </div>
                            <p class="text-gray-700 text-sm">
                                In the form editor's right sidebar, click the <strong>"Add section"</strong> icon (looks like two horizontal lines). Each branch of your form needs to live in its own section.
                            </p>
                        </li>
                        <li class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 shrink-0 bg-coral border-2 border-black rounded-full flex items-center justify-center font-bold text-lg">2</div>
                                <h4 class="text-lg font-bold">Open the branching question</h4>
                            </div>
                            <p class="text-gray-700 text-sm">
                                Click on a multiple choice, dropdown, or linear scale question. Click the three-dot menu and choose <strong>"Go to section based on answer."</strong> This option is greyed out on every other question type.
                            </p>
                        </li>
                        <li class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 shrink-0 bg-coral border-2 border-black rounded-full flex items-center justify-center font-bold text-lg">3</div>
                                <h4 class="text-lg font-bold">Map each answer to a section</h4>
                            </div>
                            <p class="text-gray-700 text-sm">
                                Next to each answer option, pick a target section from the dropdown. Route to "Submit form" to end the form early, or to a specific section to branch the flow.
                            </p>
                        </li>
                        <li class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 shrink-0 bg-coral border-2 border-black rounded-full flex items-center justify-center font-bold text-lg">4</div>
                                <h4 class="text-lg font-bold">Set what each section does after</h4>
                            </div>
                            <p class="text-gray-700 text-sm">
                                At the bottom of each section, choose what happens next — continue, jump to a specific section, or submit. This is the only way to control the flow back together after a branch.
                            </p>
                        </li>
                    </ol>

                    <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                        <p class="font-semibold mb-2">⚠️ The catch</p>
                        <p class="text-gray-700">
                            Branching is locked to <strong>three question types</strong> (multiple choice, dropdown, linear scale) and operates at the <strong>section level only</strong>. You can't show or hide individual questions, can't trigger logic from a text answer, can't combine multiple conditions, and can't drive scoring or calculations from logic.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why the workarounds fall short -->
<div class="bg-gray-50 py-20" id="limitations">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Where Google Forms conditional logic falls apart</h2>
                <p class="text-lg text-gray-700 mb-8">
                    "Go to section based on answer" sounds powerful in the docs. In practice, you'll run into one of these walls within the first ten minutes of building any non-trivial form.
                </p>

                <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-coral border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🚫</span>
                        </div>
                        <dt class="text-xl font-bold mb-2">No field-level show/hide</dt>
                        <dd class="text-gray-700 text-sm">
                            You can jump to a different section, but you can't make a single question appear or disappear inside the current section. So "ask their company name only if they pick Business" forces you to spin up a whole new section just for one field.
                        </dd>
                    </div>

                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-vivid-yellow border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🔤</span>
                        </div>
                        <dt class="text-xl font-bold mb-2">No logic on text, checkbox, or upload fields</dt>
                        <dd class="text-gray-700 text-sm">
                            Branching only fires from multiple choice, dropdown, or linear scale. If your trigger answer comes from a short-answer field, checkbox group, date, or file upload, you can't branch on it — period.
                        </dd>
                    </div>

                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-pale-violet border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl font-bold">∧</span>
                        </div>
                        <dt class="text-xl font-bold mb-2">No multiple conditions (AND/OR)</dt>
                        <dd class="text-gray-700 text-sm">
                            Real-world rules look like "show this section if Country = US <em>AND</em> Plan = Enterprise." Google Forms can only do single-answer triggers. You can't combine conditions, can't reference earlier answers, can't build compound logic.
                        </dd>
                    </div>

                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-aquamarine border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🏗️</span>
                        </div>
                        <dt class="text-xl font-bold mb-2">Section bloat for simple flows</dt>
                        <dd class="text-gray-700 text-sm">
                            Because every branch needs its own section, a moderately conditional form turns into a maze of 8-12 sections you have to manually wire together. Reorder one and the routing breaks silently.
                        </dd>
                    </div>

                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-lavender-rose border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🧮</span>
                        </div>
                        <dt class="text-xl font-bold mb-2">No conditional scoring or calculations</dt>
                        <dd class="text-gray-700 text-sm">
                            Quiz mode has fixed scoring per answer. There's no way to do "if score &gt; 50, send to section B" or "calculate price = qty × $20 from earlier answer." Logic and math live in separate worlds.
                        </dd>
                    </div>

                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-medium-champagne border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🎯</span>
                        </div>
                        <dt class="text-xl font-bold mb-2">No multiple endings</dt>
                        <dd class="text-gray-700 text-sm">
                            Every Google Forms submission ends at the same confirmation message. You can't show a different thank-you page based on the path the respondent took.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>

<!-- Youform Solution -->
<div class="bg-amber-50 border-t-4 border-black py-20" id="youform-solution">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12 text-center mb-12 pb-10 border-b-2 border-black/10">
                    <div>
                        <p class="text-3xl font-bold text-aquamarine">90,000+</p>
                        <p class="text-sm text-gray-700">Users worldwide</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-aquamarine">10M+</p>
                        <p class="text-sm text-gray-700">Responses collected</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-aquamarine">100%</p>
                        <p class="text-sm text-gray-700">Free forever</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-aquamarine">4.8/5</p>
                        <p class="text-sm text-gray-700">User rating</p>
                    </div>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">A real conditional logic builder — free, on every field</h2>
                <p class="text-lg text-gray-700 mb-8">
                    <strong>Youform</strong> is a free form builder with field-level conditional logic baked in. Show or hide any question, branch to any section, score with calculations, route to multiple endings — all driven by rules you build with a clean visual builder, on every question type, with as many conditions as you need.
                </p>

                <h3 class="text-2xl font-bold mb-6">What you can build in Youform's logic editor</h3>
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-aquamarine border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">👁️</span>
                        </div>
                        <dt class="text-lg font-bold mb-2">Show/hide any single field</dt>
                        <dd class="text-gray-700 text-sm">
                            "Show 'Company name' only if 'Account type' = Business." No section workaround required.
                        </dd>
                    </div>
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-vivid-yellow border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🔀</span>
                        </div>
                        <dt class="text-lg font-bold mb-2">Branch on every question type</dt>
                        <dd class="text-gray-700 text-sm">
                            Text, dropdown, checkbox, date, file upload, scale, signature — all can drive logic.
                        </dd>
                    </div>
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-pale-violet border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl font-bold">&amp;</span>
                        </div>
                        <dt class="text-lg font-bold mb-2">Multi-condition rules (AND / OR)</dt>
                        <dd class="text-gray-700 text-sm">
                            "Show this section if Country = US <em>AND</em> Plan = Enterprise" — exactly the kind of rule Google Forms can't express.
                        </dd>
                    </div>
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-coral border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🧮</span>
                        </div>
                        <dt class="text-lg font-bold mb-2">Score &amp; calculations</dt>
                        <dd class="text-gray-700 text-sm">
                            Sum, multiply, or weight answers and branch on the result. Build real quizzes and price calculators inside the same form.
                        </dd>
                    </div>
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-lavender-rose border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">🎯</span>
                        </div>
                        <dt class="text-lg font-bold mb-2">Multiple endings</dt>
                        <dd class="text-gray-700 text-sm">
                            Show a different thank-you screen — or redirect to a different URL — depending on the path the respondent took.
                        </dd>
                    </div>
                    <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="w-12 h-12 bg-medium-champagne border-2 border-black rounded-md flex items-center justify-center mb-4">
                            <span class="text-2xl">💬</span>
                        </div>
                        <dt class="text-lg font-bold mb-2">Answer piping</dt>
                        <dd class="text-gray-700 text-sm">
                            Insert earlier answers into later question text. <span class="font-mono text-xs bg-gray-100 px-1.5 py-0.5 rounded border border-gray-300">Hi @{{first_name}}, ready?</span> — personalisation Google Forms can't do.
                        </dd>
                    </div>
                </dl>
                <p class="text-sm text-gray-500 mb-10 italic">
                    Everything above is on the <a href="/pricing/" class="underline hover:no-underline">forever-free plan</a> with unlimited forms and unlimited responses. No paywall on logic.
                </p>

                <figure class="mb-10">
                    <img src="/assets/images/logic-builder.png" alt="Youform's visual conditional logic builder showing a form with branching logic — question 3 routes to either 'You chose correctly' or 'That is incorrect' before rejoining the main flow." loading="lazy" class="w-full rounded-xl border-2 border-black drop-shadow-6xl">
                    <figcaption class="text-sm text-gray-600 mt-3 text-center italic">
                        Youform's visual logic builder — every node is a field, every arrow is a rule. Branch, skip, and rejoin on any question type.
                    </figcaption>
                </figure>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-6">What you get vs. Google Forms' "Go to section"</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Field-level, not just section-level</strong> — hide one question without spinning up a whole new section.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Works on every question type</strong> — text, checkbox, date, file upload, scale, signature can all trigger logic.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>AND/OR multi-condition rules</strong> — compose real-world logic that Google Forms can't express.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Score-driven branching</strong> — route to different sections (or endings) based on a calculated score.</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Multiple endings + redirect</strong> — different thank-you screens or URLs per branch. (Redirect on Pro.)</div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <div><strong>Unlimited responses on the free plan</strong> — no submission cap on logic-driven forms.</div>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <p class="text-sm text-gray-600 mt-3">Conditional logic free on every plan. No credit card required.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Convert your Google Form -->
<div class="bg-aquamarine py-20" id="convert">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <span class="inline-block bg-white border-2 border-black rounded-full px-3 py-1 text-sm font-bold mb-4">One-click import</span>
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">Already have a Google Form? Bring it over.</h2>
                <p class="text-lg mb-6">
                    You don't have to rebuild from scratch to add real conditional logic. Paste your Google Forms URL into Youform's free converter — questions, options, multiple choice, and existing section-jump logic rebuild in seconds. Then layer field-level rules on top.
                </p>
                <ul class="space-y-2 mb-8 text-gray-900">
                    <li class="flex items-start"><span class="mr-2">✅</span> Preserves your existing sections and section-jump branches</li>
                    <li class="flex items-start"><span class="mr-2">✅</span> Carries over every question type</li>
                    <li class="flex items-start"><span class="mr-2">✅</span> Free — no signup required to try the converter</li>
                    <li class="flex items-start"><span class="mr-2">✅</span> Add field-level logic, multi-condition rules, scoring after import</li>
                </ul>
                <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                    Convert your Google Form →
                </a>
            </div>
            <div class="lg:col-span-5">
                <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl p-6">
                    <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Paste a Google Forms URL</p>
                    <div class="bg-gray-50 border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-600 font-mono mb-4 truncate">
                        docs.google.com/forms/d/e/1FAIpQLSe...
                    </div>
                    <div class="flex items-center text-sm text-gray-700 mb-2">
                        <span class="text-aquamarine font-bold mr-2">→</span> Rebuilt in Youform
                    </div>
                    <div class="flex items-center text-sm text-gray-700 mb-2">
                        <span class="text-aquamarine font-bold mr-2">→</span> Add field-level rules
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <span class="text-aquamarine font-bold mr-2">→</span> Publish with real logic
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison Table -->
<div class="bg-white py-20" id="comparison">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
            Google Forms conditional logic vs. Youform
        </h2>
        <div class="max-w-5xl mx-auto overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
            <table class="min-w-full text-left text-sm md:text-base">
                <thead class="bg-gray-100 border-b-2 border-black">
                    <tr>
                        <th class="px-6 py-4"></th>
                        <th class="px-6 py-4 text-center">Google Forms<br><span class="text-xs font-normal text-gray-500">(Go to section)</span></th>
                        <th class="px-6 py-4 text-center bg-amber-50">Youform</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Field-level show/hide</td>
                        <td class="px-6 py-4 text-center">❌ Section level only</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Works on every question type</td>
                        <td class="px-6 py-4 text-center">❌ Only MC, dropdown, scale</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Multi-condition (AND/OR)</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Score-driven branching</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Multiple endings</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Answer piping in question text</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Calculations between fields</td>
                        <td class="px-6 py-4 text-center">❌ (Quiz scoring only)</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold bg-gray-50">Cost</td>
                        <td class="px-6 py-4 text-center">Free</td>
                        <td class="px-6 py-4 text-center bg-amber-50"><strong>Free</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('_partials.testimonials-carousel')

<!-- FAQ Section -->
<div class="bg-amber-50 py-20" id="faq">
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
                                <p class="text-black font-medium flex-grow">Does Google Forms have conditional logic?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Only in a very limited form. Google Forms has one branching feature called "Go to section based on answer" that only works on multiple choice, dropdown, and linear scale questions. You can't apply conditional logic to text fields, checkboxes, file uploads, or any other question type. There's no field-level visibility logic, no AND/OR conditions, and no way to show or hide individual questions based on previous answers — only entire sections. <a href="#youform-solution" class="text-aquamarine hover:underline font-semibold">Youform has full field-level conditional logic on the free plan</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How do I add conditional logic to a Google Form?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Use "Go to section based on answer." Add section breaks in your form, then on a multiple choice, dropdown, or linear scale question, click the three-dot menu and choose "Go to section based on answer." For each option you can pick a target section. The respondent jumps between sections based on what they pick. That's the only form of conditional logic Google Forms supports — it doesn't work on other question types and can't hide individual fields.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the difference between skip logic and branching logic?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Skip logic skips a respondent past questions that don't apply to them. Branching logic sends them down different paths based on their answers — like a decision tree. Both are forms of conditional logic. Google Forms supports a basic version of both via "Go to section based on answer," but only at the section level and only on three question types. Youform supports both, on every field, with multiple conditions per branch, on the free plan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can Google Forms hide questions based on previous answers?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    No. Google Forms can only jump to a different section based on an answer — it can't hide individual questions within a section, and it can't show extra questions conditionally. If you need a question to appear only when a specific earlier answer is given, you'll need a form builder with field-level conditional logic. <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">Youform has this on the free plan</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can you set conditional logic on a text question in Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    No. Google Forms' "Go to section based on answer" only works on multiple choice, dropdown, and linear scale questions. Short answer, paragraph, date, time, file upload, and checkbox questions can't trigger any branching. This is one of the most common reasons people switch from Google Forms — text-driven logic is a normal requirement for surveys, intake forms, and quizzes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is conditional logic free in Youform?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Yes. Youform's conditional logic is included on the <a href="/pricing/" class="text-aquamarine hover:underline font-semibold">forever-free plan</a> with unlimited forms and unlimited responses. You get field-level show/hide rules, branching, skip logic, multiple conditions per rule (AND/OR), and answer piping — all at no cost and with no submission cap.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How do I migrate my Google Form with conditional logic to Youform?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Use Youform's free <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="text-aquamarine hover:underline font-semibold">Google Forms converter</a>. Paste your Google Forms URL and the converter rebuilds the form in Youform with questions, options, and your existing section-jump logic intact. From there you can add field-level conditional logic, multi-condition rules, and answer piping that Google Forms can't do.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What's the best Google Forms alternative for conditional logic?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">Youform</a> is the closest free alternative with serious conditional logic. It supports field-level show/hide rules, branching, skip logic, multi-condition rules with AND/OR, multiple endings, and answer piping — all on the free plan with unlimited responses. Typeform and Jotform have similar logic but cap free responses; Tally has logic but no animated multi-step flow. Youform is the only one combining unlimited free responses with full conditional logic. See also the <a href="/google-forms-alternative/" class="text-aquamarine hover:underline font-semibold">full Google Forms alternative comparison</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="bg-aquamarine py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-6">
            Real conditional logic, on the free plan
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Field-level show/hide, multi-condition rules, scoring, multiple endings, answer piping. Build the form, drop in the logic, publish. No paywall on rules.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
            Create free account
        </a>
        <p class="text-sm text-gray-700 mt-4">Free forever · Unlimited responses · No credit card required</p>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', ['prompt' => 'I+need+a+form+with+field-level+conditional+logic+and+branching'])

@include('partials.footer')

@endsection
