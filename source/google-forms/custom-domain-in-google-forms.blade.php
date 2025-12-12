---
title: Google Forms Custom Domain - How to Use Custom Domain with Google Forms [Solved]
description: Learn how to use a custom domain with Google Forms. Discover why Google Forms doesn't support custom domains directly and find the best solution with Youform's easy custom domain setup.
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Google Forms Custom Domain
                        <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                            <span class="absolute inset-0 bg-yellow-300 rotate-3 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                            <span class="relative z-10 p-2 inline-block rotate-3">The Complete Guide</span>
                        </span>
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Want to use a custom domain with Google Forms? Unfortunately, Google Forms doesn't support custom domains directly. But don't worry—we've got you covered with the best solution.
                    </p>
                    <div class="mt-10">
                        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Create free account
                        </a>
                    </div>
                    <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4 justify-center">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Easy custom domain setup</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No technical knowledge needed</span>
                        </div>
                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Free forever</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Problem Section -->
<div class="bg-white py-20 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-16 pt-10 lg:pt-16">
            <h2 class="text-4xl sm:text-5xl font-bold mb-4">The Problem: Google Forms Doesn't Support Custom Domains</h2>
            <p class="text-xl max-w-3xl mx-auto text-gray-700">
                If you're looking to use a custom domain with Google Forms, you're out of luck. Google Forms doesn't allow you to use your own domain directly.
            </p>
        </div>

        <div class="max-w-4xl mx-auto bg-gray-50 border-2 border-black p-8 rounded-xl">
            <p class="text-gray-800 mb-4">
                All Google Forms URLs will always be in the format <code class="bg-white px-2 py-1 rounded border border-gray-300">forms.google.com/...</code> or <code class="bg-white px-2 py-1 rounded border border-gray-300">docs.google.com/forms/...</code>, which means you can't have a branded URL like <code class="bg-white px-2 py-1 rounded border border-gray-300">forms.yourcompany.com</code>.
            </p>
            <p class="text-gray-800">
                This limitation makes it difficult to maintain brand consistency and can make your forms look less professional. But there are workarounds—though they come with their own challenges.
            </p>
        </div>
    </div>
</div>

<!-- Google Workspace Workaround Section -->
<div class="bg-vivid-yellow py-20 border-t-4 border-black">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold mb-4">The Hard Way: Google Workspace Workaround</h2>
            <p class="text-xl max-w-3xl mx-auto">
                Technically, you can use a custom domain with Google Forms if you have a Google Workspace account, but it's complicated and has significant limitations.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-3xl">
                <div class="text-3xl mb-3">💰</div>
                <h3 class="text-xl font-bold mb-2">Paid Subscription Required</h3>
                <p class="text-gray-700 text-sm">Requires a paid Google Workspace subscription starting at $6/user/month</p>
            </div>

            <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-3xl">
                <div class="text-3xl mb-3">⚙️</div>
                <h3 class="text-xl font-bold mb-2">Complex DNS Setup</h3>
                <p class="text-gray-700 text-sm">Complex DNS configuration and domain verification process required</p>
            </div>

            <div class="bg-white p-6 rounded-xl border-2 border-black drop-shadow-3xl">
                <div class="text-3xl mb-3">🚫</div>
                <h3 class="text-xl font-bold mb-2">Limited Control</h3>
                <p class="text-gray-700 text-sm">Still doesn't give you full control over the form URL structure</p>
            </div>
        </div>

        <div class="max-w-3xl mx-auto mt-10 text-center">
            <p class="text-lg">
                Even with Google Workspace, the process is far from straightforward and may not give you the branded experience you're looking for. Most users find this approach too complex and expensive for what it delivers.
            </p>
        </div>
    </div>
</div>

<!-- Competitor Alternatives Section -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold mb-4">Alternative Solutions: Short.io and Forms.app</h2>
            <p class="text-xl max-w-3xl mx-auto text-gray-700">
                Some platforms do offer custom domain support, but they come with their own complexities
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-gray-50 p-8 rounded-xl border-2 border-black">
                <h3 class="text-2xl font-bold mb-4">Short.io</h3>
                <p class="text-gray-700">
                    Short.io is a URL shortener that can help you create branded links, but it's primarily a link management tool rather than a form builder solution.
                </p>
            </div>

            <div class="bg-gray-50 p-8 rounded-xl border-2 border-black">
                <h3 class="text-2xl font-bold mb-4">Forms.app</h3>
                <p class="text-gray-700 mb-4">
                    Forms.app does support custom domains, but the setup process is quite complicated:
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 text-sm">
                    <li>Requires a Premium account (paid subscription)</li>
                    <li>You need to create a subdomain</li>
                    <li>Complex DNS configuration with CNAME records</li>
                    <li>Technical knowledge required for setup</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Youform Solution Section -->
