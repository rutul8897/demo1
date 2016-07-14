<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php



	if(isset($_POST["btnsubmit"]))
	{
		$name=$_POST["txtname"];
		$email=$_POST["txtemail"];
		$pass=$_POST["txtpass"];
		$cpass=$_POST["txtpass1"];
		$mno=$_POST["txtmobile"];
		$city=$_POST["txtcity"];
		$gender=$_POST["txtgender"];
		if($pass==$cpass)
		{
		//$type="user";
		$con=mysql_connect('localhost','root','');
		mysql_select_db('db1',$con);
		$res=mysql_query("insert into user_tbl values('$email','$name','$pass','$mno','$city','$gender','user')",$con);
	
		}
		else
		{
			echo "password not same";
		}
	}

?>
<form action="" method="post">
<center>
<h1>Signup Form</h1>
<table border="1">
<tr>
<td>Name</td>
<td><input type="text" required name="txtname" placeholder="Enter name" /></td> 
</tr>
<tr>
<td>Email</td>
<td><input type="text" required name="txtemail" placeholder="Enter email" /></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" required name="txtpass" placeholder="Enter password" /></td>
</tr>
<td>Confirm password</td>
<td><input type="password" required name="txtpass1" placeholder="Enter password" /></td>
</tr>
<tr>
<td>Mobile no</td>
<td><input type="text" required name="txtmobile" placeholder="Enter mobileno" /></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" required name="txtcity" placeholder="Enter city" /></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="txtgender" checked value="male"/>male
<input type="radio" name="txtgender" value="female"/>female</td>
</tr>
<tr>
<td><input type="submit" name="btnsubmit" value="submit"/>
<input type="submit" name="btnreset" value="reset"/></td>
</tr>
</table>
</center>
</form>
</body>
</html>