<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "project";

$OrderListID = "";
$OrderListAmount = "";
$OrderListTotal = "";
$OrderID = "";
$ProductID = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['OrderListID'];
    $posts[1] = $_POST['OrderListAmount'];
    $posts[2] = $_POST['OrderListTotal'];
    $posts[3] = $_POST['OrderID'];
    $posts[4] = $_POST['ProductID'];
    return $posts;
}

// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `order list`(`OrderListID`,`OrderListAmount`, `OrderListTotal`, `OrderID`, 'ProductID) VALUES ('$data[0]','$data[1]','$data[2]',$data[3])";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM order list WHERE OrderListID = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `order list` SET `OrderListAmount`='$data[1]',`OrderListTotal`='$data[2]',`OrderID`=$data[3], 'ProductID'=$data[4] WHERE `OrderListID` = '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE Html>
<html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>OnPrint.</a></div>
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
	
	<table border=1; >
				
					<tr style="background-color:MediumSeaGreen;">	
						<th>Orderlist ID </th>
                        <th>Order List Amount </th>
                        <th>Order List Total </th>
						<th>Order ID </th>
                        <th>Product ID
						<th> </th>
						<th>Action </th>
					</tr>
				
						<?php
						include 'database1.php';
						$menulistqry="SELECT * from order list where orderlist_status='Enable'";
						$menulistres=mysqli_query($con,$menulistqry);
						while ($menudata=mysqli_fetch_assoc($menulistres)) {
						?>
						<tr style= "background-color:rgba(0,255,0,0.3);">
							<td><?php echo $menudata['OrderListID'];?></td>
							<td><?php echo $menudata['OrderListAmount'];?></td>
							<td><?php echo $menudata['OrderListTotal'];?></td>
							<td><?php echo $menudata['OrderID'];?></td>
                            <td><?php echo $menudata['ProductID'];?></td>
							</tr>
						<?php
						}
						?>
					
				
			</table>
				

					
				
			</table>
            
	<center>
	<h1> Manage Order List</h1>
        <form action="addorderlist.php" method="post">
            <input type="text" name="orderlist_ID" placeholder="Orderlist ID" value="<?php echo $orderlist_ID;?>"><br><br>
            <input type="text" name="order_ID" placeholder="Order ID" value="<?php echo $order_ID;?>"><br><br>
            <input type="number" name="printinglist_ID" placeholder="Printing List" value="<?php echo $printinglist_ID;?>"><br><br>
            <input type="number" name="order_amount" placeholder="Order Amount" value="<?php echo $order_amount;?>"><br><br>
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">

            </div>
			</br></br></br>
	</center>
        </form>
		<div class="footer">
            <p>2022 OnPrint. All Right Reserved.</p>
            
        </div>
    </body>
</html>