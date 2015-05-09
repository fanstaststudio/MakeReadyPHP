<?php include('lock.php'); ?>

<?php 	
include("include/header.php");
include("css/evny.php");

//Inkludere POP-UP elementerne
include('evny_update/erhverv.php');
include('evny_update/ret.php'); 
?>

<style>
h3 span{
	font-size:20px;	
}
.glyphicon{
	position:relative;
	width:10px;
	margin:15px;
	float:right;
}
.media{
	margin:20px;
	margin-left:18px;
	background-color:	#ccc;
	padding:			10px;
	padding-bottom:		10px;
	border:				#ccc 1px solid;
	border-radius:		5px;
	margin-bottom:		-5px;
}
.media h2{
	margin-left:115px;
	padding-top:10px;
	
}
.caption{
	left:0px;
	margin-top:-39px;
}
img{
	margin-right:10px;
}
</style>
<div class="content">
<div class='row'>

<h1>Cases <span><a href="#" data-toggle="modal" data-target="#event">Opret Indhold</a></span></h1>

<?php
//vælger tabellen
$resultat = $mysql->query("SELECT * FROM event_news WHERE type = '3' ORDER BY inuse DESC") or die ($mysql->error);

//Bruger fetch_object
if($resultat) {	
while($row = $resultat->fetch_object()) {

$id = $row->id;
$type = $row->type;
$headline = $row->headline;
$dato = $row->dato;
$content = $row->content;
$image = $row->image_1;
$inuse = $row->inuse;
	
echo "<div class='media'><a class='pull-left' href='#'>";

if($image=="Vælg Billede:"){
echo "<img src='image/no_image.jpg' width='200px' height='auto' alt='$billede_url'>";}

$billede_cover = $mysql->query("SELECT link FROM logo WHERE headline = '$image'") or die ($mysql->error);

if($billede_cover){	
while($row = $billede_cover->fetch_object()){

$billede_url = $row->link;
echo "<img src='cms_image/logo/crops/$billede_url' width='200px' height='auto' alt='$billede_url'>";
	
}}

$event = <<<EUD
	</a>
	<div class="media-body">
	<h2 class="media-heading">$headline<span>$play</span></h2>
	</div>
	<div class="caption">
	<form action='#'method='POST'>
	<input type="hidden" name="ret_id" value="$id">
	<input type="submit" class="btn btn-default" name="ret" value='Ret'></a>
	<input type='submit' class="btn btn-default" name="slet_evny" value='Slet' />
	</form></div></div>
EUD;

echo $event;

}}

?><br></div>
<?php include("include/footer.php"); ?>