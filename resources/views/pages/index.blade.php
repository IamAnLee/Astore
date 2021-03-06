@extends('layout')
@section('index')
<body>
	<!-- banner -->
	<div class="banner_top" id="home">
		<div class="wrapper_top_w3layouts">

			<div class="header_agileits">
				<div class="logo">
					<h1><a class="navbar-brand" href="{{URL::to('/trangchu')}}"><i>AsToRe</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="{{URL::to('/trangchu')}}" class="active">Trang chủ</a></li>
							<li><a href="{{URL::to('/about')}}">Tin tức</a></li>
							<li><a href="{{URL::to('/shop')}}">Cửa hàng</a></li>
							<li><a href="{{URL::to('/gio_hang')}}">Giỏ hàng</a></li>
                            <?php
                             $data= Session::get('customer_id');
                             if($data!=NULL){
                            ?>
                            <li><a href="{{URL::to('/thanh_toan_gio_hang')}}">Thanh toán</a></li>
                            <li><a href="{{URL::to('/logout')}}">Đăng xuất</a></li>
                            <?php }else{
                            ?>
                            <li><a href="{{URL::to('/yeu_cau_dang_nhap')}}">Thanh toán</a></li>
							<li><a href="{{URL::to('/yeu_cau_dang_nhap')}}">Đăng nhập</a></li>
                            <?php } ?>

							<li><a href="contact.html">Liên hệ</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
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
			</div>
			<!-- /slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">

						<li>
							<div class="banner-top2">
								<div class="banner-info-wthree">
									<h3>Nike</h3>
									<p>See how good they feel.</p>

								</div>

							</div>
						</li>

					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //slider -->
			<ul class="top_icons">
				<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

			</ul>
		</div>
	</div>
	<!-- //banner -->
	<!-- /girds_bottom-->
	<div class="grids_bottom">
		<div class="style-grids">
			<div class="col-md-6 style-grid style-grid-1">
				<img src="{{asset('public/frontend/images/b1.jpg')}}" alt="shoe">
			</div>
		</div>
		<div class="col-md-6 style-grid style-grid-2">
			<div class="style-image-1_info">
				<div class="style-grid-2-text_info">
					<h3>Nike DOWNSHIFTER</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
						tempora incidunt ut labore et dolore .</p>
					<div class="shop-button">
						<a href="{{URL::to('/shop')}}">Mua ngay</a>
					</div>
				</div>
			</div>
			<div class="style-image-2">
				<img src="{{asset('public/frontend/images/b2.jpg')}}" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Air force</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	<!-- //grids_bottom-->
	<!-- /girds_bottom2-->
	<div class="grids_sec_2">
		<div class="style-grids_main">
			<div class="col-md-6 grids_sec_2_left">
				<div class="grid_sec_info">
					<div class="style-grid-2-text_info">
						<h3>Sneakers</h3>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
							tempora incidunt ut labore .</p>
						<div class="shop-button">
							<a href="{{URL::to('/shop')}}">Mua ngay</a>
						</div>
					</div>
				</div>
				<div class="style-image-2">
					<img src="{{asset('public/frontend/images/b4.jpg')}}" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Air force</h3>
					</div>
				</div>
			</div>
			<div class="col-md-6 grids_sec_2_left">
				<div class="style-image-2">
					<img src="{{asset('public/frontend/images/b3.jpg')}}" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Air force</h3>
					</div>
				</div>
				<div class="grid_sec_info last">
					<div class="style-grid-2-text_info">
						<h3>Sneakers</h3>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
							tempora incidunt ut labore .</p>
						<div class="shop-button two">
							<a href="{{URL::to('/shop')}}">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //grids_bottom2-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="{{URL::to('/trangchu')}}"><span>AsToRe</span></a></h2>
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
						<h4>Thông tin </h4>
						<ul>
							<li><a href="{{URL::to('/trangchu')}}">Trang chủ</a></li>
							<li><a href="{{URL::to('/about')}}">Tin tức</a></li>
							<li><a href="contact.html">Liên hệ</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Thông tin<span>liên hệ </span></h4>
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
	<script type="text/javascript" src="{{ asset('public/frontend/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->
	<!-- /nav -->
	<script src="{{ asset('public/frontend/js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{ asset('public/frontend/js/classie.js')}}"></script>
	<script src="{{ asset('public/frontend/js/demo1.js')}}"></script>
	<!-- //nav -->
	<!-- cart-js -->
	<script src="{{ asset('public/frontend/js/minicart.js')}}"></script>
	{{-- <script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script> --}}
	<!-- //cart-js -->
	<!--search-bar-->
	<script src="{{ asset('public/frontend/js/search.js')}}"></script>
	<!--//search-bar-->
	<script src="{{ asset('public/frontend/js/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- js for portfolio lightbox -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{ asset('public/frontend/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/frontend/js/easing.js') }}"></script>
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

	<script type="text/javascript" src="{{ asset('public/frontend/js/bootstrap-3.1.1.min.js') }}"></script>


</body>
@endsection
