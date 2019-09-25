<?php
include "db.php";
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$password=$_POST['psw'];
$email=$_POST['email'];
$mobile=$_POST['phnum'];
$dateofbrth=$_POST['dob'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$ins="insert into Stureg(Name,Rollno,Password,Email,Phonenumber,Dateofbirth,Gender,Class)values('$name','$rollno','$password','$email','$mobile','$dateofbrth','$gender','$class')";
$sel="SELECT * FROM facureg WHERE Email='$email' || Phonenumber='$mobile'";
$r=mysqli_query($con,$sel);
$n=mysqli_num_rows($r);
if($n==0)
{
$res=mysqli_query($con,$ins);
if($res)
{
	include "Studentreg.php";
	?>
	<script type="text/javascript">alert("Success");</script>

<?php
}
else
{
	echo "fail";
}
}
else
{
	echo "Already registered";
}



?>
