<?php 	include('lock.php');
		include("include/header.php");
		include("css/images.php"); ?>

<div class="content">
<div class="panel-heading"><h2>Blog Billeder <span>
<a href="blog_images/index.php">Upload nyt</a></span></h2></div>
<div class="row">
	<style>
	.col-md-4{ 
		padding:10px;
		padding-top:0px;
		padding-bottom:0px;
	}
	</style>
<?php
//vælger tabellen
$resultat = $mysql->query("SELECT * FROM images ORDER BY id desc") or die ($mysql->error);

//Bruger fetch_object
if($resultat){	
while($row = $resultat->fetch_object()){
	
$id = $row->id;
$full_web = $row->link;
$headline = $row->headline;

$images = <<<EUD
<div class="col-md-4">
<div class="thumbnail">
<img src="cms_image/blog/crops/$full_web" width="100%" height="auto" alt="Cover">
<div class="caption"><h3 id="overskrift_images">$headline</h3>
<form action='blog_images.php'method='POST'>
<p>
<input type='hidden' name='image' value='$full_web'>
<input type='hidden' name='id' value='$id'>

<input type='submit' name="billede_slet" class="btn btn-danger" value='Slet billede'/>
</form>
</p></div></div></div>
EUD;

echo $images;

}}

?>

</div></div>
<?php include("include/footer.php"); ?>