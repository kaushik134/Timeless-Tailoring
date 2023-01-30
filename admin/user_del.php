<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from user_tbl where user_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:user.php');
?>