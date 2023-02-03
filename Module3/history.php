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

		<?php

			$conn = mysqli_connect("localhost", "root", "", "Project");

			$query = "SELECT PaymentMethod, COUNT(*) FROM Payment GROUP BY PaymentMethod ORDER BY COUNT(*) ASC";

			$result = mysqli_query($conn, $query);

		?>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    	
		<script type="text/javascript">
    
			google.charts.load('current', {'packages':['bar']});
    		google.charts.setOnLoadCallback(drawChart);

			function drawChart()
			{

				var data = google.visualization.arrayToDataTable
				(

					[

						['PaymentMethod', 'Total'],

						<?php

							if (mysqli_num_rows($result) > 0)
							{

								while ($row = mysqli_fetch_array($result))
								{

								echo "['" . $row['PaymentMethod'] . "','" . $row['COUNT(*)'] . "'],";

								}

							}

						?>

					]

				);

				var options =
				{

					chart:
					{

						title: 'Total Payment',
						subtitle: 'Based On Payment Method',

					}

				};

				var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            	chart.draw(data, google.charts.Bar.convertOptions(options));

			}

		</script>
		
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
						<li><a href="aboutus.php">Our Profile</a></li>
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
			
			if (isset($_POST["submit"]) && !empty($_POST["submit"]))
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

					?>
					
					<br>
					
					<p style="color: red;"><b>Payment ID Does Not Exist</b></p>

					<?php

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

		<div class="contentleft">

			<h3>REPORT</h3><br><br>
			<h4>Total Purchase</h4><br><br>
			<h4>Payment Method</h4>

		</div>

		<div class="contentmid">

			<br><br><br>
			<Label>:</Label><br><br><br>
			<Label>:</Label>

		</div>

		<div class="contentright">

			<br><br><br>
			
			<?php

				$conn = mysqli_connect("localhost", "root", "", "Project");

				$query = "SELECT PaymentID FROM Payment WHERE UserID = 'U001'";

				$run = mysqli_query($conn, $query);

				if ($purchase_total = (mysqli_num_rows($run)))
				{

					echo '<b>' . $purchase_total . '</b>';

				}

				else
				{

					?>
				
					<p style="color: red;"><b>No Purchase Made</b></p>

					<?php

				}

			?>

			<br><br><br>

			<div id="columnchart_material" style="width: 800px; height: 500px;"></div>

		</div>

		<br><br>
		
	</body>
	
	<footer>
	
		<div id="footer">
		
			<div class="wrapper">
		
				<b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022</b> 
		   
			</div>
		
		</div>
	
	</footer>

</html>