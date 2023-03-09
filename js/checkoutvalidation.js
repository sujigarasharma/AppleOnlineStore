function ValidateForm(frm) 
{
	if (frm.fullname.value == "") 
	{ 
		alert('Full name is required.'); 
		frm.fullname.focus(); 
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
 	if (frm.address.value == "") 
	{ 
		alert('Address is required.');
		frm.address.focus(); 
		return false; 
	}
 	if (frm.city.value == "") 
	{ 
		alert('City is required.');
		frm.city.focus(); 
		return false; 
	}
	if (frm.cardname.value == "") 
	{ 
		alert('Card name is required.'); 
		frm.cardname.focus(); 
		return false; 
	}
 	if (frm.state.value == "") 
	{ 
		alert('State is required.');
		frm.state.focus(); 
		return false; 
	}
 	if (frm.zip.value == "") 
	{ 
		alert('PinCode is required.');
		frm.zip.focus(); 
		return false; 
	}
 
	var lowerCaseLetters = /[a-z]/g;
	var upperCaseLetters = /[A-Z]/g;
	var numbers = /[0-9]/g;
	var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
 	if ((frm.zip.value.match(upperCaseLetters))||(frm.zip.value.match(lowerCaseLetters))||(frm.zip.value.match(format)))
	{ 
		alert('Please enter a valid ZIP.'); 
		frm.zip.focus(); 
		return false; 
	}

 	if (frm.creditcardnumber.value == "") 
	{ 
		alert('Credit Card Number is required.'); 
		frm.creditcardnumber.focus(); 
		return false; 
	}
 	if ((frm.creditcardnumber.value.match(lowerCaseLetters))||(frm.creditcardnumber.value.match(upperCaseLetters))||(frm.creditcardnumber.value.match(format)))
	{ 
		alert('Enter Valid Credit Card Number.'); 
		frm.creditcardnumber.focus(); 
		return false; 
	}
	if (frm.creditcardnumber.value.length != 16)
	{
		alert('Credit Card Number length should be 16 characters.'); 
		frm.creditcardnumber.focus(); 
		return false; 
	}
	
	if (frm.exp.value == "") 
	{ 
		alert('Exp Year/Month is required.'); 
		frm.exp.focus(); 
		return false; 
	}
	if (frm.exp.value.length != 5)
	{
		alert('InValid Exp Year/Month '); 
		frm.exp.focus(); 
		return false; 
	}
			
 	if (frm.cvv.value == "") 
	{ 
		alert('CVV is required.'); 
		frm.cvv.focus(); 
		return false; 
	}
 	if ((frm.cvv.value.match(lowerCaseLetters))||(frm.cvv.value.match(upperCaseLetters))||(frm.cvv.value.match(format)))
	{ 
		alert('Enter Valid CVV.'); 
		frm.cvv.focus(); 
		return false; 
	}
	if (frm.cvv.value.length != 3)
	{
		alert('CVV length should be 3 characters.'); 
		frm.cvv.focus(); 
		return false; 
	}
	

	
	return true; 
	
	
}


