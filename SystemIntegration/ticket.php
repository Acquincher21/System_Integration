<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Ticket Form</title>

  <link rel = "stylesheet" href = "assets/css/ticket.css"/>
</head>
<body>
<?php require "views/nav.php"; ?>

<div class="container">
    <h2>Submit a Support Ticket</h2>
    <form id="ticketForm" action="/submit-ticket" method="post">
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="">-- Please Select a Category --</option>
            <option value="technical">Technical Support</option>
            <option value="billing">Billing Inquiry</option>
            <option value="general">General Question</option>
            <option value="other">Other</option>
        </select>

        <label for="priority">Priority:</label>
        <select id="priority" name="priority" required>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit">Submit Ticket</button>
    </form>
</div>

<?php require "views/footer.php"; ?>
<script src="assets/js/ticket.js"></script>
</body>
</html>