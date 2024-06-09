<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (!in_array($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
    }

    header('Location: cart.php');
    exit;
}
?>
<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    if (count($cart) > 0) {
        $product_ids = implode(',', $cart);

        $sql = "SELECT * FROM products WHERE id IN ($product_ids)";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div>
                        <h2>" . $row['name'] . "</h2>
                        <p>" . $row['description'] . "</p>
                        <p>$" . $row['price'] . "</p>
                        <img src='" . $row['image'] . "' alt='" . $row['name'] . "'/>
                      </div>";
            }
        } else {
            echo "No products in the cart";
        }
    } else {
        echo "Cart is empty";
    }
} else {
    echo "Cart is empty";
}

$conn->close();
?>

<a href="index.php">Back to Products</a>
