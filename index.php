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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Index | <?php echo $title;?></title>
	
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
<!-- preloader End -->
<!-- header menu start -->
<?php include_once "header.php"; ?>
<!-- header menu end -->
<!--Home slider section start -->
<div class="home_slider_cover">
	<div class="owl-carousel owl-theme tl_home_slider">
		<!-- item 1 Start -->
		<div class="item">
			<div class="slider_bg" style="background-image:url('images/slider/Tailor_Wellington_Slide.jpg');">
				<!-- slider caption start -->
				<div class="header_content_part">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-8 col-xs-12 col-md-offset-7">
								<div class="tl_slider_caption">
									<h1>Create your<br> Own Fashion Style</h1>
									
									<p class="tr_slider_para">
										Now get your fabric stitched from the <br>  comfort of your home.
										<br>
										<b>Free pickup and delivery</li>
										<br>
										Fabric sourcing and embroidery
										<br>
										Wide variety of patterns 
										<br>
										Customized measurements</b>
									</p>
									<!-- <a href="" class="tl_read_more t_btn">Read More</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- slider caption end -->
			</div> 
		</div>
		<!-- item 1 End -->
		<!-- item 2 Start -->
		<div class="item">
			<div class="slider_bg" style="background-image:url('images/slider/slide_2.jpg');">
				<!-- slider caption start -->
				<div class="header_content_part">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-8 col-xs-12 col-md-offset-7">
								<div class="tl_slider_caption">
									<h1>Create your<br> Own Fashion Style</h1>
									
									<p class="tr_slider_para">
										Now get your fabric stitched from the <br>  comfort of your home.
										<br>
										<b>Free pickup and delivery
										<br>
										Fabric sourcing and embroidery
										<br>
										Wide variety of patterns 
										<br>
										Customized measurements</b>
									</p>
									<!-- <a href="" class="t_btn tl_read_more">Read More</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- slider caption end -->
			</div>
		</div>
		<!-- item 2 End -->
	</div>
</div>
<!--Home slider section start -->
<!-- About section Start -->

<div class="main_section section_01">
	<div class="container">
		<div class="row">
		<!-- section heading -->
			<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
					<h1>About Us </h1>
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="tailor-about-heading-border" class="img-responsive">
					</span>
					<p></p>
				</div>
			</div>
			<!-- section heading -->
			<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="about_thumb_wrap">
					<div class="about_thumb">
						<img src="images/about/images.jpg" class="img-responsive" alt="tailor-about-girl" />
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-6 col-sm-12  wow fadeInRight" data-wow-delay="0.2s">
				<div class="about_description">
					<h1>We provide you with great suits that benefit you and your lifestyle</h1>
					<p>Your search for the ideal online stitching service ends right here at threadsmith0723.com. Having provided exceptional 
ethnic fashion through the digital space to our treasured customers over the years, we have come to understand your fashion needs better. 
As an extension of our service, we are offering the most skilled, reliable online tailoring service to help you realise your style goals.</p>
					<!-- <h4 class="provide"> <span class="spn">Handcrafted Suit</span></h4>
					<div class="about_ul">
						<ul>
							<li> <i class="fa  fa-arrow-circle-o-right " aria-hidden="true"></i>Nulla consequat massa quis enim. Donec pede justo, fringilla vel. Donec pede justo, fringilla vel.</li>
							<li> <i class="fa  fa-arrow-circle-o-right " aria-hidden="true"></i> Donec pede justo, fringilla vel. Donec pede justo, fringilla vel. Nulla consequat massa quis enim.</li>
							<li> <i class="fa  fa-arrow-circle-o-right " aria-hidden="true"></i>Nulla consequat massa quis enim. Donec pede justo, fringilla vel. Donec pede justo, fringilla vel.</li>
						</ul>
					</div> -->
					
					<!-- <a href="#" class="tailor_btn">Read More</a> -->
					<a href="about.php" class="t_btn about_btn">Read More</a> 
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About section End -->

<!-- feature section Start -->
<div class="main_section section_02">
	<div class="container">
		<div class="row">
			<!-- section heading -->
			<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
					<h1>Choose the Product you would like to stitch</h1>
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="tailor-feature-heading-border" class="img-responsive">
					</span>
					<p></p>
				</div>
			</div>
			</div>
			<div>
			<!-- section heading -->
			<div class="col-md-3 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.1s">
				<div class="fea_box ">
					<div class="fea_box_img">
						<a href="" class="fea_overlay"><img src="images/feature/shirt.jpg" alt="tailor-feature-1"  class="img-responsive" /></a>
						
						<div class="fea_inner">
							<ul>
							</ul>
						</div>
					</div>
					<div class="fea_box_data">
						<h2> <a href="mens.php?cat_id=3&category_type=top" > SHIRT STITCHING-INQUIRY NOW!</a></h2>
						<div class="fea_reating">
							<ul>
									
							</ul>
						</div>
						<!-- <span>$ 350.00</span> -->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
				<div class="fea_box top_30">
					<div class="fea_box_img">
						<a href="" class="fea_overlay"><img src="images/feature/Pant.jpg" alt="tailor-feature-2"  class="img-responsive" /></a>
						<div class="fea_inner">
							<ul>
								
							</ul>
						</div>
					</div>
					<div class="fea_box_data">
					<h2><a href="?cat_id=3&sub_cat_id=1&category_type=top">PANT STITCHING-INQUIRY NOW!</h2>

						<!-- <h2><a href="womens.php?cat_id=3&category_type=top">PANT STITCHING-INQUIRY NOW!</h2> -->
						<div class="fea_reating">
							<ul>
								<!-- <li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li> -->
							</ul>
						</div>
						<!-- <span>$ 305.00</span> -->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.3s">
				<div class="fea_box top_30">
					<div class="fea_box_img">
						<a href="" class="fea_overlay"><img src="images/feature/kurtu.jpg" alt="tailor-feature-3"  class="img-responsive" /></a>
						<div class="fea_inner">
							<ul>
								
							</ul>
						</div>
					</div>
					<div class="fea_box_data">
						<h2><a href="mens.php?cat_id=10&category_type=top and bottom">KURTA PAJAMA STITCHING-INQUIRY ...</h2>
						<div class="fea_reating">
							<ul>
								<!-- <li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li> -->
							</ul>
						</div>
						<!-- <span>$ 245.00</span> -->
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.1s">
				<div class="fea_box ">
					<div class="fea_box_img">
						<a href="" class="fea_overlay"><img src="images/feature/suit.jpg" alt="tailor-feature-1"  class="img-responsive" /></a>
						
						<div class="fea_inner">
							<ul>
							</ul>
						</div>
					</div>
					
					<div class="fea_box_data">
						<h2> <a href="mens.php?cat_id=11&category_type=top" > SUIT STITCHING-INQUIRY NOW!</a></h2>
						<div class="fea_reating">
							<ul>
									
							</ul>
						</div>
						<!-- <span>$ 350.00</span> -->
					</div>
				</div>
			</div>
			
			
			
	</div>
