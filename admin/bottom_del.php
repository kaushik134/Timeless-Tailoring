<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from bottom_tbl where bottom_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:bottom_list.php');
?>