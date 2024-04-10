<x-layout>

    <head>
        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye- Health Care &amp; Medical template</title>

        <!-- Mobile Specific Metas
  ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Health Care Medical Html5 Template" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- theme meta -->
        <meta name="theme-name" content="CityEye" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!--
  Essential stylesheets
  =====================================-->
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
                            <span class="text-white">Testimonials</span>
                            <h1 class="text-capitalize mb-5 text-lg">What They Say About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="section-title">
                            <h2 class="mb-4">Real Stories, Real People</h2>
                            <div class="divider my-4"></div>
                            <p>Read and watch what our valued patients have to say about their experiences with CityEye
                                Hospital.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 testimonial-wrap offset-lg-6">
                        @foreach ($testimonials as $test)
                            <!-- Text Testimony 1 -->
                            <div class="testimonial-block">
                                <div class="client-info">
                                    <h4>{{ $test->title }}</h4>
                                    <span>{{ $test->subtitle }}</span>
                                </div>
                                <p>
                                    "{{ $test->description }}"
                                </p>
                            </div>
                        @endforeach


                        <!-- Add more video and text testimonial blocks as needed -->

                    </div>
                </div>
            </div>
        </section>

        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>

    </body>
</x-layout>
