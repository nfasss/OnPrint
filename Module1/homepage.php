 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>OnPrint</title>
     <link rel="stylesheet" href="Style/style.css">
 </head>
 <body>
     <nav>
         <div class="wrapper">
             <div class="logo"><a href=''>OnPrint.</a></div>
             <div class="menu">
                 <ul>
                     <li><a href="homepage.php">Home</a></li>
                     <li><a href="#order">Order</a></li>
                     <li><a href="Profile_manage.php">Our Profile</a></li>
                     <li><a href="#contact">Contact</a></li>
                     <li><a href="Login.php" class="btn-login">Sign Up</a></li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- untuk home -->
     <section class="home-header text-center">
         <div class="container">
         </div>
     </section>
     <!-- untuk tutors -->
     <section id="tutors" class="menu1">
         <div class="tengah">
             <div class="tutor-list">
                 <div class="menu-list">
                     <img src="Asset/1.png"  href="order_acceptance.php">
                     <p>How To Order</p>
                 </div>
                 <div class="menu-list">
                     <img src="Asset/2.png">
                     <p>Our Service</p>
                 </div>
                 <div class="menu-list">
                     <img src="Asset/3.png">
                     <p>Make Order</p>
                 </div>
                 <div class="menu-list">
                     <img src="Asset/4.png">
                     <a href="http://localhost/OnPrint/Function/orderstatus.php"></a>
                     <p>Track Order</p>
                 </div>
             </div>
         </div>
     </section>
     <div id="footer">
         <div class="wrapper">
             <b> Unless explicity stated otherwise,all material is copyright © OnPrint 2022
             </b>
         </div>
     </div>
 </body>
 </html>
 <style>
    * {
    text-decoration: none;
    margin: 0px;
    padding: 0px;
}

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans',sans-serif;
    background-color: #023579;
}
.main {   
    -ms-flex: 100%; /* IE10 */
    flex: 100%;
    background-color: white;
    padding: 20px;
  }

.home-header{
    background-image: url("umplawo.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 10% 0;
    margin-bottom: 0;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}

.wrapper {
    width: 1100px;
    margin: auto;
    position: relative;
}

.logo a {
    font-size: 50px;
    font-weight: 800;
    float: left;
    font-family: serif;
    color: #364f6b;
}

.menu {
    float: right;
}

nav {
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky; 
    top: 0;
    background: #FFDE59;
    z-index: 1;
    border-bottom:1px solid #364f6b;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

section {
    margin: auto;
    display: flex;
    margin-bottom: 50px;
}


h2 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 45px;
    margin-bottom: 20px;
    color: #364f6b;
    width: 100%;
    line-height: 50px;
}

a.btn-login {
    background: #3f72af;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.btn-login:hover {
    background: #fc5185;
    text-decoration: none;
}

a.tbl-pink {
    background: #fc5185;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-pink:hover {
    background: #3f72af;
    text-decoration: none;
}

p {
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
}

.tengah {
    text-align: center;
    width: 100%;
}

.menu1{
background-color: #023579;

}

.tutor-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.menu-list {
    width: 20%;
    margin: 0 auto;
}

.menu-list img {
    width: 70%;
}

.menu-list p {
    font-family: 'sans serif';
    font-weight: 800;
    font-size: 30px;
    text-align: center;
    color: white;
}

#footer {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    padding: 30px 0px 30px 0px;
    margin-top: 0px;
    background: #00ADB4
}
/* Footer */
.footer {
    padding: 30px;
    text-align: center;
    background: #00ADB4;
  }
.food-menu{
    background-color: #ececec;
    padding: 4% 0;
}
.food-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}

.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


@media screen and (max-width: 991.98px) {
    .wrapper {
        width: 90%;
    }

    .logo a {
        display: block;
        width: 100%;
        text-align: center;
    }

    nav .menu {
        width: 100%;
        margin: 0;
    }

    nav .menu ul {
        text-align: center;
        margin: auto;
        line-height: 60px;
    }

    nav .menu ul li {
        display: inline-block;
        float: none;
    }

    section {
        display: block;
    }

    section img {
        display: block;
        width: 100%;
        height: auto;
    }
    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 90%;
        padding: 5%;
        margin-bottom: 5%;
    }

    .menu-list {
        width: 50%;
    }
}

 </style>