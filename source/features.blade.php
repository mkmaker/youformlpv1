---
title: Youform Features - Logic, Integrations, Analytics & 50+ Form Building Tools
description: Explore all Youform features including conditional logic, payment collection, analytics, 50+ integrations, quiz scoring, and more. Everything you need to build professional forms.
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class="bg-medium-champagne bg-cover bg-no-repeat bg-center">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- hero section --> 
        <div class="relative max-w-7xl mx-auto mt-10 pb-10">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <div class="text-center">
                    <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
                        Everything You Need to 
                        <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                            <span class="absolute inset-0 bg-coral rotate-3 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                            <span class="relative z-10 p-2 inline-block rotate-3">Build Better Forms</span>
                        </span>
                    </h1>
                    <p class="text-base mt-6 max-w-3xl mx-auto">
                        Create unlimited forms and collect unlimited submissions for free. From simple contact forms to complex surveys with payments, Youform has all the features you need.
                    </p>
                    <div class="mt-10">
                        <a href="https://app.youform.com/register" class="inline-block text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                            Start Building for Free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <img class="-mt-2 w-full" src="/assets/images/banner-wave.png" alt="wave decoration image">
    </div>
</div>

<!-- Free Forever Section -->
<div class="bg-aquamarine">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-20">
        <div class="text-center pt-40 pb-10 px-10 md:px-20">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Truly Free, 
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                  <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                  <span class="relative z-10 p-2 inline-block rotate-6">Forever</span>
                </span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                Unlike other form builders, Youform gives you unlimited forms and unlimited submissions on the free plan. No credit card required, no hidden fees, no submission limits.
            </p>
            
            <div class="mt-12 bg-white shadow-lg p-8 rounded-md border-2 border-black drop-shadow-6xl max-w-2xl mx-auto">
                <div class="flex items-center justify-center space-x-4 text-left">
                    <div class="text-6xl">♾️</div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Unlimited Everything</h3>
                        <p class="text-gray-600 mt-2">Create unlimited forms, collect unlimited submissions, add unlimited questions. No restrictions, ever.</p>
                        <a href="https://help.youform.com/p/-wcaJF3tEKR4tg/Youform-fair-usage-policy" class="text-xs text-blue-600 hover:underline mt-2 inline-block">View fair usage policy →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Building Blocks Section -->
<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">
    
    <div class="bg-vivid-yellow -mt-2 pb-20">
        <div class="relative max-w-7xl mx-auto">
            <div class="px-10 md:px-20 text-center">
                <h2 class="text-5xl font-bold text-gray-800 mb-6 pt-6">
                    Complete Form 
                    <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                      <span class="absolute inset-0 bg-aquamarine rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                      <span class="relative z-10 p-2 inline-block rotate-6">Building Toolkit</span>
                    </span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                    Build any type of form with our comprehensive collection of input blocks. From basic text fields to advanced payment collection, we've got you covered.
                </p>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Contact & Info Collection -->
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">📝</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-2xl font-bold text-gray-800">Contact & Text Fields</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    <strong>Contact info</strong> - Name, email, phone<br>
                                    <strong>Address fields</strong> - Full address collection<br>
                                    <strong>Single-line text</strong> - Short answers<br>
                                    <strong>Multi-line text</strong> - Long responses<br>
                                    <strong>URL, Number fields</strong> - Validated inputs
                                </p>
                                <a href="https://help.youform.com/p/CNm-1RpM-Uhr4U/What-type-of-form-blocks-does-Youform-provides" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn more →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Selection Fields -->
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">🎯</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-2xl font-bold text-gray-800">Choice & Selection</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    <strong>Dropdown menus</strong> - Space-saving lists<br>
                                    <strong>Single-select</strong> - Radio buttons<br>
                                    <strong>Multi-select</strong> - Checkboxes<br>
                                    <strong>Date picker</strong> - Calendar selection<br>
                                    Perfect for surveys and preferences
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Rating & Opinion -->
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-yellow-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">⭐</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-2xl font-bold text-gray-800">Ratings & Feedback</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    <strong>Star ratings</strong> - Customer satisfaction<br>
                                    <strong>Opinion scale</strong> - Likert scale surveys<br>
                                    <strong>Ranking</strong> - Priority ordering<br>
                                    Collect nuanced feedback easily
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Advanced Inputs -->
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">📎</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-2xl font-bold text-gray-800">Files & Signatures</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    <strong>File upload</strong> - Documents & images<br>
                                    <strong>Signature pad</strong> - Digital signatures<br>
                                    Secure file collection with size limits
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Scheduling -->
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-coral flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">📅</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-2xl font-bold text-gray-800">Scheduling</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    Embed calendar booking directly in forms<br>
                                    <strong>Calendly, Cal.com</strong><br>
                                    <strong>SavvyCal, TidyCal</strong><br>
                                    Auto-fill name and email fields
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Payments -->
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-red-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">💳</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-2xl font-bold text-gray-800">Payments</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    <strong>Stripe integration</strong><br>
                                    Accept payments securely<br>
                                    "Secured by Stripe" badges<br>
                                    Automatic receipt emails
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- Smart Forms Section -->
<div class="bg-lavender-rose pt-20 pb-20 -mt-20">
    <div class="relative max-w-7xl mx-auto px-10 md:px-20 pt-20">
        <div class="text-center">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Build Intelligent 
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                  <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                  <span class="relative z-10 p-2 inline-block rotate-6">Dynamic Forms</span>
                </span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                Create forms that adapt to your users. Use conditional logic, calculations, and smart features to build personalized experiences.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🔀</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Conditional Logic</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Show or hide questions based on answers. Create branching flows and redirect users to different paths.
                        </p>
                        <a href="https://help.youform.com/p/QxhAHLWllJfJcp/Adding-Logic-to-forms" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn more →</a>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🔧</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Hidden Fields & Variables</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Capture UTM parameters, pass custom data, and create personalized experiences with hidden variables.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🔄</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Answer Recall</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Reference previous answers in later questions. Show a review summary before submission.
                        </p>
                        <a href="https://help.youform.com/p/ncso-NeD8yWiww/How-to-add-answer-recall-in-Youform" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn more →</a>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-yellow-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🎯</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Quiz Maker</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Create quizzes with multiple-choice, true/false, and matching questions. Perfect for assessments.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-red-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🔗</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Pre-populate Fields</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Fill fields automatically from URL parameters or data from previous forms.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-pink-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🧮</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Calculator</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Perform complex calculations with variables. Build price calculators and scoring systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Design & Branding -->
