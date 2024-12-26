<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://youform-may23.test',
    'appUrl' => 'https://youform.test',
    'title' => 'Youform - A Free Typeform alternative',
    'description' => 'Youform is a free Typeform alternative that allows unlimited forms and unlimited responses on the free plan.',
    'current' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'underline' : '';
    },
    'str_plural' => function ($page, $str) {
        return $str ? Str::plural($str) : $str;
    },
    'str_singular' => function ($page, $str) {
        return $str ? Str::singular($str) : $str;
    },
    'collections' => [
        'template' => [
            'extends' => '_layouts.template',
            'path' => 'templates/t/{template_slug}',
            'items' => function ($config) {
                 $templates = json_decode(file_get_contents($config['appUrl'].'/api/templates'));
  
                 return collect($templates)->map(function ($template) {
                    return [
                        'slug' => $template->slug,
                        'type' => $template->type,
                        'categories' => $template->categories,
                        'category_slug' => Str::slug($template->categories[0]),
                        'title' => $template->template_title,
                        'template_slug' => $template->template_slug,
                        'description' => $template->template_description,
                        'image' => $template->template_image,
                        'content' => 'Description',
                    ];
                });
            },
        ],
        'type' => [
            'extends' => '_layouts.type',
            'path' => 'templates/c/{type_slug}',
            'items' => function ($config) {
                 $types = json_decode(file_get_contents($config['appUrl'].'/api/types'));
  
                 return collect($types)->map(function ($type_obj) use($config) {
                    
                    $data = [
                        'title' => $type_obj->title,
                        'description' => $config['descriptions'][$type_obj->type],
                        'type' => $type_obj->type,
                        'type_singular' => Str::singular($type_obj->type),
                        'type_slug' => $type_obj->type_slug,
                    ];

                    $data['categories'] = collect($type_obj->categories)->map(function ($category) {
                        return [
                            'name' => $category->name,
                            'slug' => $category->slug,
                            'templates' => collect($category->templates)->map(function ($template) {
                                return [
                                    'title' => $template->template_title,
                                    'slug' => $template->template_slug,
                                    'image' => $template->template_image,
                                ];
                            })->toArray(),
                        ];
                    })->toArray();

                    return $data;
                });
            },
        ],
        'form_category' => [
            'extends' => '_layouts.category',
            'path' => 'templates/c/forms/{category_slug}',
            'items' => function ($config) {
                 $categories = json_decode(file_get_contents($config['appUrl'].'/api/categories?type=form&with=templates'));
  
                 return collect($categories)->map(function ($category_obj) use($config) {
                    
                    $data = [
                        'title' => ucwords($category_obj->title),
                        'description' => $config['descriptions']['categories']['form'][$category_obj->name ?? 'Other'],
                        'type' => 'form',
                        'name' => $category_obj->name,
                        'category_slug' => $category_obj->slug,
                    ];

                    $data['templates'] = collect($category_obj->templates)->map(function ($template) {
                        return [
                            'slug' => $template->template_slug,
                            'image' => $template->image,
                            'title' => $template->title,
                        ];
                    })->toArray();

                    return $data;
                });
            },
        ],
        'survey_category' => [
            'extends' => '_layouts.category',
            'path' => 'templates/c/surveys/{category_slug}',
            'items' => function ($config) {
                 $categories = json_decode(file_get_contents($config['appUrl'].'/api/categories?type=survey&with=templates'));
  
                 return collect($categories)->map(function ($category_obj) use($config) {
                    
                    $data = [
                        'title' => ucwords($category_obj->title),
                        'description' => $config['descriptions']['categories']['survey'][$category_obj->name ?? 'Other'],
                        'type' => 'survey',
                        'name' => $category_obj->name,
                        'category_slug' => $category_obj->slug,
                    ];

                    $data['templates'] = collect($category_obj->templates)->map(function ($template) {
                        return [
                            'slug' => $template->template_slug,
                            'image' => $template->image,
                            'title' => $template->title,
                        ];
                    })->toArray();

                    return $data;
                });
            },
        ],
        'quiz_category' => [
            'extends' => '_layouts.category',
            'path' => 'templates/c/quizzes/{category_slug}',
            'items' => function ($config) { 
                 $categories = json_decode(file_get_contents($config['appUrl'].'/api/categories?type=quiz&with=templates'));
  
                 return collect($categories)->map(function ($category_obj) use($config) {
                    
                    $data = [
                        'title' => ucwords($category_obj->title),
                        'description' => $config['descriptions']['categories']['quiz'][$category_obj->name ?? 'Other'],
                        'type' => 'quiz',
                        'name' => $category_obj->name,
                        'category_slug' => $category_obj->slug,
                    ];

                    $data['templates'] = collect($category_obj->templates)->map(function ($template) {
                        return [
                            'slug' => $template->template_slug,
                            'image' => $template->image,
                            'title' => $template->title,
                        ];
                    })->toArray();

                    return $data;
                });
            },
        ]
    ],
    'templates' => [
        'form' => [
            [
                'title' => 'Testimonial Form',
                'description' => 'Gather authentic customer testimonials effortlessly with this customizable form designed for impactful feedback collection.',
                'image' => '/assets/images/testimonial-form.png',
                'slug' => 'testimonial-form-template'
            ],
            [
                'title' => 'Client Intake Form',
                'description' => 'Streamline onboarding with this Client Intake Form, designed to collect essential client details quickly and efficiently.',
                'image' => '/assets/images/client-intake-form.png',
                'slug' => 'client-intake-form-template'
            ],
            [
                'title' => 'Lead Capture Form',
                'description' => 'Effortlessly gather potential customer details with this Lead Capture Form, designed to maximize conversions and grow your business.',
                'image' => '/assets/images/lead-capture-form.png',
                'slug' => 'lead-capture-form-template'
            ]
        ],
        'survey' => [
            [
                'title' => 'Market Research Survey',
                'description' => 'Gather valuable insights with this Market Research Survey, designed to understand your audience and drive informed decisions.',
                'image' => '/assets/images/market-research-survey.png',
                'slug' => 'market-research-survey-template'
            ],
            [
                'title' => 'SaaS Onboarding Survey',
                'description' => 'Enhance user onboarding with this SaaS Onboarding Survey, designed to gather feedback and improve the user experience.',
                'image' => '/assets/images/saas-onboarding-survey.png',
                'slug' => 'saas-onboarding-survey-template'
            ],
            [
                'title' => 'Cancellation Survey',
                'description' => 'Understand why users leave with this Cancellation Survey, designed to gather insights and improve retention strategies.',
                'image' => '/assets/images/cancellation-survey-form.png',
                'slug' => 'cancellation-survey-template'
            ]
        ],
        'quiz' => [
            [
                'title' => 'Digital Marketing Quiz',
                'description' => 'Engage your audience with this Digital Marketing Quiz, designed to test knowledge and generate valuable leads.',
                'image' => '/assets/images/digital-marketing-quiz.png',
                'slug' => 'digital-marketing-quiz-template'
            ],
            [
                'title' => 'Personality Quiz Template',
                'description' => 'Create fun and engaging experiences with this Personality Quiz Template, perfect for capturing insights and driving audience interaction.',
                'image' => '/assets/images/personality-quiz-template.png',
                'slug' => 'personality-quiz-template'
            ],
            [
                'title' => 'Lead Generation Quiz',
                'description' => 'Boost conversions with this Lead Generation Quiz, designed to capture leads while keeping your audience engaged.',
                'image' => '/assets/images/lead-generation-quiz.png',
                'slug' => 'lead-generation-quiz-template'
            ]
        ]
    ],
    'descriptions' => [
        'forms' => "Discover customizable form templates for every need—lead generation, event planning, feedback collection, and more. Save time and create stunning forms effortlessly with our pre-designed, professional templates.",
        'surveys' => "Explore ready-to-use survey templates designed for feedback, research, and engagement. Customize effortlessly to gather insights and make informed decisions with beautifully crafted, professional survey designs.",
        'quizzes' => "Create engaging quizzes in minutes with our customizable templates. Perfect for education, assessments, or fun challenges—designed to captivate and deliver results effortlessly.",
        'categories' => [
            'form' => [
                'Application' => 'Create streamlined application forms to collect essential details for any process.',
                'Booking' => 'Simplify reservations with customizable booking form templates.',
                'Business' => 'Enhance operations with versatile business form templates.',
                'Consultation' => 'Schedule and manage consultations effortlessly with tailored forms.',
                'Contact' => 'Build easy-to-use contact forms to connect with your audience.',
                'Donation' => 'Drive donations seamlessly with user-friendly donation forms.',
                'Ecommerce' => 'Boost sales with ecommerce forms optimized for conversions.',
                'Education' => 'Create forms for educational needs like assignments or feedback.',
                'Employment' => 'Simplify hiring processes with detailed employment form templates.',
                'Enrollment' => 'Collect enrollment details easily for events, classes, or programs.',
                'Estimate' => 'Generate and collect estimates with customizable estimate forms.',
                'Evaluation' => 'Create effective evaluation forms to gather detailed insights.',
                'Event' => 'Organize events smoothly with specialized event forms.',
                'Event registration' => 'Manage registrations effortlessly with dedicated event forms.',
                'Feedback' => 'Gather actionable feedback with simple, effective forms.',
                'File upload' => 'Enable easy file submissions with secure file upload forms.',
                'Healthcare' => 'Simplify patient data collection with healthcare-focused forms.',
                'Human Resource' => 'Streamline HR processes with ready-to-use HR form templates.',
                'IT' => 'Manage IT requests and issues effectively with customized forms.',
                'Job application' => 'Simplify hiring with professional job application form templates.',
                'Lead generation' => 'Capture leads efficiently with high-performing lead generation forms.',
                'Marketing' => 'Create impactful marketing forms to boost engagement.',
                'Membership' => 'Streamline signups with easy-to-use membership forms.',
                'Order' => 'Facilitate hassle-free orders with dedicated order forms.',
                'Other' => 'Design custom forms for unique needs and purposes.',
                'Payment' => 'Collect payments securely with integrated payment forms.',
                'Photography' => 'Simplify photography bookings with professional forms.',
                'Quote' => 'Streamline quote requests with detailed quote form templates.',
                'Registration' => 'Make registrations simple and efficient with pre-built forms.',
                'Rental application' => 'Simplify rental applications with easy-to-use templates.',
                'Report' => 'Collect detailed reports effectively with structured form templates.',
                'Request' => 'Streamline request management with customized request forms.',
                'Signup' => 'Create seamless signup forms for any purpose.',
                'Sponsorship' => 'Secure sponsorships with professional sponsorship forms.',
                'Subscription' => 'Manage subscriptions effortlessly with user-friendly forms.',
                'Web design' => 'Collect design requirements efficiently with web design forms.',
            ],
            'survey' => [
                'Business' => 'Gather valuable insights with customizable business surveys.',
                'Concept testing' => 'Test new ideas with targeted concept testing surveys.',
                'Customer satisfaction' => 'Measure customer happiness with satisfaction survey templates.',
                'Customer success' => 'Track success metrics with customer-focused surveys.',
                'Employee engagement' => 'Boost workplace engagement with insightful employee surveys.',
                'Employee satisfaction' => 'Ensure a happy workforce with detailed satisfaction surveys.',
                'Evaluation' => 'Collect actionable evaluations with professional survey templates.',
                'Event' => 'Get feedback and insights from event participants easily.',
                'Feedback' => 'Capture detailed opinions with versatile feedback surveys.',
                'Healthcare' => 'Gather patient insights with healthcare-specific surveys.',
                'Human Resource' => 'Enhance HR strategies with insightful surveys.',
                'Market research' => 'Understand markets better with targeted research surveys.',
                'Marketing' => 'Improve campaigns with data-driven marketing surveys.',
                'Nonprofit' => 'Measure nonprofit impact with tailored survey templates.',
                'Other' => 'Create custom surveys for unique purposes.',
                'Performance review' => 'Evaluate performance efficiently with structured surveys.',
                'Product' => 'Enhance product development with detailed feedback surveys.',
                'School' => 'Collect educational insights with school-specific surveys.',
                'Social' => 'Understand social trends with effective survey forms.',
                'Technology' => 'Gather tech-focused feedback with specialized surveys.',
                'Training and onboarding' => 'Optimize onboarding with training-focused surveys.',
            ],
            'quiz' => [
                'Lead generation' => 'Attract leads with engaging quiz templates.',
                'Marketing' => 'Boost engagement with interactive marketing quizzes.',
                'Popular' => 'Discover top-rated quizzes for maximum engagement.',
                'Product recommendation' => 'Guide users with personalized product recommendation quizzes.',
            ],
        ]        
    ],
];