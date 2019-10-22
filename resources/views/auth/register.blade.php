@extends('frontLayouts.themelayout')

    @section('title')
        New Registration | Moseva
    @endsection

    @section('content')

		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">New Registration</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Register</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Sliders Section-->

		<!--Register-Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="single-page" >
						<div class="col-lg-6 col-xl-5 col-md-6 d-block mx-auto m9">
							<div class="wrapper wrapper2">
                                
								<form  method="POST" action="{{ route('register') }}" class="card-body" tabindex="500">
                                    @csrf

                                    <h3>{{ __('Register') }}</h3>

                                    <div class="mail">
										<input id="email" value="{{ old('email') }}" type="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                                        
                                        @if ($errors->has('email'))
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
										
                                        <label for="email">{{ __('Email Address') }} *</label>
									</div>

									<div class="passwd">
										<input id="password" type="password" name="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                        
                                        @if ($errors->has('password'))
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
										
                                        <label for="password">{{ __('Password') }}</label>
									</div>



                                    <div class="passwd">
										<input id="password-confirm" type="password" name="password_confirmation" required>
										<label for="password-confirm">{{ __('Re-enter Password') }}</label>
									</div>

									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
									</div>

									<p class="mb-2"><a href="#" >Term and Conditions</a></p>

									<p class="text-dark mb-0">Already have an account?<a href="{{route('login')}}" class="text-primary ml-1"> Log In</a></p>
								</form>

								<hr class="divider">

								<div class="card-body">
									<div class="text-center">
										<div class="btn-group hover-facebook">
											<a href="https://www.facebook.com/" class="btn btn-icon mr-2">
												<span class="fa fa-facebook"></span>
												Connect with Facebook
											</a>
										</div>
										<div class="btn-group hover-google">
											<a href="https://www.google.com/gmail/" class="btn mr-2 btn-icon">
												<span class="fa fa-google"></span>
												Connect with Google
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

	@endsection