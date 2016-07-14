<!DOCTYPE html>
<html>
<head>
	
	<script src="../Scripts/jquery-1.9.1.js"></script>
    <script src="../Scripts/bootstrap.js"></script>
    
     <link href="../Content/bootstrap.css" rel="stylesheet" />
     </head>
</head>
<?php
	if(isset($_POST["btnadd"]))
	{
		$cat_name=$_POST["txtname"];
		require '../database.php';
		$obj=new database();
		$cnt=$obj->cat_add($cat_name);
		if($cnt==1)
		{
			header('location:viewcat.php');
			//echo "inserted";
		}
		else
		{
			echo "not inserted";
		}
	}
?>
<body>

    <?php
    		include 'header.php';
    ?>
    <div class="container">
<div class="row">
<form action="" method="post"> 
		    	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title"><center>Add Category</center></h3>
		  </div>
		  <div class="panel-body">
		    	
		  	<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Category Name</span>
			  <input type="text" class="form-control" name="txtname" placeholder="Enter Category Name" aria-describedby="basic-addon1">
			</div>
				


<center>
			<div>
				<input type="submit" style="margin-top:5px;" name="btnadd" value="Insert" class="btn btn-success text-center"/>
			</div>
</center>

		  </div>
		</div>
		</form>
</div>
</div>
</body>
</html>