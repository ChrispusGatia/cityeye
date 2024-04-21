<x-layout>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye Foundation</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="City Eye Foundation - Delivering Health & Hope" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- Theme Meta -->
        <meta name="theme-name" content="CityEye" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential Stylesheets =====================================-->
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
                            <span class="text-white">Our Foundation</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- City Eye Foundation Section -->
        <section class="section city-eye-foundation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $subtitle }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>
                                {{ $description }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Placeholder Image - You can replace this with an actual image related to the foundation -->
                    <div class="col-lg-6">
                        <img src="images/service/cityeye.jpg" alt="City Eye Foundation" class="img-fluid">
                    </div>

                    <div class="col-lg-6">
                        <!-- Foundation Impact Details -->
                        <div class="foundation-impact">
                            {!! $content !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Essential Scripts =====================================-->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <!-- Note: Replace 'YOUR_API_KEY' with your actual Google Maps API key -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>
    </body>
</x-layout>
