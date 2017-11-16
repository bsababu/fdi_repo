<?php/*
$host="localhost"; // Host name 
	$username="bosco"; // Mysql username 
	$password="12345"; // Mysql password 
	$db_name="register"; // Database name 
	//$tbl_name="registration1"; // Table name
   $con=pg_connect("host='$host' dbname='$db_name' user='$username' password='$password'")or die("not con");
   //Check connection
   if ($con)) {
    echo "connect to MySQL: ";
   }*/
?>

<?php
$con=pg_connect("host='localhost' dbname='bosco_db' user='bosco' password='12345'") or die(" not con");
?>
