<x-layout>

    <head>
        <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye Hospital - Patient Feedback</title>

        <!-- Mobile Specific Metas
    ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Patient Feedback" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- theme meta -->
        <meta name="theme-name" content="CityEye" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential stylesheets -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body id="top">

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Patient Feedback</span>
                            <h1 class="text-capitalize mb-5 text-lg">Share Your Experience</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="section feedback-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                     
                    <div class="section-title text-center">
                        <h2 class="mb-4">We Value Your Feedback</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Share your experience with City Eye Hospital. Your feedback is important to us!</p>
                    </div>

               
                    <form action="submit_feedback" method="post">
                        <div class="form-group">
                            <label for="patientName">Your Name</label>
                            <input type="text" class="form-control" id="patientName" name="patientName" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="feedback">Your Feedback</label>
                            <textarea class="form-control" id="feedback" name="feedback" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </section>-->

        <section class="section feedback-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">We Value Your Feedback</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>Share your experience with City Eye Hospital. Your feedback is important to us!</p>
                        </div>

                        <!-- Google Feedback Form Embed -->
                        <iframe
                            src="https://docs.google.com/forms/d/e/1FAIpQLSc7QcTOTV4y9LrPi2jA_r0io8PdqTaALA3AcLIBQZkfWqYwLQ/viewform"
                            width="100%" height="800" frameborder="0" marginheight="0"
                            marginwidth="0">Loading...</iframe>

                    </div>
                </div>
            </div>
        </section>

        <!-- footer Start -->

        <!-- footer End -->

        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>
    </body>
</x-layout>
