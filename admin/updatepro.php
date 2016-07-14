
<?php
		$pid=$_REQUEST["pid"];
		require '../database.php';
		$obj=new database();
		$res=$obj->pro_update($pid);
		while($row=mysql_fetch_assoc($res))
		{
		
		$pname=$row["pro_name"];
		$pprice=$row["pro_price"];
		$soh=$row["pro_soh"];
		$mfg=$row["pro_mfg"];
		$war=$row["warranty"];
		$color=$row["color"];
		$des=$row["disc"];
		$catid=$row["fk_cat_id"];
		$photo=$row["pro_photo"];
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
<form action="updatepro1.php?photo=<?php echo $photo; ?>"   enctype="multipart/form-data"  method="post">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><center>Product Update</center></h3>
  </div>
  <div class="panel-body">
    
  			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Product Id</span>
			  <input type="text" class="form-control" name="txtid" readonly value="<?php echo $pid;?>" aria-describedby="basic-addon1">
				</div>
					</br>

			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Product Name</span>
			  <input type="text" class="form-control" name="txtname"  value="<?php echo $pname;?>"   aria-describedby="basic-addon1">
				</div>
					</br>


			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Product Price</span>
			  <input type="text" class="form-control" name="txtprice" value="<?php echo $pprice;?>"  aria-describedby="basic-addon1">
				</div>
					</br>


			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Soh</span>
			  <input type="text" class="form-control" name="txtsoh" value="<?php echo $soh;?>"  aria-describedby="basic-addon1">
				</div>
					</br>


			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Mfg</span>
			  <input type="text" class="form-control" name="txtmfg" value="<?php echo $mfg;?>"  aria-describedby="basic-addon1">
				</div>
					</br>


			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Warranty</span>
			  <input type="text" class="form-control" name="txtwar" value="<?php echo $war;?>" aria-describedby="basic-addon1">
				</div>
					</br>


			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Color</span>
			 <select name="txtcolor" style="height:30px;">
				<option value="red" <?php if($color=="red") echo 'selected';?>>Red</option>
					<option value="blue" <?php if($color=="blue") echo 'selected';?>>Blue</option>
					<option value="black" <?php if($color=="black") echo 'selected';?>>Black</option>
						<option value="yellow" <?php if($color=="yellow") echo 'selected';?>>yellow</option>
				</select>
				</div>
					</br>

					<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Image</span>
			  <img height="150px" width="150px" src="<?php echo $photo; ?>"/>
			  <input type="file" class="form-control" name="txtphoto"  aria-describedby="basic-addon1"/>
				</div>
					</br>

					<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Descriptiomn</span>
			  <input type="text" class="form-control" name="txtdes" value="<?php echo $des;?>" aria-describedby="basic-addon1">
				</div>
					</br>


			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Category Name</span>
			  <select name="txtcatid" style="height:30px;">
					<?php
					//require '../database.php';
					$obj=new database();
					$res=$obj->cat_display();
					while($row=mysql_fetch_array($res))
					{
						echo '<option value="'.$row["cat_id"].'"';
						if($row["cat_id"]==$catid)
						echo 'selected';
						echo '>'.$row["cat_name"].'</option>';
					
					}
					?>
					</select>
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