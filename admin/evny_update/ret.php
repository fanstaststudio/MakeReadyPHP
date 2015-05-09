<?php include('lock.php'); ?>

<?php
$resultat = $mysql->query("SELECT * FROM event_news WHERE id = '$ret_id'") or die ($mysql->error);
if($resultat) {
while($row = $resultat->fetch_object()) {
$id 			= $row->id;
$type 			= $row->type;
$headline 		= $row->headline;
$content 		= $row->content;
$image 			= $row->image;
$image_1 		= $row->image_1;
$image_2 		= $row->image_2;
$inuse 			= $row->inuse;
}}
?>

<div class="modal fade" id="ret_evny" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog"><div class="modal-content"><div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Ret Indhold:</h4></div>
<div class="modal-body">

<form action='#'method='POST'>
<label for="headline" class="inuse">Overskrift:</label></br>
<input type="text" name="headline" class="form-control" value="<?php echo $headline;?>">
<br>
<input type="hidden" name="type" value="<?php echo $type; ?>">

<label for="content" class="inuse">Indhold:</label></br>
<textarea id="editor1" name="content"><?php echo $content; ?></textarea>
<label for="content" class="inuse">Projekt:</label></br>
<textarea id="editor1" name="image"><?php echo $image; ?></textarea>

<br>
  <div class="row">

  <div class="col-md-6">
	  <label for="images" class="inuse">Logo:</label></br>
  	<select class="form-control" name="image_1">
	<option>
	<?php echo $image_1; ?>
	</option>
	
	<?php
	$resultat = $mysql->query("SELECT headline FROM logo") or die ($mysql->error);
	if($resultat) {
	while($row = $resultat->fetch_object()) {
	$img_headline = $row->headline;
	$img_option = <<<EUD
	<option>$img_headline</option>
EUD;
	echo $img_option;
	}}
	?>
	<?php if($image_1 != "Tom"){echo "<option>Tom</option>";}; ?>
	
	</select>
	<br>


  </div>


<div class="col-md-6">
	<label for="images" class="inuse">Case Billede:</label></br>
	
	<select class="form-control" name="image_2">
	<option>
		<?php echo $image_2; ?>
	</option>

	<?php
	$resultat = $mysql->query("SELECT headline FROM content") or die ($mysql->error);
	if($resultat) {
	while($row = $resultat->fetch_object()) {
	$img_headline = $row->headline;
	$img_option = <<<EUD
	<option>$img_headline</option>
EUD;
	echo $img_option;
	}}
	?>
	
	<?php if($image_2 != "Tom"){echo "<option>Tom</option>";}; ?>
	
	</select>

  </div>


</div>





<br>
<label for="nej">I brug?</label></br>
<div class="radio">

<label><input type="radio" name="inuse" id="radio_web" value="1" <?php if($inuse=="1"){ echo "checked"; }; ?>> 
Ja, er aktiv på websiden.
</label>

</div>
<div class="radio">
<label>
<input type="radio" name="inuse" id="radio_web" value="0" <?php if($inuse=="0"){ echo "checked"; }; ?>> 
Nej, er deaktiveret på websiden
</label>
</div></div>
<div class="modal-footer">
	<input type="hidden" name="id" value="<?php echo $id; ?>"	
<input type="hidden" name="upload" value="on">	
<button type="button" class="btn btn-default" data-dismiss="modal">Luk</button>
<button type="submit" class="btn btn-default" value='gem_ret' name="gem_ret">Gem</button>
</form>

</div></div></div></div>