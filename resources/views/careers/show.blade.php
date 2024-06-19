<x-layout>
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8" />
        <title>City Eye Hospital - Careers</title>

        <!-- Mobile Specific Metas ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Explore current job openings at City Eye Hospital. Join our team and contribute to eye care excellence.">
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

        <style>
            .job-item p {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 5; /* Limit to 5 lines */
                overflow: hidden;
                text-overflow: ellipsis; /* Show ellipsis (...) for overflow */
                margin-bottom: 0;
            }

            .read-more-link {
                display: inline-block;
                margin-top: 10px;
                color: #223a66;
                text-decoration: underline;
                cursor: pointer;
            }

            @media (max-width: 768px) {
                .job-item p {
                    -webkit-line-clamp: unset; /* Show full content on mobile */
                    overflow: visible;
                }

                .read-more-link {
                    display: inline-block; /* Show read more link on mobile */
                }
                .btn-main {
                    margin-top: 30px;
                }
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
                            <span class="text-white">Careers</span>
                            <h1 class="text-capitalize mb-5 text-lg">Join Our Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section careers-listing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Careers Section Title -->
                        <div class="section-title text-center">
                            <h2 class="mb-4">Explore our opportunities!</h2>
                            <div class="divider mx-auto my-4"></div>
                            <!-- Privacy Policy Link -->
                            <p class="mb-0">
                                Before applying, please read <a href="gdprstatement" class="text-primary">Our Privacy & GDPR Statement</a>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-color mb-4 text-center">Current Job Openings</h3>
                    </div>
                </div>

                <!-- Improved Job Listings (Card-based and Side-by-Side) -->
                <div class="container">
                    @php $careersArray = $careers->value(); @endphp
                    @if (empty($careersArray))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="no-job-openings text-center">
                                    <h4 class="text-muted mb-4">No job openings at the moment</h4>
                                    <p class="text-muted">Please check back later or follow us on social media to stay updated on new opportunities.</p>
                                </div>
                            </div>
                        </div>
                    @else
                        @php $count = 0 @endphp
                        @foreach ($careersArray as $career)
                            @if ($count % 2 == 0)
                                <div class="row">
                            @endif
                            <div class="col-lg-6">
                                <div class="feature-item mb-4">
                                    <div class="job-item">
                                        <h3>{{ $career['title'] }}</h3>
                                        <p>{!! Str::limit(strip_tags($career['description']), 200, '...') !!}
                                        <a href="#" class="read-more-link" data-toggle="modal" data-target="#jobModal{{ $loop->index }}">Read More</a></p>
                                        <a href="{{ $career['apply_link'] }}" class="btn btn-main btn-sm btn-round-full d-flex justify-content-center" target="_blank">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            @php $count++ @endphp
                            @if ($count % 2 == 0 || $loop->last)
                                </div>
                            @endif

                            <!-- Modal -->
                            <div class="modal fade" id="jobModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel{{ $loop->index }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="jobModalLabel{{ $loop->index }}">{{ $career['title'] }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {!! $career['description'] !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <!-- Footer Start -->

        <!-- Footer End -->

        <!-- Essential Scripts =====================================-->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="js/script.js"></script>
    </body>
</x-layout>
