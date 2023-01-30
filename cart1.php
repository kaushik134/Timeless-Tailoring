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
	<title>Cart | <?php echo $title;?></title>
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
						<h1>Cart</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Cart</li>
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
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="table-responsive cart_table wow fadeInRight" data-wow-delay="0.2s">
					<table class="table">
						<tr>
							<th>Products</th>
							<th>Price</th>
							
						</tr>
						<?php 
						$cart_Total_amt=0;
							$cart_sql="select * from cart_tbl,style_tbl,subcategory_tbl where cart_status='0' and customer_id='".$_SESSION['uid']."' and cart_tbl.style_id=style_tbl.style_id and subcategory_tbl.subcategory_id=cart_tbl.subcategory_id";
							$Data_Carts=mysqli_query($cnn,$cart_sql);
							$total_amount=0;
							while($row_cart=mysqli_fetch_array($Data_Carts))
							{

                        
                                $cart_id=$row_cart['cart_id'];
                                //echo "<pre>";
                                //print_r($cart_id);die;
                                $output[] = $cart_id;
                             
                               	// $carts_id=$output[];
                             	 //  $_SESSION['carts_id']=$carts_id;
                                $cart_Total_amt += $row_cart['style_price'];
                                $_SESSION['cart_total']=$cart_Total_amt;
                         		
								//print_r($_SESSION['carts_id']);
								// echo "<pre>";
	                              $_SESSION['cart_id']=$output;
                          
                        
						?>
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="../../threadsmith/admin/profiles/<?php echo $row_cart['style_image'];?>" alt="image" class="img-responsive" />
								</span>
								<div class="product_details">
									<span class="prod_size"><?php echo $row_cart['subcategory_name'];?></span>
									<h4><b><?php echo $row_cart['style_name'];?></b></h4>
									
								</div>
							
							<td>₹ <?php echo $row_cart['style_price'];?></td>
							<!-- <td><input type="number" name="pro_quantity" class="pro_quantity" value="1"></td> -->
						

						</tr>
						
						<?php } ?>
						<?php 
						$cart_Total_amt=0;
							$qry="select * from cart_tbl,subcategory_tbl,add_ons_tbl,lining_tbl,tassels_tbl,cups_tbl,piping_tbl,work_tbl where cart_status='0' and customer_id='".$_SESSION['uid']."' and cart_tbl.add_ons_id=add_ons_tbl.add_ons_id and add_ons_tbl.lining_id=lining_tbl.lining_id and add_ons_tbl.tassels_id=tassels_tbl.tassels_id and add_ons_tbl.work_id=work_tbl.work_id and add_ons_tbl.cups_id=cups_tbl.cups_id and add_ons_tbl.piping_id=piping_tbl.piping_id ";
							
							//echo $cart_sql; die();
							$result=mysqli_query($cnn,$qry);
							$data=mysqli_fetch_array($result);
							
							 
                                                    
                                                            $cart_id=$row_cart['cart_id'];
                                                            //echo "<pre>";
                                                            //print_r($cart_id);die;
                                                            $output[] = $cart_id;
                                                         
                                                           // $carts_id=$output[];
                                                          //  $_SESSION['carts_id']=$carts_id;
                                                           $cart_Total_amt=$data['lining_price']+$data['tassels_price']+$data[ 	'work_price']+$data['cups_price']+$data['piping_price'];
                                                            $_SESSION['cart_total']+=$cart_Total_amt;
                                                     
															//print_r($_SESSION['carts_id']);
															// echo "<pre>";
                                                          $_SESSION['cart_id']=$output;
       
					
                            ?>
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="../../threadsmith/admin/profiles/<?php echo $data['lining_image'];?>" alt="image" class="img-responsive"/>
								</span>
								<div class="product_details">
									<span class="prod_size"><b>Lining</b></span>
									<h5><?php echo $data['lining_name'];?></h5>
								</div>
							
							<td><h4>₹ <?php echo $data['lining_price'];?></h4></td>
							
						</tr>
						   
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="../../threadsmith/admin/profiles/<?php echo $data['tassels_image'];?>" alt="image" class="img-responsive"/>
								</span>
								<div class="product_details">
									<span class="prod_size"><b>Tassels</b></span>
									<h5><?php echo $data['tassels_name'];?></h5>
								</div>
							
							<td><h4>₹ <?php echo $data['tassels_price'];?></h4></td>
							
						</tr>
						   
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="../../threadsmith/admin/profiles/<?php echo $data['cups_image'];?>" alt="image" class="img-responsive"/>
								</span>
								<div class="product_details">
									<span class="prod_size"><b>Cups</b></span>
									<h5><?php echo $data['cups_name'];?></h5>
								</div>
							
							<td><h4>₹ <?php echo $data['cups_price'];?></h4></td>
							
						</tr>
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="../../threadsmith/admin/profiles/<?php echo $data['piping_image'];?>" alt="image" class="img-responsive"/>
								</span>
								<div class="product_details">
									<span class="prod_size"><b>Piping</b></span>
									<h5><?php echo $data['piping_name'];?></h5>
								</div>
							
							<td><h4>₹ <?php echo $data['piping_price'];?></h4></td>
							
						</tr>
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="../../threadsmith/admin/profiles/<?php echo $data['work_image'];?>" alt="image" class="img-responsive"/>
								</span>
								<div class="product_details">
									<span class="prod_size"><b>Work</b></span>
									<h5><?php echo $data['work_name'];?></h5>
								</div>
							
							<td><h4>₹ <?php echo $data['work_price'];?></h4></td>
							
						</tr>
						<tr>
							<td style="text-align: right;"><b>Total &nbsp;</b></td>
							<td><b>₹ <?php echo $_SESSION['cart_total'];?>&nbsp;</b></td>
						</tr>
					</table>
					<a href="checkout.php?my_id=<?php echo $_SESSION['uid']?>" class="proceed_btn t_btn">proceed</a>
					
					<?php 
		if(isset($_SESSION['uid']))
		{
		$qry="select * from category_tbl where category_status='1'";
		$test=mysqli_query($cnn,$qry);
		$result=mysqli_fetch_array($test)
 ?>	 
		<a href="special.php?my_id=<?php echo $_SESSION['uid']?>&cat_id=<?php echo $result['category_id'];?>" class="proceed_btn t_btn">Can U give Special Instruction?</a></center>
		<?php } ?>
<?php
	//$_SESSION['cart_total']=200;
?>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Cart section End -->
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