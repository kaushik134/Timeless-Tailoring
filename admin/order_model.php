<?php 
		 include_once "connect.php";
		$order_id=$_POST['order_id'];					
		
		$sql = "Select * from order_tbl where order_id=$order_id";
		$data = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
			
		$response = "<table class='table table-striped table-bordered table-hover ' width='50%'>";
		
		while( $row = mysqli_fetch_array($data) )
		{
				
				//$order_id=ucfirst($row['order_id']);
				$delivery_id=($row['delivery_id']);
				$cart_id=$row['cart_id'];
				$quantity=$row['quantity'];
				$order_date=$row['order_date'];
				// $submitted_date=$row['submitted_date'];
				$subtotal=$row['subtotal'];
				$total=$row['total'];
				
				$response .= "<tr>";
				$response .= "<th> Delivery </th><td>".$delivery_id."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th>Cart  </th><td>".$cart_id."</td>";
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<th> Quantity  </th><td>".$quantity."</td>";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<th> Order Date  </th><td>".$order_date."</td>";
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