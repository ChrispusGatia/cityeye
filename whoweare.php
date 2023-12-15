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

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">
  <!-- Header Start -->
  <?php include("assets/include/header.php"); // get header file ?>
  <!-- Header End -->

  <!-- Section: Who We Are -->
  <section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">About Us</span>
            <h1 class="text-capitalize mb-5 text-lg">Who We Are</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section about-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title-color mb-4">Discover City Eye Hospital</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="subtitle-color mb-3">Who We Are</h3>
          <p class="mb-4">At City Eye Hospital, we envision a world where superior eye care meets compassionate service. Founded in 2015, our commitment to quality eye care is unwavering.</p>
          <p>With strategic locations on Ngong Road, Upper Hill Medical Centre, and Mbuni Road in Nyeri, we blend convenience with expertise to ensure your journey to optimal eye health is seamless.</p>
        </div>
        <div class="col-lg-6">
          <div class="vision-image">
            <img src="images/service/bg-1.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Our Story -->
  <section class="section about-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title-color mb-4">Embarking on a Visionary Journey</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="subtitle-color mb-3">Our Story</h3>
          <p class="mb-4">Our mission is what drives us to do everything possible to expand the access and affordability of quality eye care.
            We do this through our patient-centered approach, which combines ultra-modern facilities
            and highly trained staff to deliver comprehensive care in the most compassionate and
            welcoming environment.</p>
          <p>Founded in 2015, City Eye Hospital is devoted to providing quality eye care to all patients. Our approach, therefore, blends a walk-in Main Hospital with an Appointment Clinic. Both are conveniently located in Nairobi, with the Main Hospital on Ngong Road and the Appointment Clinic at Upper Hill Medical Centre.</p>
        </div>
        <div class="col-lg-6">
          <div class="story-image">
            <img src="images/service/bg-1.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: What to Expect -->
  <section class="section what-to-expect">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title-color mb-4">What to Expect</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="expect-item mb-5 mb-lg-0">
            <i class="icofont-user" style="font-size: 40px;"></i>
            <h4 class="mt-3">Patient Guidance</h4>
            <p>Our staff is dedicated to making your visit hassle-free. We provide a welcoming environment where you can ask questions and seek clarification, ensuring a comfortable experience.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="expect-item mb-5 mb-lg-0">
            <i class="icofont-doctor" style="font-size: 40px;"></i>
            <h4 class="mt-3">Expert Care</h4>
            <p>City Eye Hospital boasts highly trained and experienced eye surgeons, supported by an equally well-trained and dedicated staff. Your eyes are in expert hands throughout your journey with us.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="expect-item">
            <i class="icofont-medical-sign" style="font-size: 40px;"></i>
            <h4 class="mt-3">Comprehensive Care</h4>
            <p>We offer the full spectrum of eye care, ensuring we can meet you at your point of need. From general eye exams to complex eye surgeries, you'll find the specialist you need at City Eye Hospital.</p>
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
