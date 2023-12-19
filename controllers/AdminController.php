<?php
require_once("controller.php")
require_once("products.php")
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
        if (isset($_POST['insert_product'])) {
            $productName = $_POST['product_name'];
            $productDescription = $_POST['product_description'];
            $productKeyword = $_POST['product_keyword'];
            $productImg = $_POST['product_img'];
            $productPrice = $_POST['product_price'];
            $status = $_POST['status'];
            
            $this->productsModel->insertProduct($productName, $productDescription, $productKeyword, $productImg, $productPrice, $status);
            $this->redirectToSuccessPage();
        }
        if (isset($_POST['editproduct'])) {
            $productName = $_POST['product_name'];
            $productDescription = $_POST['product_description'];
            $productKeyword = $_POST['product_keyword'];
            $productImg = $_POST['product_img'];
            $productPrice = $_POST['product_price'];
            $status = $_POST['status'];

            $this->productsModel->editProduct($productName, $productDescription, $productKeyword, $productImg, $productPrice, $status);
            $this->redirectToSuccessPage();
        }
    
        if (isset($_POST['delete_product'])) {
            $productName = $_POST['product_name'];
            $productDescription = $_POST['product_description'];
            $productKeyword = $_POST['product_keyword'];
            $productImg = $_POST['product_img'];
            $productPrice = $_POST['product_price'];
            $status = $_POST['status'];
            
            $this->productsModel->delete_Product($productName, $productDescription, $productKeyword, $productImg, $productPrice, $status);
            $this->redirectToSuccessPage();
        }
        
    private function redirectToSuccessPage() {
            
            header("Location:home.php");
            exit();
        }

    }
?>


