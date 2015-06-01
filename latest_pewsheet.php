<?php
/*
Template Name: Latest Pewsheet
*/
?>
<?php 
$pewsheets = get_posts('category_name=pewsheet&numberposts=1'); 
if ($pewsheets) :
	$attachments = get_children('post_type=attachment&post_mime_type=application/pdf&post_parent='.$pewsheets[0]->ID); 
	if($attachments) :
		wp_redirect(wp_get_attachment_url(array_shift($attachments)->ID));
		exit;
	endif;
endif; 
?>