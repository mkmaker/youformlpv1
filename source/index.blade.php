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
                        The most affordable form builder
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

            {{-- Trusted by logos (sprite: single HTTP request) --}}
            <div class="max-w-5xl mx-auto pt-20 pb-12 px-6">
                <p class="text-center text-sm text-gray-800 font-semibold uppercase tracking-wider mb-6">Trusted by teams at</p>
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-6 opacity-80">
                    <span class="inline-block h-7 bg-no-repeat" style="width:102px;background-image:url('/assets/images/logo-sprite.png');background-position:0px 0;background-size:675px 28px" role="img" aria-label="Brick"></span>
                    <span class="inline-block h-7 bg-no-repeat" style="width:51px;background-image:url('/assets/images/logo-sprite.png');background-position:-123px 0;background-size:675px 28px" role="img" aria-label="Vice"></span>
                    <span class="inline-block h-7 bg-no-repeat" style="width:94px;background-image:url('/assets/images/logo-sprite.png');background-position:-194px 0;background-size:675px 28px" role="img" aria-label="HealthifyMe"></span>
                    <span class="inline-block h-7 bg-no-repeat" style="width:90px;background-image:url('/assets/images/logo-sprite.png');background-position:-309px 0;background-size:675px 28px" role="img" aria-label="Insta360"></span>
                    <span class="inline-block h-7 bg-no-repeat" style="width:52px;background-image:url('/assets/images/logo-sprite.png');background-position:-419px 0;background-size:675px 28px" role="img" aria-label="EVT"></span>
                    <span class="inline-block h-7 bg-no-repeat" style="width:54px;background-image:url('/assets/images/logo-sprite.png');background-position:-491px 0;background-size:675px 28px" role="img" aria-label="Hilton"></span>
                    <span class="inline-block h-7 bg-no-repeat" style="width:112px;background-image:url('/assets/images/logo-sprite.png');background-position:-565px 0;background-size:675px 28px" role="img" aria-label="Switzerland Tourism"></span>
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
                class="pt-20 md:pt-32 relative w-full md:pl-2 md:pb-2 md:pr-2 overflow-hidden md:overflow-visible">

                {{-- Decorative blobs --}}
                <img src="/assets/images/banner-star.png" alt="" class="hidden md:block absolute bottom-5 -left-10 w-28 md:w-64 z-0 pointer-events-none" aria-hidden="true">
                <img src="/assets/images/green-cloud.png" alt="" class="hidden md:block absolute top-10 md:top-8 right-2 w-36 md:w-72 z-0 pointer-events-none" aria-hidden="true">
                <img src="/assets/images/banner-blob.png" alt="" class="hidden md:block absolute -bottom-16 -right-8 w-28 md:w-72 z-0 pointer-events-none" aria-hidden="true">

                {{-- Video on md+ screens --}}
                <div
                    x-data="{
                        loaded: false,
                        playing: true,
                        hovered: false,
                        replay() {
                            this.$refs.heroVideo.currentTime = 0;
                            this.$refs.heroVideo.play();
                            this.playing = true;
                        },
                        toggleStop() {
                            if (this.playing) {
                                this.$refs.heroVideo.pause();
                                this.playing = false;
                            } else {
                                this.$refs.heroVideo.play();
                                this.playing = true;
                            }
                        }
                    }"
                    @mouseenter="hovered = true"
                    @mouseleave="hovered = false"
                    class="hidden md:block relative z-10 w-10/12 mx-auto"
                >
                    <video
                        x-ref="heroVideo"
                        x-intersect.once="loaded = true; $el.setAttribute('src', '/assets/videos/youform-builder-demo.mp4'); $el.load(); $el.play()"
                        autoplay muted loop playsinline
                        preload="none"
                        class="w-full h-auto object-cover object-left rounded-2xl border-[3px] border-black"
                        style="box-shadow: 7px 7px 0px rgba(0, 0, 0, 1)"
                    ></video>

                    {{-- Hover overlay buttons --}}
                    <div
                        x-show="hovered"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        class="absolute bottom-6 right-6 flex items-center gap-3 z-20"
                    >
                        <button
                            @click="replay()"
                            class="group flex items-center gap-2 px-4 py-2 bg-white border-2 border-black rounded-full font-semibold text-sm text-black cursor-pointer transition-all duration-150 hover:bg-coral hover:-translate-y-0.5"
                            style="box-shadow: 3px 3px 0px rgba(0,0,0,1)"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="1 4 1 10 7 10"></polyline>
                                <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                            </svg>
                            Replay
                        </button>
                        <button
                            @click="toggleStop()"
                            class="group flex items-center gap-2 px-4 py-2 border-2 border-black rounded-full font-semibold text-sm text-black cursor-pointer transition-all duration-150 hover:-translate-y-0.5"
                            :class="playing ? 'bg-white hover:bg-red-300' : 'bg-green-300 hover:bg-green-400'"
                            style="box-shadow: 3px 3px 0px rgba(0,0,0,1)"
                        >
                            <template x-if="playing">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                    <rect x="5" y="4" width="5" height="16" rx="1"></rect>
                                    <rect x="14" y="4" width="5" height="16" rx="1"></rect>
                                </svg>
                            </template>
                            <template x-if="!playing">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon points="6,4 20,12 6,20"></polygon>
                                </svg>
                            </template>
                            <span x-text="playing ? 'Stop' : 'Play'"></span>
                        </button>
                    </div>
                </div>

                {{-- Image on mobile --}}
                <div class="md:hidden overflow-hidden">
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
        </div>

        <div class="mt-6 md:mt-8 pb-4 px-4">
            <figure class="relative max-w-2xl mx-auto bg-white border-2 border-black rounded-2xl drop-shadow-4xl px-6 md:px-8 pt-7 pb-6 md:pt-8 md:pb-7 -rotate-[0.4deg] hover:rotate-0 transition-transform duration-300 motion-reduce:rotate-0 motion-reduce:transition-none">
                {{-- Decorative quote mark --}}
                <svg class="absolute -top-4 left-6 md:left-8 w-10 h-10 md:w-12 md:h-12 text-coral drop-shadow-3xl" viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
                    <path d="M11.5 6C6.8 6 3 9.8 3 14.5v11c0 .8.7 1.5 1.5 1.5h7c.8 0 1.5-.7 1.5-1.5v-7c0-.8-.7-1.5-1.5-1.5H8C8 12.4 9.6 10 11.5 10c.8 0 1.5-.7 1.5-1.5v-1c0-.8-.7-1.5-1.5-1.5zm13 0C19.8 6 16 9.8 16 14.5v11c0 .8.7 1.5 1.5 1.5h7c.8 0 1.5-.7 1.5-1.5v-7c0-.8-.7-1.5-1.5-1.5H21c0-4.6 1.6-7 3.5-7 .8 0 1.5-.7 1.5-1.5v-1c0-.8-.7-1.5-1.5-1.5z"/>
                </svg>

                <blockquote class="font-display text-black leading-snug text-center"
                            style="font-size: clamp(1rem, 2.2vw, 1.375rem); font-variation-settings: 'wdth' 100, 'wght' 600;">
                    "We had the <span class="bg-blue-200 box-decoration-clone">highest conversion with Youform</span> compared to Typeform, Google Calendar and even the routing form in Calendly!"
                </blockquote>

                <figcaption class="mt-6 flex items-center justify-center gap-3">
                    <img class="shrink-0 h-12 w-12 rounded-full border-2 border-black bg-gray-50" loading="lazy" src="/assets/images/adam-danyal.jpeg?v=2" alt="Adam Danyal">
                    <div class="text-left leading-tight">
                        <div class="font-display text-black text-[15px]" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Adam Danyal</div>
                        <div class="text-[11px] text-gray-600 mt-0.5">Founder, Leadership Club</div>
                    </div>
                    <span class="shrink-0 ml-1 inline-flex items-center gap-1.5 px-2.5 py-1 bg-vivid-yellow border-2 border-black rounded-full text-[10px] font-bold text-black">
                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.063 2.063 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        2M followers
                    </span>
                </figcaption>
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
@php
$socialStats = [
    [
        'tint'  => 'bg-coral',
        'icon'  => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>',
        'number'=> '80,000<span class="text-black/55">+</span>',
        'label' => 'Users worldwide',
    ],
    [
        'tint'  => 'bg-aquamarine',
        'icon'  => '<path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>',
        'number'=> '10M<span class="text-black/55">+</span>',
        'label' => 'Responses collected',
    ],
    [
        'tint'  => 'bg-vivid-yellow',
        'icon'  => '<path d="M12 2.2l2.95 6.3 6.9.7-5.2 4.65 1.55 6.85L12 17.4l-6.2 3.3 1.55-6.85L2.15 9.2l6.9-.7z" fill="currentColor" stroke="none"/>',
        'number'=> '5<span class="text-black/45">/5</span>',
        'label' => 'Rated on Capterra',
    ],
    [
        'tint'  => 'bg-pale-violet',
        'icon'  => '<circle cx="12" cy="12" r="10"/><path d="M8 12h8"/>',
        'number'=> '$0',
        'label' => 'Free forever',
    ],
];
@endphp
<div class="bg-white py-10 md:py-12 border-b-2 border-black font-sans">
    <div class="max-w-7xl mx-auto px-6 md:px-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-7 justify-items-center">
            @foreach($socialStats as $stat)
            <div class="flex items-center gap-4 w-[220px]">
                <span class="shrink-0 inline-flex w-11 h-11 rounded-xl border-2 border-black {{ $stat['tint'] }} items-center justify-center">
                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $stat['icon'] !!}
                    </svg>
                </span>
                <div class="min-w-0 flex-1">
                    <p class="font-display text-2xl md:text-3xl text-black leading-none whitespace-nowrap" style="font-variation-settings: 'wdth' 100, 'wght' 800;">{!! $stat['number'] !!}</p>
                    <p class="text-[11px] uppercase tracking-[0.14em] font-bold text-black/55 mt-1 whitespace-nowrap">{{ $stat['label'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Switching from another form builder? -->
<section class="bg-white py-20 md:py-24 border-b-4 border-black font-sans"
         x-data="{ active: 'typeform' }">
    <div class="max-w-7xl mx-auto px-6 md:px-20">

        {{-- Header --}}
        <div class="max-w-3xl mb-10 md:mb-12">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Already using something else?
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Switch to Youform<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">in one click.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                Bring your existing forms over from Typeform, Google Forms, or Jotform — without rebuilding a thing. Pick your current tool to see the deltas.
            </p>
        </div>

        {{-- Brand picker --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 md:gap-4 mb-5 md:mb-6">
            {{-- Typeform --}}
            <button @click="active = 'typeform'"
                    :class="active === 'typeform' ? 'bg-white drop-shadow-4xl' : 'bg-gray-50 hover:drop-shadow-3xl hover:-translate-y-0.5'"
                    class="border-2 border-black rounded-xl px-4 py-4 flex items-center gap-3 md:gap-4 transition-all duration-200 text-left motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="shrink-0 w-11 h-11 rounded-lg border-2 border-black bg-black flex items-center justify-center">
                    <span class="font-display text-white text-xl" style="font-variation-settings: 'wdth' 100, 'wght' 800;">T</span>
                </span>
                <div class="min-w-0 flex-1">
                    <p class="font-semibold text-sm md:text-base text-gray-900 leading-tight">Typeform</p>
                    <p class="text-[11px] md:text-xs text-gray-500 leading-snug mt-0.5">$99/mo · 10 free responses</p>
                </div>
                <span :class="active === 'typeform' ? 'opacity-100 scale-100' : 'opacity-0 scale-50'" class="shrink-0 w-2.5 h-2.5 rounded-full bg-coral border border-black transition-all motion-reduce:transition-none"></span>
            </button>

            {{-- Google Forms --}}
            <button @click="active = 'google'"
                    :class="active === 'google' ? 'bg-white drop-shadow-4xl' : 'bg-gray-50 hover:drop-shadow-3xl hover:-translate-y-0.5'"
                    class="border-2 border-black rounded-xl px-4 py-4 flex items-center gap-3 md:gap-4 transition-all duration-200 text-left motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="shrink-0 w-11 h-11 rounded-lg border-2 border-black bg-pale-violet flex items-center justify-center">
                    <span class="font-display text-black text-xl" style="font-variation-settings: 'wdth' 100, 'wght' 800;">G</span>
                </span>
                <div class="min-w-0 flex-1">
                    <p class="font-semibold text-sm md:text-base text-gray-900 leading-tight">Google Forms</p>
                    <p class="text-[11px] md:text-xs text-gray-500 leading-snug mt-0.5">UI from 2008 · basic blocks</p>
                </div>
                <span :class="active === 'google' ? 'opacity-100 scale-100' : 'opacity-0 scale-50'" class="shrink-0 w-2.5 h-2.5 rounded-full bg-coral border border-black transition-all motion-reduce:transition-none"></span>
            </button>

            {{-- Jotform --}}
            <button @click="active = 'jotform'"
                    :class="active === 'jotform' ? 'bg-white drop-shadow-4xl' : 'bg-gray-50 hover:drop-shadow-3xl hover:-translate-y-0.5'"
                    class="border-2 border-black rounded-xl px-4 py-4 flex items-center gap-3 md:gap-4 transition-all duration-200 text-left motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="shrink-0 w-11 h-11 rounded-lg border-2 border-black bg-coral flex items-center justify-center">
                    <span class="font-display text-black text-xl" style="font-variation-settings: 'wdth' 100, 'wght' 800;">J</span>
                </span>
                <div class="min-w-0 flex-1">
                    <p class="font-semibold text-sm md:text-base text-gray-900 leading-tight">Jotform</p>
                    <p class="text-[11px] md:text-xs text-gray-500 leading-snug mt-0.5">100 free · 5 form cap</p>
                </div>
                <span :class="active === 'jotform' ? 'opacity-100 scale-100' : 'opacity-0 scale-50'" class="shrink-0 w-2.5 h-2.5 rounded-full bg-coral border border-black transition-all motion-reduce:transition-none"></span>
            </button>
        </div>

        {{-- Stacked panels: all three live in the same grid cell so the wrapper sizes to the tallest one and switching tabs only fades opacity — no layout shift, no flicker. --}}
        <div class="grid" x-cloak>
        {{-- Typeform Panel --}}
        <div style="grid-area: 1 / 1 / 2 / 2"
             class="transition-opacity duration-200 bg-medium-champagne border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden"
             :class="active === 'typeform' ? 'opacity-100 relative z-10' : 'opacity-0 pointer-events-none'">
            <div class="grid lg:grid-cols-12 h-full">
                <div class="lg:col-span-7 p-8 md:p-10 lg:p-12">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55 mb-3">Typeform → Youform</p>
                    <h3 class="font-display text-gray-900 leading-[1.05]"
                        style="font-size: clamp(1.75rem, 3.4vw, 2.4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                        Same conversational forms.<br>
                        <span class="italic" style="font-variation-settings: 'wdth' 95, 'wght' 800, 'slnt' -10;">$70 less per month.</span>
                    </h3>
                    <p class="mt-5 text-gray-700 text-base md:text-lg leading-relaxed max-w-[52ch]">
                        Multi-step conversational forms, conditional logic, signatures, and integrations — all free, with unlimited responses. Payments and custom domains are on Pro ($29/mo), not Enterprise.
                    </p>
                    <div class="flex flex-wrap gap-3 mt-7">
                        <a href="https://app.youform.com/typeform-to-youform" class="inline-flex items-center gap-2 px-5 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Import from Typeform
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                        <a href="/typeform-alternative/" class="inline-flex items-center gap-2 px-5 py-3 bg-white border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Full comparison
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white border-t-2 lg:border-t-0 lg:border-l-2 border-black p-7 md:p-8 lg:p-10 flex flex-col justify-center gap-6">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Monthly cost</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">$99</span>
                            <span class="font-display text-4xl md:text-[44px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">$29</span>
                        </div>
                    </div>
                    <div class="h-px bg-black/10"></div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Free responses</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">10/mo</span>
                            <span class="font-display text-3xl md:text-[34px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Unlimited</span>
                        </div>
                    </div>
                    <div class="h-px bg-black/10"></div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Migration time</p>
                        <p class="font-display text-3xl md:text-[34px] text-gray-900 leading-none mt-1.5" style="font-variation-settings: 'wdth' 100, 'wght' 800;">~30 sec</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Google Forms Panel --}}
        <div style="grid-area: 1 / 1 / 2 / 2"
             class="transition-opacity duration-200 bg-medium-champagne border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden"
             :class="active === 'google' ? 'opacity-100 relative z-10' : 'opacity-0 pointer-events-none'">
            <div class="grid lg:grid-cols-12 h-full">
                <div class="lg:col-span-7 p-8 md:p-10 lg:p-12">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55 mb-3">Google Forms → Youform</p>
                    <h3 class="font-display text-gray-900 leading-[1.05]"
                        style="font-size: clamp(1.75rem, 3.4vw, 2.4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                        Modern multi-step forms.<br>
                        <span class="italic" style="font-variation-settings: 'wdth' 95, 'wght' 800, 'slnt' -10;">Without the 2008 UI.</span>
                    </h3>
                    <p class="mt-5 text-gray-700 text-base md:text-lg leading-relaxed max-w-[52ch]">
                        Get <a href="/blog/google-forms-searchable-dropdown-cm0qnsmvn00j0syrxh9idh8f2/" class="underline hover:no-underline">searchable dropdowns</a>, signatures, partial submissions, and branded themes on the free plan. <a href="/google-forms/custom-domain-in-google-forms/" class="underline hover:no-underline">Custom domains</a> and watermark removal are on Pro.
                    </p>
                    <div class="flex flex-wrap gap-3 mt-7">
                        <a href="https://app.youform.com/googleform-to-youform" class="inline-flex items-center gap-2 px-5 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Convert your Google Form
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                        <a href="/google-forms-alternative/" class="inline-flex items-center gap-2 px-5 py-3 bg-white border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Full comparison
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white border-t-2 lg:border-t-0 lg:border-l-2 border-black p-7 md:p-8 lg:p-10 flex flex-col justify-center gap-6">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Multi-step forms</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">Single page</span>
                            <span class="font-display text-3xl md:text-[34px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Built-in</span>
                        </div>
                    </div>
                    <div class="h-px bg-black/10"></div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Block library</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">~10</span>
                            <span class="font-display text-4xl md:text-[44px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">30+</span>
                        </div>
                    </div>
                    <div class="h-px bg-black/10"></div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Branded design</p>
                        <p class="font-display text-3xl md:text-[34px] text-gray-900 leading-none mt-1.5" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Built-in</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Jotform Panel --}}
        <div style="grid-area: 1 / 1 / 2 / 2"
             class="transition-opacity duration-200 bg-medium-champagne border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden"
             :class="active === 'jotform' ? 'opacity-100 relative z-10' : 'opacity-0 pointer-events-none'">
            <div class="grid lg:grid-cols-12 h-full">
                <div class="lg:col-span-7 p-8 md:p-10 lg:p-12">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55 mb-3">Jotform → Youform</p>
                    <h3 class="font-display text-gray-900 leading-[1.05]"
                        style="font-size: clamp(1.75rem, 3.4vw, 2.4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                        All the power.<br>
                        <span class="italic" style="font-variation-settings: 'wdth' 95, 'wght' 800, 'slnt' -10;">None of the paywalls.</span>
                    </h3>
                    <p class="mt-5 text-gray-700 text-base md:text-lg leading-relaxed max-w-[52ch]">
                        Jotform's free plan caps at 100 submissions and 5 forms. Youform's free plan has no caps — unlimited submissions, unlimited forms, signatures, conditional logic, and integrations. Payments are on Pro ($29/mo).
                    </p>
                    <div class="flex flex-wrap gap-3 mt-7">
                        <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-5 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Start free
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                        <a href="/jotform-alternative/" class="inline-flex items-center gap-2 px-5 py-3 bg-white border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Full comparison
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 bg-white border-t-2 lg:border-t-0 lg:border-l-2 border-black p-7 md:p-8 lg:p-10 flex flex-col justify-center gap-6">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Free submissions</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">100/mo</span>
                            <span class="font-display text-3xl md:text-[34px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Unlimited</span>
                        </div>
                    </div>
                    <div class="h-px bg-black/10"></div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Form limit</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">5</span>
                            <span class="font-display text-4xl md:text-[44px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">∞</span>
                        </div>
                    </div>
                    <div class="h-px bg-black/10"></div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Partial submissions</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <span class="text-gray-400 line-through font-display text-2xl" style="font-variation-settings: 'wdth' 100, 'wght' 700;">Paid</span>
                            <span class="font-display text-3xl md:text-[34px] text-gray-900 leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Free</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>{{-- /grid stack --}}
    </div>
</section>

{{-- ============================================ --}}
{{-- FEATURE SECTIONS START --}}
{{-- ============================================ --}}

{{-- 1. Unlimited Forms & Submissions --}}
<section class="bg-white py-20 md:py-24 border-b border-gray-100 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            {{-- Left: copy --}}
            <div class="lg:col-span-6">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                    <span class="inline-block w-8 h-px bg-gray-400"></span>
                    Free forever
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Unlimited forms.<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Unlimited submissions.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                    Build as many forms as you want and collect as many responses as you need. No caps, no paywalls, no credit card required.
                </p>
                <p class="mt-3 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                    Free forever, as long as you stay within our <a href="https://help.youform.com/p/-wcaJF3tEKR4tg/Youform-fair-usage-policy" target="_blank" rel="noopener" class="underline hover:no-underline font-medium text-gray-700">fair usage guidelines</a>.
                </p>
                <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 mt-7 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                    Start for free
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
            </div>

            {{-- Right: dashboard mock with counter + stream of submissions --}}
            <div class="lg:col-span-6">
                <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden rotate-[0.6deg] hover:rotate-0 transition-transform duration-500 motion-reduce:rotate-0 motion-reduce:transition-none">
                    {{-- Top bar --}}
                    <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                        <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                        <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">app.youform.com / customer-feedback / responses</span>
                    </div>

                    {{-- Counter --}}
                    <div class="px-6 md:px-8 pt-6 pb-5 bg-medium-champagne border-b-2 border-black">
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55">Total responses (this month)</p>
                        <div class="flex items-baseline gap-3 mt-1.5">
                            <p class="font-display text-black leading-none" style="font-size: clamp(2.5rem, 5.5vw, 3.75rem); font-variation-settings: 'wdth' 100, 'wght' 800;">12,847</p>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-aquamarine border border-black rounded-md text-[11px] font-bold text-black">
                                <span class="w-1.5 h-1.5 rounded-full bg-black animate-pulse"></span>
                                live
                            </span>
                        </div>
                        <div class="mt-3 flex items-center gap-2 text-[11px] font-semibold">
                            <span class="text-gray-500">Plan limit:</span>
                            <span class="px-2 py-0.5 bg-white border border-black rounded font-display text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">∞</span>
                            <span class="text-gray-400">·</span>
                            <span class="text-gray-500">No upgrade required</span>
                        </div>
                    </div>

                    {{-- Stream --}}
                    <div class="divide-y-2 divide-black/10">
                        @php
                        $stream = [
                            ['name' => 'Sarah K.',   'tag' => 'NPS',     'time' => '12s ago', 'tint' => 'bg-coral'],
                            ['name' => 'Marcus T.',  'tag' => 'Email',   'time' => '34s ago', 'tint' => 'bg-vivid-yellow'],
                            ['name' => 'Anonymous',  'tag' => 'Feedback','time' => '1m ago',  'tint' => 'bg-pale-violet'],
                            ['name' => 'Lily Z.',    'tag' => 'Signup',  'time' => '2m ago',  'tint' => 'bg-aquamarine'],
                        ];
                        @endphp
                        @foreach($stream as $row)
                        <div class="flex items-center gap-3 px-5 md:px-7 py-3">
                            <span class="shrink-0 w-8 h-8 rounded-lg border-2 border-black {{ $row['tint'] }} flex items-center justify-center font-display text-black text-sm" style="font-variation-settings: 'wdth' 100, 'wght' 800;">{{ strtoupper(substr($row['name'], 0, 1)) }}</span>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-black truncate">{{ $row['name'] }}</p>
                                <p class="text-[11px] text-gray-500 truncate">{{ $row['tag'] }} · {{ $row['time'] }}</p>
                            </div>
                            <span class="shrink-0 text-[10px] font-bold uppercase tracking-wider text-aquamarine">New</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. Intuitive Builder --}}
