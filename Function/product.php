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
                     <li><a href="#home">Home</a></li>
                     <li><a href="#order">Order</a></li>
                     <li><a href="#profile">Our Profile</a></li>
                     <li><a href="#contact">Contact</a></li>
                     <li><a href="" class="btn-login">Sign Up</a></li>
                 </ul>
             </div>
         </div>
     </nav>
     <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Product Category</h2>

            <?php 
            // to make a connection with database
                $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
            //Select the database.
                mysqli_select_db($link, "printing") or die(mysqli_error($link));
                //Display Foods that are Active
                $query  = "SELECT * FROM product WHERE PRODUCTID";

                //Execute the Query
                $rs = mysqli_query($link, $query);

                //Count Rows
                $count = mysqli_num_rows($rs);

                //CHeck whether the foods are availalable or not
                if($count>0)
                {
                    //Foods Available
                    while($row=mysqli_fetch_assoc($rs))
                    {
                        //Get the Values
                        $ProductID = $row['ProductID'];
                        $ProductName = $row['ProductName'];
                        $ProductPrice = $row['ProductPrice'];
                        $ProductDescription = $row['ProductDescription'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="images/food/<?php echo $image_name; ?>" alt="Printing" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $ProductName; ?></h4>
                                <p class="food-price">RM <?php echo $ProductPrice; ?>.00</p>
                                <p class="food-detail">
                                    <?php echo $ProductDescription; ?>
                                </p>
                                <br>

                                <a href="order.php?food_id=<?php echo $ProductID; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food not Available
                    echo "<div class='error'>Food not found.</div>";
                }
            ?>

            

            

            <div class="clearfix"></div>

            

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