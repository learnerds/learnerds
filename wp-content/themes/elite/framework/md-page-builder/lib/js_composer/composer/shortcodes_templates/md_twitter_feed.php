<?php

extract(shortcode_atts(array(
    'class'         => '',
    'id'            => '',
    'css_animation' => '',
    'css_animation_delay' => '',
    'carousel'      => '',
    'color'         => '',
    'user'          => '',
    'tweets'        => '',
    'carousel_style' => ''
), $atts));

$animated = ($css_animation) ? 'animate' : '';
$css_animation_delay = ($css_animation) ? ' data-delay="'.$css_animation_delay.'"' : '';

$class  = setClass(array('md-tweets', $animated, $css_animation, $class, $carousel));
$id     = setId($id);
$uniqid = 'md-tweets-'.uniqid();

if( (get_option('tdf_consumer_key')) && (get_option('tdf_consumer_secret')) && (get_option('tdf_access_token')) && (get_option('tdf_access_token_secret')) ) {

    $output .= '<div'.$class.$id.$css_animation_delay.'>';
        $output .= '<div class="twitter-logo"><a href="http://twitter.com/'.$user.'" target="_blank" style="color:'.$color.'"><i class="icon-twitter"></i></a></div>';
        $output .= '<div class="md-carousel '.$carousel_style.'" data-items="1" data-items-tablet="1" data-items-mobile="1" data-autoplay="true" data-pagination="true" data-navigation="false" id="'.$uniqid.'">';
        $tweets = getTweets($user, $tweets);
            foreach($tweets as $tweet):
              $output .= '
                    <div class="md-tweet item" style="color:'.$color.'">
                        <div class="tweet-content">
                            <div class="tweet-text">' . TwitterFilter($tweet['text']) . '</div>
                        </div>
                        <div class="tweet-info">
                            <span class="tweet-time"><a href="'.'https://twitter.com/' . $user . '/status/' . $tweet['id_str'] . '" target="_blank" style="color:'.$color.'">' . date('j F o \a\t g:i A', strtotime($tweet['created_at'])) . '</a></span>
                        </div>
                    </div>';
            endforeach;
        $output .= '</div>';
    $output .= '</div>';

    $output .= '<style type="text/css">#'.$uniqid.' .md-tweet a{color:'.$color.';}</style>';

} else {
  $output = '<span style="color:'.$color.'">Twitter Feed not configured. <a href="'.admin_url('options-general.php?page=tdf_settings').'" style="color:'.$color.'">Click here to edit.</a></span>';  
}


echo $output;