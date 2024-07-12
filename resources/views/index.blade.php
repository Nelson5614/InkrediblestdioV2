<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">


	<body>

		<!-- Start Header/Navigation -->
	@include('Layouts.header')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Inkredible <span clsas="d-block"> Studio Lesotho</span></h1>
								<p class="mb-4">With over 6 years in Business Inkredible Studio perfomed 3000+ tattoos and hundreds of positive comments have been coming by ever since. We use 100% safe technology to create stunning artworks with certified equipment which guarantees the best possible results</p>
								<p><a href="{{url('shop')}}" class="btn btn-secondary me-2">Shop Now</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/hero.png" style=""  class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Explore our products.</h2>
						<p class="mb-4">Take your time to explore some of our best products including our aftercares, jewellery and some equipment if you are an aspiring tattoo artist. </p>
						<p><a href="{{url('shop')}}" class="btn btn-primary">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					@foreach($products as $product)
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							
							<a class="product-item" href="cart.html">
								<img src="{{asset('images/'.$product->slug.'.jpg')}}" class="img-fluid product-thumbnail">
								<h3 class="product-title">{{$product->name}}</h3>
								<strong class="product-price">LSL{{$product->price}}.00</strong>

								<span class="icon-cross">
									<img src="images/cross.svg" class="img-fluid">
								</span>
							</a>
							
						</div>
					@endforeach 
					<!-- End Column 2 -->


				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- our services -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Our Services</h2>
						<p>We offer all body art services you can think of, from tattooing, to pericing, to tattoo removal and more.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
									<span class="flaticon-tatoo-machine"></span>
									</div>
									<h3>Tattooing</h3>
									<p>Our tattoos last longer than most marriages</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
									<span class="flaticon-needle"></span>
									</div>
									<h3>Tattoo Cover-Up</h3>
									<p>If you dont like your tattoo anymore, we can help you with a new addorable design to help you on your tranformation</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
									<span class="flaticon-chair"></span>
									</div>
									<h3>Piercing</h3>
									<p>We do all different kinds of piercings, so what is your style? you want to rock your new unique piercing? not a problem.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
									<span class="flaticon-rose"></span>
									</div>
									<h3>Tattoo Removal</h3>
									<p>We will help you get rid of the tattoo that you dont feel confortable with any more withought leaving ugly scars on your skin</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/11.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/1.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/2.jpg" alt="Untree.co"></div>
							
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">About Inkredible Studio Lesotho</h2>
						<p>Formally established in 2021, inkredible studio has been a leading tattoo parlor in the mountain kindom, known for its best services to its clients and always delivering an ecxeptional work to people from different cultures, Also known for a neat studio and friendly staff.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Ecxeptional Service</li>
							<li>Hygiene practices</li>
							<li>Clean Studio and Friendly staff</li>
							<li>Proffesional Artists</li>
						</ul>
						<p><a herf="{{url('about')}}" class="btn">About Us</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<!-- <div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> -->
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								@foreach($testimonials as $testimonial)
									<div class="item">
										<div class="row justify-content-center">
											<div class="col-lg-8 mx-auto">

												<div class="testimonial-block text-center">
													<blockquote class="mb-5">
														<p>&ldquo;{{$testimonial->description}}&rdquo;</p>
													</blockquote>

													<div class="author-info">
														<div class="author-pic">
															<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
														</div>
														<h3 class="font-weight-bold">{{$testimonial->name}}</h3>
														<span class="position d-block mb-3">Inkredible Studio's Client</span>
													</div>
												</div>

											</div>
										</div>
									</div> 
								@endforeach
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Gallery</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="{{url('blog')}}" class="more">View All Pictures</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
						<img src="images/post-1.jpg" alt="Image" class="img-fluid">
							
						</div>
					</div>

					

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		@include('layouts.footer')
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
