<?php
/**
 * Functions file.
 *
 * @link http://shapedplugin.com
 * @since 2.0.0
 *
 * @package Testimonial_free.
 * @subpackage Testimonial_free/includes.
 */

namespace ShapedPlugin\TestimonialFree\Includes;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}  // if direct access

/**
 * Functions
 */
class TFREE_Functions {

	/**
	 * Initialize the class
	 */
	public function __construct() {
		add_filter( 'post_updated_messages', array( $this, 'sp_tfree_change_default_post_update_message' ) );
		add_filter( 'admin_footer_text', array( $this, 'admin_footer' ), 1, 2 );
		add_action( 'admin_menu', array( $this, 'admin_menu' ), 100 );
		// Post thumbnails.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'tf-client-image-size', 120, 120, true );
	}

	/**
	 * Post update messages for Shortcode Generator
	 *
	 * @param string $message post update message.
	 */
	public function sp_tfree_change_default_post_update_message( $message ) {
		$screen = get_current_screen();
		if ( 'spt_shortcodes' === $screen->post_type ) {
			$message['post'][1]  = esc_html__( 'View updated.', 'testimonial-free' );
			$message['post'][4]  = esc_html__( 'View updated.', 'testimonial-free' );
			$message['post'][6]  = esc_html__( 'View published.', 'testimonial-free' );
			$message['post'][8]  = esc_html__( 'View submitted.', 'testimonial-free' );
			$message['post'][10] = esc_html__( 'View draft updated.', 'testimonial-free' );
		} elseif ( 'spt_testimonial' === $screen->post_type ) {
			$message['post'][1]  = esc_html__( 'Testimonial updated.', 'testimonial-free' );
			$message['post'][4]  = esc_html__( 'Testimonial updated.', 'testimonial-free' );
			$message['post'][6]  = esc_html__( 'Testimonial published.', 'testimonial-free' );
			$message['post'][8]  = esc_html__( 'Testimonial submitted.', 'testimonial-free' );
			$message['post'][10] = esc_html__( 'Testimonial draft updated.', 'testimonial-free' );
		}

		return $message;
	}

	/**
	 * Review Text
	 *
	 * @param string $text Footer review text.
	 *
	 * @return string
	 */
	public function admin_footer( $text ) {
		$screen = get_current_screen();
		if ( 'spt_testimonial' === get_post_type() || 'spt_testimonial_page_tfree_help' === $screen->id || 'spt_shortcodes' === $screen->post_type ) {
			$url  = 'https://wordpress.org/support/plugin/testimonial-free/reviews/?filter=5#new-post';
			$text = sprintf(
				wp_kses_post( 'If you like <strong>Real Testimonials</strong> please leave us a <a href="%s" target="_blank">&#9733;&#9733;&#9733;&#9733;&#9733;</a> rating. Your Review is very important to us as it helps us to grow more. ' ),
				esc_url( $url )
			);
		}
		if ( 'spt_testimonial_page_testimonial_premium' === $screen->id || 'spt_testimonial_page_tfree_help' === $screen->id ) {
			$text = '';
			add_filter( 'update_footer', '__return_empty_string', 11 );
		}
		return $text;
	}

	/**
	 * Admin Menu.
	 */
	public function admin_menu() {
		$landing_page = 'https://shapedplugin.com/real-testimonials/?ref=1';
		add_submenu_page(
			'edit.php?post_type=spt_testimonial',
			__( 'Real Testimonials Pro', 'testimonial-free' ),
			'<span class="sp-go-pro-icon"></span>Go Pro',
			'manage_options',
			$landing_page
		);
		add_submenu_page(
			'edit.php?post_type=spt_testimonial',
			__( 'Real Testimonials Help', 'testimonial-free' ),
			__( 'Help', 'testimonial-free' ),
			'manage_options',
			'tfree_help',
			array(
				$this,
				'help_page_callback',
			)
		);
	}

