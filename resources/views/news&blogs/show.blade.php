<x-layout>

    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>City Eye Hospital - News and Blogs</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Stay updated with the latest news and events at City Eye Hospital. Learn about our recent initiatives and patient safety efforts." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="City Eye Hospital" />
        <meta name="generator" content="City Eye Hospital News and Blogs Page v1.0" />

        <!-- SEO Meta ================================================== -->
        <meta name="keywords" content="City Eye Hospital, News, Blogs, Patient Safety, Eye Care, Healthcare" />
        <meta name="robots" content="index, follow" />
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
    </head>

    <body id="top">
        <!-- Page Title Section -->
        <section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">News & Blogs</span>
                            <h1 class="text-capitalize mb-5 text-lg">Our Latest News and Blogs</h1>
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
                    <div class="col-lg-8">
                        <div class="row">
                            <!-- Loop through each blog in the content -->
                            @foreach ($content as $blog)
                                <div class="col-lg-12 col-md-12 mb-5">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="{{ asset($blog['blog_image']) }}" alt="{{ $blog['blog_title'] }}" class="img-fluid">
                                        </div>
                                        <div class="blog-item-content">
                                            <div class="blog-item-meta mb-3 mt-4">
                                                <span class="text-black text-capitalize mr-3">
                                                    <i class="icofont-calendar mr-1"></i>{{ $blog['publishing_date']->format('d M Y') }}
                                                </span>
                                            </div>
                                            <h2 class="title-color">{{ $blog['blog_title'] }}</h2>
                                            <div class="divider my-4"></div>
                                            <p class="mb-4">{!! $blog['description'] !!}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Patient Safety Section -->
                                <div class="col-lg-12 col-md-12 mb-5">
                                    <h5 class="title-color">{{ $blog['sub_title'] }}</h5>
                                    <div class="divider my-4"></div>

                                    @if (isset($blog['sub_content']) && !empty($blog['sub_content']))
                                        <div class="row">
                                            @foreach ($blog['sub_content'] as $sub)
                                                <div class="col-md-4 mb-4">
                                                    <div class="card">
                                                        <img src="{{ asset($sub['thumbnail_image'][0]) }}" class="card-img-top" alt="{{ $sub['sub_title'] }}">
                                                        <div class="card-body">
                                                            <p class="card-text">{!! $sub['description'] !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar Section -->
                    <div class="col-lg-4">
                        <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                            <!-- Sidebar Widget (Search) -->
                            <div class="sidebar-widget search mb-3">
                                <h5>Search Here</h5>
                                <form action="#" class="search-form">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <i class="ti-search"></i>
                                </form>
                            </div>

                            <!-- Sidebar Widget (Popular Posts) -->
                            <div class="sidebar-widget latest-post mb-3">
                                <h5>Popular Posts</h5>

                                @foreach ($content as $blog)
                                    <div class="py-2">
                                        <span class="text-sm text-muted">
                                            <i class="icofont-calendar mr-1"></i>{{ \Carbon\Carbon::parse($blog['publishing_date'])->format('d M Y') }}
                                        </span>
                                        <h6 class="my-2">
                                            <a href="{{ url('blog/' . $blog['id']) }}">{{ $blog['blog_title'] }}</a>
                                        </h6>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Section -->

        <!-- Essential Scripts ================================================== -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>
    </body>
</x-layout>