<?php
include 'connect.php'
?>



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
                $sql = "Select * from 'commision'";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $comid = $row['CommisionID'];
                        $riderid = $row['Rider_UserID'];
                        $comdate = $row['CommisionDate'];
                        $comtotal = $row['Commision Total'];
                        echo '<tr>
                        <td>'.$comid.' </td>
                        <td>'.$riderid.'</td>
                        <td>'.$comdate.'</td>
                        <td>'.$comtotal.'</td>';

                    }
                }

                ?>
            

        </div>

    </div>
</table> 
</body>
</html>