<?php
session_start();
include('conn.php');
error_reporting(0);
?>
<?php
$sb1 = $_POST["subname1"];
$sb2 = $_POST["subname2"];
$sb3 = $_POST["subname3"];
$sb4 = $_POST["subname4"];
$sb5 = $_POST["subname5"];
$sessName = $_POST['sessName'];

$rollno = $_POST['rollno'];



$sql="SELECT * FROM `$sessName` WHERE rollno = '$rollno' ";
$data1 = mysqli_query($conn,$sql);

$totalselect = mysqli_num_rows($data1);
$output = '';

if($totalselect > 0)	
{

	while($row=mysqli_fetch_assoc($data1))
	{
		$output .= "
	
        
		  
  <div class='col-md-12 som' style='padding:10px;margin-top:0px;'>
    <input type='text' class='shadow-none form-control' id='rn1' placeholder='Roll no.' disabled value='{$row["rollno"]}' autocomplete='off'>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='sn1' value='{$row["sn"]}' placeholder='Student Name' autocomplete='off'>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control'  id='fn1' value='{$row["father"]}' placeholder='Father Name' autocomplete='off'>
  </div>
  
	<!--  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='mn1' name='mn' value='{$row["mother"]}' placeholder='Mother Name' autocomplete='off'>
  </div>
 -->
  
  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='text' class='shadow-none form-control' id='dob1' name='dob' value='{$row["dob"]}' placeholder='DOB' autocomplete='off'>
  </div>
  
  
  
  <div class='col-12' style='padding:10px;margin-top:-15px;'><select id='sex1'  value='{$row["sex"]}' class='shadow-none form-select'  name='sex'>
       <option selected hidden >{$row["sex"]}</option>
      <option value='M'>M</option>
      <option value='F'>F</option>
      <option value='O'>O</option>
    </select></div>
	
 <div class='col-12' style='padding:10px;margin-top:-15px;'><select id='cat1' value='{$row["cat"]}' class='shadow-none form-select' name='cat'>
      <option selected hidden >{$row["cat"]}</option>
      <option value='General'>General</option>
      <option value='OBC'>OBC</option>
      <option value='SC'>SC</option>
      <option value='ST'>ST</option>
    </select></div>
  
  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='number' class='shadow-none form-control' id='sb11' value='{$row["sub1"]}' placeholder='Marks in $sb1 ' autocomplete='off'>
  </div>
  
  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='number' class='shadow-none form-control' id='sb21' value='{$row["sub2"]}'  placeholder='Marks in $sb2 '  autocomplete='off'> 
  </div>
  
  <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='number' class='shadow-none form-control' id='sb31' value='{$row["sub3"]}' placeholder='Marks in $sb3 ' autocomplete='off'>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='number' class='shadow-none form-control' id='sb41' value='{$row["sub4"]}' placeholder='Marks in  $sb4 ' autocomplete='off'>
  </div>
  
   <div class='col-md-12' style='padding:10px;margin-top:-15px;'>
    <input type='number' class='shadow-none form-control' id='sb51' value='{$row["sub5"]}' placeholder='Marks in $sb5 ' autocomplete='off'>
  </div>

	
		
		";
		
	}
	echo $output;
	
	
}
else
{
	echo 'No data found';
}






?>
