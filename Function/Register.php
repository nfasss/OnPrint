<?php
session_start();
include("database.php");
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

    <div class="container">
        <div class="container_R">
            <span class="title">
                <h2>NEW LOGIN ACCOUNT</h2>
            </span>
        </div>
        <div class="container_L">
            <form class="myForm" action="insertUser_mysql.php" method="post">
                <label for="name">First Name:</label>
                <input type="text" name="UserFirstName" placeholder="Enter First Name"><br>
                <label for="name">Last Name:</label>
                <input type="text" name="UserLastName" placeholder="Enter Last Name"><br>
                <label for="name">Email:</label>
                <input type="text" name="UserEmail" placeholder="Enter Email"><br>
                <label for="name">Phone Number:</label>
                <input type="text" name="UserPhoneNum" placeholder="Enter Phone Number"><br>
                <label for="name">Address:</label>
                <input type="text" name="UserAddress" placeholder="Enter Address"><br>
                <label for="name">State:</label>
                <input type="text" name="UserState" placeholder="Enter State"><br>
                <label for="name">Poscode:</label>
                <input type="text" name="UserPoscode" placeholder="Enter Poscode"><br>
                <label>User Type:</label>
                <select id="UserType" name="UserType">
                    <option value="staff">Staff</option>
                    <option value="student">Student</option>
                    <option value="administrator">Administrator</option>
                </select>
                <br>
                <br>
                <input type="button" class="btn1" value="Clear" style="padding: 10px 50px;">
                <input type="submit" class="btn2" value="Submit" style="padding: 10px 50px;">
            </form>

        </div>
    </div>
    <footer>
        <h4>Unless explicitly stated otherwise, all material is copyright &copy; OnPrint 2022.</h4>
    </footer>

</html>
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
        background-image: url("umplawo.jpg");
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
        /* background-image: url("umplawo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;*/
        padding: 10% 0;
        margin-bottom: 0;
        opacity: 0.5;
    }

    .background-image {
        opacity: 0.1;
    }

    .container {
        width: 80%;
        margin: 0;
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
        padding: 10px;
        margin-left: 100px;

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
        width: 50%;
        margin: 100px;
        margin-top: 10px;
        padding: 20px;
        background-color: white;
    }

    /*.container_L input[type=submit] {
        display: flex;
        background-color: #81bd67;
        color: black;
        padding: 10px 50px;
        border: none;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
        border-radius: 5px;
    }*/

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
        margin-left: 100px;
        background: #5f9ea0;
        border-radius: 5px;
    }

    .btn2 {
        margin-left: 120px;
        background: #5f9ea0;
        border-radius: 5px;
    }
</style>
