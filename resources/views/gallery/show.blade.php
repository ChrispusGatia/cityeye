<x-layout>

    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8" />
        <title>CityEye - Gallery</title>

        <!-- Mobile Specific Metas -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Gallery Page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential Stylesheets -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />
        <link rel="stylesheet" href="css/style.css" />

        <!-- Magnific Popup CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

        <!-- Custom Gallery Styles -->
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

    <body id="top">

        <!-- Header Section -->
        <!-- End Header Section -->

        <!-- Page Title Section -->
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Gallery</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title Section -->

        <!-- Gallery Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    @foreach ($card_section as $content)
                        <div class="col-lg-4">
                            <div class="gallery-card">
                                <a href="{{ asset($content->card_image) }}" class="gallery-image"
                                    title="Gallery Image {{ $loop->index + 1 }}">
                                    <img src="{{ asset($content->card_image) }}" alt="Gallery Image {{ $loop->index + 1 }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- Magnific Popup Initialization Script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.gallery-image').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true,
                        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                        tPrev: 'Previous (Left arrow key)',
                        tNext: 'Next (Right arrow key)',
                        tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
                    },
                    callbacks: {
                        buildControls: function() {
                            this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                        }
                    }
                });
            });
        </script>
        <!-- End Magnific Popup Initialization Script -->

        <!-- Scroll to Top Button -->
        <div class="col-lg-4">
            <a class="backtop scroll-top-to" href="#top">
                <i class="icofont-long-arrow-up"></i>
            </a>
        </div>
        <!-- End Scroll to Top Button -->

    </body>

</x-layout>
