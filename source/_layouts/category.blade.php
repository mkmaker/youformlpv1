@extends('_layouts.main')

@section('body')

<div class="bg-amber-50 pb-20">

    <div>

        @include('partials.nav')

    </div>

    <div class="text-center pt-20 pb-10 max-w-7xl mx-auto px-10 md:px-20">

        <div class="text-sm text-gray-600 mb-6">
            <ol class="list-reset flex justify-center">
                <li>
                    <a href="/templates" class="text-blue-600 hover:underline">All templates</a>
                </li>
                <li>
                    <span class="mx-2">/</span>
                </li>
                <li>
                    <a href="/templates/c/{{$page->str_plural($page->type)}}" class="text-blue-600 hover:underline">{{$page->str_plural(ucwords($page->type))}}</a>
                </li>
                <li>
                    <span class="mx-2">/</span>
                </li>
                <li class="text-gray-900">
                    {{ucwords($page->name ?? 'Other')}}
                </li>
            </ol>
        </div>

        <h1 class="text-5xl font-bold">{{ $page->heading ?? $page->title }}</h1>

        <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
            {{ $page->hero ?? $page->descriptions['categories'][$page->type][$page->name ?? 'Other'] }}
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-10 md:px-20 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($page->templates as $template)
                @include('_partials.template-card', ['template' => $template])
            @endforeach
        </div>
    </div>

    {{-- SEO enrichment from source/_data/category-overrides.json, keyed by
         "{type}/{category_slug}". Mirrors the template-overrides pattern in
         _layouts/template.blade.php (kept inline there too; do not "deduplicate"
         while either page is mid-SEO-experiment).
         NB: plain truthiness, not empty()/isset() — Jigsaw's IterableObject
         resolves dynamic keys via __get but not __isset, so empty() lies. --}}
    @if ($page->seo_faq)
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($page->seo_faq)->map(fn ($item) => [
            '@type' => 'Question',
            'name' => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($item['a'])],
        ])->values()->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endif

    @if ($page->seo_intro || $page->seo_sections || $page->seo_faq)
    <div class="bg-white py-16 lg:py-20 text-left">
        <div class="max-w-7xl mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                <div class="lg:col-span-2"></div>
                <div class="lg:col-span-8 lg:col-start-3">

                    @if ($page->seo_intro)
                        @foreach ($page->seo_intro as $para)
                            <p class="text-lg text-gray-700 mb-4">{!! $para !!}</p>
                        @endforeach
                    @endif

                    @if ($page->seo_sections)
                        @foreach ($page->seo_sections as $section)
                            <h2 class="text-3xl sm:text-4xl font-bold mt-12 mb-6">{{ $section['h2'] }}</h2>
                            <div class="space-y-4 text-lg text-gray-700">
                                @foreach ($section['body'] as $chunk)
                                    {!! $chunk !!}
                                @endforeach
                            </div>
                        @endforeach
                    @endif

                    @if ($page->seo_faq)
                        <h2 class="text-3xl sm:text-4xl font-bold mt-12 mb-6">Frequently asked questions</h2>
                        <div>
                            @foreach ($page->seo_faq as $item)
                                <div x-data="{ open: false }" class="border-y-2 border-black">
                                    <div class="w-full cursor-pointer" @click="open = !open">
                                        <div class="flex justify-between px-4 py-6 md:text-lg lg:text-xl">
                                            <p class="text-black font-medium flex-grow">{{ $item['q'] }}</p>
                                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                        <div x-show="open">
                                            <p class="px-4 py-6 lg:text-lg text-black">{!! $item['a'] !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="text-center py-16">
        <a href="/templates/c/{{$page->str_plural($page->type)}}" class="inline-block mx-auto capitalize text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
            View other {{ucwords($page->type)}} Templates
        </a>
    </div>

</div>

@include('partials.footer')

@endsection