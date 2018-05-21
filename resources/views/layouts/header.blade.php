<header class="navbar-fixed">
	<nav>
		<div class="nav-wrapper">
			<a class="button-nav" data-target="global-side-nav"><i class="mdi mdi-menu"></i></a>
			<!--			Index Page Menu-->
			<ul id="mobile-nav" class="mobile-nav right menu hide home-menu hide-on-small-and-down">
				<li class=""><a href="index##shop">Shop</a></li>
				<li class=""><a href="faqs">FAQs</a></li>

				<li class=""><a href="index##about">About</a></li>
				<li class=""><a href="contact">Contact</a></li>
			</ul>
			<!--			Other Pages Menu-->
			<ul id="mobile-nav" class="mobile-nav right menu main-menu hide-on-small-and-down">
				<li class=""><a href="{{route('home')}}">Home</a></li>
				<li class=""><a href="{{route('shop')}}">Shop</a></li>
				<li class=""><a href="{{route('faqs')}}">FAQs</a></li>

				<li class=""><a href="{{route('about')}}">About</a></li>
				<li class=""><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</div>

	</nav>
</header>


<!--Globally Available Menu Modal-->
<div class="modal global-side-nav" id="global-side-nav">
	<div class="modal-content">
		<a class=" modal-action modal-close "><i class="mdi mdi-close"></i></a>
		<div class="row">
			<div class="logo show-on-small hide-on-med-and-up">
				<img src="/dist/images/theLine-01-03.svg" alt=""
				     class="responsive-img mobile-logo">
			</div>
			<div class="col s12 m6 first-half">
				<div class="container">
					<ul>
						<li><a href="{{route('home')}}"><h2>Home</h2></a></li>
						<li><a href="{{route('shop')}}"><h2>Shop</h2></a></li>
						<li><a href="{{route('about')}}"><h2>About</h2></a></li>
						<li><a href="{{route('contact')}}"><h2>Contact</h2></a></li>
					</ul>
				</div>
			</div>

			<div class="col s12 m3 offset-m2 white-text second-half">
				<div class="logo">
					<img src="/dist/images/theLine-01-03.svg" alt=""
					     class="global-menu-logo responsive-img hide-on-small-and-down">
				</div>
				<ul>
					<li><a class=".button-cart">Cart: <span class="cart_number">0</span></a>
					</li>
					<li>
						@guest
							<a href="signup">Sign Up</a>
						@endguest
						@auth
							<a href="profile">My Account</a>
						@endauth
					</li>
					<li>
						@guest
							<a href="login">Log In</a>
						@endguest
						@auth
							<a href="?logOut&client">Log Out</a>
						@endauth
					</li>
					<li>
						<a href="{{route('faqs')}}">FAQs</a>
					</li>
					<li>
						<a href="#">Terms &amp; Conditions</a>
					</li>
				</ul>
				<div class="social_icons">
					<a href="#"><i class="mdi mdi-facebook grey black-text"></i></a>
					<a href="#"><i class="mdi mdi-twitter grey black-text"></i></a>
					<a href="#"><i class="mdi mdi-instagram grey black-text"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="main-logo"></div>
<!-- Cart Menu-->
<div class="side-nav black cart-menu" id="cart-menu">
	<h3 class="flow-text center-align">ARTICLES: <span class="cart-count">0</span> <span
				class="right"><a class="cart-close"><i class="mdi mdi-close"></i></a></span></h3>
	<div class="cart-container">
	</div>
</div>
<div class="top-bar center-align">
	<span class="social_media left">
		<a href=""><i class="mdi mdi-facebook"></i></a>
		<a href=""><i class="mdi mdi-twitter"></i></a>
		<a href=""><i class="mdi mdi-instagram"></i></a>
	</span>
	<p class="white-text">FREE WORLDWIDE SHIPPING AVAILABLE</p>
	<span class="right">
		<a href="" class="button-cart" data-activates="cart-menu">
			<i class="mdi mdi-basket">
			</i>
			<span class="float-badge">0</span>
		</a>
	</span>
</div>