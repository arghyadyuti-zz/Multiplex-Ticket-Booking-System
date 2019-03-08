function customerlogin()
{
var a = document.form2.username.value;
var b = document.form2.password.value;
if(a.length==0)
{	alert("Enter your username");
	return false;
}
if(b.length==0)
{	alert("Enter your password");
	return false;
}
if (a == "admin" && b == "admin")

{
alert("Login successfully");
location.href="home.html"; 
return false;
}

else

{
alert("login failed");
return false;
}
function register()
{
location.href="customer_registration.html";
}
}