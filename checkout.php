<?php
// Include necessary files and start session
include("includes/connect.php"); // Include database connection file
include_once 'product-action.php'; // Include product action file
require('config.php'); // Include configuration file
require('vendor/razorpay/razorpay/Razorpay.php'); // Include Razorpay library
require('vendor/autoload.php'); // Include autoload file for additional dependencies
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Start session to manage user data
}error_reporting(E_ALL);
ini_set('display_errors', 1);

// Error reporting

// Redirect to login if user is not logged in
if (empty($_SESSION["user_id"])) {
    header('location: login.php'); // Redirect to login page
    exit(); // Terminate script execution
} else {
    $success_message = ""; // Initialize $success_message
    $item_total = 0; // Initialize $item_total


    if (isset($_SESSION["cart_item"]) && is_array($_SESSION["cart_item"])) {
        $item_total = 0; // Initialize $item_total before the loop

        foreach ($_SESSION["cart_item"] as $item) {
            $item_total += ($item["price"] * $item["quantity"]);

            if (isset($_POST['submit'])) {
                $SQL = "INSERT INTO users_orders (u_id, title, quantity, price) 
                        VALUES ('" . $_SESSION["user_id"] . "', '" . $item["title"] . "', '" . $item["quantity"] . "', '" . $item["price"] . "')";

                mysqli_query($conn, $SQL);
            }
        }

        if (isset($_POST['submit'])) {
            unset($_SESSION["cart_item"]);
            $success = "Thank you. Your order has been placed!";
            function_alert();
        }
    }
}


// Razorpay integration
$keyId = 'rzp_test_7AAvczxYAMW3nY';
$keySecret = 'wPeEfwG3dit3sO0TyNbUit2U';
$displayCurrency = 'INR';
$api = new Razorpay\Api\Api($keyId, $keySecret); // Create Razorpay API instance

// Razorpay order creation
$orderData = [
    'receipt'         => '3456',
    'amount'          => $item_total * 100,
    'currency'        => 'INR',
    'payment_capture' => 1
];

$razorpayOrder = $api->order->create($orderData); // Create Razorpay order
$_SESSION['razorpay_order_id'] = $razorpayOrder['id']; // Store Razorpay order ID in session
$amount = $orderData['amount'];
$displayAmount = $amount;

// ... (Rest of the Razorpay code remains unchanged)
?>
    <?php include "header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head section with meta tags, title, and CSS links -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Checkout || </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="site-wrapper">
        <!-- Header and navigation -->
        <header id="header" class="header-scroll top-header headrom">
            <!-- Navigation bar -->
            <nav class="navbar navbar-dark">
                <!-- Container for navigation elements -->
                <div class="container">
                    <!-- Mobile navigation toggle button -->
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <!-- Logo and branding -->
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt="" width="18%"> </a>
                    <!-- Navigation links -->
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <!-- Home link -->
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <!-- Restaurants link -->
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>

                            <?php
                            // Check if user is logged in
                            if (empty($_SESSION["user_id"])) {
                                // Display login and registration links
                                echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                                      <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                            } else {
                                // Display My Orders and Logout links
                                echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                                echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Page content wrapper -->
       
            <!-- Main content container -->
            <div class="container">
                <!-- Display success message -->
                <span style="color:green;"><?php echo $success_message; ?></span>
            </div>

            <!-- Checkout form container -->
           <!-- Checkout form container -->
<div class="container m-t-30">
    <!-- Checkout form -->
    <form action="" method="post">
        <!-- Widget for cart summary -->
        <div class="widget clearfix">
            <div class="widget-body">
                <div class="row">
                    <!-- Cart totals section -->
                    <div class="col-sm-12">
                        <!-- Cart summary details -->
                        <div class="cart-totals margin-b-20">
                            <div class="cart-totals-title">
                                <h4>Cart Summary</h4>
                            </div>
                            <div class="cart-totals-fields">
                                <table class="table">
                                    <tbody>
                                        <!-- Cart subtotal -->
                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td> <?php echo "₹".$item_total; ?></td>
                                        </tr>
                                        <!-- Delivery charges -->
                                        <tr>
                                            <td>Delivery Charges</td>
                                            <td>Free</td>
                                        </tr>
                                        <!-- Total amount -->
                                        <tr>
                                            <td class="text-color"><strong>Total</strong></td>
                                            <td class="text-color"><strong> <?php echo "₹".$item_total; ?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Payment options -->
                        <div class="payment-option">
                            <ul class="list-unstyled">
                                <!-- Cash on Delivery option -->
                                <li>
                                    <label class="custom-control custom-radio m-b-20">
                                        <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash on Delivery</span>
                                    </label>
                                </li>
                                <!-- PayPal option (disabled) -->
                                <li>
                                    <label class="custom-control custom-radio m-b-10">
                                        <input name="mod" type="radio" value="paypal" disabled class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Order Now button -->
        <!-- <p class="text-xs-center">
            <input type="submit" onclick="return confirm('Do you want to confirm the order?');" name="submit" class="btn btn-success btn-block" value="Order Now">
        </p> -->
        <p class="text-xs-center">
        <button id="customRazorpayButton">Pay Now</button>
        </p>
    
</div>


            <!-- Footer section -->
            <?php include "footer.php" ?>
        </div>

    </div>
    <!-- JavaScript scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <!-- Additional Razorpay scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <!-- Razorpay configuration and checkout initialization -->
<script>
    // Define the Razorpay configuration
    var razorpayConfig = {
        key: '<?php echo $keyId; ?>',
        amount: <?php echo $amount; ?>,
        currency: 'INR',
        name: 'SS AGRIQULTURE INNOVATION PVT LTD',
        image: 'assets/img/logo/logo.png',
        description: 'Tron Legacy',
        prefill: {
            name: 'Daft Punk',
            email: 'customer@merchant.com',
            contact: '9999999999',
        },
        notes: {
            shopping_order_id: '3456'
        },
        order_id: '<?php echo $_SESSION['razorpay_order_id']; ?>',
        handler: function (response) {
            // Handle the Razorpay response
            
            // Create an object with order details to be sent to the server
            var orderDetails = {
                order_id: '<?php echo $_SESSION['razorpay_order_id']; ?>',
                u_id: '<?php echo $_SESSION["user_id"]; ?>',
                title: '<?php echo $item["title"]; ?>',
                quantity: '<?php echo $item["quantity"]; ?>',
                price: '<?php echo $item["price"]; ?>',
                payment_id: response.razorpay_payment_id,
                order_date: new Date().toISOString(),
                razorpay_order_id: '<?php echo $_SESSION['razorpay_order_id']; ?>' // Include razorpay_order_id in the data
            };

            // Send the order details to the server using AJAX
            $.ajax({
                url: 'process_order.php',
                method: 'POST',
                data: orderDetails,
                success: function(response) {
                    // Handle the success response if needed
                    console.log(response);
                    
                    
                    // After processing on the server, submit the Razorpay form
                    $('#razorpayForm').submit();
                    window.location.href = 'your_orders.php';

                },
                error: function(error) {
                    console.error(error);
                }
            });
        }
    };

    // Initialize Razorpay when the custom button is clicked
    $('#customRazorpayButton').on('click', function () {
        var rzp = new Razorpay(razorpayConfig);
        rzp.open();
    });
</script>

</body>

</html>
