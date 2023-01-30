<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from subcategory_tbl where subcategory_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:subcategory_list.php');
?>