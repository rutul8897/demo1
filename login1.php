<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="Content/bootstrap.css" rel="stylesheet">
	<script src="Scripts/jquery-1.9.1.js"></script>
	<script src="Scripts/bootstrap.js"></script>
</head>
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
			if($email=="rutul8997@gmail.com")
			{
				header('location:admin/viewpro.php');
			}
			else
			{
				header('location:user/profile1.php');
			}
			
		}
		else
		{
			echo "invalid";
		}
	}
?>
<div class="container">
<form action="login1.php" method="post">

<center>

<div class="row">
<div col-md-12 col-sd-12>
<div class="jumbotron">
  <h1>Shopping Cart</h1>
  
  
</div>

</div>
</div>
<div class="row">
<div col-md-6 col-sd-6 col-offset-2>
<div class="panel panel-default">
  <div class="panel-heading"><h1>Login Form</h1></div>
  <div class="panel-body">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control"  name="txtemail" placeholder="Enter email id" aria-describedby="basic-addon1">
</div>
</br>
</br>
      <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="password" class="form-control"  name="txtpass" placeholder="Enter password" aria-describedby="basic-addon1">
</div>
</br>
</br>
<div class="btn-group" role="group" aria-label="...">
  <center><a href="user/profile1.php"><button type="submit" name="btnlog" class="btn btn-success">Login</button></a></center>
  
</div>
<div class="btn-group" role="group" aria-label="...">
  <center><a href="signup1.php"><button type="button" name="btnlog" class="btn btn-success">SignUp</button></a></center>
  
</div>
  </div>
</div>

</div>
</div>

</center>

</form>
</div>
</body>
</html>