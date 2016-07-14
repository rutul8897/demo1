<?php
	
		$cat_id=$_POST["txtid"];
		$cat_name=$_POST["txtname"];
		
		
		$con=MYSQL_connect('localhost','root','');
		MYSQL_select_db('db1',$con);
		$res=mysql_query("update cat_tbl set cat_name='$cat_name' where cat_id='$cat_id'");
		
		header('location:viewcat.php');
		
	

?>