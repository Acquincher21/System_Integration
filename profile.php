<?php

$username  = $_GET['username'] ?? '';
$accnumber = $_GET['accnumber'] ?? '';
$firstname = $_GET['firstname'] ?? '';
$lastname  = $_GET['lastname'] ?? '';
$email     = $_GET['email'] ?? '';
$password  = $_GET['password'] ?? ''; 
$phone     = $_GET['phone'] ?? '';

// Handle profile update
$isUpdated = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $phone     = $_POST['phone'];
    $isUpdated = true;
}

$isLoggedIn = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title> Profile Management </title>

  <link rel = "stylesheet" href = "assets/css/profile.css"/>
</head>

<body>
<?php require "views/nav.php"; ?>

<div class="profile-container">
  <h2> Profile </h2>

  <?php if ($isUpdated): ?>
    <div class="success-message">✅ Your profile was updated </div>
  <?php endif; ?>

  <form method="post" action="profile.php?<?php echo http_build_query([
    'username' => $username,
    'accnumber' => $accnumber
  ]); ?>">

    <label>First Name:</label>
    <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required>

    <label>Last Name:</label>
    <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>

    <label>Password:</label>
    <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required>

    <label>Phone:</label>
    <input type="tel" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>

    <button type="submit"> Update Profile </button>
  </form>
</div>

<?php require "views/footer.php"; ?>
</body>
</html>