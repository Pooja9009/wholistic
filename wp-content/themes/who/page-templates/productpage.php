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
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" name="s" placeholder="Search Products" class="search-bar">
            <div class="filter-buttons">
                <p>Filter By:</p>
                <button>Bone & Joint</button>
                <button>Foundational</button>
                <button>Heart Health</button>
                <button>Immune</button>
                <button>Men’s Health</button>
                <button>Sleep</button>
                <button>Vision</button>
                <button>Women’s Health</button>
            </div>
        </div>
        <div class="all-products">
            <div class="product">
                <div class="product-content">
                <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/B12product.png" />
                <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                <h2>B12</h2>
                <p class="product-text">Mood-boosting and blood-building vitamin B12 is an essential nutrient that...</p>
</div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/coQ10Product.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>COQ10</h2>
                    <p  class="product-text">Show your heart some love at the cellular level with highly absorbable,...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D3+K2product.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>D3 + K2</h2>
                    <p  class="product-text">WHOLISTICs D3 + K2 provides two essential bone-building nutrients in one...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D3100product.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>D3 1000 IU</h2>
                    <p  class="product-text">Vitamin D3 is a hardworking nutrient, performing various jobs in your body....</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/D32500UIproduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>D3 2500 IU</h2>
                    <p  class="product-text">Do your vitamin D3 levels need a boost? D3 2500IU packs a potent punch of the...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/folicAcidProduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>FOLIC ACID</h2>
                    <p  class="product-text">Folic acid is extremely important for your health, especially during...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/K2product.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>K2</h2>
                    <p  class="product-text">Strong bones protect your internal organs and provide support for your...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img"src="<?php bloginfo("template_directory"); ?>/img/luteinProduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>LUTEIN + ZEAXANTHIN</h2>
                    <p  class="product-text">We all want to keep our eyes as healthy as possible for as long as possible,...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/lycopeneProduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>LYCOPENE+</h2>
                    <p  class="product-text">Prostate conditions become increasingly common as men age, with up to 90% of...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>MAGNESIUM CITRATE</h2>
                    <p  class="product-text">Magnesium is one of the most important minerals in the body. This particular...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>MELATONIN + GABA</h2>
                    <p  class="product-text">Fall asleep and stay asleep with this dreamy duo. Sleep deficiency is often...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/omega3Product.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>OMEGA 3</h2>
                    <p  class="product-text">The oh-so-mighty Omega-3 provides high-potency EPA and DHA to help support...</p>
                </div>
            </div>
            <div class="product">
                <div class="product-content">
                    <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/tumericProduct.png" />
                    <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>TURMERIC</h2>
                    <p  class="product-text">Turmeric has traditionally been used in herbal medicine to reduce...</p>
                </div>
            </div>
            <div class="product">
                <img  class="product-img" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" />
                <div class="product-content">
                <div class="star-icon">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
</div>
                    <h2>ZINC+C</h2>
                    <p  class="product-text">WHOLISTICs Zinc+C delivers key immunity-supporting nutrients to keep your...</p>
                </div>
            </div>


        </div>
    </body>
</main><!-- #main -->
<?php
get_footer();