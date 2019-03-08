function register()
{
	var y = document.form1.name.value;
	var z = /^[a-zA-Z]+$/;
if(y.length==0)
{	alert("Name can't be left blank");
	return false;
}
if(!y.match(z))
{	alert("Name must be of Characters");
	return false;
}
if(y.length > 30)
{	
	alert("Name Length should be less than 30 characters");
	return false;	
}
var m = document.form1.id.value;
if(m.length==0)
{	alert("Please enter your email ID");
	return false;
}
	var e = document.form1.address.value;
if(e.length==0)
{	alert("Please enter your address");
	return false;
}
if(e.length > 50)
{	alert("Address must be within 50 characters");
	return false;
}
	var p = document.form1.password.value;
if(p.length ==0)
{	alert("You should enter a password");
	return false;
}
if(p.length < 8)
{	alert("Password should contain minimum 8 characters");
	return false;
}
	var g = document.form1.phone_number.value;
if(g.length ==0)
{	alert("Phone no. can't be left blank");
	return false;
}
if(isNaN(g))
{	alert("Phone number should be in number");
	return false;
}
}