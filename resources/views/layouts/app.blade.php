<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Wotech - IT Service HTML Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="front/imgs/favicon.png">
   <!-- CSS here -->
   <link rel="stylesheet" href="{{ url('front/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/meanmenu.min.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/animate.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/swiper.min.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/slick.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/fontawesome-pro.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/icomoon.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ url('front/css/main.css') }}">

    @yield('style')

</head>

<body>
 
    @include('layouts._header')

    @yield('content')

    @include('layouts._footer')

     <!-- JS here -->
   <script src="{{ url('front/js/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ url('front/js/waypoints.min.js') }}"></script>
   <script src="{{ url('front/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ url('front/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ url('front/js/swiper.min.js') }}"></script>
   <script src="{{ url('front/js/slick.min.js') }}"></script>
   <script src="{{ url('front/js/magnific-popup.min.js') }}"></script>
   <script src="{{ url('front/js/counterup.js') }}"></script>
   <script src="{{ url('front/js/wow.js') }}"></script>
   <script src="{{ url('front/js/main.js') }}"></script>

   @yield('script')

</body>

</html>