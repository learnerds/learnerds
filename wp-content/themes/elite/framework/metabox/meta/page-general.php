<?php

/*
*	
*	PAGE GENERAL METABOX
*
*/

global $md_theme_options;
global $md_metabox;


$fields = array(
	
	array(
		'name'  => 'page-loading',
		'label' => __('Loading', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'Default',
				'value' => 'default'
			),
			array(
				'label' => 'No',
				'value' => 'false'
			),
			array(
				'label' => 'Spinner Light',
				'value' => 'spinner light'
			),
			array(
				'label' => 'Spinner Dark',
				'value' => 'spinner dark'
			),
			array(
				'label' => 'Pulse Light',
				'value' => 'pulse light'
			),
			array(
				'label' => 'Pulse Dark',
				'value' => 'pulse dark'
			),
		),
		'default' => 'default'
	),
	
	array(
		'name'  => 'force-boxed',
		'label' => __('Force Layout Boxed', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'No',
				'value' => 'false'
			),
			array(
				'label' => 'Yes',
				'value' => 'true'
			),
		),
		'desc' => 'Force Boxed Layout in this page',
	),

	array(
		'name'  => 'page-bgimage',
		'label' => __('Page Background Image', MD_THEME_NAME),
		'type'  => 'upload',
		'media' => 'image',
		'desc' => 'Force Background Image in this page',
	),

	array(
		'name'  => 'page-bgcolor',
		'label' => __('Page Background Color', MD_THEME_NAME),
		'type'  => 'colorpicker',
		'default' => $md_theme_options['body-bgcolor']
	),

	array(
		'name'  => 'show-header',
		'label' => __('Header', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'Yes',
				'value' => 'true'
			),
			array(
				'label' => 'No',
				'value' => 'false'
			),
		),
		'desc' => 'Enable/Disable Header in this page',
	),

	array(
		'name'  => 'force-header-style',
		'label' => __('Force Header Style', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'No',
				'value' => 'false'
			),
			array(
				'label' => 'Default',
				'value' => 'style-1'
			),
			array(
				'label' => 'Alternative Light',
				'value' => 'style-2'
			),
			array(
				'label' => 'Alternative Light Center',
				'value' => 'style-3'
			),
			array(
				'label' => 'Alternative Light + Description',
				'value' => 'style-4'
			),
			array(
				'label' => 'Alternative Light Center + Description',
				'value' => 'style-5'
			),
			array(
				'label' => 'Alternative Dark',
				'value' => 'style-6'
			),
			array(
				'label' => 'Alternative Dark Center',
				'value' => 'style-7'
			),
			array(
				'label' => 'Alternative Dark + Description',
				'value' => 'style-8'
			),
			array(
				'label' => 'Alternative Dark Center + Description',
				'value' => 'style-9'
			),
			array(
				'label' => 'Side Navigation',
				'value' => 'style-10'
			),
		),
		'desc' => 'Force Header Style in this page',
	),

	array(
		'name'  => 'force-header-top',
		'label' => __('Force Header Top', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'Default',
				'value' => 'false'
			),
			array(
				'label' => 'Show',
				'value' => 'show'
			),
			array(
				'label' => 'Hide',
				'value' => 'hide'
			),
		),
		'desc' => 'Force Header Top in this page',
	),

	array(
		'name'  => 'show-breadcrumb',
		'label' => __('Breadcrumb', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'Yes',
				'value' => 'true'
			),
			array(
				'label' => 'No',
				'value' => 'false'
			),
		),
		'desc' => 'Enable/disable breadcrumb in this page',
	),

	array(
		'name'  => 'show-footer',
		'label' => __('Footer', MD_THEME_NAME),
		'type'  => 'dropdown',
		'options' => array(
			array(
				'label' => 'Yes',
				'value' => 'true'
			),
			array(
				'label' => 'No',
				'value' => 'false'
			),
		),
		'desc' => 'Enable/Disable Footer in this page',
	),
);

$md_metabox['general']['order'] 	= 1;
$md_metabox['general']['title'] 	= 'General Settings';
$md_metabox['general']['id'] 		= 'meta-page-general';
$md_metabox['general']['icon'] 		= 'magic';
$md_metabox['general']['class'] 	= 'blocked';
$md_metabox['general']['fields'] 	= $fields;
