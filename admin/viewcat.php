<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<link href="../Content/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
  	<script src="../Scripts/bootstrap.min.js"></script>
  	<script src='../js/jquery.dataTables.min.js'></script>

    <script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>

     	<script>
     		function del()
     		{
     			return confirm("Are You Sure You Want To Delete?");
     		}
     </script>

</head>
<body>

		 <?php
    		include 'header.php';
   		 ?>
<div class="container">
<div class="row">
<center>
		<div class="row">
		<div class="col-md-12 col-sd-12">
				<div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">CATEGORIES</div>
		<form action="multicatdele.php" method="post">
		  <!-- Table -->
		  <table class="table" id="dataTable">
	<thead>
	<tr>
	<th><input type="checkbox" name="chkhead" style="opacity:1" /></th>
	<th>Cat_id</th>
	<th>Cat_name</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php 
	
	require '../database.php';
	$obj=new database();
	$res=$obj->cat_display();
	
	while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
	{
	echo "<tr>";
	 echo '<td><input type="checkbox"  name="chk[]" value="'.$row["cat_id"].'" style="opacity:1"/></td>';
	echo "<td>".$row["cat_id"]."</td>";
	echo "<td>".$row["cat_name"]."</td>";
	echo '<td>'.'<a href="updatecat.php?cat_id='.$row["cat_id"].'">Update</a>';
	echo '<a href="deletecat1.php?cat_id='.$row["cat_id"].'" onClick="return del()">Delete</a>'.'</td>';
	echo "</tr>";
	}
?>
</tbody>
		  </table>

		  <input type="submit" value="Delete All" name="muldele"/>
		  </form>
		</div>
		</div>
		</div>



</center>
</div>
</div>
</body>
</html>