<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>
        (function(){
          try {
            if (document.cookie.indexOf('yf_attribution=') !== -1) return;

            var caps = { lu:512, r:512, us:255, um:255, uc:255, ut:255, un:255 };
            var clip = function(s, n){ return (typeof s === 'string' ? s : '').slice(0, n); };
            var p = new URLSearchParams(window.location.search);

            var payload = {
              lu: clip(window.location.pathname + window.location.search, caps.lu),
              r:  clip(document.referrer || '', caps.r),
              us: clip(p.get('utm_source')   || '', caps.us),
              um: clip(p.get('utm_medium')   || '', caps.um),
              uc: clip(p.get('utm_campaign') || '', caps.uc),
              ut: clip(p.get('utm_term')     || '', caps.ut),
              un: clip(p.get('utm_content')  || '', caps.un),
              t:  new Date().toISOString()
            };

            // Host-aware attributes — matches the Laravel middleware resolver.
            // On youform.com (prod) we need Domain=.youform.com so the cookie
            // travels to app.youform.com. On any other host (localhost, dev
            // tunnel, staging preview, etc.) we drop the Domain attribute so
            // the browser doesn't reject the Set-Cookie, and we drop Secure
            // unless the page is actually HTTPS.
            var host = window.location.hostname;
            var is_youform = host === 'youform.com' || host.slice(-12) === '.youform.com';
            var domain_attr = is_youform ? '; Domain=.youform.com' : '';
            var secure_attr = (window.location.protocol === 'https:') ? '; Secure' : '';

            var value = encodeURIComponent(JSON.stringify(payload));
            document.cookie = 'yf_attribution=' + value +
              domain_attr + '; Path=/; Max-Age=15552000; SameSite=Lax' + secure_attr;
          } catch (e) { /* never break the page */ }
        })();
        </script>
        @php
            $canonicalUrl = $page->getUrl();
            $isHomepage = $page->getPath() === '' || $page->getPath() === '/';
            // Homepage without trailing slash, all other pages with trailing slash
            if (!$isHomepage && !str_ends_with($canonicalUrl, '/')) {
                $canonicalUrl .= '/';
            }
        @endphp
        <link rel="canonical" href="{{ $canonicalUrl }}">
    
        <meta name="keywords" content="Youform, form builder">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">

        <!-- Primary Meta Tags -->
        @if(($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
        <title>Free Customer Satisfaction (CSAT) Survey Template | YouForm</title>
        <meta name="title" content="Free Customer Satisfaction (CSAT) Survey Template | YouForm">
        <meta name="description" content="Get started with our free customer satisfaction (CSAT) survey template. Easily customize questions, measure customer feedback, and improve your business with YouForm.">
        @else
        <title>{{ $page->title }}</title>
        <meta name="title" content="{{ $page->title }}">
        <meta name="description" content="{{ $page->description }}">
        @endif

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        @if(($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
        <meta property="og:title" content="Free Customer Satisfaction (CSAT) Survey Template | YouForm">
        <meta property="og:description" content="Get started with our free customer satisfaction (CSAT) survey template. Easily customize questions, measure customer feedback, and improve your business with YouForm.">
        @else
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        @endif
        @if($page->image)
            <meta property="og:image" content="{{ $page->image }}">
        @else
            <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/youform-builder.png">
        @endif

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ $page->getUrl() }}">
        @if(($page->template_slug ?? '') === 'software-customer-satisfaction-survey-template')
        <meta property="twitter:title" content="Free Customer Satisfaction (CSAT) Survey Template | YouForm">
        <meta property="twitter:description" content="Get started with our free customer satisfaction (CSAT) survey template. Easily customize questions, measure customer feedback, and improve your business with YouForm.">
        @else
        <meta property="twitter:title" content="{{ $page->title }}">
        <meta property="twitter:description" content="{{ $page->description }}">
        @endif
        @if($page->image)
            <meta property="twitter:image" content="{{ $page->image }}">
        @else
            <meta property="twitter:image" content="{{ $page->baseUrl }}/assets/images/youform-builder.png">
        @endif

        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..125,200..800&family=DM+Sans:opsz,wght@9..40,100..1000&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..125,200..800&family=DM+Sans:opsz,wght@9..40,100..1000&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
        <noscript><link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..125,200..800&family=DM+Sans:opsz,wght@9..40,100..1000&display=swap" rel="stylesheet"></noscript>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @if(str_contains($page->getUrl(), 'google-form-qr-code'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        @endif

        <script type='application/ld+json'>
            {
              "@context": "https://schema.org",
              "@type": "Corporation",
              "name": "Youform",
              "url": "https://youform.com/",
              "sameAs": [
                 "https://twitter.com/youformdotcom/",
                 "https://www.linkedin.com/company/youform.com/"
              ],
              "logo": "https://youform.com/assets/images/youform-logo.png",
              "image": "https://youform.com/assets/images/youform-builder.png",
              "description": "Youform is a free and intuitive form builder with no limits on submissions."
            }
        </script>
        @stack('head')
    </head>
    <body class="text-gray-900 font-sans antialiased relative">
        {{-- <div 
            x-data="{shouldChangeColor: false}" 
            x-transition
            class="sticky inset-0 text-xl shadow-md z-50 py-4 text-center text-black"
            :class="{'bg-lavender-rose': !shouldChangeColor, 'bg-sasquatch-socks': shouldChangeColor }"
            @scroll.window="shouldChangeColor = (window.pageYOffset > 3550) ? true: false;">
            <div class="max-w-7xl mx-auto px-10 md:px-20 block lg:flex items-center justify-center space-x-2">
                <p class="hidden lg:block">🚀 $399 for lifetime Pro access.</p>
                <p class="hidden lg:block">
                    Offer ends 7th June.
                </p>
                <div class="flex items-center justify-center space-x-2">
                    <a href="https://app.youform.com/register" class="underline hover:no-underline font-semibold">
                        <span class="inline lg:hidden">
                            🚀 $399 for lifetime Pro access.
                        </span>
                        <span class="hidden lg:block">
                            Buy now use forever
                        </span>
                    </a>

                    <a href="https://youform.com/blog/what-does-lifetime-mean" target="_blank">
                        <svg x-data x-tooltip.raw.html='What does "lifetime" mean? Click to learn more' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                    </a>  
                </div>   
                <p class="inline lg:hidden">
                    Offer ends 7th June.
                </p>             
            </div>
        </div> --}}

        <main class="overflow-x-clip">
            @yield('body')
        </main>

        <div x-data="{ show: false }">
            <div x-transition x-cloak x-show="show" class="fixed bottom-16 right-5 bg-white border rounded-md text-sm border-black drop-shadow-3xl divide-y divide-gray-200">
                {{-- <button 
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
                </button> --}}

                <a 
                    href="https://help.youform.com/" target="_blank" class="block px-4 py-2 hover:bg-aquamarine">
                    🧡&nbsp; Help Center
                </a>
                <a href="https://feedback.youform.com/" target="_blank" class="block px-4 py-2 hover:bg-aquamarine">
                    🙏 &nbsp;Feature Request
                </a>
            </div>

            <button @click="show = !show" @click.away="show = false" type="button" aria-label="Help and feedback" :aria-expanded="show" class="rounded-full p-2 bg-coral shadow-md fixed bottom-4 right-5 text-black border-black drop-shadow-3xl hover:drop-shadow-2xl border flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288" />
                </svg>                 
            </button>
        </div>

        @include('partials.notify')

        <x-confirm />

        <x-prompt />


        <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
    </body>
</html>
