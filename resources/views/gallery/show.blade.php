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
