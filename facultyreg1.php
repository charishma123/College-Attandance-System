<?php
include "db.php";
$name=$_POST['name'];
$eid=$_POST['eid'];
$password=$_POST['psw'];
$email=$_POST['email'];
$mobile=$_POST['phnum'];
$dateofbrth=$_POST['dob'];
$gender=$_POST['gender'];
$skills=$_POST['skills'];
$qual=$_POST['q'];
$chk="";
foreach ($skills as $ch ) {
	$chk.=$ch.",";
}
$sel="SELECT * FROM facureg WHERE Email='$email' || Phonenumber='$mobile'";
$r=mysqli_query($con,$sel);
$n=mysqli_num_rows($r);
if($n==0)
{
$ins="insert into facureg(Name,EmployeeId,Password,Email,Phonenumber,Dateofbirth,Gender,Technicalskills,Qualification)values('$name','$eid','$password','$email','$mobile','$dateofbrth','$gender','$chk','$qual')";
$res=mysqli_query($con,$ins);
if($res)
{
	include "Facultyreg.php";
	?>
	<script type="text/javascript">alert("Success");</script>

<?php
}
else
{
	echo "fail";
}}
else
{
	echo "already registered";
}
?>
