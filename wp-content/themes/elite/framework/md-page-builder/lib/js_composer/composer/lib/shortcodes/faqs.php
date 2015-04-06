<?php
/**
 *
 * MD Shortcodes Faqs
 *
 */

$md_shortcodes['md_faqs'] = array(
  "name"            => __("Faqs", "js_composer"),
  "base"            => "md_faqs",
  "modal"           => false,
  "params"          => array(
    array(
      "type"        => "dropdown_multiple",
      "heading"     => __("Category", "js_composer"),
      "param_name"  => "category",
      "value"       => get_custom_post_categories('faqs-categories'),
      "default"     => ""
    ),
    array(
      "type"        => "radio",
      "heading"     => __("First Expanded?", "js_composer"),
      "param_name"  => "expanded",
      "value"       => array(
            __('Yes', "js_composer")     => "expanded", 
            __('No', "js_composer")  => "no-expanded", 
      ),
      "default"     => "expanded"
    ),
    $element_options['class'],
    $element_options['id'],
    $element_options['css_animation'],
    $element_options['css_animation_delay'],
  )
);


vc_map( $md_shortcodes['md_faqs'] );

class WPBakeryShortCode_MD_Faqs extends WPBakeryShortCode {}