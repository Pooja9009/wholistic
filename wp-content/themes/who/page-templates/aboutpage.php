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
 * Template name:aboutpage
 */

get_header();
?>
    <main id="primary" class="site-main">

        <body id="aboutPage">
        <div class="about-banner"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/aboutBanner.png')">
            <h1>WHO ARE WE?</h1>
        </div>
        <div class="borderLine">
        </div>
        <div class="paragraph">
            <p>We know that navigating the supplement sphere can feel overwhelming with all the lotions,potions,pills
                and<br> powders available.But wellness doesn't have to be complicated!</p>
        </div>
        <div class="about-background"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/aboutBackground.png')">
            <div class="row">
                <div class="content">

                    <h3>OUR ROOTS</h3>
                    <p>
                        Our sister company, Advanced Orthomolecular Research (AOR), has created
                        one-of-a-kind,
                        evidence-based formulas for over three decades. As part of this, AOR has partnered with over 30+
                        universities worldwide to research and develop award-winning nutritional supplements. In the
                        90s, AOR founder Dr. Traj Nibber spotted a need for filler-free therapeutic-grade vitamin and
                        mineral supplements. His clean compounding approach led to high-dose nutrient formulas that
                        offered better options to maximize quality of life and lifespan for the AIDS community. Dr. Traj
                        made these therapies free of charge for four years, at which point he opened Holistic
                        International Inc. to manufacture and distribute premium nutraceuticals.</p>
                </div>
                <img class="image" src="<?php bloginfo("template_directory"); ?>/img/zincTablet.png"/>
            </div>
            <div class="row flex-reverse">
                <div class="content">

                    <p>Dr. Traj created Wholistic as a nod to where we began – it’s founded on the belief
                        that
                        individuals and communities thrive with proper nutritional nourishment. To simplify the science,
                        we offer evidence-based natural health products to keep your cells happy and performing their
                        best.</p>
                    <p>We want you to know what it feels like to feel great from the inside out.
                    <h3> We’re Wholistic
                        – it’s lovely to meet you.</h3></p>
                </div>
                <img class="image" src="<?php bloginfo("template_directory"); ?>/img/zincTablet2.png"/>
            </div>
        </div>
        <div class="about-second-banner"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/aboutBanner2.png')">
            <div class="about-second-bannerContent">
                <h3>ACHIEVING WHOL(ISTIC) WELLNESS</h3>
                <p>Countless reasons can lead you to the beginning of your supplement journey: injury or illness
                    prevention, slowing down the effects of aging, boosting energy levels or supplementing specialized
                    dietary needs. Or it might simply be to level-up your health! </p>
                <p>Whatever brought you to us – Wholistic is here to help you complete your wellness journey and
                    experience better health from within.</p>
            </div>
        </div>
        <div class="last-block-wrapper">
            <div class="last-block">
                <img src="<?php bloginfo("template_directory"); ?>/img/whoLogoSmall.png">
                <h2>THE WHOLE TRUTH</h2>
                <p>No half-truths or pseudoscience here - just evidence-based formulas that ungergo through quality
                    checks and
                    the Health Canada stamp of aaproval. Find supplements that will help you achieve your wellness hoals
                    and
                    maintain optimal health.</p>
            </div>
        </div>
    </main><!-- #main -->
<?php
get_footer();