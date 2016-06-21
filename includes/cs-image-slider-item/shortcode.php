<?php

/**
 * Shortcode definition
 */
$class = "cs-image-slider-item x-slide " . $class;
$target = empty( $new_tab ) ? '' : 'target="_blank"';
?>

<li <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ), true ); ?>>
	<?php if ( ! empty( $url ) && ! empty( $linkable ) ) : ?>
    <a href="<?php echo $url; ?>" <?php echo $target; ?>>
  <?php endif; ?>
	<div class="slide-content <?php echo $alignment; ?>" >
		<?php echo do_shortcode( $content ); ?>
    </div>

    <?php if ('' != $image ) : ?>

	    

			<img src="<?php echo $image; ?>" alt="<?php echo $image_alt ?>" />

		<?php if ( ! empty( $url ) && ! empty( $linkable ) ) : ?>
		    </a>
		<?php endif; ?>

  <?php endif; ?>

</li>
