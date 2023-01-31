<?php
include("database.php");
//Connect to the database server.
$link = mysqli_connect("localhost", "root","", "group2") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "group2") or die(mysqli_error($link));

//GET the ID of User to be deleted
$UserID = $_POST['UserID'];

//The SQL statement that deletes the record
$query = "DELETE FROM user WHERE UserID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
if ($result) {
    echo "<script type='text/javascript'>
    window.location='Profile_manage.php'
    </script>";
} else {
    echo "error: " . $query . "<br>" . mysqli_error($link);
}

?>
 