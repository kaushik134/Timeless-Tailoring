<?php
	session_start();
	include_once "connect.php"; 
	if(isset($_SESSION['cart_id']))
	{
		//$serialized_array=$_POST['product_id'];
		$cart_array=$_SESSION['cart_id'];

		$len=count($cart_array);
		//var_dump($cart_array);

	}
	/* echo "<pre>";
	print_r($cart_array); */
	//echo "<br>len=".$len;die;
	//$time=time('h:i:s');
	$date = date('Y-m-d');
	$time=date('H:i:s');
	$delivery_id=$_SESSION['last_delivery_id'];
	$status=0;

	 $ord="insert into order_tbl values(NULL,'".$delivery_id."','".$_SESSION['uid']."','".$date."','".$status."')";
	 //die;
 	 $qury=mysqli_query($cnn,$ord);
	 $order_id=mysqli_insert_id($cnn);
	

	 
	 $qury2=mysqli_query($cnn,"insert into payment_bill_tbl values(NULL,'online','".$_SESSION['cart_total']."','".$date."','".$time."','0')");
	 $payment_id=mysqli_insert_id($cnn);
	
	 $date = date('Ymd');
	 $time=date('His');
	 $transcation_id=$date.$time;
	 $pay_deatils="insert into payment_details_tbl values(NULL,'".$payment_id."','".$_SESSION['uid']."','".$order_id."','".$transcation_id."')";
	 //echo $pay_deatils;
	 $qury3=mysqli_query($cnn,$pay_deatils);


	echo $len;
	for($i=0;$i<$len-1;$i++)
	{
		 $qury1=mysqli_query($cnn,"insert into order_detail_tbl values(NULL,'".$order_id."','".$cart_array[$i]."','1')");
		 $order_details_id=mysqli_insert_id($cnn);
		 //$qury="update cart_tbl set cart_status=1 where cart_id='".$cart_array[$i]."'";
		// echo "insert into order_detail_tbl values(NULL,'".$order_id."','".$cart_array[$i]."','0')";

		 $qury=mysqli_query($cnn,"update cart_tbl set cart_status='1' where cart_id='".$cart_array[$i]."'");			 
	}

	$update_add="update add_ons_tbl set add_ons_status='1' where add_ons_id='".$_SESSION['add_ons_id']."'";	
	//echo $update_cart;die;
	mysqli_query($cnn,$update_add);	
	
	unset($_SESSION['cart_total']);
	unset($_SESSION['add_ons_id']);
	//header("location:index.php");

?>