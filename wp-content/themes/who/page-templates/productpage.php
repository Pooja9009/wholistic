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

        <div class="curved-product-bg"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/curvedBgProduct.png">
            <p><?php the_field('slogan'); ?></p>

            <label class="screen-reader-text" for="s">Search for:</label>
            <div id="productPageSearch"
                 class="et_pb_with_border et_pb_module et_pb_search et_pb_search_0 ds-icon-search  et_pb_text_align_left et_pb_bg_layout_light">

                <form role="search" method="get" class="et_pb_searchform" action="https://who.blmprojects.com/">
                    <div>
                        <label class="screen-reader-text" for="s">Search for:</label>
                        <input type="text" name="s" placeholder="Search Products" class="et_pb_s"/>
                        <input type="hidden" name="et_pb_searchform_submit" value="et_search_proccess"/>

                        <input type="hidden" name="et_pb_include_posts" value="yes"/>
                        <input type="hidden" name="et_pb_include_pages" value="yes"/>
                        <input type="submit" value="Search" class="et_pb_searchsubmit">
                    </div>
                </form>
            </div>

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

            <?php
            $product = get_field('products');
            if ($product): ?>
                <ul class="list" style="display: flex;
            flex-wrap: wrap;     justify-content: space-evenly;
            padding: 0px 50px 0px 50px;">
                    <?php foreach ($product as $post):

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>

                        <div class="live_search" id="ajax" style="width: 300px; ">
                            <img class="hover-img" src="<?php bloginfo("template_directory"); ?>/img/productHover.jpg">
                            <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/B12product.png"/>
                            <div class="star-icon">
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="review"><?php the_field('reviews'); ?> Reviews</span>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <p class="product-text"><?php the_field('content'); ?></p>
                        </div>
                    <?php endforeach; ?>
                </ul>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>

        <!-- <script>

            
            function fetchposts() {

            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

                var postdata = "action=my_ajax_action";

                jQuery.post(ajaxurl, postdata, function (response) {

                    console.log(response);
                    $("#table-data").html(response);
                    
                });

            }
             -->
        </script>

        </body>
    </main><!-- #main -->
<?php
get_footer();