<?php session_start();
  require_once('connect.php');
   if(!isset($_SESSION['admin_email']))
   {
    header('location:index.php');
   } 
	
	$qry1="select * from material_tbl";
	$result=mysqli_query($cnn,$qry1);
	$cat='';
	 if(isset($_GET['up_id']))
	 {
		 $str1="select * from material_tbl";
		 $result1=mysqli_query($cnn,$str1);
		 $str="select * from material_tbl where material_id=".$_GET['up_id'];
		 $result=mysqli_query($cnn,$str);
		 $res=mysqli_fetch_array($result);
		 $cat=$res['material_name'];
	 }
	if(isset($_POST['sbtn']))
	{	
		if(isset($_GET['up_id']))
		{
        $str="update material_tbl set fabric='".$_POST['fab']."',material_name='".$_POST['material_name']."' where material_id=".$_GET['up_id'];
        mysqli_query($cnn,$str);
		} 
		else
		{ 
			$cat_status=1;	
			$qry2="insert into material_tbl values(NULL,'".$_POST['fab']."','".$_POST['material_name']."','".$cat_status."') ";
			//echo $qry2; die;
			mysqli_query($cnn,$qry2);
			//echo "<h2>Data Inserted..</h2>";
		}
		header('location:material_list.php');
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
    <title>Form Validation - Frest - Bootstrap HTML admin template</title>
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

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">

          <!-- breadcrumb here Conetent -->
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">Material</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Add Material
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
        <!-- <div class="card-header">
          <h4 class="card-title">Add material</h4>
        </div> -->
        <div class="card-body">
          <form id="jquery-val-form" method="POST">
           
			<div class="form-group">
              <label class="form-label" for="basic-default-name"> Material</label>
              <select class="form-control" name="fab">
				<option selected disabled>Select Material</option>
				<?php while($row=mysqli_fetch_array($result)){ if($row['material_status']==1){ ?>
				<option value="<?php echo $row['material_id']; ?>"> <?php echo $row['material_name']; ?></option>
				<?php }} ?>
			  </select>
            </div>
            <div class="form-group">
              <!--<label class="d-block">Gender</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Male">Male</label>
			  <label class="radio-inline"><input type="radio" name="optradio" value="Female">Female</label>
            </div>!-->
			<div class="form-group">
              <label class="form-label" for="basic-default-name"> Material Name</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="material_name"
                placeholder="Material Name" value="<?php echo $row['material_name'];?>"
              />
            </div>
			
			<!--<div class="form-group">
				<label class="form-label" for="basic-default-name"> price</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="price"
                placeholder="John Doe"
              />
			</div>
         <!--   <div class="form-group">
              <label class="d-block" for="validationBio">Bio</label>
              <textarea class="form-control" id="validationBio" name="validationBiojq" rows="3"></textarea>
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="validationCheck	" name="validationCheck" />
                <label class="custom-control-label" for="validationCheck">Agree to our terms and conditions</label>
              </div>
            </div> -->

            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary" name="sbtn" value="Submit">Submit</button>
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

  </body>
  <!-- END: Body-->

<!-- /form-validation.html by,  04:45:04 GMT -->
</html>