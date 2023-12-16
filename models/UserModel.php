<?php
  require_once(__ROOT__ . "models/model.php");
?>

<?php
class client extends Model {
    private $id;
    private $firstname;
    private $lastname:
	  private $email;
    private $password;
    private $phone;
    private $UserType

  function __construct($id,$firstname="",$lastname="",$email="",$password="",$phone="",$UserType="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$firstname){
      $this->readUser($id);
    }else{
      $this->firstname =$firstname;
      $this->lastname=$lastname;
      $this->email=$email;
      $this->password=$password;
      $this->phone = $phone;
      $this->UserType=$UserType;
    }
  }

  function getName() {
    return $this->firstname;
  }
  function setName($firstname) {
    return $this->firstname = $firstname;
  }
  function getlastName() {
    return $this->lastname;
  }
  function setlastName($firstname) {
    return $this->lastname = $lastname;
  }
  function getemail(){
    return $this->email;
  }
  function getemail(){
    return $this->email=$email;
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
  function getUserType(){
    return $this->UserTpe;
  }

  function getID() {
    return $this->id;
  }
function readUser($id){
    $sql = "SELECT * FROM signup where ID=".$id;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
        $this->name = $row["Name"];
		$_SESSION["Name"]=$row["Name"];
		$this->password=$row["Password"];
        $this->age = $row["Age"];
		$this->phone = $row["Phone"];
    }
    else {
        $this->name = "";
		$this->password="";
        $this->age = "";
		$this->phone = "";
    }
  }
  
  function editUser($name, $password, $age, $phone){
      $sql = "update user set name='$name',password='$password', age='$age', phone='$phone' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readUser($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
  
  function deleteUser(){
	  $sql="delete from user where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
	 
}
