<?php 	include('lock.php');
		include("include/header.php");
		include("css/images.php"); ?>
		<style>
		.col-md-4{ 
			padding:10px;
			padding-top:0px;
			padding-bottom:0px;
		}
		</style>
<div class="content">
<div class="panel-heading"><h2>Cover Library! <span>
<a href="cover/index.php">Upload nyt</a></span></h2></div>
<div class="row">

<?php
//vælger tabellen
$resultat = $mysql->query("SELECT * FROM cover ORDER BY id desc") or die ($mysql->error);

//Bruger fetch_object
if($resultat){	
while($row = $resultat->fetch_object()){
	
$id = $row->id;
$full_web = $row->link;
$headline = $row->headline;

$images = <<<EUD
<div class="col-md-4">
<div class="thumbnail">
<img src="cms_image/covers/crops/full_$full_web" width="100%" height="auto" alt="Cover">
<div class="caption"><h3 id="overskrift_images">$headline</h3>
<form action='cover.php'method='POST'>
<p>
<input type='hidden' name='image' value='$full_web'>
<input type='hidden' name='id' value='$id'>
<input type='submit' name="cover_slet" class="btn btn-danger" value='Slet billede'/>
</form>
</p></div></div></div>
EUD;
echo $images;
}} ?>

</div></div>
<?php include("include/footer.php"); ?>