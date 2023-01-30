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
    $qry="select * from customer_tbl where email='".$_POST['uid']."'";
    //echo $qry;die;
     $result=mysqli_query($cnn,$qry);
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['mail']=$_POST['uid'];
        $otp=rand(100000,999999);
        $time=time();
        $status=1;
        
        require 'phpmailer/PHPMailerAutoload.php';
        require 'phpmailer/class.phpmailer.php';
        $data=mysqli_fetch_array($result);
        $_SESSION['user_name_data']=$data['customer_name'];
        $otp=rand(100000,999999);
        $_SESSION['random_otp']=$otp;
        //$to_id = $_POST['toid'];
        //$_SESSION['forget_email']=$uid;
        $uid=$_POST['uid'];
        $subject = "Forget Password";
        $setfrom="Timeless Tailoring";
        
        // Retrieve the email template required
        $message = '
                    <html>
                    <head>
                    <title>HTML email</title>
                    <style>

                    </style>
                    </head>
                    <body>
                    
                    <div class="c-email" style="width:60%;margin:auto;border:1px solid #BAE3FF;border-radius:5px;padding:30px 30px 12px 30px;">
                
                      <div style="text-align:center">
                        Dream Edu
                      </div>
                      
                      <div class="c-email__content">
                        <p style="font-size:14px;font-family:roboto;color:#383838;font-weight:bold;">
                          Dear '.$_SESSION['user_name_data'].',</p>

                        <o>You have requested to recover your password for online access to our website. We have generated a One - Time Passcode for you which will verify that you have requested access. This One - Time Passcode is time sensitive and valid for a single use.</o><br>

                        <div class="c-email__code" style="text-align:center;margin-top:10px;margin-bottom:10px">
                          <span style="font-size:15px;font-family:roboto;color:#388080;font-weight:bold;">'.$_SESSION['random_otp'].'</span>
                        </div>
                      </div>
                     
                        <hr>
                        <div style="font-size:10px;font-family:roboto;color:#383838;text-align:center">
                            <o>Thank you for utilising our services</o><br>
                            <o>-</o><br>
                            <o>Dream Infotech</o><br>
                            <o>99552 44556, 99556 22885</o><br>
                            <o>www.timelessinfotech@gmail.com</o><br>
                            <o>Timeless Infotech User Authentication</o>
                        </div>
                    </div>
                    </body>
                    </html>
            ';
            $mail = new PHPMailer();
        
            $mail->isSMTP();
            //$mail->SMTPDebug = 2;
            $mail->Host = 'smtp.gmail.com';
            $mail -> SMTPSecure = 'tls';
            $mail -> SMTPAuth = true;
            $mail->CharSet = "UTF-8";
            $mail->Port = 587;
            $mail->Username   = 'dreamedu17@gmail.com';
            $mail->Password   = 'dreamedu@123';
            $mail->FromName = $setfrom;
            $mail->addAddress($uid);
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if($mail->send())
            {
                $str="insert into otp_status_tbl values(NULL,'".$otp."','".$status."','".$time."')";
                // echo $str;die;
                $sucess=mysqli_query($cnn,$str);
                if($sucess)
                {
                ?> 
                    <script>
                        swal({
                              title: 'Good Job',
                              text: 'OTP send sucessfully.please check your email',
                              icon: "success",
                            }).then(function() {
                                window.location.href = "verify_code.php";
                            })
                    </script>

                    <!-- echo ("<script>window.alert('OTP send sucessfully.please check your email') ; window.location.href='code.php'; </script>"); -->
                    <?php
                    //header('location:code.php');
                }
            }  
     }
    else
    {
    ?>
    <script>
        swal({
        title: "OOPS!",
        text: "Incorrect mail",
        icon: "error",
        //button: "Aww yiss!",
        });
    </script>
<?php } } ?>



    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-8" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Recover Password</h1>
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
                <h3 class="mb-6">Recover password!🔒</h3>

                <!-- Form Recover Password -->
                <form id="custom_val" method="POST" class="mb-5">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="modalForgotpasswordEmail1">
                            Email
                        </label>
                        <input type="email" class="form-control" id="modalForgotpasswordEmail1" name="uid" placeholder="johndoe@creativelayers.com">
                         <label id="modalSigninPassword1-error" class="error" for="modalForgotpasswordEmail1" style="color: red;"></label>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" name="sbtn" type="submit">
                        RECOVER PASSWORD
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

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>

<script>
      $('#custom_val').validate({
        rules: {
          uid: 'required',
      },
      messages: {
         uid: "Email id is Required",
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
