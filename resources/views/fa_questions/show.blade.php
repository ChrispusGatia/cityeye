<x-layout>
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>City Eye Hospital - FAQ</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Frequently Asked Questions - CityEye" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- theme meta -->
        <meta name="theme-name" content="CityEye" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential stylesheets =====================================-->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />

        <!-- Custom CSS for Left Alignment on Mobile -->
        <style>
            @media (max-width: 767.98px) {
                .faq-question {
                    text-align: left;
                }
            }
        </style>

        <!-- Secure HTTP Headers -->
        <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:;">
        <meta http-equiv="X-Content-Type-Options" content="nosniff">
        <meta http-equiv="X-Frame-Options" content="DENY">
        <meta http-equiv="X-XSS-Protection" content="1; mode=block">

        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                @foreach ($card_section as $key => $content)
                {
                    "@type": "Question",
                    "name": "{{ addslashes($content->card_title) }}",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "{{ addslashes(strip_tags($content->card_description)) }}"
                    }
                } @if (!$loop->last) , @endif
                @endforeach
            ]
        }
        </script>
    </head>

    <body id="top">
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Frequently Asked Questions</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ addslashes($title) }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ addslashes($body_title) }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            {!! strip_tags($body_description, '<p><a><b><i><ul><ol><li><strong><em><br>') !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="accordion" id="faqAccordion">
                            <!-- Question sections -->
                            @foreach ($card_section as $key => $content)
                                <div class="card">
                                    <div class="card-header faq-question" id="faq{{ $key }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse{{ $key }}" aria-expanded="false"
                                                aria-controls="collapse{{ $key }}">
                                                {{ addslashes($content->card_title) }}
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse"
                                        aria-labelledby="faq{{ $key }}" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            {!! strip_tags($content->card_description, '<p><a><b><i><ul><ol><li><strong><em><br>') !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap JavaScript -->
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
    </body>
</x-layout>
