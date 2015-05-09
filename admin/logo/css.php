
<link type="text/css" rel="stylesheet" href="<?php echo $docRoot; ?>inc/css" />
<style type="text/css">
/* Image paths set here to allow for shifting root directories */
#tbl_cropper_wrap #preview		{	background:url(<?php echo $docRoot; ?>assets/images/profile.png) left top no-repeat #EEE;}
#div_loader						{	background:url(<?php echo $docRoot; ?>assets/images/black80.png) left top repeat;}
.jcrop-vline, .jcrop-hline		{	background: white url(<?php echo $docRoot; ?>inc/css/Jcrop.gif) top left repeat;}
</style>
<script language="javascript" type="text/javascript">
// pass the minimum height and width values to the document
document.minWidth 	= <?php echo $minWidth; ?>;
document.minHeight 	= <?php echo $minHeight; ?>;
document.setSelect 	= <?php echo $setSelect; ?>;
document.aspectRatio= <?php echo $cropAspectRatio; ?>;
document.docRoot 	= '<?php echo $docRoot; ?>';
function checkRequired() {
	reqFields = '#<?php echo trim(implode(',#',$required),',# '); ?>';
	if(reqFields!='') {
		req = jQuery(reqFields);
		retVal = true;
		req.each(function(i,e){
			if(jQuery.trim(jQuery(e).val()).length<1) {
				erID = jQuery(e).attr("id")+'_error';
				if(jQuery('#'+erID).length>0) { jQuery(jQuery('#'+erID)).fadeIn(); }
				retVal = false;
			}
		});
		return retVal;
	} else { return false; }
}
</script>
<script language="javascript" type="text/javascript" src="<?php echo $docRoot; ?>inc/js"></script>


