@extends('admin.dashboard')
@section('title')
	View Products
@endsection
@section('styles')
	<style>
		.panel-body {
			overflow-x: auto;
		}
	</style>
@endsection
@push('scripts')
	<script type="text/javascript" src="{{asset('admin_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/pages/form_select2.js')}}"></script>
	<script type="text/javascript"
	        src={{asset('admin_assets/js/plugins/tables/datatables/datatables.min.js')}}></script>
	<script type="text/javascript" src={{asset('admin_assets/js/pages/datatables_extension_fixed_header.js')}}></script>
	<script type="text/javascript" src={{asset('admin_assets/js/plugins/media/fancybox.min.js')}}></script>
	<script type="text/javascript" src={{asset('admin_assets/js/plugins/forms/styling/uniform.min.js')}}></script>
	<script type="text/javascript" src={{asset('admin_assets/js/pages/gallery_library.js')}}></script>
@endpush
@section('main-content')
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Product List</h5>
			<div class="heading-elements">
				<ul class="icons-list">
					<li><a data-action="collapse"></a></li>
					<li><a data-action="reload"></a></li>
					<li><a data-action="close"></a></li>
				</ul>
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover media-library table-lg">
				<thead>
				<tr>
					<th>No</th>
					<th>Preview</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Units Amount</th>
					<th>Units Sold</th>
					<th>Units Remaining</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<a href="{{asset($product->image_link)}}" data-popup="lightbox">
								<img src="{{asset($product->image_link)}}" alt="" class="img-rounded img-preview">
							</a>
						</td>
						<td>{{$product->name}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->description}}</td>
						<td>{{$product->units_total}}</td>
						<td>{{$product->report}}</td>
						<td>{{$product->units_remaining}}</td>
						<td>{{$product->status}}</td>
						<td><a href="{{route('product.edit',$product)}}" class="btn bg-slate-800">Update</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection