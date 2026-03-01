---
title: "NPS Calculator — Free Net Promoter Score Tool | Youform"
description: "Calculate your Net Promoter Score instantly. Free NPS calculator with visual breakdown of Promoters, Passives, and Detractors. No signup required."
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div>
        @include('partials.nav')

        <!-- Hero Section -->
        <div class="relative max-w-4xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold text-center">Free NPS Calculator</h1>
                <p class="text-center text-gray-600 mt-3">Calculate your Net Promoter Score from survey responses. See your breakdown of Promoters, Passives, and Detractors.</p>

                <div class="relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10 w-full max-w-2xl">
                    <div 
                        x-data="{
                            responses: {
                                score0: 0, score1: 0, score2: 0, score3: 0, score4: 0, score5: 0,
                                score6: 0, score7: 0, score8: 0, score9: 0, score10: 0
                            },
                            result: null,
                            error: '',
                            
                            calculate() {
                                this.error = '';
                                this.result = null;
                                
                                // Count by category
                                const detractors = (parseInt(this.responses.score0) || 0) + 
                                                   (parseInt(this.responses.score1) || 0) + 
                                                   (parseInt(this.responses.score2) || 0) + 
                                                   (parseInt(this.responses.score3) || 0) + 
                                                   (parseInt(this.responses.score4) || 0) + 
                                                   (parseInt(this.responses.score5) || 0) + 
                                                   (parseInt(this.responses.score6) || 0);
                                
                                const passives = (parseInt(this.responses.score7) || 0) + 
                                                 (parseInt(this.responses.score8) || 0);
                                
                                const promoters = (parseInt(this.responses.score9) || 0) + 
                                                  (parseInt(this.responses.score10) || 0);
                                
                                const total = detractors + passives + promoters;
                                
                                if (total === 0) {
                                    this.error = 'Please enter at least one response';
                                    return;
                                }
                                
                                const detractorPct = (detractors / total) * 100;
                                const passivePct = (passives / total) * 100;
                                const promoterPct = (promoters / total) * 100;
                                const nps = promoterPct - detractorPct;
                                
                                this.result = {
                                    nps: Math.round(nps),
                                    total: total,
                                    promoters: promoters,
                                    passives: passives,
                                    detractors: detractors,
                                    promoterPct: promoterPct.toFixed(1),
                                    passivePct: passivePct.toFixed(1),
                                    detractorPct: detractorPct.toFixed(1)
                                };
                            },
                            
                            getNPSColor() {
                                if (!this.result) return 'text-gray-800';
                                if (this.result.nps >= 50) return 'text-green-600';
                                if (this.result.nps >= 0) return 'text-yellow-600';
                                return 'text-red-600';
                            },
                            
                            getNPSLabel() {
                                if (!this.result) return '';
                                if (this.result.nps >= 70) return 'Excellent';
                                if (this.result.nps >= 50) return 'Great';
                                if (this.result.nps >= 30) return 'Good';
                                if (this.result.nps >= 0) return 'Needs Improvement';
                                return 'Critical';
                            },
                            
                            reset() {
                                this.responses = {
                                    score0: 0, score1: 0, score2: 0, score3: 0, score4: 0, score5: 0,
                                    score6: 0, score7: 0, score8: 0, score9: 0, score10: 0
                                };
                                this.result = null;
                                this.error = '';
                            }
                        }"
                        class="drop-shadow-none z-10">
                        
                        <p class="text-sm text-gray-600 mb-6 text-center">Enter the number of responses for each score (0-10)</p>
                        
                        <!-- NPS Scale Input -->
                        <div class="space-y-4">
                            <!-- Detractors (0-6) -->
                            <div class="bg-red-50 rounded-lg p-4 border border-red-200">
                                <p class="text-sm font-medium text-red-700 mb-3">😞 Detractors (0-6)</p>
                                <div class="grid grid-cols-7 gap-2">
                                    <template x-for="i in 7" :key="'d'+i">
                                        <div class="text-center">
                                            <label class="block text-xs text-gray-500 mb-1" x-text="i-1"></label>
                                            <input 
                                                type="number" 
                                                x-model="responses['score' + (i-1)]"
                                                min="0"
                                                class="w-full px-1 py-2 text-center text-sm border-2 border-red-200 rounded focus:border-red-400 focus:outline-none"
                                                placeholder="0"
                                            >
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <!-- Passives (7-8) -->
                            <div class="bg-yellow-50 rounded-lg p-4 border border-yellow-200">
                                <p class="text-sm font-medium text-yellow-700 mb-3">😐 Passives (7-8)</p>
                                <div class="grid grid-cols-2 gap-2 max-w-[120px] mx-auto">
                                    <template x-for="i in [7, 8]" :key="'p'+i">
                                        <div class="text-center">
                                            <label class="block text-xs text-gray-500 mb-1" x-text="i"></label>
                                            <input 
                                                type="number" 
                                                x-model="responses['score' + i]"
                                                min="0"
                                                class="w-full px-1 py-2 text-center text-sm border-2 border-yellow-200 rounded focus:border-yellow-400 focus:outline-none"
                                                placeholder="0"
                                            >
                                        </div>
                                    </template>
                                </div>
                            </div>
                            
                            <!-- Promoters (9-10) -->
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <p class="text-sm font-medium text-green-700 mb-3">😊 Promoters (9-10)</p>
                                <div class="grid grid-cols-2 gap-2 max-w-[120px] mx-auto">
                                    <template x-for="i in [9, 10]" :key="'pr'+i">
                                        <div class="text-center">
                                            <label class="block text-xs text-gray-500 mb-1" x-text="i"></label>
                                            <input 
                                                type="number" 
                                                x-model="responses['score' + i]"
                                                min="0"
                                                class="w-full px-1 py-2 text-center text-sm border-2 border-green-200 rounded focus:border-green-400 focus:outline-none"
                                                placeholder="0"
                                            >
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-center gap-4 mt-6">
                            <button @click="calculate" class="w-full sm:w-auto bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md font-medium">
                                Calculate NPS
                            </button>
                            <button @click="reset" class="w-full sm:w-auto bg-gray-200 border-2 border-black px-6 py-2 text-black rounded-md hover:bg-gray-300">
                                Reset
                            </button>
                        </div>
                        
                        <!-- Error Message -->
                        <div x-show="error" x-cloak class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                            <p class="text-red-600 text-center" x-text="error"></p>
                        </div>
                        
                        <!-- Results -->
                        <div x-show="result" x-cloak class="mt-8">
                            <div class="bg-purple-50 border-2 border-purple-200 rounded-xl p-6">
                                <h2 class="text-lg font-semibold text-purple-800 mb-4 text-center">Your NPS Score</h2>
                                
                                <!-- Big NPS Number -->
                                <div class="text-center mb-6">
                                    <p class="text-6xl font-bold" :class="getNPSColor()" x-text="result?.nps"></p>
                                    <p class="text-lg font-medium mt-2" :class="getNPSColor()" x-text="getNPSLabel()"></p>
                                    <p class="text-sm text-gray-500 mt-1">Based on <span x-text="result?.total"></span> responses</p>
                                </div>
                                
                                <!-- Breakdown Bar -->
                                <div class="mb-6">
                                    <div class="flex rounded-full overflow-hidden h-8 border-2 border-gray-200">
                                        <div class="bg-red-400 flex items-center justify-center text-xs text-white font-medium" 
                                             :style="'width: ' + result?.detractorPct + '%'"
                                             x-show="result?.detractorPct > 5">
                                            <span x-text="result?.detractorPct + '%'"></span>
                                        </div>
                                        <div class="bg-yellow-400 flex items-center justify-center text-xs text-gray-800 font-medium" 
                                             :style="'width: ' + result?.passivePct + '%'"
                                             x-show="result?.passivePct > 5">
                                            <span x-text="result?.passivePct + '%'"></span>
                                        </div>
                                        <div class="bg-green-400 flex items-center justify-center text-xs text-white font-medium" 
                                             :style="'width: ' + result?.promoterPct + '%'"
                                             x-show="result?.promoterPct > 5">
                                            <span x-text="result?.promoterPct + '%'"></span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500 mt-2">
                                        <span>Detractors</span>
                                        <span>Passives</span>
                                        <span>Promoters</span>
                                    </div>
                                </div>
                                
                                <!-- Stats Grid -->
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="bg-white rounded-lg p-3 border border-red-200 text-center">
                                        <p class="text-2xl font-bold text-red-600" x-text="result?.detractors"></p>
                                        <p class="text-xs text-gray-500">Detractors</p>
                                        <p class="text-xs text-gray-400" x-text="result?.detractorPct + '%'"></p>
                                    </div>
                                    <div class="bg-white rounded-lg p-3 border border-yellow-200 text-center">
                                        <p class="text-2xl font-bold text-yellow-600" x-text="result?.passives"></p>
                                        <p class="text-xs text-gray-500">Passives</p>
                                        <p class="text-xs text-gray-400" x-text="result?.passivePct + '%'"></p>
                                    </div>
                                    <div class="bg-white rounded-lg p-3 border border-green-200 text-center">
                                        <p class="text-2xl font-bold text-green-600" x-text="result?.promoters"></p>
                                        <p class="text-xs text-gray-500">Promoters</p>
                                        <p class="text-xs text-gray-400" x-text="result?.promoterPct + '%'"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block absolute -top-10 -right-40 -z-10">
                        <img src="/assets/images/banner-blob.png" class="w-72" alt="">
                    </div>

                    <div class="hidden lg:block absolute top-60 -left-40 -z-10">
                        <img src="/assets/images/feature-blob.png" class="w-72" alt="">
                    </div>
                </div>

                <!-- How to Use Section -->
                <div class="w-full max-w-2xl mt-8">
                    <h2 class="text-2xl font-bold mb-4">How to Use This NPS Calculator</h2>
                    <ol class="list-decimal list-inside space-y-3 text-gray-700">
                        <li><strong>Collect responses</strong> to the question: "How likely are you to recommend us to a friend?" (0-10 scale)</li>
                        <li><strong>Count responses</strong> for each score and enter them in the corresponding fields</li>
                        <li><strong>Click "Calculate NPS"</strong> to see your Net Promoter Score</li>
                        <li><strong>Review the breakdown</strong> of Promoters, Passives, and Detractors</li>
                    </ol>
                </div>

                <!-- What is Section -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">What is Net Promoter Score (NPS)?</h2>
                    <p class="text-gray-700 mb-4">
                        Net Promoter Score (NPS) is a customer loyalty metric that measures how likely customers are to recommend your product or service. It's based on a single question: "On a scale of 0-10, how likely are you to recommend us to a friend or colleague?"
                    </p>
                    <p class="text-gray-700 mb-4">
                        Respondents are grouped into three categories:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 ml-4 mb-4">
                        <li><strong class="text-green-600">Promoters (9-10):</strong> Loyal enthusiasts who will keep buying and refer others</li>
                        <li><strong class="text-yellow-600">Passives (7-8):</strong> Satisfied but unenthusiastic customers vulnerable to competitors</li>
                        <li><strong class="text-red-600">Detractors (0-6):</strong> Unhappy customers who can damage your brand through negative word-of-mouth</li>
                    </ul>
                    <p class="text-gray-700">
                        NPS ranges from -100 (all Detractors) to +100 (all Promoters). A positive score is good, above 50 is excellent.
                    </p>
                </div>

                <!-- Formula Section -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">The Formula</h2>
                    <div class="bg-gray-100 p-6 rounded-lg border border-gray-200">
                        <p class="text-center text-lg font-mono">
                            NPS = % Promoters − % Detractors
                        </p>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p class="mb-2"><strong>Example:</strong></p>
                        <p>If 60% of respondents are Promoters and 20% are Detractors:</p>
                        <p class="font-mono mt-2">NPS = 60% − 20% = <strong>40</strong></p>
                    </div>
                </div>

                <!-- NPS Benchmarks -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">NPS Score Benchmarks</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-red-50 rounded-lg p-4 text-center border border-red-200">
                            <p class="text-2xl font-bold text-red-600">Below 0</p>
                            <p class="text-sm text-gray-600">Needs Work</p>
                        </div>
                        <div class="bg-yellow-50 rounded-lg p-4 text-center border border-yellow-200">
                            <p class="text-2xl font-bold text-yellow-600">0-30</p>
                            <p class="text-sm text-gray-600">Good</p>
                        </div>
                        <div class="bg-green-50 rounded-lg p-4 text-center border border-green-200">
                            <p class="text-2xl font-bold text-green-600">30-70</p>
                            <p class="text-sm text-gray-600">Great</p>
                        </div>
                        <div class="bg-green-100 rounded-lg p-4 text-center border border-green-300">
                            <p class="text-2xl font-bold text-green-700">70+</p>
                            <p class="text-sm text-gray-600">Excellent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Embed CTA -->
        @include('_partials.free-tools-form-embed', [
            'headline' => 'Ready to run your own NPS survey?',
            'subheadline' => 'Create a beautiful NPS survey in minutes. Collect responses and track your score over time. Try it yourself 👇'
        ])

        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto px-4 py-16">
            <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
            
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">What's a good NPS score?</h3>
                    <p class="text-gray-700">
                        Any score above 0 is considered good (more Promoters than Detractors). Scores above 50 are excellent, and above 70 is world-class. However, benchmarks vary by industry — B2B companies typically have higher NPS than B2C.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">How many responses do I need for a reliable NPS?</h3>
                    <p class="text-gray-700">
                        For statistical reliability, aim for at least 100 responses. Smaller samples can give you directional insights, but the margin of error will be higher. For ongoing tracking, consistency in your sample size matters more than absolute numbers.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">How often should I measure NPS?</h3>
                    <p class="text-gray-700">
                        Most companies measure NPS quarterly or after key touchpoints (post-purchase, post-support). Transactional NPS (after specific interactions) and relationship NPS (periodic surveys) serve different purposes — consider using both.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Why do Passives (7-8) not count in NPS?</h3>
                    <p class="text-gray-700">
                        Passives are satisfied but not enthusiastic. They won't actively promote you or damage your reputation. The NPS formula focuses on the gap between your strongest advocates and critics to measure true loyalty momentum.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">What should I do with my NPS results?</h3>
                    <p class="text-gray-700">
                        Follow up with Detractors to understand and address their concerns. Ask Promoters for referrals and testimonials. Track NPS over time to measure the impact of improvements. The score itself is less important than the trends and actions you take.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

