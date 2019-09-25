<?php
include "db.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$s="SELECT * from stureg where id='$id'";
$res1=mysqli_query($con,$s);
$n=mysqli_num_rows($res1);
while($res=mysqli_fetch_array($res1))
{
$id=$res['id'];
$name=$res['Name'];
$rollno=$res['Rollno'];

$password=$res['Password'];
$email=$res['Email'];
$mobile=$res['Phonenumber'];
$dob=$res['Dateofbirth'];
$gender=$res['Gender'];
$class=$res['Class'];
//$image=$res['image'];
}
if($n>0)
{ 
?>
<center>
	<h1>Update Student Profile</h1>
<form action="stuedit1.php" method="post" enctype="multipart/form-data">
<table>

	<input type="text" name="ids" value="<?php echo $id;?>">
<!--<tr><th>Id</th> <td><input type="text" name="id" value="<?php echo $id;?>"></td></tr>-->

<tr><th>Name</th> <td><input type="text" name="name" value="<?php echo $name ;?>"></td></tr>
<tr><th>Rollno</th> <td><input type="text" name="rollno" value="<?php echo $rollno;?>"></td></tr>
<tr><th>password</th> <td><input type="text" name="psw" value="<?php echo $password ;?>"></td></tr>
<tr><th>Email</th> <td><input type="text" name="email" value="<?php echo $email ;?>"></td></tr>
<tr><th>mobile</th> <td><input type="text" name="mobile" value="<?php echo $mobile ;?>"></td></tr>
<!--<tr><th>Image</th> <td><input type="file" name="image" value=""></td></tr>-->
<tr><td></td><td><input type="submit" name ="submit" value="submit"></td></tr>
</table>
</form>
</center>
<?php
}}
?>
