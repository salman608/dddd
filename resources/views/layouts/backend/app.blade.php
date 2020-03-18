<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name', '') }}</title>
    <!-- style  css -->
 <!-- <meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." /> -->
 <!-- <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" /> -->
 <!-- <meta name="author" content="hencework"/> -->

 <!-- Favicon -->
 <link rel="shortcut icon" href="favicon.ico">
 <link rel="icon" href="backend/icon.ico" type="image/x-icon">

 <!-- Morris Charts CSS -->
<link href="{{asset('backend/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>

 <!-- Data table CSS -->
 <link href="{{asset('backend/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

 <link href="{{asset('backend/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

 <!-- Custom CSS -->
 <link href="{{asset('backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">


 @stack('css')



</head>
<body>

  <!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-4-active pimary-color-red">

    @include('layouts.backend.partial.topbar')


    @include('layouts.backend.partial.sidebar')


    @include('layouts.backend.partial.rightbar')

        <!-- Main Content -->
	  @yield('content')

    </div>
    <!-- /#wrapper -->



 <!-- js link -->

 <!-- JavaScript -->
<script src="{{asset('backend/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<!-- Data table JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{asset('backend/dist/js/jquery.slimscroll.js')}}"></script>

	<!-- simpleWeather JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('backend/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('backend/dist/js/simpleweather-data.js')}}"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('backend/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{asset('backend/dist/js/dropdown-bootstrap-extended.js')}}"></script>

	<!-- Sparkline JavaScript -->
	<script src="{{asset('backend/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

	<!-- Owl JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

	<!-- ChartJS JavaScript -->
	<script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script>

	<!-- Morris Charts JavaScript -->
    <script src="{{asset('backend/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

	<!-- Init JavaScript -->
	<script src="{{asset('backend/dist/js/init.js')}}"></script>
	<script src="{{asset('backend/dist/js/dashboard-data.js')}}"></script>

@stack('js')
</body>
</html>
