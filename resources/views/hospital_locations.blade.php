

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8" />
    <title>CityEye- Hospital Locations</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Health Care Medical Html5 Template" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=5.0"
    />
    <meta name="author" content="Themefisher" />
    <meta name="generator" content="Themefisher CityEye HTML Template v1.0" />

    <!-- theme meta -->
    <meta name="theme-name" content="CityEye" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

    <!-- 
  Essential stylesheets
  =====================================-->
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

  <body id="top"></body>
</html>

<!-- header Start -->



<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Hospital Locations</span>
          <h1 class="text-capitalize mb-5 text-lg">Find Our Hospitals</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hospital Locations Map -->
<section class="contact-info pb-0">
    <div class="container">

    
        <div class="row">
            <div class="col-lg-4">
                <!-- Sidebar with Hospital Locations -->
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-map"></i>
                    <h5>Branch Locations</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="hospital-location" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4743.502116636985!2d36.80408283879087!3d-1.2983866077723598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ea15cd9e7d%3A0x90f3bd97e5159bfc!2sCity%20Eye%20Hospital!5e0!3m2!1sen!2ske" data-title="Main Hospital">Main Hospital</a></li>
                        <!-- Add similar links for other branches -->
                        <li><a href="#" class="hospital-location" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.826965279353!2d36.9598526!3d-0.42850249999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18286146732cdb53%3A0x45becfcac6fb63ab!2sCity%20Eye%20Hospital%20-%20Nyeri!5e0!3m2!1sen!2ske!4v1669289149340!5m2!1sen!2ske" data-title="Nyeri Hospital">Nyeri Hospital</a></li>
                        <li><a href="#" class="hospital-location" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.615025574336!2d36.8044979838882!3d-1.2958189771624877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10c1c8deb29f%3A0x1addc640ec7641a0!2sRalph%20Bunche%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1631535375080!5m2!1sen!2ske" data-title="Appointment Clinic">Appointment Clinic</a></li>
                        <li><a href="#" class="hospital-location" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.788688278033!2d36.6572366!3d-1.3583221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f034453812b63%3A0x5b18f2d50bfe9691!2sCity%20Eye%20Hospital%20-%20Ngong%20Milele%20Mall!5e0!3m2!1sen!2ske!4v1685612866572!5m2!1sen!2ske" data-title="VC Ngong">VC Ngong</a></li>
                    </ul>
                    <span class="btn btn-primary btn-block">Click on a branch name</span>
                </div>
            </div>

            <div class="col-lg-8">
                <!-- Google Map Container -->
                
                <div id="branchMap" style="height: 450px;"></div>
            </div>
        </div>
    </div>
</section>

<!-- footer Start -->
 // get footer file?>
<!-- footer End -->


<!-- JavaScript to handle branch map display -->
<script>
    // Function to load and display the branch map
    function loadBranchMap(src, title) {
        var mapContainer = document.getElementById('branchMap');
        mapContainer.innerHTML = '<iframe src="' + src + '" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
    }

     // Load Main Hospital map by default
     loadBranchMap("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4743.502116636985!2d36.80408283879087!3d-1.2983866077723598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ea15cd9e7d%3A0x90f3bd97e5159bfc!2sCity%20Eye%20Hospital!5e0!3m2!1sen!2ske", "Main Hospital");

    // Event listener for branch links
    document.querySelectorAll('.hospital-location').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var mapSrc = this.getAttribute('data-src');
            var branchTitle = this.getAttribute('data-title');
            loadBranchMap(mapSrc, branchTitle);
        });
    });
</script>

<!-- 
    Essential Scripts
    =====================================-->
<script src="plugins/jquery/jquery.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="js/script.js"></script>

</body>
</html>
