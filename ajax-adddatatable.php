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


if(empty($sb1) || empty($sb2) || empty($sb3) || empty($sb4) || empty($sb5) || empty($rn)
|| empty($sn)|| empty($fn)|| empty($dob)|| empty($sex) || empty($cat)
)
{
echo "3";
}
	



else
{
	
	
	

	$sql= "

INSERT INTO `$sessName`(`rollno`, `sn`, `father`, `mother`, `dob`, `sex`, `cat`,
 `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `tm`, `per`)
 VALUES ('$rn','$sn','$fn','$mn','$dob','$sex','$cat','$sb1','$sb2','$sb3','$sb4','$sb5','0','0','0','0','0','$sum','$per')



	";
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





?>
