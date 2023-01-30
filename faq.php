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
	<title>My Order | <?php echo $title;?></title>
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
	h2 {
    font-family: Arial, Verdana;
    font-weight: 800;
    font-size: 2.5rem;
    color: #091f2f;
    text-transform: uppercase;
}
.accordion-section .panel-default > .panel-heading {
    border: 0;
    background: #f4f4f4;
    padding: 0;
}
.accordion-section .panel-default .panel-title a {
    display: block;
   padding: 20px;
    
}
.accordion-section .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
    content: "\f106";
    color: #1f7de2;
    float: right;
    margin-top: -12px;
}
.accordion-section .panel-default .panel-title a.collapsed:after {
    content: "\f107";
}
.accordion-section .panel-default .panel-body {
    font-size: 1.2rem;
}
</style>
</head>
<!-- END HEAD -->
<!--body start-->
<body>
<!-- header menu start -->
<?php include_once "header.php";?>
<!-- header menu end -->
<!-- breadcrumb section start -->
<div class="main_section tl_page_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
				<div class="tl_banner_wrapper">
					<div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
						<h1>My Order</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>My Order</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Cart section Start -->
<div class="main_section section_11">


<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">

 <div class="container">
  
	  <h2>Frequently Asked Questions </h2><br>
	<?php 
		$sql="select * from faq_tbl where faq_status='1'";
		$results=mysqli_query($cnn,$sql);
		while($data=mysqli_fetch_array($results))
		{
	  ?>
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title">
			  <a style="text-decoration:none" class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $data['faq_id'];?>" aria-expanded="true" aria-controls="collapse<?php echo $data['faq_id'];?>">
				<?php echo $data['question'];?>
			  </a>
			</h3>
		  </div>
		  <div id="collapse<?php echo $data['faq_id'];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <ul>
			  <?php echo $data['answer'];?>	</ul>
			</div>
		  </div>
		</div>
		<?php } ?>
		
  
  </div>
</section>
</div>




	
<!-- Cart section End -->
<!-- Footer Start -->
<?php include_once "footer.php";?>
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

<?php 

function get_order_details_data($order_id)
{
	global $cnn;
	$qry_order="select * from order_detail_tbl where order_id=".$order_id;
	//echo $qry_order;
	$order_test=mysqli_query($cnn,$qry_order);
	
	return $order_test;
	// $lining_test;
}

function get_cart_details_data($cart_id)
{
	global $cnn;
	$cart_order="select * from cart_tbl,category_tbl,subcategory_tbl,style_tbl
	where category_tbl.category_id=cart_tbl.category_id and 
		  subcategory_tbl.subcategory_id=cart_tbl.subcategory_id and 
		  style_tbl.style_id=cart_tbl.style_id and 
		  cart_tbl.cart_id=".$cart_id;
	//echo $cart_order;
	$cart_test=mysqli_query($cnn,$cart_order);
	
	return $cart_test;
	// $lining_test;
}
?>
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


	  <style>
        body {
    background-color: #f7f6f6
}

.card {
    width: 350px;
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 12px
}

.circle-image img {
    border: 6px solid #fff;
    border-radius: 100%;
    padding: 0px;
    top: -28px;
    position: relative;
    width: 70px;
    height: 70px;
    border-radius: 100%;
    z-index: 1;
    background: #e7d184;
    cursor: pointer
}

.dot {
    height: 18px;
    width: 18px;
    background-color: blue;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    border: 3px solid #fff;
    top: -48px;
    left: 186px;
    z-index: 1000
}

.name {
    margin-top: -21px;
    font-size: 18px
}

.fw-500 {
    font-weight: 500 !important
}

.start {
    color: green
}

.stop {
    color: red
}

.rate {
    border-bottom-right-radius: 12px;
    border-bottom-left-radius: 12px
}

.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 1em;
    font-size: 30px;
    font-weight: 300;
    color: #FFD600;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}

.buttons {
    top: 36px;
    position: relative
}

.rating-submit {
    border-radius: 15px;
    color: #fff;
    height: 49px
}

.rating-submit:hover {
    color: #fff
}
    </style>	
