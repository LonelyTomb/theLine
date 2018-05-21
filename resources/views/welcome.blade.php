@extends('master')

@section('title')
	Home
@endsection

@section('content')
	<main class="main">
		<div class="segment row home center-align" id="home">

			<img src="<?php echo Site::getRoot(); ?>/dist/images/Tufafii-01-03-black2.png" alt="Tufafii logo"
			     class="responsive-img">
			<div class="row home-controls">
				<div class="col m6 first-half">
					@guest
						<a class="btn right btn-flat" href="{{route('register')}}">Sign
							Up</a>
					@else
						<a class="btn right btn-flat" href="{{route('profile',Auth::user())}}">My
							Account</a>
					@endguest
				</div>
				<div class="col m6 second-half">
					@guest
						<a class="btn left btn-flat" href="{{route('login')}}">Log
							In</a>
					@else
						<a class="btn left btn-flat" href="{{route('logout')}}">Log Out</a>
					@endguest
				</div>
			</div>
		</div>
		<div class="segment row about" id="about" data-speed="1" data-margin="-10">
			<div class="card-panel">
				<h6 class="white-text">OUR IDENTITY</h6>
				<h3 class="white-text"><span>About</span>
					<span>the Brand</span></h3>
				<p class="white-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias excepturi id ipsum, itaque maxime
					necessitatibus officia quidem reiciendis! Accusamus accusantium culpa dolore, in maxime modi nam
					nesciunt optio possimus praesentium?
				</p>
				<a href="about" class="left-align white-text about_link">About<i class="mdi mdi-chevron-right"></i></a>
			</div>
			<img src="{{}}" alt=""
			     class="responsive-img hide-on-small-and-down">
		</div>
		<div class="segment row shop grey lighten-4" data-speed="2" data-margin="10" id="shop">
			<div class="segment_header"><h5>Online shop</h5>
				<hr>
				<a href="shop">Visit the shop</a></div>
			<div class="row">
				@foreach($products as $product)
				<div class="card-panel col s6 m3">
					<img src="{{}}"
					     alt="{{$product->name}}" class="responsive-img ">
					<div class="p_details">{{$product->name}}</div>
				</div>
				@endforeach
			</div>
		</div>


		<div class="row r_instagram black white-text" data-speed="2" data-margin="0" id="r_instagram">
			<hr>
			<h3 class="center-align">Who We Are On Instagram</h3>
			<a href="" class="white-text">#TUFAFII</a>
			<div class="instagram_snaps">
				<a href=""><img src="<?php echo Site::getRoot() ?>/dist/images/House Of Kaya/1.jpg"
				                alt="" class="responsive-img"></a>
				<a><img src="<?php echo Site::getRoot() ?>/dist/images/House Of Kaya/2.jpg" alt=""
				        class="responsive-img"></a>
				<a><img src="<?php echo Site::getRoot() ?>/dist/images/House Of Kaya/3.jpg"
				        alt=""
				        class="responsive-img"></a>
				<a><img src="<?php echo Site::getRoot() ?>/dist/images/House Of Kaya/4.jpg"
				        alt=""
				        class="responsive-img"></a>
			</div>
		</div>

	</main>
@endsection