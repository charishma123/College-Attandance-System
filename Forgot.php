<?php
session_start();
include "db.php";
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$_SESSION['mobile']=$mobile;
echo "$email";
echo "$mobile";
$sel="SELECT * FROM stureg WHERE Phonenumber='$mobile'";

$r=mysqli_query($con,$sel);
$n=mysqli_num_rows($r);
echo $n;
if($n!=0)
{
	header("location:Re_enter.html");
}
else
{
	echo "Invalid emailid or mobilenumber";
}
?>
