<?php session_start();
  require_once('connect.php');
   if(!isset($_SESSION['admin_email']))
   {
    header('location:index.php');
   } 
 ?>

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- /index.html by,  04:41:56 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, customer-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/dragula.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/widgets.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static dark-layout " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
   <?php include_once("header.php"); ?>
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
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row">
	<div class="row">
  <div class="col-xl-2 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
      <!--  <i class="bx bx-user-x text-success" style="font-size:36px"></i>
		 <li class=" nav-item"><a href="#"> --><i class="bx bx-check text-success" style="font-size:36px"></i>
        <h6 class="text">Complete Order</h6>
      </div>
      <div class="card-body text-center">
        <h3>
        <?php 
                  //$result = mysqli_query("SELECT COUNT(vendor_id)  FROM vendor_tbl;");
                     $str="SELECT COUNT(status)  AS 'complete' FROM order_tbl where status='".ORDER_COMPLETE."' ";
                     $count=mysqli_query($cnn,$str);
                     $result_count=mysqli_fetch_array($count);     
                       ?>
                    <tr>
                      <td><?php echo $result_count['complete'];?></td>
                    </tr> </h3>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
	    <i class="bx bx-x text-success" style="font-size:36px"></i>
        <h6 class="text">Pending Order</h6>
      </div>
      <div class="card-body text-center">
        <h3>
        <?php 
                  //$result = mysqli_query("SELECT COUNT(vendor_id)  FROM vendor_tbl;");
                     $str="SELECT COUNT(status)  AS 'pending' FROM order_tbl where status='".ORDER_PENDING."' ";
                     $count=mysqli_query($cnn,$str);
                     $result_count=mysqli_fetch_array($count);     
                       ?>
                    <tr>
                      <td><?php echo $result_count['pending'];?></td>
                    </tr> </h3>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6 col-sm-12">
    <div class="card"> <a href="ordered_customer.php">
      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
        <i class="bx bx-user-check text-info" style="font-size:36px"></i>
        <h6 class="text">Ordered Custo..</h6>
      </div>
      <div class="card-body text-center">
        <h3>
        <?php 
                  //$result = mysqli_query("SELECT COUNT(vendor_id)  FROM vendor_tbl;");
                     $str="SELECT COUNT(order_id)  AS 'Total_customer' FROM order_tbl";
                     $count=mysqli_query($cnn,$str);
                     $result_count=mysqli_fetch_array($count);     
                       ?>
                    <tr>
                      <td><?php echo $result_count['Total_customer'];?></td>
                    </tr> </h3>
      </div>
    </a></div>
  </div>
  <div class="col-xl-2 col-md-6 col-sm-12">
    <div class="card">  <a href="unordered_customer.php">
      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
       <i class="bx bx-user-x text-info" style="font-size:36px"></i>
        <h6 class="text">Unorderd Custo..</h6>
      </div>
      <div class="card-body text-center">
        <h3>
        <?php 
                  //$result = mysqli_query("SELECT COUNT(vendor_id)  FROM vendor_tbl;");
                     $str="select * from customer_tbl where customer_id not in (select customer_id from cart_tbl) ";
                     $count=mysqli_query($cnn,$str);
                     $result_count=mysqli_num_rows($count);     
                       ?>
                    <tr>
                      <td><?php echo $result_count;?></td>
                    </tr> </h3>
      </div>
	  
    </a></div>
  </div>
  <div class="col-xl-2 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
	  <div class="fa fa-rupee text-danger" style="font-size:30px"></div>
        <!--<i class="fa fa-paypal text-warning" style="font-size:36px"></i> 
		<svg  class="bi bi-paypal text-danger" width="36" height="30"  fill="currentColor"  viewBox="0 0 16 16">
  <path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.351.351 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91.379-.27.712-.603.993-1.005a4.942 4.942 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.687 2.687 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.695.695 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016c.217.124.4.27.548.438.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.873.873 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.352.352 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32.845-5.214Z"/>
