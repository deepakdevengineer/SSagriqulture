                
                <?php
include 'connect.php';
error_reporting(0);
session_start();

mysqli_query($conn,"DELETE FROM users_orders WHERE o_id = '".$_GET['order_del']."'");
header("location:all_orders.php");  

?>
                