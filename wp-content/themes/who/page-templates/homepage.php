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
 * Template name:homepage
 */

get_header();
?>
    <main id="primary" class="site-main">

        <body id="home-page">
<!-- ---------------------------------------Banner-------------------------------------- -->
        <?php

        $banner = get_field('banner');  //assigning a variable to get every field of banner group
        if ($banner): ?>
            <div class="banner-img-block"
                 style="background-image:url('<?php echo esc_url($banner['image']['url']); ?>')">  <!-- printing image from style-->
                <h1><?php echo $banner['text']; ?></h1>   <!-- printing title field from group banner -->
                <div class="browse-button">
                    <button><?php echo $banner['button']; ?></button>  <!-- printing buttton field from group banner -->
                </div>
            </div>
        <?php endif; ?>

        <div class="borderLine">
        </div>1

<!-- ----------------------------------------ads---------------------------------------- -->

        <?php
        $ads = get_field('ads');   //assigning a variable to get every field of ads group
        if ($ads): ?>
            <div class="paragraph">
                <img src="<?php echo esc_url($ads['logo']['url']); ?>">  <!-- printing logo  field from group ads -->
                <p><?php echo $ads['slogan']; ?></p>   <!-- printing slogan field from group ads -->
                <p id="bold"><b><?php echo $ads['ques']; ?></b></p> <!-- printing question field from group ads -->
                <p><?php echo $ads['ans']; ?></p>  <!-- printing ans  field from group ads -->
            </div>
        <?php endif; ?>

<!-- ------------------------------------Commit---------------------------------------- -->


        <div class="curve-image-wrapper"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/curvedHomeBackground.svg');">
            <?php
            $commit = get_field('commit');  //asigning a variable to get fields of commit group
            if ($commit): ?>
                <div class="curve-image">
                    <p style="text-align: center; margin-top: 10rem;"><?php echo $commit['text']; ?>   <!-- getting text from commitment field  -->
                    </p>
                    <img style="height: 25rem" src="<?php echo esc_url($commit['image']['url']); ?>"      
                         alt="<?php echo esc_attr($commit['image']['alt']); ?>"/>   <!-- image from group commit-->
                </div>
            <?php endif; ?>
        </div>

<!-- -----------------------------------Testimonials------------------------------------ -->

        <div class="testimonials-content"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/plainHomepageBg.svg">
            <h3 class="testimonials-heading">TESTIMONIALS</h3>
            <?php
            $testimonial = get_field('testimonial');
            if( $testimonial ): ?>
                <ul>
                    <?php foreach( $testimonial as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                                   
        
            <div class="testimonials-column-wrapper">
         
                    <div class="testimonials-column">
                        <img src="<?php bloginfo("template_directory"); ?>/img/testimonial1.svg">
                        <p><?php the_field( 'reviews' ); ?></p>
                        <p class="name-title"><?php the_title(); ?></p>
                    </div>
                    
                    </div>
                    <?php endforeach; ?>
                </ul>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

<!-- --------------------------------------------------Info Box---------------------------------------------- -->

        <div class="homepage-card">
           
        <!-- -----------------------------Box 1-------------------------------------------- -->
            <div class="cards">
            <?php
                if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                    if (have_rows('box1')): while (have_rows('box1')) : the_row();

                $image = get_sub_field('image');
            ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>

                <h3><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h3>

                <p><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>
                        <button class="card-button"><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('button');
                            endwhile; endif;
                        endwhile; endif;
                        ?></button>
            </div>

<!-- ---------------------------------Box 2------------------------------- -->

            <div class="cards">
            <?php
                if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                    if (have_rows('box2')): while (have_rows('box2')) : the_row();

                $image = get_sub_field('image');
            ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>
                <h3><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h3>
                <p><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>
                <button class="card-button"><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('button');
                            endwhile; endif;
                        endwhile; endif;
                        ?></button>
            </div>

<!-- ------------------------------Box 3---------------------------------- -->

            <div class="cards">
            <?php
                if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                    if (have_rows('box3')): while (have_rows('box3')) : the_row();

                $image = get_sub_field('image');
            ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>

                <h3><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h3>
                <p><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>
                <button class="card-button"><?php
                        if (have_rows('info_box')): while (have_rows('info_box')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('button');
                            endwhile; endif;
                        endwhile; endif;
                        ?></button>
            </div>
        </div>

        </body>
    </main>

<?php
get_footer();