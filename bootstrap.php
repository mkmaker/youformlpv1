<?php

use App\Listeners\GenerateRedirects;
use App\Listeners\GenerateSitemap;
use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */


 $events->afterBuild(GenerateSitemap::class);
 $events->afterBuild(GenerateRedirects::class);
