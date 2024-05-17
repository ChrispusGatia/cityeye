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

        <!-- Flipbook Section -->
        <section class="section">
            <div class="container">
                <!-- Flipbook Container -->
                <div id="flipbook" style="width: 100%; height: 800px;"></div>
            </div>
        </section>
        <!-- End Flipbook Section -->

        <script>
            // Function to open flipbook with specified title
            function openFlipbook(title) {
                // You can modify this function to load the flipbook with a specific title
                // Example: Load flipbook based on the title passed as a parameter
                console.log("Opening flipbook for title:", title);
                
                // You can use the title to determine which flipbook to load
                // For now, let's load a sample flipbook (replace this with your logic)
                const flipbookId = "19"; // Sample flipbook ID
                const flipbookDataUrl = `https://karenhospital.org/wp-content/uploads/ipages_flipbook/${flipbookId}/config.json`;
                
                // Fetch flipbook data and initialize the flipbook
                $.getJSON(flipbookDataUrl, function(data) {
                    const images = data.pages.map(page => page.url);
                    const $flipbookContainer = $("#flipbook");
    
                    // Initialize Turn.js for flipbook
                    $flipbookContainer.turn({
                        width: "100%",
                        height: 800,
                        autoCenter: true,
                        pages: images.length,
                        when: {
                            turned: function(event, page, view) {
                                // Play sound when turning page (replace with your logic)
                                console.log("Page turned:", page);
                                playPageTurnSound(); // Function to play sound
                            }
                        }
                    });
    
                    // Load flipbook images dynamically
                    images.forEach((imageUrl, index) => {
                        const $page = $("<div>").css({
                            "background-image": `url(${imageUrl})`,
                            "background-size": "cover"
                        });
                        $flipbookContainer.turn("addPage", $page, index + 1);
                    });
    
                    // Function to play page turn sound (replace with your logic)
                    function playPageTurnSound() {
                        console.log("Playing page turn sound...");
                        // Add your code to play the sound effect here
                        // Example: You can use HTML5 audio element or another library for sound effects
                    }
                });
            }

            // Call openFlipbook function with the desired title (replace with actual title)
            openFlipbook("TKH News at Sunrise 46th Edition");
        </script>

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
