<x-layout>
     
    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8" />
        <title>City Eye Hospital - Eye Care</title>
    
        <!-- Mobile Specific Metas -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="City Eye Hospital - Comprehensive Eye Care Services" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />
    
        <!-- SEO Meta Tags -->
        <meta name="keywords" content="City Eye Hospital, eye care, eye hospital, medical services" />
        <meta property="og:title" content="City Eye Hospital - Eye Care" />
        <meta property="og:description" content="Comprehensive Eye Care Services at City Eye Hospital." />
        <meta property="og:image" content="/images/logo.png" />
        <meta property="og:url" content="https://www.cityeyehospital.or.ke/contact" />
        <meta name="twitter:card" content="summary_large_image" />
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />
    
        <!-- Essential Stylesheets -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />
        <link rel="stylesheet" href="css/style.css" />
    
        <!-- Custom Stylesheet -->
        <style>
            /* Add custom styles here if needed */
        </style>
    </head>
    
    <body id="top">
    
        <!-- Page Title -->
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Contact Us</span>
                            <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Page Title -->
         
        <!-- Contact Form Section -->
<section style="background-color: #f8f9fa; padding: 60px 0;">
    <div style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
        <div style="text-align: center; margin-bottom: 40px;" class="section-title text-center">
            <h2 class="mb-4" style="font-size: 2rem; margin-bottom: 10px;">Contact Us</h2>
            <div class="divider mx-auto my-4"></div>
            <p style="color: #6c757d; font-size: 1rem;">Feel free to reach out to City Eye for any inquiries, assistance, or information. Our team is here to help you. We look forward to hearing from you!</p>
        </div>

        <div style="max-width: 960px; margin: 0 auto; background-color: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 0 30px rgba(0,0,0,0.05);">
            <form id="contact-form" action="/contact" method="post">
                @csrf

                <!-- Flash Messages -->
                <div style="margin-bottom: 20px;">
                    @if(session('flash'))
                    <div style="background-color: #d4edda; color: #155724; padding: 10px 15px; border-radius: 6px;">
                        {{ session('flash') }}
                    </div>
                    <script>
                        gtag('event', 'conversion', {
                            'send_to': 'AW-16651053038/-uPxCL-1tNEZEO7P64M-'
                        });
                    </script>
                    @endif
                    @if(session('error'))
                    <div style="background-color: #f8d7da; color: #721c24; padding: 10px 15px; border-radius: 6px;">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>

                <!-- Form Fields -->
                <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                    <input name="name" id="name" type="text" placeholder="Your Full Name" required pattern="[a-zA-Z\s]+"
                        title="Please enter a valid name." style="flex: 1 1 45%; padding: 12px; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">

                    <input name="email" id="email" type="email" placeholder="Your Email Address" required
                        style="flex: 1 1 45%; padding: 12px; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">

                    <input name="subject" id="subject" type="text" placeholder="Your Query Topic" required
                        style="flex: 1 1 45%; padding: 12px; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">

                    <input name="phone" id="phone" type="tel" placeholder="Your Phone Number" required pattern="\d{10}"
                        title="Please enter a valid phone number with 10 digits."
                        style="flex: 1 1 45%; padding: 12px; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;">

                    <textarea name="message" id="message" placeholder="Your Message" required rows="6"
                        style="flex: 1 1 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 8px; font-size: 1rem;"></textarea>
                </div>

                <div style="text-align: center; margin-top: 30px;">
                    <input type="submit" value="Send Message" name="submit"
                        style="background-color: #223a66; border: none; color: white; padding: 12px 40px; font-size: 1.1rem; border-radius: 25px; cursor: pointer; transition: background-color 0.3s ease;">
                </div>
            </form>
        </div>
    </div>
