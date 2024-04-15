<x-layout>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - History</title>

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


        <!-- Page Title Section -->
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Our History</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Our History -->
        <section class="section our-history">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Yearly Features -->
                    @foreach ($card_section as $key => $content)
                        @if ($key % 2 == 0)
                </div>
                <div class="row">
                    @endif
                    <div class="col-md-6">
                        <div class="feature-item mb-4">
                            <div class="year-icon">
                                <i class="far fa-clock"></i>
                                <p style="font-size:24px">{{ $content->date }}</p>
                            </div>
                            {!! $content->card_description !!}
                        </div>
                    </div>
                    @endforeach
                </div>

        </section>
        <!-- Essential Scripts =====================================-->
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
