<?php 
    $Id =  $_POST['customer_id'];  
    $Name =  $_POST['customer_name'];
	$Phone = $_POST['customer_phone'];
	$Email = $_POST['customer_email'];
	$Address= $_POST['customer_address'];
	
	
	require_once('../db_config.php');

	$sql = "Insert into customer_info VALUES(NULL,'$Name', '$Phone','$Email','$Address')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Product info. <br>";
	}

	$conn->close();

	echo "<a href='../home.php'>Back</a>"
	

?>