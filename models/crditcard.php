<?php
require_once('model.php');

class crditcard extends Model
{

    public $full_name;
    public $email;
    public $address;
    public $city;
    public $state;
    public $zip_code;
    public $name_on_card;
    public $card_number;

    private $card;

    public function getFullName()
    {
        return $this->full_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getZipCode()
    {
        return $this->zip_code;
    }

    public function getNameOnCard()
    {
        return $this->name_on_card;
    }

    public function getCardNumber()
    {
        return $this->card_number;
    }

    public function __construct($full_name = '', $email = '', $address = '', $city = '', $state = '', $zip_code = '', $name_on_card = '', $card_number = '')
    {
        try {


            $this->full_name = $full_name;
            $this->email = $email;
            $this->address = $address;
            $this->city = $city;
            $this->state = $state;
            $this->zip_code = $zip_code;
            $this->name_on_card = $name_on_card;
            $this->card_number = $card_number;
            $this->FillArray();


        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }



    function readcard()
    {
        $sql = "SELECT * FROM credit_cards";
        // Make sure $this->db is properly initialized
        $this->db = $this->connect();
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }



    public function fillArray()
    {
        $this->card = array();

        $result = $this->readCard();

        // while ($row = $result->fetch_assoc()) {
        //     array_push($this->card, new crditcard($row["full_name"], $row["email"], $row["address"], $row["city"], $row["state"], $row['zip_code'], $row["name_on_card"], $row["card_number"])); 
        // }
    }


    public function insert_cardinfo($full_name, $email, $address, $city, $state, $zip_code, $name_on_card, $card_number)
    {
        $sql = "INSERT INTO credit_cards (full_name, email, address, city, state, zip_code, name_on_card, card_number) 
                      VALUES ('$this->full_name', '$this->email', '$this->address', '$this->city', '$this->state', '$this->zip_code','$this->name_on_card','$this->card_number')";

        if ($this->db->query($sql) === true) {
            $this->FillArray();
        }
    }

}

?>