<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from tassels_tbl where tassels_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:tassles_list.php');
?>