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
		}
		
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="deletepro1.php" method="post">
<center>
<h1>Delete Form</h1>
<table border="5">

<tr>
	<td>Pro_id</td>
	<td><input type="text" name="txtid" readonly value="<?php echo $pid;?>" /></td>
</tr>
<tr>
	<td>Pro_name</td>
	<td><input type="text" name="txtname" value="<?php echo $pname;?>" /></td>
</tr><tr>
	<td>Pro_price</td>
	<td><input type="text" name="txtprice" value="<?php echo $pprice;?>" /></td>
</tr>
<tr>
	<td>soh</td>
	<td><input type="number" name="txtsoh" value="<?php echo $soh;?>"/></td>
</tr>
<tr>
	<td>mfg</td>
	<td><input type="text" name="txtmfg" value="<?php echo $mfg;?>"/></td>
</tr>
<tr>
	<td>warranty</td>
	<td><input type="text" name="txtwar" value="<?php echo $war;?>"/></td>
</tr>
<tr>
	<td>color</td>
	<td>
	<select name="txtcolor">
	<option value="red" <?php if($color=="red") echo 'selected';?>>Red</option>
		<option value="blue" <?php if($color=="blue") echo 'selected';?>>Blue</option>
		<option value="black" <?php if($color=="black") echo 'selected';?>>Black</option>
			<option value="yellow" <?php if($color=="yellow") echo 'selected';?>>yellow</option>
	</select>
	</td>
</tr>
<tr>
	<td>Description</td>
	<td><input type="text" name="txtdes" value="<?php echo $des;?>"/></td>
</tr>
<tr>
	<td>Category</td>
	<td>
	<select name="txtcatid">
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
	</td>
</tr>
<tr>
<td>
<input type="submit" value="delete" name="btn_delete"/>
</td>
</tr>
</table>

</center>
</form>
</body>
</html>