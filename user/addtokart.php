<?php

session_start();
//if($_SESSION('email_id')=='')
//{
//	header('location:../login1.php');
//}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>

</head>



 		<?php
 		$id=$_REQUEST["pro_id"];
 		$email_id=$_SESSION["email_id"];
		require '../database.php';
			  $obj=new database();
			  $cnt=$obj->checkkart($email_id,$id);
			   
		if($cnt==0)

		{
			$res=$obj->pro_displaykart($id);

		while($row=mysql_fetch_assoc($res))
		{

			$amt=$row["pro_price"];
		}
		$date=date("d/m/y");
		$email_id=$_SESSION["email_id"];
		$qty=1;
		$flag='kart';

		  	$obj1=new database();
			  $res1=$obj1->addtokart($amt,$date,$email_id,$id,$qty,$flag);
			  if($res1==1)
			  {

			  	echo "add";
			  //	header('location:kart.php');

			  }
			  else
			  {
			  	echo "not";
			  }
			}
			else
			{
				echo '<script language="javascript">;
				alert ("already added");
				window.location.href="profile1.php";
				</script>';

			}
	/*while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
	{



		echo '<div class="col-sm-6 col-md-4">
   	 <div class="thumbnail">
      <img src="'.$row["pro_photo"].'" style="height:145px" alt="...">
      <div class="caption">
        <h3>'.$row["pro_name"].'</h3>
        <p>'.$row["pro_price"].'</p>
         <p>'.$row["disc"].'</p>
        <p><a href="#" class="btn btn-primary" role="button">Buy</a> <a href="#" class="btn btn-info" role="button">Add To Wish List  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></p>
      </div>
   	 </div>
  	</div>';
  }
  ?>*/
  ?>
<body>



</body>
</html>