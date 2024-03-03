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
