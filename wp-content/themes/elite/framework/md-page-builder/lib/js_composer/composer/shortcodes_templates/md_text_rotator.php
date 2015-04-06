<?php


extract(shortcode_atts(array(
    'class' 		=> '',
    'id' 			=> '',
    'css_animation' => '',
    'css_animation_delay' => '',
    'text_align' 	=> '',
    'color' 		=> '',
    'font_min' 		=> '32',
    'font_max' 		=> '72',
    'rotation'		=> 'fade',
    'speed'			=> 1500,
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';

$class  = setClass(array('md-rotator', $animated, $css_animation, $text_align, $class));
$id 	= setId($id);


$content =  rawurldecode(base64_decode(strip_tags($content)));

$output .= '<div'.$class.$id.$css_animation_delay.' style="color:'.$color.'" data-rotate-animation="'.$rotation.'" data-rotate-speed="'.$speed.'" data-font-min="'.$font_min.'" data-font-max="'.$font_max.'">'.$content.'</div>';

echo $output;