<section class="bg-amber-50 py-20 md:py-24 border-b border-gray-200 font-sans">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        {{-- Centered header --}}
        <div class="max-w-3xl mx-auto text-center mb-12 md:mb-14">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                The builder
                <span class="inline-block w-8 h-px bg-gray-400"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Drag. Drop.<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Done.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 leading-relaxed">
                Add fields, rearrange blocks, customize the look — all with simple drag and drop. No code, no learning curve, no manual to read first.
            </p>
        </div>

        {{-- Big video card centered --}}
        <div class="max-w-5xl mx-auto relative">
            <div
                x-data="{
                    playing: true,
                    hovered: false,
                    replay() {
                        this.$refs.builderVideo.currentTime = 0;
                        this.$refs.builderVideo.play();
                        this.playing = true;
                    },
                    toggleStop() {
                        if (this.playing) {
                            this.$refs.builderVideo.pause();
                            this.playing = false;
                        } else {
                            this.$refs.builderVideo.play();
                            this.playing = true;
                        }
                    }
                }"
                @mouseenter="hovered = true"
                @mouseleave="hovered = false"
                class="relative bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden">
                {{-- Browser chrome --}}
                <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                    <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                    <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">app.youform.com / forms / new</span>
                </div>
                <video
                    x-ref="builderVideo"
                    x-intersect.once="$el.setAttribute('src', '/assets/videos/youform-builder-demo.mp4'); $el.load(); $el.play()"
                    autoplay muted loop playsinline
                    preload="none"
                    class="block w-full h-auto object-cover"
                ></video>

                {{-- Hover overlay buttons --}}
                <div
                    x-show="hovered"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="absolute bottom-6 right-6 flex items-center gap-3 z-20"
                >
                    <button
                        @click="replay()"
                        class="group flex items-center gap-2 px-4 py-2 bg-white border-2 border-black rounded-full font-semibold text-sm text-black cursor-pointer transition-all duration-150 hover:bg-coral hover:-translate-y-0.5"
                        style="box-shadow: 3px 3px 0px rgba(0,0,0,1)"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="1 4 1 10 7 10"></polyline>
                            <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                        </svg>
                        Replay
                    </button>
                    <button
                        @click="toggleStop()"
                        class="group flex items-center gap-2 px-4 py-2 border-2 border-black rounded-full font-semibold text-sm text-black cursor-pointer transition-all duration-150 hover:-translate-y-0.5"
                        :class="playing ? 'bg-white hover:bg-red-300' : 'bg-green-300 hover:bg-green-400'"
                        style="box-shadow: 3px 3px 0px rgba(0,0,0,1)"
                    >
                        <template x-if="playing">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="5" y="4" width="5" height="16" rx="1"></rect>
                                <rect x="14" y="4" width="5" height="16" rx="1"></rect>
                            </svg>
                        </template>
                        <template x-if="!playing">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                <polygon points="6,4 20,12 6,20"></polygon>
                            </svg>
                        </template>
                        <span x-text="playing ? 'Stop' : 'Play'"></span>
                    </button>
                </div>
            </div>
            {{-- Corner stamp --}}
            <div class="absolute -top-5 -right-5 md:-top-6 md:-right-6 w-24 h-24 md:w-28 md:h-28 bg-coral border-2 border-black rounded-full flex flex-col items-center justify-center rotate-12 drop-shadow-3xl pointer-events-none">
                <span class="font-display text-black text-base md:text-lg leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">0</span>
                <span class="font-display text-black text-[10px] md:text-xs uppercase tracking-wider leading-none mt-1" style="font-variation-settings: 'wdth' 100, 'wght' 800;">code</span>
            </div>
        </div>

        <div class="text-center mt-10 md:mt-12">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Try the builder
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 3. AI Form Builder --}}
<section class="bg-white py-20 md:py-24 border-b border-gray-100 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        {{-- Centered header --}}
        <div class="max-w-3xl mx-auto text-center mb-12 md:mb-14">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                AI-powered
                <span class="inline-block w-8 h-px bg-gray-400"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Build forms with AI.<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">In seconds.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 leading-relaxed">
                Tell our AI what you need in plain English. It picks the fields, writes the questions, and structures the flow — all in seconds.
            </p>
        </div>

        {{-- Big prompt card centered --}}
        <div class="max-w-3xl mx-auto relative">
            {{-- Decorative sparkles --}}
            <svg class="hidden md:block absolute -top-6 -left-6 w-10 h-10 text-coral" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l1.9 5.6L19.5 9 14.7 12.4 16.4 18 12 14.8 7.6 18l1.7-5.6L4.5 9l5.6-1.4z"/></svg>
            <svg class="hidden md:block absolute -top-3 right-10 w-6 h-6 text-aquamarine" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l1.9 5.6L19.5 9 14.7 12.4 16.4 18 12 14.8 7.6 18l1.7-5.6L4.5 9l5.6-1.4z"/></svg>
            <svg class="hidden md:block absolute -bottom-4 -right-4 w-8 h-8 text-vivid-yellow" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l1.9 5.6L19.5 9 14.7 12.4 16.4 18 12 14.8 7.6 18l1.7-5.6L4.5 9l5.6-1.4z"/></svg>
            <svg class="hidden md:block absolute bottom-6 -left-8 w-5 h-5 text-pale-violet" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l1.9 5.6L19.5 9 14.7 12.4 16.4 18 12 14.8 7.6 18l1.7-5.6L4.5 9l5.6-1.4z"/></svg>

            <div class="relative bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-8">
                {{-- Top label row --}}
                <div class="flex items-center gap-2 mb-4">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-pale-violet border-2 border-black rounded-md text-[10px] font-bold uppercase tracking-wider text-black">
                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l1.9 5.6L19.5 9 14.7 12.4 16.4 18 12 14.8 7.6 18l1.7-5.6L4.5 9l5.6-1.4z"/></svg>
                        AI prompt
                    </span>
                    <span class="text-[11px] text-gray-500">Tell us what you want to build</span>
                </div>

                {{-- Fake textarea with cursor --}}
                <div class="relative bg-gray-50 border-2 border-black rounded-xl px-4 py-4 md:py-5 min-h-[110px]">
                    <p class="font-display text-gray-900 text-lg md:text-xl leading-snug" style="font-variation-settings: 'wdth' 100, 'wght' 600;">
                        Create a customer feedback form with an NPS score, a satisfaction rating, and an open-ended comment field<span class="inline-block w-[3px] h-[1.05em] align-text-bottom bg-coral animate-pulse ml-1"></span>
                    </p>
                </div>

                {{-- Footer with example chips + generate button --}}
                <div class="mt-5 flex flex-wrap items-center gap-3 justify-between">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="text-[11px] font-semibold text-gray-500 mr-1">Try:</span>
                        <span class="text-[11px] font-semibold px-2.5 py-1 bg-medium-champagne border border-black rounded-full text-black">Job application</span>
                        <span class="text-[11px] font-semibold px-2.5 py-1 bg-aquamarine/40 border border-black rounded-full text-black">Event signup</span>
                        <span class="text-[11px] font-semibold px-2.5 py-1 bg-pale-violet border border-black rounded-full text-black">Lead capture</span>
                    </div>
                    <button type="button" class="inline-flex items-center gap-2 px-4 py-2 bg-black border-2 border-black rounded-md text-white text-sm font-semibold drop-shadow-3xl pointer-events-none">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l1.9 5.6L19.5 9 14.7 12.4 16.4 18 12 14.8 7.6 18l1.7-5.6L4.5 9l5.6-1.4z"/></svg>
                        Generate
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center mt-10 md:mt-12">
            <a href="/ai-form-builder/" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Try AI form builder
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- 4. Powerful Form Blocks --}}
<section class="relative bg-aquamarine border-y-2 border-black overflow-hidden py-20 md:py-24 font-sans">
    <div class="relative max-w-7xl mx-auto px-6 md:px-20">

        {{-- Header --}}
        <div class="max-w-3xl mb-12 md:mb-14">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black mb-5">
                <span class="inline-block w-8 h-px bg-black/55"></span>
                <span>30<span class="text-coral">+</span> block types · zero upcharges</span>
            </p>
            <h2 class="font-display text-black leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.5rem, 5.6vw, 4.5rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Every field type<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">you'll ever need.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-black/80 max-w-[58ch] leading-relaxed">
                Text, email, payments, signatures, schedulers, matrix grids, file uploads — drag a block in, done. No plugins, no upcharges, no <span class="italic">"available on Enterprise only."</span>
            </p>
        </div>

        {{-- Hero row: 3 featured blocks side-by-side --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5 mb-4 md:mb-5">

            {{-- HERO 1 — Star Rating --}}
            <div class="group bg-white border-2 border-black rounded-2xl p-6 md:p-7 drop-shadow-4xl flex flex-col justify-between min-h-[240px] transition-transform duration-300 -rotate-[0.6deg] hover:rotate-0 motion-reduce:rotate-0 motion-reduce:transition-none">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/45">Feedback</p>
                    <p class="font-display text-2xl md:text-[28px] mt-1.5 text-black leading-tight"
                       style="font-variation-settings: 'wdth' 100, 'wght' 760;">Star rating</p>
                    <p class="text-sm text-black/60 mt-2 max-w-[32ch] leading-snug">Let respondents rate from 1&ndash;10 with custom icons.</p>
                </div>
                <div class="flex gap-1.5 md:gap-2 mt-6" aria-hidden="true">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-9 h-9 md:w-10 md:h-10 text-coral" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.2l2.95 6.3 6.9.7-5.2 4.65 1.55 6.85L12 17.4l-6.2 3.3 1.55-6.85L2.15 9.2l6.9-.7z"/>
                    </svg>
                    @endfor
                </div>
            </div>

            {{-- HERO 2 — Payments --}}
            <div class="group bg-medium-champagne border-2 border-black rounded-2xl p-6 md:p-7 drop-shadow-4xl flex flex-col justify-between min-h-[240px] transition-transform duration-300 hover:-rotate-[0.4deg] motion-reduce:rotate-0 motion-reduce:transition-none">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55">Commerce</p>
                    <p class="font-display text-2xl md:text-[28px] mt-1.5 text-black leading-tight"
                       style="font-variation-settings: 'wdth' 100, 'wght' 760;">Payments</p>
                    <p class="text-sm text-black/65 mt-2 max-w-[32ch] leading-snug">Accept Stripe payments inside your forms. Zero commission.</p>
                </div>
                <div class="mt-6 bg-white border-2 border-black rounded-xl px-3.5 py-3">
                    <div class="flex items-center justify-between gap-3">
                        <p class="text-[13px] md:text-sm tracking-[0.18em] font-semibold text-black">4242 4242 4242 4242</p>
                        <div class="flex gap-1 shrink-0" aria-hidden="true">
                            <span class="block w-5 h-3 bg-coral border border-black/80 rounded-[2px]"></span>
                            <span class="block w-5 h-3 bg-vivid-yellow border border-black/80 rounded-[2px]"></span>
                        </div>
                    </div>
                    <div class="mt-2.5 flex items-center justify-between text-[10px] uppercase tracking-widest text-black/55 font-bold">
                        <span>Exp <span class="text-black">12/28</span></span>
                        <span>CVC <span class="text-black tracking-widest">•••</span></span>
                    </div>
                </div>
            </div>

            {{-- HERO 3 — E-signature --}}
            <div class="group bg-white border-2 border-black rounded-2xl p-6 md:p-7 drop-shadow-4xl flex flex-col justify-between min-h-[240px] transition-transform duration-300 rotate-[0.6deg] hover:rotate-0 motion-reduce:rotate-0 motion-reduce:transition-none">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/45">Legal</p>
                    <p class="font-display text-2xl md:text-[28px] mt-1.5 text-black leading-tight"
                       style="font-variation-settings: 'wdth' 100, 'wght' 760;">E-signature</p>
                    <p class="text-sm text-black/60 mt-2 max-w-[32ch] leading-snug">Collect legally-binding signatures right in the form.</p>
                </div>
                <div class="mt-6 relative bg-pale-violet/25 border-2 border-dashed border-black/55 rounded-xl px-3.5 py-3">
                    <svg viewBox="0 0 280 60" class="w-full h-auto" fill="none" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M10,42 Q22,8 38,38 T72,32 Q88,4 104,42 Q118,58 134,36 Q150,10 168,42 Q182,56 198,32 Q214,8 232,40 Q246,54 266,28"/>
                    </svg>
                    <p class="absolute -bottom-2 left-3 px-1.5 bg-white text-[8.5px] uppercase tracking-widest text-black/65 font-bold">Sign here</p>
                </div>
            </div>
        </div>

        {{-- Chip wall: 12 compact blocks, color-coded by category --}}
        @php
        $chips = [
            ['name' => 'Short text',     'tint' => 'bg-coral/15',           'icon' => '<path d="M4 7h16M4 12h10M4 17h13"/>'],
            ['name' => 'Long text',      'tint' => 'bg-coral/15',           'icon' => '<path d="M4 6h16M4 10h16M4 14h16M4 18h10"/>'],
            ['name' => 'Email',          'tint' => 'bg-pale-violet/35',     'icon' => '<rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3.5 7.5l8.5 6 8.5-6"/>'],
            ['name' => 'Phone',          'tint' => 'bg-pale-violet/35',     'icon' => '<path d="M5 4.5h3.5l1.8 4.5L8 10.5a11 11 0 005.5 5.5l1.5-2.3 4.5 1.8V19a2 2 0 01-2 2A16 16 0 013 6.5a2 2 0 012-2z"/>'],
            ['name' => 'Address',        'tint' => 'bg-pale-violet/35',     'icon' => '<path d="M12 21s7-6 7-12a7 7 0 10-14 0c0 6 7 12 7 12z"/><circle cx="12" cy="9" r="2.3"/>'],
            ['name' => 'Website URL',    'tint' => 'bg-pale-violet/35',     'icon' => '<path d="M10 13.5a4.5 4.5 0 006.8.5l2-2a4.5 4.5 0 00-6.4-6.4l-1 1"/><path d="M14 10.5a4.5 4.5 0 00-6.8-.5l-2 2a4.5 4.5 0 006.4 6.4l1-1"/>'],
            ['name' => 'Number',         'tint' => 'bg-vivid-yellow/55',    'icon' => '<path d="M5 9h14M5 15h14M10 4.5l-1.5 15M15.5 4.5L14 19.5"/>'],
            ['name' => 'Date picker',    'tint' => 'bg-vivid-yellow/55',    'icon' => '<rect x="3" y="5.5" width="18" height="15" rx="2"/><path d="M3 10.5h18M8 3.5v4M16 3.5v4"/>'],
            ['name' => 'Dropdown',       'tint' => 'bg-medium-champagne',   'icon' => '<rect x="3" y="6" width="18" height="12" rx="2"/><path d="M15 11l-3 3-3-3"/>'],
            ['name' => 'Checkboxes',     'tint' => 'bg-medium-champagne',   'icon' => '<rect x="3.5" y="3.5" width="17" height="17" rx="3"/><path d="M8 12l3 3 5.5-6.5"/>'],
            ['name' => 'Picture choice', 'tint' => 'bg-medium-champagne',   'icon' => '<rect x="3" y="4.5" width="18" height="15" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5-9 8.5"/>'],
            ['name' => 'File upload',    'tint' => 'bg-lavender-rose/30',   'icon' => '<path d="M12 3.5v12M7 8l5-4.5 5 4.5M5 20.5h14"/>'],
        ];
        @endphp
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3 md:gap-4 mb-4 md:mb-5">
            @foreach($chips as $chip)
            <div class="bg-white border-2 border-black rounded-xl px-3.5 py-3 flex items-center gap-3 transition-all duration-200 hover:drop-shadow-3xl hover:-translate-y-0.5 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="shrink-0 w-9 h-9 rounded-lg border-2 border-black flex items-center justify-center {{ $chip['tint'] }}">
                    <svg class="w-[18px] h-[18px] text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $chip['icon'] !!}
                    </svg>
                </span>
                <p class="text-[13px] md:text-sm font-semibold text-black leading-tight">{{ $chip['name'] }}</p>
            </div>
            @endforeach
        </div>

        {{-- Advanced row: 3 prominent blocks + CTA --}}
        @php
        $advanced = [
            ['name' => 'NPS',           'desc' => 'Measure loyalty 0–10',  'icon' => '<path d="M3 12h18M6 9v6M10 9v6M14 9v6M18 9v6"/>'],
            ['name' => 'Opinion scale', 'desc' => 'Likert-style ratings',  'icon' => '<path d="M3 12h18"/><circle cx="7" cy="12" r="1.6" fill="currentColor"/><circle cx="12" cy="12" r="1.6" fill="currentColor"/><circle cx="17" cy="12" r="1.6" fill="currentColor"/>'],
            ['name' => 'Matrix grid',   'desc' => 'Multi-question grids',  'icon' => '<circle cx="6" cy="6" r="1.4" fill="currentColor"/><circle cx="12" cy="6" r="1.4" fill="currentColor"/><circle cx="18" cy="6" r="1.4" fill="currentColor"/><circle cx="6" cy="12" r="1.4" fill="currentColor"/><circle cx="12" cy="12" r="1.4" fill="currentColor"/><circle cx="18" cy="12" r="1.4" fill="currentColor"/><circle cx="6" cy="18" r="1.4" fill="currentColor"/><circle cx="12" cy="18" r="1.4" fill="currentColor"/><circle cx="18" cy="18" r="1.4" fill="currentColor"/>'],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 gap-3 md:gap-4">
            @foreach($advanced as $a)
            <div class="md:col-span-3 bg-white border-2 border-black rounded-xl px-4 py-3.5 flex items-center gap-3.5 transition-all duration-200 hover:drop-shadow-3xl hover:-translate-y-0.5 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="shrink-0 w-11 h-11 rounded-lg border-2 border-black bg-vivid-yellow flex items-center justify-center">
                    <svg class="w-[20px] h-[20px] text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $a['icon'] !!}
                    </svg>
                </span>
                <div class="min-w-0">
                    <p class="text-[14px] md:text-[15px] font-semibold text-black leading-tight">{{ $a['name'] }}</p>
                    <p class="text-[11px] md:text-xs text-black/55 leading-snug mt-0.5">{{ $a['desc'] }}</p>
                </div>
            </div>
            @endforeach

            <a href="/features/" class="group sm:col-span-2 md:col-span-3 bg-black border-2 border-black rounded-xl px-4 py-3.5 flex items-center gap-3.5 transition-all duration-200 hover:drop-shadow-3xl hover:-translate-y-0.5 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="shrink-0 w-11 h-11 rounded-lg border-2 border-coral bg-coral flex items-center justify-center">
                    <svg class="w-[20px] h-[20px] text-black transition-transform group-hover:translate-x-0.5 motion-reduce:group-hover:translate-x-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </span>
                <div class="min-w-0">
                    <p class="text-[14px] md:text-[15px] font-semibold text-white leading-tight">See all features</p>
                    <p class="text-[11px] md:text-xs text-white/60 leading-snug mt-0.5">Explore the full library</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- 5. Phone & Email Verification --}}
<section class="bg-white py-20 md:py-24 border-b border-gray-100 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            {{-- Left: verification card --}}
            <div class="lg:col-span-7 order-2 lg:order-1">
                <div class="relative max-w-[560px] lg:ml-0 mx-auto">
                    <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden -rotate-[0.5deg]">
                        {{-- Browser chrome --}}
                        <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                            <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                            <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">Lead capture form</span>
                        </div>

                        {{-- Form preview --}}
                        <div class="p-5 md:p-6 space-y-3">
                            {{-- Email field --}}
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-black/55 mb-1.5">Email address</p>
                                <div class="flex items-center gap-2 bg-white border-2 border-black rounded-xl px-3.5 py-3">
                                    <svg class="shrink-0 w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3.5 7.5l8.5 6 8.5-6"/>
                                    </svg>
                                    <span class="flex-1 text-sm md:text-[15px] text-black truncate">sarah@example.com</span>
                                    <span class="shrink-0 inline-flex items-center gap-1 px-2 py-0.5 bg-aquamarine border border-black rounded-md text-[10px] font-bold text-black">
                                        <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                        Verified
                                    </span>
                                </div>
                            </div>

                            {{-- Phone field --}}
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-black/55 mb-1.5">Phone number</p>
                                <div class="flex items-center gap-2 bg-white border-2 border-black rounded-xl px-3.5 py-3">
                                    <svg class="shrink-0 w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M5 4.5h3.5l1.8 4.5L8 10.5a11 11 0 005.5 5.5l1.5-2.3 4.5 1.8V19a2 2 0 01-2 2A16 16 0 013 6.5a2 2 0 012-2z"/>
                                    </svg>
                                    <span class="flex-1 text-sm md:text-[15px] text-black truncate">+1 (555) 012-3456</span>
                                    <span class="shrink-0 inline-flex items-center gap-1 px-2 py-0.5 bg-aquamarine border border-black rounded-md text-[10px] font-bold text-black">
                                        <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                        Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- OTP popup overlapping the form card --}}
                    <div class="absolute -bottom-6 -right-3 md:-right-8 lg:-right-12 w-[260px] md:w-[290px] bg-medium-champagne border-2 border-black rounded-2xl drop-shadow-4xl p-5 rotate-[1.2deg]">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-black/65">SMS verification</p>
                            <span class="inline-flex items-center gap-1 text-[10px] font-bold text-black/75">
                                <span class="w-1.5 h-1.5 rounded-full bg-aquamarine border border-black/60 animate-pulse"></span>
                                Sent
                            </span>
                        </div>
                        <p class="font-display text-black text-[17px] leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Enter the 4-digit code</p>
                        <div class="flex gap-2 mt-3">
                            <div class="w-11 h-12 bg-white border-2 border-black rounded-lg flex items-center justify-center font-display text-xl text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">4</div>
                            <div class="w-11 h-12 bg-white border-2 border-black rounded-lg flex items-center justify-center font-display text-xl text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">7</div>
                            <div class="w-11 h-12 bg-white border-2 border-black rounded-lg flex items-center justify-center font-display text-xl text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">2</div>
                            <div class="w-11 h-12 bg-white border-2 border-black border-dashed rounded-lg flex items-center justify-center text-black/30">
                                <span class="inline-block w-[3px] h-5 bg-coral animate-pulse"></span>
                            </div>
                        </div>
                        <p class="text-[10px] text-black/60 mt-2.5 font-medium">Sent to +1 (555) 012-3456</p>
                    </div>

                    {{-- Corner stamp --}}
                    <div class="absolute -top-6 -right-4 md:-top-7 md:-right-6 w-20 h-20 md:w-24 md:h-24 bg-coral border-2 border-black rounded-full flex flex-col items-center justify-center rotate-12 drop-shadow-3xl pointer-events-none z-10">
                        <span class="font-display text-black text-[10px] md:text-xs uppercase tracking-wider leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Real</span>
                        <span class="font-display text-black text-[10px] md:text-xs uppercase tracking-wider leading-none mt-0.5" style="font-variation-settings: 'wdth' 100, 'wght' 800;">contacts</span>
                        <span class="font-display text-black text-[10px] md:text-xs uppercase tracking-wider leading-none mt-0.5" style="font-variation-settings: 'wdth' 100, 'wght' 800;">only</span>
                    </div>
                </div>
            </div>

            {{-- Right: copy --}}
            <div class="lg:col-span-5 order-1 lg:order-2">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                    <span class="inline-block w-8 h-px bg-gray-400"></span>
                    Data quality
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Verified emails.<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Verified phones.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    Send a one-time code via SMS or email before accepting a submission. Every contact in your data is real and reachable.
                </p>
                <p class="mt-3 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    No fake signups. No typos. No bouncing follow-ups.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 6. Smart Logic & Automation --}}
