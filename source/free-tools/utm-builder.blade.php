---
title: "UTM Builder — Free URL Campaign Tracker Generator | Youform"
description: "Create UTM-tagged URLs for campaign tracking. Generate properly formatted UTM parameters for Google Analytics. Free, no signup required."
---

@extends('_layouts.main')

@section('body')

<!-- header -->
<div>
    <div>
        @include('partials.nav')

        <!-- Hero Section -->
        <div class="relative max-w-4xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold text-center">Free UTM Builder</h1>
                <p class="text-center text-gray-600 mt-3">Create trackable URLs with UTM parameters for your marketing campaigns.</p>

                <div class="relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10 w-full max-w-2xl">
                    <div 
                        x-data="{
                            websiteUrl: '',
                            utmSource: '',
                            utmMedium: '',
                            utmCampaign: '',
                            utmTerm: '',
                            utmContent: '',
                            result: null,
                            error: '',
                            copied: false,
                            
                            presets: {
                                'facebook-ad': { source: 'facebook', medium: 'paid_social', campaign: '' },
                                'instagram-ad': { source: 'instagram', medium: 'paid_social', campaign: '' },
                                'google-ad': { source: 'google', medium: 'cpc', campaign: '' },
                                'email': { source: 'newsletter', medium: 'email', campaign: '' },
                                'twitter': { source: 'twitter', medium: 'social', campaign: '' },
                                'linkedin': { source: 'linkedin', medium: 'social', campaign: '' },
                                'tiktok-ad': { source: 'tiktok', medium: 'paid_social', campaign: '' }
                            },
                            
                            applyPreset(key) {
                                const preset = this.presets[key];
                                this.utmSource = preset.source;
                                this.utmMedium = preset.medium;
                            },
                            
                            isValidUrl(string) {
                                try {
                                    new URL(string);
                                    return true;
                                } catch (_) {
                                    return false;
                                }
                            },
                            
                            slugify(text) {
                                return text.toLowerCase()
                                    .replace(/[^a-z0-9]+/g, '_')
                                    .replace(/^_+|_+$/g, '');
                            },
                            
                            generate() {
                                this.error = '';
                                this.result = null;
                                this.copied = false;
                                
                                let url = this.websiteUrl.trim();
                                
                                // Add https if no protocol
                                if (url && !url.match(/^https?:\/\//i)) {
                                    url = 'https://' + url;
                                }
                                
                                if (!url) {
                                    this.error = 'Please enter a website URL';
                                    return;
                                }
                                
                                if (!this.isValidUrl(url)) {
                                    this.error = 'Please enter a valid URL';
                                    return;
                                }
                                
                                if (!this.utmSource.trim()) {
                                    this.error = 'Campaign Source is required';
                                    return;
                                }
                                
                                if (!this.utmMedium.trim()) {
                                    this.error = 'Campaign Medium is required';
                                    return;
                                }
                                
                                if (!this.utmCampaign.trim()) {
                                    this.error = 'Campaign Name is required';
                                    return;
                                }
                                
                                // Build URL with UTM parameters
                                const urlObj = new URL(url);
                                
                                urlObj.searchParams.set('utm_source', this.slugify(this.utmSource));
                                urlObj.searchParams.set('utm_medium', this.slugify(this.utmMedium));
                                urlObj.searchParams.set('utm_campaign', this.slugify(this.utmCampaign));
                                
                                if (this.utmTerm.trim()) {
                                    urlObj.searchParams.set('utm_term', this.slugify(this.utmTerm));
                                }
                                
                                if (this.utmContent.trim()) {
                                    urlObj.searchParams.set('utm_content', this.slugify(this.utmContent));
                                }
                                
                                this.result = {
                                    fullUrl: urlObj.toString(),
                                    baseUrl: url,
                                    params: {
                                        utm_source: this.slugify(this.utmSource),
                                        utm_medium: this.slugify(this.utmMedium),
                                        utm_campaign: this.slugify(this.utmCampaign),
                                        utm_term: this.utmTerm.trim() ? this.slugify(this.utmTerm) : null,
                                        utm_content: this.utmContent.trim() ? this.slugify(this.utmContent) : null
                                    }
                                };
                            },
                            
                            copyToClipboard() {
                                if (this.result) {
                                    navigator.clipboard.writeText(this.result.fullUrl);
                                    this.copied = true;
                                    setTimeout(() => this.copied = false, 2000);
                                }
                            },
                            
                            reset() {
                                this.websiteUrl = '';
                                this.utmSource = '';
                                this.utmMedium = '';
                                this.utmCampaign = '';
                                this.utmTerm = '';
                                this.utmContent = '';
                                this.result = null;
                                this.error = '';
                                this.copied = false;
                            }
                        }"
                        class="drop-shadow-none z-10">
                        
                        <form @submit.prevent="generate" class="mt-6 space-y-6">
                            <!-- Website URL -->
                            <div>
                                <label for="websiteUrl" class="block text-sm font-medium text-gray-700 mb-1">Website URL <span class="text-red-500">*</span></label>
                                <input 
                                    x-model="websiteUrl" 
                                    type="text" 
                                    id="websiteUrl"
                                    class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                    placeholder="https://youform.com/pricing"
                                >
                            </div>
                            
                            <!-- Quick Presets -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Quick Presets</label>
                                <div class="flex flex-wrap gap-2">
                                    <button type="button" @click="applyPreset('facebook-ad')" class="px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200">Facebook Ad</button>
                                    <button type="button" @click="applyPreset('instagram-ad')" class="px-3 py-1 text-xs bg-pink-100 text-pink-700 rounded-full hover:bg-pink-200">Instagram Ad</button>
                                    <button type="button" @click="applyPreset('google-ad')" class="px-3 py-1 text-xs bg-green-100 text-green-700 rounded-full hover:bg-green-200">Google Ad</button>
                                    <button type="button" @click="applyPreset('email')" class="px-3 py-1 text-xs bg-yellow-100 text-yellow-700 rounded-full hover:bg-yellow-200">Email</button>
                                    <button type="button" @click="applyPreset('twitter')" class="px-3 py-1 text-xs bg-sky-100 text-sky-700 rounded-full hover:bg-sky-200">Twitter/X</button>
                                    <button type="button" @click="applyPreset('linkedin')" class="px-3 py-1 text-xs bg-blue-100 text-blue-800 rounded-full hover:bg-blue-200">LinkedIn</button>
                                    <button type="button" @click="applyPreset('tiktok-ad')" class="px-3 py-1 text-xs bg-gray-800 text-white rounded-full hover:bg-gray-700">TikTok Ad</button>
                                </div>
                            </div>
                            
                            <!-- Required UTM Parameters -->
                            <div class="grid md:grid-cols-3 gap-4">
                                <div>
                                    <label for="utmSource" class="block text-sm font-medium text-gray-700 mb-1">Source <span class="text-red-500">*</span></label>
                                    <input 
                                        x-model="utmSource" 
                                        type="text" 
                                        id="utmSource"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="e.g., facebook"
                                    >
                                    <p class="text-xs text-gray-500 mt-1">Where traffic comes from</p>
                                </div>
                                
                                <div>
                                    <label for="utmMedium" class="block text-sm font-medium text-gray-700 mb-1">Medium <span class="text-red-500">*</span></label>
                                    <input 
                                        x-model="utmMedium" 
                                        type="text" 
                                        id="utmMedium"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="e.g., cpc"
                                    >
                                    <p class="text-xs text-gray-500 mt-1">Marketing channel type</p>
                                </div>
                                
                                <div>
                                    <label for="utmCampaign" class="block text-sm font-medium text-gray-700 mb-1">Campaign <span class="text-red-500">*</span></label>
                                    <input 
                                        x-model="utmCampaign" 
                                        type="text" 
                                        id="utmCampaign"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="e.g., spring_sale"
                                    >
                                    <p class="text-xs text-gray-500 mt-1">Campaign name</p>
                                </div>
                            </div>
                            
                            <!-- Optional UTM Parameters -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="utmTerm" class="block text-sm font-medium text-gray-700 mb-1">Term <span class="text-gray-400">(optional)</span></label>
                                    <input 
                                        x-model="utmTerm" 
                                        type="text" 
                                        id="utmTerm"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="e.g., form builder"
                                    >
                                    <p class="text-xs text-gray-500 mt-1">Paid search keywords</p>
                                </div>
                                
                                <div>
                                    <label for="utmContent" class="block text-sm font-medium text-gray-700 mb-1">Content <span class="text-gray-400">(optional)</span></label>
                                    <input 
                                        x-model="utmContent" 
                                        type="text" 
                                        id="utmContent"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="e.g., banner_blue"
                                    >
                                    <p class="text-xs text-gray-500 mt-1">Differentiate ads/links</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-center gap-4">
                                <button type="submit" class="bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md font-medium">
                                    Generate URL
                                </button>
                                <button type="button" @click="reset" class="bg-gray-200 border-2 border-black px-6 py-2 text-black rounded-md hover:bg-gray-300">
                                    Reset
                                </button>
                            </div>
                        </form>
                        
                        <!-- Error Message -->
                        <div x-show="error" x-cloak class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                            <p class="text-red-600 text-center" x-text="error"></p>
                        </div>
                        
                        <!-- Results -->
                        <div x-show="result" x-cloak class="mt-8">
                            <div class="bg-green-50 border-2 border-green-200 rounded-xl p-6">
                                <h2 class="text-lg font-semibold text-green-800 mb-4">Your Campaign URL</h2>
                                
                                <!-- Full URL with Copy Button -->
                                <div class="bg-white rounded-lg p-4 border border-green-200 mb-4">
                                    <div class="flex items-start gap-3">
                                        <p class="flex-1 text-sm font-mono break-all text-gray-800" x-text="result?.fullUrl"></p>
                                        <button 
                                            @click="copyToClipboard" 
                                            class="flex-shrink-0 px-4 py-2 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition-colors"
                                            x-text="copied ? '✓ Copied!' : 'Copy'"
                                        ></button>
                                    </div>
                                </div>
                                
                                <!-- Parameter Breakdown -->
                                <div class="bg-white rounded-lg p-4 border border-green-100">
                                    <p class="text-sm font-medium text-gray-700 mb-3">Parameters:</p>
                                    <div class="space-y-2 text-sm font-mono">
                                        <div class="flex">
                                            <span class="text-purple-600 w-28">utm_source</span>
                                            <span class="text-gray-400 mx-2">=</span>
                                            <span class="text-gray-800" x-text="result?.params?.utm_source"></span>
                                        </div>
                                        <div class="flex">
                                            <span class="text-purple-600 w-28">utm_medium</span>
                                            <span class="text-gray-400 mx-2">=</span>
                                            <span class="text-gray-800" x-text="result?.params?.utm_medium"></span>
                                        </div>
                                        <div class="flex">
                                            <span class="text-purple-600 w-28">utm_campaign</span>
                                            <span class="text-gray-400 mx-2">=</span>
                                            <span class="text-gray-800" x-text="result?.params?.utm_campaign"></span>
                                        </div>
                                        <template x-if="result?.params?.utm_term">
                                            <div class="flex">
                                                <span class="text-purple-600 w-28">utm_term</span>
                                                <span class="text-gray-400 mx-2">=</span>
                                                <span class="text-gray-800" x-text="result?.params?.utm_term"></span>
                                            </div>
                                        </template>
                                        <template x-if="result?.params?.utm_content">
                                            <div class="flex">
                                                <span class="text-purple-600 w-28">utm_content</span>
                                                <span class="text-gray-400 mx-2">=</span>
                                                <span class="text-gray-800" x-text="result?.params?.utm_content"></span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block absolute -top-10 -right-40 -z-10">
                        <img src="/assets/images/banner-blob.png" class="w-72" alt="Decorative blob">
                    </div>

                    <div class="hidden lg:block absolute top-60 -left-40 -z-10">
                        <img src="/assets/images/feature-blob.png" class="w-72" alt="Decorative blob">
                    </div>
                </div>

                <!-- What is Section -->
                <div class="w-full max-w-2xl mt-8">
                    <h2 class="text-2xl font-bold mb-4">What are UTM Parameters?</h2>
                    <p class="text-gray-700 mb-4">
                        UTM (Urchin Tracking Module) parameters are tags you add to URLs to track where your website traffic comes from. When someone clicks a UTM-tagged link, the parameters are sent to Google Analytics, so you can see exactly which campaigns, channels, and content are driving visits and conversions.
                    </p>
                    <p class="text-gray-700">
                        This helps you understand which marketing efforts are working and where to invest your budget.
                    </p>
                </div>

                <!-- Parameters Explained -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">UTM Parameters Explained</h2>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">utm_source <span class="text-red-500">*</span></p>
                            <p class="text-gray-600 text-sm">Identifies the traffic source (e.g., google, facebook, newsletter)</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">utm_medium <span class="text-red-500">*</span></p>
                            <p class="text-gray-600 text-sm">Identifies the marketing medium (e.g., cpc, email, social, organic)</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">utm_campaign <span class="text-red-500">*</span></p>
                            <p class="text-gray-600 text-sm">Identifies the specific campaign (e.g., spring_sale, product_launch)</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">utm_term</p>
                            <p class="text-gray-600 text-sm">Identifies paid search keywords (e.g., form_builder, survey_tool)</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">utm_content</p>
                            <p class="text-gray-600 text-sm">Differentiates similar content or links (e.g., header_cta, footer_link)</p>
                        </div>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">UTM Best Practices</h2>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li><strong>Be consistent</strong> — use the same naming conventions across campaigns</li>
                        <li><strong>Use lowercase</strong> — UTM parameters are case-sensitive</li>
                        <li><strong>Avoid spaces</strong> — use underscores or hyphens instead</li>
                        <li><strong>Keep it simple</strong> — use clear, descriptive names you'll understand later</li>
                        <li><strong>Document your system</strong> — maintain a spreadsheet of your UTM conventions</li>
                        <li><strong>Don't use UTMs for internal links</strong> — they'll mess up your analytics</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Form Embed CTA -->
        @include('_partials.free-tools-form-embed', [
            'headline' => 'Track form submissions too',
            'subheadline' => 'Youform integrates with Google Analytics so you can track which campaigns drive form completions. Try it yourself 👇'
        ])

        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto px-4 py-16">
            <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
                    
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Do I need all five UTM parameters?</h3>
                    <p class="text-gray-700">
                        No, only source, medium, and campaign are required. Term and content are optional and most useful for paid search campaigns or when you want to A/B test different links.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Where do I see UTM data in Google Analytics?</h3>
                    <p class="text-gray-700">
                        In GA4, go to Reports → Acquisition → Traffic acquisition. You can see Source, Medium, and Campaign data there. For more detail, use the Explore feature to build custom reports.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Will UTM parameters affect my SEO?</h3>
                    <p class="text-gray-700">
                        No, Google ignores UTM parameters when indexing pages. However, you should use canonical tags to prevent any potential duplicate content issues if the same page is accessed with different UTM parameters.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Can I use UTM tags with URL shorteners?</h3>
                    <p class="text-gray-700">
                        Yes! First generate your full UTM-tagged URL, then shorten it with services like Bitly or Rebrandly. The shortened link will still pass all the UTM parameters to your analytics.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">What's the difference between source and medium?</h3>
                    <p class="text-gray-700">
                        Source is WHERE the traffic comes from (facebook, google, newsletter). Medium is HOW it comes (cpc, organic, email, social). Think of it as: source = the specific site/platform, medium = the type of marketing channel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

