<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome.min.css">
<script src="2b5c6a6569.js" crossorigin="anonymous"></script>
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
  width: 120px;
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

.auto-style2 {
	text-align: center;
}
th, td{
	border: 1px CadetBlue solid;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.table1 tr:nth-child(even){
	background-color: #f2f2f2;
}

* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 6px;
  font-size: 13px;
  border: 1px solid grey;
  float: right;
  width: 12%;
  background: #fff;
  margin-top: 100px;
  -webkit-border-top-left-radius: 10px;
  -webkit-border-bottom-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  -moz-border-radius-bottomleft: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

/* Style the submit button */
form.example button {
  float: right;
  width: 40px;
  padding: 6px;
  background: #2196F3;
  color: white;
  font-size: 13px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  margin-top: 100px;
  margin-right: 10.2%;
  -webkit-border-top-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  -moz-border-radius-bottomright: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

h3{
	text-align: left;
	font-size: x-large;
	font-style: italic;
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	text-decoration: underline;
  margin-top: -30px;
  margin-left: 170px;
}
</style></head><body>
		
<div class="container">
 <h1><img alt="" height="90" src="print.jpg" width="95"></h1>
  <div class="navbar">
  <b href="#"></b>
  <a href="login.php"></i><strong> Logout</strong></a>
  <a href="aboutus.php"><strong>Our Profile</strong></a>
  <a href="inventory.php"><strong>Inventory</strong></a>
  <a href="commission.php"><strong>Commission</strong></a>
  <a href="printorder.php"><strong>Order</strong></a>
  <a class="user" href="access.php"><strong>User</strong></a>
  <a href="home.php"><strong>Home</strong></a>
</div>

  </div>

<div class="table1">

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

$id = $_GET['id'];
$query = "SELECT * FROM inventory WHERE InventoryID = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in update1.php");
$row = mysqli_fetch_assoc($result);

$id=$row["InventoryID"];
$inDate=$row["InventoryInDate"];
$outDate=$row["InventoryOutDate"];
$quantity=$row["InventoryQuantity"];
$outletID=$row["OutletID"];
$productID=$row["ProductID"];
  ?>


<table class="table1" style="border: solid 1px aqua; margin-top: 150px; width: 80%; height:30px; color: black; font-size:14px; background-color:  #FCFBF9; color: black; margin-bottom: 50px" align="center"><tr>

		<th style="height: 35px">Inventory ID</th>
    <th style="height: 35px">In date</th>
		<th style="height: 35px">Out date</th>		
    <th style="height: 35px">Quantity</th>
    <th style="height: 35px">Outlet ID</th>
    <th style="height: 35px">Product ID</th>
    <th style="height: 35px">Action</th>

</tr>

  <form method="post" action ="otw.php?id=<?php echo $id; ?>" onClick="">
      <tr>
        
 <td style="padding:10px" class="auto-style2">
<input name="id" type="text" value="<?php echo $id; ?>" disabled>
 </td>
 <td style="padding:10px" class="auto-style2">
<input name="inDate" type="text" value="<?php echo $inDate; ?>">
 </td>
 <td style="padding:10px" class="auto-style2">
<input name="outDate" type="text" value="<?php echo $outDate; ?>">
 </td>
 <td style="padding:10px" class="auto-style2">
<input name="quantity" type="text" value="<?php echo $quantity; ?>">
 </td>
 <td style="padding:10px" class="auto-style2">
<input name="outletID" type="text" value="<?php echo $outletID; ?>">
 </td>
 <td style="padding:10px" class="auto-style2">
<input name="productID" type="text" value="<?php echo $productID; ?>">
 </td>
        <td style="padding:10px" class="auto-style2"><a onclick="myFunction()">
		<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
        <input type ="submit" class="buttonsave1"  value="Save Changes"></td>
      </tr>
	  
      </form>

</table>
<br>
</div>

<script>
function myFunction() {
  alert("your change have saved");
}

</script>
</body>

</html>