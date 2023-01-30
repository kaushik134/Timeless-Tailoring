<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from sleeve_tbl where sleeve_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:sleeves_list.php');
?>