<?php
session_start();

// Assuming an admin authentication system is in place
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT orders.id as order_id, orders.order_date, 
               users.id as user_id, users.name as user_name, users.email as user_email, 
               products.id as product_id, products.name as product_name, products.price
        FROM orders
        JOIN users ON orders.user_id = users.id
        JOIN products ON orders.product_id = products.id
        ORDER BY orders.order_date DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Orders</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Admin - Order Details</h1>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['order_id']) . "</td>
                        <td>" . htmlspecialchars($row['order_date']) . "</td>
                        <td>" . htmlspecialchars($row['user_id']) . "</td>
                        <td>" . htmlspecialchars($row['user_name']) . "</td>
                        <td>" . htmlspecialchars($row['user_email']) . "</td>
                        <td>" . htmlspecialchars($row['product_id']) . "</td>
                        <td>" . htmlspecialchars($row['product_name']) . "</td>
                        <td>$" . htmlspecialchars($row['price']) . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No orders found</td></tr>";
        }
        ?>
    </table>

    <a href="admin_logout.php">Logout</a>
</body>
</html>

<?php
$conn->close();
?>
