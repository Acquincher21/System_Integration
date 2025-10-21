<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Contact Us - Customer Support</title>

<link rel = "stylesheet" href = "assets/css/contact.css"/>
</head>
<body>

<?php require "views/nav.php"; ?>

<div class="container">
  <!-- Contact Form -->
  <section class="contact-form" aria-label="Contact form">
    <h2>Contact Customer Support</h2>
    <form id="contactForm">
      <label for="name">Your Name *</label>
      <input type="text" id="name" name="name" placeholder="John Doe" required />

      <label for="email">Your Email *</label>
      <input type="email" id="email" name="email" placeholder="john@example.com" required />

      <label for="message">Your Message *</label>
      <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </section>

  <!-- Chat Sidebar -->
  <aside class="chat-sidebar" aria-label="Live chat support">
  <h3>Live Chat Support</h3>
  <div class="chat-box" id="chatBox" aria-live="polite">
    <p><em>Welcome! How can we help you today?</em></p>
  </div>
  <div class="chat-input">
    <input type="text" id="chatInput" placeholder="Type a message..." />
    <button id="sendBtn">Send</button>
  </div>
</aside>
</div>

<?php require "views/footer.php"; ?>
<script src="assets/js/contact.js"></script>
</body>
</html>