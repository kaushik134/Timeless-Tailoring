<?php
session_start();
include 'connect.php';


//Start Categories

if(isset($_GET['category_id']))
{
	$category_id= $_GET['category_id'];
	$category_status=$_GET['category_status'];
	if($category_status=='0')
	{
		$sql = "update category_tbl set category_status='1' where category_id= $category_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update category_tbl set category_status='0' where category_id= $category_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='cat_list.php';</script>";
}
// End Categories
//start active
if(isset($_GET['customer_id']))
{
	$customer_id= $_GET['customer_id'];
	$customer_status=$_GET['customer_status'];
	if($customer_status=='0')
	{
		$sql = "update customer_tbl set customer_status='1' where customer_id= $customer_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update customer_tbl set customer_status='0' where customer_id= $customer_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='active_customer.php';</script>";
}
//end active
//start inactive
if(isset($_GET['customer_id']))
{
	$customer_id= $_GET['customer_id'];
	$customer_status=$_GET['customer_status'];
	if($customer_status=='0')
	{
		$sql = "update customer_tbl set customer_status='1' where customer_id= $customer_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update customer_tbl set customer_status='0' where customer_id= $customer_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='inactive_customer.php';</script>";
}
//end inactive
//Start subCategories
if(isset($_GET['subcategory_id']))
{
	$subcategory_id= $_GET['subcategory_id'];
	$subcategory_status=$_GET['subcategory_status'];
	if($subcategory_status=='0')
	{
		$sql = "update subcategory_tbl set subcategory_status='1' where subcategory_id= $subcategory_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update subcategory_tbl set subcategory_status='0' where subcategory_id= $subcategory_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='subcategory_list.php';</script>";
}
//end subCategories

//Start review
if(isset($_GET['review_id']))
{
	$review_id= $_GET['review_id'];
	$review_status=$_GET['review_status'];
	if($review_status=='0')
	{
		$sql = "update review_tbl set review_status='1' where review_id= $review_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update review_tbl set review_status='0' where review_id= $review_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='review.php';</script>";
}

//end review
//Start style


if(isset($_GET['style_id']))
{
	$style_id= $_GET['style_id'];
	$style_status=$_GET['style_status'];
	if($style_status=='0')
	{
		$sql = "update style_tbl set style_status='1' where style_id= $style_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update style_tbl set style_status='0' where style_id= $style_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='style_list.php';</script>";
}
//End style



//Start lining

if(isset($_GET['lining_id']))
{
	$lining_id= $_GET['lining_id'];
	$lining_status=$_GET['lining_status'];
	if($lining_status=='0')
	{
		$sql = "update lining_tbl set lining_status='1' where lining_id= $lining_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update lining_tbl set lining_status='0' where lining_id= $lining_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='lining_list.php';</script>";
}
//End lining

//Start tassles

if(isset($_GET['tassels_id']))
{
	$tassels_id= $_GET['tassels_id'];
	$tassels_status=$_GET['tassels_status'];
	if($tassels_status=='0')
	{
		$sql = "update tassels_tbl set tassels_status='1' where tassels_id= $tassels_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update tassels_tbl set tassels_status='0' where tassels_id= $tassels_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='tassles_list.php';</script>";
}
//End tassles

//Start Cups

if(isset($_GET['cups_id']))
{
	$cups_id= $_GET['cups_id'];
	$cups_status=$_GET['cups_status'];
	if($cups_status=='0')
	{
		$sql = "update cups_tbl set cups_status='1' where cups_id= $cups_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update cups_tbl set cups_status='0' where cups_id= $cups_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='cups_list.php';</script>";
}
//End Cups

//Start piping

if(isset($_GET['piping_id']))
{
	$piping_id= $_GET['piping_id'];
	$piping_status=$_GET['piping_status'];
	if($piping_status=='0')
	{
		$sql = "update piping_tbl set piping_status='1' where piping_id= $piping_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update piping_tbl set piping_status='0' where piping_id= $piping_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='piping_list.php';</script>";
}
//End piping

//Start work

if(isset($_GET['work_id']))
{
	$work_id= $_GET['work_id'];
	$work_status=$_GET['work_status'];
	if($work_status=='0')
	{
		$sql = "update work_tbl set work_status='1' where work_id= $work_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update work_tbl set work_status='0' where work_id= $work_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='work_list.php';</script>";
}
//End work

//Start special instruction

if(isset($_GET['special_instructions_id']))
{
	$special_instructions_id= $_GET['special_instructions_id'];
	$status=$_GET['status'];
	if($status=='0')
	{
		$sql = "update special_instructions_tbl set status='1' where special_instructions_id= $special_instructions_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update special_instructions_tbl set status='0' where special_instructions_id= $special_instructions_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='special_instructions_ad.php';</script>";
}
//End special instruction

//Start customer

if(isset($_GET['customer_id']))
{
	$customer_id= $_GET['customer_id'];
	$customer_status=$_GET['customer_status'];
	if($customer_status=='0')
	{
		$sql = "update customer_tbl set customer_status='1' where customer_id= $customer_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update customer_tbl set customer_status='0' where customer_id= $customer_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='user.php';</script>";
}
//End customer

 //Start faq

if(isset($_GET['faq_id']))
{
	$faq_id= $_GET['faq_id'];
	$faq_status=$_GET['faq_status'];
	if($faq_status=='0')
	{
		$sql = "update faq_tbl set faq_status='1' where faq_id= $faq_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update faq_tbl set faq_status='0' where faq_id= $faq_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='faq.php';</script>";
}
// //End faq

//start order details
if(isset($_POST['order_details_id']))
{	
		//echo $_POST['order_details_id'];
		//echo 'htii'; die;
		
	$order_id= $_POST['order_details_id'];
	$status=$_POST['order_status'];
	if($status=='0')
	{
		$sql = "update order_tbl set status='1' where order_id= $order_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update order_tbl set status='0' where order_id= $order_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='order.php';</script>";
}

// //End order

//start delivery
if(isset($_GET['delivery_method_id']))
{
	$delivery_method_id= $_GET['delivery_method_id'];
	$status=$_GET['status'];
	if($status=='0')
	{
		$sql = "update delivery_method_tbl set status='1' where delivery_method_id=$delivery_method_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update delivery_method_tbl set status='0' where delivery_method_id=$delivery_method_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='delivery.php';</script>";
}
// //End delivery

//start paymet
if(isset($_GET['payment_id']))
{
	$payment_id=$_GET['payment_id'];
	$payment_status=$_GET['payment_status'];
	if($payment_status=='0')
	{
		$sql = "update payment_bill_tbl set payment_status='1' where payment_id= $payment_id";

		$Id_array =  mysqli_query($cnn,$sql);
	}
	else
	{
		$sql = "update payment_bill_tbl set payment_status='0' where payment_id= $payment_id";
		$Id_array =  mysqli_query($cnn,$sql);
	}
	echo "<script>window.location='payment.php';</script>";
}
// //End payment



?> 