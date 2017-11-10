<?php
include("include.php");
if(isset($_POST['signin']))
{

$nm=$_POST['username']; 
$pas=$_POST['password'];

for($i=0; $i<1000; $i++) {
$chkh=hash('sha512', $pas);
}
$qry="SELECT * FROM registration WHERE username='$nm' AND password='$chkh'";

$result=mysql_query($qry);

 if(mysql_num_rows($result) > 0 )
 {
if($chkh == $row['password'])
	{

    header("Location:login.php");
	}
else
	{
		echo"invalid authentication";
		require("index.php");
	}

}
}
else {

	mysql_error("invaalid connecting");
}
?>
