<?php
/**
 *
 * MD Shortcodes Text Rotator
 *
 */

global $md_theme_options;
$md_shortcodes['md_text_rotator'] = array(
  "name"            => __("Text Rotator", "js_composer"),
  "base"            => "md_text_rotator",
  "modal"           => true,
  "params"          => array(
    /*
    array(
      "type"        => "radio",
      "heading"     => __("Rotation Effect", "js_composer"),
      "param_name"  => "rotation",
      "value"       => array(
            __('Fade', "js_composer")     => "fade", 
           # __('Flip', "js_composer")  => "flip", 
           # __('Flip Up', "js_composer")  => "flipUp", 
           # __('Flip Cube', "js_composer")  => "flipCube", 
           # __('Flip Cube Up', "js_composer")  => "flipCubeUp", 
            __('Spin', "js_composer")  => "spin", 
           # __('Dissolve', "js_composer")  => "dissolve", 
      ),
      "default"     => "expanded"
    ),
    */
    array(
      "type"        => "slider",
      "heading"     => __("Rotation Speed", "js_composer"),
      "param_name"  => "speed",
      "default"     => "4000",
      "suffix"      => "ms",
      "max"         => "10000",
      "description" => "How many milliseconds until the next word show"
    ),
    array(
      "type"        => "textarea_raw_html",
      "heading"     => __("Text", "js_composer"),
      "param_name"  => "content",
      "shortcode_btn"  => true,
      "value"       => "",
      "description" => "Example: We are &lt;span class=\"rotator\"&gt;Awesome,Incredible,Fantastic&lt;/span&gt;... just like you!"
    ),
    array(
      "type"        => "slider",
      "heading"     => __("Font Size Min", "js_composer"),
      "param_name"  => "font_min",
      "default"     => "32",
      "suffix"      => "px",
      "max"         => "100",
    ),
    array(
      "type"        => "slider",
      "heading"     => __("Font Size Max", "js_composer"),
      "param_name"  => "font_max",
      "default"     => "72",
      "suffix"      => "px",
      "max"         => "100",
    ),
    array(
      "type"        => "colorpicker",
      "heading"     => __("Color", "js_composer"),
      "param_name"  => "color",
      "value"       => $md_theme_options['font-body']['color'],
    ),
    $element_options['text_align'],
    $element_options['class'],
    $element_options['id'],
    $element_options['css_animation'],
    $element_options['css_animation_delay'],
  )
);


vc_map( $md_shortcodes['md_text_rotator'] );

class WPBakeryShortCode_MD_Text_rotator extends WPBakeryShortCode {}