---
title: "Blog - Youform"
description: "Tips, tutorials, and updates from the Youform team. Learn about form building, integrations, and more."
---

@extends('_layouts.main')

@section('body')

<!-- Navbar -->
<div class="bg-white">
    @include('partials.nav')
</div>

<!-- Hero section -->
<div class="bg-white pt-10 pb-12">
    <div class="max-w-7xl mx-auto px-10 md:px-20 text-center">
        <h1 class="text-3xl sm:text-5xl font-bold leading-tight">
            Blog
        </h1>
        <p class="text-lg mt-4 text-gray-600 max-w-2xl mx-auto">
            Tips, tutorials, and updates from the Youform team.
        </p>
    </div>
</div>

<!-- Blog Cards Grid -->
<div class="bg-white pb-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <a href="/blog/google-forms-redirect-after-submit-solved" class="bg-white group rounded-xl border border-gray-200 overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-6 py-6">
                    <p class="text-sm text-gray-500">October 13, 2025</p>
                    <h3 class="text-xl font-bold mt-2 group-hover:text-aquamarine transition-colors">Google Forms redirect after submit [Solved]</h3>
                    <p class="text-gray-600 mt-3 line-clamp-3">Wondering how to redirect after someone submits your Google forms? Here are 3 options.</p>
                    <p class="text-sm text-gray-400 mt-4">By Davis Baer</p>
                </div>
            </a>

            <a href="/blog/a-free-delighted-alternative-unlimited-submissions" class="bg-white group rounded-xl border border-gray-200 overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-6 py-6">
                    <p class="text-sm text-gray-500">July 30, 2025</p>
                    <h3 class="text-xl font-bold mt-2 group-hover:text-aquamarine transition-colors">A free Delighted alternative [Unlimited submissions]</h3>
                    <p class="text-gray-600 mt-3 line-clamp-3">A free Delighted alternative [Unlimited submissions]</p>
                    <p class="text-sm text-gray-400 mt-4">By Davis Baer</p>
                </div>
            </a>

            <a href="/blog/tally-forms-vs-youform-cm78l24ne001p1188wueqp8qx" class="bg-white group rounded-xl border border-gray-200 overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-6 py-6">
                    <p class="text-sm text-gray-500">February 17, 2025</p>
                    <h3 class="text-xl font-bold mt-2 group-hover:text-aquamarine transition-colors">Tally forms vs Youform</h3>
                    <p class="text-gray-600 mt-3 line-clamp-3">Tally forms vs Youform</p>
                    <p class="text-sm text-gray-400 mt-4">By Davis Baer</p>
                </div>
            </a>

            <a href="/blog/how-we-used-sean-ellis-test-to-find-out-our-product-market-fit-cm74d09bu008tr1l2ll8yszxc" class="bg-white group rounded-xl border border-gray-200 overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-6 py-6">
                    <p class="text-sm text-gray-500">February 14, 2025</p>
                    <h3 class="text-xl font-bold mt-2 group-hover:text-aquamarine transition-colors">How we used Sean Ellis test to find out our product-market fit</h3>
                    <p class="text-gray-600 mt-3 line-clamp-3">How we used Sean Ellis test to find out our product-market fit</p>
                    <p class="text-sm text-gray-400 mt-4">By Davis Baer</p>
                </div>
            </a>

            <a href="/blog/google-forms-searchable-dropdown-cm0qnsmvn00j0syrxh9idh8f2" class="bg-white group rounded-xl border border-gray-200 overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-6 py-6">
                    <p class="text-sm text-gray-500">September 06, 2024</p>
                    <h3 class="text-xl font-bold mt-2 group-hover:text-aquamarine transition-colors">Google forms searchable dropdown - 2 solutions</h3>
                    <p class="text-gray-600 mt-3 line-clamp-3">Google forms searchable dropdown - 2 solutions</p>
                    <p class="text-sm text-gray-400 mt-4">By Davis Baer</p>
                </div>
            </a>

            <a href="/blog/heres-a-microsoft-forms-alternative-that-allows-external-file-uploads-clusqmc6m005126aoroanld49" class="bg-white group rounded-xl border border-gray-200 overflow-hidden cursor-pointer hover:shadow-lg transition-shadow">
                <div class="px-6 py-6">
                    <p class="text-sm text-gray-500">April 09, 2024</p>
                    <h3 class="text-xl font-bold mt-2 group-hover:text-aquamarine transition-colors">here's a Microsoft Forms alternative that allows external file uploads</h3>
                    <p class="text-gray-600 mt-3 line-clamp-3">here's a Microsoft Forms alternative that allows external file uploads</p>
                    <p class="text-sm text-gray-400 mt-4">By Davis Baer</p>
                </div>
            </a>

        </div>
    </div>
</div>

@include('partials.footer')

@endsection
