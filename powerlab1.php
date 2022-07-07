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



$subname1 = $_GET['sub1'];
$subname2 = $_GET['sub2'];
$subname3 = $_GET['sub3'];
$subname4 = $_GET['sub4'];
$subname5 = $_GET['sub5'];

 $_SESSION['sub1'] = $subname1;
$_SESSION['sub2'] = $subname2 ;
$_SESSION['sub3'] = $subname3;
$_SESSION['sub4'] = $subname4;
 $_SESSION['sub5'] = $subname5;


$examtype = $_GET['examtype'];
$class = $_GET['class'];
$schoolname = $_GET['schoolname'];
$year = $_GET['year'];
$prepare = $_GET['prepare'];
$subs = $_GET['subs'];
$percentage = intval($_GET['percentage']);
$tmm = intval($_GET['tmm']);

 $_SESSION['examtype'] = $examtype;
 $_SESSION['class'] = $class;
 $_SESSION['schoolname'] = $schoolname;
 $_SESSION['year'] = $year;

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

.row-delete
{
	background-color:transparent;
	border:none;
	color:white;
}
.rowedit
{
	background-color:transparent;
	border:none;
	color:white;
}
.navbar-toggler {
} 

#app-logo
{
	width:37%;
	border-radius:10px;
}
#julia 
{
	color:black;
	font-family: 'Julius Sans One';
	font-size:25px;
	
}

#copy
{
	color:#FD6580;
	font-family: 'Julius Sans One';
	font-size:30px;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 300px;

  padding: 1px 16px;
  height: 1000px;
}




#add
{
	
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:#FD6580;
	color:white;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
	width:120px;
	margin-left:50px;
}

#add:hover
{
	font-family: 'Roboto Condensed';
	border:3px solid #FD6580;
	background-color:white;
	color:#FD6580;
	border-radius:10px;
	padding:10px;
	text-decoration:none;
}

