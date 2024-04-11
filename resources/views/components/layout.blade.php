<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityEye- Health Care</title>
    <!-- Add your CSS links here -->

</head>
@include('_links')

<body>
    <header>
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
                                <span class="h4">+254(0)111 032 200</span>
                            </a>
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
                            <a class="nav-link dropdown-toggle" href="service.html" id="dropdown02"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li>
                                    <a class="dropdown-item" href="/about_us">Who We Are</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/our_history">Our History</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/mission/our-goal-and-dream">Mission & Vision</a>
                                </li>

                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Branches</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                        <li>
                                            <a class="dropdown-item" href="main-hospital">Main Hospital</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="nyeri-hospital">Nyeri Hospital</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="appointment-clinic">Appointment
                                                Clinic</a>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropleft">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Vision Centers</a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                                <li>
                                                    <a class="dropdown-item" href="ngong-visioncenter">CEH Community
                                                        Vision Center-Ngong</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Management</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                        <li>
                                            <a class="dropdown-item" href="/board/board-of-management">Board of
                                                Management</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="/executive-management/executive-management">Executive
                                                Management</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Services <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">General Unit</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="/medicaloutpatient"
                                                id="dropdown0301" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Medical Outpatient
                                                Clinic</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="/services_gmd/medical-outpatient-clinic">Diabetic
                                                        Clinic</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="/services_gmh/hypertensive-clinic">Hypertensive
                                                        Clinic</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="/othermedicalconditions/other-medical-conditions">Other
                                                        Medical Conditions</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/labs/laboratory-services">Laboratory
                                                Services</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Eye Unit</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                        <li>
                                            <a class="dropdown-item"
                                                href="/services_gmd/medical-outpatient-clinic">Priority Clinic</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="/services_gmd/medical-outpatient-clinic">Retina & Diabetic Eye
                                                Specialist Clinics</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="/services_gmd/medical-outpatient-clinic">Glaucoma & Cornea
                                                Clinics</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="/services_gmd/medical-outpatient-clinic">Eye Surgeries &
                                                Procedures</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="/services_gmd/medical-outpatient-clinic">Pediatric Eye Clinic</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="/services_gmd/medical-outpatient-clinic">Uveitis Clinic</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/opticalshop">Optical Shop</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/outreach/outreach-eye-care-activities">Outreach
                                        Program</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient Resources
                                <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li>
                                    <a class="dropdown-item" href="/privacy/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="/insurance/explore-our-accepted-insurances">Insuarance</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="hospital-locations">Hospital Locations</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="patience-feedback">Patient Feedback</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/faq/faq">FAQuestions</a>
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
                            <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors/Team <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="doctors">Doctors</a></li>
                                <li>
                                    <a class="dropdown-item" href="bookappointment">Book Appoinment</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/gallery/explore-eye-hospital-moments">Gallery</a>
                                </li>

                                <!--<li class="dropdown dropdown-submenu dropleft">
                      <a
                        class="dropdown-item dropdown-toggle"
                        href="#!"
                        id="dropdown0501"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Sub Menu</a
                      >
      
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
                            <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog/News <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li>
                                    <a class="dropdown-item" href="careers">Careers</a>
                                </li>
                                {{-- <li>
                                    <a class="dropdown-item" href="newsletter">Newsletters</a>
                                </li> --}}
                                <li>
                                    <!--<a class="dropdown-item" href="news&events">Events & Celebrations</a>-->
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/education">Educational Materials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}
    <!-- Add your page content here -->
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
                                <a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.pinterest.com/themefisher/"><i class="icofont-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.pinterest.com/themefisher/"><i class="icofont-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get Involved</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="service">Our Services</a></li>
                            <li><a href="ourfoundation">Our Foundation</a></li>
                            <li><a href="donate">Donate</a></li>
                            <li><a href="hospital-locations">Hospital Locations</a></li>
                            <li><a href="#!">Medicine</a></li>
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
                            <li><a href="privacypolicy">Privacy Policy</a></li>
                            <li><a href="faqs">FAQuestions</a></li>
                            <li><a href="appointment">Book Appointment</a></li>
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
                            </h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:00 a.m - 3:00 p.m</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+254 0111 032 200">+254(0)111 032 200</a></h4>
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
                            </script>.<a href="#!">City Eye Hospital</a>. All Rights Reserved.
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
