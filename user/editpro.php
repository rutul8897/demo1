<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="x.php" method="post">
<?php

$emailid=$_SESSION["email_id"];
	$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('db1',$con);
$res=MYSQL_query("select * from user_tbl where email_id='$emailid'",$con);
while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
{
	$name=$row["user_name"];
	$mobile_no=$row["mobile"];
	$city=$row["city"];
	$gender=$row["gender"];
}
?>
<center>
<h1>Edit Profile</h1>
<table border="1">
<tr>
<td>Name</td>
<td><input type="text" required name="txtname" value="<?php echo $name;?>"/></td> 
</tr>

<tr>
<td>Mobile no</td>
<td><input type="text" required name="txtmobile" value="<?php echo $mobile_no;?>" /></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" required name="txtcity" value="<?php echo $city;?>"  /></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="txtgender" <?php if($gender=="male") { echo 'checked';}?> value="male"/>male
<input type="radio" name="txtgender" <?php if($gender=="female") { echo 'checked';}?> value="female"/>female</td>
</tr>
<tr>
<td><input type="submit" name="btnedit" value="submit"/>
<input type="submit" name="btnreset" value="reset"/></td>
</tr>
</table>
</center>
</form>
</body>
</html>