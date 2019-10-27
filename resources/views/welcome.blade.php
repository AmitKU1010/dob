@extends('frontLayouts.themelayout')

    @section('title')
        MoSeva | Service Provider Company in India
    @endsection

    @section('content')

        <!--Sliders Section-->
        <section>
            <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-image-src="{{ asset('assets/images/banners/banner1.jpg') }}">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white mb-7">
							<a href="" class="typewrite" data-period="2000" data-type='[ "Best Services In India" ]'>
								<span class="wrap"></span>
							</a>
							<p>Our service patner's solve your problem with reliable and affordable price.</p>
						</div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 d-block mx-auto">
                                <div class="search-background bg-transparent">
									<div class="form row no-gutters">
										<div class="form-group col-xl-8 col-lg-8 col-md-12 mb-0 bg-white">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Search for">
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div><!-- /header-text -->
            </div>
        </section>
        <!--Sliders Section-->

        <!--Categories-->
		<section class="sptb">
			<div class="container">
				<div id="small-categories" class="owl-carousel owl-carousel-icons2">
					@if(count($Department)>0)
					@foreach($Department as $Departments)
					<div class="item">
						<div class="card">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="categories.html"></a>
									<div class="cat-img text-shadow1">
										<i class="fa fa-map-signs fa-2x "></i>
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">{{$Departments->department_name}}</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</section>
		<!--/Categories-->

        <!--Recommended Services-->
		<section class="sptb bg-white mb-3">
			<div class="container">
				<div class="section-title center-block text-left">
					<h3>Recommended Services</h3>
				</div>

				<div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
					<!-- Wrapper for carousel items -->
					
	                    @if(count($Product) > 0)
                        @foreach($Product as $Products)
					<div class="item">
						<div class="card mb-0">
							<div class="item-card7-imgs">
								<a href="main-pages/single_service.html"></a>
								<img  class="img-circle" width="617px" height="264px" src="{{ URL::asset('/images/'.$Products->images) }}">
							</div>

							<div class="item-card7-overlaytext">
									<a href="main-pages/single_service.html" class="text-white"> {{$Products->service_name}}</a>
							</div>

							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="main-pages/single_service.html" class="text-dark">
											<h4 class="">{{$Products->service_name}}</h4>
										</a>
									</div>

									<h4 class="mb-0 mt-3 btn btn-cyan btn-block h4">
										<del class="h6 text-white ml-2">{{$Products->price}} </del>
										{{$Products->offer_price}}
									</h4>

									<div class="product-5-rating text-right mt-1">
										Rating:
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					   @endforeach
                       @endif

				</div>
			</div>
		</section>

		<!--Web Solution-->

		@if(count($Select_department) > 0)
		@foreach($Select_department as $Select_department)
		<section class="sptb bg-patterns">
			<div class="container">
				<div class="section-title center-block text-left">
					<h3>{{$Select_department->department_name}}</h3>
				</div>
 
				<div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
					<!-- Wrapper for carousel items -->

					    @if(count($Product) > 0)
                        @foreach($Product as $Products)
					<div class="item">
						<div class="card mb-0">
							<div class="item-card7-imgs">
								<a href="main-pages/single_service.html"></a>
								<img  class="img-circle" width="617px" height="264px" src="{{ URL::asset('/images/'.$Products->images) }}">
							</div>

							<div class="item-card7-overlaytext">
									<a href="main-pages/single_service.html" class="text-white"> {{$Products->service_name}} </a>
							</div>

							<div class="card-body">
								<div class="item-card7-desc">
									<div class="item-card7-text">
										<a href="main-pages/single_service.html" class="text-dark">
											<h4 class=""> {{$Products->service_name}}</h4>
										</a>
									</div>

									<h4 class="mb-0 mt-3 btn btn-cyan btn-block h4">
										<del class="h6 text-white ml-2"> ₹ 2,139.0 </del>
										₹ 398.99 
									</h4>

									<div class="product-5-rating text-right mt-1">
										Rating:
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
										<a href="#" class=""><i class="fa fa-star text-warning"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
                       @endforeach
                       @endif
				</div>
			</div>
		</section>
		@endforeach
		@endif


		<!-- Statistics -->
		<section class="bg-white mb-0 mt-0">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-blog-overlay2">
						<div class="card-body  text-white">
							<div class="statistics-info container">
								<div class="row text-center">
									<div class="col-lg-3 col-md-6">
										<div class="counter-status">
											<div class="counter-icon">
												<i class="icon icon-people"></i>
											</div>
											<h5>Customers Served</h5>
											<h2 class="counter">200</h2>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="counter-status">
											<div class="counter-icon">
												<i class="icon icon-user"></i>
											</div>
											<h5>Trained Professionals</h5>
											<h2 class="counter">1765</h2>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="counter-status">
											<div class="counter-icon">
												<i class="icon icon-docs"></i>
											</div>
											<h5>Average Ratings</h5>
											<h2 class="counter">4.8</h2>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="counter-status">
											<div class="counter-icon">
												<i class="icon icon-emotsmile"></i>
											</div>
											<h5>Total Revenue</h5>
											<h2 class="counter">&#8377; 7,253</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Statistics -->

		<!--Testimonials-->
		<section class="sptb position-relative bg-white">
			<div class="container">
				<div class="section-title center-block text-left">
					<h3>Testimonials</h3>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
								<div class="item text-center">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8 col-md-12 d-block mx-auto">
												<div class="testimonia">
													<div class="testimonia-img mx-auto mb-3">
														<img src="../assets/images/faces/female/11.jpg" class="img-thumbnail rounded-circle alt=" alt="">
													</div>
													<p>
														<i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
													</p>
													<div class="testimonia-data">
														<h4 class="fs-20 mb-1">Narayan Shaw</h4>
														<div class="rating-stars">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
															<div class="rating-stars-container">
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item text-center">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8 col-md-12 d-block mx-auto">
												<div class="testimonia">
													<div class="testimonia-img mx-auto mb-3">
														<img src="../assets/images/faces/male/42.jpg" class="img-thumbnail rounded-circle alt=" alt="">
													</div>
													<p><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
													<div class="testimonia-data">
														<h4 class="fs-20 mb-1">Ronnie</h4>
														<div class="rating-stars">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
															<div class="rating-stars-container">
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item text-center">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8 col-md-12 d-block mx-auto">
												<div class="testimonia">
													<div class="testimonia-img mx-auto mb-3">
														<img src="../assets/images/faces/female/20.jpg" class="img-thumbnail rounded-circle alt=" alt="">
													</div>
													<p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
													<div class="testimonia-data">
														<h4 class="fs-20 mb-1">Rassel</h4>
														<div class="rating-stars">
															<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
															<div class="rating-stars-container">
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
																<div class="rating-star sm">
																	<i class="fa fa-star"></i>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Testimonials-->

    @endsection