<?php
session_start();
include('assets/include/config.php'); // Get configuration file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye- Our History</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Explore the rich history of CityEye Hospital" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

    <!-- Theme Meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Essential stylesheets =====================================-->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/our-history.css" /> <!-- Custom styles for Our History page -->
</head>

<body id="top">

    <!-- Header Start -->
    <?php include("assets/include/header.php"); // Get header file?>
    <!-- Header End -->

    <!-- Page Title Section -->
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our History</span>
                        <h1 class="text-capitalize mb-5 text-lg">Embarking on a Visionary Journey</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Our History -->
    <section class="section our-history">
        <div class="container">
            <div class="row">
                <!-- Yearly Features -->
                <div class="col-md-6">
                    <div class="feature-item mb-4">
                        <div class="year-icon">
                            <i class="far fa-clock"></i>
                            <p>Since 1970</p>
                        </div>
                        <h4>Decades of Excellence</h4>
                        <p>Delivering excellence in healthcare, setting a standard for quality and compassion.</p>
                    </div>

                    <div class="feature-item mb-4">
                        <div class="year-icon">
                            <i class="far fa-calendar-alt"></i>
                            <p>Established in 1985</p>
                        </div>
                        <h4>Years of Compassionate Care</h4>
                        <p>Commitment to compassionate care has been unwavering, ensuring the well-being of our community.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feature-item mb-4">
                        <div class="year-icon">
                            <i class="far fa-gem"></i>
                            <p>Since 1998</p>
                        </div>
                        <h4>A Legacy of Innovation</h4>
                        <p>Journey includes a legacy of innovation, always pushing boundaries to provide cutting-edge healthcare solutions.</p>
                    </div>

                    <div class="feature-item mb-4">
                        <div class="year-icon">
                            <i class="far fa-heart"></i>
                            <p>Since 1990</p>
                        </div>
                        <h4>Years of Trusted Expertise</h4>
                        <p>Over 30 years of trusted expertise, continuing to lead in medical advancements and patient care.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include("assets/include/footer.php"); // Get footer file?>
    <!-- Footer End -->

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
