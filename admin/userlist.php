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

<center>

		<div class="container">
		<div class="row">
				<div class="panel panel-primary">
			  <!-- Default panel contents -->
			  <div class="panel-heading">User List</div>
			  <div class="panel-body">
			 
			  </div>
<form action="multiprodele.php" method="post">
			  <!-- Table -->
						  <table class="table" id="dataTable">
						  <thead>
						    <tr>
				<th><input type="checkbox" name="chkhead" style="opacity: 1"/></th>
				<th>Email_id</th>
				<th>User Name</th>
				<th>Mobile</th>
				<th>City</th>
				<th>Gender</th>
			</tr>
			</thead>
			<tbody>
			<?php 
				
					require '../database.php';
					$obj=new database();
					$res=$obj->usera_display();
					
					while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
					{
					echo "<tr>";
					echo '<td>'.'<input type="checkbox" name="chk[]" style="opacity: 1" value='.$row["email_ids"].'/>'.'</td>';
					echo "<td>".$row["email_id"]."</td>";
					echo "<td>".$row["user_name"]."</td>";
						echo "<td>".$row["mobile"]."</td>";
							echo "<td>".$row["city"]."</td>";
								echo "<td>".$row["gender"]."</td>";
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


</body>
</html>