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
            <h2>Dashboard</h2>
            <br><br>
            <div class="col-4 text-center">

                <?php
                // to make a connection with database
                $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
                //Select the database.
                mysqli_select_db($link, "printing") or die(mysqli_error($link));
                //Sql Query 
                $query = "SELECT * FROM delivery";
                //Execute Query
                $rs = mysqli_query($link, $query);
                //Count Rows
                $count = mysqli_num_rows($rs);
                ?>

                <h1><?php echo $count; ?></h1>
                <br />
                Total Delivery
            </div>
            <div class="col-4 text-center">

                <?php
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
                //Select the database.
                mysqli_select_db($link, "printing") or die(mysqli_error($link));

                $query = "SELECT SUM(CommisionTotal) AS Total FROM commision";

                //Execute the Query
                $rs = mysqli_query($link, $query);
                //Get the VAlue
                $row = mysqli_fetch_assoc($rs);
                $sum = $row['Total'];

                ?>

                <h1>RM<?php echo $sum; ?></h1>
                <br />
                Total Commision
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</body>


</html>