---
title: "AI Signature Generator — Free Email Signature Creator | Youform"
description: "Create professional email signatures instantly with AI. Enter your details and get a beautifully formatted signature. Free, no signup required."
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
                <h1 class="text-4xl font-bold text-center">Free AI Signature Generator</h1>
                <p class="text-center text-gray-600 mt-3">Create a professional email signature in seconds. Just fill in your details.</p>

                <div class="relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10 w-full max-w-2xl">
                    <div 
                        x-data="{
                            fullName: '',
                            jobTitle: '',
                            company: '',
                            email: '',
                            phone: '',
                            website: '',
                            linkedin: '',
                            twitter: '',
                            style: 'modern',
                            colorScheme: 'blue',
                            result: null,
                            copied: false,
                            
                            colors: {
                                'blue': { primary: '#2563eb', text: '#1e40af' },
                                'green': { primary: '#16a34a', text: '#166534' },
                                'purple': { primary: '#9333ea', text: '#7e22ce' },
                                'red': { primary: '#dc2626', text: '#b91c1c' },
                                'orange': { primary: '#ea580c', text: '#c2410c' },
                                'gray': { primary: '#4b5563', text: '#374151' }
                            },
                            
                            generate() {
                                if (!this.fullName.trim()) {
                                    alert('Please enter your name');
                                    return;
                                }
                                
                                const color = this.colors[this.colorScheme];
                                this.result = {
                                    name: this.fullName.trim(),
                                    title: this.jobTitle.trim(),
                                    company: this.company.trim(),
                                    email: this.email.trim(),
                                    phone: this.phone.trim(),
                                    website: this.website.trim(),
                                    linkedin: this.linkedin.trim(),
                                    twitter: this.twitter.trim(),
                                    style: this.style,
                                    color: color
                                };
                                this.copied = false;
                            },
                            
                            getSignatureHtml() {
                                if (!this.result) return '';
                                
                                const r = this.result;
                                const c = r.color;
                                
                                let html = '';
                                
                                if (r.style === 'modern') {
                                    html = `<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5;\">
  <tr>
    <td style=\"padding-right: 15px; border-right: 3px solid ${c.primary};\">
      <strong style=\"font-size: 16px; color: ${c.text};\">${r.name}</strong>
      ${r.title ? `<br><span style=\"color: #666;\">${r.title}</span>` : ''}
      ${r.company ? `<br><span style=\"color: ${c.primary}; font-weight: 500;\">${r.company}</span>` : ''}
    </td>
    <td style=\"padding-left: 15px;\">
      ${r.email ? `<div><a href=\"mailto:${r.email}\" style=\"color: #333; text-decoration: none;\">✉️ ${r.email}</a></div>` : ''}
      ${r.phone ? `<div><span style=\"color: #333;\">📱 ${r.phone}</span></div>` : ''}
      ${r.website ? `<div><a href=\"${r.website.startsWith('http') ? r.website : 'https://' + r.website}\" style=\"color: ${c.primary}; text-decoration: none;\">🌐 ${r.website.replace(/^https?:\\/\\//, '')}</a></div>` : ''}
      ${r.linkedin || r.twitter ? `<div style=\"margin-top: 5px;\">
        ${r.linkedin ? `<a href=\"${r.linkedin.startsWith('http') ? r.linkedin : 'https://linkedin.com/in/' + r.linkedin}\" style=\"color: #0077b5; text-decoration: none; margin-right: 10px;\">LinkedIn</a>` : ''}
        ${r.twitter ? `<a href=\"${r.twitter.startsWith('http') ? r.twitter : 'https://twitter.com/' + r.twitter.replace('@', '')}\" style=\"color: #1da1f2; text-decoration: none;\">Twitter</a>` : ''}
      </div>` : ''}
    </td>
  </tr>
</table>`;
                                } else if (r.style === 'minimal') {
                                    html = `<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"font-family: Arial, sans-serif; font-size: 13px; line-height: 1.6; color: #333;\">
  <tr><td><strong style=\"color: ${c.text};\">${r.name}</strong>${r.title ? ` · ${r.title}` : ''}${r.company ? ` · ${r.company}` : ''}</td></tr>
  ${r.email || r.phone ? `<tr><td style=\"color: #666;\">${r.email}${r.email && r.phone ? ' · ' : ''}${r.phone}</td></tr>` : ''}
  ${r.website ? `<tr><td><a href=\"${r.website.startsWith('http') ? r.website : 'https://' + r.website}\" style=\"color: ${c.primary};\">${r.website.replace(/^https?:\\/\\//, '')}</a></td></tr>` : ''}
</table>`;
                                } else if (r.style === 'classic') {
                                    html = `<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"font-family: Georgia, serif; font-size: 14px; line-height: 1.6;\">
  <tr><td style=\"border-bottom: 2px solid ${c.primary}; padding-bottom: 10px;\">
    <strong style=\"font-size: 18px; color: ${c.text};\">${r.name}</strong>
    ${r.title ? `<br><em style=\"color: #555;\">${r.title}</em>` : ''}
    ${r.company ? `<br><span style=\"color: #333;\">${r.company}</span>` : ''}
  </td></tr>
  <tr><td style=\"padding-top: 10px; font-size: 13px; color: #555;\">
    ${r.email ? `Email: <a href=\"mailto:${r.email}\" style=\"color: ${c.primary};\">${r.email}</a><br>` : ''}
    ${r.phone ? `Phone: ${r.phone}<br>` : ''}
    ${r.website ? `Web: <a href=\"${r.website.startsWith('http') ? r.website : 'https://' + r.website}\" style=\"color: ${c.primary};\">${r.website.replace(/^https?:\\/\\//, '')}</a>` : ''}
  </td></tr>
</table>`;
                                } else if (r.style === 'bold') {
                                    html = `<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"font-family: Arial, sans-serif;\">
  <tr><td style=\"background: ${c.primary}; color: white; padding: 15px; border-radius: 5px;\">
    <strong style=\"font-size: 18px; display: block;\">${r.name}</strong>
    ${r.title ? `<span style=\"opacity: 0.9;\">${r.title}</span>` : ''}
    ${r.company ? `<span style=\"opacity: 0.9;\"> at ${r.company}</span>` : ''}
    <div style=\"margin-top: 10px; font-size: 13px;\">
      ${r.email ? `<div>✉️ ${r.email}</div>` : ''}
      ${r.phone ? `<div>📱 ${r.phone}</div>` : ''}
      ${r.website ? `<div>🌐 ${r.website.replace(/^https?:\\/\\//, '')}</div>` : ''}
    </div>
  </td></tr>
</table>`;
                                }
                                
                                return html;
                            },
                            
                            copyHtml() {
                                const html = this.getSignatureHtml();
                                navigator.clipboard.writeText(html);
                                this.copied = true;
                                setTimeout(() => this.copied = false, 2000);
                            },
                            
                            copyRichText() {
                                const html = this.getSignatureHtml();
                                const blob = new Blob([html], { type: 'text/html' });
                                const data = [new ClipboardItem({ 'text/html': blob })];
                                navigator.clipboard.write(data).then(() => {
                                    this.copied = true;
                                    setTimeout(() => this.copied = false, 2000);
                                });
                            },
                            
                            reset() {
                                this.fullName = '';
                                this.jobTitle = '';
                                this.company = '';
                                this.email = '';
                                this.phone = '';
                                this.website = '';
                                this.linkedin = '';
                                this.twitter = '';
                                this.result = null;
                                this.copied = false;
                            }
                        }"
                        class="drop-shadow-none z-10">
                        
                        <form @submit.prevent="generate" class="mt-6 space-y-6">
                            <!-- Basic Info -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                                    <input 
                                        x-model="fullName" 
                                        type="text" 
                                        id="fullName"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="John Smith"
                                    >
                                </div>
                                
                                <div>
                                    <label for="jobTitle" class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
                                    <input 
                                        x-model="jobTitle" 
                                        type="text" 
                                        id="jobTitle"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="Marketing Manager"
                                    >
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company</label>
                                    <input 
                                        x-model="company" 
                                        type="text" 
                                        id="company"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="Acme Inc."
                                    >
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input 
                                        x-model="email" 
                                        type="email" 
                                        id="email"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="john@acme.com"
                                    >
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                    <input 
                                        x-model="phone" 
                                        type="tel" 
                                        id="phone"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="+1 (555) 123-4567"
                                    >
                                </div>
                                
                                <div>
                                    <label for="website" class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                                    <input 
                                        x-model="website" 
                                        type="text" 
                                        id="website"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="www.acme.com"
                                    >
                                </div>
                            </div>
                            
                            <!-- Social -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="linkedin" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn</label>
                                    <input 
                                        x-model="linkedin" 
                                        type="text" 
                                        id="linkedin"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="johnsmith or full URL"
                                    >
                                </div>
                                
                                <div>
                                    <label for="twitter" class="block text-sm font-medium text-gray-700 mb-1">Twitter/X</label>
                                    <input 
                                        x-model="twitter" 
                                        type="text" 
                                        id="twitter"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm" 
                                        placeholder="@johnsmith"
                                    >
                                </div>
                            </div>
                            
                            <!-- Style Options -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="style" class="block text-sm font-medium text-gray-700 mb-1">Style</label>
                                    <select 
                                        x-model="style" 
                                        id="style"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                    >
                                        <option value="modern">Modern (Side-by-side)</option>
                                        <option value="minimal">Minimal (Single line)</option>
                                        <option value="classic">Classic (Stacked)</option>
                                        <option value="bold">Bold (Colored background)</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="colorScheme" class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                                    <select 
                                        x-model="colorScheme" 
                                        id="colorScheme"
                                        class="block w-full rounded-md py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm"
                                    >
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                        <option value="purple">Purple</option>
                                        <option value="red">Red</option>
                                        <option value="orange">Orange</option>
                                        <option value="gray">Gray</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                                <button type="submit" class="w-full sm:w-auto bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-10 py-2 text-black rounded-md font-medium">
                                    Generate Signature
                                </button>
                                <button type="button" @click="reset" class="w-full sm:w-auto bg-gray-200 border-2 border-black px-6 py-2 text-black rounded-md hover:bg-gray-300">
                                    Reset
                                </button>
                            </div>
                        </form>
                        
                        <!-- Results -->
                        <div x-show="result" x-cloak class="mt-8">
                            <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6">
                                <h2 class="text-lg font-semibold text-blue-800 mb-4">Your Email Signature</h2>
                                
                                <!-- Preview -->
                                <div class="bg-white rounded-lg p-6 border border-blue-200 mb-4">
                                    <p class="text-xs text-gray-500 mb-3">Preview:</p>
                                    <div x-html="getSignatureHtml()"></div>
                                </div>
                                
                                <!-- Copy Buttons -->
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <button 
                                        @click="copyRichText" 
                                        class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors text-sm font-medium"
                                    >
                                        <span x-show="!copied">📋 Copy Signature (Paste in Email)</span>
                                        <span x-show="copied">✓ Copied!</span>
                                    </button>
                                    <button 
                                        @click="copyHtml" 
                                        class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition-colors text-sm"
                                    >
                                        Copy HTML Code
                                    </button>
                                </div>
                                
                                <p class="text-xs text-gray-500 mt-3">
                                    Tip: Click "Copy Signature" and paste directly into your email signature settings (Gmail, Outlook, etc.)
                                </p>
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

                <!-- How to Use Section -->
                <div class="w-full max-w-2xl mt-8">
                    <h2 class="text-2xl font-bold mb-4">How to Use Your Signature</h2>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">Gmail</p>
                            <p class="text-gray-600 text-sm">Settings → See all settings → General → Signature → Paste</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">Outlook (Web)</p>
                            <p class="text-gray-600 text-sm">Settings → View all Outlook settings → Mail → Compose and reply → Email signature → Paste</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-semibold text-gray-800">Apple Mail</p>
                            <p class="text-gray-600 text-sm">Mail → Preferences → Signatures → Create new → Paste</p>
                        </div>
                    </div>
                </div>

                <!-- Tips Section -->
                <div class="w-full max-w-2xl mt-12">
                    <h2 class="text-2xl font-bold mb-4">Email Signature Best Practices</h2>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li><strong>Keep it short</strong> — 3-4 lines max for most recipients</li>
                        <li><strong>Include essentials</strong> — name, title, and one contact method</li>
                        <li><strong>Use a professional email</strong> — company domain > personal email</li>
                        <li><strong>Add a CTA sparingly</strong> — one link to schedule a call or view portfolio</li>
                        <li><strong>Skip the quotes</strong> — inspirational quotes look unprofessional</li>
                        <li><strong>Test on mobile</strong> — many people read email on phones</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Form Embed CTA -->
        @include('_partials.free-tools-form-embed', [
            'headline' => 'Collecting contact information?',
            'subheadline' => 'Create beautiful contact forms that capture leads. Better than a signature link. Try it yourself 👇'
        ])

        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto px-4 py-16">
            <h2 class="text-2xl font-bold mb-6">Frequently Asked Questions</h2>
                    
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-lg mb-2">Why isn't my signature formatting correctly?</h3>
                    <p class="text-gray-700">
                        Some email clients strip certain formatting. Use the "Copy Signature (Paste in Email)" button which copies rich text. If that doesn't work, try the HTML code option and paste it as HTML in your email settings.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Can I add my photo or logo?</h3>
                    <p class="text-gray-700">
                        This generator creates text-based signatures for maximum compatibility. Photos often get blocked by email clients or appear as attachments. Consider linking to your LinkedIn profile instead.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Will this work with all email clients?</h3>
                    <p class="text-gray-700">
                        Yes! The generated HTML uses basic tables and inline styles that work with Gmail, Outlook, Apple Mail, Yahoo, and most other email clients.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">Should I include my phone number?</h3>
                    <p class="text-gray-700">
                        It depends on your role. Sales and customer-facing roles benefit from phone numbers. For internal communications or if you prefer email-only contact, you can leave it out.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-semibold text-lg mb-2">How long should my email signature be?</h3>
                    <p class="text-gray-700">
                        Ideally 3-5 lines. Name and title are essential, contact info is helpful, and one or two social links maximum. Avoid lengthy disclaimers or multiple promotional links.
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
            "name": "Why isn't my signature formatting correctly?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Some email clients strip certain formatting. Use the 'Copy Signature' button which copies rich text. If that doesn't work, try the HTML code option."
            }
        },
        {
            "@type": "Question",
            "name": "Can I add my photo or logo?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "This generator creates text-based signatures for maximum compatibility. Photos often get blocked or appear as attachments. Consider linking to LinkedIn instead."
            }
        },
        {
            "@type": "Question",
            "name": "Will this work with all email clients?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! The HTML uses basic tables and inline styles that work with Gmail, Outlook, Apple Mail, Yahoo, and most email clients."
            }
        },
        {
            "@type": "Question",
            "name": "Should I include my phone number?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It depends on your role. Sales and customer-facing roles benefit from phone numbers. For internal communications, you can leave it out."
            }
        },
        {
            "@type": "Question",
            "name": "How long should my email signature be?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ideally 3-5 lines. Name and title are essential, contact info is helpful, and one or two social links maximum."
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
    "name": "AI Signature Generator",
    "description": "Free online tool to create professional email signatures with multiple styles and colors",
    "url": "https://youform.com/free-tools/ai-signature-generator/",
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
