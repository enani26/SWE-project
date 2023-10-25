<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "misery_db";

$conn=mysqli_connect($servername,$username,$password,$dbname) or die ("Coudn't connect");

//check connection
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
// echo "Connected successfully";
?>