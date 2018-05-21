@extends('admin.dashboard')
@section('title')
	Create Product
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
			<h6 class="panel-title">Create Product</h6>
			<div class="heading-elements">
				<ul class="icons-list">
					<li><a data-action="collapse"></a></li>
					<li><a data-action="reload"></a></li>
					<li><a data-action="close"></a></li>
				</ul>
			</div>
		</div>
		<div class="panel-body">
			<form class="form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">Product Name:</label>
					<input type="text" class="form-control" id="name" name="name"
					       value="{{old('name')}}" required>
				</div>
				<div class="form-group">
					<label for="collection">Collection:</label>
					<select name="collection" id="collection" class="form-control bootstrap-select">
						@foreach($collections as $collection)
							<option value="{{$collection->id}}">{{$collection->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="description">Description(s):</label>
					<textarea class="form-control" name="description" id="description" cols="30"
					          rows="10">{{old('description')}}</textarea>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" class="form-control" id="price" name="price" required
					       value="{{old('price')}}">
				</div>
				<div class="form-group">
					<label for="units_total">Initial Stock:</label>
					<input type="text" class="form-control" id="units_total" name="units_total" required
					       value="{{old('units_total')}}">
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" class="form-control" id="status" name="status" required
					       value="{{old('status')}}">
				</div>
				<div class="form-group">
					<label for="image">Image Preview:</label>
					<input type="file" class="file-input" id="image" name="imageLink" required>
				</div>
			</form>
		</div>
	</div>
@endsection