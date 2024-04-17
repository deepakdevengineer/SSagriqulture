<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Hash the password securely

        // Insert the admin data into the database
        $query = "INSERT INTO admin (username, password, email, code) VALUES ('$username', '$password', '', '')";

        // Execute the query
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Successful insertion
            header("Location: index.php");
            exit();
        } else {
            // Error in insertion
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Handle empty fields error
        echo "Username and password are required!";
    }
}
?>
