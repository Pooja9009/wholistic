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

    <?php
        $banner = get_field('banner');
        if ($banner): ?>
        <div class="banner-img-block">
        <img src="<?php echo esc_url($banner['banner_image']['url']); ?>"
                     alt="<?php echo esc_attr($banner['banner_image']['alt']); ?>"/>
            <h1><?php echo $banner['title']; ?></h1>
            <div class="browse-button">
                <button>BROWSE THE GOODS</button>
            </div>
        </div>
        <div class="borderLine">
        </div>
        <?php endif; ?>


    <?php
        $ads = get_field('ads');
        if ($ads): ?>
        <div class="paragraph">
        <img src="<?php echo esc_url($ads['icon']['url']); ?>"
                     alt="<?php echo esc_attr($ads['icon']['alt']); ?>"/>
            <p><?php echo $ads['slogan']; ?></p>
            <p id="bold"><b> <?php echo $ads['question']; ?></b></p>
            <p><?php echo $ads['ans']; ?></p>
        </div>
        <?php endif; ?>


        <div class="curve-image-wrapper" style="background-image:url('<?php bloginfo("template_directory"); ?>/img/curvedHomeBackground.svg');">
        <?php
        $commit = get_field('commit');
        if ($commit): ?>
            <div class="curve-image">
                <p style="text-align: center; margin-top: 10rem;"><?php echo $commit['commitment']; ?></p>
                <img style="height: 25rem" src="<?php echo esc_url($commit['bottle_image']['url']); ?>"
                     alt="<?php echo esc_attr($commit['bottle_image']['alt']); ?>"/>
            </div>
            <?php endif; ?>
        </div>


        <div class="testimonials-content"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/plainHomepageBg.svg">
            <h3 class="testimonials-heading">TESTIMONIALS</h3>
            <div class="testimonials-column-wrapper">
                <div class="testimonials-column">
                    <img src="<?php bloginfo("template_directory"); ?>/img/testimonial1.svg">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna."</p> 
                        <p class="name-title">- Name, Title</p>
                </div>
                <div class="testimonials-column">
                    <img src="<?php bloginfo("template_directory"); ?>/img/testimonial2.svg">
                    <p >"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna."</p>
                        <p class="name-title">- Name, Title</p>
                </div>
                <div class="testimonials-column">
                    <img src="<?php bloginfo("template_directory"); ?>/img/testimonial3.svg">
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna."</p> 
                        <p class="name-title">- Name, Title</p>
                </div>
            </div>
        </div>

        
        <div class="homepage-card">
            <!-- <div class="cards-wrapper"> -->
            <div class="cards">
                <img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/homepageFirstcard.png">
                <h3>Start Here</h3>
                <p>Products to help you discover joy in your wellness journey.</p>
                <button class="card-button">BROWSE PRODUCTS</button>
            </div>
            <div class="cards">
                <img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/homepageSecondcard.png">
                <h3>Why Supplement?</h3>
                <p>Find out why supplements are a key piece of the wellness pie. Learn the ins and outs of
                    supplementation.</p>
                <button class="card-button">LEARN MORE</button>
            </div>
            <div class="cards">
                <img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                <h3>Find Wholistic Products</h3>
                <p>Browse Wholistic retailers near you.</p>
                <button class="card-button">FIND US</button>
            </div>
        </div>
        <!-- </div> -->

    </body>
</main><!-- #main -->

<?php
get_footer();