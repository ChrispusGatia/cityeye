<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityEye- Health Care</title>
    <!-- Add your CSS links here -->
    <link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JavaScript -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    @include('_links')

    <style>
        .fa.fa-twitter {
            font-family: sans-serif;
        }

        .fa.fa-twitter::before {
            content: "𝕏";
            font-size: 1.2em;
        }
    </style>
</head>
<script>
    // Create the iframe element
    const iframe = document.createElement("iframe");

    // Function to apply styles to the iframe
    const iframeStyles = (styleString) => {
        const style = document.createElement('style');
        style.textContent = styleString;
        document.head.append(style);
    }

    // Apply styles to the iframe
    iframeStyles(`
        .chat-frame {
            position: fixed;
            bottom: 50px;
            right: 50px;
            border: none;
        }
    `);

    // Set iframe source and add class
    iframe.src = "http://localhost:3000/chatbot";
    iframe.classList.add('chat-frame');

    // Append iframe to the document body
    document.body.appendChild(iframe);

    // Listen for messages from the iframe
    window.addEventListener("message", (e) => {
        // Check the origin of the message
        if (e.origin !== "http://localhost:3000") return;

        // Parse the message data
        let dimensions = JSON.parse(e.data);

        // Set iframe dimensions based on the message data
        iframe.width = dimensions.width;
        iframe.height = dimensions.height;

        // Send a message to the iframe (if needed)
        iframe.contentWindow.postMessage("73576568-c8d9-4191-9386-87bc58360d0f", "http://localhost:3000/");
    });
</script>

