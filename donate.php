<?php
  session_start();
  include('assets/include/config.php'); // get configuration file
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>CityEye - Who We Are</title>

  <!-- Mobile Specific Metas -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher CityEye HTML Template v1.0">

  <!-- Theme Meta -->
  <meta name="theme-name" content="CityEye">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">

  <!-- Essential Stylesheets -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Additional Stylesheets for Donation Page -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- Donation Page Styles -->
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
  <!-- Header Start -->
  <?php include("assets/include/header.php"); // get header file ?>
  <!-- Header End -->

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

  <!-- Section: Support Us (Donation Page) -->
  <section class="section about-page">
    <div class="container">
      <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title -->
                    <div class="section-title text-center">
                        <h2 class="mb-4">Support Visionary Causes with Your Generosity</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Explore City Eye Hospital's FAQs for answers to common queries about 
                            our practice, facilities, and medical services. If your question isn't covered,
                            feel free to contact us for personalized assistance in maintaining healthy eye
                            care and vision.</p> 
                    </div>
                </div>
            </div>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="subtitle-color mb-3">Why Donate?</h3>
          <p class="mb-4">Your donation helps us continue our mission to provide quality eye care. Watch the video below to learn more about how your support can make a difference.</p>
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
          <div class="donation-form">
            <h3 class="subtitle-color mb-3">Make a Donation</h3>
            <div class="donation-method">
              <img src="images/mpesa-icon.png" alt="Mpesa">
              <!-- Mpesa Donation Form - Add your form elements here -->
            </div>
            <div class="donation-method">
              <img src="images/bank-icon.png" alt="Bank">
              <!-- Bank Donation Form - Add your form elements here -->
            </div>
            <div class="donation-method">
              <img src="images/paypal-icon.png" alt="PayPal">
              <!-- PayPal Donation Form -->
              <img class="paypal-image" src="images/paypal-image.jpg" alt="PayPal Image" />
              <!-- Add your PayPal donation form elements here -->
              <form>
                <label for="paypal-email">PayPal Email:</label>
                <input type="email" id="paypal-email" name="paypal-email" class="form-control" required>
                <!-- Add other PayPal form elements here -->
                <button type="submit" class="btn btn-primary mt-3">Donate via PayPal</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer Start -->
  <?php include("assets/include/footer.php"); // get footer file ?>
  <!-- Footer End -->

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
</html>