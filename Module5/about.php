
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

 .auto-style1 {
	font-size: 14px;
}

 .auto-style2 {
	text-align: center;
}
.auto-style3 {
	font-size: xx-large;
	font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}
.auto-style5 {
	font-size: large;
	color: black
}

 .auto-style6 {
	font-size: medium;
	color: black;
}
.auto-style7 {
	font-size: medium;
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
button.btnadd{
  width: 200px;
  height: 36px;
  color: white;
  background-color: #5FB6AD;  
  margin-left: 1160px;
  margin-top: 20px;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.about {
    font: Arial, sans-serif;
    color: black;
    padding-top: 100px;
    margin-top: 100px;
}
.container1{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
    padding-bottom: 100px;
}
 </style>
 <script>
  function myFunction2(){
  alert("New Inventory Added");
}

</script>
 </head><body>
		
		<div class="container">
		<h1><img alt="" height="90" src="print.jpg" width="95"></h1>
  <div class="navbar">
  <b href="#"></b>
  <a href="login.php"></i><strong> Logout</strong></a>
  <a class="active" href="inventory.php"><strong>Inventory</strong></a>
  <a href="commission.php"><strong>Commission</strong></a>
  <a href="printorder.php"><strong>Order</strong></a>
  <a href="user.php"><strong>User</strong></a>
  <a href="home.php"><strong>Home</strong></a>
</div>

</div>

<div class="container1">
            <p class="about">&nbsp;&nbsp;OnPrint founded by Student Web Engineering,With this printing service website system, university can be able to build a sustainable income from the online printing service. Both staff and students will no longer worry about their unprinted documents where they can use the online printing service to ease their problems with printing important documents where they can easily print from anywhere and anytime</p>
            <p class="about">&nbsp;&nbsp;OnPrint launched in December 2022</p>
            <p class="about">Driven by our motto "We Print Your Ideas™", we always strive to provide high quality products which will deliver maximum benefits to customers. Under excellent, strong and dedicated leadership of the company's management team with the exceptional support from skilful and highly motivated staffs, OnPrint is moving fast forward in becoming a leading printing centre in Malaysia.</p>
        </div>

</body>
</html>

