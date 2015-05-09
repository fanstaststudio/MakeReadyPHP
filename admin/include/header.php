<?php 

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

include("mysql.php");
include("config.php");

$id_nyhed = $_POST['id_nyhed'];
$ret_id = $_POST['ret_id'];
$headline = $_POST['headline'];
$headline_en = $_POST['headline_en'];
$content = $_POST['content']; 
$content_en = $_POST['content_en']; 
$dato = $_POST['dato']; 
$image = $_POST['image']; 
$image_1 = $_POST['image_1']; 
$image_2 = $_POST['image_2']; 
$image_3 = $_POST['image_3']; 
$image_4 = $_POST['image_4']; 
$link = $_POST['link']; 

$inuse = $_POST['inuse']; 
$radio_web = $_POST['radio_web']; 
$type = $_POST['type']; 
$dk_description = $_POST['dk_description'];
$en_description = $_POST['en_description'];
$addnew = $_POST['addnew'];
$ret = $_POST['ret'];
$id = $_POST['id'];
$upload = $_POST['upload'];

$facebook_name = $_POST['facebook_name'];
$facebook_html = $_POST['facebook_html'];
$facebook_id = $_POST['facebook_id'];

$headline_cover = $_POST['headline_cover'];
$id_cover = $_POST['id_cover'];
$image_cover = $_POST['image_cover'];

include("database.php");

?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<meta name = "viewport" content = "initial-scale = 1.0, user-scalable = no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<style>
.navbar-inverse{
	-moz-border-radius: 0px;
	border-radius: 0px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>MakeReady CMS</title>
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

<a class="navbar-brand" href="index.php">CMS</a></div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">


<li><a href="seo.php">				Seo</a></li>
<li><a href="contact.php">			Information</a></li>

<li><a href="erhverv.php">			Case</a></li>
<li><a href="produkt.php">			Blog</a></li>	


<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Billede Indhold <b class="caret"></b></a>
    <ul class="dropdown-menu">	
    <li><a href="cover.php">		Cover Billeder</a></li>
	<li><a href="blog_images.php">	Blog Billeder</a></li>	
	<li><a href="case.php">			Case Billeder</a></li>
	<li><a href="logo.php">			Logoer</a></li>	
	
</ul></li>




<li><a href="admin.php">			Admin</a></li>

</ul><ul class="nav navbar-nav navbar-right">
<li><a href="logout.php">			Logud</a></li>

</div>
</div>
</nav>
</body>