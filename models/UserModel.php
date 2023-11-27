<?php
include_once "../includes/dbh.inc.php";
include_once "../views/--"; 

//to display erroron mac it won't affect the code or make errors
ini_set('display_errors',1);
error_reporting(E_ALL);
class user{
    public $FirstName;
    public $LastName;
    public $Email;
    public $Password;
    public $ConfirmPassword;
    public $Phone;
}
