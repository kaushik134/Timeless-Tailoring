<?php 
		require_once("connect.php");
		$tutor_id = $_POST['tutor_id'];									
		
		$sql = "Select * from tutor_tbl where tutor_id=$tutor_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$tutor_name=ucfirst($row['tutor_name']);
				$tutor_contact=ucfirst($row['tutor_contact']);
				$tutor_address=$row['tutor_address'];
				$tutor_email=$row['tutor_email'];
				$tutor_classes=$row['tutor_classes'];
				
				$response.= "<tr>";
				$response.= "<th width='300px;'>Tutor Name  </th><td>".$tutor_name."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th>Tutor Contact </th><td>".$tutor_contact."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Address </th><td>".$tutor_address."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Email  </th><td>".$tutor_email."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Classes  </th><td>".$tutor_classes."</td>";
				$response .= "</tr>";		
		}
		$response .= "</table>";
		echo $response;
		
//user model
		$user_id = $_POST['user_id'];									
		
		$sql = "Select * from user_tbl where user_id=$user_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$user_name=ucfirst($row['user_name']);
				$user_contact=ucfirst($row['user_contact']);
				$user_address=$row['user_address'];
				$user_email=$row['user_address'];
				//$tutor_classes=$row['tutor_classes'];
				
				$response.= "<tr>";
				$response.= "<th width='300px;'>Tutor Name  </th><td>".$user_name."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th>Tutor Contact </th><td>".$user_contact."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Address </th><td>".$user_address."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Email  </th><td>".$user_address."</td>";
				$response .= "</tr>";
				
				// $response .= "<tr>";
				// $response .= "<th>Classes  </th><td>".$tutor_classes."</td>";
				// $response .= "</tr>";		
		}
		$response .= "</table>";
		echo $response;
		exit;