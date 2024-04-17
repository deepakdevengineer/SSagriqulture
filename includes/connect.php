<?php
$servername = 'localhost';
$username = 'u904396694_root';
$password = 'UGV6DxbOKq*7'; 
$database = 'u904396694_sswebsite';
$conn = mysqli_connect($servername, $username, $password, $database); // connecting 

// Check connection
if (!$conn) {
    // Database connection failed, show maintenance message
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Site Maintenance</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin: 50px;
            }
            h1 {
                color: #333;
            }
            p {
                color: #666;
            }
        </style>
    </head>
    <body>
        <h1>Site Maintenance</h1>
        <p>We apologize for the inconvenience, but the site is currently undergoing maintenance. Please try again later.</p>
    </body>
    </html>";
    exit; // Stop further execution
}

// If the database connection is successful, continue with the regular content

// Include your regular content here or redirect to another page
