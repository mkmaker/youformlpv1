@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div class=" bg-medium-champagne bg-[url('/assets/images/banner-background.png?v=2')] bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto mt-10 pb-20">
            <div class="flex flex-col justify-center lg:grid grid-cols-5 items-center px-10 md:px-20">
                <div class=" flex flex-col items-center lg:items-start col-span-3 lg:pr-16 xl:pr-20">
                    <a href="https://www.capterra.in/reviews/1060219/youform" x-data x-tooltip.raw="Read reviews on Capterra" target="_blank" class="flex items-center cursor-pointer bg-pale-violet text-black text-xs font-semibold px-4 py-1.5 rounded-full mb-3 lg:mb-2 space-x-1 transition-transform transform hover:scale-105">
                        <span>Rated 5</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <span>on Capterra &rarr;</span>
                    </a>
                    <h1 class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        The free online form builder
                    </h1>
                    <p class="text-center lg:text-left text-base mt-6">
                        Youform is a form builder that provides UNLIMITED forms and responses for FREE. Build <a href="/templates/c/forms" class="underline hover:no-underline">forms</a>, <a href="/online-quiz-builder/" class="underline hover:no-underline">quizzes</a>, and <a href="/online-survey-builder/" class="underline hover:no-underline">surveys</a> with logic, custom domains, file uploads, embeds, and much more 🤓
                    </p>
                    <div class="lg:flex lg:items-center space-x-6 mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" class="underline group transition-all underline-offset-8 hover:no-underline inline-block mx-auto mt-4 lg:hidden">
                            or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>
                    <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4">
                        <div class="flex items-center space-x-1">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
                        </div>

                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-12">
                        <figure class="flex flex-auto flex-col justify-between pt-4 group text-center lg:text-left max-w-2xl">
                            <blockquote class="text-gray-900 text-lg md:text-xl">
                              <p>"Youform is an absolute joy to use."</p>
                            </blockquote>
                            <a href="https://x.com/levelsio" target="_blank" class="mt-3 lg:flex items-center gap-x-6">
                              <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto lg:mx-0" src="/assets/images/levelsio.jpg" alt="Pieter Levels Avatar">
                              <div class="text-base mt-1 lg:mt-0">
                                <div class="text-gray-900 group-hover:underline">Pieter Levels</div>
                                <div class=" text-gray-700 text-xs">Founder Nomadlist and RemoteOK.
                                    <br>
                                    700k+ Followers on Twitter</div>
                              </div>
                            </a>
                        </figure>
                    </div>
                </div>
                <div
                    x-data="{
                        hovered: false,
                    }"
                    x-cloak
                    class="pt-16 lg:pt-0 col-span-2 hidden lg:block ">

                    <div

                        @mouseover="hovered = true"
                        :class="{'rotate-2': !hovered, 'rotate-0': hovered}"
                        class="rounded-md transition-all rotate-2 relative bg-[url('/assets/images/embed-form-bg.png')] bg-cover bg-no-repeat">

                        <img class="absolute inset-0 rounded-md w-full h-full" src="/assets/images/embed-form-bg.png" alt="embed form background">

                        <img class="absolute -left-36 bottom-40 w-32 opacity-70" src="/assets/images/try-it-arrow.png?v=2" alt="try it arrow">

                        <img class="absolute -right-28 -top-12 w-96 -z-10" src="/assets/images/banner-blob.png?v=2" alt="blob decoration image">

                        <iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" class="rounded-md shadow border-2 border-black drop-shadow-6xl"></iframe>

                    </div>

                    <p :class="{'rotate-2': !hovered, 'rotate-0': hovered}" class="text-center">
                        <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" class="hidden xl:inline-block underline underline-offset-8 group transition-all hover:no-underline mx-auto mt-4">
                            or click here to open this form in a new tab <span class="hidden group-hover:inline">&rarr;</span>
                        </a>
                    </p>
                </div>
            </div>

            <div
                x-data="{
                    handleClick() {
                        $dispatch('notify', {
                            type: 'error',
                            message: 'LOL! You need to login and go to builder to try this.'
                        })
                    }
                }"
                class="pt-20 md:pt-32 relative w-full overflow-hidden pl-2">
                <img
                    @dblclick="handleClick"
                    src="/assets/images/youform-builder-new.png"
                    alt="Youform Builder"
                    loading="lazy"
                    class="w-full h-auto object-cover object-left"
                    style="min-height: 600px"
                >
            </div>
        </div>

        <div class="mt-3 pb-2">
            <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
                <blockquote class="text-gray-900 text-base lg:text-xl">
                  <p>"We had the highest conversion with Youform compared to Typeform, Google Calendar and even the routing form in Calendly!"</p>
                </blockquote>
                <span class="mt-5 flex items-center flex-col gap-x-6">
                  <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" loading="lazy" src="/assets/images/adam-danyal.jpeg?v=2" alt="Adam Danyal Avatar">
                  <div class="text-base mt-1">
                    <div class="text-gray-900 group-hover:underline">Adam Danyal</div>
                    <div class=" text-gray-700 text-xs">Founder Leadership Club.
                        <br>
                        2M Followers on LinkedIn</div>
                  </div>
                </span>
            </figure>
        </div>

        <div class="flex items-center justify-center gap-4 mt-8 pb-4 px-3 max-w-xl mx-auto">
            <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.capterra.com/p/10015804/Youform/"> <img border="0" class="flex-1 flex h-56" src="https://brand-assets.capterra.com/badge/82d852d8-4309-425c-8601-28e9da8625fa.svg" alt="Capterra Best Value 2024 Badge" /> </a>
            <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.getapp.com/website-ecommerce-software/forms-automation/category-leaders"> <img border="0" class="flex-1 flex h-56" src="https://brand-assets.getapp.com/badge/1ddf62be-af16-43f4-98a7-f77d6aef0fba.svg" alt="GetApp Category Leaders 2024 Badge" /> </a>
            <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.softwareadvice.com/forms-automation/youform-profile/"> <img border="0" class="flex-1 flex h-56" src="https://brand-assets.softwareadvice.com/badge/aa6b76d1-fa34-4756-9f02-7a6288863c9b.svg" alt="Software Advice Front Runners 2024 Badge" /> </a>
            <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.capterra.com/p/10015804/Youform/"> <img border="0" class="flex-1 flex h-56" src="https://brand-assets.capterra.com/badge/293bec48-38cb-4344-aa42-658d14d12903.svg" alt="Capterra Shortlist 2024 Badge" /> </a>
        </div>
    </div>

    <div>
        <img class="-mt-4 w-full" loading="lazy" src="/assets/images/banner-wave.png" alt="wave decoration image">
    </div>
