<?php
session_start();
include('conn.php');
error_reporting(0);
?>
<?php
$sessName = $_POST['sessName'];


$rn = $_POST['rn'];
$sn = $_POST['sn'];
$fn = $_POST['fn'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$cat = $_POST['cat'];

$sb1 = $_POST['sb1'];
$sb2 = $_POST['sb2'];
$sb3 = $_POST['sb3'];
$sb4 = $_POST['sb4'];
$sb5 = $_POST['sb5'];

$sum = $_POST['sum'];
$per = $_POST['per'];



	 $sql1="
 UPDATE `$sessName` SET `rollno`='$rn',`sn`='$sn',`father`='$fn',`mother`='0',`dob`='$dob',`sex`='$sex',
`cat`='$cat',`sub1`='$sb1',`sub2`='$sb2',`sub3`='$sb3',
`sub4`='$sb4',`sub5`='$sb5',`sub6`='0',`sub7`='0',`sub8`='0',`sub9`='0',
`sub10`='0',`tm`='$sum',`per`='$per' WHERE `rollno`='$rn'	
	
	";
	
	
	
    $data11 = mysqli_query($conn,$sql1);

	if($data11)
	{
		echo 1;
		
	}
	else
		
		{
			echo 0;
		}
	
	






?>
