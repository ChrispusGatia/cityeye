<?php
    session_start();
    include('assets/include/config.php'); // get configuration file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye - Optical Shop</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CityEye - Your Vision, Our Passion" />
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
    <!-- header Start -->
    <?php include("assets/include/header.php"); // get header file?>
    <!-- header End -->

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
                        <h2 class="mb-4">Enhancing Vision, Transforming Lives</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Discover your perfect eyewear at CityEye's Optical Shop, 
                          situated at our Main Hospital on Ngong Road, opposite Traffic Police Station in Nairobi. 
                          Open Monday to Friday, 8 am to 4 pm. Elevate your style and vision with our curated collections of eyeglasses.
                          Visit us today for a personalized eyewear experience.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 feature-item">
                        <img src="images/optical/optic-2.jpg" alt="Eye Glasses" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Eye Glasses</h4>
                            <p class="mb-4">Explore a wide range of stylish and functional eyeglasses to enhance your vision and style.</p>
                            <a href="service.php" class="btn btn-main btn-round-full">View Collection<i class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 feature-item">
                        <img src="images/optical/lens.png" alt="Lenses" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Lenses</h4>
                            <p class="mb-4">Discover a variety of high-quality lenses designed to cater to different visual needs.</p>
                            <a href="service.php" class="btn btn-main btn-round-full">Explore More<i class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 feature-item">
                        <img src="images/optical/optic-6.jpg" alt="Eye Frames" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Eye Frames</h4>
                            <p class="mb-4">Choose from our stylish collection of eye frames that blend fashion and comfort seamlessly.</p>
                            <a href="service.php" class="btn btn-main btn-round-full">Explore Designs<i class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 feature-item">
                        <img src="images/optical/optic-4.jpg" alt="Sunglasses" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Sunglasses</h4>
                            <p class="mb-4">Discover trendy and protective sunglasses that complement your style and shield your eyes.</p>
                            <a href="service.php" class="btn btn-main btn-round-full">Check Styles<i class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 feature-item">
                        <img src="images/optical/optic-1.jpg" alt="Accessories" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Accessories</h4>
                            <p class="mb-4">Enhance your eyewear experience with our range of stylish and functional accessories.</p>
                            <a href="service.php" class="btn btn-main btn-round-full">View Accessories<i class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5 feature-item">
                        <img src="images/optical/glazzing.png" alt="In-Housing Glazing" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">In-Housing Glazing</h4>
                            <p class="mb-4">Experience precise and efficient in-housing glazing services for your eyewear needs.</p>
                            <a href="service.php" class="btn btn-main btn-round-full">Learn More<i class="icofont-simple-right ml-3"></i></a>
                        </div>
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
                        <h2 class="mb-5 text-lg">Find the perfect eyewear that suits your style and vision.</h2>
                        <a href="#contact" class="btn btn-main-2 btn-round-full">Contact Us<i class="icofont-simple-right ml-2"></i></a>
                        <p class="mt-3"><strong>Call us:</strong> +254 (0) 707 777 707</p>
                        <p><strong>Email:</strong> info@cityeyeoptical.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer Start -->
    <?php include("assets/include/footer.php"); // get footer file?>
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
</html>
