<?php 
global $md_theme_options;

$show_footer = true;
if(isset($post)){
	$post_custom = get_post_custom($post->ID);

	if(isset($post_custom['show-footer']) && !filter_var($post_custom['show-footer'][0], FILTER_VALIDATE_BOOLEAN)){
		$show_footer = false; 
	}
}
?>

<?php if($md_theme_options['footer-enabled'] && $show_footer) : ?>
<footer>
	<div class="container">
		<div class="row">

			<?php

			$footerCols = (!empty($md_theme_options['footer_cols'])) ? $md_theme_options['footer_cols'] : 4;

			if($footerCols == '2'){
				$footerColClass = '6';
			} else if($footerCols == '3'){
				$footerColClass = '4';
			} else {
				$footerColClass = '3';
			}

			?>

			<div class="col-md-<?php echo $footerColClass; ?> column">
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-area-1')) : else : ?>
					<div class="widget">
						<h3 class="widget-title">Footer Area 1</h3>
						<p class="fallback"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-md-<?php echo $footerColClass; ?> column">
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-area-2')) : else : ?>
					<div class="widget">
						<h3 class="widget-title">Footer Area 2</h3>
						<p class="fallback"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
					</div>
				<?php endif; ?>
			</div>

			<?php if ($footerCols == 3 || $footerCols == 4) { ?>

			<div class="col-md-<?php echo $footerColClass; ?> column">
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-area-3')) : else : ?>
					<div class="widget">
						<h3 class="widget-title">Footer Area 3</h3>
						<p class="fallback"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
					</div>
				<?php endif; ?>
			</div>

			<?php } ?>

			<?php if ($footerCols == 4) { ?>

			<div class="col-md-<?php echo $footerColClass; ?> column">
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-area-4')) : else : ?>
					<div class="widget">
						<h3 class="widget-title">Footer Area 4</h3>
						<p class="fallback"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
					</div>
				<?php endif; ?>
			</div>

			<?php } ?>
		</div>
	</div>	
</footer>
<?php endif; ?>


<?php if($md_theme_options['copyright-enabled'] && $show_footer) : ?>
<div id="copyright">
	<div class="container">
		<div id="copyright-text"><?php echo $md_theme_options['copyright-text']; ?></div>
		<?php
			if(has_nav_menu("copyright-menu")){
				$args = array( 
					'theme_location' => 'copyright-menu', 
					'depth'          => 1, 
					'container'      => false,
					'menu_id'	 	 => 'copyright-menu',
				);
				wp_nav_menu($args); 
			}
		?>
	</div>
</div>
<?php endif; ?>

</div>
<!-- end page container -->

</div>
<!-- end wrap -->


<?php 
	if($md_theme_options['back-top'])
	echo '<a href="#" id="md-back-top"></a>';

	if(isset($md_theme_options['tracking-code']) && $md_theme_options['tracking-code'] != '')
	echo '<script type="text/javascript">'.$md_theme_options['tracking-code'].'</script>';

	if(isset($md_theme_options['custom-js']) && $md_theme_options['custom-js'] != '')
	echo '<script type="text/javascript">'.$md_theme_options['custom-js'].'</script>';

	echo '<script src="wp-content/themes/elite/assets/js/mauro.js"></script>';
	echo '<script src="wp-content/themes/elite/assets/js/jquery.cookie.js"></script>';
	echo '<script src="wp-content/themes/elite/assets/js/jquery.session.js"></script>';
?>



<?php wp_footer(); ?>

</body>
</html>
