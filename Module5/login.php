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

#error_msg{
	width: 50%;
	margin: 5px auto;
	height: 30px;
	border: 1px solid #FF0000;
	background: #FFB9B8;
	color: #FF0000;
	text-align: center;
	padding-top: 10px;
}
.text1{
	height: 25px;
	width: 350px;
	left: 10px;
}
.text2{
	height: 25px;
	width: 350px;
	left: 10px;
}
.label7 {
		font-size: 27px;
	font-style: arial;
}
 .auto-style5 {
	font-size: xx-large;
	font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}
.auto-style8 {
	text-align: left;
}
.auto-style9 {
	text-align: center;
}
</style>
<script>
function changeColour()
{
//alert("test");
document.getElementById("username").style.borderColor = "CadetBlue";
}
function changeColour1()
{
//alert("test");
document.getElementById("passwordd").style.borderColor = "CadetBlue";
}
function backNormal()
{
document.getElementById("username").style.borderColor = "";
}
function backNormal1()
{
document.getElementById("passwordd").style.borderColor = "";
}

</script></head>
<body>

<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>

<form action="register.php" method="post">
			<table style="width: 80%; margin-top: 150px; margin-bottom: 50px;" align="center">
			    <tr>
					<td style="width: 27%; height: 40px;">
					</td>
					<td style="width: 13%; height: 40px;"></td>
					<td style="width: 269px; height: 40px"></td>
					<td style="width: 35%; height: 40px;">
					</td>
				</tr>
			    <tr>
					<td style="width: 27%; height: 40px;">
					</td>
					<td style="width: 13%; height: 40px;"></td>
					<td style="width: 269px; height: 40px"></td>
					<td style="width: 35%; height: 40px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 57px;">
					</td>
					<td style="height: 57px;" colspan="2"><label id="Label7">
					<span class="auto-style5"><strong>Login Page</strong></span></label></td>
					<td style="width: 35%; height: 57px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 49px;">
					</td>
					<td style="width: 13%; height: 49px;">
					<td style="width: 269px; height: 49px"></td>
					<td style="width: 35%; height: 49px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 35px;">
					</td>
					<td style="width: 13%; height: 35px;">
					<label id="Label8">First Name </label></td>
					<td style="width: 269px; height: 35px;">
					<input name="UserFirstName" style="width: 260px; height: 30px; border-radius: 5px" type="text" id="UserFirstName" required onmouseover="changeColour()" onmouseout="backNormal()"></td>
					<td style="width: 35%; height: 35px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 30px;">
					</td>
					<td style="width: 13%; height: 30px;">
					</td>
					<td style="width: 269px; height : 30px">
					</td>
					<td style="width: 35%; height: 30px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 35px;"></td>
					<td style="width: 13%; height: 35px;">Password </td>
					<td style="width: 269px; height: 35px"> 
					<input name="passwordd" style="width: 260px; height: 30px; border-radius: 5px" id="passwordd" type="password" required onmouseover="changeColour1()" onmouseout="backNormal1()" ></td>
					<td style="width: 35%; height: 35px"> </td>
				</tr>
				<tr>
					<td style="width: 27%; height: 39px;"></td>
					<td style="width: 13%; height: 39px;"></td>
					<td style="width: 269px; height: 39px"> 
					</td>
					<td style="width: 35%; height: 39px"> </td>
				</tr>
				<tr>
					<td style="width: 27%; height: 26px;">
					</td>
					<td style="width: 13%; height: 26px;">
					</td>
					<td style="width: 269px; height : 26px" class="auto-style8">
					<input onclick="return confirm('Are you sure you want to login?')" align="center" cellpadding="6" style=" width: 261px; height: 37px; background-color: #5FB6AD; color: #FCFBF9" name="Login" type="submit" value="LOGIN IN"/></td>
					<td style="width: 35%; height: 26px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 26px;">
					</td>
					<td style="width: 13%; height: 26px;">
					</td>
					<td style="width: 269px; height : 26px" class="auto-style9">
					</td>
					<td style="width: 35%; height: 26px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 26px;">
					&nbsp;</td>
					<td style="width: 13%; height: 26px;">
					&nbsp;</td>
					<td style="width: 269px; height : 26px">
					&nbsp;</td>
					<td style="width: 35%; height: 26px;">
					&nbsp;</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 35px;">
					</td>
					<td style="width: 13%; height: 35px;">
					</td>
					<td style="width: 269px; height : 35px">
					</td>
					<td style="width: 35%; height: 35px;">
					</td>
				</tr>
				<tr>
					<td style="width: 27%; height: 26px;">
					&nbsp;</td>
					<td style="width: 13%; height: 26px;">
					&nbsp;</td>
					<td style="width: 269px; height : 26px">
					&nbsp;</td>
					<td style="width: 35%; height: 26px;">
					&nbsp;</td>
				</tr>
				</table>
			
</form>

<div class="container">
 <h1><img alt="" height="90" src="print.jpg" width="95"></h1>
  <div class="navbar">
  <b href="#"></b>
  <a href="register.php"><strong>Sign Up</strong></a>
  <a><strong>Home</strong></a>
</div>

  </div>
</body>
</html>