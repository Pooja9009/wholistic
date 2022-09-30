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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script>
        window.wp_ajax_url = "<?= home_url().'/wp-admin/admin-ajax.php' ?>";
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'who' ); ?></a>

        <header id="masthead" class="site-header">
            <!-- <div class="site-branding">
			<?php 
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( 'wordpress/home' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
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
		</div> -->

            <nav id="site-navigation" class="main-navigation">
                <a class="wholistic-logo" href="wordpress/home">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/wholisticLogo.png" alt="wholistic Logo">
                </a>
                <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'who' ); ?> -->
                <span class="dashicons dashicons-search hide-above-sm"></span>
                <span class="dashicons dashicons-menu menu-icon menu-toggle hide-above-sm" aria-expanded="false"></span>

                <!-- </button> -->

                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
            <div id="search-bar" style="display:none">
                <input id="search-icon" type="search" placeholder="Browse Products">
                <i class="fa fa-close" id="search-close" style="cursor:pointer;"></i>
            </div>
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
         <script type="text/JavaScript">
            var searchShown = false;
            $(document).ready(function () {
                $('.search-btn').click(function () {
                    searchShown = true;
                    $('.menu-menu-1-container').hide();
                    $("#search-bar").show();
                });
                $('#primary,#search-close').click(function () { 
                    if(searchShown){
                        searchShown=false;
                   $("#search-bar").hide();
                   $('.menu-menu-1-container').show();
                    }
                });
                
            });
            $(document).ready(function () {
                $('#search-sm').click(function(){
                    searchShown = true;
                    $('.menu-icon,#search-sm').hide();
                    $('#search-bar').show();
                });
                $("#primary,#search-close").click(function () {
                    if(searchShown){
                        searchShown=false;
                    $('.menu-icon,#search-sm').show();
                    }
                });
            });
    </script> 
  
                
            <script>
            var className = "inverted";
            var scrollTrigger = 60;

            window.onscroll = function() {
                // We add pageYOffset for compatibility with IE.
                if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
                    document.getElementsByTagName("header")[0].classList.add(className);
                } else {
                    document.getElementsByTagName("header")[0].classList.remove(className);
                }
            };
            </script>



        </header><!-- #masthead -->