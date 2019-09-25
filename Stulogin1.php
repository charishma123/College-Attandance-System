<?php
session_start();
include "db.php";
$rollno=$_POST['rollno'];
$psw=$_POST['psw'];
$_SESSION['rollno']=$rollno;
$_SESSION['psw']=$psw;
$sel="SELECT * FROM stureg WHERE Rollno='$rollno' and Password='$psw'";

$r=mysqli_query($con,$sel);
$n=mysqli_num_rows($r);
echo $n;
if($n>0){
	include "Stulogin.php";
  echo "Success";
 }
if($n>0){
	header("location:stuprofile.php");
}
else
{
	echo "fail";
}

?>