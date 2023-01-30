<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from add_ons_tbl where add_ons_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:addons.php');
?>