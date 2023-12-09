<?php

class AdminController extends Controller 
{
    public function ShowLoginForm(){
        //display the login form
        include 'login.php';
    }

    public function login(){
        //check if the login form is submitted
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $username=$_POST['username'];
            $password=$_POST['password'];

            if($username==='admin'&& $password==='adminpassword') //validate username and password
            //authentication successful
{
            //start a session and store the user as logged in
            session_start();
            $SESSION['admin']=true;

            header('location:admin.php');
            exit();
        }
        else{
            echo 'invalid credentials'; //Authentication failed ;
        }
    }
}
public function showDshboard(){
    //check if the user is checked as an admin 
    session_start();
    if(!isset($_SESSION['admin'])||$_SESSION['admin']!==true){
        //redirect to the login page
        header('location:login.php');
        exit();
    }
    //it is authenticated so display admin dashboard
    include 'admin.php';
}
  public function logout(){
      session_start(); //log out the user by destroying the session
      session_destroy();
    //redirect the user to the login page
    header('location:login.php');
  }

}