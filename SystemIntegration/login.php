<?php
$users = [
    'user123' => [
        'password' => 'pass123',
        'firstname' => 'John',
        'lastname' => 'Doe',
        'accnumber' => '2193183214',
        'email' => 'john@example.com',
        'birthdate' => '2000-01-01',
        'gender' => 'Male',
        'phone' => '09123456789'
    ],
    'user456' => [
        'password' => 'pass456',
        'firstname' => 'Jane',
        'lastname' => 'Smith',
        'accnumber' => '2193183215',
        'email' => 'jane@example.com',
        'birthdate' => '2001-02-02',
        'gender' => 'Female',
        'phone' => '09987654321'
    ]
];

// 🧠 Handle login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        // Build query string with full user info
        $user = $users[$username];
        $query = http_build_query([
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'accnumber' => $user['accnumber'],
            'email' => $user['email'],
            'username' => $username,
            'birthdate' => $user['birthdate'],
            'gender' => $user['gender'],
            'phone' => $user['phone']
        ]);
        header("Location: index.php?$query");
        exit();
    } else {
    $login_error = "<p style='color:red;'>Invalid username or password.</p>";
    }
  }

$login_error = $login_error ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Login </title>

  <link rel = "stylesheet" href = "assets/css/login.css"/>

</head>
<body>
  <div class="page-wrapper">
    <div class="container">
      <div class="left-side"> <div class = "loginimage"> <img src = "images/logo.png " > </div> </div>
      <div class="right-side">
        <h2>Login</h2>
        <?php echo $login_error; ?>
        <form name="loginForm" action="login.php" method="POST" onsubmit="return validateForm()">
          <label for="username">Username:</label><br />
          <input type="text" id="username" name="username" /><br /><br />

          <label for="password">Password:</label><br />
          <input type="password" id="password" name="password" /><br /><br />

          <input type="submit" value="Login" />
        </form>

  </div>
</div>

 </div>

<?php require "views/footer.php"; ?>
<script src="assets/js/login.js"></script>
</body>
</html>