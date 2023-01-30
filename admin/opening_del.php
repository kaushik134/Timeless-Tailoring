<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from opening_tbl where opening_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:opening_list.php');
?>