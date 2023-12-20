<?php
    session_start();
    include('assets/include/config.php'); // get configuration file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye- FAQ</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CityEye Frequently Asked Questions" />
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
    <!-- header Start -->
    <?php include("assets/include/header.php"); // get header file ?>
    <!-- header End -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Frequently Asked Questions</span>
                        <h1 class="text-capitalize mb-5 text-lg">FAQ</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section faq-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title -->
                    <div class="section-title text-center">
                        <h2 class="mb-4">Explore Our FAQs</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Explore City Eye Hospital's FAQs for answers to common queries about 
                          our practice, facilities, and medical services. If your question isn't covered,
                          feel free to contact us for personalized assistance in maintaining healthy eye
                          care and vision.</p> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="accordion" id="faqAccordion">
                        <!-- Question 1 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        1.  Do you have branches outside Nairobi?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                              <p>Yes, City Eye Hospital has several branches, each strategically located for your convenience:</p>
                              <ol>
                                <li><strong>Main Hospital:</strong> Located at Ngong Road, opposite Police Traffic, Nairobi.</li>
                                <li><strong>Nyeri Hospital:</strong> Situated at Asian Quarters, Mbuni Road, Nyeri.</li>
                                <li><strong>Appointment Clinic:</strong> Found at Upper Hill Medical Centre (3rd Floor), Nairobi.</li>
                                <li><strong>Vision Center:</strong> Located at Milele Mall, Ngong Town, Kajiado County.</li>
                              </ol>
                              <p>These locations ensure accessibility and comprehensive eye care services for our valued patients.</p>
                            </div>

                            </div>
                        </div>


                        <!-- Question 2 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. What areas does City Eye Hospital specialize in?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                <div class="card-body">
                                With specialised ophthalmologists, optometrists, licensed opticians and highly trained staff,
                                we provide an extensive range of medical services. Our range of specialities include:
                                <ul>
                                <li>Retina specialist</li>
                                <li>Corneal specialist</li> 
                                <li>Paediatric specialist</li> 
                                <li>Oculoplastic specialist</li> 
                                <li>LASIK consultations</li> 
                                <li>Optical consultations and eyeglass</li> 
                                </u> 
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. What areas does City Eye Hospital specialize in?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                <div class="card-body">
                                <!--answer 3 -->
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        4. What areas does City Eye Hospital specialize in?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                <div class="card-body">
                                <!--answer 3 -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer Start -->
    <?php include ("assets/include/footer.php"); // get footer file?>
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
</html>
