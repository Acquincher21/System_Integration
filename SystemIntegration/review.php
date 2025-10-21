<?php
session_start();

if (!isset($_SESSION['donation'])) {
    // Redirects user if they haven't started a donation process
    header("Location: donate.php");
    exit;
}

$donation = $_SESSION['donation'];

// Define the attachment status for clean display
$attachment_status = htmlspecialchars($donation['attachment']) ?: 'None (No file uploaded)';

// Format pickup time to include AM/PM
$pickupTimeFormatted = $donation['pickupTime'];
if (!empty($pickupTimeFormatted)) {
    $timeObj = DateTime::createFromFormat('H:i', $pickupTimeFormatted);
    if ($timeObj) {
        $pickupTimeFormatted = $timeObj->format('g:i A'); // e.g., 2:30 PM
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Confirm Donation</title>
    <link rel="stylesheet" href="assets/css/review.css"/> 
</head>
<body>
    
    <div class="page-wrapper">

        <nav class="top_bar6">
            <div class="top_bar_logo6">
                <img src="images/logo.png" alt="Organization Logo" style="height: 120px; width: 120px;">
            </div>
            <div class="myRate6">
                <h1>Review Your Donation</h1>
            </div>
        </nav>

        <main class="container">
            
            <div class="card">
                
                <h2 class="ratetitle">Confirm Your Details</h2>
                <p style="text-align: center; color: var(--color-secondary); margin-top: -10px; margin-bottom: 20px;">
                    Please check the information before submitting.
                </p>

                <div class="detail-group">
                    <h3 class="section-heading">Contact Information</h3>
                    
                    <div class="detail-row">
                        <span class="label">Donor Name:</span>
                        <span class="value"><?= htmlspecialchars($donation['name']) ?></span>
                    </div>
                    
                    <div class="detail-row">
                        <span class="label">Email:</span>
                        <span class="value type-tags"><?= htmlspecialchars($donation['email']) ?></span>
                    </div>
                </div>

                <div class="detail-group">
                    <h3 class="section-heading">Pickup Schedule</h3>
                    
                    <div class="detail-row">
                        <span class="label">Date:</span>
                        <span class="value"><?= htmlspecialchars($donation['pickupDate']) ?></span>
                    </div>
                    
                    <div class="detail-row">
                        <span class="label">Time Slot:</span>
                        <span class="value"><?= htmlspecialchars($pickupTimeFormatted) ?></span>
                    </div>
                </div>

                <div class="detail-group">
                    <h3 class="section-heading">Donation Item Details</h3>
                    
                    <div class="detail-row" style="flex-direction: column; align-items: flex-start; border-bottom: none;">
                        <span class="label" style="margin-bottom: var(--spacing-sm);">Item Description:</span>
                        <p class="value" style="text-align: left; font-weight: 400; color: var(--color-secondary); margin: 0;">
                            <?= nl2br(htmlspecialchars($donation['comment'])) ?>
                        </p>
                    </div>

                    <div class="detail-row">
                        <span class="label">Attachment:</span>
                        <span class="value type-tags"><?= $attachment_status ?></span>
                    </div>
                </div>

                <div class="rate-summary">
                    <a href="donate.php" class="back-link">← Go Back and Edit Details</a>
                    
                    <button type="button" class="button primary-button" onclick="confirmDonation()"> Confirm Details </button>
                </div>

            </div>
            
        </main>
        
        <?php require "views/footer.php"; ?>
        
    </div>

    <script src="assets/js/review.js"></script>
    <script src="assets/js/nav.js"></script>
</body>
</html>