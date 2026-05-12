---
title: "Google Forms NPS Survey: How to Create One (with Score Formula)"
description: "Step-by-step guide to building an NPS survey in Google Forms — plus the Sheets formula to calculate your Net Promoter Score and a faster native alternative."
image: "https://youform.com/assets/images/google-forms-nps-og.png"
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
      "name": "Does Google Forms have a built-in NPS question type?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Google Forms doesn't have a dedicated NPS field. To build an NPS survey you use the Linear Scale question type set from 0 to 10, label the endpoints 'Not at all likely' and 'Extremely likely', and then calculate the score manually in Google Sheets using the % of Promoters (9-10) minus the % of Detractors (0-6)."
      }
    },
    {
      "@type": "Question",
      "name": "What is the formula to calculate NPS in Google Sheets?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If your scores are in column B starting at row 2, use: =((COUNTIF(B2:B,\">=9\")-COUNTIF(B2:B,\"<=6\"))/COUNTA(B2:B))*100. That returns the % of Promoters minus the % of Detractors as your NPS score. The result ranges from -100 to +100. Anything above 0 is positive, above 50 is excellent, above 70 is world-class."
      }
    },
    {
      "@type": "Question",
      "name": "What are Promoters, Passives, and Detractors in NPS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Respondents who score 9 or 10 are Promoters — loyal enthusiasts likely to recommend you. Scores of 7 or 8 are Passives — satisfied but unenthusiastic. Scores 0 through 6 are Detractors — unhappy customers who may damage your brand. NPS = % Promoters minus % Detractors. Passives count toward your total response volume but not toward the score itself."
      }
    },
    {
      "@type": "Question",
      "name": "Can I show different follow-up questions to Promoters vs Detractors in Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not directly. Google Forms' branching logic only works on multiple-choice and dropdown questions — not on the Linear Scale field you'd use for NPS. The workaround is to add a separate multiple-choice question grouping respondents into Promoter/Passive/Detractor buckets, then branch from that. Youform's conditional logic works on any field including 0-10 scales, so you can ask 'What did we do well?' to Promoters and 'What could we improve?' to Detractors automatically."
      }
    },
    {
      "@type": "Question",
      "name": "Is there a free NPS template for Google Forms?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There's no first-party Google Forms NPS template — you have to build it yourself from the blank-form template. Youform has a free pre-built NPS survey template with the proper 0-10 scale, segment-aware follow-up questions, and a thank-you page. Pair it with the free NPS calculator to compute your score from any list of responses."
      }
    },
    {
      "@type": "Question",
      "name": "How often should I send an NPS survey?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Quarterly is standard for a relationship NPS survey — frequent enough to track trend, rare enough to avoid survey fatigue. Transactional NPS, sent right after a specific touchpoint like a support resolution or onboarding milestone, can run continuously. Don't survey the same customer more than once per quarter for relationship NPS."
      }
    }
  ]
}
</script>
@endpush

<!-- Header -->
<div>
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <div class="relative max-w-7xl mx-auto mt-10 pb-12">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <p class="inline-block bg-pale-violet border-2 border-black rounded-full px-4 py-1 text-sm font-medium mb-6">
                        Google Forms NPS Guide
                    </p>
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        How to Create an NPS Survey in Google Forms
                    </h1>
                    <p class="text-base md:text-lg mt-6 max-w-3xl mx-auto text-gray-700">
                        Google Forms has no native NPS field — but you can build one in 5 minutes with the Linear Scale question and a Sheets formula. Here's the full walkthrough, plus a faster alternative with a real NPS field built in.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="https://app.youform.com/register" class="inline-block text-xl sm:text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-8 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="#youform-solution" class="underline hover:no-underline text-gray-800">
                            or skip to the faster way ↓
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

