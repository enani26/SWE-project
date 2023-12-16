<?php
session_start();
require_once('../../models/product.php'); 

function fetchProductDetails($product_id) {
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $product_index = array_search($product_id, array_column($_SESSION['cart'], 'product_id'));

    if ($product_index !== false) {
        $_SESSION['cart'][$product_index]['quantity'] += 1;
    } else {
        $product = fetchProductDetails($product_id);

        if ($product) {
            $_SESSION['cart'][] = [
                'product_id' => $product->getId(),
                'quantity' => 1,
                'product' => $product
            ];
        }
    }

   // header("Location: store.php");
    exit();
}
?>
