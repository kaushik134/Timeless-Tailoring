<?php
  session_start();
  include_once('connect.php');
  $aname=$aemail=$acontact="";
  if($_GET['upid'])
  {
    // echo "hey"; die;
    $id=$_GET['upid'];
    $str="select * from admin_tbl where admin_id=".$id;
    //echo $str; die;
    $result=mysqli_query($cnn,$str);
    //echo $result; die;
    $up=mysqli_fetch_array($result);
    // echo "<pre>";
    // print_r($up); die;
    $aname=$up['admin_name'];
    $aemail=$up['admin_email'];
    $acontact=$up['contact'];
    if(isset($_POST['sbtn']))
    {
       $qry="update admin_tbl set admin_name='".$_POST['aname']."', admin_email='".$_POST['aemail']."', contact='".$_POST['acontact']."' where admin_id=".$id;

      $_SESSION['mail']=$_POST['aemail'];
      
     
      $_SESSION['name']=$_POST['aname'];
    
       mysqli_query($cnn,$qry);
       header('location:dashboard.php');
    }
  }
?>
<!DOCTYPE html>

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
    <title>Edit Profile | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
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
    
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static dark-layout " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    

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
        </div>
        <div class="content-body">
          <!-- Start here Conetent -->
              <section class="simple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Profile</h4>
        </div>
        <div class="card-body">
          <form id="custom_val" method="POST">

            <div class="form-group">
              <label class="form-label" for="basic-default-name">Admin-Name</label>
              <input type="text" class="form-control"id="aname" name="aname" value="<?php echo $aname; ?>"
              placeholder=" Admin Name"/>
            </div>
             <div class="form-group">
              <label class="form-label" for="basic-default-name">Admin-Email</label>
              <input type="text" class="form-control"id="aemail" name="aemail" value="<?php echo $aemail; ?>"
              placeholder=" Admin Email"/>
            </div>
             <div class="form-group">
              <label class="form-label" for="basic-default-name">Admin-Contact</label>
              <input type="text" class="form-control"id="acontact" name="acontact" value="<?php echo $acontact; ?>"
              placeholder="Admin Contact"/>
            </div>
           
           
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary" name="sbtn" value="update">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

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
    <!-- END: Page JS-->
    <!-- <script type="text/javascript">
      
      $(document).ready(function() {
          $("#custom_val").validate({
                rules: {
                    cname : {
                        required: true,
                        minlength: 3
                    }
                    // age: {
                    //     required: true,
                    //     number: true,
                    //     min: 18
                    // },
                    }
                });
                messages : {
                      cname: {
                      required: "Category Name should be at least 3 characters"
                    }
                }
         
          });
    </script>> -->
  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>