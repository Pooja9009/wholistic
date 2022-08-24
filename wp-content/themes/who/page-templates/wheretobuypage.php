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
            style="background-image:url('<?php bloginfo("template_directory");?>/img/whereBanner.png">
            <h1>WHERE TO BUY</h1>
        </div>
        <div class="borderLine">
        </div>
        <div class="map-block">
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