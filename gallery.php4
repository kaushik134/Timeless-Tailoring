<!DOCTYPE html>
<!-- 
Template Name: Tailor Html Template
Version: 1.0.0
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- BEGIN HEAD -->

<head>
	<title>Tailor Html Template</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Tailor Html Template" />
	<meta name="keywords"
		content="Tailor, Tailor Html, fashion template, fashion website template, garments website template, fashion website template">
	<meta name="author" content="TemplateBundle" />
	<meta name="MobileOptimized" content="320" />
	<link
		href="https://fonts.googleapis.com/css?family=Krub:400,400i,500,500i,600,600i,700,700i|Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
		rel="stylesheet">
	<!-- main style -->
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<!-- main style -->
	<!-- favicon-icon -->
	<link rel="icon" type="image/png" href="images/icon/favicon.png">
	<!-- favicon-icon -->
</head>
<!-- END HEAD -->
<!--body start-->

<body>
	<!-- login signup popup Start -->
	<div class="login_signup_popup">
		<div class="login_signup_cover">
			<div class="login_signup_inner">
				<ul class="tabs">
					<li class="tab-link current" data-tab="login">login</li>
					<li class="tab-link" data-tab="signup">signup</li>
				</ul>
				<div class="login_signup_tabs">
					<div class="tab_content current" id="login">
						<div class="tl_login_form popup_form">
							<form>
								<div class="form-group">
									<input type="email" name="lg_name_email" id="lg_name_email"
										placeholder="Username / Email" />
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<div class="form-group">
									<input type="password" name="lg_pass" id="lg_pass" placeholder="Password" />
									<i class="fa fa-lock" aria-hidden="true"></i>
								</div>
								<div class="login_text"><a href="#">Forgot your Password</a></div>
								<input type="submit" class="login_button submit_button" value="Sign In" />
							</form>
						</div>
					</div>
					<div class="tab_content" id="signup">
						<div class="tl_signup_form popup_form">
							<form>
								<div class="form-group">
									<input type="text" name="sign_name" id="sign_name" placeholder="Username" />
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<div class="form-group">
									<input type="email" name="sign_email" id="sign_email" placeholder="Email" />
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="form-group">
									<input type="password" name="sign_pass" id="sign_pass" placeholder="Password" />
									<i class="fa fa-lock" aria-hidden="true"></i>
								</div>
								<input type="submit" class="signup_button submit_button" value="Sign Up" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<span class="close_btn close_popup"><i class="first"></i><i class="second"></i></span>
		</div>
	</div>
	<!-- login signup popup End -->
	<!-- header menu start -->
	<div class="tl_header_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header_top_area">
						<div class="tl_top_menu top_left_menu">
							<ul>
								<li><a href="#" class="login_popup"><i class="fa fa-user"></i>login</a></li>
								<li><a href="checkout.html"><i class="fa fa-shopping-cart"></i>checkout</a></li>
							</ul>
						</div>
						<div class="tl_top_menu top_right_menu">
							<ul>
								<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>wishlist</a></li>
								<li>
									<div class="select_wrapper">
										<select>
											<option value="0">Select</option>
											<option value="1">USD</option>
											<option value="2">euro</option>
											<option value="3">inr</option>
											<option value="4">Pound</option>
										</select>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="menu_section_wrap">
						<!-- Site logo Start -->
						<div class="tl_logo">
							<a href="index.html">
								<img class="img-responsive" src="images/logo_small.png" alt="logo">
							</a>
						</div>
						<!-- Site logo End -->
						<!-- nav toggle -->
						<div class="nav_toggle">
							<i></i>
							<i></i>
							<i></i>
						</div>
						<!-- nav toggle -->
						<!-- Navigation Menu Start -->
						<div class="header_right_menu">
							<nav class="menu_section">
								<ul class="menu">
									<li>
										<a href="index.html">Home</a>
									</li>
									<li>
										<a href="about.html">About us</a>
									</li>
									<li>
										<a href="womens.html">womens</a>
									</li>
									<li>
										<a href="womens.html">men's</a>
									</li>
								</ul>
							</nav>
							<div class="tl_center_logo">
								<a href="index.html">
									<img class="img-responsive" src="images/logo.png" alt="logo">
								</a>
							</div>
							<nav class="menu_section right_nav">
								<ul class="menu">
									<li>
										<a href="gallery.html" class="active">Gallery</a>
									</li>
									<li>
										<a href="#">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog.html">Blog Default</a></li>
											<li><a href="blog_single.html">Blog Single</a></li>
										</ul>
									</li>
									<li>
										<a href="#">pages</a>
										<ul class="sub-menu">
											<li><a href="team.html">Team</a></li>
											<li><a href="cart.html">cart</a></li>
											<li><a href="product_details.html">Product Details</a></li>
											<li><a href="checkout.html">Checkout</a></li>
										</ul>
									</li>
									<li>
										<a href="contact.html">Contact</a>
									</li>
								</ul>
							</nav>
						</div>
						<!-- Navigation Menu End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header menu end -->
	<!-- breadcrumb section start -->
	<div class="main_section tl_page_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
					<div class="tl_banner_wrapper">
						<div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
							<h1>Gallery</h1>
						</div>
						<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
							<ul>
								<li><a href="#">Home</a></li>
								<li>Gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb section End -->
	<!-- Gallery section Start -->
	<div class="main_section  gallery_section section_10">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s"
					style="visibility: visible; animation-delay: 0.2s;">
					<div class="section_heading">
						<h1>OUR GALLERY</h1>
						<span class="heading_icon">
							<img src="images/icon/heading_icon.png" alt="image" class="img-responsive">
						</span>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
							was born and I will give you a complet.</p>
					</div>
				</div>
				<div class="gallery_wrap">
					<div class="popup_gallery">
						<div class="img_grid">
							<div class="column">
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: visible; animation-delay: 0.2s;">
									<a href="images/grid/001.jpg" class="popup_icon">
										<img src="images/grid/001.jpg" alt="gallery" style="width:100%">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/002.jpg" class="popup_icon">
										<img src="images/grid/002.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/003.jpg" class="popup_icon">
										<img src="images/grid/003.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: visible; animation-delay: 0.2s;">
									<a href="images/grid/004.jpg" class="popup_icon">
										<img src="images/grid/004.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/005.jpg" class="popup_icon">
										<img src="images/grid/005.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/006.jpg" class="popup_icon">
										<img src="images/grid/006.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: visible; animation-delay: 0.2s;">
									<a href="images/grid/007.jpg" class="popup_icon">
										<img src="images/grid/007.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/008.jpg" class="popup_icon">
										<img src="images/grid/008.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/009.jpg" class="popup_icon">
										<img src="images/grid/009.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: visible; animation-delay: 0.2s;">
									<a href="images/grid/10.jpg" class="popup_icon">
										<img src="images/grid/10.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/11.jpg" class="popup_icon">
										<img src="images/grid/11.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								<div class="grid_itesms wow fadeInUp" data-wow-delay="0.2s"
									style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
									<a href="images/grid/12.jpg" class="popup_icon">
										<img src="images/grid/12.jpg" style="width:100%" alt="gallery">
										<div class="grid_content">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- paginations -->

					<!-- paginations -->
				</div>
			</div>
			<div class="pagination_wrap text-right wow fadeInRight" data-wow-delay="0.2s"
				style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
				<ul class="pagination_menu">
					<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Gallery section End -->
	<!-- Footer Start -->
	<footer>
		<!-- footer social Start -->
		<div class="tl_footer_social_section">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-xs-12">
						<div class="social_icons footer_social">
							<a href="#" class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a>
							<a href="#" class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-twitter"></i></a>
							<a href="#" class="wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="wow fadeIn" data-wow-delay="0.5s"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer social End -->
		<!-- footer main Start -->
		<div class="tl_main_footer_section">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 w_100 wow fadeInLeft" data-wow-delay="0.1s">
						<div class="widget address_widget">
							<div class="pocket_shape">
								<span class="pin_icon"><img src="images/icon/pin_icon.png" alt="image" /></span>
								<span class="triangle"></span>
								<h1>Tailor Style</h1>
								<p>Li lingues differe solmen li grammatica, pronunciation vocabules lingual.</p>

								<h3>Get in Touch</h3>
								<ul class="get_in_touch">
									<li>
										<i class="fa fa-map-marker"></i>
										<p>4863 Drummond Street Piscataway, NJ 08854</p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										<p>+ 124 45 8689</p>
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										<p><a href="#">Support@gmail.com</a></p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 w_100 wow fadeInUp" data-wow-delay="0.2s">
						<div class="widget service_widget margin_t_70">
							<h3 class="widget-title">Our Services</h3>
							<ul>
								<li><a href="#">Suit Stiching Service</a></li>
								<li><a href="#">Formal Stiching Service</a></li>
								<li><a href="#">Resizing Dresses</a></li>
								<li><a href="#">3 Peice Stiching</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 w_100 wow fadeInUp" data-wow-delay="0.3s">
						<div class="widget margin_t_70">
							<h3 class="widget-title">Service hours</h3>
							<div class="widget_schedule">
								<ul>
									<li>Monday - Friday : 9 am to 8 pm</li>
									<li>Saturday : 10 am to 4 pm</li>
									<li>Sunday : Closed</li>
									<li>Support Hours in 24/7 Everyday</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 w_100 wow fadeInUp" data-wow-delay="0.4s">
						<div class="widget newsletter_widget margin_t_70">
							<h3 class="widget-title">Newsletter</h3>
							<div class="textwidget">
								<div class="footer_newsletter_form">
									<form>
										<input type="email" name="f_email" id="f_email"
											placeholder="Enter Your Email" />
										<button type="submit" id="ftr_news_btn" class="ftr_news_btn">
											<i class="fa fa-paper-plane" aria-hidden="true"></i>
										</button>
									</form>
								</div>
								<p>Li lingues differ solmen vocabules grammatic, pronunciation esser vocabules.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer main End -->
		<!-- footer bottom Start -->
		<div class="tl_footer_bottom_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="copyright_text">
							Copyright &copy; 2021, All Rights Reserved by <a href="http://templatebundle.net/">Template
								Bundle</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- footer bottom End -->
	</footer>
	<!-- Footer End -->
	<!-- bottom to top button -->
	<div id="tl_toTop" title="click to top">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
			width="16px" height="16px">
			<g>
				<g>
					<path
						d="M512,107.275c-23.658-33.787-70.696-42.691-104.489-19.033L233.753,209.907l-63.183-44.246    c23.526-40.618,12.46-93.179-26.71-120.603c-41.364-28.954-98.355-18.906-127.321,22.45    c-28.953,41.358-18.913,98.361,22.452,127.327c28.384,19.874,64.137,21.364,93.129,6.982l77.388,54.185l-77.381,54.179    c-28.992-14.375-64.743-12.885-93.129,6.982c-41.363,28.966-51.404,85.963-22.452,127.32    c28.966,41.363,85.963,51.411,127.32,22.457c39.165-27.424,50.229-79.985,26.71-120.603l63.183-44.246l173.751,121.658    c33.793,23.665,80.831,14.755,104.489-19.033l-212.41-148.715L512,107.275z M91.627,167.539    c-26.173,0-47.392-21.219-47.392-47.392s21.22-47.392,47.392-47.392c26.179,0,47.392,21.219,47.392,47.392    S117.806,167.539,91.627,167.539z M91.627,439.253c-26.173,0-47.392-21.219-47.392-47.392c0-26.173,21.219-47.392,47.392-47.392    c26.179,0,47.392,21.219,47.392,47.392C139.019,418.033,117.806,439.253,91.627,439.253z"
						fill="#FFFFFF" />
				</g>
			</g>
		</svg>
	</div>
	<!-- bottom to top button -->

	<!-- jquery library js -->
	<script src="js/jquery.js"></script>
	<!-- jquery library js -->
	<!-- bootstrap js file-->
	<script src="js/bootstrap.min.js"></script>
	<!-- bootstrap js file-->
	<!-- owl crousel js file-->
	<script src="js/plugins/owl-crousel/owl.carousel.js"></script>
	<!-- owl crousel js file-->
	<!-- Datepicker-->
	<script src="js/plugins/datepicker/jquery-ui.js"></script>
	<!-- Datepicker-->
	<!-- counter-->
	<script src="js/plugins/counter/jquery.countTo.js"></script>
	<!-- counter-->
	<!-- appear js start-->
	<script src="js/plugins/animation/jquery.appear.js"></script>
	<!-- appear js end-->
	<!-- Gallery js -->
	<script src="js/plugins/gallery/jquery.magnific-popup.min.js">
	</script>
	<!-- Gallery js -->
	<!-- wow js start-->
	<script src="js/plugins/animation/wow.min.js"></script>
	<!-- wow js end-->
	<!-- slick slider -->
	<script src="js/plugins/slick/jquery-migrate-1.2.1.min.js">
	</script>
	<script src="js/plugins/slick/slick.min.js"></script>
	<!-- slick slider -->
	<!-- custom js -->
	<script src="js/custom.js"></script>
	<!-- custom js -->
	<!-- map script -->
</body>
<!--body end -->

</html>