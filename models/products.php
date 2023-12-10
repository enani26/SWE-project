<?php
require_once("model.php");
require_once("product.php");


class products extends Model
{
    private $products;

    function __construct()
    {
        $this->FillArray();

    }

    function FillArray()
    {
        $this->products = array();
        $this->db = $this->connect();
        $result = $this->readproducts();

        while ($row = $this->db->fetchRow($result)) {
            array_push($this->products, new product($row["product_id"], $row["product_name"], $row["product_description"], $row["product_keyword"], $row["product_img"], $row["product_price"], $row["status"]));
        }
    }

    function getproducts()
    {
        return $this->products;
    }


    function readproducts()
    {
        $sql = "SELECT * FROM store_products";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }


    function insert_product($product_name, $product_description, $product_keyword, $product_img, $product_price, $status)
    {

        $sql = "INSERT INTO store_products (product_name, product_description, product_keyword, product_img,product_price,status) VALUES ('$product_name', '$product_description', '$product_keyword', '$product_img','$product_price','$status')";
        if ($this->db->query($sql) === true) {
            echo "Records inserted successfully.";
            $this->FillArray();
        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }

    }


}




?>