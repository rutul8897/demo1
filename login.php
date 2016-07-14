<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	if(isset($_POST["btnlog"]))
	{
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];
	$con=mysql_connect('localhost','root','');
		mysql_select_db('db1',$con);
		$res=mysql_query("select * from user_tbl where email_id='$email' and password='$pass' ",$con);
		$count=mysql_num_rows($res);
		if($count==1)
		{
			$_SESSION["email_id"]=$_POST["txtemail"];
			header('location:user/profile.php');
		}
		else
		{
			echo "invalid";
		}
	}
?>
<form action="login.php" method="post">

<center>
<h1>Login Form</h1>
<table border="1">
<tr>
<td>Email_id</td>
<td><input type="text" name="txtemail" required/></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="txtpass" required/></td>
</tr>
<tr>
<td><input type="submit" name="btnlog" value="login"/></td>
</tr>
</table>
</center>
</form>
</body>
</html>