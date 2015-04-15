<?php global $md_theme_options; ?>
<header id="header" class="wide">
	<?php if($md_theme_options['header-top']){ ?>
	<?php

	if($md_theme_options['header-search']){ 
	
		get_template_part( '/templates/header/search' );

	}

	?>
	<div id="header-top">
		<div class="container">
			<?php
				if($md_theme_options['header-slogan']){ 
					
					get_template_part( '/templates/header/slogan' );

				}
			?>
			
			<div class="float-right">
			<?php

				if(has_nav_menu("header-top-menu")){
					$args = array( 
						'theme_location' => 'header-top-menu', 
						'depth'          => 1, 
						'container'      => false,
						'menu_id'	 	 => 'header-top-menu',
					);
					wp_nav_menu($args); 
				}

				if (class_exists('Woocommerce')){
					if($md_theme_options['header-woocommerce']){
						get_template_part( '/templates/header/shop-button' );
					}
				}

				if($md_theme_options['header-search']){ 
				
					get_template_part( '/templates/header/search-button' );

				}

				if($md_theme_options['header-social']){ 
				
					get_template_part( '/templates/header/social-links' );

				}

			?>
			</div>
		</div>
	</div>
	<?php } ?>

	<div class="header-content" id="header-content">		
		<div class="container">
			<div id="logo">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
					<?php 
						if(isset($md_theme_options['logo']) && isset($md_theme_options['logo']['url']) && $md_theme_options['logo']['url'] != ''){
							echo '<img src="'.$md_theme_options['logo']['url'].'" alt="" />';
						}
						else{
							echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder/logo.png" alt="" />';
						}
					?>
					
				</a>
			</div>

			<nav id="header-menu">
				<?php 
					$args = array( 
						'theme_location' => 'header-menu', 
						'depth'          => 3, 
						'container'      => false,
						'walker'		 => new md_megamenu_walker
					);

					if(has_nav_menu("header-menu")){
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
						'theme_location' => 'header-menu', 
						'depth'          => 3, 
						'container'      => false
					);

					if(has_nav_menu("header-menu")){
						wp_nav_menu($args); 
					}							
				?>
			</nav>
		</div>
	</div>
</header>