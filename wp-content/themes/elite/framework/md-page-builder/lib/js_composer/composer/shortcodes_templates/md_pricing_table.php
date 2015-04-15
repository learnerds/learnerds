<?php

extract(shortcode_atts(array(
	'table_highlight'		=> '',
    'class' 		        => '',
    'id'			        => '',
    'css_animation'         => '',
    'css_animation_delay'   => '',
), $atts));


$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';

$class  = setClass(array('md-pricing-table', $animated, $css_animation, $table_highlight));
$id     = setId($id);

$content = rawurldecode(base64_decode(strip_tags($content)));

$output .= '<div'.$class.$id.$css_animation_delay.'>';
$output .= $content;
$output .= '</div>';

echo $output;