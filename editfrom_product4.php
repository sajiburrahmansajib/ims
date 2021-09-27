<!doctype html>

<html lang="en">

<?php

     require_once('db_config.php');
     $id = $_GET['id'];
     $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
          exit();
      }


      $query = "SELECT * FROM payment_info where  payment_id='$id'";



           $result = $conn->query($query);
           $row = $result->fetch_assoc();



 ?>
        



<head>
  <meta charset="utf-8">
  <title>Edit Payment Information</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #FE9A76; padding: 2%;">
	<h1>Insert Updating Payment  Information</h1>
	<h4>The Updating  data will be inserted into the main database</h4>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/update.php">

         
            <div class="field" style="display: none;">
        <label>Id</label>
        <input type="text" name="payment_id" value="<?php echo $row["payment_id"] ?>"placeholder="Payment Id">
      </div>

         <div class="field">
        <label>Name</label>
        <input type="text" name="customer_name" value="<?php echo $row["customer_name"] ?>" placeholder="Customer Name">
      </div>

    
      <div class="field">
        <label>Product Name</label>
        <input type="text" name="product_name" value="<?php echo $row["product_name"] ?>" placeholder="Product Name">
      </div>

      <div class="field">
        <label>Paid Amount</label>
        <input type="text" name="paid_amount"value="<?php echo $row["paid_amount"] ?>" placeholder="Paid Amount">
      </div>

      <div class="field">
        <label>Due Amount</label>
        <input type="text" name="due_amount" value="<?php echo $row["due_amount"] ?>"placeholder="Due Amount">
      </div>

      
        

      <div style="padding: 5px">
        <button class="ui green button">Save</button>        
     </div>
    </form>
</div>

</body>

</html