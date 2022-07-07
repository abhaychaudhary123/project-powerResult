<?php
session_start();
include("conn.php");
error_reporting(0);
?>


<?php





$newtoken = bin2hex(random_bytes(32)); 


$actual_link = $_SERVER['QUERY_STRING'];

$rest = substr("$actual_link", 0, 32);

$rest = $_SESSION['rest'] ;

if($rest == true)
{
	
}
else
{
 ?><script>window.location.replace("en.php");</script><?php
}

$queryselect5 = "SELECT * FROM `users` WHERE token='$rest'  ";
$dataselect5 = mysqli_query($conn,$queryselect5);


$totalselect5 = mysqli_num_rows($dataselect5);
$row = mysqli_fetch_assoc($dataselect5);
$email = $row["emails"];
$name1 = $row["firstname"];
$name2 = $row["lastname"];





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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
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
	display:none;
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


@media only screen and (max-width: 900px) {

#what-we
{
	display:block;
}

#all
{
	display:none;
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

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto;
  background-color: #FD6580;
  padding: 10px;
}
.grid-item-1 {
  background-color: #FD6580;
  border: none;
  padding: 2px;
  font-size: 30px;
  text-align: left;
}

.grid-item-3 {
  background-color: #FD6580;
  border: none;
  padding: 2px;
  font-size: 30px;
  text-align: right;
}



.grid-container-2 {
  display: grid;
  background-color: #FD6580;
  grid-template-columns: 300px auto ;
  padding: 20px;
  grid-gap:20px;
}
.grid-item-a-1 {
  background-color: #FD6580;
  border-radius:10px;
  padding: 10px;
  font-size: 20px;
  text-align: center;
}

.grid-item-a-2 {
  background-color: rgba(255, 255, 255, 0.8);
   border: 4px solid #FD6580;
  border-radius:10px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

.design
{
	border:1px dotted grey;
}

  </style>
  
  

  
  
  
  
  
  

<body>



  <section>
  
  <div class="grid-container">
  <div class="grid-item-1">
         <a class="navbar-brand" style="color:white;font-family: 'Roboto Condensed';-webkit-user-select:none;">&nbsp&nbsp<i class="fa-solid fa-user"></i><?php echo"&nbsp&nbsp$name1 $name2"?></a>
		
  </div>
  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  

<div class="grid-item-3">
<a href="logout.php" class="navbar-brand" style="color:white;font-family: 'Roboto Condensed';"><i class="fa-solid fa-arrow-right-from-bracket"></i><?php echo"&nbspLogout"?></a>
 
        
	  
</div>
  
  
  
  </section>







<!-- <?php echo"$email"?> -->
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


<section id="sec-4">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:145px;color:#FD6580">
          <p id="what-we" style="color:#FD6580;font-size:24px;">WELCOME <?php echo"$name1"?></p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>


<section id="sec-4">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:145px;color:#FD6580">
          <p id="what-we" style="color:#FD6580;font-size:22px;">We are working on it , please open in landscape mode + Desktop Mode</p>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>

<!-----sec4--->
<section id="all">

<section>

<div class="grid-container-2">
  <div class="grid-item-a-1 " id="v-pills-tab" role="tablist">
    
	<ul class="list-group content-box " style="margin-left:0px;" >
	
	<div class="d-flex align-items-start">
	
	
	
	
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   

   <button class="nav-link " id="v-pills-upgrade-tab" style="color:white;background-color:#FD6580;text-align:left;"
   data-bs-toggle="tab" data-bs-target="#v-pills-upgrade" 
   type="button" role="tab" aria-controls="v-pills-upgrade" 
   aria-selected="true"><i class="fa-solid fa-crown"></i>&nbsp&nbspUpgrade to Premium</button>
   
   <button class="nav-link active" id="v-pills-create-tab" style="color:white;background-color:#FD6580;text-align:left;"
   data-bs-toggle="tab" data-bs-target="#v-pills-create" 
   type="button" role="tab" aria-controls="v-pills-create" 
   aria-selected="true"><i class="fa fa-pen-to-square"></i>&nbsp&nbspCreate Project</button>
   
   
   
  <button class="nav-link " id="v-pills-what-tab" style="color:white;background-color:#FD6580;text-align:left;"
   data-bs-toggle="tab" data-bs-target="#v-pills-what" 
   type="button" role="tab" aria-controls="v-pills-what" 
   aria-selected="false"> <i class="fa-brands fa-buffer"></i>&nbsp&nbspWhat we offer</button>
   
      
         <button class="nav-link " id="v-pills-profile-tab" style="color:white;background-color:#FD6580;text-align:left;"
   data-bs-toggle="pill" data-bs-target="#v-pills-profile" 
   type="button" role="tab" aria-controls="v-pills-profile" 
   aria-selected="true"><i class="fa-solid fa-user"></i>&nbsp&nbspYour Profile</button>
   
         <button class="nav-link " id="v-pills-pa-tab" style="color:white;background-color:#FD6580;text-align:left;"
   data-bs-toggle="pill" data-bs-target="#v-pills-pa" 
   type="button" role="tab" aria-controls="v-pills-pa" 
   aria-selected="true"> <i class="fa-solid fa-key"></i>&nbsp&nbspChange Password</button>
   
 <!--          <button class="nav-link " id="v-pills-us-tab" style="color:white;background-color:#FD6580;text-align:left;"
   data-bs-toggle="pill" data-bs-target="#v-pills-us" 
   type="button" role="tab" aria-controls="v-pills-us" 
   aria-selected="true"> <i class="fa fa-address-book"></i>&nbsp&nbspContact Us</button>
   
 
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
	
	-->
	
    </ul>
  
  
  
  
  </div>
  <div class="grid-item-a-2">
    
      <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade " id="v-pills-upgrade" role="tabpanel" aria-labelledby="v-pills-upgrade-tab">
	
	
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
    <li class="list-group-item " style="border:;width:55px;"><i class="fa fa-check" style="font-size:18px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="font-size:18px;border:;width:400px;text-align:left;"> Create School or College Result Reports</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;width:55px;"><i class="fa fa-check" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item  content-box" style="font-size:18px;border:;width:400px;text-align:left;">Free Basic Template</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;width:55px;"><i class="fa fa-check" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">5 Free Professional Template</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;width:55px;"><i class="fa fa-check" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">Overall Subject Result Making</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;width:55px;"><i class="fa fa-check" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">High Quality Data Exporting</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check x" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">Customizable Columns Information Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check x" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">Automatic Reports per Student During Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">Complete Template Store Access
	
	</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:;min-width:55px;"><i class="fa fa-check" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="font-size:18px;border:;width:400px;text-align:left;">powerLab Theme Pack
	
	</li>
    </ul>
	
    </ul>
	
	<div class="col" style="font-size:18px;min-width:145px;padding-top:25px;padding-bottom:15px;"> 
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
	
	
	
	
	
	
	
	
	
	
	</div>
	
	
    <div class="tab-pane fade show active" id="v-pills-create" role="tabpanel" aria-labelledby="v-pills-create-tab">
	
	<section id="sec-4">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="min-width:45px;color:#FD6580">
          <a  href="powerlab-save-configs.php" id="what-we2" style="	font-family: 'Roboto Condensed';text-decoration:none;color:#FD6580">CREATE <i class="fa fa-pen-to-square"></i></a>
    </div>
    
  </div>
</div>
      
	
  </div>
</nav>
</section>

	
	</div>
	
	
    <div class="tab-pane fade" id="v-pills-store" role="tabpanel" aria-labelledby="v-pills-store-tab">3</div>
    <div class="tab-pane fade" id="v-pills-what" role="tabpanel" aria-labelledby="v-pills-what-tab">
	
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
    <h5 class="card-title lm1">What we offer?</h5>
	
	<ul class="list-group content-box " style="" >
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-pen-to-square" style="font-size:18px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="text-align:left;font-size:18px;border:none;width:400px;"> Create School or College Result Reports</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-clone" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item  content-box" style="text-align:left;font-size:18px;border:none;width:400px;">Basic and Professional Templates</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-cookie" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="text-align:left;font-size:18px;border:none;width:400px;">Overall Subject Result Making</li>
    </ul>
	
	
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-person-military-pointing" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="text-align:left;font-size:18px;border:none;width:400px;">Customizable Columns Information Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-wand-magic-sparkles" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="text-align:left;font-size:18px;border:none;width:400px;">Automatic Reports per Student During Result Making</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa-brands fa-affiliatetheme" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="text-align:left;font-size:18px;border:none;width:400px;">powerLab Themes</li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-file-export" style="font-size:18px;color:#FD6580;"></i></li>
    <li class="list-group-item content-box" style="text-align:left;font-size:18px;border:none;width:400px;">High Quality Data Exporting</li>
    </ul>
	
	

    </ul>
	
	
	
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
	
	
	</div>
    <div class="tab-pane fade" id="v-pills-labtheme" role="tabpanel" aria-labelledby="v-pills-labtheme-tab">5</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	
	
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
    <h5 class="card-title lm1">Profile</h5>
	
	<ul class="list-group content-box " style="" >
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-envelope-circle-check" style="font-size:18px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="font-size:18px;text-align:left;
	border:none;width:400px;"> <?php echo"$email"?></li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa fa-signature" style="font-size:18px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="font-size:18px;text-align:left;border:none;width:400px;"><?php echo"$name1 $name2"?> </li>
    </ul>
	
	<ul class="list-group list-group-horizontal lm" style="margin-left:0px;">
    <li class="list-group-item " style="border:none;"><i class="fa-solid fa-dollar-sign" style="margin-left:5px;font-size:18px;color:tomato;"></i></li>
    <li class="list-group-item  content-box" style="font-size:18px;text-align:left;border:none;margin-left:5px;width:400px;"><?php echo"Basic Plan"?> </li>
    </ul>
	
	
    </ul>
	
	
	
	
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
	
	
	
	
	
	
	
	</div>
	
    <div class="tab-pane fade" id="v-pills-pa" role="tabpanel" aria-labelledby="v-pills-pa-tab">
	
	
	<section id="sec-5" >
    <nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;padding-bottom:20px;padding-top:50px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:left;font-family: 'Roboto Condensed';">
 
    <div class="col " style="">
	
	
    <input type="password" id="np"  style="color:#FD6580;" class="form-control shadow-none"  placeholder="New Password" required />
 <input type="password" id="cnp"  style="color:#FD6580;margin-top:10px;" class="form-control shadow-none" placeholder="Confirm New Password" required />
  
  
   <p id="show" style="color:white;background-color:#FD6580;border-radius:10px;text-align:center;font-size:20px;margin-top:10px;"></p>
  
	
	
    <div class="text-center ">
      <button type="button" class="shadow-none" id="save-button" style="padding:4px 8px 4px 8px;color:white;border:none;font-size:20px;background-color:#FD6580;border-radius:10px;"  class="btn btn-primary">Confirm Changes</button>
    </div>

    </div>
	
	
  </div>
</div>
      
	
  </div>
</nav>
</section>


	
	
	
	
	</div>
	
    <div class="tab-pane fade" id="v-pills-us" role="tabpanel" aria-labelledby="v-pills-us-tab">8</div>
  </div>
   
  
   
  
  
  
  
  
  
  
  </div> 
</div>

</section>

<section>


<!-----sec5--->

<section id="sec-5">
<nav class="navbar navbar-expand-lg " style="background-color:white;padding-left:50px;padding-right:50px;padding-bottom:20px;">
  <div class="container-fluid">
   

        <div class="container" >
  
  <div class="row" style="text-align:left;font-family: 'Roboto Condensed';">
 
    <div class="col " style="">
	
	<!-- list groups  -->
	   
  
    


  
	
	
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

<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" >

$(document).ready(function(){
	

	
$("#save-button").on("click",function(e){
	e.preventDefault();
	
	var np = $("#np").val();
	var cnp = $("#cnp").val();
	
	

var sessName = '<?php echo $rest ?>';

	
	console.log(sessName);
	$.ajax({
		url:"ajax-savepass.php",
		type : "POST",
		data : {newpass:np , confirmpass:cnp , sessName:sessName},
		success : function(data){
			if(data == 1)
			{
				 $("#show").html("Password changed Successfully");
			}
			
			else if(data == 0)
			{
				 $("#show").html("Failed to save Password");
			}
			else if(data == 3)
			{
				 $("#show").html("Fields can't be Empty");
			}
			else
			{
				$("#show").html("New Password and Confirm New Password didn't matched");
			}
		}
		
	});
		
		
		
});

});


</script>