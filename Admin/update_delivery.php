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
    <?php
    $mysql = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($mysql, "printing") or die(mysqli_error($mysql));
    //CHeck whether id is set or not

    $DeliveryID = $_GET['id'];
    $query = "SELECT * FROM delivery WHERE DeliveryID='$DeliveryID'";
    $rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));


    //Get all other details based on this id
    //SQL Query to get the delivery details

    //Execute Query
    //Count Rows

    //Detail Availble
    $row = mysqli_fetch_assoc($rs);
    $DeliveryDate = $row['DeliveryDate'];
    $DeliveryAddress = $row['DeliveryAddress'];
    $DeliveryStatus = $row['DeliveryStatus'];


    ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Delivery</h1>
            <br><br>



            <form action="update_delivery.php" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Delivery ID </td>
                        <td><b>#<?php echo $DeliveryID; ?></b></td>
                    </tr>
                    <tr>
                        <td>Delivery Date </td>
                        <td><b> <?php echo $DeliveryDate; ?> </b></td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="DeliveryStatus">
                                <option <?php if ($DeliveryStatus == "Ordered") {
                                            echo "selected";
                                        } ?> value="Ordered">Ordered</option>
                                <option <?php if ($DeliveryStatus == "Picked up") {
                                            echo "selected";
                                        } ?> value="Picked up">Picked up</option>
                                <option <?php if ($DeliveryStatus == "On delivery") {
                                            echo "selected";
                                        } ?> value="On delivery">On delivery</option>
                                <option <?php if ($DeliveryStatus == "Delivered") {
                                            echo "selected";
                                        } ?> value="Delivered">Delivered</option>
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
            if (isset($_POST['submit'])) {
                //echo "Clicked";
                //Get All the Values from Form
                $DeliveryID = $row['DeliveryID'];
                $DeliveryDate = $row['DeliveryDate'];
                $DeliveryAddress = $row['DeliveryAddress'];
                $DeliveryStatus = $row['DeliveryStatus'];

                extract($_POST);
                $query = "UPDATE delivery SET DeliveryAddress = '$DeliveryAddress',
                 DeliveryStatus = '$DeliveryStatus'
                 WHERE DeliveryID = '$id'";
                $rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));

                if ($rs) {
                    echo "<script type='text/javascript'>
                        window.location='manage_delivery.php'
                         </script>";
                } else {
                    echo "error: " . $query . "<br>" . mysqli_error($mysql);
                }
            }
            ?>


        </div>
    </div>
</body>

</html>
</br><br><br><br><br><br><br><br><br>
<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\footer.php'); ?>