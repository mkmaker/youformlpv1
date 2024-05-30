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
                        The most affordable Typeform alternative
                    </p>
                    <p class="text-center lg:text-left text-base sm:text-lg xl:text-xl font-medium mt-10">
                        Youform is a form builder that provides UNLIMITED forms and responses for FREE.
                    </p>
                    <div class="lg:flex lg:items-center space-x-6 mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="https://app.youform.com/forms/2byfpx1j" target="_blank" class="underline group transition-all hover:no-underline inline-block mx-auto mt-4 lg:mt-0">
                            or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>
                    <div class="text-sm pt-6 pl-4 font-semibold rotate-1">
                        <p>
                            ✅ Unlimited responses
                        </p>

                        <p class="pt-2">
                            ✅ No credit card required
                        </p>
                    </div>
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
                    Youform gives you fully responsive forms so your users will be able to fill your forms from mobile, desktop, or tablets.
                </p>
                <a href="https://app.youform.com/register" class="-rotate-1 mt-10 text-2xl block text-center bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                    Create free account
                </a>
                <div class="text-sm pt-4 pl-4 font-semibold -rotate-1">
                    <p>
                        ✅ Unlimited responses
                    </p>

                    <p class="pt-2">
                        ✅ No credit card required
                    </p>
                </div>
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
                    Youform's intuitive form builder is fully drag-and-drop. Create a live form in just a couple minutes.
                </p>
                <a href="https://app.youform.com/register" class="-rotate-1 text-center mt-10 text-2xl bg-pale-violet border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                    Create free account
                </a>
                <div class="text-sm pt-4 pl-4 font-semibold -rotate-1">
                    <p>
                        ✅ Unlimited responses
                    </p>

                    <p class="pt-2">
                        ✅ No credit card required
                    </p>
                </div>
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
                    <a href="https://app.youform.com/register" class="-rotate-1 text-center mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <div class="text-sm pt-4 pl-4 font-semibold -rotate-1">
                        <p>
                            ✅ Unlimited responses
                        </p>
    
                        <p class="pt-2">
                            ✅ No credit card required
                        </p>
                    </div>
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
            <div class="text-center">
                <div>
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold">High pricing problem? We hear you!</p>
                    <p class="text-center text-lg xl:text-xl font-medium mt-10">
                        Do you hate the high prices of Typeform? We do too. That's why Youform allows UNLIMITED forms and form responses for FREE.
                    </p>
                </div>
                <img class="pt-20" src="/assets/images/twitter-screenshot.png" alt="">

                <div>
                    <div class="mt-16">
                        <h4 class="text-center text-2xl sm:text-4xl xl:text-5xl font-bold mb-8">
                            Even <em>Pieter Levels</em> recommends Youform
                        </h4>
                        <blockquote class="twitter-tweet" data-theme="dark">
                            <p lang="en" dir="ltr">So <a href="https://t.co/y5mHX1AfIZ">https://t.co/y5mHX1AfIZ</a> by <a href="https://twitter.com/mynameis_davis?ref_src=twsrc%5Etfw">@mynameis_davis</a> is a free Typeform alternative, the Pro version is $29/mo or lifetime for $299 rn<br><br>Not affiliated but looks great to me <a href="https://t.co/7mu9YdiKcz">https://t.co/7mu9YdiKcz</a></p>&mdash; @levelsio (@levelsio) <a href="https://twitter.com/levelsio/status/1762609429130760609?ref_src=twsrc%5Etfw">February 27, 2024</a>
                        </blockquote> 
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>

                <div class="mt-20">
                    <a href="https://app.youform.com/register" class="text-center mt-10 text-2xl bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md w-full lg:w-1/2 mx-auto block">
                        Create free account
                    </a>

                    <div>
                        <a href="https://app.youform.com/forms/2byfpx1j" target="_blank" class="underline group transition-all hover:no-underline hover:font-semibold inline-block mx-auto mt-4">
                            or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>

                    <div class="text-sm pt-8 pl-4 font-semibold -rotate-1">
                        <p>
                            ✅ Unlimited responses
                        </p>
    
                        <p class="pt-2">
                            ✅ No credit card required
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>


@include('partials.footer')

@endsection
