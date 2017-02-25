<!DOCTYPE html>
<html lang="en">
	<head>
		<title>{{ env('APP_WEB_ADMIN_NAME', 'Ganteng Shop') }} - @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="ecommerce" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<!-- start css -->
		{!! Html::style('assets/frontend/css/bootstrap.css') !!}
		{!! Html::style('assets/frontend/css/style.css') !!}
		<!-- end css -->
		
		<!-- start fonts -->
		{!! Html::style('assets/frontend/css/font-awesome.min.css') !!}
		<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<!-- end fonts -->
		
		{!! Html::script('assets/frontend/js/jquery-1.11.1.min.js') !!}
		{!! Html::script('assets/frontend/js/bootstrap.js') !!}
		@yield('header')
	</head>

	<body>
		@include('layouts.frontend.partials.header')

		@yield('content')

		@include('layouts.frontend.partials.footer')
		
		@yield('scripts')
	</body>
</html>