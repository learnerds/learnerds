<?php 

extract(shortcode_atts(array(
    'class' 			=> '',
    'id' 				=> '',
    'css_animation' => '',
    'css_animation_delay' => '',
    'rss' 					=> '',
    'facebook' 				=> '',
    'twitter' 				=> '',
    'googleplus' 			=> '',
    'youtube' 				=> '',
    'linkedin'	 			=> '',
    'pinterest' 			=> '',
    'flickr'	 			=> '',
    'instagram' 			=> '',
    'tumblr'	 			=> '',
    'dribbble' 				=> '',
    'apple' 				=> '',
    'android' 				=> '',
    'email' 				=> ''
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';

$class  = setClass(array('md-social-icons social-links', $animated, $css_animation, $class));
$id 	= setId($id);




$output .= '<div'.$class.$id.$css_animation_delay.'>';

if($rss)
$output .= '<a class="rss" href="'.$rss.'" title="rss" target="_blank" ><i class="icon-rss"></i></a>';

if($facebook)
$output .= '<a class="facebook" href="'.$facebook.'" title="facebook" target="_blank" ><i class="icon-facebook"></i></a>';

if($twitter)
$output .= '<a class="twitter" href="'.$twitter.'" title="twitter" target="_blank" ><i class="icon-twitter"></i></a>';

if($googleplus)
$output .= '<a class="google" href="'.$googleplus.'" title="googleplus" target="_blank" ><i class="icon-google-plus"></i></a>';

if($youtube)
$output .= '<a class="youtube" href="'.$youtube.'" title="youtube" target="_blank" ><i class="icon-youtube"></i></a>';

if($linkedin)
$output .= '<a class="linkedin" href="'.$linkedin.'" title="linkedin" target="_blank" ><i class="icon-linkedin"></i></a>';

if($pinterest)
$output .= '<a class="pinterest" href="'.$pinterest.'" title="pinterest" target="_blank" ><i class="icon-pinterest"></i></a>';

if($flickr)
$output .= '<a class="flickr" href="'.$flickr.'" title="flickr" target="_blank" ><i class="icon-flickr"></i></a>';

if($instagram)
$output .= '<a class="instagram" href="'.$instagram.'" title="instagram" target="_blank" ><i class="icon-instagram"></i></a>';

if($tumblr)
$output .= '<a class="tumblr" href="'.$tumblr.'" title="tumblr" target="_blank" ><i class="icon-tumblr"></i></a>';

if($dribbble)
$output .= '<a class="dribbble" href="'.$dribbble.'" title="dribbble" target="_blank" ><i class="icon-dribbble"></i></a>';

if($apple)
$output .= '<a class="apple" href="'.$apple.'" title="apple" target="_blank" ><i class="icon-apple"></i></a>';

if($android)
$output .= '<a class="android" href="'.$android.'" title="android" target="_blank" ><i class="icon-android"></i></a>';

if($email)
$output .= '<a class="email" href="'.$email.'" title="email" target="_blank" ><i class="icon-envelope"></i></a>';

$output .= '</div>';

echo $output;