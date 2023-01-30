<!DOCTYPE html>
<?php 
    session_start();
	if(!isset($_SESSION['uid']))
	{
	  header('location:login.php');
	}
    include('connect.php');
	
    $cat_id=$_GET['cat_id'];
    $measurement_qry="select * from category_tbl where category_id=".$cat_id;
    $result=mysqli_query($cnn,$measurement_qry);
    $data=mysqli_fetch_array($result);
   // echo $measurement_qry;die;
    if(isset($_POST['sbtn']))
    {
        //echo "hello";
        if($data['category_type']=='top')
        {
            //echo "string";
            $top_str="insert into top_measurement_tbl values(NULL,'".$cat_id."','".$_POST['height']."','".$_POST['length']."','".$_POST['shoulder']."','".$_POST['bust']."','".$_POST['waist']."','".$_POST['arm_hole']."','".$_POST['slength']."','".$_POST['loose']."','".$_POST['hip_round']."','".$_POST['frontneck']."','".$_POST['backneck']."','".$_POST['surround']."')";
            mysqli_query($cnn,$top_str);
            //echo $top_str;die;
            #update cart set measurements
            $last_id=mysqli_insert_id($cnn);
            if($last_id){
                $update_cart="update cart_tbl set top_id='".$last_id."' where 
                category_id='".$_GET['cat_id']."'  and customer_id='".$_SESSION['uid']."' and cart_status=0";   
                //echo $update_cart;die;
                mysqli_query($cnn,$update_cart);    
           echo '<script type="text/javascript">';
			echo 'window.location.href="cart.php?cat_id='.$_SESSION['cat_id'].'"';
			echo '</script>';
            }

        }
        
        if($data['category_type']=='blouse')
        {
            $blouse_str="insert into blouse_measurement_tbl values(NULL,'".$cat_id."','".$_POST['height']."','".$_POST['blength']."','".$_POST['shoulder']."','".$_POST['bust']."','".$_POST['waist']."','".$_POST['arm_hole']."','".$_POST['slength']."','".$_POST['loose']."','".$_POST['frontneck']."','".$_POST['backneck']."')";
            mysqli_query($cnn,$blouse_str);
            #update cart set measurements
            $last_id=mysqli_insert_id($cnn);
            if($last_id){
                $update_cart="update cart_tbl set blouse_id='".$last_id."' where 
                category_id='".$_GET['cat_id']."'  and customer_id='".$_SESSION['uid']."' and cart_status=0";   
                //echo $update_cart;die;
                mysqli_query($cnn,$update_cart);    
             echo '<script type="text/javascript">';
			echo 'window.location.href="cart.php?cat_id='.$_SESSION['cat_id'].'"';
			echo '</script>';
            }
        }
        
        if($data['category_type']=='bottom')
        {
            $bottom_str="insert into bottom_measurement_tbl values(NULL,'".$cat_id."','".$_POST['waist']."','".$_POST['round']."','".$_POST['thigh']."','".$_POST['ankleround']."','".$_POST['btmlength']."')";
            mysqli_query($cnn,$bottom_str);
            #update cart set measurements
            $last_id=mysqli_insert_id($cnn);
            if($last_id){
                $update_cart="update cart_tbl set bottom_id='".$last_id."' where 
                category_id='".$_GET['cat_id']."'  and customer_id='".$_SESSION['uid']."' and cart_status=0";   
                //echo $update_cart;die;
                mysqli_query($cnn,$update_cart);    
            echo '<script type="text/javascript">';
			echo 'window.location.href="cart.php?cat_id='.$_SESSION['cat_id'].'"';
			echo '</script>';
            }
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
<style>
	.error{
		color:red;
	}
	</style>
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
</head>
<!-- END HEAD -->
<!--body start-->
<body>

<!-- header menu start -->
<?php include_once "header.php";?>
<!-- header menu end -->
<?php
    if(isset($_GET['cat_id']))
    {
        $cat_id=$_GET['cat_id'];
        $qry="select * from category_tbl where category_id=".$cat_id;
        $result=mysqli_query($cnn,$qry);
        $data=mysqli_fetch_array($result);
?>      
       <h2 align="center">MEASUREMENT</h2>
        <form method="POST" id="custom_val" class="woocommerce-form woocommerce-form-register register">
            <?php 
        }
        if($data['category_type']=='top')
        {       
?>
<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="contact_form_wrap">
                        <h1>Top Measurement</h1>
                        <style>.contact_form_wrap h1:after {
                                content: "";
                                position: absolute;
                                bottom: 0;
                                width: 230px;
                                height: 2px;
                                background: #d8aa58;
                                left: 0;
                            }</style>
                        <!-- <p align="right">All measurements are in inches only.
                        If possible, ask someone to take your body measurement.

                        We need your body measurements please do not add extra allowances in body measurements.

                        Generally we add 2 inches to 3 inches allowances as per tailoring principles.

                        Fill all measurements accurately as per products.

                        Your size and style selections & instructions are subject to fabric pattern and limitations.</p> -->
                        <div class="contact_form cntct">
                            <div class="row">
                                <form id="custom_val" method="POST">
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="height" id="height" 
                                        class="input form-control require" 
                                        placeholder="Top height">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="length" 
                                        id="length" 
                                        class="input form-control require" 
                                        placeholder=" Top length*" >
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="shoulder" 
                                        id="shoulder" 
                                        class="input form-control require" 
                                        placeholder="Top shoulder*">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="bust" 
                                        id="bust" 
                                        placeholder=" Top bust" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="waist" 
                                        id="waist" 
                                        placeholder=" Top waist" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="arm_hole" 
                                        id="arm_hole" 
                                        placeholder=" Top arm hole" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="slength" 
                                        id="slength" 
                                        placeholder=" Top Sleeve length" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="loose" 
                                        id="loose" 
                                        placeholder=" Top sleeve loose" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="hip_round" 
                                        id="hip_round" 
                                        placeholder=" Top hip round" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="frontneck" 
                                        id="frontneck" 
                                        placeholder=" Top frontneck deep" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="backneck" 
                                        id="backneck" 
                                        placeholder=" Top backneck deep" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="surround" 
                                        id="surround" 
                                        placeholder=" Top surround" 
                                        class="form-control require">
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



<?php 
        } 
        if($data['category_type']=='blouse')
        {       
?>
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="contact_form_wrap">
                        <h1>Blouse Measurement</h1>
                        <style>.contact_form_wrap h1:after {
                                    content: "";
                                    position: absolute;
                                    blouse: 0;
                                    width: 270px;
                                    height: 2px;
                                    background: #d8aa58;
                                    left: 0;
                                }</style>
                        <div class="contact_form cntct">
                            <div class="row">
                                <form id="custom_val" method="POST">
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="height" id="height" 
                                        class="input form-control require" 
                                        placeholder="Blouse height">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="blength" 
                                        id="blength" 
                                        class="input form-control require" 
                                        placeholder=" Blouse length*" >
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="shoulder" 
                                        id="shoulder" 
                                        class="input form-control require" 
                                        placeholder="Blouse shoulder*">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="bust" 
                                        id="bust" 
                                        placeholder=" Blouse bust" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="waist" 
                                        id="waist" 
                                        placeholder=" Blouse waist" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="arm_hole" 
                                        id="arm_hole" 
                                        placeholder=" Blouse arm hole" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="slength" 
                                        id="slength" 
                                        placeholder=" Blouse Sleeve length" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="loose" 
                                        id="loose" 
                                        placeholder=" Blouse loose" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="frontneck" 
                                        id="frontneck" 
                                        placeholder=" Blouse frontneck" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="backneck" 
                                        id="backneck" 
                                        placeholder=" Blouse backneck" 
                                        class="form-control require">
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
<?php 
        }
        if($data['category_type']=='bottom')
        {       
?>

            <div class="social_bg">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="contact_form_wrap">
                        <h1>Bottom Measurement</h1>
                        <style>.contact_form_wrap h1:after {
                                content: "";
                                position: absolute;
                                bottom: 0;
                                width: 280px;
                                height: 2px;
                                background: #d8aa58;
                                left: 0;
                            }</style>
                        <div class="contact_form cntct">
                            <div class="row">
                                <form id="custom_val" method="POST">
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="waist" id="waist" 
                                        class="input form-control require" 
                                        placeholder="Pant waist">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="round" 
                                        id="round" 
                                        class="input form-control require" 
                                        placeholder=" knee round*" 
                                        placeholder="round" >
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="thigh" 
                                        id="thigh" 
                                        class="input form-control require" 
                                        placeholder=" thigh round*">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="ankleround" 
                                        id="ankleround" 
                                        placeholder=" ankle round" 
                                        class="form-control require">
                                    </div>
                                    <div class="col-md-6 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="btmlength" 
                                        id="btmlength" 
                                        placeholder=" bottom length" 
                                        class="form-control require">
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

<?php } ?>

        

<!-- breadcrumb section start -->
<div class="main_section tl_page_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <div class="tl_banner_wrapper"> -->
                    <!-- <div class="page_heading wow fadeInLeft" data-wow-delay="0.2s">
                        <h1>measurement</h1>
                    </div> -->
                    <div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
                        <ul>
                           <!--  <li><a href="">Home</a></li>
                            <li>Contact</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section End -->


<!-- Contact Form section Start -->
<!-- Contact Form section End -->
<!-- Map section Start -->
<!-- <div class="map_section wow fadeInUp" data-wow-delay="0.2s">
        <div id="contact_map">
        </div>
</div> -->
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
<script type='text/javascript' id='dokan-form-validate-js-extra'></script>
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
<script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

   <script type="text/javascript">

      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
					height: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					tlength: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					blength: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					shoulder: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					bust: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					waist: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					arm_hole: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					slength: {
                        required: true,
						minlength: 1,
						maxlength: 2,
                        numbersonly: true
                    },
					
					loose: {
                        required: true,
						minlength: 1,
						maxlength: 2,
                        numbersonly: true
                    },
					round: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					frontneck: {
                        required: true,
						minlength: 1,
						maxlength: 2,
                        numbersonly: true
                    },
					backneck: {
                        required: true,
						minlength: 1,
						maxlength: 2,
                        numbersonly: true
                    },
					surround: {
                        required: true,
						minlength: 2,
						maxlength: 3,
                        numbersonly: true
                    },
					
					round: {
                        required: true,
						minlength: 2,
						maxlength: 3,
                        numbersonly: true
                    },
					thigh: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
					ankleround: {
                        required: true,
						minlength: 1,
						maxlength: 2,
                        numbersonly: true
                    },
					btmlength: {
                        required: true,
						minlength: 2,
						maxlength: 2,
                        numbersonly: true
                    },
				}
                });
                
          });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
	
	jQuery.validator.addMethod("numbersonly", function(value, element) {
        return this.optional(element) || /^[0-9]+$/.test(value);
    }, "Only postive numbers");

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
          accept: "please enter valid image file type (png,jpg,jpeg).",
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