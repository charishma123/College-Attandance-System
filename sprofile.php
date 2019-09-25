<?php
session_start();
include "menu2sl.html";
include "db.php";
$rollno=$_SESSION['rollno'];
$psw=$_SESSION['psw'];

$sel="SELECT * FROM stureg WHERE Rollno='$rollno'";
$res1=mysqli_query($con,$sel);
$n=mysqli_num_rows($res1);
if($n>0){
	while($res=mysqli_fetch_array($res1))
	{
		?>
<h1>Student Profile</h1>
<table>
<tr><td>Name:</td><td><?php echo $res['Name']; ?></td></tr>
<tr><td>Roll no:</td><td><?php echo $res['Rollno']; ?></td></tr>
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

	
else
	echo "fail";

?>