<?php 
		 include_once "connect.php";
		$delivery_method_id=$_POST['delivery_method_id']					
		
		$sql = "Select * from delivery_method_tbl where delivery_method_id=$delivery_method_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				$order_id=ucfirst($row['order_id']);
				$delivery_id=ucfirst($row['delivery_id']);
				$customer_id=$row['customer_id'];
				$quantity=$row['quantity'];
				$order_date=$row['order_date'];
				$submitted_date=$row['submitted_date'];
				$subtotal=$row['subtotal'];
				$total=$row['total'];
				
				
				$response .= "<tr>";
				$response .= "<th width='300px;'>Name  </th><td>".$order_id."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> Delivery </th><td>".$delivery_id."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Customer  </th><td>".$customer_id."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Quantity  </th><td>".$quantity."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> Order Date  </th><td>".$order_date."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Submitted Date  </th><td>".$submitted_date."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Subtotal  </th><td>".$subtotal."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Total  </th><td>".$total."</td>";
				$response .= "</tr>";	
		}
		
		$response .= "</table>";
		
		echo $response;
		exit;