<?php 
$url_id = $_GET["id"];
echo $url_id;

$privat=$mysql->query("SELECT * FROM event_news WHERE id='$url_id' AND inuse='1' and type='4'") or die ($mysql->error); if($privat) { while($row = $privat->fetch_object()) { 

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
			<p>$image;</p>	
		<div class="centered">
<a href="index.php?site=blog"><button type="button" onclick="index.php?site=blog" class="btn btn-primary btn-lg outline"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></button></a>
	
	<div class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=http://madss-macbook-pro-3.local/MakeReadyPHP/index.php?site=blogpost%26id=$id">
		<div class="logo"></div>
			<div class="link">Share on facebook</div>
	</div></a>
	
	</div></div>		
</div></div>
 
	<div class="blog_content">
<h1>$image_1</h1>
<p>$image_2</p> 
EUD;
echo $privat_content; 
 }} }}; ?>






	<div class="comment">
<h1>Skriv en kommentar:</h1>
       
<?php 
$id_post = $id; //the post or the page id
?>

<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comment WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name_c = $affcom['name'];
        $email_c = $affcom['email'];
        $comment_c = $affcom['comment'];
        $date_c = $affcom['date'];

        $default = "mm";
        $size = 35;
    ?>
	
    <div class="cmt-cnt">
<img src="images/profile-img.png" width="160" height="160" alt="Profile Img">
        <div class="thecom">
            <h5><?php echo $name_c; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date_c; ?></span>
            <br/>
            <p>
                <?php echo $comment_c; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php } ?>


    <div class="new-com-bt">
        <span>Skriv en kommentar ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Dit Navn" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Din Mail adresse" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Gem kommentar</div>
		
        <div class="bt-cancel-com">Fortryd</div>
    </div>
    <div class="clear"></div>
</div>


</div>
</div>   
