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
        $banner = get_field('banner');
        if ($banner): ?>
            <div class="product-banner-img"
                 style="background-image:url('<?php echo esc_url($banner['image']['url']); ?>')">
                <h1><?php echo $banner['title']; ?></h1>
            </div>
        <?php endif ?>


        <!-- --------------------------------------------------------------------------------- -->

        <div class="borderLine">
        </div>

        <?php
        $product = get_field('products');
        if ($product): ?>

        <div class="curved-product-bg"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/curvedBgProduct.png">
            <p><?php the_field('slogan'); ?></p>

            <label class="screen-reader-text" for="s">Search for:</label>
            <form id="search-form">
                <div class="form-group">
                    <input type="search" name="q" id="keyword" placeholder="<?php _e( 'Search for...', 'domain-name' ); ?>" maxlength="64" tabindex="1">
                    <span class="input-btn">
                    <button class="btn btn-custom" type="submit" tabindex="-1" onclick="fetchposts()"></button>
                    </span>
                </div>
            </form>
            <script>
                function fetchposts() {

                    const ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

                    const postdata = "action=product_search";

                    jQuery.post(ajaxurl, postdata, function (response) {

                        console.log(response);
                        $("#table-data").html(response); //post-container == table-data

                    });

                }

            </script>


            <div class="filter-buttons">
                <p style="padding-top:9px">Filter By:</p>
                <div>
                    <button onclick="<?php get_taxonomy('bone&joint') ?>">Bone & Joint</button>
                </div>
                <div>
                    <button>Foundational</button>
                </div>
                <div>
                    <button>Heart Health</button>
                </div>
                <div>
                    <button>Immune</button>
                </div>
                <div>
                    <button>Men’s Health</button>
                </div>
                <div>
                    <button>Sleep</button>
                </div>
                <div>
                    <button>Vision</button>
                </div>
                <div>
                    <button>Women’s Health</button>
                </div>
            </div>
        </div>
        <div class="all-products" id="table-data">


	            <?php foreach ($product as $post):

                setup_postdata($post); ?>

                <?php include 'product.php' ?>

	            <?php endforeach; ?>
	            <?php
	            // Reset the global post object so that the rest of the page works correctly.
	            wp_reset_postdata(); ?>


        </div>
        <?php endif; ?>

        </body>
    </main><!-- #main -->
<?php
get_footer();