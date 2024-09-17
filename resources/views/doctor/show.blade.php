<x-layout>
    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8" />
        <title>City Eye Hospital - Doctors & Specialists</title>

        <!-- Mobile Specific Metas -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Meet our team of specialized doctors, including retina, cornea, glaucoma, cataract, and pediatric eye care experts at City Eye Hospital." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta name="author" content="City Eye Hospital" />
        <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

        <!-- SEO Meta -->
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="City Eye Hospital - Meet Our Specialized Doctors" />
        <meta property="og:description" content="Get the best eye care from our experienced team specializing in retina, cornea, glaucoma, cataract, and pediatric care." />
        <meta property="og:image" content="https://www.cityeyehospital.or.ke/images/og-image.jpg" />
        <meta property="og:url" content="https://www.cityeyehospital.or.ke/doctors" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="City Eye Hospital - Meet Our Specialized Doctors" />
        <meta name="twitter:description" content="Specialized care from retina, cornea, glaucoma, and pediatric eye doctors at City Eye Hospital." />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

        <!-- Essential Stylesheets -->
        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css" />
        <link rel="stylesheet" href="css/style.css" />

        <style>
            /* Ensure button labels appear in one line */
            .btn-group-toggle .btn {
                white-space: nowrap;
            }

            /* Align doctor profiles to start at each new row */
            .shuffle-item {
                display: block; /* Use block to ensure proper alignment in the grid */
                margin-left: 0;
                margin-right: 0;
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
                            <span class="text-white">All Doctors</span>
                            <h1 class="text-capitalize mb-5 text-lg">Our Doctors & Clinicians</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Doctors Section -->
        <section class="section doctors">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2>Meet Our Doctors</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>At our eye hospital, our dedicated team offers specialized ophthalmic care for exceptional treatment. Meet our esteemed doctors below.</p>
                        </div>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Doctors
                            </label>
                            <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Retina" />Retina
                            </label>
                            <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Cornea" />Cornea
                            </label>
                            <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Glaucoma" />Glaucoma
                            </label>
                            <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Cataract" />Cataract
                            </label>
                            <!-- <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Paediatric" />Paediatric
                            </label> -->
                            <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Ophthalmologist" />Ophthalmologist
                            </label>
                            <label class="btn">
                                <input type="radio" name="shuffle-filter" value="Ophthalmic Clinical Officer" />Ophthalmic Clinical Officers
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Doctors Listing -->
                <div class="row shuffle-wrapper portfolio-gallery">
                    @foreach ($doctor_details as $doctor)
                        @php
                            // Convert specialities into an array if it's a string
                            $specialities = is_array($doctor->specialities) ? $doctor->specialities : explode(',', $doctor->specialities);
                        @endphp

                        <!-- Doctor Profile Card -->
                        <div class="col-lg-3 col-sm-6 mb-4 shuffle-item" data-groups="{{ json_encode($specialities) }}">
                            <div class="position-relative doctor-inner-box">
                                <div class="doctor-profile">
                                    <div class="doctor-img">
                                        <img src="{{ asset($doctor->doctors_image) }}" alt="{{ $doctor->doctors_name }}" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="content mt-3 text-center">
                                    <h4 class="mb-0">{{ $doctor->doctors_name }}</h4>
                                    <p class="text-muted">{{ $doctor->job_title }}</p>
                                    <p class="text-primary mb-2">
                                        {{ implode(', ', $specialities) }}
                                    </p>
                                    <div class="doctor-social">
                                        <a href="{{ $doctor->linkedin_profile }}" target="_blank" class="text-primary">
                                            <i class="icofont-linkedin"></i> LinkedIn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="section cta-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cta-content">
                            <div class="divider mb-4"></div>
                            <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy vision through our comprehensive eye care services.</span></h2>
                            <a href="/bookappointment" class="btn btn-main-2 btn-round-full">Book Appointment <i class="icofont-simple-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript for Filtering -->
        <script>
            document.querySelectorAll('input[name="shuffle-filter"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const filterValue = this.value;  // Get the value of the selected filter
                    const items = document.querySelectorAll('.shuffle-item');  // Get all doctor profile items
                    
                    items.forEach(item => {
                        const groups = JSON.parse(item.getAttribute('data-groups'));  // Parse the data-groups attribute
                        
                        // Check if the selected filter value is 'all' or matches any of the specialties
                        if (filterValue === 'all' || groups.includes(filterValue)) {
                            item.style.display = 'block';  // Show the profile if it matches the filter
                        } else {
                            item.style.display = 'none';  // Hide the profile if it doesn't match the filter
                        }
                    });
                });
            });
        </script>

        <!-- Essential Scripts -->
        <script src="plugins/jquery/jquery.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slick-carousel/slick/slick.min.js"></script>
        <script src="plugins/shuffle/shuffle.min.js"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
        <script src="plugins/google-map/gmap.js"></script>

        <script src="/js/script.js"></script>
    </body>
</x-layout>
