<?php 

    // to make a connection with database
    $mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($mysql, "donationwebsite") or die(mysqli_error($mysql));

    // 1. get the ID of Delivery to be deleted
    $DeliveryID = $_GET['id'];

    //2. Create SQL Query to Delete Delivery
    $query = "DELETE FROM delivery WHERE DeliveryID='$DeliveryID'";

    //Execute the Query
    $rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));
    if ($rs) {
        echo "<script type='text/javascript'>
        window.location='manage_delivery.php'
        </script>";
    } else {
        echo "error: " . $query . "<br>" . mysqli_error($mysql);
    }

?>