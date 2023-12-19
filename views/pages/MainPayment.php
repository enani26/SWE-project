
<?php

require_once("../../models/crditcard.php");
require_once("../../controllers/creditcardController.php");


$model = new crditcard();
$controller = new creditcardController($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../public/css/MainPayment.css">

</head>
<body>

<div class="container">

<form action="MainPayment.php?action=insert" method="post" enctype="multipart/form-data">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder=" Full Name" name="full_name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" name="address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="city" name="city">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="State" name="state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="Zip-code" name="zip_code">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>
                <a class="submit-btn" href="cardpayment.php">Add card</a>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="./img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder=" Card name" name="name_on_card">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="Card Number" name="card_number">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="Expiry Month" name="Expiry_Month">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="expiry year" name="expiry_year">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="CVV" name="CVV">
                    </div>
                </div>

            </div>
    
        </div>


        <input type="submit" value="done" class="submit-btn" name="insert_cardinfo">

    </form>

</div>    
    
</body>
</html>