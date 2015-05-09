<?php include('../lock.php'); ?>

<?php include("../include/mysql.php"); ?>
<?php include("topscript.php");?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.js"></script>	
<script src="../js/modal.js"></script>	
<script src="../js/jquery.imgareaselect.pack.js"></script>	
<script src="../js/jquery.min.js"></script>	

<style>
.navbar-inverse{
	-moz-border-radius: 0px;
	border-radius: 0px;
}
</style>

<meta name = "viewport" content = "initial-scale = 1.0, user-scalable = no">			
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<title>Techgroup CMS</title>
</head>

<body>

<?php echo $update; ?>

<nav class="navbar navbar-inverse" role="navigation">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">			Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="../index.php">CMS</a></div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
</ul><ul class="nav navbar-nav navbar-right">
<li><a href="../logout.php">		Logud</a></li>
</nav>

</body>
<div class="content">

	<style>
	.content{
	margin: 0 auto;
	height:auto;
	min-height:215px;
	width:80%;
	background-color:	#f8f7f7;
	padding:			10px;
	padding-bottom:		0px;
	border:				#ccc 1px solid;
	border-radius:		5px;
	margin-bottom:		20px;
	}
	.caption{
	margin-top:-20px;
	margin-bottom:-10px;
	margin-left:-5px;
	}
	.btn-primary{
	margin-right:3px;
	}
	.btn-default{
	margin-right:3px;
	}
	span{
	font-size:14px;
	}
	.row{
		margin: 0 auto;
		width:100%;
		padding:5px;
		padding-right:0px;
	}
	.billede{
		width:100%;
		height:auto;
		background-color:#333;
		min-height:170px;
	}
	.billede img{
		position:absolute;
		width:95%;
		height:auto;
		background-color:#333;
	}
	.btn-primary{
		margin-top:5px;
		padding:7px;
		padding-top:2px;
		padding-bottom:2px;
		font-size:14px;
	}
	.btn-default{
		margin-top:5px;
		padding:7px;
		padding-top:2px;
		padding-bottom:2px;
		font-size:14px;		
	}
	p{
		margin-top:0px;
		margin-right:20px;
	}
	a{
		color:#333;
	}
	h1{
		margin-top:5px;
	}
	a:hover{
		color:#333;
		text-decoration:underline;
	}
	.btn-primary{
		margin-top:-5px;
	}
	</style>

<div class="row">

	<!-- START >> CROPPER -->
	<?php if(isset($_FILES['image'])){ // write out the onplete form ?>
	<form id="form_cropper" name="form_cropper" action="<?php echo $docRoot; ?>complete.php" method="post" onsubmit="return checkRequired();">
	<?php } else { // write out the normal form ?>
	<form id="form_cropper" name="form_cropper" action="" enctype="multipart/form-data" method="post">
	<?php } ?>

	<div class="row">
	  <div class="col-md-6" id="left">
	  <h1>Upload Image:</h1>	
	<p>For at ændre billedets dimensioner skal du beskære billedet ved at markere den del som du gerne vil gemme.</p>
	
	<?php if(empty($img)) { ?><div id="div_file"><input name="image" type="file" /></div><?php }; ?>

	<?php if(empty($img)) { ?><div id="div_submit">
		<a href="../cover.php"><button type="button" class="btn btn-default">Tilbage</button></a>
		<input name="" type="submit" class="btn btn-default" onclick="setLoader(true);" /></div><?php }; ?>

	<?php if($img) { ?>

	<div id="div_test"><h3><a href="Javascript:;" onclick="previewImage('<?php echo ($_SESSION['cropper']['use_absolute_path']) ? str_replace($_SERVER['DOCUMENT_ROOT'],'',$img) : $docRoot.$image; ?>');">1: Beskær mig!</h3></a></div>

	<div id="div_accept" style="display:none;"><h3>2: Hvad skal filen hedde?</h3>
	<div id="field1_error" style="color:red; font-weight:bold; display:none;">Husk at udfyld mig!</div>
	<input type="text" name="field1" id="field1" value="<?php if(isset($_SESSION['crop']['field1'])) echo $_SESSION['crop']['field1']; ?>" tabindex-"2" /></dd>

	<input type="hidden" name="submitted" value="1" />
	<input name="submit" type="submit" id="gem" class="btn btn-primary" value="Gem" tabindex="5" />
	</div>
	<?php } ?>
	</td>
	</tr>

 </div>
	  <div class="col-md-6" id="right">
	  <div class="billede">
		<div id="div_main_img">
		<?php 
		if($error) {
		echo '<div class="error">'.$error.'</div>';
		}if($img) { 
		echo '<img src="'.str_replace($_SERVER['DOCUMENT_ROOT'],'',$img).'" id="cropbox" width="'.$thumbWidth.'" height="'.$thumbHeight.'" />'; }?>
</div>
</div>

</div></div>
</form>

</div>
</div>
</html>