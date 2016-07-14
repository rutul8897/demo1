
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
     			return confirm("Are You Sure You Want To Delete?")
     		}
     </script>
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

	 <?php
    		include 'header.php';
    ?>
    
<div class="container">
<div class="row">
       
       <center>

		

				<div class="panel panel-primary">
			  <!-- Default panel contents -->
			  <div class="panel-heading">Products Avaible</div>
<form action="multiprodele.php" method="post">
			  <!-- Table -->
			  <table class="table" id="dataTable"> 
<thead>
			  		<tr>
<th><input type="checkbox" name="chkhead" style="opacity: 1"/></th>
<th>Product id</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Stock On Hand</th>
<th>Mfg</th>
<th>Warranty</th>
<th>Color</th>
<th>Product Description</th>
<th>Image</th>
<th>Category</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

require '../database.php';
$res=new database();
$res=$res->pro_display();
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
	echo '<tr>';
    echo '<td>'.'<input type="checkbox" name="chk[]" style="opacity: 1" value='.$row["pro_id"].'/>'.'</td>';
	echo '<td>'.$row["pro_id"].'</td>';
	echo '<td>'.$row["pro_name"].'</td>';
	echo '<td>'.$row["pro_price"].'</td>';
	echo '<td>'.$row["pro_soh"].'</td>';
	echo '<td>'.$row["pro_mfg"].'</td>';
	echo '<td>'.$row["warranty"].'</td>';
	echo '<td>'.$row["color"].'</td>';
	echo '<td>'.$row["disc"].'</td>';
	echo '<td><img src="'.$row["pro_photo"].'"style="height:50px;width:50px"></td>';
	echo '<td>'.$row["cat_name"].'</td>';
	echo '<td>'.'<a href="updatepro.php?pid='.$row["pro_id"].'">Update</a>';
	echo '<a href="deletepro1.php?pid='.$row["pro_id"].'" onClick="return del()">Delete</a>'.'</td>';
	echo '</tr>';
}
?>

</tbody>
			  </table>

              <input type="submit" value="Delete All" name="muldele"/>

              </form>
     </div>



</center>
</div>
</div>
</body>
</html>