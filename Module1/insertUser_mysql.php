<?php
session_start();
include("database.php");

// to create a query to be executed in sql
if( empty($_POST['UserPassword'])||
empty($_POST['UserFirstName'])|| 
empty($_POST['UserLastName']) ||
empty($_POST['UserEmail'])|| 
empty($_POST['UserPhoneNum']) ||  
empty($_POST['UserAddress'])||
empty($_POST['UserState'])||
empty($_POST['UserPoscode'])||
empty($_POST['UserType'])

) {}

//value $var = $_POST['']
$password = $_POST['UserPassword'];
$firstname = $_POST['UserFirstName'];
$lastname = $_POST['UserLastName'];
$email = $_POST['UserEmail'];
$phoneNum= $_POST['UserPhoneNum'];
$address = $_POST['UserAddress'];
$state = $_POST['UserState'];
$poscode = $_POST['UserPoscode'];
$type = $_POST['UserType'];
$_SESSION['UserType'] = $_POST['UserType'];
$query = "INSERT INTO user(UserID, UserPassword, UserFirstName, UserLastName, UserEmail, UserPhoneNum, UserAddress, UserState, UserPoscode,UserType) VALUES ('','".$password."','".$firstname."','".$lastname."','".$email."','".$phoneNum."','".$address."','".$state."','".$poscode."','".$type."');"
or die(mysqli_connect_error());
try {
   // to run sql query in database
   $result = mysqli_query($link, $query);

   if ($result) {
      //Check whether the insert was successful or not

      echo ("Data insert");

      //Select * FROM user ORDER BY UserID DESC LIMIT 1; 
      //$_SESSION('userID') = $DataColoumn["UserID"] (looping )
      header("Location: homepage.php");

   } else {
      echo ("Fail");
      /* $sql = "INSERT INTO users(UserFirstName,UserLastName,UserEmail,UserPhoneNum,UserAddress,UserState,UserPoscode,) VALUES('".$_POST['UserFirstName']."','".$_POST['UserLastName']."','".$_POST['UserEmail']."','".$_POST['UserPhoneNum']."','".$_POST['UserAddress']."','".$_POST['UserState']."','".$_POST['UserPoscode']."')";
      mysqli_query($db, $sql);
      */
   }
}catch(Exception $ex){
   echo 'Error Insert ' . $ex->getMessage();
}
?>
