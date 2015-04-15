<?php
/*
Template Name: Page Centered Layout
*/
?>
<?php get_header(); ?>

	<?php
	global $post;
	$builder_page = (substr(get_post_field('post_content', $post->ID), 0, 3) === '[vc') ? true : false;
	$padding = ($builder_page) ? '' : ' padding-small';
	?>

	<div class="page-content" id="page-container">
		<div class="container">
			<div class="row">
				<div class="md-column col-md-1 visible-md visible-lg"></div>
				<div class="md-column col-md-10 col-sm-12 content-full<?php echo $padding; ?>">
					<?php get_template_part( '/templates/page/content-page-body' ); ?>
				</div>
				<div class="md-column col-md-1 visible-md visible-lg"></div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>