<div class="bg-aquamarine py-20">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-20">
        <div class="text-center pt-40 pb-10 px-10 md:px-20">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                The Easy Solution: 
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                    <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                    <span class="relative z-10 p-2 inline-block rotate-6">Youform Custom Domain</span>
                </span>
            </h2>
            <p class="text-xl max-w-3xl mx-auto text-gray-800">
                Youform makes it incredibly easy to use a custom domain with your forms. No complex DNS configurations, no technical headaches—just a simple, straightforward setup process.
            </p>
            <div class="mt-6">
                <a href="https://help.youform.com/p/5xWrRWWjKjSKtb/How-to-set-up-a-custom-domain-in-Youform" target="_blank" class="text-gray-800 hover:underline font-semibold text-lg">
                    Learn how to set up a custom domain in Youform →
                </a>
            </div>
        </div>

        <!-- Benefits Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 px-10 md:px-20 mt-10">
            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-coral p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Easy Custom Domain Setup</h3>
                <p class="text-gray-700">
                    Simple, user-friendly process—no technical expertise required. Set up your branded domain in minutes.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-pale-violet p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 0 0 0 1.5H3v10.5a3 3 0 0 0 3 3h1.21l-1.172 3.513a.75.75 0 0 0 1.424.474l.329-.987h8.418l.33.987a.75.75 0 0 0 1.422-.474l-1.17-3.513H18a3 3 0 0 0 3-3V3.75h.75a.75.75 0 0 0 0-1.5H2.25Zm6.54 15.6L8.25 15.75H6a1.5 1.5 0 0 1-1.5-1.5V3.75h13.5v10.5a1.5 1.5 0 0 1-1.5 1.5h-2.25l-.84 2.1Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Partial Submissions</h3>
                <p class="text-gray-700">
                    Save progress and let users complete forms later. Never lose a submission again.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-yellow-300 p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M9 1.5H4.5c-1.154 0-2.25.9-2.25 2.25v16.5c0 1.35 1.096 2.25 2.25 2.25h15c1.154 0 2.25-.9 2.25-2.25V12.75A.75.75 0 0 0 21 12h-3.75V3.75A2.25 2.25 0 0 0 15 1.5H9Zm-1.5 4.5a.75.75 0 0 0 0 1.5H15a.75.75 0 0 0 0-1.5H7.5Zm0 3a.75.75 0 0 0 0 1.5H15a.75.75 0 0 0 0-1.5H7.5Zm-3 6.75a.75.75 0 0 0 .75-.75v-3a.75.75 0 0 0-1.5 0v3c0 .414.336.75.75.75Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Better Design & Templates</h3>
                <p class="text-gray-700">
                    Beautiful, modern form designs and a wide selection of professional templates to choose from.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-green-300 p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Unlimited Submissions</h3>
                <p class="text-gray-700">
                    No limits on form responses, even on the free plan. Collect as many submissions as you need.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-pink-300 p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Custom Branding</h3>
                <p class="text-gray-700">
                    Full control over your form's appearance and branding. Match your company's identity perfectly.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                <div class="bg-blue-300 p-3 rounded-lg inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.75 12a.75.75 0 0 1 .75-.75h2.25a.75.75 0 0 1 0 1.5H19.5a.75.75 0 0 1-.75-.75ZM12 18.75a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0v-2.25a.75.75 0 0 1 .75-.75ZM5.25 12a.75.75 0 0 1-.75.75H2.25a.75.75 0 0 1 0-1.5H4.5a.75.75 0 0 1 .75.75ZM12 5.25a.75.75 0 0 1-.75-.75V2.25a.75.75 0 0 1 1.5 0V4.5a.75.75 0 0 1-.75.75Z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Better User Experience</h3>
                <p class="text-gray-700">
                    More engaging, interactive form experience that keeps users interested and improves completion rates.
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center mt-10">
            <div class="text-center">
                <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                    Create free account
                </a>
                <a href="https://app.youform.com/forms/2byfpx1j" target="_blank" class="underline group transition-all hover:no-underline block mx-auto mt-4">
                    or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="-mt-10">
    <div class="pt-20 lg:pt-30 pb-20 bg-amber-50">
        <div class="relative max-w-7xl mx-auto -mt-16 pb-20">
            <div class="flex flex-col justify-center">
                <div class="">
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold mb-6 pt-10">
                        Frequently Asked Questions
                    </p>
                </div>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">How can I use a custom domain with online form services?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-10 lg:text-xl text-black">
                                    To use a custom domain with online form services, you'll need to choose a platform that supports this feature. Most form builders require you to set up a subdomain (like forms.yourwebsite.com) and configure DNS records. However, the process varies significantly between platforms. Youform offers one of the simplest custom domain setups—just add your domain in the settings and follow the easy configuration steps. <a href="https://help.youform.com/p/5xWrRWWjKjSKtb/How-to-set-up-a-custom-domain-in-Youform" target="_blank" class="text-aquamarine hover:underline font-semibold">Learn how to set up a custom domain in Youform</a> to get started.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">Which platforms support custom domains for online surveys?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-10 lg:text-xl text-black">
                                    Several platforms support custom domains for online surveys, including Youform, Forms.app, and Typeform. However, Youform stands out for its ease of use and free custom domain support. Unlike Google Forms (which doesn't support custom domains at all), Youform makes it simple to connect your own domain without complex technical setup. You can use your custom domain with Youform on both free and paid plans, making it accessible to everyone. Other platforms like Forms.app require premium subscriptions and more complex DNS configurations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">How can I customize Google forms link?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-10 lg:text-xl text-black">
                                    Unfortunately, you cannot customize Google Forms links to use your own domain. Google Forms URLs will always contain "forms.google.com" or "docs.google.com" in the domain. The only way to use a custom domain with Google Forms is through a paid Google Workspace account, and even then, the customization is very limited. If you need a branded, customizable form link, consider switching to Youform, which allows you to use your own custom domain easily and provides much more flexibility in customizing your form URLs and overall form appearance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-10 md:text-lg lg:text-3xl">
                                <p class="text-black font-medium flex-grow">How can I make branded URL with Google forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-10 lg:text-xl text-black">
                                    You cannot create a truly branded URL with Google Forms. Google Forms doesn't support custom domains, so your form URLs will always include "google.com" in the domain name. While you can shorten the link or use URL shorteners, you still won't have a fully branded domain like "forms.yourcompany.com". If you need a branded URL for your forms, Youform is the perfect solution. With Youform, you can easily set up a custom domain and create branded URLs that match your company's identity. The setup is simple, and you can have your branded form URL working in just a few minutes.
                                </p>
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
