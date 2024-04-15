<x-layout>

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

        <!-- Header Section -->
        <!-- End Header Section -->

        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">Educational Resources</span>
                            <h1 class="text-capitalize mb-5 text-lg">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Educational Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="mb-4">{{ $body_title }}</h2>
                            <div class="divider mx-auto my-4"></div>
                            {!! $body_description !!}
                        </div>
                    </div>
                </div>

                <!-- Educational Content -->
                <div class="row">
                    @foreach ($card_section as $content)
                        <div class="col-lg-4">
                            <div class="feature-item mb-4">
                                <div class="mb-5 text-center">
                                    <img src="{{ asset($content->card_image) }}" alt="Eye Anatomy"
                                        class="img-fluid w-100">
                                    {!! $content->card_description !!}
                                    <button class="btn btn-primary btn-sm mt-3"
                                        onclick="openVideoModal('{{ $content->youtube_id }}')">
                                        <i class="icofont-play-circle"></i> Watch Video
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- End Educational Content -->

                        <!-- Video Modal -->
                        <div id="videoModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeVideoModal()">&times;</span>
                                <iframe id="youtubePlayer" width="100%" height="400" src="" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- End Video Modal -->
                    @endforeach

                    <script>
                        function openVideoModal(videoId) {
                            var modal = document.getElementById('videoModal');
                            var iframe = document.getElementById('youtubePlayer');
                            iframe.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
                            modal.style.display = 'block';
                        }

                        function closeVideoModal() {
                            var modal = document.getElementById('videoModal');
                            var iframe = document.getElementById('youtubePlayer');
                            iframe.src = '';
                            modal.style.display = 'none';
                        }
                    </script>
                </div>
        </section>
        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>

        <!-- Scroll to Top Button -->
        <div class="col-lg-4">
            <a class="backtop scroll-top-to" href="#top">
                <i class="icofont-long-arrow-up"></i>
            </a>
        </div>
    </body>
</x-layout>