<!-- Main Content with TOC Sidebar -->
<div class="bg-white py-20 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <!-- TOC -->
            <div class="lg:col-span-2">
                <div class="lg:sticky lg:top-24 pt-10 lg:pt-16">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Table of Contents</h3>
                        <ul class="space-y-3">
                            <li><a href="#what-is-nps" class="text-aquamarine hover:underline font-medium text-sm">What is NPS?</a></li>
                            <li><a href="#build-steps" class="text-aquamarine hover:underline font-medium text-sm">Build it in Google Forms</a></li>
                            <li><a href="#calculate-formula" class="text-aquamarine hover:underline font-medium text-sm">Calculate the score</a></li>
                            <li><a href="#limitations" class="text-aquamarine hover:underline font-medium text-sm">Google Forms limitations</a></li>
                            <li><a href="#youform-solution" class="text-aquamarine hover:underline font-medium text-sm">Faster: Youform NPS</a></li>
                            <li><a href="#comparison" class="text-aquamarine hover:underline font-medium text-sm">Comparison table</a></li>
                            <li><a href="#faq" class="text-aquamarine hover:underline font-medium text-sm">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12 pt-10 lg:pt-16" id="what-is-nps">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">What is an NPS survey?</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        Net Promoter Score (NPS) is a one-question loyalty metric: <em>"How likely are you to recommend us to a friend or colleague?"</em> Respondents answer on a 0–10 scale. You then bucket them into three groups:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-6">
                        <div class="bg-aquamarine/20 border-2 border-black rounded-xl p-5">
                            <div class="text-3xl font-bold">9–10</div>
                            <div class="font-bold mt-1">Promoters</div>
                            <p class="text-sm text-gray-700 mt-2">Loyal enthusiasts who will refer others.</p>
                        </div>
                        <div class="bg-vivid-yellow/30 border-2 border-black rounded-xl p-5">
                            <div class="text-3xl font-bold">7–8</div>
                            <div class="font-bold mt-1">Passives</div>
                            <p class="text-sm text-gray-700 mt-2">Satisfied but unenthusiastic. Vulnerable to competitors.</p>
                        </div>
                        <div class="bg-coral/30 border-2 border-black rounded-xl p-5">
                            <div class="text-3xl font-bold">0–6</div>
                            <div class="font-bold mt-1">Detractors</div>
                            <p class="text-sm text-gray-700 mt-2">Unhappy customers who can damage your brand.</p>
                        </div>
                    </div>
                    <p class="text-lg text-gray-700 mb-4">
                        Your Net Promoter Score is the <strong>% of Promoters minus the % of Detractors</strong>. The result lives on a scale from -100 to +100. Above zero is positive, above 50 is excellent, above 70 is world-class.
                    </p>
                    <p class="text-lg text-gray-700">
                        Now let's build the survey itself in Google Forms.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Build it in Google Forms -->
<div class="bg-gray-50 py-20" id="build-steps">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">How to build an NPS survey in Google Forms</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Google Forms doesn't have a dedicated NPS question type, but you can fake one well enough using the Linear Scale field. Here's the exact setup.
                </p>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 1: Create a new blank form</h3>
                        <p class="text-gray-700">
                            Go to <a href="https://forms.google.com" target="_blank" class="text-aquamarine hover:underline">forms.google.com</a> and click the blank template. Give it a clear title like "NPS Survey — {Your company}".
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 2: Add the NPS question</h3>
                        <p class="text-gray-700 mb-3">
                            Type the standard NPS question into the question field:
                        </p>
                        <div class="bg-white border-2 border-black rounded-md p-4 italic text-gray-800">
                            "How likely are you to recommend {Your company} to a friend or colleague?"
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 3: Switch the question type to Linear Scale</h3>
                        <p class="text-gray-700">
                            In the question type dropdown (top right of the question), choose <strong>Linear Scale</strong>. Set the range to <strong>0 to 10</strong>. Label the low end <em>"Not at all likely"</em> and the high end <em>"Extremely likely"</em>. Mark the question as required.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 4: Add an open-ended follow-up</h3>
                        <p class="text-gray-700">
                            Add a Paragraph question: <em>"What's the main reason for your score?"</em>. The "why" behind the number is where most of the actionable insight lives.
                        </p>
                        <p class="text-sm text-gray-500 mt-2">
                            ⚠️ Google Forms can't show different follow-ups to Promoters vs Detractors — branching logic doesn't work on Linear Scale fields. More on that below.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3">Step 5: Send responses to a Google Sheet</h3>
                        <p class="text-gray-700">
                            Open the <strong>Responses</strong> tab → click the green Sheets icon → "Create a new spreadsheet". That's where you'll calculate the score in a moment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Calculate -->
