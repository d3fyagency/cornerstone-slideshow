<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'title',
		'suggest' => __( 'Sortable Item', 'cs-image-slider' ),
	),

	'image' => array(
		'type' => 'image',
		'ui'   => array(
			'title'   => __( 'Upload an Image', 'cs-image-slider' ),
			'tooltip' => __( 'Select your image.', 'cs-image-slider' )
		)
	),

	'image_alt' => array(
		'type' => 'text',
		'ui'   => array(
			'title'   => __( 'Add alt text', 'cs-image-slider' ),
			'tooltip' => __( 'Add alternative text for screen readers', 'cs-image-slider' )
		)
	),

	'content' => array(
		'type'    => 'editor',
		'context' => 'content',
		'suggest' => __( 'Click to inspect, then make edits.', 'cs-image-slider' ),
	),

	'alignment' => array(
		'type'    => 'select',
		'ui'      => array(
			'title'   => __( 'Slide Text Position', 'cs-image-slider' ),
			'tooltip' => __( 'Position your text either left, right or center over your image.', 'cs-image-slider' )
		),
		'options' => array(
			'choices' => array(
				array(
					'value' => 'cs-text-pos-left',
					'label' => __( 'Left', 'cs-image-slider' )
				),
				array(
					'value' => 'cs-text-pos-right',
					'label' => __( 'Right', 'cs-image-slider' )
				),
				array(
					'value' => 'cs-text-pos-center',
					'label' => __( 'Center', 'cs-image-slider' )
				),
			)
		)
	),

	'url' => array(
		'type'    => 'text',
		'ui'      => array(
			'title'   => __( 'Slide Link', 'cs-image-slider' ),
			'tooltip' => __( 'Link to the Image', 'cs-image-slider' )
		),
		'suggest' => __( 'add link', 'cs-image-slider' ),
	),
	'new_tab' => array(
		'type' => 'toggle',
		'ui'   => array(
			'title'   => __( 'Open Link in new Tab', 'cs-image-overlay' ),
			'tooltip' => __( 'Select On if you want to open Link in new Tab.', 'cs-image-overlay' ),
		),
	),
	'linkable' => array(
		'type' => 'toggle',
		'ui'   => array(
			'title'   => __( 'Toggle slide link', 'cs-image-slider' ),
			'tooltip' => __( 'Control application of slide link', 'cs-image-slider' ),
		),
	),


);
