<x-layout>
    @include('_links')

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

        <!-- Section: Who We Are -->
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @foreach ($body_details as $details)
            <section class="section about-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="title-color mb-4">{{ $details->card_title }}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            {!! $details->card_description !!}
                        </div>
                        <div class="col-lg-6">
                            <div class="vision-image">
                                <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/{{ $details->youtube_id }}" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        @endforeach


        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>
    </body>
</x-layout>