</div>

<!-- Social Proof Bar -->
<div class="bg-white py-10 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 text-center">
            <div>
                <p class="text-3xl font-bold text-aquamarine">70,000+</p>
                <p class="text-sm text-gray-600">Users worldwide</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-aquamarine">10M+</p>
                <p class="text-sm text-gray-600">Responses collected</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-aquamarine">100%</p>
                <p class="text-sm text-gray-600">Free forever</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-aquamarine">4.8/5</p>
                <p class="text-sm text-gray-600">User rating</p>
            </div>
        </div>
    </div>
</div>

<!-- Switching from another form builder? -->
<div class="bg-white py-20 border-b-4 border-black"
     x-data="{ active: 'typeform' }">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-4">
                Switching from another form builder?
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                No matter which form builder you're currently using, Youform makes it easy to switch.
            </p>
        </div>

        <!-- Tabs -->
        <div class="flex justify-center mb-10">
            <div class="inline-flex border-b-2 border-gray-200">
                <button
                    @click="active = 'typeform'"
                    :class="active === 'typeform' ? 'border-b-2 border-black text-black' : 'border-b-2 border-transparent text-gray-400 hover:text-gray-600'"
                    class="px-6 py-3 font-semibold text-lg transition-all -mb-[2px]">
                    Typeform
                </button>
                <button
                    @click="active = 'google'"
                    :class="active === 'google' ? 'border-b-2 border-black text-black' : 'border-b-2 border-transparent text-gray-400 hover:text-gray-600'"
                    class="px-6 py-3 font-semibold text-lg transition-all -mb-[2px]">
                    Google Forms
                </button>
            </div>
        </div>

        <!-- Typeform Panel -->
        <div x-show="active === 'typeform'" x-cloak class="max-w-5xl mx-auto">
            <div class="bg-amber-50 border-2 border-black rounded-2xl p-8 md:p-12 drop-shadow-6xl">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    The most affordable Typeform alternative
                </h3>
                <p class="text-gray-700 text-lg mb-2">
                    Youform gives you the same beautiful, conversational multi-step forms — with all the features you need at just <strong>$29/month</strong> instead of Typeform's $99/month Business plan.
                </p>
                <p class="text-gray-700 text-lg mb-6">
                    And our free plan? <strong>Unlimited forms and unlimited responses</strong> — while Typeform caps you at 10 responses/month.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://app.youform.com/typeform-to-youform" class="inline-block px-6 py-2.5 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        Import from Typeform
                    </a>
                    <a href="/typeform-alternative/" class="inline-block px-6 py-2.5 bg-white border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        Youform vs Typeform &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Google Forms Panel -->
        <div x-show="active === 'google'" x-cloak class="max-w-5xl mx-auto">
            <div class="bg-amber-50 border-2 border-black rounded-2xl p-8 md:p-12 drop-shadow-6xl">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    The modern Google Forms alternative
                </h3>
                <p class="text-gray-700 text-lg mb-2">
                    Google Forms' UI is stuck in the 90s and limited in features. Youform gives you beautiful, branded multi-step forms with advanced analytics, <a href="/blog/google-forms-redirect-after-submit-solved/" class="underline hover:no-underline">redirect after form submission</a>, and better elements like:
                </p>
                <ul class="text-gray-700 text-lg mb-4 space-y-1 list-disc list-inside">
                    <li><a href="/blog/google-forms-searchable-dropdown-cm0qnsmvn00j0syrxh9idh8f2/" class="underline hover:no-underline">Searchable dropdowns</a></li>
                    <li>Signature field</li>
                    <li>Partial submissions</li>
                    <li>Email notification configurations</li>
                    <li><a href="/google-forms/custom-domain-in-google-forms/" class="underline hover:no-underline">Custom domain</a></li>
                </ul>
                <p class="text-gray-700 text-lg mb-6">
                    Plus <strong>unlimited responses for free</strong> — no Google Workspace subscription required.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://app.youform.com/googleform-to-youform" class="inline-block px-6 py-2.5 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        Convert your Google Form
                    </a>
                    <a href="/google-forms-alternative/" class="inline-block px-6 py-2.5 bg-white border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        Youform vs Google Forms &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-aquamarine">
    <div class="relative max-w-7xl mx-auto pb-20">
        <h2 class="text-5xl font-bold text-gray-800 text-center pt-20 pb-16 px-10 md:px-20 capitalize">
            Features that make form building
            <span class="relative inline-block ml-1 mt-2 sm:mt-0">
              <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
              <span class="relative z-10 p-2 inline-block rotate-6">fun again!</span>
            </span>
        </h2>

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">💡</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-800">Intelligent builder</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Add logic, perform calculations, recall information, add hidden fields and more.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-slate-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">📝</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-800">Partial submissions</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Even if your form responder leaves before submitting the form, you can still view partial data.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-red-100 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🗂️</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-800">500+ templates</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Start with professionally designed templates and customize them to match your brand.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">✨</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-800">Make it your own</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Add your own logo and brand colors then use as full page form, embed on your website, or use a custom domain.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-pink-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🔗</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-800">Integrate with 6000+ tools</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Connect with your favorite tools like Zapier, Webhook, Slack, Google Sheets, Google Tag Manager (GTM), and more.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-yellow-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">📊</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-800">Track performance</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Get form analytics like number of views, starts, completion rate, completion time, question by question drop-off rate with beautiful charts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <a href="https://youform.com/pricing" class="-rotate-1 mt-10 text-2xl inline-block mx-auto text-center bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                View more on pricing page &rarr;
            </a>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">How It Works</h2>
            <p class="text-xl max-w-3xl mx-auto">
                Create professional forms in minutes without any coding knowledge
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="bg-coral rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-2 border-black">
                    1
                </div>
                <h3 class="text-xl font-bold mb-2">Choose Your Fields</h3>
                <p class="text-gray-700">
                    Select from text, email, dropdowns, checkboxes, file uploads, and more. Drag them into your form.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <div class="bg-yellow-300 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-2 border-black">
                    2
                </div>
                <h3 class="text-xl font-bold mb-2">Customize Your Form</h3>
                <p class="text-gray-700">
                    Set labels, placeholders, logic, validation, and brand styles. Simple, visual, and fast.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <div class="bg-pale-violet rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mx-auto mb-4 border-2 border-black">
                    3
                </div>
                <h3 class="text-xl font-bold mb-2">Share & Embed</h3>
                <p class="text-gray-700">
                    Share a link, embed on your site, or use a custom domain. Connect to Sheets, Slack, and thousands more via integrations.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-amber-50 border-t-4 border-black pb-20 overflow-x-hidden">
    <div class="relative max-w-7xl mx-auto pb-20">
        <section class="relative pt-16 pb-32 md:pb-20 px-10 md:px-20" x-data="{ visible: false }">
            <div class="container mx-auto text-center px-4">
                <h2 class="text-6xl font-bold text-gray-800 mb-6 mt-6 pt-10 md:pt-0">
                    Seamless Integrations
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto mb-10 text-lg">
                    Youform connects with Google Sheets, Stripe, Calendly, Slack, Trello, Zapier, Webhook, and more to simplify your workflow and maximize efficiency.
                </p>

                <div class="relative flex justify-center items-center py-56 px-10 sm:px-56">
                    <!-- Youform Logo in the Center -->
                    <div class="absolute flex justify-center items-center w-32 h-32 rounded-full">
                        <img loading="lazy" src="/assets/images/youform-logo.png" alt="Youform" class="h-16 w-16 object-contain" />
                    </div>
                    <!-- Logos coming out of the center -->
                    <template x-for="(logo, index) in [
                        { name: 'Google Sheets', src: '/assets/images/logos/google-sheets.png?v=2' },
                        { name: 'Slack', src: '/assets/images/logos/slack.png?v=2' },
                        { name: 'Webhook', src: '/assets/images/logos/webhook.png?v=2' },
                        { name: 'Calendly', src: '/assets/images/logos/calendly.png?v=2' },
                        { name: 'Zapier', src: '/assets/images/logos/zapier.png?v=2' },
                        { name: 'GTM', src: '/assets/images/logos/gtm.svg?v=2' },
                        { name: 'Gmail', src: '/assets/images/logos/gmail.png?v=2' },
                        { name: 'Trello', src: '/assets/images/logos/trello.png?v=2' },
                        { name: 'Stripe', src: '/assets/images/logos/stripe.png?v=2' },
                    ]" :key="index">
                        <div
                            class="absolute flex justify-center items-center w-16 h-16 sm:w-24 sm:h-24 rounded-xl bg-white transform scale-0 opacity-0 transition duration-500 ease-out"
                            :style="`transform: translate(${Math.cos(index * (2 * Math.PI / 9)) * 180}px, ${Math.sin(index * (2 * Math.PI / 9)) * 180}px) rotate(${Math.floor(Math.random() * 40) - 20}deg);`"
                            x-intersect:enter="visible = true; $el.style.transform = 'scale(1) translate(' + Math.cos(index * (2 * Math.PI / 9)) * 180 + 'px, ' + Math.sin(index * (2 * Math.PI / 9)) * 180 + 'px) rotate(' + (Math.floor(Math.random() * 40) - 20) + 'deg)'; $el.style.opacity = '1'; $el.style.transitionDelay = (index * 0.1) + 's'"
                            x-intersect:leave="visible = false; $el.style.transform = 'scale(0)'; $el.style.opacity = '0';"
                        >
                            <img :src="logo.src" :alt="logo.name" class="h-12 w-12 object-contain" />
                        </div>
                    </template>
                </div>
            </div>

            <!-- Decorative Background Shapes -->
            <div
                class="absolute top-0 left-0 w-32 h-32 bg-yellow-400 rounded-full shadow-[8px_8px_0_#000000] -translate-x-10 -translate-y-10 opacity-0 transition duration-500 ease-out"
                x-intersect:enter="$el.style.opacity = '1'; $el.style.transform = 'translate(0, 0)';"
                x-intersect:leave="$el.style.opacity = '0'; $el.style.transform = 'translate(-30px, -30px)';"
            ></div>
            <div
                class="absolute bottom-0 right-0 w-40 h-40 bg-blue-400 rounded-full shadow-[8px_8px_0_#000000] translate-x-10 translate-y-10 opacity-0 transition duration-500 ease-out"
                x-intersect:enter="$el.style.opacity = '1'; $el.style.transform = 'translate(0, 0)';"
                x-intersect:leave="$el.style.opacity = '0'; $el.style.transform = 'translate(30px, 30px)';"
            ></div>
        </section>

    </div>
