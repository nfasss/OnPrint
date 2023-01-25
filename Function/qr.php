<?php
require_once 'orderstatus.php';

// Text to be encoded
$text = 'localhost\OnPrint\Function\feedback.php';

// File name for the QR code
$filename = 'qr_code.png';

// Error correction level (L, M, Q, H)
$level = 'L';

// Image size (1-10)
$size = 10;

// Generate the QR code
QRcode::png($text, $filename, $level, $size);

?>
<!DOCTYPE html>
<html>
<head>
    <title>QR Code Page</title>
</head>
<body>
    <h1>QR Code Page</h1>
    <p>This is the QR code page, where you can generate the QR code</p>

    <a href="<?php echo $text ?>">
        <img src="<?php echo $filename ?>" alt="QR code">
    </a>
</body>
</html>