</svg>-->
<h6 class="text">Complete Amount</h6>
      </div>
      <div class="card-body text-center">
        <h3>
        <?php 
                  //$result = mysqli_query("SELECT COUNT(vendor_id)  FROM vendor_tbl;");
                     $str="SELECT sum(amount)  AS 'Total_amount' FROM payment_bill_tbl where payment_status='".PAYMENT_COMPLETE."' ";
                     $sum=mysqli_query($cnn,$str);
                     $result_sum=mysqli_fetch_array($sum);     
                       ?>
                    <tr>
                      <td><?php echo $result_sum['Total_amount'];?></td>
                    </tr> </h3>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
	  <div class="fa fa-rupee text-danger" style="font-size:30px"></div>
	  .
        <!--<i class="fa fa-paypal text-warning" style="font-size:36px"></i> 
		<svg  class="bi bi-paypal text-danger" width="36" height="30"  fill="currentColor"  viewBox="0 0 16 16">
  <path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.351.351 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91.379-.27.712-.603.993-1.005a4.942 4.942 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.687 2.687 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.695.695 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016c.217.124.4.27.548.438.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.873.873 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.352.352 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32.845-5.214Z"/>
</svg>-->

        <h6 class="text">Pending Amount</h6>
      </div>
      <div class="card-body text-center">
        <h3>
        <?php 
                  //$result = mysqli_query("SELECT COUNT(vendor_id)  FROM vendor_tbl;");
                      $str="SELECT sum(amount)  AS 'Total_amount' FROM payment_bill_tbl where payment_status='".PAYMENT_PENDING."' ";
                     $sum=mysqli_query($cnn,$str);
                     $result_sum=mysqli_fetch_array($sum);     
                       ?>
                    <tr>
                      <td><?php echo $result_sum['Total_amount'];?></td>
                    </tr> </h3>
      </div>
    </div>
  </div>

    <!-- modals -->
                  <!-- Large modal -->
           <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="OwnerModal">
                <div class="modal-dialog modal-lg" style="">
                      <div class="modal-content">
            
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-close"></i></span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Detail</h4>
                        </div>
                        <div class="modal-body">
                            <!-- /Dynmamic Jquery AJax Data load Here -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="x_content">
                  <!-- /modals -->
                </div>
           <!--  Modal Code End here-->
    <!-- Website Analytics Starts-->
   <div class="col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">TimeLess Tailoring</h4>
        <!--  <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>-->
        </div>
     <a href="payment.php">  <div class="card-body pb-1">
          <div class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="customer-analytics mr-2">
              <i class="bx bx-customer mr-25 align-middle"></i>
		
              <span class="align-middle text-muted">Income</span>
              <div class="d-flex">
               
                <h4 class="mt-1 ml-50">
				<div class="fa fa-rupee" style="font-size:30px"></div>
				 <?php
                    $str="SELECT SUM(amount) as Total_amount FROM payment_bill_tbl";
                    $sum=mysqli_query($cnn,$str);
                    $result_sum=mysqli_fetch_array($sum);
                  ?>
                  <tr>
                    <td><?php echo $result_sum['Total_amount'];?></td>
                  </tr>

				</h4>
              </div>
            </div></a>
            <a href="user.php"><div class="sessions-analytics mr-2">
         
              <span class="align-middle text-muted">Customer</span>
              <div class="d-flex">
            
                <h3 class="mt-1 ml-50">
				<div class="bx bx-user" style="font-size:30px"></div>
                  <?php
                    $str="SELECT COUNT(customer_id) as Total_customer FROM customer_tbl";
                    $count=mysqli_query($cnn,$str);
                    $result_count=mysqli_fetch_array($count);
                  ?>
                  <tr>
                    <td><?php echo $result_count['Total_customer'];?></td>
                  </tr>
                </h3>
              </div>
            </div></a>
          <a href="order.php"><div class="bounce-rate-analytics">
              
              <span class="align-middle text-muted">Order</span>
              <div class="d-flex">
                
                <h3 class="mt-1 ml-50">
				<svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
