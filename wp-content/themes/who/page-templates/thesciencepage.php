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
        <div class="science-banner"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/scienceBanner.png">
            <h1>SCIENCE MADE SIMPLE</h1>
        </div>
        <div class="borderLine">
        </div>
        <!-- <div class="first-block"> -->
        <p class="first-block">We know that navigating the supplement sphere can feel overwhelming. When the science is
            simplified, we can bring confidence, clarity and joy to your wellness journey.</p>
        <!-- </div> -->
        <div class="second-block">
            <div class="logo">
            <img  src="<?php bloginfo("template_directory"); ?>/img/whoLogoSmall.png">
</div>
            <h3>SUPPLEMENTS 101</h3>
            <div class="science-card">
                <div class="card">
                    <img src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                    <h2>Curabitur tempor neque vitae magna porta fermentum?</h2>
                    <p>Aenean efficitur mauris ex, sit amet egestas diam vestibulum sit amet. Cras pretium...</p>
                    <p style="float:right; padding: 0 1rem 0 0;">READ MORE ></p>
                </div>
                <div class="card">
                    <img src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                    <h2>Maecenas nec placerat lectus</h2>
                    <p>Fusce nec magna eget dui aliquam feugiat nec eu est. Vivamus finibus arcu nec justo...</p>
                    <!-- <p style="float:right">READ MORE ></p> -->
                     <p style="float:right;padding: 1.2rem 1rem 0 0;">READ MORE ></p>
                    
                </div>
                <div class="card">
                    <img src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                    <h2>Lorem Ipsum doler</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
                    <!-- <p style="float:right">READ MORE ></p> -->
                    <p style="float:right; padding: 1.2rem 1rem 0 0;">READ MORE ></p>
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
        <div class="third-block"
        style="background-image:url('<?php bloginfo("template_directory");?>/img/plainBGscience.svg">
        <h3>GET INTIMATE WITH INGREDIENTS</h3>
        <div class="third-block-cards">
        <div class="card">
                    <img src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                    <h2>Ingredient 6</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
                    <p style="float:right; padding: 0 1rem 0 0;">READ MORE ></p>
                </div>
                <div class="card">
                    <img src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                    <h2>Suspendisse</h2>
                    <p>Vestibulum porttitor dignissim lectus aliquet blandit. Cras at vestibulum sapien....</p>
                    <p style="float:right;padding: 1.2rem 1rem 0 0;">READ MORE ></p>
                </div>
                <div class="card">
                    <img src="<?php bloginfo("template_directory"); ?>/img/homepageThirdcard.png">
                    <h2>Curabitur vitae</h2>
                    <p>Aliquam in risus sit amet ex fringilla tempor ac nec nisi. Fusce eros lacus, molestie...</p>
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
<div class="fourth-block">
    <h3>READY TO PUT THE SCIENCE TO WORK?</h3>
    <div class="browse button">
    <button >BROWSE PRODUCTS</button>
</div>
</div>
    </body>

</main><!-- #main -->
<?php
get_footer();