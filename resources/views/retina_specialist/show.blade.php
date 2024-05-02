<x-layout>

    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8" />
        <title>City Eye - General Ophthalmology</title>

        <!-- Mobile Specific Metas -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="City Eye - General Ophthalmology Services" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="YourClinic Team" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential stylesheets -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />
        <link rel="stylesheet" href="css/style.css" />

        <!-- Page-specific styles -->
        <style>
            /* Custom styles for service details */
            .service-header {
                text-align: center;
                padding: 100px 0;
                background-color: #f8f9fa;
            }

            .service-header img {
                max-width: 100%;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .service-description {
                padding: 40px 0;
            }

            .service-description h2 {
                font-size: 28px;
                color: #333;
            }

            .service-description p {
                font-size: 16px;
                line-height: 1.6;
                color: #666;
            }

            .service-navigation {
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                background-color: #fff;
                margin-bottom: 20px;
            }

            .service-navigation h3 {
                font-size: 20px;
                color: #333;
                margin-bottom: 15px;
            }

            .service-navigation ul {
                list-style: none;
                padding-left: 0;
            }

            .service-navigation li {
                margin-bottom: 10px;
                border-bottom: 1px solid #ddd;
                /* Add border bottom to each list item */
                padding-bottom: 5px;
                /* Optional: Add padding for spacing */
            }

            .service-navigation a {
                color: #223a66;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .service-navigation a:hover {
                color: #e12454;
                text-decoration: none;
            }

            .contact-card {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .contact-card h3 {
                font-size: 20px;
                color: #333;
                margin-bottom: 15px;
            }

            .divider {
                border-top: 1px solid #ccc;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .btn-main-2 {
                background-color: #e12454;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                display: inline-block;
                transition: background-color 0.3s ease;
            }

            .btn-main-2:hover {
                background-color: #c81e47;
            }
        </style>
    </head>

    <body id="top">

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Our Services</span>
                            <h1 class="text-capitalize mb-5 text-lg">Retina Clinic and Surgery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="service-navigation">
                            <h3>All Services</h3>
                            <div class="divider my-4"></div>
                            <ul>
                                <li><a href="/eye">General Ophthalmology<i class="icofont-simple-right ml-2"></i></a>
                                </li>
                                <li><a href="cataract_surgery">Cataract Surgery<i
                                            class="icofont-simple-right ml-2"></i></a></li>
                                <li><a href="/eye_surgery">Corneal Clinic and Transplant<i
                                            class="icofont-simple-right ml-2"></i></a></li>
                                <li><a href="/services_gmd">Glaucoma Clinic and Surgery<i
                                            class="icofont-simple-right ml-2"></i></a></li>
                                <li><a href="/retina_specialist">Retina Clinic and Surgery<i
                                            class="icofont-simple-right ml-2"></i></a></li>
                                <li><a href="/opticalshop">Optical Shop<i class="icofont-simple-right ml-2"></i></a>
                                </li>
                                <li><a href="/outreach">Outreach Program<i class="icofont-simple-right ml-2"></i></a>
                                </li>
                                <!-- Add more services here -->
                            </ul>
                        </div>
                        <div class="contact-card">
                            <h3>Contact Us</h3>
                            <p><strong>Call:</strong> +254 (0) 707 777 707</p>
                            <p><strong>Email:</strong> info@cityeyehospital.or.ke</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="general-ophthalmology" class="service-description">
                            <h2>{{ $title }}</h2>
                            <div class="divider my-4"></div>
                            <p>{{ $description }}</p>
                            <p>Our Services Include:</p>
                            <ul>
                                <li>Comprehensive eye exams</li>
                                <li>Diagnosis and treatment of eye diseases</li>
                                <li>Glasses and contact lens prescriptions</li>
                                <li>Management of common eye conditions</li>
                                <!-- Add more services here -->
                            </ul>
                            <a href="/all-services" class="btn btn-main-2 btn-round-full">Explore Our Services <i
                                    class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <!-- Include your footer section here -->

        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>
        <script src="js/script.js"></script>

    </body>
</x-layout>
