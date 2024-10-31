<x-layout>

    <head>
        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="utf-8" />
        <title>City Eye Hospital- Eye Care</title>

        <!-- Mobile Specific Metas
  ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Health Care Medical" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="City Eye Hospital" />
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
                width: 300px;
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
        <style>
            .carousel-control-prev,
            .carousel-control-next {
                font-size: 52px;
                font-weight: bold;
                
                width: 50px;
                height: 50px;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                color: white; /* Arrow color */
            }
        
            .carousel-control-prev {
                left: 0;
            }
        
            .carousel-control-next {
                right: 0;
            }
        
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-image: none;
            }
            
        </style>
        <style>
            .video-gallery-container {
              display: flex;
            }
          
            .video-gallery-player {
              flex: 3;
            }
          
            .video-gallery-list {
              flex: 1;
              max-height: 500px;
              overflow-y: auto;
              border-left: 1px solid #ccc;
              padding-left: 15px;
            }
          
            .video-item {
              display: flex;
              align-items: center;
              text-decoration: none;
              color: #223a66;
              margin-bottom: 10px;
            }
          
            .video-item:hover .video-item-title {
              color: #e12454;
            }
          
            .video-item-thumbnail img {
              width: 60px;
              height: 45px;
              object-fit: cover;
              border-radius: 4px;
            }
          
            .video-item-title {
              font-size: 14px;
              line-height: 1.2;
              margin-left: 10px;
              font-weight: 600;
            }
          </style>
          
        

    </head>

    <!-- header End -->

    @if ($featured_images)
    <div class="slider-container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($featured_images as $index => $image)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset($image->image_asset) }}" alt="Image">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">&lt;</span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">&gt;</span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
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
                                calm and comfortable environment where you can freely ask questions
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
                <div class="col-lg-8 col-sm-12">
                    <div class="about-img">
                        <img src="{{ asset($image_1) }}" alt="" class="img-fluid" style="width: 100%; height: auto;">
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
    

    <section class="section reviews gray-bg" style="border-bottom: 20px solid #fff; padding-bottom: 50px;">
        <div class="container">
          <!-- Section Title -->
          <div class="section-title text-center">
            <h2>Testimonials</h2>
            <div class="divider mx-auto my-4"></div>
            <p>{!! $testimonial_description !!}</p>
          </div>
      
          <div class="video-gallery-container d-flex">
            <!-- Video Player -->
            <div class="video-gallery-player col-lg-9">
              <div id="reviewCarousel" class="carousel" data-ride="false">
                <div class="carousel-inner">
                  @php $testimonialChunks = collect($testimonials)->chunk(2); @endphp
      
                  @foreach ($testimonialChunks as $key => $testimonialChunk)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe 
                          class="embed-responsive-item"
                          src="{{ !empty($testimonialChunk[0]['youtube_id']) ? 'https://www.youtube.com/embed/' . $testimonialChunk[0]['youtube_id'] : '' }}"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          allowfullscreen>
                        </iframe>
                      </div>
                      
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
      
            <!-- Video List Sidebar -->
            <div class="video-gallery-list col-lg-3 pl-3">
              @foreach ($testimonials as $testimonial)
                <a class="video-item d-flex align-items-center mb-3" href="#" onclick="playVideo('{{ $testimonial['youtube_id'] }}', event)">
                  <div class="video-item-thumbnail mr-2">
                    <img src="https://img.youtube.com/vi/{{ $testimonial['youtube_id'] }}/default.jpg" alt="{{ $testimonial['customer_name'] }} thumbnail" class="img-fluid">
                  </div>
                  <div class="video-item-title">
                    {{ $testimonial['customer_name'] ?? $testimonial['doctors_name'] }} - {{ $testimonial['testimonial_quote'] }}<br>
                    <small class="text-muted">Posted on {{ $testimonial['posting_date'] }}</small>
                  </div>
                </a>
              @endforeach
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
                        <span class="h3 counter" data-count="10" style="color: #223a66;">0</span>+
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
        function playVideo(youtubeId, event) {
          // Prevent the default link behavior
          event.preventDefault();
      
          // Select the iframe in the active carousel item and update its src
          const videoFrame = document.querySelector('#reviewCarousel .carousel-item.active iframe');
          videoFrame.src = `https://www.youtube.com/embed/${youtubeId}`;
      
          // Optionally, you could add autoplay here
          videoFrame.src += '?autoplay=1';
        }
      </script>


    <script>
        $(document).ready(function() {
            $('.slick-carousel').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true // Changed arrows to true to show navigation arrows
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            showFirstTestimonial();
        }, 5000); // Wait for 5 seconds before showing first testimonial

        function showFirstTestimonial() {
            showTestimonial(
                '<h4 style="margin: 0 0 10px 0; font-size: 18px; color: #f4f9fc;">Amazing service!</h4>' +
                '<span style="display: block; margin-bottom: 10px; font-size: 14px; color: #f4f9fc;">Anne Wangui</span>' +
                '<p style="margin: 0; font-size: 16px; color: #eff0f;">Thank you City Eye Hospital for the excellent service and care you provide to your patients.</p>',
                function() {
                    setTimeout(showSecondTestimonial, 1000); // Wait for 1 second before showing second testimonial
                }
            );
        }

        function showSecondTestimonial() {
            showTestimonial(
                '<h4 style="margin: 0 0 10px 0; font-size: 18px; color: #f4f9fc;">Highly recommend!</h4>' +
                '<span style="display: block; margin-bottom: 10px; font-size: 14px; color: #f4f9fc;">Eunice Hillary</span>' +
                '<p style="margin: 0; font-size: 16px; color: #eff0f;">The hospital is very well organized with every department well attended. Very clean hospital.</p>'
            );
        }

        function showTestimonial(content, callback) {
            // Create a container for notifications
            var notificationContainer = document.createElement('div');
            notificationContainer.style.position = 'fixed';
            notificationContainer.style.bottom = '20px';
            notificationContainer.style.left = '20px';
            notificationContainer.style.width = '300px';
            notificationContainer.style.zIndex = '1000';
            document.body.appendChild(notificationContainer);

            // Create a notification div
            var notification = document.createElement('div');
            notification.className = 'alert';
            notification.style.backgroundColor = '#223a66';
            notification.style.border = '2px solid #e12454';
            notification.style.borderRadius = '10px';
            notification.style.color = '#eff0f';
            notification.style.padding = '15px';
            notification.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
            notification.style.marginBottom = '10px';

            // Add testimonial content to the notification
            notification.innerHTML = content;

            // Append the notification to the container
            notificationContainer.appendChild(notification);

            // After a delay, remove the notification
            setTimeout(function() {
                notificationContainer.removeChild(notification);
                // Remove the container if no notifications are left
                if (notificationContainer.childNodes.length === 0) {
                    document.body.removeChild(notificationContainer);
                }
                if (callback) callback(); // Call the callback function if provided
            }, 5000); // Display the notification for 5 seconds
        }
    });
</script>

    <script src="js/script.js"></script>
</x-layout>
