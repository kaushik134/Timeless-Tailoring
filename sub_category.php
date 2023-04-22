<!DOCTYPE html>
<?php
session_start();
require_once "connect.php";

?>
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
	<title>Subcategory | <?php echo $title; ?></title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Tailor Html Template" />
	<meta name="keywords" content="Tailor, Tailor Html, fashion template, fashion website template, garments website template, fashion website template">
	<meta name="author" content="TemplateBundle" />
	<meta name="MobileOptimized" content="320" />
	<link href="https://fonts.googleapis.com/css?family=Krub:400,400i,500,500i,600,600i,700,700i|Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- main style -->
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
	<!-- main style -->
	<!-- favicon-icon -->
	<link rel="icon" type="image/png" href="images/icon/favicon.png">
	<!-- favicon-icon -->
</head>
<!-- END HEAD -->
<!--body start-->
<body>
	<!-- preloader Start -->
<div class="preloader">
	<div class="scissor_center">
		<div class="scissor_wrap">
			<div class="scissor_part part_1">
				<div class="blade"></div>
				<div class="handle"></div>
			</div>
			<div class="scissor_part part_2">
				<div class="blade"></div>
				<div class="handle"></div>
			</div>
			<span class="joint"></span>
		</div>
	</div>
</div>
<!-- header menu start -->
<?php include_once "header.php"; ?>

<!-- header menu end -->
<!-- breadcrumb section start -->
<div class="main_section tl_page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
				<div class="tl_banner_wrapper">
					<div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
						<h1>man's collection</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>men's</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- womens section Start -->
<div class="main_section section_07">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="womens_section_wrap">
					<div class="row">

						<?php
						if (isset($_GET['cat_id'])) {
							$qry = "select * from style_tbl where category_id='" . $_GET['cat_id'] . "'";
						} else {
							$qry = "select * from style_tbl";
						}

						$test = mysqli_query($cnn, $qry);
						while ($result = mysqli_fetch_array($test)) {
							?>



							<div class="col-md-6 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
								<div class="fea_box">
									<div class="fea_box_img">
										<a href="" class="fea_overlay"><img src="../../threadsmith/admin/profiles/<?php echo $result['style_image']; ?>" alt="image"  class="img-responsive" /></a>
										<span class="sale">Sale!</span>  
										<div class="fea_inner">
											<ul>
												<li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li>
												<li class="second_li"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
												<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
												<li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li>
											</ul>
										</div>
									</div>
									<div class="fea_box_data">
										<h2><a href="#"><?php echo $result['style_name']; ?></a></h2>
										<div class="fea_reating">
											<ul>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
										<span>$<?php echo $result['style_price']; ?></span>
									</div>
								</div>
							</div>

						<?php } ?>


						<!-- <div class="col-md-6 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img src="images/women/02.jpg" alt="image"  class="img-responsive" /></a>
									<div class="fea_inner">
										<ul>
											<li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li>
											<li class="second_li"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li>
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#">Modern Fit 2pc Ultra Silver Suit</a></h2>
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>$ 305.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img src="images/women/03.jpg" alt="image"  class="img-responsive" /></a>
									<span class="sale">Sale!</span>
									<div class="fea_inner">
										<ul>
											<li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li>
											<li class="second_li"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li>
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#">V neck decoration beads</a></h2>
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>$ 350.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img src="images/women/04.jpg" alt="image"  class="img-responsive" /></a>
									<div class="fea_inner">
										<ul>
											<li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li>
											<li class="second_li"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li>
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#">Modern Fit 2pc Ultra Silver Suit</a></h2>
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>$ 305.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img src="images/women/05.jpg" alt="image"  class="img-responsive" /></a>
									<span class="sale">Sale!</span>
									<div class="fea_inner">
										<ul>
											<li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li>
											<li class="second_li"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li>
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#">V neck decoration beads</a></h2>
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>$ 350.00</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img src="images/women/06.jpg" alt="image"  class="img-responsive" /></a>
									<div class="fea_inner">
										<ul>
											<li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li>
											<li class="second_li"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li>
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#">Modern Fit 2pc Ultra Silver Suit</a></h2>
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>$ 305.00</span>
								</div>
							</div>
						</div> -->
					</div>
					<!-- paginations -->
					<div class="pagination_wrap text-right wow fadeInRight" data-wow-delay="0.2s">
						<ul class="pagination_menu">
						  <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
						  <li><a href="#" class="active">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						 <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<!-- paginations -->
				</div>
			</div>
			<!-- sidebar start -->
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="tl_sidebar_area">
					<div class="widget widget_search wow fadeInRight" data-wow-delay="0.2s">
						<form class="search-form">
							<label>
								<input type="text" name="search" placeholder="Search" class="search-field"> 
							</label>
							<button type="submit" class="search-submit">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
					<div class="widget widget_search wow fadeInRight" data-wow-delay="0.3s">
						<h3 class="widget-title">
							Filter by price
						</h3>
						<div class="price_filter_slider">
							<form>
								<div class="slider_range"></div>
								<div class="filter_amount_wrap">
									<input type="text" class="filter_amount" readonly>
									<button type="submit" class="t_btn apply_btn">apply</button>
								</div>
							</form>
						</div>
					</div>
					<div class="widget widget_categories wow fadeInRight" data-wow-delay="0.2s">
						<h3 class="widget-title">
							Products Category
						</h3>
						<div class="checklist_category">
							<div class="checkbox_design">
								<input type="checkbox" name="Shirt" value="Shirt" id="Shirt">
								<label for="Shirt">Shirt</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Pants" value="Pants" id="Pants">
								<label for="Pants">Pants</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Trousers" value="Trousers" id="Trousers">
								<label for="Trousers">Trousers</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Blazers" value="Blazers" id="Blazers">
								<label for="Blazers">Blazers</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Tie" value="Tie" id="Tie">
								<label for="Tie">Tie</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Two_Piece" value="Two Piece" id="Two_Piece">
								<label for="Two_Piece">Two Piece</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Three_Piece" value="Three Piece" id="Three_Piece">
								<label for="Three_Piece">Three Piece</label>
							</div>
						</div>
					</div>
					<div class="widget widget_categories wow fadeInRight" data-wow-delay="0.2s">
						<h3 class="widget-title">
							Category By Fiber
						</h3>
						<div class="checklist_category">
							<div class="checkbox_design">
								<input type="checkbox" name="Cotton" value="Cotton" id="Cotton">
								<label for="Cotton">Cotton</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Lilen" value="Lilen" id="Lilen">
								<label for="Lilen">Lilen</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Silk" value="Silk" id="Silk">
								<label for="Silk">Silk</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Woolen" value="Woolen" id="Woolen">
								<label for="Woolen">Woolen</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Coudra" value="Coudra" id="Coudra">
								<label for="Coudra">Coudra</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Synthetic" value="Synthetic" id="Synthetic">
								<label for="Synthetic">Synthetic</label>
							</div>
							<div class="checkbox_design">
								<input type="checkbox" name="Semi_Cotton" value="Semi Cotton" id="Semi_Cotton">
								<label for="Semi_Cotton">Semi Cotton</label>
							</div>
						</div>
					</div>
					<div class="widget widget_recent_review wow fadeInRight" data-wow-delay="0.2s">
						<h3 class="widget-title">
							Recent Reviews
						</h3>
						<ul>
							<li>
								<div class="review_main">
									<div class="reviw_img">
									<img src="images/review/review_1.jpg" alt="Recent blog">
								</div>
								<div class="reviw_inner"> 
									<h4><a href="#">Gold Shade Blazers</a></h4>
									<span class="rating_star">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</span>
									<h3 class="post_price"> 225</h3>
								</div>
								</div>
							</li>
							<li>
								<div class="review_main">
									<div class="reviw_img">
									<img src="images/review/review_2.jpg" alt="Recent blog">
								</div>
								<div class="reviw_inner"> 
									<h4><a href="#">Black Shade Blazers</a></h4>
									<span class="rating_star">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</span>
									<h3 class="post_price">$ 225</h3>
								</div>
								</div>
							</li>
							<li>
								<div class="review_main">
									<div class="reviw_img">
									<img src="images/review/review_3.jpg" alt="Recent blog">
								</div>

								<div class="reviw_inner"> 
									<h4><a href="#">Black Shade Blazers</a></h4>
									<span class="rating_star">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-o" aria-hidden="true"></i>
									</span>
									<h3 class="post_price">$ 225</h3>
								</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- sidebar start -->
		</div>
	</div>
