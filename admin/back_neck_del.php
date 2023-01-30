<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from backneck_tbl where backneck_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:back_neck_list.php');
?>