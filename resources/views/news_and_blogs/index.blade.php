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

            /* Flipbook modal styles */
            .flipbook-modal {
                display: none;
                position: fixed;
                z-index: 1100;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.8);
            }

            .flipbook-content {
                margin: 10% auto;
                padding: 20px;
                width: 90%;
                height: 90%;
                max-width: 1000px;
                max-height: 800px;
                background-color: white;
                text-align: center;
                position: relative;
            }

            .close-btn {
                color: #aaa;
                position: absolute;
                top: 10px;
                right: 20px;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
            }

            /* Error message style */
            .error-message {
                color: red;
                margin-top: 10px;
                text-align: center;
            }

            /* Responsive adjustments */
            @media (max-width: 767px) {
                .flipbook-content {
                    margin: 15% auto;
                    width: 90%;
                    height: 80%;
                    max-width: 100%;
                    max-height: 100%;
                }
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
                                City Eye Hospital Newsletters
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
                    <!-- News Items -->
                    @php
                        // Fetch all entries from the "news_and_blogs" collection
                        $entries = \Statamic\Facades\Entry::query()->where('collection', 'news_and_blogs')->get();
                    @endphp
                
                    @foreach ($entries as $entry)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <!-- Retrieve the asset URL -->
                                @if ($entry->get('blog_image'))
                                  <img src="{{ '/assets/' . $entry->get('blog_image') }}" class="card-img-top" alt="{{ $entry->get('title') }}" />
                                @else
                                    <!-- Fallback image -->
                                    <img src="/path/to/default-image.jpg" class="card-img-top" alt="Default Image" />
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #223a66">
                                        {{ $entry->get('title') }}
                                    </h5>
                                    <p class="card-text">
                                        <!-- Retrieve and truncate content -->
                                        {!! \Illuminate\Support\Str::limit(strip_tags($entry->augmentedValue('blog_content')), 100) !!}

                                    </p>
                                    <a href="{{ route('news_and_blogs.show', $entry->slug()) }}" class="btn btn-main btn-round-full">Read More</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <i class="icofont-calendar mr-1"></i>{{ \Carbon\Carbon::parse($entry->get('posting_date'))->format('d F Y') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End News Items -->
                </div>
                
                
                        
                    </div>
                </div>

                <!-- Pagination -->
                <div class="col-lg-12 col-md-12">
                    <nav class="pagination justify-content-center">
                        <div class="nav-links">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#!">2</a>
                            <a class="page-numbers" href="#!">3</a>
                            <a class="page-numbers" href="#!"><i
                                    class="icofont-thin-double-right"></i></a>
                        </div>
                    </nav>
                </div>
                <!-- End Pagination -->

            </div>
        </section>
        <!-- End News Section -->

        <!-- Essential Scripts ================================================== -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
    </body>

</x-layout>
