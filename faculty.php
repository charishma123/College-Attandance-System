
<?php
include "menu1.html";
include "db.php";
$sel="SELECT * FROM facureg order by id";
$res=mysqli_query($con,$sel);
?>
<table border="1px" cellpadding="25px" cellspacing="0px">
	<tr>
		<th>S.no</th><th>Name</th>
		<th>EmployeeId</th>
		<th>Mobile</th>
		<th>Select</th>
	</tr>

<?php
$i=1;
while($res1=mysqli_fetch_array($res))
{
?>
<tr><td><?php echo $i?></td>
<td><?php echo $res1['Name'] ?></td>
<td><?php echo $res1['EmployeeId'] ?></td>
<td><?php echo $res1['Phonenumber'] ?></td>
<td><a href="facuedit.php?id=<?php echo $res1['id'];?>">Edit</a>|
	<a href="facuview.php?id=<?php echo $res1['id'];?>">View</a>|
	<a href="facudelete.php?id=<?php echo $res1['id'];?>">Delete</a></td>

</tr><?php
$i++;
}
?>
</table>