<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset="UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="Style/style.css" />
		
		<title>OnPrint Payment Page</title>
	
	</head>
	
	<body>
	
		<nav>
		
			<div class="wrapper">
			
				<div class="logo">
				
					<a href='homepage.php'>OnPrint.</a>
				
				</div>
				
				<div class="menu">
					
					<ul>
						
						<li><a href="homepage.php">Home</a></li>
						<li><a href="history.php">Order</a></li>
						<li><a href="aboutus.php">Our Profile</a></li>
						<li><a href="#partners">Contact</a></li>
						<li><a href="" class="btn-login">Sign Up</a></li>
							
					</ul>
						
				</div>
					
			</div>
				
		</nav>
		
		<form method="post" action="receipt.php">
		
			<div class="contentleft">
			
				<br><label>Payment ID</label><br><br>
				
				<br><br><label>Payment Total</label><br><br>
				
				<br><br><label>Payment Method</label><br><br>
				
				<br><br><label>User ID</label><br><br>
				
				<br><br><label>Order List ID</label><br><br>
				
				<br><br><label>Delivery Address</label><br><br>

				<br><br>
			
			</div>
			
			<div class="contentmid">
			
				<br><label>:</label><br><br>
				
				<br><br><label>:</label><br><br>
				
				<br><br><label>:</label><br><br>
				
				<br><br><label>:</label><br><br>
				
				<br><br><label>:</label><br><br>
				
				<br><br><label>:</label><br><br>
			
			</div>
			
			<div class="contentright">
			
				<input type ="text" name="paymentID" maxlength="10" class="inputbox" placeholder="Please Input Payment ID"><br><br>

				<br>RM

				<?php
				
					$conn = mysqli_connect("localhost", "root", "", "Project") or die(mysqli_error());

					$query = "SELECT * FROM `orderlist` INNER JOIN `order` ON `orderlist`.`OrderListID` = `order`.`OrderListID` WHERE `orderlist`.`OrderListID` = 'OL001'";

					$run = mysqli_query($conn, $query);	

					$row = mysqli_fetch_array($run);

					if (mysqli_num_rows($run) > 0)
					{

						$listData = mysqli_fetch_assoc($run);
					
						echo "$listData[OrderListTotal]";

					}

				?>

				<input type ="hidden" name="paymentTotal" maxlength="10" class="inputbox" value="<?php echo $row['OrderListTotal'];?>"><br><br>

				<br>
				
				<select name="paymentMethod" id="paymentMethod" class="inputbox" style="width: 103%"  value="<?php echo $row['PaymentMethod'];?>">
				
					<option value="Cash">Cash</option>
					<option value="Online">Online Payment</option>
				
				</select>
				
				<br><br>
			
				<input type ="text" name="userID" maxlength="10" class="inputbox" placeholder="Please Input User ID"><br><br>

				<br>
				
				<?php
				
					$conn = mysqli_connect("localhost", "root", "", "Project") or die(mysqli_error());

					$query = "SELECT * FROM `orderlist` INNER JOIN `order` ON `orderlist`.`OrderListID` = `order`.`OrderListID` WHERE `orderlist`.`OrderListID` = 'OL001'";

					$run = mysqli_query($conn, $query);	

					if (mysqli_num_rows($run) > 0)
					{

						$listData = mysqli_fetch_assoc($run);
					
						echo "$listData[OrderListID]";

					}

				?>

				<input type ="hidden" name="orderID" maxlength="10" class="inputbox" value="<?php echo $row['OrderListID'];?>"><br><br><br>
				
				<input type ="text" name="deliveryAddress" maxlength="100" class="inputbox" placeholder="Please Input Delivery Address"><br><br>
				
				*Input UMP If You Want To Self-Pickup
				
				<br><br>
				
				<a href="receipt.php"><input type="submit" class="button" value="Make Payment"></a>
				
			</div>

		</form>

		<div class="contentright">

			<table>
		
				<tr>
			
					<th>Product Name</th>
				
					<th>Product Price (RM)</th>

					<th>Order Amount (RM)</th>
			
				</tr>

				<?php

					$conn = mysqli_connect("localhost", "root", "", "Project") or die(mysqli_error());

					$query = "SELECT * FROM `order` INNER JOIN `product` ON `order`.`ProductID` = `product`.`ProductID` WHERE `order`.`OrderListID` = 'OL001'";

					$run = mysqli_query($conn, $query);
					
					if (mysqli_num_rows($run) > 0)
					{

						while ($listData = mysqli_fetch_assoc($run))
						{

							echo "
			
								<tr>
			
									<td>$listData[ProductName]</td>
									<td>$listData[ProductPrice]</td>
									<td>$listData[OrderAmount]</td>
			
								</tr>
			
							";	
					
						}

					}

				?>
		
			</table>

		</div>
	
	</body>
	
	<footer>
	
		<div id="footer">
		
			<div class="wrapper">
		
				<b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022</b> 
		   
			</div>
		
		</div>
	
	</footer>

</html>

