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
<tr><td>Employee id:</td><td><?php echo $res['eid']; ?></td></tr>
<tr><td>Name:</td><td><?php echo $res['name']; ?></td></tr>
<tr><td>Password:</td><td><?php echo $res['password']; ?></td></tr>
<tr><td>Mobile:</td><td><?php echo $res['mobile']; ?></td></tr>
<tr><td>Email:</td><td><?php echo $res['email']; ?></td></tr>
<tr><td>Image:</td><td><img src="<?php echo $res['image'];?>" width="130px" height="150px"> </td></tr>
</table>
<?php
}
}
