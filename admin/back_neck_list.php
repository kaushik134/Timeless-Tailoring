<?php session_start();
  require_once('connect.php');
   if(!isset($_SESSION['admin_email']))
   {
    header('location:index.php');
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
    <title>Backneck List | <?php echo $title;?></title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
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
    <link rel="stylesheet" type="text/css" href="assets/css/core/menu/menu-types/vertical-menu.min.css">
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
            <!-- Scroll - horizontal and vertical table -->
<section id="horizontal-vertical">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">BACKNECK DESIGN</h4>
        </div>
        <div class="card-body card-dashboard">
          <p class="card-text">
          </p>
          <div class="table-responsive">
            <table class="table table-striped dataex-html5-selectors dataTable">
              <thead>
                <tr>
						      <th>Image</th>
						      <th>Name</th>
        				  <th>price (₹)</th>
                  <th>extra instruction</th>
        				  <th>Status</th>
        				  <th>Action</th>
                </tr>
              </thead>
              <body>
                <a href="back_neck_add.php" class="add_back_neck"> 
                             <button value="Add Backneck" class="btn btn-primary" style="margin: 45px 0px -86px;font-size: 13px;">
                              <i class="bx bxs-plus-circle">     </i> Add Backneck
                              </button></a>
			   <?php 
				$qry="select * from backneck_tbl";
				$test=mysqli_query($cnn,$qry);
				while($result=mysqli_fetch_array($test))
				{
          ?>
            <tr>
               <td><img style="border-radius:100px;" src="profiles/<?php echo $result['backneck_image']; ?>" height="100px" width="100px"></td>
              <td><?php echo $result['backneck_name'];?></td>           
              <td><?php echo $result['backneck_price'];?></td>
              <td><?php echo $result['extra_instruction'];?></td>
              <!-- <td><?php echo $result['backneck_status'];?></td> -->
              <td>
                <?php if($result['backneck_status']==0) { ?>
                                     
                                     <a href="change_status.php?backneck_id=<?php echo $result['backneck_id'];?>&backneck_status=<?php echo $result['backneck_status'];?>"> 
                                     <div class="fonticon-wrap">
                                     <i class="bx bxs-minus-circle"></i>
                                     </div></a>
                                     </a>
                                    
                                   <?php } else { ?>
                             
                                     <a href="change_status.php?backneck_id=<?php echo $result['backneck_id'];?>&backneck_status=<?php echo $result['backneck_status'];?>"> 
                                     <div class="fonticon-wrap">
                                     <i class="bx bxs-plus-circle"></i>
                                     </div></a>
                                     </a>
                                  <?php }?>
                                  
                                      <?php if($result['backneck_status']==0) {echo "<span class='text-danger'>Inactive</span>";} else { echo "<span class='text-success'>Active</span>";}  ?>
              </td>
             <td><a href="back_neck_del.php?del=<?php echo $result['backneck_id'];?>"> <div class="fonticon-wrap" onclick="return confirm('Are you sure you want to delete?')"> 
                     <i class="bx bx-trash-alt"></i>
                    </div></a>  
              <a href="back_neck_add.php?up_id=<?php echo $result['backneck_id'];?>"><div class="back-wrap"> 
                                <i class="bx bxs-edit"></i>
                          </div></a>
                          </td>
            <?php 
            } 
            ?>


              </body>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Scroll - horizontal and vertical table -->

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
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/datatables/datatable.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- /table-datatable.html by,  04:45:09 GMT -->
</html>