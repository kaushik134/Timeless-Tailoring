<!doctype html>
<?php
session_start();
require_once('connect.php');

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

    <title>Recover Password</title>

</head>
<body class="bg-white">

<?php
    if(isset($_POST['sbtn']))
    {
    
    if ($_POST['pwd']==$_POST['cpwd'])  
    {
    $mail=$_SESSION['mail'];
    $str="update customer_tbl set password= '".$_POST['cpwd']."' where email='".$mail."'";
    mysqli_query($cnn,$str);
   // die;
     ?>
        <script>
        swal({
              title: 'Good Job',
              text: 'Your Password is successfully reset..',
              icon: "success",
            }).then(function() {
                window.location.href = "logout.php";
            })
    </script>
    <?php

  }
  else
     {
        ?>
        <script>
                swal({
                title: "OOPS!",
                text: "Password Did Not Match",
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
            <h1 class="display-4 fw-semi-bold mb-0">Reset Password 🔒</h1>
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
                <!-- <h3 class="mb-6">Enter Verification Code</h3> -->
<!--                 <p class="text-start mb-4">
          We sent a verification code to your mail.Enter the code from the email in the field below.
        </p>
 -->
                <!-- Form Recover Password -->
               
                <form id="custom_val" method="POST" class="mb-5">
                    <!-- Email -->
                <div class="form-password-toggle">
              <label class="form-label" for="password">New Password</label>
                <input type="password" id="password" class="form-control" name="pwd" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                 <label id="modalSigninPassword1-error" class="error" for="password" style="color: red;"></label>
            </div>
            <div class="form-password-toggle">
              <label class="form-label" for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" class="form-control" name="cpwd" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                 <label id="modalSigninPassword1-error" class="error" for="confirm-password" style="color: red;"></label>
            </div>

                    <!-- Submit -->
                    <div>
                    <button class="btn btn-block btn-primary" name="sbtn" type="submit">
                        SET NEW PASSWORD
                    </button>
                    </div>
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

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

<script>
      $('#custom_val').validate({
        rules: {
          pwd: 'required',
          cpwd: 'required',
      },
      messages: {
         pwd: "Password is Required",
         cpwd: "Confirm Password is Required",
     },
     
      submitHandler: function(form) {
        form.submit();
      }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Please Enter Email Name in Characters Only"); 
     
    </script>

</body>
</html>