<section class="bg-amber-50 py-20 md:py-24 border-b border-gray-200 font-sans">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        {{-- Header --}}
        <div class="max-w-3xl mb-12 md:mb-14">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Smart forms
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Smart Forms with<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Conditional Logic.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                Build forms that adapt to each respondent. Show or hide fields, pipe answers into later questions, and automate what happens after submission — all without code.
            </p>
        </div>

        {{-- 6 feature cards --}}
        @php
        $features = [
            [
                'tint'  => 'bg-coral',
                'name'  => 'Conditional logic',
                'desc'  => 'Show or hide fields based on previous answers.',
                'icon'  => '<path d="M8 4h8M8 20h8M4 8v8M20 8v8"/><path d="M8 12h8"/>',
            ],
            [
                'tint'  => 'bg-vivid-yellow',
                'name'  => 'Answer piping',
                'desc'  => 'Use earlier answers in later questions.',
                'icon'  => '<path d="M3 12h6M15 12h6M9 9v6M9 6L6 9l3 3M15 15l3-3-3-3"/>',
            ],
            [
                'tint'  => 'bg-pale-violet',
                'name'  => 'Hidden fields',
                'desc'  => 'Pass data through URL parameters.',
                'icon'  => '<path d="M3 12s3-7 9-7 9 7 9 7-3 7-9 7-9-7-9-7z"/><circle cx="12" cy="12" r="3"/><line x1="3" y1="3" x2="21" y2="21"/>',
            ],
            [
                'tint'  => 'bg-aquamarine',
                'name'  => 'Redirect on completion',
                'desc'  => 'Send respondents to a custom URL after submit.',
                'icon'  => '<path d="M5 12h14M13 6l6 6-6 6"/>',
            ],
            [
                'tint'  => 'bg-medium-champagne',
                'name'  => 'Self notifications',
                'desc'  => 'Get an email when someone submits.',
                'icon'  => '<path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.7 21a2 2 0 01-3.4 0"/>',
            ],
            [
                'tint'  => 'bg-lavender-rose',
                'name'  => 'Respondent emails',
                'desc'  => 'Auto-reply with a custom thank-you message.',
                'icon'  => '<rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3.5 7.5l8.5 6 8.5-6"/>',
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
            @foreach($features as $f)
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-4xl p-6 md:p-7 transition-all duration-200 hover:drop-shadow-6xl hover:-translate-y-0.5 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $f['tint'] }} items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $f['icon'] !!}
                    </svg>
                </span>
                <p class="font-display text-lg md:text-xl text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $f['name'] }}</p>
                <p class="text-[13px] md:text-sm text-gray-600 leading-relaxed mt-2">{{ $f['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 7. Partial Submissions --}}
<section class="bg-white py-20 md:py-24 border-b border-gray-100 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            {{-- Left: form mock with "saved" popup --}}
            <div class="lg:col-span-7 order-2 lg:order-1">
                <div class="relative max-w-[560px] mx-auto lg:ml-0">
                    <img src="/assets/images/banner-blob.png?v=2" alt="" aria-hidden="true" class="hidden md:block absolute -left-24 lg:-left-32 top-1/2 -translate-y-1/2 w-64 lg:w-80 pointer-events-none">
                    <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden -rotate-[0.5deg]">
                        {{-- Browser chrome --}}
                        <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                            <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                            <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">Lead capture form</span>
                        </div>
                        <div class="p-5 md:p-6">
                            <p class="font-display text-gray-900 text-lg md:text-xl" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Tell us about yourself</p>
                            <p class="text-[11px] text-gray-500 mt-0.5">Step 2 of 4</p>
                            {{-- Progress bar --}}
                            <div class="mt-3 h-2 bg-gray-100 border border-black/60 rounded-full overflow-hidden">
                                <div class="h-full bg-coral" style="width: 50%"></div>
                            </div>
                            {{-- Filled fields --}}
                            <div class="mt-5 space-y-3">
                                <div class="bg-white border-2 border-black rounded-xl px-3.5 py-3">
                                    <p class="text-[10px] uppercase tracking-[0.18em] text-black/55">Full name</p>
                                    <p class="text-sm text-black font-semibold mt-0.5">Sarah Kim</p>
                                </div>
                                <div class="bg-white border-2 border-black rounded-xl px-3.5 py-3">
                                    <p class="text-[10px] uppercase tracking-[0.18em] text-black/55">Work email</p>
                                    <p class="text-sm text-black font-semibold mt-0.5">sarah@studio.co</p>
                                </div>
                                {{-- Abandoned field with cursor --}}
                                <div class="bg-gray-50 border-2 border-dashed border-black/50 rounded-xl px-3.5 py-3">
                                    <p class="text-[10px] uppercase tracking-[0.18em] text-black/45">Company size</p>
                                    <div class="h-5 mt-0.5 flex items-center">
                                        <span class="inline-block w-[3px] h-4 bg-coral animate-pulse"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- "Tab closed" indicator overlay --}}
                    <div class="absolute -top-5 -right-4 md:-top-6 md:-right-6 bg-white border-2 border-black rounded-xl drop-shadow-3xl px-3.5 py-2.5 rotate-[4deg] flex items-center gap-2 z-10">
                        <svg class="w-4 h-4 text-coral" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                        </svg>
                        <div class="leading-tight">
                            <p class="text-[10px] font-bold uppercase tracking-wider text-black/55">User closed tab</p>
                            <p class="text-[12px] font-bold text-black">Mid-form</p>
                        </div>
                    </div>

                    {{-- "Lead saved" popup overlay --}}
                    <div class="absolute -bottom-6 -left-3 md:-bottom-8 md:-left-6 border-2 border-black rounded-2xl drop-shadow-4xl p-4 w-[260px] md:w-[280px] -rotate-[2deg] z-10" style="background-color: #FFFBEB;">
                        <div class="flex items-start gap-3">
                            <span class="shrink-0 w-9 h-9 rounded-lg border-2 border-black bg-aquamarine flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <div class="min-w-0 flex-1">
                                <p class="font-display text-black text-[15px] leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Partial lead saved</p>
                                <p class="text-[11px] text-gray-600 mt-0.5 leading-snug">Name + email captured. Ready to follow up.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: copy --}}
            <div class="lg:col-span-5 order-1 lg:order-2">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                    <span class="inline-block w-8 h-px bg-gray-400"></span>
                    Never lose a lead
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Capture partial<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">submissions.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    Youform saves every answer the moment it's typed. When someone closes the tab halfway through, their partial response is already in your dashboard — ready to follow up on.
                </p>
                <p class="mt-3 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    No more losing form starts to drop-offs.
                </p>
                <div class="mt-8">
                    <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-7 py-3 bg-coral text-black border-2 border-black rounded-md drop-shadow-3xl hover:drop-shadow-4xl font-semibold text-base transition-all">
                        Create free account
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 8. Design Customization --}}
<section class="bg-amber-50 py-20 md:py-24 border-b border-gray-200 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            {{-- Left: copy --}}
            <div class="lg:col-span-5">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                    <span class="inline-block w-8 h-px bg-gray-400"></span>
                    Brand it
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Design it<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">your way.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    Customize colors, fonts, images, alignment, and backgrounds to match your brand.
                </p>
                <p class="mt-3 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    Pick from 300+ pre-built themes or build your own — no code required.
                </p>
            </div>

            {{-- Right: form mock + design panel with auto-demo cursor --}}
            <div class="lg:col-span-7 relative max-w-2xl mx-auto lg:max-w-none lg:mx-0 w-full"
                 x-data="{
                     color: 'coral',
                     font: 'display',
                     bg: 'white',
                     cursorX: 0,
                     cursorY: 0,
                     cursorVisible: false,
                     pressing: false,
                     autoplay: false,
                     step: 0,
                     sequence: [
                         { ref: 'colorAquaRef',   apply() { this.color = 'aquamarine'; } },
                         { ref: 'fontSansRef',    apply() { this.font = 'sans'; } },
                         { ref: 'bgChampagneRef', apply() { this.bg = 'champagne'; } },
                         { ref: 'colorVioletRef', apply() { this.color = 'pale-violet'; } },
                         { ref: 'bgVioletRef',    apply() { this.bg = 'violet-tint'; } },
                         { ref: 'colorYellowRef', apply() { this.color = 'vivid-yellow'; } },
                         { ref: 'fontDisplayRef', apply() { this.font = 'display'; } },
                         { ref: 'bgMintRef',      apply() { this.bg = 'mint'; } },
                         { ref: 'colorCoralRef',  apply() { this.color = 'coral'; } },
                         { ref: 'bgWhiteRef',     apply() { this.bg = 'white'; } },
                     ],
                     start() {
                         if (this.autoplay) return;
                         this.autoplay = true;
                         setTimeout(() => {
                             if (!this.autoplay) return;
                             // Pre-position cursor on the currently-active coral swatch
                             // (element is still display:none so no transition animates)
                             this.moveTo('colorCoralRef');
                             requestAnimationFrame(() => {
                                 if (!this.autoplay) return;
                                 this.cursorVisible = true;
                                 // Brief hover before starting the sequence
                                 setTimeout(() => { this.next(); }, 700);
                             });
                         }, 1200);
                     },
                     stop() {
                         this.autoplay = false;
                         this.cursorVisible = false;
                     },
                     next() {
                         if (!this.autoplay) return;
                         const s = this.sequence[this.step];
                         this.moveTo(s.ref);
                         setTimeout(() => {
                             if (!this.autoplay) return;
                             this.pressing = true;
                             s.apply.call(this);
                             setTimeout(() => { this.pressing = false; }, 200);
                             this.step = (this.step + 1) % this.sequence.length;
                             setTimeout(() => { this.next(); }, 1800);
                         }, 850);
                     },
                     moveTo(refName) {
                         const el = this.$refs[refName];
                         if (!el) return;
                         const cr = this.$el.getBoundingClientRect();
                         const er = el.getBoundingClientRect();
                         this.cursorX = er.left - cr.left + er.width / 2 - 11;
                         this.cursorY = er.top - cr.top + er.height / 2 - 3;
                     }
                 }"
                 x-intersect.once="start()">
                <div class="border-2 border-black rounded-2xl overflow-hidden -rotate-[0.4deg] hover:rotate-0 transition-all duration-500 motion-reduce:rotate-0"
                     style="box-shadow: 7px 7px 0 rgba(0,0,0,1);"
                     :class="{
                         'bg-white': bg === 'white',
                         'bg-medium-champagne': bg === 'champagne',
                         'bg-[#ede0ff]': bg === 'violet-tint',
                         'bg-[#dcf3ec]': bg === 'mint'
                     }">
                    {{-- Form preview --}}
                    <div class="p-6 md:p-8">
                        {{-- Progress bar --}}
                        <div class="h-1.5 bg-black/10 rounded-full overflow-hidden">
                            <div class="h-full transition-all duration-500"
                                 :class="{
                                    'bg-coral': color === 'coral',
                                    'bg-aquamarine': color === 'aquamarine',
                                    'bg-pale-violet': color === 'pale-violet',
                                    'bg-vivid-yellow': color === 'vivid-yellow',
                                    'bg-lavender-rose': color === 'lavender-rose'
                                 }"
                                 style="width: 40%"></div>
                        </div>
                        <p class="text-[11px] text-black/50 mt-2 font-semibold">Question 2 of 5</p>

                        {{-- Question --}}
                        <p class="text-2xl md:text-3xl text-black leading-tight mt-5"
                           :class="{
                              'font-display': font === 'display',
                              'font-sans': font === 'sans'                           }"
                           style="font-variation-settings: 'wdth' 100, 'wght' 760;">
                            What's your name?
                        </p>
                        <p class="text-sm text-black/55 mt-1"
                           :class="{
                              'font-display': font === 'display',
                              'font-sans': font === 'sans'                           }">
                            We'll use this to personalize your experience.
                        </p>

                        {{-- Input --}}
                        <div class="mt-5">
                            <input type="text" value="Sarah Kim" readonly
                                   class="w-full bg-white border-2 border-black rounded-lg px-4 py-3 text-lg text-black focus:outline-none"
                                   :class="{
                                      'font-display': font === 'display',
                                      'font-sans': font === 'sans'
                                   }"
                                   style="font-variation-settings: 'wdth' 100, 'wght' 600;">
                        </div>

                        {{-- CTA button --}}
                        <div class="mt-5 flex items-center justify-end">
                            <button type="button" class="inline-flex items-center gap-2 px-5 py-2.5 border-2 border-black rounded-md font-semibold text-black transition-colors duration-500 pointer-events-none"
                                    style="box-shadow: 3px 3px 0 rgba(0,0,0,1);"
                                    :class="{
                                        'bg-coral': color === 'coral',
                                        'bg-aquamarine': color === 'aquamarine',
                                        'bg-pale-violet': color === 'pale-violet',
                                        'bg-vivid-yellow': color === 'vivid-yellow',
                                        'bg-lavender-rose': color === 'lavender-rose'
                                    }">
                                Next
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Design panel --}}
                <div class="mt-5 bg-white border-2 border-black rounded-xl drop-shadow-3xl p-4 md:p-5">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
                        {{-- Color control --}}
                        <div>
                            <p class="text-[9px] uppercase tracking-[0.2em] font-bold text-black/55 mb-2">Color</p>
                            <div class="flex gap-1.5">
                                <button type="button" x-ref="colorCoralRef" @click="stop(); color = 'coral'"
                                        class="w-7 h-7 rounded-full border-2 border-black bg-coral transition-all duration-200 hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="color === 'coral' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="colorAquaRef" @click="stop(); color = 'aquamarine'"
                                        class="w-7 h-7 rounded-full border-2 border-black bg-aquamarine transition-all duration-200 hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="color === 'aquamarine' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="colorVioletRef" @click="stop(); color = 'pale-violet'"
                                        class="w-7 h-7 rounded-full border-2 border-black bg-pale-violet transition-all duration-200 hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="color === 'pale-violet' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="colorYellowRef" @click="stop(); color = 'vivid-yellow'"
                                        class="w-7 h-7 rounded-full border-2 border-black bg-vivid-yellow transition-all duration-200 hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="color === 'vivid-yellow' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="colorRoseRef" @click="stop(); color = 'lavender-rose'"
                                        class="w-7 h-7 rounded-full border-2 border-black bg-lavender-rose transition-all duration-200 hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="color === 'lavender-rose' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                            </div>
                        </div>
                        {{-- Font control --}}
                        <div>
                            <p class="text-[9px] uppercase tracking-[0.2em] font-bold text-black/55 mb-2">Font</p>
                            <div class="flex gap-1.5">
                                <button type="button" x-ref="fontDisplayRef" @click="stop(); font = 'display'"
                                        class="px-2.5 py-1 border-2 border-black rounded-md text-[11px] font-display transition-all"
                                        :class="font === 'display' ? 'bg-black text-white' : 'bg-white text-black hover:bg-gray-50'"
                                        style="font-variation-settings: 'wdth' 100, 'wght' 760;">Display</button>
                                <button type="button" x-ref="fontSansRef" @click="stop(); font = 'sans'"
                                        class="px-2.5 py-1 border-2 border-black rounded-md text-[11px] font-sans font-bold transition-all"
                                        :class="font === 'sans' ? 'bg-black text-white' : 'bg-white text-black hover:bg-gray-50'">Sans</button>
                            </div>
                        </div>
                        {{-- Background control --}}
                        <div>
                            <p class="text-[9px] uppercase tracking-[0.2em] font-bold text-black/55 mb-2">Background</p>
                            <div class="flex gap-1.5">
                                <button type="button" x-ref="bgWhiteRef" @click="stop(); bg = 'white'"
                                        class="w-7 h-7 rounded-md border-2 border-black bg-white transition-all hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="bg === 'white' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="bgChampagneRef" @click="stop(); bg = 'champagne'"
                                        class="w-7 h-7 rounded-md border-2 border-black bg-medium-champagne transition-all hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="bg === 'champagne' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="bgVioletRef" @click="stop(); bg = 'violet-tint'"
                                        class="w-7 h-7 rounded-md border-2 border-black bg-[#ede0ff] transition-all hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="bg === 'violet-tint' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                                <button type="button" x-ref="bgMintRef" @click="stop(); bg = 'mint'"
                                        class="w-7 h-7 rounded-md border-2 border-black bg-[#dcf3ec] transition-all hover:scale-110 motion-reduce:hover:scale-100"
                                        :class="bg === 'mint' ? 'ring-2 ring-black ring-offset-1' : ''"></button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Auto-demo cursor --}}
                <div class="absolute top-0 left-0 pointer-events-none z-30 transition-transform duration-700 ease-out"
                     x-show="cursorVisible"
                     x-transition.opacity.duration.400ms
                     :style="`transform: translate(${cursorX}px, ${cursorY}px) scale(${pressing ? 0.82 : 1});`"
                     aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 drop-shadow-[2px_2px_0_rgba(0,0,0,0.25)]" viewBox="0 0 24 24">
                        <path fill="#FFF" stroke="#000" stroke-width="2" stroke-linejoin="round" d="M10 11V8.99c0-.88.59-1.64 1.44-1.86h.05A1.99 1.99 0 0 1 14 9.05V12v-2c0-.88.6-1.65 1.46-1.87h.05A1.98 1.98 0 0 1 18 10.06V13v-1.94a2 2 0 0 1 1.51-1.94h0A2 2 0 0 1 22 11.06V14c0 .6-.08 1.27-.21 1.97a7.96 7.96 0 0 1-7.55 6.48 54.98 54.98 0 0 1-4.48 0 7.96 7.96 0 0 1-7.55-6.48C2.08 15.27 2 14.59 2 14v-1.49c0-1.11.9-2.01 2.01-2.01h0a2 2 0 0 1 2.01 2.03l-.01.97v-10c0-1.1.9-2 2-2h0a2 2 0 0 1 2 2V11Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. GDPR-Friendly --}}