<div class="bg-white py-20" id="calculate-formula">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Calculate your Net Promoter Score in Google Sheets</h2>
                <p class="text-lg text-gray-700 mb-6">
                    Google Forms only collects raw responses — there's no built-in NPS calculation. Drop this single formula into your linked Sheet to get the score automatically.
                </p>
                <p class="text-gray-700 mb-3">
                    Assuming your NPS scores live in <strong>column B starting at row 2</strong>:
                </p>
                <div class="bg-gray-900 text-aquamarine rounded-xl p-5 font-mono text-sm overflow-x-auto mb-4">
                    =((COUNTIF(B2:B,"&gt;=9") - COUNTIF(B2:B,"&lt;=6")) / COUNTA(B2:B)) * 100
                </div>
                <p class="text-gray-700 mb-6">
                    That returns <strong>% Promoters minus % Detractors</strong>, scaled to the standard -100 to +100 range.
                </p>

                <h3 class="text-2xl font-bold mb-3">Break it down further?</h3>
                <p class="text-gray-700 mb-4">
                    Add these in separate cells to see each segment:
                </p>
                <div class="space-y-3 mb-6">
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Count of Promoters</div>
                        <div class="bg-gray-900 text-aquamarine rounded-md p-3 font-mono text-sm overflow-x-auto">=COUNTIF(B2:B,"&gt;=9")</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Count of Passives</div>
                        <div class="bg-gray-900 text-aquamarine rounded-md p-3 font-mono text-sm overflow-x-auto">=COUNTIFS(B2:B,"&gt;=7",B2:B,"&lt;=8")</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Count of Detractors</div>
                        <div class="bg-gray-900 text-aquamarine rounded-md p-3 font-mono text-sm overflow-x-auto">=COUNTIF(B2:B,"&lt;=6")</div>
                    </div>
                </div>

                <div class="bg-amber-50 border-2 border-black rounded-xl p-6">
                    <p class="font-semibold mb-2">💡 Skip the formula entirely</p>
                    <p class="text-gray-700">
                        Paste your response data into our free <a href="/free-tools/nps-calculator/" class="text-aquamarine hover:underline font-semibold">NPS calculator</a> and it'll compute the score, segment breakdown, and benchmark in one click.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Limitations -->
<div class="bg-gray-50 py-20" id="limitations">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">What Google Forms can't do for NPS</h2>
                <p class="text-lg text-gray-700 mb-8">
                    The Linear Scale workaround gets you a survey. But the moment you want to <em>do</em> something with the data, you hit Google Forms' ceiling.
                </p>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold mb-2">🚫 No native NPS field</h3>
                        <p class="text-gray-700">
                            Linear Scale is generic. You can't enforce the 0–10 range as "NPS", and the form has no awareness of Promoter/Passive/Detractor segments — that logic only lives in your head and your Sheet.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🔀 No conditional follow-ups by segment</h3>
                        <p class="text-gray-700">
                            Google Forms' branching only works on multiple-choice and dropdown questions. You <em>cannot</em> route Promoters to "What did we do well?" and Detractors to "What could we improve?" without an awkward extra question.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">📉 No real-time score</h3>
                        <p class="text-gray-700">
                            There's no NPS dashboard, no live score, no segment chart. You see one bar graph of raw counts on the Responses tab and have to compute everything else by hand in Sheets.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">🎨 Generic Google Forms styling</h3>
                        <p class="text-gray-700">
                            The 0–10 buttons render as plain radio buttons with the Google Forms color band — fine for an internal survey, off-brand for anything customer-facing.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold mb-2">📧 No automation by score</h3>
                        <p class="text-gray-700">
                            Want to alert a CSM when a customer scores 0–3, or trigger a referral request when someone scores 10? You'll need an Apps Script or Zapier glue layer — Google Forms can't do it on its own.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Youform Solution -->
