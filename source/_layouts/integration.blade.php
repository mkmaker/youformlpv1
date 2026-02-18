@extends('_layouts.main')

@section('body')

<!-- Hero Section -->
<div>
    <div class="bg-medium-champagne bg-[url('/assets/images/banner-background.png?v=2')] bg-cover bg-no-repeat bg-center">
        @include('partials.nav')

        <div class="relative max-w-7xl mx-auto mt-10 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="flex flex-col items-center max-w-4xl">
                    <p class="text-xs font-semibold px-4 py-1.5 rounded-full mb-3 border border-black {{ $page->is_native || $page->via_webhook || $page->badge_text ? 'bg-aquamarine' : 'bg-pale-violet' }}">
                        @if($page->badge_text)
                            {{ $page->badge_text }}
                        @elseif($page->is_native)
                            Native Integration
                        @elseif($page->via_webhook)
                            Available via Webhook
                        @else
                            Available via Zapier & Make
                        @endif
                    </p>

                    <div class="flex items-center justify-center space-x-4 mb-6">
                        <img src="/assets/images/youform-logo.png" alt="Youform" class="h-12 w-12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>
                        <img src="{{ $page->logo }}" alt="{{ $page->name }}" class="h-12 w-12 rounded-lg object-contain">
                    </div>

                    <h1 class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Connect Youform with {{ $page->name }}
                    </h1>
                    <p class="text-center text-base mt-6 max-w-3xl">
                        {{ $page->hero_description }}
                    </p>
                    <div class="mt-10 text-center">
                        <a href="https://app.youform.com/register" onclick="sa_event('click_signup_integration')" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Try Youform free
                        </a>
                    </div>
                    <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <img class="w-full -mt-4 lg:-mt-8" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration">
    </div>
</div>

<!-- How It Works Section -->
<div class="bg-white pt-24 lg:pt-32 pb-16 -mt-10 lg:-mt-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">
            How to connect Youform with {{ $page->name }}
        </h2>
        <div class="space-y-8">
            @foreach ($page->how_it_works_steps as $index => $step)
            <div class="flex items-start">
                <div class="flex-shrink-0 w-12 h-12 bg-aquamarine rounded-full flex items-center justify-center text-xl font-bold text-black mr-6 border-2 border-black">
                    {{ $loop->iteration }}
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">{{ $step->title ?? $step['title'] }}</h3>
                    <p class="text-gray-700">{{ $step->description ?? $step['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Use Cases Section -->
<div class="bg-amber-50 py-16">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">
            What you can do with Youform + {{ $page->name }}
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($page->use_cases as $useCase)
            <div class="bg-white border-2 border-black rounded-xl p-6 drop-shadow-3xl">
                <h3 class="text-xl font-bold mb-2">{{ $useCase->title ?? $useCase['title'] }}</h3>
                <p class="text-gray-700">{{ $useCase->description ?? $useCase['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Zapier/Make Section (only for Zapier-based integrations) -->
@if (!$page->is_native && !$page->via_webhook && !$page->badge_text)
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-10 md:px-20 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold mb-6">Powered by Zapier & Make</h2>
        <p class="text-gray-700 max-w-2xl mx-auto mb-8">
            This integration connects Youform to {{ $page->name }} through Zapier or Make (formerly Integromat).
            Youform's Zapier integration is available on the free plan, giving you access to 6,000+ apps
            without any extra cost.
        </p>
        <div class="flex items-center justify-center space-x-6">
            <a href="/integrations/zapier" class="hover:opacity-80 transition-opacity">
                <img src="/assets/images/integrations/zapier.png" alt="Zapier" class="h-10 rounded-lg">
            </a>
            <span class="text-gray-400 font-bold text-2xl">+</span>
            <a href="/integrations/make" class="hover:opacity-80 transition-opacity">
                <img src="/assets/images/integrations/make.png" alt="Make" class="h-10 rounded-lg">
            </a>
        </div>
    </div>
</div>
@endif

<!-- CTA Section -->
<div class="bg-medium-champagne py-20">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">
            Ready to connect Youform with {{ $page->name }}?
        </h2>
        <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
            Create your first form in minutes. Unlimited forms and responses on the free plan.
        </p>
        <a href="https://app.youform.com/register" onclick="sa_event('click_signup_integration')" class="inline-block text-xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-12 py-3 text-black rounded-md font-semibold">
            Get started free
        </a>
        <p class="text-sm text-gray-600 mt-4">No credit card required</p>
    </div>
</div>

<!-- FAQ Section with Schema Markup -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>

        <div class="space-y-4" itemscope itemtype="https://schema.org/FAQPage">
            @foreach ($page->faqs as $faq)
            <div x-data="{ open: false }" class="border-2 border-black rounded-lg overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <h3 class="font-bold text-lg pr-4" itemprop="name">{{ $faq->question ?? $faq['question'] }}</h3>
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                    <p class="px-6 pb-6 text-gray-700" itemprop="text">{{ $faq->answer ?? $faq['answer'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Browse All Integrations Link -->
<div class="bg-gray-50 py-12">
    <div class="text-center">
        <a href="/integrations" class="text-black font-semibold hover:underline text-lg">
            &larr; Browse all Youform integrations
        </a>
    </div>
</div>

@include('partials.footer')

@endsection
