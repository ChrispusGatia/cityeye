<x-layout>

    <head>
        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye- Health Care</title>

        <!-- Mobile Specific Metas
  ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Health Care Medical" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- theme meta -->
        <meta name="theme-name" content="CityEye" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!--
  Essential stylesheets
  =====================================-->
        <link rel="stylesheet" href="./plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="./plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="./plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="./plugins/slick-carousel/slick/slick-theme.css" />

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

    <!-- header End -->

    <!-- Slider Start -->
    @if ($featured_images)
        <section class="slider" style="max-height: 550px; overflow: hidden;">
            <div class="slick-carousel">
                @foreach ($featured_images as $image)
                    <img src="{{ asset($image->image_asset) }}" alt="Image">
                @endforeach
                <!-- Add more slider items as needed -->
            </div>
        </section>
        <!-- Slider End -->
    @endif




    <section class="features ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span> ELITE DOCTORS</span>
                            <h4 class="mb-3">Specialised</h4>
                            <p class="mb-4">CEH is home to leading ophthalmologists
                                committed to excellence in eye care delivery and
                                supported by a highly trained and dedicated staff.</p>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>THE CARE TO EXPECT </span>
                            <h4 class="mb-3">Personalised</h4>
                            <p class="mb-4">At CEH, you will receive a tailored treatment plan in a
                                calm and confortable environment where you can freely ask questions
                                and seek clarification.</p>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>EXTENSIVE CARE</span>
                            <h4 class="mb-3">Comprehensive</h4>
                            <p>CEH facilities are easily accessible through private
                                and public means and are equipped to offer world-class
                                care for the full range of eye symptoms and conditions.</p>
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
                        <img src="{{ asset($image_1) }}" alt="" class="img-fluid">
                        <img src="{{ asset($image_2) }}" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset($image_3) }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">{{ $teaser }}</h2>
                        <p class="mt-4 mb-5">{{ $subtitle }}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section reviews gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Customer Reviews</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>See what our customers are saying about us.</p>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="reviewCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($customer_review as $key => $review)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <div class="feature-item mb-4 p-4 border rounded d-flex flex-column align-items-center">
                                        <!-- Display customer image -->
                                        @if($review->customer_image)
                                        <img src="{{ asset($review->customer_image) }}" alt="{{ $review->customer_name }}" class="img-fluid rounded-circle customer-img mb-3" style="width: 50px; height: 50px;">
                                        @endif
                                        <!-- Display customer name and review -->
                                        <h4 class="mt-3 mb-2 text-center">{{ $review->customer_name }}</h4>
                                        <p class="mb-3 text-center">&ldquo;{{ $review->customer_quote }}&rdquo;</p>
                                        <!-- Star rating icons -->
                                        <div class="rating mb-3 text-center">
                                            @if($review->stars)
                                            @foreach (range(1, $review->stars) as $index)
                                                    <i class="icofont-star" style="color: #ffc107;"></i>
                                            @endforeach
                                            @else
                                            @foreach(range(1,5) as $index)
                                            <i class="icofont-star" style="color: #ddd;"></i>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Custom styled carousel navigation arrows -->
                        <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev" style="z-index: 2;">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="
                                background-color: #223a66;
                                width: 25px;
                                height: 25px;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            ">
                                <i class="icofont-simple-left" style="color: #fff; font-size: 20px;"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next" style="z-index: 2;">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="
                                background-color: #223a66;
                                width: 25px;
                                height: 25px;
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            ">
                                <i class="icofont-simple-right" style="color: #fff; font-size: 20px;"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
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
                            <h2 style="font-size: 22px; font-weight: bold;">Contact CEH Appointment Clinic</h2>
                            <p><i class="icofont-phone" style="color: white; font-weight: bold;"></i>
                                <span style="color: white; font-weight: bold; font-size: 20px;">+254 0714 617
                                    782</span>
                                / <span style="color: white; font-weight: bold; font-size: 20px;">+254 0736 329
                                    348</span>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-10">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Book Appointment</h2>
                        <p class="mb-4">Thank you for choosing City Eye Hospital. You can schedule an
                            appointment at our Appointment Clinic (located on the 3rd Floor of Upper Hill
                            Medical Centre, Ralph Bunche Road, Nairobi) by
                            clicking the button below.</p>

                        <div class="text-center mb-4">
                            <!-- Placeholder image or your preferred image -->
                            <img src="images/service/img2.png" alt="City Eye Hospital" class="img-fluid">
                        </div>
                        <div class="text-center">
                            <a href="/bookappointment" class="btn btn-main-2 btn-round-full">Make Appointment<i
                                    class="icofont-simple-right ml-2"></i></a>
                        </div>
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
                        <h2>CEH IN NUMBERS</h2>
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
                        <span class="h3 counter" data-count="60000" style="color: #223a66;">0</span>+
                        <p style="color: #223a66;">PATIENTS SERVED<br>ANNUALLY</p>
                    </div>
                </div>

                <!-- Doctors/Experts -->
                <div class="col-lg-4 col-md-4">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3 counter" data-count="5" style="color: #223a66;">0</span>+
                        <p style="color: #223a66;">EYE SPECIALISTS AT<br>YOUR SERVICE</p>
                    </div>
                </div>

                <!-- Outreach Programs -->
                <div class="col-lg-4 col-md-4">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3 counter" data-count="10" style="color: #223a66;">0</span>+
                        <p style="color: #223a66;">FREE EYE CLINICS<br>CONDUCTED</p>
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
                        <h2>{{ $subfooter_title }}</h2>
                        <div class="divider mx-auto my-4"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row clients-logo justify-content-center">
                @foreach ($partners as $partner)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 my-3">
                        <div class="card h-100">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <img src="{{ asset($partner->logo) }}" alt="" class="img-fluid" style="max-width: 100px; max-height: 100px;">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    


    <!--
    Essential Scripts
    =====================================-->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="/plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script>
        $(document).ready(function() {
            $('.slick-carousel').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                dots: true,
                arrows: false
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
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
                notification.innerHTML =
                    '<h4>Amazing service!</h4><span>John Partho</span><p>They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.</p>';


                // Append the notification to the container
                notificationContainer.appendChild(notification);

                // After a delay, remove the notification
                setTimeout(function() {
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
</x-layout>
