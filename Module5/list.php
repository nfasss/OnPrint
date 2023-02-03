<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
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
  width: 60px;
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


/* Style the search field */
form.example input[type=text] {
  padding: 6px;
  font-size: 13px;
  border: 1px solid grey;
  float: right;
  width: 11.1%;
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
  padding: 7px;
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
</style>

</head>

<body>
<div class="container">
<h1><img alt="" height="90" src="print.jpg" width="95"></h1>
<div class="navbar">
  <b href="#"></b>
  <a href="contact.php"><strong>Logout</strong></a> 
  <a href="aboutus.php"><strong>Our Profile</strong></a>
  <a href="contact.php"><strong>Inventory</strong></a>
  <a href="contact.php"><strong>Commission</strong></a>
  <a href="about.php"><strong>Order</strong></a>
  <a class="active" href="access.php"><strong>User</strong></a>
  <a href="pta.php"><strong>Home</strong></a>
</div>
</div>

</div>

<form class="example" action="list.php" method="POST" style="margin-top: 60px;">
  <button type="submit" name="cari"><i class="fa fa-search"></i></button>
  <input type="text" placeholder="Search by first name" name="search" class='form-control' value=""></form>

<h3>User List Report</h3>
  
<div class="table1" style="margin-top: 30px;">

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

if(isset($_POST['search'])) {
	$searchKey = $_POST['search'];
	$sql = "SELECT * FROM user where UserFirstName LIKE '%$searchKey%'";
	
	}else{
		$sql = "SELECT * FROM user";
		$searchKey = "";
	}

  $result = mysqli_query($conn,$sql);

?>      
<table class="table1" style="border: solid 1px darkSlateGray; width: 80%; height:30px; color: black; font-size:14px" align="center">
<tr>
<th style="height: 35px">Password</th>
		<th style="height: 35px">First Name</th>
		<th style="height: 35px">Last Name</th>
		<th style="height: 35px">Email</th>
		<th style="height: 35px">Phone Number</th>
    <th style="height: 35px">Address</th>
		<th style="height: 35px">State</th>		
    <th style="height: 35px">Poscode</th>
    <th style="height: 35px">Action</th>
</tr>
<?php while($row = mysqli_fetch_array($result))
	{ ?>
<tr>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserPassword']?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserFirstName']?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserLastName'] ?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserEmail'] ?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserPhoneNum'] ?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserAddress'] ?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserState'] ?> </td>
        <td style="padding:10px" class="auto-style1"> <?php echo $row['UserPoscode'] ?> </td>
        <td style="padding:10px" class="auto-style2"><a href="update1.php?id=<?php echo $id; ?>">Update</a> / <a class="deletebtn" onclick="return confirm('Are you sure you want to delete?')" href="delete1.php?id=<?php echo $id; ?>">Delete</a><br></td>
      </tr>
    <?php } ?>


</table>

</div>

<script>
function myFunction2(){
  alert("you have delete the item");
}
</script>
</body>

</html>
