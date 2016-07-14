<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<h1>WELCOME ,<?php echo $_SESSION["email_id"]; ?></h1>

<?php
	$email_id=$_SESSION["email_id"];
	
	
	$con=MYSQL_connect('localhost','root','');
MYSQL_select_db('db1',$con);
$res=MYSQL_query("select * from user_tbl where email_id='$email_id'",$con);
while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
{
	$name=$row["user_name"];
	$mobile_no=$row["mobile"];
	$city=$row["city"];
	$gender=$row["gender"];
}
?>
<form action="profile.php" method="post">

<table border="1">
<tr>
<td>Email_id:</td><td>  <label><?php echo $email_id ; ?></label></br>
</tr>
<tr>
<td>User Name:</td><td>  <label><?php echo $name ; ?></label></br>
</tr>
<tr>
<td>Mobile Number:</td><td>  <label><?php echo $mobile_no ; ?></label></br>
</tr>
<tr>
<td>City: </td><td> <label><?php echo $city; ?></label></br>
</tr>
<tr>
<td>Gender:</td><td>  <label><?php echo $gender ; ?></label></br>
</tr>
</table>
<h2><a href="editpro.php">Edit Profile</a></h2>
<h2><a href="changepwd.php">Change Password</a></h2>
<h2><a href="showcat.php">Show Category</a></h2>
<h2><a href="../login.php">Log Out</a></h2>
</center>
</form>
</body>
</html>