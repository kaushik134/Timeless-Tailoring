<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from work_tbl where work_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:work_list.php');
?>
