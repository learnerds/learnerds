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

<div class="post_content">
<?php
	$posts_order = [29];
  $post_id;

  if (isset($_COOKIE['next-question'])) {
	  $post_id = $_COOKIE['next-question'];
  } else {
    $post_id = $posts_order[0];
  }

  #$_SESSION['post_title'] = get_post_field('post_title', $post_id);
  #$_SESSION['next_post_id'] = ;

  echo do_shortcode( get_post_field('post_content', $post_id) );
?>
</div>

<?php get_footer(); ?>
