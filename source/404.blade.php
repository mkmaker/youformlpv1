@extends('_layouts.main')

@section('body')
 
<div class="min-h-screen flex flex-col bg-amber-50"> 
    <div class="flex-grow">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold">Error 404 :(</h1>

                <p class="text-lg font-gray-600 my-4">
                    Looks like 
                    <span class="font-semibold text-lavender-rose">You</span> 
                    haven't 
                    <span class="font-semibold text-lavender-rose">Form</span>ed 
                    a proper URL.
                </p>

                <p class="text-normal font-gray-500 mt-3">
                    Searching for a better form builder?
                </p>

                <div class="text-center mt-2">
                    <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>   

@include('partials.footer')

@endsection