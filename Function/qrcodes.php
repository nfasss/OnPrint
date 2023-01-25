<?php
// Text to be encoded
$text = 'http://localhost/OnPrint/Function/feedback.php';

// Set the size of the QR code
$size = '80x80';

// Generate the QR code
$qr_code = "https://chart.googleapis.com/chart?chs=$size&cht=qr&chl=$text&choe=UTF-8";

// Display the QR code
echo "<img src='$qr_code' alt='QR code'>";

?>