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
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					 @foreach($products as $product)
						<div class="col-12 col-md-4 col-lg-3 mb-5">
							<a class="product-item" href="{{route('shop.show', $product->slug)}}">
								<img src="{{asset('images/'.$product->slug.'.jpg')}}" class="img-fluid product-thumbnail">
								<h3 class="product-title">{{$product->name}}</h3>
								<strong class="product-price">LSL{{$product->price}}</strong>

								<span class="icon-cross">
									<img src="images/cross.svg" class="img-fluid">
								</span>
							</a>
						</div> 
					@endforeach
					<!-- End Column 1 -->
				


		      	</div>
		    </div>
		</div>


		<!-- Start Footer Section -->
		@include('layouts.footer')
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
