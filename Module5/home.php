
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome.min.css">
<script src="2b5c6a6569.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #F9F9F9;
}

.navbar {
  overflow: hidden;
  background-color: #FFDE59;
}

.navbar a {
  float: right;
  font-size: 17px;
  color: black;
  text-align: center;
  padding: 40px 10px 40px 10px;
  text-decoration: none;
  width: 100px;
}

.navbar a.active {
  background-color: #FFDE59;
  color: #023579;
}

.navbar b {
  float: right;
  font-size: 17px;
  color: black;
  text-align: center;
  padding: 40px 5px 40px 5px;
  text-decoration: none;
  width: 70px;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;  
  border: none;
  outline: none;
  color: black;
  padding: 40px 15px 40px 15px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #FCFBF9;
  color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FCFBF9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 11px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #FCFBF9;
  color: #023579;
}

.dropdown:hover .dropdown-content {
  display: block;
}

h1{
  position: absolute;
  float: left;
  margin-left: 60px;
  margin-top: 7px;
  width: 254px;
  line-height: 30px;
}

.container{
  border: none;
  width: 100%;
  top: 0%;
  left: 0%;
  position: absolute;
  background-color: #FCFBF9;
  float: right;
}	

.auto-style7 {
  text-align: center;
}

.auto-style8 {
	font-size: x-large;
	color: black;
}

canvas{
        display: inline-block;
        position: relative;
        max-width: 800px;
        max-height: 400px;
        margin-left: 200px;
		margin-bottom: 100px;
		margin-top: -20px;
}
</style></head><body>
<div class="auto-style1" style="width: 96%">
			<label id="Label1">&nbsp;</label>
			<table style="width: 96%; margin-top: 100px;" align="center">
				<tr>
					<td style="width: 20%; height: 62px;" class="auto-style7">
					</td>
					<td style="width: 20%; height: 62px;">
					</td>
					<td style="width: 20%; height: 62px;">
					</td>
					<td style="width: 20%; height: 62px;">
					</td>
					<td style="width: 20%; height: 62px;">
					</td>
				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					</td>
					<td style="height: 50px;" class="auto-style8" colspan="3">
					Visualize Report</td>
					<td style="width: 20%; height: 50px;">
					</td>
				</tr>
				</table>
			<br />
			<br />
			<br />
		</div>	
<div class="container">
 <h1><img alt="" height="90" src="print.jpg" width="95"></h1>
  <div class="navbar">
  <b href="#"></b>
  <a href="login.php"><strong>Logout</strong></a>
  <a href="inventory.php"><strong>Inventory</strong></a>
  <a href="commission.php"><strong>Commission</strong></a>
  <a href="printorder.php"><strong>Order</strong></a>
  <a href="user.php"><strong>User</strong></a>
  <a class="active" href="home.php"><strong>Home</strong></a>
</div>

</div>

<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "printing";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $query = $conn->query("SELECT UserID as UserID, SUM(CommisionTotal) as CommisionTotal FROM commision GROUP BY UserID");
  //$result = mysqli_query($conn,$query);

  foreach($query as $data)
  {
    $commid[] = $data['UserID'];
    $total[] = $data['CommisionTotal'];
  }

?>

<div>
  <canvas id="myChart"></canvas>
</div>

<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($commid) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Total commission for rider',
      data: <?php echo json_encode($total) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

</body>
</html>
