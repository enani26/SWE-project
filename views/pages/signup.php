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
        <label for="lastname">lastname:</label>
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
        <label for="phone">phone:</label>
        <input type="phone" id="phone" name="phone" required>
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>