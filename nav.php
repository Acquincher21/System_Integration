<?php
  $isLoggedIn = false;

  if (
    !empty($_GET['username']) || !empty($_POST['username'])      
  ) {
    $isLoggedIn = true;
  }
?>

<link rel = "stylesheet" href = "assets/css/nav.css">

<div class = "back">
  <div class = "top_bar">
    <div class = "top_bar_logo">
      <img src = "images/logo.png">
    </div>

    <div class = "top_bar_links">
      <div class="dropdown">

          <a href="#" class="logo-button dropbtn">
              <img src="images/bell.png" alt="Notifications">
          </a>

          <div id="notification-dropdown" class="dropdown-content">
            <a href="#">Notification 1</a>
            <a href="#">Notification 2</a>
            <a href="#">Notification 3</a>
          </div>

      </div>

      <a href = "/EWASTEEXPRESS/index.php"> Home </a>
      <a href = "/EWASTEEXPRESS/about_us.php"> About Us </a>

      <?php if (!$isLoggedIn): ?>
        <a href="/EWASTEEXPRESS/signup.php"> Register </a>
      <?php endif; ?>

      <a href = " " class = "logo-button">
      <img src = "images/user.png" alt = "Logo">
      </a>

    </div>
  </div>
</div>

<div class="overlay" id="loginOverlay">
  <div class="overlay-panel">
    <button id="closeOverlayBtn" class="close-btn">&times;</button>
    <div class="login-container">
      <?php if ($isLoggedIn): ?>
        <a href="/EWASTEEXPRESS/profile.php">
          <button class="login-button"> Profile Management</button>
        </a>
        <a href="/EWASTEEXPRESS/logout.php">
          <button class="login-button">Log Out</button>
        </a>
      <?php else: ?>
        <a href="/EWASTEEXPRESS/login.php">
          <button id="loginBtn" class="login-button">Log In</button>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>