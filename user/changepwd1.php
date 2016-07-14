<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    
     <link href="Content/bootstrap.css" rel="stylesheet" /></head>
</head>
<body class="container">

	<div class="row">

			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



	</div>
<form action="y.php" method="post">
<center>
<h1>Change Password</h1>
<table border="1">
<tr>
<td>Old Password::</td>
<td><input type="password" name="txtopwd"/></td>
</tr>
<tr>
<td>New Password::</td>
<td><input type="password" name="txtnpwd"/></td>
</tr>
<tr>
<td>Confirm Password::</td>
<td><input type="password" name="txtcpwd"/></td>
</tr>
<tr>

<td><input type="submit" name="btnchange" value="change"/></td>

</tr>
</table>
</center>
</form>
</body>
</html>

