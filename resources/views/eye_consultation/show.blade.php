<x-layout>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>City Eye - Our services </title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Medical Outpatient Clinic - YourClinic" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="YourClinic Team" />

        <!-- theme meta ================================================== -->
        <meta name="theme-name" content="YourClinic" />

        <!-- Favicon ================================================== -->

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

    <body id="top"></body>

    </html>


    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our services</span>
                        <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                    <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="list-inline-item"><span class="text-white">/</span></li>
                    <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
                  </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-2">
        <div class="container">
            <div class="row">
                @foreach ($contents as $card)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-block mb-5">
                            <img src="{{ asset($card->image) }}" alt="" class="img-fluid">
                            <div class="content">
                                <h4 class="mt-4 mb-2 title-color">{{ $card->title }}</h4>
                                <p class="mb-4">{{ $card->description }}</p>
                            </div>
                            <a href="/{{ $card->link }}" class="btn btn-main btn-round-full">Read More<i
                                    class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>




            </div>
        </div>
    </section>

    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg">Discover top-notch eye care services tailored to your needs.</h2>
                        <a href="contact" class="btn btn-main-2 btn-round-full">Contact Us<i
                                class="icofont-simple-right ml-2"></i></a>
                        <p class="mt-3"><strong>Call us:</strong> +254 (0) 707 777 707</p>
                        <p><strong>Email:</strong> info@cityeyeoptical.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer Start -->

    <!-- footer End -->



    <!--
            Essential Scripts
            =====================================-->
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
