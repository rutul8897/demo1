
<?php

	$pid=$_REQUEST["pid"];
	
	require '../database.php';
	$obj=new database();
	$res=$obj->pro_delete($pid);
	if($res==1)
	{
		header('location:viewpro.php');
		
	}
	else
	{
		echo "wrong";
	}
?>