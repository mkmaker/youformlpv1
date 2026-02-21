<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateRedirects
{
    public function handle(Jigsaw $jigsaw)
    {
        $redirects = <<<'REDIRECTS'
# Typeform alternative cannibalization → homepage
/blog/free-typeform-alternative / 301
/blog/youform-is-a-free-typeform-alternative / 301
/blog/heres-a-typeform-alternative-that-allows-you-to-view-partial-submissions-cltoi4xc200012gm8dg3kv1h2 / 301
/blog/typeform-alternative-10mb-file-uploads / 301

# Google Forms alternative cannibalization → landing page
/blog/whats-the-best-free-google-forms-alternative /google-forms-alternative 301
/blog/heres-a-google-forms-alternative-that-allows-you-to-view-partial-submissions /google-forms-alternative 301
/blog/heres-a-google-forms-alternative-with-a-signature-field-option /google-forms-alternative 301

# Tally → /vs/tally (uncomment after PR #4 merges)
# /blog/tally-forms-vs-youform-cm78l24ne001p1188wueqp8qx /vs/tally 301

# Help docs → help.youform.com
/blog/auto-filling-via-url-parameters-in-youform https://help.youform.com/p/_9cYLMIzF_7e6p/Auto-filling-via-URL-parameters-in-Youform 301
/blog/google-tag-manager-in-youform-cm1hzi7yf003sfw5sc3hhde1l https://help.youform.com/p/V5_00enkd_FLFg/Google-Tag-Manager-in-Youform 301
/blog/stripe-payments-in-youform-cm49spjxt0020dm7geg6ajzsb https://help.youform.com/p/yA5JCb3HH0GWkx/Stripe-payments-in-Youform 301
/blog/facebook-conversion-tracking-with-youform-cm3puklwi000kouxj62h0wdle https://help.youform.com/p/2QXu14weVwYOdR/Facebook-Conversion-tracking-with-Youform 301
/blog/how-to-use-webhooks-in-youform https://help.youform.com/p/Ri05mccCGccogc/How-to-use-webhooks-in-Youform 301
/blog/hiding-labels-in-picture-choice-questions-in-youform https://help.youform.com/p/5HvLKeo9t5Ma4a/Hiding-labels-in-picture-choice-questions-in-Youform 301
/blog/how-to-embed-youform-in-squarespace https://help.youform.com/p/IbRwjBq_4HTZHa/How-to-embed-Youform-in-Squarespace 301
/blog/embed-youform-in-framer-clvxg0l90001apagaja92yv77 https://help.youform.com/p/qwCNt7ys9x72vU/Embed-Youform-in-Framer 301
/blog/calendly-integration-in-youform-cly3306z9001x52otg0px4jer https://help.youform.com/p/d5chuK6UeJHNk6/Calendly-integration-in-Youform 301
/blog/savvycal-integration-in-youform-cly3306z9001x52otg0px4jer https://help.youform.com/p/p4Deg29pWIkUhe/SavvyCal-integration-in-Youform 301
/blog/cal-integration-in-youform-cly3306z9001x52otg0px4jer https://help.youform.com/p/TrWRbvoUVIX0td/Cal-com-integration-in-Youform 301
/blog/multi-language-support-cm32pncrl00ev13fewdjnvew7 https://help.youform.com/p/pwxoiozrYvu862/How-to-add-multiple-languages-in-Youform 301
/blog/submission-refill-link-in-youform-clxoeod6s001tagmd0fmju22e https://help.youform.com/p/VhA9_l-W64qehN/What-is-Submission-Refill-link-in-Youform 301
/blog/how-to-add-a-file-upload-to-a-form-in-squarespace https://help.youform.com/p/IbRwjBq_4HTZHa/How-to-embed-Youform-in-Squarespace 301

# Blog slug cleanup
/blog/how-we-used-sean-ellis-test-to-find-out-our-product-market-fit-cm74d09bu008tr1l2ll8yszxc /blog/how-we-used-sean-ellis-test-to-find-out-our-product-market-fit 301

# Policy pages → help.youform.com
/blog/fair-usage-policy https://help.youform.com/p/-wcaJF3tEKR4tg/Youform-fair-usage-policy 301
/blog/youform-refund-policy-clzmrssx6006878t2v0nchzsj https://help.youform.com/p/zkvBOSMFN_mepo/Youform-refund-policy 301
/blog/report-abuse-clwrxe8xz002or5g3izmqd3zm https://help.youform.com/p/y0VPOCCQDwdMAW/Report-Abuse 301
REDIRECTS;

        file_put_contents(
            $jigsaw->getDestinationPath() . '/_redirects',
            $redirects
        );
    }
}
