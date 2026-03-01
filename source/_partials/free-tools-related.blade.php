{{-- Related Free Tools Section --}}
{{-- Usage: @include('_partials.free-tools-related', ['current' => 'nps', 'related' => ['csat', 'ces', 'survey-response-rate']]) --}}

@php
$tools = [
    'nps' => [
        'name' => 'NPS Calculator',
        'url' => '/free-tools/nps-calculator/',
        'description' => 'Calculate your Net Promoter Score from survey responses.',
        'icon' => '📊'
    ],
    'csat' => [
        'name' => 'CSAT Calculator',
        'url' => '/free-tools/csat-calculator/',
        'description' => 'Calculate Customer Satisfaction Score from ratings.',
        'icon' => '⭐'
    ],
    'ces' => [
        'name' => 'CES Calculator',
        'url' => '/free-tools/ces-calculator/',
        'description' => 'Measure Customer Effort Score from feedback.',
        'icon' => '🎯'
    ],
    'survey-response-rate' => [
        'name' => 'Survey Response Rate Calculator',
        'url' => '/free-tools/survey-response-rate-calculator/',
        'description' => 'Calculate your survey response rate and benchmark it.',
        'icon' => '📈'
    ],
    'sample-size' => [
        'name' => 'Sample Size Calculator',
        'url' => '/free-tools/sample-size-calculator/',
        'description' => 'Determine the right sample size for your survey.',
        'icon' => '🔢'
    ],
    'statistical-significance' => [
        'name' => 'Statistical Significance Calculator',
        'url' => '/free-tools/statistical-significance-calculator/',
        'description' => 'Test if your A/B test results are statistically significant.',
        'icon' => '📉'
    ],
    'confidence-interval' => [
        'name' => 'Confidence Interval Calculator',
        'url' => '/free-tools/confidence-interval-calculator/',
        'description' => 'Calculate confidence intervals for your survey data.',
        'icon' => '📐'
    ],
    'chi-square' => [
        'name' => 'Chi-Square Calculator',
        'url' => '/free-tools/chi-square-calculator/',
        'description' => 'Test independence between categorical variables.',
        'icon' => '🧮'
    ],
    'utm-builder' => [
        'name' => 'UTM Builder',
        'url' => '/free-tools/utm-builder/',
        'description' => 'Create UTM-tagged URLs for campaign tracking.',
        'icon' => '🔗'
    ],
    'google-form-qr-code' => [
        'name' => 'Google Form QR Code Generator',
        'url' => '/free-tools/google-form-qr-code/',
        'description' => 'Generate QR codes for your Google Forms.',
        'icon' => '📱'
    ]
];

$relatedTools = array_filter($tools, function($key) use ($related, $current) {
    return in_array($key, $related) && $key !== $current;
}, ARRAY_FILTER_USE_KEY);
@endphp

<div class="max-w-4xl mx-auto px-4 py-12 border-t border-gray-200">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold">Related Free Tools</h2>
        <a href="/free-tools/" class="text-coral hover:underline font-medium">View all tools →</a>
    </div>
    
    <div class="grid md:grid-cols-3 gap-4">
        @foreach($relatedTools as $key => $tool)
        <a href="{{ $tool['url'] }}" class="block bg-white border-2 border-gray-200 rounded-xl p-5 hover:border-coral hover:shadow-md transition-all">
            <div class="text-3xl mb-3">{{ $tool['icon'] }}</div>
            <h3 class="font-semibold text-gray-900 mb-2">{{ $tool['name'] }}</h3>
            <p class="text-sm text-gray-600">{{ $tool['description'] }}</p>
        </a>
        @endforeach
    </div>
</div>
