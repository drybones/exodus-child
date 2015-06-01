<?php
/*
Template Name: Latest Newsletter
*/
?>
<?php 
$newsletter = get_posts('category_name=newsletter&numberposts=1'); 
if ($newsletter) :
	$attachments = get_children('post_type=attachment&post_mime_type=application/pdf&post_parent='.$newsletter[0]->ID); 
	if($attachments) :
		wp_redirect(wp_get_attachment_url(array_shift($attachments)->ID));
		exit;
	endif;
endif; 
?>