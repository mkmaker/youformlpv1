---
title: Pricing - Youform
description: Youform is free for unlimited forms and submissions. Youform PRO provides more advanced features.
---

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
                    </p>
                    <div class="text-center text-sm mt-10 md:grid md:grid-cols-3 gap-2">
                        <div>
                            <ul class="text-left space-y-2 pb-4">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Unlimited forms
                                    </span>
                                </li>
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Unlimited submissions
                                    </span>
                                </li>
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Embed forms on unlimited websites and pages
                                    </span>
                                </li>
    
                            </ul>
                        </div>

                        <div>
                            <ul class="text-left space-y-2 pb-4">
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        File upload (up to 10 MB per file)
                                    </span>
                                </li>
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Add image to forms
                                    </span>
                                </li>
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Email notifications to you and your respondents
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div>

                            <ul class="text-left space-y-2 pb-4">
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Webhooks
                                    </span>
                                </li>
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        CSV download of completed submissions
                                    </span>
                                </li>
    
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>                                  
                                    <span class="pl-2">
                                        Integrate with 6000+ apps like Google Sheet, Slack etc
                                    </span>
                                </li>
                            </ul>

                        </div>
                    </div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Remove <span class="font-semibold">Powered By Youform</span> branding.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Fully customize "Thank you" pages. 
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    View &amp; download partial submissions.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Add your own domain for form pages.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Remove 10MB per file size limit.
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Integrate with 6000+ apps like Google sheets, Slack etc using Zapier or Make
                                </span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                  
                                <span class="pl-2">
                                    Invite &amp; collaborate with team members (coming soon).
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
                                <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                    <p class="text-black font-medium flex-grow">Is Youform free?</p>
                                    <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                      </svg>
                                </div>
                                <div x-show="open">
                                    <p class=" px-4 py-10 lg:text-xl text-black">
                                        Youform is the best FREE alternative to Typeform in the market. While Typeform provides ONLY 10 responses on their free plan, Youform provides unlimited responses and forms for FREE.
                                    </p>
                                </div>   
                            </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">What is Youform PRO?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    While Youform provides you unlimited forms and responses for free, Youform PRO provides advanced features like removing Youform branding, capturing partial submissions, inviting team members, and adding your own custom domain + much more coming soon.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">How long will Youform be around, and how many people use Youform?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Youform has thousands of users, and will be around for years and years to come. Youform was created in 2023, and reached $10,000 in revenue within the first week of launch. It has continued to grow ever since.
                                    <br>
                                    Youform is also not our first product. The Youform team has built other software products to millions in revenue. Learn more on our <a href="/about" class="text-blue-500 hover:underline">about page</a>.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Can you embed a Youform on a website?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yep! You can embed a Youform on any website, whether it’s custom coded, or uses a website builder like WordPress, Squarespace, Shopify, Wix, Carrd, Webflow, Weebly, etc… They are all supported 🤓
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Does Youform integrate with Google Sheets?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform has a direct Google Sheets integration. You can connect your form to Google Sheets, and each new response you receive will automatically add a new row in your Google Sheet.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform have a Zapier integration?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform works with Zapier currently via their <a href="https://www.loom.com/share/59c995ad39ae4d31ab922c9e1c7231e7?sid=3c5a0280-9744-4952-83d7-54b24b60a424" target="_blank" class="text-blue-500 hover:underline">webhooks integration</a>. This allows you to connect form responses to any app on Zapier. However, a direct Zapier integration is coming soon.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform allow you to ask for digital signatures?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, you can collect signatures in your forms with Youform. You can open <a href="https://app.youform.io/forms/uf0c1gec" class="text-blue-500 hover:underline">this form</a> to see how a signature field looks in Youform.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support redirecting users to a URL after they complete a form?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform allows you to redirect users to any website after they complete a form.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Can I use a single Youform account for multiple brands and domains?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, you can use Youform with multiple brands and domains. You can embed your forms on different websites, and even have different custom domains for different forms.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support generating a QR code to share my form?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, you can generate a QR code to share your form in Youform 🤓
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">
                                    Does Youform support file uploads?
                                </p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
                                    Yes, Youform’s free plan allows for file uploads up to 10MB. On the Pro plan, this limit is removed 🙂
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Can I request some features?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 lg:text-xl text-black">
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
