
	
function ValidateForm(frm) 
{
	if (frm.firstname.value == "") 
	{ 
		alert('First name is required.'); 
		frm.firstname.focus(); 
		return false; 
	}
	if (frm.lastname.value == "")
	{ 
		alert('Last name is required.'); 
		frm.lastname.focus(); 
		return false; 
	}
 	if (frm.mail.value == "") 
	{ 
		alert('Email address is required.');
		frm.mail.focus(); 
		return false; 
	}
 	if (frm.mail.value.indexOf("@") < 1 || frm.mail.value.indexOf(".") < 1) 
	{ 
		alert('Please enter a valid email address.'); 
		frm.mail.focus(); 
		return false; 
	}
 	if (frm.phone.value == "") 
	{ 
		alert('Contact Number is required.');
		frm.phone.focus(); 
		return false; 
	}
 	if (frm.phone.value.length != 10)
	{ 
		alert('Please enter a valid Phone Number.'); 
		frm.phone.focus(); 
		return false; 
	}
	var lowerCaseLetters = /[a-z]/g;
	var upperCaseLetters = /[A-Z]/g;
	var numbers = /[0-9]/g;
	var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
 	if (frm.phone.value.match(upperCaseLetters)||frm.phone.value.match(lowerCaseLetters)||frm.phone.value.match(format))
	{ 
		alert('Please enter a valid Phone Number.'); 
		frm.phone.focus(); 
		return false; 
	}
 	if (frm.dob.value == "") 
	{ 
		alert('Date of Birth is required.'); 
		frm.dob.focus(); 
		return false; 
	}
 	
	
 	if (frm.userpassword.value == "") 
	{ 
		alert('Password is required.'); 
		frm.userpassword.focus(); 
		return false; 
	}
 	if (frm.userpassword.value.match(lowerCaseLetters))
	{ 
	 	if (frm.userpassword.value.match(upperCaseLetters))
		{ 
		 	if (frm.userpassword.value.match(numbers))
			{ 
			 	if (frm.userpassword.value.length >= 8)
				{ 
					
				}
				else
				{
					alert('Password length should be 8 characters.'); 
					frm.userpassword.focus(); 
					return false; 
				}
			}
			else
			{
				alert('Numbers is required.'); 
				frm.userpassword.focus(); 
				return false; 
			}
		}
		else
		{
			alert('Upper Case Letters is required.'); 
			frm.userpassword.focus(); 
			return false; 
		}
	}
	else
	{
		alert('lower Case Letters is required.'); 
		frm.userpassword.focus(); 
		return false; 
	}
 	if (frm.repassword.value == "") 
	{ 
		alert('Re-Enter the Password.'); 
		frm.repassword.focus(); 
		return false; 
	}
 	if (frm.userpassword.value != frm.repassword.value)
	{ 
		alert('Re-Enter Correct password.'); 
		frm.repassword.focus(); 
		return false; 
	}
 	
	
	var username=frm.mail.value;
	var password=frm.userpassword.value;
	
	return username,password; 
	
}
function userloginvalid(form) 
{
	ValidateForm();
	var inputusername=form.username.value;
	var inputpassword=form.userpassword.value;
	
 	if (inputusername != username) 
	{ 
		alert('Invalid Username.'); 
		form.username.focus(); 
		return false; 
	}
 	if (inputpassword != password) 
	{ 
		alert('Invalid Password.'); 
		form.userpassword.focus(); 
		return false; 
	}
	
}

