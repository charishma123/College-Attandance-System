<?php
include "db.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];	
$s="select * from facureg where id='$id'";
$res1=mysqli_query($con,$s);
while($res=mysqli_fetch_array($res1))
{
?>
<h1>Faculty Profile</h1>
<table>
<tr><td>Employee id:</td><td><?php echo $res['EmployeeId']; ?></td></tr>
<tr><td>Name:</td><td><?php echo $res['Name']; ?></td></tr>
<tr><td>Mobile:</td><td><?php echo $res['Phonenumber']; ?></td></tr>
<tr><td>Email:</td><td><?php echo $res['Email']; ?></td></tr>
<tr><td>Date of Birth:</td><td><?php echo $res['Dateofbirth']; ?></td></tr>
<tr><td>Gender:</td><td><?php echo $res['Gender']; ?></td></tr>
<tr><td>Technical skills:</td><td><?php echo $res['Technicalskills']; ?></td></tr>
<tr><td>Qualification:</td><td><?php echo $res['Qualification']; ?></td></tr>
</table>
<?php
}
}
