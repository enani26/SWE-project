<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
        <div class="form-box register">
            <h2>Sign Up</h2>
            <form action="#">
                <div class="input-box">
                <input type="text" required >
                <label for="firstname">First Name</label>
                <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="text" required >
                    <label for="lastname">Lastname</label>
                    <i class='bx bxs-user'></i>
                </div>

                    <div class="input-box">
                        <input type="text" required >
                        <label for="email">Email Address</label>
                        <i class='bx bx-envelope' ></i>
    

                
                <div class="input-box">
                <input type="password" required >
                <label for="password">Password</label>
                <box-icon type='solid' name='lock-alt'></box-icon>
                <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <input type="confirmpassword" required >
                    <label for="phone">Confirm Password</label>
                    <box-icon type='solid' name='lock-alt'></box-icon>
                    <i class='bx bxs-lock-alt'></i>
                    </div>

                    <div class="input-box">
                        <input type="text" required >
                        <label for="phone">Contact Number</label>
                        <i class='bx bx-phone'></i>
                        </div>


                <button type="submit" class="btn">Sign up</button>
                <div class="logreg-link">
                    <p>Already have an account? <a href="loginn.html" class="register-link">Sign In</a></p>
                </div>




            </form>
        </div>

</div>


    </div>
</body>
</html>