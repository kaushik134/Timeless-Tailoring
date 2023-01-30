<?php 
		 include_once "connect.php";
		$delivery_id=$_POST['delivery_id'];									
		
		$sql = "Select * from delivery_tbl where delivery_id=$delivery_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$name=ucfirst($row['name']);
				$email=($row['email']);
				$contact=$row['contact'];
				$address=$row['address'];
				$city=$row['city'];
				$pincode=$row['pincode'];
				
				
				$response .= "<tr>";
				$response .= "<th width='300px;'>Name  </th><td>".$name."</td>";
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
				$response .= "<th> City  </th><td>".$city."</td>";
				$response .= "</tr>";


				$response .= "<tr>";
				$response .= "<th> Pincode  </th><td>".$pincode."</td>";
				$response .= "</tr>";

				
				
				
		}
		$response .= "</table>";
		
		echo $response;
		exit;