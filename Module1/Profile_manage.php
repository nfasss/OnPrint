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
                        <td>Status</td>
                        <td>
                            <select name="UserType">
                                <option <?php if ($UserType == "Staff") {
                                            echo "selected";
                                        } ?> value="staff">Student</option>
                               <option <?php if ($UserType == "Student") {
                                            echo "selected";
                                        } ?> value="student">Administrator</option>
                                <option <?php if ($UserType == "Administrator") {
                                            echo "selected";
                                        } ?> value="administrator">Staff</option>
                            </select>
                        </td>
                    </tr>
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
            <!-- <br>
            <input type="button" class="btn1" value="Delete" style="padding: 10px 50px;" onclick=" location.href='delete_mysql.php'">
            <input type="button" class="btn2" value="Edit" style="padding: 10px 50px;" onclick=" location.href='update_mysql.php'">
-->
            <br> <br>
            <input type="button" class="btn1" value="Add User" style="padding: 10px 50px;" onclick=" location.href='register.php'">
            <input type="button" class="btn2" value="Save" style="padding: 10px 50px;" </form>

    </div>
    <footer>
        <h4>Unless explicitly stated otherwise, all material is copyright &copy; OnPrint 2022.</h4>
    </footer>

</body>
<style>
    * {
        text-decoration: none;
        margin: 0px;
        padding: 0px;
    }

    body {
        padding: 0px;
        font-family: 'Open Sans', sans-serif;
        background-color: #023579;

        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

    }

    .header {
        width: 100%;
        background: rgba(0, 173, 180, 1);
        color: black;
        left: 0px;
        bottom: 0;
        text-align: center;
        margin: auto;
        position: fixed;
        padding: 30px 0px 30px 0px;
    }

    .home-header {
        padding: 10% 0;
        margin-bottom: 0;
        opacity: 0.5;
    }

    .background-image {
        opacity: 0.1;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 1%;
    }

    .wrapper {
        width: 1100px;
        margin: auto;
        position: relative;
    }

    .logo a {
        font-size: 50px;
        font-weight: 800;
        float: left;
        font-family: serif;
        color: #364f6b;
    }

    .menu {
        float: right;
    }

    nav {
        width: 100%;
        margin: 0;
        display: flex;
        line-height: 80px;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        background: #FFDE59;
        z-index: 1;
        border-bottom: 1px solid #364f6b;

    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav ul li {
        float: left;
    }

    nav ul li a {
        color: black;
        font-weight: bold;
        text-align: center;
        padding: 0px 16px 0px 16px;
        text-decoration: none;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }

    section {
        margin: auto;
        display: flex;
        margin-bottom: 50px;
    }

    h2 {
        font-family: 'comic sans ms';
        font-weight: 800;
        font-size: 45px;
        color: #364f6b;
        width: 100%;
        line-height: 50px;
        padding: 50px;
        margin-left: 50px;
        margin-top: 0px;
    }

    a.btn-login {
        background: #3f72af;
        border-radius: 20px;
        margin-top: 20px;
        padding: 15px 20px 15px 20px;
        color: #FFFFFF;
        cursor: pointer;
        font-weight: bold;
    }

    a.btn-login:hover {
        background: #fc5185;
        text-decoration: none;
    }

    a.tbl-pink {
        background: #fc5185;
        border-radius: 20px;
        margin-top: 20px;
        padding: 15px 20px 15px 20px;
        color: #FFFFFF;
        cursor: pointer;
        font-weight: bold;
    }

    a.tbl-pink:hover {
        background: #3f72af;
        text-decoration: none;
    }

    p {
        margin: 10px 0px 10px 0px;
        padding: 10px 0px 10px 0px;
    }

    footer {
        width: 100%;
        background: rgba(0, 173, 180, 1);
        color: black;
        left: 0px;
        bottom: 0;
        text-align: center;
        margin: auto;
        position: fixed;
        padding: 30px 0px 30px 0px;
    }

    @media screen and (max-width: 991.98px) {
        .wrapper {
            width: 90%;
        }

        .logo a {
            display: block;
            width: 100%;
            text-align: center;
        }

        nav .menu {
            width: 100%;
            margin: 0;
        }

        nav .menu ul {
            text-align: center;
            margin: auto;
            line-height: 60px;
        }

        nav .menu ul li {
            display: inline-block;
            float: none;
        }

        section {
            display: block;
        }

        section img {
            display: block;
            width: 100%;
            height: auto;
        }

        .menu-list {
            width: 50%;
        }

    }

    .container_L {
        width: 80%;
        margin: 200px;
        padding: 20px;
        background-color: white;
        margin-top: 10px;
        height: 500px;


    }

    input[type=text],
    input[type=password] {
        width: 95%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #D9D9D9;
        border-radius: 5px;
    }

    .btn1 {
        margin-left: 80px;
        background: #5f9ea0;
        border-radius: 5px;
    }

    .btn2 {
        margin-left: 120px;
        background: #5f9ea0;
        border-radius: 5px;
    }

    .table,
    th,
    td {
        border: 1px solid black;
        line-height: 32px;
        vertical-align: top;
        border-bottom: 1px solid black;

    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        border: 1px solid black;
        width: 50%;
    }


    td {
        border: 1px solid blue;
        border-collapse: collapse;
        text-align: center;
        padding: 2px;
        background-color: white;
    }

    th {
        border: 1px solid black;
        text-align: center;
        padding: 4px;
        background: #D9D9D9;
        color: black;
    }

    .sidebar {
        margin-top: -22px;
        background-color: white;
        height: 50%;
        width: 150px;
        text-align: center;
        font-size: 16px;
    }
</style>