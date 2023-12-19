<?php
require_once("controller.php");
require_once("products.php");
class AdminController extends Controller 
{
    private $productsModel;
    public function __construct() {
        $this->productsModel = new products();
    }
    public function insert(){ 
		$firstname = $_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
		$password = $_REQUEST['password'];
		$phone = $_REQUEST['phone'];
        $UserType=$_REQUEST['UserType'];
		$this->model->insertAdmin($firstname,$lastname,$email,$password,$phone,$UserType);
	}

    public function EditAdmin(){
            $firstname = $_REQUEST['firstname'];
            $lastname=$_REQUEST['lastname'];
            $email=$_REQUEST['email'];
            $password = $_REQUEST['password'];
            $phone = $_REQUEST['phone'];
            $Usertype=$_REQUEST['UserType'];
            $this->model->editAdmin($firstname,$lastname,$email,$password,$phone,$Usertype);
        }
    public function DeletAdmin(){
            $this->model->deletAdmin();
        }
    

    }
?>


