<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from contact_us_tbl where contact_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:contact_us.php');
?>