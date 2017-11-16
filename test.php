<?php
$con=pg_connect("host='localhost' dbname='bosco_db' user='bosco' password='12345'") or die(" not con");
if($con){
echo " connected";
}
?>

