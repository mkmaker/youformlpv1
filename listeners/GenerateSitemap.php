<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    protected $exclude = [
        '/assets/*',
        '*/favicon.ico',
        '*/404',
        '/partials/*',
        // Off-topic (deleted, no redirect)
        '/blog/how-to-find-my-bookmarks-on-linkedin-cm5qez59x003yw1st7scmqrtk',
        '/blog/laravel-funding',
        // Redirected blog posts (keyword cannibalization)
        '/blog/free-typeform-alternative',
        '/blog/youform-is-a-free-typeform-alternative',
        '/blog/heres-a-typeform-alternative-that-allows-you-to-view-partial-submissions-cltoi4xc200012gm8dg3kv1h2',
        '/blog/typeform-alternative-10mb-file-uploads',
        '/blog/whats-the-best-free-google-forms-alternative',
        '/blog/heres-a-google-forms-alternative-that-allows-you-to-view-partial-submissions',
        '/blog/heres-a-google-forms-alternative-with-a-signature-field-option',
        // Redirected blog posts (help docs + policy)
        '/blog/auto-filling-via-url-parameters-in-youform',
        '/blog/fair-usage-policy',
        '/blog/youform-refund-policy-clzmrssx6006878t2v0nchzsj',
        '/blog/report-abuse-clwrxe8xz002or5g3izmqd3zm',
        '/blog/google-tag-manager-in-youform-cm1hzi7yf003sfw5sc3hhde1l',
        '/blog/stripe-payments-in-youform-cm49spjxt0020dm7geg6ajzsb',
        '/blog/facebook-conversion-tracking-with-youform-cm3puklwi000kouxj62h0wdle',
        '/blog/how-to-use-webhooks-in-youform',
        '/blog/hiding-labels-in-picture-choice-questions-in-youform',
        '/blog/how-to-embed-youform-in-squarespace',
        '/blog/embed-youform-in-framer-clvxg0l90001apagaja92yv77',
        '/blog/calendly-integration-in-youform-cly3306z9001x52otg0px4jer',
        '/blog/savvycal-integration-in-youform-cly3306z9001x52otg0px4jer',
        '/blog/cal-integration-in-youform-cly3306z9001x52otg0px4jer',
        '/blog/multi-language-support-cm32pncrl00ev13fewdjnvew7',
        '/blog/submission-refill-link-in-youform-clxoeod6s001tagmd0fmju22e',
        '/blog/how-to-add-a-file-upload-to-a-form-in-squarespace',
    ];

    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');

        if (! $baseUrl) {
            echo("\nTo generate a sitemap.xml file, please specify a 'baseUrl' in config.php.\n\n");

            return;
        }

        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())
            ->reject(function ($path) {
                return $this->isExcluded($path);
            })->each(function ($path) use ($baseUrl, $sitemap) {
                $sitemap->addItem(rtrim($baseUrl, '/') . $path, time(), Sitemap::DAILY);
        });

        $sitemap->write();
    }

    public function isExcluded($path)
    {
        return Str::is($this->exclude, $path);
    }
}