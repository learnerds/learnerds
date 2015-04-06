<?php
/*
Template Name: OnePage Layout
*/
?>

<?php get_header(); ?>

<div id="onepage-content">
	<?php
	// Get posts order
	query_posts( md_one_page_loop() );
	while(have_posts() ) : the_post();

		echo '<section id="'.$post->post_name.'">';
		echo the_content();
		echo '</section>';
	endwhile;
	wp_reset_query();
	?>
</div>

<?php get_footer(); ?>