<br><br>

    <!--- Jumbotron -->
    <div class="container-fluid">
			<div class="jumbotron blog" style="opacity: 0.7; background-image: url(http://static.pexels.com/wp-content/uploads/2015/02/radios-vintage-4624.jpg);">
			<div class="headline_blog">
			<p class="border">Money in the bank!</p>
		  	<h1>We are working on something brilliant! no! Amazing!</h1>
			<p>It will change the world</p>	
		<div class="centered">
<a href="index.php?site=blog"><button type="button" onclick="index.php?site=blog" class="btn btn-primary btn-lg outline"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></button></a>
	
	<div class="facebook"><a href="#">
		<div class="logo"></div>
			<div class="link">Share on facebook</div>
	</div></a>
	
	</div></div>		

	
	</div></div>
    <!--- End Jumbotron -->
 
	<div class="blog_content">
<h1>HEJsdfg fdg fdg fdg fdgfdg dfs!</h1>
<p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne<br>
	 med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper.
	<br><br>
	 Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.</p> 

	<div class="comment">
<h1>Skriv en kommentar:</h1>
       
<?php 
$id_post = "1"; //the post or the page id
?>

<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comment WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        $default = "mm";
        $size = 35;
    ?>
	
    <div class="cmt-cnt">
<img src="images/profile-img.png" width="160" height="160" alt="Profile Img">
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
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
