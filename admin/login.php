<?php
include('include/adminlog.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

$sql="SELECT id_admin FROM Admin WHERE Username='$myusername' and Harshed_Passcode='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");
session_start("myusername");
$session = array();

$_SESSION['login_user']="$myusername";
header("location: index.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Login - Admin</title>
	<LINK href="css/login.css" rel="stylesheet" type="text/css">
	
	<meta http-equiv="content-type" 
	content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/bootstrap.min.js"></script>
	
	
	<style>
	html, body{
		background-color:#333;
		
	}
	.login{
		margin:0 auto;
		margin-top:100px;
		background-color:#ccc;
		width:450px;
		padding:20px;
		padding-bottom:10px;
		border:				#333 1px solid;
		border-radius:		5px;
	}
	img{
		margin-bottom:15px;
		border:				1px solid;
		border-radius:		5px;
	}
	</style>
	
</head>

<body>
	
	<div class="login">
	<img src="image/login.jpg" width="100%" height="auto" alt="Cover">
	<form action="login.php" method="post"class="form-horizontal" role="form">
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	      <input type="username" name="username" class="form-control" id="inputEmail3" placeholder="Username">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      
	<button type="submit" class="btn btn-default">Log ind</button>
	<input type=button onClick="parent.location='http://www.balsbyel.dk'" class="btn btn-default"value='Tilbage'>
	</div>
	</div>
	</form>
	</div>

</body>
</html>