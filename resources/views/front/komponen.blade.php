<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perpustakaan Film</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"> --}}

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/icomoon/icomoon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/style.css')}}">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">

		{{-- <div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6"> --}}
						{{-- <div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div> --}}
                        <!--social-links-->
					{{-- </div>
					<div class="col-md-6">
						<div class="right-element"> --}}
							{{-- <a href="#" class="user-account for-buy"><i
									class="icon icon-user"></i><span>Account</span></a>
							<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
									$)</span></a> --}}

							{{-- <div class="action-menu">

								<div class="search-bar">
									<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
										<i class="icon icon-search"></i>
									</a>
									<form action="{{ route('front.search') }}" method="GET" class="search-box" role="search">
										<input class="search-field text search-input" type="search" name="search" placeholder="Cari judul film">
									</form>
								</div>
							</div> --}}

						{{-- </div> --}}
						<!--top-right-->
					{{-- </div>

				</div>
			</div>
		</div> --}}
		
		<!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="/"><img src="{{ asset('assets/frontend/images/lexicon.png')}}" alt="logo"></a>
						</div>

					</div>

					<div class="col-md-6">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="{{ route('front') }}">Home</a></li>
									{{-- <li class="menu-item has-sub">
										<a href="#pages" class="nav-link">Pages</a>

										<ul>
											<li class="active"><a href="index.html">Home</a></li>
											<li><a href="about.html">About <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="styles.html">Styles <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="blog.html">Blog <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="single-post.html">Post Single <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="shop.html">Our Store <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="single-product.html">Product Single <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="contact.html">Contact <span class="badge bg-dark">PRO</span></a></li>
											<li><a href="thank-you.html">Thank You <span class="badge bg-dark">PRO</span></a></li>
										</ul>

									</li> --}}
                                    @yield('menu')
									<li class="menu-item"><a href="#footer" class="nav-link">About</a></li>
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

					<div class="col-md-4">
						<div class="right-element">
							<div class="action-menu">

								<div class="search-bar">
									<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
										<i class="icon icon-search"></i>
									</a>
									<form action="{{ route('front.search') }}" method="GET" class="search-box" role="search">
										<input class="search-field text search-input" type="search" name="search" placeholder="Cari judul film">
									</form>
								</div>
							</div>

						</div><!--top-right-->
					</div>

				</div>
			</div>
		</header>

	</div><!--header-wrap-->

    @yield('content')

	<footer id="footer">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-12">

					<div class="footer-menu">
						<h5 align="center">About Us</h5>
						{{-- <ul class="menu-list">
							<li class="menu-item">
								<a href="#">vision</a>
							</li>
							<li class="menu-item">
								<a href="#">articles </a>
							</li>
							<li class="menu-item">
								<a href="#">careers</a>
							</li>
							<li class="menu-item">
								<a href="#">service terms</a>
							</li>
							<li class="menu-item">
								<a href="#">donate</a>
							</li>
						</ul> --}}
					</div>

				</div>

				<div class="col-md-12">
							<center>
								<img src="{{ asset('assets/frontend/images/lexicon.png')}}" alt="logo" class="footer-logo">
								<p>F-Lexicon ini diambil dari kata Film (F) dan Lexicon (kamus). Jadi, F-Lexicon merupakan sebuah kamus film yang dimana website ini berisi sumber informasi mengenai film.</p>
							</center>

				</div>

				
				{{-- <div class="col-md-2">

					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Home</a>
							</li>
							<li class="menu-item">
								<a href="#">Films</a>
							</li>
							<li class="menu-item">
								<a href="#">Sutradara</a>
							</li>
							<li class="menu-item">
								<a href="#">Referensi</a>
							</li>
							<li class="menu-item">
								<a href="#">Pencarian</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">View Cart</a>
							</li>
							<li class="menu-item">
								<a href="#">My Wishtlist</a>
							</li>
							<li class="menu-item">
								<a href="#">Track My Order</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

				</div> --}}

			</div>
			<!-- / row -->

		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6">
								{{-- <p>© 2022 All rights reserved. Free HTML Template by <a
										href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a></p> --}}
										<p>© Alfi Yudin Raihan - Astri Pitriana Mustika - Fina Agustin</p>
							</div>

							<div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/frontend/js/jquery-1.11.0.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>

</html>