</svg>

				<?php
                    $str="SELECT COUNT(order_id) as Total_order FROM order_tbl";
                    $count=mysqli_query($cnn,$str);
                    $result_count=mysqli_fetch_array($count);
                  ?>
                  <tr>
                    <td><?php echo $result_count['Total_order'];?></td>
                  </tr></h3>
              </div>
            </div></a>
          </div>
          
        </div>
      </div>
 </div>
  
      <!-- Impression Radial Chart Starts-->
  

          <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                      <div class="row">
                            <div class="col-12">
                              <div class="card">
                                <div class="card-header">
                                  <h4 class="card-title">Recently Orders</h4>
                                </div>
                                <div class="card-body card-dashboard">
                                  <p class="card-text">
                                  </p>
                                  <div class="table-responsive">
                                    <table class="table table-striped dataex-html5-selectors dataTable">
                                      <thead>
                                        <tr>
											
											<th> order id</th>
											<th> customer name</th>
											<th> billing address</th>                                 
											<th> order date</th>                                    
											<th> status </th>
                                   
                                        </tr>
                                      </thead>
                                      <tbody>
                      <?php 
                      $qry="select * from order_tbl,customer_tbl,delivery_tbl where order_tbl.delivery_id=delivery_tbl.delivery_id AND order_tbl.customer_id=customer_tbl.customer_id order by order_id desc limit 5";
                      $test=mysqli_query($cnn,$qry);
                      while($result=mysqli_fetch_array($test))
                      {
                        ?>
                          <tr>
						  
							<td><?php echo $result['order_id'];?></td>
                            <td><button type="button" style="" id="cart" class="btn" data-id="<?php echo $result['customer_id']."+".$result['order_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
							<div class="fonticon-wrap"><i class="bx bx-folder-open"></i></div>
							</button><?php echo $result['customer_name'];?></td>
				
                            <td><button type="button" style="" id="delivery" class="btn" data-id="<?php echo $result['delivery_id'];?>" data-toggle="modal" data-target=".bs-example-modal-lg">
							<div class="fonticon-wrap"><i class="bx bx-folder-open"></i></div>
							<?php // echo getCustomerName($result['customer_id']);?>
							</button><?php echo $result['name'];?></td>          
                  				
                            <td><?php echo date("d/m/Y", strtotime($result['order_date']));?></td>          
                                    
                          <!-- <td><?php echo $result['total'];?></td>-->         
                                      
                            <td>
               
                                  
                              <?php if($result['status']==1) {echo "<span class='text-danger'>complete</span>";} else { echo "<span class='text-success'>pending</span>";}  ?>
              </td>         
                           </tr>
                      <?php 
                      } 
                      ?>

                            </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
                </div>
          </div>

          <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                      <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Recently Payment</h4>
                      </div>
                      <div class="card-body card-dashboard">
                        <p class="card-text">
                        </p>
                        <div class="table-responsive">
                          <table class="table table-striped dataex-html5-selectors dataTable">
                            <thead>
                              <tr>
                                    <th> Payment id</th>
                                  
                                    <th> type</th>
                                    <th> date</th>
                                    <th> time</th>
                                    <th> amount</th>
                                    <th> status</th>
                                  
              				            	
                              </tr>
                            </thead>
                         <?php 
                $qry="select * from payment_bill_tbl,payment_details_tbl,order_tbl where payment_bill_tbl.payment_id=payment_details_tbl.payment_id AND payment_details_tbl.order_id=order_tbl.order_id  order by payment_bill_tbl.payment_id desc limit 5";
                    //echo $qry;die;
                      $test=mysqli_query($cnn,$qry);
                      while($result=mysqli_fetch_array($test))
                      {
                        ?>
                          <tr>                       
                             <td><?php echo $result['payment_id'];?></td>				  			  
                  						  
                  				  <td><?php echo $result['payment_type'];?></td>				  
                  				  <td><?php echo date("d/m/Y", strtotime($result['payment_date']));?></td>				  
                  				  <td><?php echo $result['time'];?></td>				  
                  				  <td><?php echo $result['amount'];?></td>	     
                      <td>
                            <?php if($result['payment_status']==0) {echo "<span class='text-danger'>complete</span>";} else { echo "<span class='text-success'>pending</span>";}  ?>
                    
              </td>             
                              
                          </tr>

                      <?php 
                      } 
                      ?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
                      </div>
                  </div>
                </div>
          </div>

            <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                      <div class="row">
                            <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Recently Customer</h4>
                      </div>
                      <div class="card-body card-dashboard">
                        <p class="card-text">
                        </p>
                        <div class="table-responsive">
                          <table class="table table-striped dataex-html5-selectors dataTable">
                            <thead>
                              <tr>
                                   <!-- <th> Id</th> -->
                                    <th> name</th>
                                    <th>  email</th>
                                    <!-- <th>  password </th> -->
                                    <th> contact</th> 
                                    <th>address</th>
                                    <th>pincode</th> 
                                    <th>register date</th> 
                                    <th>status</th>
                              </tr>
                            </thead>
                            <tbody>
                      <?php 
                      $qry="select * from customer_tbl order by customer_id desc limit 5";
                      $test=mysqli_query($cnn,$qry);
                      while($result=mysqli_fetch_array($test))
                      {
                        ?>
                          <tr>
                            <!-- <td><?php echo $result['customer_id'];?></td> -->
                        <!--  <td><img style="border-radius:100px;" src="assets/addons/<?php echo $result['image']; ?>" height="100px" width="100px"></td> -->
                            <td><?php echo $result['customer_name'];?></td>          
                            <td><?php echo $result['email'];?></td>
                            <!-- <td><?php echo $result['password'];?></td> -->
                            <td><?php echo $result['contact'];?></td>
                            <td><?php echo $result['address'];?></td>
                            <td><?php echo $result['pincode'];?></td>
                            <td><?php echo date("d/m/Y", strtotime($result['register_date']));?></td>
                              <td>
                                               
                                                    <?php if($result['customer_status']==0) {echo "<span class='text-danger'>Inactive</span>";} else { echo "<span class='text-success'>Active</span>";}  ?>
                            </td>
                            
                          <!-- <td><a href="addons_del.php?del=<?php echo $result['add_ons_id'];?>" onclick="return confirm('Are you sure you want to delete?')">
                              <div class="fonticon-wrap">
                                        <i class="bx bx-trash-alt"></i>
                                 </div></a>  -->  
                                 <!-- <a href="style_add.php?up_id=<?php echo $result['style_id'];?>"><div class="fonticon-wrap"> -->
                                              <!-- <i class="bx bxs-edit"></i>
                                          </div></a></td>
                          </tr> -->

                      <?php 
                      } 
                      ?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                          </div>
                  </div>
                </div>
          </div>

            <div class="col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap">
                      <h4 class="card-title d-flex mb-25 mb-sm-0">
                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Monthly Registered customer
                      </h4>
                      <!--<ul class="list-inline d-flex mb-25 mb-sm-0">
                        <li class="d-flex align-items-center">
                          <i class='bx bx-filter font-medium-3 mr-50'></i>
                          <div class="dropdown">
                            <div class="dropdown-toggle mr-1 cursor-pointer" role="button" id="dropdownMenuButton"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="javascript:void(0);">My Tasks</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due this week</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due next week</a>
                              <a class="dropdown-item" href="javascript:void(0);">Custom Filter</a>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class='bx bx-sort mr-50 font-medium-3'></i>
                          <div class="dropdown">
                            <div class="dropdown-toggle cursor-pointer" role="button" id="dropdownMenuButton2"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort</div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                              <a class="dropdown-item" href="javascript:void(0);">None</a>
                              <a class="dropdown-item" href="javascript:void(0);">Alphabetical</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due Date</a>
                              <a class="dropdown-item" href="javascript:void(0);">Assignee</a>
                            </div>
                          </div>
                        </li>
                      </ul>-->
                    </div>
                    <div class="card-body px-0 py-1">
                      <div id="studnet_container"></div>
                           <div class="x_content">
                              <div class="col-md-8 col-sm-8 col-xs-12">
                                  
                                  <button id="plain" type="button" class="btn btn-round btn-success">Plain</button>
                                  <button id="inverted" type="button" class="btn btn-round btn-warning">Inverted</button>
                                  <button id="polar" type="button" class="btn btn-round btn-danger">Polar</button>
                              </div>  
                              <div class="clearfix"></div>
                           </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			
		        <div class="col-lg-12">
              <div class="row">
                <div class="col-12">
                  <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap">
                      <h4 class="card-title d-flex mb-25 mb-sm-0">
                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Monthly Placed Order
                      </h4>
                    <!--  <ul class="list-inline d-flex mb-25 mb-sm-0">
                        <li class="d-flex align-items-center">
                          <i class='bx bx-filter font-medium-3 mr-50'></i>
                          <div class="dropdown">
                            <div class="dropdown-toggle mr-1 cursor-pointer" role="button" id="dropdownMenuButton"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="javascript:void(0);">My Tasks</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due this week</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due next week</a>
                              <a class="dropdown-item" href="javascript:void(0);">Custom Filter</a>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class='bx bx-sort mr-50 font-medium-3'></i>
                          <div class="dropdown">
                            <div class="dropdown-toggle cursor-pointer" role="button" id="dropdownMenuButton2"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort</div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                              <a class="dropdown-item" href="javascript:void(0);">None</a>
                              <a class="dropdown-item" href="javascript:void(0);">Alphabetical</a>
                              <a class="dropdown-item" href="javascript:void(0);">Due Date</a>
                              <a class="dropdown-item" href="javascript:void(0);">Assignee</a>
                            </div>
                          </div>
                        </li>
                      </ul>-->
                    </div>
                    <div class="card-body px-0 py-1">
                      <div id="order_container"></div>
                           
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <!-- demo chat-->
    <div class="widget-chat-demo"><!-- widget chat demo footer button start -->
