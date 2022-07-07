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