<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package who
 * Template name:Home
 */

get_header();
?>

    <main id="primary" class="site-main">

        <!--------------------------------------------------Banner----------------------------------------------->
        <?php

        $banner = get_field('banner');
        if ($banner): ?>
            <div id="banner">
                <img src="<?php echo esc_url($banner['banner_image']['url']); ?>"
                     alt="<?php echo esc_attr($banner['banner_image']['alt']); ?>"/>
                <?php echo $banner['title']; ?>
            </div>
        <?php endif; ?>

        <!--------------------------------------------------ads----------------------------------------------->

        <?php

        $ads = get_field('ads');
        if ($ads): ?>
            <div id="ads">
                <img src="<?php echo esc_url($ads['icon']['url']); ?>"
                     alt="<?php echo esc_attr($ads['icon']['alt']); ?>"/>
                <?php echo $ads['question']; ?>
                <?php echo $ads['ans']; ?>
                <?php echo $ads['slogan']; ?>
            </div>
        <?php endif; ?>

        <!--------------------------------------------------Commit----------------------------------------------->
        <?php

        $commit = get_field('commit');
        if ($commit): ?>
            <div id="commit">
                <?php echo $commit['commitment']; ?>
                <img src="<?php echo esc_url($commit['bottle_image']['url']); ?>"
                     alt="<?php echo esc_attr($commit['bottle_image']['alt']); ?>"/>
            </div>
        <?php endif; ?>

        <!--------------------------------------------------testimonial----------------------------------------------->
        <?php
        $testimonial= get_field('testimonial');
        if( $testimonial ): ?>
            <ul>
                <?php foreach( $testimonial as $post ):

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <span>A custom field from this post: <?php the_field( 'field_name' ); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>

        <!--------------------------------------------------Info Box----------------------------------------------->
        <?php

        $info_box = get_field('info_box');
        if ($info_box): ?>
            <?php
            $box1 = get_field('box1');
            if($box1): ?>
            <div id="box1">
                <img src="<?php echo esc_url($box1['image']['url']); ?>"
                     alt="<?php echo esc_attr($box1['image']['alt']); ?>"/>
                <?php echo $box1['title']; ?>
            </div>
            <?php endif; ?>
        <?php endif; ?>


    </main><!-- #main -->

<?php
get_footer();
