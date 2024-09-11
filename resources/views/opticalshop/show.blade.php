<x-layout>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - Optical Shop</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye - Your Vision, Our Passion" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="keywords" content="City Eye Hospital, optical shop, eye care services, eye glasses, contact lenses, designer eyewear, sunglasses, eye exams , vision testing, eyewear accessories,
         optometrist services, Affordable glasses, Children's eyeglasses, Prescription sunglasses, Lens replacement, Lens coating, Vision correction vision care">
        <meta name="author" content="City Eye Hospital" />
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
                            <span class="text-white">Optical Shop</span>
                            <h1 class="text-capitalize mb-5 text-lg">Your Vision, Our Passion</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section service-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>{{ $description }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($content as $card)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service-block mb-5 feature-item">
                                <img src="{{ asset($card->card_image) }}" alt="board-member-image"
                                    class="img-fluid w-100">
                                <div class="content">
                                    <h4 class="mt-4 mb-2 title-color">{{ $card->subtitle }}</h4>
                                    <p class="mb-4">{{ $card->sub_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

        <section class="section cta-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cta-content">
                            <div class="divider mb-4"></div>
                            <h2 class="mb-5 text-lg">Find the perfect eyewear that suits your style and vision.</h2>
                            <a href="contact" class="btn btn-main-2 btn-round-full">Contact Us<i
                                    class="icofont-simple-right ml-2"></i></a>
                            <p class="mt-3"><strong>Call us:</strong> +254 (0) 707 777 707</p>
                            <p><strong>Email:</strong>info@cityeyehospital.or.ke</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer Start -->

        <!-- footer End -->

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
