<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dummydata</title>
    <link rel="stylesheet" href="inc/admin.css">
</head>
<body>
    <form method="post">
        <input type="text" name="status" placeholder="Enter Status">
        <input type="text" name="address" placeholder="Enter Address">
        <button type="submit">Submit</button>

        <?php
                //Get all the orders from database
            // to make a connection with database
	            $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
            //Select the database.
                mysqli_select_db($link, "printing")or die(mysqli_error()); 

                if(isset($_POST['submit'])){
                    $DeliveryStatus=$_POST['DeliveryStatus'];
                    $DeliveryAddress = $_POST['DeliveryAddress'];

                
                } 

                ?>

             




    </form>
</body>
</html>