<?php 
// SETTINGS
$use_absolute_path	= false;									// specify if you are using an absolute path or not (false = relative to this document)
																// if using an absolute path it must be from the server document root
																// e.g. $_SERVER['DOCUMENT_ROOT'].'/path/'
$img_path_init 		= '../cms_image/case/originals/';		// folder to upload initial image into
$img_path_temp 		= '../cms_image/case/temp/';			// folder to hold temporary image into
$img_path_crops		= '../cms_image/case/crops/';			// folder to upload cropped images into
$img_height_main	= 200;										// main image height (use largest size required)
$img_width_main		= 200;										// main image width
$img_type			= 'jpg';									// convert all uploads to JPG

$minImageWidth		= 200;										// minimum width of uploaded image
$minImageHeight		= 200;										// minimum height of uploaded image

$minWidth			= 200;										// set minimum image crop width
$minHeight			= 200;										// set minimum image crop height
$cropAspectRatio	= 25/14;										// set aspect ratio for cropper: 1 = square (width/height = aspect ratio)
$setSelect 			= '[ 50, 50, 150, 175 ]'; 					// initial crop area [ start_x, start_y, end_x, end_y ]

$cropperWidth		= 851;										// width of temporary image used as the cropper
$cropperHeight		= 315;										// height of temporary image used as the cropper

// image name prefixes
$prefix_full		= 'full_';									// full size cropped image name prefix
$prefix_main		= '';										// main cropped image name prefix


// Required fields
$required			= array('field1');							// ID/name of required fields to be submitted


// set dimensions + name prefix of any extra thumbnails required:
// use: 'prefix' => array('width'=>100,'height'=>150)
// DO NOT INCLUDE THE MAIN IMAGE SIZE SET ABOVE
$thumbs = array(
	$generator => array('width'=>134,'height'=>167),
	$generator => array('width'=>400,'height'=>400)
);

// INITIALISE

$docURI			= $_SERVER['REQUEST_URI'];						// gets the base location of this file
$docPage		= basename($_SERVER['PHP_SELF']);				// gets the page name of this file
$docRoot		= str_replace($docPage,'',$docURI);				// get the exact path to root for this page

if(!session_id()) { session_start(); }							// start session - used to store images
if(!isset($_SESSION['cropper'])) {
$_SESSION['cropper'] = array();								// create cropper session to hold imagery if not already set
}
$_SESSION['cropper']['use_absolute_path']= $use_absolute_path;
$_SESSION['cropper']['doc_root'] 		= $docRoot;
$_SESSION['cropper']['path_orig'] 		= $img_path_init;		// pass settings to be available to AJAX called pages
$_SESSION['cropper']['path_temp'] 		= $img_path_temp;
$_SESSION['cropper']['path_crops'] 		= $img_path_crops;
$_SESSION['cropper']['img_height'] 		= $img_height_main;
$_SESSION['cropper']['img_width'] 		= $img_width_main;
$_SESSION['cropper']['thumbs'] 			= $thumbs;
$_SESSION['cropper']['img_prefix_full']	= $prefix_full;
$_SESSION['cropper']['img_prefix_main']	= $prefix_main;
$_SESSION['cropper']['required']		= $required;

$error = false;													// set default error state
$img = false;													// set default value for image

// INITIAL IMAGE UPLOAD - executed when an image is posted
if(isset($_FILES['image'])) { 									// check if file field 'image' has been posted
require_once($_SERVER['DOCUMENT_ROOT'].$docRoot.'inc/_img.php');	// include image upload and manipulation class
$_image = new _image;										// instantiate img object
$_image->uploadTo = $img_path_init;							// upload to $img_path_init set above
$image = $_image->upload($_FILES['image']);					// perform upload
if($image) {												// if uploaded OK then resize to fit main image area
$fullWidth = $_image->get_image_width($image);			// get width of uploaded image
$fullHeight = $_image->get_image_height($image);		// get height of uploaded image
if(($fullWidth>=$minImageWidth)
&&($fullHeight>=$minImageHeight)) {					// check uploaded image is big enough
if(isset($_SESSION['cropper']['image'])) {			// check if image session exists (holding previously uploaded image)
@unlink($_SESSION['cropper']['image']);			// delete old original image
@unlink($_SESSION['cropper']['image_temp']);	// delete old temporary image
unset($_SESSION['cropper']['image']);			// clear image session
unset($_SESSION['cropper']['image_temp']);		// clear temp image session
}
$_SESSION['cropper']['image'] = $image;				// add new image to session
// RESIZE to 
$_image->newHeight 		= $cropperHeight;			// max height
$_image->newWidth 		= $cropperWidth;			// max width
$_image->newPath		= $img_path_temp;			// path for temporary image
$_image->aspectRatio 	= 'true';					// maintain aspect ratio for original image
$_image->padToFit		= 'false';					// do not pad the image with coloured space to fit height/width
$_image->newImgType 	= $img_type; 				// force output to type specified above
$i = $_image->resize();								// resize image
if(file_exists($i)) { 								// image resized OK
$_SESSION['cropper']['image_temp'] = $i;		// save new temp image to session
$img = $i;
list($thumbWidth, $thumbHeight) = getimagesize($i);}} else {
$error = 'The photo needs to be at least '.$minImageWidth.' pixels wide by '.$minImageHeight.' high - please upload a higher resolution image';
}}} ?>