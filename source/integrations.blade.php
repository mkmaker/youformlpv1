---
title: "Youform Integrations - Connect Your Forms to 100+ Apps"
description: "Connect Youform with Google Sheets, Slack, HubSpot, Salesforce, Mailchimp, and 100+ more apps. Native integrations plus 6,000+ connections via Zapier and Make."
---

@extends('_layouts.main')

@section('body')

<!-- JSON-LD Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Youform Integrations",
    "description": "{{ $page->description }}",
    "url": "{{ $page->getUrl() }}",
    "publisher": {
        "@type": "Organization",
        "name": "Youform",
        "url": "https://youform.com"
    }
}
</script>

<!-- Hero Section -->
<div>
    <div class="bg-medium-champagne bg-[url('/assets/images/banner-background.png?v=2')] bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <div class="relative max-w-7xl mx-auto mt-10 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="flex flex-col items-center max-w-4xl">
                    <p class="text-xs font-semibold px-4 py-1.5 rounded-full mb-3 bg-aquamarine border border-black">
                        6,000+ App Connections
                    </p>
                    <h1 class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Youform Integrations
                    </h1>
                    <p class="text-center text-base mt-6 max-w-3xl">
                        Connect your forms to the tools you already use. Youform integrates natively with popular tools
                        and connects to 6,000+ apps through Zapier and Make.
                    </p>
                    <div class="mt-10">
                        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Get started free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img class="w-full -mt-4 lg:-mt-8" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration">
    </div>
</div>

@php
    $integrations = collect($page->integrations_list ?? []);
    $native = $integrations->where('is_native', true);
    $zapier = $integrations->where('is_native', false);
    $categories = $zapier->groupBy('category')->sortKeys();
@endphp

<!-- Native Integrations Section -->
<div class="bg-white pt-24 lg:pt-32 pb-16 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-4">Native Integrations</h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Built-in integrations that work out of the box. No third-party automation tools needed.
        </p>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($native as $integration)
            <a href="/integrations/{{ $integration['slug'] }}" class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-3xl hover:-translate-y-1 transition-all text-center group">
                <img src="{{ $integration['logo'] }}" alt="{{ $integration['name'] }}" class="h-12 w-12 mx-auto mb-3 rounded-lg object-contain">
                <h3 class="font-bold text-lg group-hover:underline underline-offset-2">
                    {{ $integration['name'] }}
                </h3>
                <p class="text-sm text-gray-600 mt-1">{{ $integration['tagline'] }}</p>
            </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Zapier/Make Integrations by Category -->
<div class="bg-amber-50 py-16">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-4">
            Connect to 6,000+ Apps
        </h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Use Zapier or Make to connect Youform with thousands of apps.
            Youform's Zapier integration is available on the free plan.
        </p>

        @foreach ($categories as $categoryName => $categoryIntegrations)
        <div class="mb-12">
            <h3 class="text-2xl font-bold mb-6">{{ $categoryName }}</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($categoryIntegrations as $integration)
                <a href="/integrations/{{ $integration['slug'] }}" class="bg-white border-2 border-black rounded-xl p-4 drop-shadow-3xl hover:-translate-y-1 transition-all group flex items-center space-x-3">
                    <img src="{{ $integration['logo'] }}" alt="{{ $integration['name'] }}" class="h-10 w-10 rounded-lg flex-shrink-0 object-contain">
                    <span class="font-semibold group-hover:underline underline-offset-2">
                        {{ $integration['name'] }}
                    </span>
                </a>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- CTA Section -->
<div class="bg-medium-champagne py-20">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">
            Build forms that connect to your workflow
        </h2>
        <p class="text-lg text-gray-700 mb-8">
            Unlimited forms and responses on the free plan. Connect to any tool you use.
        </p>
        <a href="https://app.youform.com/register" class="inline-block text-xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-12 py-3 text-black rounded-md font-semibold">
            Get started free
        </a>
        <p class="text-sm text-gray-600 mt-4">No credit card required</p>
    </div>
</div>

@include('partials.footer')

@endsection