<section class="bg-white py-20 md:py-24 border-b border-gray-100 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            {{-- Left: privacy dashboard mock --}}
            <div class="lg:col-span-7 order-2 lg:order-1">
                <div class="bg-white border-2 border-black rounded-2xl overflow-hidden -rotate-[0.4deg] hover:rotate-0 transition-transform duration-500 motion-reduce:rotate-0 motion-reduce:transition-none"
                     style="box-shadow: 7px 7px 0 rgba(0,0,0,1);">
                    {{-- Chrome --}}
                    <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                        <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                        <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">app.youform.com / settings / privacy</span>
                    </div>

                    {{-- Dashboard header --}}
                    <div class="px-6 md:px-7 py-5 bg-aquamarine/15 border-b-2 border-black">
                        <div class="flex items-center gap-3">
                            <span class="shrink-0 inline-flex w-11 h-11 rounded-xl border-2 border-black bg-aquamarine items-center justify-center">
                                <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <polyline points="9 12 11 14 15 10"/>
                                </svg>
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-black/55">Privacy status</p>
                                <p class="font-display text-xl md:text-[22px] text-black leading-tight mt-0.5" style="font-variation-settings: 'wdth' 100, 'wght' 760;">All checks passed</p>
                            </div>
                            <span class="shrink-0 inline-flex items-center gap-1 px-2.5 py-1 bg-black border-2 border-black rounded-md text-[10px] font-bold uppercase tracking-wider text-white">
                                GDPR
                            </span>
                        </div>
                    </div>

                    {{-- Compliance rows --}}
                    @php
                    $compliance = [
                        ['label' => 'Data hosting',     'value' => 'European Union', 'icon' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>'],
                        ['label' => 'Encryption',       'value' => 'TLS in transit · AES at rest', 'icon' => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>'],
                        ['label' => 'Cookie tracking',  'value' => 'None', 'icon' => '<circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>'],
                        ['label' => 'Right to deletion', 'value' => 'Self-service', 'icon' => '<polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>'],
                    ];
                    @endphp
                    <div class="p-5 md:p-6 space-y-3">
                        @foreach($compliance as $row)
                        <div class="flex items-center gap-3 border-2 border-black rounded-xl px-4 py-3">
                            <span class="shrink-0 inline-flex w-9 h-9 rounded-lg border-2 border-black bg-gray-50 items-center justify-center">
                                <svg class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    {!! $row['icon'] !!}
                                </svg>
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-black/55">{{ $row['label'] }}</p>
                                <p class="text-sm md:text-[15px] text-black font-semibold mt-0.5 truncate">{{ $row['value'] }}</p>
                            </div>
                            <span class="shrink-0 inline-flex items-center gap-1 px-2 py-0.5 bg-aquamarine border border-black rounded-md text-[10px] font-bold text-black">
                                <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                Active
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Right: copy --}}
            <div class="lg:col-span-5 order-1 lg:order-2">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                    <span class="inline-block w-8 h-px bg-gray-400"></span>
                    Privacy first
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Privacy first.<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Built-in.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    EU data hosting, TLS encryption in transit, AES encryption at rest, and self-service data deletion — built in.
                </p>
                <p class="mt-3 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                    No cookie tracking, no selling data. Your respondents' information stays secure and under your control.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 10. Sharing & Embedding --}}
