
<?php
$tech = $mysql->query("SELECT * FROM kontakt WHERE id='1'") or die ($mysql->error);
if($tech) {	
while($row = $tech->fetch_object()) {
$footer_headline = $row->footer_headline;
$footer_content = $row->footer_content;
$left_headline = $row->left_headline;
$left_content = $row->left_content;
$right_headline = $row->right_headline;
$right_content = $row->right_content;
$right_name = $row->right_name;
$adresse = $row->adresse;
$email = $row->email;
$phone = $row->phone;
}};
?>

<?php
$seo = $mysql->query("SELECT * FROM seo") or die ($mysql->error);
if($seo) {	
while($row = $seo->fetch_object()) {
$meta_metatags = $row->metatags;
$meta_description = $row->description;
}};
?>