<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>OnPrint</title>
    <link rel="stylesheet" href="Style/style.css">
    <style>
        .modal-dialog {
            height: 50%;
            width: 50%;
            margin: auto;
        }

        h3 {
            color: black;
        }

        .modal-header {
            color: white;
            background-color: #fff;
        }

        textarea {
            border: none;
            box-shadow: none !important;
            -webkit-appearance: none;
            outline: 0px !important;
        }

        .openmodal {
            margin-left: 35%;
            width: 25%;
            margin-top: 25%;
        }

        .icon1 {
            color: #007bff;

        }

        a {
            margin: auto;
        }

        input {
            color: #007bff;


        }

        .btn-outline-primary {
            color: #ffffff;
            background-color: red;
            border-color: red;
            border-radius: 1px;
        }

        .btn-primary {
            color: #ffffff;
            background-color: #81BD67;
            border-color: #81BD67;
            border-radius: 1px;
        }
    </style>
</head>
<?php
// to make a connection with database
$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
//Select the database.
mysqli_select_db($link, "printing") or die(mysqli_error($link));

//SQL query
$query = "SELECT * FROM orders ORDER BY OrderID DESC"; // DIsplay the Latest Order at First

//Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($link, $query);

$sn = 1; //Create a Serial Number and set its initail value as 1
$count = mysqli_num_rows($rs);

//Close the database connection
mysqli_close($link);

if ($count > 0) {
    //Order Available
    while ($row = mysqli_fetch_assoc($rs)) {
        //Get all the order details
        $OrderID = $row['OrderID'];
        $Feedback = $row['Feedback'];
        $Complaint = $row['Complaint'];
    }
}

?>

<body>

    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>OnPrint.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="http://localhost/OnPrint/Function/homepage.php">Home</a></li>
                    <li><a href="#order">Order</a></li>
                    <li><a href="#profile">Our Profile</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="btn-login">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Modal-->
    <div class="container">

        <!--Modal Content-->
        <div class="modal-content">

            <!-- Modal Header-->
            <div class="modal-header">
                <h3>Service Feedback </h3>

                <!--Close/Cross Button-->
                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div>

            <!-- Modal Body-->
            <div class="modal-body text-center">
                <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                <h3>Your parcel is delivered !</h3>
                <h5>Help us improve our product? <strong>Give us your feedback.</strong></h5>
                <hr>
                <h6>Your Rating</h6>
            </div>

            <!-- Radio Buttons for Rating-->
            <div class="form-check mb-4">
                <?php if ($Feedback == "Very Good") {
                    echo "selected"; }?><input name='option' type='radio' value='Very Good'>
                
                <label class="ml-3">Very good</label>
            </div>
            <div class="form-check mb-4">
            <?php if ($Feedback == "Good") {
                echo "selected"; }?> <input name='option' type='radio' value='Good'>
                <label class="ml-3">Good</label>
            </div>
            <div class="form-check mb-4">
            <?php if ($Feedback == "Bad") {
                echo "selected"; }?><input name='option' type='radio' value='Bad'>
           
                <label class="ml-3">Bad</label>
            </div>
            <div class="form-check mb-4">
            <?php if ($Feedback == "Very Bad") {
                echo "selected"; }?><input name='option' type='radio' value='Bad'>
           
                <label class="ml-3">Very Bad</label>
            </div>

            <!--Text Message-->
            <div class="text-center">
                <h4>Any complain?</h4>
            </div>
            <?php echo "<textarea type='textarea' placeholder='   Write Your Message Here' rows='3'></textarea>"?>


            <!-- Modal Footer-->
            <div class="modal-footer">
                <a href="" class="btn btn-primary">Send
                </a>
                <a href="http://localhost/OnPrint/Function/orderstatus.php" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a>
            </div>

        </div>

    </div>

    </div>
    <div id="footer">
        <div class="wrapper">
            <b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022
            </b>
        </div>
    </div>
</body>

</html>