<section class="bg-amber-50 py-20 md:py-24 border-b border-gray-200 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20"
         x-data="{
             share: 'inline',
             popupOpen: false,
             copied: false,
             formUrl: 'https://app.youform.com/forms/xrjcjyti',
             copyLink() {
                 navigator.clipboard.writeText(this.formUrl);
                 this.copied = true;
                 setTimeout(() => { this.copied = false; }, 1800);
             }
         }">
        {{-- Header --}}
        <div class="max-w-3xl mb-12 md:mb-14">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Share everywhere
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Share your forms<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">anywhere.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                Reach your audience wherever they are. Every demo below is a real, live Youform you can interact with.
            </p>
        </div>

        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            {{-- Tab list — visible on large screens only --}}
            <div class="hidden lg:block lg:col-span-4 lg:space-y-2.5">
                @php
                $shareTabs = [
                    ['id' => 'inline',  'name' => 'Inline embed',  'desc' => 'Drop into any webpage',       'pro' => false, 'icon' => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>'],
                    ['id' => 'popup',   'name' => 'Popup embed',   'desc' => 'Button-triggered modal',      'pro' => false, 'icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 12h6M12 9v6"/>'],
                    ['id' => 'email',   'name' => 'Email embed',   'desc' => 'First question in the email', 'pro' => false, 'icon' => '<rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3.5 7.5l8.5 6 8.5-6"/>'],
                    ['id' => 'link',    'name' => 'Share link',    'desc' => 'Copy-paste anywhere',         'pro' => false, 'icon' => '<path d="M10 13.5a4.5 4.5 0 006.8.5l2-2a4.5 4.5 0 00-6.4-6.4l-1 1"/><path d="M14 10.5a4.5 4.5 0 00-6.8-.5l-2 2a4.5 4.5 0 006.4 6.4l1-1"/>'],
                    ['id' => 'qr',      'name' => 'QR code',       'desc' => 'Scan from any phone',         'pro' => false, 'icon' => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 14h3v3h-3zM20 14h1M14 20h1M20 20h1"/>'],
                    ['id' => 'domain',  'name' => 'Custom domain', 'desc' => 'my.website.com/feedback',     'pro' => true,  'icon' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>'],
                ];
                @endphp
                @foreach($shareTabs as $tab)
                <button type="button" @click="share = '{{ $tab['id'] }}'"
                        :class="share === '{{ $tab['id'] }}' ? 'bg-white drop-shadow-4xl -translate-y-0.5' : 'bg-white hover:-translate-y-0.5'"
                        class="w-full flex items-center gap-3 md:gap-4 px-4 py-3.5 border-2 border-black rounded-xl transition-all duration-200 text-left motion-reduce:transition-none motion-reduce:hover:translate-y-0"
                        :style="share === '{{ $tab['id'] }}' ? '' : 'box-shadow: 3px 3px 0 rgba(0,0,0,1);'">
                    <span class="shrink-0 inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                        <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            {!! $tab['icon'] !!}
                        </svg>
                    </span>
                    <div class="flex-1 min-w-0">
                        <p class="font-display text-black text-[15px] leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $tab['name'] }}</p>
                        <p class="text-[11px] text-gray-500 mt-0.5 truncate">{{ $tab['desc'] }}</p>
                    </div>
                    @if($tab['pro'])
                    <span class="shrink-0 inline-flex items-center px-1.5 py-0.5 bg-black text-white border border-black rounded text-[9px] font-bold uppercase tracking-wider">Pro</span>
                    @endif
                    <span :class="share === '{{ $tab['id'] }}' ? 'opacity-100' : 'opacity-0'" class="shrink-0 w-2 h-2 rounded-full bg-coral border border-black transition-opacity"></span>
                </button>
                @endforeach
            </div>

            {{-- Demo area —
                On small/medium: all 6 panels stacked with gap.
                On large: stacked in the same grid cell, only active is visible via opacity toggle. --}}
            <div class="lg:col-span-8">
                <div class="space-y-10 lg:space-y-0 lg:grid">
                    {{-- INLINE EMBED — real iframe --}}
                    <div class="lg:[grid-area:1/1/2/2] transition-opacity duration-200"
                         :class="share === 'inline' ? 'lg:opacity-100 lg:relative lg:z-10' : 'lg:opacity-0 lg:pointer-events-none'">
                        <div class="lg:hidden mb-4">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                                </span>
                                <p class="font-display text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Inline embed</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-[52ch]">Paste one line of code into your website and the form shows up right on the page — no new tab, no redirect.</p>
                        </div>
                        <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden">
                            <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                                <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                                <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">yourbrand.com/contact</span>
                            </div>
                            <div class="p-5 md:p-6">
                                <p class="font-display text-xl text-black" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Get in touch</p>
                                <p class="text-sm text-gray-600 mt-1 mb-4">Fill out the form below — we reply within 24 hours.</p>
                                <iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="560" frameborder="0" marginheight="0" marginwidth="0" style="border:none;" class="block w-full border-2 border-black rounded-xl"></iframe>
                            </div>
                        </div>
                    </div>

                    {{-- POPUP EMBED — real iframe in a modal --}}
                    <div class="lg:[grid-area:1/1/2/2] transition-opacity duration-200"
                         :class="share === 'popup' ? 'lg:opacity-100 lg:relative lg:z-10' : 'lg:opacity-0 lg:pointer-events-none'">
                        <div class="lg:hidden mb-4">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 12h6M12 9v6"/></svg>
                                </span>
                                <p class="font-display text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Popup embed</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-[52ch]">Add a button anywhere on your site. When a visitor clicks it, the form opens in a clean popup — no page reload.</p>
                        </div>
                        <div class="relative bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden">
                            <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                                <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                                <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">yourbrand.com</span>
                            </div>
                            <div class="relative p-8 md:p-10 min-h-[580px]">
                                {{-- Fake landing page --}}
                                <div :class="popupOpen ? 'opacity-20' : 'opacity-100'" class="transition-opacity duration-300">
                                    <p class="font-display text-3xl text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Launch your next idea.</p>
                                    <p class="text-base text-gray-600 mt-2 max-w-[50ch]">Build something people love. Join thousands of creators shipping with us.</p>
                                    <div class="mt-4 h-2 bg-gray-200 rounded w-48"></div>
                                    <div class="mt-2 h-2 bg-gray-200 rounded w-40"></div>
                                    <div class="mt-2 h-2 bg-gray-200 rounded w-32"></div>
                                    <div class="mt-7">
                                        <button type="button" @click="popupOpen = true"
                                                class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                                            Open the form
                                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                                        </button>
                                    </div>
                                    <p class="text-[11px] text-gray-500 mt-6">Click the button — a real popup opens with the same Youform.</p>
                                </div>

                                {{-- Modal overlay --}}
                                <div x-show="popupOpen"
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="transition ease-in duration-200"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0"
                                     class="absolute inset-0 bg-black/50 flex items-center justify-center p-4 z-20"
                                     @click.self="popupOpen = false"
                                     x-cloak>
                                    <div x-transition:enter="transition ease-out duration-300"
                                         x-transition:enter-start="opacity-0 scale-95"
                                         x-transition:enter-end="opacity-100 scale-100"
                                         class="relative bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden w-full max-w-[440px]">
                                        <button type="button" @click="popupOpen = false"
                                                class="absolute top-2.5 right-2.5 z-30 w-8 h-8 rounded-full bg-white border-2 border-black flex items-center justify-center text-black hover:bg-coral transition-colors drop-shadow-3xl"
                                                aria-label="Close">
                                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                                        </button>
                                        <iframe :src="popupOpen ? 'https://app.youform.com/forms/xrjcjyti' : ''" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0" style="border:none;" class="block w-full"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- EMAIL EMBED — mock email client with real email-optimized iframe --}}
                    <div class="lg:[grid-area:1/1/2/2] transition-opacity duration-200"
                         :class="share === 'email' ? 'lg:opacity-100 lg:relative lg:z-10' : 'lg:opacity-0 lg:pointer-events-none'">
                        <div class="lg:hidden mb-4">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5.5" width="18" height="13" rx="2"/><path d="M3.5 7.5l8.5 6 8.5-6"/></svg>
                                </span>
                                <p class="font-display text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Email embed</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-[52ch]">Put the first question right inside the email. When the reader picks an answer, the rest of the form opens in their browser.</p>
                        </div>
                        <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden">
                            <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                                <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                                <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">Inbox — 1 new message</span>
                            </div>
                            <div class="px-5 md:px-6 py-4 border-b-2 border-black/10">
                                <div class="flex items-start gap-3">
                                    <span class="shrink-0 w-10 h-10 rounded-full border-2 border-black bg-coral flex items-center justify-center font-display text-base text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Y</span>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2">
                                            <p class="font-display text-[15px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Youform Team</p>
                                            <span class="text-[11px] text-gray-500">&lt;hello@yourbrand.com&gt;</span>
                                        </div>
                                        <p class="text-[11px] text-gray-500 mt-0.5">to sarah · just now</p>
                                    </div>
                                </div>
                                <p class="font-display text-xl text-black mt-3" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Quick — how was your experience?</p>
                            </div>
                            <div class="px-5 md:px-6 py-5">
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">Hi Sarah, thanks for choosing us! Got 10 seconds? Answer below and we'll take it from there.</p>
                                <iframe src="https://app.youform.com/forms/mfhnukq1" loading="lazy" width="100%" height="320" frameborder="0" marginheight="0" marginwidth="0" style="border:none;" class="block w-full border-2 border-black rounded-xl"></iframe>
                                <p class="text-[11px] text-gray-500 mt-3">The first question lives right in the email body. Clicking an option opens the rest of the form in the browser.</p>
                            </div>
                        </div>
                    </div>

                    {{-- SHARE LINK --}}
                    <div class="lg:[grid-area:1/1/2/2] transition-opacity duration-200"
                         :class="share === 'link' ? 'lg:opacity-100 lg:relative lg:z-10' : 'lg:opacity-0 lg:pointer-events-none'">
                        <div class="lg:hidden mb-4">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13.5a4.5 4.5 0 006.8.5l2-2a4.5 4.5 0 00-6.4-6.4l-1 1"/><path d="M14 10.5a4.5 4.5 0 00-6.8-.5l-2 2a4.5 4.5 0 006.4 6.4l1-1"/></svg>
                                </span>
                                <p class="font-display text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Share link</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-[52ch]">Every form has its own public link. Send it in chat, email, or paste it anywhere you want people to fill it out.</p>
                        </div>
                        <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-8">
                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55">Public link</p>
                            <div class="mt-3 flex items-center gap-2 bg-gray-50 border-2 border-black rounded-xl p-2 pl-4">
                                <svg class="shrink-0 w-4 h-4 text-black/55" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13.5a4.5 4.5 0 006.8.5l2-2a4.5 4.5 0 00-6.4-6.4l-1 1"/><path d="M14 10.5a4.5 4.5 0 00-6.8-.5l-2 2a4.5 4.5 0 006.4 6.4l1-1"/></svg>
                                <span class="flex-1 font-mono text-[13px] md:text-sm text-black truncate">app.youform.com/forms/xrjcjyti</span>
                                <button type="button" @click="copyLink()"
                                        :class="copied ? 'bg-aquamarine' : 'bg-coral'"
                                        class="shrink-0 inline-flex items-center gap-1.5 px-3 py-2 border-2 border-black rounded-lg text-[12px] font-semibold text-black drop-shadow-3xl transition-colors">
                                    <template x-if="!copied">
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                                    </template>
                                    <template x-if="copied">
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    </template>
                                    <span x-text="copied ? 'Copied!' : 'Copy'"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- QR CODE — real scannable PNG from Youform dashboard --}}
                    <div class="lg:[grid-area:1/1/2/2] transition-opacity duration-200"
                         :class="share === 'qr' ? 'lg:opacity-100 lg:relative lg:z-10' : 'lg:opacity-0 lg:pointer-events-none'">
                        <div class="lg:hidden mb-4">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 14h3v3h-3zM20 14h1M14 20h1M20 20h1"/></svg>
                                </span>
                                <p class="font-display text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">QR code</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-[52ch]">Get a scannable QR code for any form. Print it on flyers, posters, or packaging — any phone camera opens it instantly.</p>
                        </div>
                        <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-8">
                            <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
                                <div class="shrink-0 bg-white border-2 border-black rounded-xl p-3">
                                    <img src="/assets/images/Youform%20sample%20form.png" alt="QR code to open the sample Youform" loading="lazy" class="block w-44 h-44">
                                </div>
                                <div class="text-center md:text-left">
                                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-black/55">Scan to open</p>
                                    <p class="font-display text-2xl md:text-3xl text-black leading-tight mt-1" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Real, scannable QR.</p>
                                    <p class="text-sm text-gray-600 mt-3 max-w-[34ch] leading-relaxed">Point any phone camera at the QR code on the left — it opens the actual form. Perfect for events, flyers, posters, and packaging.</p>
                                    <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                                        Or open it in a new tab
                                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CUSTOM DOMAIN — real iframe with custom URL bar --}}
                    <div class="lg:[grid-area:1/1/2/2] transition-opacity duration-200"
                         :class="share === 'domain' ? 'lg:opacity-100 lg:relative lg:z-10' : 'lg:opacity-0 lg:pointer-events-none'">
                        <div class="lg:hidden mb-4">
                            <div class="flex items-center gap-3">
                                <span class="inline-flex w-10 h-10 rounded-lg border-2 border-black bg-medium-champagne items-center justify-center">
                                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                                </span>
                                <p class="font-display text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Custom domain</p>
                                <span class="shrink-0 inline-flex items-center px-2 py-0.5 bg-black text-white border border-black rounded text-[10px] font-bold uppercase tracking-wider">Pro</span>
                            </div>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed max-w-[52ch]">Host your forms on your own domain like forms.yourbrand.com — visitors never see "youform.com" in the URL.</p>
                        </div>
                        <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden">
                            <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                                <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                                <div class="ml-3 flex-1 flex items-center gap-2 bg-white border border-black/30 rounded-md px-2.5 py-1 max-w-[320px]">
                                    <svg class="shrink-0 w-3 h-3 text-aquamarine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                    <span class="text-[11px] font-mono text-black truncate">my.website.com/feedback</span>
                                </div>
                                <span class="ml-2 inline-flex items-center px-2 py-0.5 bg-black text-white border border-black rounded text-[9px] font-bold uppercase tracking-wider">Pro</span>
                            </div>
                            <iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="560" frameborder="0" marginheight="0" marginwidth="0" style="border:none;" class="block w-full"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 11. Analytics & Drop-off --}}
