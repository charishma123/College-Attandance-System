<?php
include "menu.html";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function Validate() {
			name=document.getElementById('name').value;
			password=document.getElementById('psw').value;
			Confirmpassword=document.getElementById('cpsw').value;
			email=document.getElementById('email').value;
			if(name=="")
			{
              document.getElementById('msg').innerHTML="Please Enter ur name";
              return false;
			}
			    if((name.length<3)||(name.length>20))
    {
        document.getElementById('msg').innerHTML="Please fill the name between 3 to 20 charecters";
        return false;
    }
    if(!isNaN(name))
    {
        document.getElementById('msg').innerHTML="Please Enter characters";
        return false;
    }
        if(password=="")
        {
        document.getElementById('msg').innerHTML="Please Enter Password";
        return false;

        }
        if((password.length<3)||(password.length>10))
        {
         document.getElementById('msg').innerHTML="Please fill the Password between 3 to 10 charecters";
        return false;

        }
            if(Confirmpassword=="")
    {
        document.getElementById('msg').innerHTML="Please Enter Confirm Password";
        return false;
    }

	


			if(password!=Confirmpassword)
			{
                 document.getElementById('msg').innerHTML="Sorry password are not matching! ";
              return false;
			}
			    if(email=="")
    {
        document.getElementById('msg').innerHTML="Please Enter Email";
        return false;
    }
    if(email.indexOf('@')<=0)
    {
        document.getElementById('msg').innerHTML="Please Enter valid Email @";
        return false;
    }
    
    if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.'))
    {
        document.getElementById('msg').innerHTML="Please Enter valid Email .";
        return false;
    }


		}
	</script>
<style type="text/css">
	h1{
        color: red;
	}
	body{
	margin: 0px;
	padding: 0px;
}
input[type=text],input[type=date],input[type=radio]
{
	padding: 10px;
	border-color: skyblue;

}
input[type=submit]
{
	padding: 10px;
	border:blue solid;

}
input[type=file]
{
	padding: 10px;
	border-color: skyblue;

}
input[type=password]
{
	padding:10px;
	border-color: skyblue ;
}
h1
{
	color:red;
}
.form
{
	border: solid 5px violet;
	width:90%;
	padding:10px;
	padding-bottom: 180px;
	outline: solid 9px pink;
	outline-offset: 10px;
	margin-top: 40px;
}

</style>
</head>
<body>
<form method="post" name="reg" onsubmit="return Validate()" action="studentreg1.php">
	<table><tr>
<td>Name:</td><td><input type="text" name="name" id="name" placeholder="name.." maxlength="10"></td></tr>
<tr>
<td>RollNumber:</td><td><input type="text" name="rollno" id="rollno" placeholder="Rollno..." maxlength="10"></td></tr>
<tr><td>
password:</td><td><input type="password" name="psw" id="psw" placeholder="password"></td></tr>
<tr><td>
Confirm password:</td><td><input type="password" name="cpsw" id="cpsw" placeholder="Confirmpassword"></td></tr>
<tr><td>
email:</td><td><input type="text" name="email" id="email" placeholder="email"></td></tr>
<tr><td>
Mobile:</td><td><input type="text" name="phnum" id="phnum" placeholder="mobile..."></td></tr>
<tr><td>
Date of birth:</td><td><input type="date" name="dob" id="dob"></td>.</tr>
<tr><td>
Gender:</td><td><input type="radio" name="gender" id="gender" value="female">Female
<input type="radio" name="gender" id="gender" value="male">Male</td></tr>

<tr>
<td>Class:</td>
<td><select name="class" id="class">
	<option value="">--select--</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option></select>
</td>
<!--<tr><td>Image:</td>
<td><input type="file" name="img" id="img"></td></tr>-->
<tr><td>Address:</td>
<td><textarea rows="10" cols="20"></textarea>
<input type="submit" name="submit" value="submit">
<!--<input type="reset" name="reset" value="reset">--></td></tr>

</form>
<h1 id='msg'></h1>
</body>
</html>