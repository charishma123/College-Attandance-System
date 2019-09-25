<?php
include "db.php";
$id=$_POST['ids'];
$eid= $_POST['eid'];
$name = $_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

 	  $update="UPDATE facureg SET 
		 EmployeeId='$eid',
         Name='$name', 
         Email='$email',
         Phonenumber='$mobile',
      
         WHERE id='$id'";
      $res=mysqli_query($con,$update);
if($res)
{
	include "facuedit.php";
   echo "<script>alert('Success');</script>";
	// echo "<script>";
	// echo "document.getElementById('msg').innerHTML='update Fail'";
	// echo "</script>";
	// echo "done";
}
else
{
	include "facuedit.php";
   echo "<script>alert('fail');</script>";
	// include "admin.php";
	// echo "<script>";
	// echo "document.getElementById('msg').innerHTML='succesfully'";
	// echo "</script>";
}
?>

