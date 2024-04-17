<?php
// Include database connection file
include 'connect.php';

// Check if category_id is received through POST
if (isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];

    // Prepare and execute the DELETE query
    $sql_delete = "DELETE FROM category WHERE rs_id = ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("i", $category_id);
    
    if ($stmt_delete->execute()) {
        // Category deleted successfully
        echo '<script>alert("Category deleted successfully.");</script>';
    } else {
        // Error occurred while deleting category
        echo '<script>alert("Error deleting category.");</script>';
    }

    // Close the statement
    $stmt_delete->close();
    
    // Redirect back to the page where the delete button was clicked
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    // If category_id is not received, redirect to a suitable error page or handle the error appropriately
    echo "Error: Category ID not received.";
}
?>
