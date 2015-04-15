<?php
$demo = false;

if(MD_DEBUG):
	if (isset($_REQUEST['color'])){
		$md_theme_options['accent-color'] = '#'.$_REQUEST['color'];
	}

	if (isset($_REQUEST['sidebar'])){
		$md_theme_options['woocommerce-sidebar'] = $_REQUEST['sidebar'];
		$md_theme_options['blog-sidebar'] = $_REQUEST['sidebar'];
		$md_theme_options['post-sidebar'] = $_REQUEST['sidebar'];
	}
	
	if (isset($_REQUEST['cols'])){
		$md_theme_options['woocommerce-products-cols'] = $_REQUEST['cols'];
		$md_theme_options['blog-masonry-cols'] = $_REQUEST['cols'];
	}

	if (isset($_REQUEST['style'])){
		$md_theme_options['blog-style'] = $_REQUEST['style'];
	}

	if (isset($_REQUEST['blog-images'])){
		$md_theme_options['blog-images-size'] = $_REQUEST['blog-images'];
	}

	if (isset($_REQUEST['header-style'])){
		setcookie("header-style", 'style-'.$_REQUEST['header-style'], time()+3600);
		$md_theme_options['header-style'] = 'style-'.$_REQUEST['header-style'];
	}

	else if(isset($_COOKIE['header-style'])){
		$md_theme_options['header-style'] = $_COOKIE['header-style'];
	}

	if (isset($_REQUEST['demo'])){
		$demo = $_REQUEST['demo'];
		$demo = explode('-', $_REQUEST['demo']);
	}

endif;
?>