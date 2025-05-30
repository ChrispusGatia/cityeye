<?php
    session_start();
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CityEye- Book Appointment</title>
    <!-- Mobile Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Health Care Medical HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />
    <!-- Theme Meta -->
    <meta name="theme-name" content="CityEye" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />
    <!-- Essential Stylesheets -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="top">

    <!-- Header Start -->
    
    

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Book your Seat</span>
                        <h1 class="text-capitalize mb-5 text-lg">Appointment at AP Clinic</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... (previous code) ... -->

<section class="appointment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">Call For More Information</span>
                    <h4 class="text-color mt-3">+254 (0) 714 617 782 </h4>
                    <h4 class="text-color mt-3">+254 (0) 736 329 348 </h4>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="appointment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Book an Appointment at AP Clinic</h2>
                    <p class="mb-4">Please note that appointment bookings are exclusively available at our AP Clinic branch. Schedule your appointment below:</p>
                    <form id="appointment-form" class="appointment-form" method="post" action="#">
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
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-main btn-round-full">Make Appointment <i class="icofont-simple-right ml-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... (remaining code) ... -->


    <!-- Footer Start -->
    
    <!-- Footer End -->

    <!-- Essential Scripts -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
