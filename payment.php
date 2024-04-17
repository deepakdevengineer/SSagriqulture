<?php

// Include necessary files
require('config.php');
require('vendor/razorpay/razorpay/Razorpay.php');
require('vendor/autoload.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

session_start();

$keyId = 'rzp_test_7AAvczxYAMW3nY';
$keySecret = 'wPeEfwG3dit3sO0TyNbUit2U';
$displayCurrency = 'INR';

// Error reporting (comment out in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$api = new Api($keyId, $keySecret);

// Create Razorpay Order
$orderData = [
    'receipt'         => '3456', // Ensure that the receipt is a string
    'amount'          => 2000 * 100,
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);
$_SESSION['razorpay_order_id'] = $razorpayOrder['id'];

$amount = $orderData['amount'];
$displayAmount = $amount;

if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);
    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = isset($_GET['checkout']) && in_array($_GET['checkout'], ['automatic', 'manual'], true) ? $_GET['checkout'] : 'automatic';

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "DJ Tiesto",
    "description"       => "Tron Legacy",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
        "name"    => "Daft Punk",
        "email"   => "customer@merchant.com",
        "contact" => "9999999999",
    ],
    "notes"             => [
        "address"           => "Hello World",
        "merchant_order_id" => "12312321",
    ],
    "theme"             => ["color" => "#F37254"],
    "order_id"          => $razorpayOrder['id'],
];

if ($displayCurrency !== 'INR') {
    $data['display_currency'] = $displayCurrency;
    $data['display_amount']   = $displayAmount;
}

// Handle payment verification
$success = false;

try {
    if (isset($_POST['razorpay_payment_id'])) {
        $attributes = [
            'razorpay_order_id'   => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature'  => $_POST['razorpay_signature']
        ];

        $api->utility->verifyPaymentSignature($attributes);
        $success = true;
    } 
} catch (SignatureVerificationError $e) {
    $error = 'Razorpay Error: ' . $e->getMessage();
}

// Display payment result
$html = $success ?
    "<p>Your payment was successful</p>
    <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
    <p>Order ID: {$_SESSION['razorpay_order_id']}</p>" :
    "";

echo $html;

?>

<!-- Your HTML content -->

<style>
    #customRazorpayButton {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #4CAF50; /* Green color */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #customRazorpayButton:hover {
        background-color: #45a049; /* Darker green color on hover */
    }
</style>

<button id="customRazorpayButton">Pay Now</button>

<!-- Your JavaScript code -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    // Define your Razorpay configuration
    var razorpayConfig = {
        key: '<?php echo $data['key']?>',
        amount: <?php echo $data['amount']?>,
        currency: 'INR',
        name: '<?php echo $data['name']?>',
        image: '<?php echo $data['image']?>',
        description: '<?php echo $data['description']?>',
        prefill: {
            name: '<?php echo $data['prefill']['name']?>',
            email: '<?php echo $data['prefill']['email']?>',
            contact: '<?php echo $data['prefill']['contact']?>',
        },
        notes: {
            shopping_order_id: '3456'
        },
        order_id: '<?php echo $data['order_id']?>',
        handler: function (response) {
            // send the payment ID to the server
            $('#razorpay_payment_id').val(response.razorpay_payment_id);
            // submit the form
            $('#razorpayForm').submit();
        }
    };

    // Initialize Razorpay when the custom button is clicked
    $('#customRazorpayButton').on('click', function () {
        var rzp = new Razorpay(razorpayConfig);
        rzp.open();
    });
</script>

<!-- Additional HTML content -->
