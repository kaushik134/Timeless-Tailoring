<!doctype html>
<?php

require_once('connect.php');
session_start();

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Recover Password</title>

</head>
<body class="bg-white">

<?php
 if(isset($_POST['sbtn']))
 {  
    $code=$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'].$_POST['e'].$_POST['f'];
    $qry="select * from otp_status_tbl where otp='".$code."'";
    //echo $qry;die;
     $result=mysqli_query($cnn,$qry);
     $data=mysqli_fetch_array($result);
     // echo "<pre>";
     // print_r($data);die;
     if(mysqli_num_rows($result)>0)
     {
        //echo "hii";
        if(time()-$data['time']<100)
        {
         header("location:set_password.php");
        }
        else
        {
        ?>
            <!-- echo "<script>alert('Session/OTP Expire');</script>"; -->
            <script>
                swal({
                title: "OOPS!",
                text: "Session/OTP Expire",
                icon: "error",
                //button: "Aww yiss!",
                });
            </script>
            <?php 
        }
     }
     else
     {
        ?>
        <script>
                swal({
                title: "OOPS!",
                text: "InValid OTP",
                icon: "error",
                //button: "Aww yiss!",
                });
            </script>
        <!-- echo "<script>alert('InValid OTP');</script>"; -->
        <?php
     }
 }
?>



    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-8" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Verification Code</h1>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    <!-- RECOVER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Recover -->
                <h3 class="mb-6">Enter Verification Code</h3>
                <p class="text-start mb-4">
          We sent a verification code to your mail.Enter the code from the email in the field below.
        </p>

                <!-- Form Recover Password -->
                <p class="mb-0 fw-semibold">Type your 6 digit security code</p>
                <form method="POST" class="mb-5">
                    <!-- Email -->
                    <div class="mb-3">
            <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus name="a">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="b">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="c">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="d">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="e">
              <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="f">
            </div>
            <!-- Create a hidden field which is combined by 3 fields above -->
            <input type="hidden" name="otp" />
          </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" name="sbtn" type="submit">
                        VERIFY MY CODE
                    </button>
                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center">
                    Remember your password? <a class="text-underline" href="login.php">Log In</a>
                </p>
                <br>
                <p class="mb-0 font-size-sm text-center">
                    <a href="index.php"><i class="fas fa-caret-square-left"> Back To Home</i></a>
                </p>
            </div>
        </div>
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
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/tailors-online\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tailors-online\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_3c3a19623df07f646dcb624f6666d46c","fragment_name":"wc_fragments_3c3a19623df07f646dcb624f6666d46c","request_timeout":"5000"};
/* ]]> */
</script>
    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>


</body>
</html>
