<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from style_tbl where style_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:style_list.php');
?>