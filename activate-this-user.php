<?php
session_start();
include("conn.php");
error_reporting(0);
?>

<?php

$ut = $_GET['usertoken'];
$fn = $_GET['user'];
$em = $_GET['emailactivator'];

if(isset($_POST['submitClick']))
{


 
$queryselect = "SELECT * FROM `tempusers` WHERE token='$ut' and firstname='$fn'  ";
$dataselect = mysqli_query($conn,$queryselect);

$queryselect5 = "SELECT * FROM `users` WHERE token='$ut' and firstname='$fn'  ";
$dataselect5 = mysqli_query($conn,$queryselect5);


$totalselect = mysqli_num_rows($dataselect);
$newdata = mysqli_fetch_assoc($dataselect);

$totalselect5 = mysqli_num_rows($dataselect5);
$newdata = mysqli_fetch_assoc($dataselect);

$pass = rand(10000,99999);


if($totalselect5==0 && $totalselect!=0 ) //means account is there
{
	 $queryselect1 = "INSERT INTO users (`firstname`, `lastname`, `emails`, `country`, `phonenumber`, `password`, `token`, `created`, `timeday`)
     SELECT `firstname`, `lastname`, `emails`, `country`, `phonenumber`, `password`, `token`, `created`, `timeday` FROM tempusers 
	 WHERE token='$ut' && firstname='$fn'

	 ";
     $dataselect1 = mysqli_query($conn,$queryselect1);
	 if($dataselect1)
	 {
		 $query2 = "DELETE FROM `tempusers` WHERE token='$ut' && firstname='$fn' ";
		 $dataquery = mysqli_query($conn,$query2);
		 
		$create = "CREATE TABLE $ut(
                 rollno varchar(255),
         sn varchar(255),
         father varchar(255),
         mother varchar(255),
         dob varchar(255),
         sex varchar(255),
         cat varchar(255),
         sub1 varchar(255),
         sub2 varchar(255),
         sub3 varchar(255),
         sub4 varchar(255),
         sub5 varchar(255),
         sub6 varchar(255),
         sub7 varchar(255),
         sub8 varchar(255),
         sub9 varchar(255),
         sub10 varchar(255),
         tm varchar(255),
         per varchar(255),
		  PRIMARY KEY (rollno)
        )";
		 
		 $create = mysqli_query($conn,$create);
		 
		 $_SESSION['msg2'] = "<h6 id='ptext' style='text-align:center;background-color:#FD6580;color:white;padding:10px;margin-bottom:10px;font-family: 'Roboto Condensed';'>Hi $fn , Account Activated Successfully (If you didn't got temporary password mail , try forgot password or check mail in outlook gmail)</h6>";
          
		 $to_email = "$em";
	     $subject = "Activation Successful ";
	     $body = "Hi $fn ,\nYour account has been activated successfully \nLogin Credentials : \nURL : https://powerresults.000webhostapp.com/login-to-powerresults.php \nTemporary Login Password : $pass \nNow you can access our powerLab to create school or college projects\nUpgrade your plan to use powerful perks at $29
\nLocal Login Credentials : \nURL : http://localhost/powerResults.in/login-to-powerresults.php \nTemporary Login Password : $pass \n	   
	   \nThanks\nTeam powerResults";
	     $headers = "From: powerResults4you@gmail.com";
		 
		
			 
	     if(mail($to_email,$subject,$body,$headers)){
			  $enc_pass = password_hash($pass,PASSWORD_BCRYPT);
			 $run = "UPDATE users SET password='$enc_pass' WHERE token='$ut' and firstname='$fn' and emails='$em'  ";
             $run1 = mysqli_query($conn,$run);
		 
	     }
	     else{
		 echo "<script type='text/javascript'>alert('Email Sending Failed');</script>"; 
	     }
	


	}


	
}

else if($totalselect5!=0 && $totalselect==0 )
{
     $_SESSION['msg2'] = "<h6 id='ptext' style='text-align:center;background-color:#FD6580;color:white;padding:10px;margin-bottom:10px;font-family: 'Roboto Condensed';'>Hi $fn , Your Account is already Activated</h6>";
}



