<?php

	$conn = mysqli_connect("localhost", "root", "", "Project");
	
	$paymentID = $_POST['paymentID'];
	$paymentTotal = $_POST['paymentTotal'];
	$paymentMethod = $_POST['paymentMethod'];
	$userID = $_POST['userID'];
	$orderID = $_POST['orderID'];
	$deliveryAddress = $_POST['deliveryAddress'];
	
	$query = "UPDATE Payment SET PaymentTotal='$_POST[paymentTotal]', PaymentMethod='$_POST[paymentMethod]', DeliveryAddress='$_POST[deliveryAddress]'";

	$run = mysqli_query($conn, $query) or die(mysqli_error());


	if ($run)
	{
		
		header("location: history.php");  
		
	}
	
	else
	{
		
		echo "Data Not Updated!";
		
	}
	
	exit;

?>


