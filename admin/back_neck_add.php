<?php 
session_start();
require_once('connect.php');
  
 if(!isset($_SESSION['admin_email']))
 {
  header('location:index.php');
 } 

  $qry1="select * from backneck_tbl";
  $result=mysqli_query($cnn,$qry1);
  $bname=$price=$img=$extra_instruction='';
   if(!empty($_GET['up_id']))
   {
      $str1="select * from backneck_tbl";
      $result1=mysqli_query($cnn,$str1);
      $str="select * from backneck_tbl where backneck_id=".$_GET['up_id'];
        $result=mysqli_query($cnn,$str);
      $res=mysqli_fetch_array($result);
      $bname=$res['backneck_name'];
      $price=$res['backneck_price'];
      $img=$res['backneck_image'];
      $extra_instruction=$res['extra_instruction'];
    }
  if(isset($_POST['sbtn']))
  { 
    move_uploaded_file($_FILES['profile']['tmp_name'],"profiles/".$_FILES['profile']['name']);
    $image=$_FILES['profile']['name'];
    if(!empty($_GET['up_id']))
    {
      if($_FILES['profile']['tmp_name']=="")
      {
        $image=$_POST['oldimage'];
      }
      else
      {
        move_uploaded_file($_FILES['profile']['tmp_name'],"profiles/".$_FILES['profile']['name']);
        $image=$_FILES['profile']['name'];  
      }

      $backneck_status=1; 
      $str="update style_tbl set backneck_name='".$_POST['bname']."',backneck_image='".$image."',backneck_price='".$_POST['price']."',extra_instruction='".$_POST['extra_instruction']."'where backneck_id=".$_GET['up_id'];
      mysqli_query($cnn,$str);
    } 
    
    else
    { 
     // echo "hii"; die;
      $backneck_status=1;
      $qry2="insert into style_tbl values(NULL,'".$_POST['bname']."','".$image."','".$_POST['price']."','".$_POST['extra_instruction']."','".$backneck_status."') ";
    //  echo $qry2; die;
      mysqli_query($cnn,$qry2);
    }
    header('location:style_list.php');
  }
?>


<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /index.html by,  04:41:56 GMT -->
  <head>
    <!-- <script>
      $('#form').parsley();
    </script>
        <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Add Backneck | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
   <?php include_once "header.php"; ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include_once "sidebar.php"; ?>
    <!-- END: Main Menu-->

    <!-- <!-- BEGIN: Content-->
     <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Backneck</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>

                  <li class="breadcrumb-item active">Add Backneck
                  </li>
                </ol>
              </div>
            </div>
          </div>
        <!-- <div class="content-header row"> -->
        </div>
        <div class="content-body">
          <!-- Start here Conetent -->
              <section class="simple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <!-- <div class="card-header">
          <h4 class="card-title">Add style</h4>
        </div> -->
        <div class="card-body">
      <form id="custom_val" enctype="multipart/form-data" method="POST">
           <!-- <div class="form-group">
              <label class="d-block">Gender</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Male">Male</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="Female">Female</label> 
            </div> -->
            <div class="form-group">
              <label class="form-label" for="basic-default-name"> category</label>
              <select class="form-control" name="cat">
        <option selected disabled>Select Category</option>
        <?php 
        $qry="select * from category_tbl";
        $test=mysqli_query($cnn,$qry);

        while($row=mysqli_fetch_array($test))
        { if($row['category_status']==1){ ?>
        <option value="<?php echo $row['category_id']; ?>" <?php //if($row['category_id']==$cat){ echo "selected"; } ?> > <?php echo $row['category_name']; ?> </option>
        <?php }} ?>
        </select>
            </div>
             <div class="form-group">
              <label class="form-label" for="basic-default-name"> Backneck name</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="bname" 
                placeholder="Backneck name" value="<?php echo $bname;?>"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-default-name"> Backneck Image</label>
              <div class="custom-file">
                <input type="file" 
                class="custom-file-input" id="customFile" name="profile" aria-invalid="false"  
                <?php //if(empty($img)) { echo "required"; } ?> >
                <label class="custom-file-label" for="customFile"></label>
                
              </div>
               
            <?php if(isset($img) && !empty($img))
                              {
                  ?><img src="profiles/<?php echo $img;?>" height="60px" width="60px"  
                  style="border-radius:100px">
                <?php } 
                  ?>
                                
            <?php //echo $img;?>
            <input type="hidden" value="<?php echo $img;?>" name="oldimage">
            </div><br>
            <div class="form-group">
              <label class="form-label" for="basic-default-name"> Backneck price</label>
              <input
                type="number"
                class="form-control"
                name="price" 
                placeholder="Backneck price" value="<?php echo $price;?>"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-default-name">extra instruction </label>
              <input
                class="form-control"
                name="extra_instruction" 
                placeholder="extra instruction" value="<?php echo $extra_instruction;?>"
              />
            </div>
            <div class="row">
              <div class="col-12">
                <input type="submit" class="btn btn-primary" name="sbtn" value="Submit">
              </div>
            </div>
      </form>
        </div>
      </div>
    </div>
  </div>

          <!-- End here Conetent -->
            

        </div>
      </div>
    </div>
    <!-- END: Content-->



    </div>
    <!-- End: Customizer-->



    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include_once "footer.php"; ?>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->

    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- END: Page JS-->

     <script type="text/javascript">

      
      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
                    bname : {
                        required: true,
                        minlength: 3,
                       lettersonly: true 
                    },
                    profile : {
                        required: true,
                        accept: "image/jpg,image/jpeg,image/png,image/gif"
                        // image: {required: true, accept: "image/jpg,image/jpeg,image/png,image/gif"}
                        //number:true;
                    },
                    price : {
                        required: true,
                        //number:true;
                    }
                    // age: {
                    //     required: true,
                    //     number: true,
                    //     min: 18
                    // },
                    }
                });
                messages : {
                      bname: {
                      required: "Backneck name should be at least 3 characters"
                    }
                }
         
          });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");

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


  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>