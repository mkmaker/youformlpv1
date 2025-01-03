@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class=" bg-medium-champagne bg-[url('/assets/images/banner-background.png')] bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection --> 
        <div class="relative max-w-7xl mx-auto mt-10 pb-20">
            <div class="flex flex-col justify-center lg:grid grid-cols-5 items-center px-10 md:px-20">
                <div class=" flex flex-col items-center lg:items-start col-span-3 lg:pr-16 xl:pr-20">
                    <span x-data x-tooltip.raw="This is a celebration, not a button!" class="inline-block cursor-pointer bg-pale-violet text-black text-xs font-semibold px-4 py-1.5 rounded-full mb-3 lg:mb-2">
                        Celebrating 15,000+ users 🎉 
                    </span>
                    <h1 class="text-center lg:text-left text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        The most affordable Typeform alternative
                    </h1>
                    <p class="text-center lg:text-left text-base mt-6">
                        Youform is a form builder that provides UNLIMITED forms and responses for FREE. You can add logic, custom domains, upload files, embed forms on your website, and much more 🤓
                    </p>
                    <div class="lg:flex lg:items-center space-x-6 mt-10 text-center">
                        <a href="https://app.youform.com/register" class="inline-block mx-auto text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                            Create free account
                        </a>
                        <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" class="underline group transition-all underline-offset-8 hover:no-underline inline-block mx-auto mt-4 lg:hidden">
                            or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>
                    @include('_partials.have-typeform-url-cta')
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
                              <p>“Youform is an absolute joy to use.”</p>
                            </blockquote>
                            <a href="https://x.com/levelsio" target="_blank" class="mt-3 lg:flex items-center gap-x-6">
                              <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto lg:mx-0" src="/assets/images/levelsio.jpg" alt="Pieter Levels Avatar">
                              <div class="text-base mt-1 lg:mt-0">
                                <div class="text-gray-900 group-hover:underline">Pieter Levels</div>
                                <div class=" text-gray-700 text-xs">Founder Nomadlist and RemoteOK. 
                                    <br>
                                    400k+ Followers on Twitter</div>
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

                        <img class="absolute inset-0 rounded-md w-full h-full" src="/assets/images/embed-form-bg.png" alt="">

                        <img class="absolute -left-36 bottom-40 w-32 opacity-70" src="/assets/images/try-it-arrow.png" alt="">

                        <img class="absolute -right-28 -top-12 w-96 -z-10" src="/assets/images/banner-blob.png" alt="">

                        <iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" class="rounded-md shadow border-2 border-black drop-shadow-6xl"></iframe>

                    </div>

                    <p :class="{'rotate-2': !hovered, 'rotate-0': hovered}" class="text-center">
                        <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" class="hidden xl:inline-block underline underline-offset-8 group transition-all hover:no-underline mx-auto mt-4">
                            or click here to open this form in a new tab <span class="hidden group-hover:inline">&rarr;</span>
                        </a>
                    </p>
                </div>
            </div>
            {{-- <div class="pt-10">
                <img src="/assets/images/youform-builder-new.png" alt="Youform Builder">
            </div> --}}

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
                    class="w-full h-auto object-cover object-left" 
                    style="min-height: 600px"
                >
            </div>
        </div>

        <div class="mt-3 pb-2">
            <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
                <blockquote class="text-gray-900 text-base lg:text-xl">
                  <p>“We had the highest conversion with Youform compared to Typeform, Google Calendar and even the routing form in Calendly!”</p>
                </blockquote>
                <span class="mt-5 flex items-center flex-col gap-x-6">
                  <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" src="/assets/images/adam-danyal.jpeg" alt="Adam Danyal Avatar">
                  <div class="text-base mt-1">
                    <div class="text-gray-900 group-hover:underline">Adam Danyal</div>
                    <div class=" text-gray-700 text-xs">Founder Leadership Club. 
                        <br>
                        2M Followers on LinkedIn</div>
                  </div>
                </span>
            </figure>
        </div>
    </div>
    
    <div>
        <img class="-mt-2" src="/assets/images/banner-wave.png" alt="">
    </div>
</div>

<div class="bg-aquamarine">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-20">
        <h2 class="text-5xl font-bold text-gray-800 text-center pt-40 pb-16 px-10 md:px-20 capitalize">
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
                                Add logics, perform calculations, recall information, add hidden fields and more.
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
                                Even if your form respnder leaves before submitting the form, you can still view partial data.
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
                                Connect with your favorite tools like Zapier, Webhook, Slack, Google Sheets and more.
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
                                Connect Google Tag Manager (GTM) to track performance of your form.
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

