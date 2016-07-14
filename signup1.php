<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="Content/bootstrap.css" rel="stylesheet">
	<script src="Scripts/jquery-1.9.1.js"></script>
	<script src="Scripts/bootstrap.js"></script>
    <script type="text/javascript">

    function alphanumeric(uname)
    {
        var letter=/^[0-9a-zA-z]+$/;
        if(uname.value.match(letter))
        {
            return true;
        }
        else
        {
            alert('user name must have alphanumeric characters only');
            uname.focus();
            return false;
        }

    }

    </script>
</head>
<body>
<?php

    if($_POST["captcha_code"]==$_SESSION["captcha_code"])
    {

        $message = "Your message received successfully";

	if(isset($_POST["btnsubmit"]))
	{
		$name=$_POST["txtname"];
		$email=$_POST["txtemail"];
		$pass=$_POST["txtpass"];
		$cpass=$_POST["txtpass1"];
		$mno=$_POST["txtmobile"];
		$city=$_POST["txtcity"];
		$gender=$_POST["txtgender"];
		if($pass==$cpass)
		{
		//$type="user";
		$con=mysql_connect('localhost','root','');
		mysql_select_db('db1',$con);
		$res=mysql_query("insert into user_tbl values('$email','$name','$pass','$mno','$city','$gender','user')",$con);
	
		}
		else
		{
			echo "password not same";
		}
	}
}
    else{
    
echo "Enter Correct Captcha Code";
}

?>

<div class="container">
<form action="signup1.php" method="post" name="form1">



<div class="row">
<div col-md-12 col-sd-12>
<div class="jumbotron">
  <center><h1>Shopping kart</h1></center>
  
 </div>
</div>
</div>

 <div class="row">
        <div class="col-md-offset-3 col-md-5">
            <h1 class="text-center">Welcome..</h1>
            <div class="panel panel-info">
                <div class="panel-heading">Sign Up</div>
                    <div class="panel-body">
                    <label>Email ID:</label>
                     <input type="email" placeholder="Enter mail in @ format" name="txtemail" class="form-control" />
                     </div>
                     <div class="panel-body">
                     <label>Name:</label>
                     <input type="text" name="txtname" placeholder="Enter Name" class="form-control" onblur="return alphanumeric(document.form1.txtname);"/>
                     </div>
                     <div class="panel-body">
                     <label>Password:</label>
                     <input type="password" name="txtpass" placeholder="Enter password" class="form-control" />
                     </div>
                     <div class="panel-body">
                     <label>Confirm Password:</label>
                     <input type="password" name="txtpass1" placeholder="Enter password" class="form-control" />
                     </div>
                     <div class="panel-body">
                     <label>Mobile No.:</label>
                     <input type="number" name="txtmobile" placeholder="Enter Mobile No:" class="form-control" />
                     </div>
                     <div class="panel-body">
                     <label>City:</label>
                     <input type="text" name="txtcity" placeholder="Enter city" class="form-control" />
                     </div> 
                      <div class="panel-body">
                      <label>Gender:</label><br>
                     	<input  type="radio" value="male" name="txtgender" checked>Male 
						<input type="radio" value="female" name="txtgender">Female 
                     </div>
                                            
                        
                        
                          
                            <div class="panel-body">
                            <label>Captcha code:</label><br>
                        <input type="text" class="form-control" name="captcha_code" />
                        </br>
                        <img src="captcha.php" />

                            </div>


               </div>
            
			   <center>
          <p style="color:red">
		 
		  </p></center>
            <input type="submit" name="btnsubmit" value="Get Me In!" class="form-control btn btn-success" />
            
        </div>
            </div>


</div>
</form>
</div>

</body>
</html>