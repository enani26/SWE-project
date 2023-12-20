 <?php 
    session_start();
    include '../partials/navbar.php'; 
    require_once('../../models/product.php');
    require_once("../../db/Dbh.php");?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/cart.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>
   

    <div class="CartContainer">
        <div class="Header">
            <h3 class="Heading">Shopping Cart</h3>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <button type="submit" name="remove_all" class="Action">Remove all</button>
            </form>
        </div>

        <?php
        // Create a new instance of the Dbh class to establish a database connection
        $dbh = new Dbh();
        $conn = $dbh->connect();

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        function fetchProductDetailsById($product_id, $conn) {
            $safe_product_id = mysqli_real_escape_string($conn, $product_id);
            $sql = "SELECT * FROM store_products WHERE product_id = '$safe_product_id'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return new product(
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

        function addToCart($product, $conn) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
        
            // Check if the product is already in the cart
            $product_id = $product->getproduct_id(); // Assuming you have a getproduct_id() method
            $existing_product = array_search($product_id, array_column($_SESSION['cart'], 'product_id'), true);
        
            if ($existing_product !== false) {
                // Product is already in the cart, increase quantity
                $_SESSION['cart'][$existing_product]['quantity'] += 1;
            } else {
                // Product is not in the cart, add it with an initial quantity of 1
                $_SESSION['cart'][] = [
                    'product_id' => $product_id,
                    'quantity' => 1,
                    'product_name' => $product->getproduct_name(), // Include other necessary fields
                    'product_description' => $product->getproduct_description(),
                    'product_keyword' => $product->getproduct_keyword(),
                    'product_img' => $product->getproduct_img(),
                    'product_price' => $product->getproduct_price(),
                    'status' => $product->getstatus(),
                ];
            }
        }
        

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
            if (isset($_POST['product_id'])) {
                $product_id = $_POST['product_id'];
                $product = fetchProductDetailsById($product_id, $conn);

                if ($product) {
                    addToCart($product, $conn);  // Pass the connection as the second argument
                    
                } else {
                    echo "Product not found.";
                }
            } else {
                echo "Product ID not set.";
            }
        }

        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $cartItem) {
                $product = isset($cartItem['product']) ? $cartItem['product'] : null;
                if ($product) {
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
                            <form method="post" action="{$_SERVER['PHP_SELF']}">
                        <input type="hidden" name="product_id" value="{$product->getproduct_id()}">
                        <button type="submit" name="remove_product" class='remove'><u>Remove</u></button>
                    </form>
                        </div>
                    </div>
            HTML;
                }
            }        

            // Calculate and display dynamic subtotal
            $subtotal = array_sum(array_map(function ($item) {
                // Check if the 'product' key exists in the $item array
                if (isset($item['product']) && $item['product'] instanceof product) {
                    return $item['quantity'] * $item['product']->getproduct_price();
                } else {
                    // Handle the case where the 'product' key is not set or not a valid product object
                    return 0;
                }
            }, $_SESSION['cart']));

            $itemCount = count($_SESSION['cart']);
            echo <<<HTML
            <hr>
            <div class='checkout'>
                <div class='total'>
                    <div>
                        <div class='Subtotal'>Sub-Total</div>
                        <div class='items'>$itemCount items </div>
                        <div class='total-amount'>\${$subtotal}</div>
                    </div>
                    <button class='button'>Checkout</button>
                </div>
            </div>
HTML;
        } else {
            echo "<p>Your cart is empty.</p>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_all'])) {
            // Clear the entire shopping cart
            unset($_SESSION['cart']);
            echo "Cart cleared.";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_product'])) {
            if (isset($_POST['product_id'])) {
                $product_id_to_remove = $_POST['product_id'];
        
                // Find the index of the product in the cart
                $index_to_remove = array_search($product_id_to_remove, array_column($_SESSION['cart'], 'product_id'), true);
        
                if ($index_to_remove !== false) {
                    // Remove the product from the cart
                    unset($_SESSION['cart'][$index_to_remove]);
                    // Reset array keys
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "Product removed from the cart.";
                } else {
                    echo "Product not found in the cart.";
                }
            } else {
                echo "Product ID not set.";
            }
        }

        ?>
    </div>
</body>
</html>
