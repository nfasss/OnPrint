<!DOCTYPE html>

 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../Style/newstyle.css">
</head>

<?php
// to make a connection with database
$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
//Select the database.
mysqli_select_db($link, "project") or die(mysqli_error($link));

//SQL query
$query = "SELECT * FROM product"; // DIsplay the Latest Order at First

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
            <div class="logo"><a href='10'>OnPrint.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Order</a></li>
                    <li><a href="#tutors">Our Profile</a></li>
                    <li><a href="#partners">Contact</a></li>
                    <li><a href="" class="btn-login">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <!-- untuk home -->
        <section class="home-header text-center">
            <div class="container">
            </div>
        </section>
        
        <div class = "button">
            <table>
                <tr>
                <a href="order.php">ORDER</a>
</tr>
                 <tr>
                 <a href="Order List.php">ORDER LIST</a>
</tr>
                <tr>
                <a href="#home">CHECKOUT</a>
</tr>
        </div>

        <div class = "table1">
        <table style = "width:100%">
            <tr>
                <th>Quantity of Copy</th>
                <th>Type of Paper</th>
                <th>Price</th>
            </tr>

            <tr>
                <td>10 Copy</td>
                <td rowspan = "5">80GSM - 110 GSM</td>
                <td>RM 0.80</td>
            </tr>

            <tr>
                <td>20 Copy</td>
                <td>RM 1.50</td>
            </tr>

            <tr>
                <td>30 Copy</td>
                <td>RM 2.40</td>
            </tr>

            <tr>
                <td>40 Copy</td>
                <td>RM 3.50</td>
            </tr>

            <tr>
                <td>50 Copy</td>
                <td>RM 4.50</td>
            </tr>
        </table>

        </div>
    
        <div class = "form">

            <form>
            <h1>Order</h1>
             <label for = "location">SELECT OUTLET</label>
             <select name = "location" id = "location">
             <option value="pekan">Pekan</option>
             <option value="paya besar">Paya Besar</option>
            </select>
            <br><br>
            <input type="file" id="myFile" name="filename">
            <br><br>
            <label for="quantity">Quantity of Copy</label>
            <input type="number" id="quantity" name="quantity">
            <br><br>
            <label for = "paper">Paper Type</label>
             <select name = "paper" id = "paper">
             <option value="80gsm">80 GSM</option>
             <option value="90gsm">90 GSM</option>
             <option value="100gsm">100 GSM</option>
             <option value="110gsm">110 GSM</option>
            </select>
            <br><br>
            <a href = "Order List.php"> <button class="order list">Complete</button>
            </form>
        </div>

        </section>

</div>

    <div id="footer">
        <div class="wrapper">
           <b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022
    </b> 
        </div>
    </div>
    
</body>
</html>