<div class="bg-amber-50 border-t-4 border-black pb-32">
    <div class="relative max-w-7xl mx-auto pb-20">
        <h2 class="text-5xl font-bold text-gray-800 text-center pt-20 pb-6 px-10 md:px-20">
            Beautiful Forms That 
            <span class="relative inline-block ml-1 mt-2 sm:mt-0">
              <span class="absolute inset-0 bg-coral rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
              <span class="relative z-10 p-2 inline-block rotate-6">Match Your Brand</span>
            </span>
        </h2>
        <p class="text-center text-gray-600 max-w-3xl mx-auto px-10 pb-10">
            Customize every aspect of your forms. From fonts to colors to custom domains, make forms that feel like part of your brand.
        </p>
        
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🎨</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-xl font-bold text-gray-800">Complete Customization</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Custom fonts & upload your own<br>
                                Background images with brightness<br>
                                Rounded corners & color themes<br>
                                Confetti celebrations
                            </p>
                            <a href="https://help.youform.com/p/VQZQINRqNnUykD/Does-Youform-provides-brandkit" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn more →</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🎭</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-xl font-bold text-gray-800">Theme Library</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                300+ pre-built themes<br>
                                20+ designer themes<br>
                                Reuse designs across forms<br>
                                One-click theme application
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🎉</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-xl font-bold text-gray-800">Thank You Pages</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Configure custom thank you pages<br>
                                Add social sharing buttons<br>
                                Redirect to custom URLs<br>
                                Show submission summaries
                            </p>
                            <a href="https://help.youform.com/p/tsz-TPqRzcXONr/How-to-customize-the-Thank-you-page" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn more →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Sharing & Embedding -->
