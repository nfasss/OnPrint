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
        <h1>Update Delivery</h1>
        <br><br>


        <?php 
        // to make a connection with database
            $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
        //Select the database.
            mysqli_select_db($link, "printing")or die(mysqli_error()); 

            //CHeck whether id is set or not
            if (isset($_GET['DeliveryID'])) {
            //GEt the Delivery Details
            $DeliveryID = $_GET['DeliveryID'];

            //Get all other details based on this id
            //SQL Query to get the delivery details
            $strSQL = "SELECT * FROM delivery ORDER BY DeliveryID='$DeliveryID'  DESC";
            //Execute Query
            $rs = mysqli_query($link, $strSQL);
            //Count Rows
            $count = mysqli_num_rows($rs);

            mysqli_close($link);

            if ($count == 1) {
                //Detail Availble
                $row = mysqli_fetch_assoc($rs);

                $DeliveryID = $row['DeliveryID'];
                $DeliveryDate = $row['DeliveryDate'];
                $DeliveryAddress = $row['DeliveryAddress'];
                $DeliveryStatus = $row['DeliveryStatus'];
            }
        }
        ?>

        <form action="" method="POST">
        
            <table class="tbl-30">
                <tr>
                    <td>Delivery ID </td>
                    <td><b> <?php echo $DeliveryID; ?>. </b></td>
                </tr>
                <tr>
                    <td>Delivery Date </td>
                    <td><b> <?php echo $DeliveryDate; ?> </b></td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="DeliveryStatus">
                            <option <?php if($DeliveryStatus=="Ordered"){echo "selected";} ?> value="Ordered">Ordered</option>
                            <option <?php if($DeliveryStatus=="On Delivery"){echo "selected";} ?> value="On Delivery">On Delivery</option>
                            <option <?php if($DeliveryStatus=="Delivered"){echo "selected";} ?> value="Delivered">Delivered</option>
                            <option <?php if($DeliveryStatus=="Cancelled"){echo "selected";} ?> value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Customer Address: </td>
                    <td>
                        <textarea name="DeliveryAddress" cols="100" rows="4"><?php echo $DeliveryAddress; ?></textarea>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="<?php echo $DeliveryID; ?>">
                        <input type="submit" name="submit" value="Update Delivery" class="btn-secondary">
                    </td>
                </tr>
            </table>
        
        </form>


        <?php 
            //CHeck whether Update Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //Get All the Values from Form
                $DeliveryID = $row['DeliveryID'];
                $DeliveryDate = $row['DeliveryDate'];
                $DeliveryAddress = $row['DeliveryAddress'];
                $DeliveryStatus = $row['DeliveryStatus'];


                $Deliverystatus = $_POST['Deliverystatus'];

                //Update the Values
                $sql2 = "UPDATE delivery SET 
                    DeliveryStatus = '$Deliverystatus',
                    DeliveryAddress = '$DeliveryAddress'
                    WHERE DeliveryID=$DeliveryID
                ";

                //Execute the Query
                $rs2 = mysqli_query($link, $strSQL);
            }

        ?>


    </div>
</div>
</body>

</html>
</br><br><br><br><br><br><br><br><br>
<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\footer.php'); ?>