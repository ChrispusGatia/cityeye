<div>

    <head>

        <link rel="stylesheet" href="./plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="./plugins/icofont/icofont.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="./plugins/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="./plugins/slick-carousel/slick/slick-theme.css" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css" />



    </head>

    <div class="row clients-logo">
        @foreach ($partners as $partner)
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="{{ asset($partner->logo) }}" alt="" class="img-fluid" width="300">
                </div>

            </div>
        @endforeach
    </div>



    <!--
    Essential Scripts
    =====================================-->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="/plugins/shuffle/shuffle.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.slick-carousel').slick({
                autoplay: true,
                autoplaySpeed: 1000,
                dots: true,
                arrows: false
            });
        });
    </script>


    <script src="js/script.js"></script>
</div>
