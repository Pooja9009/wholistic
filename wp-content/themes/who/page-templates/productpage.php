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
            style="background-image:url('<?php bloginfo("template_directory");?>/img/curvedBgProduct.png">
            <p><?php the_field ('slogan'); ?></p>
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" name="s" placeholder="Search Products" class="search-bar" onkeyup="show_result(this.value)">
            <div class="filter-buttons">
                <p style="padding-top:9px">Filter By:</p>
                <div><button>Bone & Joint</button></div>
                <div><button>Foundational</button></div>
                <div><button>Heart Health</button></div>
                <div><button>Immune</button></div>
                <div><button>Men’s Health</button></div>
                <div><button>Sleep</button></div>
                <div><button>Vision</button></div>
                <div><button>Women’s Health</button></div>
            </div>
        </div>
        <div class="all-products">
        
            <?php
            $product = get_field('products');
            if( $product ): ?>
                <ul>
                    <?php foreach( $product as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                                   
                    <div class="live_search">
                        <div class="product-hover"
                        style="background-image:url(<?php the_field( 'image' ); ?>)"> 
                        <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/B12product.png" />        
                        </div>
                        <div class="star-icon">
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="review"><?php the_field( 'reviews' ); ?> Reviews</span>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <p class="product-text"><?php the_field( 'content' ); ?></p>
                    </div>
                    <?php endforeach; ?>
                </ul>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>
        
        </div>



    </body>
</main><!-- #main -->
<?php
get_footer();