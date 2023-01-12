<?php 

    // to make a connection with database
    $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
    //Select the database.
    mysqli_select_db($link, "printing")or die(mysqli_error()); 


    // 1. get the ID of Delivery to be deleted
    $DeliveryID = $_GET['$DeliveryID'];

    //2. Create SQL Query to Delete Delivery
    $sql = "DELETE FROM delivery WHERE DeliveryID=$DeliveryID";

    //Execute the Query
    $rs = mysqli_query($link, $sql);
    //Close the database connection
    mysqli_close($link);
    // Check whether the query executed successfully or not
    if($rs==true)
    {
        //Query Executed Successully and Delivery Deleted
        //echo "Delivery Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "<div class='success'>Delivery Deleted Successfully.</div>";
        //Redirect to ManageDelivery Page
        header('location:'.$SITEURL.'Admin/manage_delivery.php');
    }
    else
    {
        //Failed to Delete Delivery
        //echo "Failed to Delete Delivery";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Delivery. Try Again Later.</div>";
        header('location:'.$SITEURL.'Admin/manage_delivery.php');
    }

    //3. Redirect to Manage Delivery. page with message (success/error)

?>