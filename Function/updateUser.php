<?php
include("database.php");

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "", "group2") or die(mysqli_connect_error());
$query = "SELECT * FROM User ";
//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($link, $query);

//Select the database.
mysqli_select_db($link, "group2") or die(mysqli_error($link));

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPrint</title>
    <link rel="stylesheet" href="Style/style.css">
</head>
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
        padding: 50px;
        margin-left: 50px;
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
        width: 40%;
        margin: 100px;
        padding: 20px;
        background-color: white;
        margin-top: 10px;
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
        margin-left: 90px;
        background: #5f9ea0;
        border-radius: 5px;
    }

    .btn2 {
        margin-left: 120px;
        background: #5f9ea0;
        border-radius: 5px;
    }
</style>
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
        <h2>User Info Change</h2>
        <?php
            $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
            mysqli_select_db($link, "group2") or die(mysqli_error($link));
            $UserID = $_GET['UserID'];
            $query = "SELECT * FROM user WHERE UserID='$UserID'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
        
        
            //Detail Availble
            $UserData = mysqli_fetch_assoc($result);
            $UserID = $UserData['UserID'];
            $phoneNum = $UserData['UserPhoneNum'];
            $type = $UserData['UserType'];
            $address = $UserData['UserAddress'];
        
            ?>
        <div class="container_L">
            <form class="myForm"  method="post">
            <tr>  
                    <td>User ID:</td>
                    <td><b><?php echo $UserID; ?></b></td>
                </tr>
                <br><br>
                <tr>
                    <td>Phone Num:</td>
                    <td><b><?php echo $phoneNum; ?></b></td>
                </tr>
                <br><br>
                <tr>
                    <td>User Type:</td>
                    <td>
                        <select name="UserType">
                            <option <?php if ($type == "staff") {
                                        echo "selected";
                                    } ?>value="staff">Staff</option>
                            <option <?php if ($type == "student") {
                                        echo "selected";
                                    } ?>value="student">Student</option>
                            <option <?php if ($type == "administrator") {
                                        echo "selected";
                                    } ?>value="administrator">Administrator</option>

                        </select>
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td>User Address:</td>
                    <td>
                        <input id="ADDRESS" name="UserAddress" value="<?php echo $address; ?>">
                    </td>
                </tr>
                <br><br>
                <input type="submit" name="btn1" value="Update" style="padding: 10px 50px;">
                <input type="submit" name="btn2" value="Back" style="padding: 10px 50px;" onclick=" location.href='Profile_manage.php'">

            </form>
            <?php
            //CHECK Update Button is
            if (isset($_POST['btn1'])) {
                $UserID = $_GET["UserID"];
                $phoneNum = $_POST["UserPhoneNum"];
                $address = $_POST["UserAddress"];
                $type = $_POST["UserType"];
	
                extract($_POST);
                $query = "UPDATE user SET UserPhoneNum = '".$phoneNum."' , UserAddress = '".$address."', UserType = '".$type."' WHERE UserID = '".$UserID."'";

                $result = mysqli_query($link, $query);
                if ($result) {
                    echo '<script> document.getElementById("UserPhoneNum").innerHTML =("'.$phoneNum.'");</script>';
                    echo '<script>document.getElementById("ADDRESS").value ="'. $address.'";</script>';
                    
                } else {
                    echo "Data Not Updated!";
                }
    
            }
            
            ?>
            
        </div>
    </div>

</html>
