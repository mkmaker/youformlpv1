---
title: "Google forms searchable dropdown - 2 solutions"
description: "Google forms searchable dropdown - 2 solutions"
author: "Davis Baer"
date: "2024-09-06"
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
            Google forms searchable dropdown - 2 solutions
        </h1>
        <p class="text-lg mt-6 text-gray-600 max-w-2xl mx-auto">
            Google forms searchable dropdown - 2 solutions
        </p>
        <div class="mt-4 text-sm text-gray-500">
            <span>By Davis Baer</span>
            <span class="mx-2">&#183;</span>
            <span>September 06, 2024</span>
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
                ​​​​​​​​​​<p>Google Form's dropdown is already searchable. You can just open the dropdown and start typing. That being said, it's not quite intuitive for a user to know that they can type and search as there are no search input.</p><p>How to make dropdown in Google forms searchable? There are 2 solutions available:</p><h2 class="text-3xl font-bold mt-10 mb-4"><span style="font-family: var(--ui-font); font-size: 1.5em; font-weight: 700; background-color: inherit;">1. Use Pretty Forms Designer extension&nbsp;</span></h2><p>First you need to install the&nbsp;<a alt="pretty forms extension" href="https://workspace.google.com/marketplace/app/pretty_forms_designer/1077249372154" rel="nofollow">pretty forms extension</a>.&nbsp;</p><p>After you have installed the extension, go to your Google form and make sure the extension is activated by clicking on the puzzle (extension icon) at the top.</p><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/screenshot-2025-03-06-at-9-1741234338413-compressed.png" alt="" loading="lazy"></div><p>Then click on the Pretty Forms Designer from the puzzle dropdown and open the designer from the "Open Form Designer".<br></p><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/screenshot-2025-03-06-at-9-1741234438768-compressed.png" alt="" loading="lazy"></div><p>In the popup designer you can then select your dropdown question and click on the button "Options for item" as shown below:<br></p><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/screenshot-2025-03-06-at-9-1741234526166-compressed.png" alt="" loading="lazy"></div><p>Then select the "Make Dropdown Searchable" from the list.&nbsp;You can now preview and save this. Your form will start having the searchable dropdown.&nbsp;</p><div class="my-6"><img class="rounded-lg border border-gray-200 w-full" src="https://assets.superblog.ai/site_cuid_clti911u70009j6wijndw66kq/images/screenshot-2025-03-06-at-9-1741234610662-compressed.png" alt="" loading="lazy"></div><p>Cons of using this approach:</p><p>Remember two things while you use this add-on:&nbsp;</p><ol><li>This isn't entirely free. This is a paid add-on. You can use two forms and up to 10 responses in the free version. But if you need more, you need to go for one of their paid plans.</li><li>The design limitations are there.&nbsp;The searchable dropdown when opened is not focused, so the user has to click on the input to start typing, which isn't great for user experience in my opinion.</li></ol><h2 class="text-3xl font-bold mt-10 mb-4">2. Use a better alternative: Youform</h2><p>Using <a href="https://write.superblog.ai/sites/supername/youform/posts/cm0qnsmvn00j0syrxh9idh8f2/youform.com" alt="Youform" class="on">Youform</a> is no brainer as it not only provides the searchable dropdown (try it <a href="https://app.youform.com/forms/hetvrn9j" alt="here">here</a>) but also has much better user experience than Google Forms. Moreover, Youform is free for unlimited responses and provides much more features than Google Forms like&nbsp;</p><ul><li>Partial submissions (you can view submissions even if your users left the form without submitting)</li><li>Multi language support</li><li>Custom domains</li><li>Better designed forms</li><li>Lots of integrations</li><li>... and much more which you can check <a href="https://youform.com/pricing" alt="here">here</a>.&nbsp;</li></ul><p>You can check a sample Youform below:</p><div class="se-component se-video-container __se__float-none" style="width: 100%;"><figure style="width: 100%; height: 669px; padding-bottom: 669px;"><div class="my-6 rounded-lg overflow-hidden border border-gray-200" style="height: 669px;"><iframe src="https://app.youform.com/forms/xrjcjyti" loading="lazy" width="100%" height="100%" frameborder="0" style="border: none;"></iframe></div>

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
