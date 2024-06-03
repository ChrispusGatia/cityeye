<x-layout>
    <html lang="en">
    
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - Pharmacy</title>
    
        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Pharmacy Page" />
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
                            <span class="text-white">Our Pharmacy</span>
                            <h1 class="text-capitalize mb-5 text-lg">City Eye Pharmacy</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="section pharmacy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="department-content mt-5">
                            <h1 class="text-md">{{ $title }}</h1>
                            <div class="divider my-4"></div>
                            <p>{!! $description !!}</p>
    
                            <h3 class="mt-5 mb-4">{{ $subtitle }}</h3>
                            <div class="divider my-4"></div>
                            <ul class="list-unstyled department-service">
                                @foreach($services as $service)
                                <li><i class="icofont-check mr-2"></i>{{$service->item}}</li>
                                @endforeach
                            </ul>
    
                            <a href="/contact" class="btn btn-main-2 btn-round-full">Contact Us <i class="icofont-simple-right ml-2"></i></a>
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
    
                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Assistance?</p>
                                <h3>+254(0)111 032 200</h3>
                            </div>
                        </div>
                    </div>
                </div>
    
                <h3 class="mt-5 mb-4 text-center">Our Pharmacy Gallery</h3>
                <div class="row">
                  
                    @foreach($pharmacy_image as $card)
                    <div class="col-md-4 mb-4">
                        <img src="{{ $card->image }}" alt="Pharmacy Image" class="img-fluid rounded">
                    </div>
                     @endforeach
                     
                   
                </div>
            </div>
        </section>
    
        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="js/script.js"></script>
    </body>
    
    </x-layout>
    