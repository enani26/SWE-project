<?php
require_once('../../models/products.php');
require_once('../../controllers/productController.php');
$model = new products();
$controller = new productController($model);

$values = $model->getproducts();

?>

<html>
<title>
    Misery store
</title>

<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../z../public/css/store_style.css">
</head>

<style>
    :root {
        --bg-color: white;
        --text-color: #7f96b3;
        --main-color: #c8815f;
        --big-font: 4.5rem;
        --h2-font: 3.3rem;
        --h3-font: 2rem;
        --normal-font: 1rem;
    }

    .search-container {
        text-align: center;
        margin-top: 50px;

    }

    .search-container form {
        display: inline-block;
        position: relative;
    }

    .search-container input[type="text"] {
        width: 500px;
        height: 50px;
        padding: 0 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px 0 0 5px;
        outline: none;
    }

    .search-container button[type="submit"] {
        position: absolute;
        top: 0;
        right: 0;
        height: 50px;
        width: 50px;
        border: none;
        background-color: black;
        font-size: 20px;
        color: #888;
        cursor: pointer;
        border-radius: 0 5px 5px 0;
        outline: none;
    }

    .search-container button[type="submit"]:hover {
        background-color: #e0e0e0;
    }

    header {
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: transparent;
        padding: 20px 14%;
        /* Removed extra space from padding */
        transition: all .35s ease;
    }

    .logo {


        padding: 20px;
        margin: 40px;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 1px;
        color: var(--tex);

    }

    .navlist {
        display: flex;
    }

    .navlist a {
        color: var(--text-color);
        font-weight: 600;
        padding: 10px 25px;
        font-size: var(--normal-font);
        transition: all .36s ease;
    }

    .navlist a:hover {
        color: var(--main-color);
    }

    .header-icons i {
        font-size: 32px;
        color: #7f96b3;
        margin-right: 20px;
        transition: all .36s ease;
    }

    .header-icons:hover i {
        color: var(--main-color);
    }

    header.sticky {
        background: var(--bg-color);
        padding: 20px 14%;
        /* Removed extra space from padding */
        box-shadow: 0px 0px 10px rgb(0 0 0/100%);
        height: 7%;
    }

    body {
        background-color: #f5f5f5;
        font-family: 'Arial', sans-serif;
    }

    .search-container {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        outline: none;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /************************************************************************************************************ */
    /* Define a default body margin and padding */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Define the product container */
    .small-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    /* Define the product item */
    .product-item {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 200px;
        margin: 20px;
        text-align: center;
    }

    /* Add a hover effect to the product item */
    .product-item:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Define the product item image */
    .product-item img {
        width: 100%;
        height: auto;
    }

    /* Define the product item title */
    .product-item h1 {
        margin: 0;
        padding: 20px 0;
        font-size: 20px;
    }

    /* Define the product item price */
    .product-item .product-price {
        margin: 0;
        padding: 20px 0;
        font-size: 16px;
    }

    /* Define the add to cart button */
    .product-item .add-to-cart-btn {
        display: inline-block;
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 20px;
        margin: 10px 0;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.3s;
    }

    /* Add a hover effect to the add to cart button */
    .product-item .add-to-cart-btn:hover {
        background-color: #666;
    }

    /************************************************************************************************************** */
    footer {
        background-color: black;
        padding: 20px;
        text-align: center;
        color: white;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .footer-logo {
        width: 100px;
        height: 100px;
        margin-bottom: 20px;
    }

    .footer-description {
        margin-bottom: 20px;
    }

    .footer-address {
        margin-bottom: 10px;
    }

    .footer-contact {
        margin-bottom: 10px;
    }

    .footer-links {
        margin-bottom: 20px;
        list-style-type: none;
        padding: 0;
        text-decoration: none;
        color: white;
    }

    .footer-links li {
        display: inline-block;
        margin-right: 10px;
        text-decoration: none;
        color: white;
    }

    .footer-newsletter {
        margin-bottom: 20px;
    }

    .footer-newsletter input[type="email"] {
        width: 200px;
        padding: 5px;
        border: 1px solid #ccc;
    }

    .footer-newsletter button {
        padding: 5px 10px;
        background-color: #555;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .social-icons {
        margin-bottom: 20px;
    }

    .social-icons i {
        margin-right: 10px;
        color: #555;
    }

    .footer-copyright {
        color: #777;
    }
</style>

<body>


    <header class="sticky">
        <h3 class="logo">Misery</h3>
        <ul class="navlist">
            <li><a href="home.php">Home</a></li>
            <li><a href="store.php">Shop</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Register.php">Login</a></li>
        </ul>
        <div class="header-icons">
            <a href="cart.php"><i class='bx bx-cart'></i></a>
        </div>
    </header>



    <br><br><br><br><br><br><br>

    <div class="search-container">
        <form action="">
            <input type="text" placeholder="Search...">
            <input type="submit" value="search" name="search_data">
        </form>
    </div>
    <br><br><br><br>

    <div class="small-container">
        <?php foreach ($values as $val): ?>
            <div class="product-item" width="200px">
                <!-- Add your image here -->

                <img src="../pages/img/<?= ($val->getproduct_img()) ?>" width="100px" height="200px">
                <h1>
                    <?= htmlspecialchars($val->getproduct_name()) ?>
                </h1>
                <p class="product-price">
                    <?= htmlspecialchars($val->getproduct_description()) ?>
                    <br><br>
                    <?= htmlspecialchars($val->getproduct_price()) ?>
                </p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

        <?php endforeach ?>
    </div>



    <footer>
        <div class="row">
            <div class="col">
                <!-- <img src="logo.png" class="footer-logo"> -->
                <p class="footer-description">
                    Fashion refers to anything that becomes a rage among the masses.
                    Fashion is a popular aesthetic expression.
                    Most notably, it is something that is in vogue.
                    Fashion appears in clothing, footwear, accessories, makeup, hairstyles, lifestyle, and body
                    proportions.
                </p>
            </div>
            <div>
                <div class="col">
                    <h3>Office</h3>
                    <div class="footer-address">
                        ITPL Road<br>
                        Cairo, Egypt<br>
                        Cairo, PIN 560066, Egypt
                    </div>
                    <div class="footer-contact">
                        <p class="email-id">miseryegypt@outlook.com</p>
                        <h4>+02 - 0123456789</h4>
                    </div>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul class="footer-links">
                        <li><a href="">Home</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Newsletter</h3>
                    <form class="footer-newsletter">
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder="Enter your email id" required>
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
                <div class="social-icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="footer-copyright">
            &copy; 2021 Easy Tutorials - All Rights Reserved
        </p>
    </footer>
</body>

</html>