<!DOCTYPE html>
<?php 
	session_start();
	include('connect.php');
	
 	if(isset($_POST['sub']))
	{
		$cat_id=$_GET['cat_id'];
		$measurement_qry="select * from category_tbl where category_id=".$cat_id;
		$result=mysqli_query($cnn,$measurement_qry);
		$data=mysqli_fetch_array($result);
		
		if($data['category_name']=='top')
		{
			$top_str="insert into top_measurement_tbl values(NULL,'".$cat_id."','".$_POST['full_body_height']."','".$_POST['length']."','".$_POST['shoulder']."','".$_POST['bust']."','".$_POST['waist']."','".$_POST['arm_hole']."','".$_POST['sleeve_length']."','".$_POST['sleeve_loose']."','".$_POST['hip_round']."','".$_POST['front_neck_deep']."','".$_POST['back_neck_deep']."','".$_POST['surround']."')";
			mysqli_query($cnn,$top_str);
			$last_measurement_id=mysqli_insert_id($cnn);
			$_SESSION['last_measurement_id']=$last_measurement_id;
		}
		
		if($data['category_name']=='blouse')
		{
			$blouse_str="insert into blouse_measurement_tbl values(NULL,'".$cat_id."','".$_POST['height']."','".$_POST['blength']."','".$_POST['shoulder']."','".$_POST['bust']."','".$_POST['waist']."','".$_POST['arm_hole']."','".$_POST['slength']."','".$_POST['loose']."','".$_POST['frontneck']."','".$_POST['backneck']."')";
			mysqli_query($cnn,$blouse_str);
			$last_measurement_id=mysqli_insert_id($cnn);
			$_SESSION['last_measurement_id']=$last_measurement_id;
		}
		
		if($data['category_name']=='bottom')
		{
			$bottom_str="insert into bottom_measurement_tbl values(NULL,'".$cat_id."','".$_POST['waist']."','".$_POST['round']."','".$_POST['thigh']."','".$_POST['ankleround']."','".$_POST['btmlength']."')";
			mysqli_query($cnn,$bottom_str);
			$last_measurement_id=mysqli_insert_id($cnn);
			$_SESSION['last_measurement_id']=$last_measurement_id;
		}
		
	}
	
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
	<title>measurement | <?php echo $title;?></title>
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
	.error{
		color:red;
	}
	</style>
</head>
<!-- END HEAD -->
<!--body start-->
<body>

