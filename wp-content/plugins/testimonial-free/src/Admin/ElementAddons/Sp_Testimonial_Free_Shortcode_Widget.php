<?php
/**
 * Framework options.class file.
 *
 * @link https://shapedplugin.com
 * @since 2.0.0
 *
 * @package Testimonial_free
 * @subpackage Testimonial_free/Admin
 */

namespace ShapedPlugin\TestimonialFree\Admin\ElementAddons;

use Elementor\Controls_Manager;
use Elementor\Plugin;
use Elementor\Widget_Base;
use ShapedPlugin\TestimonialFree\Frontend\Helper;
use WP_Query;

/**
 * Elementor real testimonial free shortcode Widget.
 *
 * @since 2.5.2
 */
class Sp_Testimonial_Free_Shortcode_Widget extends Widget_Base {
	/**
	 * Get widget name.
	 *
	 * @since 2.5.2
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'real_testimonial_Pro_shortcode';
	}

	/**
	 * Get widget title.
	 *
	 * @since 2.5.2
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Real Testimonial', 'testimonial-free' );
	}

	/**
	 * Get widget icon.
	 *
	 * @since 2.5.2
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'icon-rt';
	}

	/**
	 * Get widget categories.
	 *
	 * @since 2.5.2
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array( 'basic' );
	}

	/**
	 * Get all post list.
	 *
	 * @since 2.5.2
	 * @return array
	 */
	public function sprtp_post_list() {
		$post_list   = array();
		$sprtp_posts = new WP_Query(
			array(
				'post_type'      => 'spt_shortcodes',
				'post_status'    => 'publish',
				'posts_per_page' => 9999,
			)
		);
		$posts       = $sprtp_posts->posts;
		foreach ( $posts as $post ) {
			$post_list[ $post->ID ] = $post->post_title;
		}
		krsort( $post_list );
		return $post_list;
	}

	/**
	 * Controls register.
	 *
	 * @return void
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => __( 'Content', 'testimonial-free' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'sp_testimonial_pro_shortcode',
			array(
				'label'       => __( 'Real Testimonial Shortcode(s)', 'testimonial-free' ),
				'type'        => Controls_Manager::SELECT2,
				'label_block' => true,
				'default'     => '',
				'options'     => $this->sprtp_post_list(),
			)
		);

		$this->end_controls_section();

	}

	/**
	 * Render testimonial shortcode widget output on the frontend.
	 *
	 * @since 2.5.2
	 * @access protected
	 */
	protected function render() {

		$settings                 = $this->get_settings_for_display();
		$sp_testimonial_shortcode = $settings['sp_testimonial_pro_shortcode'];

		if ( '' === $sp_testimonial_shortcode ) {
			echo '<div style="text-align: center; margin-top: 0; padding: 10px" class="elementor-add-section-drag-title">Select a shortcode</div>';
			return;
		}

		$generator_id = $sp_testimonial_shortcode;

		if ( Plugin::$instance->editor->is_edit_mode() ) {
			$post_id            = $generator_id;
			$setting_options    = get_option( 'sp_testimonial_pro_options' );
			$shortcode_data     = get_post_meta( $post_id, 'sp_tpro_shortcode_options', true );
			$main_section_title = get_the_title( $post_id );
			Helper::sp_testimonial_html_show( $post_id, $setting_options, $shortcode_data, $main_section_title );
			?>
			<script>
			jQuery('#sp-testimonial-preloader-' + <?php echo esc_attr( $generator_id ); ?>).animate({ opacity: 0, zIndex: -99 }, 600);
			</script>
			<script src="<?php echo esc_url( SP_TFREE_URL . 'Frontend/assets/js/sp-scripts.min.js' ); ?>" ></script>
			<?php
		} else {
			echo do_shortcode( '[sp_testimonial id="' . $generator_id . '"]' );
		}

	}

}
