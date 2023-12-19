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
     <link rel="stylesheet" href="../../public/css/store.css"> 
</head>



<body>
<header style="position: absolute; top: 0; left: 0; width: 100%; padding: 10px 20px; background: white; display: flex; justify-content: space-between; align-items: center; z-index: 100;">
        <a href="home.php" style="font-size: 24px; color: black; text-decoration: dotted; font-weight: 700;">Misery</a>
        <nav>
            <a href="home.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Home</a>
            <a href="store.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Shop</a>
            <a href="contactus.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Contact</a>
            <a href="cart.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 25px; margin-left: 20px; transition: color 0.3s;"><i class='bx bx-cart'></i></a>
            <a href="register.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; margin-right: 30px; transition: color 0.3s;">Sign-in</a>
        </nav>
    </header>


<br>
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
                
                   <form action="cart.php" method="post">
    <input type="hidden" name="product_name" value="<?= htmlspecialchars($val->getproduct_name()) ?>">
    <button type="submit" class="add-to-cart-btn" name="add_to_cart">Add to Cart</button>
</form>
            </div>

        <?php endforeach ?>
    </div>



    <footer style="display: -webkit-flex; display: -moz-flex; display: -ms-flex; display: -o-flex; display: flex; flex-flow: row wrap; padding: 50px; color: #fff; background-color: #25242a;">

<div style="flex: 1 100%;" class="left-area">
    <h2 style="font-size: 17px; font-weight: 600; text-transform: uppercase; color: cyan; letter-spacing: 3px;">Store</h2>
    <ul style="list-style: none; padding-left: 0;">
        <li><a href="aboutus.php" style="text-decoration: none; color: #999; line-height: 2em;">about us</a></li>
        <li><a href="#" style="text-decoration: none; color: #999; line-height: 2em;">our services</a></li>
        <li><a href="#" style="text-decoration: none; color: #999; line-height: 2em;">privacy policy</a></li>
    </ul>
</div>

<div style="flex: 1 50%;" class="footer-col">
    <h4 style="font-size: 17px; font-weight: 600; text-transform: uppercase; color: cyan; letter-spacing: 3px;">get help</h4>
    <ul style="list-style: none; padding-left: 0;">
        <li><a href="#" style="text-decoration: none; color: #999; line-height: 2em;">FAQ</a></li>
        <li><a href="#" style="text-decoration: none; color: #999; line-height: 2em;">Shipping</a></li>
        <li><a href="#" style="text-decoration: none; color: #999; line-height: 2em;">Returns</a></li>
        <li><a href="#" style="text-decoration: none; color: #999; line-height: 2em;">Payment Options</a></li>
    </ul>
</div>

<div style="flex: 1 50%;" class="footer-col">
    <h4 style="font-size: 17px; font-weight: 600; text-transform: uppercase; color: cyan; letter-spacing: 3px;">online shopping</h4>
    <ul style="list-style: none; padding-left: 0;">
        <li><a href="store.php" style="text-decoration: none; color: #999; line-height: 2em;">Jacket</a></li>
        <li><a href="store.php" style="text-decoration: none; color: #999; line-height: 2em;">Hoodies</a></li>
        <li><a href="store.php" style="text-decoration: none; color: #999; line-height: 2em;">Pants</a></li>
        <li><a href="store.php" style="text-decoration: none; color: #999; line-height: 2em;">Shorts</a></li>
    </ul>
</div>

<div style="flex: 1 50%;" class="footer-col">
    <h4 style="font-size: 17px; font-weight: 600; text-transform: uppercase; color: cyan; letter-spacing: 3px;">Follow us</h4>
    <div class="social-links" style="margin-top: 2.2em;">
        <a href="#" style="background: cyan; width: 40px; height: 40px; display: inline-block; margin-right: 10px;">
            <i style="color: #e7f2f4; padding: 10px 12px; font-size: 20px;" class='bx bxl-instagram'></i>
        </a>
        <a href="#" style="background: cyan; width: 40px; height: 40px; display: inline-block; margin-right: 10px;">
            <i style="color: #e7f2f4; padding: 10px 12px; font-size: 20px;" class='bx bxl-facebook'></i>
        </a>
        <a href="#" style="background: cyan; width: 40px; height: 40px; display: inline-block; margin-right: 10px;">
            <i style="color: #e7f2f4; padding: 10px 12px; font-size: 20px;" class='bx bxl-twitter'></i>
        </a>
    </div>
</div>

</footer>
</body>

</html>
