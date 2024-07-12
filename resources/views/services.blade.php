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
		@include('layouts.header')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Services</h1>
								<p class="mb-4">exceptional service is our hallmark. Our skilled artists blend technical expertise with a passion for creativity, ensuring every tattoo exceeds expectations. We prioritize client satisfaction, offering a consultative approach that tailors each design to embody personal style and symbolism</p>
								<p><a href="{{url('shop')}}" class="btn btn-secondary me-2">Shop Now</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/hero.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Our Services -->
		<div class="why-choose-section">
			<div class="container">
				
				
				<div class="row my-5">
					<div class="col-6 col-md-6 col-lg-3 mb-4">
							<div class="feature">
								<div class="icon">
								<span class="flaticon-tatoo-machine"></span>
								</div>
								<h3>Tattooing</h3>
								<p>Our tattoos last longer than most marriages</p>
							</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
									<div class="icon">
									<span class="flaticon-needle"></span>
									</div>
									<h3>Tattoo Cover-Up</h3>
									<p>If you dont like your tattoo anymore, we can help you with a new addorable design to help you on your tranformation</p>
								</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
							<div class="feature">
								<div class="icon">
								<span class="flaticon-chair"></span>
								</div>
								<h3>Piercing</h3>
								<p>We do all different kinds of piercings, so what is your style? you want to rock your new unique piercing? not a problem.</p>
							</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
							<div class="feature">
								<div class="icon">
								<span class="flaticon-cartridge"></span>
								</div>
								<h3>Tattoo Removal</h3>
								<p>We will help you get rid of the tattoo that you dont feel confortable with any more withought leaving ugly scars on your skin</p>
							</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
							<div class="feature">
								<div class="icon">
								<span class="flaticon-notebook"></span>
								</div>
								<h3>Tattoo Design</h3>
								<p>We provide free tattoo designs of any kind of the tattoo you want, we can help you customize the tattoo to fit your style </p>
							</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
							<span class="flaticon-gloves"></span>
							</div>
							<h3>Ring Change</h3>
							<p>Let us proffesionally help you change those rings.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
							<div class="icon">
							<span class="flaticon-cart"></span>
							</div>
							<h3>Shop</h3>
							<p>
					Shop
					Tattoo aftercare cream, Tattoo cream, Piercing Aftercare cream,jewellery and more.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
					<div class="feature">
							<div class="icon">
							<span class="flaticon-heart"></span>
							</div>
							<h3>Keloid Treatment</h3>
							<p>We also treat bumps and keloids if your piercings seem to have some infections.</p>
						</div>
					</div>

				</div>
			
			</div>
		</div>
		<!-- Our Services -->

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
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section before-footer-section">
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

		

		<!-- Start Footer Section -->
		@include('layouts.footer')
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