else
{
     $_SESSION['msg2'] = "<h6 id='ptext' style='text-align:center;background-color:#FD6580;color:white;padding:10px;margin-bottom:0px;font-family: 'Roboto Condensed';'>Hi $fn , Your Account Activation has been Failed</h6>";
}





}

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

#m:hover
{
	color:white
}

.navbar-toggler {
} 

#app-logo
{
	width:8%;
	border-radius:10px;
}
#julia
{
	color:black;
	font-family: 'Julius Sans One';
	font-size:30px;
}

.lm1
{
	font-family: 'Julius Sans One';
}

#btn-1
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:white;
	color:#FD6580;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

#btn-1:hover
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:#FD6580;
	color:white;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

#btn-2
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:white;
	color:#FD6580;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

#btn-2:hover
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:#FD6580;
	color:white;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

#what-we
{
	color:black;
	font-family: 'Julius Sans One';
	font-size:33px;
}

.list-group
{
	
	margin-left:50px;
}
.content-box
{
	color:#FD6580;
	font-family: 'Roboto Condensed';
}

#btn-3
{
	
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:#FD6580;
	color:white;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

#btn-3:hover
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:white;
	color:#FD6580;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}


#copy
{
	font-size:25px;
	font-family: 'Julius Sans One';
	color:#FD6580;
	margin-left:0px;
	
	
}
input[type=text]:focus ,  input[type=email]:focus , input[type=password]:focus , input[type=tel]:focus 
{
	
  border: 1px solid #FD6580;
}


#country:focus
{
	 border: 1px solid #FD6580;
}























@media only screen and (max-width: 990px) {
 #app-logo
{
	width:18%;
	border-radius:10px;
}
#julia
{
	color:black;
	font-family: 'Julius Sans One';
	font-size:25px;
}
.navbar-toggler {
  margin-left:-40px;
} 



}



@media only screen and (max-width: 654px) {

.list-group
{
	color:#FD6580;
	margin-left:0px;
}


}

@media only screen and (max-width: 434px) {

.card
{
	margin-left:-20px;
}


}

@media only screen and (max-width: 475px) {

#country
{
	padding-right:20px;;
}

}

@media only screen and (max-width: 464px) {

.x
{
	margin-top:10px;
}
#copy
{
	font-size:20px;
}
}



@media only screen and (max-width: 533px) {
 #app-logo
{
	width:28%;
	border-radius:10px;
}
#julia
{
	color:black;
	font-family: 'Julius Sans One';
	font-size:14px;
}
.navbar-toggler {
  margin-left:-40px;
} 



#btn-1
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:white;
	color:#FD6580;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
	display:block;
}

#btn-2
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:white;
	color:#FD6580;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
	display:block;
}


}

  </style>

<body>

<section id="sec-1">
<nav class="navbar navbar-expand-lg " style="background-color:#FD6580;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   
    <div class="mx-auto" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        
      </ul>
	  
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login-to-powerresults.php" style="color:white;font-family: 'Roboto Condensed';"> LOGIN</a>
        </li>
       
        
     
      </ul></div>
	  
	  
    </div>
  </div>
</nav>
</section>


<!-----sec2 --->

<section id="sec-2">
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col">
      <p id="julia">power&nbsp<img id="app-logo" src="prlogopink.jpg">&nbspResults</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>






<!-----sec4--->

<section id="sec-4">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:145px;color:#FD6580">
          <p id="what-we" style="color:#FD6580;font-size:25px;">Click the below button to activate your account</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>

 <?php echo '<div class="alert-success">' . $_SESSION["msg2"] . '</div>';  ?>


<!-----sec11 --->

<section id="sec-11">
<nav class="navbar navbar-expand-lg " style="background-color:;padding-left:50px;padding-right:50px;padding-bottom:100px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col">
	<form method="POST">
	  <input type="submit" name="submitClick" id="btn-3" value="ACTIVATE">
	  </form>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>




<!-----sec11 --->

<section id="sec-11">
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col">
      <p id="copy">Copyright@2022</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>




</body>


</html>

