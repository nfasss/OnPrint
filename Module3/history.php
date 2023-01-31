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
		
		<title>OnPrint History Page</title>
	
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
		
		<br><br><br>

		<form method="post">

			<Label>Seacrh : </Label>

			<input type="text" name="search" placeholder="Enter Payment ID To Search">
			<input type="submit" name="submit" value="SEARCH">

		</form>

		<?php

			$conn = new PDO("mysql:host=localhost;dbname=project",'root','');
			
			if (isset($_POST["submit"]))
			{

				$str = $_POST["search"];
				$sth = $conn->prepare("SELECT * FROM `payment` WHERE PaymentID = '$str'");

				$sth -> setFetchMode(PDO:: FETCH_OBJ);
				$sth -> execute();

				if ($row = $sth->fetch())
				{

					?>

					<br><br><br>

					<table>

						<tr>

							<th>Payment ID : </th>
							<th>Payment Total : </th>
							<th>Payment Method : </th>
							<th>User ID : </th>
							<th>Order ID : </th>
							<th>Delivery Address : </th>

						</tr>

						<tr>

							<td><?php echo $row->PaymentID; ?></td>
							<td><?php echo $row->PaymentTotal; ?></td>
							<td><?php echo $row->PaymentMethod; ?></td>
							<td><?php echo $row->UserID; ?></td>
							<td><?php echo $row->OrderID; ?></td>
							<td><?php echo $row->DeliveryAddress; ?></td>

						</tr>

					</table>

				<?php
				
				}

				else
				{

					echo "Payment ID Does Not Exist";

				}

			}

		?>

		<br><br><br>
		
		<table>
		
			<tr>
			
				<th>Payment ID</th>
				
				<th>Payment Total</th>
				
				<th>Payment Method</th>
				
				<th>UserID</th>
				
				<th>OrderID</th>
				
				<th>Delivery Address</th>
				
				<th>Option</th>
			
			</tr>
			
			<?php
			
				$conn = mysqli_connect("localhost", "root", "", "Project") or die(mysqli_error());
		
				$query = "SELECT * FROM Payment";
		
				$result = $conn->query($query) or die(mysqli_error());
				
				while($row = $result->fetch_assoc())
				{
			
					echo "
			
						<tr>
			
							<td>$row[PaymentID]</td>
							<td>$row[PaymentTotal]</td>
							<td>$row[PaymentMethod]</td>
							<td>$row[UserID]</td>
							<td>$row[OrderID]</td>
							<td>$row[DeliveryAddress]</td>
							
							<td>
							
								<a class='buttonhistory' href='update.php?upt_comm=$row[PaymentID]'>Update</a>
								<a class='buttonhistory' href='delete.php?del_comm=$row[PaymentID]'>Delete</a>
								
							</td>
			
						</tr>
			
					";
			
				}
			
			?>
		
		</table>
		
		<br><br><br>
		
	</body>
	
	<footer>
	
		<div id="footer">
		
			<div class="wrapper">
		
				<b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022</b> 
		   
			</div>
		
		</div>
	
	</footer>

</html>