<div class="bg-amber-50 py-20" id="youform-solution">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">The faster way: a real NPS field in Youform</h2>
                <p class="text-lg text-gray-700 mb-8">
                    <strong>Youform</strong> has a dedicated NPS question type with the standard 0–10 scale, the right labels, and segment-aware logic built in. No Linear Scale workaround, no Sheets formula, no broken branching.
                </p>

                <div class="bg-white p-8 rounded-xl border-2 border-black mb-8">
                    <h3 class="text-2xl font-bold mb-6">What you get out of the box</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">1</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Pre-built NPS field</p>
                                <p class="text-gray-600 text-sm mt-1">Drop the NPS block into your form. The 0–10 scale, endpoint labels, and Promoter/Passive/Detractor segments are wired up automatically.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">2</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Segment-aware follow-up questions</p>
                                <p class="text-gray-600 text-sm mt-1">Conditional logic works on the score itself. Ask Promoters "What did we do well?" and Detractors "What could we fix?" without an extra dropdown.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">3</div>
                            <div>
                                <p class="text-gray-800 font-semibold">Branded styling</p>
                                <p class="text-gray-600 text-sm mt-1">Custom colors, fonts, and logo — survey looks like your product, not a Google Doc.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live NPS form embed -->
                <div class="mb-8">
                    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3 mb-4">
                        <div>
                            <p class="inline-block bg-vivid-yellow border-2 border-black rounded-full px-3 py-1 text-xs font-bold mb-2">Live template</p>
                            <h3 class="text-2xl font-bold">Try the NPS survey</h3>
                            <p class="text-gray-700 mt-1">Score it, hit Next — you'll see the Promoter / Detractor follow-up route in action.</p>
                        </div>
                        <a href="https://app.youform.com/use-template?template=https://app.youform.com/forms/7re26vhs" class="inline-block bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-5 py-2 text-black rounded-md font-semibold whitespace-nowrap self-start sm:self-auto">
                            Use this template →
                        </a>
                    </div>
                    <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl overflow-hidden">
                        <div data-youform-embed data-form="7re26vhs" data-base-url="https://app.youform.com" data-width="100%" data-height="600"></div>
                    </div>
                </div>

                <!-- Live results report -->
                <div class="mb-8">
                    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3 mb-4">
                        <div class="flex items-center gap-3 flex-wrap">
                            <div>
                                <p class="inline-block bg-aquamarine border-2 border-black rounded-full px-3 py-1 text-xs font-bold mb-2">Live results</p>
                                <h3 class="text-2xl font-bold">…and here's the sharable results report</h3>
                                <p class="text-gray-700 mt-1">Real responses to the form above. NPS score, segment breakdown, and follow-up answers — on one page you can share with your team or stakeholders.</p>
                            </div>
                            <span id="report-refresh-pill" class="hidden items-center gap-2 bg-vivid-yellow border-2 border-black rounded-full px-3 py-1 text-xs font-bold">
                                <svg class="animate-spin h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>
                                Updating results…
                            </span>
                        </div>
                        <a href="https://app.youform.com/form-report/f9f4378d-9dbd-4ed1-a687-614066501636" target="_blank" class="inline-block underline hover:no-underline text-gray-800 font-semibold whitespace-nowrap self-start sm:self-auto">
                            Open full report ↗
                        </a>
                    </div>
                    <div class="bg-white border-2 border-black rounded-xl drop-shadow-6xl overflow-hidden">
                        <iframe
                            id="nps-report-iframe"
                            src="https://app.youform.com/form-report/f9f4378d-9dbd-4ed1-a687-614066501636"
                            loading="lazy"
                            width="100%"
                            height="700"
                            frameborder="0"
                            title="Youform sharable NPS results report"
                            class="block w-full"></iframe>
                    </div>
                    <p class="text-sm text-gray-500 mt-3">
                        Google Forms shows you a static bar chart per question. Youform reports compute the NPS score, group responses by Promoter / Passive / Detractor, summarize text answers, and update in real time — and you can share the link with anyone, no login required.
                    </p>
                </div>

                <script src="https://app.youform.com/embed.js"></script>
                <script>
                    (function () {
                        var REPORT_BASE = 'https://app.youform.com/form-report/f9f4378d-9dbd-4ed1-a687-614066501636';
                        var REFRESH_DELAY_MS = 5000;
                        var iframe = document.getElementById('nps-report-iframe');
                        var pill = document.getElementById('report-refresh-pill');
                        if (!iframe) return;

                        window.addEventListener('message', function (event) {
                            if (event.data && event.data === 'youformComplete') {
                                if (pill) {
                                    pill.classList.remove('hidden');
                                    pill.classList.add('inline-flex');
                                }
                                setTimeout(function () {
                                    iframe.src = REPORT_BASE + '?t=' + Date.now();
                                    if (pill) {
                                        var hideAfter = setTimeout(function () {
                                            pill.classList.add('hidden');
                                            pill.classList.remove('inline-flex');
                                            clearTimeout(hideAfter);
                                        }, 2500);
                                    }
                                }, REFRESH_DELAY_MS);
                            }
                        });
                    })();
                </script>

                <!-- Migration callout -->
                <div class="bg-pale-violet border-2 border-black rounded-xl p-6 mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h3 class="text-xl font-bold mb-1">Already built it in Google Forms?</h3>
                        <p class="text-gray-800">
                            Paste your Google Forms URL into our free converter and we'll rebuild it in Youform — questions, options, and structure intact. Then swap the Linear Scale for a proper NPS field.
                        </p>
                    </div>
                    <a href="https://app.youform.com/googleform-to-youform" target="_blank" class="inline-block bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-6 py-2 text-black rounded-md font-semibold whitespace-nowrap">
                        Convert your form →
                    </a>
                </div>

                <div class="text-center">
                    <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <p class="text-sm text-gray-600 mt-3">Free forever · Unlimited NPS surveys · Unlimited responses · No credit card required</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison Table -->
