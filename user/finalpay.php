<?php
	
	session_start();

	$email_id=$_SESSION["email_id"];
	require '../database.php';
	$obj=new database();
	$res=$obj->finalpay($email_id);
						//$cnt=mysql_num_rows($res4);
						
						if($res==1)
						{

							echo "paid";
						}
						else
						{
							echo "wrong";
						}
?>