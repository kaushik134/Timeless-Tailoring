<!DOCTYPE html>
<?php
session_start();
require_once('connect.php');
if(!isset($_SESSION['uid']))
{
	header('location:login.php');
}
?>
<style>
	.error{
		color:red;
	}
	</style>

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
	<title>Contact | <?php echo $title;?></title>
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
						<h1>Contact</h1>
					</div>
					<div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<ul>
							<li><a href="index.php">Home</a></li>
							<!-- <li>Contact</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb section End -->


<!-- Contact Form section Start -->
<div class="main_section contact_form_section section_12">
	<div class="container">
		<div class="row">
			<!-- section heading -->
			<div class="col-lg-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
				<div class="section_heading">
					<h1>Get In Touch</h1>
					<span class="heading_icon">
						<img src="images/icon/heading_icon.png" alt="image" class="img-responsive">
					</span>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complet.</p>
				</div>
			</div>
			<!-- section heading -->
<?php 
 include_once('connect.php');
 if(isset($_POST['sbtn']))
 {
 	$qry="insert into contact_us_tbl values(NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."')";
 	//echo $qry; die;
 	 mysqli_query($cnn,$qry);
	 header('location:index.php');
 }
?>

			<div class="social_bg">
				<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
					<div class="contact_form_wrap">
						<h1>Leave a Message</h1>
						<div class="contact_form cntct">
							<div class="row">
								<form method="POST" id="custom_val">
									<div class="col-md-6 col-xs-12 form_group">
										<input type="text" required 
										name="name" id="name" 
										class="input form-control require" 
										placeholder="Your Name* ">
									</div>
									<div class="col-md-6 col-xs-12 form_group">
										<input type="email" required 
										name="email" 
										id="email" 
										class="input form-control require" 
										placeholder="Your Email*" 
										data-valid="email" 
										data-error="Email should be valid.">
									</div>
									<div class="col-md-6 col-xs-12 form_group">
										<input type="text" required 
										name="contact" 
										id="contact" 
										class="input form-control require" 
										placeholder="Your Mobile Number*" 
										data-valid="contact" 
										data-error="Contact should be valid.">
									</div>
									
									<div class="col-sm-12 col-xs-12">
										<input type="submit" 
										class="btn btn-primary" 
										name="sbtn" 
										value="Submit">
										<div class="response"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 padding_left">
					<div class="contact_social">
						<div class="heading_title">
							<h3>Contact Information</h3>
						</div>
						<div class="content">
							<ul>
								<li>
									<div class="icon_box wow fadeInRight" data-wow-delay="0.2s">
										<div class="left_svg">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 47.825 47.825" style="enable-background:new 0 0 47.825 47.825;"  width="20px" height="20px" class="social_svg" >
												<g>
													<g>
														<g>
															<path d="M36.439,12.646c0-6.919-5.608-12.527-12.528-12.527S11.384,5.727,11.384,12.646c0,9.913,12.527,24.582,12.527,24.582     S36.439,22.508,36.439,12.646z M17.733,11.898c0-3.413,2.767-6.179,6.179-6.179s6.179,2.766,6.179,6.179     c0,3.413-2.767,6.179-6.179,6.179S17.733,15.311,17.733,11.898z" fill="#FFFFFF"/>
															<circle cx="23.911" cy="11.898" r="3.038" fill="#FFFFFF"/>
															<path d="M30.994,32.87c-1.021,1.476-1.979,2.761-2.777,3.793c7.916,0.476,13.104,2.185,15.034,3.456     c-2.261,1.491-8.979,3.587-19.338,3.587c-10.358,0-17.077-2.097-19.338-3.587c1.93-1.271,7.114-2.979,15.022-3.455     c-0.8-1.032-1.759-2.316-2.781-3.792C7.075,33.831,0,36.713,0,40.118c0,4.19,10.707,7.588,23.913,7.588     c13.207,0,23.912-3.396,23.912-7.588C47.827,36.711,40.744,33.828,30.994,32.87z" fill="#FFFFFF"/>
														</g>
													</g>
												</g>
											</svg>
										</div>
										<div class="right_data">
											<h6>Address</h6>
											<p></p>
										</div>
									</div>
								</li>
								<li>	
									<div class="icon_box wow fadeInRight" data-wow-delay="0.3s">
										<div class="left_svg">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;"  width="20px" height="20px" class="social_svg" >
											<g>
												<g id="Phone">
													<g>
														<path d="M559.959,383.188l-99.145-50.93c-24.27-12.508-55.653-8.243-75.772,10.251l-11.571,10.595     c-11.226,10.328-28.726,12.719-42.323,5.681c-33.813-17.404-60.856-44.446-78.279-78.183c-7.133-13.847-4.857-30.83,5.718-42.305     l10.615-11.551c11.379-12.374,17.633-28.439,17.633-45.211c0-10.557-2.563-21.114-7.401-30.524l-50.987-99.067     C211.942,19.928,179.333,0,143.359,0c-21.152,0-41.195,6.771-57.949,19.565L55.27,42.553     c-47.334,36.07-66.785,98.36-48.444,154.989c61.085,188.382,209.132,340.311,396.021,406.426     c15.09,5.336,30.868,8.032,46.876,8.032c37.428,0,73.918-15.204,100.139-41.769l34.521-34.903     c17.824-18.016,27.616-41.846,27.616-67.109C611.999,432.244,592.051,399.674,559.959,383.188z M543.531,495.051l-34.501,34.903     c-22.147,22.414-57.223,30.504-87.058,19.947C251.817,489.734,117.024,351.384,61.409,179.871     c-10.844-33.526,0.65-70.38,28.668-91.743l30.16-23.007c6.675-5.087,14.669-7.784,23.122-7.784     c14.382,0,27.444,7.975,34.042,20.846l50.968,99.067c0.688,1.339,1.052,2.792,1.052,4.303c0,3.06-1.377,5.183-2.543,6.445     l-10.595,11.532c-26.737,29.07-32.532,72.197-14.42,107.33c22.874,44.407,58.522,79.98,102.988,102.892     c34.521,17.786,78.853,11.801,107.406-14.401l11.59-10.633c1.874-1.722,6.731-3.52,10.748-1.473l99.144,50.93     c12.891,6.617,20.885,19.66,20.885,34.043C554.604,478.297,550.665,487.821,543.531,495.051z" fill="#FFFFFF"/>
													</g>
												</g>
											</g>
										</svg>	
										</div>
										<div class="right_data">
											<h6>Phone</h6>
											<p>+84 846 250 592</p>
										</div>
									</div>
								</li>
								<li>
									<div class="icon_box wow fadeInRight" data-wow-delay="0.4s">
										<div class="left_svg">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" width="20px" height="20px" class="social_svg">
												<g>
													<g id="Mail">
														<g>
															<path d="M573.75,57.375H38.25C17.136,57.375,0,74.511,0,95.625v420.75c0,21.133,17.136,38.25,38.25,38.25h535.5     c21.133,0,38.25-17.117,38.25-38.25V95.625C612,74.511,594.883,57.375,573.75,57.375z M554.625,497.25H57.375V204.657     l224.03,187.999c7.134,5.967,15.874,8.97,24.595,8.97c8.74,0,17.461-3.003,24.595-8.97l224.03-187.999V497.25z M554.625,129.763     L306,338.379L57.375,129.763V114.75h497.25V129.763z" fill="#FFFFFF"/>
														</g>
													</g>
												</g>
											</svg>	
										</div>
										<div class="right_data">
											<h6>Email</h6>
											<p>contact@lab.com</p>
										</div>
									</div>
								</li>
								<li> 
									<div class="icon_box wow fadeInRight" data-wow-delay="0.5s">
										<div class="left_svg">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 15 15" style="enable-background:new 0 0 15 15;" xml:space="preserve" width="20px" height="20px" class="social_svg">
												<g>
													<path d="M14.982,7C14.736,3.256,11.744,0.263,8,0.017V0H7.5H7v0.017C3.256,0.263,0.263,3.256,0.017,7H0v0.5   V8h0.017C0.263,11.744,3.256,14.736,7,14.982V15h0.5H8v-0.018c3.744-0.246,6.736-3.238,6.982-6.982H15V7.5V7H14.982z M4.695,1.635   C4.212,2.277,3.811,3.082,3.519,4H2.021C2.673,2.983,3.599,2.16,4.695,1.635z M1.498,5h1.758C3.122,5.632,3.037,6.303,3.01,7H1.019   C1.072,6.296,1.238,5.623,1.498,5z M1.019,8H3.01c0.027,0.697,0.112,1.368,0.246,2H1.498C1.238,9.377,1.072,8.704,1.019,8z    M2.021,11h1.497c0.292,0.918,0.693,1.723,1.177,2.365C3.599,12.84,2.673,12.018,2.021,11z M7,13.936   C5.972,13.661,5.087,12.557,4.55,11H7V13.936z M7,10H4.269C4.128,9.377,4.039,8.704,4.01,8H7V10z M7,7H4.01   c0.029-0.704,0.118-1.377,0.259-2H7V7z M7,4H4.55C5.087,2.443,5.972,1.339,7,1.065V4z M12.979,4h-1.496   c-0.293-0.918-0.693-1.723-1.178-2.365C11.4,2.16,12.327,2.983,12.979,4z M8,1.065C9.027,1.339,9.913,2.443,10.45,4H8V1.065z M8,5   h2.73c0.142,0.623,0.229,1.296,0.26,2H8V5z M8,8h2.99c-0.029,0.704-0.118,1.377-0.26,2H8V8z M8,13.936V11h2.45   C9.913,12.557,9.027,13.661,8,13.936z M10.305,13.365c0.483-0.643,0.885-1.447,1.178-2.365h1.496   C12.327,12.018,11.4,12.84,10.305,13.365z M13.502,10h-1.758c0.134-0.632,0.219-1.303,0.246-2h1.99   C13.928,8.704,13.762,9.377,13.502,10z M11.99,7c-0.027-0.697-0.112-1.368-0.246-2h1.758c0.26,0.623,0.426,1.296,0.479,2H11.99z" fill="#FFFFFF"/>
												</g>
												</svg>
										</div>
										<div class="right_data">
											<h6>Website</h6>
											<p>demoslab.com</p>
										</div>
									</div>
								</li>
								
							</ul>
							<div class="social_icon">
								<a href="#" class=" wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-facebook fb"></i></a>
								<a href="#" class=" wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-twitter twitter"></i></a>
								<a href="#" class=" wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-google-plus google"></i></a>
								<a href="#" class=" wow fadeIn" data-wow-delay="0.5s"><i class="fa fa-linkedin linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact Form section End -->
