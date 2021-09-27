<?php 
	
	$Id =  $_POST['customer_id'];
	$Name =  $_POST['customer_name'];
	$Phone = $_POST['customer_phone'];
	$Email = $_POST['customer_email'];
	$Address= $_POST['customer_address'];
	
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update customer_info SET customer_name='$Name',  customer_phone='$Phone', customer_email ='$Email',customer_address='$Address'WHERE customer_id='$Id' ";

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
		echo "Successfully updated contact info of $Name. <br>";
		header("Location: ../home.php"); 
	}

	


?>