<?php
/*
Template Name: Latest Term Card
*/
?>
<?php 
$chimes = get_posts('category_name=chimes&numberposts=1'); 
if ($chimes) :
	$attachments = get_children('post_type=attachment&post_mime_type=application/pdf&post_parent='.$chimes[0]->ID); 
	if($attachments) :
		wp_redirect(wp_get_attachment_url(array_shift($attachments)->ID));
		exit;
	endif;
endif; 
?>