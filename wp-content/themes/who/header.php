<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package who
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'who' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php 
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$who_description = get_bloginfo( 'description', 'display' );
			if ( $who_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $who_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			 <a class="wholistic-logo" href="/who" style="width:150px; height:165px; padding1rem">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/wholisticLogo.png" alt="wholistic Logo">
			</a>
	         <!-- <span class="search-btn"></span>
			  <span class ="dashicons dashicons-search">
			 </span> -->

			<!-- <button class="search-icon" style="font-size:0.5rem">Button <i class="fa fa-search"></i></button> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'who' ); ?> -->
			
			 <span class="dashicons dashicons-menu menu-icon menu-toggle" aria-expanded="false"></span>
			
		<!-- </button> -->
		
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			
			
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
