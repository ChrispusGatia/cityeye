<x-layout>

    <head>


        <!-- Custom Styles for Gallery -->
        <style>
            .gallery-item {
                cursor: pointer;
                overflow: hidden;
            }

            .gallery-item img {
                width: 100%;
                height: auto;
                transition: transform 0.3s ease;
            }

            .gallery-item img:hover {
                transform: scale(1.1);
            }
        </style>
    </head>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>CityEye - Careers</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CityEye Careers Page" />
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
                                <img src="{{ asset($content->card_image) }}" alt="Comprehensive Eye Screening"
                                    class="img-fluid">
                                <div class="content">
                                    {!! $content->card_description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Gallery Modal -->
        <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalLabel">Outreach Camp Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Gallery Content -->
                        <div id="carouselGallery" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Image 1 -->
                                <div class="carousel-item active">
                                    <img src="images/gallery/img-2.jpg" class="d-block w-100" alt="Gallery Image 1">
                                </div>
                                <!-- Image 2 -->
                                <div class="carousel-item">
                                    <img src="images/gallery/img-2.jpg" class="d-block w-100" alt="Gallery Image 2">
                                </div>
                                <!-- Video 1 -->
                                <div class="carousel-item">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/gDw6yv4m_Rc" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- Video 2 -->
                                <div class="carousel-item">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/eCpZWe30PNo" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
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
