<?php global $md_theme_options; ?>
<div class="md-blog <?php echo $md_theme_options['blog-style'];?>">
	<?php

		if($md_theme_options['blog-style'] == 'masonry')
			$md_theme_options['blog-images-size'] = 'md-two-thirds';

		while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
			$format = (get_post_format(get_the_id())) ? get_post_format(get_the_id()) : 'standard';

			$is_sticky = (is_sticky()) ? ' sticky' : '';
			include(locate_template('templates/blog/loop/'.$md_theme_options['blog-style'].'.php'));
		endwhile;
		
	?>
</div>
<?php md_pagination();  ?>
