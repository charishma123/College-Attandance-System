<?php
include "db.php";
$id=$_POST['ids'];
$name = $_POST['name'];
$rollno= $_POST['rollno'];
$psw= $_POST['psw'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

 	  $update="UPDATE stureg SET 
         Name='$name',
         Rollno='$rollno',
         Password='$psw', 
         Email='$email',
         Phonenumber='$mobile',
      
         WHERE id='$id'";
      $res=mysqli_query($con,$update);
if($res)
{
	include "stuedit.php";
   echo "<script>alert('Success');</script>";
	// echo "<script>";
	// echo "document.getElementById('msg').innerHTML='update Fail'";
	// echo "</script>";
	// echo "done";
}
else
{
	include "stuedit.php";
   echo "<script>alert('fail');</script>";
	// include "admin.php";
	// echo "<script>";
	// echo "document.getElementById('msg').innerHTML='succesfully'";
	// echo "</script>";
}
?>

