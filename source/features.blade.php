---
title: Youform Features - Logic, Integrations, Analytics & 50+ Form Building Tools
description: Explore all Youform features including conditional logic, payment collection, analytics, 50+ integrations, quiz scoring, and more. Everything you need to build professional forms.
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center font-sans">
        <!-- navbar -->
        @include('partials.nav')

        <!-- hero section -->
        <div class="relative max-w-7xl mx-auto mt-10 md:mt-14 pb-16 md:pb-20">
            <div class="max-w-4xl mx-auto text-center px-6 md:px-20">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                    <span class="inline-block w-8 h-px bg-gray-500"></span>
                    Features
                    <span class="inline-block w-8 h-px bg-gray-500"></span>
                </p>
                <h1 class="font-display text-gray-900 leading-[1.02] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4.25rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Everything You Need to<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Build Better Forms.</span>
                </h1>
                <p class="mt-5 text-base md:text-lg text-gray-700 max-w-[58ch] mx-auto leading-relaxed">
                    A complete breakdown of what Youform can do — form blocks, conditional logic, integrations, analytics, payments, and more. Unlimited forms and submissions are free, with advanced features on Pro.
                </p>
                <div class="mt-8 md:mt-10">
                    <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-7 py-3.5 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        Start building for free
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <img class="-mt-2 w-full" src="/assets/images/banner-wave.png" alt="wave decoration image">
    </div>
</div>

<!-- Free Forever Section -->
<div class="bg-aquamarine font-sans">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-20">
        <div class="pt-40 pb-10 px-6 md:px-20">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                {{-- Left: copy --}}
                <div class="lg:col-span-6">
                    <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/75 mb-5">
                        <span class="inline-block w-8 h-px bg-black/40"></span>
                        Free forever
                    </p>
                    <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                        style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                        Unlimited forms.<br>
                        <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">Free forever.</span>
                    </h2>
                    <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[52ch] leading-relaxed">
                        Build as many forms as you need. Collect as many responses as they bring in. All on the free plan — no credit card, no trial countdown, no submission cap.
                    </p>
                    <div class="mt-7">
                        <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Start building for free
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                    </div>
                    <p class="mt-4 text-[11px] md:text-xs text-black/65">
                        Subject to our <a href="https://help.youform.com/p/-wcaJF3tEKR4tg/Youform-fair-usage-policy" target="_blank" rel="noopener" class="underline hover:no-underline font-semibold">fair usage policy</a>.
                    </p>
                </div>

                {{-- Right: dashboard mock --}}
                <div class="lg:col-span-6">
                    <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden rotate-[0.5deg] hover:rotate-0 transition-transform duration-500 motion-reduce:rotate-0 motion-reduce:transition-none">
                        {{-- Browser chrome --}}
                        <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                            <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                            <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">app.youform.com / account</span>
                        </div>
                        <div class="p-6 md:p-7">
                            {{-- Plan row --}}
                            <div class="flex items-center justify-between pb-5 mb-5 border-b-2 border-black/10">
                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-black/55">Current plan</p>
                                    <p class="font-display text-2xl md:text-3xl text-black leading-none mt-1" style="font-variation-settings: 'wdth' 100, 'wght' 800;">Free</p>
                                </div>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-aquamarine border-2 border-black rounded-full text-[11px] font-bold text-black">
                                    <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                                    Active forever
                                </span>
                            </div>
                            {{-- Usage stats --}}
                            <div class="space-y-4">
                                <div>
                                    <div class="flex items-center justify-between mb-1.5">
                                        <p class="text-[11px] font-bold text-black/65">Forms created</p>
                                        <p class="font-display text-[13px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 700;">24 <span class="text-black/40">/ ∞</span></p>
                                    </div>
                                    <div class="h-1.5 bg-gray-100 border border-black/40 rounded-full overflow-hidden">
                                        <div class="h-full bg-aquamarine" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between mb-1.5">
                                        <p class="text-[11px] font-bold text-black/65">Submissions this month</p>
                                        <p class="font-display text-[13px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 700;">12,847 <span class="text-black/40">/ ∞</span></p>
                                    </div>
                                    <div class="h-1.5 bg-gray-100 border border-black/40 rounded-full overflow-hidden">
                                        <div class="h-full bg-coral" style="width: 30%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between mb-1.5">
                                        <p class="text-[11px] font-bold text-black/65">Questions across all forms</p>
                                        <p class="font-display text-[13px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 700;">186 <span class="text-black/40">/ ∞</span></p>
                                    </div>
                                    <div class="h-1.5 bg-gray-100 border border-black/40 rounded-full overflow-hidden">
                                        <div class="h-full bg-vivid-yellow" style="width: 15%"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- Footer --}}
                            <div class="mt-5 pt-5 border-t-2 border-black/10 flex items-center gap-2 text-[11px] text-gray-500">
                                <svg class="w-3.5 h-3.5 text-aquamarine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span>No credit card on file</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Building Blocks Section -->
