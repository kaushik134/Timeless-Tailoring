<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from special_instructions_tbl where special_instructions_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:special_instructions_ad.php');
?>