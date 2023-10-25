<?php
session_start();
  include_once "../../includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/registration.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
        <div class="form-box register">
            <h2>Sign Up</h2>
            <form action="" method="post">
                <div class="input-box">
                <input type="text" name="firstname" required >
                <label for="firstname">Firstname</label>
                <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="text" name="lastname" required >
                    <label for="lastname">Lastname</label>
                    <i class='bx bxs-user'></i>
                </div>

                    <div class="input-box">
                        <input type="text" name="email" required >
                        <label for="email">Email Address</label>
                        <i class='bx bx-envelope' ></i>
    

                
                <div class="input-box">
                <input type="password" name="password" required >
                <label for="password">Password</label>
                <box-icon type='solid' name='lock-alt'></box-icon>
                <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="confirmpassword"required >
                    <label for="password">Confirm Password</label>
                    <box-icon type='solid' name='lock-alt'></box-icon>
                    <i class='bx bxs-lock-alt'></i>
                    </div>

                    <div class="input-box">
                        <input type="text" name="phone" required >
                        <label for="phone">Contact Number</label>
                        <i class='bx bx-phone'></i>
                        </div>


                <button type="submit" class="btn">Sign up</button>
                <div class="logreg-link">
                    <p>Already have an account? <a href="login.php" class="register-link">Sign In</a></p>
                </div>




            </form>
        </div>

</div>


    </div>
    <?php
 //grap data from user if form was submitted 

  if($_SERVER["REQUEST_METHOD"]=="POST"){ //check if form was submitted
	$firstname=htmlspecialchars($_POST["firstname"]);
	$lastname=htmlspecialchars($_POST["lastname"]);
	$email=htmlspecialchars($_POST["email"]);
	$password=htmlspecialchars($_POST["password"]);
	/*$confirmpassword=htmlspecialchars($_POST["confirmpassword"]);*/
    $phone=htmlspecialchars($_POST["phone"]);
    //insert it to database 
	$sql="insert into signup(firstname,lastname,email,password,phone) 
	values('$firstname','$lastname','$email','$password','$phone')";
	$result=mysqli_query($conn,$sql);

    //redirect the user back to index.php 
	if($result)	{
		header("Location:index.php");
	}
}

?>
</body>
</html>