<?php
    session_start();
    include('assets/include/config.php');//get configuration file
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye- Health Care &amp; Medical template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Health Care Medical Html5 Template" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

    <!-- theme meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- 
  Essential stylesheets
  =====================================-->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link
      rel="stylesheet"
      href="plugins/slick-carousel/slick/slick-theme.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
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
              <span class="text-white">Testimonials</span>
              <h1 class="text-capitalize mb-5 text-lg">What They Say About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="section-title">
              <h2 class="mb-4">Real Stories, Real People</h2>
              <div class="divider my-4"></div>
              <p>Read and watch what our valued patients have to say about their experiences with CityEye Hospital.</p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6 testimonial-wrap offset-lg-6">

            <!-- Video Testimony 1 -->
            <div class="testimonial-block">
              <div class="client-info">
                <h4>Life-Changing Experience</h4>
                <span>Emily Johnson</span>
              </div>
              <p>
                "CityEye Hospital transformed my life. Watch my journey and experience with the amazing team."
              </p>
              <iframe width="100%" height="215" src="https://www.youtube.com/embed/4wZgAhaGGOs" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Text Testimony 1 -->
            <div class="testimonial-block">
              <div class="client-info">
                <h4>Great Service!</h4>
                <span>John Doe</span>
              </div>
              <p>
                "I received great service at CityEye Hospital. The staff is caring and professional. Highly recommended!"
              </p>
            </div>

            <!-- Video Testimony 2 -->
            <div class="testimonial-block">
              <div class="client-info">
                <h4>Grateful for the Care</h4>
                <span>David Smith</span>
              </div>
              <p>
                "I am forever grateful for the care I received at CityEye Hospital. Watch my story."
              </p>
              <iframe width="100%" height="215" src="https://www.youtube.com/embed/4wZgAhaGGOs" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Text Testimony 2 -->
            <div class="testimonial-block">
              <div class="client-info">
                <h4>Amazing Team!</h4>
                <span>Jane Doe</span>
              </div>
              <p>
                "The team at CityEye Hospital is amazing. They provided excellent care and support throughout my treatment."
              </p>
            </div>

            <!-- Add more video and text testimonial blocks as needed -->

          </div>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
    <?php include("assets/include/footer.php"); // Include footer file ?>
    <!-- End Footer Section -->

    <!-- 
    Essential Scripts
    =====================================-->
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
