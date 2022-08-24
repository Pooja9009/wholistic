<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package who
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		custom_post_types_get_custom_template(); // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
