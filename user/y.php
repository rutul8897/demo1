<?php
session_start();
?>
<?php
	$email_id=$_SESSION["email_id"];
	$opwd=$_POST["txtopwd"];
	$npwd=$_POST["txtnpwd"];
	$cpwd=$_POST["txtcpwd"];
	$con=MYSQL_connect('localhost','root','');
	MYSQL_select_db('db1',$con);
	$res=MYSQL_query("select * from user_tbl where email_id='$email_id'and password='$opwd'",$con);
	$count=mysql_num_rows($res);
	if($count==1)
	{
		if($npwd==$cpwd)
		{
		$con=MYSQL_connect('localhost','root','');
		MYSQL_select_db('db1',$con);
		$res=mysql_query("update user_tbl set password='$npwd' where email_id='$email_id'",$con);
		echo "your password change";
		header('location:profile1.php');
		}
		else
		{
			echo "retype password";
		}
	}
	else
	{
		echo "old password wrong";
	}

?>

