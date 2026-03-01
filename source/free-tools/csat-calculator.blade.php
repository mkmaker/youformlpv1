---
title: "CSAT Calculator — Free Customer Satisfaction Score Calculator | Youform"
description: "Calculate your Customer Satisfaction Score (CSAT) instantly. Enter your survey responses to see your CSAT percentage and benchmark comparison. Free, no signup required."
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
                <h1 class="text-4xl font-bold text-center">Free CSAT Calculator</h1>
                <p class="text-center text-gray-600 mt-3">Calculate your Customer Satisfaction Score and see how you compare to industry benchmarks.</p>

                <div class="relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10 w-full max-w-2xl">
                    <div 
                        x-data="{
                            scaleType: '5point',
                            responses: { 1: '', 2: '', 3: '', 4: '', 5: '' },
                            industry: 'saas',
                            result: null,
                            error: '',
                            
                            benchmarks: {
                                'saas': { score: 78, label: 'SaaS / Software' },
                                'ecommerce': { score: 80, label: 'E-commerce' },
                                'finance': { score: 75, label: 'Financial Services' },
                                'healthcare': { score: 72, label: 'Healthcare' },
                                'hospitality': { score: 83, label: 'Hospitality' },
                                'telecom': { score: 68, label: 'Telecommunications' },
                                'retail': { score: 76, label: 'Retail' },
                                'education': { score: 79, label: 'Education' }
                            },
                            
                            labels: {
                                '5point': {
                                    1: 'Very Dissatisfied',
                                    2: 'Dissatisfied', 
                                    3: 'Neutral',
                                    4: 'Satisfied',
                                    5: 'Very Satisfied'
                                },
                                '7point': {
                                    1: 'Extremely Dissatisfied',
                                    2: 'Moderately Dissatisfied',
                                    3: 'Slightly Dissatisfied',
                                    4: 'Neutral',
                                    5: 'Slightly Satisfied',
                                    6: 'Moderately Satisfied',
                                    7: 'Extremely Satisfied'
                                }
                            },
                            
                            get activeLabels() {
                                return this.labels[this.scaleType];
                            },
                            
                            get maxScale() {
                                return this.scaleType === '5point' ? 5 : 7;
                            },
                            
                            get satisfiedThreshold() {
                                return this.scaleType === '5point' ? 4 : 5;
                            },
                            
                            calculate() {
                                this.error = '';
                                this.result = null;
                                
                                const max = this.maxScale;
                                const threshold = this.satisfiedThreshold;
                                let totalResponses = 0;
                                let satisfiedResponses = 0;
                                let sumWeighted = 0;
                                
                                for (let i = 1; i <= max; i++) {
                                    const count = parseInt(this.responses[i]) || 0;
                                    if (count < 0) {
                                        this.error = 'Response counts cannot be negative';
                                        return;
                                    }
                                    totalResponses += count;
                                    sumWeighted += count * i;
                                    if (i >= threshold) {
                                        satisfiedResponses += count;
                                    }
                                }
                                
                                if (totalResponses === 0) {
                                    this.error = 'Please enter at least one response';
                                    return;
                                }
                                
                                const csatScore = (satisfiedResponses / totalResponses) * 100;
                                const avgRating = sumWeighted / totalResponses;
                                const benchmark = this.benchmarks[this.industry];
                                
                                let rating, ratingColor, ratingBg;
                                if (csatScore >= 80) {
                                    rating = 'Excellent';
                                    ratingColor = 'text-green-700';
                                    ratingBg = 'bg-green-50 border-green-200';
                                } else if (csatScore >= 70) {
                                    rating = 'Good';
                                    ratingColor = 'text-blue-700';
                                    ratingBg = 'bg-blue-50 border-blue-200';
                                } else if (csatScore >= 60) {
                                    rating = 'Average';
                                    ratingColor = 'text-yellow-700';
                                    ratingBg = 'bg-yellow-50 border-yellow-200';
                                } else {
                                    rating = 'Needs Improvement';
                                    ratingColor = 'text-red-700';
                                    ratingBg = 'bg-red-50 border-red-200';
                                }
                                
                                const vsIndustry = csatScore - benchmark.score;
                                
                                this.result = {
                                    csatScore: csatScore.toFixed(1),
                                    avgRating: avgRating.toFixed(2),
                                    totalResponses: totalResponses,
                                    satisfiedResponses: satisfiedResponses,
                                    rating: rating,
                                    ratingColor: ratingColor,
                                    ratingBg: ratingBg,
                                    benchmark: benchmark,
                                    vsIndustry: vsIndustry.toFixed(1),
                                    scaleMax: max
                                };
                            },
                            
                            reset() {
                                this.responses = { 1: '', 2: '', 3: '', 4: '', 5: '', 6: '', 7: '' };
                                this.result = null;
                                this.error = '';
                            },
                            
                            changeScale() {
                                this.responses = { 1: '', 2: '', 3: '', 4: '', 5: '', 6: '', 7: '' };
                                this.result = null;
                            }
                        }"
                        class="drop-shadow-none z-10">
                        
                        <form @submit.prevent="calculate" class="mt-6 space-y-6">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="scaleType" class="block text-sm font-medium text-gray-700 mb-1">Rating Scale</label>
                                    <select 
                                        x-model="scaleType"
                                        @change="changeScale"
                                        id="scaleType"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                    >
                                        <option value="5point">5-Point Scale (1-5)</option>
                                        <option value="7point">7-Point Scale (1-7)</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="industry" class="block text-sm font-medium text-gray-700 mb-1">Your Industry</label>
                                    <select 
                                        x-model="industry" 
                                        id="industry"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                    >
                                        <option value="saas">SaaS / Software</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="finance">Financial Services</option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="hospitality">Hospitality</option>
                                        <option value="telecom">Telecommunications</option>
                                        <option value="retail">Retail</option>
                                        <option value="education">Education</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Response Inputs -->
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <p class="text-sm font-medium text-gray-700 mb-3">Enter the number of responses for each rating:</p>
                                <div class="space-y-3">
                                    <template x-for="i in maxScale" :key="i">
                                        <div class="flex items-center gap-3">
                                            <span class="w-8 text-center font-semibold" :class="i >= satisfiedThreshold ? 'text-green-600' : 'text-gray-500'" x-text="i"></span>
                                            <span class="flex-1 text-sm text-gray-600" x-text="activeLabels[i]"></span>
                                            <input 
                                                x-model="responses[i]" 
                                                type="number" 
                                                min="0"
                                                step="1"
                                                class="w-24 rounded-md py-1 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border border-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 text-sm text-center" 
                                                placeholder="0"
                                            >
                                        </div>
                                    </template>
                                </div>
                                <p class="text-xs text-gray-500 mt-3">
                                    <span class="text-green-600 font-medium">Green numbers</span> count as "satisfied" in your CSAT score
                                </p>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                                <button type="submit" class="w-full sm:w-auto bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md font-medium">
                                    Calculate CSAT
                                </button>
                                <button type="button" @click="reset" class="w-full sm:w-auto bg-gray-200 border-2 border-black px-6 py-2 text-black rounded-md hover:bg-gray-300">
                                    Reset
                                </button>
                            </div>
                        </form>
                        
                        <!-- Error Message -->
                        <div x-show="error" x-cloak class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                            <p class="text-red-600 text-center" x-text="error"></p>
                        </div>
                        
                        <!-- Results -->
                        <div x-show="result" x-cloak class="mt-8">
                            <div :class="result?.ratingBg" class="border-2 rounded-xl p-6">
                                <h2 class="text-lg font-semibold text-gray-800 mb-4 text-center">Your CSAT Score</h2>
                                
                                <div class="text-center mb-6">
                                    <p class="text-5xl font-bold" :class="result?.ratingColor">
                                        <span x-text="result?.csatScore"></span>%
                                    </p>
                                    <p class="text-lg mt-2" :class="result?.ratingColor" x-text="result?.rating"></p>
                                </div>
                                
                                <div class="grid md:grid-cols-3 gap-4 text-sm mb-6">
                                    <div class="bg-white rounded-lg p-4 border border-gray-200 text-center">
                                        <p class="text-gray-500">Total Responses</p>
                                        <p class="text-xl font-semibold text-gray-800" x-text="result?.totalResponses?.toLocaleString()"></p>
                                    </div>
                                    <div class="bg-white rounded-lg p-4 border border-gray-200 text-center">
                                        <p class="text-gray-500">Satisfied</p>
                                        <p class="text-xl font-semibold text-green-600" x-text="result?.satisfiedResponses?.toLocaleString()"></p>
                                    </div>
                                    <div class="bg-white rounded-lg p-4 border border-gray-200 text-center">
                                        <p class="text-gray-500">Avg Rating</p>
                                        <p class="text-xl font-semibold text-gray-800"><span x-text="result?.avgRating"></span>/<span x-text="result?.scaleMax"></span></p>
                                    </div>
                                </div>
                                
                                <!-- Benchmark Comparison -->
                                <div class="bg-white rounded-lg p-4 border border-gray-200">
                                    <p class="text-sm font-medium text-gray-700 mb-2">vs. <span x-text="result?.benchmark?.label"></span> Benchmark</p>
                                    <div class="flex items-center gap-3">
                                        <p class="text-2xl font-bold" :class="parseFloat(result?.vsIndustry) >= 0 ? 'text-green-600' : 'text-red-600'">
                                            <span x-show="parseFloat(result?.vsIndustry) >= 0">+</span><span x-text="result?.vsIndustry"></span>%
                                        </p>
                                        <p class="text-sm text-gray-600">
                                            <span x-show="parseFloat(result?.vsIndustry) >= 0">above</span>
                                            <span x-show="parseFloat(result?.vsIndustry) < 0">below</span>
                                            industry average (<span x-text="result?.benchmark?.score"></span>%)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block absolute -top-10 -right-40 -z-10">
                        <img src="/assets/images/banner-blob.png" class="w-72" alt="Decorative blob">
                    </div>

                    <div class="hidden lg:block absolute top-60 -left-40 -z-10">
                        <img src="/assets/images/feature-blob.png" class="w-72" alt="Decorative blob">
                    </div>
                </div>

                <!-- What is Section -->
                <div class="w-full max-w-2xl mt-8">
                    <h2 class="text-2xl font-bold mb-4">What is CSAT?</h2>
                    <p class="text-gray-700 mb-4">
                        CSAT (Customer Satisfaction Score) measures how satisfied customers are with a product, service, or interaction. It's typically measured by asking customers to rate their satisfaction on a scale (usually 1-5 or 1-7).
                    </p>
                    <p class="text-gray-700">
                        Your CSAT score is the percentage of customers who responded positively (typically 4-5 on a 5-point scale or 5-7 on a 7-point scale).
                    </p>
                </div>

                <!-- Formula Section -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">The Formula</h2>
                    <div class="bg-gray-100 p-6 rounded-lg border border-gray-200">
                        <p class="text-center text-lg font-mono">
                            CSAT = (Satisfied Customers ÷ Total Responses) × 100
                        </p>
                    </div>
                    <p class="text-gray-600 text-sm mt-3">
                        "Satisfied" typically means responses of 4 or 5 on a 5-point scale, or 5, 6, or 7 on a 7-point scale.
                    </p>
                </div>

                <!-- CSAT vs NPS -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">CSAT vs NPS: What's the Difference?</h2>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                            <h3 class="font-semibold text-purple-800 mb-2">CSAT</h3>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• Measures satisfaction with specific interaction</li>
                                <li>• Short-term metric</li>
                                <li>• "How satisfied were you?"</li>
                                <li>• Good for transactional feedback</li>
                            </ul>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="font-semibold text-blue-800 mb-2">NPS</h3>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• Measures overall loyalty</li>
                                <li>• Long-term metric</li>
                                <li>• "How likely to recommend?"</li>
                                <li>• Good for relationship feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Form Embed CTA -->
        @include('_partials.free-tools-form-embed', [
            'headline' => 'Start collecting CSAT feedback',
            'subheadline' => 'Create beautiful CSAT surveys that customers actually complete. Get actionable feedback. Try it yourself 👇'
        ])

        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto px-4 py-16">
            <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
                    
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">What is a good CSAT score?</h3>
                    <p class="text-gray-700">
                        Generally, 75-85% is considered good. Above 85% is excellent. Below 70% suggests significant room for improvement. However, benchmarks vary by industry — check your sector's average.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Should I use a 5-point or 7-point scale?</h3>
                    <p class="text-gray-700">
                        5-point scales are simpler and get higher response rates. 7-point scales offer more nuance and can better detect smaller changes. Most companies use 5-point for simplicity.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">When should I send CSAT surveys?</h3>
                    <p class="text-gray-700">
                        Send them immediately after key interactions: support tickets, purchases, onboarding, feature usage. The fresher the experience, the more accurate the feedback.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">How many responses do I need?</h3>
                    <p class="text-gray-700">
                        For reliable results, aim for at least 100 responses. For statistically significant comparisons between periods, you'll want 200-400+ responses per period.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">What should I do with low CSAT scores?</h3>
                    <p class="text-gray-700">
                        Follow up with unhappy customers to understand why. Look for patterns in negative feedback. Prioritize fixing issues that affect the most customers. Track improvements over time.
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
            "name": "What is a good CSAT score?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Generally, 75-85% is considered good. Above 85% is excellent. Below 70% suggests significant room for improvement. However, benchmarks vary by industry."
            }
        },
        {
            "@type": "Question",
            "name": "Should I use a 5-point or 7-point scale?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "5-point scales are simpler and get higher response rates. 7-point scales offer more nuance. Most companies use 5-point for simplicity."
            }
        },
        {
            "@type": "Question",
            "name": "When should I send CSAT surveys?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Send them immediately after key interactions: support tickets, purchases, onboarding, feature usage. The fresher the experience, the more accurate the feedback."
            }
        },
        {
            "@type": "Question",
            "name": "How many responses do I need?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For reliable results, aim for at least 100 responses. For statistically significant comparisons, you'll want 200-400+ responses per period."
            }
        },
        {
            "@type": "Question",
            "name": "What should I do with low CSAT scores?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Follow up with unhappy customers to understand why. Look for patterns. Prioritize fixing issues that affect the most customers. Track improvements over time."
            }
        }
    ]
}
</script>

<!-- Software Application Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "CSAT Calculator",
    "description": "Free online calculator to determine your Customer Satisfaction Score with industry benchmarks",
    "url": "https://youform.com/free-tools/csat-calculator/",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web Browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "creator": {
        "@type": "Organization",
        "name": "Youform",
        "url": "https://youform.com"
    }
}
</script>

@endsection
