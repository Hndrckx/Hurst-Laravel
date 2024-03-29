

{{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
            
            
        </div>
    @endif --}}

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home one || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- Place favicon.ico in the root directory -->

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v5 css -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<!-- animate css -->
		<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="{{asset('lib/css/nivo-slider.css')}}">
		<link rel="stylesheet" href="{{asset('lib/css/preview.css')}}">
		<!-- slick css -->
		<link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
		<!-- lightbox css -->
		<link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}">
		<!-- material-design-iconic-font css -->
		<link rel="stylesheet" href="{{asset('css/material-design-iconic-font.css')}}">
		<!-- All common css of theme -->
		<link rel="stylesheet" href="{{asset('css/default.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- shortcode css -->
        <link rel="stylesheet" href="{{asset('css/shortcode.css')}}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		<!-- modernizr css -->
		<script src="{{asset('js/vendor/modernizr-3.11.2.min.js')}}"></script>
	</head>
	<body>
		<!-- WRAPPER START -->
		<div class="wrapper">

			<!-- Mobile-header-top Start -->
			<div class="mobile-header-top d-block d-md-none">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- header-search-mobile start -->
							<div class="header-search-mobile">
								<div class="table">
									<div class="table-cell">
										<ul>
											<li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
											<li><a href="login.html"><i class="zmdi zmdi-lock"></i></a></li>
											<li><a href="my-account.html"><i class="zmdi zmdi-account"></i></a></li>
											<li><a href="wishlist.html"><i class="zmdi zmdi-favorite"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-search-mobile start -->
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header-top End -->
			<!-- HEADER-AREA START -->
			<header id="sticky-menu" class="header">
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.html"><img src=" img/logo/logo.png " alt="" /></a>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<div class="mini-cart text-end">
									<ul>
										<li>
											<a class="cart-icon" href="#">
												<i class="zmdi zmdi-shopping-cart"></i>
												<span>3</span>
											</a>
											<div class="mini-cart-brief text-left">
												<div class="cart-items">
													<p class="mb-0">You have <span>03 items</span> in your shopping bag</p>
												</div>
												<div class="all-cart-product clearfix">
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">dummy product name</a></h5>
															<p class="mb-0">Price : $ 100.00</p>
															<p class="mb-0">Qty : 02 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="img/cart/2.jpg" alt="" /></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">dummy product name</a></h5>
															<p class="mb-0">Price : $ 300.00</p>
															<p class="mb-0">Qty : 01 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
												</div>
												<div class="cart-totals">
													<h5 class="mb-0">Total <span class="floatright">$500.00</span></h5>
												</div>
												<div class="cart-bottom  clearfix">
													<a href="cart.html" class="button-one floatleft text-uppercase" data-text="View cart">View cart</a>
													<a href="checkout.html" class="button-one floatright text-uppercase" data-text="Check out">Check out</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MAIN-MENU START -->
				<div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="main-menu  d-none d-md-block">
					<nav>
						<ul>
							<li><a href="index.html">home</a>
							</li>
                            <li><a href="#">Shortcodes</a>
                                <div class="sub-menu menu-scroll">
                                    <ul>
                                        <li class="menu-title">Shortcodes</li>
                                        <li><a href="elements-accordions.html">Accordion</a></li>
                                        <li><a href="elements-toggles.html">Toggles</a></li>
                                        <li><a href="elements-tab.html">Tab</a></li>
                                        <li><a href="elements-product-tab.html">Product Tab</a></li>
                                        <li><a href="elements-product-tab-2.html">Product Tab 2</a></li>
                                        <li><a href="elements-carousel.html">product carousel</a></li>
                                        <li><a href="elements-carousel-2.html">product carousel 2</a></li>
                                        <li><a href="elements-featured-product.html">Featured Product</a></li>
                                        <li><a href="elements-featured-product-2.html">Featured Product 2</a></li>
                                        <li><a href="elements-button.html">Button</a></li>
                                        <li><a href="elements-table.html">Table</a></li>
                                        <li><a href="elements-progress-bars.html">Progress Bar</a></li>
                                        <li><a href="elements-blog.html">Blog</a></li>
                                        <li><a href="elements-blog-2.html">Blog - 2</a></li>
                                        <li><a href="elements-team.html">Team</a></li>
                                        <li><a href="elements-footer.html">Footer</a></li>
                                        <li><a href="elements-footer-2.html">Footer 2</a></li>
                                        <li><a href="elements-map.html">Map</a></li>
                                    </ul>
                                </div>
                            </li>
							<li><a href="shop-list.html">products</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="about.html">about us</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- MAIN-MENU END -->
			</header>
			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
										</li>
										<li><a href="shop-list.html">product</a></li>
										<li><a href="blog.html">blog</a></li>
										<li><a href="about.html">about us</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->
			<!-- SLIDER-BANNER-AREA START -->
			<section class="slider-banner-area clearfix">
				<!-- Sidebar-social-media start -->
				<div class="sidebar-social d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
								<li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
								<li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
								<li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
				<div class="banner-left floatleft">
					<!-- Slider-banner start -->
					<div class="slider-banner">
						<div class="single-banner banner-1">
							<a class="banner-thumb" href="#"><img src="img/banner/1.jpg" alt="" /></a>
							<span class="pro-label new-label">new</span>
							<span class="price">$50.00</span>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="#">Product name</a></h2>
								<p class="mb-0">Furniture</p>
							</div>
							<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
						</div>
						<div class="single-banner banner-2">
							<a class="banner-thumb" href="#"><img src="img/banner/2.jpg" alt="" /></a>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="#">New Product 2021</a></h2>
								<p class="hidden-md hidden-sm d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and types sate industry. Lorem Ipsum has been the industry.</p>
								<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
					<!-- Slider-banner end -->
				</div>
				<div class="slider-right floatleft">
					<!-- Slider-area start -->
					<div class="slider-area">
						<div class="bend niceties preview-2">
							<div id="ensign-nivoslider" class="slides">
								<img src="img/slider/slider-1/1.jpg" alt="" title="#slider-direction-1"  />
								<img src="img/slider/slider-1/2.jpg" alt="" title="#slider-direction-2"  />
								<img src="img/slider/slider-1/3.jpg" alt="" title="#slider-direction-3"  />
							</div>
							<!-- direction 1 -->
							<div id="slider-direction-1" class="t-cn slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
												<h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
												<h3 class="slider-title2 text-uppercase" >gallery 2021</h3>
											</div>
											<div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- direction 2 -->
							<div id="slider-direction-2" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase">furniture</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- direction 3 -->
							<div id="slider-direction-3" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<h3 class="slider-title2 text-uppercase" >gallery 2021</h3>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
												<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider-area end -->
				</div>
				<!-- Sidebar-social-media start -->
				<div class="sidebar-account d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>
								<li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
									<div class="customer-login text-left">
										<form action="#">
											<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
											<p class="text-gray">If you have an account with us, Please login!</p>
											<input type="text" name="email" placeholder="Email here..." />
											<input type="password" placeholder="Password" />
											<p><a class="text-gray" href="#">Forget your password?</a></p>
											<button class="button-one submit-button mt-15" data-text="login" type="submit">login</button>
										</form>
									</div>
								</li>
								<li><a href="my-account.html" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
			</section>
			<!-- End Slider-section -->
			<!-- sidebar-search Start -->
			<div class="sidebar-search animated slideOutUp">
				<div class="table">
					<div class="table-cell">
						<div class="container">
							<div class="row">
								<div class="col-md-8 offset-md-2 p-0">
									<div class="search-form-wrap">
										<button class="close-search"><i class="zmdi zmdi-close"></i></button>
										<form action="#">
											<input type="text" placeholder="Search here..." />
											<button class="search-button" type="submit">
												<i class="zmdi zmdi-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- sidebar-search End -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area pt-80 pb-35">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Featured Products</h2>
							</div>
							<div class="product-slider style-1 arrow-left-right">
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="img/product/1.jpg" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>										
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="img/product/2.jpg" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<a href="single-product.html"><img src="img/product/3.jpg" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<a href="single-product.html"><img src="img/product/4.jpg" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="img/product/3.jpg" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PRODUCT-AREA END -->

			<!-- PURCHASE-ONLINE-AREA START -->
			
			<!-- PURCHASE-ONLINE-AREA END -->
			<!-- BLGO-AREA START -->
			<div class="blog-area pt-55">
				<div class="container">
					<!-- Section-title start -->
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">From The Blog</h2>
							</div>
						</div>
					</div>
					<!-- Section-title end -->
					<div class="row">
						<!-- Single-blog start -->
						<div class="col-lg-6">
							<div class="single-blog mt-30">
								<div class="row">
									<div class="col-xl-6 col-md-7">
										<div class="blog-info">
											<div class="post-meta fix">
												<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
												<div class="post-year floatleft">
													<p class="text-uppercase text-dark-red mb-0">June, 2021</p>
													<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
												</div>
											</div>
											<div class="like-share fix">
												<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
												<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
												<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
											</div>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
											<a href="#" class="button-2 text-dark-red">Read more...</a>
										</div>
									</div>
									<div class="col-xl-6 col-md-5">
										<div class="blog-photo">
											<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Single-blog end -->
						<!-- Single-blog start -->
						<div class="col-lg-6">
							<div class="single-blog mt-30">
								<div class="row">
									<div class="col-xl-6 col-md-7">
										<div class="blog-info">
											<div class="post-meta fix">
												<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
												<div class="post-year floatleft">
													<p class="text-uppercase text-dark-red mb-0">June, 2021</p>
													<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
												</div>
											</div>
											<div class="like-share fix">
												<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
												<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
												<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
											</div>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
											<a href="#" class="button-2 text-dark-red">Read more...</a>
										</div>
									</div>
									<div class="col-xl-6 col-md-5">
										<div class="blog-photo">
											<a href="#"><img src="img/blog/2.jpg" alt="" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Single-blog end -->
					</div>
				</div>
			</div>
			<!-- BLGO-AREA END -->
			<!-- SUBSCRIVE-AREA START -->
			<div class="subscribe-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="Enter your email address"/>
									<button class="submit-button submit-btn-2 button-one" data-text="subscribe" type="submit" >subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SUBSCRIVE-AREA END -->
			<!-- FOOTER START -->
			<footer>
				<!-- Footer-area start -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">Contact Us</h3>
									<ul class="footer-contact">
										<li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
										<li><span>Cell-Phone :</span>012345 - 123456789</li>
										<li><span>Email :</span>your-email@gmail.com</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">accounts</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">shipping</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">your choice Products</h3>
									<div class="footer-product">
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="img/footer/1.jpg" alt="" /></a>
													<div class="footer-thumb-info">
														<p><a href="#">Furniture Product<br>Name</a></p>
														<h4 class="price-3">$ 60.00</h4>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="img/footer/1.jpg" alt="" /></a>
													<div class="footer-thumb-info">
														<p><a href="#">Furniture Product<br>Name</a></p>
														<h4 class="price-3">$ 60.00</h4>
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
				<!-- Footer-area end -->
				<!-- Copyright-area start -->
				<div class="copyright-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="copyright">
									<p class="mb-0">&copy; <a href=" https://themeforest.net/user/codecarnival/portfolio " target="_blank"> CodeCarnival  </a> 2021. All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="payment  text-md-end">
									<a href="#"><img src="img/payment/1.png" alt="" /></a>
									<a href="#"><img src="img/payment/2.png" alt="" /></a>
									<a href="#"><img src="img/payment/3.png" alt="" /></a>
									<a href="#"><img src="img/payment/4.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Copyright-area start -->
			</footer>
			<!-- FOOTER END -->
			<!-- QUICKVIEW PRODUCT -->
			<div id="quickview-wrapper">
			   <!-- Modal -->
			   <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div class="modal-product">
									<div class="product-images">
										<div class="main-image images">
											<img alt="#" src="img/product/quickview-photo.jpg"/>
										</div>
									</div><!-- .product-images -->

									<div class="product-info">
										<h1>Aenean eu tristique</h1>
										<div class="price-box-3">
											<hr />
											<div class="s-price-box">
												<span class="new-price">$160.00</span>
												<span class="old-price">$190.00</span>
											</div>
											<hr />
										</div>
										<a href="shop.html" class="see-all">See all features</a>
										<div class="quick-add-to-cart">
											<form method="post" class="cart">
												<div class="numbers-row">
													<input type="number" id="french-hens" value="3" min="1">
												</div>
												<button class="single_add_to_cart_button" type="submit">Add to cart</button>
											</form>
										</div>
										<div class="quick-desc">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
										</div>
										<div class="social-sharing">
											<div class="widget widget_socialsharing_widget">
												<h3 class="widget-title-modal">Share this product</h3>
												<ul class="social-icons">
													<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="zmdi zmdi-google-plus"></i></a></li>
													<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="zmdi zmdi-twitter"></i></a></li>
													<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="zmdi zmdi-facebook"></i></a></li>
													<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
									</div><!-- .product-info -->
								</div><!-- .modal-product -->
							</div><!-- .modal-body -->
						</div><!-- .modal-content -->
					</div><!-- .modal-dialog -->
			   </div>
			   <!-- END Modal -->
			</div>
			<!-- END QUICKVIEW PRODUCT -->

		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
		<script src="{{asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
		<!-- bootstrap js -->
		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<!-- jquery.meanmenu js -->
		<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
		<!-- slick.min js -->
		<script src="{{asset('js/slick.min.js')}}"></script>
		<!-- jquery.treeview js -->
		<script src="{{asset('js/jquery.treeview.js')}}"></script>
		<!-- lightbox.min js -->
		<script src="{{asset('js/lightbox.min.js')}}"></script>
		<!-- jquery-ui js -->
		<script src="{{('js/jquery-ui.min.js')}}"></script>
		<!-- jquery.nivo.slider js -->
		<script src="{{asset('lib/js/jquery.nivo.slider.js')}}"></script>
		<script src="{{asset('lib/home.js')}}"></script>
		<!-- jquery.nicescroll.min js -->
		<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
		<!-- countdon.min js -->
		<script src="{{asset('js/countdon.min.js')}}"></script>
		<!-- wow js -->
		<script src="{{asset('js/wow.min.js')}}"></script>
		<!-- plugins js -->
		<script src="{{asset('js/plugins.js')}}"></script>
		<!-- main js -->
		<script src="{{asset('js/main.js')}}"></script>
	</body>
</html>
