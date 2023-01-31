<?php
// to make a connection with database
$mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($mysql, "printing") or die(mysqli_error($mysql));

$CommisionID = $_GET['id'];
$query = "DELETE FROM commision WHERE CommisionID='$CommisionID'";

$rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));
    if ($rs) {
        echo "<script type='text/javascript'>
        window.location='transaction.php'
        </script>";
    } else {
        echo "error: " . $query . "<br>" . mysqli_error($mysql);
    }

?>