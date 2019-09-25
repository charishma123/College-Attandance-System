<?php
include "db.php";
$id=$_GET['id'];
$s="delete from facureg where id='$id'";
$res1=mysqli_query($con,$s);
if($res1)
{
	include "faculty.php";
	echo "<script>alert('Delete Successfully');</script>";
}
else
{	include "faculty.php";
	echo "<script>alert('Fail');</script>";
}
?>
