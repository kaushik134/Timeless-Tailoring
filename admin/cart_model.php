<?php 
		 include_once "connect.php";
		$cart_order_id = $_POST['cart_order_id'];	
		
		$data_cart=explode("+",$cart_order_id); #convert string into array
		/* echo "<pre>";
		print_r($data_cart); */
		
		$customer_id=$data_cart[0];
		$order_id=$data_cart[1];
		
		//$sql = "Select * from cart_tbl where cart_id=$cart_id";
		//$sql = "select * from tbl_camp where Camp_ID=$camp_id";
		
		
		$sql = "Select * from cart_tbl,customer_tbl,category_tbl,style_tbl,add_ons_tbl,order_tbl,order_detail_tbl where cart_tbl.customer_id=customer_tbl.customer_id
		AND cart_tbl.category_id=category_tbl.category_id 
		AND cart_tbl.style_id=style_tbl.style_id 
		AND cart_tbl.add_ons_id=add_ons_tbl.add_ons_id 
		AND order_tbl.order_id=order_detail_tbl.order_id 
		AND cart_tbl.cart_id=order_detail_tbl.cart_id 
		AND cart_tbl.customer_id=$customer_id
		AND order_tbl.order_id=$order_id";
		//echo $sql;
		
		
		//echo $sql;
		$data = mysqli_query($cnn,$sql);
		$data1 = mysqli_query($cnn,$sql);
		$data2 = mysqli_query($cnn,$sql);
		//$data = mysqli_fetch_array($conn,$camp_tbl);
		$row1=mysqli_fetch_array($data1);
		$add_ons=$row1['add_ons_id'];
		
		$response = "<table class='table table-striped table-bordered table-hover ' width='150%'>";
		//
		
		$response .= "<tr>";
		$response .= "<th width='300px;'colspan='2'>CATEGORY</th><td colspan='3'>".$row1['category_name']."</td>";
		$response .= "</tr>";
		
		
		$response .= "<th width='300px;' colspan='5'><center>STYLE</center></th>";
		
		 
		$response .= "<tr>";
		while($row=mysqli_fetch_array($data))
		{
				$style=$row['style_id'];
			
				$response .= "<th>".get_styleData_fneck($style)."</th>";
		}
		$response .= "</tr>";
		
		$response .= "<tr>";
		while($row=mysqli_fetch_array($data2))
		{
			$style1=$row['style_id'];
			$order_id=$row['style_id'];
			
				
			$response .= "<td>".get_styleData_style($style1)."</td>";
		}
		$response .= "</tr>";
			
				$response .= "<th colspan='5'><center>ADD ONS</center></th>";
				
				
				$response .= "<tr>";	
				$response .="<th>lining</th>
				             <th>tassels </th>
				             <th>cups </th>
				             <th>piping </th>
				             <th>work</th>
				             ";
															
				$response .= "</tr>";

				$response .= "<tr>";
				$response .= "<td>".get_addOnData_lining($add_ons)."</td>
								<td>".get_addOnData_tassels($add_ons)."</td>
								<td>".get_addOnData_cups($add_ons)."</td>
								<td>".get_addOnData_piping($add_ons)."</td>
								<td>".get_addOnData_work($add_ons)."</td>";
				$response .= "</tr>";
				
				
				if(isset($row1['top_id'])){
					
					$qry="select * from cart_tbl,top_measurement_tbl where cart_tbl.top_id=top_measurement_tbl.top_id";
					$test=mysqli_query($cnn,$qry);
					$result=mysqli_fetch_array($test);
					
			    $response .= "<th colspan='5'><center>TOP MEASUREMENT</center></th>";
					
				$response .= "<tr>";	
			    $response .="<th>full body height</th>
				             <th>top length </th>
				             <th>shoulder </th>
				             <th>bust </th>
				             <th>waist</th>
				             ";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<td>".$result['full_body_height']."</td>
							  <td>".$result['length']."</td>
							  <td>".$result['shoulder']."</td>
						      <td>".$result['bust']."</td>
							  <td>".$result['waist']."</td>";
				$response .= "</tr>";
				
				
				$response .= "<tr>";					
			    $response .="<th>arm hole</th>
				             <th>sleeve length </th>
				             <th>sleeve loose </th>
				             <th>hip round </th>
				             <th>front neck deep</th>
				             ";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<td>".$result['arm_hole']."</td>
							  <td>".$result['sleeve_length']."</td>
							  <td>".$result['sleeve_loose']."</td>
						      <td>".$result['hip_round']."</td>
							  <td>".$result['front_neck_deep']."</td>";
				$response .= "</tr>";
				
				
				$response .= "<tr>";					
			    $response .="<th>backneck deep</th>
				             <th>surround </th>
				             ";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<td>".$result['back_neck_deep']."</td>
							  <td>".$result['surround']."</td>";
				$response .= "</tr>";
				

				/*$response .= "<tr>";
					$response .= "<th> top MEASUREMENT </th><td>".$row1['top_id']."</td>";
					$response .= "</tr>";*/
				}
				if(isset($row1['bottom_id'])){
					
					$qry="select * from cart_tbl,bottom_measurement_tbl where cart_tbl.bottom_id=bottom_measurement_tbl.bottom_id";
					$test=mysqli_query($cnn,$qry);
					$result=mysqli_fetch_array($test);
					
			    $response .= "<th colspan='5'><center>BOTTOM MEASUREMENT</center></th>";
					
				$response .= "<tr>";	
			    $response .="<th>waist</th>
							 <th>hip round</th>
				             <th>thigh</th>
				             <th>ankle round </th>
				             <th>bottom length </th>
				             
				             ";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<td>".$result['waist']."</td>
							  <td>".$result['hip_round']."</td>
							  <td>".$result['thigh']."</td>
							  <td>".$result['ankle_round']."</td>
						      <td>".$result['length']."</td>";
				$response .= "</tr>";
				
				
					/*$response .= "<tr>";
					$response .= "<th> BOTTOM MEASUREMENT </th><td>".$row1['bottom_id']."</td>";
					$response .= "</tr>";*/
				}
				if(isset($row1['blouse_id'])){
					
					
					$qry="select * from cart_tbl,blouse_measurement_tbl where cart_tbl.blouse_id=blouse_measurement_tbl.blouse_id";
					$test=mysqli_query($cnn,$qry);
					$result=mysqli_fetch_array($test);
					
			    $response .= "<th colspan='5'><center>BLOUSE MEASUREMENT</center></th>";
					
				$response .= "<tr>";	
			    $response .="<th>full body height</th>
				             <th>blouse length </th>
				             <th>shoulder </th>
				             <th>bust </th>
				             <th>waist</th>
				             ";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<td>".$result['full_body_height']."</td>
							  <td>".$result['blouse_length']."</td>
							  <td>".$result['shoulder']."</td>
						      <td>".$result['bust']."</td>
							  <td>".$result['waist']."</td>";
				$response .= "</tr>";
				
				
				$response .= "<tr>";					
			    $response .="<th>arm hole</th>
				             <th>sleeve length </th>
				             <th>sleeve loose </th>
				             <th>front neck deep</th>
				             <th>backneck deep</th>
				             ";
				$response .= "</tr>";
				
				$response .= "<tr>";
				$response .= "<td>".$result['arm_hole']."</td>
							  <td>".$result['sleeve_length']."</td>
							  <td>".$result['sleeve_loose']."</td>
						      <td>".$result['front_neck_deep']."</td>
							  <td>".$result['back_neck_deep']."</td>";
				$response .= "</tr>";
				

					/*$response .= "<tr>";
					$response .= "<th> BLOUSE MEASUREMENT </th><td>".$row1['blouse_id']."</td>";
					$response .= "</tr>";*/
				} 
		$response .= "</table>";
		
		echo $response;
		exit;
		
		
		function get_addOnData($add_ons)
		{
			global $cnn;
			$sql="select * from add_ons_tbl,category_tbl,lining_tbl,tassels_tbl,cups_tbl,piping_tbl,work_tbl where add_ons_tbl.category_id=category_tbl.category_id AND add_ons_tbl.lining_id=lining_tbl.lining_id AND add_ons_tbl.tassels_id=tassels_tbl.tassels_id AND add_ons_tbl.cups_id=cups_tbl.cups_id AND add_ons_tbl.piping_id=piping_tbl.piping_id AND add_ons_tbl.work_id=work_tbl.work_id AND add_ons_tbl.add_ons_id='".$add_ons."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return "Lining= ".$row1['lining_name'] .",tassels= ".$row1['tassels_name'].",tassels= ".$row1['tassels_name'].",tassels= ".$row1['tassels_name'];
			//return $results;
		}
		function get_addOnData_lining($add_ons)
		{
			global $cnn;
			$sql="select * from add_ons_tbl,lining_tbl where add_ons_tbl.lining_id=lining_tbl.lining_id AND add_ons_tbl.add_ons_id='".$add_ons."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['lining_name'];
			//return $results;
		}
		function get_addOnData_tassels($add_ons)
		{
			global $cnn;
			$sql="select * from add_ons_tbl,tassels_tbl where add_ons_tbl.tassels_id=tassels_tbl.tassels_id AND add_ons_tbl.add_ons_id='".$add_ons."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['tassels_name'];
			//return $results;
		}
		
		function get_addOnData_cups($add_ons)
		{
			global $cnn;
			$sql="select * from add_ons_tbl,cups_tbl where add_ons_tbl.cups_id=cups_tbl.cups_id AND add_ons_tbl.add_ons_id='".$add_ons."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['cups_name'];
			//return $results;
		}
		function get_addOnData_piping($add_ons)
		{
			global $cnn;
			$sql="select * from add_ons_tbl,piping_tbl where add_ons_tbl.piping_id=piping_tbl.piping_id AND add_ons_tbl.add_ons_id='".$add_ons."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['piping_name'];
			//return $results;
		}
		function get_addOnData_work($add_ons)
		{
			global $cnn;
			$sql="select * from add_ons_tbl,work_tbl where add_ons_tbl.work_id=work_tbl.work_id AND add_ons_tbl.add_ons_id='".$add_ons."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['work_name'];
			//return $results;
		}
		
		// styles
		
		function get_styleData_fneck($style)
		{
			global $cnn;
			$sql="select * from style_tbl,subcategory_tbl where style_tbl.subcategory_id=subcategory_tbl.subcategory_id AND style_tbl.style_id='".$style."'";
			
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['subcategory_name'];
			//return $results;
		}
		
		function get_styleData_style($style1)
		{
			global $cnn;
			$sql="select * from style_tbl,category_tbl where style_tbl.category_id=category_tbl.category_id AND style_tbl.style_id='".$style1."'";
			//echo $sql;
			$results=mysqli_query($cnn,$sql);
			$row1=mysqli_fetch_array($results);
			return $row1['style_name'];
			//return $results;
		}