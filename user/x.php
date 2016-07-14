<?php 
session_start();
?>
<html>
<head>
</head>
<body>
<?php
$emailid=$_SESSION["email_id"]; 
$name=$_POST["txtname"];
	$mobile_no=$_POST["txtmobile"];
	$city=$_POST["txtcity"];
	$gender=$_POST["txtgender"];
	$con=mysql_connect('localhost','root','');
	mysql_select_db('db1',$con);	
	$res=mysql_query("update user_tbl set user_name='$name',mobile='$mobile_no',city='$city',gender='$gender' where email_id='$emailid'",$con);
	if($res==1)
	{
	header('location:profile1.php');
	}
	else
	{
	echo "not";
	}
?>
</body>
</html>