<?php
session_start();
include("conn.php");
error_reporting(0);
?>
<?php


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

$rest = $_SESSION['rest'] ;

if($rest == true)
{
	
}
else
{
 ?><script>window.location.replace("en.php");</script><?php
}


$sql= "SELECT * FROM `$rest` ";
$data1 = mysqli_query($conn,$sql);

$totalselect = mysqli_num_rows($data1);
$output = "";

if($totalselect > 0)	
{

	
	
	
	
	while($row=mysqli_fetch_assoc($data1))
	{
		$output .= "
		<tr>
		<td>".$row['rollno']."</td>
		<td>{$row["sn"]}</td>
		<td>{$row["father"]}</td>
		<td>{$row["dob"]}</td>
		<td>{$row["sex"]}</td>
		<td>{$row["cat"]}</td>
		<td>{$row["sub1"]}</td>
		<td>{$row["sub2"]}</td>
		<td>{$row["sub3"]}</td>
		<td>{$row["sub4"]}</td>
		<td>{$row["sub5"]}</td>
		<td>{$row["tm"]}</td>
		<td>{$row["per"]}</td>
		<td><button class='row-delete'  data-id='{$row["rollno"]}'><i class='fa-solid fa-trash-can'></i></button></td>
		<td><button class='rowedit' data-bs-toggle='modal'  data-bs-target='#modal1' data-editid='{$row["rollno"]}'><i class='fa-solid fa-pencil'></i></button></td>
		
		</tr>
		
		";
		
	}
	echo $output;
	
	
}
else
{
	echo "No data found";
}





?>
