<?php global $md_theme_options; ?>
<?php global $header_navigation; ?>
<?php
	$device = (md_detect_mobile()) ? 'mobile' : 'desktop';
	$css3_animations = ($device == 'desktop' && !detect_ie_9()) ? 'enabled' : 'disabled';

	$body_style = false;
	$body_bgcolor = false;
	$body_bgimage = false;
	$show_header = true;
	$header_custom = false;
	$site_layout = $md_theme_options['site-layout'];
	$site_border = $md_theme_options['header-border'];
	$header_width = $md_theme_options['header-width'];
	$header_attachment = $md_theme_options['header-attachment'];
	$header_scroll_transparent = $md_theme_options['header-scroll-transparent'];
	$onepage = false;
	$onepage_data = 'false';
	$onepage_class = false;



	if(isset($post)){

		if(is_home()):
			
			if(get_option('page_for_posts')){
				$page_id = get_option('page_for_posts');
			} else {}

		elseif (class_exists('Woocommerce') && is_shop()):

			$page_id = woocommerce_get_page_id( 'shop' );

		else:
			$page_id = get_the_id();

		endif;

		if( get_post_meta( $page_id, '_wp_page_template', true ) == 'tpl-onepage.php' ){
		
			$onepage = true;
			$onepage_data = 'true';
			$onepage_class = 'onepage';
		
		}

		$post_custom = get_post_custom($page_id);

		if(isset($post_custom['force-boxed']) && filter_var($post_custom['force-boxed'][0], FILTER_VALIDATE_BOOLEAN)){

			$site_layout = 'boxed';

			if(isset($post_custom['page-bgcolor']))
				$body_bgcolor = 'background-color:'.$post_custom['page-bgcolor'][0].';';

			if(isset($post_custom['page-bgimage']) && $post_custom['page-bgimage'][0] != '' ){
				$bg_image = wp_get_attachment_image_src( $post_custom['page-bgimage'][0], 'full');
				$body_bgimage = 'background-image:url('.$bg_image[0].');';
			}
		}

		if($body_bgcolor || $body_bgimage)
		$body_style = ' style="'.$body_bgcolor.$body_bgimage.'" ';

		if(isset($post_custom['show-header']) && !filter_var($post_custom['show-header'][0], FILTER_VALIDATE_BOOLEAN))
			$show_header = false; 		

		if(isset($post_custom['show-footer']) && !filter_var($post_custom['show-footer'][0], FILTER_VALIDATE_BOOLEAN))
			$show_footer = false;

		if(isset($post_custom['force-header-style']) && $post_custom['force-header-style'][0] != 'false')
			$header_custom = $post_custom['force-header-style'][0];
	}

?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Title -->
<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

<!-- Favicon -->
<?php if(!empty($md_theme_options['favicon']['url'])) { ?>
<link rel="shortcut icon" href="<?php echo $md_theme_options['favicon']['url'] ?>" />
<?php } else { ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/assets/img/placeholder/favicon.png' ?>" />
<?php } ?>

<!-- Apple Touch Icons -->    
<?php if(!empty($md_theme_options['apple-icon-57']['url'])) { ?>
<link rel="apple-touch-icon" href="<?php echo $md_theme_options['apple-icon-57']['url']; ?>" />
<?php } ?>
<?php if(!empty($md_theme_options['apple-icon-72']['url'])) { ?>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $md_theme_options['apple-icon-72']['url']; ?>" />
<?php } ?>
<?php if(!empty($md_theme_options['apple-icon-114']['url'])) { ?>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $md_theme_options['apple-icon-114']['url']; ?>" />
<?php } ?>
<?php if(!empty($md_theme_options['apple-icon-144']['url'])) { ?>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $md_theme_options['apple-icon-144']['url']; ?>" />
<?php } ?>

<!-- RSS & Pingbacks -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 

<!-- Font Default -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
	 
</head>

<body <?php body_class($onepage_class);?><?php echo $body_style;?> data-device="<?php echo $device; ?>" data-css3-animations="<?php echo $css3_animations;?>" data-layout="<?php echo $site_layout; ?>" data-border="<?php echo $site_border; ?>" data-header-width="<?php echo $header_width; ?>" data-header-fixed="<?php echo $header_attachment; ?>" data-header-scroll-transparent="<?php echo $header_scroll_transparent; ?>" data-onepage="<?php echo $onepage_data; ?>">

<?php get_template_part( '/templates/page/loading' ); ?>

<div id="wrap">

<?php

if($onepage) { 

	get_template_part( '/templates/onepage/header' );

} else { 

	if($show_header){ 
		if($md_theme_options['header-style'] == 'style-1' && !$header_custom){
			get_template_part( '/templates/header/default' );
		} else {
			get_template_part( '/templates/header/alternative' );
		}
	} 
}

?>

<div id="page-container" class="<?php echo $header_navigation; ?>">
	<?php
	if(!$onepage) get_template_part( '/templates/page/page-header' );
	?>