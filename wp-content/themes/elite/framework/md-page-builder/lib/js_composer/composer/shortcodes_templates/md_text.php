<?php
global $md_theme_options;
extract(shortcode_atts(array(
    'class' 		=> '',
    'id' 			=> '',
    'css_animation' => '',
    'css_animation_delay' => '',
    'text_align' 	=> '',
    'fontsize'      => $md_theme_options['font-body']['font-size'],
    'lineheight'    => $md_theme_options['font-body']['line-height'],
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';

$class  = setClass(array('md-text-block', $animated, $css_animation, $class, $text_align));
$id 	= setId($id);

$output .= '<div'.$class.$id.$css_animation_delay.' style="font-size:'.$fontsize.'px; line-height:'.$lineheight.'px;">';
$output .=  wpb_js_remove_wpautop($content, true);
$output .= '</div>';

echo $output;