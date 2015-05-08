<?php
extract($_POST);
if($_POST['act'] == 'add-com'):
	$name = htmlentities($name);
    $email = htmlentities($email);
    $comment = htmlentities($comment);

    // Connect to the database
	include('../config/config.php'); 
	
	// Get gravatar Image 
	// https://fr.gravatar.com/site/implement/images/php/
	$default = "mm";
	$size = 35;

    mysql_query("INSERT INTO comments (name, email, comment, id_post)VALUES( '$name', '$email', '$comment', '$id_post')");
    if(!mysql_errno()){
?>

    <div class="cmt-cnt">
<img src="images/profile-img.png" width="160" height="160" alt="Profile Img">
		<div class="thecom">
	        <h5><?php echo $name; ?></h5><span  class="com-dt"><?php echo date('d-m-Y H:i'); ?></span>
	        <br/>
	       	<p><?php echo $comment; ?></p>
	    </div>
	</div><!-- end "cmt-cnt" -->

	<?php } ?>
<?php endif; ?>