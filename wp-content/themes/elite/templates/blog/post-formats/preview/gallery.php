<?php
	global $md_theme_options;
	$images = get_post_meta($post->ID, 'post-gallery', true);
	$images = explode(',', $images);
	$effect = get_post_meta($post->ID, 'post-gallery-animation', true);
	$navigation = filter_var(get_post_meta($post->ID, 'post-gallery-navigation', true), FILTER_VALIDATE_BOOLEAN);
	$pagination = filter_var(get_post_meta($post->ID, 'post-gallery-pagination', true), FILTER_VALIDATE_BOOLEAN);
?>
<div class="post-slider">
	<?php
		$output = '<div class="flexslider" data-effect="'.$effect.'" data-navigation="'.$navigation.'" data-pagination="'.$pagination.'"><ul class="slides">';
			foreach($images as $image):
				$image_big  = wp_get_attachment_image_src( $image, $md_theme_options['blog-images-size']);	
				$alt 	= ( get_post_meta($image, '_wp_attachment_image_alt', true) ) ? get_post_meta($image, '_wp_attachment_image_alt', true) : '';
				$output .= '<li><img src="'.$image_big[0].'" alt="'.esc_attr($alt).'" /></li>';
			endforeach;
		$output .= '</ul></div>';
		echo $output;
	?>
</div>

<div class="post-body">
	
	<?php get_template_part('/templates/blog/meta-side'); ?>

	<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title()) ?>"><?php the_title(); ?></a></h2>

	<?php get_template_part('/templates/blog/meta-header'); ?>

	<?php global $post; ?>
	<?php if(empty( $post->post_excerpt )) { ?>
		
		<div class="post-content"><?php the_content('<div class="read-more">'.__("READ MORE", MD_THEME_NAME).'<i class="typcn-arrow-right"></i></div>'); ?></div>

	<?php } else { ?>
		
		<div class="post-content"><?php the_excerpt(); ?></div>
		<?php get_template_part('/templates/blog/read-more'); ?>
	
	<?php } ?>
</div>