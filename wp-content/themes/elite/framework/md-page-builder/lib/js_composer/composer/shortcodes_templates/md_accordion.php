<?php

extract(shortcode_atts(array(
	'title' => ''
), $atts));

$uid = 'tab_'.uniqid();

$output = '<div class="panel">';

$output .= '<div class="panel-heading">';
$output .= '<h4 class="panel-title">';
$output .= '<a data-toggle="collapse" href="#'.$uid.'" class="collapsed">'.raw_decode($title).'</a>';
$output .= '</h4>';
$output .= '</div>';

$output .= '<div id="'.$uid.'" class="panel-collapse collapse">';
$output .= '<div class="panel-body">'.raw_decode($content).'</div>';
$output .= '</div>';

$output .= '</div>';

echo $output;
