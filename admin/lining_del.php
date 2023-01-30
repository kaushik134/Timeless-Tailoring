<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from lining_tbl where lining_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:lining_list.php');
?>