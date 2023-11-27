<?php
include_once "models/UserModel.php";

 class UserController
 {
    function register()
    {
   $FnameErr=$LnameErr=$EmailErr=$PassErr=$ConfirmPassErr=$PhoneErr="";
      
  $isvalid=true;

  if (empty($_POST["firstname"])){
    $FnameErr="First Name is Required";
    $isvalid=false;
  } else{
    $Firstname=$_POST['firstname'];
    if(!preg_match("/^[a-zA-Z]*$/",$firstname)){
        $firstname="Only alphabets are allowed";
        $isvalid=false;
    }
  }
  if(empty($_POST["lastname"])){
    $LnameErr="Last Name is required";
    $isvalid=false;
    }
    else{
        $lastname=$_POST['lastname'];
        if(!preg_match("/^[a-zA-Z]*$/",$lastname)){
            $lastname="Only alphabets are allowed";
            $isvalid=false;
        }
    }
 }
}