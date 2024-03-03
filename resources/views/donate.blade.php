<x-layout>

    <head>
        <!-- Basic Page Needs==================================================-->
        <meta charset="utf-8" />
        <title>CityEye- Donate</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="City Eye Foundation - Delivering Health & Hope" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- Theme Meta -->
        <meta name="theme-name" content="CityEye" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential Stylesheets =====================================-->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />

        <!-- Custom Styles for Donation Page -->
        <style>
            .donation-form {
                background: #f9f9f9;
                padding: 30px;
                border-radius: 10px;
            }

            .donation-method {
                margin-bottom: 20px;
            }

            .donation-method img {
                max-width: 50px;
                margin-right: 10px;
            }

            .paypal-image {
                max-width: 100%;
                border-radius: 5px;
            }
        </style>
    </head>

    <body id="top">


        <!-- Page Title Section -->
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Support City Eye Hospital</span>
                            <h1 class="text-capitalize mb-5 text-lg">Donate</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Support Us Section -->
        <section class="section about-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="mb-4">Support Visionary Causes with Your Generosity</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>Explore City Eye Hospital's FAQs for answers to common queries about our practice,
                                facilities, and medical services. If your question isn't covered, feel free to contact
                                us
                                for personalized assistance in maintaining healthy eye care and vision.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="subtitle-color mb-3">Why Donate?</h3>
                        <p class="mb-4">Your donation helps us continue our mission to provide quality eye care. Watch
                            the
                            video below to learn more about how your support can make a difference.</p>
                        <!-- Embed a YouTube video here -->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/gDw6yv4m_Rc"
                            frameborder="0" allowfullscreen></iframe>
                    </div>


                    <div class="col-lg-6">
                        <div class="donation-form">
                            <h3 class="subtitle-color mb-3">Make a Donation</h3>

                            <!-- Mpesa Donation Form -->
                            <div class="donation-method">
                                <p>Support us through M-Pesa. Your contribution makes a difference!</p>
                                <img src="images/service/mpesa.jpg" alt="Mpesa">
                                <p><strong>M-Pesa Till Number: 639646</strong></p>
                                <!-- Add Mpesa donation form elements here if needed -->
                            </div>
                            <div style="text-align: center;">
                                <p>OR</p>
                            </div>


                            <!-- Bank Donation Form -->
                            <div class="donation-method">
                                <p>Your support through bank transfer is greatly appreciated!</p>
                                <img src="images/service/bank.png" alt="Bank">
                                <p><strong>Bank Details:</strong></p>
                                <ul>
                                    <li>CFC Stanbic Bank</li>
                                    <li>Upper Hill Branch</li>
                                    <li>Account Number: 0100002932247</li>
                                </ul>
                            </div>

                            <!-- PayPal Donation Form
            <div class="donation-method">
              <form>
                <label for="paypal-email">PayPal Email:</label>
                <input type="email" id="paypal-email" name="paypal-email" class="form-control" required>
                <!-- Add other PayPal form elements here
                <button type="submit" class="btn btn-primary mt-3">Donate via PayPal</button>
              </form>
            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>
    </body>

</x-layout>
