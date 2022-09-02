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
 * Template name:thesciencepage
 */

get_header();
?>
    <main id="primary" class="site-main">

        <body id="the-science-page">

        <!-- ----------------------------------------------banner---------------------------------------------------- -->

        <?php
        $banner = get_field('banner');
        if ($banner): ?>
            <div class="science-banner"
                 style="background-image:url('<?php echo esc_url($banner['image']['url']); ?>')">
                <h1><?php echo $banner['title']; ?></h1>
            </div>
        <?php endif; ?>


        <div class="borderLine">
        </div>

        <!-- -------------------------------------------supplement------------------------------------------ -->

        <?php
        $supplement = get_field('supplement');
        if ($supplement): ?>
        <p class="first-block"><?php echo $supplement['phrases']; ?></p>


        <!-- </div> -->
        <div class="second-block">
            <div class="logo">
                <img src="<?php echo esc_url($supplement['logo']['url']); ?>">
            </div>
            <h3><?php echo $supplement['title']; ?></h3>

            <?php endif; ?>


            <!-- --------------------------------------------supplement card-------------------------------------------- -->
            <div class="science-card">

                <!-- ------------------------------Box 1------------------------------- -->

                <div class="card">
                <?php
                if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                    if (have_rows('box1')): while (have_rows('box1')) : the_row();

                $image = get_sub_field('image');
            ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>
                    <h2 style="padding:0 0.5rem">
                        <?php
                        if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?>
                    </h2>

                    <p style="padding:0.5rem 0.5rem"><?php
                        if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>

                    <p style="float:right; padding: 0 1rem 0 0;">READ MORE ></p>
                </div>

                <!-- ------------------------------Box 2------------------------------- -->

                <div class="card">
                <?php
                if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                    if (have_rows('box2')): while (have_rows('box2')) : the_row();

                $image = get_sub_field('image');
                ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>
                    <h2 style="padding: 0 2rem;"><?php
                        if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h2>

                    <p><?php
                        if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>

                    <p style="float:right;padding: 1.2rem 1rem 0 0;">READ MORE ></p>
                </div>

                <!-- ------------------------------Box 3------------------------------- -->


                <div class="card">
                <?php
                if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                    if (have_rows('box3')): while (have_rows('box3')) : the_row();

                $image = get_sub_field('image');
            ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>

                    <h2 style="padding-bottom: 1rem;"><?php
                        if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h2>

                    <p><?php
                        if (have_rows('supplement')): while (have_rows('supplement')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>

                    <p style="float:right; padding: 1.2rem 1rem 0 0;">READ MORE ></p>
                </div>
            </div>

            <!-- ------------------------------------------Ingredient---------------------------------------------------- -->

            <div class="more-pages">
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>...</button>
                <button>>></button>
                <button>Last>></button>
            </div>
        </div>

        <!-- -------------------------------------------intimate-------------------------------------------- -->

        <?php
        $intimate = get_field('intimate');
        if ($intimate): ?>
        <div class="third-block"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/plainBGscience.svg">
            <h3><?php echo $intimate['title']; ?></h3>
            <?php endif; ?>


            <div class="third-block-cards">

                <!-- ------------------------------Box 1--------------------------------- -->

                <div class="card">
                <?php
                if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                    if (have_rows('box1')): while (have_rows('box1')) : the_row();

                $image = get_sub_field('image');
                ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>
                    <h2><?php
                        if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h2>
                    <p style="padding:0rem 0.5rem 0.2rem 0.5rem"><?php
                        if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                            if (have_rows('box1')): while (have_rows('box1')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>
                    <p style="float:right; padding: 0 1rem 0 0;">READ MORE ></p>
                </div>

           <!-- ------------------------------Box 2---------------------------------------------- -->

                <div class="card">
                <?php
                if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                    if (have_rows('box2')): while (have_rows('box2')) : the_row();

                $image = get_sub_field('image');
                ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>
                    <h2><?php
                        if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h2>
                    <p style="padding:0rem 0.5rem 0.2rem 0.5rem"><?php
                        if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                            if (have_rows('box2')): while (have_rows('box2')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>
                    <p style="float:right;padding: 1.2rem 1rem 0 0;">READ MORE ></p>
                </div>

           <!-- ------------------------------Box 3---------------------------------------------- -->

                <div class="card">
                <?php
                if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                    if (have_rows('box3')): while (have_rows('box3')) : the_row();

                $image = get_sub_field('image');
                ?>
                <img class="card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                <?php endwhile; 
                 endif; 
                 endwhile; 
                 endif; ?>
                    <h2><?php
                        if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('title');
                            endwhile; endif;
                        endwhile; endif;
                        ?></h2>
                    <p  style="padding:0rem 0.5rem 0.2rem 0.5rem"><?php
                        if (have_rows('intimate')): while (have_rows('intimate')) : the_row();
                            if (have_rows('box3')): while (have_rows('box3')) : the_row();
                                the_sub_field('text');
                            endwhile; endif;
                        endwhile; endif;
                        ?></p>
                    <p style="float:right;padding: 0 1rem 0 0;">READ MORE ></p>
                </div>
            </div>
            <div class="more-pages">
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>...</button>
                <button>>></button>
                <button>Last>></button>
            </div>
        </div>

<!-- -----------------------------------ready--------------------- -->

        <?php
        $ready = get_field('ready');
        if ($ready): ?>
        <div class="fourth-block">
            <h3><?php echo $ready['query']; ?></h3>
            <div class="browse button">
                <button><?php echo $ready['button']; ?></button>
            </div>
        </div>
        <?php endif; ?>
        </body>

    </main><!-- #main -->
<?php
get_footer();