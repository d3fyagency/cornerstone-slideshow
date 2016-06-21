<?php

/**
 * Element Controls
 */

return array(

	'elements' => array(
		'type'    => 'sortable',
		'options' => array(
			'element' => 'cs-image-slider-item',
			'newTitle' => __( 'Slide %s', csl18n() ),
			'floor'   => 1,
      'title_field' => 'heading'
    ),
    'context' => 'content',
		'suggest' => array(
	    array( 'heading' => __( 'First Slide', csl18n() ) ),
      array( 'heading' => __( 'Second Slide', csl18n() ) ),
	  )
	),

	'slide_height' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Slider Height', 'cs-image-slider' ),
			'tooltip' => __( 'Set the max hieght of the image slider', 'cs-image-slider' ),
		),
	),

	'slide_speed' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Animation Speed', 'cs-image-slider' ),
			'tooltip' => __( 'The amount of time in milliseconds the transition between each slide should take.', 'cs-image-slider' ),
		),
	),

	'slide_time' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Slide Duration', 'cs-image-slider' ),
			'tooltip' => __( 'The amount of time in milliseconds each slide should remain visible before transitioning to the next one.', 'cs-image-slider' ),
		),
	),

	'prev_next_nav' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Prev/Next Navigation', 'cs-image-slider' ),
			'tooltip' => __( 'Select to enable the prev/next navigation, which displays two arrows for you to cycle through the slides in your slider.', 'cs-image-slider' ),
		),
	),

	'control_nav' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Control Navigation', 'cs-image-slider' ),
			'tooltip' => __( 'Select to enable the control navigation, which displays how many slides you have in your slider.', 'cs-image-slider' ),
		),
	)

);
