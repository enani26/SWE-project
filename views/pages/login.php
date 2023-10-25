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
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                <input type="text" name="firstname" required >
                <label>Firstname</label>
                <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="text" name="lastname" required >
                    <label>Lastname</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                <input type="password" name="password" required >
                <label>Password</label>
                <box-icon type='solid' name='lock-alt'></box-icon>
                <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="logreg-link">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>




            </form>
        </div>
<div class="info-text login">
    <h2>Welcome Back!</h2>
</div>


    </div>


</body>
</html>