<!-- <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
    data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button> -->
<!-- widget chat demo footer button ends -->
<!-- widget chat demo start -->
<div class="widget-chat widget-chat-demo d-none">
  <div class="card mb-0">
    <div class="card-header border-bottom p-0">
      <div class="media m-75">
        <a href="JavaScript:void(0);">
          <div class="avatar mr-75">
            <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32"
              height="32">
            <span class="avatar-status-online"></span>
          </div>
        </a>
        <div class="media-body">
          <h4 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h4>
          <span class="text-muted font-small-3">Active</span>
        </div>
      </div>
      <div class="heading-elements">
        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
      </div>
    </div>
    <div class="card-body widget-chat-container widget-chat-demo-scroll">
      <div class="chat-content">
        <div class="badge badge-pill badge-light-secondary my-1">today</div>
        <div class="chat">
          <div class="chat-body">
            <div class="chat-message">
              <p>How can we help? 😄</p>
              <span class="chat-time">7:45 AM</span>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
          <div class="chat-body">
            <div class="chat-message">
              <p>Hey John, I am looking for the best admin template.</p>
              <p>Could you please help me to find it out? 🤔</p>
              <span class="chat-time">7:50 AM</span>
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="chat-body">
            <div class="chat-message">
              <p>Stack admin is the responsive bootstrap 4 admin template.</p>
              <span class="chat-time">8:01 AM</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer border-top p-1">
      <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
      </form>
    </div>
  </div>
