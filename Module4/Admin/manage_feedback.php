<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPrint</title>
    <link rel="stylesheet" href="inc/admin.css">
</head>

<body>
    <div class="main-content">
        <div class="wrapper">
            <h2>Feedback Report</h2>
            <br><br>
            <table class="tbl-full">
                <tr>
                    <th>DeliveryID</th>
                    <th>RiderID</th>
                    <th>Rating</th>
                    <th>Feedback</th>
                    <th>Complaint Status</th>
                    <th>Actions</th>
                </tr>
                <?php
                //Get all the orders from database
                // to make a connection with database
                $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
                //Select the database.
                mysqli_select_db($link, "printing") or die(mysqli_error($link));

                //SQL query
                $query = "SELECT * FROM delivery ORDER BY DELIVERYID DESC"; // DIsplay the Latest Order at First

                //Execute the query (the recordset $rs contains the result)
                $rs = mysqli_query($link, $query);

                $sn = 1; //Create a Serial Number and set its initail value as 1
                $count = mysqli_num_rows($rs);

                //Close the database connection
                mysqli_close($link);

                if ($count > 0) {
                    //Order Available
                    while ($row = mysqli_fetch_assoc($rs)) {
                        //Get all the order details
                        $DeliveryID = $row['DeliveryID'];
                        $Rider_UserID = $row['Rider_UserID'];
                        $Feedback = $row['Feedback'];
                        $Complaint = $row['Complaint'];
                        $ComplaintStatus = $row['ComplaintStatus'];

                ?>

                        <tr>
                            <td>#<?php echo $DeliveryID ; ?> </td>
                            <td>#<?php echo $Rider_UserID; ?></td>
                            <td><?php echo $Feedback; ?></td>
                            <td><?php echo $Complaint; ?></td>
                            <td>
                                <a>
                                <?php
                                if ($ComplaintStatus == "Unread") {
                                    echo "<label style='color: red;'>$ComplaintStatus</label>";
                                } elseif ($ComplaintStatus == "Resolved") {
                                    echo "<label style='color: green;'>$ComplaintStatus</label>";
                                } 
                                ?>
                            </a>
                            </td>
                            <td>
                            <a href="update_feedback.php?id=<?php echo $DeliveryID; ?>"  class="btn-secondary">Update Status</a>
                            </td>
                        </tr>

                <?php

                    }
                } else {
                    //Order not Available
                    echo "<tr><td colspan='12' class='error'>Feedback not Available</td></tr>";
                }
                ?>

</div>

</div>

</table>
</body>

</html>
</br><br><br><br><br><br><br><br><br>
<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\footer.php'); ?>