</div>

<div class="-mt-20 relative">
    <img loading="lazy" src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">

    <div class="bg-vivid-yellow -mt-2 pb-20">
        <div class="relative max-w-7xl mx-auto">
            <div class="px-10 md:px-20 text-center">
                <h2 class="text-6xl font-bold text-gray-800 mb-6">
                    500+ Form Templates
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto mb-10 text-lg">
                    We have a variety of templates to choose from. You can use them as a starting point for your own form.
                </p>
            </div>

            @foreach ($page->templates as $template_type => $templates)
                <div class="max-w-7xl mx-auto px-10 md:px-20 py-10">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-3xl font-bold">
                            {{$page->str_plural(ucwords($template_type))}}
                        </h2>

                        <div>
                            <a href="/templates/c/{{$page->str_plural($template_type)}}" class="hover:underline">
                                    View All <span class="hidden sm:inline">{{ucwords($template_type)}} Templates</span>
                            </a>
                            &rarr;
                        </div>
                    </div>

                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                            @foreach ($templates as $template)
                                @include('_partials.template-card', ['template' => $template])
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="flex items-center justify-center mt-10">
                <div>
                    <a href="https://app.youform.com/register" class="text-center mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <div class="text-sm pt-6 font-semibold items-center text-center">
                        <div class="flex items-center space-x-1 justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
                        </div>

                        <div class="flex items-center justify-center space-x-1 pt-2">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" loading="lazy" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
    <img class="absolute rotate-12 right-16 lg:right-32 -bottom-3 sm:-bottom-8 lg:-bottom-12 w-40 md:w-56 lg:w-64" src="/assets/images/solved.png" alt="Solved checkmark illustration">
