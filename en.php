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
          <a class="nav-link" href="#pricing" style="color:white;font-family: 'Roboto Condensed';"><i class="fa-solid fa-tag" style="font-size:24px"></i>&nbsp PLANS & PRICING</a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;font-family: 'Roboto Condensed';"><i class="fa fa-address-book" style="font-size:24px"></i>&nbsp CONTACT US</a>
        </li>
      
        
      </ul>
	  
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login-to-powerresults.php" style="color:white;font-family: 'Roboto Condensed';"> LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-an-account.php" style="color:white;font-family: 'Roboto Condensed';"> CREATE AN ACCOUNT</a>
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


<?php 
				
				echo '<div class="alert-success">
   ' . $_SESSION["msg"] . '
</div>';
				  ?>



<!-----sec3 --->

<section id="sec-3">
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;padding-bottom:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:145px;">
          <a href="login-to-powerresults.php" id="btn-1">LOGIN TO POWERRESULTS</a>  &nbsp 
          <a href="create-an-account.php"  id="btn-2">CREATE AN ACCOUNT</a>  
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
    
    <div class="col" style="min-width:145px;">
          <p id="what-we">what we offer ?</p>
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
  <div class="col">
  </div>
    
    <div class="col" style="">
	
	<!-- list groups  -->
	
	<ul class="list-group content-box " style="" >
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-pen-to-square" style="font-size:24px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="border:none;width:400px;"> Create School or College Result Reports</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-clone" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item  content-box" style="border:none;width:400px;">Basic and Professional Templates</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-cookie" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:none;width:400px;">Overall Subject Result Making</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-person-military-pointing" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:none;width:400px;">Customizable Columns Information Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-wand-magic-sparkles" style="font-size:22px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:none;width:400px;">Automatic Reports per Student During Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa-brands fa-affiliatetheme" style="font-size:25px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:none;width:400px;">powerLab Themes</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-file-export" style="font-size:22px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:none;width:400px;">High Quality Data Exporting</li>
    </ul>
	
	

    </ul>
	
	
    </div>
	
	<div class="col">
  </div>
  
    
  </div>
</div>
      
	
  </div>
</nav>
</section>



<!-----sec6--->

<section id="sec-6 " >
<nav class="navbar navbar-expand-lg pricing " id="pricing" style="background-color:#FD6580;padding-top:20px;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:145px;">
          <p id="what-we" style="color:white;">Plans and Pricing</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>


<!-----sec7--->

<section id="sec-7">
<nav class="navbar navbar-expand-lg " style="background-color:#FD6580;padding-top:20px;padding-left:0px;padding-right:0px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" >
  <div class="col">
  </div>
    
    <div class="col" >
	
	<div class="card text-center" style="min-width:240px;margin-left:0px;" >
  <div class="card-body">
    <h5 class="card-title lm1">BASIC PLAN</h5>
    <h5 class="card-title lm1">$0</h5>
	
	<ul class="list-group content-box " style="margin-left:0px;" >
	
	<ul class="list-group list-group-horizontal lm" style="margin:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="border:;width:400px;text-align:left;"> Create School or College Result Reports</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item  content-box" style="border:;width:400px;text-align:left;">Free Basic Template</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">One Free Professional Template</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">Overall Subject Result Making</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">High Quality Data Exporting</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-xmark x" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;"><strike>Customizable Columns Information Result Making</strike></li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-xmark x" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;"><strike>Automatic Reports per Student During Result Making</strike></li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-xmark" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;"><strike >Complete Template Store Access</strike>
	
	</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-xmark" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;"><strike >powerLab Theme Pack</strike>
	</li>
    </ul>
	
    </ul>
	
	<div class="col" style="min-width:145px;padding-top:25px;padding-bottom:15px;"> 
          <a href="twitter.com"  id="btn-3">GRAB IT FREE</a> 
    </div>
	
	
  </div>
</div>
	
	
    </div>
	
	
	
	<div class="col">
  </div>
	
    
  </div>
</div>
      
	
  </div>
</nav>
</section>





<!-----sec8--->

<section id="sec-8">
<nav class="navbar navbar-expand-lg " style="background-color:#FD6580;padding-top:20px;padding-left:0px;padding-right:0px;padding-bottom:34px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" >
  <div class="col">
  </div>
    
    <div class="col" >
	
	<div class="card text-center" style="min-width:240px;margin-left:0px;" >
  <div class="card-body">
    <h5 class="card-title lm1">PREMIUM PLAN</h5>
    <h5 class="card-title lm1">$29</h5>
	
	<ul class="list-group content-box " style="margin-left:0px;" >
	
	<ul class="list-group list-group-horizontal lm" style="margin:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="border:;width:400px;text-align:left;"> Create School or College Result Reports</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item  content-box" style="border:;width:400px;text-align:left;">Free Basic Template</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">5 Free Professional Template</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">Overall Subject Result Making</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">High Quality Data Exporting</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check x" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">Customizable Columns Information Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check x" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">Automatic Reports per Student During Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">Complete Template Store Access
	
	</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check" style="font-size:24px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="border:;width:400px;text-align:left;">powerLab Theme Pack
	
	</li>
    </ul>
	
    </ul>
	
	<div class="col" style="min-width:145px;padding-top:25px;padding-bottom:15px;"> 
          <a href="twitter.com"  id="btn-3">PURCHASE</a> 
    </div>
	
	
  </div>
</div>
	
	
    </div>
	
	
	
	<div class="col">
  </div>
	
    
  </div>
</div>
      
	
  </div>
</nav>
</section>




<!-----sec9 --->

<section id="sec-9">
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;padding-bottom:0px;">
  <div class="container-fluid">
  
 
        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col">
      <p id="julia" style="color:#FD6580;font-size:30px;">subscribe to our newsletter</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>



<!-----sec10 --->

<section id="sec-10">
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;padding-bottom:34px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
     <div class="col"></div>
    <div class="col">
       <div class="mb-3">
    <input type="email" style="min-width:250px;margin-left:0px;" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp"></br>
     <input type="button"  id="btn-3" value="SUBSCRIBE">
  </div>
    </div>
     <div class="col"></div>
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

