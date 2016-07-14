<!DOCTYPE html>
<html>
<head></head>
<body>
<center>
<h1>CATEGORIES</h1>
<table border="2">
<tr>
	<th>Cat_id</th>
	<th>Cat_name</th>
</tr>
<?php 
	
	require '../database.php';
	$obj=new database();
	$res=$obj->cat_display();
	
	while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
	{
	echo "<tr>";
	echo "<td>".$row["cat_id"]."</td>";
	echo "<td>".$row["cat_name"]."</td>";
	
	echo "</tr>";
	}
?>
</table>
</center>

</body>
</html>