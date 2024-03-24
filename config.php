<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://youform-may23.test/',
    'title' => 'Youform - A Free Typeform alternative',
    'description' => 'Youform gives you a drag-and-drop builder to make forms that your users will love to fill.',
    'current' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'underline' : '';
    },
    'collections' => [],
];