input[type=text]:focus ,  input[type=email]:focus , input[type=number]:focus , input[type=select]:focus 
{
	
  border: 1px solid #FD6580;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

select.sex option:hover {
    box-shadow: 0 0 10px 100px #1882A8 inset;
}
</style>

<body>






<div class="sidebar">


  
  <div class="col-md-12 som" style="padding:10px;margin-top:25px;">
    <input type="text" class="shadow-none form-control" name="rn" id="rn" placeholder="Roll no." autocomplete="off">
  </div>
  
   <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="text" class="shadow-none form-control" name="sn" id="sn" placeholder="Student Name" autocomplete="off">
  </div>
  
   <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="text" class="shadow-none form-control" name="fn" id="fn" placeholder="Father Name" autocomplete="off">
  </div>
  
	<!--  <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="text" class="shadow-none form-control" id="mn" name="mn" placeholder="Mother Name" autocomplete="off">
  </div>
 -->
  
  <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="text" class="shadow-none form-control" id="dob" name="dob" placeholder="DOB" autocomplete="off">
  </div>
  
  
  
  <div class="col-12" style="padding:10px;margin-top:-15px;"><select id="sex" class="shadow-none form-select" name="sex">
      <option selected value="">Sex</option>
      <option value="M">M</option>
      <option value="F">F</option>
      <option value="O">O</option>
    </select></div>
	
 <div class="col-12" style="padding:10px;margin-top:-15px;"><select id="cat" class="shadow-none form-select" name="cat">
      <option selected value="">Category</option>
      <option value="General">General</option>
      <option value="OBC">OBC</option>
      <option value="SC">SC</option>
      <option value="ST">ST</option>
    </select></div>
  
  <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="number" class="shadow-none form-control" id="sb1"  placeholder="Marks in <?php echo "$subname1"; ?>  " autocomplete="off">
  </div>
  
  <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="number" class="shadow-none form-control" id="sb2"  placeholder="Marks in <?php echo "$subname2"; ?>" autocomplete="off"> 
  </div>
  
  <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="number" class="shadow-none form-control" id="sb3"  placeholder="Marks in <?php echo "$subname3"; ?> " autocomplete="off">
  </div>
  
   <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="number" class="shadow-none form-control" id="sb4"  placeholder="Marks in <?php echo "$subname4"; ?> " autocomplete="off">
  </div>
  
   <div class="col-md-12" style="padding:10px;margin-top:-15px;">
    <input type="number" class="shadow-none form-control" id="sb5"  placeholder="Marks in <?php echo "$subname5"; ?> " autocomplete="off">
  </div>
  
  <div class="col-md-12" style="padding:10px;margin-top:-5px;">
   
    <button  id="add" class="shadow-none btn btn-primary">Add Data</button>
 

   </div>


</div>

<div class="content">




<section id="sec-2" >
<nav class="navbar navbar-expand-lg " style="background-color:#F8F9FA;padding-left:50px;padding-right:50px;">
  <div class="container-fluid ">
   

        <div class="container" >
  
  <div class="row" style="text-align:center;">
    
    <div class="col" style="background-color:#FD6580;" >
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand"  style="-webkit-user-select:;"><p id="show" style="font-family:'Roboto Condensed';color:#FD6580;margin-top:10px;">Live Operations</p></a>
        
      </button>
      
            <div class="d-flex ms-auto">
			
			<form action="pdf_generate.php" method="POST">
                <button type="submit" class="shadow-none btn btn-primary border-0" id="export1" style="margin-top:16px;background-color:#009270;"><i class="fa-solid fa-file-export"></i>&nbsp;Export To PDF</button>
				
				</form>
				&nbsp;
				<form action="pdf_generate_less.php" method="POST">
                <button type="submit" class="shadow-none btn btn-primary border-0" id="export2" style="margin-top:16px;background-color:#009270;"><i class="fa-solid fa-file-export"></i>&nbsp;Export To PDF (No additional Info)</button>
				
				</form>
				&nbsp;
               </div>
			   <button  id="deleteall" style="background-color:red;border:none;" class="shadow-none btn btn-primary"> <i class="fa-solid fa-trash-o"></i>&nbsp;Delete All</button> &nbsp;
			   
			
			
      </div>
	  
	
    </div>
  </nav>
    <table class="table text-center"  style="font-family: 'Roboto Condensed';margin-top:10px;background-color:#FD6580;color:white;">
 <thead>
    <tr>
      <td scope="col">Roll No</td>
      <td scope="col">Student Name</td>
      <td scope="col">Father Name</td>
      <td scope="col">DOB</td>
      <td scope="col">Sex</td>
      <td scope="col">Category</td>
      <td scope="col"><?php echo "$subname1"; ?></td>
      <td scope="col"><?php echo "$subname2"; ?></td>
      <td scope="col"><?php echo "$subname3"; ?></td>
      <td scope="col"><?php echo "$subname4"; ?></td>
      <td scope="col"><?php echo "$subname5"; ?></td>
      <td scope="col">Total Marks</td>
      <td scope="col">Percentage</td>
    </tr>
  </thead>
   <thead id="table-data">
  <thead>
  
</table>



<div class='modal fade' id='modal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' style="color:#FD6580;font-family: 'Julius Sans One';" id='exampleModalLabel'>Edit Details</h5>
        <button type='button' class='shadow-none btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body' id="m1">
        

		
      </div>
      <div class='modal-footer'>
        <button type='button' id="save-changes" data-bs-dismiss='modal' style="background-color:#FD6590;border:none;font-family: 'Roboto Condensed';" class=' shadow-none mx-auto btn btn-primary'>Save Changes</button>
      </div>
    </div>
  </div>
</div>



      
    </div>
    
  </div>
</div>
      






  </div>
</nav>
</section>









</div>












</body>


</html>





<script type="text/javascript" >

$(document).ready(function(){
	function loadTable()
	{

	$.ajax({
		url:"ajax-loaddatatable.php",
		type : "POST",
		
		success : function(data){
			$("#table-data").html(data);
			
		}
		
	});
	
	}
	loadTable();

	
$("#add").on("click",function(e){
	e.preventDefault();
	
	var sb1 = $("#sb1").val();
	var sb2 = $("#sb2").val();
	var sb3 = $("#sb3").val();
	var sb4 = $("#sb4").val();
	var sb5 = $("#sb5").val();
	
	var rn = $("#rn").val();
	var sn = $("#sn").val();
	var fn = $("#fn").val();
	var mn = $("#mn").val();
	var dob = $("#dob").val();
	var sex = $("#sex").val();
	var cat = $("#cat").val();
	
	
    var sessName = '<?php echo $rest ?>';
	
	
		var per = '<?php echo $percentage; ?>';
		var tmm = '<?php echo $tmm; ?>';
	
	    var a = parseFloat($('#sb1').val()),
            b = parseFloat($('#sb2').val()),
            c = parseFloat($('#sb3').val()),
            d = parseFloat($('#sb4').val()),
            e = parseFloat($('#sb5').val());
			
			var sum;
			sum = a+b+c+d+e;
			var per = ((sum/tmm)*per).toFixed(2);

        


	
	$.ajax({
		url:"ajax-adddatatable.php",
		type : "POST",
		data : {sb1:a , sb2:b , sb3:c, sb4:d, sb5:e ,sessName:sessName ,
		rn:rn ,sn:sn ,fn:fn ,mn:mn ,dob:dob ,sex:sex ,cat:cat,sum:sum,per:per},
		success : function(data){
			if(data == 1)
			{
				loadTable();
				 $("#show").html("Data added Successfully");
				 $("input:text").val("");
				  $("#sb1").val('');
				  $("#sb2").val('');
				  $("#sb3").val('');
				  $("#sb4").val('');
				  $("#sb5").val('');
				  $("#cat").val('');
				  $("#sex").val('');
			}
			
			else if(data == 0)
			{
				 $("#show").html("Data with this Roll number is already exist");
			}
			
			else
			{
				$("#show").html("Fields are Empty");
			}
		}
		
	});
		
		
		
});








$("#deleteall").on("click",function(e){
	e.preventDefault();
 var sessName = '<?php echo $rest ?>';

	$.ajax({
		url:"ajax-deleteall.php",
		type : "POST",
		data : {sessName:sessName},
		
		success : function(data){
			if(data == 1)
			{
				loadTable();
				 $("#show").html("Data deleted Successfully");
			}
			
			
			
			else
			{
				$("#show").html("Data Can't be delete due to Technical Reasons");
			}
		}
		
	});
		
		
});





$(document).on("click",".row-delete", function(){
	
	var rollno = $(this).data("id");
	
	 var sessName = '<?php echo $rest ?>';
	 
	 var element = this;
	 
	$.ajax({
		url:"ajax-deleterow.php",
		type : "POST",
		data : {rollno:rollno,sessName:sessName },
		
		success : function(data){
			if(data == 1)
			{
				$(element).closest("tr").fadeOut();
				 $("#show").html("Roll Number "+rollno+" is Deleted" );
			}
			
			else if(data == 2)
			{
				 $("#show").html("Failed to delete Roll number"+rollno);
			}
			
			else
			{
				$("#show").html("No such user found");
			}
			
			
			
			
		}
		
	});
	
	
});







$(document).on("click",".rowedit", function(){
	
	var rollno = $(this).data("editid");
	var sessName = '<?php echo $rest ?>';
	var subname1 = '<?php echo $subname1 ?>';
	var subname2 = '<?php echo $subname2 ?>';
	var subname3 = '<?php echo $subname3 ?>';
	var subname4 = '<?php echo $subname4 ?>';
	var subname5 = '<?php echo $subname5 ?>';
	
	$.ajax({
		url:"ajax-edit.php",
		type : "POST",
		data : {rollno:rollno,sessName:sessName,subname1:subname1 , subname2:subname2 , subname3:subname3, subname4:subname4, subname5:subname5},
		
		success : function(data){
			$("#m1").html(data);
			
			
			
			
		}
		
	});
	
	
});






$(document).on("click","#save-changes", function(){
	
	var sessName = '<?php echo $rest ?>';
	
	var rn1 = $("#rn1").val();
	var sn1 = $("#sn1").val();
	var fn1 = $("#fn1").val();
	var dob1 = $("#dob1").val();
	var sex1 = $("#sex1").val();
	var cat1 = $("#cat1").val();
	
	var sb11 = $("#sb11").val();
	var sb21 = $("#sb21").val();
	var sb31 = $("#sb31").val();
	var sb41 = $("#sb41").val();
	var sb51 = $("#sb51").val();
	
	var per = '<?php echo $percentage; ?>';
		var tmm = '<?php echo $tmm; ?>';
	
	    var a = parseFloat($("#sb11").val()),
            b = parseFloat($("#sb21").val()),
            c = parseFloat($("#sb31").val()),
            d = parseFloat($("#sb41").val()),
            e = parseFloat($("#sb51").val());
			
			var sum = a+b+c+d+e;
			var per = (((a+b+c+d+e)/tmm)*per).toFixed(2);
	console.log(rn);
	$.ajax({
		url:"ajax-save-changes.php",
		type : "POST",
		data : {sessName:sessName,
		rn:rn1 , sn:sn1 , 
		fn:fn1, dob:dob1, sex:sex1, cat:cat1, 
		sb1:sb11,
		sb2:sb21,
		sb3:sb31,
		sb4:sb41,
		sb5:sb51,
		sum:sum,
		per:per,
		
		},
		
		success : function(data){
			if(data == 1)
			{
				loadTable();
				$("#show").html("Data updated of Roll Number "+rn1+" " );
				
				
			}
			else
			{
				$("#show").html("Failed to update Roll Number "+rn1+" " );
			}
		
		
			
			
		}
		
	});
	
	
});













});


</script>



