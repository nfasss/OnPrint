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
            <h2>Commision Transaction</h2>
            <br><br>
            <table class="tbl-full">
                <tr>
                    <th>CommisionID</th>
                    <th>RiderID</th>
                    <th>Commision Date</th>
                    <th>Commison Total</th>
                    <th>Actions</th>
                </tr>
                <?php
                //Get all the orders from database
            // to make a connection with database
	            $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
            //Select the database.
                mysqli_select_db($link, "printing")or die(mysqli_error($link)); 

            //SQL query
            $query = "SELECT * FROM commision ORDER BY COMMISIONID DESC"; // DIsplay the Latest Order at First

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
                        $CommisionID = $row['CommisionID'];
                        $Rider_UserID = $row['Rider_UserID'];
                        $CommisionDate = $row['CommisionDate'];
                        $CommisionTotal = $row['CommisionTotal'];


                ?>

                        <tr>
                            <td>#<?php echo $CommisionID; ?> </td>
                            <td><?php echo $Rider_UserID; ?></td>
                            <td><?php echo $CommisionDate; ?></td>
                            <td><?php echo $CommisionTotal; ?></td>

                            <td>
                                <a href="delete_commision.php?id=<?php echo $CommisionID; ?>" class="btn-danger">Delete Commision</a>
                            </td>
                        </tr>

                <?php

                    }
                } else {
                    //Order not Available
                    echo "<tr><td colspan='12' class='error'>Transaction not Available</td></tr>";
                }
                ?>


            </table>

</body>


            
            

        </div>

    </div>
</table> 
</body>
</html>