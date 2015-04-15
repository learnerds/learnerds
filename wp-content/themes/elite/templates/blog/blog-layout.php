<?php

global $md_theme_options;

if($md_theme_options['blog-sidebar'] == "left"):
	echo '<div class="row">';
		echo '<div class="md-column col-main col-md-9 col-md-right col-sm-left">';
			if($md_theme_options['blog-style'] == 'masonry'):
			echo '<div class="row">';
				get_template_part( '/templates/blog/posts-loop' );
			echo '</div>';
			else:
				get_template_part( '/templates/blog/posts-loop' );
			endif;
		echo '</div>';

		echo '<div class="md-column col-side col-md-3 col-md-left col-sm-right">';
			get_sidebar();
		echo '</div>';
	echo '</div>';
	
elseif ($md_theme_options['blog-sidebar'] == "right"):
	echo '<div class="row">';
		echo '<div class="md-column col-main col-md-9 col-md-left col-sm-left content-full">';
			if($md_theme_options['blog-style'] == 'masonry'):
			echo '<div class="row">';
				get_template_part( '/templates/blog/posts-loop' );
			echo '</div>';
			else:
				get_template_part( '/templates/blog/posts-loop' );
			endif;
		echo '</div>';

		echo '<div class="md-column col-side col-md-3 col-md-right col-sm-right">';
			get_sidebar();
		echo '</div>';
	echo '</div>';


else:

	if($md_theme_options['blog-style'] == 'masonry'):
		echo '<div class="row">';
			get_template_part( '/templates/blog/posts-loop' );
		echo '</div>';
	else :
		echo '<div class="row">';
			echo '<div class="md-column col-md-12">';
			get_template_part( '/templates/blog/posts-loop' );
			echo '</div>';
		echo '</div>';
	endif;
	
endif;
?>