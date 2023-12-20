<?php

class Admin extends User{
    private $admins;

    function __construct() {
		$this->fillArray();
	}
    function fillArray() {
		$this->admins = array();
		$db = $this->connect();
		$result = $this->readAdmins();
		while ($row = $result->fetch_assoc()) {
			array_push($this->admins, new User($row["id"],$row["firstname"],$row["lastname"],$row["email"],$row["Password"],$row['phone'],$row["UserType"]));
		}
	}
    function getAdmins() {
		return $this->admins;
	}
    function readAdmins(){
		$sql = "SELECT * FROM user";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
    function insertAdmin($Firstname,$Lastname,$Email, $password, $phone,$UserType){
		$sql = "INSERT INTO user (firstname,lastname,email,password,phone,UserType) VALUES ('$Firstname','$Lastname','$Email','$password', $phone','$UserType')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	public function editAdmin() {
		$firstname = $_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$email=$_REQUEST['email'];
		$password = $_REQUEST['password'];
		$phone = $_REQUEST['phone'];
		$UserType=$_REQUEST['UserType'];
		$this->model->editAdmin($firstname,$lastname,$email,$password,$phone,$UserType);
	}
	public function deletAdmin(){
			$sql="delete from user where id=$this->id;";
			if($this->db->query($sql) === true){
				  echo "deletet successfully.";
			  } else{
				  echo "ERROR: Could not able to execute $sql. " . $conn->error;
		  }
	}
    
}