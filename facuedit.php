<?php
include "db.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$s="select * from facureg where id='$id'";
$res1=mysqli_query($con,$s);
$n=mysqli_num_rows($res1);
while($res=mysqli_fetch_array($res1))
{
$id=$res['id'];
$eid=$res['EmployeeId'];
$name=$res['Name'];
$password=$res['Password'];
$mobile=$res['Phonenumber'];
$email=$res['Email'];
//$image=$res['image'];
}
if($n>0)
{ 
?>
<center>
	<h1>Update Faculty Profile</h1>
<form action="facuedit1.php" method="post" enctype="multipart/form-data">
<table>
	<input type="text" name="ids" value="<?php echo $id;?>">
<tr><th>EId</th> <td><input type="text" name="eid" value="<?php echo $eid;?>"></td></tr>
<tr><th>Name</th> <td><input type="text" name="name" value="<?php echo $name ;?>"></td></tr>
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
