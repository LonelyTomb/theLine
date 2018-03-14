@extends('admin.master')

@section('title')
	Dashboard
@endsection

@section('content')
	@include('admin.layouts.header')
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
		@include('admin.layouts.sidebar')
		<!-- Main content -->
		@yield('main-content')
		<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	@include('admin.layouts.footer')
@endsection