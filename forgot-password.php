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
    
    <div class="mx-auto" id="navbarSupportedContent" style="text-align:center;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
       
      
        
      </ul>
	  
      <div class="d-flex">
        <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
		
		 <li class="nav-item">
          <a class="nav-link " aria-current="page" href="en.php" style="color:white;font-family: 'Roboto Condensed';"> HOME</a>
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
          <p id="what-we" style="color:#FD6580">Account Recovery</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>


<!-----sec5--->

<section id="sec-5">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;padding-bottom:20px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:left;font-family: 'Roboto Condensed';">
 
    <div class="col " style="">
	
	<!-- list groups  -->
	
	<form class="padd" method="POST" autocomplete="off" action="" >

                 
  
    

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3"  style="color:#FD6580" class="form-control shadow-none" name="em" placeholder="Email address" required />
  </div>
  
    

  
	
	
    </div>
	
	
  </div>
</div>
      
	
  </div>
</nav>
</section>

 <?php echo '<div class="alert-success">' . $_SESSION["msg10"] . '</div>';  ?>
<!-----sec4--->

<section id="sec-4">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:145px;margin-top:-15px;color:#FD6580">
	
	<p id="warning"></p>
	
	<!-- Submit button -->
  <input type="submit" name="submitClick" id="btn-3"  class="btn btn-primary shadow-none btn-block mb-4" value="Recover your Account" >
<p class="mb-5 pb-lg-2" style="color: #393f81;font-family: 'Roboto Condensed';"><a href="login-to-powerresults.php" style="text-decoration:none;color: #FD6580;">Login</a> | <a href="create-an-account.php" style="text-decoration:none;color: #FD6580;">Create an account</a></p>

                  
	
    </div>
    
  </div>
</div>
       
</form> 
	
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

<?php



if(isset($_POST['submitClick']))
{
$em = $_POST['em'];
$rest = $_SESSION['rest'] ;


$pass = rand(10000,99999);


$queryselect = "SELECT * FROM `users` WHERE emails='$em'  ";
$dataselect = mysqli_query($conn,$queryselect);


$totalselect = mysqli_num_rows($dataselect);

$row = mysqli_fetch_assoc($dataselect);
$n1 = $row["firstname"];
$n2 = $row["lastname"];

if($totalselect!=0) //means account is fresh 
{
	?><meta http-equiv="refresh" content="0;url=forgot-password.php"><?php
	
	    $enc_pass = password_hash($pass,PASSWORD_BCRYPT);
		$run = "UPDATE users SET password='$enc_pass' WHERE emails='$em'  ";
        $run1 = mysqli_query($conn,$run);
		
		$_SESSION['msg10'] = "<h6 id='ptext' style='text-align:center;background-color:#FD6580;color:white;padding:10px;margin-bottom:10px;font-family: 'Roboto Condensed';'>A new temporary password has been sent to $em</h6>";
	   
	
	if($run1)
	{
		
	   $to_email = "$em";
	   $subject = "Account recovery";
	   $body = "Hi $n1 $n2 ,\nYour new temporary password is $pass\nYou can change your password once you logged in\n\nDo not share this password with someone
	  \nThanks\nTeam powerResults";
	   $headers = "From: powerResults4you@gmail.com";
	   if(mail($to_email,$subject,$body,$headers)){
		  }
	   else{
		   $_SESSION['msg10'] = "<h6 id='ptext' style='text-align:center;background-color:#FD6580;color:white;padding:10px;margin-bottom:10px;font-family: 'Roboto Condensed';'>Email Sending Failed</h6>";

	   }
	}
}

else
{
     echo "<script type='text/javascript'>alert('No such account exist');</script>";
}





}


?>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>