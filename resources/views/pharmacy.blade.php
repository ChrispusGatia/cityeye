<x-layout>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye - Pharmacy</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CityEye Pharmacy Page" />
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
    <style>
        .page-title {
            background-image: url('/images/pharmacy-bg.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 100px 0;
        }
        
        .page-title .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        
        .text-white {
            color: #fff !important;
        }
        
        .department-service li {
            margin-bottom: 10px;
            font-size: 1.1em;
            color: #555;
        }
        
        .btn-main-2 {
            background: #007bff;
            color: #fff;
            border-radius: 50px;
            padding: 10px 20px;
            transition: background 0.3s;
        }
        
        .btn-main-2:hover {
            background: #0056b3;
        }
        
        .schedule-widget {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-contatct-info h3 {
            color: #007bff;
        }
        
        .img-fluid {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body id="top">

    <!-- Header Start -->
    <!-- Header End -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our Pharmacy</span>
                        <h1 class="text-capitalize mb-5 text-lg">CityEye Pharmacy</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pharmacy">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="department-content mt-5">
                        <h1 class="text-md">Welcome to CityEye Pharmacy</h1>
                        <div class="divider my-4"></div>
                        <p>At CityEye Pharmacy, we provide a comprehensive range of pharmaceutical services and products to meet your healthcare needs. Our experienced pharmacists are here to offer you personalized advice and support.</p>

                        <h3 class="mt-5 mb-4">Our Services Include:</h3>
                        <div class="divider my-4"></div>
                        <ul class="list-unstyled department-service">
                            <li><i class="icofont-check mr-2"></i>Prescription Dispensing</li>
                            <li><i class="icofont-check mr-2"></i>Over-the-Counter Medications</li>
                            <li><i class="icofont-check mr-2"></i>Health and Wellness Products</li>
                            <li><i class="icofont-check mr-2"></i>Medication Counseling</li>
                            <li><i class="icofont-check mr-2"></i>Vaccination Services</li>
                            <li><i class="icofont-check mr-2"></i>Home Delivery of Medications</li>
                        </ul>

                        <a href="/contact" class="btn btn-main-2 btn-round-full">Contact Us <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget schedule-widget mt-5">
                        <h5 class="mb-4">Operating Hours</h5>

                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Monday - Friday</span>
                                <span>7:30 AM - 5:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Saturday</span>
                                <span>8:00 AM - 12:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Sunday</span>
                                <span>Closed</span>
                            </li>
                        </ul>

                        <div class="sidebar-contatct-info mt-4">
                            <p class="mb-0">Need Assistance?</p>
                            <h3>+254(0)111 032 200</h3>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mt-5 mb-4 text-center">Our Pharmacy Gallery</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="images/pharmacy1.jpg" alt="Pharmacy Image 1" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="images/pharmacy2.jpg" alt="Pharmacy Image 2" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="images/pharmacy3.jpg" alt="Pharmacy Image 3" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Essential Scripts -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>

</x-layout>
