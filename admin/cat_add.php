<?php session_start();
  require_once('connect.php');
   if(!isset($_SESSION['admin_email']))
   {
    header('location:index.php');
   } 
  $qry1="select * from category_tbl";
  $result=mysqli_query($cnn,$qry1);
  $cname=$ctype='';
   if(!empty($_GET['up_id']))
   {
      $str1="select * from category_tbl";
      $result1=mysqli_query($cnn,$str1);
      $str="select * from category_tbl where category_id=".$_GET['up_id'];
        $result=mysqli_query($cnn,$str);
      $res=mysqli_fetch_array($result);
      $cname=$res['category_name'];
      $ctype=$res['category_type'];
      // $price=$res['backneck_price'];
      // $img=$res['backneck_image'];
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

      $category_status=1; 
      $str="update category_tbl set category_name='".$_POST['cname']."',category_type='".$_POST['ctype']."' where category_id=".$_GET['up_id'];
     // $_SESSION['cat_edit']="Category Updated Suceessfully..";
	  mysqli_query($cnn,$str);
     
            $_SESSION['success']="Category update Successfully...";
    }
    
    else
    { 
     //echo "hii";
      $category_status=1;
      $qry2="insert into category_tbl values(NULL,'".$_POST['cname']."','".$_POST['ctype']."','".$category_status."')";
    //echo $qry2; die;
	$cat_success=mysqli_query($cnn,$qry2);
          if($cat_success)
          {
            $_SESSION['success']="Category Added Successfully...";
          }
          else
           {
            $_SESSION['danger']="Oops!! Category Already Existed...";
          } 

    }
    header('location:cat_list.php');
  }

?>


<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /index.html by,  04:41:56 GMT -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Add Backneck | <?php echo $title;?></title>
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
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static dark-layout  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
   <?php include_once "header.php"; ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include_once "sidebar.php"; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Category</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Add Category
                  </li>
                </ol>
              </div>
            </div>
          </div>
        
        </div>
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Start here Conetent -->
              <section class="simple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
       <!--  <div class="card-header">
          <h4 class="card-title">Add Back Neck Design</h4>
        </div> -->
        <div class="card-body">
      <form id="custom_val" enctype="multipart/form-data" method="POST">
           <!-- <div class="form-group">
              <label class="d-block">Gender</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Male">Male</label>
        <label class="radio-inline"><input type="radio" name="optradio" value="Female">Female</label> 
            </div> -->
            
             <div class="form-group">
              <label class="form-label" for="basic-default-name"> Category Name</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="cname" 
                placeholder="category Name" value="<?php echo $cname;?>"
              />
            </div>
			<div class="form-group">
              <label class="form-label" for="basic-default-name"> Category Type</label>
			  <select class="form-control"
                id="basic-default-name"
                name="ctype" >
              <option selected disabled>category Type</option>
              <option <?php if($ctype=="top") {echo 'selected';}?>>top</option>
              <option <?php if($ctype=="blouse") {echo 'selected';}?>>blouse</option>
              <option <?php if($ctype=="bottom") {echo 'selected';}?>>bottom</option>
              </select>  
             
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
                    cname : {
                        required: true,
                        minlength: 3,
						maxlength: 15,
                        lettersonly: true
                    },
                    ctype: {
                        required: true,
						lettersonly: true
 
                     },
                    }
                });
                messages : {
                      cname: {
                      required: "Category name should be at least 3 characters"
                    }
                }
         
          });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");

      jQuery.extend(jQuery.validator.messages, {
          required: "please enter category.",
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
    </script>>

  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>