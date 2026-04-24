---
title: "Double-Barreled Questions: 20 Examples and How to Fix Them"
description: "Learn what double-barreled questions are, see 20 real examples from real surveys, and discover how to identify and fix them so your data is actually usable."
author: "Abhishek"
date: "2026-04-24"
---

@extends('_layouts.main')

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Double-Barreled Questions: 20 Examples and How to Fix Them",
  "description": "Learn what double-barreled questions are, see 20 real examples from real surveys, and discover how to identify and fix them so your data is actually usable.",
  "image": "https://youform.com/assets/images/youform-builder.png",
  "author": {
    "@type": "Person",
    "name": "Abhishek",
    "url": "https://youform.com/about/"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Youform",
    "logo": {
      "@type": "ImageObject",
      "url": "https://youform.com/assets/images/youform-logo.png"
    }
  },
  "datePublished": "2026-04-24",
  "dateModified": "2026-04-24",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://youform.com/blog/double-barreled-questions/"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a double-barreled question?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A double-barreled question is a single survey question that asks about two or more separate things at once while only allowing one answer. Because the respondent can't answer each part independently, you can't tell which part their answer refers to and the data becomes uninterpretable."
      }
    },
    {
      "@type": "Question",
      "name": "What is an example of a double-barreled question?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "\"How satisfied are you with the quality and price of our product?\" is a classic double-barreled question. A respondent might love the quality but hate the price — there's no way to express that with a single 1–5 rating. The fix is to split it into two separate questions, one for quality and one for price."
      }
    },
    {
      "@type": "Question",
      "name": "How do I spot a double-barreled question in my survey?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Look for the conjunctions 'and', 'or', 'but', 'with', and 'as well as'. Then ask whether a respondent could honestly say yes to one half and no to the other. If yes, you've conflated two things and the question is double-barreled."
      }
    },
    {
      "@type": "Question",
      "name": "How do you fix a double-barreled question?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There are three common fixes: (1) split the question into two separate questions back-to-back, (2) drop the second concept if you don't actually need it, or (3) use a matrix or grid question with a row for each attribute and a shared rating scale."
      }
    },
    {
      "@type": "Question",
      "name": "Why are double-barreled questions bad for survey data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Because the response is uninterpretable. A 4-out-of-5 rating on 'quality and price' could mean great quality and okay price, okay quality and great price, or any combination. Averages look reasonable but mask the real opinions, which means you'll act on the wrong signal."
      }
    },
    {
      "@type": "Question",
      "name": "Are double-barreled questions a type of leading question?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "They're related but distinct. A leading question pushes the respondent toward a specific answer through wording. A double-barreled question asks about two things at once. A question can be both — for example, 'Do you find our friendly support fast and helpful?' is double-barreled (fast + helpful) and leading (the adjective 'friendly' presumes an answer)."
      }
    }
  ]
}
</script>
@endpush

@section('body')

<!-- Navbar -->
<div class="bg-white">
    @include('partials.nav')
</div>

<!-- Back to blog -->
<div class="bg-white pt-6">
    <div class="max-w-3xl mx-auto px-6 sm:px-10 md:px-20">
        <a href="/blog" class="text-sm text-gray-400 hover:text-gray-600 transition-colors block text-center">&larr; Back to blog</a>
    </div>
</div>

<!-- Hero section -->
<div class="bg-white pt-6 pb-10">
    <div class="max-w-3xl mx-auto px-6 sm:px-10 md:px-20 text-center">
        <span class="inline-block text-xs font-semibold uppercase tracking-wider text-coral bg-coral/10 px-3 py-1 rounded-full mb-5">Survey Design</span>
        <h1 class="text-3xl sm:text-5xl font-bold leading-tight text-balance">
            Double-Barreled Questions: 20 Examples and How to Fix Them
        </h1>
        <p class="text-lg sm:text-xl mt-6 text-gray-600 max-w-2xl mx-auto text-pretty">
            One survey mistake quietly ruins more data than any other. Here's how to spot it &mdash; and the exact fix for each form it takes.
        </p>
        <div class="mt-6 text-sm text-gray-500 flex items-center justify-center gap-2">
            <span>By Abhishek</span>
            <span>&#183;</span>
            <span>April 24, 2026</span>
            <span>&#183;</span>
            <span>9 min read</span>
        </div>
        @include('partials.blog-share')
    </div>
