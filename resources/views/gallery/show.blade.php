<x-layout>

    <head>

        <!-- Magnific Popup CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />
        <style>
            /* Additional Styles for Gallery Page */
            .gallery-card {
                margin-bottom: 30px;
                overflow: hidden;
            }

            .gallery-card img {
                width: 100%;
                height: auto;
                border-radius: 8px;
                transition: transform 0.3s;
            }

            .gallery-card:hover img {
                transform: scale(1.1);
            }
        </style>
    </head>

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

        <!-- Header Section -->
        <!-- End Header Section -->

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Gallery</span>
                            <h1 class="text-capitalize mb-5 text-lg"> {{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    @foreach ($card_section as $content)
                        <div class="col-lg-4">
                            <div class="gallery-card">
                                <a href="{{ asset($content->card_image) }}" class="gallery-image"
                                    title="Gallery Image 1">
                                    <img src="{{ asset($content->card_image) }}" alt="Gallery Image 1">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Magnific Popup Initialization -->
        <script>
            $(document).ready(function() {
                $('.gallery-image').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    navigateByImgClick: true,
                    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                    tPrev: 'Previous (Left arrow key)',
                    tNext: 'Next (Right arrow key)',
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
                });
            });
        </script>

        <!-- Scroll to Top Button -->
        <div class="col-lg-4">
            <a class="backtop scroll-top-to" href="#top">
                <i class="icofont-long-arrow-up"></i>
            </a>
        </div>
    </body>
</x-layout>
