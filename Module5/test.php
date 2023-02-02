<!-- dbase.php -->
<!-- To connect between php scripting and database. -->
<?php
session_start();
$usrnme = $_SESSION['username'];

$conn=mysqli_connect('localhost', 'root', '', 'printing');

if(!$conn)
{
    die('Please Check Your Connection'.mysqli_error($conn));
}

// To select one particular database to be used
mysqli_select_db($conn,"printing") or die("Could not open products database");

extract( $_POST );

if (isset($_GET['id'])) {
    $commID = $_GET['id'];
}
$query = " INSERT INTO inventory (InventoryID, InventoryInDate, InventoryOutDate, InventoryQuantity, OutletID, ProductID ) VALUES ('$id', '$inDate', '$outDate', '$quantity', '$outletID', '$productID')";

if (mysqli_query($conn, $query)) {
	echo "<script type='text/javascript'> window.location='inventory.php' </script>";
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}


?>