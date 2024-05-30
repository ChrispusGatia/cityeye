<x-layout>
 
<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8" />
    <title>City Eye Hospital - NewsLetter</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="City Eye Hospital - News and Events" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta name="author" content="City Eye Hospital" />
    <meta name="generator" content="City Eye Hospital News and Events Page v1.0" />

    <!-- Theme Meta ================================================== -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon ================================================== -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Essential Stylesheets ================================================== -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />

    <!-- Main Stylesheet ================================================== -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Additional Styles for Hover Effect -->
    <style>
        /* Hover effect for card images */
        .card-img-top {
            transition: transform 0.3s ease;
        }
        .card-img-top:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body id="top">
    <!-- Page Title Section -->
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">NewsLetters</span>
                        <h1 class="text-capitalize mb-5 text-lg">
                            {{ $title }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Section -->

    <!-- News Section -->
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <!-- News Articles -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- News Items -->
                        @foreach ($content as $item)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <img src="images/news/enhance.jpg" class="card-img-top" alt="News Image" />
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #223a66">
                                            {{ $item->title }}
                                        </h5>
                                        <p class="card-text">
                                            {{ $item->description }}
                                        </p>
                                        <button onclick="openFlipbook('{{ $item->title }}')" class="btn btn-main btn-round-full">Read More</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End News Items -->
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Pagination -->

        </div>
    </section>
    <!-- End News Section -->

    
    <!-- Essential Scripts ================================================== -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
</body>
</x-layout>