
	
			<div class="list-group">
      <?php
        require '../database.php';
  $obj1=new database();
  $res1=$obj1->pro_display();
  $count=mysql_num_rows($res1);
      ?>
        
  <a href="#" class="list-group-item active">
    Category
  </a>
  <a href="profile2.php" class="list-group-item ">
    All Product<span class="badge"> <?php echo $count; ?></span>
  </a>
  <?php
  	//require '../database.php';
	$obj=new database();
	$res=$obj->cat_displaybycount();
	
	while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
	{
     echo ' <a href="probycat2.php?id='.$row["cat_id"].'" class="list-group-item">'.$row["cat_name"].'<span class="badge">'.$row["count"].'</span></a>';
	 
	}

  ?>
		</div>
	
	


	