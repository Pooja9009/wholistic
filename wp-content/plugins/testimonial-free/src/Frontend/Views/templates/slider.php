<?php
/**
 * Slider.
 *
 * This template can be overridden by copying it to Your theme/testimonial-free/templates/slider.php
 *
 * @package    Testimonial_Free
 * @subpackage Testimonial_Free/Frontend
 */

?>
<div id="sp-testimonial-free-wrapper-<?php echo esc_attr( $post_id ); ?>" class="sp-testimonial-free-wrapper">
<?php
if ( $section_title ) {
	include self::sp_testimonial_locate_template( 'section-title.php' );
}
if ( $preloader ) {
	include self::sp_testimonial_locate_template( 'preloader.php' );
}
?>
<div id="sp-testimonial-free-<?php echo esc_attr( $post_id ); ?>" class="sp-testimonial-free-section tfree-style-<?php echo esc_attr( $theme_style ); ?>" dir="<?php echo esc_attr( $slider_direction ); ?>" data-preloader="<?php echo esc_attr( $preloader ); ?>" <?php echo $slider_attr; ?> <?php echo $the_rtl; ?>>
<div class="swiper-wrapper">
<?php echo $testimonial_items['output']; ?>
</div>
<!-- If we need pagination -->
<?php if ( 'true' === $pagination ) : ?>
<div class="swiper-pagination testimonial-pagination"></div>
<?php endif;  if ( 'true' === $navigation ) : ?>
<!-- If we need navigation buttons -->
<div class="swiper-button-prev testimonial-nav-arrow"><i class="fa fa-angle-left"></i></div>
<div class="swiper-button-next testimonial-nav-arrow"><i class="fa fa-angle-right"></i></div>
<?php endif; ?>
</div>
</div>
