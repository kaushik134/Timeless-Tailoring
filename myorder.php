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
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="table-responsive cart_table wow fadeInRight" data-wow-delay="0.2s">
					<table class="table">
						<tr>
							
							<th>Order Id</th>
							<th>Txn Id</th>
							<th>Products</th>
							<th>Order Date</th>
							<th>Order Status</th> 
							<th>Review</th> 
							
						</tr>
						<?php 
							$sql_order="select * from order_tbl,payment_details_tbl
							 where order_tbl.order_id=payment_details_tbl.order_id and order_tbl.customer_id='".$_SESSION['uid']."'";
							//echo $sql_order;
							$order_data=mysqli_query($cnn,$sql_order);
							while($row_order=mysqli_fetch_array($order_data))
							{
						?>
						<tr>
							 <td><?php echo $row_order['order_id'];?></td>
							 <td><?php echo $row_order['transaction_id'];?></td>
							<td> <?php 
									$data_order=get_order_details_data($row_order['order_id']);
									echo "<table class='table' >

											<tr>
													<th style='width:100px'>Style</th>
													<th style='width:100px'>Category</th>
													<th style='width:100px'>Frontneck</th>
													<th style='width:100px'>Style</th>
												</tr>";
									while($odr_row=mysqli_fetch_array($data_order))
									{
										$cart_datas=get_cart_details_data($odr_row['cart_id']);
										
										while($my_row=mysqli_fetch_array($cart_datas))
										{
												
												echo "<table class='table' >

												<tr>
															<td style='width:100px'>"."<img style='height: 50px;width: 50px;' src='admin/profiles/".$my_row['style_image']."'></td>
															<td style='width:100px'>".$my_row['category_name']."</td>
															<td style='width:100px'>".$my_row['subcategory_name']."</td>
															<td style='width:100px'>".$my_row['style_name']."</td>
														
														</tr>
													 ";
										}
										
									}
									echo "</table>";
									?>
								<!-- <span class="prod_thumb">
									<img src="images/checkout/checkout_1.jpg" alt="image" class="img-responsive" />
								</span> -->
								<div class="product_details">
									<h4><?php //echo $row_order['category_name'];?></h4>
									<!-- <span class="prod_size">Size - L</span> -->
								</div>
							</td>
							
							<td><?php echo $row_order['order_date'];?></td>
							<td>
							<?php if($row_order['status']==1){ ?>
								<span class="label label-success">Completed</span>	
							<?php } else { ?>
							<span class="label label-warning">Pending</span>	
							<?php } ?>
							
							</td>
							<td>
							
								<a href="review.php?order_id=<?php echo $row_order['order_id'] ?>">review</a>
							</td>
						
							<!-- <td>$300</td> -->
							
						</tr>
						
						<?php } ?>
						<!-- <tr>
							<td>
								<span class="prod_thumb">
									<img src="images/checkout/checkout_3.jpg" alt="image" class="img-responsive" />
								</span>
								<div class="product_details">
									<h4>Golden Shade Blazer Design</h4>
									<span class="prod_size">Size - L</span>
								</div>
							</td>
							<td>$300</td>
							<td><input type="number" name="pro_quantity" class="pro_quantity" value="3"></td>
							<td>$300</td>
							<td>
								<span class="close_pro"><i class="fa fa-close"></i></span>
							</td>
						</tr> -->
						<!-- <tr>
							<td>
								<div class="cupon_code_wrap">
									<input type="text" name="cupon_code" placeholder="####" class="cupon_code">
									<button type="submit" class="cupon_btn t_btn" value="Apply Cupon Code">Apply Coupon Code</button>
								</div>
							</td>
							<td>&nbsp;</td>
							<td>Total</td>
							<td>$899</td>
							<td>&nbsp;</td>
						</tr> -->


					</table>
					<!-- <a href="checkout.html" class="proceed_btn t_btn">proceed</a> -->
				</div>
			</div>
		</div>
	</div>
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