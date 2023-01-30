<!DOCTYPE html>
<?php 
session_start();
require_once "connect.php";
if(!isset($_SESSION['uid']))
{
	header('location:login.php');
}
$name=$email=$number=$add=$pin=$city='';
if(isset($_GET['my_id'])){
  $qury=mysqli_query($cnn,"select * from customer_tbl where customer_id='".$_GET['my_id']."'");
  $row=mysqli_fetch_assoc($qury);
  $name=$row['customer_name'];
  $email=$row['email'];
  $number=$row['contact'];
  $add=$row['address'];
  $city=$row['city'];
  $pin=$row['pincode'];
  
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
	<style>
	.error{
		color:red;
	}
	</style>
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
						<li class="active">Billing Details</li>  
					</ul>
					<?php 
					include_once('connect.php');
					 if(isset($_POST['stbn']))
					 	//echo $str; die;
					 {
					 	$qry="insert into delivery_tbl values(NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pincode']."')";
					 	//echo $qry; die;
					 	 mysqli_query($cnn,$qry);
					 	 $last_delivery_id=mysqli_insert_id($cnn);
					 	 $_SESSION['last_delivery_id']=$last_delivery_id;
					 	  echo '<script type="text/javascript">';
							echo 'window.location.href="payment.php?my_id='.$_SESSION['uid'].'"';
							echo '</script>';
					 	//header('location:payment.php');
					 }
					?>
					<div class="woocommerce_billing step">
						<div class="row">
							<form id="custom_val" method="POST">
							<div class="col-lg-6 col-md-6" >
								<div class="form-group">
									<input type="text" value="<?php echo $name?>" required
									name="name" id="name" placeholder="Name*" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6" >
								<div class="form-group">
									<input type="text" value="<?php echo $email?>"required name="email" id="email"  placeholder="Email*" class="form-control">
								</div>
							</div> 
							<div class="col-lg-6 col-md-6 wow fadeInLeft">
								<div class="form-group">
									<input type="text" value="<?php echo $number?>" required
									name="contact" id="contact" placeholder="Phone*" class="form-control">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 wow fadeInUp">
								<div class="form-group">
									<textarea placeholder="Address*"  required
									name="address" id="address" class="form-control"><?php echo $add?></textarea>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInRight" >
								<div class="form-group">
									<input type="text" required
									 name="city" id="city" placeholder="City*" value="<?php echo $city?>" class="form-control">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 wow fadeInRight" >
								<div class="form-group">
									<input type="number" value="<?php echo $pin?>" required
									name="pincode" id="pincode" placeholder="Pincode*" class="form-control">
								</div>
							</div>
							

						</div>
						<div class="form-group checkbox checkbox_main">
						<div class="ship_address">
								<!-- <label>Ship To This Address -->
								<!-- <input type="checkbox"> -->
								<!-- <span class="checkmark"></span> -->
							<!-- </label> -->
							</div> 
							<div>
                                        <input type="submit" 
                                        class="btn btn-primary" 
                                        name="stbn" 
                                        value="Submit">
                                        <div class="response"></div> 
						</div>
					</form>
						</div>
						
					</div>


				
					
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
<script src="js/step.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script> 
<!-- custom js -->
<!-- map script -->
<script src="admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

<script type="text/javascript">
      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
					name: {
                        required: true,
						minlength: 3,
						maxlength: 15,
                        lettersonly: true 
                      
                    },
					email: {
                        required: true,
						minlength: 13,
						maxlength: 35
                    },
					contact: {
                        required: true,
						numbersonly: true,
						minlength :10,
						maxlength :15
                      
                    },
					city: {
                        required: true,
						maxlength: 15,
						minlength :4
                    },
					pincode: {
                        required: true,
						numbersonly: true,
						minlength :6,
						maxlength: 7
                    },
					
					address: {
                        required: true,
						minlength: 3,
						maxlength: 50
                      
                    },
                    }
                });
                messages : {
                      name: {
                      required: "Name should be at least 3 characters"
                    }
                }
         
          });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
	
	jQuery.validator.addMethod("numbersonly", function(value, element) {
        return this.optional(element) || /^[0-9]+$/.test(value);
    }, "Only postive digits");

      jQuery.extend(jQuery.validator.messages, {
          required: "This field is required.",
          // remote: "Please fix this field.",
          // email: "Please enter a valid email address.",
          // url: "Please enter a valid URL.",
          // date: "Please enter a valid date.",
          // dateISO: "Please enter a valid date (ISO).",
          // number: "Please enter a valid number.",
          // digits: "Please enter only digits.",
          // creditcard: "Please enter a valid credit card number.",
          // equalTo: "Please enter the same value again.",
          //accept: "please enter valid image file type (png,jpg,jpeg).",
          // maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
          // minlength: jQuery.validator.format("Please enter at least {0} characters."),
          // rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
          // range: jQuery.validator.format("Please enter a value between {0} and {1}."),
          // max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
          // min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
      });
    </script>
</body>
<!--body end -->
</html>