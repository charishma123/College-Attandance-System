
<?php
include "menu.html";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
	margin: 0px;
	padding: 0px;
}
input[type=text],input[type=submit]
{
	padding: 10px;
	border-color: skyblue;
width:110%;

}
input[type=password]
{
	padding:10px;
	border-color: skyblue ;
	width:110%;

}
h1
{
	color:red;
}
.form
{
	border: solid 3px violet;
	width:50%;
	padding:10px;
	padding-bottom: 100px;
	outline: solid 5px pink;
	outline-offset: 10px;
	margin-top: 40px;
}
</style>
<script type="text/javascript">
		function Validate() {
			roll=document.getElementById('rollno').value;
			psw=document.getElementById('psw').value;
			if(roll=="")
			{
              document.getElementById('msg').innerHTML="Please Enter ur Rollnumber";
        
              return false;
          }
if(psw=="")
			{
              document.getElementById('msg').innerHTML="Please Enter ur password";
        
              return false;
          }
          }
      </script>
</head>
<body>
	<center>
		<div class="form">
			<h1>Student Login</h1>
			<img src="clg1.jpg">
	<form method="post" name="reg" action="Stulogin1.php"onsubmit="return Validate()">
<table>
<tr><td>Roll Number:</td><td><input type="text" name="rollno" id="rollno" placeholder="Rollno..."	></td></tr>
<tr><td>Password:</td><td><input type="password" name="psw" id="psw" placeholder="psw.."></td></tr>
<tr><td align="center"><input type="Submit" name="Submit" value="Submit"></td></tr>
<tr><td><a href="Forgot.html">Forgot Password</a></td></tr></table>
<h1 id="msg"></h1>

</form>
</div>
</center>
</body>
</html>