<!-- FAQ Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Do I need all five UTM parameters?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, only source, medium, and campaign are required. Term and content are optional and most useful for paid search campaigns or when you want to A/B test different links."
            }
        },
        {
            "@type": "Question",
            "name": "Where do I see UTM data in Google Analytics?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "In GA4, go to Reports → Acquisition → Traffic acquisition. You can see Source, Medium, and Campaign data there. For more detail, use the Explore feature to build custom reports."
            }
        },
        {
            "@type": "Question",
            "name": "Will UTM parameters affect my SEO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, Google ignores UTM parameters when indexing pages. However, you should use canonical tags to prevent any potential duplicate content issues if the same page is accessed with different UTM parameters."
            }
        },
        {
            "@type": "Question",
            "name": "Can I use UTM tags with URL shorteners?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! First generate your full UTM-tagged URL, then shorten it with services like Bitly or Rebrandly. The shortened link will still pass all the UTM parameters to your analytics."
            }
        },
        {
            "@type": "Question",
            "name": "What's the difference between source and medium?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Source is WHERE the traffic comes from (facebook, google, newsletter). Medium is HOW it comes (cpc, organic, email, social). Think of it as: source = the specific site/platform, medium = the type of marketing channel."
            }
        }
    ]
}
</script>

<!-- Software Application Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "UTM Builder",
    "description": "Free online tool to create UTM-tagged URLs for campaign tracking in Google Analytics",
    "url": "https://youform.com/free-tools/utm-builder/",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web Browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "creator": {
        "@type": "Organization",
        "name": "Youform",
        "url": "https://youform.com"
    }
}
</script>

@endsection
