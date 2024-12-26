@extends('_layouts.main')

@section('body')

<div class="bg-amber-50 pb-20">

    <div>

        @include('partials.nav')

    </div>
 
    <div 
        x-data="{
            formDisplayMode: 'desktop',
            changeFormDisplayMode(mode) {
                this.formDisplayMode = mode;
            }
        }"
        class="text-center pt-20 pb-10 max-w-7xl mx-auto px-10 md:px-20">

        <div>
            <div class="text-sm text-gray-600 mb-6">
                <ol class="hidden md:flex list-reset justify-center">
                    <li>
                        <a href="/templates" class="text-blue-600 hover:underline">All templates</a>
                    </li>
                    <li>
                        <span class="mx-2">/</span>
                    </li>
                    <li>
                        <a href="/templates/c/{{$page->str_plural($page->type)}}" class="text-blue-600 hover:underline">{{$page->str_plural(ucwords($page->type))}}</a>
                    </li>
                    <li>
                        <span class="mx-2">/</span>
                    </li>
                    <li>
                        <a href="/templates/c/{{$page->str_plural($page->type)}}/{{$page->category_slug}}" class="text-blue-600 hover:underline">{{ucwords($page->categories[0] ?? 'Other')}}</a>
                    </li>
                    <li>
                        <span class="mx-2">/</span>
                    </li>
                    <li class="text-gray-900">
                        {{$page->title}}
                    </li>
                </ol>

                <div class="block md:hidden">
                    <a href="/templates/c/{{$page->str_plural($page->type)}}/{{$page->category_slug}}" class="text-blue-600 hover:underline">
                        &larr;
                        {{ucwords($page->categories[0] ?? 'Other')}}
                    </a>
                </div>
            </div>

            <h1 class="text-5xl font-bold">{{$page->title}}</h1>

            <div class="mt-6 text-lg text-gray-700 max-w-3xl mx-auto">
                {{$page->description}}
            </div>

        </div>

        <div class="hidden lg:inline-flex justify-center mt-6 text-gray-600 border-2 border-gray-300 rounded-md py-1 px-2">
            <button @click="changeFormDisplayMode('desktop')" title="View on desktop" class="p-2 rounded-md hover:bg-gray-200" :class="{'bg-white border border-gray-100': formDisplayMode === 'desktop'}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                </svg>                  
            </button>
            <button @click="changeFormDisplayMode('mobile')" title="View on mobile" class="p-2 rounded-md hover:bg-gray-200" :class="{'bg-white border border-gray-100': formDisplayMode === 'mobile'}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>                  
            </button>
        </div>

        <div class="mt-10 relative mx-auto rounded-md shadow-md transition-[width] transition-700 ease-linear" :class="{'w-96': formDisplayMode === 'mobile', 'w-full': formDisplayMode === 'desktop'}">
            {{-- <img class="hidden xl:block absolute right-10 -top-28 w-32 opacity-70 rotate-45" src="/assets/images/try-it-arrow.png" alt=""> --}}

            <iframe src="{{$page->appUrl}}/forms/{{$page->slug}}" loading="lazy" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0"></iframe>
        </div>

        <div class="mt-10">
            <a href="{{$page->appUrl}}/use-template?template={{$page->appUrl}}/forms/{{$page->slug}}" class="mt-10 text-2xl block max-w-lg mx-auto text-center bg-sasquatch-socks border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-3 text-black rounded-md">
                Use this template &rarr;
            </a>
        </div>

        <p class="text-center mt-3">
            <a href="{{$page->appUrl}}/forms/{{$page->slug}}" target="_blank" class="hidden xl:inline-block underline underline-offset-8 group transition-all hover:no-underline mx-auto mt-4">
                or click here to open this form in a new tab <span class="hidden group-hover:inline">&rarr;</span>
            </a>
        </p>
    </div>

    <div class="mt-5 pb-2">
        <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
            <blockquote class="text-gray-900 text-base lg:text-xl">
              <p>“We had the highest conversion with Youform compared to Typeform, Google Calendar and even the routing form in Calendly!”</p>
            </blockquote>
            <a href="https://www.linkedin.com/in/adamdanyal/" target="_blank" class="mt-5 flex items-center flex-col gap-x-6">
              <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" src="/assets/images/adam-danyal.jpeg" alt="Adam Danyal Avatar">
              <div class="text-base mt-1">
                <div class="text-gray-900 group-hover:underline">Adam Danyal</div>
                <div class=" text-gray-700 text-xs">Founder Leadership Club. 
                    <br>
                    2M Followers on LinkedIn</div>
              </div>
            </a>
        </figure>
    </div>
 

    <div class="mt-10 px-6">
        <div class="text-center py-16">
            <h2 class="text-3xl font-bold mb-6">Customize Your Template</h2>
            
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                You can modify the templates to suit your needs by changing and adding blocks to ask relevant questions. Customize the design by adjusting colors, adding your brand logo, and more to make it truly yours.
            </p>
        </div>
    </div>

    <div class="-mt-6 px-6">
        <div class="text-center py-16">
            <h2 class="text-3xl font-bold mb-6">Connect with 7000+ Apps</h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Enhance your workflow by connecting Youform to over 7000 other apps like Slack, Google Sheets, Hubspot, and more. Seamlessly integrate with your favorite tools to automate processes and save time.
            </p>
            <div class="flex justify-center mt-10 space-x-6">
                <img src="/assets/images/logos/calendly.png" alt="Calendly Logo" class="h-12 w-12 transform rotate-6">
                <img src="/assets/images/logos/google-sheets.png" alt="Google Sheets Logo" class="h-14 w-14 transform -rotate-6">
                <img src="/assets/images/logos/gtm.svg" alt="GTM Logo" class="hidden sm:block h-12 w-12 transform rotate-12">
                <img src="/assets/images/logos/slack.png" alt="Slack Logo" class="h-12 w-12 transform -rotate-12">
                <img src="/assets/images/logos/stripe.svg" alt="Stripe Logo" class="h-16 w-16 transform rotate-6 -translate-y-2">
                <img src="/assets/images/logos/webhook.png" alt="Webhook Logo" class="hidden sm:block h-12 w-12 transform -rotate-6">
                <img src="/assets/images/logos/zapier.png" alt="Zapier Logo" class="h-12 w-12 transform rotate-12">
            </div>
        </div>
    </div>

    <div class="mt-5 pb-2">
        <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
            <blockquote class="text-gray-900 text-base lg:text-xl">
              <p>“Youform is an absolute joy to use.”</p>
            </blockquote>
            <a href="https://x.com/levelsio" target="_blank" class="mt-5 flex items-center flex-col gap-x-6">
              <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" src="/assets/images/levelsio.jpg" alt="Pieter Levels Avatar">
              <div class="text-base mt-1">
                <div class="text-gray-900 group-hover:underline">Pieter Levels</div>
                <div class=" text-gray-700 text-xs">Founder Nomadlist and RemoteOK. 
                    <br>
                    400k+ Followers on Twitter</div>
              </div>
            </a>
        </figure>
    </div>

    <div class="text-center py-16">
        <a href="/templates" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
            Check All Templates &rarr;
        </a>
    </div>

</div>

@include('partials.templates-faq')

@include('partials.footer')

@endsection