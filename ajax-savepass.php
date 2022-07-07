<?php
session_start();
include("conn.php");
error_reporting(0);
?>
<?php

$newpass = $_POST["newpass"];
$confirmpass = $_POST["confirmpass"];
$sessName = $_POST["sessName"];

if($newpass != '' || $confirmpass != '')
{

if($newpass == $confirmpass)
{
	$enc_pass = password_hash($confirmpass,PASSWORD_BCRYPT);
	$sql= "UPDATE `users` SET `password`='$enc_pass' WHERE token='$sessName' ";
	$data1 = mysqli_query($conn,$sql);
	
	if($data1)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}
}
else
{
	echo "2";
}	

}

else
{
	echo "3";
}





?>
