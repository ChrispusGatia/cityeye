<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>City Eye Hospital - Gallery</title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Explore the gallery of City Eye Hospital." />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />
    <meta name="author" content="City Eye Hospital" />
    <meta
        name="generator"
        content="City Eye Hospital Gallery Page v1.0"
    />

    <!-- theme meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Essential stylesheets -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link
        rel="stylesheet"
        href="plugins/slick-carousel/slick/slick-theme.css"
    />

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

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
    <?php include("assets/include/header.php"); // Include header file ?>
    <!-- End Header Section -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Gallery</span>
                        <h1 class="text-capitalize mb-5 text-lg">Explore Eye Hospital Moments</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Gallery Cards -->
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a href="images/gallery/img-1.jpg" class="gallery-image" title="Gallery Image 1">
                            <img src="images/gallery/img-1.jpg" alt="Gallery Image 1">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a href="images/gallery/img-2.jpg" class="gallery-image" title="Gallery Image 2">
                            <img src="images/gallery/img-2.jpg" alt="Gallery Image 2">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a href="images/gallery/img-1.jpg" class="gallery-image" title="Gallery Image 3">
                            <img src="images/gallery/img-1.jpg" alt="Gallery Image 3">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a href="images/gallery/img-2.jpg" class="gallery-image" title="Gallery Image 4">
                            <img src="images/gallery/img-2.jpg" alt="Gallery Image 4">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a href="images/gallery/img-2.jpg" class="gallery-image" title="Gallery Image 5">
                            <img src="images/gallery/img-2.jpg" alt="Gallery Image 5">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-card">
                        <a href="images/gallery/img-2.jpg" class="gallery-image" title="Gallery Image 6">
                            <img src="images/gallery/img-2.jpg" alt="Gallery Image 6">
                        </a>
                    </div>
                </div>

                <!-- Add more gallery cards as needed -->

            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Footer Section -->
    <?php include("assets/include/footer.php"); // Include footer file ?>
    <!-- End Footer Section -->

    <!-- Essential Scripts -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <!-- Custom Script -->
    <script src="js/script.js"></script>

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

</html>
