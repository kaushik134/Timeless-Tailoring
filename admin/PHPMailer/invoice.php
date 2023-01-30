<!doctype html>
<html class="fixed">

	<head>
	<?php
	
		//error_reporting(0);
		session_start();
		
		include('libs/phpqrcode/qrlib.php'); 
		include('conn.php');
		$vdi=$_SESSION['vdi'];
	?>
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Invoice | CareFare Services </title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

		<link rel="stylesheet" href="admin/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="admin/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme-custom.css">
		<!-- Head Libs -->
		<script src="admin/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
	
	<?php 
				$str2="Select * from order_table,service_request_table,service_table,vendor_table,customer_table,vendor_delivery_table
				where service_table.service_id = service_request_table.service_id and service_request_table.service_request_id=order_table.service_request_id and customer_table.customer_Id=service_request_table.customer_id and  order_table.vendor_delivery_Id=vendor_delivery_table.vendor_delivery_Id and service_table.vendor_id=vendor_table.vendor_Id and vendor_table.vendor_id and vendor_delivery_table.vendor_delivery_Id=$vdi
				";
				//echo $str2;die;
				$results=mysqli_query($link,$str2);
				while($row=mysqli_fetch_array($results))
				{
					?>
		<section class="body" >

			<!-- start: header -->
			
			<!-- end: header -->
				<!-- end: sidebar -->
  
				<section role="main" class="content-body" style="padding-right:202px">

					<!-- start: page -->

					<section class="panel">
						<div class="panel-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-6 mt-md">
											<h2 class="h2 mt-none mb-sm text-dark text-bold">INVOICE</h2>
											<h4 class="h4 m-none text-dark text-bold">#X2020<?php echo $row['order_id'];?></h4>
										</div>
										<div class="col-sm-6 text-right mt-md mb-md">
											<address class="ib mr-xlg">
												CareFare_Services
												<br/>
												401  RajCorner Adajan,  Surat , India
												<br/>
												Mobile No:  9106305700 /  7284906551
												<br/>
												CareFare_Services@gmail.com
											</address>
											<div class="ib">
												<img src="assets/images/carefre.png"  height="100px" width="170px" alt="OKLER Themes" />
											</div>
										</div>
									</div>
								</header>
								<div class="bill-info">
									<div class="row">
										<div class="col-md-6">
											<div class="bill-to">
												<p class="h5 mb-xs text-dark text-semibold">To:	
												<?php echo $row['customer_Name'];?></p>
												<?php echo $row['customer_Address'];?></p>
												<?php echo $row['service_description'];?></p>
												<address>
													<br>
												<p class="h5 mb-xs text-dark text-semibold">
													delivery_person
													<br>
													<p>
														Phone: +91-	<?php echo $row['delivery_contact'];?>
														<p>												
													<br/>
												</address>
											</div>
										</div>
										<div class="col-md-6">
											<div class="bill-data text-right">
												<p class="mb-none">
													<span class="text-dark">Invoice Date:</span>
													<span class="value"><?php echo $row['order_Date'];?></span>
												</p>
												<p class="mb-none">
													<span class="text-dark">Services Date:</span>
													<span class="value"><?php echo $row['service_date'];?></span>
												</p>
												
											</div>
										</div>
									</div>
								</div>
							
								<div class="table-responsive">
									<table class="table invoice-items">
										<thead>
											<tr class="h4 text-dark">
												<th id="cell-id" class="text-semibold">Order Id</th>
												<th id="cell-item"   class="text-semibold">Services Name</th>
												<th id="cell-desc"   class="text-semibold">Company Name</th>
												<th id="cell-price"  class="text-center text-semibold">Contact</th>
											
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>#<?php echo $row['order_id'];?></td>
												<td><?php echo $row['service_name'];?></td>
												<td><?php echo $row['company_name'];?></td>
												<td class="text-center"><?php echo $row['company_Contact'];?></td>
											
											</tr>
											
										</tbody>
									</table>
								</div>
								<?php
								    function getUsernameFromEmail($email)
									{
										$find = '@';
										$pos = strpos($email, $find);
										$username = substr($email, 0, $pos);
										return $username;
									}
									$tempDir = 'temp/'; 
									$email = $row['compnay_Email'];
									$subject = $row['service_name'];
									$filename = getUsernameFromEmail($email);
									$body =  $row['request_description'];
									$codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body); 
									QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
								
									?>
								<div class="qr-field">
										<h2 style="text-align:center">QR Verification</h2>
										<center>
										<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
									<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
								</div>
										</center>
								</div>
							
							<?php } ?>
							<hr>
							<div class="text-right mr-lg">
							    <form method="POST" action="invoice_mail.php">
								     <input type="hidden" name="ven_email" value="<?php echo $row['customer_Email'];?>">
									<input type="submit" class="btn btn-default" value="Submit Invoice" name="email" >
									<a href="invoice-print.php" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Print</a>
									<a href="invoice-print.php" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Downlaod</a>
								</form>
								
							</div>

						</div>
					</section>

					<!-- end: page -->
				</section>
			</div>

			
		</section>


	</body>
</html>
