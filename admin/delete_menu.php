<?php
include 'connect.php';
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM product WHERE d_id = '".$_GET['menu_del']."'");
header("location:all_menu.php");  

?>
