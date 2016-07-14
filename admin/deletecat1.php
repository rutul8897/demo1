
<?php

	$cat_id=$_REQUEST["cat_id"];
	
	require '../database.php';
	$obj=new database();
	$res=$obj->cat_delete($cat_id);
	if($res==1)
	{
		header('location:viewcat.php');
		
	}
	else
	{
		echo "wrong";
	}
?>