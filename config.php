<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://youform-may23.test',
    'title' => 'Youform - A Free Typeform alternative',
    'description' => 'Youform is a free Typeform alternative that allows unlimited forms and unlimited responses on the free plan.',
    'current' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'underline' : '';
    },
    'collections' => [],
];