<div class="bg-aquamarine">
    <div class="relative max-w-7xl mx-auto -mt-10 lg:-mt-20 pb-24">
        <h2 class="text-5xl font-bold text-gray-800 text-center pt-20 pb-6 px-10 md:px-20">
            Share Forms 
            <span class="relative inline-block ml-1 mt-2 sm:mt-0">
              <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
              <span class="relative z-10 p-2 inline-block rotate-6">Anywhere</span>
            </span>
        </h2>
        <p class="text-center text-gray-600 max-w-3xl mx-auto px-10 pb-10">
            Multiple ways to share and embed your forms. From simple links to advanced embeds, reach your audience wherever they are.
        </p>
        
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🔗</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-xl font-bold text-gray-800">Flexible Embedding</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Inline embeds<br>
                                Modal pop-ups<br>
                                Bottom-right widget<br>
                                iframe or JavaScript options
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">📱</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-xl font-bold text-gray-800">QR Codes</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Generate QR codes instantly<br>
                                Perfect for offline sharing<br>
                                Events and print materials<br>
                                Mobile-friendly access
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                    <div class="relative gap-4">
                        <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-xl font-bold text-white">🌐</span>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-xl font-bold text-gray-800">Custom Domains</h3>
                            <p class="text-sm text-gray-600 mt-4">
                                Use your own domain<br>
                                Professional appearance<br>
                                Better brand recognition<br>
                                Improved trust
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Data & Analytics -->
<div class="-mt-20 relative">
    <img src="/assets/images/yellow-wave-up.png" alt="wave decoration image" class="w-full">
    
    <div class="bg-vivid-yellow -mt-2 pb-20">
        <div class="relative max-w-7xl mx-auto">
            <div class="px-10 md:px-20 text-center">
                <h2 class="text-5xl font-bold text-gray-800 mb-6 pt-12">
                    Powerful Analytics & 
                    <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                      <span class="absolute inset-0 bg-aquamarine rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                      <span class="relative z-10 p-2 inline-block rotate-6">Data Management</span>
                    </span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                    Never lose a submission. Track performance, analyze responses, and export data in any format you need.
                </p>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">💾</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Partial Submissions</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    Auto-save progress for 15 days<br>
                                    Send refill links to users<br>
                                    Never lose incomplete forms<br>
                                    Perfect for long surveys
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">📊</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Submission Management</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    View all submissions<br>
                                    Download as CSV<br>
                                    Share summary links<br>
                                    Filter and search data
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">📈</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Real-time Analytics</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    Views, starts, submissions<br>
                                    Completion rates & time metrics<br>
                                    Question drop-off analysis<br>
                                    UTM & traffic source tracking
                                </p>
                                <a href="https://help.youform.com/p/1p4zJnmzzWzbuL/Form-analytics-and-drop-off-rate" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn more →</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- Integrations -->
<div class="bg-lavender-rose pt-20 pb-20 -mt-20">
    <div class="relative max-w-7xl mx-auto px-10 md:px-20 pt-20">
        <div class="text-center">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Connect to Your 
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                  <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                  <span class="relative z-10 p-2 inline-block rotate-6">Favorite Tools</span>
                </span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                Seamlessly integrate with the tools you already use. Automate workflows and sync data effortlessly.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">📊</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Direct Integrations</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            <strong>Google Sheets</strong> - Auto-sync data<br>
                            <strong>Slack</strong> - Instant notifications<br>
                            <strong>Webhooks</strong> - Custom endpoints<br>
                            Real-time data transfer
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">⚡</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">Automation Platforms</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            <strong>Zapier</strong> - 5000+ app connections<br>
                            <strong>Make</strong> - Visual workflows<br>
                            No code automation<br>
                            Trigger actions instantly
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                <div class="relative gap-4">
                    <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                        <span class="text-xl font-bold text-white">🛠️</span>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-xl font-bold text-gray-800">REST API</h3>
                        <p class="text-sm text-gray-600 mt-4">
                            Full API access<br>
                            Build custom integrations<br>
                            Programmatic form creation<br>
                            Complete control
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Professional Email -->
<div class="bg-amber-50 border-t-4 border-black pb-20">
    <div class="relative max-w-7xl mx-auto pb-20">
        <div class="px-10 md:px-20 text-center pt-20">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Professional 
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                  <span class="absolute inset-0 bg-coral rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                  <span class="relative z-10 p-2 inline-block rotate-6">Email Communications</span>
                </span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                Send beautifully branded emails to your respondents. Customize every aspect of your email communications.
            </p>

            <div class="max-w-2xl mx-auto">
                <div class="bg-white shadow-lg p-8 rounded-md border-2 border-black drop-shadow-6xl">
                    <div class="flex items-center justify-center space-x-4">
                        <div class="w-16 h-16 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                            <span class="text-2xl font-bold text-white">📧</span>
                        </div>
                        <div class="text-left">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Complete Email Control</h3>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>✓ Use your own SMTP domain</li>
                                <li>✓ Custom "from" name and reply-to address</li>
                                <li>✓ Personalized subject lines and email body</li>
                                <li>✓ Add social share buttons</li>
                                <li>✓ Automatic payment receipt emails</li>
                                <li>✓ Send autoresponders and notifications</li>
                            </ul>
                            <a href="https://help.youform.com/p/vYzn0BHzjZUbZI/How-to-send-emails-from-my-own-domain" class="text-blue-600 hover:underline mt-4 inline-block">Learn how to use your own domain →</a>
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
    
    <div class="bg-vivid-yellow -mt-2 pb-20">
        <div class="relative max-w-7xl mx-auto">
            <div class="px-10 md:px-20 text-center">
                <h2 class="text-5xl font-bold text-gray-800 mb-6 pt-12">
                    Enterprise-Grade 
                    <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                      <span class="absolute inset-0 bg-aquamarine rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                      <span class="relative z-10 p-2 inline-block rotate-6">Security</span>
                    </span>
                </h2>
                <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                    Keep your data and your users' data safe with bank-level security and compliance features.
                </p>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-blue-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">🤖</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Bot Protection</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    reCAPTCHA integration to block spam and bot submissions. Keep your data clean and relevant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-green-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">🛡️</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">GDPR Compliant</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    Full GDPR compliance with EU data hosting and privacy-first design. Data deletion tools included.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-purple-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">🔐</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Data Encryption</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    All data encrypted at rest and in transit. Bank-level security for all form submissions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-yellow-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">💳</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Secure Payments</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    PCI-compliant payment processing through Stripe. Payment data never touches our servers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-red-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">🔒</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">SSL Everywhere</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    All forms use HTTPS by default. End-to-end encryption for every submission.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg p-5 rounded-md border-2 border-black drop-shadow-6xl hover:-translate-y-1 transition-all">
                        <div class="relative gap-4">
                            <div class="w-12 h-12 bg-pink-300 flex items-center justify-center rounded-md border border-black">
                                <span class="text-xl font-bold text-white">🏢</span>
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl font-bold text-gray-800">Enterprise Ready</h3>
                                <p class="text-sm text-gray-600 mt-4">
                                    SOC 2 Type II compliance in progress. Built for businesses of all sizes.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <img class="-mt-4 w-full" src="/assets/images/yellow-wave-down.png" alt="wave decoration image">