<!-- FAQ Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What's a good NPS score?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Any score above 0 is considered good (more Promoters than Detractors). Scores above 50 are excellent, and above 70 is world-class. However, benchmarks vary by industry — B2B companies typically have higher NPS than B2C."
            }
        },
        {
            "@type": "Question",
            "name": "How many responses do I need for a reliable NPS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For statistical reliability, aim for at least 100 responses. Smaller samples can give you directional insights, but the margin of error will be higher. For ongoing tracking, consistency in your sample size matters more than absolute numbers."
            }
        },
        {
            "@type": "Question",
            "name": "How often should I measure NPS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most companies measure NPS quarterly or after key touchpoints (post-purchase, post-support). Transactional NPS (after specific interactions) and relationship NPS (periodic surveys) serve different purposes — consider using both."
            }
        },
        {
            "@type": "Question",
            "name": "Why do Passives (7-8) not count in NPS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Passives are satisfied but not enthusiastic. They won't actively promote you or damage your reputation. The NPS formula focuses on the gap between your strongest advocates and critics to measure true loyalty momentum."
            }
        },
        {
            "@type": "Question",
            "name": "What should I do with my NPS results?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Follow up with Detractors to understand and address their concerns. Ask Promoters for referrals and testimonials. Track NPS over time to measure the impact of improvements. The score itself is less important than the trends and actions you take."
            }
        }
    ]
}
</script>

@endsection
