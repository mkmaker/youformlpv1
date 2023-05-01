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
        <meta property="og:image" content="{{ $page->getUrl() }}assets/images/banner.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ $page->getUrl() }}">
        <meta property="twitter:title" content="{{ $page->title }}">
        <meta property="twitter:description" content="{{ $page->description }}">
        <meta property="twitter:image" content="{{ $page->getUrl() }}assets/images/banner.png">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
</html>
