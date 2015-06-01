<?php
/*
Template Name: Latest Term Card
*/
?>
<?php 
$termcards = get_posts('category_name=termcard&numberposts=1'); 
if ($termcards) :
	$attachments = get_children('post_type=attachment&post_mime_type=application/pdf&post_parent='.$termcards[0]->ID); 
	if($attachments) :
		wp_redirect(wp_get_attachment_url(array_shift($attachments)->ID));
		exit;
	endif;
endif; 
?>