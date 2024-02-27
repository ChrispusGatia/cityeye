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
    <title>CityEye- Health Care</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Health Care Medical" />
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link
      rel="stylesheet"
      href="plugins/slick-carousel/slick/slick-theme.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />

	<style>
    /* Updated styles for testimonial notifications */
    .testimonial-notifications {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1000;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .testimonial-notification {
        background-color: #3498db;
        border: 1px solid #2980b9;
        padding: 15px;
        margin-right: 10px;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #fff;
        max-width: 300px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>


  </head>

  <body id="top"></body>
</html>

<!-- header Start -->
<?php include ("assets/include/header.php"); // get header file?>
<!-- header End -->

<!-- Slider Start -->
<section class="slider" style="max-height: 550px; overflow: hidden;">
    <div class="slick-carousel">
        <!-- Slider Item 1 -->
		<div class="slider-item position-relative">
		<img src="images/bg/bg-5.jpg" alt="Slider Image 1">
            
        </div>

		<div class="slider-item position-relative">
		<img src="images/bg/bg-3.jpg" alt="Slider Image 1">
            
        </div>

        <div class="slider-item position-relative">
		<img src="images/bg/bg-22.jpg" alt="Slider Image 1">
            
        </div>
        <!-- Slider Item 2 -->
        <div class="slider-item position-relative">
		<img src="images/bg/bg-6.jpg" alt="Slider Image 2">
           
        </div>
        <!-- Add more slider items as needed -->
    </div>
</section>
<!-- Slider End -->



<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>Elite Experts</span>
						<h4 class="mb-3">World Class Professionals.</h4>
						<p class="mb-4">We have highly trained and experienced eye surgeons supported by an equally well trained and dedicated staff.</p>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">Mon - Thu : <span>7:30 a.m - 3:00 p.m</span></li>
							<li class="d-flex justify-content-between">Friday : <span>8:00 a.m - 3:00 p.m</span></li>
							<li class="d-flex justify-content-between">Weekends & Public Holidays : <span>Closed</span></li>
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Extensive Care</span>
						<h4 class="mb-3">Comprehensive Services.</h4>
						<p>We provide the full range of eye care services to ensure we can meet you at your point of need.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="images/about/img-4.jpg" alt="" class="img-fluid">
					<img src="images/about/img-5.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="images/about/cityeye.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">LEADING EYECARE HOSPITAL</h2>
					<p class="mt-4 mb-5">City Eye Hospital (CEH): Precision. Compassion. Excellence.
            Unite ethics, expertise, and cutting-edge tech for top-tier, affordable eye care.
            Our commitment: Prompt, professional, effective treatment in a safe, caring space.
            Your vision, our priority. CEH: Elevating Eye Care.</p>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Our Eye Care Services</h2>
					<div class="divider mx-auto my-4"></div>
					<p>You do not have to worry about seeking out specialists, at City Eye Hospital, you will find the personalised and specialised eye care you need to treat your condition and improve your vision.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-eye text-lg"></i>
						<h4 class="mt-3 mb-3">General Ophthalmology</h4>
					</div>

					<div class="content">
						<p class="mb-4">Regular eye exams help us detect any problems early and thus treat any arising diseases and condition with greater success</p>
					</div>
          <a href="service.php" class="btn btn-main btn-round-full">Read More<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-eye text-lg"></i>
						<h4 class="mt-3 mb-3">Cataract Surgery</h4>
					</div>
					<div class="content">
						<p class="mb-4">Cataract surgery is one of the safest surgeries. Most cataract procedures take a short time and most patients recover quickly</p>
					</div>
          <a href="service.php" class="btn btn-main btn-round-full">Read More<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-eye text-lg"></i>
						<h4 class="mt-3 mb-3">Cornea Surgery</h4>
					</div>
					<div class="content">
						<p class="mb-4">Cornea specialists at City Eye Hospital provide advanced medical and surgical treatment of all conditions and disorders of the cornea.</p>
					</div>
          <a href="service.php" class="btn btn-main btn-round-full">Read More<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-eye text-lg"></i>
						<h4 class="mt-3 mb-3">Glaucoma Treatment</h4>
					</div>

					<div class="content">
						<p class="mb-4">Glaucoma, the leading cause of blindness worldwide, leads to irreversible vision loss.</p>
					</div>
          <a href="service.php" class="btn btn-main btn-round-full">Read More<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-eye text-lg"></i>
						<h4 class="mt-3 mb-3">Retina Treatment</h4>
					</div>
					<div class="content">
						<p class="mb-4">The retina, one of the most important parts of the eye, can be affected by a wide range of diseases.</p>
					</div>
          <a href="service.php" class="btn btn-main btn-round-full">Read More<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="fas fa-glasses" style="font-size:36px;"></i>
						<h4 class="mt-3 mb-3">Optical Services</h4>
					</div>
					<div class="content">
						<p class="mb-4">Explore top brands in eyewear – glasses, lenses, frames, and sunglasses. Elevate your style with in-house glazing services.</p>
					</div>
					<a href="service.php" class="btn btn-main btn-round-full">Read More<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="images/service/img-1.jpg" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+254(0)714617782</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Book appoinment</h2>
					<p class="mb-4">Please note that appointment bookings are exclusively available at our AP Clinic branch. Schedule your appointment below:</p>
					     <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-6">
						 <div class="form-group">
                            <input name="email" id="email" type="text" class="form-control" placeholder="Your Email" required>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
							<select class="form-control" id="doctor" name="doctor">
                               <option>Select Doctors</option>
                               <option>Dr. Kibata</option>
                               <option>Dr. Muchai</option>
                               <option>Dr. Kareko</option>
                               <option>Dr. Njoya</option>
                               <option>Dr. Njuguna</option>
                               <option>Dr. Mashep</option>
                               <option>Dr. Korir</option>
                              <!-- Add more options as needed -->
                            </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
							<input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
							<select class="form-control" id="time" name="time" required>
                                <option>Select Preffered Time</option>
                                <option>Anytime</option>
                                <option>Morning Hours</option>
                                <option>Afternoon Hours</option>
                            </select>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-main btn-round-full">Make Appointment <i class="icofont-simple-right ml-2"></i></button>
                </form>
            </div>
			</div>
		</div>
	</div>
</section>

<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>We served over 5000+ Patients</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>

        <!-- Counting Numbers and Icons Section -->
        <div class="row text-center">
            <!-- Patients Served -->
            <div class="col-lg-4 col-md-4">
                <div class="counter-stat">
                    <i class="icofont-users"></i>
                    <span class="h3 counter" data-count="5000" style="color: #223a66;">0</span>+
                    <p style="color: #223a66;">Patients Served</p>
                </div>
            </div>

            <!-- Doctors/Experts -->
            <div class="col-lg-4 col-md-4">
                <div class="counter-stat">
                    <i class="icofont-doctor"></i>
                    <span class="h3 counter" data-count="50" style="color: #223a66;">0</span>+
                    <p style="color: #223a66;">Doctors/Experts</p>
                </div>
            </div>

            <!-- Outreach Programs -->
            <div class="col-lg-4 col-md-4">
                <div class="counter-stat">
                    <i class="icofont-flag"></i>
                    <span class="h3 counter" data-count="20" style="color: #223a66;">0</span>+
                    <p style="color: #223a66;">Outreach Programs</p>
                </div>
            </div>
        </div>
        <!-- End Counting Numbers and Icons Section -->
    </div>
</section>


<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
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

	<script>
    $(document).ready(function(){
        $('.slick-carousel').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: false
        });
    });
</script>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                showTestimonials();
            }, 5000); // Wait for 5 seconds before showing testimonials

            function showTestimonials() {
                // Create a container for notifications
                var notificationContainer = document.createElement('div');
                notificationContainer.className = 'testimonial-notifications';
                document.body.appendChild(notificationContainer);

                // Create a notification div
                var notification = document.createElement('div');
                notification.className = 'testimonial-notification';

                // Add testimonial content to the notification
                notification.innerHTML = '<h4>Amazing service!</h4><span>John Partho</span><p>They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.</p>';
				

                // Append the notification to the container
                notificationContainer.appendChild(notification);

                // After a delay, remove the notification
                setTimeout(function () {
                    notificationContainer.removeChild(notification);
                    // Remove the container if no notifications are left
                    if (notificationContainer.childNodes.length === 0) {
                        document.body.removeChild(notificationContainer);
                    }
                }, 5000); // Display the notification for 5 seconds
            }
        });
    </script>
    <script src="js/script.js"></script>

  </body>
  </html>