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
    <div class="title">
        <h2>LOGIN</h2>
    </div>

    <div id="login">
        <form class="container_L" action="" method="post">
            <label>User ID:</label><input type="text" name="UserID" placeholder="Enter User ID"><br>
            <label>Password:</label><input type="password" name="UserPassword" placeholder="Enter password"><br>
            <label>User Type:</label>
            <select id="UserType" name="UserType">
                <option value="staff">Staff</option>
                <option value="student">Student</option>
                <option value="administrator">Administrator</option>
            </select>
            <br><br>
            <input type="button" class="btn1" value="Login" style="padding: 10px 50px;" onclick=" location.href='homepage.php'">
            <input type="button" class="btn2" value="Register" style="padding: 10px 50px;" onclick=" location.href='Register.php'">
        </form>
    </div>


    <?php
    //database post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        //$_SESSION("userID") == $_POST("UserID")
        header("Location: Login.php");
    }


    ?>
    <footer>
        <h4>Unless explicitly stated otherwise, all material is copyright &copy; OnPrint 2022.</h4>
    </footer>
</body>

</html>
