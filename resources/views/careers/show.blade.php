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
                            <span class="text-white">Careers</span>
                            <h1 class="text-capitalize mb-5 text-lg">Join Our Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section careers-listing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Careers Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">Explore our opportunities!</h2>
                            <div class="divider mx-auto my-4"></div>
                            <!-- Privacy Policy Link -->
                            <p class="mb-0">
                                Before applying, please read <a href="gdprstatement" class="text-primary">Our Privacy &
                                    GDPR Statement</a>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-color mb-4 text-center">Current Job Openings</h3>
                    </div>
                </div>

                <!-- Improved Job Listings (Card-based and Side-by-Side) -->
                <div class="container">
                    @php $count = 0 @endphp
                    @foreach ($careers as $career)
                        @if ($count % 2 == 0)
                            <div class="row">
                        @endif
                        <div class="col-lg-6">
                            <div class="feature-item mb-4">
                                <div class="job-item">
                                    <h3>{{ $career->title }}</h3>
                                    <p>{!! $career->description !!}</p>
                                    <a href="{{ $career->apply_link }}" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        @php $count++ @endphp
                        @if ($count % 2 == 0 || $loop->last)
                </div>
                @endif
                @endforeach
            </div>

        </section>

        <!-- Footer Start -->

        <!-- Footer End -->

        <!-- Essential Scripts =====================================-->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>

    </body>
</x-layout>