</div>

<!-- Value proposition CTA -->
<div class="" style="margin-top: -5rem">
    <div class="bg-lavender-rose pt-28 lg:pt-40 pb-20">
        <div class="relative max-w-7xl mx-auto px-10 md:px-20">
            <div class="text-center">
                <h2 class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold">Unlimited forms. Unlimited responses. All for Free.</h2>
                <p class="text-center text-lg xl:text-xl font-medium mt-10 max-w-3xl mx-auto">
                    Most form builders charge per response or limit your free plan to a handful of submissions. Youform gives you unlimited forms and unlimited responses — completely free, forever.
                </p>

                <div class="mt-16">
                    <a href="https://app.youform.com/register" class="text-center mt-10 text-2xl bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md w-full lg:w-1/2 mx-auto block">
                        Create free account
                    </a>

                    <div>
                        <a href="https://youform.com/pricing" class="underline group transition-all underline-offset-8 hover:no-underline hover:font-semibold inline-block mx-auto mt-4">
                            View pricing details <span class="hidden group-hover:inline">&rarr;</span>
                        </a>
                    </div>

                    <div class="text-sm pt-8 font-semibold sm:flex items-center justify-center sm:space-x-4 mx-auto">
                        <div class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-300">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>Unlimited responses</span>
                        </div>

                        <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-300">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
