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
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';
$grid = ($carousel) ? '' : 'grid';

$class  = setClass(array('md-testimonials', $animated, $css_animation, $class, $grid));
$id 	= setId($id);


$orderby = ($orderby) ? $orderby : '-1';
if ($category == "All") { $category = ''; }
if ($category == "all") { $category = ''; }


$args = array(
	'post_type' 				=> 'testimonials',
	'post_status' 				=> 'publish',
	'order'						=> $order,
	'orderby'					=> $orderby,
	'posts_per_page'			=> $posts_per_page,
	'testimonials-categories'	=> $category
);

$items = get_posts( $args );

$output = '';

if(!$carousel)
$output .= '<div class="row">';

$output .= '<div'.$class.$id.$css_animation_delay.'>';

	$item_class = 'md-column col-md-'.$items_cols.' item';

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
		$testimonial_custom = get_post_custom( $item->ID );
		$output .= '<div class="'.$item_class.'"><div class="md-testimonial"><div class="testimonial-content"><p class="testimonial-quote">'.$testimonial_custom['testimonial_cite_text'][0].'</p><span class="testimonial-arrow"></span></div><div class="testimonial-author"><div class="testimonial-image">'.get_the_post_thumbnail($item->ID, 'md-thumb').'</div><div class="testimonial-info"><span class="testimonial-author">'.$testimonial_custom['testimonial_cite_name'][0].'</span><span class="testimonial-company"><a href="'.$testimonial_custom['testimonial_company_url'][0].'" target="_blank">'.$testimonial_custom['testimonial_company'][0].'</a></span></div></div></div></div>';
	endforeach;

	if($carousel){
		$output .= '</div>';
	}

	$output .= '</div>';

if(!$carousel)
$output .= '</div>';

echo $output;
?>