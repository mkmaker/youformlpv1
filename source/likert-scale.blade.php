---
title: Likert Scale Surveys - Examples, Types, and Free Builder | Youform
description: Build free Likert scale surveys with Youform. See 20+ examples, learn the 5-point vs 7-point types, and how to analyze the results. Unlimited responses, no credit card required.
image: "https://youform.com/assets/images/likert-scale-og.png"
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
      "name": "What is a Likert scale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Likert scale is a survey response format that asks respondents to rate a statement or question on an ordered range of options, typically from 1 to 5 or 1 to 7. The classic version uses five points from Strongly Disagree to Strongly Agree. It captures the strength of an opinion rather than forcing a yes or no answer."
      }
    },
    {
      "@type": "Question",
      "name": "What is an example of a Likert scale question?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "\"The new dashboard makes it easier to find the data I need\" with five options: Strongly Disagree, Disagree, Neither Agree nor Disagree, Agree, Strongly Agree. Likert scales also work for satisfaction (Not at all satisfied to Extremely satisfied), frequency (Never to Always), and importance (Not at all important to Extremely important)."
      }
    },
    {
      "@type": "Question",
      "name": "Should a Likert scale have 5 or 7 points?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Both work. 5-point scales are faster to answer and easier to label, which is why they are the most common choice. 7-point scales give finer resolution and slightly better reliability when respondents have strong opinions on the topic. Avoid going beyond 7 points for verbal labels; the differences between adjacent options become hard to distinguish."
      }
    },
    {
      "@type": "Question",
      "name": "Should I include a neutral middle option?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Include a neutral midpoint when true neutrality is a real position a respondent might hold. Use an even-point scale (4 or 6 options) when you want to force respondents off the fence, for example in product preference research where you need a decision. Forcing the choice raises data quality only when the underlying opinion exists; otherwise it produces noise."
      }
    },
    {
      "@type": "Question",
      "name": "How do you analyze Likert scale data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Likert data is ordinal, so the cleanest summaries are median, mode, and the frequency distribution across each option. The most actionable business metric is the Top 2 Box score, the percentage of respondents who picked the top two positive options. Means and standard deviations are common in practice but technically assume the gaps between points are equal, which is a contested assumption."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between a Likert scale and a rating scale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Likert scale is technically a specific type of rating scale that measures agreement, satisfaction, or attitudinal intensity using verbal anchors. A general rating scale can be numeric only (1 to 10) without verbal labels, like NPS or a 1-to-5 star review. In practice the terms are used interchangeably, but Likert specifically implies verbal anchors at every point or at least at the ends."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between a unipolar and bipolar Likert scale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A bipolar scale measures direction along an axis with two opposite ends, like Strongly Disagree to Strongly Agree. A unipolar scale measures intensity from zero to maximum on a single dimension, like Not at all satisfied to Extremely satisfied. Pick bipolar when you genuinely want to capture disagreement; pick unipolar when the absence of the attribute is more informative than its opposite."
      }
    }
  ]
}
</script>
@endpush

@section('body')

