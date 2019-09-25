<?php
include "db.php";
$res = "";
$target_dir ='sample/';
$id = $_POST['id'];
$eid= $_POST['eid'];
$name = $_POST['name'];
$psw = $_POST['psw'];
$email=$_POST['email'];
$mobile=$_POST['phnum'];


if($_FILES['image']['name'] !== "")
{
   $image_name=basename($_FILES['image']['name']);
   ///image path...
   $target_file = $target_dir.$image_name;
   $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
   if($isUploaded){
 	  $update="UPDATE facureg SET 
		 eid='$eid',
         name='$name', 
         password='$psw',
         email='$email',
         mobile='$mobile',
         image='$target_file'
         WHERE id='$id'";
      $res=mysqli_query($con,$update);

   }else{
   	echo "Image not Moved\n";
   
}else{

	$update2="UPDATE facureg SET 
		 eid='$eid',
         name='$name', 
         password='$psw',
         email='$email',
         mobile='$mobile'
         WHERE id='$id'";

        $res=mysqli_query($con,$update2);

}
if($res === true)
{
	include "faculty.php";
   echo "<script>alert('Success');</script>";
	// echo "<script>";
	// echo "document.getElementById('msg').innerHTML='update Fail'";
	// echo "</script>";
	// echo "done";
}
else
{
	include "faculty.php";
   echo "<script>alert('Success');</script>";
	// include "admin.php";
	// echo "<script>";
	// echo "document.getElementById('msg').innerHTML='succesfully'";
	// echo "</script>";
}
?>

