<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', '') }}</title>

    <!-- style -->

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- plugin scripts -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/zimed-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <!-- hover effect css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/hover/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/hover/css/hover-min.css')}}">


    <!-- Fonts -->



</head>
<body>

  @include('layouts.frontend.partial.header')

  @yield('content')

  @include('layouts.frontend.partial.footer')


 <!-- js link -->
   <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/bootstrap-datepicker.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.bxslider.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
   <script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
   <!-- template scripts -->
   <script src="{{asset('frontend/assets/js/theme.js')}}"></script>

   <script src="{{asset('frontend/assets/js/app.js')}}"></script>
   <script src="{{asset('frontend/assets/js/particles.js')}}"></script>

</body>
</html>
