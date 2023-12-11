<?php
require_once('model.php');
class product extends Model{
    
private $product_id;
private $product_name;
private $product_description;
private $product_keyword;
private $product_img;
private $product_price;
private $status;
function getproduct_name(){
    return $this->product_name;
}
function getproduct_description(){
    return $this->product_description;
}
function getproduct_keyword(){
    return $this->product_keyword;
}
function getproduct_img(){
    return $this->product_img;
}
function getproduct_price(){
    return $this->product_price;
}
function getstatus(){
    return $this->status;
}
function __construct($product_id ,$product_name="" , $product_description="" , $product_keyword="" , $product_img="" 
,$product_price="" , $status=""){

    $this->product_id=$product_id;
    $this->db =$this->connect();
    if(''===$product_name){
        $this->readproduct($product_id);
    }else{
        $this->product_name=$product_name;
        $this->product_description=$product_description;
        $this->product_keyword=$product_keyword;
        $this->product_img=$product_img;
        $this->product_price=$product_price;
        $this->status=$status;


    }
}

function readproduct($product_id){
    $sql = "SELECT * FROM store_products where product_id=".$product_id;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
        $this->product_name = $row["product_name"];
		$this->product_description=$row["product_description"];
        $this->product_keyword = $row["product_keyword"];
		$this->product_img = $row["product_img"];
        $this->product_price = $row["product_price"];
		$this->status = $row["status"];

    }
    else {
        $this->product_name = "";
		$this->product_description="";
        $this->product_keyword = "";
		$this->product_img = "";
        $this->product_price = "";
		$this->status = "";

    }
}



    
    
}


















?>