<?php require_once('connect.php');
	
	$qry1="select * from back_neck_design_tbl";
	$result=mysqli_query($cnn,$qry1);
	$bname=$price=$img='';
	 if(!empty($_GET['up_id']))
	 {
		  $str1="select * from back_neck_design_tbl";
		  $result1=mysqli_query($cnn,$str1);
		  $str="select * from back_neck_design_tbl where back_neck_design_id=".$_GET['up_id'];
	      $result=mysqli_query($cnn,$str);
		  $res=mysqli_fetch_array($result);
		  $bname=$res['back_neck_design_name'];
		  $price=$res['back_neck_design_price'];
		  $img=$res['back_neck_design_image'];
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

			$back_neck_design=1; 
			$str="update back_neck_design_tbl set back_neck_design_name='".$_POST['sname']."',back_neck_design_image='".$image."',back_neck_design_price='".$_POST['price']."'where back_neck_design_id=".$_GET['up_id'];
			mysqli_query($cnn,$str);
		} 
		else
		{ 
     echo "hii"; die;
			$back_neck_design=1;
			$qry2="insert into back_neck_design_tbl values(NULL,'".$_POST['bname']."','".$image."','".$_POST['price']."','".$back_neck_design."') ";
		//	echo $qry2; die;
			mysqli_query($cnn,$qry2);
		}
		header('location:back_neck_list.php');
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
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Start here Conetent -->
              <section class="simple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add back neck</h4>
        </div>
        <div class="card-body">
          <form id="jquery-val-form" method="POST">
            <div class="form-group">
              <!--<label class="d-block">Gender</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Male">Male</label>
			  <label class="radio-inline"><input type="radio" name="optradio" value="Female">Female</label>
            </div>!-->
			<div class="form-group">
              <label class="form-label" for="basic-default-name">Back Neck Design Name</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="bname"
                placeholder="Enter back Neck" value="<?php echo $bname;?>"
            />
            </div>
			<div class="form-group">
              <label class="form-label" for="basic-default-name"> Image</label>
              <input
                type="file"
                class="form-control"
                id="basic-default-name"
                name="profile" 
              />
			  <?php echo $img;?>
			 </div>
			
            <div class="form-group">
              <label class="form-label" for="basic-default-name">back Neck Design Price</label>
              <input
                type="text"
                class="form-control"
                id="basic-de" name="price" 
                placeholder="Price" value="<?php echo $price;?>"
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