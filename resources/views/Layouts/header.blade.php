<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
		<title>Inkredible Studio</title>
	</head>

    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('images/logo.png')}}" style="width: 70px;" alt="">
                    <span></span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="{{url('/')}}">Home</a>
						</li>
						
						<li><a class="nav-link" href="{{url('about')}}">About us</a></li>
						<li><a class="nav-link" href="{{url('shop')}}">Shop</a></li>
						<li><a class="nav-link" href="{{url('services')}}">Services</a></li>
						<li><a class="nav-link" href="{{url('gallery')}}">Gallery</a></li>
						<li><a class="nav-link" href="{{url('contact')}}">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						
						<li><a class="nav-link" href="{{url('cart')}}"><img src="{{asset('images/cart.svg')}}"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>