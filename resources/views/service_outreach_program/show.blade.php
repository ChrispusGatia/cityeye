<x-layout>
    <head>
        <!-- Custom Styles for Gallery and Cards -->
        <style>
            .gallery-item {
                cursor: pointer;
                overflow: hidden;
                margin: 10px;
            }
    
            .gallery-item img,
            .gallery-item .embed-responsive {
                width: 100%;
                height: auto;
                transition: transform 0.3s ease;
            }
    
            .gallery-item img:hover,
            .gallery-item .embed-responsive:hover {
                transform: scale(1.1);
            }
    
            .card-content {
                display: -webkit-box;
                -webkit-line-clamp: 5;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }
    
            .modal .modal-dialog {
                max-width: 80%;
            }
    
            .gallery-row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
    
            .carousel-control-prev,
            .carousel-control-next {
                color: #007bff; /* Blue color */
            }
    
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-color: #007bff; /* Blue color */
            }
        </style>
    </head>
    
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - Outreach Program</title>
    
        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Outreach Program Page" />
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
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Community Outreach</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="section service-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            {!! $body_description !!}
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    @foreach ($card_section as $content)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-block mb-5 feature-item">
                            <img src="{{ asset($content->card_image) }}" alt="Outreach Program" class="img-fluid gallery-item">
                            <div class="content">
                                <div class="card-content">
                                    {!! $content->card_description !!}
                                </div>
                                <button type="button" class="btn btn-main btn-round-full" data-toggle="modal"
                                    data-target="#readMoreModal{{ $content->id }}">Read More</button>
                            </div>
                        </div>
                    </div>
    
                    <!-- Read More Modal -->
                    <div class="modal fade" id="readMoreModal{{ $content->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="readMoreModalLabel{{ $content->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="readMoreModalLabel{{ $content->id }}">More Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! $content->card_description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
    
                <!-- Gallery Section -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="text-center mb-4">Outreach Camp Gallery</h3>
                    </div>
                    <div class="col-12">
                        <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Image Gallery Items -->
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        @foreach($outreach_images as $index => $card)
                                        <div class="col-md-4 mb-4">
                                            <div class="card h-100 gallery-item" data-toggle="modal" data-target="#galleryModal" data-slide-to="{{ $index }}">
                                                <img src="{{ asset($card->image) }}" class="card-img-top img-fluid rounded" alt="Outreach Image">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Video Gallery Items -->
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        @foreach($outreach_videos as $index => $card)
                                        <div class="col-md-4 mb-4">
                                            <div class="card h-100 gallery-item" data-toggle="modal" data-target="#videoModal" data-slide-to="{{ $index }}">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $card->youtube_id }}" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Image Modal -->
        <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($outreach_images as $index => $card)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset($card->image) }}" class="d-block w-100" alt="Outreach Image">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="videoCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($outreach_videos as $index => $card)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $card->youtube_id }}" allowfullscreen></iframe>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </x-layout>
    