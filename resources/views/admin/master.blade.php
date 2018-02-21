<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Font-->
	<!-- <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
	      type="text/css">
	<link href="{{asset('admin_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_assets/css/colors.css')}}" rel="stylesheet" type="text/css">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Admin | @yield('title')</title>
	<!--favicon-->
{{--<link rel="shortcut icon" href="favicon/favicon-96x96.png">--}}
<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('admin_assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/ui/nicescroll.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/pages/layout_sidebar_sticky_custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/core/app.js')}}"></script>
	<!-- /theme JS files -->
	@stack('scripts')
</head>
<body class="navbar-bottom {{Route::is('admin.login') ? 'login-container': ''}}">
@yield('content')
</body>
</html>