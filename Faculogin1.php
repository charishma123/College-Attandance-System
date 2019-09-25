<?php
session_start();
include "db.php";
$eid=$_POST['eid'];
$psw=$_POST['psw'];
$_SESSION['eid']=$eid;
$sel="SELECT * FROM facureg WHERE EmployeeId='$eid' and Password='$psw'";

$r=mysqli_query($con,$sel);
$n=mysqli_num_rows($r);
echo $n;
if($n>0)

{   
	header("location:facuprofile.php");
}
else
{
	echo "fail";
}

?>