<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">

    <div class="bg-vivid-yellow -mt-2 pb-20 font-sans">
        <div class="relative max-w-7xl mx-auto">
            <div class="px-6 md:px-20 text-center max-w-3xl mx-auto">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5 pt-6">
                    <span class="inline-block w-8 h-px bg-black/40"></span>
                    Form blocks
                    <span class="inline-block w-8 h-px bg-black/40"></span>
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Complete form<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">building toolkit.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                    Build any type of form with our collection of input blocks. From basic text fields to advanced payment collection, every block you need is here.
                </p>
            </div>

            @php
            $blocks = [
                [
                    'name'  => 'Contact & Text Fields',
                    'tint'  => 'bg-coral/30',
                    'icon'  => '<path d="M4 7h16M4 12h10M4 17h13"/>',
                    'items' => ['Name, email, phone', 'Full address collection', 'Single and multi-line text', 'URL and number validation'],
                    'link'  => 'https://help.youform.com/p/CNm-1RpM-Uhr4U/What-type-of-form-blocks-does-Youform-provides',
                ],
                [
                    'name'  => 'Choice & Selection',
                    'tint'  => 'bg-pale-violet',
                    'icon'  => '<rect x="3.5" y="3.5" width="17" height="17" rx="3"/><path d="M8 12l3 3 5.5-6.5"/>',
                    'items' => ['Dropdown menus', 'Radio buttons (single-select)', 'Checkboxes (multi-select)', 'Date picker'],
                    'link'  => null,
                ],
                [
                    'name'  => 'Ratings & Feedback',
                    'tint'  => 'bg-vivid-yellow',
                    'icon'  => '<path d="M12 2.2l2.95 6.3 6.9.7-5.2 4.65 1.55 6.85L12 17.4l-6.2 3.3 1.55-6.85L2.15 9.2l6.9-.7z"/>',
                    'items' => ['Star ratings', 'Opinion scale (Likert)', 'Ranking / priority order', 'NPS & matrix grid'],
                    'link'  => null,
                ],
                [
                    'name'  => 'Files & Signatures',
                    'tint'  => 'bg-medium-champagne',
                    'icon'  => '<path d="M12 3.5v12M7 8l5-4.5 5 4.5M5 20.5h14"/>',
                    'items' => ['File upload (docs, images)', 'E-signature pad', 'Up to 10 MB on Free', 'Unlimited size on Pro'],
                    'link'  => null,
                ],
                [
                    'name'  => 'Scheduling',
                    'tint'  => 'bg-aquamarine/50',
                    'icon'  => '<rect x="3" y="5.5" width="18" height="15" rx="2"/><path d="M3 10.5h18M8 3.5v4M16 3.5v4"/>',
                    'items' => ['Calendly & Cal.com embeds', 'SavvyCal & TidyCal', 'Auto-fill name & email', 'Book directly in-form'],
                    'link'  => null,
                ],
                [
                    'name'  => 'Payments',
                    'tint'  => 'bg-lavender-rose/50',
                    'icon'  => '<rect x="2" y="6" width="20" height="13" rx="2"/><path d="M2 10h20M6 15h3"/>',
                    'items' => ['Stripe checkout', '"Secured by Stripe" badge', 'Automatic receipt emails', 'Pro plan feature'],
                    'link'  => null,
                ],
            ];
            @endphp
            <div class="px-6 md:px-10 mt-10 md:mt-14">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">
                    @foreach($blocks as $b)
                    <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                        <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $b['tint'] }} items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                {!! $b['icon'] !!}
                            </svg>
                        </span>
                        <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $b['name'] }}</h3>
                        <ul class="mt-3 space-y-1.5">
                            @foreach($b['items'] as $item)
                            <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">
                                <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                                <span>{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                        @if($b['link'])
                        <a href="{{ $b['link'] }}" class="inline-flex items-center gap-1 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                            Learn more
                            <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-12 md:mt-14">
                    <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                        Start building for free
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- Smart Forms Section -->
<div class="bg-lavender-rose pt-20 pb-20 -mt-20 font-sans">
    <div class="relative max-w-7xl mx-auto px-6 md:px-20 pt-20">
        <div class="max-w-3xl mx-auto text-center">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                <span class="inline-block w-8 h-px bg-black/40"></span>
                Smart forms
                <span class="inline-block w-8 h-px bg-black/40"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Build intelligent<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">dynamic forms.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                Create forms that adapt to your users. Use conditional logic, calculations, and hidden variables to build personalized experiences.
            </p>
        </div>

        @php
        $smart = [
            [
                'name'  => 'Conditional logic',
                'tint'  => 'bg-coral/30',
                'icon'  => '<path d="M4 6h5l2 6l-2 6H4M11 12h9m0 0l-3-3m3 3l-3 3"/>',
                'desc'  => 'Show or hide questions based on answers. Create branching flows and redirect users to different paths.',
                'link'  => 'https://help.youform.com/p/QxhAHLWllJfJcp/Adding-Logic-to-forms',
            ],
            [
                'name'  => 'Hidden fields & variables',
                'tint'  => 'bg-aquamarine/40',
                'icon'  => '<path d="M3 12s3-7 9-7 9 7 9 7-3 7-9 7-9-7-9-7z"/><circle cx="12" cy="12" r="3"/><line x1="3" y1="3" x2="21" y2="21"/>',
                'desc'  => 'Capture UTM parameters, pass custom data, and create personalized experiences with hidden variables.',
                'link'  => null,
            ],
            [
                'name'  => 'Answer recall',
                'tint'  => 'bg-pale-violet',
                'icon'  => '<path d="M3 12a9 9 0 1 0 3-6.7L3 8"/><polyline points="3 3 3 8 8 8"/>',
                'desc'  => 'Reference previous answers in later questions. Show a review summary before submission.',
                'link'  => 'https://help.youform.com/p/ncso-NeD8yWiww/How-to-add-answer-recall-in-Youform',
            ],
            [
                'name'  => 'Quiz maker',
                'tint'  => 'bg-vivid-yellow',
                'icon'  => '<circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/>',
                'desc'  => 'Create quizzes with multiple-choice, true/false, and matching questions. Perfect for assessments.',
                'link'  => '/online-quiz-builder/',
            ],
            [
                'name'  => 'Pre-populate fields',
                'tint'  => 'bg-medium-champagne',
                'icon'  => '<path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/>',
                'desc'  => 'Fill fields automatically from URL parameters or data from previous forms.',
                'link'  => null,
            ],
            [
                'name'  => 'Calculator',
                'tint'  => 'bg-lavender-rose/60',
                'icon'  => '<rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="13" y1="10" x2="15" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="13" y1="14" x2="15" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="13" y1="18" x2="15" y2="18"/>',
                'desc'  => 'Perform complex calculations with variables. Build price calculators and scoring systems.',
                'link'  => null,
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 mt-10 md:mt-14">
            @foreach($smart as $s)
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $s['tint'] }} items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $s['icon'] !!}
                    </svg>
                </span>
                <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $s['name'] }}</h3>
                <p class="mt-2.5 text-[13px] md:text-sm text-gray-700 leading-relaxed">{{ $s['desc'] }}</p>
                @if($s['link'])
                <a href="{{ $s['link'] }}" class="inline-flex items-center gap-1 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                    Learn more
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
                @endif
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12 md:mt-14">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Start building for free
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Design & Branding -->
<div class="bg-amber-50 border-t-4 border-black pb-32 font-sans">
    <div class="relative max-w-7xl mx-auto pb-20">
        <div class="max-w-3xl mx-auto text-center px-6 md:px-20 pt-20">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Design & branding
                <span class="inline-block w-8 h-px bg-gray-400"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Beautiful forms that<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">match your brand.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] mx-auto leading-relaxed">
                Customize fonts, colors, backgrounds, and themes to match your brand. Custom domains, custom logos, and watermark removal are on Pro.
            </p>
        </div>

        @php
        $design = [
            [
                'name'  => 'Complete customization',
                'tint'  => 'bg-coral/30',
                'icon'  => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>',
                'items' => ['Custom fonts (upload your own)', 'Background images & brightness', 'Rounded corners & color themes', 'Confetti celebrations'],
                'link'  => 'https://help.youform.com/p/VQZQINRqNnUykD/Does-Youform-provides-brandkit',
            ],
            [
                'name'  => 'Theme library',
                'tint'  => 'bg-aquamarine/40',
                'icon'  => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
                'items' => ['300+ pre-built themes', '20+ designer themes', 'Reuse across forms', 'One-click application'],
                'link'  => null,
            ],
            [
                'name'  => 'Thank you pages',
                'tint'  => 'bg-pale-violet',
                'icon'  => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
                'items' => ['Custom thank-you pages', 'Social sharing buttons', 'Redirect to any URL', 'Show submission summaries'],
                'link'  => 'https://help.youform.com/p/tsz-TPqRzcXONr/How-to-customize-the-Thank-you-page',
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5 px-6 md:px-10 mt-10 md:mt-14">
            @foreach($design as $d)
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $d['tint'] }} items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $d['icon'] !!}
                    </svg>
                </span>
                <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $d['name'] }}</h3>
                <ul class="mt-3 space-y-1.5">
                    @foreach($d['items'] as $item)
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                @if($d['link'])
                <a href="{{ $d['link'] }}" class="inline-flex items-center gap-1 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                    Learn more
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
                @endif
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12 md:mt-14">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Start building for free
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Sharing & Embedding -->
<div class="bg-aquamarine font-sans">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-32 md:pb-40">
        <div class="max-w-3xl mx-auto text-center px-6 md:px-20 pt-20">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                <span class="inline-block w-8 h-px bg-black/40"></span>
                Sharing & embedding
                <span class="inline-block w-8 h-px bg-black/40"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Share forms<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">anywhere.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                Multiple ways to share and embed. Link, QR code, iframe, or widget — reach your audience wherever they are.
            </p>
        </div>

        @php
        $share = [
            [
                'name'  => 'Flexible embedding',
                'tint'  => 'bg-coral/30',
                'icon'  => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
                'items' => ['Inline embeds', 'Modal pop-ups', 'Bottom-right widget', 'iframe or JavaScript'],
                'pro'   => false,
                'link'  => null,
            ],
            [
                'name'  => 'QR codes',
                'tint'  => 'bg-vivid-yellow',
                'icon'  => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><path d="M14 14h3v3h-3zM20 14h1M14 20h1M20 20h1"/>',
                'items' => ['Generate instantly', 'Perfect for offline sharing', 'Events & print materials', 'Mobile-friendly access'],
                'pro'   => false,
                'link'  => null,
            ],
            [
                'name'  => 'Custom domains',
                'tint'  => 'bg-pale-violet',
                'icon'  => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>',
                'items' => ['Use your own domain', 'Keeps forms on your brand', 'SSL handled automatically', 'One-click DNS setup'],
                'pro'   => true,
                'link'  => null,
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5 px-6 md:px-10 mt-10 md:mt-14">
            @foreach($share as $s)
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <div class="flex items-start justify-between mb-4">
                    <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $s['tint'] }} items-center justify-center">
                        <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            {!! $s['icon'] !!}
                        </svg>
                    </span>
                    @if($s['pro'])
                    <span class="inline-flex items-center px-2 py-0.5 bg-black text-white border-2 border-black rounded-md text-[10px] font-bold uppercase tracking-wider">Pro</span>
                    @endif
                </div>
                <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $s['name'] }}</h3>
                <ul class="mt-3 space-y-1.5">
                    @foreach($s['items'] as $item)
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12 md:mt-14">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Start building for free
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Data & Analytics -->
<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">

    <div class="bg-vivid-yellow -mt-2 pb-20 font-sans">
        <div class="relative max-w-7xl mx-auto">
            <div class="max-w-3xl mx-auto text-center px-6 md:px-20 pt-12">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                    <span class="inline-block w-8 h-px bg-black/40"></span>
                    Data & analytics
                    <span class="inline-block w-8 h-px bg-black/40"></span>
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Powerful analytics &<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">data management.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                    Never lose a submission. Track performance, analyze responses, and export data in any format you need.
                </p>
            </div>

            @php
            $data = [
                [
                    'name'  => 'Partial submissions',
                    'tint'  => 'bg-coral/30',
                    'icon'  => '<path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>',
                    'items' => ['Auto-save progress for 15 days', 'Send refill links to users', 'Never lose incomplete forms', 'Perfect for long surveys'],
                    'pro'   => false,
                    'link'  => null,
                ],
                [
                    'name'  => 'Submission management',
                    'tint'  => 'bg-aquamarine/40',
                    'icon'  => '<path d="M3 3h18v18H3z"/><path d="M3 9h18M9 21V9"/>',
                    'items' => ['View all submissions', 'Download as CSV', 'Share summary links', 'Filter & search data'],
                    'pro'   => false,
                    'link'  => null,
                ],
                [
                    'name'  => 'Real-time analytics',
                    'tint'  => 'bg-pale-violet',
                    'icon'  => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                    'items' => ['Views, starts, completions', 'Completion rates', 'Date & device filters (Pro)', 'Question drop-off rates (Pro)'],
                    'pro'   => false,
                    'link'  => 'https://help.youform.com/p/1p4zJnmzzWzbuL/Form-analytics-and-drop-off-rate',
                ],
            ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5 px-6 md:px-10 mt-10 md:mt-14">
                @foreach($data as $d)
                <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                    <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $d['tint'] }} items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            {!! $d['icon'] !!}
                        </svg>
                    </span>
                    <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $d['name'] }}</h3>
                    <ul class="mt-3 space-y-1.5">
                        @foreach($d['items'] as $item)
                        <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">
                            <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @if($d['link'])
                    <a href="{{ $d['link'] }}" class="inline-flex items-center gap-1 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                        Learn more
                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                    @endif
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12 md:mt-14">
                <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                    Start building for free
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- Integrations -->
<div class="bg-lavender-rose pt-20 pb-20 -mt-20 font-sans">
    <div class="relative max-w-7xl mx-auto px-6 md:px-20 pt-20">
        <div class="max-w-3xl mx-auto text-center">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                <span class="inline-block w-8 h-px bg-black/40"></span>
                Integrations
                <span class="inline-block w-8 h-px bg-black/40"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Connect to your<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">favorite tools.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                Integrate with the tools you already use. Automate workflows, sync data, and trigger actions on every submission.
            </p>
        </div>

        @php
        $integrations = [
            [
                'name'  => 'Direct integrations',
                'tint'  => 'bg-coral/30',
                'icon'  => '<polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="15" y1="15" x2="21" y2="21"/><line x1="4" y1="4" x2="9" y2="9"/>',
                'items' => ['Google Sheets — auto-sync data', 'Slack — instant notifications', 'Webhooks — custom endpoints', 'Email notifications'],
                'link'  => null,
            ],
            [
                'name'  => 'Automation platforms',
                'tint'  => 'bg-vivid-yellow',
                'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
                'items' => ['Zapier — 5000+ app connections', 'Make — visual workflows', 'No-code automation', 'Trigger actions instantly'],
                'link'  => null,
            ],
            [
                'name'  => 'REST API',
                'tint'  => 'bg-aquamarine/40',
                'icon'  => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/><line x1="14" y1="4" x2="10" y2="20"/>',
                'items' => ['Full API access', 'Build custom integrations', 'Programmatic form creation', 'Fetch & manage responses'],
                'link'  => null,
            ],
        ];
        @endphp
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5 mt-10 md:mt-14">
            @foreach($integrations as $i)
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $i['tint'] }} items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        {!! $i['icon'] !!}
                    </svg>
                </span>
                <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $i['name'] }}</h3>
                <ul class="mt-3 space-y-1.5">
                    @foreach($i['items'] as $item)
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12 md:mt-14">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Start building for free
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Professional Email -->
<div class="bg-amber-50 border-t-4 border-black pb-20 font-sans">
    <div class="relative max-w-7xl mx-auto pb-20">
        <div class="px-6 md:px-20 pt-20">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                {{-- Left: copy --}}
                <div class="lg:col-span-6">
                    <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                        <span class="inline-block w-8 h-px bg-gray-400"></span>
                        Email communications
                    </p>
                    <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                        style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                        Branded emails.<br>
                        <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">From your domain.</span>
                    </h2>
                    <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[52ch] leading-relaxed">
                        Send notifications, autoresponders, and receipts from your own domain. Customize every part of the email — sender, subject, body, and reply-to.
                    </p>
                    @php
                    $email = [
                        'Use your own SMTP domain',
                        'Custom "from" name and reply-to',
                        'Personalized subject lines and body',
                        'Add social share buttons',
                        'Automatic payment receipts',
                        'Autoresponders & notifications',
                    ];
                    @endphp
                    <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2.5">
                        @foreach($email as $item)
                        <li class="flex items-start gap-2.5 text-[13px] md:text-sm text-gray-700">
                            <span class="shrink-0 mt-0.5 w-4 h-4 rounded border border-black bg-coral flex items-center justify-center">
                                <svg class="w-2.5 h-2.5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-6 flex flex-wrap items-center gap-4">
                        <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                            Start building for free
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                        <a href="https://help.youform.com/p/vYzn0BHzjZUbZI/How-to-send-emails-from-my-own-domain" class="inline-flex items-center gap-1 text-[13px] font-semibold text-black underline hover:no-underline">
                            Learn how to use your own domain
                            <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Right: email mock --}}
                <div class="lg:col-span-6">
                    <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl overflow-hidden rotate-[0.5deg] hover:rotate-0 transition-transform duration-500 motion-reduce:rotate-0 motion-reduce:transition-none">
                        {{-- Mail chrome --}}
                        <div class="flex items-center gap-2 px-4 py-2.5 bg-gray-100 border-b-2 border-black">
                            <span class="w-2.5 h-2.5 rounded-full bg-coral border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-vivid-yellow border border-black/60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-aquamarine border border-black/60"></span>
                            <span class="ml-3 text-[11px] font-semibold text-gray-500 truncate">Inbox — 1 new message</span>
                        </div>
                        {{-- Header row --}}
                        <div class="px-5 md:px-6 py-4 border-b-2 border-black/10">
                            <div class="flex items-start gap-3">
                                <span class="shrink-0 w-10 h-10 rounded-full border-2 border-black bg-coral flex items-center justify-center font-display text-black text-base" style="font-variation-settings: 'wdth' 100, 'wght' 800;">S</span>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-2">
                                        <p class="font-display text-[14px] text-black" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Sarah Kim</p>
                                        <span class="text-[11px] text-gray-500">&lt;sarah@yourbrand.com&gt;</span>
                                    </div>
                                    <p class="text-[11px] text-gray-500 mt-0.5">to me · just now</p>
                                </div>
                                <span class="shrink-0 inline-flex items-center gap-1 px-2 py-0.5 bg-aquamarine border border-black rounded text-[9px] font-bold text-black">Branded</span>
                            </div>
                            <p class="font-display text-black text-lg md:text-xl mt-3 leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Thanks for your submission 🎉</p>
                        </div>
                        {{-- Body --}}
                        <div class="px-5 md:px-6 py-5 space-y-3">
                            <p class="text-[13px] text-gray-700 leading-relaxed">Hi there,</p>
                            <p class="text-[13px] text-gray-700 leading-relaxed">Thanks for taking the time to fill out our form. We've received your response and will be in touch within 24 hours.</p>
                            <p class="text-[13px] text-gray-700 leading-relaxed">In the meantime, here's a quick link to your receipt and a copy of your answers.</p>
                            <div class="pt-2">
                                <span class="inline-flex items-center gap-2 px-4 py-2 bg-coral border-2 border-black rounded-md text-[12px] font-semibold text-black drop-shadow-3xl">
                                    View your submission
                                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                                </span>
                            </div>
                        </div>
                        {{-- Footer --}}
                        <div class="px-5 md:px-6 py-3 border-t-2 border-black/10 bg-gray-50">
                            <p class="text-[10px] text-gray-500 leading-snug">
                                Sent from <span class="font-semibold text-black">yourbrand.com</span> · Reply-to: sarah@yourbrand.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Security & Compliance -->
