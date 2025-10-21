<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Customer Care </title>

  <!-- JS and CSS -->
  <link rel="stylesheet" href="assets/css/care.css"/>
</head>

<body>

  <!-- Top bar -->
  <div class="top_bar4">
    <div class="top_bar_logo4">
      <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
    </div>
    <div class="CustomerCare">
      <h1>Customer</h1>
      <h1 class="cre">Care</h1>
    </div>
  </div>

  <!-- Contact section -->
  <div class="contact-main4">
    <div class="contact-container4">
      <a href="contact.php">
        <div class="contact1">
          <img src="images/contactus.png" alt="Contact Us">
          <div class="text"><p>Contact Us</p></div>
        </div>
      </a>

      <a href="https://www.facebook.com">
        <div class="contact1">
          <img src="images/facebook.png" alt="Facebook">
          <div class="text"><p>Facebook</p></div>
        </div>
      </a>

      <a href="https://www.gmail.com">
        <div class="contact1">
          <img src="images/gmail.png" alt="Gmail">
          <div class="text"><p>Gmail</p></div>
        </div>
      </a>

      <a href="ticket.php">
        <div class="contact1">
          <img src="images/ticket.png" alt="Raise a Ticket">
          <div class="text"><p>Raise a Ticket</p></div>
        </div>
      </a>
    </div>

    <div class="worker4">
      <img src="images/support.jpg" alt="Customer Support Worker">
    </div>
  </div>

  <!-- Footer include -->
  <?php require "views/footer.php"; ?>

<script src="assets/js/customercare.js" defer></script>
</body>
</html>