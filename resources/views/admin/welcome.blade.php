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
			<div class="content-wrapper">

				<!-- Simple panel -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Welcome to theLine Admin Dashboard</h5>
						<div class="heading-elements">
							<ul class="icons-list">
								<li><a data-action="collapse"></a></li>
								<li><a data-action="close"></a></li>
							</ul>
						</div>
					</div>

					<div class="panel-body">
						<h6 class="text-semibold">Manage theLine</h6>
						<p>Here, you can manage product creation and update existing product details as well as viewing
							client purchases and product sales.</p>
					</div>
				</div>
				<!-- /simple panel -->

				<br>
				<br>
				<br>

				<!-- /simple panel -->


			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	@include('admin.layouts.footer')
@endsection