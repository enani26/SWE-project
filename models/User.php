<?php
  require_once(__ROOT__ . "models/model.php");
?>

<?php
class User extends model{
  private $id;
  private $firstname;
  private $lasname;
  private $email;
  private $password;
  private $phone;
  private $UserType;

  function __construct($id,$firstname="",$lastname="",$email="",$password="",$phone="",$UserType="") {
    $this->id = $id;
	    $this->db = $this->connect();
        if(""===$firstname){
            $this->readUser($id);
          }else{
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->email=$email;
            $this->password=$password;
            $this->phone=$phone;
            $this->UserType =$UserType;
          }
}
function getFirstName() {
    return $this->firstname;
  }
  function setFirstName($firstname) {
    return $this->firstname = $firstname;
  }
  
   function getLastName() {
    return $this->lastname;
  }
  function setLastName($lastname) {
    return $this->lastname = $lastname;
  }
  
  function getEmail() {
    return $this->email;
  }
  function setEmail($email) {
    return $this->email = $email;
  }
  
  function getPassword() {
    return $this->password;
  }
  function setPassword($password) {
    return $this->password = $password;
  }
  function getPhone() {
    return $this->phone;
  }
  function setPhone($phone) {
    return $this->phone = $phone;
  }
  function getUserType() {
    return $this->UserType;
  }
  function setUserType($UserType) {
    return $this->UserType = $UserType;
  }
  function getID() {
    return $this->id;
  }
  function readUser($id){
    $sql = "SELECT * FROM user where ID=".$id;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
        $this->firstname = $row["firstname"];
		$_SESSION["firstname"]=$row["firstname"];
		$this->lastname=$row["lastname"];
        $_SESSION["lastname"]=$row["lastname"];
        $this->email = $row["email"];
        $_SESSION["email"]=$row["email"];
		$this->password = $row["password"];
        $_SESSION["password"]=$row["password"];
        $this->phone=$row["phone"];
        $_SESSION["phone"]=$row["phone"];
        $this->UserType=$row["UserType"];
        $_SESSION["UserType"]=$row["UserType"];
    }
    else {
        $this->firstname = "";
        $this->lastname  = "";
        $this->email     = "";		
        $this->password  = "";
		    $this->phone     = "";
        $this->UserType  = "";
    }
  }
  function editUser($Firstname, $Lastname,$Email,$Password, $Phone,$Usertype){
    $sql = "update user set firstname='$Firstname',lastname='$Lastname',email='$Email',password='$Password', phone='$Phone', UserType='$Usertype' where id=$this->id;";
      if($this->db->query($sql) === true){
          echo "updated successfully.";
          $this->readUser($this->id);
      } else{
          echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
      }

}
function deleteUser(){
    $sql="delete from user where id=$this->id;";
    if($this->db->query($sql) === true){
          echo "deletet successfully.";
      } else{
          echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
      }
  }
}