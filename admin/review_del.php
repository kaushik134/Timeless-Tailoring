<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from review_tbl where review_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:review.php');
?>