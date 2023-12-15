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
    <title>CityEye- Appointment Clinic</title>

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

  <body id="top"></body>
</html>

<!-- header Start -->
<?php include ("assets/include/header.php"); // get header file?>
<!-- header End -->


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Branches>Appointment Clinic</span>
          <h1 class="text-capitalize mb-5 text-lg">Appointment Clinic</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Department Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<!--<img src="images/service/bg-1.jpg" alt="" class="img-fluid">-->
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md">EyeCare Hospital's Premier Appointment Clinic</h3>
					<div class="divider my-4"></div>
					<p class="lead">Welcome to our Elevated Appointment Clinic- Conveniently situated on the 3rd floor of Upper Hill Medical Centre, Ralph Bunche Road, Nairobi.</p>
					<p>We prioritize your eye health with certified doctors, offering top-notch medical and surgical care. Your vision is our focus. Book now for an elevated eye care experience!</p>


					<h3 class="mt-5 mb-4">Our Eye Services</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
					<li><i class="icofont-check mr-2"></i>General Ophthalmology</li>
						<li><i class="icofont-check mr-2"></i>Cataract Surgery</li>
						<li><i class="icofont-check mr-2"></i>Corneal Transplants</li>
						<li><i class="icofont-check mr-2"></i>Glaucoma Clinics and Surgery</li>
						<li><i class="icofont-check mr-2"></i>Retina Clinic and Surgery</li>
						<li><i class="icofont-check mr-2"></i>Pediatric Clinic</li>
						<li><i class="icofont-check mr-2"></i>Uveitis Clinic</li>
					</ul>

					<a href="appointment.php" class="btn btn-main-2 btn-round-full">Make Appointment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Appointment Fee</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Prioritize your vision with unbeatable, specialized consultations 
							at our clinic! 👁️💡</span>
					  </li>
					  <li>
					  <span>#EyeHealthExcellence</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">🌟 Fee</p>
						<h4 class="mb-3">Ksh 4000</h4>
					</div>
				</div>
			</div>

      <div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Hospital Directions</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <i class="icofont-location-pin"></i>
					    <span>Upper Hill Medical Center, 3rd Floor, Nairobi.</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <i class="icofont-location-pin"></i>
					    <span>Upper Hill Medical Center, 3rd Floor, Nairobi.</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <i class="icofont-location-pin"></i>
					    <span>Upper Hill Medical Center, 3rd Floor, Nairobi.</span>
					  </li>
					</ul>
				</div>
			</div>

      <div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Contact Us</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <i class="icofont-email mr-3"></i>
					    <a href="mailto:info@cityeyehospital.or.ke">info@cityeyehospital.or.ke</a>
					  </li>
            <li class="d-flex justify-content-between align-items-center">
              <i class="icofont-support mr-3"></i>
					    <a href="tel:+254-111-032200">+254 (0) 111 032 200</a>             
            </li>
            <li class="d-flex justify-content-between align-items-center">
              <i class="icofont-support mr-3"></i>
					    <a href="tel:+254-707-777707">+254 (0) 707 777 707</a>
            </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<ul class="list-inline footer-socials mt-4">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/themefisher"
                  ><i class="icofont-facebook"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/themefisher"
                  ><i class="icofont-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.pinterest.com/themefisher/"
                  ><i class="icofont-linkedin"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.pinterest.com/themefisher/"
                  ><i class="icofont-youtube"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.pinterest.com/themefisher/"
                  ><i class="icofont-instagram"></i
                ></a>
              </li>
            </ul>
					</div>
				</div>
			</div>

      <div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Monday - Thur :</span>
					    <span>7:30 a.m - 4:00 p.m</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Friday :</span>
					    <span>8:00 a.m - 4:00 p.m</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Weekends & Public Holidays :</span>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Friendly Reception for Everyone!</p>
						<h3>All Are Welcome!</h3>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>

<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>City Eye Hospital: Your trusted partner for superior vision care, 
						where precision meets compassion in a community dedicated to clarity 
						and vibrant partnerships. </p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/1.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/2.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-12.5">
      <div class="section-title text-center">
        <h2>Google Map Directions</h2>
        <div class="divider mx-auto my-4"></div>
					<p>Conviniently located along Ngong Road, across from the Traffic Police Station in Nairobi, 
            <br>our Main Hospital boasts a strategic location with convenient access via public transportation and private vehicles.</p>
        <div class="google-map ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.615025574336!2d36.8044979838882!3d-1.2958189771624877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10c1c8deb29f%3A0x1addc640ec7641a0!2sRalph%20Bunche%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1631535375080!5m2!1sen!2ske"
          width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </div>
        </div>
        </div>
  </div>

<!-- footer Start -->
<?php include ("assets/include/footer.php"); // get footer file?>
<!-- footer End -->

   

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