<!-- Map section Start -->
<div class="map_section wow fadeInUp" data-wow-delay="0.2s">
		<div id="contact_map">
		</div>
</div>
<!-- Map section End -->
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
<!-- map file end -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNdePPJKYq0ptBV_AFi_4RnmUtMa1ZLFg&libraries=places">
</script>
<script src="js/jquery.googlemap.js"></script> 
<!-- map js file end-->
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- custom js -->
<!--	<script src="admin/app-assets/js/scripts/forms/validation/form-validation.js"></script>	-->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
					name: {
                        required: true,
						minlength: 3,
						maxlength: 25,
                        lettersonly: true 
                      
                    },
					email: {
                        required: true, 
                    },
					subject: {
                        required: true,
						minlength :5,
						maxlength: 10
                    },
					contact: {
                        required: true,
						numbersonly: true,
						minlength :10,
						maxlength :20
                      
                    },
					description: {
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

//jQuery.validator.addMethod("", function(value, element) {
       // return this.optional(element) ||   /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;.test(value);
   // }, "Only digits");

	 
      jQuery.extend(jQuery.validator.messages, {
          required: "This field is required.",
          // remote: "Please fix this field.",
           email: "Please enter a valid email address.",
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

<!-- google map script -->
<script>
	$(document).ready(function() {
		var myCenter=new google.maps.LatLng(51.508530, -0.076132);
		function initialize()
		{
			var mapProp = {
				center:myCenter,
				zoom:8,
				scrollwheel: false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("contact_map"),mapProp);
			var icon = { 
				url: 'images/icon/map_icon.png'
			};
			var marker=new google.maps.Marker({
				position:myCenter,
				map: map,
				title: 'Template Bundle',
				icon: icon
			});
			marker.setMap(map);
			var infowindow = new google.maps.InfoWindow({
				content:"<span> Template Bundle </span>"
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	});
</script>
<!-- google map script -->
<!-- map script -->
</body>
<!--body end -->
</html>