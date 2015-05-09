<br><br>




<?php $privat=$mysql->query("SELECT * FROM event_news WHERE type='4' AND inuse='1'") or die ($mysql->error); if($privat) { while($row = $privat->fetch_object()) { 

	$id = $row->id; 
	$headline_content = $row->headline; 
	$content = $row->content; 
	$image = $row->image; 
	$image_1 = $row->image_1; 
	$image_2 = $row->image_2; 
	$image_3 = $row->image_3; 
	$link = $row->link; 

	$billede = $mysql->query("SELECT * FROM images WHERE headline='$image_3'") or die ($mysql->error); if($billede) { while($row = $billede->fetch_object()) { 
		$billede_url = $row->link; 
		$headline = $row->headline; 

$privat_content = <<<EUD
    <!--- Jumbotron -->
    <div class="container-fluid">
	
	<style>
	#trold_$id{
	  background-image: 
	   linear-gradient(
	      rgba(0, 0, 0, 0.5),
	      rgba(0, 0, 0, 0.5)
	    ),
	    url(admin/cms_image/blog/crops/full_$billede_url);
	}
	</style>
			<div class="jumbotron blog" id="trold_$id">
			<div class="headline_blog">
			<p class="border">$headline_content</p>
		  	<h1>$content</h1>
			<p>$image</p>	
		<div class="centered">
			
<a href="index.php?site=blogpost&id=$id"><button type="button" onclick="blogpost.html" class="btn btn-primary btn-lg outline"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button></a>
	</div></div></div></div>
EUD;
echo $privat_content; 
 }} }}; ?>
	
	
	