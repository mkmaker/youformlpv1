---
title: Google Forms Custom Domain - How to Use Custom Domain with Google Forms [Solved]
description: Learn how to use a custom domain with Google Forms. Step-by-step guide for Google Workspace method and discover a simpler alternative with Youform.
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-12">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        How to Use a Custom Domain with Google Forms
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Learn how to customize your Google Form URL and create a branded custom domain. We'll walk you through the Google Workspace method and show you a simpler alternative.
                    </p>
                </div>
            </div>
        </div>

        <div>
            <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
        </div>
    </div>
</div>

<!-- Main Content with TOC Sidebar -->
<div class="bg-white py-20 -mt-10 lg:-mt-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <!-- Table of Contents Sidebar -->
            <div class="lg:col-span-2">
                <div class="lg:sticky lg:top-24 pt-10 lg:pt-16">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Table of Contents</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#understanding-custom-domains" class="text-aquamarine hover:underline font-medium text-sm">Understanding Google Forms Custom Domains</a>
                            </li>
                            <li>
                                <a href="#google-workspace-method" class="text-aquamarine hover:underline font-medium text-sm">Method: Google Workspace</a>
                            </li>
                            <li>
                                <a href="#why-complex" class="text-aquamarine hover:underline font-medium text-sm">Why This Method Is Complex</a>
                            </li>
                            <li>
                                <a href="#youform-solution" class="text-aquamarine hover:underline font-medium text-sm">A Simpler Solution: Youform</a>
                            </li>
                            <li>
                                <a href="#faq" class="text-aquamarine hover:underline font-medium text-sm">Frequently Asked Questions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12 pt-10 lg:pt-16" id="understanding-custom-domains">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Understanding Google Forms Custom Domains</h2>
                    <p class="text-lg text-gray-700 mb-4">
                        By default, Google Forms doesn't support custom domains. All Google Forms URLs will always be in the format <code class="bg-gray-100 px-2 py-1 rounded border border-gray-300">forms.google.com/...</code> or <code class="bg-gray-100 px-2 py-1 rounded border border-gray-300">docs.google.com/forms/...</code>, which means you can't have a branded URL like <code class="bg-gray-100 px-2 py-1 rounded border border-gray-300">forms.yourcompany.com</code>.
                    </p>
                    <p class="text-lg text-gray-700">
                        However, there is a way to use a custom domain with Google Forms if you have a Google Workspace account. Let's walk through the process step by step.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google Workspace Method Section -->
<div class="bg-gray-50 py-20" id="google-workspace-method">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-4">Method: Google Workspace (For Organizations)</h2>
                    <p class="text-lg text-gray-700 mb-8">
                        This is the official way for businesses or schools using Google Workspace. Here's how to set it up:
                    </p>

                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold mb-3">Step 1: Admin Console</h3>
                            <p class="text-gray-700">
                                Sign in as an administrator to the <a href="https://admin.google.com" target="_blank" class="text-aquamarine hover:underline">Google Admin console</a>. You'll need admin privileges to configure custom URLs.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-3">Step 2: Custom URLs</h3>
                            <p class="text-gray-700">
                                Navigate to <strong>Account</strong> → <strong>Account settings</strong> → <strong>Custom URLs</strong> in the Admin console.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-3">Step 3: Add Prefix</h3>
                            <p class="text-gray-700">
                                Enter a prefix for your custom URL (e.g., "forms") and save the changes. This will create a subdomain like <code class="bg-gray-100 px-2 py-1 rounded">forms.yourdomain.com</code>.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-3">Step 4: DNS Records</h3>
                            <p class="text-gray-700 mb-3">
                                Add a CNAME record at your domain host. You'll need to:
                            </p>
                            <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                                <li>Go to your domain registrar or DNS provider (e.g., GoDaddy, Namecheap, Cloudflare)</li>
                                <li>Create a CNAME record pointing your subdomain to <code class="bg-gray-100 px-2 py-1 rounded">ghs.googlehosted.com</code></li>
                                <li>For example: <code class="bg-gray-100 px-2 py-1 rounded">forms.yourdomain.com</code> → <code class="bg-gray-100 px-2 py-1 rounded">ghs.googlehosted.com</code></li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-3">Step 5: Connect</h3>
                            <p class="text-gray-700">
                                Return to the Admin console and confirm that you've completed the DNS steps. Google will verify the DNS configuration, which can take up to 48 hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Complexity Section -->
<div class="bg-white py-20" id="why-complex">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-8">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Why This Method Is Complex</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        While the Google Workspace method works, it comes with several challenges:
                    </p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-bold mb-2">💰 Requires Paid Google Workspace Subscription</h3>
                            <p class="text-gray-700">
                                You need a Google Workspace account, which starts at $6 per user per month. For small businesses or individuals, this can be expensive.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold mb-2">⚙️ Technical DNS Configuration</h3>
                            <p class="text-gray-700">
                                You need to understand DNS records, CNAME configurations, and have access to your domain's DNS settings. This requires technical knowledge that many users don't have.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold mb-2">⏱️ Time-Consuming Setup</h3>
                            <p class="text-gray-700">
                                The process involves multiple steps across different platforms (Admin console, DNS provider), and DNS verification can take up to 48 hours to complete.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold mb-2">🚫 Limited Customization</h3>
                            <p class="text-gray-700">
                                Even after setup, you still have limited control over the form URL structure and overall form appearance compared to dedicated form builders.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Youform Simple Solution Section -->
