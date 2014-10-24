$(document).ready(function() {
		$("#register").click (function(){
				var firstname = $("#fname").val();
				var lastname = $("#lname").val();
				var password = $("#pass").val();
				var cpassword = $("#cpass").val();
				var gender = $("#gender").val();
				var email = $("#email").val();
				var cemail = $("#cemail").val();
				if (firstname =='' || lastname == '' || password == '' || cpassword == '' || gender == '')
				{
					alert("Please complete the required fields marked with asterisks");
				}
				else if ((password.length) < 8)
				{
					alert("Password must be at least 8 characters long");
				}
				else if (!(password).match(cpassword))
				{
					alert("Your passwords do not match. Please re-enter your passwords");
				}
				else
				{
					$.post("register.php", 
					{
						fname : firstname,
						lname : lastname,
						fpass : password,
						fgender : gender,
						femail : email
					}, function (count){
						if(count == 'Your Account was created successfull.')
						{
							$("form")[0].reset();
						}
						alert(count);
					});
				}
	});

});