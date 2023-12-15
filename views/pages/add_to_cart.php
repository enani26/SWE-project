<!-- add_to_cart.php -->
<?php
// Include necessary files and initialize session
session_start();
require_once('../../models/product.php'); // Assuming your Product class is in a file named Product.php

// Function to fetch product details using your Product class
function fetchProductDetails($product_id) {
    // Implement your database connection logic here
    global $conn;
    $sql = "SELECT * FROM store_products WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return new Product(
            $row['product_id'],
            $row['product_name'],
            $row['product_description'],
            $row['product_keyword'],
            $row['product_img'],
            $row['product_price'],
            $row['status']
        );
    }

    return null;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];

    // Initialize the cart array if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    $product_index = array_search($product_id, array_column($_SESSION['cart'], 'product_id'));

    if ($product_index !== false) {
        // If the product is already in the cart, increment the quantity
        $_SESSION['cart'][$product_index]['quantity'] += 1;
    } else {
        // If the product is not in the cart, fetch product details and add it with quantity 1
        $product = fetchProductDetails($product_id);

        if ($product) {
            $_SESSION['cart'][] = [
                'product_id' => $product->getId(),
                'quantity' => 1,
                'product' => $product
            ];
        }
    }

    // Optionally, you can redirect the user to the product page or wherever you want
    header("Location: products.php");
    exit();
}
?>
