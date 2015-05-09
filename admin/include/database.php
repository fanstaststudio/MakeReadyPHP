<?php 


//Updatere SEO
if(!empty($_POST['metatags'])){
$id_seo = $_POST['id_seo'];
$metatags = $_POST['metatags'];
$description = $_POST['description'];

mysqli_query($mysql,"UPDATE seo SET metatags ='$metatags', description ='$description' WHERE id_seo='1'");										
$update="<div class='alert alert-success'><a href='seo.php' class='alert-link'>Du har fortaget en ændring!</a></div>"; };

//Opretter et Erhverv
if(!empty($_POST['gem_erhverv'])){
mysqli_query($mysql,"INSERT INTO event_news VALUES ('', '3','$headline','$content', '$image', '$image_1', '$image_2', '$image_3', '$image_4','$link', '$inuse')")or die ($mysql->error);;
$update="<div class='alert alert-success'><a href='erhverv.php' class='alert-link'>Du har fortaget en ændring!</a></div>";
};

//Opretter et produkt
if(!empty($_POST['gem_produkt'])){
	mysqli_query($mysql,"INSERT INTO event_news VALUES ('', '4','$headline','$content', '$image', '$image_1', '$image_2', '$image_3', '$image_4','$link', '$inuse')")or die ($mysql->error);;
$update="<div class='alert alert-success'><a href='produkt.php' class='alert-link'>Du har fortaget en ændring!</a></div>";
};

//Ret Event eller nyhed
if(!empty($_POST['gem_ret'])){
mysqli_query($mysql,"UPDATE event_news SET type = '$type', headline = '$headline', content = '$content', image = '$image', image_1 = '$image_1', image_2 = '$image_2', image_3 = '$image_3', image_4 = '$image_4', link = '$link', inuse = '$inuse' WHERE id = '$id'");					
$update="<div class='alert alert-success'><a href='pool.php' class='alert-link'>Du har fortaget en ændring!</a></div>";
};


// Advarsel omkring Sletning
if(!empty($_POST['slet_evny'])){
$ret_id = $_POST['ret_id'];
$update="<div class='alert alert-danger'>Er Du sikker på at du vil slette Indholdet?
<form action='#'method='POST'>
<input type='hidden' name='ret_id' value='$ret_id'>
<input type='submit' class='btn btn-default' name='slet_evny_sikker' class='btn btn-default' value='JA' />
<input type='submit' class='btn btn-default' name='nej' class='btn btn-default' value='NEJ' />
</form>
</div>";
};

//Sletter nyhed eller Event
if(!empty($_POST['slet_evny_sikker'])){
$ret_id = $_POST['ret_id'];
mysqli_query($mysql,"DELETE FROM event_news WHERE id = '$ret_id'")or die ($mysql->error);
$update="<div class='alert alert-danger'>Du har nu slettet Indholdet!.</div></div>";
};

