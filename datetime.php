<?php
// Set the default timezone (change as needed, e.g., 'Asia/Kolkata', 'America/New_York', 'UTC')
date_default_timezone_set('Asia/Kolkata');

// Fetch current Date, Time, and Day using PHP's date() function
$current_date = date("d-m-Y");      // Format: DD-MM-YYYY (e.g., 17-11-2026)
$current_time = date("h:i:s A");    // Format: 12-hour with AM/PM (e.g., 11:22:00 AM)
$current_day  = date("l");          // Format: Full day name (e.g., Tuesday)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Date, Time, and Day</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 60px; text-align: center; }
        .card { max-width: 400px; margin: auto; padding: 25px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; }
        p { font-size: 18px; margin: 12px 0; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Current Date, Time &amp; Day</h2>
        <p><strong>Date:</strong> <?php echo $current_date; ?></p>
        <p><strong>Time:</strong> <?php echo $current_time; ?></p>
        <p><strong>Day:</strong> <?php echo $current_day; ?></p>
    </div>
</body>
</html>
