<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/cart.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>
    <?php include '../partials/navbar.php'; ?>

    <div class="CartContainer">
        <div class="Header">
            <h3 class="Heading">Shopping Cart</h3>
            <h5 class="Action">Remove all</h5>
        </div>

        <?php
session_start();
require_once('../../models/product.php');
require_once("../../db/Dbh.php");

// Create a new instance of the Dbh class to establish a database connection
$dbh = new Dbh();
$conn = $dbh->connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function fetchProductDetailsByName($product_name, $conn) {
    $safe_product_name = mysqli_real_escape_string($conn, $product_name);
    $sql = "SELECT * FROM store_products WHERE product_name = '$safe_product_name'";
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

function addToCart($product) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    $product_index = array_search($product->getproduct_name(), array_column($_SESSION['cart'], 'product_name'));

    if ($product_index !== false) {
        // Product is already in the cart, increase quantity
        $_SESSION['cart'][$product_index]['quantity'] += 1;
    } else {
        // Product is not in the cart, add it
        $_SESSION['cart'][] = [
            'product_name' => $product->getproduct_name(),
            'quantity' => 1,
            'product' => $product
        ];
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    if (isset($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
        $product = fetchProductDetailsByName($product_name, $conn);

        if ($product) {
            addToCart($product);
            echo "Product added to cart.";
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Product name not set.";
    }
}

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $cartItem) {
        $product = $cartItem['product'];
    
        // Output each cart item using HTML
        echo <<<HTML
        <div class='Cart-Items'>
            <div class='image-box'>
                <img src='{$product->getproduct_img()}' style='height: 120px;' />
            </div>
            <div class='about'>
                <h1 class='title'>{$product->getproduct_name()}</h1>
            </div>
            <div class='counter'>
                <div class='btn'>+</div>
                <div class='count'>{$cartItem['quantity']}</div>
                <div class='btn'>-</div>
            </div>
            <div class='prices'>
                <div class='amount'>\${$product->getproduct_price()}</div>
                <div class='save'><u>Save for later</u></div>
                <div class='remove'><u>Remove</u></div>
            </div>
        </div>
    HTML;
    }
    

    // Calculate and display dynamic subtotal
    $subtotal = array_sum(array_map(function ($item) {
        return $item['quantity'] * $item['product']->getproduct_price();
    }, $_SESSION['cart']));

    echo <<<HTML
    <hr>
    <div class='checkout'>
        <div class='total'>
            <div>
                <div class='Subtotal'>Sub-Total</div>
                <div class='items'>{${count($_SESSION['cart'])}} items </div>
            </div>
            <div class='total-amount'>\${$subtotal}</div>
        </div>
        <button class='button'>Checkout</button>
    </div>
    HTML;
} else {
    echo "<p>Your cart is empty.</p>";
}
?>
</div>
</body>
</html>
