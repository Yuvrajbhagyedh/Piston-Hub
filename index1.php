<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>
                <h2>" . $row['name'] . "</h2>
                <p>" . $row['description'] . "</p>
                <p>$" . $row['price'] . "</p>
                <img src='" . $row['image'] . "' alt='" . $row['name'] . "'/>
                <form method='post' action='cart.php'>
                    <input type='hidden' name='product_id' value='" . $row['id'] . "'/>
                    <button type='submit'>Add to Cart</button>
                </form>
              </div>";
    }
} else {
    echo "No products available";
}

$conn->close();
?>
