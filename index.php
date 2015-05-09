
<?php 

	include("include/header.php"); 

if(isset($_GET["site"])){

$site = $_GET["site"];

if($site == "frontpage"){
	include("pages/frontpage.php"); 	
}elseif($site == "frontpage1"){
	include("pages/frontpage1.php"); 	
}elseif($site == "case"){
	include("pages/case.php");
}elseif($site == "blog"){
	include("pages/blog.php"); 
}elseif($site == "blogpost"){
	include("pages/blogpost.php"); 		
}elseif($site == "aboutus"){
	include("pages/omos.php"); 
}elseif($site == "kontakt"){
	include("pages/kontakt.php"); 
}else{
	include("pages/404.php"); 
}    

}else{
	include("pages/frontpage.php"); 
}	
	include("include/footer.php"); 
	
?>	