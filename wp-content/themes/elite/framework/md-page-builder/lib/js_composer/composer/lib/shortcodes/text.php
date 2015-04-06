<?php
/**
 *
 * MD Shortcodes Text
 *
 */


$md_shortcodes['md_text'] = array(
  "name"            => __("Text Block", "js_composer"),
  "base"            => "md_text",
  "modal"           => true,
  "params"          => array(
    array(
      "type"        => "textarea_html",
      "heading"     => __("Text", "js_composer"),
      "param_name"  => "content",
      "shortcode_btn"  => true,
      "value"       => ""
    ),
    array(
      "type"        => "slider",
      "heading"     => __("Font Size", "js_composer"),
      "param_name"  => "fontsize",
      "default"     => $md_theme_options['font-body']['font-size'],
    ),
    array(
      "type"        => "slider",
      "heading"     => __("Line Height", "js_composer"),
      "param_name"  => "lineheight",
      "default"     => $md_theme_options['font-body']['line-height'],
    ),
    $element_options['class'],
    $element_options['id'],
    $element_options['css_animation'],
    $element_options['css_animation_delay'],
  )
);


vc_map( $md_shortcodes['md_text'] );

class WPBakeryShortCode_MD_Text extends WPBakeryShortCode {}
