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
        <?php
        $banner = get_field('banner');
        if ($banner): ?>

        <div class="about-banner"
             style="background-image:url('<?php echo esc_url($banner['image']['url']); ?>')">
            <h1><?php echo $banner['text']; ?></h1>
        </div>


        <div class="borderLine">
        </div>
        <div class="paragraph">
            <p><?php echo $banner['phrase']; ?></p>
        </div>

        <?php endif; ?>


        <?php
        $root = get_field('root');
        if ($root): ?>
        <div class="about-background"
             style="background-image:url('<?php bloginfo("template_directory"); ?>/img/aboutBackground.png')">
            <div class="row">
                <div class="content">

                    <h3><?php echo $root['title']; ?></h3>
                    <p><?php echo $root['content']; ?></p>
                </div>
                <img class="image" src="<?php echo esc_url($root['image']['url']); ?>"/>
            </div>
            <div class="row flex-reverse">
                <div class="content">

                    <p><?php echo $root['content2']; ?></p>
                    
                    <h3><?php echo $root['title2']; ?></h3>
                </div>
                <img class="image" src="<?php echo esc_url($root['image2']['url']); ?>"/>
            </div>
        </div>

        <?php endif; ?>

<!-- --------------------------------------------------------------------------------------------------------------- -->

        <?php
        $achieve = get_field('achieve');
        if ($achieve): ?>
        <div class="about-second-banner"
             style="background-image:url('<?php echo esc_url($achieve['image']['url']); ?>')">
            <div class="about-second-bannerContent">
                <h3><?php echo $achieve['title']; ?></h3>
                <p><?php echo $achieve['text']; ?></p>
                </div>
        </div>

        <?php endif; ?>

        <?php
        $truth = get_field('truth');
        if ($truth): ?>
        <div class="last-block-wrapper">
            <div class="last-block">
                <img src="<?php echo esc_url($truth['logo']['url']); ?>">
                <h2><?php echo $truth['title']; ?></h2>
                <p><?php echo $truth['text']; ?></p>
            </div>
        </div>
        <?php endif; ?>

    </main><!-- #main -->
<?php
get_footer();