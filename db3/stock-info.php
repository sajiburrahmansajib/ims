<html lang="en">
 <?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM stock" )
		or die("Can not execute query");
?>
 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <h1 style="text-align: center; padding: 30px;">Stock Information</h1>
	<table class="table table-striped container">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>

   <?php 
  while( $rows = mysqli_fetch_array( $results ) ) {

		extract( $rows );

  ?> 
  
    <tr>
      <!-- <th scope="row"><?php echo"$id" ;?></th> -->
      <td><?php echo"$name" ;?></td>
      <td><?php echo"$quantity" ;?>kg</td>

      <td> <a href= "stock-delete.php?id=<?php echo"$id" ;?>" type="button" class="btn btn-danger">Delete</a></td>
      <td> <a href="stock-edit.php?id=<?php echo"$id" ;?> & name=<?php echo"$name" ;?> & quantity=<?php echo"$quantity" ;?>" type="button" class="btn btn-primary">Edit</a></td>
      
      
    </tr>



    <?php } ?>
    </table>
    <div class="container">
      <a href="stock-insert.php" type="button" class="btn btn-info mt-5" id="insert">Insert New Item</a>
    </div>
    
</body>
</html>	