
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
	background-color: lightgreen;
}
input[type=text],input[type=date],input[type=radio]
{
	padding: 10px;
	border-color: skyblue;

}
input[type=submit]
{
	padding: 10px;
	border:solid;

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
input[type=employid]
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
	width:20%;
	padding:10px;
	padding-bottom: 180px;
	outline: solid 9px pink;
	outline-offset: 10px;
	margin-top: 40px;
}

</style>
</head>
<body>
<form method="post" name="reg" action="facultyreg1.php"onsubmit="return Validate()">
	<center><table><tr>
<td>Name:</td><td><input type="text" name="name" id="name" placeholder="name.." maxlength="20"></td></tr>
<tr><td>EmployeeId:</td><td><input type="employid" name="eid" id="eid" placeholder="Id please..."maxlength="20"></td></tr>
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
<tr><td>Technical skills:</td>

<td><input type="checkbox" name="skills[]" id="skills" value="C">C
<input type="checkbox" name="skills[]" id="skills" value="C++">C++
<input type="checkbox" name="skills[]" id="skills" value="php">Php
<input type="checkbox" name="skills[]" id="skills" value="java">java</td>
</tr>
<tr>
<td>Qualification:</td>
<td><select name="q" id="q">
	<option value="">--select--</option>
	<option value="b.tech">B.tech</option>
	<option value="bsc">B.sc</option>
	<option value="bbm">BBM</option>
	<option value="b.com">B.com</option></select>
</td>
</tr>
<tr><td>Image:</td>
<td><input type="file" name="img" id="img"></td></tr>
<tr><td>Address:</td>
<td><textarea rows="10" cols="20"></textarea>
<input type="submit" name="submit" value="submit">
<!--<input type="reset" name="reset" value="reset">--></td></tr></table>
</center>
</form>
<h1 id='msg'></h1>
</body>
</html>