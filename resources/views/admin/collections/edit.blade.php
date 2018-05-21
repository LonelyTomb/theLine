@extends('admin.dashboard')
@section('title')
	Update Collections
@endsection
@push('scripts')
	<script type="text/javascript"
	        src={{asset('admin_assets/js/plugins/tables/datatables/datatables.min.js')}}></script>
	<script type="text/javascript"
	        src={{asset('admin_assets/js/pages/datatables_extension_fixed_header.js')}}></script>
	<script type="text/javascript"
	        src={{asset('admin_assets/js/plugins/media/fancybox.min.js')}}></script>
	<script type="text/javascript"
	        src={{asset('admin_assets/js/plugins/forms/styling/uniform.min.js')}}></script>
	<script type="text/javascript"
	        src={{asset('admin_assets/js/pages/gallery_library.js')}}></script>
@endpush
@section('main-content')
	<div class="panel panel-bordered border-indigo-800">
		<div class="panel-heading bg-indigo-800">
			<h6 class="panel-title">Create Collection</h6>
			<div class="heading-elements">
				<ul class="icons-list">
					<li><a data-action="collapse"></a></li>
					<li><a data-action="reload"></a></li>
					<li><a data-action="close"></a></li>
				</ul>
			</div>
		</div>
		<div class="panel-body">
			<form class="form" action="{{route('collection.update',$collection->id)}}" method="post"
			      enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				@csrf
				<div class="form-group">
					<label for="name">Collection Name:</label>
					<input type="text" class="form-control" id="name" name="name"
					       value="{{$collection->name}}" required>
				</div>
				<div class="form-group">
					<label for="description">Description:
						<small class="text-muted">optional</small>
					</label>
					<textarea class="form-control" name="description" id="description" cols="30"
					          rows="10">{{$collection->description}}</textarea>
				</div>
				<div class="form-group">
					<label for="status">Status:</label>
					<input type="text" class="form-control" id="status" name="status" required
					       value="{{$collection->status}}">
				</div>
				<div class="form-group">
					<label for="image">Change Image</label>
					<input type="file" class="file-input" id="image" name="imageLink">
				</div>
				<div class="form-group">
					<button type="submit" class="btn bg-slate-800" name="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
@endsection