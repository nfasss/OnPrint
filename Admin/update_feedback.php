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

    $DeliveryID = $_GET['id'];
    $query = "SELECT * FROM delivery WHERE DeliveryID='$DeliveryID'";
    $rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));


    //Detail Availble
    $row = mysqli_fetch_assoc($rs);
    $DeliveryID = $row['DeliveryID'];
    $ComplaintStatus = $row['ComplaintStatus'];

    ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Delivery</h1>
            <br><br>



            <form action="update_feedback.php" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Delivery ID </td>
                        <td><b>#<?php echo $DeliveryID; ?></b></td>
                    </tr>
                    <tr>
                        <td>Complaint Status</td>
                        <td>
                            <select name="ComplaintStatus">
                                <option <?php if ($ComplaintStatus == "Unread") {
                                            echo "selected";
                                        } ?> value="Unread">Unread</option>
                                <option <?php if ($ComplaintStatus == "Resolved") {
                                            echo "selected";
                                        } ?> value="Resolved">Resolved</option>
                            </select>
                        </td>

                    <tr>
                        <td clospan="2">
                            <input type="hidden" name="id" value="<?php echo $DeliveryID; ?>">
                            <input type="submit" name="submit" value="Update Status" class="btn-secondary">
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
                $ComplaintStatus = $row['ComplaintStatus'];

                extract($_POST);
                $query = "UPDATE delivery SET ComplaintStatus = '$ComplaintStatus'
                 WHERE DeliveryID = '$id'";
                $rs = mysqli_query($mysql, $query) or die(mysqli_error($mysql));

                if ($rs) {
                    echo "<script type='text/javascript'>
                        window.location='manage_feedback.php'
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