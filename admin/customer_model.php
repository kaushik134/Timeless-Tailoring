<?php 
		 include_once "connect.php";
		$customer_id=$_POST['customer_id'];									
		
		$sql = "Select * from customer_tbl where customer_id=$customer_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$customer_name=ucfirst($row['customer_name']);
				// $billing_last_name=$row['billing_last_name'];
				$email=ucfirst($row['email']);
				$contact=$row['contact'];
				$address=$row['address'];
				$pincode=$row['pincode'];
				$register_date=$row['register_date'];
				
				
				$response .= "<tr>";
				$response .= "<th width='300px;'>Name  </th><td>".$customer_name."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> Email </th><td>".$email."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Contact  </th><td>".$contact."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Address  </th><td>".$address."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> Pincode  </th><td>".$pincode."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Register Date  </th><td>".$register_date."</td>";
				$response .= "</tr>";	
		}
		$response .= "</table>";
		
		echo $response;
		exit;