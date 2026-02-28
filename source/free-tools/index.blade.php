---
title: "Free Online Tools & Calculators | Youform"
description: "Free calculators and tools for surveys, research, and data collection. NPS calculator, sample size calculator, chi-square test, and more. No signup required."
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div>
        @include('partials.nav')

        <!-- Hero Section -->
        <div class="relative max-w-6xl mx-auto mt-20 pb-16 px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Free Online Tools
                </h1>
                <p class="text-xl text-gray-600 mt-4 max-w-2xl mx-auto">
                    Calculators and generators for surveys, research, and data collection. 
                    No signup required — just use them.
                </p>
            </div>
        </div>

        <!-- Tools Grid -->
        <div class="max-w-6xl mx-auto px-4 pb-20">
            
            <!-- Survey & Research Tools -->
            <div class="mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">📊</span>
                    Survey & Research Calculators
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- NPS Calculator --}}
                    <a href="/free-tools/nps-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">NPS Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Calculate your Net Promoter Score from survey responses</p>
                            </div>
                            <span class="text-2xl">🎯</span>
                        </div>
                    </a>
                    
                    {{-- Sample Size Calculator --}}
                    <a href="/free-tools/sample-size-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Sample Size Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Determine the right sample size for your survey</p>
                            </div>
                            <span class="text-2xl">🧮</span>
                        </div>
                    </a>
                    
                    {{-- Confidence Interval Calculator --}}
                    <a href="/free-tools/confidence-interval-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Confidence Interval Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Calculate confidence intervals for your data</p>
                            </div>
                            <span class="text-2xl">📏</span>
                        </div>
                    </a>
                    
                    {{-- Chi-Square Calculator --}}
                    <a href="/free-tools/chi-square-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Chi-Square Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Perform chi-square tests for statistical analysis</p>
                            </div>
                            <span class="text-2xl">📐</span>
                        </div>
                    </a>
                    
                    {{-- Statistical Significance Calculator --}}
                    <a href="/free-tools/statistical-significance-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Statistical Significance Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Check if your A/B test results are significant</p>
                            </div>
                            <span class="text-2xl">✅</span>
                        </div>
                    </a>
                    
                    {{-- Survey Response Rate Calculator --}}
                    <a href="/free-tools/survey-response-rate-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Survey Response Rate Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Calculate response rates with industry benchmarks</p>
                            </div>
                            <span class="text-2xl">📬</span>
                        </div>
                    </a>
                    
                    {{-- CSAT Calculator --}}
                    <a href="/free-tools/csat-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">CSAT Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Calculate Customer Satisfaction Score</p>
                            </div>
                            <span class="text-2xl">😊</span>
                        </div>
                    </a>
                    
                    {{-- CES Calculator --}}
                    <a href="/free-tools/ces-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">CES Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Calculate Customer Effort Score</p>
                            </div>
                            <span class="text-2xl">⚡</span>
                        </div>
                    </a>
                    
                </div>
            </div>

            <!-- Marketing Tools -->
            <div class="mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <span class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">📈</span>
                    Marketing Tools
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- UTM Builder --}}
                    <a href="/free-tools/utm-builder/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">UTM Builder</h3>
                                <p class="text-gray-600 text-sm mt-1">Create UTM-tagged URLs for campaign tracking</p>
                            </div>
                            <span class="text-2xl">🔗</span>
                        </div>
                    </a>
                    
                    {{-- Instagram Engagement Calculator --}}
                    {{-- <a href="/free-tools/instagram-engagement-calculator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Instagram Engagement Calculator</h3>
                                <p class="text-gray-600 text-sm mt-1">Calculate engagement rate for any Instagram account</p>
                            </div>
                            <span class="text-2xl">📸</span>
                        </div>
                    </a> --}}
                    
                    <!-- Placeholder -->
                    <div class="bg-gray-50 rounded-xl border border-dashed border-gray-300 p-6 flex items-center justify-center">
                        <p class="text-gray-400 text-sm">More tools coming soon...</p>
                    </div>
                    
                </div>
            </div>

            <!-- Utility Tools -->
            <div class="mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <span class="bg-green-100 text-green-600 p-2 rounded-lg mr-3">🔧</span>
                    Utility Tools
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- Google Forms QR Code --}}
                    <a href="/free-tools/google-form-qr-code/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Google Forms QR Code Generator</h3>
                                <p class="text-gray-600 text-sm mt-1">Generate QR codes for your Google Forms instantly</p>
                            </div>
                            <span class="text-2xl">📱</span>
                        </div>
                    </a>
                    
                    {{-- Random Name Picker --}}
                    {{-- <a href="/free-tools/random-name-picker/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Random Name Picker</h3>
                                <p class="text-gray-600 text-sm mt-1">Pick random names for giveaways, raffles, or classrooms</p>
                            </div>
                            <span class="text-2xl">🎡</span>
                        </div>
                    </a> --}}
                    
                    {{-- Readability Checker --}}
                    {{-- <a href="/free-tools/readability-checker/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Readability Checker</h3>
                                <p class="text-gray-600 text-sm mt-1">Check the readability score of your text</p>
                            </div>
                            <span class="text-2xl">📖</span>
                        </div>
                    </a> --}}
                    
                    {{-- Email Signature Generator --}}
                    {{-- <a href="/free-tools/email-signature-generator/" class="group block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg hover:border-purple-300 transition-all">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-purple-600">Email Signature Generator</h3>
                                <p class="text-gray-600 text-sm mt-1">Create professional email signatures</p>
                            </div>
                            <span class="text-2xl">✉️</span>
                        </div>
                    </a> --}}
                    
                    <!-- Placeholder -->
                    <div class="bg-gray-50 rounded-xl border border-dashed border-gray-300 p-6 flex items-center justify-center">
                        <p class="text-gray-400 text-sm">More tools coming soon...</p>
                    </div>
                    
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="bg-purple-600 py-16">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
                    Need to Collect Data?
                </h2>
                <p class="text-purple-100 mb-8 max-w-2xl mx-auto">
                    Create beautiful forms and surveys with Youform. Free forever, no credit card required.
                </p>
                <a 
                    href="https://app.youform.com/register" 
                    class="inline-block bg-white text-purple-600 font-semibold px-8 py-3 rounded-lg hover:bg-purple-50 transition-colors"
                >
                    Create Free Form →
                </a>
            </div>
        </div>

        @include('partials.footer')
    </div>
</div>

@endsection
