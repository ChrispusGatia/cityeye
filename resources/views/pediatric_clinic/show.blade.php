<x-layout>
    <html lang="en">
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - Pediatric Services</title>
    
        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Pediatric Services Page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="Themefisher" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />
    
        <!-- theme meta -->
        <meta name="theme-name" content="CityEye" />
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />
    
        <!-- Essential stylesheets =====================================-->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />
    
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    
    <body id="top">
    
        <!-- Header Start -->
        <!-- Header End -->
    
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Our Services</span>
                            <h1 class="text-capitalize mb-5 text-lg">Pediatric Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="section pediatric">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="department-content mt-5">
                            <h1 class="text-md">{{ $heading }}</h1>
                            <div class="divider my-4"></div>
                            <p>{!! $description !!}</p>
    
                            <h3 class="mt-5 mb-4">{{ $sub_title }}</h3>
                            <div class="divider my-4"></div>
                            <ul class="list-unstyled department-service">
                                @foreach($services as $service)
                                <li><i class="icofont-check mr-2"></i>{{$service->item}}</li>
                                @endforeach
                            </ul>
    
                            <a href="/bookappointment" class="btn btn-main-2 btn-round-full">Request An Appointment <i class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>

                        
                   
    
                    <div class="col-lg-4">
                        <div class="sidebar-widget schedule-widget mt-5">
                            <h5 class="mb-4">{{$sidebar_title}}</h5>
    
                            <ul class="list-unstyled">
                                @foreach($sidebar_hours as $days)
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>{{$days->week_days}}</span>
                                    <span>{{$days->time}}</span>
                                </li>
                                @endforeach
                            </ul>
    
                            <div class="sidebar-contact-info mt-4">
                                <p class="mb-0">Need Assistance?</p>
                                <h3> +254(0)714 617 782</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        @foreach ($other_description as $details)
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="title-color mb-4">{{ $details->card_title }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p>{!! $details->card_description !!}</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="vision-image">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $details->youtube_id }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    
        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="js/script.js"></script>
    </body>
    
    </html>
    
 </x-layout>
    