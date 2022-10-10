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
        <!-- <?php
        $banner = get_field('banner');
        if( $banner ): ?>
        <div class="product-banner-img"
            style="background-image:url('<?php echo esc_url( $banner['image']['url'] ); ?>')">
            <h1><?php echo $banner['title']; ?></h1>
        </div>
        <?php endif; ?> -->
        <div class="product-banner-img"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/bannerProduct.png">
            <h1>SUPPLEMENTS, SIMPLIFIED</h1>
        </div>
        <div class="borderLine">
        </div>
        <div class="curved-product-bg"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/curvedBgProduct.png">
            <p>No wondering. No guessing. Just quality supplements that give you confidence in your wellness journey.
            </p>
            <div class="search-box">
                <label class="screen-reader-text" for="s">Search for:</label>
                <input type="text" name="s" placeholder="Search Products" class="search-bar">
                <i class="fa fa-search search-icon"></i>
            </div>
            <div class="filter-buttons">
                <p style="padding-top:9px">Filter By:</p>


                <!-- <i class="fa fa-search"></i> -->
                <!-- <button id="bone-joint" onclick="fetchposts()">Bone & Joint</button> -->
                <div class="by-button"><button>Bone & Joint</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <!-- <div id="postconatiner"></div> -->
                <div class="by-button"><button>Foundational</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <div class="by-button"><button>Heart Health</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <div class="by-button"><button>Immune</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <div class="by-button"><button>Men’s Health</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <div class="by-button"><button>Sleep</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <div class="by-button"><button>Vision</button>
                    <i class="fa fa-close button-close"></i>
                </div>
                <div class="by-button"><button>Women’s Health</button>
                    <i class="fa fa-close button-close"></i>
                </div>

            </div>
        </div>
        <div class="all-products">
            <div class="product">

                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/B12product.png" />

                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">14 Reviews</span>
                </div>
                <h2>B12</h2>
                <p class="product-text">Mood-boosting and blood-building vitamin B12 is an essential nutrient
                    that...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">

                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/coQ10Product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">
                        84 Reviews</span>
                </div>
                <h2>COQ10</h2>
                <p class="product-text">Show your heart some love at the cellular level with highly
                    absorbable,...
                </p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D3+K2product.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">67 Reviews</span>
                </div>
                <h2>D3 + K2</h2>
                <p class="product-text">WHOLISTICs D3 + K2 provides two essential bone-building nutrients in
                    one...
                </p>
            </div>
            <div class="product">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D3100product.png" />
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="review">114 Reviews</span>
                </div>
                <h2>D3 1000 IU</h2>
                <p class="product-text">Vitamin D3 is a hardworking nutrient, performing various jobs in your
                    body....</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D32500UIproduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">57 Reviews</span>
                </div>
                <h2>D3 2500 IU</h2>
                <p class="product-text">Do your vitamin D3 levels need a boost? D3 2500IU packs a potent punch
                    of
                    the...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/folicAcidProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">105 Reviews</span>
                </div>
                <h2>FOLIC ACID</h2>
                <p class="product-text">Folic acid is extremely important for your health, especially during...
                </p>

            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">51 Reviews</span>
                </div>
                <h2>K2</h2>
                <p class="product-text">Strong bones protect your internal organs and provide support for
                    your...
                </p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">36 Reviews</span>
                </div>
                <h2>LUTEIN + ZEAXANTHIN</h2>
                <p class="product-text">We all want to keep our eyes as healthy as possible for as long as
                    possible,...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/lycopeneProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="review">9 Reviews</span>
                </div>
                <h2>LYCOPENE+</h2>
                <p class="product-text">Prostate conditions become increasingly common as men age, with up to
                    90%
                    of...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">33 Reviews</span>
                    <h2>MAGNESIUM CITRATE</h2>
                    <p class="product-text">Magnesium is one of the most important minerals in the body. This
                        particular...</p>
                </div>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">14 Reviews</span>
                </div>
                <h2>MELATONIN + GABA</h2>
                <p class="product-text">Fall asleep and stay asleep with this dreamy duo. Sleep deficiency is
                    often...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">48 Reviews</span>
                </div>
                <h2>OMEGA 3</h2>
                <p class="product-text">The oh-so-mighty Omega-3 provides high-potency EPA and DHA to help
                    support...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/tumericProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">85 Reviews</span>
                </div>
                <h2>TURMERIC</h2>
                <p class="product-text">Turmeric has traditionally been used in herbal medicine to reduce...</p>
            </div>
            <div class="product">
                <img class="hover-img" src="<?php bloginfo("template_directory");?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" />
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review">24 Reviews</span>
                </div>
                <h2>ZINC+C</h2>
                <p class="product-text">WHOLISTICs Zinc+C delivers key immunity-supporting nutrients to keep
                    your...</p>
            </div>
        </div>



    </body>
</main><!-- #main -->
<?php
get_footer();