<?php
session_start();
include("conn.php");
error_reporting(0);
?>
<?php


$rollno = $_POST["rollno"];
$sessName = $_POST["sessName"];




$sql= "SELECT * FROM `$sessName` ";
$data1 = mysqli_query($conn,$sql);

if($data1)
{

$del= "DELETE FROM `$sessName` WHERE rollno = $rollno ";
$suc = mysqli_query($conn,$del);

if($suc)
{
	echo "1";
}
else
{
	echo "2";
}
	
}
else
{
	echo "0";
}








?>
