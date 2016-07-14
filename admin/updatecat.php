<?php

		$cat_id=$_REQUEST["cat_id"];
		require '../database.php';
		$obj=new database();
		$res=$obj->cat_update($cat_id);
		while($row=mysql_fetch_assoc($res))
		{
		
		$catid=$row["cat_id"];
		$catname=$row["cat_name"];
		
		}
?>

<!DOCTYPE html>
<html>
<head>
	<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    
     <link href="Content/bootstrap.css" rel="stylesheet" />

</head>
<body>

	<?php
    		include 'header.php';
    		?>

<div class="container">
	<div class="row">	
	<form action="updatecat1.php" method="post">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title"><center>Category Update</center></h3>
			  </div>
			  <div class="panel-body">
			    
			  		<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Category Id</span>
			  <input type="text" class="form-control" name="txtid" readonly value="<?php  echo $catid;?> "  aria-describedby="basic-addon1">
				</div>
					</br>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Category Name</span>
			  <input type="text" class="form-control" name="txtname"  value="<?php  echo $catname;?>" aria-describedby="basic-addon1">
				</div>
				<center>
			<div>
				<input type="submit" style="margin-top:5px;" name="btnupdate" value="Update" class="btn btn-success text-center"/>
			</div>
</center>


			  </div>
			</div>
			</form>
		</div>
	</div>




</body>
</html>