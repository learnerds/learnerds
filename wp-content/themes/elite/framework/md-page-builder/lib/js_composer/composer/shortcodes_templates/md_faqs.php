<?php

extract(shortcode_atts(array(
    'class' 		=> '',
    'id' 			=> '',
    'css_animation' => '',
    'css_animation_delay' => '',
    'expanded' 		=> '',
    'category'		=> '',
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';
$uid = 'faqs_'.uniqid();


$class  = setClass(array('md-accordions md-faqs', $animated, $css_animation, $class, $expanded));
$id 	= setId($id);


if ($category == "All") { $category = ''; }
if ($category == "all") { $category = ''; }

$args = array(
	'post_type' 				=> 'faqs',
	'post_status' 				=> 'publish',
	'posts_per_page'			=> -1,
	'faqs-categories'			=> $category
);

$items = get_posts( $args );



$output = '<div'.$class.$id.$css_animation_delay.'>';
$output .= '<div class="panel-group" id="'.$uid.'">';

foreach($items as $item):
	$uid = 'faq_'.uniqid();
	$faq_custom = get_post_custom( $item->ID );
	$output .= '<div class="panel">';
		$output .= '<div class="panel-heading">';
			$output .= '<h4 class="panel-title">';
			$output .= '<a data-toggle="collapse" href="#'.$uid.'" class="collapsed">'.$faq_custom['faq_title'][0].'</a>';
			$output .= '</h4>';
		$output .= '</div>';

		$output .= '<div id="'.$uid.'" class="panel-collapse collapse">';
			$output .= '<div class="panel-body">'.$faq_custom['faq_text'][0].'</div>';
		$output .= '</div>';
	$output .= '</div>';

endforeach;


$output .= '</div>';
$output .= '</div>';

echo $output;
