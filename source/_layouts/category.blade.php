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

        <h1 class="text-5xl font-bold">{{$page->title}}</h1>

        <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
            {{$page->descriptions['categories'][$page->type][$page->name ?? 'Other']}}
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-10 md:px-20 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($page->templates as $template)
                @include('_partials.template-card', ['template' => $template])
            @endforeach
        </div>
    </div>

    <div class="text-center py-16">
        <a href="/templates/c/{{$page->str_plural($page->type)}}" class="inline-block mx-auto capitalize text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
            View other {{ucwords($page->type)}} Templates
        </a>
    </div>

</div>

@include('partials.footer')

@endsection