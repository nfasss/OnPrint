<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "printing";

$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	// to select the targeted database
	mysqli_select_db($link, "testdb") or die(mysqli_error());
		
	// to create a query to be executed in sql
	$query = "insert into user values('$user', '$pass')" 
		or die(mysqli_connect_error());
	
	// to run sql query in database
	$result = mysqli_query($link, $query);
	     
	//Check whether the insert was successful or not
	if($result) 
	        {
		        
                    echo("Data insert");
					
		}
		else 
	        {
			        
	            die("Insert failed");
	        }
	//Close the database connection
	mysqli_close($link);

    