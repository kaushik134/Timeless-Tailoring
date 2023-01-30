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
	<title>Category | <?php echo $title;?></title>
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
	<style>
		.sub-cat
		{
			font-size: 15px;
		    margin-bottom: 20px;
		    color: #ffffff;
		    text-transform: capitalize;
		    background: #d8aa58;
		    padding: 12px 12px;
		}
	</style>
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
						<h1>Womens collection</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Womens</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Mens section Start -->
<div class="main_section section_07">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="mens_section_wrap">
					<div class="row">
						<?php
							$style="style";
							$qry_sub="select * from subcategory_tbl where subcategory_name='".$style."'";
							$test_sub_cat=mysqli_query($cnn,$qry_sub);
							$sub_cat_row=mysqli_fetch_array($test_sub_cat);
							
							?>

						
							<a href="womens.php?cat_id=<?php echo $_GET['cat_id'];?>&sub_cat_id=<?php echo $sub_cat_row['subcategory_id'];?>" class="sub-cat" ><?php echo $sub_cat_row['subcategory_name'];?></a>
						
								
									
						
						<?php
							$style="style";
							$qry_sub="select * from subcategory_tbl where subcategory_name!='".$style."'";
							$test_sub_cat=mysqli_query($cnn,$qry_sub);
							while($sub_cat_row=mysqli_fetch_array($test_sub_cat))
							{
								?>

						
							<a href="womens.php?cat_id=<?php echo $_GET['cat_id'];?>&sub_cat_id=<?php echo $sub_cat_row['subcategory_id'];?>" class="sub-cat" ><?php echo $sub_cat_row['subcategory_name'];?></a>
						
								
									
						<?php			
						}
						?>
						<a href="womens.php?cat_id=<?php echo $_GET['cat_id'];?>&sub_cat_id=<?php echo $sub_cat_row['subcategory_id'];?>" class="sub-cat" >Add Ons</a>
						
						<a href="special.php">Special Instructions</a>
						
						<br>
						<br>
						<br>
						<?php 
						if(isset($_GET['cat_id']))
						{
							//echo "cat";
							if(isset($_GET['sub_cat_id']) && !empty($_GET['sub_cat_id']))
							{
								$qry="select * from style_tbl where category_id='".$_GET['cat_id']."' and  subcategory_id='".$_GET['sub_cat_id']."'";
								$test=mysqli_query($cnn,$qry);
							}
							else if(isset($_GET['sub_cat_id']))
							{
								//echo "subcat";
								$qry_add_ons="select * from add_ons_tbl where category_id='".$_GET['cat_id']."'";
								$add_ons_test=mysqli_query($cnn,$qry_add_ons);
							}
							else
							{
								$qry="select * from style_tbl where category_id='".$_GET['cat_id']."'";
								$test=mysqli_query($cnn,$qry);
							}
						}

						else
						 {
							$qry="select * from style_tbl";
							$test=mysqli_query($cnn,$qry);
						 }
						//echo "<br>".$qry; 
						
						if(isset($test)){
						//	echo "iftets";die;
							while($result=mysqli_fetch_array($test))
							{
							
						?>


						<!-- style code block start here	 -->
						
						<div class="col-md-4 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img style="height: 400px;width: 600px;"src="../../threadsmith/admin/profiles/<?php echo $result['style_image'];?>" alt="image"  class="img-responsive" /></a>
									<!-- <span class="sale">Sale!</span>   -->
									<div class="fea_inner">
										<ul>
											<!-- <li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li> -->
											<li class="second_li"><a href="add_cart.php?cat_id=<?php echo $_GET['cat_id']?>&sub_cat_id=<?php if(isset($_GET['sub_cat_id'])) {echo $_GET['sub_cat_id']; } ?>&style_id=<?php echo $result['style_id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">SSSSSAdd Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<!-- <li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li> -->
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#"><?php echo $result['style_name']; ?></a></h2>
									<div class="fea_reating">
										<ul>
											<!-- <li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li> -->
										</ul>
									</div>
									<span>$<?php echo $result['style_price']; ?></span>
								</div>
							</div>
						</div>
						<!-- style code block end here	 -->

						<?php }  
							}
							 else if(isset($add_ons_test))
							 {
							 //	include_once('add_ons_funcions.php');
							while($result_add=mysqli_fetch_array($add_ons_test))
							{
								
							?>
						<!-- lining code block start here	 -->
						 <p>Lining</p> 
						<?php 

							$lining="SELECT * FROM `lining_tbl`";
							$ling_data=mysqli_query($cnn,$lining);
							while($lining_row=mysqli_fetch_array($ling_data))
							{
						?>
						<div class="col-md-4 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img style="height: 400px;width: 600px;"src="../../threadsmith/admin/profiles/<?php echo $lining_row['lining_image']; ?>" alt="image"  class="img-responsive" /></a>
									<!-- <span class="sale">Sale!</span>   -->
									<div class="fea_inner">
										<ul>
											<!-- <li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li> -->
											<li class="second_li">
												<a href="add_cart.php?lining_id=<?php echo $lining_row['lining_id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<!-- <li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li> -->
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#"><?php echo $lining_row['lining_name']; ?></a></h2>
									
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>Rs.<?php echo $lining_row['lining_price']; ?></span>
								</div>
							</div>
						</div>
						<!-- lining code block start here	 -->
						<?php } ?>

						<p>Tassels</p> 
						<?php 

							$tassle="SELECT * FROM `tassels_tbl`";
							$tassle_data=mysqli_query($cnn,$tassle);
							while($tassle_row=mysqli_fetch_array($tassle_data))
							{
						?>
						<div class="col-md-4 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img style="height: 400px;width: 600px;"src="../../threadsmith/admin/profiles/<?php echo $tassle_row['tassels_image']; ?>" alt="image"  class="img-responsive" /></a>
									<!-- <span class="sale">Sale!</span>   -->
									<div class="fea_inner">
										<ul>
											<!-- <li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li> -->
											<li class="second_li"><a href="add_cart.php?tassels_id=<?php echo $tassle_row['tassels_id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<!-- <li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li> -->
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#"><?php echo $tassle_row['tassels_name']; ?></a></h2>
									
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>Rs.<?php echo $tassle_row['tassels_price']; ?></span>
								</div>
							</div>
						</div>
						<!-- Tassle block start here	 -->
						<?php } ?>


						<p>Cups</p> 
						<?php 

							$cup="SELECT * FROM `cups_tbl`";
							$cup_data=mysqli_query($cnn,$cup);
							while($cup_row=mysqli_fetch_array($cup_data))
							{
						?>
						<div class="col-md-4 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img style="height: 400px;width: 600px;"src="../../threadsmith/admin/profiles/<?php echo $cup_row['cups_image']; ?>" alt="image"  class="img-responsive" /></a>
									<!-- <span class="sale">Sale!</span>   -->
									<div class="fea_inner">
										<ul>
											<!-- <li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li> -->
											<li class="second_li"><a href="add_cart.php?cups_id=<?php echo $cup_row['cups_id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<!-- <li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li> -->
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#"><?php echo $cup_row['cups_name']; ?></a></h2>
									
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>Rs.<?php echo $cup_row['cups_price']; ?></span>
								</div>
							</div>
						</div>
						<!-- cup block start here	 -->
						<?php }  ?>
 
 					<p>Piping</p> 
						<?php 

							$piping="SELECT * FROM `piping_tbl`";
							$piping_data=mysqli_query($cnn,$piping);
							while($piping_row=mysqli_fetch_array($piping_data))
							{
						?>
						<div class="col-md-4 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img style="height: 400px;width: 600px;"src="../../threadsmith/admin/profiles/<?php echo $piping_row['piping_image']; ?>" alt="image"  class="img-responsive" /></a>
									<!-- <span class="sale">Sale!</span>   -->
									<div class="fea_inner">
										<ul>
											<!-- <li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li> -->
											<li class="second_li"><a href="add_cart.php?piping_id=<?php echo $piping_row['piping_id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<!-- <li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li> -->
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#"><?php echo $piping_row['piping_name']; ?></a></h2>
									
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>Rs.<?php echo $piping_row['piping_price']; ?></span>
								</div>
							</div>
						</div>
						<!-- work block start here	 -->
						<?php }  ?>
						
						<p>Work</p> 
						<?php 

							$work="SELECT * FROM `work_tbl`";
							$work_data=mysqli_query($cnn,$work);
							while($work_row=mysqli_fetch_array($work_data))
							{
						?>
						<div class="col-md-4 col-sm-4 col-xs-12 w-100 wow fadeInUp" data-wow-delay="0.2s">
							<div class="fea_box">
								<div class="fea_box_img">
									<a href="" class="fea_overlay"><img style="height: 400px;width: 600px;"src="../../threadsmith/admin/profiles/<?php echo $work_row['work_image']; ?>" alt="image"  class="img-responsive" /></a>
									<!-- <span class="sale">Sale!</span>   -->
									<div class="fea_inner">
										<ul>
											<!-- <li class="first_li"><a href="product_details.html"><i class="fa fa-search" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Quick View</p></div></a></li> -->
											<li class="second_li"><a href="add_cart.php?work_id=<?php echo $work_row['work_id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Cart</p></div></a></li>
											<li class="third_li"><a href=""><i class="fa fa-heart" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Add Wishlist</p></div></a></li>
											<!-- <li class="fourth_li"><a href=""><i class="fa fa-random" aria-hidden="true"></i><div class="toltip_div"><p class="toltip">Compare</p></div></a></li> -->
										</ul>
									</div>
								</div>
								<div class="fea_box_data">
									<h2><a href="#"><?php echo $work_row['work_name']; ?></a></h2>
									
									<div class="fea_reating">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										</ul>
									</div>
									<span>Rs.<?php echo $work_row['work_price']; ?></span>
								</div>
							</div>
						</div>
						<!-- cup block start here	 -->
						<?php }  ?>


						<?php } } ?>	


						
					</div>
					<!-- paginations -->
					<!-- <div class="pagination_wrap text-right wow fadeInRight" data-wow-delay="0.2s">
						<ul class="pagination_menu">
						  <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
						  <li><a href="#" class="active">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						 <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<!-- paginations -->
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Mens section End -->
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