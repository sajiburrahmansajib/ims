<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$quantity = $_GET["quantity"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
    	<form method=get action=edit-submit.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	<label>Product name:</label><br>

	<input type=text name=name value='<?php echo $name; ?>'>

	<p>
		<label>Quantity:</label><br>
	<input type=text name=quantity value='<?php echo $quantity; ?>'>

	<p>

	<input type=submit value=Update>

</form>
    </div>
</body>
</html>




