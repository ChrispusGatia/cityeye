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
    <title>CityEye Hospital - Directions & Locations</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CityEye Hospital - Find Us Easily" />
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

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
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
              <span class="text-white">Directions & Locations</span>
              <h1 class="text-capitalize mb-5 text-lg">Visit Us Easily</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section map-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- Google Map -->
            <div id="map" style="height: 500px;"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section contact-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="title-color">Our Address</h2>
            <p>CityEye Hospital, Ta-134/A, New York, USA</p>
          </div>
          <div class="col-lg-4">
            <h2 class="title-color">Contact Information</h2>
            <p>Email: <a href="mailto:info@cityeye.com">info@CityEye.com</a></p>
            <p>Phone: <a href="tel:+23-456-6588">+23-456-6588</a></p>
          </div>
          <div class="col-lg-4">
            <h2 class="title-color">Working Hours</h2>
            <p>Mon to Fri: 08:30 AM - 06:00 PM</p>
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

    <!-- Google Map Script -->
    <script>
      function initMap() {
        var mapOptions = {
          center: new google.maps.LatLng(40.7128, -74.0060), // Update with the hospital's coordinates
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        // Marker for the hospital's location
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(40.7128, -74.0060), // Update with the hospital's coordinates
          map: map,
          title: "CityEye Hospital"
        });
      }
    </script>

    <script src="js/script.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap">
    </script>
  </body>
</html>
