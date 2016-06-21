<?php

/*
Plugin Name: Image Slider for Cornerstone
Description: Displays an image slider with overlayed text.
Author: Justin Tucker (Certain Strings)
Author URI: http://certainstrings.com
Version: 0.1.0
*/

define( 'CS_IMAGESLIDER_PATH', plugin_dir_path( __FILE__ ) );
define( 'CS_IMAGESLIDER_URL', plugin_dir_url( __FILE__ ) );

add_action( 'wp_enqueue_scripts', 'cs_imageslider_enqueue' );
add_action( 'cornerstone_register_elements', 'cs_imageslider_register_elements' );
add_filter( 'cornerstone_icon_map', 'cs_imageslider_icon_map' );

function cs_imageslider_register_elements() {

	cornerstone_register_element( 'CS_Image_Slider', 'cs-image-slider', CS_IMAGESLIDER_PATH . 'includes/cs-image-slider' );
	cornerstone_register_element( 'CS_Image_Slider_Item', 'cs-image-slider-item', CS_IMAGESLIDER_PATH . 'includes/cs-image-slider-item' );

}

function cs_imageslider_enqueue() {
	wp_enqueue_style( 'cs_imageslider-styles', CS_IMAGESLIDER_URL . '/assets/styles/cs-imageslider.css', array(), '0.1.0' );
}

function cs_imageslider_icon_map( $icon_map ) {
	$icon_map['cs-imageslider'] = CS_IMAGESLIDER_URL . '/assets/svg/icons.svg';
	return $icon_map;
}
