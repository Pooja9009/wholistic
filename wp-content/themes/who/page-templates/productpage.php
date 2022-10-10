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
 * @package who
 * Template name:productpage
 */

get_header();
?>
    <main id="primary" class="site-main">
        <body id="product-page">


		<?php
		$banner = get_field( 'banner' );
		if ( $banner ): ?>
            <div class="product-banner-img"
                 style="background-image:url('<?php echo esc_url( $banner['image']['url'] ); ?>')">
                <h1><?php echo $banner['title']; ?></h1>
            </div>
		<?php endif ?>


        <!-- --------------------------------------------------------------------------------- -->

        <div class="borderLine">
        </div>

		<?php
		$product = get_field( 'products' );
		if ( $product ): ?>

            <div class="curved-product-bg"
                 style="background-image:url('<?php bloginfo( "template_directory" ); ?>/img/curvedBgProduct.png">
                <p><?php the_field( 'slogan' ); ?></p>

                <label class="screen-reader-text" for="s">Search for:</label>
                <form id="search-form">
                    <div class="form-group">
                        <input type="search" name="q" id="keyword"
                               placeholder="<?php _e( 'Search for...', 'domain-name' ); ?>" maxlength="64" tabindex="1">
                        <span class="input-btn">
                    <button class="btn btn-custom" type="submit" tabindex="-1" onclick="fetchposts()"></button>
                    </span>
                    </div>
                </form>

                <div class="filter-buttons" id="filter">
                    <p style="padding-top:9px">Filter By:</p>
                    <div>
						<?php
						$categories = get_terms( 'category', array(
							'hide_empty' => false,
						) );
						// print_r($categories);
						foreach ( $categories as $category ) { ?>

                            <button type="button" name="category[]"
                                    onclick="filterposts()"><?php echo $category->name; ?></button>

							<?php

						}
						?>
                    </div>
                </div>
            </div>
            <div class="all-products" id="table-data">


				<?php foreach ( $product as $post ):

					setup_postdata( $post ); ?>

					<?php include 'product.php' ?>

				<?php endforeach; ?>
				<?php
				// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>

            </div>
		<?php endif; ?>

        <script>
            function fetchposts() {

                const ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

                const postdata = "action=product_search";

                jQuery.post(ajaxurl, postdata, function (response) {

                    console.log(response);
                    $("#table-data").html(response); //post-container == table-data

                });

            }

            function filterposts() {
                $("body").css("opacity", ".5");
                const ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
                const postdata = "action=filter";
                jQuery.post(ajaxurl, postdata, function (response) {
                    $("#table-data").html(response);
                    console.log(response);
                }).done(function () {
                    $("body").css("opacity", "1");
                });

            }

        </script>

        </body>
    </main><!-- #main -->
<?php
get_footer();