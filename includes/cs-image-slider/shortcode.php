<?php

/**
 * Shortcode definition
 */

 static $count = 0; $count++;

 $id            = ( $id != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
 $class         = "x-flexslider-shortcode-container cs-image-slider" . esc_attr( $class );
 $style         = ( $style != '' ) ? 'style="' . $style . '"' : '';

 $js_params = array(
   'animation'    => 'slide',
   'slideTime'    => ( $slide_time     != ''      ) ? $slide_time : '7000',
   'slideSpeed'   => ( $slide_speed != '' ) ? $slide_speed : '600',
   'controlNav'   => ( $control_nav == false ) ? false : true,
   'prevNextNav'   => ( $prev_next_nav == false ) ? false : true,
   'slideshow'    => 'true',
   'touch'        => 'true',
   'pauseOnHover' => 'true'
 );

 $data = cs_generate_data_attributes( 'slider', $js_params );

 $output = "<div class=\"{$class}\">"
           . "<div {$id} class=\"x-flexslider x-flexslider-shortcode x-flexslider-shortcode-{$count}\" {$data} {$style}>"
             . '<ul class="x-slides">'
               . do_shortcode( $content )
             . '</ul>'
           . '</div>'
         . '</div>';
?>

<?php if ('' != $slide_height ): ?>
<style media="screen">
	.cs-image-slider-item.x-slide {
    <?php echo "max-height: {$slide_height}px !important;"; ?>
	}
</style>
<?php endif; ?>

<?php echo $output; ?>
