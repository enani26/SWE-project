<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../public/css/login.css">


</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <div class="social-icons">
                <img src="facebook.png">
                <img src="twitter.png">
                <img src="instagram.png">
            </div>

            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="username" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Login</button>
            </form>

            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="username" required>
                <input type="email" class="input-field" placeholder="email" required>
                <input type="password" class="input-field" placeholder="password" required>
                <input type="checkbox" class="check-box"><span>    I agree to terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>

<?php
   session_start();
   include_once "../../includes/dbh.inc.php";
   //grab data from user and see if it exists in database
   if($_SERVER["REQUEST_METHOD"]=="POST"){
$db=new DBh();
    $email=$_POST["email"];
	$password=$_POST["password"];
	$sql="Select * from user where email ='$email' and password='$password'";
    $result = $db->query($sql);

    if($row=mysqli_fetch_array($result))	{
		$_SESSION["ID"]=$row[0];
		$_SESSION["firstname"]=$row["firstname"];
		$_SESSION["lastname"]=$row["lastname"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["phone"]=$row["phone"];
        $_SESSION["UserType"]=$row["UserType"];
        //redirect after a succeful login
		header("Location:userprofile.php");
	}
	else	{
		echo "Invalid Email or Password";
	}
   }
?>
</body>

</html>