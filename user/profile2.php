<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script src="../Scripts/jquery-1.9.1.js"></script>
    <script src="../Scripts/bootstrap.js"></script>
    
     <link href="../Content/bootstrap.css" rel="stylesheet" />
     </head>
<?php

	$email_id=$_SESSION["email_id"];
	$con=MYSQL_connect('localhost','root','');
	MYSQL_select_db('db1',$con);
	$res=MYSQL_query("select * from user_tbl where email_id='$email_id'",$con);
	while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
	{
	$name=$row["user_name"];
	$mobile_no=$row["mobile"];
	$city=$row["city"];
	$gender=$row["gender"];
	}
?>

<body>
<div class="row">
<div class="col-md-12 col-sd-12">
<?php
	
	include 'header1.php';
?>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sd-3">
<?php
	include 'siderbar1.php';
?>
</div>

	<div class="col-md-9 col-sd-9">
	<div class="panel panel-default">
  
  <div class="panel-body">
   	<div class="row">
   		<?php
   		 //require '../database.php';
  $obj1=new database();
  $res1=$obj1->pro_display();
  $count=mysql_num_rows($res1);
	
	while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
	{
		echo '<div class="col-sm-6 col-md-4">
   	 <div class="thumbnail">
      <img src="'.$row["pro_photo"].'" style="height:145px" alt="...">
      <div class="caption">
        <h3>'.$row["pro_name"].'</h3>
        <p>'.$row["pro_price"].'</p>
         <p>'.$row["disc"].'</p>
        <p><a href="#" class="btn btn-primary" role="button">Buy</a> 
        <a href="addtokart.php?pro_id='.$row["pro_id"].'" ><button type="button" class="btn btn-info" aria-label="Left Align">Add To Cart
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
</button></a></p>
      </div>
   	 </div>
  	</div>';
  }


?>
  </div>
</div>
</div>
</div>

</div>
</body>
</html>
