<?php
define('MD_SHORTCODES_URI', get_template_directory_uri().'/framework/md-page-builder/lib/md-shortcodes/');
define('MD_SHORTCODES_DIR', get_template_directory().'/framework/md-page-builder/lib/md-shortcodes/');


/*-----------------------------------------------------------------------------------*/
/*	Translation
/*-----------------------------------------------------------------------------------*/
load_plugin_textdomain( 'textdomain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );


/*-----------------------------------------------------------------------------------*/
/*	Shortcodes
/*-----------------------------------------------------------------------------------*/
require_once( MD_SHORTCODES_DIR .'/tinymce/tinymce-class.php' );


/*-----------------------------------------------------------------------------------*/
/*	Register / Enqueue CSS
/*-----------------------------------------------------------------------------------*/
function md_shortcodes_backend() {

}
add_action('admin_init', 'md_shortcodes_backend');


/*-----------------------------------------------------------------------------------*/
/*	Register / Enqueue JS
/*-----------------------------------------------------------------------------------*/
function md_shortcodes_frontend() {	
    # ISOTOPE #
	wp_deregister_script('isotope');

	# MEDIAELEMENT #
	wp_deregister_script('mediaelement');

    # GOOGLE MAPS #
    $protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_script('google-maps', $protocol.'://maps.google.com/maps/api/js?sensor=false', NULL, NULL, true);

	# PLUGINS #
    wp_enqueue_script('md-framework-plugins', MD_SHORTCODES_URI . 'assets/js/libs/plugins.js', array('jquery'), '1.0', true );

	# SHORTCODES #
	wp_enqueue_script('md-shortcodes', MD_SHORTCODES_URI . "assets/js/md-shortcodes.js", array('jquery'), '1.0', true);		 
}
add_action('wp_enqueue_scripts', 'md_shortcodes_frontend');
?>