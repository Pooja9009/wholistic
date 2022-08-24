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
    <p>No wondering. No guessing. Just quality supplements that give you confidence in your wellness journey.</p>
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
    <img src="<?php bloginfo("template_directory"); ?>/img/B12product.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/coQ10Product.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/D3+K2product.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/D3100product.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/D32500UIproduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/folicAcidProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/K2product.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/luteinProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/lycopeneProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/omega3Product.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/tumericProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>
<div class="product">
    <img src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png"/> 
    <p></p>
    <h2></h2>
    <p></p>
</div>


</div>
</body>
</main><!-- #main -->
<?php
get_footer();