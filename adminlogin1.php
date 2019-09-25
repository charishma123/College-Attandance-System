<?php
include "db.php";
$name=$_POST['email'];
$psw=$_POST['psw'];

$sel="SELECT * FROM admin WHERE Name='$name' and psw='$psw'";
$r=mysqli_query($con,$sel);
$n=mysqli_num_rows($r);
if($n>0)
{
	header("location:adminprofile.php");
}
else
{
	echo "fail";
}

?>