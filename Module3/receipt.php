<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

	<header>
	
		<meta charset="UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="Style/style.css" />
		
		<title>OnPrint Receipt Page</title>
	
	</header>
	
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
						<li><a href="#tutors">Our Profile</a></li>
						<li><a href="#partners">Contact</a></li>
						<li><a href="" class="btn-login">Sign Up</a></li>
							
					</ul>
						
				</div>
					
			</div>
				
		</nav>

		<?php

			$conn = mysqli_connect("localhost", "root", "", "Project") or die(mysqli_error());
	
			$paymentID = $_POST['paymentID'];
			$paymentTotal = $_POST['paymentTotal'];
			$paymentMethod = $_POST['paymentMethod'];
			$userID = $_POST['userID'];
			$orderID = $_POST['orderID'];
			$deliveryAddress = $_POST['deliveryAddress'];
	
			$query = "INSERT INTO Payment(PaymentID, PaymentTotal, PaymentMethod, DeliveryAddress, UserID, OrderID) values('$paymentID', '$paymentTotal', '$paymentMethod', '$deliveryAddress', '$userID', '$orderID')";
	
			$run = mysqli_query($conn, $query) or die(mysqli_error());
	
			if ($run)
			{
		
				echo("<b><br><br>Data Inserted Successfully!<br><br></b>");
		
			}
	
			else
			{
		
				echo "Data Not Inserted!";
		
			}

		?>
		
		<div class="contentleft">
			
			<br><label>Payment ID</label><br><br>
				
			<br><br><label>Payment Total</label><br><br>
				
			<br><br><label>Payment Method</label><br><br>
				
			<br><br><label>User ID</label><br><br>
				
			<br><br><label>Order ID</label><br><br>
			
			<br><br><label>Delivery Address</label><br><br>

			<br><br><label>QR Code</label><br><br>
			
		</div>
			
		<div class="contentmid">
			
			<br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
				
			<br><br><label>:</label><br><br>
			
			<br><br><label>:</label><br><br>

			<br><br><label>:</label><br><br>
			
		</div>
		
		<div class="contentright">
		
			<?php
			
				echo "<br>";
				
				echo $paymentID;
				
				echo "<br><br><br><br>";
						
				echo $paymentTotal;
				
				echo "<br><br><br><br>";
						
				echo $paymentMethod;
				
				echo "<br><br><br><br>";
						
				echo $userID;
				
				echo "<br><br><br><br>";
						
				echo $orderID;
				
				echo "<br><br><br><br>";
						
				echo $deliveryAddress;

				echo "<br><br><br><br>";
			
			?>
			
			<br><br>
			
			<a href="history.php"><input type="submit" class="button" value="View History"></a>
		
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