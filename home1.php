<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Inventory Management System </title>
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
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}


			$query = "SELECT * FROM customer_info order by customer_id asc";
			if ($result = $conn->query($query))
			
			?>
	<div class="ui grid">

		<div class="ui four wide column">
			<div style=" padding: 20px;">






				<h2 style="color: darkred ;">Inventory Management System</h2>
			</div>
			<div style="padding: 30px">
				<a href="addfrom_customer.html"><button style="color: darkseagreen;background-color: black  ;" >Add Customer_info</button></a> 
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

				<th>serial </th>
				<th>customer name</th>
				<th>customer phone</th>
				<th>customer email</th>
				<th>customer address</th>
				<th>option </th>
				<th> option</th>


				
			</tr> 

		</thead>
		
		<tbody>
			<tr>
				<?php
			if ($result = $conn->query($query)) {
				$ser =1;
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td><a href='db/delete.php?id=%s'>Delete</a></td> <td><a href='editfrom_customer.php?id=%s'>Edit</a> </td>", $ser,$row["customer_name"], $row["customer_phone"],$row["customer_email"],$row["customer_address"],$row["customer_id"],$row["customer_id"]);

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