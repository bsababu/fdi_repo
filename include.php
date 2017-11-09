<?php
$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="fdi"; // Database name 
	$tbl_name="registration"; // Table name
   $con=mysqli_connect("localhost","root","","fdi");
   //Check connection
   if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?> 

<?php
	

?>