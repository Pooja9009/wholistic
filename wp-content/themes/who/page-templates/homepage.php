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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(".banner-img-block").animate({opacity: 0}, 'slow', function() {
     $(this)
         .attr({'src': "<?php bloginfo("template_directory"); ?>/img/banner.png')"})
         .animate({opacity: 1});
});
    </script> -->
    <body id="home-page">
        <!-- <div class="banner-img-hover"> -->
        <div class="banner-img-block complete-your-care"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/Component 28 – 1@2x.png')"> 
            <h1 class=>COMPLETE <br> YOUR CARE</h1>
                <div class="browse-button">
                    <button>BROWSE THE GOODS</button>
                </div>
            </div>
<!-- </div> -->
            <div class="borderLine">
        </div>
        <div class="paragraph">
            <img src="<?php bloginfo("template_directory"); ?>/img/whoLogoSmall.png">
            <p>It's 7pm Thursday evening and you've popped into your local store to stock up on the supplements that you
                know you shuold be taking for your helath.You're greeted withe shelves upon shelves of options....</p>
            <p id="bold"><b>who knew there were so many brands to choose from for just vitamin D alone?</b></p>
            <p>It's normal to feel overwhelmed,and thst's why we're here for you.</p>
        </div>


        <div class="curve-image-wrapper"
            style="background-image:url('<?php bloginfo("template_directory"); ?>/img/curvedHomeBackground.svg');">
            <div class="curve-image">
                <p id="curve-text">We're committed to creating products that are
                    trustworthy, steeped in crystal-clear
                    scientific proof to
                    give you confidence, clarity and joy in your wellness journey. Whether you have specialized dietary
                    needs, or your goal is to level up your health, boost your energy levels, prevent injury or illness
                    or
                    slow down aging, we got you!
                </p>
                <img style="height: 25rem" src="<?php bloginfo("template_directory"); ?>/img/capsule.png"
                    alt="capsule" />
            </div>
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
                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
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
                <button style="margin-top: 3rem" class="card-button">BROWSE PRODUCTS</button>
            </div>
            <div class="cards">
                <img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/homepageSecondcard.png">
                <h3>Why Supplement?</h3>
                <p>Find out why supplements are a key piece of the wellness pie. Learn the ins and outs of
                    supplementation.</p>
                <button  style="margin-top: 5px" class="card-button">LEARN MORE</button>
            </div>
            <div class="cards">
                <img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                <h3>Find Wholistic Products</h3>
                <p>Browse Wholistic retailers near you.</p>
                <button style="margin-top: 3.3rem" class="card-button">FIND US</button>
            </div>
        </div>
        <!-- </div> -->

    </body>
</main><!-- #main -->

<?php
get_footer();