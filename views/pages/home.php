<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../public/css/homee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
<?= include '../partials/navbar.php' ?>
<header style="position: absolute; top: 0; left: 0; width: 100%; padding: 10px 20px; background: white; display: flex; justify-content: space-between; align-items: center; z-index: 100;">
        <a href="#" style="font-size: 24px; color: black; text-decoration: dotted; font-weight: 700;">Misery</a>
        <nav>
            <a href="home.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Home</a>
            <a href="store.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Shop</a>
            <a href="contact.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Contact</a>
            <a href="cart.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 25px; margin-left: 20px; transition: color 0.3s;"><i class='bx bx-cart'></i></a>
            <a href="signup.php" style="text-decoration: none; color: black; font-weight: 500; font-size: 16px; margin-left: 20px; transition: color 0.3s;">Sign-in</a>
        </nav>
    </header>

<section class="home" id="home">
    <div class="home-text">
        <h1>New <br><span>Arrivals</span></h1>
        <p>Check our new Collection</p>
        <a href="store.php" class="btn">View Collection</a>
    </div>
</section>

<section class="featured" id="featured">
    <div class="center-text">
        <h2>Featured Categories</h2>
    </div>
    <div class="featured-content">
        <div class="row">
            <img src="./img/pic20.jpg">
            <div class="fea-text">
                <h5>Men</h5>
                <p>5 items</p>
            </div>
            <div class="arrow">
                <a href=""><box-icon name='right-arrow-alt'></box-icon> </a>
            </div>
        </div>

        <div class="row">
            <img src="./img/pic23.jpg">
            <div class="fea-text">
                <h5>Men</h5>
                <p>5 items</p>
            </div>
            <div class="arrow">
                <a href=""><box-icon name='right-arrow-alt'></box-icon> </a>
            </div>
        </div>

        <div class="row">
            <img src="./img/pic18.jpg">
            <div class="fea-text">
                <h5>Men</h5>
                <p>5 items</p>
            </div>
            <div class="arrow">
                <a href=""><box-icon name='right-arrow-alt'></box-icon> </a>
            </div>
        </div>

        <div class="row">
            <img src="./img/pic19.jpg">
            <div class="fea-text">
                <h5>Men</h5>
                <p>5 items</p>
            </div>
            <div class="arrow">
                <a href=""><box-icon name='right-arrow-alt'></box-icon> </a>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta-text">
        <h6>Winter Sale</h6>
        <h4>30% OFF <br>NEW ARRIVAL</h4>
        <a href="store.php" class="btn">Shop Now</a>
    </div>
</section>

<section class="new" id="new">
    <div class="center-text">
        <h2>NEW ARRIVALS</h2>
    </div>
    <div class="new-content">
        <div class="box">
            <img src="./img/pic28.jpg">
            <h5>Jacket</h5>
            <h6>180$</h6>
            <div class="sale">
                <h4>Sale</h4>
            </div>
        </div>

        <div class="box">
            <img src="./img/pic31.jpg">
            <h5>Hoodie</h5>
            <h6>180$</h6>
            <div class="sale">
                <h4>Sale</h4>
            </div>
        </div>

        <div class="box">
            <img src="./img/pic29.jpg">
            <h5>Shorts</h5>
            <h6>100$</h6>
            <div class="sale">
                <h4>Sale</h4>
            </div>
        </div>

        <div class="box">
            <img src="./img/pic30.jpg">
            <h5>Pants</h5>
            <h6>280$</h6>
            <div class="sale">
                <h4>Sale</h4>
            </div>
        </div>
    </div>
</section>

<footer style="display: -webkit-flex; display: -moz-flex; display: -ms-flex; display: -o-flex; display: flex; flex-flow: row wrap; padding: 50px; color: #fff; background-color: #25242a;">

    <div style="flex: 1 100%;" class="left-area">
        <h2 style="font-size: 17px; font-weight: 600; text-transform: uppercase; color: cyan; letter-spacing: 3px;">Store</h2>
        <ul style="list-style: none; padding-left: 0;">
            <li><a href="aboutus.php" style="text-decoration: none; color: #999; line-height: 2em;">about us</a></li>
            <li><a href="store.php" style="text-decoration: none; color: #999; line-height: 2em;">our services</a></li>
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
