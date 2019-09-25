<?php
include "db.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];	
$s="select * from stureg where id='$id'";
$res1=mysqli_query($con,$s);
while($res=mysqli_fetch_array($res1))
{
?>
<h1>Student Profile</h1>
<table>
<!--<tr><td>Employee id:</td><td><?php echo $res['EmployeeId']; ?></td></tr>-->
<tr><td>Name:</td><td><?php echo $res['Name']; ?></td></tr>
<tr><td>Rollno:</td><td><?php echo $res['Rollno']; ?></td></tr>
<tr><td>Password:</td><td><?php echo $res['Password']; ?></td></tr>
<tr><td>Email:</td><td><?php echo $res['Email']; ?></td></tr>
<tr><td>Mobile:</td><td><?php echo $res['Phonenumber']; ?></td></tr>
<tr><td>Date of Birth:</td><td><?php echo $res['Dateofbirth']; ?></td></tr>
<tr><td>Gender:</td><td><?php echo $res['Gender']; ?></td></tr>
<tr><td>Class:</td><td><?php echo $res['Class']; ?></td></tr>
</table>
<?php
}
}
