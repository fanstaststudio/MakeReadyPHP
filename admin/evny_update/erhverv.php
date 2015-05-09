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
<h4 class="modal-title" id="myModalLabel">Opret Case</h4></div>
<div class="modal-body">

<form action='#'method='POST'>
<label for="headline" class="inuse">Navn:</label></br>
<input type="text" name="headline" class="form-control"></br>

<input type="hidden" name="type" value="3">

<label for="content" class="inuse">Indhold:</label></br>
<textarea id="editor1" name="content"></textarea>
<label for="content" class="inuse">Projekt:</label></br>
<textarea id="editor1" name="image"></textarea>

<div class="row">
	
  <div class="col-md-6">
	<label for="images" class="inuse">Logo:</label></br>
  	
	<select class="form-control" name="image_1">
	<option>Tom</option>	
	<?php
	//vælger tabellen
	$resultat = $mysql->query("SELECT headline FROM logo") or die ($mysql->error);

	//Bruger fetch_object
	if($resultat) {
	while($row = $resultat->fetch_object()) {

	$img_headline = $row->headline;

	echo "<option>$img_headline</option>";
	}}
	?>
	</select>
	<br>
  </div>


  <div class="col-md-6">
	<label for="images" class="inuse">Case Billede:</label></br>
  	
	<select class="form-control" name="image_2">
	<option>Tom</option>
	<?php
	//vælger tabellen
	$resultat = $mysql->query("SELECT headline FROM content") or die ($mysql->error);

	//Bruger fetch_object
	if($resultat) {
	while($row = $resultat->fetch_object()) {

	$img_headline = $row->headline;
	echo "<option>$img_headline</option>";
	}}
	?>
	</select>
	<br>



  </div>
</div>

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
<button type="submit" class="btn btn-default" name="gem_erhverv" value="gem_events">Gem</button>

</form>

</div></div></div></div>