<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">

    <div class="bg-vivid-yellow -mt-2 pb-20 font-sans">
        <div class="relative max-w-7xl mx-auto">
            <div class="max-w-3xl mx-auto text-center px-6 md:px-20 pt-12">
                <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                    <span class="inline-block w-8 h-px bg-black/40"></span>
                    Security & compliance
                    <span class="inline-block w-8 h-px bg-black/40"></span>
                </p>
                <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                    style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                    Enterprise-grade<br>
                    <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">security.</span>
                </h2>
                <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                    Keep your data and your respondents' data safe. Encryption, GDPR compliance, bot protection, and secure payments — built in.
                </p>
            </div>

            @php
            $security = [
                [
                    'name'  => 'Bot protection',
                    'tint'  => 'bg-coral/30',
                    'icon'  => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>',
                    'desc'  => 'reCAPTCHA integration blocks spam and bot submissions. Keep your data clean and relevant.',
                ],
                [
                    'name'  => 'GDPR compliant',
                    'tint'  => 'bg-aquamarine/40',
                    'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                    'desc'  => 'Full GDPR compliance with EU data hosting and privacy-first design. Data deletion tools included.',
                ],
                [
                    'name'  => 'Data encryption',
                    'tint'  => 'bg-pale-violet',
                    'icon'  => '<rect x="3" y="11" width="18" height="11" rx="2"/><circle cx="12" cy="16" r="1"/><path d="M7 11V7a5 5 0 0110 0v4"/>',
                    'desc'  => 'All data encrypted at rest and in transit. TLS for every request.',
                ],
                [
                    'name'  => 'Secure payments',
                    'tint'  => 'bg-vivid-yellow',
                    'icon'  => '<rect x="2" y="6" width="20" height="13" rx="2"/><path d="M2 10h20M6 15h3"/>',
                    'desc'  => 'PCI-compliant payment processing through Stripe. Payment data never touches our servers.',
                ],
                [
                    'name'  => 'SSL everywhere',
                    'tint'  => 'bg-medium-champagne',
                    'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
                    'desc'  => 'All forms use HTTPS by default. End-to-end TLS for every submission.',
                ],
                [
                    'name'  => 'Enterprise ready',
                    'tint'  => 'bg-lavender-rose/60',
                    'icon'  => '<rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="3" x2="9" y2="21"/><line x1="15" y1="3" x2="15" y2="21"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="3" y1="15" x2="21" y2="15"/>',
                    'desc'  => 'SOC 2 Type II compliance in progress. Built for businesses of all sizes.',
                ],
            ];
            @endphp
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 px-6 md:px-10 mt-10 md:mt-14">
                @foreach($security as $s)
                <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-7 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                    <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black {{ $s['tint'] }} items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            {!! $s['icon'] !!}
                        </svg>
                    </span>
                    <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">{{ $s['name'] }}</h3>
                    <p class="mt-2.5 text-[13px] md:text-sm text-gray-700 leading-relaxed">{{ $s['desc'] }}</p>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12 md:mt-14">
                <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                    Start building for free
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- Collaboration -->
<div class="bg-lavender-rose pt-20 pb-20 -mt-20 font-sans">
    <div class="relative max-w-7xl mx-auto px-6 md:px-20 pt-20">
        <div class="max-w-3xl mx-auto text-center">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-black/70 mb-5">
                <span class="inline-block w-8 h-px bg-black/40"></span>
                Teams & workspaces
                <span class="inline-block w-8 h-px bg-black/40"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Built for<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">teams.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-800 max-w-[58ch] mx-auto leading-relaxed">
                Organize forms into workspaces, share templates, and collaborate with your team on every form.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-5 mt-10 md:mt-14">
            {{-- Workspaces (Free) --}}
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-8 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <div class="flex items-start justify-between mb-4">
                    <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black bg-aquamarine/40 items-center justify-center">
                        <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"/>
                        </svg>
                    </span>
                    <span class="inline-flex items-center px-2 py-0.5 bg-aquamarine text-black border-2 border-black rounded-md text-[10px] font-bold uppercase tracking-wider">Free</span>
                </div>
                <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Workspaces & folders</h3>
                <p class="mt-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">Organize forms the way you want, even on the free plan.</p>
                <ul class="mt-4 space-y-1.5">
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Organize forms into workspaces</span>
                    </li>
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Create folders for projects</span>
                    </li>
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Duplicate and reuse templates</span>
                    </li>
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Revert to previous versions</span>
                    </li>
                </ul>
                <a href="https://help.youform.com/p/8w6vFFouYdBHgl/Workspaces-or-folders" class="inline-flex items-center gap-1 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                    Learn about workspaces
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
            </div>

            {{-- Team collaboration (Pro) --}}
            <div class="bg-white border-2 border-black rounded-2xl drop-shadow-6xl p-6 md:p-8 hover:-translate-y-1 transition-all duration-200 motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                <div class="flex items-start justify-between mb-4">
                    <span class="inline-flex w-12 h-12 rounded-xl border-2 border-black bg-coral/30 items-center justify-center">
                        <svg class="w-5 h-5 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </span>
                    <span class="inline-flex items-center px-2 py-0.5 bg-black text-white border-2 border-black rounded-md text-[10px] font-bold uppercase tracking-wider">Pro</span>
                </div>
                <h3 class="font-display text-xl md:text-[22px] text-black leading-tight" style="font-variation-settings: 'wdth' 100, 'wght' 760;">Team collaboration</h3>
                <p class="mt-2 text-[13px] md:text-sm text-gray-700 leading-relaxed">Invite your team to build and manage forms together.</p>
                <ul class="mt-4 space-y-1.5">
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Invite team members</span>
                    </li>
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Shared workspaces</span>
                    </li>
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Access permissions</span>
                    </li>
                    <li class="flex items-start gap-2 text-[13px] md:text-sm text-gray-700">
                        <span class="shrink-0 mt-[7px] w-1 h-1 rounded-full bg-black"></span>
                        <span>Real-time collaboration</span>
                    </li>
                </ul>
                <a href="https://help.youform.com/p/ovu_Jpd5bJrUL4/Invite-team-members-in-Youform" class="inline-flex items-center gap-1 mt-4 text-[12px] font-semibold text-black underline hover:no-underline">
                    Learn about team invites
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
            </div>
        </div>

        <div class="text-center mt-12 md:mt-14">
            <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-6 py-3 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                Start building for free
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="bg-amber-50 border-t-4 border-black pb-20 font-sans">
    <div class="relative max-w-7xl mx-auto pb-20">
        <div class="max-w-3xl mx-auto text-center px-6 md:px-20 pt-20">
            <p class="inline-flex items-center gap-3 text-[11px] md:text-xs font-bold uppercase tracking-[0.22em] text-gray-700 mb-5">
                <span class="inline-block w-8 h-px bg-gray-400"></span>
                Get started
                <span class="inline-block w-8 h-px bg-gray-400"></span>
            </p>
            <h2 class="font-display text-gray-900 leading-[0.95] tracking-[-0.025em]"
                style="font-size: clamp(2.25rem, 5vw, 4rem); font-variation-settings: 'wdth' 100, 'wght' 760;">
                Start building<br>
                <span class="italic" style="font-variation-settings: 'wdth' 92, 'wght' 800, 'slnt' -12;">in under a minute.</span>
            </h2>
            <p class="mt-5 text-base md:text-lg text-gray-600 max-w-[58ch] mx-auto leading-relaxed">
                Unlimited forms, unlimited submissions, no credit card required. Create your free account and publish your first form today.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="https://app.youform.com/register" class="inline-flex items-center gap-2 px-7 py-3.5 bg-coral border-2 border-black rounded-md font-semibold text-black drop-shadow-4xl hover:drop-shadow-5xl transition-all">
                    Create your free account
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
                <a href="/pricing/" class="inline-flex items-center gap-2 px-6 py-3 bg-white border-2 border-black rounded-md font-semibold text-black drop-shadow-3xl hover:drop-shadow-4xl transition-all">
                    View pricing
                </a>
            </div>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm font-semibold text-gray-700">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-aquamarine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Free forever
                </span>
                <span class="inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-aquamarine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Unlimited forms
                </span>
                <span class="inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-aquamarine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    Unlimited submissions
                </span>
                <span class="inline-flex items-center gap-2">
                    <svg class="w-4 h-4 text-aquamarine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    No credit card
                </span>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection