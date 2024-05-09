<x-layout>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - Careers</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Careers Page" />
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
    </head>

    <body id="top">

        <!-- header Start -->
        <!-- header End -->

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Privacy Policy</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section privacy-policy">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-title">
                            <h2>{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <!-- Your detailed and well-formatted privacy policy content here -->
                            <div class="feature-item mb-4">
                                {!! $body_description !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature-like card structure for Privacy Policy content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="faqAccordion">
                            <div class="feature-item mb-4">
                        
                                <!-- Section 1 -->
                                @foreach ($card_section as $index => $content)
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $index }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapse{{ $index }}"
                                                    aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                    {{ $content->card_title }}
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}"
                                            data-parent="#faqAccordion">
                                            <div class="card-body">
                                                {!! $content->card_description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        
                            </div>
                        </div>
                        

                            <!-- Read More hyperlink -->
                            <div class="text-center">
                                <p>Effective October 25, 2023 </p>
                            </div>

                            <!-- End of Privacy Policy content -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</x-layout>
