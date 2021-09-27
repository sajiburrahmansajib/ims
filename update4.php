<?php 
	
	
    $Id =  $_POST['payment_id'];
    $Name =  $_POST['customer_name'];
	$Product = $_POST['product_name'];
	$Paid_Amount = $_POST['paid_amount'];
	$Due_Amount= $_POST['due_amount'];

		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update payment_info SET customer_name='$Name', product_name='$Product', paid_amount='$Paid_Amount', due_amount ='$Due_Amount' WHERE payment_id='$Id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$conn->close();

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated payment_info info of $Name. <br>";
		header("Location: ../home.php"); 
	}

	


?>