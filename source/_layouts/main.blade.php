<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-T8ZD6X3ZT9"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T8ZD6X3ZT9');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
    
        <meta name="keywords" content="Youform, form builder">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">

        <!-- Primary Meta Tags -->
        <title>{{ $page->title }}</title>
        <meta name="title" content="{{ $page->title }}">
        <meta name="description" content="{{ $page->description }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/youform-builder.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ $page->getUrl() }}">
        <meta property="twitter:title" content="{{ $page->title }}">
        <meta property="twitter:description" content="{{ $page->description }}">
        <meta property="twitter:image" content="{{ $page->baseUrl }}/assets/images/youform-builder.png">

        <link rel="shortcut icon" href="/assets/images/favicon.ico">        
        <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png"/>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

        <script type='application/ld+json'>
            {
              "@context": "http://www.schema.org",
              "@type": "Corporation",
              "name": "Youform",
              "url": "https://youform.io/",
              "sameAs": [
                 "https://twitter.com/youformio/",
                 "https://www.linkedin.com/company/youformio"
              ],
              "logo": "https://youform.io/assets/images/youform-logo.png",
              "image": "https://youform.io/assets/images/youform-builder.png",
              "description": "Youform is a free and intuitive form builder with no limits on submissions."
            }
        </script>
    </head>
    <body class="text-gray-900 font-sans antialiased relative">
        <div 
            x-data="{shouldChangeColor: false}" 
            x-transition
            class="sticky inset-0 text-xl shadow-md z-50 py-4 text-center text-black"
            :class="{'bg-lavender-rose': !shouldChangeColor, 'bg-sasquatch-socks': shouldChangeColor }"
            @scroll.window="shouldChangeColor = (window.pageYOffset > 3550) ? true: false;">
            <div class="max-w-7xl mx-auto px-10 md:px-20 block lg:flex items-center justify-center space-x-2">
                <p>🚀 Limited-time offer</p>
                <p class="hidden lg:block">
                    $399 for lifetime Pro access.
                </p>
                <div class="flex items-center justify-center space-x-2">
                    <a href="https://app.youform.io/register" class="underline hover:no-underline font-semibold">
                        <span class="inline lg:hidden">
                            $399 for lifetime Pro access.
                        </span>
                        <span class="hidden lg:block">
                            Buy once and use forever
                        </span>
                    </a>

                    <a href="https://youform.io/blog/what-does-lifetime-mean" target="_blank">
                        <svg x-data x-tooltip.raw.html='What does "lifetime" mean? Click to learn more' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                    </a>  
                </div>                
            </div>
        </div>

        <div class="">
            @yield('body')
        </div>

        <div x-data="{ show: false }">
            <div x-transition x-cloak x-show="show" class="fixed bottom-16 right-5 bg-white border rounded-md text-sm border-black drop-shadow-3xl divide-y divide-gray-200">
                <button 
                    x-data="{
                        copyEmbedCode() {
                            copyToClipboard('abhishek@youform.io'); 
        
                            $dispatch('notify', {
                                'type': 'success',
                                'message': 'Contact email copied to clipboard!'
                            })
                        }
                    }" 
                    @click.prevent="copyEmbedCode"
                    class="block w-full text-left px-4 py-2 hover:bg-aquamarine">
                    🗣️ &nbsp;Contact us
                </button>
                <a href="https://youform.canny.io/feature-requests" target="_blank" class="block px-4 py-2 hover:bg-aquamarine">
                    🙏 &nbsp;Feature Request
                </a>
            </div>

            <button @click="show = !show" @click.away="show = false" type="button" class="rounded-full p-2 bg-coral shadow-md fixed bottom-4 right-5 text-black border-black drop-shadow-3xl hover:drop-shadow-2xl border flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288" />
                </svg>                 
            </button>
        </div>

        @include('partials.notify')
        
    </body>
</html>
