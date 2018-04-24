@extends('admin.dashboard')
@section('title')
	Create product
@endsection
@push('scripts')
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/pages/form_select2.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_assets/js/plugins/ui/prism.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/pages/form_layouts.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/uploaders/fileinput.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/pages/uploader_bootstrap.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/plugins/forms/tags/tagsinput.min.js')}}"></script>
	<script type="text/javascript"
	        src="{{asset('admin_assets/js/pages/form_tags_input.js')}}"></script>
@endpush
@section('main-content')
	<div class="panel panel-bordered border-indigo-800">
		<div class="panel-heading bg-indigo-800">
			<h6 class="panel-title">Edit Product</h6>
			<div class="heading-elements">
				<ul class="icons-list">
					<li><a data-action="collapse"></a></li>
					<li><a data-action="reload"></a></li>
					<li><a data-action="close"></a></li>
				</ul>
			</div>
		</div>
		<div class="panel-body">
			<form class="form" action="{{route('product.update',$product->id)}}" method="post"
			      enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				@csrf
				<div class="form-group">
					<label for="name">Product Name:</label>
					<input type="text" class="form-control" id="name" name="name"
					       value="{{$product->name}}" required>
				</div>
				<div class="form-group">
					<label for="description">Description(s):</label>
					<textarea class="form-control" name="description" id="description" cols="30"
					          rows="10">{{$product->description}}</textarea>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" class="form-control" id="price" name="price" required
					       value="{{$product->price}}">
				</div>
				<div class="form-group">
					<label for="units_remaining">Currently Available Stock:</label>
					<input type="text" class="form-control" id="units_remaining" value="{{$product->units_remaining}}"
					       disabled>
				</div>
				<div class="form-group">
					<label for="units_total">Maximum Stock Available:</label>
					<input type="number" class="form-control" id="units_total" value="{{$product->units_total}}"
					       name="units_total">
				</div>
				<div class="form-group">
					<label for="update_units_remaining">Update Available Stock:</label>
					<input type="number" class="form-control" id="update_units_remaining" name="update_units_remaining"
					       value="{{$product->units_remaining}}">
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" class="form-control" id="status" name="status" required
					       value="{{$product->status}}">
				</div>
				<div class="form-group">
					<label for="image">Image Preview:</label>
					<input type="file" class="file-input" id="image" name="imageLink" value="{{$product->image_link}}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn bg-slate-800" name="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
@endsection