</div>

<!-- Main Content -->
<div class="bg-white pb-20">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 md:px-20">
        <div class="max-w-3xl mx-auto">

            <!-- TL;DR callout -->
            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-medium-champagne p-6 sm:p-7 mb-10">
                <p class="text-xs font-bold uppercase tracking-wider mb-2">TL;DR</p>
                <p class="text-base sm:text-lg leading-relaxed m-0">
                    A double-barreled question asks about two things at once but only allows one answer. The fix is almost always to split it into two questions. This guide gives you 20 real examples (with fixes), a 60-second checklist to spot them in your own surveys, and the related survey errors that hurt your data the same way.
                </p>
            </div>

            <!-- Table of Contents -->
            <nav aria-label="Table of contents" class="rounded-xl border border-gray-200 bg-gray-50 p-6 mb-12">
                <p class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-3">In this guide</p>
                <ol class="list-decimal list-inside space-y-2 text-base text-gray-800 marker:text-gray-400 marker:font-semibold">
                    <li><a href="#what-are-double-barreled-questions" class="hover:text-coral underline-offset-2 hover:underline">What are double-barreled questions?</a></li>
                    <li><a href="#why-they-hurt-data-quality" class="hover:text-coral underline-offset-2 hover:underline">Why they hurt your data quality</a></li>
                    <li><a href="#examples" class="hover:text-coral underline-offset-2 hover:underline">20 examples (with fixes for each)</a></li>
                    <li><a href="#how-to-identify" class="hover:text-coral underline-offset-2 hover:underline">How to identify them in your surveys</a></li>
                    <li><a href="#how-to-fix" class="hover:text-coral underline-offset-2 hover:underline">How to fix them &mdash; 3 patterns</a></li>
                    <li><a href="#other-mistakes" class="hover:text-coral underline-offset-2 hover:underline">Other survey question mistakes to avoid</a></li>
                    <li><a href="#checklist" class="hover:text-coral underline-offset-2 hover:underline">Pre-send checklist</a></li>
                    <li><a href="#faq" class="hover:text-coral underline-offset-2 hover:underline">FAQ</a></li>
                </ol>
            </nav>

            <!-- Article body -->
            <article class="text-gray-800" style="font-size: 1.125rem; line-height: 1.85;">

                <p class="mb-6">You wrote a survey, sent it out, got a stack of responses &mdash; and now you can't actually act on the data. The numbers contradict each other. The verbatim feedback doesn't match the ratings. Half the answers feel uninterpretable.</p>

                <p class="mb-6">The most common culprit is the <strong>double-barreled question</strong>. It's the single biggest reason well-meaning surveys produce data nobody can trust.</p>

                <p class="mb-6">This guide covers what double-barreled questions are, 20 real examples (with fixes), how to spot them in your own surveys, why they quietly destroy your data quality, and the related survey errors that cause similar damage.</p>

                <h2 id="what-are-double-barreled-questions" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">What are double-barreled questions?</h2>

                <p class="mb-5">A double-barreled question is a single survey question that asks about <strong>two or more separate things at once</strong> while only allowing one answer. Because the respondent can't answer each part independently, you have no way of knowing which part their answer refers to.</p>

                <p class="mb-5">The textbook definition: a double-barreled question (sometimes called a "compound question" or "two-in-one question") forces respondents to give a single response to two distinct questions. The data you get back conflates them.</p>

                <p class="mb-6">The easiest tell is the word <strong>"and"</strong>. Here's the canonical example:</p>

                <!-- Example card -->
                <div class="my-7 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                    <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                        <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; The bad question</p>
                        <p class="text-lg text-gray-900 m-0">"How satisfied are you with the quality and price of our product?"</p>
                    </div>
                    <div class="bg-amber-50 px-5 py-4 sm:px-6 sm:py-5">
                        <p class="text-base text-gray-700 m-0">What if I love the quality but hate the price? There's no way to express that with a single 1&ndash;5 rating.</p>
                    </div>
                </div>

                <p class="mb-6">It can also hide behind "or," "with," "as well as," "but," and prepositional phrases that smuggle in a second concept &mdash; even leading adjectives like "friendly" or "fast" before the noun being rated.</p>

                <h2 id="why-they-hurt-data-quality" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">Why double-barreled questions hurt your data quality</h2>

                <p class="mb-6">Double-barreled questions look harmless. They're efficient &mdash; one question instead of two! &mdash; and respondents will dutifully answer them. The problem is what happens to the data:</p>

                <ul class="space-y-3 mb-6 list-disc pl-6 marker:text-coral">
                    <li><strong>The response is uninterpretable.</strong> A "4 out of 5" on "quality and price" could mean great quality + okay price, or okay quality + great price, or any other combination.</li>
                    <li><strong>You can't act on it.</strong> If support is the problem but the question lumped support with onboarding, you'll fix the wrong thing.</li>
                    <li><strong>Averages lie.</strong> Mean scores look reasonable while masking polarized opinions on each component.</li>
                    <li><strong>Drop-off increases.</strong> When people can't answer honestly, they pick the middle option, abandon the survey, or give answers they don't believe.</li>
                    <li><strong>The respondent gets biased.</strong> Pairing a positive with a negative ("Is our checkout fast and reliable?") nudges answers toward the more salient half.</li>
                </ul>

                <p class="mb-6">The cost is invisible. You won't see "I couldn't answer this honestly" in your dashboard &mdash; you'll just see a number that everyone trusts and nobody can act on.</p>

                <h2 id="examples" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">20 examples of double-barreled questions (and the fix for each)</h2>

                <p class="mb-8">Here are 20 double-barreled questions pulled from real customer feedback, employee, product, healthcare, education, and market research surveys &mdash; with the fix for each. Read through them and see how often you've written one yourself.</p>

                <h3 id="examples-csat" class="scroll-mt-24 text-xl sm:text-2xl font-semibold mt-10 mb-4">Customer satisfaction surveys</h3>

                @foreach([
                    ['n' => 1, 'bad' => 'How satisfied are you with the quality and price of our product?', 'fix' => 'Split into two questions &mdash; "How satisfied are you with the quality?" and "How satisfied are you with the price?"'],
                    ['n' => 2, 'bad' => 'How would you rate our customer service and response time?', 'fix' => '"How would you rate the helpfulness of our customer service?" + "How would you rate our response time?"'],
                    ['n' => 3, 'bad' => 'Did you find our website easy to navigate and visually appealing?', 'fix' => 'Ask navigation and aesthetics separately. They\'re judged by different criteria.'],
                    ['n' => 4, 'bad' => 'Was the delivery fast and the packaging undamaged?', 'fix' => '"Was the delivery fast?" + "Did the package arrive undamaged?" Logistics and fulfillment are different teams.'],
                    ['n' => 5, 'bad' => 'How likely are you to recommend us based on our pricing and product quality?', 'fix' => 'Use a clean NPS question ("How likely are you to recommend us?") and ask about price and quality separately as drivers.'],
                ] as $ex)
                    <div class="my-6 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                        <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                            <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; Example {{ $ex['n'] }} &mdash; don't ask this</p>
                            <p class="text-lg text-gray-900 m-0">"{{ $ex['bad'] }}"</p>
                        </div>
                        <div class="bg-emerald-50 px-5 py-4 sm:px-6 sm:py-5">
                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">&#10004; Fix</p>
                            <p class="text-base text-gray-800 m-0">{!! $ex['fix'] !!}</p>
                        </div>
                    </div>
                @endforeach

                <h3 id="examples-employee" class="scroll-mt-24 text-xl sm:text-2xl font-semibold mt-10 mb-4">Employee &amp; HR surveys</h3>

                @foreach([
                    ['n' => 6, 'bad' => 'Do you feel valued and fairly compensated by the company?', 'fix' => 'Feeling valued is cultural; compensation is structural. Ask both, separately.'],
                    ['n' => 7, 'bad' => 'Is your manager supportive and clear in their communication?', 'fix' => 'A manager can be warm but vague, or sharp but cold. Split into "supportive" and "clear communicator."'],
                    ['n' => 8, 'bad' => 'Do you have the tools and training you need to do your job?', 'fix' => '"Do you have the tools you need?" + "Do you have the training you need?" These get fixed by different budgets.'],
                    ['n' => 9, 'bad' => 'Do you find your work meaningful and challenging?', 'fix' => 'Plenty of jobs are meaningful but easy &mdash; or challenging but pointless. Ask each on its own scale.'],
                    ['n' => 10, 'bad' => 'Are you satisfied with your benefits and PTO policy?', 'fix' => 'Benefits (health, retirement, perks) and PTO are separate concepts. Split them.'],
                ] as $ex)
                    <div class="my-6 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                        <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                            <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; Example {{ $ex['n'] }} &mdash; don't ask this</p>
                            <p class="text-lg text-gray-900 m-0">"{{ $ex['bad'] }}"</p>
                        </div>
                        <div class="bg-emerald-50 px-5 py-4 sm:px-6 sm:py-5">
                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">&#10004; Fix</p>
                            <p class="text-base text-gray-800 m-0">{!! $ex['fix'] !!}</p>
                        </div>
                    </div>
                @endforeach

                <!-- Mid-article CTA -->
                <div class="my-12 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-aquamarine/20 p-7 sm:p-8 text-center">
                    <p class="text-xl sm:text-2xl font-bold mb-2 text-balance">Want a survey tool that makes splitting questions easy?</p>
                    <p class="text-base text-gray-700 mb-5 max-w-xl mx-auto">Youform has matrix questions, conditional logic, partial submissions, and 300+ templates already structured to avoid double-barreled mistakes.</p>
                    <a href="https://app.youform.com/register" class="inline-block bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all px-7 py-2 text-black font-semibold rounded-md no-underline">
                        Try Youform free
                    </a>
                </div>

                <h3 id="examples-product" class="scroll-mt-24 text-xl sm:text-2xl font-semibold mt-10 mb-4">Product &amp; UX surveys</h3>

                @foreach([
                    ['n' => 11, 'bad' => 'Is the new feature easy to use and useful?', 'fix' => 'Usability and value are independent. A feature can be intuitive and pointless. Ask both.'],
                    ['n' => 12, 'bad' => 'Do you find the app fast and reliable?', 'fix' => 'Speed and reliability often diverge &mdash; an app can be fast 99% of the time and crash on the 1% that matters.'],
                    ['n' => 13, 'bad' => 'Was the onboarding process simple and informative?', 'fix' => '"Was the onboarding easy to complete?" + "Did the onboarding give you the information you needed?"'],
                    ['n' => 14, 'bad' => 'Are our notifications timely and relevant?', 'fix' => 'Timing and relevance are different problems. A timely notification about something irrelevant is worse than no notification.'],
                    ['n' => 15, 'bad' => 'How easy was it to sign up and start using the product?', 'fix' => 'Signup friction and time-to-first-value are separate funnel steps. Measure them independently.'],
                ] as $ex)
                    <div class="my-6 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                        <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                            <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; Example {{ $ex['n'] }} &mdash; don't ask this</p>
                            <p class="text-lg text-gray-900 m-0">"{{ $ex['bad'] }}"</p>
                        </div>
                        <div class="bg-emerald-50 px-5 py-4 sm:px-6 sm:py-5">
                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">&#10004; Fix</p>
                            <p class="text-base text-gray-800 m-0">{!! $ex['fix'] !!}</p>
                        </div>
                    </div>
                @endforeach

                <h3 id="examples-healthcare" class="scroll-mt-24 text-xl sm:text-2xl font-semibold mt-10 mb-4">Healthcare &amp; patient surveys</h3>

                @foreach([
                    ['n' => 16, 'bad' => 'Did your doctor listen carefully and explain things clearly?', 'fix' => 'Listening and explaining are distinct skills. A doctor can do one well and the other poorly.'],
                    ['n' => 17, 'bad' => 'Was the facility clean and the staff friendly?', 'fix' => 'Facilities and people are managed by different departments. Split.'],
                ] as $ex)
                    <div class="my-6 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                        <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                            <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; Example {{ $ex['n'] }} &mdash; don't ask this</p>
                            <p class="text-lg text-gray-900 m-0">"{{ $ex['bad'] }}"</p>
                        </div>
                        <div class="bg-emerald-50 px-5 py-4 sm:px-6 sm:py-5">
                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">&#10004; Fix</p>
                            <p class="text-base text-gray-800 m-0">{!! $ex['fix'] !!}</p>
                        </div>
                    </div>
                @endforeach

                <h3 id="examples-education" class="scroll-mt-24 text-xl sm:text-2xl font-semibold mt-10 mb-4">Education &amp; course feedback</h3>

                @foreach([
                    ['n' => 18, 'bad' => 'Was the course content relevant and well-structured?', 'fix' => 'Content can be relevant but disorganized, or beautifully structured but off-topic. Ask both.'],
                    ['n' => 19, 'bad' => 'Was the instructor knowledgeable and engaging?', 'fix' => 'Expertise and delivery are different. Many experts are dull; many performers are shallow.'],
                ] as $ex)
                    <div class="my-6 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                        <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                            <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; Example {{ $ex['n'] }} &mdash; don't ask this</p>
                            <p class="text-lg text-gray-900 m-0">"{{ $ex['bad'] }}"</p>
                        </div>
                        <div class="bg-emerald-50 px-5 py-4 sm:px-6 sm:py-5">
                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">&#10004; Fix</p>
                            <p class="text-base text-gray-800 m-0">{!! $ex['fix'] !!}</p>
                        </div>
                    </div>
                @endforeach

                <h3 id="examples-research" class="scroll-mt-24 text-xl sm:text-2xl font-semibold mt-10 mb-4">Public opinion &amp; market research</h3>

                <div class="my-6 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] overflow-hidden bg-white">
                    <div class="bg-red-50 px-5 py-4 sm:px-6 sm:py-5 border-b-2 border-black">
                        <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-2">&#10006; Example 20 &mdash; don't ask this</p>
                        <p class="text-lg text-gray-900 m-0">"Do you support raising taxes and increasing public spending?"</p>
                    </div>
                    <div class="bg-emerald-50 px-5 py-4 sm:px-6 sm:py-5">
                        <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-2">&#10004; Fix</p>
                        <p class="text-base text-gray-800 m-0">A respondent might support one and oppose the other. Asking together produces meaningless data &mdash; ask each policy on its own.</p>
                    </div>
                </div>

                <h2 id="how-to-identify" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">How to identify double-barreled questions in your surveys</h2>

                <p class="mb-6">Before sending a survey, run every question through this 60-second checklist:</p>

                <ol class="space-y-3 mb-6 list-decimal pl-6 marker:text-coral marker:font-semibold">
                    <li><strong>Look for "and," "or," "as well as," "but," "with."</strong> Any of these conjunctions is a yellow flag. Most double-barreled questions contain one.</li>
                    <li><strong>Try the "split test."</strong> Can you rewrite the question as two separate questions without losing meaning? If yes, it's double-barreled.</li>
                    <li><strong>Imagine answering with disagreement.</strong> Could a respondent honestly say yes to one half and no to the other? If yes, you've conflated two things.</li>
                    <li><strong>Check the rating scale.</strong> If the question covers two attributes but offers one 1&ndash;5 scale, you can't tell which attribute the rating maps to.</li>
                    <li><strong>Read it out loud.</strong> Double-barreled questions feel slightly awkward when spoken &mdash; you'll often pause naturally between the two parts.</li>
                </ol>

                <p class="mb-6">Watch for the sneaky ones too. <em>"How satisfied are you with our friendly customer service?"</em> hides a leading adjective ("friendly") that's actually a second claim the respondent is asked to endorse.</p>

                <h2 id="how-to-fix" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">How to fix double-barreled questions &mdash; 3 patterns</h2>

                <p class="mb-6">The fix is almost always the same: <strong>split the question into two</strong>. But there are three patterns worth knowing.</p>

                <h3 class="text-xl sm:text-2xl font-semibold mt-8 mb-3">1. Split into separate questions (the default)</h3>
                <p class="mb-6">Take "How would you rate our pricing and product quality?" and turn it into two scaled questions back-to-back. This is the cleanest, most defensible fix and is correct 80% of the time.</p>

                <h3 class="text-xl sm:text-2xl font-semibold mt-8 mb-3">2. Pick the one that matters and drop the other</h3>
                <p class="mb-6">Sometimes the second concept doesn't actually need measuring &mdash; you only added it because it felt related. If you only care about pricing, ask only about pricing. Less is more.</p>

                <h3 class="text-xl sm:text-2xl font-semibold mt-8 mb-3">3. Use a matrix or grid question</h3>
                <p class="mb-6">If you're asking about multiple attributes of the same thing (e.g., rate our product on quality, price, support, design), use a single matrix question with rows for each attribute and a shared rating scale. This keeps the survey short while preserving the ability to analyze each attribute independently.</p>

                <p class="mb-6">Whatever you do, don't compromise by hedging the wording (<em>"How satisfied are you overall with our pricing-and-quality combination?"</em>). Vague phrasing doesn't fix the underlying problem &mdash; it just hides it under a softer label.</p>

                <h2 id="other-mistakes" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">Other survey question mistakes to avoid</h2>

                <p class="mb-6">Double-barreled questions aren't the only way to wreck your data. While you're auditing, watch for these four cousins:</p>

                <div class="space-y-6 mb-8">
                    <div class="rounded-xl border border-gray-200 p-6 bg-white">
                        <h3 class="text-lg sm:text-xl font-bold mb-2 mt-0">Leading questions</h3>
                        <p class="text-base text-gray-700 mb-3 m-0">Phrasing that nudges the respondent toward a specific answer. Often the giveaway is a value-loaded adjective.</p>
                        <p class="text-sm text-gray-600 m-0"><strong class="text-red-700">Bad:</strong> "How much did you enjoy our amazing new dashboard?" <span class="mx-1">&middot;</span> <strong class="text-emerald-700">Fix:</strong> "How would you rate the new dashboard?"</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 p-6 bg-white">
                        <h3 class="text-lg sm:text-xl font-bold mb-2 mt-0">Loaded questions</h3>
                        <p class="text-base text-gray-700 mb-3 m-0">Built on an unstated assumption. The respondent has to either accept the assumption or refuse the question.</p>
                        <p class="text-sm text-gray-600 m-0"><strong class="text-red-700">Bad:</strong> "When did you stop using our competitor's clunky tool?" <span class="mx-1">&middot;</span> <strong class="text-emerald-700">Fix:</strong> "Have you used another tool before this one? If yes, which?"</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 p-6 bg-white">
                        <h3 class="text-lg sm:text-xl font-bold mb-2 mt-0">Ambiguous questions</h3>
                        <p class="text-base text-gray-700 mb-3 m-0">Vague enough that two respondents can interpret the same question completely differently. Watch for fuzzy words like "regularly," "often," or "recently."</p>
                        <p class="text-sm text-gray-600 m-0"><strong class="text-red-700">Bad:</strong> "Do you use the app often?" <span class="mx-1">&middot;</span> <strong class="text-emerald-700">Fix:</strong> "How many times have you opened the app in the last 7 days?"</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 p-6 bg-white">
                        <h3 class="text-lg sm:text-xl font-bold mb-2 mt-0">Double-negative questions</h3>
                        <p class="text-base text-gray-700 mb-3 m-0">Two negatives in one sentence. Respondents have to mentally untangle them &mdash; many will just guess.</p>
                        <p class="text-sm text-gray-600 m-0"><strong class="text-red-700">Bad:</strong> "Do you disagree that the new pricing isn't fair?" <span class="mx-1">&middot;</span> <strong class="text-emerald-700">Fix:</strong> "Do you think the new pricing is fair?"</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 p-6 bg-white">
                        <h3 class="text-lg sm:text-xl font-bold mb-2 mt-0">Absolutes (always / never)</h3>
                        <p class="text-base text-gray-700 mb-3 m-0">Words like "always," "never," and "every" force a black-or-white answer where reality is grey. Most people will reject them on principle.</p>
                        <p class="text-sm text-gray-600 m-0"><strong class="text-red-700">Bad:</strong> "Do you always read every email we send?" <span class="mx-1">&middot;</span> <strong class="text-emerald-700">Fix:</strong> "How often do you read our emails?" with a frequency scale.</p>
                    </div>
                </div>

                <h2 id="checklist" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">A pre-send checklist before your next survey</h2>

                <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-pale-violet/30 p-6 sm:p-7 mb-6">
                    <ul class="space-y-3 m-0">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex shrink-0 size-5 items-center justify-center rounded border-2 border-black bg-white text-xs font-bold">&#10004;</span>
                            <span>Every question asks about exactly one thing.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex shrink-0 size-5 items-center justify-center rounded border-2 border-black bg-white text-xs font-bold">&#10004;</span>
                            <span>No question contains "and," "or," "but," "as well as" linking two distinct concepts.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex shrink-0 size-5 items-center justify-center rounded border-2 border-black bg-white text-xs font-bold">&#10004;</span>
                            <span>No leading adjectives slipped into the question stem.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex shrink-0 size-5 items-center justify-center rounded border-2 border-black bg-white text-xs font-bold">&#10004;</span>
                            <span>Every rating scale maps cleanly to a single attribute.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex shrink-0 size-5 items-center justify-center rounded border-2 border-black bg-white text-xs font-bold">&#10004;</span>
                            <span>You ran a colleague through it &mdash; they didn't pause or ask "which part?" on any question.</span>
                        </li>
                    </ul>
                </div>

                <p class="mb-6">If you can check all five boxes, your data will tell you something you can actually act on.</p>

                <h2 id="faq" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-6 text-balance">Frequently asked questions</h2>

                <div class="space-y-4 mb-8">
                    <details class="group rounded-xl border border-gray-200 bg-white open:border-coral transition-colors">
                        <summary class="cursor-pointer list-none px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-start gap-4 font-semibold text-base sm:text-lg">
                            <span>What is a double-barreled question?</span>
                            <span class="shrink-0 mt-1 transition-transform group-open:rotate-45 text-coral text-2xl leading-none">+</span>
                        </summary>
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-gray-700">
                            A double-barreled question is a single survey question that asks about two or more separate things at once while only allowing one answer. The respondent can't answer each part independently, so the data conflates them and becomes uninterpretable.
                        </div>
                    </details>

                    <details class="group rounded-xl border border-gray-200 bg-white open:border-coral transition-colors">
                        <summary class="cursor-pointer list-none px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-start gap-4 font-semibold text-base sm:text-lg">
                            <span>What is an example of a double-barreled question?</span>
                            <span class="shrink-0 mt-1 transition-transform group-open:rotate-45 text-coral text-2xl leading-none">+</span>
                        </summary>
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-gray-700">
                            "How satisfied are you with the quality and price of our product?" is a classic double-barreled question. A respondent might love the quality but hate the price &mdash; there's no way to express that with a single 1&ndash;5 rating. The fix is to split it into two separate questions, one for quality and one for price.
                        </div>
                    </details>

                    <details class="group rounded-xl border border-gray-200 bg-white open:border-coral transition-colors">
                        <summary class="cursor-pointer list-none px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-start gap-4 font-semibold text-base sm:text-lg">
                            <span>How do I spot a double-barreled question in my survey?</span>
                            <span class="shrink-0 mt-1 transition-transform group-open:rotate-45 text-coral text-2xl leading-none">+</span>
                        </summary>
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-gray-700">
                            Look for the conjunctions "and," "or," "but," "with," and "as well as." Then ask whether a respondent could honestly say yes to one half and no to the other. If yes, you've conflated two things and the question is double-barreled.
                        </div>
                    </details>

                    <details class="group rounded-xl border border-gray-200 bg-white open:border-coral transition-colors">
                        <summary class="cursor-pointer list-none px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-start gap-4 font-semibold text-base sm:text-lg">
                            <span>How do you fix a double-barreled question?</span>
                            <span class="shrink-0 mt-1 transition-transform group-open:rotate-45 text-coral text-2xl leading-none">+</span>
                        </summary>
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-gray-700">
                            There are three common fixes: (1) split the question into two separate questions back-to-back, (2) drop the second concept if you don't actually need it, or (3) use a matrix or grid question with a row for each attribute and a shared rating scale.
                        </div>
                    </details>

                    <details class="group rounded-xl border border-gray-200 bg-white open:border-coral transition-colors">
                        <summary class="cursor-pointer list-none px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-start gap-4 font-semibold text-base sm:text-lg">
                            <span>Why are double-barreled questions bad for survey data?</span>
                            <span class="shrink-0 mt-1 transition-transform group-open:rotate-45 text-coral text-2xl leading-none">+</span>
                        </summary>
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-gray-700">
                            Because the response is uninterpretable. A 4-out-of-5 rating on "quality and price" could mean great quality and okay price, okay quality and great price, or any combination. Averages look reasonable but mask the real opinions, which means you'll act on the wrong signal.
                        </div>
                    </details>

                    <details class="group rounded-xl border border-gray-200 bg-white open:border-coral transition-colors">
                        <summary class="cursor-pointer list-none px-5 py-4 sm:px-6 sm:py-5 flex justify-between items-start gap-4 font-semibold text-base sm:text-lg">
                            <span>Are double-barreled questions a type of leading question?</span>
                            <span class="shrink-0 mt-1 transition-transform group-open:rotate-45 text-coral text-2xl leading-none">+</span>
                        </summary>
                        <div class="px-5 pb-5 sm:px-6 sm:pb-6 text-gray-700">
                            They're related but distinct. A leading question pushes the respondent toward a specific answer through wording. A double-barreled question asks about two things at once. A question can be both &mdash; for example, "Do you find our friendly support fast and helpful?" is double-barreled (fast + helpful) and leading (the adjective "friendly" presumes an answer).
                        </div>
                    </details>
                </div>

                <h2 id="build-cleaner-surveys" class="scroll-mt-24 text-2xl sm:text-3xl font-bold mt-14 mb-4 text-balance">Build cleaner surveys with Youform</h2>

                <p class="mb-6">Youform is a free survey and form builder built for the people who actually have to read the responses. Unlimited submissions, partial response capture, question-by-question drop-off analytics, matrix questions, and 300+ templates &mdash; including survey templates already structured to avoid double-barreled mistakes.</p>

                <p class="mb-8">If you've been running surveys in <a href="/blog/a-free-delighted-alternative-unlimited-submissions" class="text-coral hover:text-coral/80 underline">Delighted and need a free alternative</a>, or you're moving from <a href="/google-forms-alternative" class="text-coral hover:text-coral/80 underline">Google Forms</a> or <a href="/typeform-alternative" class="text-coral hover:text-coral/80 underline">Typeform</a>, Youform handles the migration cleanly.</p>

                <div class="mt-10 mb-2 text-center">
                    <a href="https://app.youform.com/register" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all px-10 py-3 text-black font-semibold rounded-md no-underline">
                        Create free account
                    </a>
                    <p class="text-sm text-gray-500 mt-3">No credit card required &middot; Unlimited submissions on the free plan</p>
                </div>
            </article>

            <!-- Related posts -->
            <div class="mt-20 pt-10 border-t-2 border-black">
                <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-2">More from Youform</p>
                <h3 class="text-2xl sm:text-3xl font-bold mb-8 text-balance">Keep reading</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    @foreach([
                        ['href' => '/blog/a-free-delighted-alternative-unlimited-submissions', 'bg' => 'bg-coral/25', 'tag' => 'Survey tools', 'title' => 'A free Delighted alternative', 'desc' => 'Delighted is shutting down. Here\'s what to use instead.'],
                        ['href' => '/customer-satisfaction-survey', 'bg' => 'bg-aquamarine/25', 'tag' => 'Templates', 'title' => 'Customer satisfaction survey template', 'desc' => 'A clean CSAT template &mdash; no double-barreled questions included.'],
                        ['href' => '/online-survey-builder', 'bg' => 'bg-pale-violet/30', 'tag' => 'Tools', 'title' => 'Online survey builder', 'desc' => 'Matrix questions, partial submissions, and 300+ templates.'],
                        ['href' => '/blog/how-we-used-sean-ellis-test-to-find-out-our-product-market-fit', 'bg' => 'bg-medium-champagne', 'tag' => 'Survey design', 'title' => 'How we used the Sean Ellis test', 'desc' => 'A real survey we ran &mdash; and what the data told us.'],
                    ] as $card)
                        <a href="{{ $card['href'] }}" class="group block p-5 sm:p-6 rounded-xl border-2 border-black {{ $card['bg'] }} shadow-[3px_3px_0_0_#000] hover:shadow-[6px_6px_0_0_#000] hover:-translate-x-0.5 hover:-translate-y-0.5 transition-all">
                            <div class="flex items-center justify-between gap-3 mb-3">
                                <p class="text-xs font-bold uppercase tracking-wider text-black/70 m-0">{{ $card['tag'] }}</p>
                                <span class="shrink-0 inline-flex size-7 items-center justify-center rounded-full border-2 border-black bg-white text-black group-hover:bg-black group-hover:text-white transition-colors" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-3.5">
                                        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <p class="font-bold text-lg sm:text-xl leading-snug text-gray-900 mb-2">{{ $card['title'] }}</p>
                            <p class="text-sm sm:text-base text-gray-700 m-0">{!! $card['desc'] !!}</p>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

@include('partials.footer')

@endsection
