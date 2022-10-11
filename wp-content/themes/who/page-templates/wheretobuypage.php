<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wheretobuypage
 * Template name:where
 */

get_header();
?>

    <main id="primary" class="site-main">

        <body id="where-to-buy">
        <div class="where-banner"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/whereBanner.png">
            <h1>WHERE TO BUY</h1>
        </div>
        <div class="borderLine">
        </div>
        <div class="map-block">
            <div class="map-first-block">
                <label>Your location
                    <input type="text" id="location"/>
                </label>
                <label>Search radius
                    <input type="number" id="radius"/>
                </label>
                <label>Results
                    <input type="number" id="results"/>
                </label>
                <input type="submit" value="Search">

            </div>

            <div class="map-second-block">
                <?php
                $storeData = [];
                $where     = get_field( 'location' );
                if ( $where ): ?>
                <div class="locations">
                    <div class="location-details" data-lat="" data-lng=""  >

                        <?php include 'page-where-to-buy.php'?>

                        <p>446.7 km</p>
                        <p class="direction">Directions</p>
                    </div>
                </div>

                <?php endif; ?>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d170698.83670961153!2d-106.86108463029201!3d52.192416168649494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f67f0ec08fe5%3A0x3618626fc8cc8f0b!2sNutters%20Everyday%20Naturals!5e0!3m2!1sen!2snp!4v1662375941129!5m2!1sen!2snp"
                            width="675" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="last-block">
            <h3>GOT ANY QUESTIONS?</h3>
            <div class="browse button">
                <button>CONTACT US</button>
            </div>
        </div>

        </body>
    </main><!-- #main -->



<?php
get_footer();