<div class="bg-white py-20" id="comparison">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
            Google Forms NPS vs. Youform NPS
        </h2>
        <div class="max-w-4xl mx-auto overflow-x-auto bg-white border-2 border-black rounded-xl drop-shadow-6xl">
            <table class="min-w-full text-left text-sm md:text-base">
                <thead class="bg-gray-100 border-b-2 border-black">
                    <tr>
                        <th class="px-6 py-4"></th>
                        <th class="px-6 py-4 text-center">Google Forms</th>
                        <th class="px-6 py-4 text-center bg-amber-50">Youform</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Dedicated NPS question type</td>
                        <td class="px-6 py-4 text-center">❌ Use Linear Scale workaround</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Branching on the score (0–10)</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Automatic Promoter/Passive/Detractor segmentation</td>
                        <td class="px-6 py-4 text-center">❌ Manual in Sheets</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Score calculation</td>
                        <td class="px-6 py-4 text-center">Sheets formula</td>
                        <td class="px-6 py-4 text-center bg-amber-50">Pair with free <a href="/free-tools/nps-calculator/" class="underline hover:no-underline">NPS calculator</a></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Custom branding (colors, logo, fonts)</td>
                        <td class="px-6 py-4 text-center">Limited</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Pre-built NPS template</td>
                        <td class="px-6 py-4 text-center">❌</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold bg-gray-50">Sharable real-time results report</td>
                        <td class="px-6 py-4 text-center">❌ Static bar charts only</td>
                        <td class="px-6 py-4 text-center bg-amber-50">✅</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold bg-gray-50">Cost</td>
                        <td class="px-6 py-4 text-center">Free</td>
                        <td class="px-6 py-4 text-center bg-amber-50">Free (unlimited responses)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('_partials.testimonials-carousel')

