<?php
require_once('connect.php');
session_start();
//session_destroy();
unset($_SESSION['uid']);
header('location:login.php');
?>