<?php 
		  include_once "connect.php";
		$billing_id = $_POST['billing_id'];									
		
		$sql = "select * from billing_tbl where billing_id=$billing_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$billing_first_name=ucfirst($row['billing_first_name']);
				$billing_last_name=ucfirst($row['billing_last_name']);
				$email=ucfirst($row['email']);
				$contact=ucfirst($row['contact']);
				$city_id=$row['city_id'];
				$area=$row['area'];
				$address=$row['address'];
				$pincode=$row['pincode'];
				
				$response.= "<tr>";
				$response.= "<th width='300px;'>Billing Name  </th><td>".$billing_first_name." ".$billing_last_name."</td>";
				$response .= "</tr>";

				// $response.= "<tr>";
				// $response.= "<th width='300px;'>billing_last_name  </th><td>".$billing_last_name."</td>";
				// $response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> Email </th><td>".$email."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Contact </th><td>".$contact."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> City </th><td>".$city_id."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> area </th><td>".$area."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> address </th><td>".$address."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Pincode  </th><td>".$pincode."</td>";
				$response .= "</tr>";		
		}
		$response .= "</table>";
		
		echo $response;
		exit;