<?php

	$all=implode(",",$_POST["chk"]);
	require '../database.php';
	$obj=new database();
	$res=$obj->multiprodele($all);
	header('location:viewpro.php');
	
?>