<!DOCTYPE html>
<html>
<head>
	
	<script src="../Scripts/jquery-1.9.1.js"></script>
    <script src="../Scripts/bootstrap.js"></script>
    
     <link href="../Content/bootstrap.css" rel="stylesheet" /></head>
</head>
<body>


    <?php
    		include 'header.php';
    ?>

<form action="insertpro1.php" enctype="multipart/form-data" method="post">
<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3">

			    <div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title"><center>Add Product</center></h3>
		  </div>
		  <div class="panel-body">
		   
		  		<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Product Name</span>
			  <input type="text" class="form-control" name="txtname" placeholder="Product Name" aria-describedby="basic-addon1">
			</div>
				</br>

				<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Image</span>
			  <input type="file" class="form-control" name="txtphoto" aria-describedby="basic-addon1">
			</div>
				</br>

			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Product Price</span>
			  <input type="text" class="form-control" name="txtprice" placeholder="Enter Product Price" aria-describedby="basic-addon1">
			</div>
				</br>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Soh</span>
			  <input type="text" class="form-control" name="txtsoh" placeholder="Enter soh" aria-describedby="basic-addon1">
			</div>
				</br>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Mfg</span>
			  <input type="text" class="form-control" name="txtmfg" placeholder="Enter mfg" aria-describedby="basic-addon1">
			</div>
			</br>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Warranty</span>
			  <input type="text" class="form-control" name="txtwar" placeholder="Enter Warranty" aria-describedby="basic-addon1">
			</div>
				</br>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Color</span>
			  <select  style="width:50px ; height:30px;" name="txtcolor">
				<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="black">Black</option>
					<option value="yellow">yellow</option>
				</select>
			</div>
				</br>
				<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Description</span>
			  <input type="text" class="form-control" name="txtdes" placeholder="Enter Description" aria-describedby="basic-addon1">
			</div>
				</br>

				</br>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Category</span>
			 <select  style="width:150px; height:30px;" name="txtcatid">
				<?php
				require '../database.php';
				$obj=new database();
				$res=$obj->cat_display();
			   	while($row=mysql_fetch_array($res))
				{
					echo '<option value="'.$row['cat_id'].'">'.$row['cat_name'].'</option>';
				
				}
				?>
				</select>
			</div>
				</br>
<center>
			<div>
				<input type="submit" name="btnadd" value="Insert" class="btn btn-success text-center"/>
			</div>
</center>
		  </div>
		</div>


	</div>
	</div>
	</div>



</form>
</body>
</html>