<?php include('lock.php'); ?>

<?php 	
include("include/header.php");
include("css/seo.php"); 
?>

<div class="content">
	<?php
	//vælger tabellen
	$cover_mysql = $mysql->query("SELECT * FROM seo WHERE id_seo = '1'") or die ($mysql->error);

	//Bruger fetch_object
	if($cover_mysql) {	
	while($row = $cover_mysql->fetch_object()) {

	$id_cover = $row->id_cover;
	$description = $row->description;
	$metatags = $row->metatags;

$seo = <<<EUD
	<form action='seo.php'method='POST'>
		
	<div class='row'><h3>Description:</h3>
	<textarea class="form-control" name="description" rows="6">$description</textarea>
	</div>
	
	<div class='row'><h3>Metatags:</h3>
	<textarea class="form-control" name="metatags" rows="6">$metatags</textarea>
	</div>
	
	<input type="hidden" name="id_seo" value="$id_seo">
	<input type='submit' name="smiley" class="btn btn-default" value='Gem' />
	</form>
EUD;

	echo $seo;

}} ?>			
			
</div>

<?php include("include/footer.php"); ?>