	/**
	 * Help Page Callback
	 */
	public function help_page_callback() {
		wp_enqueue_style( 'testimonial-free-admin-help', SP_TFREE_URL . 'Admin/assets/css/help-page.min.css', array(), SP_TFREE_VERSION );
		$add_new_testimoinial_link = admin_url( 'post-new.php?post_type=spt_testimonial' );
		?>

<div class="sp_testimonial-main-wrapper">
		<!-- Header section start -->
		<section class="tf-help header">
			<div class="header-area">
				<div class="container">
					<div class="header-logo">
						<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/Testimonial-logo-2.svg' ); ?>" alt="">
						<span><?php echo esc_html( SP_TFREE_VERSION ); ?></span>
					</div>
					<div class="header-content">

						<p>Thank you for installing Real Testimonials plugin! This video will help you get started with the plugin.</p>
					</div>
				</div>
			</div>
			<div class="video-area">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLoUb-7uG-5jPTDu5wiWwKhJNuWFWSyA5T" frameborder="0" allowfullscreen=""></iframe>
			</div>
			<div class="content-area">
				<div class="container">
					<p><b>Real Testimonials</b> makes it easy to manage and display testimonials in WordPress. <br>
						You can watch the video tutorial or read our guide on how you manage and display testimonials easily.</p>
					<div class="content-button">
						<a href="<?php echo esc_url( $add_new_testimoinial_link ); ?>">Start Adding Testimonials </a>
						<a href="https://docs.shapedplugin.com/docs/testimonial/overview/" target="_blank">Read Documentation</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Header section end -->

		<!-- Upgrade section start -->
		<section class="tf-help upgrade">
			<div class="upgrade-area">
				<h2>Upgrade To Real Testimonials Pro</h2>
				<p>Easily collect and display testimonials on your website and boost conversions.</p>
				<div class="upgrade-img"><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/header-img.svg' ); ?>" alt=""></div>
			</div>
			<div class="upgrade-info">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<ul class="upgrade-list">
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
								5+ Beautiful Testimonial Layouts.
								</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
								10+ Customizable & Professionally Designed Themes.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
								Advanced Shortcode Generator with Query options.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">Thumbnail Testimonials Slider.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt=""> Advanced Typography and Styling options.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt=""> Display Group or Specific Testimonials.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt=""> Isotope Filtering Testimonials by Categories.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
								Video Testimonials for lightbox functionality.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">Create Multiple Testimonial Submission Forms.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
								Drag & drop Testimonial Form Builder.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt=""> Testimonial Pending in Dashboard for approval.</li>
								<li><img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt=""> Site Admin can manage the Testimonials before publishing.</li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul class="upgrade-list">
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Testimonial Form Spam Protection with Google reCAPTCHA.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Multiple Testimonial Rows in the Carousel.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Rich Snippets/Structured Data compatible (Schema Markup).
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Ajax Pagination (Number, Load More, & Infinite Scroll).
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									14 Display (Reviewer Information) Options.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Read More & Characters Limit.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Read More Action Type (Expand/PopUp).
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									20+ Slider Control Options.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Fully Translation ready with WPML, Polylang and more.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									Built-in Automatic Updates.</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt="">
									One To One Fast & Friendly Support.
								</li>
								<li>
									<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/checkmark.svg' ); ?>" alt=""><span>
									Not Happy? 100% No Questions Asked <a href="https://shapedplugin.com/refund-policy/" target="_blank">Refund Policy!</a></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="upgrade-pro">
					<div class="pro-content">
						<div class="pro-icon">
							<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/Testimonial-icon.svg' ); ?>" alt="">
						</div>
						<div class="pro-text">
							<h2>Real Testimonials Pro</h2>
							<p>Grow Your Business with Real Customer Feedback</p>
						</div>
					</div>
					<div class="pro-btn">
						<a href="https://shapedplugin.com/real-testimonials/?ref=1" target="_blank">Upgrade To Pro Now</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Upgrade section end -->

		<!-- Real Testimonials section start -->
		<section class="tf-help testimonial">
			<div class="row">
				<div class="col-lg-6">
					<div class="testimonial-area">
						<div class="testimonial-content">
							<p>We have the plugin pro version in use on two project sites in various setups and pages and I can only say it is a superb plugin and really easy to setup with so many options to display testimonials. </p>
						</div>
						<div class="testimonial-info">
							<div class="img">
								<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/sirpa.png' ); ?>" alt="">
							</div>
							<div class="info">
								<h3>Sirpa</h3>
								<div class="star">
								<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="testimonial-area">
						<div class="testimonial-content">
							<p>This by far is the best testimonial plugin. Go for the pro version as it gives you all the different testimonial styles that you can think of. Very easy to use with lots of setting options for fonts, layouts and etc.</p>
						</div>
						<div class="testimonial-info">
							<div class="img">
								<img src="<?php echo esc_url( SP_TFREE_URL . 'Admin/assets/images/ali_senejani.png' ); ?>" alt="">
							</div>
							<div class="info">
								<h3>Ali Senejani</h3>
								<div class="star">
								<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Real Testimonials section end -->

</div>
		<?php
	}


}
