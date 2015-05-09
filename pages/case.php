<br><br>
<?php $privat=$mysql->query("SELECT * FROM event_news WHERE type='3' AND inuse='1'") or die ($mysql->error); if($privat) { while($row = $privat->fetch_object()) { 

	$id = $row->id; 
	$headline_content = $row->headline; 
	$content = $row->content; 
	$image = $row->image; 
	$image_1 = $row->image_1; 
	$image_2 = $row->image_2; 
	$image_3 = $row->image_3; 
	$image_4 = $row->image_4; 
	$link = $row->link; 
	
	$billede = $mysql->query("SELECT * FROM logo WHERE headline='$image_1'") or die ($mysql->error); if($billede) { while($row = $billede->fetch_object()) { 
		$billede_url = $row->link; 
		$headline = $row->headline; 

		$link = $row->link; 
		$billede = $mysql->query("SELECT * FROM content WHERE headline='$image_2'") or die ($mysql->error); if($billede) { while($row = $billede->fetch_object()) { 
			$billede_url_1 = $row->link; 
			$headline_1 = $row->headline; 

			if ($id % 2 == "0"){
    		  $case = '<div class="case">';
			} else {
  			  $case = '<div class="case_left">';
			}

	$privat_content = <<<EUD
    <div class="container-fluid">
$case				<div class="case_info">
					<h2>$headline_content</h2>
					<p>$content</p>
					<br/>
					<h3>Projekt indhold:</h3>
					$image
				</div>
				<img class="case_logo" src="admin/cms_image/logo/crops/full_$billede_url">
				
				<style>
				#trold_$id{
					background-image: 
					    linear-gradient(
					      rgba(0, 0, 0, 0.3),
					      rgba(0, 0, 0, 0.3)
					    ),
					    url(admin/cms_image/case/crops/full_$billede_url_1);}
				</style>
				<div class="case_slide" id="trold_$id">
				
				</div>
			</div>
		</div>
EUD;
echo $privat_content; }}
 }} }}; ?>