</div>

<!-- Collaboration -->
<div class="bg-lavender-rose pt-20 pb-20 -mt-20">
    <div class="relative max-w-7xl mx-auto px-10 md:px-20 pt-20">
        <div class="text-center">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Built for 
                <span class="relative inline-block ml-1 mt-2 sm:mt-0">
                  <span class="absolute inset-0 bg-yellow-300 rotate-6 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl"></span>
                  <span class="relative z-10 p-2 inline-block rotate-6">Teams</span>
                </span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mb-10">
                Collaborate seamlessly with your team. Share forms, manage permissions, and work together efficiently.
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-lg p-8 rounded-md border-2 border-black drop-shadow-6xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">👥 Team Features</h3>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>✓ Invite unlimited team members</li>
                            <li>✓ Organize forms in workspaces</li>
                            <li>✓ Create folders for projects</li>
                            <li>✓ Granular access permissions</li>
                        </ul>
                        <a href="https://help.youform.com/p/ovu_Jpd5bJrUL4/Invite-team-members-in-Youform" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn about team invites →</a>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">🔄 Version Control</h3>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>✓ Revert to previous versions</li>
                            <li>✓ Track changes over time</li>
                            <li>✓ Duplicate forms instantly</li>
                            <li>✓ Share form templates</li>
                        </ul>
                        <a href="https://help.youform.com/p/8w6vFFouYdBHgl/Workspaces-or-folders" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Learn about workspaces →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA -->
<div class="bg-amber-50 border-t-4 border-black pb-20">
    <div class="relative max-w-7xl mx-auto pb-20">
        <div class="px-10 md:px-20 text-center pt-20">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">
                Start Building Forms That Convert
            </h2>
            <p class="text-gray-600 max-w-xl mx-auto mb-10 text-lg">
                Join thousands of creators using Youform. Unlimited forms, unlimited submissions, no credit card required.
            </p>
            
            <div class="mt-10">
                <a href="https://app.youform.com/register" class="text-2xl bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md">
                    Create Your Free Account
                </a>
            </div>

            <div class="text-sm pt-8 font-semibold sm:flex items-center justify-center sm:space-x-4">
                <div class="flex items-center space-x-1 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>                              
                    <span>Free forever</span>
                </div>

                <div class="flex items-center justify-center space-x-1 pt-2 sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>                              
                    <span>Unlimited forms</span>
                </div>

                <div class="flex items-center justify-center space-x-1 pt-2 sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>                              
                    <span>Unlimited submissions</span>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection