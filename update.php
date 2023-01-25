<!DOCTYPE html>

<html lang="en">

	<header>
	
		<meta charset="UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="style2.css" />
		
		<title>OnPrint Update Payment Page</title>
	
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
		
		<form method="POST" action="updatedb.php">
		
			<?php
		
				$conn = mysqli_connect("localhost", "root", "", "Project");
			
				$query = "SELECT * FROM `Payment` WHERE `PaymentID` = '$_GET[upt_comm]'";
			
				$result = mysqli_query($conn, $query); 
				
				$row = mysqli_fetch_array($result);
				
			?>
			
			<div class="contentleft">
			
				<br><label>Payment ID</label><br><br>
				
				<br><br><label>Payment Total</label><br><br>
				
				<br><br><label>Payment Method</label><br><br>
				
				<br><br><label>User ID</label><br><br>
				
				<br><br><label>Order ID</label><br><br>
				
				<br><br><label>Delivery Address</label><br><br>
			
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
			
				<input type ="text" name="paymentID" maxlength="10" class="inputbox" value="<?php echo $row['PaymentID'];?>" disabled><br><br>
			
				<input type ="text" name="paymentTotal" maxlength="50" class="inputbox" value="<?php echo $row['PaymentTotal'];?>" placeholder="Please Input Payment Total"><br><br>
			
				<select name="paymentMethod" id="paymentMethod" class="inputbox" style="width: 103%"  value="<?php echo $row['PaymentMethod'];?>">
				
					<option value="Cash">Cash</option>
					<option value="Online">Online Payment</option>
				
				</select>
				
				<br><br>
			
				<input type ="text" name="userID" maxlength="10" class="inputbox" value="<?php echo $row['UserID'];?>" disabled><br><br>
			
				<input type ="text" name="orderID" maxlength="10" class="inputbox" value="<?php echo $row['OrderID'];?>" disabled><br><br>
				
				<input type ="text" name="deliveryAddress" maxlength="100" class="inputbox" value="<?php echo $row['DeliveryAddress'];?>" placeholder="Please Input Delivery Address"><br><br>
				
				*Input UMP If You Want To Self-Pickup
				
				<br><br>
				
				<a href="updatedb.php?paymentID=<?php echo $row["PaymentID"] ?>"><input type="submit" class="button" value="Update"></a>
				
			</div>
		
		</form>
		
	</body>
	
	<footer>
	
		<div id="footer">
		
			<div class="wrapper">
		
				<b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022</b> 
		   
			</div>
		
		</div>
	
	</footer>

</html>