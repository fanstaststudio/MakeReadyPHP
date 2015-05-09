<?php 	include('lock.php');
		include("include/header.php");
		include("css/houers.php"); ?>

<style>
.dynamiskbox{
width:95%;
margin:0 auto;
}
input, select, textarea{
margin-bottom:8px;
}
.content{
margin-bottom:20px;
}
</style>

<div class="content">
		
<?php
$resultat = $mysql->query("SELECT * FROM kontakt") or die ($mysql->error);
if($resultat) {
while($row = $resultat->fetch_object()) {
$id 				= $row->id;
$footer_headline 	= $row->footer_headline;
$footer_content 	= $row->footer_content;
$left_headline 		= $row->left_headline;
$left_content 		= $row->left_content;
$right_headline 	= $row->right_headline;
$right_content		= $row->right_content;
$right_name 		= $row->right_name;
$adresse 			= $row->adresse;
$email 				= $row->email;
$phone 				= $row->phone;
}} ?>

<div class="dynamiskbox"><form action='#'method='POST'><div class='row'>
<label for="exampleInputEmail1">Om os:</label>
<input type="text" name="footer_headline" class="form-control" value="<?php echo $footer_headline; ?>">
<input type="text" name="footer_content" class="form-control" value="<?php echo $footer_content; ?>">
<br>
<label for="exampleInputEmail1">Kontakt Tekst:</label>
<input type="text" name="left_headline" class="form-control" value="<?php echo $left_headline; ?>">
<input type="text" name="left_content" class="form-control" value="<?php echo $left_content; ?>">
<input type="text" name="right_headline" class="form-control" value="<?php echo $right_headline; ?>">

<br>
<label for="exampleInputEmail1">Kontakt Mail:</label>
<input type="text" name="right_content" class="form-control" value="<?php echo $right_content; ?>">		
<input type="text" name="right_name" class="form-control" value="<?php echo $right_name; ?>">		
<br>
<label for="exampleInputEmail1">Telefonnummer:</label>
<input type="text" name="adresse" class="form-control" value="<?php echo $adresse; ?>">
<br>
<label for="exampleInputEmail1">Footer</label>
<input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
<input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">

<div class="right"><input type='submit' name="kontakt" class="btn btn-default" value='Gem' />
</form></div></div>

</div></div>
<?php include("include/footer.php"); ?>
