<?php

extract(shortcode_atts(array(
	'title' => ''
), $atts));

$uid = uniqid();

if($GLOBALS['tabs'] == 'nav'){
	$output = '<li><a href="#'.$uid.'" data-toggle="tab">'.raw_decode($title).'</a></li>';
}

else{
	$output = '<div class="tab-pane">'.raw_decode($content).'</div>';
}

echo $output;