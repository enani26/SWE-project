<?php
include_once "../../includes/dbh.inc.php";
session_start(); 


if (isset($_SESSION['id'])) // Check if the user is logged in 
{
      
    session_unset();
    session_destroy();

    // Redirect the user to the login page or another appropriate page
    header("Location: login.php");
    exit();
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: home.php");
    exit();
}
?>