@include('_partials.testimonials-carousel')

<!-- FAQ Section -->
<div class="bg-white py-20">
    <div class="max-w-4xl mx-auto px-10 md:px-20">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>

        <div class="space-y-6">
            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Is Youform really free?</h3>
                <p class="text-gray-700">
                    Yes! You can create unlimited forms and collect unlimited responses for free. We also offer a PRO plan for advanced features like custom domain, team members etc.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Do I need to know how to code?</h3>
                <p class="text-gray-700">
                    No coding knowledge is required! Our visual drag-and-drop builder lets you create forms without writing any code.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Can I embed forms on any website?</h3>
                <p class="text-gray-700">
                    Absolutely! Embed on WordPress, Wix, Squarespace, Webflow, or custom sites. Just copy and paste the embed code or share a link.
                    You can check our <a href="https://help.youform.com/p/qehb-giztQHToz/How-to-embed-Youform-in-my-website" class="text-coral underline hover:no-underline" target="_blank">help center</a> for more information.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">How do I collect form submissions?</h3>
                <p class="text-gray-700">
                    You can collect submissions by sharing your form link or embed in your website. You can also send notifications, export to CSV, or connect to Google Sheets, Slack, Zapier, and webhooks.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">Are the forms mobile-responsive?</h3>
                <p class="text-gray-700">
                    Yes! All forms created with Youform are fully responsive and optimized for mobile, tablet, and desktop.
                </p>
            </div>

            <div class="border-2 border-black rounded-xl p-6">
                <h3 class="text-xl font-bold mb-2">What integrations are available?</h3>
                <p class="text-gray-700">
                    Youform integrates with 6,000+ tools via Zapier, plus direct integrations with Google Sheets, Slack, webhooks, Google Tag Manager (GTM), and more.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Also Try Section -->
