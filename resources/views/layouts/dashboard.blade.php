<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>{{ config('app.name', 'VocalMix') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Styles -->
  	<link href='{{asset('css/chosen.css')}}' rel='stylesheet' tyle="text/css">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/theme/avocado.css')}}" rel="stylesheet" type="text/css" id="theme-style">
	<link href="{{asset('css/prism.css')}}" rel="stylesheet/less" type="text/css">
	<link href='{{asset('css/fullcalendar.css')}}' rel='stylesheet' tyle="text/css">
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
	<style type="text/css">
		body { padding-top: 102px; }
	</style>
	<link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
	
	<!-- JavaScript/jQuery, Pre-DOM -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="{{asset('js/charts/excanvas.min.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.js')}}"></script>
	<script src="{{asset('js/jquery.jpanelmenu.min.js')}}"></script>
	<script src="{{asset('js/jquery.cookie.js')}}"></script>
	<script src="{{asset('js/avocado-custom-predom.js')}}"></script>

	<!-- HTML5, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	
	@yield('navbar')

	@yield('module_settings')

	@yield('module_messages')
	 
	@yield('module_newmessages')

	<!-- Content Container -->
	<div class="container">

		@yield('main_navigation')

		@yield('alert')

		@yield('content')

	</div> 
	<!-- / Content Container -->

	@yield('footer')

</body>

	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='{{asset('js/jquery.hotkeys.js')}}'></script>
	<script src='{{asset('js/calendar/fullcalendar.min.js')}}'></script>
	<script src="{{asset('js/jquery-ui-1.10.2.custom.min.js')}}"></script>
	<script src="{{asset('js/jquery.pajinate.js')}}"></script>
	<script src="{{asset('js/jquery.prism.min.js')}}"></script>
	<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.time.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('js/charts/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/bootstrap/bootstrap-wysiwyg.js')}}"></script>
	<script src="{{asset('js/bootstrap/bootstrap-typeahead.js')}}"></script>
	<script src="{{asset('js/jquery.easing.min.js')}}"></script>
	<script src="{{asset('js/jquery.chosen.min.js')}}"></script>
	<script src="{{asset('js/avocado-custom.js')}}"></script>
		
</html>