<?php include_once "header.php"; ?>
<!-- breadcrumb section End -->
<?php
	if(isset($_GET['cat_id']))
	{
		$cat_id=4;
		$qry="select * from category_tbl where category_id=".$cat_id;
		$result=mysqli_query($cnn,$qry);
		$data=mysqli_fetch_array($result);
?>      
       <h2>MEASUREMENT</h2>
		<form method="POST" class="woocommerce-form woocommerce-form-register register">
<?php
		if($data['category_name']=='top')
		{		
?>

        <div class="u-column1 col-1">
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_full_body_height">full body height&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="full_body_height" id="reg_full_body_height" autocomplete="height" /></p>
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_top_length">top length&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="length" id="reg_top_length" autocomplete="length" /></p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_shoulder">shoulder&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="shoulder" id="reg_shoulder" autocomplete="shoulder" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_bust">bust&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="bust" id="reg_bust" autocomplete="bust" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_waist">waist&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="waist" id="reg_waist" autocomplete="waist" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_arm_hole">arm hole&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="arm_hole" id="reg_arm_hole" autocomplete="arm_hole" />
				</p>
				
				</div>
				<div class="u-column1 col-1">
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_sleeve_length">sleeve length&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="sleeve_length" id="reg_sleeve_length" autocomplete="slength" />			</p>
				
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_sleeve_loose">sleeve loose&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="sleeve_loose" id="reg_sleeve_loose" autocomplete="loose"  />			</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_hip_round">hip round&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="hip_round" id="reg_hip_round" autocomplete="round"  />			</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_frontneck_deep">front neck deep&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="front_neck_deep" id="reg_frontneck_deep" autocomplete="frontneck"  />			</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_backneck_deep">back neck deep&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="back_neck_deep" id="reg_backneck_deep" autocomplete="backneck"  />			</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_surround">surround&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="surround" id="reg_surround" autocomplete="surround" />			</p>
	
				</div>
				
<?php 
		} 
		if($data['category_name']=='top and bottom')
		{		
?>

		<div class="u-column1 col-1">
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_full_body_height">full body height&nbsp;<span class="required">*</span></label>
				<input type="text"  name="height" id="reg_full_body_height" autocomplete="height" /></p>
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_blouse_length">blouse length&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="blength" id="reg_blouse_length" autocomplete="length" /></p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_shoulder">shoulder&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="shoulder" id="reg_shoulder" autocomplete="shoulder" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_bust">bust&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="bust" id="reg_bust" autocomplete="bust" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_waist">waist&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="waist" id="reg_waist" autocomplete="waist" />
				</p>
				
				</div>
				
				<div class="u-column1 col-1">
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_arm_hole">arm hole&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="arm_hole" id="reg_arm_hole" autocomplete="arm_hole" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_sleeve_length">sleeve length&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="slength" id="reg_sleeve_length" autocomplete="slength" />			</p>
				
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_sleeve_loose">sleeve loose&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="loose" id="reg_sleeve_loose" autocomplete="loose"  />			</p>
				
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_frontneck_deep">front neck deep&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="frontneck" id="reg_frontneck_deep" autocomplete="frontneck"  />			</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_backneck_deep">back neck deep&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="backneck" id="reg_backneck_deep" autocomplete="backneck"  />			</p>
				
					
				</div>
		

<?php 
		}
		if($data['category_type']=='bottom')
		{		
?>
		<div>
		

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_waist">waist&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="waist" id="reg_waist" autocomplete="waist" />
				</p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_hip_round">hip round&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="round" id="reg_hip_round" autocomplete="round"  />			</p>
			
		     	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_thigh">thigh&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="thigh" id="reg_thigh" autocomplete="thigh" /></p>
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_ankle_round">ankle round&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="ankleround" id="reg_ankle_round" autocomplete="ankleround"  />			</p>
			
				
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_bottom_length">bottom length&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="btmlength" id="reg_bottom_length" autocomplete="length" /></p>
		
				
				</div>
				
		<?php } ?>

		
<?php } ?>				

<!-- About section Start -->
<div class="main_section section_01">
	<div class="container">
		<div class="row">
		<!-- section heading -->
			<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
					<!-- <h1>About Us </h1> -->
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="image" class="img-responsive">
					</span>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complet.</p>
				</div>
			</div>
			<!-- section heading -->
			<div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="about_thumb_wrap">
					<div class="about_thumb">
						<img src="images/about/02.jpg" class="img-responsive" alt="image" />
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
				<div class="about_description">
					<h2 class="su_heading">We provide <span class="spn">you with great suits </span>that benefit you and your lifestyle</h2>
					<p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
					<h4 class="provide">Handcrafted <span class="spn">Suit</span></h4>
					<div class="about_ul">
						<ul>
							<li> <i class="fa  fa-arrow-circle-o-right " aria-hidden="true"></i>Nulla consequat massa quis enim. Donec pede justo, fringilla vel. Donec pede justo, fringilla vel.</li>
							<li> <i class="fa  fa-arrow-circle-o-right " aria-hidden="true"></i> Donec pede justo, fringilla vel. Donec pede justo, fringilla vel. Nulla consequat massa quis enim.</li>
							<li> <i class="fa  fa-arrow-circle-o-right " aria-hidden="true"></i>Nulla consequat massa quis enim. Donec pede justo, fringilla vel. Donec pede justo, fringilla vel.</li>
						</ul>
					</div>
					
					<!-- <a href="#" class="tailor_btn">Read More</a> -->
					<a href="#" class="t_btn about_btn">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- Testimonial section End -->
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