<?php
session_start();
include "db.php";
$psw=$_POST['psw'];
$mobile=$_SESSION['mobile'];
$u="update stureg set Password='$psw' where Phonenumber='$mobile' ";
$res=mysqli_query($con,$u);
if($res)
{
	echo "sucess";
}
else
{
	echo "fail";

}?>