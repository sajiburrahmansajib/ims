<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Store Management System </title>
    </head>
    <style> 
      </style>
    <body>
        
			
		

	<?php 
	     require_once('db_config.php');
	 ?>
</head>
<body>
	
		
	
	<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}


			$query = "SELECT * FROM payment_info order by payment_id asc";
			if ($result = $conn->query($query))
			
			?>
	<div class="ui grid">

		<div class="ui four wide column">
			<div style=" padding: 20px;">






				<h5>Store Management System</h5>
			</div>
			<div style="padding: 20px">
				<a href="addfrom_payment.html"><button class="ui green button">Add Payment</button></a> 
				<div class="field">
      <br>

      	
      </div>
       
				
		</div>
					
				</div>
				
					
				<div class="ui twelve wide column">
					<div class="ui text container"  style="padding-top: 50px"> 
						
					<table class="ui inverted green table">
						<thead>
			<tr>

				<th> list</th>
				<th>Customer Name</th>
				<th>Product Name</th>
				<th>Paid Amount</th>
				<th>Due amount</th>
				<th>Option</th>
				<th>Option</th>
				
			</tr> 

		</thead>
		
		<tbody>
			<tr>
				<?php
			if ($result = $conn->query($query)) {
				$ser =1;
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>  <td><a href='db/delete.php?id=%s'>Delete</a></td> <td><a href='editfrom_product.php?id=%s'>Edit</a> </td>", $ser,$row["customer_name"], $row["product_name"],$row["paid_amount"],$row["due_amount"], $row["payment_id"] ,$row["payment_id"]);

					printf("</tr>");
					$ser++;
				}
			}

			?>
			</tr>


		</tbody>

	</table>
	
</body>
</html>