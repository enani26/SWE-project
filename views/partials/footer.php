<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
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