function validateForm(){
	var uname_field=document.forms["loginForm"]["username"].value;
	var pass_field=document.forms["loginForm"]["password"].value;

	if (uname_field==null || uname_field=="")
  	{
  		alert("Username harus diisi");
  		return false;
  	}
	
	if (pass_field==null || pass_field=="")
  	{
  		alert("Password harus diisi");
  		return false;
  	}
}

