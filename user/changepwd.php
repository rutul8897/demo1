<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>

<form action="y.php" method="post">
<center>
<h1>Change Password</h1>
<table border="1">
<tr>
<td>Old Password::</td>
<td><input type="password" name="txtopwd"/></td>
</tr>
<tr>
<td>New Password::</td>
<td><input type="password" name="txtnpwd"/></td>
</tr>
<tr>
<td>Confirm Password::</td>
<td><input type="password" name="txtcpwd"/></td>
</tr>
<tr>

<td><input type="submit" name="btnchange" value="change"/></td>

</tr>
</table>
</center>
</form>
</body>
</html>

