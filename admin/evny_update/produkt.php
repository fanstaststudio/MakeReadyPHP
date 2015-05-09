<?php include('lock.php'); ?>
<style>
#editor1{
	width:100%;
	height:110px;
	color: #333;
	background-color:#fff;
	border:1 solid #ccc;
	margin-bottom:20px;
	
}

</style>
<div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog"><div class="modal-content"><div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Opret Blog</h4></div>
<div class="modal-body">

<form action='#'method='POST'>
<label for="headline" class="inuse">Subject:</label></br>
<input type="text" name="headline" class="form-control" placeholder="Overskrift 1"></br>
<input type="text" name="image" class="form-control" placeholder="Overskrift 2"></br>
<input type="text" name="content" class="form-control" placeholder="Overskrift 3"></br>

<label for="headline" class="inuse">Title:</label></br>
<input type="text" name="image_1" class="form-control" placeholder="Overskrift"></br>

<label for="content" class="inuse">Content:</label></br>
<textarea id="editor1" name="image_2"></textarea>
	
<label for="images" class="inuse">Blog Billede:</label></br>
  	
<select class="form-control" name="image_3">
<option>Tom</option>
	<?php
	//vælger tabellen
	$resultat = $mysql->query("SELECT headline FROM images") or die ($mysql->error);

	//Bruger fetch_object
	if($resultat) {
	while($row = $resultat->fetch_object()) {

	$img_headline = $row->headline;
	echo "<option>$img_headline</option>";
	}}
?>
	</select>
	<br>

<input type="hidden" name="type" value="4">


<br>
<label for="nej">I brug?</label></br><div class="radio">

<label><input type="radio" name="inuse" id="radio_web" value="1" checked>
Ja, er aktiv på websiden.
</label>

</div><div class="radio">
	
<label><input type="radio" name="inuse" id="radio_web" value="0">
Nej, er deaktiveret på websiden
</label>

</div></div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Luk</button>
<button type="submit" class="btn btn-default" name="gem_produkt" value="gem_produkt">Gem</button>

</form>

</div></div></div></div>