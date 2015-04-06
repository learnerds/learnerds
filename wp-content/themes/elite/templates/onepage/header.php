<?php
	global $md_theme_options;
	$theme_location = 'onepage-menu';

	global $demo;
	if($demo){
		$theme_location = 'onepage-menu-'.$demo[1];
	}

?>
<header id="header" class="wide transparent">
	<div class="header-content" id="header-content">		
		<div class="container">
			<div id="logo">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
					<?php 
						if(isset($md_theme_options['op-logo']) && isset($md_theme_options['op-logo']['url']) && $md_theme_options['op-logo']['url'] != ''){
							echo '<img src="'.$md_theme_options['op-logo']['url'].'" alt="" class="logo-start" />';
						}
						else{
							echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder/logo-white.png" alt="" class="logo-start" />';
						}
					?>

					<?php 
						if(isset($md_theme_options['op-logo-scroll']) && isset($md_theme_options['op-logo-scroll']['url']) && $md_theme_options['op-logo-scroll']['url'] != ''){
							echo '<img src="'.$md_theme_options['op-logo-scroll']['url'].'" alt="" class="logo-scroll" />';
						}
						else{
							echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder/logo.png" alt="" class="logo-scroll" />';
						}
					?>					
				</a>
			</div>

			<nav id="header-menu">
				<?php 
					$args = array( 
						'theme_location' => $theme_location, 
						'depth'          => 3, 
						'container'      => false,
						'walker'		 => new md_onepagemenu_walker
					);

					if(has_nav_menu($theme_location)){
						wp_nav_menu($args); 
					} else {
						echo '<span class="menu-fallback">No menu is found. <a href="'.admin_url('nav-menus.php').'">Click here to assign.</a></span>';
					}							
				?>
			</nav>

			<a href="#" id="menu-mobile-trigger"></a>
		</div>
	</div>

	<div id="header-mobile">
		<div class="container">		
			<nav id="header-menu-mobile">
				<?php 
					$args = array( 
						'theme_location' => $theme_location, 
						'depth'          => 3, 
						'container'      => false,
						'walker'		 => new md_onepagemenu_walker
					);

					if(has_nav_menu($theme_location)){
						wp_nav_menu($args); 
					}							
				?>
			</nav>
		</div>
	</div>
</header>