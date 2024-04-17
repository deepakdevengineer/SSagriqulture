<?php
// process_order.php

// Include necessary files and start session
include("includes/connect.php"); // Include database connection file

// Get order details from the AJAX request
$order_id = $_POST['order_id'];
$u_id = $_POST['u_id'];
$title = $_POST['title'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$payment_id = $_POST['payment_id'];
$order_date = $_POST['order_date'];
$razorpay_order_id = $_POST['razorpay_order_id']; // Added this line to retrieve razorpay_order_id

// Insert order details into the database
$SQL = "INSERT INTO users_orders (order_id, u_id, title, quantity, price, payment_id, order_date, razorpay_order_id) 
        VALUES ('$order_id', '$u_id', '$title', '$quantity', '$price', '$payment_id', '$order_date', '$razorpay_order_id')";

mysqli_query($conn, $SQL); // Execute the SQL query
?>
