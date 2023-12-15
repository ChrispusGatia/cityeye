<?php
    session_start();
    include('assets/include/config.php'); // get configuration file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye - Board of Management</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CityEye Hospital - Board of Management" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

    <!-- theme meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Essential stylesheets ===================================== -->
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
                        <span class="text-white">About Us>Board of Management</span>
                        <h1 class="text-capitalize mb-5 text-lg">Board of Management</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section doctors">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Meet Our Board Members</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Get to know the dedicated individuals who lead CityEye Hospital towards excellence in healthcare.</p>
                    </div>
                </div>
            </div>

            <div class="row shuffle-wrapper">
                <!-- Board Member 1 -->
                <div class="col-lg-4 col-sm-6 mb-4 shuffle-item">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="images/team/3.jpg" alt="board-member-image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="content mt-3">
                            <h4 class="mb-0">John Doe</h4>
                            <p>Chairman</p>
                            <p>John Doe leads our board with a vision for providing top-notch healthcare services to our community.</p>
                            <ul class="list-unstyled social-icons">
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Board Member 2 -->
                <div class="col-lg-4 col-sm-6 mb-4 shuffle-item">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="images/team/2.jpg" alt="board-member-image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="content mt-3">
                            <h4 class="mb-0">Jane Smith</h4>
                            <p>Vice Chairman</p>
                            <p>Jane Smith brings years of experience in healthcare management and is dedicated to improving patient care.</p>
                            <ul class="list-unstyled social-icons">
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Board Member 3 -->
                <div class="col-lg-4 col-sm-6 mb-4 shuffle-item">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="images/team/1.jpg" alt="board-member-image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="content mt-3">
                            <h4 class="mb-0">Robert Johnson</h4>
                            <p>Finance Director</p>
                            <p>Robert Johnson oversees the financial aspects of CityEye Hospital, ensuring sustainability and growth.</p>
                            <ul class="list-unstyled social-icons">
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Add more board members as needed -->

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
