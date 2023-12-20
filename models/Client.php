<?php

class Client extends User{
    private $users;
    


    function __construct() {
		$this->fillArray();
	}
    function fillArray() {
		$this->users = array();
		$db = $this->connect();
		$result = $this->readUser();
		while ($row = $result->fetch_assoc()) {
			array_push($this->users, new User($row["id"],$row["firstname"],$row["lastname"],$row["email"],$row["Password"],$row['phone'],$row["UserType"]));
		}
	}
    function getUsers() {
		return $this->users;
	}
    function readUser(){
		$sql = "SELECT * FROM user";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
    function insertUser($Firstname,$Lastname,$Email, $password, $phone,$UserType){
		$sql = "INSERT INTO user (firstname,lastname,email,password,phone,UserType) VALUES ('$Firstname','$Lastname','$Email','$password', $phone','$UserType')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
		}
	}
	public function editUser() {
		$firstname = $_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$email=$_REQUEST['email'];
		$password = $_REQUEST['password'];
		$phone = $_REQUEST['phone'];
		$UserType=$_REQUEST['UserType'];
		$this->model->editUser($firstname,$lastname,$email,$password,$phone,$UserType);
	}
	public function deleteUser(){
			$sql="delete from user where id=$this->id;";
			if($this->db->query($sql) === true){
				  echo "deletet successfully.";
			  } else{
				  echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
		  }
	}
    
};