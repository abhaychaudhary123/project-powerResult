<?php
session_start();
include("conn.php");
error_reporting(0);
?>

<?php
$rest = $_SESSION['rest'] ;
if($rest == true)
{
	
}
else
{
 ?><script>window.location.replace("en.php");</script><?php
}

if(isset($_POST['submit-5']))
{
$examtype = $_POST['examtype'];
$class = $_POST['class'];
$schoolname = $_POST['schoolname'];
$year = $_POST['year'];
$subs = $_POST['subs'];
$percentage = $_POST['percentage'];
$tmm = $_POST['tmm'];


 
 $query = array(
 
    'sub1' => $_POST['sub-1-5'],
    'sub2' => $_POST['sub-2-5'],
    'sub3' => $_POST['sub-3-5'],
    'sub4' => $_POST['sub-4-5'],
    'sub5' => $_POST['sub-5-5'],
    'examtype' => $_POST['examtype'],
    'class' => $_POST['class'],
    'schoolname' => $_POST['schoolname'],
    'year' => $_POST['year'],
    'subs' => $_POST['subs'],
    'percentage' => $_POST['percentage'],
    'tmm' => $_POST['tmm'],
    );

	 $newtoken = bin2hex(random_bytes(32));
$query = http_build_query($query);
 
 ?><script>window.location.replace("powerlab1.php?<?php echo $query; ?>");</script><?php

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

#submit-5 , #submit-6 , #submit-7 , #submit-8 , #submit-9
{
	
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:#FD6580;
	color:white;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

#submit-5:hover , #submit-6:hover , #submit-7:hover , #submit-8:hover , #submit-9:hover
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








  <!-- create button-->

 <section class="my-5">
    <div class="container">
      <div class="p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
	   <form method ="POST" class="row g-3">
	    
  <div class="col-md-5">
    <input type="text" class="shadow-none form-control" name="examtype" id="examtype" placeholder="Exam Type e.g. Mid Term Examimation Result">
  </div>
  <div class="col-md-3"><select id="class" class="shadow-none form-select" name="class">
      <option selected>Select Class</option>
      <option>Class VIII</option>
      <option>Class IX</option>
      <option>Class X</option>
      <option>Class XI</option>
      <option>Class XII</option>
    </select></div>
	
  <div class="col-md-4">
    <input type="text" class="shadow-none form-control" id="schoolname" name="schoolname" placeholder="School Name">
  </div>
  <div class="col-3""><select id="inputState" class="shadow-none form-select" name="year">
      <option selected>Select Session Year</option>
      <option>2020-2021</option>
      <option>2021-2022</option>
      <option>2022-2023</option>
    </select></div>
  <!-- <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="prepare" name="prepare" placeholder="Preparing By">
  </div> -->
  <div class="col-md-3">
    <select id="select-subs" name="subs" class="shadow-none form-select">
      <option selected value="selected">No. of subjects</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="percentage" name="percentage" placeholder="% / weightage">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="tmm" name="tmm" placeholder="Total Maximum Marks">
  </div>
  
  

  </div>
  
  </div>
  
  
  </section>
  
  <!-- toggling-->

	   
      </div>
    </div>
  </section>
  
  
  
<!--   5 subjects --->
  
  
<section class="my-5" >
    <div class="container" id="box-sub-5" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-5" name="sub-1-5" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-5" name="sub-2-5" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-5" name="sub-3-5" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-5" name="sub-4-5" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-5" name="sub-5-5" placeholder="Subject 5">
  </div>
  
   <div class="col-12">
    <button type="submit" id="submit-5" style="border:;" name="submit-5" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>

  </div>
  
  </div>

  </section>
  
  <!-- 6 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-6" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
 <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-6" name="sub-1-6" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-6" name="sub-2-6" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-6" name="sub-3-6" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-6" name="sub-4-6" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-6" name="sub-5-6" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-6" name="sub-6-6" placeholder="Subject 6">
  </div>
  
   <div class="col-12">
    <button type="submit" id="submit-6"  name="submit-6" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>



  </div>
  
  </div>
  
  </section>

	   
     
  
  <!-- 7 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-7" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-7" name="sub-1-7" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-7" name="sub-2-7" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-7" name="sub-3-7" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-7" name="sub-4-7" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-7" name="sub-5-7" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-7" name="sub-6-7" placeholder="Subject 6">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-7-7" name="sub-7-7" placeholder="Subject 7">
  </div>
  
   <div class="col-12">
    <button type="submit" id="submit-7"  name="submit-7" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>



  </div>
  
  </div>
  
  </section>
  
  
  
    <!-- 8 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-8" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-8" name="sub-1-8" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-8" name="sub-2-8" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-8" name="sub-3-8" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-8" name="sub-4-8" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-8" name="sub-5-8" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-8" name="sub-6-8" placeholder="Subject 6">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-7-8" name="sub-7-8" placeholder="Subject 7">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-8-8" name="sub-8-8" placeholder="Subject 8">
  </div>
  
  
   <div class="col-12">
    <button type="submit" id="submit-8" name="submit-8" class="shadow-none btn btn-primary">Save Configurations</button>
  </div>


  </div>
  
  </div>
  
  </section>

  <!-- 9 subjects-->
  
  
  
<section class="my-5">
    <div class="container" id="box-sub-9" style="display:none;">
      <div class="row g-3 p-4 text-white text-center" style="background-color:#F8F9FA;" id="main-items">
       
	   
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-1-9" name="sub-1-9" placeholder="Subject 1">
  </div>
	
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-2-9" name="sub-2-9" placeholder="Subject 2">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-3-9" name="sub-3-9" placeholder="Subject 3">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-4-9" name="sub-4-9" placeholder="Subject 4">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-5-9" name="sub-5-9" placeholder="Subject 5">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-6-9" name="sub-6-9" placeholder="Subject 6">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-7-9" name="sub-7-9" placeholder="Subject 7">
  </div>
  
   <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-8-9" name="sub-8-9" placeholder="Subject 8">
  </div>
  
  <div class="col-md-2">
    <input type="text" class="shadow-none form-control" id="sub-9-9" name="sub-9-9" placeholder="Subject 9">
  </div>
  
  
   <div class="col-12">
    <button type="submit" id="submit-9" name="submit-9" class="shadow-none btn btn-primary" >Save Configurations</button>
  </div>


  </div>
  
  </div>
  
  </section>
  
 </div>
    </div>
  </section>
</form>









<!-----sec11 --->

<footer>
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
</footer>




</body>


</html>








<script>
$(document).ready(function(){
  $("#select-subs").click(function(){
	    var yr = $(this).val();
		if(yr == '5')
		{
          $("#box-sub-5").show();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
		else if(yr == '6')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").show();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
		
		else if(yr == '7')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").show();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
		else if(yr == '8')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").show();
          $("#box-sub-9").hide();
		}
		
		else if(yr == '9')
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").show();
		}
		else
		{
		  $("#box-sub-5").hide();
          $("#box-sub-6").hide();
          $("#box-sub-7").hide();
          $("#box-sub-8").hide();
          $("#box-sub-9").hide();
		}
  });
 
});
</script>

