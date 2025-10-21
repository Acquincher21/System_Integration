<?php

$isAccountCreated = false;
$userData = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $accnumber = strval(rand(1000000000, 9999999999));

    $userData = [
        'username'   => $_POST['username'],
        'firstname'  => $_POST['firstname'],
        'lastname'   => $_POST['lastname'],
        'email'      => $_POST['email'],
        'birthdate'  => $_POST['birthday'],
        'gender'     => $_POST['gender'],
        'phone'      => $_POST['phone'],
        'accnumber'  => $accnumber
    ];

    $isAccountCreated = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="assets/css/signup.css" />
</head>
<body>
  <?php require "views/nav.php"; ?>

  <?php if ($isAccountCreated): ?>
    
    <div class="card success-message">
      <h2>✅ Account Successfully Created!</h2>
      <p>Welcome, <?php echo htmlspecialchars($userData['firstname']); ?>. Your account has been created.</p>
      <?php
        
        $query = http_build_query($userData);
      ?>
      <a href="index.php?<?php echo $query; ?>">
        <button type="button"> Continue </button>
      </a>
    </div>
  <?php else: ?>
    
    <div class="card">
      <h2>Create a New Account</h2>
      <p class="motivation">Recycle. Renew. Thrive.</p>
      <form method="post" action="signup.php">
        <input type="text" name="firstname" placeholder="First Name" required>
        <input type="text" name="lastname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="date" name="birthday" placeholder="Birthday" required>
        <select name="gender" required>
          <option value="" disabled selected>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <button type="submit">Sign Up</button>
      </form>
      <div class="social">
        <a href="https://accounts.google.com/signin" target="_blank">
          <img src="images/gmail.png" alt="Google" />
        </a>
        <a href="https://www.facebook.com/login.php" target="_blank">
          <img src="images/facebook.png" alt="Facebook" />
        </a>
      </div>
    </div>
  <?php endif; ?>

  <?php require "views/footer.php"; ?>
  <script src="assets/js/nav.js"></script>
</body>
</html>