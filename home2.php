<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Store Management System </title>
    </head>
    
			
			
		</ul>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">


	<?php 
	     require_once('db_config.php');
	 ?>
</head>
<body background="white">
	
		
	
	<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}


			$query = "SELECT * FROM product_info order by PRODUCT_ID asc";
			if ($result = $conn->query($query))
			
			?>
	<div class="ui grid">

		<div class="ui four wide column">
			<div style=" padding: 20px;">






				<h1>Store Management System</h1>
			</div>
			<div style="padding: 40px;">
				<a href="addfrom_product.html"><button class="ui green button">Add Product</button></a> 
				<div class="field">
      <br>

      	
      </div>
       
				
		</div>
					
				</div>
				
					
				<div class="ui twelve wide column">
				<div class="ui text container"  style="padding-top: 50px"> 
						
					<table class="ui inverted light gray table">
						<thead>
			<tr>

				<th>Product Id</th>
				<th>Product Name</th>
				<th>Stock Quantity</th>
				<th>Stock Status</th>
				<th>Purchase Price</th>
				<th>Selling Price</th>
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
					printf("<td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%d</td> <td>%s</td> <td><a href='db/delete.php?id=%s'>Delete</a></td> <td><a href='editfrom_product.php?id=%s'>Edit</a> </td>", $ser,$row["PRODUCT_NAME"], $row["STOCK_QUANTITY"],$row["STOCK_STATUS"],$row["PURCHASE_PRICE"] ,$row["PRICE"] , $row["PRODUCT_ID"] ,$row["PRODUCT_ID"]);

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