<!-- header -->
<div>
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-12">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <span class="inline-block text-xs font-bold uppercase tracking-wider text-black bg-white border-2 border-black px-3 py-1 rounded-full mb-5">Survey question type</span>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Likert Scale Surveys: Examples, Types, and How to Build One Free
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        The Likert scale is the workhorse of attitude research. Use it to capture how strongly someone agrees, how satisfied they are, or how often they do something. This guide covers what it is, the 20+ ways to use it, the right number of points, and how to analyze the results. Then build one free with Youform in minutes.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="https://app.youform.com/register" class="inline-block bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all px-8 py-3 text-black font-semibold rounded-md no-underline">
                            Create a free Likert survey
                        </a>
                        <a href="#examples" class="underline text-sm hover:no-underline">
                            or, see 20+ examples first
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Social Proof Bar -->
<div class="bg-white pt-16 lg:pt-24 pb-6 -mt-10 lg:-mt-20 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 text-center">
            <div>
                <p class="text-3xl font-bold text-aquamarine">90,000+</p>
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
            <div class="lg:col-span-3">
                <div class="lg:sticky lg:top-24 pt-4 lg:pt-10">
                    <div>
                        <h3 class="text-lg font-bold mb-4">In this guide</h3>
                        <ul class="space-y-3">
                            <li><a href="#what-is-likert-scale" class="text-aquamarine hover:underline font-medium text-sm">What is a Likert scale?</a></li>
                            <li><a href="#types" class="text-aquamarine hover:underline font-medium text-sm">Types of Likert scales</a></li>
                            <li><a href="#examples" class="text-aquamarine hover:underline font-medium text-sm">20+ examples</a></li>
                            <li><a href="#when-to-use" class="text-aquamarine hover:underline font-medium text-sm">When to use one</a></li>
                            <li><a href="#how-to-analyze" class="text-aquamarine hover:underline font-medium text-sm">How to analyze the data</a></li>
                            <li><a href="#pitfalls" class="text-aquamarine hover:underline font-medium text-sm">Common pitfalls</a></li>
                            <li><a href="#youform-solution" class="text-aquamarine hover:underline font-medium text-sm">Build one with Youform</a></li>
                            <li><a href="#faq" class="text-aquamarine hover:underline font-medium text-sm">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-9">
                <!-- What is a Likert scale -->
                <div class="mb-12 pt-4 lg:pt-10" id="what-is-likert-scale">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What is a Likert scale?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        A Likert scale is a survey response format that asks respondents to rate a statement or question on an ordered range of options. The classic version uses five points labeled Strongly Disagree, Disagree, Neither Agree nor Disagree, Agree, Strongly Agree. Each option is associated with a numeric value (1 to 5) so the responses can be aggregated and compared.
                    </p>
                    <p class="text-lg text-gray-700 mb-4">
                        The format was developed by American psychologist Rensis Likert in 1932 as a way to measure attitudes on a continuous range instead of a binary yes or no. It has since become the most widely used response scale in survey research, market research, employee engagement, and customer satisfaction work.
                    </p>
                    <p class="text-lg text-gray-700 mb-4">
                        The point of a Likert scale is to capture <strong>intensity</strong>. A yes-or-no question flattens "kind of agree" and "completely agree" into the same answer. A Likert scale separates them, which is the difference between knowing customers are happy and knowing how happy they are.
                    </p>

                    <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-medium-champagne p-6 sm:p-7 my-8">
                        <p class="text-xs font-bold uppercase tracking-wider mb-2">Canonical example</p>
                        <p class="text-base sm:text-lg font-medium mb-4">"The new dashboard makes it easier to find the data I need."</p>
                        <div class="flex flex-wrap gap-2 text-sm">
                            <span class="px-3 py-1 bg-white border border-black rounded">1, Strongly Disagree</span>
                            <span class="px-3 py-1 bg-white border border-black rounded">2, Disagree</span>
                            <span class="px-3 py-1 bg-white border border-black rounded">3, Neither</span>
                            <span class="px-3 py-1 bg-white border border-black rounded">4, Agree</span>
                            <span class="px-3 py-1 bg-white border border-black rounded">5, Strongly Agree</span>
                        </div>
                    </div>

                    <p class="text-lg text-gray-700">
                        Two notes on the name: it is pronounced "LICK-urt" (rhymes with picket), and a single question on the scale is called a Likert <em>item</em>; a set of related items measuring the same construct is called a Likert <em>scale</em>.
                    </p>
                </div>

                <!-- Types of Likert scales -->
                <div class="mb-12" id="types">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Types of Likert scales</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Likert scales vary along three dimensions: how many points, what the labels are, and whether they include a neutral middle. Picking the right combination depends on what you are measuring.
                    </p>

                    <h3 class="text-2xl font-bold mb-3 mt-8">By number of points</h3>
                    <ul class="space-y-2 mb-6 list-disc pl-6 marker:text-coral text-gray-700 text-lg">
                        <li><strong>5-point scale:</strong> the most common. Fast to answer, easy to label clearly, well-suited to general audiences.</li>
                        <li><strong>7-point scale:</strong> slightly better resolution and reliability. Use when respondents are likely to have strong, distinct opinions.</li>
                        <li><strong>4 or 6-point (even):</strong> no neutral midpoint, forces respondents off the fence. Use when you need a decision (preference research, pass/fail evaluations).</li>
                        <li><strong>10 or 11-point:</strong> common for NPS and 0-to-10 satisfaction ratings, but verbal anchors stop being useful past 7 options.</li>
                    </ul>

                    <h3 class="text-2xl font-bold mb-3 mt-8">By construct (what you are measuring)</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        The verbal anchors should match the construct, not just default to agree/disagree. Five common variants:
                    </p>
                    <div class="overflow-x-auto mb-6">
                        <table class="w-full border-2 border-black text-left">
                            <thead class="bg-medium-champagne">
                                <tr>
                                    <th class="px-4 py-3 border-r-2 border-black font-bold">Construct</th>
                                    <th class="px-4 py-3 font-bold">Anchors (low to high)</th>
                                </tr>
                            </thead>
                            <tbody class="text-base">
                                <tr class="border-t-2 border-black">
                                    <td class="px-4 py-3 border-r-2 border-black"><strong>Agreement</strong></td>
                                    <td class="px-4 py-3">Strongly Disagree, Disagree, Neither, Agree, Strongly Agree</td>
                                </tr>
                                <tr class="border-t-2 border-black">
                                    <td class="px-4 py-3 border-r-2 border-black"><strong>Satisfaction</strong></td>
                                    <td class="px-4 py-3">Not at all satisfied, Slightly, Moderately, Very, Extremely satisfied</td>
                                </tr>
                                <tr class="border-t-2 border-black">
                                    <td class="px-4 py-3 border-r-2 border-black"><strong>Frequency</strong></td>
                                    <td class="px-4 py-3">Never, Rarely, Sometimes, Often, Always</td>
                                </tr>
                                <tr class="border-t-2 border-black">
                                    <td class="px-4 py-3 border-r-2 border-black"><strong>Importance</strong></td>
                                    <td class="px-4 py-3">Not at all important, Slightly, Moderately, Very, Extremely important</td>
                                </tr>
                                <tr class="border-t-2 border-black">
                                    <td class="px-4 py-3 border-r-2 border-black"><strong>Likelihood</strong></td>
                                    <td class="px-4 py-3">Not at all likely, Slightly, Moderately, Very, Extremely likely</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 class="text-2xl font-bold mb-3 mt-8">Unipolar vs bipolar</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        A <strong>bipolar</strong> scale measures direction along an axis with two opposite ends (Strongly Disagree to Strongly Agree). A <strong>unipolar</strong> scale measures intensity from zero to maximum on a single dimension (Not at all satisfied to Extremely satisfied).
                    </p>
                    <p class="text-lg text-gray-700">
                        Use bipolar when both opposing endpoints are meaningful positions. Use unipolar when the absence of the attribute is more informative than its opposite. "Not at all satisfied" is a clearer position than "completely dissatisfied" for most customer feedback work, which is why satisfaction scales are usually unipolar.
                    </p>
                </div>

                <!-- Examples -->
                <div class="mb-12" id="examples">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">20+ Likert scale examples</h2>
                    <p class="text-lg text-gray-700 mb-8">
                        Examples across customer feedback, employee engagement, product research, healthcare, education, and market research. Each shows the question, the scale type, and the typical anchors.
                    </p>

                    <h3 class="text-xl sm:text-2xl font-bold mb-4 mt-8 pb-2 border-b-2 border-black">Customer satisfaction</h3>
                    <div class="space-y-4 mb-8">
                        @foreach([
                            ['q' => 'Our support team resolved my issue quickly.', 'scale' => '5-point agreement'],
                            ['q' => 'How satisfied are you with the speed of our delivery?', 'scale' => '5-point satisfaction (unipolar)'],
                            ['q' => 'The product matched what was shown on the website.', 'scale' => '5-point agreement'],
                            ['q' => 'How likely are you to purchase from us again?', 'scale' => '5-point likelihood (unipolar)'],
                            ['q' => 'How often do you use the reporting features in our dashboard?', 'scale' => '5-point frequency'],
                        ] as $ex)
                            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-white p-5">
                                <p class="text-lg text-gray-900 mb-2 font-medium m-0">"{{ $ex['q'] }}"</p>
                                <p class="text-sm text-gray-600 m-0">{{ $ex['scale'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <h3 class="text-xl sm:text-2xl font-bold mb-4 mt-8 pb-2 border-b-2 border-black">Employee engagement</h3>
                    <div class="space-y-4 mb-8">
                        @foreach([
                            ['q' => 'I have a clear understanding of my role and what is expected of me.', 'scale' => '5-point agreement'],
                            ['q' => 'My manager gives me useful feedback on my work.', 'scale' => '5-point agreement'],
                            ['q' => 'How often do you feel recognized for the work you do?', 'scale' => '5-point frequency'],
                            ['q' => 'I would recommend this company as a great place to work.', 'scale' => '7-point agreement'],
                            ['q' => 'How important is professional growth in your decision to stay at this company?', 'scale' => '5-point importance'],
                        ] as $ex)
                            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-white p-5">
                                <p class="text-lg text-gray-900 mb-2 font-medium m-0">"{{ $ex['q'] }}"</p>
                                <p class="text-sm text-gray-600 m-0">{{ $ex['scale'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <!-- Mid-page CTA -->
                    <div class="my-10 rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-aquamarine/20 p-7 sm:p-8 text-center">
                        <p class="text-xl sm:text-2xl font-bold mb-2">Want to use these in a real survey?</p>
                        <p class="text-base text-gray-700 mb-5 max-w-xl mx-auto">Youform has a native Likert question type with every variant on this page. Free, unlimited responses, no credit card.</p>
                        <a href="https://app.youform.com/register" class="inline-block bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all px-7 py-2 text-black font-semibold rounded-md no-underline">
                            Try Youform free
                        </a>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-bold mb-4 mt-8 pb-2 border-b-2 border-black">Product and UX research</h3>
                    <div class="space-y-4 mb-8">
                        @foreach([
                            ['q' => 'The new onboarding flow made it clear what to do next.', 'scale' => '5-point agreement'],
                            ['q' => 'How easy was it to complete checkout today?', 'scale' => '5-point ease (unipolar)'],
                            ['q' => 'The information displayed in this report is useful to me.', 'scale' => '5-point agreement'],
                            ['q' => 'How frustrated were you while trying to upload a file?', 'scale' => '5-point intensity (unipolar)'],
                        ] as $ex)
                            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-white p-5">
                                <p class="text-lg text-gray-900 mb-2 font-medium m-0">"{{ $ex['q'] }}"</p>
                                <p class="text-sm text-gray-600 m-0">{{ $ex['scale'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <h3 class="text-xl sm:text-2xl font-bold mb-4 mt-8 pb-2 border-b-2 border-black">Healthcare and patient feedback</h3>
                    <div class="space-y-4 mb-8">
                        @foreach([
                            ['q' => 'The clinician listened carefully to my concerns.', 'scale' => '5-point agreement'],
                            ['q' => 'How often have you felt down or hopeless in the last two weeks?', 'scale' => '4-point frequency (clinical PHQ-style)'],
                            ['q' => 'I felt comfortable asking the doctor follow-up questions.', 'scale' => '5-point agreement'],
                        ] as $ex)
                            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-white p-5">
                                <p class="text-lg text-gray-900 mb-2 font-medium m-0">"{{ $ex['q'] }}"</p>
                                <p class="text-sm text-gray-600 m-0">{{ $ex['scale'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <h3 class="text-xl sm:text-2xl font-bold mb-4 mt-8 pb-2 border-b-2 border-black">Education and course feedback</h3>
                    <div class="space-y-4 mb-8">
                        @foreach([
                            ['q' => 'The course materials were well organized.', 'scale' => '5-point agreement'],
                            ['q' => 'How much did this course improve your understanding of the topic?', 'scale' => '5-point intensity (unipolar)'],
                            ['q' => 'The instructor explained concepts clearly.', 'scale' => '5-point agreement'],
                        ] as $ex)
                            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-white p-5">
                                <p class="text-lg text-gray-900 mb-2 font-medium m-0">"{{ $ex['q'] }}"</p>
                                <p class="text-sm text-gray-600 m-0">{{ $ex['scale'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <h3 class="text-xl sm:text-2xl font-bold mb-4 mt-8 pb-2 border-b-2 border-black">Market and brand research</h3>
                    <div class="space-y-4 mb-8">
                        @foreach([
                            ['q' => 'When I think of [category], this brand is the first one that comes to mind.', 'scale' => '5-point agreement'],
                            ['q' => 'How likely are you to recommend us to a colleague?', 'scale' => '11-point likelihood (NPS)'],
                            ['q' => 'How important is the price when choosing this kind of product?', 'scale' => '5-point importance'],
                        ] as $ex)
                            <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-white p-5">
                                <p class="text-lg text-gray-900 mb-2 font-medium m-0">"{{ $ex['q'] }}"</p>
                                <p class="text-sm text-gray-600 m-0">{{ $ex['scale'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- When to use -->
                <div class="mb-12" id="when-to-use">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">When to use a Likert scale (and when not to)</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Likert scales shine when the underlying attribute exists on a continuum and the gradient matters. They flatten the data when you force them onto attributes that are genuinely binary or that need open-ended detail.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                        <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-emerald-50 p-6">
                            <p class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-3">Use a Likert when</p>
                            <ul class="space-y-2 m-0 list-disc pl-5 text-base text-gray-800">
                                <li>You are measuring agreement, satisfaction, frequency, or importance.</li>
                                <li>You need to compare averages across segments or over time.</li>
                                <li>The construct has a natural gradient (a little to a lot).</li>
                                <li>You want benchmarkable, trendable data, not free text.</li>
                            </ul>
                        </div>
                        <div class="rounded-xl border-2 border-black shadow-[3px_3px_0_0_#000] bg-red-50 p-6">
                            <p class="text-xs font-bold uppercase tracking-wider text-red-700 mb-3">Skip Likert when</p>
                            <ul class="space-y-2 m-0 list-disc pl-5 text-base text-gray-800">
                                <li>The reality is binary (employed yes/no, completed yes/no).</li>
                                <li>You need rich qualitative reasoning, not a number.</li>
                                <li>You are screening or branching the survey (use yes/no).</li>
                                <li>The respondent has no real opinion (forced answers add noise).</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- How to analyze -->
                <div class="mb-12" id="how-to-analyze">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">How to analyze Likert scale data</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Likert data is technically <strong>ordinal</strong>: the options are ordered, but the gap between "Agree" and "Strongly Agree" is not guaranteed to equal the gap between "Disagree" and "Neither." That matters for what statistics you can fairly use.
                    </p>

                    <h3 class="text-2xl font-bold mb-3 mt-6">1. Frequency distribution</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        Always start here. Plot the percentage of respondents who picked each option. A bar chart of all five options reveals whether opinion is concentrated, polarized, or flat. The shape of the distribution is often more informative than any single summary number.
                    </p>

                    <h3 class="text-2xl font-bold mb-3 mt-6">2. Top 2 Box (T2B) and Bottom 2 Box (B2B)</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        Collapse the top two positive options ("Agree" + "Strongly Agree") into a single percentage. This is the cleanest business metric: it gives you one number that maps to "% who feel positively" and is easy to trend and benchmark. Do the same with the bottom two for negative sentiment.
                    </p>

                    <h3 class="text-2xl font-bold mb-3 mt-6">3. Median and mode</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        Since the data is ordinal, the technically correct measures of central tendency are the median (middle value) and the mode (most common value). The interquartile range describes spread.
                    </p>

                    <h3 class="text-2xl font-bold mb-3 mt-6">4. Mean (with care)</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        Most teams use the mean ("4.2 out of 5") because it is easier to communicate. This treats Likert as interval data, which is technically a stretch but is widely accepted in practice. If you report a mean, also report the distribution so reviewers can see how concentrated or polarized the responses are.
                    </p>

                    <h3 class="text-2xl font-bold mb-3 mt-6">5. Cross-tabulation</h3>
                    <p class="text-lg text-gray-700 mb-4">
                        The most useful insight from Likert data is usually <em>not</em> the overall number. It is the gap between segments: new vs returning customers, paid vs free, region A vs region B. Break out T2B by segment and look for differences of 8 percentage points or more; that is usually where the actionable story lives.
                    </p>
                </div>

                <!-- Common pitfalls -->
                <div class="mb-12" id="pitfalls">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Common Likert scale pitfalls</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Six failure modes that quietly destroy Likert data. Read through these before sending your next survey.
                    </p>

                    <div class="space-y-5">
                        <div class="rounded-xl border border-gray-200 p-6 bg-white">
                            <h3 class="text-xl font-bold mb-2">1. Double-barreled items</h3>
                            <p class="text-base text-gray-700 m-0">"The product is fast and reliable" hides two ratings in one. Split into two separate items. See our guide to <a href="/blog/double-barreled-questions" class="text-aquamarine hover:underline">double-barreled questions</a> for the full pattern.</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 p-6 bg-white">
                            <h3 class="text-xl font-bold mb-2">2. Acquiescence bias</h3>
                            <p class="text-base text-gray-700 m-0">People tend to agree more than disagree when the statement is phrased one-sided. Mix in reverse-coded items occasionally to spot pattern-fillers.</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 p-6 bg-white">
                            <h3 class="text-xl font-bold mb-2">3. Central tendency bias</h3>
                            <p class="text-base text-gray-700 m-0">Some respondents default to the middle option to avoid commitment. If this is a serious risk for your audience, use an even-point scale to force a side.</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 p-6 bg-white">
                            <h3 class="text-xl font-bold mb-2">4. Polarity inconsistency</h3>
                            <p class="text-base text-gray-700 m-0">Mixing "Strongly Disagree on the left, Strongly Agree on the right" with the reverse on the next question confuses respondents and contaminates the data. Pick a direction and keep it.</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 p-6 bg-white">
                            <h3 class="text-xl font-bold mb-2">5. Mismatched anchors</h3>
                            <p class="text-base text-gray-700 m-0">"How important is X?" with agreement anchors (Strongly Disagree to Strongly Agree) reads awkward and produces noisy data. Match the anchors to the construct: importance, satisfaction, frequency, agreement.</p>
                        </div>
                        <div class="rounded-xl border border-gray-200 p-6 bg-white">
                            <h3 class="text-xl font-bold mb-2">6. Too many points</h3>
                            <p class="text-base text-gray-700 m-0">9 or 11 verbal options become hard to distinguish (what is the real difference between "Slightly agree" and "Somewhat agree"?). Stick with 5 or 7 unless you have a specific reason.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Youform Solution Section -->
<div class="bg-amber-50 py-20" id="youform-solution">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Build Likert scale surveys free with Youform</h2>
                    <p class="text-lg text-gray-700 mb-8">
                        Youform has a native Likert question type that supports every variant in this guide. Pick the number of points, choose agreement, satisfaction, frequency, importance, or likelihood anchors, then label each option however you like. The form auto-handles the analytics: Top 2 Box, frequency distributions, and cross-tabulation are built in.
                    </p>

                    <div class="bg-white p-8 rounded-xl border-2 border-black mb-8">
                        <h3 class="text-2xl font-bold mb-6">Why Youform for Likert surveys</h3>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div><strong>Every Likert variant supported.</strong> 4, 5, 6, 7, 10, or 11 points. Agreement, satisfaction, frequency, importance, likelihood. Bipolar or unipolar. Custom anchors on every option.</div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div><strong>Matrix questions for batches.</strong> Ask 10 Likert items at once with shared anchors in a single matrix grid. Faster to fill, easier to analyze.</div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div><strong>Free forever, unlimited responses.</strong> No question caps, no response caps, no credit card. SurveyMonkey limits free plans to 10 questions; Typeform limits responses. Youform does not.</div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div><strong>Built-in analytics.</strong> Frequency distributions, Top 2 Box, mean and median, cross-tabs by segment. Export as CSV for deeper analysis in your tool of choice.</div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div><strong>300+ survey templates.</strong> CSAT, employee engagement, course feedback, NPS. Every template is already structured with the right Likert variant for the use case.</div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div><strong>Conditional logic.</strong> Branch on the Likert response to follow up with detractors, ask "why?" of anyone who picked the bottom box, or skip questions based on satisfaction level.</div>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="https://youform.com/templates/c/surveys/" class="underline group transition-all hover:no-underline block mx-auto mt-4">
                            or, browse survey templates <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Demo survey embed -->
<div class="bg-white py-20 mb-40">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-6">
                See a Likert survey in action
            </h2>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                Preview a live Youform survey using Likert questions. Notice how each item lands one at a time, with clean anchors and visible progress.
            </p>
        </div>
        <div class="max-w-4xl mx-auto">
            <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl overflow-hidden">
                <iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0" class="rounded-md"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Survey Templates Block -->
<div class="-mt-32 relative">
    <img loading="lazy" src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">
    <div class="bg-vivid-yellow -mt-4 pb-10 pt-6">
        <div class="relative max-w-7xl mx-auto">
            <div class="px-10 md:px-20 text-center">
                <h2 class="text-6xl font-bold text-gray-800 mb-4">
                    Survey templates
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto mb-6 text-lg">
                    Start from a Likert-ready survey template and customize it to your brand.
                </p>
            </div>
            <div class="max-w-7xl mx-auto px-10 md:px-20 py-10">
                <div class="flex items-center justify-between mb-10">
                    <h2 class="text-3xl font-bold">Surveys</h2>
                    <div>
                        <a href="/templates/c/surveys" class="hover:underline">View all survey templates</a> &rarr;
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                        @php $rendered = 0; @endphp
                        @foreach ($page->templates['survey'] as $template)
                            @include('_partials.template-card', ['template' => $template])
                            @php $rendered++; @endphp
                            @if ($rendered >= 3)
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-8 w-full" loading="lazy" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- FAQ Section -->
<div class="bg-white py-20" id="faq">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
                    Frequently asked questions
                </h2>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What is a Likert scale?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">A Likert scale is a survey response format that asks respondents to rate a statement or question on an ordered range of options, typically from 1 to 5 or 1 to 7. The classic version uses five points from Strongly Disagree to Strongly Agree. It captures the strength of an opinion rather than forcing a yes or no answer.</p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Should a Likert scale have 5 or 7 points?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">Both work. 5-point scales are faster to answer and easier to label, which is why they are the most common choice. 7-point scales give finer resolution and slightly better reliability when respondents have strong opinions on the topic. Avoid going beyond 7 points for verbal labels; the differences between adjacent options become hard to distinguish.</p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Should I include a neutral middle option?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">Include a neutral midpoint when true neutrality is a real position a respondent might hold. Use an even-point scale (4 or 6 options) when you want to force respondents off the fence, for example in product preference research where you need a decision. Forcing the choice raises data quality only when the underlying opinion exists; otherwise it produces noise.</p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How do you analyze Likert scale data?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">Likert data is ordinal, so the cleanest summaries are median, mode, and the frequency distribution across each option. The most actionable business metric is the Top 2 Box score, the percentage of respondents who picked the top two positive options. Means and standard deviations are common in practice but technically assume the gaps between points are equal, which is a contested assumption.</p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What is the difference between a Likert scale and a rating scale?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">A Likert scale is technically a specific type of rating scale that measures agreement, satisfaction, or attitudinal intensity using verbal anchors. A general rating scale can be numeric only (1 to 10) without verbal labels, like NPS or a 1-to-5 star review. In practice the terms are used interchangeably, but Likert specifically implies verbal anchors at every point or at least at the ends.</p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I build a Likert survey for free with Youform?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">Yes. Youform's free plan includes the full Likert question type with every variant (5-point, 7-point, agreement, satisfaction, frequency, importance, likelihood), unlimited responses, and built-in analytics. No credit card required. <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">Create a free account</a> and you can have a Likert survey live in under three minutes.</p>
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

@include('_partials.ask-ai-to-recommend', [
    'prompt' => 'tell+me+about+building+likert+scale+surveys+with+youform'
])

<!-- Also Try Section -->
<div class="bg-gray-50 py-16 border-t-2 border-gray-200">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-2xl font-bold mb-6">Also try our other free builders</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/online-survey-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">📊</span>
                <span class="font-semibold">Online survey builder</span>
            </a>
            <a href="/ai-survey-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">🤖</span>
                <span class="font-semibold">AI survey builder</span>
            </a>
            <a href="/customer-satisfaction-survey/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">📝</span>
                <span class="font-semibold">CSAT templates</span>
            </a>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
