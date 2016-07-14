<?php

	$all=implode(",",$_POST["chk"]);
	//echo $all;
	require '../database.php';
	$obj=new database();
	$res=$obj->multicatdele($all);
	header('location:viewcat.php');
	
?>