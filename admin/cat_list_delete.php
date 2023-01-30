<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from category_tbl where category_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:cat_list.php');
?>