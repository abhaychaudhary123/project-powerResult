<?php
session_start();
include("conn.php");
error_reporting(0);
?>

<html lang="en">
<head>
  <title>powerResults</title>
  
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <script src="https://kit.fontawesome.com/yourcode.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="save.css">
  <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
  <script src="save.js"></script>
  <script src="https://kit.fontawesome.com/f744f327c6.js" crossorigin="anonymous"></script>
  <style type="text/css">.disclaimer { display: none; }</style>
  
  </head>

<style>
table,tr,td
{
	border:1px solid black;
	text-align:center;
}
</style>
<!-----read --->

<section id="sec-11">
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col">
	
	<?php
	$q = "SELECT * FROM `users`";
$query_run = mysqli_query($conn,$q);

$select = mysqli_num_rows($query_run);


if($select > 0)	
{
	while($row=mysqli_fetch_assoc($query_run))
	{
		echo "
		<table class='table'>
  <thead>
    <tr>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Email ID</th>
      <th scope='col'>Country Code</th>
      <th scope='col'>Phone Number</th>
      <th scope='col'>Account Created</th>
      <th scope='col'>Time</th>
      <th scope='col'>Key</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<td>{$row["firstname"]}</td>
		<td>{$row["lastname"]}</td>
		<td>{$row["emails"]}</td>
		<td>{$row["country"]}</td>
		<td>{$row["phonenumber"]}</td>
		<td>{$row["created"]}</td>
		<td>{$row["timeday"]}</td>
		<td>{$row["token"]}</td>
		
		</tr>
  </tbody>
</table>

		
		
		";
		
	}
	
	
}
else
{
	echo "No data found";
}



	
	?>
	
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>






</body>


</html>

