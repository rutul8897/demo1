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
<!--<?php
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
			header('location:user/profile1.php');
		}
		else
		{
			echo "invalid";
		}
	}
?>-->

<form action="login1.php" method="post">

<center>

<div class="row">
<div col-md-12 col-sd-12>
<div class="jumbotron" style="height:200px">

<div class="media">
  <div class="media-top" >
    <a href="#">
      <img class="media-object" src="images/s1.jpg" alt="...">
    </a>
  </div>
  <div class="media-body media-center media-left">
    <h1 class="media-heading ">Shopping Cart</h1>
    <marquee>
    <h2>www.shoppingcart.com</h2>
    </marquee>
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