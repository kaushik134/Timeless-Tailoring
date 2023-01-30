<!DOCTYPE html>
<?php 
session_start();
require_once "connect.php";
	$qry1="select * from customer_tbl";
	$result=mysqli_query($cnn,$qry1);
	$cname='';
	 if(!empty($_GET['my_id']))
	 {
		 $my_id=$_GET['my_id'];
		  
		  $str1="select * from customer_tbl";
		  $result1=mysqli_query($cnn,$str1);
		  $str2="select * from customer_tbl where customer_id=".$_GET['my_id'];
	      $result=mysqli_query($cnn,$str2);
		  $res=mysqli_fetch_array($result);
		 
		  $cname=$res['customer_name'];
		 
	  }
if(!isset($_SESSION['uid']))
   {
    header('location:index.php');
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
	<title>Checkout | <?php echo $title;?></title>
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
<script>
			  function getPayment(){
				  //alert('sd');
				if (document.getElementById('cash').checked) {
						payment_name = document.getElementById('cash').value;
						document.getElementById('cash_pay').style.display = "block";
						document.getElementById('online_pay').style.display = "none";
				}
				else{
						payment_name = document.getElementById('online').value;	
						document.getElementById('online_pay').style.display = "block";
						document.getElementById('cash_pay').style.display = "none";
				}
				//alert(payment_name);
			  }
			  </script>
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
						<h1>Check out</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Check out</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->
<!-- Mens section Start -->
<div class="main_section section_07 tl_checkout_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-sm-12 col-xs-12 col-lg-offset-1">
				<div class="checkout_wrapper_box">
				  <ul id="progressbar">
						<li class="active">Payment Details</li>
						<br><br>
						<center> <b style="font-size: 30px;color:#d8aa59">Welcome <?php echo $cname; ?></b></center>
						 <!-- <li class="active">Payment</li>
						<li class="active">Receipt</li> -->  
					</ul>
					
					<!-- <div class="woocommerce_checkout_receipt step">
						<h1>THANK YOU FOR YOUR ORDER!</h1>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						<a href="#" class="t_btn receipt_btn">Print Receipt</a>
						<a href="#" class="t_btn receipt_btn">Email Receipt</a>
					</div> -->
					
					<div class="woocommerce_billing step">
						<div class="row">
							<div class="col-md-6 col-xs-12 form_group">
								<div class="tl_check_payment_method">
									<div class="form-group">
										
										<label><b>Choose your payment method:</b></label><br>

										 <input type="radio"  name="payment" id="cash" value="cash" onclick="getPayment()" placeholder="Card Holder Name"> COD<br>
										 <input type="radio"  name="payment" id="online" value="online" onclick="getPayment()" placeholder="card number">
										Online
										
									</div>
								</div>
							</div>
							
						</div>
						<?php
						//$_SESSION['cart_total']=200;
						?>
						
						<!--	<a  class="buy_now tg-btn tg-btnstartcustomizing" href="index.php"  data-amount="<?php echo $_SESSION['cart_total'];?>" data-id="" style="text-decoration: none;" style="display:none"  id="online_pay">Pay Now </a>
						 <a onclick="Please login First" href="payment-proccess_cash.php" class="btn btn-outline-primary" style="display:none" id="cash_pay">Pay now</a>
						-->
					
						 <a  class="buy_now t_btn tg-btnstartcustomizing" href="index.php"  
						 data-amount="<?php echo $_SESSION['cart_total'];?>" data-id="" style="text-decoration: none;" 
						 style="display:none"  id="online_pay">Pay Now </a> 	
						<a  onclick="Please login First" href="payment-proccess_cash.php" class="t_btn next"  
						 style="display:none"  id="cash_pay">Pay Now </a> 	
						
					</div>

				
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
<script src="js/step.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script> 
<!-- custom js -->
<!-- map script -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    //alert(totalAmount);
    //var product_id =  $(this).attr("data-id");
    //alert(product_id);
    var options = {
    "key": "rzp_test_TPaS0mhcHBSjSV",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Thread smith",
    "description": "Payment",
    "image": "../img/product/12347_ivana-squares.jpg",
    "handler": function (response){
        //alert(response);
$.ajax({
    url: 'payment-proccess.php',
    type: 'post',
    //data: {cart:product_id},
    data: {
            razorpay_payment_id: response.razorpay_payment_id , 
            totalAmount : totalAmount ,
            //product_id : product_id,
    }, 
success: function (msg) {
window.location.href = 'http://localhost/tt/website/index.php';
}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
});
</script>   
</body>
<!--body end -->
</html>