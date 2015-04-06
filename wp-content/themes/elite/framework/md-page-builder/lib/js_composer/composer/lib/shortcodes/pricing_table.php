<?php
/**
 *
 * MD Shortcodes Pricing Table
 *
 */

global $md_theme_options;
$md_shortcodes['md_pricing_table'] = array(
  "name"            => __("Pricing Table", "js_composer"),
  "base"            => "md_pricing_table",
  "modal"           => false,
  "params"          => array(
    array(
      "type"        => "dropdown",
      "heading"     => __("Table Highlight", "js_composer"),
      "param_name"  => "table_highlight",
      "value"       => array(
        __('No', "js_composer")  => "", 
        __('Yes', "js_composer") => "highlighted",
      ),
    ),
    array(
      "type"        => "textarea_raw_html",
      "heading"     => __("Content", "js_composer"),
      "param_name"  => "content",
      "value"       => '',
      "default"     => '
<div class="table-title">TITLE</div>
<div class="price">15$ <span>month</span></div>
<ul>
<li>Item List #01</li>
<li>Item List #02</li>
<li>Item List #03</li>
<li>...</li>
</ul>
<div class="table-btn"><a href="#">PURCHASE</a></div>',
      "description" => "Insert &lt;li&gt;your content&lt;/li&gt; for each row"
    ),
    $element_options['class'],
    $element_options['id'],
    $element_options['css_animation'],
    $element_options['css_animation_delay'],
  )
);


vc_map( $md_shortcodes['md_pricing_table'] );

class WPBakeryShortCode_MD_Pricing_table extends WPBakeryShortCode {}