//IMAGES
// Advarsel omkring Sletning
if(!empty($_POST['billede_slet'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$update="<div class='alert alert-danger'>Er Du sikker på at du vil slette Indholdet?
<form action='blog_images.php'method='POST'>
<input type='hidden' name='id' value='$pr_id'>
<input type='hidden' name='image' value='$full_web'>
<input type='submit' class='btn btn-default' name='billede_slet_sikker' class='btn btn-default' value='JA' />
<input type='submit' class='btn btn-default' name='nej' class='btn btn-default' value='NEJ' />
</form>
</div>";
};

// Sletter billeder
if(!empty($_POST['billede_slet_sikker'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$adresse_crops = "cms_image/blog/crops/";
$adresse_originals = "cms_image/blog/originals/";

$image_full = $adresse_crops . "full_" . $full_web;
$image_small = $adresse_crops . $full_web;
$image_orginal = $adresse_originals . $full_web;

unlink("$image_full");
unlink("$image_orginal");
unlink("$image_small");

mysqli_query($mysql,"DELETE FROM images WHERE id = '$pr_id'");
$update="<div class='alert alert-danger'>Du har nu slettet Indholdet!.</div>
</div>";
};

//IMAGES
// Advarsel omkring Sletning
if(!empty($_POST['cover_slet'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$update="<div class='alert alert-danger'>Er Du sikker på at du vil slette Indholdet?
<form action='cover.php'method='POST'>
<input type='hidden' name='id' value='$pr_id'>
<input type='hidden' name='image' value='$full_web'>
<input type='submit' class='btn btn-default' name='cover_slet_sikker' class='btn btn-default' value='JA' />
<input type='submit' class='btn btn-default' name='nej' class='btn btn-default' value='NEJ' />
</form>
</div>";
};

// Sletter billeder
if(!empty($_POST['cover_slet_sikker'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$adresse_crops = "cms_image/covers/crops/";
$adresse_originals = "cms_image/covers/originals/";

$image_full = $adresse_crops . "full_" . $full_web;
$image_small = $adresse_crops . $full_web;
$image_orginal = $adresse_originals . $full_web;

unlink("$image_full");
unlink("$image_orginal");
unlink("$image_small");

mysqli_query($mysql,"DELETE FROM cover WHERE id = '$pr_id'");
$update="<div class='alert alert-danger'>Du har nu slettet Indholdet!.</div>
</div>";
};


// Advarsel omkring Sletning
if(!empty($_POST['content_slet'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$update="<div class='alert alert-danger'>Er Du sikker på at du vil slette Indholdet?
<form action='case.php'method='POST'>
<input type='hidden' name='id' value='$pr_id'>
<input type='hidden' name='image' value='$full_web'>
<input type='submit' class='btn btn-default' name='content_slet_sikker' class='btn btn-default' value='JA' />
<input type='submit' class='btn btn-default' name='nej' class='btn btn-default' value='NEJ' />
</form>
</div>";
};

// Sletter billeder
if(!empty($_POST['content_slet_sikker'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$adresse_crops = "cms_image/case/crops/";
$adresse_originals = "cms_image/case/originals/";

$image_full = $adresse_crops . "full_" . $full_web;
$image_small = $adresse_crops . $full_web;
$image_orginal = $adresse_originals . $full_web;

unlink("$image_full");
unlink("$image_orginal");
unlink("$image_small");

mysqli_query($mysql,"DELETE FROM content WHERE id = '$pr_id'");
$update="<div class='alert alert-danger'>Du har nu slettet Indholdet!.</div>
</div>";
};


// Advarsel omkring Sletning
if(!empty($_POST['logo_slet'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$update="<div class='alert alert-danger'>Er Du sikker på at du vil slette Indholdet?
<form action='logo.php' method='POST'>
<input type='hidden' name='id' value='$pr_id'>
<input type='hidden' name='image' value='$full_web'>
<input type='submit' class='btn btn-default' name='logo_slet_sikker' class='btn btn-default' value='JA' />
<input type='submit' class='btn btn-default' name='nej' class='btn btn-default' value='NEJ' />
</form>
</div>";
};

// Sletter billeder
if(!empty($_POST['logo_slet_sikker'])){
$pr_id = $_POST['id'];
$full_web = $_POST['image'];

$adresse_crops = "cms_image/logo/crops/";
$adresse_originals = "cms_image/logo/originals/";

$image_full = $adresse_crops . "full_" . $full_web;
$image_small = $adresse_crops . $full_web;
$image_orginal = $adresse_originals . $full_web;

unlink("$image_full");
unlink("$image_orginal");
unlink("$image_small");

mysqli_query($mysql,"DELETE FROM logo WHERE id = '$pr_id'");
$update="<div class='alert alert-danger'>Du har nu slettet Indholdet!.</div>
</div>";
};

//Opdatere kort
if(!empty($_POST['kontakt'])){
$id = $_POST['id'];
$footer_headline = $_POST['footer_headline'];
$footer_content = $_POST['footer_content'];
$left_headline = $_POST['left_headline'];
$left_content = $_POST['left_content'];
$right_headline = $_POST['right_headline'];
$right_content = $_POST['right_content'];
$right_name = $_POST['right_name'];
$adresse = $_POST['adresse'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($mysql,"UPDATE kontakt SET 
	footer_headline = '$footer_headline', 
	footer_content = '$footer_content', 
	left_headline = '$left_headline', 
	left_content = '$left_content', 
	right_headline = '$right_headline', 
	right_content = '$right_content', 
	right_name = '$right_name', 
	adresse = '$adresse', 
	email = '$email', 
	phone = '$phone' 
	WHERE id = '1'");					
$update="<div class='alert alert-success'><a href='pool.php' class='alert-link'>Du har fortaget en ændring!</a></div>";
};






