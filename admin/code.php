<!DOCTYPE html>

<?php
session_start();
 require_once("connect.php");
 ?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /auth-forgot-password.html by,  04:45:15 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Forget Password </title>
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
  if(isset($_POST['sbtn']))
 {  
    $qry="select * from otp_status_tbl where otp='".$_POST['code']."'";
   // echo $qry;die;
     $result=mysqli_query($cnn,$qry);
     $data=mysqli_fetch_array($result);
     //echo "<pre>";
     //print_r($data);die;
     if(mysqli_num_rows($result)>0)
     {
        if(time()-$data['time']<100)
        {
         header("location:new_password.php");
        }
        else
          {
            //echo "else";die;
            ?>
            <script>
              swal({
                  title: "OOPS!",
                  text: "Session/OTP Expire",
                  icon: "error",
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
                  text: "Invalid OTP",
                  icon: "error",
                });
                </script>    
            <?php
          }
        } 
    ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- forgot password start -->
                <section class="row flexbox-container">
                    <div class="col-xl-7 col-md-9 col-10  px-0">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- left section-forgot password -->
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2">
                                        <div class="card-body">
                                            <div class="text-muted text-center mb-2"><small></small></div>
                                            <form method="POST" class="mb-2">
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="exampleInputEmailPhone1">Enter Verification Code</label>
                                                    <input type="text" class="form-control" id="exampleInputEmailPhone1"
                                                        placeholder="Enter Code" name="code"></div>
                                                <button type="submit" name="sbtn" class="btn btn-primary glow position-relative w-100">SEND
                                                    CODE<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                            </form>
                                            <div class="text-center mb-2"><a href="resend.php"><small class="text-muted">Resend OTP</small></a></div>
                                            <div class="divider mb-2">
                                                <!-- <div class="divider-text">Or Sign in as</div> -->
                                            </div>
                                            <div class="d-flex flex-md-row flex-column">
                                                <!-- <a href="javascript:void(0);"
                                                    class="btn btn-social btn-google btn-block font-small-3 mb-1 mb-sm-1 mb-md-0 mr-md-1 text-center">
                                                    <i class="bx bxl-google font-medium-3"></i><span class="pl-1">Google</span></a> -->
                                                <!-- <a href="javascript:void(0);"
                                                    class="btn btn-social btn-facebook btn-block font-small-3 text-center mt-0">
                                                    <i class="bx bxl-facebook-square font-medium-3"></i><span
                                                        class="pl-1">Facebook</span></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- right section image -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center">
                                    <img class="img-fluid" src="app-assets/images/pages/forgot-password.png"
                                        alt="branding logo" width="300">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- forgot password ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
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