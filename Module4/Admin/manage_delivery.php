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

            <h2>Manage Delivery</h2>
            <br>
            <form action="manage_delivery.php" method="get">
                <div class="input-group">
                    <input type="search" class="form-control rounded" name="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">search</button>
                </div>
            </form>
            <?php
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = $_GET['search'];
                $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
                //Select the database.
                mysqli_select_db($link, "printing") or die(mysqli_error($link));

                $query = "SELECT * FROM delivery WHERE DeliveryAddress LIKE '%$search%'";
                $result = mysqli_query($link, $query);
            ?>
            <br>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['DeliveryAddress']; ?></h5>
                            <p class="card-text"><?php echo $row['DeliveryID']; ?></p>
                        </div>
                    </div>
            <?php }
            } else {
                echo "No parameter";
            }
            ?>




            <?php
            if (isset($_SESSION['update'])) {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            ?>
            <br><br>

            <table class="tbl-full">
                <tr>
                    <th>DeliveryID</th>
                    <th>Order Date</th>
                    <th>Delivery Address</th>
                    <th>Delivery Status</th>
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
                        $DeliveryDate = $row['DeliveryDate'];
                        $DeliveryAddress = $row['DeliveryAddress'];
                        $DeliveryStatus = $row['DeliveryStatus'];


                ?>

                        <tr>
                            <td>#<?php echo $DeliveryID; ?> </td>
                            <td><?php echo $DeliveryDate; ?></td>
                            <td><?php echo $DeliveryAddress; ?></td>


                            <td>
                                <?php
                                // Ordered, On Delivery, Delivered, Cancelled
                                if ($DeliveryStatus == "Ordered") {
                                    echo "<label>$DeliveryStatus</label>";
                                } elseif ($DeliveryStatus == "Picked up") {
                                    echo "<label style='color: orange;'>$DeliveryStatus</label>";
                                } elseif ($DeliveryStatus == "On delivery") {
                                    echo "<label style='color: green;'>$DeliveryStatus</label>";
                                } elseif ($DeliveryStatus == "Delivered") {
                                    echo "<label style='color: red;'>$DeliveryStatus</label>";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="update_delivery.php?id=<?php echo $DeliveryID; ?>" class="btn-secondary">Edit Delivery Details</a>
                                <a href="delete_delivery.php?id=<?php echo $DeliveryID; ?>" class="btn-danger">Delete Delivery</a>
                            </td>
                        </tr>

                <?php

                    }
                } else {
                    //Order not Available
                    echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                }
                ?>


            </table>

</body>

</html>