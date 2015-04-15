<?php

if(!$post) return;

global $md_theme_options;

if(is_home()):
	
	if(get_option('page_for_posts')){
		$page_id = get_option('page_for_posts');
	} else {}

elseif (class_exists('Woocommerce') && is_shop()):

	$page_id = woocommerce_get_page_id( 'shop' );

else:

	$page_id = get_the_id();

endif;

$loading = $md_theme_options['loading-style'];
$show_loading = ($loading == 'false') ? false : true;

$post_custom = get_post_custom($page_id);

if(isset($post_custom['page-loading']) && $post_custom['page-loading'][0] == 'false'){
	$show_loading = false;
}
else if(isset($post_custom['page-loading']) && $post_custom['page-loading'][0] != 'default'){
	$loading = $post_custom['page-loading'][0];
	$show_loading = ($loading == 'false') ? false : true;
}

if($show_loading){
?>
<div id="loader-site" class="<?php echo $loading; ?>">
	<span class="el-1"></span>
	<span class="el-2"></span>
</div>
<?php } ?>