---
title: "here's a Microsoft Forms alternative that allows external file uploads"
description: "here's a Microsoft Forms alternative that allows external file uploads"
author: "Davis Baer"
date: "2024-04-09"
---

@extends('_layouts.main')

@section('body')

<!-- Navbar -->
<div class="bg-white">
    @include('partials.nav')
</div>

<!-- Back to blog -->
<div class="bg-white pt-6">
    <div class="max-w-3xl mx-auto px-10 md:px-20">
        <a href="/blog" class="text-sm text-gray-400 hover:text-gray-600 transition-colors block text-center">&larr; Back to blog</a>
    </div>
</div>

<!-- Hero section -->
<div class="bg-white pt-6 pb-12">
    <div class="max-w-3xl mx-auto px-10 md:px-20 text-center">
        <h1 class="text-3xl sm:text-5xl font-bold leading-tight">
            here's a Microsoft Forms alternative that allows external file uploads
        </h1>
        <p class="text-lg mt-6 text-gray-600 max-w-2xl mx-auto">
            here's a Microsoft Forms alternative that allows external file uploads
        </p>
        <div class="mt-4 text-sm text-gray-500">
            <span>By Davis Baer</span>
            <span class="mx-2">&#183;</span>
            <span>April 09, 2024</span>
        </div>
        @include('partials.blog-share')
    </div>
</div>

<!-- Main Content -->
<div class="bg-white pb-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="max-w-3xl mx-auto">
            <article class="prose prose-xl max-w-none" style="font-size: 1.2rem; line-height: 2;">
                <style>
                    article a:not(.cta-btn) { color: #FF7F4A; text-decoration: underline; }
                    article a:not(.cta-btn):hover { color: #e5693a; }
                </style>
                <p>If you need a Microsoft Forms alternative that allows external file uploads, check out <a href="http://www.youform.io" alt="Youform" class="on">Youform</a>.</p><div class="se-component se-image-container __se__float-none" contenteditable="false"><figure style="margin: 0px;"><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/screen-shot-2024-04-09-at-2-1712688820076-compressed.png" alt="" loading="lazy"></div></figure></div><p>Youform's free plan supports image uploads up to 10mb.</p>

                <div class="mt-10 text-center">
                    <a href="https://app.youform.com/register" class="cta-btn inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md no-underline">
                        Create free account
                    </a>
                </div>
            </article>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
