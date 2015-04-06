<?php get_header(); ?>

	<div class="page-content">

	<?php
	global $post;
	$builder_page = (substr(get_post_field('post_content', $post->ID), 0, 3) === '[vc') ? true : false;
	?>
	
	<?php if(!$builder_page){ echo '<div class="container padding-small">'; } ?>
	
	<?php get_template_part( '/templates/page/content-page-body' ); ?>
	
	<?php if(!$builder_page){ echo '</div>'; } ?>

	</div>

<?php get_footer(); ?>
