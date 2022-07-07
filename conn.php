<?php

$servername = "localhost";
$username = "id18614232_abhay";
$password = "#Kuldeeprenu02";
$dbname = "id18614232_powerusers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Successfully connect";
}

else
{
	echo "Failed to connect due to Technical reasons".mysqli_connect_error();
}


?>
