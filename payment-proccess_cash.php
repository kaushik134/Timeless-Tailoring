<?php
session_start();
include_once "connect.php"; 
if(isset($_SESSION['cart_id']))
	{
	//$serialized_array=$_POST['product_id'];
	$cart_array=$_SESSION['cart_id'];

	//var_dump($cart_array);
	//var_export($original_array);
	///echo "<pre>";
	//print_r($_POST['product_id']);
	$len=count($cart_array);
	//var_dump($cart_array);
//die;
}
//echo "<br>len=".$len;die;
//$time=time('h:i:s');
$date = date('Y-m-d');
$time=date('H:i:s');                                                                           
$delivery_id=$_SESSION['last_delivery_id'];
$cart=1;
$status=0;
	$qry="insert into order_tbl values(NULL,'".$delivery_id."','".$_SESSION['uid']."','".$date."','".$status."')";
//die;
	$qury=mysqli_query($cnn,$qry);
	 $order_id=mysqli_insert_id($cnn);
	// echo "insert into payment_details(order_id,amount,p_status) values('". $order_id."','".$_SESSION['cart_total']."',0)";
	// $str="insert into payment_bill_tbl values(NULL,'cash','online',". $date."',123456,0)";
	 //echo $str;
	// echo "insert into payment_bill_tbl values(NULL,'online','".$_SESSION['cart_total']."','".$date."','".$time."','0')";
	 
	 $qury2=mysqli_query($cnn,"insert into payment_bill_tbl values(NULL,'cash','".$_SESSION['cart_total']."','".$date."','".$time."','1')");
	 $payment_id=mysqli_insert_id($cnn);
	 //echo "insert into payment_details_tbl(payment_id,customer_id,order_details_id) values('".$payment_id."','".$_SESSION['id']."','".$order_id."')";
	// $qury3=mysqli_query($cnn,"insert into cust_add_payment_bill_tbl(customer_id,address,distance,payment_id) values('".$_SESSION['id']."','".$_GET['add']."','10','".$payment_id."')");
	// $cust_add_payment_id=mysqli_insert_id($cnn);
	
	$date = date('Ymd');
	$time=date('His');
	
     $transaction_id=$date.$time;
	 $qury2=mysqli_query($cnn,"insert into payment_details_tbl values(NULL,'".$payment_id."','".$_SESSION['uid']."','".$order_id."','".$transaction_id."')");

	 //echo $str;
	// die;
//echo $cart_array[0];
//$order_status="1";
		for($i=0;$i<$len-1;$i++)
		{
			
			 $qury1=mysqli_query($cnn,"insert into order_detail_tbl values(NULL,'".$order_id."','".$cart_array[$i]."','1')");
			 $order_details_id=mysqli_insert_id($cnn);
			 $qury="update cart_tbl set cart_status=1 where cart_id='".$cart_array[$i]."'";
			 //echo $qury;

			 $qury=mysqli_query($cnn,"update cart_tbl set cart_status='1' where cart_id='".$cart_array[$i]."'");


			 
				 
		}
			unset($_SESSION['cart_total']);
		   unset($_SESSION['add_ons_id']);
		  header("location:index.php");

?>