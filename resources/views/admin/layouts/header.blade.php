<div class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.html">
			{{--<img src="theLine-01-03-black2.png" alt="">--}}
		</a>

		<ul class="nav navbar-nav pull-right visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav">
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">

			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					{{--<img src="assets/images/image.png" alt="">--}}
					@auth
						<span>{{Auth::user()->first_name}}</span>
					@endauth
					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
					<li>
						<a href="{{ route('logout') }}"
						   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
									class="icon-switch2"></i> Logout</a>
					</li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- /main navbar -->


<!-- Page header -->
<div class="page-header">
	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li><a href="{{route('admin.index')}}"><i class="icon-home2 position-left"></i>
					Home</a></li>
			<li class="active">Dashboard</li>
		</ul>

	</div>
	<br>
	<br>
	<br>
</div>