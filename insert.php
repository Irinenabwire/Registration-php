<?php
  
  // servername => localhost
  // username => root
  // password => empty
  // database name => staff
  $conn = mysqli_connect("localhost", "root", "", "form_inserction");
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  // Taking all 5 values from the form data(input)
  $invoice =  $_REQUEST['invoice'];
  $stock = $_REQUEST['stock'];
  $descs =  $_REQUEST['descs'];
  $quantity = $_REQUEST['quantity'];
  $dates = $_REQUEST['dates'];
  $unit = $_REQUEST['unit'];
  $customer = $_REQUEST['customer'];
  $country_code = $_REQUEST['country_code'];
  // $id = (isset($_POST['id']) ? $_POST['id'] : '');
    
  // Performing insert query execution
  // here our table name is register
  $sql = "INSERT INTO register  (invoice,stock, descs,quantity,dates,unit,customer,country_code ) VALUES ('$invoice','$stock','$descs','$quantity','$dates','$unit','$customer','$country_code')";
  
  
    
  if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully." 
          . " Please browse your localhost php my admin" 
          . " to view the updated data</h3>"; 

      
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>