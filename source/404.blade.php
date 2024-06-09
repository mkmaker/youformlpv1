@extends('_layouts.main')

@section('body')
 
<div class="min-h-screen flex flex-col bg-amber-50"> 
    <div class="flex-grow">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto pt-24">
            <div class="flex flex-col min-h-60 justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold">Error 404 :(</h1>

                <p class="text-xl my-4">
                    Looks like 
                    <span class="font-semibold text-coral">You</span> 
                    haven't 
                    <span class="font-semibold text-coral">Form</span>ed 
                    a proper URL.
                </p>

                <p class="text-normal mt-3">
                    Searching for a better form builder?
                </p>

                <div class="text-center mt-2">
                    <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                </div>

                <p class="mt-10">
                    Or fill out this sample Youform
                </p>

                <div>
                    <iframe src="https://app.youform.com/forms/2byfpx1j" loading="lazy" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>   

@include('partials.footer')

@endsection