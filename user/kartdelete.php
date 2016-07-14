<?php

	$oid=$_REQUEST["oid"];
	
	require '../database.php';
	$obj=new database();
	$res=$obj->kartdelete($oid);
	if($res==1)
	{
		header('location:profile1.php');
		
	}
	else
	{
		echo "wrong";
	}
?>