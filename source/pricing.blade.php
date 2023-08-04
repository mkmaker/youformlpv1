@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class="bg-medium-champagne bg-[url('/assets/images/banner-background-pricing.png')] bg-contain bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class=" flex flex-col items-center col-span-3 lg:pr-16 xl:pr-20">
                    <p class="text-center leading-snug text-3xl sm:leading-snug sm:text-5xl xl:leading-snug xl:text-6xl font-bold">
                    <span class="text-orange-600">Start with forever FREE plan</span>
                         with unlimited forms and responses and
                        <span class="text-orange-600"> 99% of our features.</span>
                    </p>
                    <p class="text-center text-base sm:text-lg xl:text-xl font-medium mt-10">
                        All form building features are free forever which covers almost all basic form building requirements.
                    </p>
                    <a href="https://app.youform.io/register" class="rotate-1 mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Start For FREE
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <img class="-mt-1" src="/assets/images/banner-wave.png" alt="">
        <img class="w-1/4 absolute -top-2 left-32" src="/assets/images/so-affordable.png" alt="">
    </div>
</div>

<!-- 1st feature -->
<div>
    <div class="bg-vivid-yellow">
        <div class="relative max-w-7xl mx-auto -mt-10 md:-mt-16">
            <div class="flex flex-col justify-center items-center pt-40 pb-16 px-10 md:px-20">
                <div class="col-span-1 flex flex-col sm:items-center  pb-14 lg:pb-0">
                    <p class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold ">
                        Youform PRO
                    </p>
                    <p class="mt-10 text-center text-2xl leading-snug sm:leading-snug sm:text-4xl xl:leading-snug xl:text-5xl font-bold">
                        Youform PRO will give you features like
                        <span class=""> custom domain, fully customisable forms for your brands, ability to customise the form URL,</span>
                        teams, workspaces and much more.
                        </p>
                        <p class="text-center text-lg sm:text-2xl xl:text-3xl font-medium mt-10">
                            We are still launching these features and then will launch our PRO pricing. 
                        </p>
                        <p class="text-center text-lg sm:text-2xl xl:text-3xl font-medium mt-10">
                            The PRO plan will be $29/month.
                        </p>
                    <a href="https://app.youform.io/register" class="-rotate-1 mt-10 text-2xl  bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Start For FREE
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-6" src="/assets/images/yellow-wave-down.png" alt="">
</div>    

<!-- Faq -->
<div class="-mt-10 sm:-mt-16">
    <div class="pt-28 lg:pt-48 pb-20 bg-amber-50">
        <div class="relative max-w-7xl mx-auto -mt-16 pb-20">
            <div class="flex flex-col justify-center">
                <div class="">
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold mb-6 pt-10">
                        Frequently Asked Question
                    </p>
                </div>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                            <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                                <div  class="flex justify-between  px-4 py-10 text-3xl">
                                    <p class="text-black font-medium">Is Youform free?</p>
                                    <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                      </svg>
                                </div>
                                <div x-show="open">
                                    <p class=" px-4 py-10 text-xl text-black">
                                        Youform is the best FREE alternative to Typeform in the market. While Typeform provides ONLY 10 responses in free account, Youform provides unlimited responses and forms in free account. 
                                    </p>
                                </div>   
                            </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 text-3xl">
                                <p class="text-black font-medium">What is Youform PRO?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 text-xl text-black">
                                    Youform PRO provides you some advanced features like ability to invite team members, manage forms in workspaces, add your custom domain and remove Youform's branding from your forms.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 text-3xl">
                                <p class="text-black font-medium">Can I request some features?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 text-xl text-black">
                                    Sure, tweet or send us a DM <a href="https://twitter.com/youformio">@youformio</a> on tweeter and we would be happy to help!
                                </p>
                            </div>   
                        </div>      
                    </div>
                    
                </div>    
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
    </div>     

</div>

@endsection
