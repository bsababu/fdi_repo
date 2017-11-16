<?php
//include 'include.php';

$con=pg_connect("host='localhost' dbname='register' user='bosco1' password='12345'") or die(" not con");


$nm= pg_escape_string($con, $_POST['name']);
$user= pg_escape_string($con, $_POST['username']);
$pswd= pg_escape_string($con, $_POST['password']);


$hashed_pwd = hash('sha512',$pswd);

$sql = "INSERT INTO registration1 (name, username, password) VALUES ('$nm','$user','$hashed_pwd')";
$result=pg_query($con,$sql);

if ($result){
	echo "congratulation: ur USERNAME as:  $user and PASSWORD :  $pswd"; 
	
}
else{
	echo" didnt insert rcords";
}
/*if ($result)) {
  die('Error: ' . pg_error($con));
}*/
?>
