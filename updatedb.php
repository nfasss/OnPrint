<?php

	$conn = mysqli_connect("localhost", "root", "", "Project");
	
	$paymentTotal = $_POST['paymentTotal'];
	$paymentMethod = $_POST['paymentMethod'];
	$deliveryAddress = $_POST['deliveryAddress'];

	$sql="UPDATE `Payment` SET $paymentTotal = '$_POST[paymentTotal]', $paymentMethod = '$_POST[paymentMethod]', $deliveryAddress = '$_POST[deliveryAddress]' `PaymentID` = '$_GET[upt_comm]'";

	$run = mysqli_query($conn, $sql) or die(mysqli_error());


	if ($run)
	{
		
		echo "Data Updated!";
		
	}
	
	else
	{
		
		echo "Data Not Updated!";
		
	}


    header("location: viewaccount_.php");  
	exit;


?>


