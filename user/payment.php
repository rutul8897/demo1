<?php
	
	session_start();
?>
<!DOCTYPE html>
<html>
<head>

<script>
     		function del()
     		{
     			return confirm("Are You Sure You Want To Delete?")
     		}
     </script>
<script src="../Scripts/jquery-1.9.1.js"></script>
    <script src="../Scripts/bootstrap.js"></script>
    
     <link href="../Content/bootstrap.css" rel="stylesheet" /></head>
<body>


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


<body class="container">

<div class="row">
<div class="col-md-12 col-sd-12">
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
        	

<!-- small modal -->
      <button type="button" style="height:45px;width:100px;margin-right:10px;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Edit Profile</button>
      <form action="x.php" method="post">
      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
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

        <a href="history.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> </a>

    </li>

       <?php

      $email_id=$_SESSION["email_id"];
    $flag='kart';
      require '../database.php';
        $obj=new database();
        $res=$obj->viewkart1($email_id,$flag);
        $count=mysql_num_rows($res);
      ?>
  
       <li>
                 
                          <!-- Large modal -->
            <button type="button" class="btn btn-primary" style="height:45px;width:100px;margin-right:10px;" data-toggle="modal" data-target=".bs-example-modal-lg">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span class="badge" style="font-size:8px;margin-top:-12px;margin-left:-5px;background:yellow;"> <?php echo $count; ?></span>
            </button>

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                      
                            <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      
                    </div>
                                    
                        <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><center><h1>Kart<span class="badge"> <?php echo $count; ?></span></h1></center></div>
                    <div class="panel-body">
                      
                    </div>

                    <!-- Table -->
                    <table class="table">
                        <tr>
                  <th>Order_id</th>
                  <th>Ammount</th>
                  <th>Order_Date</th>
                  <th>product_name</th>
                  <th>email_id</th>
                  <th>Qty</th>
                  <th>Image</th>
                  <th>Action</th>
                  </tr>
                  <?php
                    
                     // echo $email_id."item".$count;
                          while ($row=mysql_fetch_array($res,MYSQL_ASSOC))
                          {
                            echo '<tr>';
                            echo '<td>'.$row["o_id"].'</td>';
                            echo '<td>'.$row["amt"].'</td>';
                            echo '<td>'.$row["o_date"].'</td>';
                            echo '<td>'.$row["pro_name"].'</td>';
                            echo '<td>'.$row["fk_email_id"].'</td>';
                            echo '<td>'.$row["qty"].'</td>';
                            echo '<td><img src="'.$row["pro_photo"].'" height="50px" width="50px"/></td>';
                            echo '<td><a href="kartdelete.php?oid='.$row["o_id"].'" onClick="return del()"><span class="glyphicon   glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
                            echo '</tr>';

                          }

                  ?>
                  <?php

  $res3=new database();
  $res3=$res3->payment($email_id);
  while($row=mysql_fetch_assoc($res3))
  {
    $amt=$row["amount"];
  }



?>
<tr>
<td>Total Amount:</td>
<td><b><u><?php echo $amt;?></u></b></td>

</tr>
                    
                    </div>
                  </div>
                    

                  </div>
                  </table>  

                        <form action="payment.php" method="post">
                              <div class="modal-footer">
                          <button type="submit" name="btnpay" class="btn btn-primary">Proceed to Payment</button>
                        </div>

                        </form>
                </div>
              </div>
            </div>




         <!--  <a href="kart.php" class="btn btn-info" role="button"></a>-->
       </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li style="margin-left:10px;"><?php echo $email_id; ?></li>
         		  <li role="separator" class="divider"></li>
            <li style="margin-left:10px;"><?php echo $mobile_no; ?></li>
             <li role="separator" class="divider"></li>
            <li style="margin-left:10px;"><?php echo $gender; ?></li>
            <li role="separator" class="divider"></li>
            <li style="margin-left:10px;"><?php echo $city; ?></li>
            <li role="separator" class="divider"></li>
            <li style="margin-left:10px;"><a href="../login1.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>


	<div class="row">
			<div class="col-md-3 col-sd-3">

										<div class="list-group">
						  <a href="#" class="list-group-item active">
						    Payment Mode
						  </a>
						  <a href="debitcard.php" class="list-group-item"  >Debit Card</a>
						  <a href="#" class="list-group-item">Credit Card</a>
						  
				</div>



			</div>

			<div class="col-md-9 col-sd-9">


				<div class="panel panel-primary">
						<form action="finalpay.php" method="post">
					<div class="panel-heading">
					<center>
			    <h3 class="panel-title">Cash Payment</h3>
			    </center>
			  </div>

					  <div class="panel-body">
					    
					  	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Name</span>
						  <input type="text" class="form-control" placeholder="Enter name" aria-describedby="basic-addon1">
						</div>
						</br>

						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Address</span>
						  <input type="text" class="form-control" placeholder="Enter Address" aria-describedby="basic-addon1">
						</div>
						</br>

						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">City</span>
						  <input type="text" class="form-control" placeholder="Enter City" aria-describedby="basic-addon1">
						</div>
						</br>

						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Pincode</span>
						  <input type="text" class="form-control" placeholder="Enter Pincode" aria-describedby="basic-addon1">
						</div>
						</br>

						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Mobile No</span>
						  <input type="text" class="form-control" placeholder="Enter Number" aria-describedby="basic-addon1">
						</div>
						</br>

						<center>

								 <button type="submit" name="btncash" class="btn btn-danger">Cash Delivary</button>
                 				<button type="submit" name="btncash" class="btn btn-info" ><a href="profile1.php">Back</a></button>

						</center>

					  </div>
					  </form>


					</div>

			</div>

		<!-- <?php
		//$email_id=$_SESSION["email_id"];
		//echo "Welcome to ".$email_id;
		?>

		   <form action="finalpay.php" method="post">
		   address<input type="text" name="txtadd"/>
                 
                          <button type="submit" name="btnpay" class="btn btn-primary">Buy</button>
                 

           </form>-->

     </div>
</body>

</html>