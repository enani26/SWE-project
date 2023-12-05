<html>
<title>
    Misery store
</title>
<head>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
    background-color:black;
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
    padding: 20px 14%; /* Removed extra space from padding */
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
    padding: 20px 14%; /* Removed extra space from padding */
    box-shadow: 0px 0px 10px rgb(0 0 0/100%);
    height: 7%;
}

    body {
        background-color:white;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: grey;
        font-size: 22px;
    }

    .card button {
        border: #7F96B3;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding in columns */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        /* this adds the "card" effect */
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }

    /* Responsive columns - one column layout (vertical) on small screens */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }
  .sortt{
    width: 1440.09px; height: 0px; left: 50px; top: 200px; position: absolute; transform: rotate(-0.65deg); transform-origin: 0 0; border: 2px #7F96B3 solid">

  }
  
    /* CSS styles for the footer */
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
        <input type="submit" value="search" >
    </form>
</div>
    <br><br><br><br>



    <div class="Unisex"
        style="left: 1307px; top: 127px; position: absolute; color: #7F96B3; font-size: 30px; font-family: Montagu Slab; font-weight: 400; word-wrap: break-word">
        UNISEX<br /></div>


    <div class="row">
        <div class="column"><form action="">
            <div class="card" > <img src="img/skull.jpg" alt="Skull T-shirt" style="width: 73%">
                <h1>Skull T-Shirt</h1>
                <p class="price">$19.99</p>
                <p>oversized T-shirt</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/black.jpg" alt="black Hoodies" style="width:50%" >
                <h1>black Hoodies</h1>
                <p class="price">$19.99</p>
                <p>black hoodies    </p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/web.jpg" alt="navy blue hoodies" style="width:60%">
                <h1>navy blue Hoodies</h1>
                <p class="price">$19.99</p>
                <p>navy blue hoodies</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/generic.jpg" alt="Generic hoodies" style="width:70%">
                <h1>generic hoodies</h1>
                <p class="price">$19.99</p>
                <p>generic hoodies</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="row">
        <div class="column">
            <div class="card"> <img src="img/greyy.jpg" alt="grey hoodies" style="width:70%">
                <h1>grey hoodies</h1>
                <p class="price">$19.99</p>
                <p>grey hoodies</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/white.jpg" alt="white hoodies" style="width:70%">
                <h1>White hoodiess</h1>
                <p class="price">$19.99</p>
                <p>White hoodies</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/white tshirt.jpg" alt="white t-shirt" style="width:65%">
                <h1>white t-shirt</h1>
                <p class="price">$19.99</p>
                <p>white t-shirt</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/green t-shirt.jpg" alt="green t-shirt" style="width:55%">
                <h1>green t-shirt</h1>
                <p class="price">$19.99</p>
                <p>green t-shirt</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="row">
        <div class="column">
            <div class="card"> <img src="img/denims jeans.jpg" alt="Denim Jeans" style="width:70%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Denims jeans</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/baggy.jpg" alt="baggy Jeans" style="width:55%">
                <h1>Baggy Jeans</h1>
                <p class="price">$19.99</p>
                <p>Baggy Jeans</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/cargo.jpg" alt="cargo pants" style="width:55%">
                <h1>cargo pants</h1>
                <p class="price">$19.99</p>
                <p>cargo pants</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
        <div class="column">
            <div class="card"> <img src="img/shorts.jpg" alt="cargo short" style="width:85%">
                <h1>cargo short</h1>
                <p class="price">$19.99</p>
                <p>cargo short</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="row">
            <div class="col">
                <!-- <img src="logo.png" class="footer-logo"> -->
                <p class="footer-description">
                    Fashion refers to anything that becomes a rage among the masses. 
                    Fashion is a popular aesthetic expression. 
                    Most notably, it is something that is in vogue. 
                    Fashion appears in clothing, footwear, accessories, makeup, hairstyles, lifestyle, and body proportions.
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