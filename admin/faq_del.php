<?php
	require_once('connect.php');
	
	$del=$_GET['del'];
	$sql="delete from faq_tbl where faq_id=".$del;
	mysqli_query($cnn,$sql);
	header('location:faq.php');
?>