<!-- FAQ -->
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
                                <p class="text-black font-medium flex-grow">Does Google Forms have a built-in NPS question type?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    No. Google Forms doesn't have a dedicated NPS field. To build an NPS survey you use the Linear Scale question type set from 0 to 10, label the endpoints "Not at all likely" and "Extremely likely", and then calculate the score manually in Google Sheets using the % of Promoters (9–10) minus the % of Detractors (0–6).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What is the formula to calculate NPS in Google Sheets?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    If your scores are in column B starting at row 2, use: <code class="bg-gray-100 px-2 py-1 rounded">=((COUNTIF(B2:B,"&gt;=9")-COUNTIF(B2:B,"&lt;=6"))/COUNTA(B2:B))*100</code>. That returns the % of Promoters minus the % of Detractors as your NPS score. The result ranges from -100 to +100. Anything above 0 is positive, above 50 is excellent, above 70 is world-class. Or skip the formula and paste into our <a href="/free-tools/nps-calculator/" class="text-aquamarine hover:underline font-semibold">free NPS calculator</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">What are Promoters, Passives, and Detractors?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Respondents who score 9 or 10 are <strong>Promoters</strong> — loyal enthusiasts likely to recommend you. Scores of 7 or 8 are <strong>Passives</strong> — satisfied but unenthusiastic. Scores 0 through 6 are <strong>Detractors</strong> — unhappy customers who may damage your brand. NPS = % Promoters minus % Detractors. Passives count toward your total response volume but not toward the score itself.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Can I show different follow-ups to Promoters vs Detractors in Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Not directly. Google Forms' branching logic only works on multiple-choice and dropdown questions — not on the Linear Scale field you'd use for NPS. The workaround is to add a separate multiple-choice question grouping respondents into Promoter/Passive/Detractor buckets, then branch from that. <a href="https://app.youform.com/register" class="text-aquamarine hover:underline font-semibold">Youform's conditional logic</a> works on any field including 0–10 scales, so you can ask "What did we do well?" to Promoters and "What could we improve?" to Detractors automatically.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Is there a free NPS template for Google Forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    There's no first-party Google Forms NPS template — you have to build it yourself from the blank-form template using the steps above. Youform has a <a href="/templates/t/net-promoter-scorea-nps-survey-template" class="text-aquamarine hover:underline font-semibold">free pre-built NPS survey template</a> with the proper 0–10 scale, segment-aware follow-up questions, and a thank-you page. Pair it with the free <a href="/free-tools/nps-calculator/" class="text-aquamarine hover:underline font-semibold">NPS calculator</a> to compute your score from any list of responses.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How often should I send an NPS survey?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Quarterly is standard for a relationship NPS survey — frequent enough to track trend, rare enough to avoid survey fatigue. Transactional NPS, sent right after a specific touchpoint like a support resolution or onboarding milestone, can run continuously. Don't survey the same customer more than once per quarter for relationship NPS.
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
            Skip the Linear Scale workaround
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Build your NPS survey with a real NPS field, segment-aware follow-ups, and branded styling — free, unlimited responses.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
            Create free account
        </a>
        <p class="text-sm text-gray-700 mt-4">Free forever · Unlimited responses · No credit card required</p>
    </div>
</div>

@include('_partials.ask-ai-to-recommend', ['prompt' => 'I+need+an+NPS+survey+to+measure+customer+loyalty'])

@include('partials.footer')

@endsection