</div>
<!-- feature section End -->

<!-- offers section Start -->
<div class="main_section section_03">
	<div class="container">
		<div class="row">
			<!-- section heading -->
<!-- 			<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading wow fadeInUp" data-wow-delay="0.2s">
					<h1>Latest Offers</h1>
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="tailor-latest-offers-heading-border" class="img-responsive">
					</span>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complet.</p>
				</div>
			</div> -->
			<!-- section heading -->
			<!-- <div class="col-md-6 col-sm-12 col-xs-12"> -->
				<!-- thumb -->
				<!-- <div class="offer_thumb off_imgafter wow fadeInUp" data-wow-delay="0.1s">
					<img src="images/offer/offer_1.jpg" alt="tailor-latest-offers-1"  class="img-responsive" /> -->
					<!-- Overlay -->
					<!-- <div class="offer_overlay_1">
						<h1>50% off <span>Sale <br/> On Blazers</span></h1>
						<a href="#" class="t_btn ct_btn shop_btn">shop now</a>
					</div> -->
					<!-- Overlay -->
				</div>
				<!-- thumb -->
			</div>
			
		</div>
	</div>
</div>
<!-- offers section End -->
<!-- Newsletter section Start -->
<div class="main_section newsletter_section">
	<div class="container">
		<div class="row">
			<!-- newsletter form -->
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="newsletter_wrapper">
					<div class="newsletter_heading wow fadeInLeft" data-wow-delay="0.2s">
						<h1>stay upto date</h1>
						<p>
							It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted.
						</p>
					</div>
					<div class="newsletter_form wow fadeInRight" data-wow-delay="0.2s">
						<!-- <form class="newsletter_frm">
							<input type="email" name="email" id="news_email" placeholder="Enter Your Email" />
							<button type="submit" id="news_submit" class="t_btn ct_btn subscribe_btn" value="Subscribe">Subscribe</button>
						</form> -->
					</div>
				</div>
			</div>
			<!-- newsletter form -->
		</div>
	</div>
</div>
<!-- Newsletter section End -->
<!-- Blog section Start -->
<div class="main_section section_04">
	<div class="container">
		<div class="row">
			<!-- section heading -->
			<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
					<h1>customer's review..</h1>
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="tailor-blog-heading-border" class="img-responsive">
					</span>
					<p></p>
				</div>
			</div>
			</div>
			<!-- section heading -->
			<div class="row">
				<div class="blog_main">
				<?php $str=mysqli_query($cnn,"select * from review_tbl,customer_tbl where review_status='1' and customer_tbl.customer_id=review_tbl.customer_id");
				while($row=mysqli_fetch_assoc($str)){
				?>
				<div class="col-md-4 col-sm-6 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.1s">
					<div class="blog_box">
						<span class="blog_date">
							
							<div class="bog_m"><?php echo $row['review_date']?></div>
						 </span>
						<!-- thumb -->
						
						<!-- thumb -->
						<!-- Description -->
						<div class="blog_desc home">
							<p class="fashion_tag"><?php echo $row['customer_name']?></p>
							
							<div class="blog_meta">
								<!-- <span><i class="fa fa-user-o"></i>Admin</span> 
								<span><i class="fa fa-comment-o" aria-hidden="true"></i>comments</span> -->
							</div>
							<p>
							<?php 
							$len=$row['rating'];
							for($i=0;$i<$len;$i++){?>
				
                           <i class="fa fa-star text-danger small"></i>
                          <?php } ?>
							</p></br>
							<p>
							<?php echo $row['review']?>
							</p>
							<!-- <div class="btn_box">
							<a href="blog_single.html" class="t_btn blog_btn">read more</a>
							</div> -->
						</div>
						<!-- Description -->
					</div>
				</div>
				<?php } ?>
				
				
			</div>
			</div>
		
	</div>
</div>
<!-- Blog section End -->
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
<!-- custom js -->
<script src="js/custom.js"></script> 
<!-- custom js -->
<!-- map script -->
</body>
<!--body end -->
</html>