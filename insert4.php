<?php 

    $Id =  $_POST['payment_id'];
    $Name =  $_POST['customer_name'];
	$Product = $_POST['product_name'];
	$Paid_Amount = $_POST['paid_amount'];
	$Due_Amount= $_POST['due_amount'];

	
	require_once('../db_config.php');

	$sql = "Insert into payment_info VALUES(NULL,'$Name', '$Product','$Paid_Amount','$Due_Amount')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully!! added Payment info. <br>";
	}

	$conn->close();

	echo "<a href='../home.php'>Back</a>"
 

?>