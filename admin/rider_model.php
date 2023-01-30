<?php 
		 include_once "connection.php";
		$rider_id = $_POST['rider_id'];									
		
		$sql = "Select * from rider_tbl where rider_id=$rider_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($conn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$rider_name=ucfirst($row['rider_name']);
				$rider_email=$row['rider_email'];
				$rider_contact=ucfirst($row['rider_contact']);
				$rider_documentation=$row['rider_documentation'];
				$area_id=$row['area_id'];
				
				
				$response .= "<tr>";
				$response .= "<th width='300px;'>rider Name  </th><td>".$rider_name."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th>rider Email </th><td>".$rider_email."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> rider_contact </th><td>".$rider_contact."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>rider Business Name  </th><td>".$rider_documentation."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> area id  </th><td>".$area_id."</td>";
				$response .= "</tr>";
				
				
				
		}
		$response .= "</table>";
		
		echo $response;
		exit;