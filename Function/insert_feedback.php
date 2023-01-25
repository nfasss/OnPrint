<?php 

    // to make a connection with database
    $mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($mysql, "printing") or die(mysqli_error($mysql));

    // 1. get the ID of Delivery to be deleted
    //echo "Clicked";
    //Get All the Values from For
    
    $Feedback = $_GET['Feedback'];
    $Complaint = $_GET['Complaint'];
    $ComplaintStatus = $_GET['ComplaintStatus'];


    //2. Create SQL Query to Delete Delivery
    $query = "INSERT INTO delivery ( Feedback, Complaint,ComplaintStatus) VALUES ('$Feedback','$Complaint','$ComplaintStatus')";

    //Execute the Query
    $rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));
    if ($rs) {
        echo "<script type='text/javascript'>
        window.location='feedback.php'
        </script>";
    } else {
        echo "error: " . $query . "<br>" . mysqli_error($mysql);
    }
?>