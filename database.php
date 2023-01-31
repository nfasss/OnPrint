<?php
$link = mysqli_connect("localhost", "root", "", "group2");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

// To establish a connection to database and save in $conn

//$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER);

// If connection failed then dsplay mysql error
//if (mysqli_connect_errno()) {
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
/*

mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS group2") or die(mysqli_connect_error());

mysqli_select_db($conn,"group2") or die(mysqli_error());

mysqli_query($conn,"CREATE TABLE IF NOT EXISTS user (UserID varchar(6), UserPassword varchar(15), UserFirstName varchar(50), UserLastName varchar(50), UserEmail int(50), UserPhoneNum varchar(11), UserAddress varchar(100), UserState int(20), UserPoscode int(5) PRIMARY KEY(UserID))") or die(mysql_error());
*/
?>