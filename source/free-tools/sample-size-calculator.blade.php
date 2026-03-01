---
title: "Sample Size Calculator — Free Survey Sample Calculator | Youform"
description: "Calculate the ideal sample size for your survey or research study. Determine how many responses you need for statistically valid results. Free, no signup required."
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div>
        @include('partials.nav')
        @include('_partials.free-tools-breadcrumb')

        <!-- Hero Section -->
        <div class="relative max-w-4xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold text-center">Free Sample Size Calculator</h1>
                <p class="text-center text-gray-600 mt-3">Find out how many survey responses you need for statistically valid results.</p>

                <div class="relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10 w-full max-w-2xl">
                    <div 
                        x-data="{
                            populationSize: '',
                            confidenceLevel: '95',
                            marginOfError: '5',
                            expectedProportion: '50',
                            result: null,
                            error: '',
                            
                            getZScore(level) {
                                const zScores = {
                                    '90': 1.645,
                                    '95': 1.96,
                                    '99': 2.576
                                };
                                return zScores[level];
                            },
                            
                            calculate() {
                                this.error = '';
                                this.result = null;
                                
                                const N = parseFloat(this.populationSize) || Infinity;
                                const z = this.getZScore(this.confidenceLevel);
                                const e = parseFloat(this.marginOfError) / 100;
                                const p = parseFloat(this.expectedProportion) / 100;
                                
                                if (this.populationSize && N < 1) {
                                    this.error = 'Population size must be at least 1';
                                    return;
                                }
                                
                                if (e <= 0 || e >= 1) {
                                    this.error = 'Margin of error must be between 0% and 100%';
                                    return;
                                }
                                
                                // Sample size formula for infinite population
                                const n0 = (z * z * p * (1 - p)) / (e * e);
                                
                                // Finite population correction
                                let sampleSize;
                                if (N === Infinity || !this.populationSize) {
                                    sampleSize = Math.ceil(n0);
                                } else {
                                    sampleSize = Math.ceil(n0 / (1 + ((n0 - 1) / N)));
                                }
                                
                                // Calculate what percentage of population this represents
                                const percentOfPopulation = N !== Infinity ? ((sampleSize / N) * 100).toFixed(1) : null;
                                
                                this.result = {
                                    sampleSize: sampleSize,
                                    populationSize: N === Infinity ? 'Unknown/Large' : N.toLocaleString(),
                                    confidenceLevel: this.confidenceLevel,
                                    marginOfError: this.marginOfError,
                                    zScore: z,
                                    percentOfPopulation: percentOfPopulation
                                };
                            },
                            
                            reset() {
                                this.populationSize = '';
                                this.confidenceLevel = '95';
                                this.marginOfError = '5';
                                this.expectedProportion = '50';
                                this.result = null;
                                this.error = '';
                            }
                        }"
                        class="drop-shadow-none z-10">
                        
                        <form @submit.prevent="calculate" class="mt-6 space-y-6">
                            <div>
                                <label for="populationSize" class="block text-sm font-medium text-gray-700 mb-1">Population Size <span class="text-gray-400">(optional)</span></label>
                                <input 
                                    x-model="populationSize" 
                                    type="number" 
                                    id="populationSize" 
                                    min="1"
                                    step="1"
                                    class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                    placeholder="e.g., 10000 (leave blank if unknown)"
                                >
                                <p class="text-xs text-gray-500 mt-1">Total number of people in your target group. Leave blank for general population.</p>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="confidenceLevel" class="block text-sm font-medium text-gray-700 mb-1">Confidence Level</label>
                                    <select 
                                        x-model="confidenceLevel" 
                                        id="confidenceLevel"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                    >
                                        <option value="90">90%</option>
                                        <option value="95">95% (recommended)</option>
                                        <option value="99">99%</option>
                                    </select>
                                    <p class="text-xs text-gray-500 mt-1">How confident you want to be in your results</p>
                                </div>
                                
                                <div>
                                    <label for="marginOfError" class="block text-sm font-medium text-gray-700 mb-1">Margin of Error (%)</label>
                                    <select 
                                        x-model="marginOfError" 
                                        id="marginOfError"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                    >
                                        <option value="1">±1%</option>
                                        <option value="2">±2%</option>
                                        <option value="3">±3%</option>
                                        <option value="5">±5% (standard)</option>
                                        <option value="10">±10%</option>
                                    </select>
                                    <p class="text-xs text-gray-500 mt-1">Acceptable range of error in results</p>
                                </div>
                            </div>
                            
                            <div>
                                <label for="expectedProportion" class="block text-sm font-medium text-gray-700 mb-1">Expected Response Distribution</label>
                                <select 
                                    x-model="expectedProportion" 
                                    id="expectedProportion"
                                    class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                >
                                    <option value="50">50/50 (most conservative)</option>
                                    <option value="80">80/20</option>
                                    <option value="90">90/10</option>
                                </select>
                                <p class="text-xs text-gray-500 mt-1">Use 50/50 if unsure — it gives the largest (safest) sample size</p>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                                <button type="submit" class="w-full sm:w-auto bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md font-medium">
                                    Calculate
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
                            <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6">
                                <h2 class="text-lg font-semibold text-blue-800 mb-4 text-center">Recommended Sample Size</h2>
                                
                                <div class="text-center mb-6">
                                    <p class="text-5xl font-bold text-blue-700">
                                        <span x-text="result?.sampleSize?.toLocaleString()"></span>
                                    </p>
                                    <p class="text-gray-600 mt-2">responses needed</p>
                                    <p x-show="result?.percentOfPopulation" class="text-sm text-gray-500 mt-1">
                                        (<span x-text="result?.percentOfPopulation"></span>% of your population)
                                    </p>
                                </div>
                                
                                <div class="grid md:grid-cols-2 gap-4 text-sm">
                                    <div class="bg-white rounded-lg p-4 border border-blue-100">
                                        <p class="text-gray-500">Population</p>
                                        <p class="text-lg font-semibold text-gray-800" x-text="result?.populationSize"></p>
                                    </div>
                                    <div class="bg-white rounded-lg p-4 border border-blue-100">
                                        <p class="text-gray-500">Confidence Level</p>
                                        <p class="text-lg font-semibold text-gray-800"><span x-text="result?.confidenceLevel"></span>%</p>
                                    </div>
                                    <div class="bg-white rounded-lg p-4 border border-blue-100">
                                        <p class="text-gray-500">Margin of Error</p>
                                        <p class="text-lg font-semibold text-gray-800">±<span x-text="result?.marginOfError"></span>%</p>
                                    </div>
                                    <div class="bg-white rounded-lg p-4 border border-blue-100">
                                        <p class="text-gray-500">Z-Score</p>
                                        <p class="text-lg font-semibold text-gray-800" x-text="result?.zScore"></p>
                                    </div>
                                </div>
                                
                                <p class="text-center mt-4 text-sm text-gray-600">
                                    With this sample size, you can be <span x-text="result?.confidenceLevel"></span>% confident your results are accurate within ±<span x-text="result?.marginOfError"></span>%.
                                </p>
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

                <!-- How to Use Section -->
                <div class="w-full max-w-2xl mt-8">
                    <h2 class="text-2xl font-bold mb-4">How to Use This Calculator</h2>
                    <ol class="list-decimal list-inside space-y-3 text-gray-700">
                        <li><strong>Enter your population size</strong> — if you know the total number of people in your target group (e.g., 5,000 employees, 100,000 customers). Leave blank for general population surveys.</li>
                        <li><strong>Choose your confidence level</strong> — 95% is standard for most surveys</li>
                        <li><strong>Select your acceptable margin of error</strong> — ±5% is common for most research</li>
                        <li><strong>Click Calculate</strong> to see how many responses you need</li>
                    </ol>
                </div>

                <!-- What is Section -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">Why Sample Size Matters</h2>
                    <p class="text-gray-700 mb-4">
                        Sample size determines how reliable your survey results will be. Too few responses and your data might not represent the whole population. Too many and you're wasting time and resources.
                    </p>
                    <p class="text-gray-700 mb-4">
                        A properly calculated sample size ensures your results are statistically valid — meaning you can trust that the patterns you see in your sample reflect what's true for the entire population.
                    </p>
                </div>

                <!-- Formula Section -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">The Formula</h2>
                    <div class="bg-gray-100 p-6 rounded-lg border border-gray-200">
                        <p class="text-center text-lg font-mono">
                            n = (Z² × p × (1-p)) / e²
                        </p>
                        <p class="text-center text-sm text-gray-600 mt-2">With finite population correction applied when population size is known</p>
                    </div>
                    <div class="mt-4 text-gray-700">
                        <p class="mb-2"><strong>Where:</strong></p>
                        <ul class="list-disc list-inside space-y-1 ml-4">
                            <li><strong>n</strong> = required sample size</li>
                            <li><strong>Z</strong> = z-score for your confidence level</li>
                            <li><strong>p</strong> = expected proportion (0.5 for maximum variability)</li>
                            <li><strong>e</strong> = margin of error (as decimal)</li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Reference Table -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">Quick Reference: Common Sample Sizes</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-3 text-left">Population</th>
                                    <th class="px-4 py-3 text-center">±3% error</th>
                                    <th class="px-4 py-3 text-center">±5% error</th>
                                    <th class="px-4 py-3 text-center">±10% error</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-t">
                                    <td class="px-4 py-3">500</td>
                                    <td class="px-4 py-3 text-center">341</td>
                                    <td class="px-4 py-3 text-center">217</td>
                                    <td class="px-4 py-3 text-center">81</td>
                                </tr>
                                <tr class="border-t bg-gray-50">
                                    <td class="px-4 py-3">1,000</td>
                                    <td class="px-4 py-3 text-center">516</td>
                                    <td class="px-4 py-3 text-center">278</td>
                                    <td class="px-4 py-3 text-center">88</td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-3">10,000</td>
                                    <td class="px-4 py-3 text-center">964</td>
                                    <td class="px-4 py-3 text-center">370</td>
                                    <td class="px-4 py-3 text-center">96</td>
                                </tr>
                                <tr class="border-t bg-gray-50">
                                    <td class="px-4 py-3">100,000</td>
                                    <td class="px-4 py-3 text-center">1,056</td>
                                    <td class="px-4 py-3 text-center">383</td>
                                    <td class="px-4 py-3 text-center">96</td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-3">1,000,000+</td>
                                    <td class="px-4 py-3 text-center">1,066</td>
                                    <td class="px-4 py-3 text-center">384</td>
                                    <td class="px-4 py-3 text-center">97</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-xs text-gray-500 mt-2">*Based on 95% confidence level, 50/50 distribution</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Form Embed CTA -->
        @include('_partials.free-tools-form-embed', [
            'headline' => 'Ready to collect your survey responses?',
            'subheadline' => 'Create beautiful surveys that people want to complete. Get the sample size you need. Try it yourself 👇'
        ])

        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto px-4 py-16">
            <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
                    
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">What confidence level should I use?</h3>
                    <p class="text-gray-700">
                        95% is the standard for most research and surveys. Use 99% for critical decisions where you need near-certainty. 90% is acceptable for preliminary research or when resources are limited.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">What margin of error is acceptable?</h3>
                    <p class="text-gray-700">
                        ±5% is standard for most surveys. For important business decisions, aim for ±3% or less. For quick pulse checks, ±10% can be acceptable. The smaller the margin, the more responses you'll need.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">What if I don't know my population size?</h3>
                    <p class="text-gray-700">
                        Leave it blank. The calculator will use the formula for an infinite (or very large) population. This gives you a conservative estimate that works for any population over about 20,000.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Why does 50/50 give the largest sample size?</h3>
                    <p class="text-gray-700">
                        When your responses could split 50/50, there's maximum uncertainty in the data. This requires more responses to be confident in the results. If you know responses will be more skewed (like 80/20), you need fewer responses.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">How do I account for non-response?</h3>
                    <p class="text-gray-700">
                        If you expect only 25% of people to respond, multiply your required sample size by 4. For example, if you need 400 responses and expect 25% response rate, send surveys to 1,600 people.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('_partials.free-tools-related', ['current' => 'sample-size', 'related' => ['statistical-significance', 'confidence-interval', 'survey-response-rate']])

