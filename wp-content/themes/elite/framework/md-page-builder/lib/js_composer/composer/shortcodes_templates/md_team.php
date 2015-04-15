<?php
extract(shortcode_atts(array(
    'class' 				=> '',
    'id' 					=> '',
    'css_animation'			=> '',
    'css_animation_delay'	=> '',
    'items_cols'			=> '',
    'posts_per_page'		=> '-1',
    'orderby'				=> '',
    'order'					=> '',
    'category'				=> '',
    'carousel'				=> '',
    'carousel_navigation'	=> 'false',
    'carousel_pagination'	=> 'false',
    'carousel_autoplay'		=> true,
    'carousel_style'		=> 'default',
    'preview_image'			=> '',
    'show_name'				=> '',
    'show_presentation'		=> '',
    'show_social'			=> '',
    'linked'				=> false,
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';

$class  = setClass(array('md-team', $animated, $css_animation, $class, 'preview-'.$preview_image));
$id 	= setId($id);


$orderby = ($orderby) ? $orderby : '-1';
if ($category == "All") { $category = ''; }
if ($category == "all") { $category = ''; }

$thumb_size = ($preview_image == 'default') ? 'md-half' : 'md-square';

$args = array(
	'post_type' 				=> 'team',
	'post_status' 				=> 'publish',
	'order'						=> $order,
	'orderby'					=> $orderby,
	'posts_per_page'			=> $posts_per_page,
	'team-categories'			=> $category
);

$items = get_posts( $args );

$social_profiles = array ('email', 'facebook', 'twitter', 'google_plus', 'youtube', 'linkedin', 'pinterest', 'flickr', 'instagram', 'tumblr', 'dribbble', 'apple', 'android');


$item_class = 'md-column col-md-'.$items_cols.' item';

$output = '';

if(!$carousel)
$output .= '<div class="row">';

$output .= '<div'.$class.$id.$css_animation_delay.'>';

	if($carousel){

		$item_class = 'item';

		switch ($items_cols):
			case 12:
				$items_cols = 1;
			break;

			case 6:
				$items_cols = 2;
			break;

			case 4:
				$items_cols = 3;
			break;

			case 3:
				$items_cols = 4;
			break;

			case 2:
				$items_cols = 6;
			break;

		endswitch;

		$output .= '<div class="md-carousel" data-items-mobile="1" data-items-tablet="1" data-items="'.$items_cols.'" data-navigation="'.$carousel_navigation.'" data-pagination="'.$carousel_pagination.'" data-autoplay="'.$carousel_autoplay.'">';
	}

	foreach($items as $item):
		$member_custom = get_post_custom( $item->ID );

		$output .= '<div class="'.$item_class.'"><div class="md-member">';
			
			$member_name = ($linked) ? '<a href="'.get_permalink($item->ID).'">'.get_the_title($item->ID).'</a>' : get_the_title($item->ID);

			$member_image = ($linked) ? '<a href="'.get_permalink($item->ID).'">'.get_the_post_thumbnail($item->ID, $thumb_size).'</a>' : get_the_post_thumbnail($item->ID, $thumb_size);
			
		
			$output .= '<div class="member-image">'.$member_image.'</div>';

			if($show_name){
				$output .= '<div class="member-info"><span class="member-name">'.$member_name.'</span><span class="member-role">'.$member_custom['member_role'][0].'</span></div>';
			}

			if($show_presentation)
			$output .= '<div class="member-content"><p class="member-presentation">'.$member_custom['member_presentation'][0].'</p></div>';

			if($show_social){
				$output .= '<div class="member-social">';
				foreach ($social_profiles as $social):

					if($member_custom['member_social_'.$social][0] != ''):

						$output .= '<a href="'.$member_custom['member_social_'.$social][0].'" class="'.$social.'" target="_blank"></a>';

					endif;

				endforeach;
				$output .= '</div>';
			}

		$output .= '</div></div>';

	endforeach;

	if($carousel){
		$output .= '</div>';
	}

$output .= '</div>';

if(!$carousel)
$output .= '</div>';

echo $output;
?>