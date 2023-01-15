<?php
$mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($mysql, "printing") or die(mysqli_error($mysql));
//CHeck whether id is set or not
extract($_POST);
$query = "UPDATE delivery SET DeliveryAddress = '$DeliveryAddress' WHERE DeliveryID = '$id'";
$rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));

if ($rs) {
    echo "<script type='text/javascript'>
    window.location='manage_delivery.php'
    </script>";
} else {
    echo "error: " . $query . "<br>" . mysqli_error($mysql);
}