</div>
<!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include_once "footer.php"; ?>
    <!-- END: Footer-->
    <?php 
      
      $monthly_student = student_get_ByMonth();
      $monthName_student = student_get_ByMonth(); 
      function student_get_ByMonth()
      {
        global $cnn;
        $sql = "SELECT COUNT('cutomer_id') as 'number_of_student',extract(month FROM register_date ) as month 
            FROM `customer_tbl` 
            GROUP BY extract(month FROM register_date)  ORDER by month";
            //echo $sql;
        $students =  mysqli_query($cnn,$sql);
        return $students;
      }
      ?>
	  
	  <!--order chart-->
      
    <!-- BEGIN: Footer-->
    <?php include_once "footer.php"; ?>
    <!-- END: Footer-->
    <?php 
      
      $monthly_order = order_get_ByMonth();
      $monthName_order = order_get_ByMonth(); 
      function order_get_ByMonth()
      {
        global $cnn;
        $sql = "SELECT COUNT('order_id') as 'number_of_order',extract(month FROM order_date ) as month 
            FROM `order_tbl` 
            GROUP BY extract(month FROM order_date)  ORDER by month";
            //echo $sql;
        $orders =  mysqli_query($cnn,$sql);
        return $orders;
      }
      ?>
      
      

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
    <!-- END: Page JS-->
      <script src="jquery-3.1.1.min.js"></script>
      <script src="highcharts.js"></script>
      <script src="highcharts-more.js"></script>
      <script src="exporting.js"></script>
      <script src="export-data.js"></script>
      <script src="accessibility.js"></script>

      <script>
	   $(document).on("click", "#delivery", function () {
           var delivery_id = $(this).data('id');
          // alert(cust_id);
            $.ajax({
                   type: "POST",
                   url: "delivery_model.php",
                   data: { delivery_id:delivery_id  },
                   success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                       // $('#campModal').modal('show'); 

                  } 
              });
        });
			
  
         $(document).on("click", "#cart", function () {
           var cart_order_id = $(this).data('id');
          // alert(cust_id);
            $.ajax({
                   type: "POST",
                   url: "cart_model.php",
                   data: {  cart_order_id:cart_order_id  },
                   success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                       // $('#campModal').modal('show'); 

                  } 
              });
        });
			
	  
    var chart = Highcharts.chart('studnet_container', {

      title: {
        text: 'Monthly Registered customer'
      },

      subtitle: {
        text: 'Plain'
      },

      xAxis: {
        //categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        categories: [<?php while($row1 = mysqli_fetch_array($monthName_student)) { echo "'".date("F", mktime(0, 0, 0, $row1['month']))."',";  } ?>]
      },

      series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php while($rows = mysqli_fetch_array($monthly_student)) { echo $rows['number_of_student'].","; } ?>],
        showInLegend: false
      }]

    });
                          
                
    $('#plain').click(function () {
      chart.update({
        chart: {
          inverted: false,
          polar: false
        },
        subtitle: {
          text: 'Plain'
        }
      });
    });

    $('#inverted').click(function () {
      chart.update({
        chart: {
          inverted: true,
          polar: false
        },
        subtitle: {
          text: 'Inverted'
        }
      });
    });

    $('#polar').click(function () {
      chart.update({
        chart: {
          inverted: false,
          polar: true
        },
        subtitle: {
          text: 'Polar'
        }
      });
    });
	
	// order chart

    var chart1 = Highcharts.chart('order_container', {

      title: {
        text: 'Monthly Placed Order'
      },

      subtitle: {
        text: 'Plain'
      },

      xAxis: {
        //categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        categories: [<?php while($row1 = mysqli_fetch_array($monthName_order)) { echo "'".date("F", mktime(0, 0, 0, $row1['month']))."',";  } ?>]
      },

      series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php while($rows = mysqli_fetch_array($monthly_order)) { echo $rows['number_of_order'].","; } ?>],
        showInLegend: false
      }]

    });
                          
                
    $('#plain').click(function () {
      chart1.update({
        chart1: {
          inverted: false,
          polar: false
        },
        subtitle: {
          text: 'Plain'
        }
      });
    });

    $('#inverted').click(function () {
      chart1.update({
        chart1: {
          inverted: true,
          polar: false
        },
        subtitle: {
          text: 'Inverted'
        }
      });
    });

    $('#polar').click(function () {
      chart1.update({
        chart1: {
          inverted: false,
          polar: true
        },
        subtitle: {
          text: 'Polar'
        }
      });
    });

    </script>
    <!-- Monthly Registerd Students   -->
  </body>
  <!-- END: Body-->

<!-- /index.html by,  04:42:26 GMT -->
</html>