<div class="bg-amber-50 py-20" id="youform-solution">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <div class="mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">A Simpler Solution: Youform Custom Domain</h2>
                    <p class="text-lg text-gray-700 mb-8">
                        Youform makes custom domain setup incredibly simple. Instead of multiple steps across different platforms, you can have your custom domain working in just 2 minutes.
                    </p>

                    <div class="bg-white p-8 rounded-xl border-2 border-black mb-8">
                        <h3 class="text-2xl font-bold mb-6">How Simple Is It?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">
                                    1
                                </div>
                                <div>
                                    <p class="text-gray-800 font-semibold">Add your domain in Youform settings</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">
                                    2
                                </div>
                                <div>
                                    <p class="text-gray-800 font-semibold">Add a single A record in your DNS (just one IP address)</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="bg-coral rounded-full w-10 h-10 flex items-center justify-center text-xl font-bold flex-shrink-0 border-2 border-black">
                                    3
                                </div>
                                <div>
                                    <p class="text-gray-800 font-semibold">Done! Your custom domain is ready in minutes</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="https://help.youform.com/p/5xWrRWWjKjSKtb/How-to-set-up-a-custom-domain-in-Youform" target="_blank" class="text-gray-800 hover:underline font-semibold">
                                View detailed setup guide →
                            </a>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-6">Additional Benefits of Youform Over Google Forms</h3>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong>Partial Submissions:</strong> Save progress and let users complete forms later. Never lose a submission again.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong>Better Design & Templates:</strong> Beautiful, modern form designs and 500+ professional templates to choose from.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong>Unlimited Submissions:</strong> No limits on form responses, even on the free plan. Collect as many submissions as you need.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong>Custom Branding:</strong> Full control over your form's appearance, colors, fonts, and branding to match your company identity.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong>Better User Experience:</strong> More engaging, interactive form experience with better completion rates and user satisfaction.
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-aquamarine mr-3 flex-shrink-0 mt-0.5">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <strong>Free Forever:</strong> Unlimited forms and unlimited responses on the free plan. No credit card required.
                                </div>
                            </li>
                        </ul>
                    </div>

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
    </div>
</div>

<!-- Embed Comparison Section -->
<div class="bg-white py-20" id="embed-comparison">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Compare Google Forms vs Youform (Custom Domain Example)</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Here's how a form looks when embedded from Google Forms versus Youform with a custom-domain-ready setup.
                </p>

                <div class="md:grid md:grid-cols-2 gap-6 md:space-y-0 space-y-8">
                    <!-- Google Forms Column -->
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Sample Google Form Embed</h3>
                        <div class="border border-gray-200 rounded-lg overflow-hidden mb-4">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScasVGN22KfMsFHgMozqyI0tt1PZbWYk31XIJ5zV2Wnsg-diA/viewform?embedded=true"
                                    width="100%"
                                    height="613"
                                    frameborder="0"
                                    marginheight="0"
                                    marginwidth="0">
                                Loading…
                            </iframe>
                        </div>
                    </div>

                    <!-- Youform Column -->
                    <div>
                        <h3 class="text-2xl font-bold mb-3">Sample Youform Embed</h3>
                        <div class="border border-gray-200 rounded-lg overflow-hidden mb-4">
                            <iframe src="https://app.youform.com/forms/ye4jfygl" loading="lazy" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-amber-50 py-20" id="faq">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-8 lg:col-start-3">
                <h2 class="text-3xl sm:text-4xl xl:text-5xl font-bold mb-10 text-center">
                    Frequently Asked Questions
                </h2>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How can I use a custom domain with online form services?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    To use a custom domain with online form services, you'll need to choose a platform that supports this feature. With Google Forms, you can use Google Workspace (as explained above), but it requires a paid subscription and complex DNS setup. Youform offers a much simpler process—just add your domain in settings and add a single A record in your DNS. <a href="https://help.youform.com/p/5xWrRWWjKjSKtb/How-to-set-up-a-custom-domain-in-Youform" target="_blank" class="text-aquamarine hover:underline font-semibold">Learn how to set up a custom domain in Youform</a> to get started.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">Which platforms support custom domains for online surveys?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Several platforms support custom domains for online surveys. Google Forms requires a Google Workspace account (paid subscription) and complex DNS configuration. Youform makes it simple to connect your own domain without complex technical setup—you can use your custom domain on both free and paid plans, making it accessible to everyone. The setup process takes just minutes compared to the multi-step, multi-day process with Google Workspace.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How can I customize Google forms link?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    Unfortunately, you cannot customize Google Forms links to use your own domain without a Google Workspace account. Google Forms URLs will always contain "forms.google.com" or "docs.google.com" in the domain. The only way to use a custom domain with Google Forms is through a paid Google Workspace account and the complex setup process we outlined above. If you need a branded, customizable form link, consider using Youform, which allows you to use your own custom domain easily with just a simple DNS record.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="border-y-2 border-black">
                        <div class="w-full cursor-pointer" @click="open = !open">
                            <div class="flex justify-between px-4 py-6 md:text-lg lg:text-2xl">
                                <p class="text-black font-medium flex-grow">How can I make branded URL with Google forms?</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <p class="px-4 py-6 lg:text-lg text-black">
                                    You cannot create a truly branded URL with Google Forms without a Google Workspace account. Google Forms doesn't support custom domains by default, so your form URLs will always include "google.com" in the domain name. While you can shorten the link or use URL shorteners, you still won't have a fully branded domain like "forms.yourcompany.com". If you need a branded URL for your forms, Youform is a great solution. With Youform, you can easily set up a custom domain and create branded URLs that match your company's identity in just minutes.
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
