<!DOCTYPE html>

<?php
session_start();
 require_once("connect.php");
 ?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- /auth-forgot-password.html by,  04:45:15 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>New Password</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

<?php
    // session_start();
    // require_once("connect.php");
    $uid=$_SESSION['mail'];
    $qry="select * from admin_tbl where admin_email='".$uid."'";
   // echo $qry;die;
     $result=mysqli_query($cnn,$qry);
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['mail']=$uid;
        $otp=rand(1000,9999);
        $time=time();
        $status=1;
        
        require 'phpmailer/PHPMailerAutoload.php';
        require 'phpmailer/class.phpmailer.php';
        $data=mysqli_fetch_array($result);
        $_SESSION['user_name_data']=$data['admin_name'];
        $otp=rand(1000,9999);
        $_SESSION['random_otp']=$otp;
        //$to_id = $_POST['toid'];
        //$_SESSION['forgot_email']=$uid;
        $uid=$_SESSION['mail'];
        $subject = "Forgot Password";
        $setfrom="Dream Dresser";
        
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
                            <o>www.dreaminfotech@gmail.com</o><br>
                            <o>Dream Infotech User Authentication</o>
                        </div>
                    </div>
                    </body>
                    </html>
            ';
            $mail = new PHPMailer();
        
            $mail->isSMTP();
            //$mail->SMTPDebug = 2;
            $mail->Host = 'smtp.gmail.com';
            $mail-> SMTPSecure = 'tls';
            $mail-> SMTPAuth = true;
            $mail->CharSet = "UTF-8";
            $mail->Port = 587;
            $mail->Username   = 'dresser0723@gmail.com';
            $mail->Password   = 'dream_dresser@0729';
            $mail->FromName = $setfrom;
            $mail->addAddress($uid);
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            if($mail->send())
            {
                $str="insert into otp_status_tbl values(NULL,'".$otp."','".$status."','".$time."')";
                //echo $str;die;
                $sucess=mysqli_query($cnn,$str);
                //echo hii;
                if($sucess)
                {
                    ?>
                    <!-- echo hii; -->
                     <script>
                    swal({
                        title: "OTP resend sucessfully",
                        text: "Please check your email",
                        icon: "success",
                        }).then(function() {
                            window.location.href="code.php";
                            //header("location:code.php");
                        })
                </script>
                    <?php
                }
            }
        }
        ?>
        <!-- else
        {
            echo ("<script>window.alert('.....')") 
        }
            }

            
     }
     else
     {
        echo "<script>alert('Invalid Email ID');</script>";
     } -->
 
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- /auth-forgot-password.html by,  04:45:16 GMT -->
</html>