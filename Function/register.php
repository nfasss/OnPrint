<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPrint</title>
    <link rel="stylesheet" href="Style/register style.css">
</head>

<header>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>OnPrint.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="#courses">Order</a></li>
                    <li><a href="#tutors">Our Profile</a></li>
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
            <form class="myForm" action="login.php" method="post">
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
