<?php
    session_start();
    include('assets/include/config.php'); // get configuration file
?>

<!DOCTYPE html>
<html lang="en">
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

    <!-- Header Start -->
    <?php include("assets/include/header.php"); // get header file ?>
    <!-- Header End -->

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
                    <h2 class="title-color mb-4">Current Job Openings</h2>
                </div>
            </div>
            <!-- Improved Job Listings -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="job-listing">
                        <div class="job-item">
                            <h3>Senior Web Developer</h3>
                            <p>Description: We are looking for an experienced web developer to join our dynamic team...</p>
                            <a href="application_form.php" class="btn btn-primary">Apply Now</a>
                        </div>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="job-listing">
                        <div class="job-item">
                            <h3>Senior Web Developer</h3>
                            <p>Description: We are looking for an experienced web developer to join our dynamic team...</p>
                            <a href="application_form.php" class="btn btn-primary">Apply Now</a>
                        </div>
                        <!-- Add more job listings as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include("assets/include/footer.php"); // get footer file ?>
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
</html>