</section>

    
        <!-- Contact Information Section -->
        <section class="contact-info pb-0">
            <div class="container">
                <div class="row">
    
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-live-support"></i>
                            <h5>Main Hospital - Call Us</h5>
                            <p>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 111 032 200<br>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 707 777 707<br>
                                <i class="icofont-email mr-2" style="font-size:12px;"></i>
                                info@cityeyehospital.or.ke<br>
                                <i class="icofont-location-pin" style="font-size:12px;"></i>
                                Opp. Traffic Police Station, Nairobi.
                            </p>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-live-support"></i>
                            <h5>Nyeri Hospital - Call Us</h5>
                            <p>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 114 079 245<br>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 780 777 705<br>
                                <i class="icofont-email mr-2" style="font-size:12px;"></i>
                                info.nyeri@cityeyehospital.or.ke<br>
                                <i class="icofont-location-pin" style="font-size:12px;"></i>
                                Asian Quarters, Mbuni Road, Nyeri.
                            </p>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-live-support"></i>
                            <h5>Appointment Clinic - Call Us</h5>
                            <p>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 714 617 782<br>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 736 329 348<br>
                                <i class="icofont-email mr-2" style="font-size:12px;"></i>
                                appointments@cityeyehospital.or.ke<br>
                                <i class="icofont-location-pin" style="font-size:12px;"></i>
                                Upper Hill Med Centre (3rd Fl), Nairobi.
                            </p>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-live-support"></i>
                            <h5>Vision Center Ngong - Call Us</h5>
                            <p>
                                <i class="icofont-support mr-3" style="font-size:12px;"></i>
                                +254 (0) 114 524 718<br>
                                <i class="icofont-email mr-2" style="font-size:12px;"></i>
                                optical.ngong@cityeyehospital.or.ke<br>
                                <i class="icofont-location-pin" style="font-size:12px;"></i>
                                Milele Mall, Ngong Town, Kajiado.
                            </p>
                        </div>
                    </div>
                    <!-- Additional branches can be added similarly -->
                </div>
            </div>
        </section>
    
        <!-- Google Map Directions Section -->
        <section class="contact-info pb-0">
            <div class="container">
    
                <!-- Google Map Directions Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Google Map Directions</h2>
                            <div class="divider mx-auto my-4"></div>
                        </div>
                    </div>
                </div>
                <!-- End of Google Map Directions Title -->
    
                <!-- Branch Locations and Map Display -->
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Sidebar with Hospital Locations -->
                        <div class="contact-block mb-4 mb-lg-0">
                            <i class="icofont-map"></i>
                            <h5>Branch Locations</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="hospital-location"
                                        data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4743.502116636985!2d36.80408283879087!3d-1.2983866077723598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ea15cd9e7d%3A0x90f3bd97e5159bfc!2sCity%20Eye%20Hospital!5e0!3m2!1sen!2ske"
                                        data-title="Main Hospital">Main Hospital</a></li>
                                <li><a href="#" class="hospital-location"
                                        data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.826965279353!2d36.9598526!3d-0.42850249999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18286146732cdb53%3A0x45becfcac6fb63ab!2sCity%20Eye%20Hospital%20-%20Nyeri!5e0!3m2!1sen!2ske!4v1669289149340!5m2!1sen!2ske"
                                        data-title="Nyeri Hospital">Nyeri Hospital</a></li>
                                <li><a href="#" class="hospital-location"
                                        data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.615025574336!2d36.8044979838882!3d-1.2958189771624877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10c1c8deb29f%3A0x1addc640ec7641a0!2sRalph%20Bunche%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1631535375080!5m2!1sen!2ske"
                                        data-title="Appointment Clinic">Appointment Clinic</a></li>
                                <li><a href="#" class="hospital-location"
                                        data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.788688278033!2d36.6572366!3d-1.3583221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f034453812b63%3A0x5b18f2d50bfe9691!2sCity%20Eye%20Hospital%20-%20Ngong%20Milele%20Mall!5e0!3m2!1sen!2ske!4v1685612866572!5m2!1sen!2ske"
                                        data-title="VC Ngong">Vision Center Ngong</a></li>
                            </ul>
                            <span class="btn btn-main btn-round-full">Click on a branch name</span>
                        </div>
                    </div>
    
                    <div class="col-lg-8">
                        <!-- Google Map Container -->
                        <div id="branchMap" style="height: 450px;"></div>
                    </div>
                </div>
                <!-- End of Branch Locations and Map Display -->
            </div>
        </section>
        <!-- End of Google Map Directions Section -->
    
        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>
    
        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    
        <!-- Custom Scripts -->
        <script src="js/script.js"></script>
    
        <!-- JavaScript to handle branch map display -->
        <script>
            // Function to load and display the branch map
            function loadBranchMap(src, title) {
                var mapContainer = document.getElementById('branchMap');
                mapContainer.innerHTML = '<iframe src="' + src +
                    '" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
            }
    
            // Load Main Hospital map by default
            loadBranchMap(
                "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4743.502116636985!2d36.80408283879087!3d-1.2983866077723598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ea15cd9e7d%3A0x90f3bd97e5159bfc!2sCity%20Eye%20Hospital!5e0!3m2!1sen!2ske",
                "Main Hospital");
    
            // Event listener for branch links
            document.querySelectorAll('.hospital-location').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    var mapSrc = this.getAttribute('data-src');
                    var branchTitle = this.getAttribute('data-title');
                    loadBranchMap(mapSrc, branchTitle);
                });
            });
        </script>
    </body>
</x-layout>
