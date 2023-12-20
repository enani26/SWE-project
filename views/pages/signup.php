<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="../../public/css/signup.css">
</head>
<body>
<?= include '../partials/navbar.php' ?>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="register.php" method="POST">
      <div class="form-group">
        <label for="name">FirstName:</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="name">lastname:</label>
        <input type="lastname" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="name">phone:</label>
        <input type="phone" id="phone" name="phone" required>
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone=$_POST['phone'];

    // Sanitize and validate the data as needed

    // Step 4: Insert data into the database
    $query = "INSERT INTO user (firstname, lastname,email,password,phone) VALUES ($firstname,$lastname,$email,$password,$phone);
    $statement = mysqli_prepare($connection, $query);

    mysqli_stmt_bind_param($statement, "sss", $firstname,$lastname,$email,$password,$email,$phone);
    mysqli_stmt_execute($statement);

    if (mysqli_stmt_affected_rows($statement) > 0) {
        // Registration successful
        echo "Registration successful!";
    } else {
        // Registration failed
        echo "Registration failed!";
    }

    mysqli_stmt_close($statement);
}

mysqli_close($connection);
?>