<!-- 1st feature -->
{{-- <div class="bg-aquamarine">
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
                <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4 -rotate-1">
                    <div class="flex items-center space-x-1">
                            
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sasquatch-socks">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>                              
                        <span>Unlimited responses</span>
                    </div>

                    <div class="flex items-center space-x-1 pt-2 sm:pt-0">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sasquatch-socks">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>                              
                        <span>No credit card required</span>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <img class="w-full m-auto " src="/assets/images/visual.png" alt="">
            </div>
        </div>
    </div>
</div> --}}

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
                        <img src="/assets/images/youform-logo.png" alt="Youform" class="h-16 w-16 object-contain" />
                    </div>
                    <!-- Logos coming out of the center -->
                    <template x-for="(logo, index) in [
                        { name: 'Google Sheets', src: '/assets/images/logos/google-sheets.png' },
                        { name: 'Slack', src: '/assets/images/logos/slack.png' },
                        { name: 'Webhook', src: '/assets/images/logos/webhook.png' },
                        { name: 'Calendly', src: '/assets/images/logos/calendly.png' },
                        { name: 'Zapier', src: '/assets/images/logos/zapier.png' },
                        { name: 'GTM', src: '/assets/images/logos/gtm.svg' },
                        { name: 'Gmail', src: '/assets/images/logos/gmail.png' },
                        { name: 'Trello', src: '/assets/images/logos/trello.png' },
                        { name: 'Stripe', src: '/assets/images/logos/stripe.png' },
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

<!-- 2nd feature -->
{{-- <div class="bg-amber-50 border-t-4 border-black">
    <div class="relative max-w-7xl mx-auto -mt-16 pb-20">
        <div class="flex flex-col justify-center lg:grid grid-cols-2 items-center pt-48 pb-10 px-10 md:px-20">
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
                <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4 -rotate-1">
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
            </div>
            
        </div>

        <div class="mt-5 pb-16 pt-4 lg:pt-12">
            <figure class="flex flex-auto flex-col justify-between pt-4 group text-center max-w-2xl mx-auto px-4">
                <blockquote class="text-gray-900 text-base lg:text-xl">
                  <p>“Holy cow this is way better than Typeform!”</p>
                </blockquote>
                <a href="https://x.com/agazdecki" target="_blank" class="mt-5 flex items-center flex-col gap-x-6">
                  <img class="h-14 w-14 rounded-full bg-gray-50 mx-auto" src="/assets/images/andrew-gazdecki.jpg" alt="Andrew Gazdecki Avatar">
                  <div class="text-base mt-1">
                    <div class="text-gray-900 group-hover:underline">Andrew Gazdecki</div>
                    <div class=" text-gray-700 text-xs">Founder &amp; CEO of Acquire.com 
                        <br>
                        250k Followers on Twitter
                    </div>
                  </div>
                </a>
            </figure>
        </div>
    </div>
</div> --}}

<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="">
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
    <img class="-mt-4" src="/assets/images/yellow-wave-down.png" alt="">
    <img class="absolute rotate-12 right-16 lg:right-32 -bottom-3 sm:-bottom-8 lg:-bottom-12 w-40 md:w-56 lg:w-64" src="/assets/images/solved.png" alt="">
</div>

<!-- 3rd feature -->
{{-- <div class="-mt-20 relative">
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
                    <a href="https://app.youform.com/register" class="-rotate-1 text-center mt-10 text-2xl bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                        Create free account
                    </a>
                    <div class="text-sm pt-6 font-semibold sm:flex items-center sm:space-x-4 -rotate-1">
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
                </div>
                <div class="col-span-1">
                    <img class="w-full m-auto rounded-xl border-2 border-black drop-shadow-6xl" src="/assets/images/youform-submissions.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4" src="/assets/images/yellow-wave-down.png" alt="">
    <img class="absolute rotate-12 right-16 lg:right-32 -bottom-3 sm:-bottom-8 lg:-bottom-12 w-40 md:w-56 lg:w-64" src="/assets/images/solved.png" alt="">
</div> --}}

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
                <img class="hidden md:block pt-20" src="/assets/images/twitter-screenshot.png" alt="">

                @include('partials.price-calculator')

                <div>
                    <div class="mt-16">
                        <h4 class="text-center text-2xl sm:text-4xl xl:text-5xl font-bold mb-8 pt-10">
                            Even <em>Pieter Levels</em> recommends Youform
                        </h4>
                        
                        <div>
                            <div class="py-4 max-w-lg mx-auto rounded-2xl shadow-lg md:shadow-2xl" style="background: #13202B">
                                <a href="https://x.com/levelsio" target="_blank">
                                    <img src="/assets/images/levelsio.png" class="" alt="Pieter Levels recommends Youform">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16">
                    <a href="https://app.youform.com/register" class="text-center mt-10 text-2xl bg-yellow-300 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md w-full lg:w-1/2 mx-auto block">
                        Create free account
                    </a>

                    <div>
                        <a href="https://app.youform.com/forms/xrjcjyti" target="_blank" class="underline group transition-all underline-offset-8 hover:no-underline hover:font-semibold inline-block mx-auto mt-4">
                            or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                        </a>
                    </div>

                    <div class="flex items-center justify-center">
                        @include('_partials.have-typeform-url-cta')
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


@include('partials.footer')

@endsection
