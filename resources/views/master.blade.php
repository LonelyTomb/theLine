<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Font-->
	<!-- <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> -->
	<!--Stylesheets-->
	<link type="text/css" rel="stylesheet" href="{{mix('css/materialdesignicons.css')}}" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="{{mix('css/fonts.css')}}" media="screen,projection"/>

	<link type="text/css" rel="stylesheet" href="{{mix('css/materialize.css')}}" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="{{mix('css/app.css')}}" media="screen,projection"/>

	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>theLine | @yield('title')</title>
	<!--Preload CSS-->
{{--<link rel="preload" href="{{mix('css/please-wait.css')}}" as="style">--}}
{{--<link href="{{mix('css/please-wait.css')}}" rel="stylesheet">--}}

<!--Preload JS-->
	<link rel="preload" href="{{mix('js/jquery.js')}}" as="script">
	<script type="text/javascript" src="{{mix('js/jquery.js')}}"></script>
	{{--<link rel="preload" href="{{mix('js/please-wait.js')}}" as="script">--}}
	{{--<script src="{{mix('js/please-wait.js')}}"></script>--}}
	{{--<link rel="shortcut icon" href="{{mix('images/favicon/favicon-96x96.png')}}">--}}

	<script type="text/javascript" src='{{mix('js/jquery.easing.1.3.js')}}'></script>
	<script type="text/javascript" src="{{mix('js/materialize.js')}}"></script>
	<script type="text/javascript" src="{{mix('js/jquery.arbitrary-anchor.js')}}"></script>
	@stack('scripts')
</head>
<body>
@include('layouts.header')
<main>
	@yield('content')
</main>
@include('layouts.footer')
</body>
</html>