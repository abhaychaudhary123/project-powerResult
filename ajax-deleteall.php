<?php
session_start();
include("conn.php");
error_reporting(0);
?>
<?php

$sb1 = $_POST["sb1"];
$sb2 = $_POST["sb2"];
$sb3 = $_POST["sb3"];
$sb4 = $_POST["sb4"];
$sb5 = $_POST["sb5"];
$sessName = $_POST["sessName"];

$rn = $_POST["rn"];
$sn = $_POST["sn"];
$fn = $_POST["fn"];
$mn = $_POST["mn"];
$dob = $_POST["dob"];
$sex = $_POST["sex"];
$cat = $_POST["cat"];

$sum = $_POST["sum"];
$per = $_POST["per"];

$sql="DELETE FROM `$sessName` WHERE 1 ";
$data1 = mysqli_query($conn,$sql);

if($data1)
{
	echo "1";
}
else
{
	echo "0";
}




?>
