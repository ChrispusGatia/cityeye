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

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">About Us</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section doctors">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2>{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>{!! $body_description !!}</p>
                        </div>
                    </div>
                </div>

                <div class="row shuffle-wrapper">
                    @foreach ($card_section as $content)
                        <div class="col-lg-4 col-sm-6 mb-4 shuffle-item">
                            <div class="position-relative doctor-inner-box">
                                <div class="doctor-profile">
                                    <div class="doctor-img">
                                        <img src="{{ asset($content->card_image) }}" alt="board-member-image"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="content mt-3">
                                    {!! $content->card_description !!}
                                </div>
                            </div>
                        </div>

                        <!-- Add more board members as needed -->
                    @endforeach
                </div>
            </div>
        </section>
    </body>
</x-layout>
