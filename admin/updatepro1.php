<?php
		
	$photo=$_REQUEST["photo"];
	if($_FILES["txtphoto"]["name"]!="")

	{
		unlink($photo);

		$photo="../images".$_FILES["txtphoto"]["name"];
		move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$photo);

	}

	if(isset($_POST["btnupdate"]))
	{
		$pid=$_POST["txtid"];
		$pname=$_POST["txtname"];
		$pprice=$_POST["txtprice"];
		$soh=$_POST["txtsoh"];
		$mfg=$_POST["txtmfg"];
		$war=$_POST["txtwar"];
		$color=$_POST["txtcolor"];
		$des=$_POST["txtdes"];
		$catid=$_POST["txtcatid"];
		
		$con=MYSQL_connect('localhost','root','');
		MYSQL_select_db('db1',$con);
		$res=mysql_query("update product_tbl set pro_name='$pname',pro_price='$pprice',pro_soh='$soh',pro_mfg='$mfg',warranty='$war',color='$color',pro_photo='$photo',disc='$des',fk_cat_id='$catid' where pro_id='$pid'");
		if($res==1)
		{
			header('location:viewpro.php');
		}
		else
		{
			echo "not updated";
		}
	}

?>
