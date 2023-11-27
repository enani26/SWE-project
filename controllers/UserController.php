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
    if(empty($_POST["email"])){
        $EmailErr="Email is required";
        $isvalid=false;
    }
    else if(!filter_var($_POST["email"],FILTER_VALIDATE-EMAIL)){
        $EmailErr="invalid email format";
        $isvalid=false;
    }
      if(empty($_POST["password"]))  {
        $PassErr="Password id Reuired";
        $isvalid=false;
      }
      else if(strlen($_POST["Password"])<10){
        $passErr="Password must be at least 10 characters long";
        $isvalid=false;
      }
      if(empty($_POST["confirmpassword"])){
        $ConfirmPassErr="confirm password is Required";
        $isvalid=false;
      }
      else if (!preg_match($confirmpassword,$_POST("confirmpassword"))){
        $ConfirmPassErr="Invalid Password";
        $isvalid=false;
      }
      else if(!preg_match($confirmpassword,$_POST["password"])){
        $ConfirmPassErr="Invalid Password";
        $isvalid=false;
      }
      }
      if(empty($_POST["phone"])){
        $PhoneErr="Phone number is required";
        $isvalid=false;
      }
      else{
        //Exression for a valid 10-digit phone number
        $phoneRegex='/^0\d{10}$/';
        if(!preg_match($phoneRegex,$_POST["phone"])){
            $PhoneErr="invalid phone number";
            $isvalid=false;
        }
      }
      $user= new user
 }
}