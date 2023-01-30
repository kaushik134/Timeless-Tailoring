<!DOCTYPE html>
<?php 
//session_start();
require_once "connect.php";

function get_add_ons_linig_Name($lining_id)
{
	global $cnn;
	$qry_lining="select lining_name from lining_tbl where lining_id=".$lining_id;
	$lining_test=mysqli_query($cnn,$qry_lining);
	$lin_data=mysqli_fetch_array($lining_test);
	$lin_name=$lin_data['lining_name'];;
	return $lin_name;
	// $lining_test;
}

function get_add_ons_linig_price($lining_id)
{
	global $cnn;
	$qry_lining="select lining_price from lining_tbl where lining_id=".$lining_id;
	$lining_test=mysqli_query($cnn,$qry_lining);
	$lin_data=mysqli_fetch_array($lining_test);
	$lining_price=$lin_data['lining_price'];;
	return $lining_price;
	// $lining_test;
}

function get_add_ons_linig_image($lining_id)
{
	global $cnn;
	$qry_lining="select lining_image from lining_tbl where lining_id=".$lining_id;
	$lining_test=mysqli_query($cnn,$qry_lining);
	$lin_data=mysqli_fetch_array($lining_test);
	$lining_image=$lin_data['lining_image'];;
	return $lining_image;
	// $lining_test;
}



?>

