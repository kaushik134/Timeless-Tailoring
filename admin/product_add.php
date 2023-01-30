<?php require_once('connect.php');
	
	// $qry1="select * from category_tbl";
	// $result=mysqli_query($cnn,$qry1);
		
	 if(isset($_GET['up_id']))
	 {
		 $str1="select * from category_tbl";
		 $result1=mysqli_query($cnn,$str1);
		 $str="select * from product_tbl where product_id=".$_GET['up_id'];
		 $result=mysqli_query($cnn,$str);
		 $res=mysqli_fetch_array($result);
		 $cat=$res['category_id'];
		 $gd=$res['gender'];
		 $pr=$res['price'];
	 }
	if(isset($_POST['sbtn']))
	{
    if(isset($_GET['up_id']))
    {
        $str="update product_tbl set product_name='".$_POST['product_name']."',gender='".$_POST['optradio']."',price='".$_POST['price']."' where product_id=".$_GET['up_id'];
        mysqli_query($cnn,$str);
    } 
    else
    {
      $cat_status=1;  
      $qry2="insert into product_tbl values(NULL,'".$_POST['product_name']."','".$_POST['cat']."','".$_POST['optradio']."','".$_POST['price']."') ";
      //echo $qry2; die;
      mysqli_query($cnn,$qry2);
      echo "<h2>Data Inserted..</h2>";
    }
    header('location:product_list.php');
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
    <link rel="stylesheet" type="text/css" href="vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="css/components.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="style.css">
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
         <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
           <!-- breadcrumb here Conetent -->
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
              <h5 class="content-header-title float-left pr-1 mb-0">product</h5>
              <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                  <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Add product
                  </li>
                </ol>
              </div>
            </div>
          </div>
        
        </div>
         <!-- breadcrumb here Conetent -->
          <!-- <div class="content-body">
             <div class="content-header row">
        </div> -->
         <div class="content-body">
          <!-- Start here Conetent -->
              <section class="simple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Product</h4>
        </div>
        <div class="card-body">
          <form id="jquery-val-form" method="POST">
           
			<div class="form-group">
              <label class="form-label" for="basic-default-name"> category</label>
              <select class="form-control" name="cat">
				<option selected disabled>Select Category</option>
				<?php while($row=mysqli_fetch_array($result1)){ if($row['category_status']==1){ ?>
				<option value="<?php echo $row['category_id']; ?>" <?php if($row['category_id']==$cat){ echo "selected"; } ?> > <?php echo $row['category_name']; ?> </option>
				<?php }} ?>
			  </select>
            </div>
            <div class="form-group">
              <label class="d-block">Gender</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Male" <?php if($gd=="Male"){ echo "checked"; } ?> >Male</label>
			  <label class="radio-inline"><input type="radio" name="optradio" value="Female" <?php if($gd=="Female"){ echo "checked"; } ?> >Female</label>
            </div>
			<div class="form-group">
              <label class="form-label" for="basic-default-name"> subcategoryname</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="product_name" required
                placeholder="enter subcategoryname"
              />
            </div>
			
			<div class="form-group">
				<label class="form-label" for="basic-default-name"> price</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="price" required
                placeholder="enter price" value="<?php echo $pr; ?>"
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