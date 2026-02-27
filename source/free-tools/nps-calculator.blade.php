---
title: "NPS Calculator — Free Net Promoter Score Calculator | Youform"
description: "Calculate your Net Promoter Score (NPS) instantly with our free calculator. Enter your survey responses and get your NPS with detailed breakdowns. No signup required."
---

@extends('_layouts.main')

@section('body')

<div>
    <div>
        @include('partials.nav')

        <!-- Hero Section -->
        <div class="relative max-w-4xl mx-auto mt-20 pb-10 px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Free NPS Calculator</h1>
                <p class="text-xl text-gray-600 mt-4 max-w-2xl mx-auto">
                    Calculate your Net Promoter Score instantly. Enter your survey responses and see your NPS with a detailed breakdown.
                </p>
            </div>
        </div>

        <!-- Calculator Tool -->
        <div class="max-w-4xl mx-auto px-4 pb-16">
            <div 
                x-data="{
                    promoters: '',
                    passives: '',
                    detractors: '',
                    calculated: false,
                    nps: 0,
                    totalResponses: 0,
                    promoterPercent: 0,
                    passivePercent: 0,
                    detractorPercent: 0,
                    
                    calculate() {
                        const p = parseInt(this.promoters) || 0;
                        const pa = parseInt(this.passives) || 0;
                        const d = parseInt(this.detractors) || 0;
                        
                        this.totalResponses = p + pa + d;
                        
                        if (this.totalResponses === 0) {
                            alert('Please enter at least one response');
                            return;
                        }
                        
                        this.promoterPercent = ((p / this.totalResponses) * 100).toFixed(1);
                        this.passivePercent = ((pa / this.totalResponses) * 100).toFixed(1);
                        this.detractorPercent = ((d / this.totalResponses) * 100).toFixed(1);
                        
                        this.nps = Math.round(this.promoterPercent - this.detractorPercent);
                        this.calculated = true;
                    },
                    
                    reset() {
                        this.promoters = '';
                        this.passives = '';
                        this.detractors = '';
                        this.calculated = false;
                        this.nps = 0;
                    },
                    
                    getNpsColor() {
                        if (this.nps >= 70) return 'text-green-600';
                        if (this.nps >= 30) return 'text-green-500';
                        if (this.nps >= 0) return 'text-yellow-500';
                        return 'text-red-500';
                    },
                    
                    getNpsLabel() {
                        if (this.nps >= 70) return 'Excellent';
                        if (this.nps >= 30) return 'Great';
                        if (this.nps >= 0) return 'Good';
                        if (this.nps >= -50) return 'Needs Improvement';
                        return 'Critical';
                    }
                }"
                class="bg-white border-2 border-black rounded-xl p-8 md:p-10"
            >
                <!-- Input Form -->
                <div x-show="!calculated">
                    <p class="text-gray-600 mb-6 text-center">
                        Enter the number of responses in each category from your NPS survey:
                    </p>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Promoters -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                            <div class="flex items-center justify-between mb-2">
                                <label for="promoters" class="font-semibold text-green-700">Promoters</label>
                                <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded">9-10</span>
                            </div>
                            <input 
                                x-model="promoters"
                                type="number" 
                                id="promoters" 
                                min="0"
                                placeholder="0"
                                class="w-full mt-2 px-4 py-3 text-2xl font-bold text-center border-2 border-green-300 rounded-lg focus:border-green-500 focus:ring-0"
                            >
                            <p class="text-xs text-green-600 mt-2 text-center">Loyal enthusiasts</p>
                        </div>
                        
                        <!-- Passives -->
                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                            <div class="flex items-center justify-between mb-2">
                                <label for="passives" class="font-semibold text-yellow-700">Passives</label>
                                <span class="text-sm text-yellow-600 bg-yellow-100 px-2 py-1 rounded">7-8</span>
                            </div>
                            <input 
                                x-model="passives"
                                type="number" 
                                id="passives" 
                                min="0"
                                placeholder="0"
                                class="w-full mt-2 px-4 py-3 text-2xl font-bold text-center border-2 border-yellow-300 rounded-lg focus:border-yellow-500 focus:ring-0"
                            >
                            <p class="text-xs text-yellow-600 mt-2 text-center">Satisfied but indifferent</p>
                        </div>
                        
                        <!-- Detractors -->
                        <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                            <div class="flex items-center justify-between mb-2">
                                <label for="detractors" class="font-semibold text-red-700">Detractors</label>
                                <span class="text-sm text-red-600 bg-red-100 px-2 py-1 rounded">0-6</span>
                            </div>
                            <input 
                                x-model="detractors"
                                type="number" 
                                id="detractors" 
                                min="0"
                                placeholder="0"
                                class="w-full mt-2 px-4 py-3 text-2xl font-bold text-center border-2 border-red-300 rounded-lg focus:border-red-500 focus:ring-0"
                            >
                            <p class="text-xs text-red-600 mt-2 text-center">Unhappy customers</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <button 
                            @click="calculate()"
                            class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-10 py-3 rounded-lg transition-colors"
                        >
                            Calculate NPS
                        </button>
                    </div>
                </div>
                
                <!-- Results -->
                <div x-show="calculated" x-cloak>
                    <div class="text-center mb-8">
                        <p class="text-gray-600 mb-2">Your Net Promoter Score</p>
                        <div class="text-7xl font-bold" :class="getNpsColor()" x-text="nps"></div>
                        <p class="text-lg font-medium mt-2" :class="getNpsColor()" x-text="getNpsLabel()"></p>
                    </div>
                    
                    <!-- NPS Scale -->
                    <div class="relative h-8 bg-gradient-to-r from-red-500 via-yellow-400 to-green-500 rounded-full mb-8">
                        <div 
                            class="absolute top-0 w-4 h-8 bg-black rounded-full transform -translate-x-1/2"
                            :style="'left: ' + ((parseInt(nps) + 100) / 2) + '%'"
                        ></div>
                        <div class="flex justify-between text-xs text-gray-600 mt-10">
                            <span>-100</span>
                            <span>0</span>
                            <span>+100</span>
                        </div>
                    </div>
                    
                    <!-- Breakdown -->
                    <div class="grid md:grid-cols-3 gap-4 mt-12">
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <p class="text-sm text-green-600">Promoters</p>
                            <p class="text-2xl font-bold text-green-700" x-text="promoterPercent + '%'"></p>
                            <p class="text-xs text-gray-500" x-text="promoters + ' responses'"></p>
                        </div>
                        <div class="text-center p-4 bg-yellow-50 rounded-lg">
                            <p class="text-sm text-yellow-600">Passives</p>
                            <p class="text-2xl font-bold text-yellow-700" x-text="passivePercent + '%'"></p>
                            <p class="text-xs text-gray-500" x-text="passives + ' responses'"></p>
                        </div>
                        <div class="text-center p-4 bg-red-50 rounded-lg">
                            <p class="text-sm text-red-600">Detractors</p>
                            <p class="text-2xl font-bold text-red-700" x-text="detractorPercent + '%'"></p>
                            <p class="text-xs text-gray-500" x-text="detractors + ' responses'"></p>
                        </div>
                    </div>
                    
                    <p class="text-center text-gray-500 text-sm mt-6">
                        Total responses: <span x-text="totalResponses"></span>
                    </p>
                    
                    <div class="mt-8 text-center">
                        <button 
                            @click="reset()"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium px-6 py-2 rounded-lg transition-colors"
                        >
                            Calculate Again
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- How to Use Section -->
        <div class="bg-gray-50 py-16">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">How to Use This NPS Calculator</h2>
                <div class="space-y-4 text-gray-600">
                    <div class="flex items-start space-x-3">
                        <span class="bg-purple-100 text-purple-600 font-bold rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                        <p>Collect responses to the NPS question: "On a scale of 0-10, how likely are you to recommend [product/company] to a friend or colleague?"</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <span class="bg-purple-100 text-purple-600 font-bold rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                        <p>Count responses by category: Promoters (9-10), Passives (7-8), and Detractors (0-6).</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <span class="bg-purple-100 text-purple-600 font-bold rounded-full w-6 h-6 flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                        <p>Enter the counts above and click "Calculate NPS" to get your score instantly.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- What is NPS Section -->
        <div class="py-16">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">What is Net Promoter Score (NPS)?</h2>
                <div class="prose prose-gray max-w-none">
                    <p>
                        Net Promoter Score (NPS) is a customer loyalty metric that measures how likely your customers are to recommend your product or service to others. Developed by Fred Reichheld at Bain & Company in 2003, NPS has become one of the most widely used metrics for measuring customer satisfaction and loyalty.
                    </p>
                    <p class="mt-4">
                        The NPS is calculated using a single survey question: "On a scale of 0-10, how likely are you to recommend [company/product] to a friend or colleague?" Based on their response, customers fall into three categories:
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li><strong class="text-green-600">Promoters (9-10):</strong> Loyal enthusiasts who will keep buying and refer others, fueling growth.</li>
                        <li><strong class="text-yellow-600">Passives (7-8):</strong> Satisfied but unenthusiastic customers who are vulnerable to competitive offerings.</li>
                        <li><strong class="text-red-600">Detractors (0-6):</strong> Unhappy customers who can damage your brand through negative word-of-mouth.</li>
                    </ul>
                    <p class="mt-4">
                        <strong>The NPS formula:</strong> NPS = % Promoters − % Detractors
                    </p>
                    <p class="mt-4">
                        The score ranges from -100 (everyone is a detractor) to +100 (everyone is a promoter). Generally, an NPS above 0 is good, above 30 is great, and above 70 is excellent.
                    </p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-gray-50 py-16">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Frequently Asked Questions</h2>
                <div class="space-y-6">
                    <div class="bg-white rounded-lg p-6 border border-gray-200">
                        <h3 class="font-semibold text-gray-900 mb-2">What is a good NPS score?</h3>
                        <p class="text-gray-600">A good NPS score varies by industry, but generally: above 0 is good (more promoters than detractors), above 30 is great, above 50 is excellent, and above 70 is world-class. The average NPS across industries is around 32.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-gray-200">
                        <h3 class="font-semibold text-gray-900 mb-2">How many responses do I need for a reliable NPS?</h3>
                        <p class="text-gray-600">For statistical reliability, aim for at least 100 responses. However, even smaller sample sizes can provide directional insights. The more responses you collect, the more reliable your NPS will be.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-gray-200">
                        <h3 class="font-semibold text-gray-900 mb-2">How often should I measure NPS?</h3>
                        <p class="text-gray-600">Most companies measure NPS quarterly or after key customer interactions (transactional NPS). Regular measurement helps you track trends and the impact of improvements over time.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-gray-200">
                        <h3 class="font-semibold text-gray-900 mb-2">Why are passives not included in the NPS calculation?</h3>
                        <p class="text-gray-600">Passives (7-8 scores) are excluded because they're neutral—satisfied but not enthusiastic enough to promote your brand, yet not unhappy enough to detract. NPS focuses on the difference between your strongest advocates and critics.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-gray-200">
                        <h3 class="font-semibold text-gray-900 mb-2">What should I do after calculating my NPS?</h3>
                        <p class="text-gray-600">Follow up with respondents! Ask promoters for referrals or reviews. Reach out to detractors to understand their concerns and try to resolve issues. Use the feedback to improve your product or service.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-purple-600 py-16">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Ready to Collect NPS Data?
                </h2>
                <p class="text-purple-100 mb-8 max-w-2xl mx-auto">
                    Create beautiful NPS surveys with Youform. Get unlimited responses, real-time analytics, and automatic NPS calculation — all for free.
                </p>
                <a 
                    href="https://app.youform.com/register" 
                    class="inline-block bg-white text-purple-600 font-semibold px-8 py-3 rounded-lg hover:bg-purple-50 transition-colors"
                >
                    Create Free NPS Survey →
                </a>
            </div>
        </div>

        @include('partials.footer')
    </div>
</div>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is a good NPS score?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A good NPS score varies by industry, but generally: above 0 is good (more promoters than detractors), above 30 is great, above 50 is excellent, and above 70 is world-class. The average NPS across industries is around 32."
            }
        },
        {
            "@type": "Question",
            "name": "How many responses do I need for a reliable NPS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For statistical reliability, aim for at least 100 responses. However, even smaller sample sizes can provide directional insights. The more responses you collect, the more reliable your NPS will be."
            }
        },
        {
            "@type": "Question",
            "name": "How often should I measure NPS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most companies measure NPS quarterly or after key customer interactions (transactional NPS). Regular measurement helps you track trends and the impact of improvements over time."
            }
        },
        {
            "@type": "Question",
            "name": "Why are passives not included in the NPS calculation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Passives (7-8 scores) are excluded because they're neutral—satisfied but not enthusiastic enough to promote your brand, yet not unhappy enough to detract. NPS focuses on the difference between your strongest advocates and critics."
            }
        },
        {
            "@type": "Question",
            "name": "What should I do after calculating my NPS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Follow up with respondents! Ask promoters for referrals or reviews. Reach out to detractors to understand their concerns and try to resolve issues. Use the feedback to improve your product or service."
            }
        }
    ]
}
</script>

@endsection
