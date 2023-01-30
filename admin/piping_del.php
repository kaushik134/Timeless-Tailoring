<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from piping_tbl where piping_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:piping_list.php');
?>
