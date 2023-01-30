<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from cups_tbl where cups_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:cups_list.php');
?>
