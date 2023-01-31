
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

</style>
<script>
function changeColour()
{
document.getElementById("type").style.borderColor = "CadetBlue";
}
function changeColour1()
{
document.getElementById("item").style.borderColor = "CadetBlue";
}
function changeColour2()
{
document.getElementById("desc").style.borderColor = "CadetBlue";
}
function changeColour3()
{
document.getElementById("price").style.borderColor = "CadetBlue";
}
function changeColour4()
{
document.getElementById("username").style.borderColor = "CadetBlue";
}
function changeColour5()
{
document.getElementById("contact").style.borderColor = "CadetBlue";
}
function backNormal()
{
document.getElementById("type").style.borderColor = "";
}
function backNormal1()
{
document.getElementById("item").style.borderColor = "";
}
function backNormal2()
{
document.getElementById("desc").style.borderColor = "";
}
function backNormal3()
{
document.getElementById("price").style.borderColor = "";
}
function backNormal4()
{
document.getElementById("username").style.borderColor = "";
}
function backNormal5()
{
document.getElementById("contact").style.borderColor = "";
}


function myFunction2(){
  alert("New Inventory Added");
}

</script></head><body>
<form method="post" action="test.php">
			<label id="Label1">&nbsp;</label>
			<table style="width: 60%; margin-top: 125px; margin-bottom: 50px;  background-color: #023579; color: white" align="center">
				<tr>
					<td style="width: 20%; height: 50px;">
					</td>
					<td style="width: 30%; height: 50px;">
					</td>
					<td style="width: 20%; height: 50px;">
					</td>
					<td style="width: 30%;height : 50px">
					</td>
				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%;height : 26px">
					&nbsp;</td>
				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 40px;">
					Inventory ID<label id="Label8">* </label></td>
					<td style="width: 30%; height: 40px;">
					<input name="id" style="width: 268px; height: 25px; border-radius: 5px" type="text" id="id" required onmouseover="changeColour1()" onmouseout="backNormal1()"></input></td>
				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 40px;">Date In*</td>
					<td style="width: 30%; height: 40px"> 
					<input name="inDate" maxlength= "30" style="width: 268px; height: 25px; border-radius: 5px" id="inDate" type="text" required onmouseover="changeColour2()" onmouseout="backNormal2()" ></input></td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 40px;">
					Date Out</td>
					<td style="width: 30%;height : 40px">
					<input name="outDate" style="width: 268px; height: 25px; border-radius: 5px" id="outDate" type="text" required onmouseover="changeColour3()" onmouseout="backNormal3()" ></input></td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 40px;">
					Quantity</td>
					<td style="width: 30%;height : 40px">
					<input name="quantity" style="width: 268px; height: 25px; border-radius: 5px" id="quantity" type="text" required onmouseover="changeColour4()" onmouseout="backNormal4()" ></input></td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 40px;">
					Outlet ID</td>
					<td style="width: 30%;height : 40px">
					<input name="outletID" style="width: 268px; height: 25px; border-radius: 5px" id="outletID" type="text" required onmouseover="changeColour4()" onmouseout="backNormal4()" ></td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 40px;">
					Product ID</td>
					<td style="width: 30%;height : 40px">
					<input name="productID" maxlength= "11" style="width: 268px; height: 25px; border-radius: 5px" id="productID" type="text" required onmouseover="changeColour5()" onmouseout="backNormal5()" ></td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%;height : 26px">
					&nbsp;</td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%;height : 26px">
					<input onclick="myFunction2()" cellpadding="6" style="width: 268px; height: 37px; color: white; background-color: #5FB6AD" name="add" type="submit" value="ADD" /></td>
					<td style="width: 30%;height : 26px">

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%;height : 26px">
					&nbsp;</td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%;height : 26px">
					&nbsp;</td>

				</tr>
				<tr>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%; height: 26px;">
					&nbsp;</td>
					<td style="width: 20%; height: 26px;">
					&nbsp;</td>
					<td style="width: 30%;height : 26px">
					&nbsp;</td>

				</tr>
				</table>
</form>
		<div class="container">
 <h1><img alt="" height="90" src="print.jpg" width="95"></h1>
  <div class="navbar">
  <b href="#"></b>
  <a href="login.php"><strong>Logout</strong></a>
  <a class="active" href="contact.php"><strong>Inventory</strong></a>
  <a href="commission.php"><strong>Commission</strong></a>
  <a href="about.php"><strong>Order</strong></a>
  <a href="access.php"><strong>User</strong></a>
  <a href="pta.php"><strong>Home</strong></a>
</div>

</div>
</body>
</html>
