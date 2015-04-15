<?php

#include_once( 'edit_custom_walker.php' );
include_once( 'custom_walker.php' );


function md_one_page_loop(){
    global $demo;
    $theme_location = ($demo && MD_DEBUG) ? 'onepage-menu-'.$demo[1] : 'onepage-menu';

    /* check if primary navigation has been created and set */
    if ( has_nav_menu( $theme_location ) ) : 
        /* get primary navigation ID */
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations[$theme_location] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $pageID = array();
        
        foreach($menu_items as $item) {
            if($item->object == 'page' && $item->menu_item_parent == 0)
                $pageID[] = $item->object_id;
        }

        return array( 'post_type' => 'page','post__in' => $pageID, 'posts_per_page' => count($pageID), 'orderby' => 'post__in' );
    endif;
}


