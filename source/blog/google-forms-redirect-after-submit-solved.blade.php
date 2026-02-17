---
title: "Google Forms redirect after submit [Solved]"
description: "Wondering how to redirect after someone submits your Google forms? Here are 3 options."
author: "Davis Baer"
date: "2025-10-13"
---

@extends('_layouts.main')

@section('body')

<!-- Navbar -->
<div class="bg-white">
    @include('partials.nav')
</div>

<!-- Back to blog -->
<div class="bg-white pt-6">
    <div class="max-w-3xl mx-auto px-10 md:px-20">
        <a href="/blog" class="text-sm text-gray-400 hover:text-gray-600 transition-colors block text-center">&larr; Back to blog</a>
    </div>
</div>

<!-- Hero section -->
<div class="bg-white pt-6 pb-12">
    <div class="max-w-3xl mx-auto px-10 md:px-20 text-center">
        <h1 class="text-3xl sm:text-5xl font-bold leading-tight">
            Google Forms redirect after submit [Solved]
        </h1>
        <p class="text-lg mt-6 text-gray-600 max-w-2xl mx-auto">
            Wondering how to redirect after someone submits your Google forms? Here are 3 options.
        </p>
        <div class="mt-4 text-sm text-gray-500">
            <span>By Davis Baer</span>
            <span class="mx-2">&#183;</span>
            <span>October 13, 2025</span>
        </div>
        @include('partials.blog-share')
    </div>
</div>

<!-- Main Content -->
<div class="bg-white pb-20">
    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="max-w-3xl mx-auto">
            <article class="prose prose-xl max-w-none" style="font-size: 1.2rem; line-height: 2;">
                <style>
                    article a:not(.cta-btn) { color: #FF7F4A; text-decoration: underline; }
                    article a:not(.cta-btn):hover { color: #e5693a; }
                </style>
                <p>So you have a Google form and want the user to redirect after they have submitted your form?</p><p>Well Google Forms doesn't provide this out of the box but there are 3 workarounds:</p><h3 class="text-2xl font-bold mt-10 mb-4">1. Make a submit message with your link.</h3><p>Go to your Google Form and click on the <strong>settings tab </strong>and look for the&nbsp;<strong>Presentation&nbsp;</strong>option from the list. Click on expand.</p><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/screenshot-2025-10-13-at-12-1760340226732-compressed.png" alt="Google forms redirect after submit" loading="lazy"></div>  <p>After that, you can edit the <strong>confirmation message&nbsp;</strong>i.e the message shown to users after they have submitted the form. There you can add your link.<br>Pros: Super simple and easy to start.<br>Cons: User has to manually click on the link so technically not a redirect. Sometimes they might simply miss the link and leave thinking they have submitted they form already.</p><h3 class="text-2xl font-bold mt-10 mb-4">2. Embed in your website and use a little code.</h3><p>You can embed your form in your website and then use the following code (courtesy <a href="https://stackoverflow.com/a/54406701" alt="Stackoverflow" target="_blank" rel="noopener">Stackoverflow</a>):<br></p><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/carbon-3-1760340555693-compressed.png" alt="Google form redirect after submit (solution using embed code)" loading="lazy"></div><p>Pros: Better than the option to have user to click a link. User gets auto-redirected after submit.<br>Cons: You need to have your own web page and insert a code into it.</p><h3 class="text-2xl font-bold mt-10 mb-4">3. Use a Google Forms alternative (Free)</h3><p>You can consider using a Google Forms alternative which is free and allows you to redirect users after they have submitted your form. Youform also provides lots of other features which Google Forms lacks for eg:&nbsp;<br></p><p>- Partial submissions: You can view partial records as well even if your form responders don't submit the form.<br>- Beautiful design: Google forms UI is stuck in 90s. Youform provides more modern and polished templates and themes.<br>- Loved by thousands of marketers and businesses like yours. Read all public reviews <a target="_blank" href="https://www.capterra.in/software/1060219/youform" alt="here" rel="noopener">here</a>.</p><p>Pros: Modern, beautiful looking forms with redirect after submit solution out-of-the-box.&nbsp;<br>Cons: Not inside Google so you will have to recreate your form. But the team provides a convertor tool as well, so you can reach out to them. Moreover the redirect option is in a pro plan that costs $20/month. Perfect if you need more professional forms but not recommended to spend $29/month for the redirect feature alone if the forms are for casual needs.</p><p>You can try a sample <a href="https://app.youform.com/forms/1sjbgyvl" alt="Youform with redirect here">Youform with redirect here</a>.</p><p>​</p>

                <div class="mt-10 text-center">
                    <a href="https://app.youform.com/register" class="cta-btn inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md no-underline">
                        Create free account
                    </a>
                </div>
            </article>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
