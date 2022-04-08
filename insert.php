<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "register_php");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$invoice = mysqli_real_escape_string($link, $_REQUEST['invoice']);
$stock = mysqli_real_escape_string($link, $_REQUEST['stock']);
$descriptions = mysqli_real_escape_string($link, $_REQUEST['descriptions']);
$quantity = mysqli_real_escape_string($link, $_REQUEST['quantity']);
$dates = mysqli_real_escape_string($link, $_REQUEST['dates']);
$unit = mysqli_real_escape_string($link, $_REQUEST['unit']);
$customer = mysqli_real_escape_string($link, $_REQUEST['customer']);
$country_code = mysqli_real_escape_string($link, $_REQUEST['country_code']);

 
// Attempt insert query execution
$sql = "INSERT INTO persons (invoice,stock, descriptions,quantity,dates,unit,customer,country_code ) VALUES ('$invoice','$description','$stock','$quantity','$dates','$unit','$customer','$country_code')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>