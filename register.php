<!doctype html> 
<?php
session_start();
 require_once("connect.php");
 //  if(!isset($_SESSION['umail']))
 // {
 //  header('location:login.php');
 //  }
if(isset($_POST['sbtn']))
{
    $customer_status=1;
    $register_date=date("Y-m-d H:i:s");
    $str="insert into customer_tbl values(NUll,'".$_POST['fname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pincode']."','".$register_date."','".$customer_status."')";
    //echo $str;die;
    $register_success=mysqli_query($cnn,$str);

if($register_success):
  $_SESSION['uid']=$row['customer_id'];
  $_SESSION['umail']=$row['email'];
  $_SESSION['uname']=$row['customer_name'];
    header('location:index.php');
endif;
    ?>
   <script>
    swal({
      title: 'Good Job',
      text: 'Register success',
      icon: "success",
    }).then(function() {
        window.location.href = "index.php";
    })
    </script>
    <?php  
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lora:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="./assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="./assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="./assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="./assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="./assets/libs/quill/dist/quill.core.css" />

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
     <link rel="stylesheet" href="./assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Registration</title>
    <style type="text/css">
      body {
      font-family:Times new roman;
        font-size: 100%;
        font-weight:bold;
        background-opacity:0.6;
        background: url(images/background2.jpg)no-repeat center;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;

      
    }


    .card{
    box-shadow: -1px 4px 28px 0px rgb(0 0 0 / 75%);
    background: rgba(200, 200, 200, 0.52);
    color: black;
    font-weight: 600;
  }
    </style>
</head>
<body class="bg-white">
    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-8" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0" style="color:burlywood">Registration Form</h1>
        </div>

        <!-- Img -->
        <!-- <img class="d-none img-fluid" src="..." alt="..."> -->
    </header>


    <!-- REGISTER
    ================================================== -->
    <div class="container mb-1">
        <div class="row gx-0">
            <div class="container text-center py-xl-2">
                <!-- Register -->
                <h3 class="mb-6" style="color:burlywood;">Sign Up and Start Learning!</h3>
            </div>
        </div>
    </div>


    <div class="container pb-6 pb-xl-10">
        <form id="custom_val" name="checkout" method="post" class="checkout woocommerce-checkout" enctype="multipart/form-data"  method="POST" novalidate="">
            <div class="col2-set" id="customer_details" style="margin: 0px 0px 0px 202px;">
                <div class="col-1">
                    <style>
                    </style>
                    <div class="woocommerce-billing-fields">                      
                        <div class="woocommerce-billing-fields__field-wrapper">
                            <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                <label for="billing_first_name" class="" style="color: burlywood;" > Name <abbr class="required" title="required" >*</abbr></label>
                                <input type="text" class="input-text " name="fname" id="billing_first_name" placeholder="Name" value="" autocomplete="given-name" autofocus="autofocus" >
                                <label id="billing_address_1-error" class="error" for="billing_first_name" style="
                                        color: white;"></label>
                            </p>
                            <!-- <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110"> -->
                                <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                <label for="billing_email" style="color: burlywood;" class="">Email address <abbr class="required" title="required">*</abbr></label>
                                <input type="email" class="input-text"  name="email" id="billing_email" placeholder="Email" value="" autocomplete="email">
                                <label id="billing_address_1-error" class="error" for="billing_email" style="
                                        color: white;"></label>
                            </p>

                            
                            <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                <label for="billing_password" style="color: burlywood;" class="">Password <abbr class="required" title="required">*</abbr></label>
                                <input type="password" class="input-text " name="password" id="billing_password" placeholder="Password" value="" autocomplete="postal-code">
                                <label id="billing_address_1-error" class="error" for="billing_password" style="
                                        color: white;"></label>
                            </p>
                            <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                <label for="billing_phone" style="color: burlywood;" class="">Contact<abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="input-text "  name="phone" id="billing_phone" placeholder="Contact" value="" autocomplete="tel">
                                <label id="billing_address_1-error" class="error" for="billing_phone" style="
                                        color: white;"></label>
                            </p>
                            

                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                <label for="billing_address_1" style="color: burlywood;" class="">Street address <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="input-text"  name="address" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1">
                                <label id="billing_address_1-error" class="error" for="billing_address_1" style="
                                        color: white;"></label>
                            </p>
                            <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                <label for="billing_postcode" style="color: burlywood;" class="">city <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="input-text"  name="city" id="billing_postcode" placeholder="City" value="" autocomplete="postal-code">
                                <label id="billing_address_1-error" class="error" for="billing_postcode" style="
                                        color: white;"></label>
                            </p>
                            <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                <label for="billing_postcode" style="color: burlywood;" class="">Pincode <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="input-text"  name="pincode" id="billing_postcode" placeholder="Pincode" value="" autocomplete="postal-code">
                                <label id="billing_address_1-error" class="error" for="billing_postcode" style="
                                        color: white;"></label>
                            </p>
                            <br><br><br><br><br><br><br>
                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" style="background-color: burlywood;color: black;" name="sbtn" type="submit">
                                SIGN UP
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Text --><br>
        <p class="mb-0 text-center" style="color:burlywood;font-size: 20px">
            Already have an account? <a class="text-underline" href="login.php" style="color:burlywood;font-size: 20px;">Log In</a>
        </p>
    </div>


    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="./assets/libs/aos/dist/aos.js"></script>
    <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="./assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="./assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="./assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="./assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="./assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="./assets/libs/quill/dist/quill.min.js"></script>
    <script src="./assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="./assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

<!-- <script>
      $('#custom_val').validate({
        rules: {
          fname: 'required',
          email: 'required',
          password: 'required',
      },
      messages: {
         fname: "User Name is Required",
         email: "Email id is Required",
         password: "Password is Required",
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
    </script>
 -->

 <script>
      $('#custom_val').validate({
        rules: {

          fname:{
            required: true,
            minlength:3,
            lettersonly: true,
          },
          profile:{
            required: true,
          },
          email:{
            required: true,
          },
          password:{
            required: true,
            minlength:3,
          },
          phone:{
            required: true,
            minlength:10,
          },
          address:{
            required: true,
            minlength:3
          },
           pincode:{
            required: true,
            minlength:3,
          },
        
      },
      messages: {

          fname: {
            required:"Name is Required",

          },
          profile: {
            required:"Image is Required",

          },
          email: {
            required:"Email is Required",
          },
          password: {
            required: "Password is Required",
          },
          phone: {
            required:"Phone Number is Required",
          },
          address: {
            required:"Address is Required",
          },
          pincode: {
            required:"Pincode is Required",
          },
        
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
    </script>
</body>
</html>
