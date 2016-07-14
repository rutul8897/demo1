




	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Shopping Kart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
        	

<!-- Large modal -->
<button type="button" style="height:45px;width:100px;margin-right:10px;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Edit Profile</button>
<form action="x.php" method="post">
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
    		<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
      </div>

    		<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">User Name</span>
  				<input type="text" class="form-control"  name="txtname" value="<?php echo $name; ?>" aria-describedby="basic-addon1">
			</div>

			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Mobile No</span>
  				<input type="text" class="form-control"  name="txtmobile"  value="<?php echo $mobile_no; ?>" aria-describedby="basic-addon1">
			</div>

			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">City</span>
  				<input type="text" class="form-control"  name="txtcity"  value="<?php echo $city; ?>" aria-describedby="basic-addon1">
			</div>	

			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Gender</span>
			  <tr>
				<td><input type="radio" name="txtgender" <?php if($gender=="male") { echo 'checked';}?> value="male"/>male
				<input type="radio" name="txtgender" <?php if($gender=="female") { echo 'checked';}?> value="female"/>female</td>
				</tr>
			  </div>

			  <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" name="btnchange" class="btn btn-primary">Save changes</button>
		      </div>
    </div>
  </div>
</div>
</form>
        </li>

        <li><!-- Button trigger modal -->


<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Change Password
</button>
<form action="y.php" method="post">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
        	 <div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Old Password</span>
  				<input type="password" class="form-control"  name="txtopwd" placeholder="Enter Old Password" aria-describedby="basic-addon1">
			</div>

			 <div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">New Password</span>
			  <input type="password" class="form-control"  name="txtnpwd" placeholder="Enter New Password" aria-describedby="basic-addon1">
			</div>

			 <div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Re-Enter Password</span>
			  <input type="password" class="form-control"  name="txtcpwd" placeholder="Enter Re-Enter Password" aria-describedby="basic-addon1">
			</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" name="btnchange" class="btn btn-primary">Save changes</button>
		      </div>
    </div>
  </div>
</div>
</form>
</li>


       
      </ul>
      
     <ul class="nav navbar-nav navbar-right">
       <li>
           <a href="kart.php" class="btn btn-info" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
       </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $email_id; ?></li>
         		  <li role="separator" class="divider"></li>
            <li><?php echo $mobile_no; ?></li>
             <li role="separator" class="divider"></li>
            <li><?php echo $gender; ?></li>
            <li role="separator" class="divider"></li>
            <li><?php echo $city; ?></li>
            <li role="separator" class="divider"></li>
            <li><a href="../login1.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

