<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="SMSONE" />
    <meta name="description" content="EMIS - Education Management Information System" />
    <meta name="keywords" content="Education Management Information System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SITE TITLE -->
    <title>Agile Project Kano</title>

    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
    <link href="landing/css/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <!-- PLUGINS STYLESHEET -->
    <link href="landing/css/magnific-popup.css" rel="stylesheet">
    <link href="landing/css/owl.carousel.min.css" rel="stylesheet">
    <link href="landing/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="landing/css/slick.css" rel="stylesheet">
    <link href="landing/css/slick-theme.css" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="landing/css/animate.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="landing/css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="landing/css/responsive.css" rel="stylesheet">
    <link href="css/video.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">
    
</head>

<body>
    <div id="page" class="page">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    <script src="landing/js/jquery-3.3.1.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/modernizr.custom.js"></script>
    <script src="landing/js/jquery.easing.js"></script>
    <script src="landing/js/jquery.appear.js"></script>
    <script src="landing/js/jquery.stellar.min.js"></script>
    <script src="landing/js/jquery.scrollto.js"></script>
    <script src="landing/js/imagesloaded.pkgd.min.js"></script>
    <script src="landing/js/isotope.pkgd.min.js"></script>
    <script src="landing/js/slick.min.js"></script>
    <script src="landing/js/owl.carousel.min.js"></script>
    <script src="landing/js/jquery.magnific-popup.min.js"></script>
    <script src="landing/js/quick-form.js"></script>
    <script src="landing/js/contact-form.js"></script>
    <script src="landing/js/comment-form.js"></script>
    <script src="landing/js/sign-in-form.js"></script>
    <script src="landing/js/sign-up-form.js"></script>
    <script src="landing/js/jquery.validate.min.js"></script>
    <script src="landing/js/jquery.ajaxchimp.min.js"></script>
    <script src="landing/js/wow.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        $(document).ready(function(){

            $('.videos video').click(function(){

                $(this).addClass('active').siblings().removeClass('active');

                var src = $(this).attr('src');
                $('.main-video video').attr('src',src);
            });
        });

    </script>

    {{-- <script src="{{asset('landing/js/custom.js')}}"></script> --}}
</body>

</html>
