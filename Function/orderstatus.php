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
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            background-color: #023579;
            font-family: 'Open Sans', serif
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #81BD67
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #81BD67;
            border-color: #81BD67;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #C0D4B8;
            border-color: #C0D4B8;
            border-radius: 1px
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
                    <li><a href="orderstatus.php">Track Order</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="btn-login">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <article class="card">
            <header class="card-header"> Order Status</header>
            <div class="card-body">
                <h6>Order ID: <?php echo $OrderID ?></h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>30 minutes </div>
                        <?php
                        // to make a connection with database
                        $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
                        //Select the database.
                        mysqli_select_db($link, "printing") or die(mysqli_error($link));

                        //SQL query
                        $query = "SELECT * FROM delivery ORDER BY DeliveryID DESC"; // DIsplay the Latest Order at First

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
                                $DeliveryID = $row['DeliveryID'];
                                $DeliveryStatus = $row['DeliveryStatus'];
                                $DeliveryAddress = $row['DeliveryAddress'];
                            }
                        }
                        ?>
                        <div class="col"> <strong>Status:</strong> <br> <?php echo $DeliveryStatus ?></div>
                        <div class="col"> <strong>DeliveryID: </strong> <br>#<?php echo $DeliveryID ?> </div>
                        <div class="col"> <strong>Delivery Address: </strong> <br><?php echo $DeliveryAddress ?> </div>
                    </div>
                </article>
                <div class="track">

                    <?php
                    // Ordered, On Delivery, Delivered, Cancelled
                    if ($DeliveryStatus == "Ordered") {
                        echo '
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Ordered</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked up</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On delivery </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Delivered</span> </div>';
                    } elseif ($DeliveryStatus == "Picked up") {
                        echo '
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Ordered</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked up</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On delivery </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Delivered</span> </div>';
                    } elseif ($DeliveryStatus == "On delivery") {
                        echo '
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Ordered</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked up</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On delivery </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Delivered</span> </div>';
                    } elseif ($DeliveryStatus == "Delivered") {
                        echo '
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Ordered</span> </div>
                        <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked up</span> </div>
                        <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On delivery </span> </div>
                        <div class="step active"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Delivered</span> </div>';
                    } else {
                        echo 'No order created ';
                    }
                    ?>
                </div>
                <hr>
                <div class="container">
                    <b>Total Payment </b>
                    <br>
                    <b>Please scan this QR code to give feedback!</b>
                    <br>
                    <img src="..\Asset\chart.png">
                </div>
                <hr>
                <a href="order.php?id=<?php echo $OrderID; ?>" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
                <a href="feedback.php?id=<?php echo $OrderID; ?>" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-right"></i> Next</a>
            </div>
        </article>
    </div>
    <div id="footer">
        <div class="wrapper">
            <b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022
            </b>
        </div>
    </div>
</body>

</html>