@php
$dropoffRows = [
    ['bg' => 'bg-pink-100',      'title' => '👋 Welcome! This is a live Youform',     'views' => '4,568', 'pct' => 90, 'tone' => 'high'],
    ['bg' => 'bg-blue-100',      'title' => 'How did you hear about Youform? 💡',     'views' => '455',   'pct' => 53, 'tone' => 'med'],
    ['bg' => 'bg-aquamarine/30', 'title' => 'Which do you prefer?',                    'views' => '213',   'pct' => 4,  'tone' => 'low'],
    ['bg' => 'bg-pink-100',      'title' => 'You chose correctly 😀',                  'views' => '167',   'pct' => 5,  'tone' => 'low'],
    ['bg' => 'bg-red-100',       'title' => 'That is incorrect ❌',                    'views' => '62',    'pct' => 35, 'tone' => 'med'],
    ['bg' => 'bg-coral/30',      'title' => 'How would you like to use Youform?',      'views' => '195',   'pct' => 6,  'tone' => 'low'],
    ['bg' => 'bg-pale-violet/50','title' => 'Who are you?',                            'views' => '180',   'pct' => 6,  'tone' => 'low'],
    ['bg' => 'bg-vivid-yellow/40','title' => 'Please upload a file 📎',                'views' => '167',   'pct' => 22, 'tone' => 'med'],
    ['bg' => 'bg-indigo-100',    'title' => "Based on what you've seen, rate Youform?",'views' => '128',   'pct' => 3,  'tone' => 'low'],
    ['bg' => 'bg-sky-100',       'title' => 'Ask for signatures as well ✍️',           'views' => '124',   'pct' => 15, 'tone' => 'low'],
];
@endphp
<section class="bg-white py-20 md:py-24 border-b border-gray-200 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="max-w-3xl mb-14 md:mb-16">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Analytics & insights
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Every answer,<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">measured.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                Three ways to understand your forms — from the big picture down to the single question people give up on.
            </p>
        </div>

        {{-- Feature 1: Stats + trend chart --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center mb-20 md:mb-24">
            <div class="lg:col-span-5">
                <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-coral mb-3">01 · Overview</p>
                <h3 class="font-display text-3xl md:text-4xl text-black leading-tight mb-4" style="font-variation-settings: 'wdth' 100, 'wght' 760;">
                    See the <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">big picture.</span>
                </h3>
                <p class="text-base text-gray-600 leading-relaxed max-w-[42ch]">Views, starts, submissions, completion rate, and average time — everything that matters, at the top of every dashboard.</p>
            </div>
            <div class="lg:col-span-7">
                <div class="border-2 border-black rounded-2xl drop-shadow-6xl p-5 md:p-6" style="background-color: #FFFBEB;">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-2.5 mb-5">
                        <div class="bg-[#f1e7ff] border border-black/15 rounded-lg p-2.5">
                            <p class="text-[9px] font-semibold text-[#6d28d9] mb-1">Views</p>
                            <p class="font-display text-[18px] text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 780;">4,519</p>
                        </div>
                        <div class="bg-[#e8f0ff] border border-black/15 rounded-lg p-2.5">
                            <p class="text-[9px] font-semibold text-[#1d4ed8] mb-1">Starts</p>
                            <p class="font-display text-[18px] text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 780;">458</p>
                        </div>
                        <div class="bg-[#dcf3ec] border border-black/15 rounded-lg p-2.5">
                            <p class="text-[9px] font-semibold text-[#047857] mb-1">Subs</p>
                            <p class="font-display text-[18px] text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 780;">106</p>
                        </div>
                        <div class="bg-medium-champagne border border-black/15 rounded-lg p-2.5">
                            <p class="text-[9px] font-semibold text-[#92400e] mb-1">Compl.</p>
                            <p class="font-display text-[18px] text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 780;">23%</p>
                        </div>
                        <div class="bg-gray-100 border border-black/15 rounded-lg p-2.5">
                            <p class="text-[9px] font-semibold text-gray-700 mb-1">Time</p>
                            <p class="font-display text-[18px] text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 780;">1m 23s</p>
                        </div>
                    </div>
                    <div class="relative h-36 md:h-44">
                        <svg viewBox="0 0 800 230" preserveAspectRatio="none" class="absolute inset-0 w-full h-full" aria-hidden="true">
                            <defs>
                                <linearGradient id="chartGradC" x1="0" x2="0" y1="0" y2="1">
                                    <stop offset="0%" stop-color="#C994FF" stop-opacity="0.45"/>
                                    <stop offset="100%" stop-color="#C994FF" stop-opacity="0.04"/>
                                </linearGradient>
                            </defs>
                            <line x1="0" y1="40" x2="800" y2="40" stroke="#00000010" stroke-width="1"/>
                            <line x1="0" y1="90" x2="800" y2="90" stroke="#00000010" stroke-width="1"/>
                            <line x1="0" y1="140" x2="800" y2="140" stroke="#00000010" stroke-width="1"/>
                            <path d="M 0,57 C 40,55 70,55 80,65 C 100,85 140,140 160,125 C 200,100 220,160 240,153 C 280,148 300,150 320,149 C 360,120 380,110 400,97 C 440,78 460,70 480,65 C 520,67 540,69 560,69 C 600,69 620,65 640,69 C 680,55 700,48 720,41 C 760,110 780,180 800,213 L 800,230 L 0,230 Z" fill="url(#chartGradC)"/>
                            <path d="M 0,57 C 40,55 70,55 80,65 C 100,85 140,140 160,125 C 200,100 220,160 240,153 C 280,148 300,150 320,149 C 360,120 380,110 400,97 C 440,78 460,70 480,65 C 520,67 540,69 560,69 C 600,69 620,65 640,69 C 680,55 700,48 720,41 C 760,110 780,180 800,213" fill="none" stroke="#A855F7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Feature 2: Answer summaries --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center mb-20 md:mb-24">
            <div class="lg:col-span-5 lg:order-2">
                <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-[#6d28d9] mb-3">02 · Summaries</p>
                <h3 class="font-display text-3xl md:text-4xl text-black leading-tight mb-4" style="font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Understand <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">every answer.</span>
                </h3>
                <p class="text-base text-gray-600 leading-relaxed max-w-[42ch]">Every question gets its own visual summary — star ratings, multiple choice, text, file uploads. No spreadsheets, no pivot tables.</p>
            </div>
            <div class="lg:col-span-7 lg:order-1 grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Star rating card --}}
                <div class="border-2 border-black rounded-2xl drop-shadow-6xl p-5" style="background-color: #FFFBEB;">
                    <div class="flex items-center gap-2.5 mb-4">
                        <span class="shrink-0 inline-flex w-9 h-9 rounded-lg border-2 border-black bg-pale-violet items-center justify-center">
                            <svg class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.1 8.6 22 9.5 17 14.4 18.2 21.4 12 18 5.8 21.4 7 14.4 2 9.5 8.9 8.6 12 2"/></svg>
                        </span>
                        <div class="min-w-0 flex-1">
                            <p class="font-display text-[13px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Rate Youform</p>
                            <p class="text-[10px] text-gray-500">Avg. 4.9</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        @foreach([[5,92],[4,6],[3,2],[2,0],[1,0]] as [$n, $pct])
                        <div>
                            <div class="flex items-center justify-between text-[10px] text-gray-600 mb-0.5">
                                <div class="flex items-center gap-0.5">
                                    @for($i = 0; $i < $n; $i++)<svg class="w-2 h-2 text-vivid-yellow" viewBox="0 0 24 24" fill="currentColor" stroke="#000" stroke-width="1"><polygon points="12 2 15.1 8.6 22 9.5 17 14.4 18.2 21.4 12 18 5.8 21.4 7 14.4 2 9.5 8.9 8.6 12 2"/></svg>@endfor
                                </div>
                                <span class="font-semibold tabular-nums">{{ $pct }}%</span>
                            </div>
                            <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden"><div class="h-full bg-vivid-yellow" style="width: {{ $pct }}%;"></div></div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Choice card --}}
                <div class="border-2 border-black rounded-2xl drop-shadow-6xl p-5" style="background-color: #FFFBEB;">
                    <div class="flex items-center gap-2.5 mb-4">
                        <span class="shrink-0 inline-flex w-9 h-9 rounded-lg border-2 border-black bg-aquamarine/50 items-center justify-center">
                            <svg class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="3"/><polyline points="9 11 12 14 20 6"/></svg>
                        </span>
                        <div class="min-w-0 flex-1">
                            <p class="font-display text-[13px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Which do you prefer?</p>
                            <p class="text-[10px] text-gray-500">10,096 replies</p>
                        </div>
                    </div>
                    <div class="space-y-3 mt-5">
                        <div>
                            <div class="flex items-center justify-between text-[11px] mb-1">
                                <span class="font-semibold text-black">Youform</span>
                                <span class="font-semibold tabular-nums">82%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-200 rounded-full border border-black/10 overflow-hidden"><div class="h-full bg-coral" style="width: 82%;"></div></div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between text-[11px] mb-1">
                                <span class="font-semibold text-black">Typeform</span>
                                <span class="font-semibold tabular-nums">18%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-200 rounded-full border border-black/10 overflow-hidden"><div class="h-full bg-gray-400" style="width: 18%;"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Feature 3: Drop-off table --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-5">
                <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-[#047857] mb-3">03 · Drop-off</p>
                <h3 class="font-display text-3xl md:text-4xl text-black leading-tight mb-4" style="font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Find where <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">they leave.</span>
                </h3>
                <p class="text-base text-gray-600 leading-relaxed max-w-[42ch]">The exact question people stop at — ranked. Fix the worst offender and watch your completion rate climb.</p>
            </div>
            <div class="lg:col-span-7">
                <div class="border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden" style="background-color: #FFFBEB;">
                    <div class="p-5 pb-3">
                        <p class="font-display text-[15px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Drop-off rate</p>
                        <p class="text-[11px] text-gray-500 mt-0.5">The percentage who view a question but don't move past it.</p>
                    </div>
                    <div class="divide-y divide-black/5 text-[12px]">
                        @foreach(array_slice($dropoffRows, 0, 7) as $row)
                        <div class="flex items-center gap-3 px-5 py-2.5 text-gray-800">
                            <span class="shrink-0 w-6 h-6 rounded border border-black/25 {{ $row['bg'] }} flex items-center justify-center">
                                <svg class="w-3 h-3 text-black/70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"/><line x1="8" y1="8" x2="16" y2="8"/><line x1="8" y1="12" x2="16" y2="12"/><line x1="8" y1="16" x2="13" y2="16"/></svg>
                            </span>
                            <span class="flex-1 truncate">{{ $row['title'] }}</span>
                            <span class="w-16 text-right font-semibold tabular-nums {{ $row['tone'] === 'high' ? 'text-red-600' : ($row['tone'] === 'med' ? 'text-orange-600' : 'text-green-700') }}">{{ $row['pct'] }}%</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 md:mt-20 text-center">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-7 py-3 bg-coral text-black border-2 border-black rounded-md drop-shadow-3xl hover:drop-shadow-4xl font-semibold text-base transition-all">
                Create free account
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-2 text-sm font-semibold text-gray-700">
                <div class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/>
                    </svg>
                    <span>No credit card required</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/>
                    </svg>
                    <span>Unlimited submissions</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 12. Team Members --}}
@php
$teamMembers = [
    ['name' => 'Abhishek Chakravarty', 'initials' => 'AC', 'role' => 'Owner',  'bg' => 'bg-coral',         'email' => 'abhishek@youform.com'],
    ['name' => 'Sarah Patel',          'initials' => 'SP', 'role' => 'Member', 'bg' => 'bg-aquamarine',    'email' => 'sarah@yourbrand.com'],
    ['name' => 'Marcus Okafor',        'initials' => 'MO', 'role' => 'Member', 'bg' => 'bg-pale-violet',   'email' => 'marcus@yourbrand.com'],
    ['name' => 'Yuki Tanaka',          'initials' => 'YT', 'role' => 'Member', 'bg' => 'bg-vivid-yellow',  'email' => 'yuki@yourbrand.com'],
    ['name' => 'alex@yourbrand.com',   'initials' => '?',  'role' => 'Pending','bg' => 'bg-gray-200',      'email' => 'Invite sent 2h ago'],
];
$activityLog = [
    ['who' => 'Sarah Patel',          'initials' => 'SP', 'bg' => 'bg-aquamarine',    'verb' => 'published a form',       'target' => 'Customer Feedback', 'workspace' => 'Marketing',  'time' => '2 hours ago'],
    ['who' => 'Marcus Okafor',        'initials' => 'MO', 'bg' => 'bg-pale-violet',   'verb' => 'edited the form',        'target' => 'Job Application',   'workspace' => 'Recruiting', 'time' => '4 hours ago'],
    ['who' => 'Abhishek Chakravarty', 'initials' => 'AC', 'bg' => 'bg-coral',         'verb' => 'invited',                'target' => 'alex@yourbrand.com','workspace' => 'to Marketing', 'time' => '6 hours ago'],
    ['who' => 'Yuki Tanaka',          'initials' => 'YT', 'bg' => 'bg-vivid-yellow',  'verb' => 'created a form',         'target' => 'Event RSVP',        'workspace' => 'Marketing',  'time' => 'Yesterday'],
    ['who' => 'Sarah Patel',          'initials' => 'SP', 'bg' => 'bg-aquamarine',    'verb' => 'duplicated the form',    'target' => 'Newsletter Signup', 'workspace' => 'Marketing',  'time' => 'Yesterday'],
    ['who' => 'Marcus Okafor',        'initials' => 'MO', 'bg' => 'bg-pale-violet',   'verb' => 'published a form',       'target' => 'Pre-order',         'workspace' => 'Sales',      'time' => '2 days ago'],
    ['who' => 'Abhishek Chakravarty', 'initials' => 'AC', 'bg' => 'bg-coral',         'verb' => 'moved the form',         'target' => 'Lead Magnet',       'workspace' => 'to Marketing','time' => '3 days ago'],
];
@endphp
<section class="bg-amber-50 py-20 md:py-24 border-b border-gray-200 font-sans overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-20">
        <div class="max-w-3xl mb-12 md:mb-14">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Collaboration
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Build forms<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">together.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] leading-relaxed">
                Add teammates to any workspace — they'll have full access to every form inside it. A live audit trail shows every change.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-6">
            {{-- Members card --}}
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden flex flex-col">
                <div class="flex items-center justify-between gap-3 px-5 py-4 border-b-2 border-black/10">
                    <div class="flex items-center gap-3 min-w-0">
                        <span class="shrink-0 inline-flex w-10 h-10 rounded-lg border-2 border-black bg-coral/30 items-center justify-center">
                            <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </span>
                        <div class="min-w-0">
                            <p class="font-display text-[18px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Marketing workspace</p>
                            <p class="text-[11px] text-gray-500 mt-0.5">5 members · 1 pending invite</p>
                        </div>
                    </div>
                    <button type="button" class="shrink-0 inline-flex items-center gap-1.5 px-3 py-2 bg-coral border-2 border-black rounded-md text-[12px] font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        Invite
                    </button>
                </div>
                <ul class="divide-y divide-black/5 flex-1">
                    @foreach($teamMembers as $m)
                    <li class="flex items-center gap-3 px-5 py-3">
                        <span class="shrink-0 w-10 h-10 rounded-full border-2 border-black {{ $m['bg'] }} flex items-center justify-center font-display text-[13px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">{{ $m['initials'] }}</span>
                        <div class="flex-1 min-w-0">
                            <p class="text-[13px] font-semibold text-black truncate">{{ $m['name'] }}</p>
                            <p class="text-[11px] text-gray-500 truncate">{{ $m['email'] }}</p>
                        </div>
                        @if($m['role'] === 'Owner')
                        <span class="shrink-0 inline-flex items-center px-2 py-0.5 bg-black text-white border border-black rounded-md text-[10px] font-bold uppercase tracking-wider">Owner</span>
                        @elseif($m['role'] === 'Pending')
                        <span class="shrink-0 inline-flex items-center gap-1 px-2 py-0.5 bg-gray-100 text-gray-600 border border-black/20 rounded-md text-[10px] font-semibold">
                            <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            Pending
                        </span>
                        @else
                        <span class="shrink-0 inline-flex items-center gap-1.5 px-2 py-0.5 bg-aquamarine/30 border border-black/20 rounded-md text-[10px] font-semibold text-black">
                            <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            Member
                        </span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Activity log card --}}
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden flex flex-col">
                <div class="flex items-center justify-between gap-3 px-5 py-4 border-b-2 border-black/10">
                    <div class="flex items-center gap-3 min-w-0">
                        <span class="shrink-0 inline-flex w-10 h-10 rounded-lg border-2 border-black bg-aquamarine/40 items-center justify-center">
                            <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        </span>
                        <div class="min-w-0">
                            <p class="font-display text-[18px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Activity log</p>
                            <p class="text-[11px] text-gray-500 mt-0.5">Audit trail for every change</p>
                        </div>
                    </div>
                    <button type="button" class="shrink-0 inline-flex items-center gap-1.5 px-3 py-2 bg-white border-2 border-black rounded-md text-[12px] font-semibold text-black hover:bg-vivid-yellow transition-colors" style="box-shadow: 3px 3px 0 rgba(0,0,0,1);">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        Export
                    </button>
                </div>
                <ul class="divide-y divide-black/5 flex-1">
                    @foreach($activityLog as $a)
                    <li class="flex items-center gap-3 px-5 py-3">
                        <span class="shrink-0 w-8 h-8 rounded-full border-2 border-black {{ $a['bg'] }} flex items-center justify-center font-display text-[11px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 800;">{{ $a['initials'] }}</span>
                        <div class="flex-1 min-w-0">
                            <p class="text-[12px] text-gray-700 leading-snug">
                                <span class="font-semibold text-black">{{ $a['who'] }}</span>
                                {{ $a['verb'] }}
                                <span class="font-semibold text-black">"{{ $a['target'] }}"</span>
                                <span class="text-gray-400">· {{ $a['workspace'] }}</span>
                            </p>
                        </div>
                        <span class="shrink-0 text-[10px] text-gray-400 tabular-nums">{{ $a['time'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-16 md:mt-20 text-center">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-7 py-3 bg-coral text-black border-2 border-black rounded-md drop-shadow-3xl hover:drop-shadow-4xl font-semibold text-base transition-all">
                Create free account
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-2 text-sm font-semibold text-gray-700">
                <div class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/>
                    </svg>
                    <span>No credit card required</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/>
                    </svg>
                    <span>Unlimited submissions</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================ --}}
{{-- FEATURE SECTIONS END --}}
{{-- ============================================ --}}

@php
$integrations = [
    ['name' => 'Stripe',             'logo' => 'stripe.png',        'category' => 'Payments',   'desc' => 'Accept payments right inside forms'],
    ['name' => 'Google Sheets',      'logo' => 'google-sheets.png', 'category' => 'Data sync',  'desc' => 'Stream submissions to a sheet'],
    ['name' => 'Notion',             'logo' => 'notion.png',        'category' => 'Data sync',  'desc' => 'Sync entries to a database'],
    ['name' => 'Slack',              'logo' => 'slack.png',         'category' => 'Notify',     'desc' => 'Ping a channel on every reply'],
    ['name' => 'Email',              'logo' => 'gmail.png',         'category' => 'Notify',     'desc' => 'Auto-reply and team notifications'],
    ['name' => 'Zapier',             'logo' => 'zapier.png',        'category' => 'Connect',    'desc' => 'Wire Youform to 6,000+ apps'],
    ['name' => 'Webhook',            'logo' => 'webhook.png',       'category' => 'Connect',    'desc' => 'Stream submissions to any endpoint'],
    ['name' => 'Calendly',           'logo' => 'calendly.png',      'category' => 'Scheduling', 'desc' => 'Book a meeting after submit'],
    ['name' => 'Cal.com',            'logo' => 'cal-com.jpg',       'category' => 'Scheduling', 'desc' => 'Embed Cal.com booking flows'],
    ['name' => 'SavvyCal',           'logo' => 'savvycal.jpg',      'category' => 'Scheduling', 'desc' => 'Schedule with SavvyCal'],
    ['name' => 'Google Tag Manager', 'logo' => 'gtm.svg',           'category' => 'Tracking',   'desc' => 'Drop any tag into your form'],
    ['name' => 'Meta Pixel',         'logo' => 'meta.svg',          'category' => 'Tracking',   'desc' => 'Track events on Meta Ads'],
];
@endphp
<section class="bg-amber-50 border-t-4 border-black pt-20 md:pt-24 pb-36 md:pb-44 font-sans overflow-hidden">
    <style>
        @keyframes youform-marquee-left {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        @keyframes youform-marquee-right {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }
        .integrations-marquee-track {
            width: max-content;
            will-change: transform;
        }
        .integrations-marquee-track.left { animation: youform-marquee-left 55s linear infinite; }
        .integrations-marquee-track.right { animation: youform-marquee-right 55s linear infinite; }
        .integrations-marquee-wrapper:hover .integrations-marquee-track { animation-play-state: paused; }
        @media (prefers-reduced-motion: reduce) {
            .integrations-marquee-track { animation-duration: 180s; }
        }
    </style>

    <div class="max-w-7xl mx-auto px-6 md:px-20 mb-14 md:mb-16">
        <div class="max-w-3xl mx-auto text-center">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Integrations
                <span class="inline-block w-8 h-px bg-gray-400"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Plays nicely<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">with everything.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 leading-relaxed">
                Stream submissions to your sheet, database, or Slack. Accept payments with Stripe. Book a meeting right from your form.
            </p>
        </div>
    </div>

    {{-- Row 1 — scrolling left --}}
    <div class="integrations-marquee-wrapper relative overflow-hidden py-3" style="mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);">
        <div class="integrations-marquee-track left flex gap-4 md:gap-5">
            @foreach(array_merge($integrations, $integrations) as $i)
            <div class="shrink-0 flex items-center gap-3 bg-white border-2 border-black rounded-2xl px-5 py-3.5 drop-shadow-3xl">
                <span class="shrink-0 w-9 h-9 bg-white rounded-lg flex items-center justify-center">
                    <img loading="lazy" src="/assets/images/logos/{{ $i['logo'] }}" alt="{{ $i['name'] }}" class="w-8 h-8 object-contain">
                </span>
                <span class="font-display text-[15px] text-black whitespace-nowrap" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $i['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Row 2 — scrolling right (offset order) --}}
    <div class="integrations-marquee-wrapper relative overflow-hidden py-3 mt-3" style="mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 6%, black 94%, transparent);">
        <div class="integrations-marquee-track right flex gap-4 md:gap-5">
            @php $offset = array_merge(array_slice($integrations, 6), array_slice($integrations, 0, 6)); @endphp
            @foreach(array_merge($offset, $offset) as $i)
            <div class="shrink-0 flex items-center gap-3 bg-white border-2 border-black rounded-2xl px-5 py-3.5 drop-shadow-3xl">
                <span class="shrink-0 w-9 h-9 bg-white rounded-lg flex items-center justify-center">
                    <img loading="lazy" src="/assets/images/logos/{{ $i['logo'] }}" alt="{{ $i['name'] }}" class="w-8 h-8 object-contain">
                </span>
                <span class="font-display text-[15px] text-black whitespace-nowrap" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $i['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <p class="mt-12 md:mt-14 text-center text-[11px] text-gray-500">Plus Zapier's 6,000+ apps and any custom webhook endpoint.</p>
</section>

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
</div>

<!-- Social proof bridge -->
<div style="margin-top: -5rem">
    <div class="bg-lavender-rose pt-28 lg:pt-40 pb-20">
        <div class="relative max-w-6xl mx-auto px-10 md:px-20 text-center">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                <span class="inline-block w-8 h-px bg-black/40"></span>
                Loved by makers
                <span class="inline-block w-8 h-px bg-black/40"></span>
            </p>
            <h2 class="font-display text-black leading-[0.95] tracking-[-0.025em]" style="font-size: clamp(2.25rem, 5vw, 4.25rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Trusted by teams<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">all over the world.</span>
            </h2>
            <p class="text-lg xl:text-xl mt-6 max-w-2xl mx-auto text-black/80">
                From indie founders to Fortune 500 teams, Youform powers the forms that move businesses forward.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-12 max-w-3xl mx-auto">
                <div class="border-2 border-black rounded-2xl drop-shadow-4xl p-6" style="background-color: #FFFBEB;">
                    <p class="font-display text-5xl text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">80K+</p>
                    <p class="text-xs font-semibold uppercase tracking-wider text-black/60 mt-2">Users</p>
                </div>
                <div class="border-2 border-black rounded-2xl drop-shadow-4xl p-6" style="background-color: #FFFBEB;">
                    <p class="font-display text-5xl text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">10M+</p>
                    <p class="text-xs font-semibold uppercase tracking-wider text-black/60 mt-2">Submissions</p>
                </div>
                <div class="border-2 border-black rounded-2xl drop-shadow-4xl p-6 col-span-2 md:col-span-1" style="background-color: #FFFBEB;">
                    <div class="flex items-baseline justify-start gap-2 leading-none">
                        <p class="font-display text-5xl text-black leading-none" style="font-variation-settings: 'wdth' 100, 'wght' 800;">5.0</p>
                        <div class="flex items-center gap-0.5">
                            @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 text-vivid-yellow" viewBox="0 0 24 24" fill="currentColor" stroke="black" stroke-width="1.5" stroke-linejoin="round">
                                <path d="M12 2l2.9 6.9 7.1.6-5.4 4.7 1.6 7-6.2-3.8-6.2 3.8 1.6-7L2 9.5l7.1-.6L12 2z"/>
                            </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-black/60 mt-2">Capterra rating</p>
                </div>
            </div>

            <p class="mt-12 text-sm font-semibold text-black/70 uppercase tracking-wider">↓ Hear it from them ↓</p>
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
