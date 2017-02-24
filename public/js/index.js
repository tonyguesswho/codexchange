
function validate() {
		var password = document.myform.password.value;
		var com_password = document.myform.com_password.value;
		var checkbox = document.myform.checkbox.value;

		// if (password !== com_password ) {
		// 	alert("THE PASSOWRDS DO NOT MATCH")
		// }
		
	

	}

	function validatePhone () {
		var phone = document.myform.phone.value;
		
		if(isNaN(phone)){
			document.getElementById("phoneerror").innerHTML = "Please enter numbers only";
		}

		
	}

	function validatepassword (){
		var password = document.myform.password.value;
	if(password.length < 3 ) {
		 	document.getElementById("passworderror").innerHTML = "your password is weak";
		 }else if (password.length > 6){
		 	document.getElementById("passworderror").innerHTML = "STRONG PASWORD";
		 }
	}



$(document).ready(function(){
	$("#check").change(function(){
		$("#submit").removeAttr("disabled");
	})
})


$(document).ready(function(){
	$("#apply").click(function(){
		$(this).attr("disable", true);
	})
})

// document.getElementById("ruby").onclick = function () {
//     location.href = "userpage.php";
// };

$("#to_teach a").on("click", function(){
   $(".to_teach").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});

$(document).ready(function(){
	$('.tabledash').show();
})