<body>
    <header style="position: fixed; top: 0; width: 100%; z-index: 1000; background-color: white;;">
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item">
                                <a href="mailto:support@gmail.com"><i
                                        class="icofont-email mr-3"></i>info@cityeyehospital.or.ke</a>
                            </li>
                            <li class="list-inline-item">
                                <i class="icofont-location-pin mr-2"></i>Ngong Road, Nairobi, Kenya
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+254707 777 707">
                                <span>Call Now : </span>
                                <span>+254(0)111 032 200</span>
                            </a>
                            <a href="/bookappointment" type="button" class="btn btn-danger btn-lg ml-2">Book
                                Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo1.png') }}" width="200" class="img-fluid" />
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">About <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li>
                                    <a class="dropdown-item" href="/about_us">Who We Are</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/our_history">Our History</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ourfoundation">Our Foundation</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="careers">Careers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Our Branches
                                <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li>
                                    <a class="dropdown-item" href="/main_hospital">Main Hospital</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/nyeri_hospital">Nyeri Hospital</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/appointment-clinic">Appointment Clinic</a>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Vision Centers</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                        <li>
                                            <a class="dropdown-item" href="/ceh_community">CEH Community Vision
                                                Center-Ngong</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="mega-menu-link nav-link dropdown-toggle" href="#" id="dropdown02"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <span
                                    class="icofont-thin-down"></span></a>
                            <div class="dropdown-menu mega-menu text-left" aria-labelledby="dropdown02"
                                style="width: 500px; padding: 10px;">
                                <div class="container">
                                    <div class="row justify-content-center"> <!-- Center the row content -->
                                        <div class="col-md-6">
                                            <h6>Eye Services</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="/eye_consultations">General
                                                        Ophthalmology</a>
                                                </li>
                                                <li><a class="dropdown-item" href="/cataract_surgery">Cataract
                                                        Surgery</a>
                                                </li>
                                                <li><a class="dropdown-item" href="/eye_surgery">Corneal Clinic
                                                        and Transplant</a></li>
                                                <li><a class="dropdown-item" href="/services_gmd">Glaucoma Clinic and
                                                        Surgery</a></li>
                                                <li><a class="dropdown-item" href="/retina_specialist">Retina Clinic
                                                        and
                                                        Surgery</a></li>

                                                <li><a class="dropdown-item" href="/opticalshop">Optical Shop</a></li>
                                                <li><a class="dropdown-item" href="/outreach">Outreach Program</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>General Services</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="/diabetic_clinic">Diabetic
                                                        Clinic</a>
                                                </li>
                                                <li><a class="dropdown-item" href="/services_gmh">Hypertensive
                                                        Clinic</a></li>
                                                <li><a class="dropdown-item" href="/labs">Laboratory Services</a>
                                                </li>
                                                <li><a class="dropdown-item" href="/pharmacy">Pharmacy</a>
                                                </li>
                                                <li><a class="dropdown-item" href="/othermedicalconditions">Other
                                                        Medical Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient Resources
                                <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li>
                                    <a class="dropdown-item" href="/privacy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/insurance">Insurance</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/patience-feedback">Patient Feedback</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/faq">FAQs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/testimonial">Testimonials</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Team <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="doctors">Doctors</a></li>
                                <li><a class="dropdown-item" href="gallery">Care Team</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown05"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li>
                                    <a class="dropdown-item" href="/newsletter">Newsletters</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/education">Educational Materials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <<<<<<< HEAD=======<div class="col-md-6">
                    <h6>General Services</h6>
                    <ul class="list-unstyled">
                        <li><a class="dropdown-item" href="/diabetic_clinic">Diabetic Clinic</a>
                        </li>
                        <li><a class="dropdown-item" href="/services_gmh">Hypertensive
                                Clinic</a></li>
                        <li><a class="dropdown-item" href="/labs">Laboratory Services</a>
                        </li>
                        <li><a class="dropdown-item" href="/pharmacy">Pharmacy</a>
                        </li>
                        <li><a class="dropdown-item" href="/pediatric_clinic">Pediatric Services</a></li>
                        <li><a class="dropdown-item" href="/othermedicalconditions">Other
                                Medical Conditions</a></li>
                    </ul>
            </div>
            </div>
            </div>
            </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Patient Resources
                    <i class="icofont-thin-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                    <li>
                        <a class="dropdown-item" href="/hospital-location">Locate Our Hospitals</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/insurance">Insurance</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="/patience-feedback">Patient Feedback</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/faq">FAQs</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/testimonial">Testimonials</a>
                    </li>
                    <li>
                        <!--<a class="dropdown-item" href="directions&location">Directions & Location</a>-->
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Our Team <i class="icofont-thin-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item" href="doctors">Doctors</a></li>
                    <li><a class="dropdown-item" href="gallery">Care Team</a></li>
                    {{-- <li><a class="dropdown-item" href="board">Board of Management</a></li>
                    <li><a class="dropdown-item" href="executive-management">Executive Management</a></li>
                    <li>
                        <a class="dropdown-item" href="bookappointment">Book Appoinment</a>
                    </li> 
                    <li>
                        <a class="dropdown-item" href="/gallery">Gallery</a>
                    </li> --}}

                    <!--<li class="dropdown dropdown-submenu dropleft">
                        <a
                        class="dropdown-item dropdown-toggle"
                        href="#!"
                        id="dropdown0501"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Sub Menu</a>
    
                        <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                        <li>
                            <a class="dropdown-item" href="index.html">Submenu 01</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.html">Submenu 02</a>
                        </li>
                        </ul>
                    </li>-->
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">News <i class="icofont-thin-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown05">
                    {{-- <li>
                        <a class="dropdown-item" href="newsletter">Newsletters</a>
                    </li> --}}
                    <li>
                        <a class="dropdown-item" href="/newsletter">Newsletters</a>
                    </li>
                    <li>
                        <!--<a class="dropdown-item" href="news&events">Events & Celebrations</a>-->
                    </li>
                    <li>
                        <a class="dropdown-item" href="/education">Educational Materials</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            </ul>
            </div>
            >>>>>>> 59c3d6faf840f488216fe4b65a5f1ceb014dd86f
            </div>
        </nav>
    </header>

    {{ $slot }}
    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="{{ asset('images/logo1.png') }}" width="200" class="img-fluid" />
                        </div>
                        <h4> Our Quest</h4>
                        <p>
                            City Eye Hospital is dedicated to delivering top-notch, secure,
                            and cost-effective eye care services to all patients who rely on our expertise.
                        </p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/cityeyehospital/"><i
                                        class="icofont-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/cityeyehospital"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/company/city-eye-hospital/"><i
                                        class="icofont-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCd0X1iikHG5ukaHLLcMiVXQ"><i
                                        class="icofont-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/cityeyehospital_kenya/"><i
                                        class="icofont-instagram"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get Involved</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="/all-services">Our Services</a></li>
                            <li><a href="/ourfoundation">Our Foundation</a></li>
                            <li><a href="/donate">Donate</a></li>
                            <li><a href="/hospital-location">Hospital Locations</a></li>
                            <li><a href="/newsletter">News & Insights</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Quick Links</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="careers">Careers</a></li>
                            <li><a href="contact">Contact US </a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/faq">FAQs</a></li>
                            <li><a href="/bookappointment">Book Appointment</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2">
                                <a href="mailto:info@cityeyehospital.or.ke">info@cityeyehospital.or.ke</a>
                                <!--<span class="h6 mb-0">info@cityeyehospital.or.ke</span>-->
                            </h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 06:30 a.m - 05:00 p.m</span>
                            </div>
                            <!--<h4 class="mt-2"><a href="tel:+254 0111 032 200">+254(0)111 032 200</a></h4>-->
                            <span class="h6 mb-0">+254(0)111 032 200</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>.<a href="/">City Eye Hospital</a>. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control"
                                    placeholder="Subscribe to Our News Letters- Your Email" required />
                                <button type="submit" class="btn btn-main-2 btn-round-full">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop scroll-top-to" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
