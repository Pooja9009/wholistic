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

<!-- --------------------------------------------------------------------------------- -->
<?php
$banner = get_field('banner');
if ($banner): ?>
<div class="where-banner"
            style="background-image:url(<?php echo esc_url($banner['image']['url']); ?>)">
            <h1><?php echo $banner['title']; ?></h1>
        </div>
        <?php endif ?>

<!-- --------------------------------------------------------------------------------- -->

        <div class="borderLine">
        </div>
        <div class="map-block">
</div>

<!-- --------------------------------------------------------------------------------- -->
<?php
$query = get_field('query');
if ($query): ?>
<div class="last-block">
<h3><?php echo $query['question']; ?></h3>
    <div class="browse button">
    <button><?php echo $query['contact']; ?></button>
</div>
</div>
<?php endif ?>

</body>
</main><!-- #main -->
<?php
get_footer();