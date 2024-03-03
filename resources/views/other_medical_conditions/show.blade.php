<x-layout>

    <body id="top">

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Outpatient Clinic</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section department-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="department-content mt-5">
                            <h3 class="text-md">{{ $body_title }}</h3>
                            <div class="divider my-4"></div>
                            {!! $body_description !!}

                            <h3 class="mt-5 mb-4">Our Medical Services</h3>
                            <div class="divider my-4"></div>
                            <ul class="list-unstyled department-service">
                                @foreach ($list_items as $content)
                                    <li><i class="icofont-check mr-2"></i>{{ $content->item }}</li>
                                @endforeach
                            </ul>

                            <a href="outpatient-services" class="btn btn-main-2 btn-round-full">Explore Our Services<i
                                    class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar-widget schedule-widget mt-5">
                            <h5 class="mb-4">{{ $sidebar_title }}</h5>

                            {!! $sidebar_description !!}

                            <img src="{{ asset($card_image) }}" alt="Clinic About Image" class="img-fluid mt-3">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar-widget schedule-widget mt-5">
                            <h5 class="mb-4">Clinic Directions</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center">
                                    <i class="icofont-location-pin"></i>
                                    <span>Opp. Traffic Police Station, Nairobi.</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <i class="icofont-location-pin"></i>
                                    <span>Opp. Traffic Police Station, Nairobi.</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <i class="icofont-location-pin"></i>
                                    <span>Opp. Traffic Police Station, Nairobi.</span>
                                </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Urgent Help?</p>
                                <h3>+254(0)111 032 244</h3>
                            </div>
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
                                    <a href="tel:+254-111-032200">+254(0) 111 032 244</a>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <i class="icofont-support mr-3"></i>
                                    <a href="tel:+254-707-777707">+254 (0) 111 032 200</a>
                                </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <ul class="list-inline footer-socials mt-4">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/themefisher"><i
                                                class="icofont-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.pinterest.com/themefisher/"><i
                                                class="icofont-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.pinterest.com/themefisher/"><i
                                                class="icofont-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.pinterest.com/themefisher/"><i
                                                class="icofont-instagram"></i></a>
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


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12.5">
                    <div class="section-title text-center">
                        <h2>Google Map Directions</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Conveniently located along Ngong Road, across from the Traffic Police Station in Nairobi,
                            <br>our Main Hospital boasts a strategic location with convenient access via public
                            transportation and private vehicles.
                        </p>
                        <div class="google-map ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4743.502116636985!2d36.80408283879087!3d-1.2983866077723598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ea15cd9e7d%3A0x90f3bd97e5159bfc!2sCity%20Eye%20Hospital!5e0!3m2!1sen!2ske"
                                width="1300" height="450" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</x-layout>
