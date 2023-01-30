<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from frontneck_tbl where frontneck_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:front_neck_list.php');
?>