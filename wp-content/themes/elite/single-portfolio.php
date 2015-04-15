<?php global $md_theme_options; ?>
<?php get_header(); ?>

	<div class="page-content" id="portfolio-container">

	<?php get_template_part( '/templates/page/content-page-body' ); ?>
	
	</div>

	<?php if($md_theme_options['portfolio-share']) { ?>

	<div id="portfolio-share" class="page-section padding-small">
		<div class="container">
    	<?php echo do_shortcode('[md_social_share facebook="yes" twitter="yes" googleplus="yes" pinterest="yes"]'); ?>
    	</div>
    </div>

	<?php } ?>

	<?php if($md_theme_options['portfolio-pagination']) { ?>

	<div id="portfolio-pagination">
			<?php
				$prev_post = get_previous_post();
				if($prev_post) {
					$prev_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($prev_post->ID), 'md-thumb');

					$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
					echo '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="prev"><i class="entypo-left-open-big"></i><span class="thumb" style="background-image:url('.$prev_thumb[0].');"></span><span class="title"><span>'.$prev_post->post_title.'</span></span></a>';
				}
			?>
			
			<?php if(isset($md_theme_options['portfolio-url']) && $md_theme_options['portfolio-url']) { ?>
			<a href="<?php echo $md_theme_options['portfolio-url']; ?>"><i class="entypo-layout"></i></a>
			<?php } ?>

			<?php
				$next_post = get_next_post();
				if($next_post) {
					$next_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID), 'md-thumb');
					
					$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
					echo '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="next"><i class="entypo-right-open-big"></i><span class="thumb" style="background-image:url('.$next_thumb[0].');"></span><span class="title"><span>'.$next_post->post_title.'</span></span></a>';
				}
            ?>
	</div>
	<?php } ?>


<?php get_footer(); ?>