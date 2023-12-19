<?php
require_once("controller.php");

class creditcardController extends Controller
{



    function insert()
    {


        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip_code = $_POST['zip_code'];
        $name_on_card = $_POST['name_on_card'];
        $card_number = $_POST['card_number'];
       ;
        $this->model->insert_cardinfo($full_name, $email, $address, $city, $state, $zip_code, $name_on_card, $card_number);


    }
} ?>