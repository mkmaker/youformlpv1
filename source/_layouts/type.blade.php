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
                <li class="text-gray-900">
                    {{$page->str_plural(ucwords($page->type))}}
                </li>
            </ol>
        </div>

        <h1 class="text-5xl font-bold">{{$page->title}}</h1>

        <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
            {{$page->descriptions[$page->type]}}
        </div>
    </div>

    @foreach ($page->categories as $category)
    
    <div class="max-w-7xl mx-auto px-10 md:px-20 py-10">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold capitalize">
                {{$category['name']}} {{$page->type_singular}} Templates
            </h2>

            <span class="flex-shrink-0">
                <a href="/templates/c/{{$page->type_slug}}/{{$category['slug']}}" class="hover:underline">See more</a>
                &rarr; 
            </span>
        </div>

        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($category['templates'] as $template)
                    @include('_partials.template-card', ['template' => $template])
                @endforeach
            </div>
        </div>
    </div>
    @endforeach

    <div>
        <div class="text-center py-16">
            <h3 class="text-2xl font-semibold mb-4">Explore Other Template Types</h3>
            <div class="flex justify-center space-x-4">
                @foreach (['forms', 'surveys', 'quizzes'] as $otherType)
                    @if ($otherType !== $page->type)
                        <a href="/templates/c/{{$otherType}}" class="text-blue-600 hover:underline">
                            {{$page->str_singular(ucwords($otherType))}} Templates
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</div>

@include('partials.footer')

@endsection