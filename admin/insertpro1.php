
<?php
	
	if(isset($_POST["btnadd"]))
	{
			
		$pname=$_POST["txtname"];
		$pprice=$_POST["txtprice"];
		$soh=$_POST["txtsoh"];
		$mfg=$_POST["txtmfg"];
		$war=$_POST["txtwar"];
		$color=$_POST["txtcolor"];
		$des=$_POST["txtdes"];
		$catid=$_POST["txtcatid"];
		//$img=$_POST["txtimg"];
		$path="../images/".$_FILES["txtphoto"]["name"];

	//	echo $_FILES["txtphoto"]["name"];
	//	echo $_FILES["txtphoto"]["tmp_name"];
	//	echo $_FILES["txtphoto"]["size"];

		move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$path);
		require '../database.php';
		$obj=new database();
		$res=$obj->pro_add("insert into product_tbl values(null,'$pname','$pprice','$soh','$mfg','$war','$color','$path','$des','$catid')");
		header('location:viewpro.php');
		
	}
?>