</div>
<!-- womens section End -->
<!-- Footer Start -->
<?php include_once "footer.php"; ?>

<!-- Footer End -->
<!-- bottom to top button -->
<div id="tl_toTop" title="click to top">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" width="16px" height="16px">
		<g>
			<g>
				<path d="M512,107.275c-23.658-33.787-70.696-42.691-104.489-19.033L233.753,209.907l-63.183-44.246    c23.526-40.618,12.46-93.179-26.71-120.603c-41.364-28.954-98.355-18.906-127.321,22.45    c-28.953,41.358-18.913,98.361,22.452,127.327c28.384,19.874,64.137,21.364,93.129,6.982l77.388,54.185l-77.381,54.179    c-28.992-14.375-64.743-12.885-93.129,6.982c-41.363,28.966-51.404,85.963-22.452,127.32    c28.966,41.363,85.963,51.411,127.32,22.457c39.165-27.424,50.229-79.985,26.71-120.603l63.183-44.246l173.751,121.658    c33.793,23.665,80.831,14.755,104.489-19.033l-212.41-148.715L512,107.275z M91.627,167.539    c-26.173,0-47.392-21.219-47.392-47.392s21.22-47.392,47.392-47.392c26.179,0,47.392,21.219,47.392,47.392    S117.806,167.539,91.627,167.539z M91.627,439.253c-26.173,0-47.392-21.219-47.392-47.392c0-26.173,21.219-47.392,47.392-47.392    c26.179,0,47.392,21.219,47.392,47.392C139.019,418.033,117.806,439.253,91.627,439.253z" fill="#FFFFFF"/>
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