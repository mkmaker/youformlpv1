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
                    <span class="text-orange-600">Youform is FREE to use</span>
                        for unlimited forms and unlimited responses
                        <br>
                        <span class="text-orange-600"> +99% of our features.</span>
                    </p>
                    <p class="text-center text-base sm:text-lg xl:text-xl font-medium mt-10">
                        {{-- All form building features are free forever which covers almost all basic form building requirements. --}}
                    </p>
                    <a href="https://app.youform.io/register" class="rotate-1 mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <img class="-mt-1" src="/assets/images/banner-wave.png" alt="">
        <img class="w-1/2 sm:w-1/3 lg:w-1/4 absolute -top-2 left-32" src="/assets/images/so-affordable.png" alt="">
    </div>
</div>

<!-- 1st feature -->
<div>
    <div class="bg-vivid-yellow">
        <div class="relative max-w-7xl mx-auto -mt-10 md:-mt-16">
            <div class="pt-40 pb-6 px-10 md:px-20">
                <div class="pb-14 lg:pb-0 flex flex-col items-center col-span-3">
                    <h2 class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold ">
                        Youform PRO
                    </h2>
                    <p class="mt-10 text-center text-lg font-bold">
                        Supercharge your forms with Youform PRO that gives following features:
                    </p>
                    <div class="text-center text-lg font-medium mt-10">
                        <ul class="text-left space-y-2 pb-4">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Remove <span class="font-semibold">Powered By Youform</span> branding.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Fully customize "Thank you" pages. 
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    View &amp; download partial submissions.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Add your own domain for form pages (coming soon).
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Invite &amp; collaborate with team members (coming soon).
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Integrations &amp; more features coming soon...
                                </span>
                            </li>
                        </ul>
                    </div>
                    <p class="text-center text-lg sm:text-2xl xl:text-3xl font-medium mt-10">
                        The PRO plan is just $29/month
                    </p>
                    
                    <a href="https://app.youform.io/register" class="-rotate-1 mt-10 text-2xl bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
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
                                        Youform is the best FREE alternative to Typeform in the market. While Typeform provides ONLY 10 responses on their free plan, Youform provides unlimited responses and forms for FREE.
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
                                    While Youform provides you unlimited forms and responses for free, Youform PRO provides advanced features like removing Youform branding, capturing partial submissions, inviting team members, and adding your own custom domain + much more coming soon.
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
                                    Sure, you can add your feature requests <a href="https://youform.canny.io/feature-requests" class="font-semibold underline">here</a>.
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

@include('partials.footer')

@endsection
