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
include 'D:\Xampp\htdocs\Donation\DonationWebsite\Admin\inc\header.php';

($mysql = mysqli_connect('localhost', 'root', '', 'donationwebsite')) or
    die(mysqli_connect_error());

$DonationID = $_GET['id'];
$query = 'SELECT * FROM donation WHERE DonationID=?';
$stmt = mysqli_prepare($mysql, $query);
mysqli_stmt_bind_param($stmt, 's', $DonationID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);
$date = $row['date'];
$name = $row['name'];
$age = $row['age'];
$contact = $row['contact'];
$address = $row['address'];

if (isset($_POST['submit'])) {
    extract($_POST);
    $query =
        'UPDATE donation SET name=?, age=?, contact=?, address=? WHERE DonationID=?';
    $stmt = mysqli_prepare($mysql, $query);
    mysqli_stmt_bind_param(
        $stmt,
        'sssss',
        $name,
        $age,
        $contact,
        $address,
        $id
    );
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header('Location: manage_donation.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_stmt_error($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation System</title>
    <link rel="stylesheet" href="inc/admin.css">
</head>
<body>
    <div class="main-content">
        <div class="wrapper">
            <h1>Update Donation</h1>
            <br><br>
            <form action="update_donation.php" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Donation ID</td>
                        <td><b>#<?php echo $DonationID; ?></b></td>
                    </tr>
                    <tr>
                        <td>Donation Date</td>
                        <td><b><?php echo $date; ?></b></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><textarea name="name" cols="100" rows="4"><?php echo $name; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Age

</td>
                        <td><input type="number" name="age" value="<?php echo $age; ?>"></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="text" name="contact" value="<?php echo $contact; ?>"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea name="address" cols="100" rows="4"><?php echo $address; ?></textarea></td>
                    </tr>
                </table>
                <br>
                <input type="hidden" name="id" value="<?php echo $DonationID; ?>">
                <input type="submit" name="submit" value="Update Donation">
            </form>
        </div>
    </div>
</body>
</html>


</html>
</br><br><br><br><br><br><br><br><br>
<?php include('D:\Xampp\htdocs\OnPrint\Admin\inc\footer.php'); ?>