<?php
	global $md_theme_options; 
	$audio_mp3 = get_post_meta($post->ID, 'post-audio-mp3', true); 
	$audio_mp3 = wp_get_attachment_url( $audio_mp3 );
?>

<?php md_thumbnail($md_theme_options['blog-images-size'], $post->ID, false); ?>
<div class="post-audio"> <?php echo do_shortcode('[md_audio_hosted audio_mp3="'.$audio_mp3.'"]' ); ?></div>

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