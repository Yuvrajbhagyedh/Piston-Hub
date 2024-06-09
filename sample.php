<?php
// This is a simplified example, security measures are omitted for brevity.
// Connect to your database here

if (isset($_POST['quantity'])) {
    $product_id = $_GET['id']; // Assuming product ID is passed in the URL
    $quantity = $_POST['quantity'];

    // Add product and quantity to the cart (logic for database interaction)

    header('Location: cart.php'); // Redirect to cart page
} else {
    echo "Error: Please enter a valid quantity.";
}
?>
