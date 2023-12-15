<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../../public/css/registration.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="" method="post">
                    <div class="input-box">
                            <input type="text" name="email" required >
                            <label for="email">Email Address</label>
                            <i class='bx bx-envelope' ></i>

                    <div class="input-box">
                    <input type="password" name="password" required >
                    <label>Password</label>
                    <box-icon type='solid' name='lock-alt'></box-icon>
                    <i class='bx bxs-lock-alt'></i>
                    </div>
                    
                    <button type="submit" class="btn">Login</button>
                    <div class="logreg-link">
                        <p>Don't have an account? <a href="register.php" class="register-link">Sign Up</a></p>
                    </div>




            </form>
        </div>
<div class="info-text login">
    <h2>Welcome Back!</h2>
</div>


    </div>

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