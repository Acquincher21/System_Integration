<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store form data in session for later use
    $_SESSION['donation'] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'pickupDate' => $_POST['pickupDate'],
        'pickupTime' => $_POST['pickupTime'],
        'comment' => $_POST['comment'],
        'attachment' => $_FILES['attachment']['name']
    ];

    // Redirect to review page
    header("Location: review.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste Express Donation Form</title>

    <link rel="stylesheet" href="assets/css/donate.css"/>
    <style>
        .notification {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php require "views/nav.php"; ?>
    
    <div class="container">
        <h1>Donation Form</h1>

        <!-- ✅ Show notification if form was submitted successfully -->
        <?php if (isset($_GET['submitted']) && $_GET['submitted'] === 'success'): ?>
            <div class="notification">
                ✅ Thank you! Your donation form was submitted successfully.
            </div>
        <?php endif; ?>

        <form action="donate.php" method="POST" enctype="multipart/form-data"> 
            <!-- User Info -->
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com">
            </div>

            <!-- Pickup Date and Time -->
            <div class="grid-2">
                <div class="form-group">
                    <label for="pickupDate">Pickup Date</label>
                    <input type="date" id="pickupDate" name="pickupDate">
                </div>
                <div class="form-group">
                    <label for="pickupTime">Pickup Time</label>
                    <select id="pickupTime" name="pickupTime" required>
                        <option value="">-- Select Time --</option>
                        <option value="09:00">9:00 AM</option>
                        <option value="09:30">9:30 AM</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="10:30">10:30 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="11:30">11:30 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="12:30">12:30 PM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="13:30">1:30 PM</option>
                        <option value="14:00">2:00 PM</option>
                        <option value="14:30">2:30 PM</option>
                        <option value="15:00">3:00 PM</option>
                        <option value="15:30">3:30 PM</option>
                        <option value="16:00">4:00 PM</option>
                        <option value="16:30">4:30 PM</option>
                        <option value="17:00">5:00 PM</option>
                    </select>
                </div>
            </div>
        
            <!-- Item Details / Comment -->
            <div class="form-group">
                <label for="comment"> Item Details </label>
                <textarea id="comment" name="comment" rows="3" placeholder="List items for pickup OR provide donation comments."></textarea>
            </div>
            
            <!-- Attachment Option -->
            <div class="form-group">
                <label for="attachment">Upload Photo/Attachment (Optional)</label>
                <input type="file" id="attachment" name="attachment" accept="image/*, .pdf">
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>

<?php require "views/footer.php"; ?>

<script src="assets/js/donate.js"></script>
<script src="assets/js/nav.js"></script>
</body>
</html>