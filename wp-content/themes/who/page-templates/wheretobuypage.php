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
             style="background-image:url('<?php bloginfo( "template_directory" ); ?>/img/whereBanner.png">
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


			<?php
			$storeData = [];
			$allStores = get_field( 'location' );
			if ( $allStores ): ?>
				<?php /** @var WP_Post[] $allStores */
				foreach ( $allStores as $singleStore ): ?>
					<?php setup_postdata( $singleStore ); ?>
					<?php $title = get_the_title( $singleStore );
					$ID          = $singleStore->ID;
					$address1    = get_field( 'address1', $singleStore );
					$address2    = get_field( 'address2', $singleStore );

					$address3    = get_field( 'address3', $singleStore );
					$coordinates = get_field( 'map', $singleStore );

					$lat         = $coordinates ? $coordinates['lat'] : '';
					$lng         = $coordinates ? $coordinates['lng'] : '';
					$storeData[] = compact( 'ID', 'title', 'address1', 'address2', 'address3', 'coordinates', 'lat', 'lng' ); ?>

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

            <div class="map-second-block">
				<?php include 'SliderLocation.php' ?>
				<?php include 'map.php' ?>

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