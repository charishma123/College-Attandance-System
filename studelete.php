<?php
include "db.php";
$id=$_GET['id'];
$s="delete from stureg where id='$id'";
$res1=mysqli_query($con,$s);
if($res1)
{
	include "student.php";
	echo "<script>alert('Delete Successfully');</script>";
}
else
{	include "student.php";
	echo "<script>alert('Fail');</script>";
}
?>
