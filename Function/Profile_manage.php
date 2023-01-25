<?php
session_start();
include("database.php");
include("userlist_mysql.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPrint</title>
    <link rel="stylesheet" href="Style/style.css">
</head>

<header>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>OnPrint.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="#courses">Order</a></li>
                    <li><a href="Profile_manage.php">Our Profile</a></li>
                    <li><a href="#partners">Contact</a></li>
                    <li><a href="Login.php" class="btn-login">Sign Up</a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
</header>

<body>
<div class="title">
        <h2>User Profile</h2>
    </div>
    <div class="sidebar">
        <h1>Menu</h1>
        <br>
        <ul>
            <li><a href="Profile_manage.php">Display Profile</a></li>
            <br>
            <li><a href="updateUser.php">Manage Profile</a></li>
            <br>
            <li><a href="Report.php">Report</a></li>
            <br>
            <li><a href="homepage.php">Logout</a></li>
        </ul>
    </div>
    
    <div class="container_L">
    
            <form action="#" method="post">
                <table style="width:100%">
                    <tr>
                        <th>User ID</th>
                        <th>UserFirstName</th>
                        <th>UserLastName</th>
                        <th>UserEmail</th>
                        <th>UserPhoneNum</th>
                        <th>UserAddress
                        <th>UserState</th>
                        <th>UserPoscode</th>
                        <th>UserType</th>
                        <th>Action</th>
                    </tr>
                    <?php showUserList() ?>
                </table>
                <br>
                <input type="button" class="btn1" value="Delete" style="padding: 10px 50px;" onclick=" location.href='delete_mysql.php'">
                <input type="button" class="btn2" value="Edit" style="padding: 10px 50px;" onclick=" location.href='update_mysql.php'">

                <br> <br>
                <input type="button" class="btn1" value="Add User" style="padding: 10px 50px;" onclick=" location.href='register.php'">
                <input type="button" class="btn2" value="Save" style="padding: 10px 50px;" </form>
    
    </div>
    <footer>
        <h4>Unless explicitly stated otherwise, all material is copyright &copy; OnPrint 2022.</h4>
    </footer>

</body>
