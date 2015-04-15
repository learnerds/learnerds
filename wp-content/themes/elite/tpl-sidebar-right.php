<?php
/*
Template Name: Page Sidebar Right
*/
?>
<?php get_header(); ?>

	<div class="page-content padding-small page-sidebar" id="page-container">
		<div class="container">
			<div class="row">
				<div class="md-column col-main col-md-9 col-md-left col-sm-left content-full">
					<?php get_template_part( '/templates/page/content-page-body' ); ?>
				</div>
				<div class="md-column col-side col-md-3 col-md-right col-sm-right">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>