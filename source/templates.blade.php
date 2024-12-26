---
title: Youform Templates
description: Explore a variety of customizable form templates designed to fit every need—whether you're gathering leads, processing orders, or conducting surveys.
---

@extends('_layouts.main')

@section('body')

<div class="bg-amber-50 pb-20">

    <div>

        @include('partials.nav')

    </div>

    <div class="text-center pt-20 pb-10 max-w-7xl mx-auto px-10 md:px-20">

        <h1 class="text-5xl font-bold">Youform Templates</h1>

        <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
            Explore a variety of customizable form templates designed to fit every need—whether you're gathering leads, processing orders, or conducting surveys. From sleek lead generation forms to detailed feedback surveys and cake order forms, Youform templates save you time and effort by providing a strong starting point.
        </div>
    </div>

    @foreach ($page->templates as $template_type => $templates)
    <div class="max-w-7xl mx-auto px-10 md:px-20 py-10">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold">
                {{$page->str_plural(ucwords($template_type))}}
            </h2>

            <span>
                <a href="/templates/c/{{$page->str_plural($template_type)}}" class="hover:underline">View All {{ucwords($template_type)}} Templates</a>
                &rarr;
            </span>
        </div>

        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($templates as $template)
                    @include('_partials.template-card', ['template' => $template])
                @endforeach
            </div>
        </div>
    </div>
    @endforeach

</div>

@include('partials.templates-faq')

@include('partials.footer')

@endsection