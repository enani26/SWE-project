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

        if (!is_numeric($product_price) || $product_price <= 0) {
            // return an error message if the price is invalid
            echo "Invalid price! Please enter a positive number.";

        } else if ($this->db->query($sql) === true) {
            echo "Records inserted successfully.";
            $this->FillArray();
        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }
    }

    function editproduct($product_name, $product_description, $product_keyword, $product_img, $product_price, $status){
            $sql = "update store_products set product_name ='$product_name',product_description='$product_description',product_keyword ='$product_keyword',product_img ='$product_img' where id=$this->id;";
              if($this->db->query($sql) === true){
                  echo "updated successfully.";
                  $this->readproducts($this->id);
              } else{
                  echo "ERROR: Could not able to execute $sql. " . $conn->error;
              }
            }
    function delete_product(){
        
            $sql="delete from store_products where id=$this->id;";
            if($this->db->query($sql) === true){
                  echo "deletet successfully.";
              } else{
                  echo "ERROR: Could not able to execute $sql. " . $conn->error;
    
          }
    }
    



};
?>