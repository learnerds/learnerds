<?php
/**
 *
 * MD Shortcodes Social Icons
 *
 */

$md_shortcodes['md_social_icons'] = array(
  "name"            => __("Social Icons", "js_composer"),
  "base"            => "md_social_icons",
  "modal"           => true,
  "params"          => array(
    array(
      "type"        => "textfield",
      "heading"     => __("RSS", "js_composer"),
      "param_name"  => "rss",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Facebook", "js_composer"),
      "param_name"  => "facebook",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Twitter", "js_composer"),
      "param_name"  => "twitter",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Google Plus", "js_composer"),
      "param_name"  => "googleplus",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Youtube", "js_composer"),
      "param_name"  => "youtube",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Linkedin", "js_composer"),
      "param_name"  => "linkedin",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Pinterest", "js_composer"),
      "param_name"  => "pinterest",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Flickr", "js_composer"),
      "param_name"  => "flickr",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Instagram", "js_composer"),
      "param_name"  => "instagram",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Tumblr", "js_composer"),
      "param_name"  => "tumblr",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Dribbble", "js_composer"),
      "param_name"  => "dribbble",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Apple", "js_composer"),
      "param_name"  => "apple",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Android", "js_composer"),
      "param_name"  => "android",
      "default"     => ""
    ),
    array(
      "type"        => "textfield",
      "heading"     => __("Email", "js_composer"),
      "param_name"  => "email",
      "default"     => ""
    ),
    $element_options['class'],
    $element_options['id'],
    $element_options['css_animation'],
    $element_options['css_animation_delay'],
  )
);


vc_map( $md_shortcodes['md_social_icons'] );

class WPBakeryShortCode_MD_Social_icons extends WPBakeryShortCode {}