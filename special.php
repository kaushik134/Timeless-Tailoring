<!DOCTYPE html>
<?php
session_start();
require_once('connect.php');
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
    <title>Special Instruction | <?php echo $title;?></title>
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
                        <h1>Special Instruction</h1>
                    </div>
                    <div class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
                        <ul>
                          
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
                <!-- <div class="section_heading"> -->
                    <!-- <h1>Get In Touch</h1> -->
                    <!-- <span class="heading_icon">
                        <img src="images/icon/heading_icon.png" alt="image" class="img-responsive">
                    </span> -->
                    <h3>Make your outfit unique by customizing your own patterns, sleeves and embellishments of your liking.</h3>
                </div>
            </div>
            <!-- section heading -->
<?php 
include_once('connect.php');
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
    $qry1="select * from category_tbl";
    $result=mysqli_query($cnn,$qry1);
    $catname='';
    if(!empty($_SESSION['cat_id']))
    {
        $cat_id=$_GET['cat_id'];
        $str1="select * from category_tbl";
        $result1=mysqli_query($cnn,$str1);
        $str2="select * from category_tbl where category_id=".$_SESSION['cat_id'];
        $result=mysqli_query($cnn,$str2);
        $res=mysqli_fetch_array($result);
        $catname=$res['category_name'];    
      }
    if(isset($_POST['sbtn']))
    {
        $status="1";
        $qry2="insert into special_instructions_tbl values(NULL,'".$my_id."','".$cat_id."','".$_POST['instruction']."','".$status."')";
        if(mysqli_query($cnn,$qry2)){
            ?>
            <script>
            window.location.href = "http://localhost/website/cart.php";
        </script>
        <?php
        }
        // header('location:cart.php');
        //echo $qry2;die;
    }
?>
            <div class="social_bg">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="contact_form_wrap">
                        <h1>Leave a Message</h1>
                        <div class="contact_form cntct">
                            <div class="row">
                                <form method="POST">
                                    <div class="col-md-12 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="Customer"  id="customer"
                                        class="input form-control require" 
                                        placeholder="Customer Name*" value="<?php echo $cname;?>">
                                    </div>

                                    <div class="col-md-12 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="catname" id="special_instructions_name" 
                                        class="input form-control require" 
                                        placeholder="Category Name*" value="<?php echo $catname;?>">
                                    </div>
                                    <div class="col-md-12 col-xs-12 form_group">
                                        <input type="text" required 
                                        name="instruction" 
                                        id="instruction" 
                                        class="input form-control require" 
                                        placeholder=" Additional Instruction*">
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
<script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script type="text/javascript">

      
      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
                    name : {
                        required: true,
                        minlength: 3,
                       lettersonly: true 
                    },
                    email : {
                        required: true,
                        maxlength:4,
                        //numbersonly: true
                        //number:true;
                    },
                    subject : {
                        required: true,
                        maxlength:4,
                        lettersonly: true 
                        //number:true;
                    },
                    description: {
                     required: true,
                     
                     lettersonly: true 
                    //     number: true,
                     
                     },
                    }
                });
                messages : {
                      name: {
                      required: "Contact name should be at least 3 characters"
                    }
                }
         
          });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");

jQuery.validator.addMethod("", function(value, element) {
        return this.optional(element) ||   /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;.test(value);
    }, "Only digits");

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