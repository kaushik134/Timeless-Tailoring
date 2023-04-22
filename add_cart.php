<?php
session_start();
include('connect.php');

if (!isset($_SESSION['uid'])) {
	header('location:login.php');
}

if (isset($_POST['lining_id']) || isset($_POST['tassels_id']) || isset($_POST['cups_id']) || isset($_POST['piping_id']) || isset($_POST['work_id'])) {

	$add_ons_status = 0;
	$lining_id = $_POST['lining_id'] ? $_POST['lining_id'] : 'NULL';
	$tassels_id ='NULL';
	$cups_id = 'NULL';
	$piping_id = 'NULL';
	$work_id = 'NULL';
	$cat_id = $_POST['cat_id'];

	$add_ons_sql = "insert into add_ons_tbl values(NULL,'" . $cat_id . "','" . $add_ons_status . "'," . $lining_id . "," . $tassels_id . "," . $cups_id . "," . $piping_id . "," . $work_id . ") ";
	//echo $add_ons_sql;die;
	$sql_ons = mysqli_query($cnn, $add_ons_sql);
	$last_id = mysqli_insert_id($cnn);
	$_SESSION['add_ons_id'] = $last_id;
	//echo "hii".$last_id;
	//die;

	#update cart after add_ons add to database
	if ($last_id) {
		$update_cart = "update cart_tbl set add_ons_id='" . $last_id . "' where 
	category_id='" . $_POST['cat_id'] . "'  and customer_id='" . $_SESSION['uid'] . "' and cart_status=0";
		//echo $update_cart;die;
		mysqli_query($cnn, $update_cart);
	}
	//header('location:cat_measurement.php');
	echo '<script type="text/javascript">';
	echo 'window.location.href="cat_measurement.php?cat_id=' . $_POST['cat_id'] . '"';
	echo '</script>';


}
if (isset($_GET['style_id'])) {

	// echo "select * from cart_tbl where  category_id='" . $_GET['cat_id'] . "' and subcategory_id='" . $_GET['sub_cat_id'] . "' and customer_id='" . $_SESSION['uid'] . "' and cart_status=0";
	// die;
	$sql = "select * from cart_tbl where  category_id='" . $_GET['cat_id'] . "' and subcategory_id='" . $_GET['sub_cat_id'] . "' and customer_id='" . $_SESSION['uid'] . "' and cart_status=0";

	$cart_query = mysqli_query($cnn, $sql);
	$row_cart = mysqli_fetch_assoc($cart_query);

	$cart_id = $row_cart['cart_id'];

	//echo $cart_id;die;
	$_SESSION['style_id'] = $_GET['style_id'];
	$_SESSION['cat_id'] = $_GET['cat_id'];
	$_SESSION['sub_cat_id'] = $_GET['sub_cat_id'];
	$add_ons_id = 2;
	$cart_status = 0;
	if (!empty($cart_id)) {
		$cart_sql = "update cart_tbl set style_id='" . $_GET['style_id'] . "' where cart_id=" . $cart_id;
	} else {
		$cart_sql = "insert into cart_tbl values(NULL,'" . $_SESSION['uid'] . "','" . $_GET['cat_id'] . "','" . $_GET['sub_cat_id'] . "','" . $_GET['style_id'] . "',NULL,NULL,NULL,NULL,'" . $cart_status . "') ";
	}
	//echo $cart_sql;die;
	mysqli_query($cnn, $cart_sql);

}

echo '<script type="text/javascript">';
echo 'window.location.href="mens.php?cat_id=' . $_SESSION['cat_id'] . '&sub_cat_id=' . $_SESSION['sub_cat_id'] . '&category_type=' . $_GET['category_type'] . '"';
echo '</script>';

?>