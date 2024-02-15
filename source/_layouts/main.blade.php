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
        <meta property="og:image" content="{{ $page->getUrl() }}assets/images/youform-builder.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ $page->getUrl() }}">
        <meta property="twitter:title" content="{{ $page->title }}">
        <meta property="twitter:description" content="{{ $page->description }}">
        <meta property="twitter:image" content="{{ $page->getUrl() }}assets/images/youform-builder.png">

        <link rel="shortcut icon" href="/assets/images/favicon.ico">        
        <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png"/>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased relative">
        <div 
            x-data="{shouldChangeColor: false}" 
            x-transition
            class="sticky inset-0 text-xl shadow-md z-50 py-4 text-center text-black"
            :class="{'bg-lavender-rose': !shouldChangeColor, 'bg-sasquatch-socks': shouldChangeColor }"
            @scroll.window="shouldChangeColor = (window.pageYOffset > 3550) ? true: false; console.log(window.pageYOffset)">
            <p class="max-w-7xl mx-auto px-10 md:px-20">
                🚀 Limited time launch offer: $299 for lifetime access.
                <a href="https://app.youform.io/register" class="underline hover:no-underline font-semibold">Buy once and use forever</a>
            </p>
        </div>

        <div class="">
            @yield('body')
        </div>
    </body>
</html>
