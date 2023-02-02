<!--kemaskini.php-->
<!--To update data of ubah.php into database.-->
<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "printing");

// To establish a connection to database and save in $conn
$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER, DB_PASSWORD, DB_NAME);

// If connection failed then display mysql error
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
	}


extract ($_POST);
$id = $_GET['id'];

$query = "UPDATE user SET  UserPhoneNum = '$contact', UserAddress = '$address', UserState = '$state', UserPoscode = '$poscode' WHERE UserID = '$id'";


$result = mysqli_query($conn,$query) or die ("Could not execute query in update1.php");
if($result){
	echo "<script type = 'text/javascript'> window.location='user.php' </script>";
}
?>