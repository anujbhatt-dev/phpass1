<?php
date_default_timezone_set('Asia/Kolkata');
$hour = date('H'); // Get the current hour in 24-hour format
echo "Current hour is: " . $hour."<br>";
if ($hour >= 5 && $hour < 12) {
    echo "Good morning!";
} elseif ($hour >= 12 && $hour < 18) {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}
?>