@include('partials.footer')

<!-- FAQ Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What confidence level should I use?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "95% is the standard for most research and surveys. Use 99% for critical decisions where you need near-certainty. 90% is acceptable for preliminary research or when resources are limited."
            }
        },
        {
            "@type": "Question",
            "name": "What margin of error is acceptable?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "±5% is standard for most surveys. For important business decisions, aim for ±3% or less. For quick pulse checks, ±10% can be acceptable. The smaller the margin, the more responses you'll need."
            }
        },
        {
            "@type": "Question",
            "name": "What if I don't know my population size?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Leave it blank. The calculator will use the formula for an infinite (or very large) population. This gives you a conservative estimate that works for any population over about 20,000."
            }
        },
        {
            "@type": "Question",
            "name": "Why does 50/50 give the largest sample size?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "When your responses could split 50/50, there's maximum uncertainty in the data. This requires more responses to be confident in the results. If you know responses will be more skewed (like 80/20), you need fewer responses."
            }
        },
        {
            "@type": "Question",
            "name": "How do I account for non-response?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "If you expect only 25% of people to respond, multiply your required sample size by 4. For example, if you need 400 responses and expect 25% response rate, send surveys to 1,600 people."
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
    "name": "Sample Size Calculator",
    "description": "Free online calculator to determine the ideal sample size for surveys and research studies",
    "url": "https://youform.com/free-tools/sample-size-calculator/",
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
