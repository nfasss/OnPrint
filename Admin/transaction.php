<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPrint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="inc/admin.css">

</head>

<body>
    <div class="main-content">
        <div class="wrapper">
            <h2>Commision Transaction</h2>
            <br><br>
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>From Date</label>
                            <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                                            echo $_GET['from_date'];
                                                                        } ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>To Date</label>
                            <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                            echo $_GET['to_date'];
                                                                        } ?>"class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Filter Date</label> <br>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </div>
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
                    mysqli_select_db($link, "printing") or die(mysqli_error($link));
                    if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                        $from_date = $_GET['from_date'];
                        $to_date = $_GET['to_date'];
                        //SQL query
                        $query = "SELECT * FROM commision WHERE CommisionDate BETWEEN '$from_date' AND '$to_date' "; // DIsplay the Latest Order at First
                    
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
                                <td>RM <?php echo $CommisionTotal; ?>.00</td>

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
                    }
                    ?>

                
                </table>
            </form>

</body>





</div>

</div>
</table>
</body>

</html>
</br><br><br><br><br><br><br><br><br>
<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\footer.php'); ?>