<div class="bg-gray-50 py-16 border-t-2 border-gray-200">
    <div class="max-w-4xl mx-auto text-center px-10 md:px-20">
        <h2 class="text-2xl font-bold mb-6">Also Try Our Other Free Builders</h2>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/ai-form-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">🤖</span>
                <span class="font-semibold">AI Form Builder</span>
            </a>
            <a href="/online-quiz-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">🎯</span>
                <span class="font-semibold">Quiz Builder</span>
            </a>
            <a href="/online-survey-builder/" class="inline-flex items-center px-6 py-3 bg-white border-2 border-black rounded-lg hover:bg-aquamarine transition-colors">
                <span class="text-2xl mr-2">📊</span>
                <span class="font-semibold">Survey Builder</span>
            </a>
        </div>
    </div>
</div>

@include('_partials.ask-ai-to-recommend')

@include('partials.footer')

@endsection

@push('head')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is Youform really free?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! You can create unlimited forms and collect unlimited responses for free. We also offer a PRO plan for advanced features like custom domain, team members etc."
            }
        },
        {
            "@type": "Question",
            "name": "Do I need to know how to code?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No coding knowledge is required! Our visual drag-and-drop builder lets you create forms without writing any code."
            }
        },
        {
            "@type": "Question",
            "name": "Can I embed forms on any website?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! Embed on WordPress, Wix, Squarespace, Webflow, or custom sites. Just copy and paste the embed code or share a link."
            }
        },
        {
            "@type": "Question",
            "name": "How do I collect form submissions?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can collect submissions by sharing your form link or embed in your website. You can also send notifications, export to CSV, or connect to Google Sheets, Slack, Zapier, and webhooks."
            }
        },
        {
            "@type": "Question",
            "name": "Are the forms mobile-responsive?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! All forms created with Youform are fully responsive and optimized for mobile, tablet, and desktop."
            }
        },
        {
            "@type": "Question",
            "name": "What integrations are available?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Youform integrates with 6,000+ tools via Zapier, plus direct integrations with Google Sheets, Slack, webhooks, Google Tag Manager (GTM), and more."
            }
        }
    ]
}
</script>
@endpush
