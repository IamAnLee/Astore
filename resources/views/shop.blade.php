<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>AsToRe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="{{asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/shop.css')}}" rel="stylesheet" type="text/css" type="text/css" media="screen" property="" />
	<link href="{{asset('public/frontend/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/jquery-ui1.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="{{asset('public/frontend/css/font-awesome.css')}}" rel="stylesheet" type="text/css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="{{asset('public/frontend/css///fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800')}}"
	    rel="stylesheet">
	<link href="{{asset('public/frontend/css///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800')}}" rel="stylesheet">
</head>

<body>
	<!-- banner -->
<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="{{URL::to('/trangchu')}}"><i>Astore</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="{{URL::to('/trangchu')}}" class="active">Trang ch???</a></li>
							<li><a href="{{URL::to('/about')}}">Gi???i thi???u</a></li>
							<li><a href="{{URL::to('/shop')}}">C???a h??ng</a></li>
                            <li><a href="{{URL::to('/gio_hang')}}">Gi??? h??ng</a></li>
                            <?php
                             $data= Session::get('customer_id');
                             if($data!=NULL){
                            ?>

                            <li><a href="{{URL::to('/thanh_toan_gio_hang')}}">Thanh to??n</a></li>
                            <li><a href="{{URL::to('/logout')}}">????ng xu???t</a></li>
                            <?php }else{
                            ?>
                            <li><a href="{{URL::to('/yeu_cau_dang_nhap')}}">Thanh to??n</a></li>
							<li><a href="{{URL::to('/yeu_cau_dang_nhap')}}">????ng nh???p</a></li>
                            <?php } ?>

							<li><a href="contact.html">Li??n h???</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="{{URL::to('/trangchu')}}">Trang ch???</a><i>|</i></li>
					<li><a href="{{URL::to('/shop')}}">Shop</a></li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="#" method="post">
						<input type="search" placeholder="Product name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				<!--preference -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Danh m???c s???n ph???m</h3>
					<ul>
                        @foreach($category as $key=>$cate)
						<li>
							<a href="{{URL::to('/danh_muc/'.$cate->category_id)}}"><span class="span">{{$cate->category_name}}</span></a>
						</li>
                        @endforeach

					</ul>
				</div>
				<!-- // preference -->
				<!-- discounts -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Th????ng hi???u</h3>
					<ul>
						@foreach($brand as $key=>$brand)
						<li>
							<a href="{{URL::to('/thuong_hieu/'.$brand->brand_id)}}"><span class="span">{{$brand->brand_name}}</span></a>
						</li>
                        @endforeach
					</ul>
				</div>

				<!-- deals -->
				<div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head">S???n ph???m b??n ch???y</h3>
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="{{asset('public/frontend/images/s4.jpg')}}" alt="">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>Shuberry Heels</h3>
							<a href="single.html">$180.00</a>
						</div>
						<div class="clearfix"></div>
					</div>

				</div>
				<!-- //deals -->

			</div>
			<!-- //product left -->
			<!-- product right -->
			@yield('list-product')
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //top products -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">

					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('public/frontend/images/g5.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('public/frontend/images/g6.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('public/frontend/images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('public/frontend/images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>

				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- /newsletter-->
	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><span>D</span>owny Shoes </a></h2>
				<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="404.html">Services</a></li>
							<li><a href="404.html">Short Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Broome St, NY 10002,California, USA.

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
	<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="{{ asset('public/frontend/js/jquery-2.1.4.min.js') }}"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="{{ asset('public/frontend/js/minicart.js') }}"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="{{ asset('public/frontend/js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/classie.js') }}"></script>
	<script src="{{ asset('public/frontend/js/demo1.js') }}"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="{{ asset('public/frontend/js/search.js') }}"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="{{ asset('public/frontend/js/jquery-ui.js') }}"></script>
	<script>
		//<![CDATA[
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('public/frontend/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/frontend/js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap-3.1.1.min.js')}}"></script>


</body>

</html>
