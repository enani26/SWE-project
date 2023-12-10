<?php
include_once "models/UserModel.php";

 class UserController extends Controller
 {
  public function insert() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$age = $_REQUEST['age'];
		$phone = $_REQUEST['phone'];

		$this->model->insertUser($name,$password,$age,$phone);
	}

	public function edit() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$age = $_REQUEST['age'];
		$phone = $_REQUEST['phone'];

		$this->model->editUser($name,$password,$age,$phone);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
 }
