<?php
include 'include.php';

$nm= mysqli_real_escape_string($con, $_POST['name']);
$user= mysqli_real_escape_string($con, $_POST['username']);
$pswd= mysqli_real_escape_string($con, $_POST['password']);


$hashed_pwd = hash('sha512',$pswd);

$sql = "INSERT INTO registration (name, username, password) VALUES ('$nm','$user','$hashed_pwd')";


if ($sql){
	echo "congratulation: ur USERNAME as:  $user and PASSWORD :  $pswd"; 
	
}
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
