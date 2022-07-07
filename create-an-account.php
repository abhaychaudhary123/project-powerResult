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
    <button class="shadow-none navbar-toggler" style="color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" style="font-size:30px"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;font-family: 'Roboto Condensed';"><i class="fa fa-shopping-cart" style="font-size:24px"></i>&nbsp TEMPLATES STORE</a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;font-family: 'Roboto Condensed';"><i class="fa fa-gift" style="font-size:24px"></i>&nbsp SPECIAL OFFERS</a>
        </li>
		
		
		
		 <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;font-family: 'Roboto Condensed';"><i class="fa fa-address-book" style="font-size:24px"></i>&nbsp CONTACT US</a>
        </li>
      
        
      </ul>
	  
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		 <li class="nav-item">
          <a class="nav-link " aria-current="page" href="en.php" style="color:white;font-family: 'Roboto Condensed';"> HOME</a>
        </li>
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
          <p id="what-we" style="color:#FD6580">Create an account</p>
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
	
	<form class="padd" method="POST" autocomplete="off" name="myform" >

                 
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline" >
        <input type="text" id="form3Example1" style="color:#FD6580" class="form-control ab shadow-none" name="fn" placeholder="First Name" required />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2"  style="color:#FD6580" class="form-control ab shadow-none" name="ln" placeholder="Last Name" required  />
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3"  style="color:#FD6580" class="form-control shadow-none" name="em" placeholder="Email address" required />
  </div>

  <!-- country and number input -->
  <div class="row mb-4">
    <div class="col">
      
	  
	  <select name="country"  style="color:#FD6580" class="form-control shadow-none" id="country" required >
            <option value="+91" label="India">India (+91)</option>
            <option value="+61" label="Australia">Australia (+61)</option>
            <option value="+977" label="Neoal">Nepal (+977)</option>
            <option value="+880" label="Bangladesh">Bangladesh (+880)</option>
            <option value="+7" label="Russia">Russia (+7)</option>
        
    </select>
	  
	  
	  
	  
	  
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="tel" id="form3Example2"  style="color:#FD6580" class="form-control shadow-none" name="ph" pattern="[0-9]{10}" placeholder="Phone number" required />
      </div>
    </div>
  </div>


<!-- country and number input 
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="password" id="form3Example1" style="color:#FD6580" class="form-control shadow-none" name="pass" placeholder="Password"  />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="password" id="form3Example2" style="color:#FD6580" class="form-control shadow-none" name="cpass" placeholder="Confirm password"  />
      </div>
    </div>
  </div>
-->
 

  
				   

	

	<!-- -->
	
	
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
    
    <div class="col" style="min-width:145px;margin-top:-15px;color:#FD6580">
	
	<p id="warning"></p>
	
	<!-- Submit button -->
  <input type="submit" name="submitClick" id="btn-3"  class="btn btn-primary shadow-none btn-block mb-4" value="Create an account" >

                  <p class="mb-5 pb-lg-2" style="color: #393f81;font-family: 'Roboto Condensed';">Already have an account? <a href="login-to-powerresults.php" style="text-decoration:none;color: #FD6580;">Login here</a></p>
                  
	
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
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['em'];
$cou = $_POST['country'];
$ph = $_POST['ph'];

date_default_timezone_set('Asia/Kolkata');
$date = date("d-m-Y");
$time = date("h:i:s l");



$token = bin2hex(random_bytes(16)); 

$queryselect = "SELECT * FROM `users` WHERE emails='$em' || phonenumber='$ph'  ";
$dataselect = mysqli_query($conn,$queryselect);


$totalselect = mysqli_num_rows($dataselect);

if($totalselect==0) //means account is fresh 
{
	
	$enc_pass = password_hash($pass,PASSWORD_BCRYPT);
	
	$query = "INSERT INTO `tempusers`(`firstname`, `lastname`, `emails`, `country`, `phonenumber`, `password`, `token`, `created`,`timeday`) VALUES ('$fn','$ln','$em','$cou','$ph','$enc_pass','$token','$date','$time')";
    $insertall = mysqli_query($conn,$query);
	
	if($insertall)
	{
		$query = array(
    'usertoken' => $token,
    'user' => $fn,
    'emailactivator' => $em,
    );

$query = http_build_query($query);

	   
	    ?><meta http-equiv="refresh" content="0;url=en.php"><?php
	   $to_email = "$em";
	   $subject = "Welcome to powerResults ";
	   $body = "Hi $fn ,\nTo activate your account , please click on the below link to activate\nhttps://powerresults.000webhostapp.com/activate-this-user.php?$query
\nhttp://localhost/powerResults.in/activate-this-user.php?$query	  
	  \nDo not share this link with someone
	  \nThanks\nTeam powerResults";
	   $headers = "From: powerResults4you@gmail.com";
	   if(mail($to_email,$subject,$body,$headers)){
		  $_SESSION['msg'] = "<h6 id='ptext' style='text-align:center;background-color:#FD6580;color:white;padding:10px;margin-bottom:10px;font-family: 'Roboto Condensed';'>An Email Has Been Sent to $em to Activate Your Account</h6>";
	   }
	   else{
		 echo "<script type='text/javascript'>alert('Email Sending Failed');</script>"; 
	   }
	}
}

else
{
    echo "<script type='text/javascript'>alert('Account already exist with these credentials');</script>";
}





}


?>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>