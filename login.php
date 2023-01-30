<!doctype html>
<?php
session_start();
require_once('connect.php');
if(isset($_SESSION['uid']))
{
	header('location:index.php');
}
?> 
<html lang="en">
<head>
    <title>Login | <?php echo $title;?></title>
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
    <link rel="stylesheet" href="./assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Theme CSS -->
    
    <link rel="stylesheet" href="./assets/css/theme.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Login</title>
    <style type="text/css">
      body {
      font-family:Times new roman;
        font-size: 130%;
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
    background: rgba(254, 254, 254, 0.52);
    color: black;
    font-weight: 700;
  }
    </style>
</head>
<body class="bg-white" >

<?php
    if(isset($_POST['sub']))
    {
      //echo "sddsad";die;
      $email=$_POST['mail'];
      $email=$_POST['mail'];
      $str="select * from customer_tbl where (email='".$_POST['mail']."' or contact='".$_POST['mail']."') and password='".$_POST['password']."' and customer_status='1'";
      //echo $str;die;
      $result=mysqli_query($cnn,$str);
      $row=mysqli_fetch_array($result);
      if(mysqli_num_rows($result)>0)
      {
          $_SESSION['uid']=$row['customer_id'];
          $_SESSION['umail']=$row['email'];
          $_SESSION['uname']=$row['customer_name'];
          //header('location:index.php');
          ?>
          <script>
                        swal({
                              title: 'Good Job',
                              text: 'Login success',
                              icon: "success",
                            }).then(function() {
                                window.location.href = "index.php";
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
      text: "Incorrect Mail or Password!!!",
      icon: "warning",
      //button: "Aww yiss!",
      });
  </script>
  
<?php } } ?>
<!-- <img src="../frontend/tailor-html-template/images/eduimag.jpg" style="height: 500px;width: 200px;"> -->
    <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-8" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0" style="color: burlywood;font-size: 35px;">Login</h1>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="..." alt="...">
    </header>


    <!-- LOGIN
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Login -->

                <h2 class="mb-6" style="color: burlywood;font-size: 25px">Log In to Your TimelessTailoring!</h2>

                <!-- Form Login -->
                <div class="bg-img">
                <form id="custom_val" class="mb-5" method="POST">
                    <!-- Email -->
                    <div class="form-group mb-3">
                        <label for="modalSigninEmail1"style="color:burlywood;font-size: 20px">
                            Username or Email
                        </label>
                        <input type="email" class="form-control" id="modalSigninEmail1" name="mail" placeholder="creativelayers">
                        <label id="modalSigninEmail1-error" class="error" for="modalSigninEmail1" style="color: white;"></label>
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-3">
                        <label for="modalSigninPassword1" style="color: burlywood;font-size: 20px">
                            Password
                        </label>
                        <input type="password" class="form-control" id="modalSigninPassword1" name="password" placeholder="**********">
                        <label id="modalSigninPassword1-error" class="error" for="modalSigninPassword1" style="color: white;"></label>
                    </div>

                    <div class="d-flex align-items-center mb-5 font-size-sm">
                        <div class="ms-auto">
                            <a class="text-gray-800" href="recover.php" style="color: burlywood;font-size: 20px">Forgot Password</a>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" style="background-color: burlywood;color: black;" type="submit" name="sub">
                        LOGIN
                    </button>


                   <!--   <div class="mb-3">
                      <button type="submit" name="sub" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </div> -->

                </form>

                <!-- Text -->
                <p class="mb-0  text-center" style="color:burlywood;font-size: 15px">Don't have an account? 
                    <a class="text-underline" href="register.php" style="color: burlywood;font-size: 15px">Sign up</a>
                </p>
                <br>
                <p class="mb-0 font-size-sm text-center">
                    <a href="index.php"><i class="fas fa-caret-square-left"style="color:burlywood;font-size: 15px"> Back To Home</i></a>
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

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>

      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
                    
                    mail: {
                        required: true, 
                         minlength: 13,
                        maxlength: 30
                    },
                    password: {
                        required: true,
                        minlength :5,
                        maxlength: 15
                    },
                    }
                });
                messages : {
                      name: {
                      required: "Name should be at least 3 characters"
                    }
                }
         
          });
      

     
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
</body>
</html>
