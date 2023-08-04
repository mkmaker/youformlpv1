@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class=" bg-medium-champagne bg-[url('/assets/images/banner-background.png')] bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center lg:grid grid-cols-5 items-center px-10 md:px-20">
                <div class=" flex flex-col items-center lg:items-start col-span-3 lg:pr-16 xl:pr-20">
                    <p class="text-center lg:text-left text-3xl  sm:text-5xl xl:text-6xl font-bold">
                        Collect data without breaking your bank
                    </p>
                    <p class="text-center lg:text-left text-base sm:text-lg xl:text-xl font-medium mt-10">
                        Youform is a no-code form builder to create conversational style forms for collecting leads, surveys & feedbacks.
                    </p>
                    <a href="https://app.youform.io/register" class="rotate-1 mt-10 text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Try For Free
                    </a>
                </div>
                <div class="pt-12 lg:pt-0 col-span-2 hidden lg:block">
                    <img class="w-full m-auto" src="/assets/images/banner-gif.webp" alt="">
                </div>
            </div>
            <div class="pt-10">
                <img src="/assets/images/youform-builder.png" alt="">
            </div>
        </div>
    </div>
    <div>
        <img class="-mt-2" src="/assets/images/banner-wave.png" alt="">
    </div>
</div>

<!-- 1st feature -->
<div class="bg-aquamarine">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-20">
        <div class="flex flex-col justify-center lg:grid grid-cols-2 items-center pt-40 pb-16 px-10 md:px-20">
            <div class="col-span-1 lg:pr-16 xl:pr-20 flex flex-col sm:items-center lg:items-start  pb-14 lg:pb-0">
                <p class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold ">
                    Fully responsive
                </p>
                <p class="text-center lg:text-left text-lg xl:text-xl font-medium mt-10">
                    Youform gives you fully responsive forms so your users will be able to fill your forms from mobile, desktop or tabs.
                </p>
                <a href="https://app.youform.io/register" class="-rotate-1 mt-10 text-2xl block text-center bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                    Try For Free
                </a>
            </div>
            <div class="col-span-1">
                <img class="w-full m-auto " src="/assets/images/visual.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- 2nd feature -->
<div class="bg-amber-50 border-t-4 border-black">
    <div class="relative max-w-7xl mx-auto -mt-16 pb-20">
        <div class="flex flex-col justify-center lg:grid grid-cols-2 items-center pt-48 pb-32 px-10 md:px-20">
            <div class="col-span-1 lg:pr-16 xl:pr-20  pb-14 lg:pb-0">
                <img class="w-4/5 lg:w-4/5 m-auto " src="/assets/images/so-easy.png" alt="">
            </div>
            <div class="col-span-1 lg:pr-16 xl:pr-20 flex flex-col sm:items-center lg:items-start">
                <p class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold ">
                    Build forms intuitively
                </p>
                <p class="text-center lg:text-left text-lg xl:text-xl font-medium mt-10">
                    Youform builder is fully drag and drop and very intuitive. You will have no time to start building your forms.
                </p>
                <a href="https://app.youform.io/register" class="-rotate-1 text-center mt-10 text-2xl bg-pale-violet border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                    Try For Free
                </a>
            </div>
            
        </div>
    </div>
</div>

<!-- 3rd feature -->
<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="">
    <div class="bg-vivid-yellow -mt-2">
        <div class="relative max-w-7xl mx-auto">
            <div class="flex flex-col justify-center lg:grid grid-cols-2 items-center py-10 px-10 md:px-20">
                <div class="col-span-1 lg:pr-16 xl:pr-20 flex flex-col sm:items-center lg:items-start pb-14 lg:pb-0">
                    <p class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold ">
                        Collect partial data, download everything
                    </p>
                    <p class="text-center lg:text-left text-lg xl:text-xl font-medium mt-10">
                        With Youform you can collect partial data as well before your users hit the submit button. You can download all your data from the dashboard.
                    </p>
                    <a href="https://app.youform.io/register" class="-rotate-1 text-center mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Try For Free
                    </a>
                </div>
                <div class="col-span-1">
                    <img class="w-full m-auto rounded-md " src="/assets/images/submissions.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4" src="/assets/images/yellow-wave-down.png" alt="">
    <img class="absolute rotate-12 right-16 lg:right-32 -bottom-3 sm:-bottom-8 lg:-bottom-12 w-40 md:w-56 lg:w-64" src="/assets/images/solved.png" alt="">
</div>

<!-- 4th feature -->
<div class="-mt-16">
    <div class="bg-lavender-rose pt-28 lg:pt-40 pb-20">
        <div class="relative max-w-7xl mx-auto px-10 md:px-20">
            <div class="text-center ">
                <div>
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold">High pricing problem we hear you</p>
                    <p class="text-center text-lg xl:text-xl font-medium mt-10">
                        Do you hate the high prices of Typeform? We do too. <span class="font-bold "> That’s why Youform will give you 99% features for FREE.</span>
                    </p>
                </div>
                <img class="pt-20" src="/assets/images/twitter-screenshot.png" alt="">

                <div class="mt-20">
                    <a href="https://app.youform.io/register" class="-rotate-1 text-center mt-10 text-2xl bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md w-full lg:w-1/2 mx-auto block">
                        Try For Free
                    </a>
                </div>
            </div>
            
        </div>
    </div>

</div>


<div class="bg-black space-y-6 lg:space-y-0">
    <div class="space-y-10 lg:space-y-0 mx-auto max-w-6xl flex flex-col lg:flex-row lg:items-start justify-between px-10 md:px-20 py-16">
        <img class="mx-auto lg:mx-0" width="20%" src="/assets/images/Youform-light.png" alt="">
        <br>
        <a href="https://twitter.com/youformio" class="text-white flex items-center hover:underline" target="_blank">
            Follow on Twitter <svg viewBox="0 0 20 20" aria-hidden="true" class="h-5 w-5 fill-slate-400 pl-1"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0 0 20 3.92a8.19 8.19 0 0 1-2.357.646 4.118 4.118 0 0 0 1.804-2.27 8.224 8.224 0 0 1-2.605.996 4.107 4.107 0 0 0-6.993 3.743 11.65 11.65 0 0 1-8.457-4.287 4.106 4.106 0 0 0 1.27 5.477A4.073 4.073 0 0 1 .8 7.713v.052a4.105 4.105 0 0 0 3.292 4.022 4.095 4.095 0 0 1-1.853.07 4.108 4.108 0 0 0 3.834 2.85A8.233 8.233 0 0 1 0 16.407a11.615 11.615 0 0 0 6.29 1.84"></path></svg>
        </a>
        
        {{-- <ul class="space-y-2 text-center">
            <li class="text-lg text-white  font-semibold">Company</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
        </ul>
        <ul class="space-y-2 text-center">
            <li class="text-lg text-white  font-semibold">Product</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
        </ul>
        <ul class="space-y-2 text-center">
            <li class="text-lg text-white  font-semibold">Use cases</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
        </ul>
        <ul class="space-y-2 text-center">
            <li class="text-lg text-white  font-semibold">Compare</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
            <li class="text-white ">new</li>
        </ul> --}}
    </div>     

</div>

@endsection
