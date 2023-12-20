<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>City Eye Hospital - Educational Resources</title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Explore educational materials to enhance your knowledge about eye health at City Eye Hospital." />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />
    <meta name="author" content="City Eye Hospital" />
    <meta
        name="generator"
        content="City Eye Hospital Educational Page v1.0"
    />

    <!-- theme meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- Essential stylesheets -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css" />
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link
        rel="stylesheet"
        href="plugins/slick-carousel/slick/slick-theme.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body id="top">

    <!-- Header Section -->
    <?php include("assets/include/header.php"); // Include header file ?>
    <!-- End Header Section -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Educational Resources</span>
                        <h1 class="text-capitalize mb-5 text-lg">Embark on Vision Care Education</h1>
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
                        <h2 class="mb-4">Explore Eye Health Education</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Welcome to City Eye Hospital's educational hub. Discover valuable resources designed to enhance your knowledge about eye health. Whether you're a patient or a healthcare professional, empower yourself with essential information.
                        </p>
                    </div>
                </div>
            </div>

           <!-- Educational Content -->
<div class="row">
    <div class="col-lg-4">
        <div class="mb-5 text-center">
            <img src="images/educational/anatomy.jpg" alt="Eye Anatomy" class="img-fluid w-100">
            <h4 class="mt-3">Understanding Eye Anatomy</h4>
            <p>Explore the intricacies of the eye's anatomy and learn about each part's functions for better understanding of eye health.</p>
            <button class="btn btn-primary btn-sm mt-3" onclick="openVideoModal('r_dXLAvoEfg')">
                <i class="icofont-play-circle"></i> Watch Video
            </button>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mb-5 text-center">
            <img src="images/educational/anatomy.jpg" alt="Eye Care Tips" class="img-fluid w-100">
            <h4 class="mt-3">Essential Eye Care Tips</h4>
            <p>Discover practical tips and habits to maintain optimal eye health and prevent common eye issues. Your eyes deserve the best care!</p>
            <button class="btn btn-primary btn-sm mt-3" onclick="openVideoModal('r_dXLAvoEfg')">
                <i class="icofont-play-circle"></i> Watch Video
            </button>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="text-center">
            <img src="images/educational/anatomy.jpg" alt="Common Eye Diseases" class="img-fluid w-100">
            <h4 class="mt-3">Common Eye Diseases</h4>
            <p>Gain insights into various eye diseases, their symptoms, and available treatment options. Knowledge is the first step towards prevention and care.</p>
            <button class="btn btn-primary btn-sm mt-3" onclick="openVideoModal('r_dXLAvoEfg')">
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
        <iframe id="youtubePlayer" width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<!-- End Video Modal -->

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

    <!-- Footer Section -->
    <?php include("assets/include/footer.php"); // Include footer file ?>
    <!-- End Footer Section -->

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

</html>
