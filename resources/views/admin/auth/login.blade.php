@extends('admin.master')
@section('title')
	Login
@endsection
@section('content')
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Simple login form -->
			<form action="{{ route('admin.login') }}" method="post" class="form">
				@csrf
				<div class="panel panel-body login-form">
					<div class="text-center">
						<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
						<h5 class="content-group">Login to your account
							<small class="display-block">Enter your credentials below</small>
						</h5>
					</div>

					<div class="form-group has-feedback has-feedback-left">
						<input type="email" class="form-control" placeholder="Email" name="email"
						       value="{{ old('email') }}">
						@if ($errors->has('email'))
							<span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
						@else
							<div class="form-control-feedback">
								<i class="icon-mail5 text-muted"></i>
							</div>
						@endif
					</div>

					<div class="form-group has-feedback has-feedback-left">
						<input type="password" class="form-control" placeholder="Password" name="password">
						@if ($errors->has('password'))
							<span class="invalid-feedback">
                                        <strong class="text-center">{{ $errors->first('password') }}</strong>
                                    </span>
						@else
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						@endif
					</div>
					<div class="form-group row">
						<div class="col-md-6 offset-md-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
									Remember Me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Sign in <i
									class="icon-circle-right2 position-right"></i></button>
					</div>

					<div class="text-center">
						<a href="{{route('admin.password.request')}}">Forgot password?</a>
					</div>
				</div>
			</form>
			<!-- /simple login form -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


@endsection