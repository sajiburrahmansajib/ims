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


      $query = "SELECT * FROM customer_info where  customer_id='$id'";



           $result = $conn->query($query);
           $row = $result->fetch_assoc();



 ?>
        




<head>
  <meta charset="utf-8">
  <title>Edit Customer Information</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: seagreen; padding: 2%;">
	<h1 style="color:darkred;">Insert Updating Customer  Information</h1>
	<h3 style="color:lightskyblue;"> data will be inserted </h3>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/update.php">
         
          <div class="field" style="display: none;">
        <label>Id</label>
        <input type="text" name="customer_id" value="<?php echo $row["customer_id"] ?>"placeholder="customer Id">
      </div>
         
         <div class="field">
        <label>Name</label>
        <input type="text" name="customer_name" value="<?php echo $row["customer_name"] ?>" placeholder="customer Name">
      </div>

      
      <div class="field">
        <label>phone</label>
        <input type="text" name="customer_phone" value="<?php echo $row["customer_phone"] ?>" placeholder="customer phone">
      </div>
      <div class="field">
        <label>email</label>
        <input type="text" name="customer_email"value="<?php echo $row["customer_email"] ?>" placeholder="customer email">
      </div>
      <div class="field">
        <label>address</label>
        <input type="text" name="customer_address" value="<?php echo $row["customer_address"] ?>"placeholder="customer address">
      </div>
     
        

      <div style="padding: 5px">
        <button class="ui green button">Save</button>        
     </div>
    </form>
</div>
 
</body>

</html